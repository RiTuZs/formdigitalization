-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2023 at 03:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suku_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `exitdata`
--

CREATE TABLE `exitdata` (
  `id` int(50) NOT NULL,
  `workPeriodFrom` date NOT NULL,
  `workPeriodTo` date NOT NULL,
  `primaryLeavingReason` varchar(255) NOT NULL,
  `betterarea` varchar(255) NOT NULL,
  `otherreason` varchar(255) NOT NULL,
  `triggerMoveon` varchar(255) NOT NULL,
  `specify` varchar(255) NOT NULL,
  `trainingRating` varchar(255) NOT NULL,
  `trainingComments` varchar(255) NOT NULL,
  `supportRating` varchar(255) NOT NULL,
  `supportComments` varchar(255) NOT NULL,
  `feedbackRating` varchar(255) NOT NULL,
  `feedbackComments` varchar(255) NOT NULL,
  `satisfiedRating` varchar(255) NOT NULL,
  `satisfiedComments` varchar(255) NOT NULL,
  `facilitiesRating` varchar(255) NOT NULL,
  `facilitiesComments` varchar(255) NOT NULL,
  `AreasofImprovement` varchar(255) NOT NULL,
  `ImprovementComments` varchar(255) NOT NULL,
  `NewOffer` varchar(255) NOT NULL,
  `NewOfferComments` varchar(255) NOT NULL,
  `LookforComing` varchar(255) NOT NULL,
  `LookforComingComments` varchar(255) NOT NULL,
  `SatisfyingAspect` varchar(255) NOT NULL,
  `AdditionalFacility` varchar(255) NOT NULL,
  `DissatisfyingAspect` varchar(255) NOT NULL,
  `suggestionToImprove` varchar(255) NOT NULL,
  `valuesfound` varchar(255) NOT NULL,
  `requireForSucceed` varchar(255) NOT NULL,
  `recommend` varchar(255) NOT NULL,
  `recommendComments` varchar(255) NOT NULL,
  `HRnote` varchar(255) NOT NULL,
  `Interviewer` varchar(255) NOT NULL,
  `Signature` varchar(255) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exitdata`
--

INSERT INTO `exitdata` (`id`, `workPeriodFrom`, `workPeriodTo`, `primaryLeavingReason`, `betterarea`, `otherreason`, `triggerMoveon`, `specify`, `trainingRating`, `trainingComments`, `supportRating`, `supportComments`, `feedbackRating`, `feedbackComments`, `satisfiedRating`, `satisfiedComments`, `facilitiesRating`, `facilitiesComments`, `AreasofImprovement`, `ImprovementComments`, `NewOffer`, `NewOfferComments`, `LookforComing`, `LookforComingComments`, `SatisfyingAspect`, `AdditionalFacility`, `DissatisfyingAspect`, `suggestionToImprove`, `valuesfound`, `requireForSucceed`, `recommend`, `recommendComments`, `HRnote`, `Interviewer`, `Signature`, `Date`) VALUES
(1, '2021-03-29', '2023-06-30', 'Better_location , Better_Organization , Leaving_boss , Better_salary , Better_profile , ', '', '', 'lackAppreciation , lackAppreciationofIntellectual , ', '', '1', '', '2', '', '2', '', '1', '', '1', '', 'knowledge_work , guidance_support , supervision_control , ', '', 'advanced_technology , foreign_trips , WFH_Flexiblility , better_career_prospects , ', '', 'better_salary , better_career_prospects , better_leadership , ', '', 'Good colleagues , location at town , N/A , ', 'Proper recognition to employers work , N/A , N/A , ', 'Very less salary , No growth for COCP employees , Biasness towards non-technical employees , ', 'The management, HR policy and administration to be improved. Also, administration should take proper steps to improve hygiene and ventilation as it is affecting the health of employees. ', 'Good colleagues ,  ,  , ', 'Only regular employees have permission to grow in C-DAC. , And, technical COCP employees to some extent. , If you are B.Tech/M.Tech, you are respected, otherwise not. , ', 'no', '', '1. Modern reforms should be brought in the primitive HR policy of CDAC.\r\n2. Regular skill development trainings should be provided.\r\n3. Proper compensation to be given. ', '', '', '0000-00-00'),
(2, '2019-05-08', '0000-00-00', 'Better_Organization , Better_salary , Better_profile , ', 'Better Skills', '', 'lackAppreciation , MonotonousProfile , ', 'Workload, Experience and pay scale does not match', '2', '', '3', '', '4', '', '3', '', '2', '', 'impartial_leadership , knowledge_work , guidance_support , supervision_control , ', '', 'advanced_technology , foreign_trips , WFH_Flexiblility , better_career_prospects , social_security_benefits , ', '', 'better_salary , better_career_prospects , better_leadership , ', '', 'Salary got credited on time , leave policy ,  , ', 'N/A , N/A , N/A , ', 'N/A , N/A , N/A , ', 'N/A', 'N/A , N/A , N/A , ', 'N/A , N/A , N/A , ', 'maybe', '', 'N/A', '', '', '0000-00-00'),
(3, '2022-04-19', '2023-04-06', 'Better_Organization , ', '', '', 'lackAppreciation , ', '', '3', '', '3', '', '2', '', '2', '', '3', '', 'guidance_support , ', '', 'advanced_technology , ', '', 'better_leadership , ', '', 'I was given the responsibility to work alone   , Given enough time to complete the work , I was given responsibility to configure VM power , ', 'There should be given a minimum 3 months of time period to review the process instead of giving 1 month ,  ,  , ', 'Not satisfied with the increment  , old technologies are using should upgrade to new ones ,  , ', 'Medical claims should be given to the dependents also.', 'CDAC follow all the govt norms ,  ,  , ', 'should follow the group head to succeed in CDAC. Though I got less support from group head ,  ,  , ', 'maybe', '', 'N/A', '', '', '0000-00-00'),
(4, '2022-05-09', '2023-05-08', '', 'End of Apprenticeship period', '', '', 'End of Apprenticeship period', '5', '', '5', '', '5', '', '4', '', '4', '', '', '', '', '', 'better_salary , better_career_prospects , ', '', ' ,  ,  , ', ' ,  ,  , ', ' ,  ,  , ', 'Better pay/compensation', ' ,  ,  , ', ' ,  ,  , ', 'yes', '', '', '', '', '0000-00-00'),
(5, '2022-07-13', '2023-07-12', 'Better_salary , Better_profile , ', '', '', '', 'For higher Study', '4', '', '4', '', '5', '', '4', '', '4', '', 'guidance_support , ', '', 'advanced_technology , ', '', 'better_salary , ', '', ' ,  ,  , ', ' ,  ,  , ', 'Employee growth , Management ,  , ', '1. Emphasize Industry collaboration, 2. Focus on production.', ' ,  ,  , ', ' ,  ,  , ', 'maybe', '', '', '', '', '0000-00-00'),
(6, '2022-05-09', '2023-05-08', 'Better_location , ', '', '', 'friendsMove , ', '', '4', '', '4', '', '4', '', '4', '', '3', '', '', '', 'better_career_prospects , ', '', 'better_salary , ', '', ' ,  ,  , ', ' ,  ,  , ', 'Salary ,  ,  , ', 'Flexible Working hours and better salary', ' ,  ,  , ', ' ,  ,  , ', 'yes', '', '', '', '', '0000-00-00'),
(7, '2021-11-08', '2022-09-28', 'Better_profile , ', 'ASIC Development (VLSI)', 'Every employee for any work directly reached to center-head this create inharmonious work environment & by passing of concerned person/Auth, due to this many times some employees misbehave by center-head. ', '', 'Unnecessary interference & disturbance in development activities.', '2', '', '1', '', '4', '', '4', '', '5', '', '', '', '', '', '', '', ' ,  ,  , ', ' ,  ,  , ', 'Interference of NITs professors in CDAC recruitments & other activities. , Frequent change of decisions on a particular issues. , Leadership was not able to provide good work culture for development team. , ', '1. clear vision or Target Area for hardware group, 2. Adult standardize process for every activity ignore NIT interference. ', ' ,  ,  , ', ' ,  ,  , ', 'yes', '', '', '', '', '0000-00-00'),
(8, '2021-01-11', '2023-03-31', '', '', 'As my project extension period will be gust for 3 months, after that I would not be having any job security because of this reason I opted to discontinue my contract', 'lackAppreciation , ', '', '3', '', '3', '', '2', '', '3', '', '3', '', 'knowledge_work , ', '', '', '', 'better_leadership , ', '', ' ,  ,  , ', ' ,  ,  , ', 'Not satisfied with the annual Incriminate (It was just 5% last year) for low pay scale employees, 5% is just a matter of 1000/- Rs which for the employees are not encouraging at all ,  ,  , ', 'I would like to suggest the center to avoid frequent requirement, instead if the existing employees are encouraged, appreciated and given opportunities to explore and nurture it would lead to growth of the employees along with the productivity for centre ', ' ,  ,  , ', ' ,  ,  , ', 'maybe', '', '', '', '', '0000-00-00'),
(9, '2019-05-02', '2022-05-06', 'Better_location , Better_Organization , Better_salary , Better_profile , ', '', '', 'friendsMove , lackAppreciation , ', '', '1', '', '4', '', '4', '', '2', '', '3', '', '', '', 'advanced_technology , better_career_prospects , ', '', 'better_salary , better_career_prospects , ', '', ' ,  ,  , ', ' ,  ,  , ', 'Non uniform of comolidated salary based on the city financial health.  , Low travelling and food allowances given to COCP employee especially in NE India. ,  , ', 'Improvement in work culture, proper implementation of Govt. rules.', ' ,  ,  , ', ' ,  ,  , ', 'maybe', '', '', '', '', '0000-00-00'),
(10, '2022-08-22', '2023-08-21', 'Better_salary , ', '', '', 'lackAppreciation , ', '', '4', '', '5', '', '4', '', '4', '', '4', '', 'guidance_support , ', '', '', '', 'better_salary , ', '', ' ,  ,  , ', ' ,  ,  , ', 'Limited growth opportunities.  ,  ,  , ', 'clear communication.', ' ,  ,  , ', ' ,  ,  , ', 'maybe', '', '', '', '', '0000-00-00'),
(11, '2022-05-02', '2023-02-28', 'Better_location , ', '', '', 'lackAppreciation , lackAppreciationofIntellectual , ', '', '5', '', '5', '', '5', '', '5', '', '5', '', 'supervision_control , ', '', 'better_career_prospects , ', '', 'better_leadership , ', '', ' ,  ,  , ', ' ,  ,  , ', 'Employee welfare , lack of recognition ,  , ', '1. Recognition provided to employees, 2. Recruitment & promotion of non technical personnel.', ' ,  ,  , ', ' ,  ,  , ', 'yes', '', '', '', '', '0000-00-00'),
(12, '2022-05-09', '2023-05-08', 'Better_profile , ', 'I have really valued my time at this organization and learned a lot from my mentors. After apprentice period I am going for career goals.', '', 'lackAppreciation , ', 'This organization has provided me with valuable skills.', '3', '', '3', '', '2', '', '2', '', '2', '', 'knowledge_work , ', '', '', '', 'better_salary , better_career_prospects , ', '', ' ,  ,  , ', ' ,  ,  , ', 'salary structure will be very less in comparison with many other organization. ,  ,  , ', '', ' ,  ,  , ', ' ,  ,  , ', 'no', '', '', '', '', '0000-00-00'),
(13, '2022-05-02', '2023-05-01', 'Better_location , Better_Organization , Better_profile , ', '', 'Multiple Reasons but Major: Husband job shift', 'interestedJobs , ', 'More research oriented profile jobs are apt as per my profile', '5', 'great exposure in practicing teaching & research ', '5', 'Admin & everybody is very supportive', '5', 'Yes', '5', 'Yes', '3', 'Averagely Happy. As per my Qualification, I am eligible for STO but no vacancy at time of joining.', 'guidance_support , ', 'None. All is good ', 'advanced_technology , foreign_trips , WFH_Flexiblility , better_career_prospects , ', '', 'better_salary , better_leadership , ', '', 'Education & Training , Medical Benefit , Supportive Staff , ', 'Development of Technology for Society use , N/A ,  , ', 'less regular jobs , less salary ,  , ', '1. more regular jobs, 2. more salary', 'Platform to practice Teaching & Research , Great support from Staff & Higher-Authorities , Perfect platform to practice mentorship , ', 'Dedication , Sincerity  , Hard-work and Professionalism , ', 'yes', '', 'Thank You for the Opportunity.', '', '', '0000-00-00'),
(14, '2015-08-03', '2022-05-18', 'Better_location , Better_Organization , Better_salary , Better_profile , ', '', '', 'interestedJobs , ', '', '2', '', '3', '', '3', '', '3', '', '2', '', 'guidance_support , ', '', 'advanced_technology , foreign_trips , WFH_Flexiblility , better_career_prospects , social_security_benefits , ', '', 'technology_choice , ', '', 'Learning about technology , worked on research based project , writing project proposals , ', 'N/A , N/A ,  , ', 'Need to upgrade with new technology , Long working hours , New regular employee should show some respect for project engineer. I feel strictly avoid use of words like Hierarchy, Order, Not working as per industry to PE. especially (HWT STO) , ', 'Need to focus on project work.', 'N/A ,  ,  , ', 'Training should be provided ,  ,  , ', 'maybe', '', 'N/A', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `formdata`
--

CREATE TABLE `formdata` (
  `id` int(11) NOT NULL,
  `employee_name` varchar(255) NOT NULL,
  `employee_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `department` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `work_period_start` date NOT NULL,
  `mode_of_employment` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `otp` varchar(45) NOT NULL,
  `verification_status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `formdata`
--

INSERT INTO `formdata` (`id`, `employee_name`, `employee_id`, `email`, `phone`, `department`, `designation`, `work_period_start`, `mode_of_employment`, `password`, `otp`, `verification_status`) VALUES
(1, 'SUKANYA SADHU', 'x1y2z3', 'sukanya.ss.ritu@gmail.com', 9088552940, 'ent', 'trainee', '2023-08-31', 'R', '8169e05e2a0debcb15458f2cc1eff0ea', '3325', 'Verified');

-- --------------------------------------------------------

--
-- Table structure for table `joiningdata`
--

CREATE TABLE `joiningdata` (
  `id` int(50) NOT NULL,
  `primaryjoiningReason` varchar(255) NOT NULL,
  `betterarea` varchar(255) NOT NULL,
  `otherreason` varchar(255) NOT NULL,
  `previously_employed` varchar(255) NOT NULL,
  `IfYtriggerMoveon` varchar(255) NOT NULL,
  `trainingRequire` varchar(255) NOT NULL,
  `SupportExpect` varchar(255) NOT NULL,
  `HelpfulInformationReceived` varchar(255) NOT NULL,
  `expect_timely_feedback` varchar(255) NOT NULL,
  `expectTogain` varchar(255) NOT NULL,
  `overviewOfSalary` varchar(255) NOT NULL,
  `supervisionExpected` varchar(255) NOT NULL,
  `satisfyingAspect` varchar(255) NOT NULL,
  `AdditionalFacilities` varchar(255) NOT NULL,
  `ValuesExpected` varchar(255) NOT NULL,
  `overview_of_careerpath_and_progress` varchar(255) NOT NULL,
  `see_yourself_5years` varchar(255) NOT NULL,
  `contributionByYou_AfterEmployment` varchar(255) NOT NULL,
  `recommend` varchar(255) NOT NULL,
  `Specify` varchar(255) NOT NULL,
  `HRnote` varchar(255) NOT NULL,
  `Interviewer` varchar(255) NOT NULL,
  `Signature` varchar(255) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `joiningdata`
--

INSERT INTO `joiningdata` (`id`, `primaryjoiningReason`, `betterarea`, `otherreason`, `previously_employed`, `IfYtriggerMoveon`, `trainingRequire`, `SupportExpect`, `HelpfulInformationReceived`, `expect_timely_feedback`, `expectTogain`, `overviewOfSalary`, `supervisionExpected`, `satisfyingAspect`, `AdditionalFacilities`, `ValuesExpected`, `overview_of_careerpath_and_progress`, `see_yourself_5years`, `contributionByYou_AfterEmployment`, `recommend`, `Specify`, `HRnote`, `Interviewer`, `Signature`, `Date`) VALUES
(1, 'attractive_Jobprofile , ', 'I can learn new technologies by working on live field.', 'Better work-life balance & learning scope', 'yes', 'monotonous_profile , certain_jobs_taken_away , ', 'Learning industry skills and system design principles.', '40%', 'yes', 'yes', 'My progress on current and previous modules and what would be the right way to make my development getting better.', 'not sure', 'impartial_Leadership , Knowledge_in_area_of_work , guidance_support , ', 'The R&D field and the software development area.', 'Development support & mentors.', 'A good Support & mentors.', 'yes', 'A developer with proper knowledge about my work, team-work, can standout if anyone need support as well as can avail to \"Lead\" if required.', 'Contribute to robust C-DACs software, support and development.', 'yes', 'Debashri Debnath', 'N/A', '', '', '2022-04-18'),
(2, 'attractive_Jobprofile , credibility_fame , ', '', '', 'no', '', '3 Months', 'I expect them to lead me and mentor me during initial stage of my job.', 'yes', 'yes', 'To gain my knowledge and skill. ', 'yes', 'impartial_Leadership , Knowledge_in_area_of_work , guidance_support , Empathetic_compassionate , lessControlling_supervision , ', 'Being a part of MeyIT.', 'To provide a Trainer to learn new Technology.', 'Leadership', 'yes', 'I would focus more on improving my skills. I see myself as a respected person. Then I develop my knowledge.', 'N/A', 'yes', '', 'N/A', '', '', '2022-06-09'),
(3, 'attractive_Jobprofile , credibility_fame , ', '', '', 'yes', '', 'Still now good', 'Just little interaction when start work in new module.', 'yes', 'yes', 'How to do the work more efficiently and effectively.', 'yes', 'Knowledge_in_area_of_work , ', 'Self learning and R&D scope', 'Scope to work in various technology and various fields.', 'Learn new technology. ', 'yes', 'In five years, I see myself as a successful project leader, who has benefited the organization as a technical goals. ', 'Bug free application (develop), try to implement new technology. ', 'yes', '', 'N/A', '', '', '0000-00-00'),
(4, 'convenient_location , ', '', '', 'no', '', 'More learn the technology which we used here.', 'I need 100% support from everyone to do my job efficiently. ', 'yes', 'yes', 'Can improve myself and my performance.', 'N/A', 'Knowledge_in_area_of_work , guidance_support , ', 'All the staff are very cooperative & helpful.', 'N/A', 'N/A', 'yes', 'I want to improve myself on that level where I can handle any project alone.', 'I am giving my 100% contribution here.', 'yes', '', 'N/A', '', '', '0000-00-00'),
(5, 'attractive_Jobprofile , ', 'There is no limit to learn', '', 'yes', 'lack_of_support_at_critical_times , ', 'Explore new ideas in development of Software Development or Application Development.', 'Provide a clear vision and strong leadership.', 'yes', 'yes', 'For the better of our careers.', 'yes', 'impartial_Leadership , Knowledge_in_area_of_work , ', 'We can learn new technology.', 'No limit in doing the work of new learning of tech. ', 'Better place to build the careers. ', 'yes', 'I will be the person who can lead team independently. ', 'I want to contribute new technologies for Software Development. ', 'yes', '', 'N/A', '', '', '0000-00-00'),
(6, 'credibility_fame , ', '', 'Research and Development experience and learning opportunity. ', 'yes', '', 'The amount of training depend upon the specific task.', 'Moderate support. ', 'yes', 'yes', 'Opportunity to improve my own performance. ', 'yes', 'impartial_Leadership , Knowledge_in_area_of_work , guidance_support , Empathetic_compassionate , lessControlling_supervision , ', 'Working in my core domain.', 'Additional space, canteen facilities. ', 'Integrity, Honesty, Accountability, Diversity', 'Not Sure', 'Holding analogous and senior role in Core domain of engineering and development. ', 'Product Development and Professional training in my domain. ', 'yes', 'C-DAC provides roles which develops a person as a whole. ', 'N/A', '', '', '2022-11-21'),
(7, '', 'R&D', '', 'no', '', '1 month', 'good', 'No', 'yes', 'areas am good at & I can improve at', 'No', 'Knowledge_in_area_of_work , guidance_support , ', 'Work culture', 'N/A', 'good work culture, inclusion', 'N/A', 'Project Manager', 'Nothing which I can do & help', 'yes', '', 'N/A', '', '', '2022-05-27'),
(8, 'attractive_Jobprofile , ', '', '', 'no', '', 'Mostly my training is in the period of 1 year so it is the efficient period all I need.', 'I have to excel my knowledge in my requisit field', 'yes', 'yes', 'not done yet', 'yes', 'Knowledge_in_area_of_work , ', 'good', 'guidance & support', 'Integrity, communication skills and work experience. ', 'yes', 'I see myself as the skill able, more efficient and knowledgeable as I go further in the field.   ', 'It is the part of my tarining period of career path so I did my full concentration to this institution.', 'no', '', 'N/A', '', '', '2022-09-12'),
(9, 'convenient_location , ', '', '', 'yes', 'monotonous_profile , ', 'if required will take for 1 week ', 'moderate', 'yes', 'yes', 'CDAC review process should be quarterly so that we can understand that flaws ', 'yes', 'Knowledge_in_area_of_work , guidance_support , ', 'CADC is a ministry of electronics and IT operating body.', 'father and mother medical reimbursement, child education facilities. ', 'Self learning ', 'yes', 'Project Manager', 'Application development ', 'yes', '', 'N/A', '', '', '0000-00-00'),
(10, 'attractive_Jobprofile , ', '', '', 'no', '', 'My training is in the period of 1 year so it is the efficient period all I need.', 'I expect full support form my superiors and peers to do my job efficiently', 'yes', 'yes', 'I expects of my field I have to improve ', 'yes', 'Knowledge_in_area_of_work , ', 'good', 'guidance & support', 'Integrity, communication skills and work experience. ', 'yes', 'I see myself as more efficient and knowledgeable as I go further in the field. ', 'It is the part of my training period so I did my full contribution here.', 'maybe', '', 'N/A ', '', '', '2022-08-22'),
(11, 'convenient_location , ', '', '', 'no', '', 'Training and guidance from superiors will be required because I am a fresher and has less work experience.', 'I am still in learning zone. Superiors and peers support & guidance is necessary to do my work efficiently.  ', 'yes', 'yes', 'will able to improve performance. ', 'yes', 'Knowledge_in_area_of_work , guidance_support , ', 'I will gain practical experience along with my theoretical knowledge.  ', 'The facilities given by CDAC, Silchar is good ', 'I am from technical background, but 9 am inclined towards management project. I want to work in a management team so that I can add value in my career. ', 'yes', 'Over the next few year, I want to develop skills in project management and want to gain experience in leading projects. ', 'After gaining experience, I will be able to contribute my learnings and skills to C-DAC', 'yes', '', 'N/A', '', '', '2023-01-16'),
(12, 'attractive_Jobprofile , convenient_location , ', '', '', 'no', '', '1 month', 'There are many different areas in which I face difficulty I need guidance, but once shown the right path, I will be able to move ahead.', 'yes', 'yes', 'I will get to know my drawback & will work hard to improve upon those drawbacks.', 'yes', 'impartial_Leadership , Knowledge_in_area_of_work , guidance_support , ', 'The motivating Environment to work hard and grow more and the constant support of my superiors and peers. ', 'Bigger lab and Better equipment to run the lab work smoothly. ', 'Constantly guidance and support. High motivation to continue the research and development. ', 'yes', 'Working on more projects and managing a team in CDAC', 'support to my peers and the urge to learn more & grow more.', 'yes', '', 'N/A', '', '', '2022-05-09'),
(13, 'convenient_location , ', '', '', 'yes', '', 'Personality Development', 'N/A', 'The service available and provided gave me a insight on various topics and products. ', 'Timely feedback and interaction would be appreciated, to expand my comprehension skill on my work and which areas to improve.', 'A broader variety of exposer that will keep me updated.', 'No', 'impartial_Leadership , Knowledge_in_area_of_work , ', 'Here in CDAC-CINE, I participated in different projects with which I had to learn different concepts and topics that keep my awareness pol', 'N/A', 'N/A', 'Working here has made me clean of my future aspirations for myself. Its a stepping stone towards a career wise maturity.', 'My goal is to master my position and advance into a managerial role within my department.', 'Like I have written above, a little more work environment comprehension between everyone.', 'yes', '', 'N/A', '', '', '0000-00-00'),
(14, 'credibility_fame , ', '', '', 'yes', '', 'moderate & minimal ', 'moderate', '', '', '', '', 'impartial_Leadership , Knowledge_in_area_of_work , guidance_support , Empathetic_compassionate , lessControlling_supervision , ', '', '', '', '', '', '', 'yes', '', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `ratingdata`
--

CREATE TABLE `ratingdata` (
  `id` int(50) NOT NULL,
  `Type_of_work_assigned` int(255) NOT NULL,
  `Fairness_of_workload` int(255) NOT NULL,
  `Salary` int(255) NOT NULL,
  `Work_Environment` int(255) NOT NULL,
  `Career_Progression_path` int(255) NOT NULL,
  `HigherEducation_Policy` int(255) NOT NULL,
  `Subject_Training` int(255) NOT NULL,
  `Behavioural_Training` int(255) NOT NULL,
  `Colleagues` int(255) NOT NULL,
  `Supervision` int(255) NOT NULL,
  `Decision_making` int(255) NOT NULL,
  `Employee_Recognition` int(255) NOT NULL,
  `Work_life_balance` int(255) NOT NULL,
  `Working_Hours_Timings` int(255) NOT NULL,
  `Fun` int(255) NOT NULL,
  `Communication` int(255) NOT NULL,
  `Performance_evaluation` int(255) NOT NULL,
  `Employee_friendly` int(255) NOT NULL,
  `Concern_for_quality` int(255) NOT NULL,
  `Administrative_policies` int(255) NOT NULL,
  `Ease_of_Administrative_procedures` int(255) NOT NULL,
  `Overall_Facilities` int(255) NOT NULL,
  `Rate_CDAC` int(255) NOT NULL,
  `Feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ratingdata`
--

INSERT INTO `ratingdata` (`id`, `Type_of_work_assigned`, `Fairness_of_workload`, `Salary`, `Work_Environment`, `Career_Progression_path`, `HigherEducation_Policy`, `Subject_Training`, `Behavioural_Training`, `Colleagues`, `Supervision`, `Decision_making`, `Employee_Recognition`, `Work_life_balance`, `Working_Hours_Timings`, `Fun`, `Communication`, `Performance_evaluation`, `Employee_friendly`, `Concern_for_quality`, `Administrative_policies`, `Ease_of_Administrative_procedures`, `Overall_Facilities`, `Rate_CDAC`, `Feedback`) VALUES
(1, 3, 3, 1, 1, 1, 1, 1, 1, 4, 1, 1, 1, 3, 3, 1, 1, 1, 3, 1, 1, 1, 1, 1, 'No Comments '),
(2, 4, 5, 1, 3, 2, 3, 1, 1, 5, 3, 3, 3, 1, 1, 5, 3, 3, 5, 2, 1, 2, 1, 2, 'N/A'),
(3, 3, 3, 2, 2, 3, 3, 3, 2, 3, 3, 2, 2, 3, 4, 4, 3, 3, 4, 3, 3, 2, 2, 3, 'N/A'),
(4, 5, 5, 2, 3, 4, 4, 4, 4, 5, 5, 4, 4, 5, 3, 4, 4, 5, 5, 5, 5, 4, 3, 5, 'N/A'),
(5, 5, 4, 3, 4, 4, 3, 4, 4, 5, 5, 4, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 4, 4, 'N/A'),
(6, 4, 3, 2, 5, 3, 4, 5, 5, 5, 5, 5, 4, 4, 3, 2, 5, 5, 5, 5, 5, 5, 2, 5, 'N/A'),
(7, 5, 3, 5, 2, 3, 3, 2, 2, 3, 3, 2, 3, 5, 4, 3, 3, 4, 3, 2, 3, 3, 2, 3, 'NER has a good potential & CDAC Silchar should focus on Team building.'),
(8, 3, 3, 2, 3, 3, 2, 3, 2, 3, 2, 1, 3, 3, 3, 2, 3, 3, 3, 2, 2, 2, 1, 3, 'N/A'),
(9, 4, 3, 3, 3, 4, 2, 3, 5, 5, 4, 4, 3, 2, 3, 3, 3, 3, 3, 3, 3, 2, 2, 3, 'N/A'),
(10, 4, 4, 3, 4, 5, 5, 3, 3, 5, 3, 3, 4, 4, 4, 3, 4, 4, 5, 4, 4, 4, 3, 5, 'N/A'),
(11, 4, 3, 2, 4, 3, 2, 3, 3, 4, 3, 4, 3, 2, 3, 3, 4, 3, 5, 3, 2, 2, 3, 3, 'N/A'),
(12, 4, 4, 3, 3, 3, 3, 2, 4, 5, 4, 4, 2, 3, 5, 3, 4, 2, 3, 3, 4, 3, 3, 3, 'N/A'),
(13, 4, 5, 3, 3, 3, 4, 5, 3, 3, 5, 5, 4, 4, 4, 3, 5, 5, 5, 4, 4, 4, 4, 4, 'N/A'),
(14, 4, 3, 2, 3, 2, 3, 2, 2, 4, 3, 3, 3, 3, 2, 2, 3, 3, 3, 3, 2, 2, 2, 3, 'N/A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exitdata`
--
ALTER TABLE `exitdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formdata`
--
ALTER TABLE `formdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `joiningdata`
--
ALTER TABLE `joiningdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratingdata`
--
ALTER TABLE `ratingdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exitdata`
--
ALTER TABLE `exitdata`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `formdata`
--
ALTER TABLE `formdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `joiningdata`
--
ALTER TABLE `joiningdata`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ratingdata`
--
ALTER TABLE `ratingdata`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
