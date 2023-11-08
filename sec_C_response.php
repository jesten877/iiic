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

function isCINUnique_sec_C($cin, $pdo) {
    $query = $pdo->prepare("SELECT COUNT(*) FROM section_c_form WHERE cin = :cin");
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
            if (!isCINUnique_sec_B($cin, $pdo)) {
                if (isCINUnique_sec_C($cin, $pdo)) {
                    // Principle 1
                    $coverage = $_POST["coverage"];
                    $details = $_POST["details"];
                    $appeal = $_POST["appeal"];
                    $antiCorruptionPolicy = $_POST["antiCorruptionPolicy"];
                    $disciplinaryAction = $_POST["disciplinaryAction"];
                    $conflictComplaints = $_POST["conflictComplaints"];
                    $correctiveAction = $_POST["correctiveAction"];
                    $awarenessProgrammes = $_POST["awarenessProgrammes"];
                    $conflictOfInterest = $_POST["conflictOfInterest"];
                    $conflictDetails = $_POST["conflictDetails"];
                    
                    // Principle 2
                    $rdPercentage = $_POST["rdPercentage"];
                    $sustainableSourcing2 = $_POST["sustainableSourcing2"];
                    $sourcingPercentage2num = $_POST["sourcingPercentage2num"];
                    $reclaimProcesses2 = $_POST["reclaimProcesses2"];
                    $eprApplicable = $_POST["eprApplicable"];
                    $eprCollectionPlan = $_POST["eprCollectionPlan"];
                    $lcaConducted2 = $_POST["lcaConducted2"];
                    $lcaDetails = $_POST["lcaDetails"];
                    $concernsMitigation2 = $_POST["concernsMitigation2"];
                    $recycledPercentage2 = $_POST["recycledPercentage2"];
                    $reclaimedProducts2 = $_POST["reclaimedProducts2"];
                    $reclaimedPercentages2 = $_POST["reclaimedPercentages2"];

                    // Principle 3
                    $employeeWellbeingDetails = $_POST["employeeWellbeingDetails"];
                    $retirementBenefitsDetails = $_POST["retirementBenefitsDetails"];
                    $accessibilityChoice = $_POST["accessibilityChoice"];
                    $accessibilitySteps = $_POST["accessibilitySteps"];
                    $equalOpportunity = $_POST["equalOpportunity"];
                    $equalOpportunityLink = $_POST["equalOpportunityLink"];
                    $returnRetentionRates = $_POST["returnRetentionRates"];
                    $grievanceMechanismDetails = $_POST["grievanceMechanismDetails"];
                    $unionMembershipPercentage = $_POST["unionMembershipPercentage"];
                    $trainingDetails = $_POST["trainingDetails"];
                    $performanceReviewDetails = $_POST["performanceReviewDetails"];
                    $healthSafetyManagementSystemChoice = $_POST["healthSafetyManagementSystemChoice"];
                    $healthSafetyManagementSystemDetails = $_POST["healthSafetyManagementSystemDetails"];
                    $workplaceSafetyMeasures = $_POST["workplaceSafetyMeasures"];
                    $lifeInsuranceCompensation = $_POST["lifeInsuranceCompensation"];
                    $statutoryDuesMeasures = $_POST["statutoryDuesMeasures"];
                    $workRelatedInjuryRehabilitation = $_POST["workRelatedInjuryRehabilitation"];
                    $transitionAssistanceProgram = $_POST["transitionAssistanceProgram"];

                    // Principle 4
                    $stakeholderIdentificationDetails = $_POST["stakeholderIdentificationDetails"];
                    $stakeholderEngagementDetails = $_POST["stakeholderEngagementDetails"];
                    $boardConsultationDetails = $_POST["boardConsultationDetails"];
                    $stakeholderConsultationPolicy = $_POST["stakeholderConsultationPolicy"];
                    $sourcingPercentage = $_POST["sourcingPercentage"];
                    $vulnerableEngagementDetails = $_POST["vulnerableEngagementDetails"];
                    $productEndOfLifeDetails = $_POST["productEndOfLifeDetails"];
                    $reclaimedProductPercentageDetails = $_POST["reclaimedProductPercentageDetails"];

                    // Principle 5
                    $humanRightsTrainingDetails = $_POST['humanRightsTrainingDetails'];
                    $wageDetails = $_POST['wageDetails'];
                    $remunerationDetails = $_POST['remunerationDetails'];
                    $humanRightsResponsible = $_POST['humanRightsResponsible'];
                    $grievanceMechanism = $_POST['grievanceMechanism'];
                    $complaintsDetails = $_POST['complaintsDetails'];
                    $discriminationProtectionMechanisms = $_POST['discriminationProtectionMechanisms'];
                    $humanRightsInBusiness = $_POST['humanRightsInBusiness'];
                    $assessedPlantPercentage = $_POST['assessedPlantPercentage'];
                    $correctiveActionsForAssessments = $_POST['correctiveActionsForAssessments'];
                    $businessProcessModifications = $_POST['businessProcessModifications'];
                    $humanRightsDueDiligence = $_POST['humanRightsDueDiligence'];
                    $premiseAccessibility = $_POST['premiseAccessibility'];
                    $valueChainAssessment = $_POST['valueChainAssessment'];
                    $correctiveActionsFromAssessments = $_POST['correctiveActionsFromAssessments'];

                    // Principle 6
                    $energyConsumptionDetails = $_POST['energyConsumptionDetails'];
                    $energyExternalAgency = $_POST['energyExternalAgency'];
                    $energyExternalAgencyName = $_POST['energyExternalAgencyName'];
                    $designatedConsumers = $_POST['designatedConsumers'];
                    $designatedConsumersDetails = $_POST['designatedConsumersDetails'];
                    $waterWithdrawalDetails = $_POST['waterWithdrawalDetails'];
                    $waterExternalAgency = $_POST['waterExternalAgency'];
                    $waterExternalAgencyName = $_POST['waterExternalAgencyName'];
                    $liquidDischarge = $_POST['liquidDischarge'];
                    $liquidDischargeDetails = $_POST['liquidDischargeDetails'];
                    $airEmissionDetails = $_POST['airEmissionDetails'];
                    $airExternalAgency = $_POST['airExternalAgency'];
                    $airExternalAgencyName = $_POST['airExternalAgencyName'];
                    $greenhouseGasEmissionDetails = $_POST['greenhouseGasEmissionDetails'];
                    $ghgExternalAgency = $_POST['ghgExternalAgency'];
                    $ghgExternalAgencyName = $_POST['ghgExternalAgencyName'];
                    $ghgReductionProject = $_POST['ghgReductionProject'];
                    $ghgReductionProjectDetails = $_POST['ghgReductionProjectDetails'];
                    $wasteDetails = $_POST['wasteDetails'];
                    $wasteExternalAgency = $_POST['wasteExternalAgency'];
                    $wasteExternalAgencyName = $_POST['wasteExternalAgencyName'];
                    $wasteManagementPractices = $_POST['wasteManagementPractices'];
                    $ecologicalAreaOperations = $_POST['ecologicalAreaOperations'];
                    $ecologicalAreaOperationsDetails = $_POST['ecologicalAreaOperationsDetails'];
                    $environmentalImpactAssessmentDetails = $_POST['environmentalImpactAssessmentDetails'];
                    $eiaExternalAgency = $_POST['eiaExternalAgency'];
                    $eiaExternalAgencyName = $_POST['eiaExternalAgencyName'];
                    $eiaPublicDomain = $_POST['eiaPublicDomain'];
                    $eiaPublicDomainLink = $_POST['eiaPublicDomainLink'];
                    $environmentalComplianceStatus = $_POST['environmentalComplianceStatus'];
                    $environmentalComplianceStatusDetails = $_POST['environmentalComplianceStatusDetails'];

                    // Principle 7
                    $tradeAffiliations = $_POST['tradeAffiliations'];
                    $antiCompetitiveActions = $_POST['antiCompetitiveActions'];
                    $antiCompetitiveActionsDetails = $_POST['antiCompetitiveActionsDetails'];
                    $publicPolicyAdvocacy = $_POST['publicPolicyAdvocacy'];

                    // Principle 8
                    $socialImpactAssessments = $_POST['socialImpactAssessments'];
                    $rehabilitationProjects = $_POST['rehabilitationProjects'];
                    $grievanceRedressMechanism = $_POST['grievanceRedressMechanism'];
                    $inputMaterialPercentage = $_POST['inputMaterialPercentage'];
                    $socialImpactActions = $_POST['socialImpactActions'];
                    $csrAspirationalDistricts = $_POST['csrAspirationalDistricts'];
                    $procurementPolicyMarginalized = $_POST['procurementPolicyMarginalized'];
                    $intellectualPropertiesBenefits = $_POST['intellectualPropertiesBenefits'];
                    $correctiveActionsIntellectualProperty = $_POST['correctiveActionsIntellectualProperty'];
                    $csrProjectBeneficiaries = $_POST['csrProjectBeneficiaries'];

                    // Principle 9
                    $consumerFeedbackMechanism = $_POST['consumerFeedbackMechanism'];
                    $productTurnover = $_POST['productTurnover'];
                    $consumerComplaints = $_POST['consumerComplaints'];
                    $productRecallInstances = $_POST['productRecallInstances'];
                    $cyberSecurityPolicy = $_POST['cyberSecurityPolicy'];
                    $cyberSecurityPolicyDetails = $_POST['cyberSecurityPolicyDetails'];
                    $correctiveActions = $_POST['correctiveActions'];
                    $infoChannels = $_POST['infoChannels'];
                    $consumerEducation = $_POST['consumerEducation'];
                    $serviceDisruptionInfo = $_POST['serviceDisruptionInfo'];
                    $productInfoDisplay = $_POST['productInfoDisplay'];
                    $productInfoDisplayDetails = $_POST['productInfoDisplayDetails'];
                    $surveyInfo = $_POST['surveyInfo'];
                    $surveyInfoDetails = $_POST['surveyInfoDetails'];
                    $dataBreachesInfo = $_POST['dataBreachesInfo'];

                    $data = [
                        'cin' => $cin,
                        '1_1_coverage' => $coverage,
                        '1_2_details' => $details,
                        '1_3_appeal' => $appeal,
                        '1_4_antiCorruptionPolicy' => $antiCorruptionPolicy,
                        '1_5_disciplinaryAction' => $disciplinaryAction,
                        '1_6_conflictComplaints' => $conflictComplaints,
                        '1_7_correctiveAction' => $correctiveAction,
                        '1_8_awarenessProgrammes' => $awarenessProgrammes,
                        '1_9_conflictOfInterest' => $conflictOfInterest,
                        '1_10_conflictDetails' => $conflictDetails,
                        '2_1_rdPercentage' => $rdPercentage,
                        '2_2_sustainableSourcing2' => $sustainableSourcing2,
                        '2_3_sourcingPercentage2num' => $sourcingPercentage2num,
                        '2_4_reclaimProcesses2' => $reclaimProcesses2,
                        '2_5_eprApplicable' => $eprApplicable,
                        '2_6_eprCollectionPlan' => $eprCollectionPlan,
                        '2_7_lcaConducted2' => $lcaConducted2,
                        '2_8_lcaDetails' => $lcaDetails,
                        '2_9_concernsMitigation2' => $concernsMitigation2,
                        '2_10_recycledPercentage2' => $recycledPercentage2,
                        '2_11_reclaimedProducts2' => $reclaimedProducts2,
                        '2_12_reclaimedPercentages2' => $reclaimedPercentages2,
                        '3_1_employeeWellbeingDetails' => $employeeWellbeingDetails,
                        '3_2_retirementBenefitsDetails' => $retirementBenefitsDetails,
                        '3_3_accessibilityChoice' => $accessibilityChoice,
                        '3_4_accessibilitySteps' => $accessibilitySteps,
                        '3_5_equalOpportunity' => $equalOpportunity,
                        '3_6_equalOpportunityLink' => $equalOpportunityLink,
                        '3_7_returnRetentionRates' => $returnRetentionRates,
                        '3_8_grievanceMechanismDetails' => $grievanceMechanismDetails,
                        '3_9_unionMembershipPercentage' => $unionMembershipPercentage,
                        '3_10_trainingDetails' => $trainingDetails,
                        '3_11_performanceReviewDetails' => $performanceReviewDetails,
                        '3_12_healthSafetyManagementSystemChoice' => $healthSafetyManagementSystemChoice,
                        '3_13_healthSafetyManagementSystemDetails' => $healthSafetyManagementSystemDetails,
                        '3_14_workplaceSafetyMeasures' => $workplaceSafetyMeasures,
                        '3_15_lifeInsuranceCompensation' => $lifeInsuranceCompensation,
                        '3_16_statutoryDuesMeasures' => $statutoryDuesMeasures,
                        '3_17_workRelatedInjuryRehabilitation' => $workRelatedInjuryRehabilitation,
                        '3_18_transitionAssistanceProgram' => $transitionAssistanceProgram,
                        '4_1_stakeholderIdentificationDetails' => $stakeholderIdentificationDetails,
                        '4_2_stakeholderEngagementDetails' => $stakeholderEngagementDetails,
                        '4_3_boardConsultationDetails' => $boardConsultationDetails,
                        '4_4_stakeholderConsultationPolicy' => $stakeholderConsultationPolicy,
                        '4_5_sourcingPercentage' => $sourcingPercentage,
                        '4_6_vulnerableEngagementDetails' => $vulnerableEngagementDetails,
                        '4_7_productEndOfLifeDetails' => $productEndOfLifeDetails,
                        '4_8_reclaimedProductPercentageDetails' => $reclaimedProductPercentageDetails,
                        '5_1_humanRightsTrainingDetails' => $humanRightsTrainingDetails,
                        '5_2_wageDetails' => $wageDetails,
                        '5_3_remunerationDetails' => $remunerationDetails,
                        '5_4_humanRightsResponsible' => $humanRightsResponsible,
                        '5_5_grievanceMechanism' => $grievanceMechanism,
                        '5_6_complaintsDetails' => $complaintsDetails,
                        '5_7_discriminationProtectionMechanisms' => $discriminationProtectionMechanisms,
                        '5_8_humanRightsInBusiness' => $humanRightsInBusiness,
                        '5_9_assessedPlantPercentage' => $assessedPlantPercentage,
                        '5_10_correctiveActionsForAssessments' => $correctiveActionsForAssessments,
                        '5_11_businessProcessModifications' => $businessProcessModifications,
                        '5_12_humanRightsDueDiligence' => $humanRightsDueDiligence,
                        '5_13_premiseAccessibility' => $premiseAccessibility,
                        '5_14_valueChainAssessment' => $valueChainAssessment,
                        '5_15_correctiveActionsFromAssessments' => $correctiveActionsFromAssessments,
                        '6_1_energyConsumptionDetails' => $energyConsumptionDetails,
                        '6_2_energyExternalAgency' => $energyExternalAgency,
                        '6_3_energyExternalAgencyName' => $energyExternalAgencyName,
                        '6_4_designatedConsumers' => $designatedConsumers,
                        '6_5_designatedConsumersDetails' => $designatedConsumersDetails,
                        '6_6_waterWithdrawalDetails' => $waterWithdrawalDetails,
                        '6_7_waterExternalAgency' => $waterExternalAgency,
                        '6_8_waterExternalAgencyName' => $waterExternalAgencyName,
                        '6_9_liquidDischarge' => $liquidDischarge,
                        '6_10_liquidDischargeDetails' => $liquidDischargeDetails,
                        '6_11_airEmissionDetails' => $airEmissionDetails,
                        '6_12_airExternalAgency' => $airExternalAgency,
                        '6_13_airExternalAgencyName' => $airExternalAgencyName,
                        '6_14_greenhouseGasEmissionDetails' => $greenhouseGasEmissionDetails,
                        '6_15_ghgExternalAgency' => $ghgExternalAgency,
                        '6_16_ghgExternalAgencyName' => $ghgExternalAgencyName,
                        '6_17_ghgReductionProject' => $ghgReductionProject,
                        '6_18_ghgReductionProjectDetails' => $ghgReductionProjectDetails,
                        '6_19_wasteDetails' => $wasteDetails,
                        '6_20_wasteExternalAgency' => $wasteExternalAgency,
                        '6_21_wasteExternalAgencyName' => $wasteExternalAgencyName,
                        '6_22_wasteManagementPractices' => $wasteManagementPractices,
                        '6_23_ecologicalAreaOperations' => $ecologicalAreaOperations,
                        '6_24_ecologicalAreaOperationsDetails' => $ecologicalAreaOperationsDetails,
                        '6_25_environmentalImpactAssessmentDetails' => $environmentalImpactAssessmentDetails,
                        '6_26_eiaExternalAgency' => $eiaExternalAgency,
                        '6_27_eiaExternalAgencyName' => $eiaExternalAgencyName,
                        '6_28_eiaPublicDomain' => $eiaPublicDomain,
                        '6_29_eiaPublicDomainLink' => $eiaPublicDomainLink,
                        '6_30_environmentalComplianceStatus' => $environmentalComplianceStatus,
                        '6_31_environmentalComplianceStatusDetails' => $environmentalComplianceStatusDetails,
                        '7_1_tradeAffiliations' => $tradeAffiliations,
                        '7_2_antiCompetitiveActions' => $antiCompetitiveActions,
                        '7_3_antiCompetitiveActionsDetails' => $antiCompetitiveActionsDetails,
                        '7_4_publicPolicyAdvocacy' => $publicPolicyAdvocacy,
                        '8_1_socialImpactAssessments' => $socialImpactAssessments,
                        '8_2_rehabilitationProjects' => $rehabilitationProjects,
                        '8_3_grievanceRedressMechanism' => $grievanceRedressMechanism,
                        '8_4_inputMaterialPercentage' => $inputMaterialPercentage,
                        '8_5_socialImpactActions' => $socialImpactActions,
                        '8_6_csrAspirationalDistricts' => $csrAspirationalDistricts,
                        '8_7_procurementPolicyMarginalized' => $procurementPolicyMarginalized,
                        '8_8_intellectualPropertiesBenefits' => $intellectualPropertiesBenefits,
                        '8_9_correctiveActionsIntellectualProperty' => $correctiveActionsIntellectualProperty,
                        '8_10_csrProjectBeneficiaries' => $csrProjectBeneficiaries,
                        '9_1_consumerFeedbackMechanism' => $consumerFeedbackMechanism,
                        '9_2_productTurnover' => $productTurnover,
                        '9_3_consumerComplaints' => $consumerComplaints,
                        '9_4_productRecallInstances' => $productRecallInstances,
                        '9_5_cyberSecurityPolicy' => $cyberSecurityPolicy,
                        '9_5_1_cyberSecurityPolicyDetails' => $cyberSecurityPolicyDetails,
                        '9_6_correctiveActions' => $correctiveActions,
                        '9_7_infoChannels' => $infoChannels,
                        '9_8_consumerEducation' => $consumerEducation,
                        '9_9_serviceDisruptionInfo' => $serviceDisruptionInfo,
                        '9_10_productInfoDisplay' => $productInfoDisplay,
                        '9_10_1_productInfoDisplayDetails' => $productInfoDisplayDetails,
                        '9_11_surveyInfo' => $surveyInfo,
                        '9_11_1_surveyInfoDetails' => $surveyInfoDetails,
                        '9_12_dataBreachesInfo' => $dataBreachesInfo
                    ];

                    $columns = implode(', ', array_keys($data));
                    $placeholders = implode(', ', array_fill(0, count($data), '?'));

                    $sql = "INSERT INTO section_c_form ($columns) VALUES ($placeholders)";

                    $stmt = $pdo->prepare($sql);

                    $stmt->execute(array_values($data));

                    $response['status'] = 'success';
                    $response['message'] = 'Section C: Form submitted successfully';
                } else {
                    $response['status'] = 'failure1';
                    $response['message'] = 'Section C: CIN already exists';
                }
            } else {
                $response['status'] = 'failure2';
                $response['message'] = 'Fill section B form.';
            }
        } else {
            $response['status'] = 'failure3';
            $response['message'] = 'Fill section A form.';
        }
    }
} catch (PDOException $e) {
    $_SESSION['error'] = "Database error: " . $e->getMessage();
    $response['status'] = 'error';
    $response['message'] = 'Database error: ' . $e->getMessage();
}
header('Content-Type: application/json');
echo json_encode($response);
?>