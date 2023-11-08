<?php
session_start();

include_once '../connection.php'; // Correct the include statement

// Function to check if the provided CIN is unique for section_a_form (replace with your database logic)
function isCINUnique_sec_A($cin, $pdo) {
    $query = $pdo->prepare("SELECT COUNT(*) FROM section_a_form WHERE cin = :cin");
    $query->bindParam(':cin', $cin, PDO::PARAM_STR);
    $query->execute();

    $count = $query->fetchColumn();

    return $count === 0;
}

// Function to check if the provided CIN is unique for section_b_form (replace with your database logic)
function isCINUnique_sec_B($cin, $pdo) {
    $query = $pdo->prepare("SELECT COUNT(*) FROM section_b_form WHERE cin = :cin");
    $query->bindParam(':cin', $cin, PDO::PARAM_STR);
    $query->execute();

    $count = $query->fetchColumn();

    return $count === 0;
}

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    // Check if CIN is set in the session
    if (isset($_SESSION['cin'])) {
        $cin = $_SESSION['cin'];
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $response = [];
        $response['status'] = 'failure'; // Default status

        if (!isCINUnique_sec_A($cin, $pdo)) {
            if (isCINUnique_sec_B($cin, $pdo)) {
                $policyQuestion = $_POST["policyQuestion"];
                $policyLink = $_POST["policyLink"];
                $procedureQuestion = $_POST["procedureQuestion"];
                $procedureLink = $_POST["procedureLink"];
                $valueChainQuestion = $_POST["valueChainQuestion"];
                $valueChainLink = $_POST["valueChainLink"];
                $standardsQuestion = $_POST["standardsQuestion"];
                $commitmentsQuestion = $_POST["commitmentsQuestion"];
                $performanceQuestion = $_POST["performanceQuestion"];
                $directorStatement = $_POST["directorStatement"];
                $authorityDetails = $_POST["authorityDetails"];
                $sustainabilityCommitteeQuestion = $_POST["sustainabilityCommitteeQuestion"];
                $committeeDetails = $_POST["committeeDetails"];
                $assessmentQuestion = $_POST["assessmentQuestion"];
                $agencyDetails = $_POST["agencyDetails"];
                $achievementsFilePath = null;

                if (isset($_FILES['uploadedFiles']) && is_array($_FILES['uploadedFiles']['error'])) {
                    $uploadDir = '../uploads/sec_B/';
                    if (!file_exists($uploadDir)) {
                        mkdir($uploadDir, 0777, true);
                    }
                    $uploadedPaths = [];
                    $totalFiles = count($_FILES['uploadedFiles']['name']);

                    for ($i = 0; $i < $totalFiles; $i++) {
                        if ($_FILES['uploadedFiles']['error'][$i] === 0) {
                            $uniqueFilename = uniqid() . '_' . $_FILES['uploadedFiles']['name'][$i];
                            $uploadFilePath = $uploadDir . $uniqueFilename;

                            if (move_uploaded_file($_FILES['uploadedFiles']['tmp_name'][$i], $uploadFilePath)) {
                                $uploadedPaths[] = $uploadFilePath;
                            } else {
                                $_SESSION['error'] = "Error uploading file: " . $_FILES['uploadedFiles']['name'][$i];
                                break;
                            }
                        } else {
                            $_SESSION['error'] = "Error with file: " . $_FILES['uploadedFiles']['name'][$i];
                            break;
                        }
                    }

                    $achievementsFilePath = implode(";", $uploadedPaths);
                } else {
                    $_SESSION['error'] = "No files were uploaded or there was an error.";
                }

                $stmt = $pdo->prepare("
                    INSERT INTO section_b_form (cin,
                        policyQuestion, policyLink, procedureQuestion, procedureLink, 
                        valueChainQuestion, valueChainLink, standardsQuestion, commitmentsQuestion,
                        performanceQuestion, directorStatement, achievementsFile, authorityDetails, 
                        sustainabilityCommitteeQuestion, committeeDetails, assessmentQuestion, agencyDetails
                    ) VALUES (
                        ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
                    )
                ");

                $stmt->execute([$cin,
                    $policyQuestion, $policyLink, $procedureQuestion, $procedureLink, 
                    $valueChainQuestion, $valueChainLink, $standardsQuestion, $commitmentsQuestion,
                    $performanceQuestion, $directorStatement, $achievementsFilePath, $authorityDetails, 
                    $sustainabilityCommitteeQuestion, $committeeDetails, $assessmentQuestion, $agencyDetails
                ]);

                $response['status'] = 'success';
                $response['message'] = 'Section B: Form submitted successfully';
            } else {
                $response['status'] = 'failure1';
                $response['message'] = 'Section B: CIN already exists';
            }
        } else {
            $response['status'] = 'failure2';
            $response['message'] = 'Fill section A form.';
        }
    }

    // Send a JSON response to the frontend
    header('Content-Type: application/json');
    echo json_encode($response);
    } catch (PDOException $e) {
        $_SESSION['error'] = "Database error: " . $e->getMessage();
        $response['status'] = 'error';
        $response['message'] = 'Database error: ' . $e->getMessage();
    }
?>