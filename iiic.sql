-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 04, 2023 at 09:08 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iiic`
--

-- --------------------------------------------------------

--
-- Table structure for table `section_a_form`
--

DROP TABLE IF EXISTS `section_a_form`;
CREATE TABLE IF NOT EXISTS `section_a_form` (
  `cin` varchar(21) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `incorp_date` date DEFAULT NULL,
  `office_address` text,
  `corporate_address` text,
  `email` varchar(255) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `reporting_fin_year` date DEFAULT NULL,
  `incorporation_certificate` text,
  `stock_name` varchar(255) DEFAULT NULL,
  `puc` varchar(255) DEFAULT NULL,
  `poc_name` varchar(255) DEFAULT NULL,
  `poc_phone` varchar(20) DEFAULT NULL,
  `poc_email` varchar(255) DEFAULT NULL,
  `rep_b` varchar(255) DEFAULT NULL,
  `doba` date DEFAULT NULL,
  `dops` date DEFAULT NULL,
  `nol` int DEFAULT NULL,
  `drm` varchar(255) DEFAULT NULL,
  `tote` varchar(255) DEFAULT NULL,
  `male` int DEFAULT NULL,
  `female` int DEFAULT NULL,
  `malet` int DEFAULT NULL,
  `femalet` int DEFAULT NULL,
  `p_no` int DEFAULT NULL,
  `tor` varchar(255) DEFAULT NULL,
  `holding` varchar(255) DEFAULT NULL,
  `subsidiary` varchar(255) DEFAULT NULL,
  `ac` varchar(255) DEFAULT NULL,
  `csr` varchar(255) DEFAULT NULL,
  `gre` varchar(255) DEFAULT NULL,
  `overview` text,
  PRIMARY KEY (`cin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `section_b_form`
--

