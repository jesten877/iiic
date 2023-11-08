<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/jpg" href="../images/cusrrs.jpg"> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entity NGRBC Policy Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="sec_B.css">
    <style>
        .hidden {
            display: none;
        }
        /* Add this CSS */
        @media screen and (max-width: 800px) {
            #cinDiv {
                display: none;
            }
        }
    </style>
</head>

<?php
    session_start(); // Start the session to access session variables
    // Check if CIN is set in the session
    if (isset($_SESSION['cin'])) 
        $cin = $_SESSION['cin'];
?>
<body>
    <header class="header">
        <h1 class="logo"><a href="#">CUSRS</a></h1>
        <div style="padding-left:20%;" id="cinDiv">
        <?php
        // Display the CIN if it's set
        if (!empty($cin)) {
            echo '<div class="form-label" style="float:center; margin-top:1%"><h4>CIN: ' . $cin . '</h4></div>';
        }
        ?>
    </div>

        <ul class="main-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </header>

    <div class="container">
        <form method="post"  id="myForm" action="" enctype="multipart/form-data" novalidate>
            <h1>Section B form</h1>
            <div class="mb-3">
                <div class="policy">
                    <label for="policyQuestion" class="form-label">1. Whether your entity’s policy/policies cover each principle & core elements of National Guidelines on responsible Business conduct (NGRBC):</label>
                </div>
                <select class="form-select" id="policyQuestion" name="policyQuestion">
                    <option value="">Select an option</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>

            <div class="mb-3 hidden" id="policyLinkContainer">
                <div class="policy">
                    <label for="policyLink" class="form-label">If Web link available, provide the same:</label>
                </div>
                <input type="text" class="form-control" id="policyLink" name="policyLink">
            </div>

            <div class="mb-3">
                <div class="policy">
                    <label for="procedureQuestion" class="form-label"><span style="color: red;"> * </span>2. Whether the entity has translated the policy into procedures:</label>
                </div>
                <select class="form-select" id="procedureQuestion" name="procedureQuestion" required>
                    <option value="">Select an option</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>

            <div class="mb-3 hidden" id="procedureLinkContainer">
                <div class="policy">
                    <label for="procedureLink" class="form-label">If Web link available, provide the same:</label>
                </div>
                <input type="text" class="form-control" id="procedureLink" name="procedureLink">
            </div>

            <div class="mb-3">
                <div class="policy">
                    <label for="valueChainQuestion" class="form-label"><span style="color: red;"> * </span>3. Do the enlisted policies extend to your value chain partners?:</label>
                </div>
                <select class="form-select" id="valueChainQuestion" name="valueChainQuestion" required>
                    <option value="">Select an option</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>

            <div class="mb-3 hidden" id="valueChainLinkContainer">
                <div class="policy">
                    <label for="valueChainLink" class="form-label">If Web link available, provide the same:</label>
                </div>
                <input type="text" class="form-control" id="valueChainLink" name="valueChainLink">
            </div>

            <div class="mb-3">
                <div class="policy">
                    <label for="standardsQuestion" class="form-label">4. Name of the national & international codes/certifications/labels/standards adopted by your entity & mapped to each principle:</label>
                </div>
                <textarea class="form-control" id="standardsQuestion" name="standardsQuestion" rows="4" ></textarea>
            </div>

            <div class="mb-3">
                <div class="policy">
                    <label for="commitmentsQuestion" class="form-label">5. Specific commitments, goals & targets set by the entity with defined timelines, if any:</label>
                </div>
                <textarea class="form-control" id="commitmentsQuestion" name="commitmentsQuestion" rows="4" ></textarea>
            </div>

            <div class="mb-3">
                <div class="policy">
                    <label for="performanceQuestion" class="form-label"><span style="color: red;"> * </span>6. Performance of the entity against the specific commitments, goals & targets along with reasons in case the same are not met:</label>
                </div>
                <textarea class="form-control" id="performanceQuestion" name="performanceQuestion" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <div class="policy">
                    <label for="directorStatement" class="form-label"><span style="color: red;"> * </span>7. Statement by director responsible for the business responsibility report, highlighting ESG related challenges, targets & achievements:</label>
                </div>
                <textarea class="form-control" id="directorStatement" name="directorStatement" rows="4" required></textarea>
            </div>
            <!--PDF UPLOAD-->
            <div class="mb-3">
                <div class="policy">
                    <label for="achievementsQuestion" class="form-label"><span style="color: red;"> * </span>8. Please provide your Achievements as a PDF file (Max 5 MB)</label>
                </div>
                <input type="file" id="file" name="uploadedFiles[]" accept=".pdf" required multiple>
                <br>
                <div id="file-error" style="color: red;"></div> <!-- Error message will be displayed here -->
            </div>
            <!--END PDF UPLOAD-->

            <div class="mb-3">
                <div class="policy">
                    <label for="authorityDetails" class="form-label"><span style="color: red;"> * </span>9. Details of the highest authority responsible for implementation & oversight of the Business Responsibility policy:</label>
                </div>
                <textarea class="form-control" id="authorityDetails" name="authorityDetails" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <div class="policy">
                    <label for="sustainabilityCommitteeQuestion" class="form-label"><span style="color: red;"> * </span>10. Does the entity have a specified Committee of the Board/Director responsible for decision-making on sustainability-related issues?</label>
                </div>
                <select class="form-select" id="sustainabilityCommitteeQuestion" name="sustainabilityCommitteeQuestion" required>
                    <option value="">Select an option</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>

            <div class="mb-3 hidden" id="committeeDetailsContainer">
                <div class="policy">
                    <label for="committeeDetails" class="form-label">If yes, provide details:</label>
                </div>
                <textarea class="form-control" id="committeeDetails" name="committeeDetails" rows="4"></textarea>
            </div>

            <div class="mb-3">
                <div class="policy">
                    <label for="assessmentQuestion" class="form-label">11. Has the entity carried out independent assessment/evaluation of the working of its policies by an external agency?</label>
                </div>
                <select class="form-select" id="assessmentQuestion" name="assessmentQuestion" >
                    <option value="">Select an option</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>

            <div class="mb-3 hidden" id="agencyDetailsContainer">
                <div class="policy">
                    <label for="agencyDetails" class="form-label">If yes, provide agency details:</label>
                </div>
                <textarea class="form-control" id="agencyDetails" name="agencyDetails" rows="4"></textarea>
            </div>

            <button type="submit" class="btn-primary" id="submit">Submit</button>
        </form>
    </div>

    <script src="sec_B.js"></script>
    <script src="sec_B_form_submit_validation.js"></script>

    <!-- Footer Section -->
    <footer class="footer">
      <div class="row">
        <div class="column">
          <h4>About Us</h4>
          <p> Christ University Sustainable development and Research group</p>
        </div>
        <div class="column">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="#"><i class="fa fa-angle-right"></i> Sustainable Goals</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Contact us</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> About us</a></li>
          </ul>
        </div>
        <div class="column">
          <h4>Connect with Us</h4>
          <ul class="social-icons">
            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
          </ul>
        </div>
      </div>
      <p class="copyright">© 2023 All Rights Reserved</p>
    </footer>
</body>
</html>