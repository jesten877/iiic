<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/jpg" href="../images/cusrrs.jpg"> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entity NGRBC Policy Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="sec_C.css">
    <style>
        .hidden {
            display: none;
        }
        @media screen and (max-width: 800px) {
            #cinDiv {
                display: none;
            }
        }
    </style>
</head>

<?php
    session_start();
    if (isset($_SESSION['cin'])) 
        $cin = $_SESSION['cin'];
?>
<body>
    <header class="header">
        <h1 class="logo"><a href="#">CUSRS</a></h1>
        <div style="padding-left:20%;" id="cinDiv">
            <?php
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
            <h1>Section C form</h1>
            
            <!--Principle 1-->
            <div id="prin1" class="prin-div" style="display:block;">
                <div class="policy">
                    <h3>PRINCIPLE 1: BUSINESSES SHOULD CONDUCT & GOVERN THEMSELVES WITH INTEGRITY, & IN A MANNER THAT IS ETHICAL, TRANSPARENT & ACCOUNTABLE.</h3>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="coverage" class="form-label"><span style="color: red;"> * </span>1. Percentage coverage by training & awareness programmes on any of the Principles during the financial year of KMP/BOD/ Employees other than BOD & KMPs, Workers:</label>
                    </div>
                    <input type="number" class="form-control" id="coverage" name="coverage" placeholder="Enter percentage coverage" required>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="details" class="form-label"><span style="color: red;"> * </span>2. Details of fines / penalties /punishment/ award/ compounding fees/ settlement amount paid in proceedings (by the entity or by directors / KMPs) with regulators/ law enforcement agencies/ judicial institutions, in the financial year:</label>
                    </div>
                    <textarea class="form-control" id="details" name="details" placeholder="Enter details of fines/penalties/punishment" required></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="appeal" class="form-label">3. Of the instances disclosed in Question 2 above, details of the Appeal/ Revision preferred in cases where monetary or non-monetary action has been appealed:</label>
                    </div>
                    <textarea class="form-control" id="appeal" name="appeal" placeholder="Enter details of appeal/revision"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="antiCorruptionPolicy" class="form-label">4. Does the entity have an anti-corruption or anti-bribery policy? If yes, provide details in brief & if available, provide a web-link to the policy:</label>
                    </div>
                    <textarea class="form-control" id="antiCorruptionPolicy" name="antiCorruptionPolicy" placeholder="Enter anti-corruption/anti-bribery policy details"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="disciplinaryAction" class="form-label"><span style="color: red;"> * </span>5. Number of Directors/KMPs/employees/workers against whom disciplinary action was taken by any law enforcement agency for the charges of bribery/ corruption:</label>
                    </div>
                    <input type="number" class="form-control" id="disciplinaryAction" name="disciplinaryAction" placeholder="Enter number of persons" required>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="conflictComplaints" class="form-label">6. Details of complaints with regard to conflict of interest:</label>
                    </div>
                    <textarea class="form-control" id="conflictComplaints" name="conflictComplaints" placeholder="Enter conflict of interest complaints details"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="correctiveAction" class="form-label">7. Provide details of any corrective action taken or underway on issues related to fines / penalties / action taken by regulators/ law enforcement agencies/ judicial institutions, on cases of corruption & conflicts of interest:</label>
                    </div>
                    <textarea class="form-control" id="correctiveAction" name="correctiveAction" placeholder="Enter corrective action details"></textarea>
                </div>
                <div class="policy">
                    <h3>LEADERSHIP INDICATORS – IMPORTANCE TO INVESTORS</h3>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="awarenessProgrammes" class="form-label"><span style="color: red;"> * </span>1. Awareness programmes conducted for value chain partners on any of the Principles during the financial year:</label>
                    </div>
                    <textarea class="form-control" id="awarenessProgrammes" name="awarenessProgrammes" placeholder="Enter awareness programmes details" required></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="conflictOfInterest" class="form-label"><span style="color: red;"> * </span>2. Does the entity have processes in place to avoid/manage conflict of interests involving members of the Board?(Yes/No). If yes, provide details of the same:</label>
                    </div>
                    <select class="form-select" id="conflictOfInterest" name="conflictOfInterest" required>
                        <option value="">Select an option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div class="mb-3 hidden" id="conflictDetails">
                    <div class="policy">
                        <label for="conflictDetails" class="form-label">Enter conflict of interest details:</label>
                    </div>
                    <textarea class="form-control" id="conflictDetails" name="conflictDetails"></textarea>
                </div>
                <button type="button" class="btn-primary" onclick="navigate(1)">Next</button>
            </div>

            <!--Principle 2-->
            <div id="prin2" class="prin-div">
                <div class="policy">
                    <h3>PRINCIPLE 2: BUSINESSES SHOULD RESPECT THE INTERESTS OF & BE RESPONSIVE TO ALL THEIR STAKEHOLDERS.</h3>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="rdPercentage" class="form-label"><span style="color: red;"> * </span>1. Percentage of R&D & capital expenditure (capex) investments in specific technologies to improve the environmental & social impacts of product & processes to total R&D & capex investments made by the entity in current & previous FY:</label>
                    </div>
                    <input type="number" id="rdPercentage" name="rdPercentage" class="form-control" placeholder="Enter percentage" required>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="sustainableSourcing2" class="form-label"><span style="color: red;"> * </span>2. Does the entity have procedures in place for sustainable sourcing? (Yes/No). If yes, specify the percentage:</label>
                    </div>
                    <select class="form-select" id="sustainableSourcing2" name="sustainableSourcing2" required>
                        <option value="">Select an option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div class="mb-3 hidden" id="sourcingPercentage2num">
                    <div class="policy">
                        <label for="sourcingPercentage2num" class="form-label">Specify the percentage of sustainable sourcing:</label>
                    </div>
                    <input type="number" id="sourcingPercentage2num" name="sourcingPercentage2num" class="form-control" placeholder="Enter percentage">
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="reclaimProcesses2" class="form-label"><span style="color: red;"> * </span>3. Describe the processes in place to safely reclaim your products for reusing, recycling & disposing at the end of life, for (a) Plastics (including packaging) (b) E-waste (c) Hazardous waste & (d) Other waste:</label>
                    </div>
                    <textarea id="reclaimProcesses2" name="reclaimProcesses2" class="form-control" placeholder="Enter processes for product reclamation" required></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="eprApplicable" class="form-label"><span style="color: red;"> * </span>4. Whether Extended Producer Responsibility (EPR) is applicable to the entity’s activities (Yes/No). If yes, whether the waste collection plan is in line with the Extended Producer Responsibility (EPR) plan submitted to Pollution Control Boards? If not, provide steps taken to address the same:</label>
                    </div>
                    <select class="form-select" id="eprApplicable" name="eprApplicable" required>
                        <option value="">Select an option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div class="mb-3 hidden" id="eprCollectionPlan">
                    <div class="policy">
                        <label for="eprCollectionPlan" class="form-label">Specify the relevant details:</label>
                    </div>
                    <textarea class="form-control" id="eprCollectionPlan" name="eprCollectionPlan" placeholder="Enter the details"></textarea>
                </div>
                <div class="policy">
                    <h3>LEADERSHIP INDICATORS – IMPORTANCE TO INVESTORS</h3>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="lcaConducted2" class="form-label">1. Has the entity conducted Life Cycle Perspective / Assessments (LCA) for any of its products or for its services If yes, provide details, i.e. Name of Product /Service, % of total Turnover contributed, Boundary for which the Life Cycle Perspective/Assessment was conducted, whether conducted by external agency:</label>
                    </div>
                    <select name="lcaConducted2" id="lcaConducted2" class="form-control">
                        <option value="">Select an option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div id="lcaDetails" class="mb-3 hidden">
                    <div class="policy">
                        <label for="lcaDetails" class="form-label">Details of Life Cycle Assessments:</label>
                    </div>
                    <textarea id="lcaDetails" name="lcaDetails" class="form-control" placeholder="Enter LCA details"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="concernsMitigation2" class="form-label">2. If there are any significant social or environmental concerns &/or risks arising from production or disposal of your products / services, as identified in the Life Cycle Perspective / Assessments (LCA) or through any other means, briefly describe the same along-with action taken to mitigate the same:</label>
                    </div>
                    <textarea id="concernsMitigation2" name="concernsMitigation2" class="form-control" placeholder="Enter concerns and mitigation actions"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="recycledPercentage2" class="form-label"><span style="color: red;"> * </span>3. Percentage of recycled or reused input material to total material (by value) used in production or providing services in current & previous FY:</label>
                    </div>
                    <input type="number" id="recycledPercentage2" name="recycledPercentage2" class="form-control" placeholder="Enter percentage" required>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="reclaimedProducts2" class="form-label">4. Products & packaging reclaimed at end of life of products, amount (in metric tonnes) reused, recycled, & safely disposed in the current & previous FY:</label>
                    </div>
                    <textarea id="reclaimedProducts2" name="reclaimedProducts2" class="form-control" placeholder="Enter reclaimed product and packaging details"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="reclaimedPercentages2" class="form-label">5. Reclaimed products & their packaging materials (as percentage of products sold) for each product category:</label>
                    </div>
                    <textarea id="reclaimedPercentages2" name="reclaimedPercentages2" class="form-control" placeholder="Enter reclaimed product and packaging percentages"></textarea>
                </div>
                <button type="button" class="btn-primary" onclick="navigate(-1)">Previous</button>
                <button type="button" class="btn-primary" onclick="navigate(1)">Next</button>
            </div>

            <!--Principle 3-->
            <div id="prin3" class="prin-div">
                <div class="policy">
                    <h3>PRINCIPLE 3: BUSINESSES SHOULD RESPECT & PROMOTE THE WELL-BEING OF ALL EMPLOYEES, INCLUDING THOSE IN THEIR VALUE CHAINS.</h3>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="employeeWellbeingDetails" class="form-label"><span style="color: red;"> * </span>1. Details of measures for the well-being of (a) employees & (b) workers such as:</label>
                    </div>
                    <textarea id="employeeWellbeingDetails" name="employeeWellbeingDetails" class="form-control" placeholder="Total number & percentage of various categories covered by: Health insurance, Accident insurance, Maternity benefits, Paternity Benefits & Day Care facilities" required></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="retirementBenefitsDetails" class="form-label"><span style="color: red;"> * </span>2. Details of retirement benefits offered to workers & employees, for Current FY & Previous Financial Year:</label>
                    </div>
                    <textarea id="retirementBenefitsDetails" name="retirementBenefitsDetails" class="form-control" placeholder="Enter the details of retirement benefits offered" required></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="accessibilityChoice" class="form-label">3. Are the premises/offices of the entity accessible to differently-abled employees & workers, as per the requirements of the Rights of Persons with Disabilities Act, 2016? If not, whether any steps are being taken by the entity in this regard:</label>
                    </div>
                    <select name="accessibilityChoice" id="accessibilityChoice" class="form-control">
                        <option value="">Select an option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div id="accessibilitySteps" class="mb-3 hidden">
                    <div class="policy">
                        <label for="accessibilitySteps" class="form-label">Specify the steps being taken to make the premises more accessible:</label>
                    </div>
                    <textarea id="accessibilitySteps" name="accessibilitySteps" class="form-control" placeholder="Enter the steps being taken"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="equalOpportunity" class="form-label">4. Does the entity have an equal opportunity policy as per the Rights of Persons with Disabilities Act, 2016? If yes, provide a web link to the policy:</label>
                    </div>
                    <select name="equalOpportunity" id="equalOpportunity" class="form-control">
                        <option value="">Select an option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div id="equalOpportunityLink" class="mb-3 hidden">
                    <div class="policy">
                        <label for="equalOpportunityLink" class="form-label">Specify the relevant web link:</label>
                    </div>
                    <textarea id="equalOpportunityLink" name="equalOpportunityLink" class="form-control" placeholder="Enter the link"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="returnRetentionRates" class="form-label">5. Return to work & Retention rates of permanent employees & workers that took parental leave based on gender-male & female & in totality:</label>
                    </div>
                    <textarea id="returnRetentionRates" name="returnRetentionRates" class="form-control" placeholder="Enter the details"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="grievanceMechanismDetails" class="form-label">6. Is there a mechanism available to receive & redress grievances for the following permanent & temporary categories of employees & workers?</label>
                    </div>
                    <textarea id="grievanceMechanismDetails" name="grievanceMechanismDetails" class="form-control" placeholder="Enter the details"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="unionMembershipPercentage" class="form-label"><span style="color: red;"> * </span>7. Disclose No. & percentage of Membership of total permanent male & female both categories employees & workers in association(s) or Unions recognized by the listed entity for both current & previous Financial Years:</label>
                    </div>
                    <textarea id="unionMembershipPercentage" name="unionMembershipPercentage" class="form-control" placeholder="Enter the details" required></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="trainingDetails" class="form-label">8. Details of training on Health & safety measures & on skill up-gradation, given to employees & workers based on gender-male & female, & in totality for both current & previous financial years:</label>
                    </div>
                    <textarea id="trainingDetails" name="trainingDetails" class="form-control" placeholder="Enter the details on training on Health & safety measures & on skill up-gradation"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="performanceReviewDetails" class="form-label">9. Details of performance & career development reviews of employees & workers on a gender-male & female & in totality for both current & previous financial years:</label>
                    </div>
                    <textarea id="performanceReviewDetails" name="performanceReviewDetails" class="form-control" placeholder="Enter the performance & career development reviews"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="healthSafetyManagementSystemChoice" class="form-label">10. Whether an occupational health & safety management system has been implemented by the entity? (Yes/ No). If yes, the coverage of such system?</label>
                    </div>
                    <select id="healthSafetyManagementSystemChoice" name="healthSafetyManagementSystemChoice" class="form-control">
                        <option value="">Select an option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div id="healthSafetyManagementSystemDetails" class="mb-3 hidden">
                    <div class="policy">
                        <label for="healthSafetyManagementSystemDetails" class="form-label">Specify the coverage of occupational health and safety management systems:</label>
                    </div>
                    <textarea id="healthSafetyManagementSystemDetails" name="healthSafetyManagementSystemDetails" class="form-control" placeholder="Enter the coverage"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="workplaceSafetyMeasures" class="form-label">11. Describe the measures taken by the entity to ensure a safe & healthy workplace:</label>
                    </div>
                    <textarea id="workplaceSafetyMeasures" name="workplaceSafetyMeasures" class="form-control" placeholder="Enter the measures taken"></textarea>
                </div>
                <div class="policy">
                    <h3>LEADERSHIP INDICATORS – IMPORTANCE TO INVESTORS</h3>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="lifeInsuranceCompensation" class="form-label">1. Does the entity extend any life insurance or any compensatory package in the event of death of (A) Employees  (B) Workers ?</label>
                    </div>
                    <select id="lifeInsuranceCompensation" name="lifeInsuranceCompensation" class="form-control">
                        <option value="">Select an option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="statutoryDuesMeasures" class="form-label">2. Provide the measures undertaken by the entity to ensure that statutory dues have been deducted & deposited by the value chain partners:</label>
                    </div>
                    <textarea id="statutoryDuesMeasures" name="statutoryDuesMeasures" class="form-control" placeholder="Enter measures details"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="workRelatedInjuryRehabilitation" class="form-label">3. Provide the number of employees/workers having suffered high consequence work-related injury/ill-health/fatalities (as reported in Q11 of Essential Indicators above), who have been rehabilitated & placed in suitable employment or whose family members have been placed in suitable employment for both employee & workers categories for current & previous FYs:</label>
                    </div>
                    <textarea id="workRelatedInjuryRehabilitation" name="workRelatedInjuryRehabilitation" class="form-control" placeholder="Enter details"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="transitionAssistanceProgram" class="form-label">4. Does the entity provide transition assistance programs to facilitate continued employability & the management of career endings resulting from retirement or termination of employment?</label>
                    </div>
                    <select id="transitionAssistanceProgram" name="transitionAssistanceProgram" class="form-control">
                        <option value="">Select an option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <button type="button" class="btn-primary" onclick="navigate(-1)">Previous</button>
                <button type="button" class="btn-primary" onclick="navigate(1)">Next</button>
            </div>

            <!--Principle 4-->
            <div id="prin4" class="prin-div">
                <div class="policy">
                    <h3>PRINCIPLE 4: BUSINESSES SHOULD RESPECT THE INTERESTS OF & BE RESPONSIVE TO ALL THEIR STAKEHOLDERS.</h3>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="stakeholderIdentificationDetails" class="form-label">1. Describe the processes for identifying key stakeholder groups of the entity:</label>
                    </div>
                    <textarea id="stakeholderIdentificationDetails" name="stakeholderIdentificationDetails" class="form-control" placeholder="Enter stakeholder identification details"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="stakeholderEngagementDetails" class="form-label">2. List stakeholder groups identified as key for your entity & the method, frequency & purpose of engagement with each stakeholder group:</label>
                    </div>
                    <textarea id="stakeholderEngagementDetails" name="stakeholderEngagementDetails" class="form-control" placeholder="Enter stakeholder engagement details"></textarea>
                </div>
                <div class="policy">
                    <h3>LEADERSHIP INDICATORS – IMPORTANCE TO INVESTORS</h3>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="boardConsultationProcess" class="form-label">1. Provide the processes for consultation between stakeholders & the Board on economic, environmental, & social topics or if consultation is delegated, how is feedback from such consultations provided to the Board:</label>
                    </div>
                    <textarea id="boardConsultationDetails" name="boardConsultationDetails" class="form-control" placeholder="Enter board consultation details"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="stakeholderConsultationPolicy" class="form-label">2. Whether stakeholder consultation is used to support the identification & management of environmental, & social topics (Yes / No). If yes, provide details of instances as to how the inputs received from stakeholders on these topics were incorporated into policies & activities of the entity:</label>
                    </div>
                    <select name="stakeholderConsultationPolicy" id="stakeholderConsultationPolicy" class="form-control">
                        <option value="">Select an option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div id="sourcingPercentage" class="mb-3 hidden">
                    <div class="policy">
                        <label for="sourcingPercentage" class="form-label">Specify the sourcing percentage where stakeholder consultation is used to support the identification & management of environmental, & social topics:</label>
                    </div>
                     <input type="number" class="form-control" id="sourcingPercentage" name="sourcingPercentage" placeholder="Enter sourcing percentage">
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="vulnerableEngagementDetails" class="form-label">3. Provide details of instances of engagement with, & actions taken to, address the concerns of vulnerable/ marginalized stakeholder groups:</label>
                    </div>
                    <textarea id="vulnerableEngagementDetails" name="vulnerableEngagementDetails" class="form-control" placeholder="Enter engagement details"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="productEndOfLifeDetails" class="form-label">4. Products & packaging reclaimed at end of life of products, amount (in metric tonnes) reused, recycled, & safely disposed in the current & previous FY:</label>
                    </div>
                    <textarea id="productEndOfLifeDetails" name="productEndOfLifeDetails" class="form-control" placeholder="Enter product end-of-life details"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="reclaimedProductPercentageDetails" class="form-label">5. Reclaimed products & their packaging materials (as percentage of products sold) for each product category:</label>
                    </div>
                    <textarea id="reclaimedProductPercentageDetails" name="reclaimedProductPercentageDetails" class="form-control" placeholder="Enter reclaimed product percentages"></textarea>
                </div>
                <button type="button" class="btn-primary" onclick="navigate(-1)">Previous</button>
                <button type="button" class="btn-primary" onclick="navigate(1)">Next</button>
            </div>

            <!--Principle 5-->
            <div id="prin5" class="prin-div">
                <div class="policy">
                    <h3>PRINCIPLE 5: BUSINESSES SHOULD RESPECT & PROMOTE HUMAN RIGHTS.</h3>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="humanRightsTrainingDetails" class="form-label"><span style="color: red;"> * </span>1. Details of training provided to employees & workers (Permanent & Temporary) on human rights issues for current & previous years:</label>
                    </div>
                    <textarea id="humanRightsTrainingDetails" name="humanRightsTrainingDetails" class="form-control" placeholder="Enter the training details on human rights issues." required></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="wageDetails" class="form-label"><span style="color: red;"> * </span>2. Details of minimum wages paid to workers & employees (For both current & previous year):</label>
                    </div>
                    <textarea id="wageDetails" name="wageDetails" class="form-control" placeholder="Enter the details of minimum wages paid." required></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="remunerationDetails" class="form-label"><span style="color: red;"> * </span>3. Details of remuneration/salary/wages of BoD/KMP/Employees & Workers (For both Male & Female):</label>
                    </div>
                    <textarea id="remunerationDetails" name="remunerationDetails" class="form-control" placeholder="Enter the Details of remuneration/salary/wages of BoD/KMP/Employees" required></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="humanRightsResponsible" class="form-label">4. Does the organization have an Individual /Committee responsible for addressing human rights impacts or issues caused or contributed to by the business?</label>
                    </div>
                    <select name="humanRightsResponsible" id="humanRightsResponsible" class="form-control">
                        <option value="">Select an option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="grievanceMechanism" class="form-label"><span style="color: red;"> * </span>5. Details of the internal mechanisms in place to redress grievances related to human rights issues:</label>
                    </div>
                    <textarea id="grievanceMechanism" name="grievanceMechanism" class="form-control" placeholder="Enter details of the internal mechanism" required></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="complaintsDetails" class="form-label"><span style="color: red;"> * </span>6. Details of complaints made by employees & workers on sexual harassment, discrimination at workplace, Child Labour, Forced Labour/Involuntary Labour, Wages or other human rights related issues:</label>
                    </div>
                    <textarea id="complaintsDetails" name="complaintsDetails" class="form-control" placeholder="Enter employees complaints details" required></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="discriminationProtectionMechanisms" class="form-label"><span style="color: red;"> * </span>7. Mechanisms to prevent adverse consequences to the complainant in discrimination & harassment cases:</label>
                    </div>
                    <textarea id="discriminationProtectionMechanisms" name="discriminationProtectionMechanisms" class="form-control" placeholder="Provide details of Mechanisms to prevent adverse consequences" required></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="humanRightsInBusiness" class="form-label">8. Do human rights requirements form part of your business agreements & contracts?</label>
                    </div>
                    <select name="humanRightsInBusiness" id="humanRightsInBusiness" class="form-control">
                        <option value="">Select an option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="assessedPlantPercentage" class="form-label"><span style="color: red;"> * </span>9. Percentage of your plants & offices that were assessed (by entity or statutory authorities or third parties) for sexual harassment, discrimination at workplace, Child Labour, Forced Labour/Involuntary Labour, Wages or other human rights related issues:</label>
                    </div>
                    <input type="number" id="assessedPlantPercentage" name="assessedPlantPercentage" class="form-control" placeholder="Enter the Percentage of your plants & offices that were assessed" required>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="correctiveActionsForAssessments" class="form-label"><span style="color: red;"> * </span>10. Provide details of any corrective actions taken or underway to address significant risks / concerns arising from the assessments at Question 9 above:</label>
                    </div>
                    <textarea id="correctiveActionsForAssessments" name="correctiveActionsForAssessments" class="form-control" placeholder="Enter details of any corrective actions taken or underway to address significant risks." required></textarea>
                </div>
                <div class="policy">
                    <h3>LEADERSHIP INDICATORS – IMPORTANCE TO INVESTORS</h3>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="businessProcessModifications" class="form-label"><span style="color: red;"> * </span>1. Details of a business process being modified / introduced as a result of addressing human rights grievances/complaints:</label>
                    </div>
                    <textarea id="businessProcessModifications" name="businessProcessModifications" class="form-control" placeholder="Enter details of a business process being modified." required></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="humanRightsDueDiligence" class="form-label"><span style="color: red;"> * </span>2. Details of the scope & coverage of any Human rights due-diligence conducted:</label>
                    </div>
                    <textarea id="humanRightsDueDiligence" name="humanRightsDueDiligence" class="form-control" placeholder="Enter Details of the scope & coverage of any Human rights due-diligence conducted." required></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="premiseAccessibility" class="form-label">3. Is the premise/office of the entity accessible to differently abled visitors, as per the requirements of the Rights of Persons with Disabilities Act, 2016?</label>
                    </div>
                    <select name="premiseAccessibility" id="premiseAccessibility" class="form-control">
                        <option value="">Select an option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="valueChainAssessment" class="form-label"><span style="color: red;"> * </span>4. Percentage of value chain partners that were assessed (by entity or statutory authorities or third parties) for sexual harassment, discrimination at workplace, Child Labour, Forced Labour/Involuntary Labour, Wages or other human rights related issues, along with the corrective action taken to address significant risks & concerns arising from assessments:</label>
                    </div>
                    <input type="number" id="valueChainAssessment" name="valueChainAssessment" class="form-control" placeholder="Enter percentage value." required>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="correctiveActionsFromAssessments" class="form-label"><span style="color: red;"> * </span>5. Provide details of any corrective actions taken or underway to address significant risks / concerns arising from the assessments at Question 4 above:</label>
                    </div>
                    <textarea id="correctiveActionsFromAssessments" name="correctiveActionsFromAssessments" class="form-control" placeholder="Provide the concerns arising from the assessments at Question 4 above." required></textarea>
                </div>
                <button type="button" class="btn-primary" onclick="navigate(-1)">Previous</button>
                <button type="button" class="btn-primary" onclick="navigate(1)">Next</button>
            </div>

            <!--Principle 6-->
            <div id="prin6" class="prin-div">
                <div class="policy">
                    <h3>PRINCIPLE 6: BUSINESSES SHOULD RESPECT & MAKE EFFORTS TO PROTECT & RESTORE THE ENVIRONMENT</h3>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="energyConsumptionDetails" class="form-label">1.1 Details of total energy consumption (in Joules or multiples) & energy intensity as per BRSR format:</label>
                    </div>
                    <textarea id="energyConsumptionDetails" name="energyConsumptionDetails" class="form-control" placeholder="Enter the details"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="energyExternalAgency" class="form-label">1.2 Indicate if any independent assessment/ evaluation/assurance of energy consumption has been carried out by an external agency? If yes, provide the name of the external agency:</label>
                    </div>
                    <select name="energyExternalAgency" id="energyExternalAgency" class="form-control">
                        <option value="">Select an option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div id="energyExternalAgencyName" class="mb-3 hidden">
                    <div class="policy">
                        <label for="energyExternalAgencyName" class="form-label">Specify the name of the external agency:</label>
                    </div>
                    <textarea id="energyExternalAgencyName" name="energyExternalAgencyName" class="form-control" placeholder="Enter the name"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="designatedConsumers" class="form-label">2. Does the entity have any sites/facilities identified as designated consumers (DCs) under the Performance, Achieve, & Trade (PAT) Scheme of the Government of India?  If yes, disclose whether targets set under the PAT scheme have been achieved. In case targets have not been achieved, provide the remedial action taken if any:</label>
                    </div>
                    <select name="designatedConsumers" id="designatedConsumers" class="form-control">
                        <option value="">Select an option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div id="designatedConsumersDetails" class="mb-3 hidden">
                    <div class="policy">
                        <label for="designatedConsumersDetails" class="form-label">Specify the details of PAT scheme targets:</label>
                    </div>
                    <textarea id="designatedConsumersDetails" name="designatedConsumersDetails" class="form-control" placeholder="Enter the details"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="waterWithdrawalDetails" class="form-label">3.1. Provide details of water withdrawal from different sources, total volume of water withdrawal & consumed, & Water intensity per rupee of turnover (Water consumed / turnover) as per BRSR format:</label>
                    </div>
                    <textarea id="waterWithdrawalDetails" name="waterWithdrawalDetails" class="form-control" placeholder="Enter the details"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="waterExternalAgency" class="form-label">3.2. Indicate if any independent assessment/ evaluation/assurance of water withdrawal has been carried out by an external agency? If yes, provide the name of the external agency:</label>
                    </div>
                    <select name="waterExternalAgency" id="waterExternalAgency" class="form-control">
                        <option value="">Select an option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div id="waterExternalAgencyName" class="mb-3 hidden">
                    <div class="policy">
                        <label for="waterExternalAgencyName" class="form-label">Specify the name of the external agency:</label>
                    </div>
                    <textarea id="waterExternalAgencyName" name="waterExternalAgencyName" class="form-control" placeholder="Enter the name"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="liquidDischarge" class="form-label"><span style="color: red;"> * </span>4. Has the entity implemented a mechanism for Zero Liquid Discharge? If yes, provide details of its coverage & implementation:</label>
                    </div>
                    <select name="liquidDischarge" id="liquidDischarge" class="form-control" required>
                        <option value="">Select an option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div id="liquidDischargeDetails" class="mb-3 hidden">
                    <div class="policy">
                        <label for="liquidDischargeDetails" class="form-label">Specify the details of its coverage & implementation:</label>
                    </div>
                    <textarea id="liquidDischargeDetails" name="liquidDischargeDetails" class="form-control" placeholder="Enter the details"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="airEmissionDetails" class="form-label">5.1. Please provide details of air emissions (other than GHG emissions) by the entity, in BRSR format. Also, indicate if any independent assessment/ evaluation/assurance has been carried out by an external agency?</label>
                    </div>
                    <textarea id="airEmissionDetails" name="airEmissionDetails" class="form-control" placeholder="Enter the details"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="airExternalAgency" class="form-label">5.2. Indicate if any independent assessment/ evaluation/assurance of air emissions has been carried out by an external agency? If yes, provide the name of the external agency:</label>
                    </div>
                    <select name="airExternalAgency" id="airExternalAgency" class="form-control">
                        <option value="">Select an option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div id="airExternalAgencyName" class="mb-3 hidden">
                    <div class="policy">
                        <label for="airExternalAgencyName" class="form-label">Specify the name of the external agency:</label>
                    </div>
                    <textarea id="airExternalAgencyName" name="airExternalAgencyName" class="form-control" placeholder="Enter the name"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="greenhouseGasEmissionDetails" class="form-label">6.1. Provide details of greenhouse gas emissions (Scope 1 & Scope 2 emissions) & its intensity per rupee of turnover as per BRSR format:</label>
                    </div>
                    <textarea id="greenhouseGasEmissionDetails" name="greenhouseGasEmissionDetails" class="form-control" placeholder="Enter the details"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="ghgExternalAgency" class="form-label">6.2. Indicate if any independent assessment/ evaluation/assurance of greenhouse gas emissions has been carried out by an external agency? If yes, provide the name of the external agency:</label>
                    </div>
                    <select name="ghgExternalAgency" id="ghgExternalAgency" class="form-control">
                        <option value="">Select an option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div id="ghgExternalAgencyName" class="mb-3 hidden">
                    <div class="policy">
                        <label for="ghgExternalAgencyName" class="form-label">Specify the name of the external agency:</label>
                    </div>
                    <textarea id="ghgExternalAgencyName" name="ghgExternalAgencyName" class="form-control" placeholder="Enter the name"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="ghgReductionProject" class="form-label">7. Does the entity have any project related to reducing Green House Gas emission? If yes, provide details about the project:</label>
                    </div>
                    <select name="ghgReductionProject" id="ghgReductionProject" class="form-control">
                        <option value="">Select an option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div id="ghgReductionProjectDetails" class="mb-3 hidden">
                    <div class="policy">
                        <label for="ghgReductionProjectDetails" class="form-label">Specify the details of the project:</label>
                    </div>
                    <textarea id="ghgReductionProjectDetails" name="ghgReductionProjectDetails" class="form-control" placeholder="Enter the details"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="wasteDetails" class="form-label">8.1. Provide details of waste generated, waste recycled & waste dumped with breakup into categories like hazardous, plastic, e-waste, bio-medical waste etc. as per BRSR format:</label>
                    </div>
                    <textarea id="wasteDetails" name="wasteDetails" class="form-control" placeholder="Enter the details"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="wasteExternalAgency" class="form-label">8.2. Indicate if any independent assessment/ evaluation/assurance of greenhouse waste management has been carried out by an external agency? If yes, provide the name of the external agency:</label>
                    </div>
                    <select name="wasteExternalAgency" id="wasteExternalAgency" class="form-control">
                        <option value="">Select an option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div id="wasteExternalAgencyName" class="mb-3 hidden">
                    <div class="policy">
                        <label for="wasteExternalAgencyName" class="form-label">Specify the name of the external agency:</label>
                    </div>
                    <textarea id="wasteExternalAgencyName" name="wasteExternalAgencyName" class="form-control" placeholder="Enter the name"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="wasteManagementPractices" class="form-label">9. Briefly describe the waste management practices adopted in your establishments. Describe the strategy adopted by your entity to reduce usage of hazardous & toxic chemicals in your products & processes & the practices adopted to manage such wastes:</label>
                    </div>
                    <textarea id="wasteManagementPractices" name="wasteManagementPractices" class="form-control" placeholder="Enter the details"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="ecologicalAreaOperations" class="form-label">10. Does the entity have operations/offices in/around ecologically sensitive areas (such as national parks, wildlife sanctuaries, biosphere reserves, wetlands, biodiversity hotspots, forests, coastal regulation zones etc.) where environmental approvals / clearances are required. If yes, please specify details like: Location of operations/offices; Type of operations; the conditions of environmental approval / clearance are being complied with?</label>
                    </div>
                    <select name="ecologicalAreaOperations" id="ecologicalAreaOperations" class="form-control">
                        <option value="">Select an option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div id="ecologicalAreaOperationsDetails" class="mb-3 hidden">
                    <div class="policy">
                        <label for="ecologicalAreaOperationsDetails" class="form-label">Specify the details mentioned in Q15. In case of non-compliance, mention the reasons thereof & corrective action taken, if any:</label>
                    </div>
                    <textarea id="ecologicalAreaOperationsDetails" name="ecologicalAreaOperationsDetails" class="form-control" placeholder="Enter the details"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="environmentalImpactAssessmentDetails" class="form-label">11.1. Share name & details of environmental impact assessments of projects undertaken by the entity along with EIA notification no. & date; in the current financial year:</label>
                    </div>
                    <textarea id="environmentalImpactAssessmentDetails" name="environmentalImpactAssessmentDetails" class="form-control" placeholder="Enter the details"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="eiaExternalAgency" class="form-label">11.2. Indicate if EIA has been carried out by an independent external agency? If yes, provide the name of the external agency:</label>
                    </div>
                    <select name="eiaExternalAgency" id="eiaExternalAgency" class="form-control">
                        <option value="">Select an option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div id="eiaExternalAgencyName" class="mb-3 hidden">
                    <div class="policy">
                        <label for="eiaExternalAgencyName" class="form-label">Specify the name of the external agency:</label>
                    </div>
                    <textarea id="eiaExternalAgencyName" name="eiaExternalAgencyName" class="form-control" placeholder="Enter the name"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="eiaPublicDomain" class="form-label">11.3. Indicate if results of the EIA have been communicated in the public domain? If yes, provide the relevant web link:</label>
                    </div>
                    <select name="eiaPublicDomain" id="eiaPublicDomain" class="form-control">
                        <option value="">Select an option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div id="eiaPublicDomainLink" class="mb-3 hidden">
                    <div class="policy">
                        <label for="eiaPublicDomainLink" class="form-label">Specify the relevant web link:</label>
                    </div>
                    <textarea id="eiaPublicDomainLink" name="eiaPublicDomainLink" class="form-control" placeholder="Enter the link"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="environmentalComplianceStatus" class="form-label">12. Is the entity compliant with the applicable environmental law/ regulations/ guidelines in India; such as the Water (Prevention & Control of Pollution) Act, Air (Prevention & Control of Pollution) Act, Environment Protection Act & rules thereunder. If yes, provide relevant details:</label>
                    </div>
                    <select name="environmentalComplianceStatus" id="environmentalComplianceStatus" class="form-control">
                        <option value="">Select an option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div id="environmentalComplianceStatusDetails" class="mb-3 hidden">
                    <div class="policy">
                        <label for="environmentalComplianceStatusDetails" class="form-label">Specify the relevant details:</label>
                    </div>
                    <textarea id="environmentalComplianceStatusDetails" name="environmentalComplianceStatusDetails" class="form-control" placeholder="Enter the details"></textarea>
                </div>
                <!--Leadership indicators principle 6-->
                <div class="policy">
                    <h3>LEADERSHIP INDICATORS – IMPORTANCE TO INVESTORS</h3>
                </div>

                <button type="button" class="btn-primary" onclick="navigate(-1)">Previous</button>
                <button type="button" class="btn-primary" onclick="navigate(1)">Next</button>
            </div>

            <!--Principle 7-->
            <div id="prin7" class="prin-div">
                <div class="policy">
                    <h3>PRINCIPLE 7: BUSINESSES, WHEN ENGAGING IN INFLUENCING PUBLIC & REGULATORY POLICY, SHOULD DO SO IN A MANNER THAT IS RESPONSIBLE & TRANSPARENT</h3>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="tradeAffiliations" class="form-label"><span style="color: red;"> * </span>1. Details of affiliations with trade & industry chambers/associations (Names of top 10 trade & industry chambers):</label>
                    </div>
                    <textarea id="tradeAffiliations" name="tradeAffiliations" class="form-control" placeholder="Enter the details" required></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="antiCompetitiveActions" class="form-label"><span style="color: red;"> * </span>2. Indicate if any corrective action taken or underway on any issues related to anticompetitive conduct by the entity, based on adverse orders from regulatory authorities. If yes, provide the relevant details:</label>
                    </div>
                    <select name="antiCompetitiveActions" id="antiCompetitiveActions" class="form-control" required>
                        <option value="">Select an option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div id="antiCompetitiveActionsDetails" class="mb-3 hidden">
                    <div class="policy">
                        <label for="antiCompetitiveActionsDetails" class="form-label">Specify the relevant details:</label>
                    </div>
                    <textarea id="antiCompetitiveActionsDetails" name="antiCompetitiveActionsDetails" class="form-control" placeholder="Enter the details"></textarea>
                </div>
                <div class="policy">
                    <h3>LEADERSHIP INDICATORS – IMPORTANCE TO INVESTORS</h3>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="publicPolicyAdvocacy" class="form-label"><span style="color: red;"> * </span>1. Details of the Public policy advocated by the entity:</label>
                    </div>
                    <textarea id="publicPolicyAdvocacy" name="publicPolicyAdvocacy" class="form-control" placeholder="Enter the details" required></textarea>
                </div>
                <button type="button" class="btn-primary" onclick="navigate(-1)">Previous</button>
                <button type="button" class="btn-primary" onclick="navigate(1)">Next</button>
            </div>

            <!--Principle 8-->
            <div id="prin8" class="prin-div">
                <div class="policy">
                    <h3>PRINCIPLE 8: BUSINESSES SHOULD PROMOTE INCLUSIVE GROWTH & EQUITABLE DEVELOPMENT</h3>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="socialImpactAssessments" class="form-label"><span style="color: red;"> * </span>1. Details of Social Impact Assessments (SIA) of projects undertaken by the entity based on applicable laws, in the current financial year:</label>
                    </div>
                    <textarea id="socialImpactAssessments" name="socialImpactAssessments" class="form-control" placeholder="Enter the details" required></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="rehabilitationProjects" class="form-label"><span style="color: red;"> * </span>2. Provide information on project(s) for which ongoing Rehabilitation & Resettlement (R&R) is being undertaken by your entity, in the following format:</label>
                    </div>
                    <textarea id="rehabilitationProjects" name="rehabilitationProjects" class="form-control" placeholder="Enter the details" required></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="grievanceRedressMechanism" class="form-label"><span style="color: red;"> * </span>3. Describe the mechanisms to receive & redress grievances of the community:</label>
                    </div>
                    <textarea id="grievanceRedressMechanism" name="grievanceRedressMechanism" class="form-control" placeholder="Enter the details" required></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="inputMaterialPercentage" class="form-label"><span style="color: red;"> * </span>4. Percentage of input material (inputs to total inputs by value) sourced from suppliers:</label>
                    </div>
                    <input type="number" id="inputMaterialPercentage" name="inputMaterialPercentage" class="form-control" placeholder="Enter the percentage" required>
                </div>
                <div class="policy">
                    <h3>LEADERSHIP INDICATORS – IMPORTANCE TO INVESTORS</h3>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="socialImpactActions" class="form-label"><span style="color: red;"> * </span>1. Provide details of actions taken to mitigate any negative social impacts identified in Social Impact Assessments (Reference: Question 1 of Essential Indicators above):</label>
                    </div>
                    <textarea id="socialImpactActions" name="socialImpactActions" class="form-control" placeholder="Enter the details" required></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="csrAspirationalDistricts" class="form-label"><span style="color: red;"> * </span>2. Provide the following information on CSR projects undertaken by your entity in designated aspirational districts as identified by government bodies:</label>
                    </div>
                    <textarea id="csrAspirationalDistricts" name="csrAspirationalDistricts" class="form-control" placeholder="Enter the details" required></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="procurementPolicyMarginalized" class="form-label"><span style="color: red;"> * </span>3. Details of procurement policy in respect to marginalized/vulnerable groups:</label>
                    </div>
                    <textarea id="procurementPolicyMarginalized" name="procurementPolicyMarginalized" class="form-control" placeholder="Enter the details" required></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="intellectualPropertiesBenefits" class="form-label"><span style="color: red;"> * </span>4. Details of the benefits derived & shared from the intellectual properties owned or acquired by your entity (in the current financial year), based on traditional knowledge:</label>
                    </div>
                    <textarea id="intellectualPropertiesBenefits" name="intellectualPropertiesBenefits" class="form-control" placeholder="Enter the details" required></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="correctiveActionsIntellectualProperty" class="form-label"><span style="color: red;"> * </span>5. Details of corrective actions taken or underway, based on any adverse order in intellectual property related disputes wherein usage of traditional knowledge is involved:</label>
                    </div>
                    <textarea id="correctiveActionsIntellectualProperty" name="correctiveActionsIntellectualProperty" class="form-control" placeholder="Enter the details" required></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="csrProjectBeneficiaries" class="form-label"><span style="color: red;"> * </span>6. Details of beneficiaries of CSR Projects:</label>
                    </div>
                    <textarea id="csrProjectBeneficiaries" name="csrProjectBeneficiaries" class="form-control" placeholder="Enter the details" required></textarea>
                </div>
                <button type="button" class="btn-primary" onclick="navigate(-1)">Previous</button>
                <button type="button" class="btn-primary" onclick="navigate(1)">Next</button>
            </div>

            <!--Principle 9-->
            <div id="prin9" class="prin-div">
                <div class="policy">
                    <h3>PRINCIPLE 9: BUSINESSES SHOULD ENGAGE WITH & PROVIDE VALUE TO THEIR CONSUMERS IN A RESPONSIBLE MANNER</h3>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="consumerFeedbackMechanism" class="form-label"><span style="color: red;"> * </span>1. Describe the mechanisms in place to receive & respond to consumer complaints & feedback:</label>
                    </div>
                    <textarea id="consumerFeedbackMechanism" name="consumerFeedbackMechanism" class="form-control" placeholder="Enter the details" required></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="productTurnover" class="form-label"><span style="color: red;"> * </span>2. Turnover of products and/or services as a percentage of turnover from all products/service that carry information about, Environmental & social parameters relevant to the product, Safe & responsible usage & Recycling and/or safe disposal:</label>
                    </div>
                    <textarea id="productTurnover" name="productTurnover" class="form-control" placeholder="Enter the details" required></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="consumerComplaints" class="form-label"><span style="color: red;"> * </span>3. Number of consumer complaints with respect to the Data privacy, Advertising, Cyber-security, Delivery of essential services, Restrictive Trade Practices, Unfair Trade Practices& other Received & pending during current & previous FY:</label>
                    </div>
                    <textarea id="consumerComplaints" name="consumerComplaints" class="form-control" placeholder="Enter the details" required></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="productRecallInstances" class="form-label"><span style="color: red;"> * </span>4. Details of instances of product recalls on account of safety issues:</label>
                    </div>
                    <textarea id="productRecallInstances" name="productRecallInstances" class="form-control" placeholder="Enter the details" required></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="cyberSecurityPolicy" class="form-label"><span style="color: red;"> * </span>5. Does the entity have a framework/policy on cyber security & risks related to data privacy? If yes, provide details and a web-link of the policy if available:</label>
                    </div>
                    <select name="cyberSecurityPolicy" id="cyberSecurityPolicy" class="form-control" required>
                        <option value="">Select an option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div id="cyberSecurityPolicyDetails" class="mb-3 hidden">
                    <div class="policy">
                        <label for="cyberSecurityPolicyDetails" class="form-label">Specify the relevant details:</label>
                    </div>
                    <textarea id="cyberSecurityPolicyDetails" name="cyberSecurityPolicyDetails" class="form-control" placeholder="Enter the details"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="correctiveActions" class="form-label"><span style="color: red;"> * </span>6. Provide details of any corrective actions taken or underway on issues relating to advertising, & delivery of essential services; cyber security & data privacy of customers; re-occurrence of instances of product recalls; penalty/action taken by regulatory authorities on safety of products/services:</label>
                    </div>
                    <textarea id="correctiveActions" name="correctiveActions" class="form-control" placeholder="Enter the details" required></textarea>
                </div>
                <div class="policy">
                    <h3>LEADERSHIP INDICATORS – IMPORTANCE TO INVESTORS</h3>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="infoChannels" class="form-label"><span style="color: red;"> * </span>1. Channels/platforms where information on products & services of the entity can be accessed (provide web link, if available):</label>
                    </div>
                    <textarea id="infoChannels" name="infoChannels" class="form-control" placeholder="Enter the details" required></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="consumerEducation" class="form-label"><span style="color: red;"> * </span>2. Steps taken to inform & educate consumers about safe & responsible usage of products and/or services:</label>
                    </div>
                    <textarea id="consumerEducation" name="consumerEducation" class="form-control" placeholder="Enter the details" required></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="serviceDisruptionInfo" class="form-label"><span style="color: red;"> * </span>3. Mechanisms in place to inform consumers of any risk of disruption/discontinuation of essential services:</label>
                    </div>
                    <textarea id="serviceDisruptionInfo" name="serviceDisruptionInfo" class="form-control" placeholder="Enter the details" required></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="productInfoDisplay" class="form-label"><span style="color: red;"> * </span>4.1 Does the entity display product information on the product over & above what is mandated as per local laws? If yes, provide details in brief:</label>
                    </div>
                    <select name="productInfoDisplay" id="productInfoDisplay" class="form-control" required>
                        <option value="">Select an option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                        <option value="NA">Not Applicable</option>
                    </select>
                </div>
                <div id="productInfoDisplayDetails" class="mb-3 hidden">
                    <div class="policy">
                        <label for="productInfoDisplayDetails" class="form-label">Specify the relevant details:</label>
                    </div>
                    <textarea id="productInfoDisplayDetails" name="productInfoDisplayDetails" class="form-control" placeholder="Enter the details"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="surveyInfo" class="form-label"><span style="color: red;"> * </span>4.2. Did your entity carry out any survey with regard to consumer satisfaction relating to the major products/services of the entity, significant locations of operation of the entity or the entity as a whole? If no, the reasons thereof & corrective actions taken, if any:</label>
                    </div>
                    <select name="surveyInfo" id="surveyInfo" class="form-control" required>
                        <option value="">Select an option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div id="surveyInfoDetails" class="mb-3 hidden">
                    <div class="policy">
                        <label for="surveyInfoDetails" class="form-label">Specify the reson and corrective actions taken, if any:</label>
                    </div>
                    <textarea id="surveyInfoDetails" name="surveyInfoDetails" class="form-control" placeholder="Enter the details"></textarea>
                </div>
                <div class="mb-3">
                    <div class="policy">
                        <label for="dataBreachesInfo" class="form-label"><span style="color: red;"> * </span>5. Provide the information relating to data breaches: Number of instances of data breaches along with impact & Percentage of data breaches involving personally identifiable information of customers:</label>
                    </div>
                    <textarea id="dataBreachesInfo" name="dataBreachesInfo" class="form-control" placeholder="Enter the details" required></textarea>
                </div>
                <button type="button" class="btn-primary" onclick="navigate(-1)">Previous</button>
                <button type="submit" class="btn-primary" id="submit">Submit</button>
            </div>
        </form>
    </div>

    <script src="sec_C.js"></script>
    <script src="sec_C_form_submit_validation.js"></script>

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