DROP TABLE IF EXISTS `section_b_form`;
CREATE TABLE IF NOT EXISTS `section_b_form` (
  `cin` varchar(21) NOT NULL,
  `policyQuestion` enum('Yes','No') NOT NULL,
  `policyLink` varchar(255) DEFAULT NULL,
  `procedureQuestion` enum('Yes','No') NOT NULL,
  `procedureLink` varchar(255) DEFAULT NULL,
  `valueChainQuestion` enum('Yes','No') NOT NULL,
  `valueChainLink` varchar(255) DEFAULT NULL,
  `standardsQuestion` text NOT NULL,
  `commitmentsQuestion` text NOT NULL,
  `performanceQuestion` text NOT NULL,
  `directorStatement` text NOT NULL,
  `achievementsFile` text,
  `authorityDetails` text NOT NULL,
  `sustainabilityCommitteeQuestion` enum('Yes','No') NOT NULL,
  `committeeDetails` text,
  `assessmentQuestion` enum('Yes','No') NOT NULL,
  `agencyDetails` text,
  PRIMARY KEY (`cin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `section_c_form`
--

DROP TABLE IF EXISTS `section_c_form`;
CREATE TABLE IF NOT EXISTS `section_c_form` (
  `cin` varchar(21) NOT NULL,
  `1_1_coverage` int NOT NULL,
  `1_2_details` text NOT NULL,
  `1_3_appeal` text,
  `1_4_antiCorruptionPolicy` text,
  `1_5_disciplinaryAction` int NOT NULL,
  `1_6_conflictComplaints` text,
  `1_7_correctiveAction` text,
  `1_8_awarenessProgrammes` text NOT NULL,
  `1_9_conflictOfInterest` enum('Yes','No') NOT NULL,
  `1_10_conflictDetails` text,
  `2_1_rdPercentage` float DEFAULT NULL,
  `2_2_sustainableSourcing2` enum('Yes','No') DEFAULT NULL,
  `2_3_sourcingPercentage2num` float DEFAULT NULL,
  `2_4_reclaimProcesses2` text,
  `2_5_eprApplicable` enum('Yes','No') DEFAULT NULL,
  `2_6_eprCollectionPlan` text,
  `2_7_lcaConducted2` enum('Yes','No') DEFAULT NULL,
  `2_8_lcaDetails` text,
  `2_9_concernsMitigation2` text,
  `2_10_recycledPercentage2` float DEFAULT NULL,
  `2_11_reclaimedProducts2` text,
  `2_12_reclaimedPercentages2` text,
  `3_1_employeeWellbeingDetails` text,
  `3_2_retirementBenefitsDetails` text,
  `3_3_accessibilityChoice` enum('Yes','No') DEFAULT NULL,
  `3_4_accessibilitySteps` text,
  `3_5_equalOpportunity` enum('Yes','No') DEFAULT NULL,
  `3_6_equalOpportunityLink` text,
  `3_7_returnRetentionRates` text,
  `3_8_grievanceMechanismDetails` text,
  `3_9_unionMembershipPercentage` text,
  `3_10_trainingDetails` text,
  `3_11_performanceReviewDetails` text,
  `3_12_healthSafetyManagementSystemChoice` enum('Yes','No') DEFAULT NULL,
  `3_13_healthSafetyManagementSystemDetails` text,
  `3_14_workplaceSafetyMeasures` text,
  `3_15_lifeInsuranceCompensation` enum('Yes','No') DEFAULT NULL,
  `3_16_statutoryDuesMeasures` text,
  `3_17_workRelatedInjuryRehabilitation` text,
  `3_18_transitionAssistanceProgram` enum('Yes','No') DEFAULT NULL,
  `4_1_stakeholderIdentificationDetails` text,
  `4_2_stakeholderEngagementDetails` text,
  `4_3_boardConsultationDetails` text,
  `4_4_stakeholderConsultationPolicy` enum('Yes','No') DEFAULT NULL,
  `4_5_sourcingPercentage` decimal(5,2) DEFAULT NULL,
  `4_6_vulnerableEngagementDetails` text,
  `4_7_productEndOfLifeDetails` text,
  `4_8_reclaimedProductPercentageDetails` text,
  `5_1_humanRightsTrainingDetails` text,
  `5_2_wageDetails` text,
  `5_3_remunerationDetails` text,
  `5_4_humanRightsResponsible` enum('Yes','No') DEFAULT NULL,
  `5_5_grievanceMechanism` text,
  `5_6_complaintsDetails` text,
  `5_7_discriminationProtectionMechanisms` text,
  `5_8_humanRightsInBusiness` enum('Yes','No') DEFAULT NULL,
  `5_9_assessedPlantPercentage` decimal(5,2) DEFAULT NULL,
  `5_10_correctiveActionsForAssessments` text,
  `5_11_businessProcessModifications` text,
  `5_12_humanRightsDueDiligence` text,
  `5_13_premiseAccessibility` enum('Yes','No') DEFAULT NULL,
  `5_14_valueChainAssessment` decimal(5,2) DEFAULT NULL,
  `5_15_correctiveActionsFromAssessments` text,
  `6_1_energyConsumptionDetails` text,
  `6_2_energyExternalAgency` enum('Yes','No') DEFAULT NULL,
  `6_3_energyExternalAgencyName` text,
  `6_4_designatedConsumers` enum('Yes','No') DEFAULT NULL,
  `6_5_designatedConsumersDetails` text,
  `6_6_waterWithdrawalDetails` text,
  `6_7_waterExternalAgency` enum('Yes','No') DEFAULT NULL,
  `6_8_waterExternalAgencyName` text,
  `6_9_liquidDischarge` enum('Yes','No') DEFAULT NULL,
  `6_10_liquidDischargeDetails` text,
  `6_11_airEmissionDetails` text,
  `6_12_airExternalAgency` enum('Yes','No') DEFAULT NULL,
  `6_13_airExternalAgencyName` text,
  `6_14_greenhouseGasEmissionDetails` text,
  `6_15_ghgExternalAgency` enum('Yes','No') DEFAULT NULL,
  `6_16_ghgExternalAgencyName` text,
  `6_17_ghgReductionProject` enum('Yes','No') DEFAULT NULL,
  `6_18_ghgReductionProjectDetails` text,
  `6_19_wasteDetails` text,
  `6_20_wasteExternalAgency` enum('Yes','No') DEFAULT NULL,
  `6_21_wasteExternalAgencyName` text,
  `6_22_wasteManagementPractices` text,
  `6_23_ecologicalAreaOperations` enum('Yes','No') DEFAULT NULL,
  `6_24_ecologicalAreaOperationsDetails` text,
  `6_25_environmentalImpactAssessmentDetails` text,
  `6_26_eiaExternalAgency` enum('Yes','No') DEFAULT NULL,
  `6_27_eiaExternalAgencyName` text,
  `6_28_eiaPublicDomain` enum('Yes','No') DEFAULT NULL,
  `6_29_eiaPublicDomainLink` text,
  `6_30_environmentalComplianceStatus` enum('Yes','No') DEFAULT NULL,
  `6_31_environmentalComplianceStatusDetails` text,
  `7_1_tradeAffiliations` text NOT NULL,
  `7_2_antiCompetitiveActions` enum('Yes','No') NOT NULL,
  `7_3_antiCompetitiveActionsDetails` text,
  `7_4_publicPolicyAdvocacy` text NOT NULL,
  `8_1_socialImpactAssessments` text NOT NULL,
  `8_2_rehabilitationProjects` text NOT NULL,
  `8_3_grievanceRedressMechanism` text NOT NULL,
  `8_4_inputMaterialPercentage` decimal(5,2) NOT NULL,
  `8_5_socialImpactActions` text NOT NULL,
  `8_6_csrAspirationalDistricts` text NOT NULL,
  `8_7_procurementPolicyMarginalized` text NOT NULL,
  `8_8_intellectualPropertiesBenefits` text NOT NULL,
  `8_9_correctiveActionsIntellectualProperty` text NOT NULL,
  `8_10_csrProjectBeneficiaries` text NOT NULL,
  `9_1_consumerFeedbackMechanism` text,
  `9_2_productTurnover` text,
  `9_3_consumerComplaints` text,
  `9_4_productRecallInstances` text,
  `9_5_cyberSecurityPolicy` enum('Yes','No') DEFAULT NULL,
  `9_5_1_cyberSecurityPolicyDetails` text,
  `9_6_correctiveActions` text,
  `9_7_infoChannels` text,
  `9_8_consumerEducation` text,
  `9_9_serviceDisruptionInfo` text,
  `9_10_productInfoDisplay` enum('Yes','No','NA') DEFAULT NULL,
  `9_10_1_productInfoDisplayDetails` text,
  `9_11_surveyInfo` enum('Yes','No') DEFAULT NULL,
  `9_11_1_surveyInfoDetails` text,
  `9_12_dataBreachesInfo` text,
  PRIMARY KEY (`cin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
