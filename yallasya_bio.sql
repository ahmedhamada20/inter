-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 14, 2022 at 09:08 AM
-- Server version: 8.0.28
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yallasya_bio`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint UNSIGNED NOT NULL,
  `page_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `header_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `who_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `who_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `who_disc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `why_heading` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `why_disc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `why_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tab_title_1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tab_disc_1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tab_title_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tab_disc_2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tab_title_3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tab_disc_3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tab_title_4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tab_disc_4` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ask_heading` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `page_name`, `header_image`, `heading`, `who_image`, `who_title`, `who_disc`, `why_heading`, `why_disc`, `why_image`, `tab_title_1`, `tab_disc_1`, `tab_title_2`, `tab_disc_2`, `tab_title_3`, `tab_disc_3`, `tab_title_4`, `tab_disc_4`, `ask_heading`, `button_text`, `button_link`, `created_at`, `updated_at`) VALUES
(1, 'About Page', '1647981876post-2.jpg', 'About us', '16479571493-263x263.jpg', 'Who we are to Serave the nation', 'inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.   inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.', 'Why Online Learning?', 'There are several problems with the traditional system of education. First of all, you need to pay thousands of dollars per term to attend a prestigious school. With all those budget cuts, busy classrooms, and course shortages, you won’t always get the chance to study exactly what you want.', '1647981189post-2.jpg', 'You can learn whatever you want!', 'You can pick the program of your dreams without traveling away from home, living in a completely unknown city, and struggling in an extremely competitive learning environment.', 'Online courses look great on a resume.', 'If you obtain an online degree from a prestigious university, you’ll boost your career with the speed of light. You will certainly become a better candidate for a job promotion, and your resume will look much better when you apply for new positions.', 'Self-paced learning.', 'Self-paced learning means that you can make progress with rhythm that suits you. This type of system does not require attending live sessions; you can access the materials at any time that works for you. If you have to work or take care of your home and children during the day, you can study at night.', 'Lower costs.', 'The fact that online programs are cheaper when compared to the ones held in a traditional campus setting is enough to convince you to consider them. The average tuition for online courses depends on multiple factors, so it varies from one program to another.  Online courses and degree programs are more convenient and cheaper than their counterparts in traditional education. Those are the two main advantages of online learning that lead many students to opt for online platforms when they want to earn a degree or certificate..', 'Not Yet Satisfied with our Trend?', 'View Our Blog', '#', NULL, '2022-03-23 23:19:43');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Masters Degrees', '2022-03-19 12:13:35', '2022-03-23 18:05:04'),
(4, 'Doctoral', '2022-03-19 12:47:19', '2022-03-19 12:47:19');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_disc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `full_disc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `week_per_class` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_class` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_credit_hour` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `image`, `category`, `cost`, `short_disc`, `full_disc`, `week_per_class`, `total_class`, `total_credit_hour`, `address`, `status`, `created_at`, `updated_at`) VALUES
(13, 'Doctor of Education in Leadership & Innovation', '1647974902post-2.jpg', 'Doctoral', '5500', 'Students in the program begin as accomplished teachers, teacher leaders, principals, superintendents, higher education professionals, or leaders in other educational contexts working to implement change in their local place of practice. Graduates commit to continued systematic study of their practice and sustained innovation and leadership to make a positive difference over time.', 'Students entering with a master’s degree in a related field may be granted required for this program. The focus of the program is research in action, which allows students to conduct multiple cycles of inquiry throughout the program. Coursework combines a professional and research core that deepens students’ abilities to think reflectively and critically about problems of practice in one of the following contexts:\r\n\r\nPreKindergarten-Grade 12 (PK-12) Change Leadership\r\nHigher Education Change Leadership\r\nSystems, Professional, and Reimagined Change (SPARC) Leadership\r\nThrough Leader-Scholar Communities (LSCs) students support each other, under faculty guidance, in the conceptualization, implementation, and study of change initiatives. The culminating requirement is an action-research dissertation.\r\n\r\nThe online program admits students two times a year in the spring, and fall semesters.', '22', '15', '35', '40 Bloomsbury Way -London- WC1A 2SE', NULL, '2022-03-22 16:48:22', '2022-03-22 16:48:22'),
(9, 'Master in Economics and Political Science', '16475377351-3.jpg', 'Masters Degrees', '6300', 'EPS is an international course entirely taught in English with a highly qualified interdisciplinary learning track, integrating advanced analytical tools in Economics, Political sciences and Quantitative methods.', 'EPS is an international course entirely taught in English with a highly qualified interdisciplinary learning track, integrating advanced analytical tools in Economics, Political sciences and Quantitative methods.\r\n\r\nThe EPS degree is a multidisciplinary programme, presenting a balanced offer of courses in economics and political science and quantitative methods.\r\n\r\nDuring the first year, students will be trained in advanced general tools of the three disciplines, whereas in the II year teaching focuses on advanced topics in the domains of international economics and politics.\r\n\r\nTraining also includes internships in international organizations, or businesses, in-house laboratories and the writing of a final dissertation.\r\n\r\n \r\n\r\nEntry Requirements\r\nUndergraduate degree\r\nApplicants should have earned at least 60 ECTS credits or equivalent in the following fields: business administration, computer science, economics, law, management, mathematics, philosophy, political science, sociology or statistics.\r\n\r\nEnglish language proficiency\r\nThe knowledge of English will be assessed during the admission interview. A IELTS or TOEFl will be taken in account.\r\n\r\nMathematics and Quantitative methods background\r\nApplicants must have earned at least 6 ECTS credits in Mathematics or Quantitative methods.\r\n\r\nCandidates lacking this requirement will have to attend a crash course in Mathematics. Crash courses is Statistics and Microeconomics are also offered.\r\n\r\nScores in GRE or GMAT will also be taken in account in evaluating of the application.\r\n\r\nCareer Prospects\r\nThe EPS degree is designed to train students in advanced methodologies, analytical tools and quantitative and qualitative techniques used in all fields of economics and political science.\r\n\r\nEPS graduates will be ready to undertake a wide array of career paths in multinational companies, political institutions, public organizations, and other professions demanding high intellectual skills, robust technical competencies and versatile knowledge. They will also be well prepared to engage in further academic research in top PhD programmes.\r\n\r\n91% of the EPS graduates in 2012 are actively employed or have enrolled in PhD programs. Among them, 41% are now based abroad and 59% in Italy. 37% are analysts or consultants in marketing/sales sector, 11% work as analysts, brokers or consultants in banking/finance/insurance sector, 11% in international organizations and public administrations, 8% work in Web/Tv sector, 7% in public relations sector. Finally, 26% are pursuing a PhD, in Italian and foreign universities.', '48', '36', '72', '40 Bloomsbury Way -London- WC1A 2SE', NULL, '2022-03-17 15:20:07', '2022-03-17 15:22:15'),
(10, 'Master of Education in Educational Leadership', '1647538331course-9-600x400.jpg', 'Masters Degrees', '4500', 'Through this degree program, you will learn to successfully manage the challenges of curriculum development, interpret and use test results, interact with the community, and lead other teachers to achieve school goals', 'Through this degree program, you will learn to successfully manage the challenges of curriculum development, interpret and use test results, interact with the community, and lead other teachers to achieve school goals.\r\n\r\nThe online principalship concentration is ideal if you are looking to complete the coursework and field experiences required to attain principal certification but take advantage of the college’s internet-based coursework.\r\n\r\nAll options are designed to prepare teachers to united kingdom requirements for principal or supervision certification. If you are interested in you should contact your state department of education to determine the principal or supervision certification requirements prior to applying.', '48', '36', '72', '40 Bloomsbury Way -London- WC1A 2SE', NULL, '2022-03-17 15:32:11', '2022-03-17 15:32:11'),
(11, 'Master of Global Management', '1647538518global-managment.jpg', 'Masters Degrees', '6500', 'The MGM educates global business leaders through a combination of general management coursework, regional studies, and cross-cultural insight. It is designed to develop your ability to lead and manage people across borders and across all levels of an organization', 'The program’s innovative philosophy guides you through a strategic progression of every facet of international management, with experiential learning opportunities and practical nuances of global business. You will learn through collaboration with fellow classmates and experienced global faculty.\r\n\r\nThe flexible program allows you to complete your degree on your schedule. While 100% of coursework is offered online asynchronously, you can also choose to attend week-long on-site learning experiences either on a field seminar abroad to experience global business first-hand or during a module on Thunderbird’s historic campus.\r\n\r\nAs a Thunderbird Master of Global Management graduate, you will gain a deep understanding of the intricacies of international business and be prepared to conduct business as an ethical global citizen. You also will join more than 43,000 graduates that make up Thunderbird’s world-famous alumni network.\r\n\r\nThe MGM educates global business leaders through a combination of general management coursework, regional studies, and cross-cultural insight. It is designed to develop your ability to lead and manage people across borders and across all levels of an organization', '48', '36', '72', '40 Bloomsbury Way -London- WC1A 2SE', NULL, '2022-03-17 15:35:18', '2022-03-17 15:35:18'),
(37, 'Master Economic Education', '1649682391event-3.jpg', 'Masters Degrees', '5800', 'The Economic Education programmes in Cologne offer students an opportunity to gain in-depth knowledge of vocational education in colleges and at in companies, both in theoretical terms and in practical terms during work experience in vocational colleges or on in-house projects in companies', 'Description\r\na brief overview of the programmer structure to the requirements for admission and the selection procedure.\r\n\r\nEssentially, there are two branches of study in the Master of Education programme:\r\n\r\nEconomic Education/Vocational School Teacher Training I – In which students specialise in Economic Science + their teaching subject/special education\r\nEconomic Education/Vocational School Teacher Training II – Economic Science for teaching in colleges or working in companies (*students who graduate in Economic Education/Vocational School Teacher Training II to work in a company are awarded the academic degree of Master of Science (M.Sc.).)', '48', '36', '72', '40 Bloomsbury Way -London- WC1A 2SE', NULL, '2022-04-11 17:06:31', '2022-04-11 17:06:31'),
(36, 'Master Political Science', '1649682343post-9.jpg', 'Masters Degrees', '6300', 'The master programme Political Science consists of 120 ECTS- (European Credit Transfer System) Points and is designed as a 4-semester full-time programme. It is a consecutive master degree based on a bachelor degree related to political science.', 'Description\r\nThe master programme Political Science consists of 120 ECTS- (European Credit Transfer System) Points and is designed as a 3-semester full-time programme. It is a consecutive master degree based on a bachelor degree related to political science.\r\n\r\nThe Core and Advanced Section, which contains 36 credit points, will cover methodical as well as content-specific basics of the major Political Science.\r\n\r\nThe Specialisation Section deepens and enhances the already acquired knowledge within the field of political science. This section also consists of 36 ECTS-Points, of which 9 will be completed through a colloquium.\r\n\r\nThe Supplementary Section serves as an additional section to develop a more specific profile – either by deepening and specialising or by diversifying knowledge. Further modules from social sciences as well as from business administration or economics are available to students. Altogether, a minimum of one and a maximum of two subareas have to be selected, in which at least 24 credit points will have to be obtained.\r\n\r\nDetailed information concerning the curricular design is available on our homepage on the Programme Structure pages. Especially at the beginning of your studies, individual consultations will help to make the right choices over the course of the programme', '48', '36', '72', '40 Bloomsbury Way -London- WC1A 2SE', NULL, '2022-04-11 17:05:43', '2022-04-11 17:05:43'),
(31, 'Master of Social Work', '1649681966portfolio-4.jpg', 'Masters Degrees', '4000', 'Social Work is one of the largest and most diverse in the world and is accredited by the Council on Social Work Education (CSWE.)', 'Description\r\nSocial Work is one of the largest and most diverse in the world and is accredited by the Council on Social Work Education (CSWE.) The online delivery of the MSW program provides a vibrant learning platform for engaging with our faculty who are experts in child welfare, health and behavioral health, community practice, administration, global social work, policy advocacy and innovative services for individuals, families, groups and communities. We also have expertise in gerontology, forensic social work, human trafficking, Borderlands issues, and several other areas. Our expertise and attention to cultural diversity and the distinct populations of the Southwest are unique.\r\n\r\nThe MSW program follows a set sequence of courses based on a broad range of social concerns and includes two professional seminars with synchronous elements designed for professional development. Along with your courses, you will also participate of hands-on field education. You will work with the School of Social Work’s Field Education Office to find internship sites within your geographic region that meet school and CSWE standards. Pre-placement requirements will be arranged and monitored by the field agency.\r\n\r\nThe Master of Social Work online program’s concentration in Advanced Generalist studies will focus on effective and culturally competent service practices across system levels, and strategies for change informed by research evidence.\r\n\r\nA social work career provides many opportunities to make a difference for those in need – through direct service to individuals, families, groups, and communities; developing innovative public and nonprofit programs; and creating more just social and economic policies.\r\n\r\nSocial Work is one of the largest and most diverse in the world and is accredited by the Council on Social Work Education (CSWE.)', '48', '36', '72', '40 Bloomsbury Way -London- WC1A 2SE', NULL, '2022-04-11 16:59:26', '2022-04-11 16:59:26'),
(35, 'Master of Science in Business Journalism', '1649682278demo-course-1.jpg', 'Masters Degrees', '5500', 'Students will study data journalism, reporting and storytelling, media law and entrepreneurship at one of the nation’s leading journalism schools, the Walter Cronkite School of Journalism and Mass Communication, home to the Donald W. Reynolds National Center for Business Journalism', 'Description\r\nStudents will study data journalism, reporting and storytelling, media law and entrepreneurship at one of the nation’s leading journalism schools, the Walter Cronkite School of Journalism and Mass Communication, home to the Donald W. Reynolds National Center for Business Journalism. Additionally, students will take online courses in economics, finance, accounting, statistics, markets and organizations offered\r\n\r\nInstructors include renowned journalists and communicators such as Andrew Leckey, Reynolds Endowed Chair in Business Journalism and former syndicated investment columnist and CNBC anchor; Pulitzer Prize-winning data specialist Steve Doig, Cronkite’s Knight Chair in Journalism; and Retha Hill, a former vice president for BET Interactive who leads the Cronkite School’s New Media Innovation and Entrepreneurship Lab.\r\n\r\nThe online degree is expected to attract students from a variety of backgrounds: aspiring business journalists, reporters who want to improve their understanding of finance and working journalists looking to improve their economic coverage of topics from sports to sustainability. The online Master of Science in Business Journalism program also will be of value to communications professionals in public relations, education or other public or private environments in which an understanding of business and economics and how to effectively communicate on those topics, is essential. The program is open to students both in the United Kingdom and abroad.', '48', '36', '72', '40 Bloomsbury Way -London- WC1A 2SE', NULL, '2022-04-11 17:04:38', '2022-04-11 17:04:38'),
(34, 'Master of Legal Studies', '1649682198master-legal-studies.jpg', 'Masters Degrees', '5800', 'The law touches every career. Accordingly, students that apply to the Master of Legal Studies (M.L.S.) come from a diverse range of professional backgrounds and are looking to move up the ladder in their current career or to pursue new and exciting career options.', 'Description\r\nThe law touches every career. Accordingly, students that apply to the Master of Legal Studies (M.L.S.) come from a diverse range of professional backgrounds and are looking to move up the ladder in their current career or to pursue new and exciting career options.\r\n\r\nThe program explores the relationship between law and a wide variety of topics that are important to fields such as business, criminal justice, engineering, sports, sustainability, education, banking, intellectual property, entrepreneurship, human resources and many others. International students will find the M.L.S. program to be a valuable resource for gaining a general understanding of U.S. law and how decisions are made within the U.S. legal structure.\r\n\r\nGraduates that earn an M.L.S. degree will have a basic understanding of U.S. law, legal structures, and legal reasoning. Additionally, graduates will be able to apply the law to situations that affect their professional and personal lives, including an understanding of when a legal issue is present that requires an attorney to be involved. The skills and expertise developed in the program is unique and will help differentiate graduates from others in their career fields.', '48', '36', '72', '40 Bloomsbury Way -London- WC1A 2SE', NULL, '2022-04-11 17:03:18', '2022-04-11 17:03:18'),
(33, 'Master of Business Administration (MBA)', '1649682142course-1.jpg', 'Masters Degrees', '5500', 'Delivered entirely over the Internet, the Online MBA is ideal for career professionals who need flexibility, convenience, and quality.', 'Description\r\nDelivered entirely over the Internet, the Online MBA is ideal for career professionals who need flexibility, convenience, and quality. Ranked Top 5 in the nation by U.S. News & World Report, the W. P. Carey Online MBA delivers a comprehensive business curriculum, many ways to customize your MBA to your goals, and personal support every step of the way. Earn the same highly ranked MBA as full-time and part-time programs — with the same curriculum, taught by the same faculty – and join a network of prestigious business school alumni.\r\n\r\n \r\n\r\nAdditional Program Highlights:\r\n\r\nTop 5 ranked online MBA in the nation\r\nGain in-depth knowledge with a specific area of emphasis and customize your MBA to meet your career goals\r\nCareer services team dedicated to the needs of working professionals\r\nOne-course-at-a-time curriculum\r\n\r\nDescription\r\nDelivered entirely over the Internet, the Online MBA is ideal for career professionals who need flexibility, convenience, and quality. Ranked Top 5 in the nation by U.S. News & World Report, the W. P. Carey Online MBA delivers a comprehensive business curriculum, many ways to customize your MBA to your goals, and personal support every step of the way. Earn the same highly ranked MBA as full-time and part-time programs — with the same curriculum, taught by the same faculty – and join a network of prestigious business school alumni.\r\n\r\n \r\n\r\nAdditional Program Highlights:\r\n\r\nTop 5 ranked online MBA in the nation\r\nGain in-depth knowledge with a specific area of emphasis and customize your MBA to meet your career goals\r\nCareer services team dedicated to the needs of working professionals\r\nOne-course-at-a-time curriculum\r\n\r\nDelivered entirely over the Internet, the Online MBA is ideal for career professionals who need flexibility, convenience, and quality.', '48', '36', '72', '40 Bloomsbury Way -London- WC1A 2SE', NULL, '2022-04-11 17:02:22', '2022-04-11 17:02:22'),
(32, 'Master of Nonprofit Leadership and Management', '1649682087non-profit.jpg', 'Masters Degrees', '0', 'The Master of Nonprofit Leadership and Management degree gives professionals the chance to improve or add skills necessary to work in the nonprofit sector. Students of the Nonprofit Leadership and Management master’s program will explore research, theory and the practice of leadership and management in the nonprofit sector.', 'Description\r\nThe Master of Nonprofit Leadership and Management degree gives professionals the chance to improve or add skills necessary to work in the nonprofit sector. Students of the Nonprofit Leadership and Management master’s program will explore research, theory and the practice of leadership and management in the nonprofit sector.\r\n\r\nGraduates with a Master of Nonprofit Leadership and Management degree gain leadership skills and knowledge in topics such as the management of human resources (both paid and volunteer), fundraising, program evaluation, fiscal management and governance in nonprofit organizations. Graduates of this online program gain enhanced recognition and credentials similar to students who have graduate degrees in administration or management.\r\n\r\nGraduates of this program can enter into careers in a number of specialties within nonprofit organizations such as nonprofit organization management, fundraising, program development, volunteer management and advocacy.\r\n\r\nOn average, students will complete the Master of Nonprofit Leadership and Management degree within approximately two years, but a shorter time frame is possible. The MNLM requires S required core courses\r\n. The final component of this degree program is a capstone course, which integrates and synthesizes material from prior courses.\r\n\r\nThe Master of Nonprofit Leadership and Management degree gives professionals the chance to improve or add skills necessary to work in the nonprofit sector. Students of the Nonprofit Leadership and Management master’s program will explore research, theory and the practice of leadership and management in the nonprofit sector.', '48', '36', '72', '40 Bloomsbury Way -London- WC1A 2SE', NULL, '2022-04-11 17:01:27', '2022-04-11 17:01:27'),
(42, 'Doctor of Political Science, Public Policy Track', '1649684280post-11.jpg', 'Doctoral', '6500', 'The Doctoral Program in Public Policy is a specialized track in the Political Science PhD Program run by the CEU Doctoral School of Political Science, Public Policy and International Relations. CEU is an English-language graduate school in Budapest, Hungary that is accredited.', 'Description\r\nThe Doctoral Program in Public Policy is a specialized track in the Political Science PhD Program run by the CEU Doctoral School of Political Science, Public Policy and International Relations. CEU is an English-language graduate school in Budapest, Hungary that is accredited.\r\n\r\nModern policy making, devoted to the principles of good governance, transparency, accountability, and effectiveness, needs to be based on sound academic analysis. The Doctoral Program in Public Policy is designed for scholars interested in conducting research on the cause, function, nature, and outcome of public policy.\r\n\r\nThe program prepares graduate students for careers in both academic and applied research institutions. Core courses focus on the development of professional level research and analytical skills in the fields of European and international public policy, comparative policy analysis, and political economy.\r\n\r\nThe faculty involved in the PhD program come from a range of public-policy related disciplinary backgrounds, including international relations, politics, law, and economics. In addition to being authoritative voices in their respective fields of research, they also have first-hand policy experience, working for think-tanks (e.g. the RAND Corporation) or businesses (e.g. Vodafone), consulting with NGOs (e.g. Open Society Institute, Transparency International) or advising national or local governments, as well as international organizations (e.g. World Bank Institute).', '48', '36', '72', '40 Bloomsbury Way -London- WC1A 2SE', NULL, '2022-04-11 17:38:01', '2022-04-11 17:38:01'),
(41, 'Doctor of Politics and International Relations', '1649684210portfolio-7.jpg', 'Doctoral', '6500', 'Offering supervision in most subject areas, the School of Politics and International Relations is a thriving and dynamic centre for PhD study. A PhD is the most advanced form of postgraduate study. It is awarded on the successful completion of supervised research, verbal examination and final thesis.', 'Description\r\nOffering supervision in most subject areas, the School of Politics and International Relations is a thriving and dynamic centre for PhD study.\r\n\r\nA PhD is the most advanced form of postgraduate study. It is awarded on the successful completion of supervised research, verbal examination and final thesis.\r\n\r\nWe encourage our students to play an active role in the school’s research centres and institutes as well as the activities of the school as a whole.\r\n\r\nThe school runs a weekly colloquium for postgraduate research students, giving you the opportunity to present your work in front of other research students and staff with similar research interests.\r\n\r\nPolitics and international relations research areas include:\r\n\r\nAsia and Pacific studies\r\nBritish politics and Brexit\r\nChina’s governance and politics\r\nConflict, security and terrorism\r\nInternational relations\r\nPolitical ideologies\r\nPolitical theory\r\nSocial and global justice\r\nSocial science research methodology\r\nKey facts\r\n\r\nRanked in the UK top 15 for research power in the latest Research Excellence Framework\r\nTop 100 worldwide for politics and international relations in the QS World University Rankings by Subject 2017\r\nCommitted to excellence in teaching, having won 13 Higher Education Academy awards\r\nExpert academics who contribute to public debate through national and international media, including such publications as The Independent, The LA Times and Le Monde\r\nFacilities\r\n\r\nGraduate School\r\n\r\nRepresenting the needs of postgraduate students across the University, the Graduate School provides research training and development for postgraduates and early career researchers.\r\n\r\nYou will have access to a dedicated space on University Park, which includes computer stations, Wi-Fi, study and social areas, and kitchen facilities.\r\n\r\nResearch support\r\n\r\nThe school runs a weekly colloquium for postgraduate research students, giving you the opportunity to present your work in front of other research students and staff with similar research interests. Organised by students and facilitated by the Director of Postgraduate Research, it acts as a supportive forum for presenting your work, testing your arguments, ideas and approaches, and developing your research design.\r\n\r\nResearch seminars\r\n\r\nWe offer research seminars for staff and postgraduate research students through our research centres and institutes. Each centre runs a full programme of workshops, reading groups, talks and conferences.\r\n\r\nTeaching experience\r\n\r\nSecond and third-year research students can apply to build their paid teaching experience by delivering undergraduate tutorials. Training courses on teaching methods are on offer and teaching is subject to availability and cannot be guaranteed.\r\n\r\nStudent Services\r\n\r\nStudent Services provide a range of support and information to enhance your student experience. They are part of a comprehensive network of University services that includes academic and disability support, counselling, financial support and childcare services.\r\n\r\nInternational Office\r\n\r\nThe International Office ensures EU and international students have all the information they need to live and study at Nottingham. It offers a welcome programme just before the start of the academic year.\r\n\r\nCentre for English Language Education\r\n\r\nAccredited by the British Council for the teaching of English in the UK, the University’s Centre for English Language Education provides high-quality preparation and English language support, as well as a social programme for its students.\r\n\r\nResearcher Development Programme\r\n\r\nWorking closely with academic schools, the Graduate School’s dedicated training team contribute to faculty specific and doctoral training programmes. They deliver core training in line with the standards set out by the UK’s major research funders through their researcher development programme.\r\n\r\nAs well as helping you to develop your research skills, this offers you opportunities to enhance your communication skills, career prospects, time management and entrepreneurship, as well as meet and work alongside researchers from other disciplines.\r\n\r\nFind a supervisor\r\n\r\nYou will be assigned two supervisors appropriate to your field. Please make sure that we have a supervisor who shares an interest in your proposed area of research before applying. Details of research supervisors at the University can also be found on our research A to Z.\r\n\r\nThe school offers supervision in most subject areas within international relations and security, British and comparative politics, and political theory.\r\n\r\nCareers\r\n\r\nCareer destinations for our graduates include economists, management consultants, researchers, statisticians and university lecturers. Companies and organisations our graduates have gone to work for include Channel 4, the European Union, GCHQ, Reuters and the Thailand National Police Department.\r\n\r\nEmployability and average starting salary\r\n\r\n90% of postgraduates from the School of Politics and International Relations who were available for employment secured work or further study within six months of graduation. £22,429 was the average starting salary, with the highest being £29,000.*\r\n\r\n* Known destinations of full-time home postgraduates 2015/16. Salaries are calculated based on the median of those in full-time paid employment within the UK.\r\n\r\nCareer and professional development\r\n\r\nWhether you are looking to enhance your career prospects or develop your knowledge, a postgraduate degree from the University of Nottingham can help take you where you want to be.\r\n\r\nEntry requirements\r\n\r\nMasters (or international equivalent) in a relevant discipline, with an average of 60% or above\r\n\r\nEnglish language requirements\r\n\r\nIELTS: 7.0 (no less than 6.0 in each element)', '22', '15', '35', '40 Bloomsbury Way -London- WC1A 2SE', NULL, '2022-04-11 17:36:50', '2022-04-11 17:36:50'),
(39, 'Doctor of Management (DMgt)', '1649684056portfolio-3.jpg', 'Doctoral', '6500', 'Today, the most innovative changes in the business world are created by people who think well beyond conventional wisdom. Webster University’s doctor of management degree is designed to stimulate innovative thinking that leads to breakthrough accomplishments.', 'Description\r\nThe curriculum focuses on leadership, organizational change, and other strategic areas of management in a distinctive integrated approach that blends theory and practice. You’ll become a “practitioner scholar” who designs, conducts, and successfully defends a doctoral research project in the areas of organizational development and leadership, using appropriate quantitative and/or qualitative research methods.\r\n\r\nWebster’s doctoral program encompasses a broad spectrum of theories and practices in organizational strategy, behavior and change. With this unique approach, you will develop the ability to critically evaluate and integrate fundamentally different concepts in solving real-world problems, and create new knowledge.\r\n\r\nPoints of Distinction\r\nThe Doctor of Management program is accredited by the Accreditation Council for Business Schools and Programs (ACBSP).\r\nAs a global university, Webster offers you the distinct advantage of benefiting from the collective wisdom of faculty and alumni throughout the world who have knowledge and experience in many disciplines.\r\nCourses taught by faculty with significant academic achievements and exceptional management expertise.', '22', '15', '35', '40 Bloomsbury Way -London- WC1A 2SE', NULL, '2022-04-11 17:34:16', '2022-04-11 17:34:16'),
(40, 'Doctor of Business Leadership', '1649684164portfolio-8.jpg', 'Doctoral', '6500', 'The curriculum comprises a proposal followed by a thesis as per the prescribed timetable on an approved topic.', 'Description\r\nThe curriculum comprises a proposal followed by a thesis as per the prescribed timetable on an approved topic.\r\n\r\nThe students must attend at least four colloquial to submit reports on the following:\r\n\r\nResearch proposal idea\r\nApproved research proposal and extensive literature review\r\nResearch methodology\r\nResearch results (findings)\r\nSatisfactory progress must be demonstrated at the colloquia to ensure re-registration.\r\n\r\n \r\n\r\nAt least three colloquia are held every year to provide open discussion of a candidate’s presentations on his/her research progress. It is strongly recommended that all registered doctoral candidates attend these colloquia since they provide opportunities for constructive interaction between academics and candidates.\r\n\r\nSTAGE 1: Research proposal module\r\n\r\nAfter registration, candidates must attend compulsory research proposal module workshops. For candidates residing in South Africa, research proposal module workshops are conducted over weekends, for a period of six months. For international candidates, dates for the workshops will be communicated.\r\n\r\nColloquium: Research proposal idea and literature overview\r\nSTAGE 2: Full thesis module and colloquia\r\n\r\nThis includes compulsory presentations at three colloquia and the writing of the thesis.\r\n\r\nFirst colloquium: Approved research proposal and extensive literature overview\r\nSecond colloquium: Research methodology\r\nThird colloquium: Presentation of the research results, which entails the successful defence of the final results\r\nCompletion of Degree\r\n\r\nCandidates will have a minimum of two years and a maximum of six years in which to complete the DBL degree successfully.', '22', '15', '35', '40 Bloomsbury Way -London- WC1A 2SE', NULL, '2022-04-11 17:36:04', '2022-04-11 17:36:04'),
(30, 'Master of Public Administration', '1649681597Layer-136-1-300x300.png', 'Masters Degrees', '5000', 'The EMPA program is designed for public sector leaders throughout the world with a minimum of 5-7 years of progressive leadership experience and for experienced leaders in the nonprofit and private sectors', 'Description\r\nThe EMPA program is designed for public sector leaders throughout the world with a minimum of 5-7 years of progressive leadership experience and for experienced leaders in the nonprofit and private sectors who deal extensively with government officials. You will participate in the program as part of a learning cohort, and the one-course-at-a-time online structure will enable you to maintain a work/life balance as you immerse yourself in each topic. Your learning experience will begin with an orientation and executive session in united kingdom. Approximately one year later, for a second executive session. The EMPA program will end in united kingdom, where you will present your applied projects.\r\n\r\nAs a student in the EMPA program, you will expand the breadth and depth of your professional network. The online curriculum will attract a more geographically diverse pool of applicants, both nationally and internationally. The executive sessions in united kingdom will further enable you to develop deeper relationships with your classmates. EMPA students will be selected based on their ability to demonstrate the value they would add to the learning experience of the entire class, and a new cohort', '48', '36', '72', '40 Bloomsbury Way -London- WC1A 2SE', NULL, '2022-04-11 16:53:17', '2022-04-11 16:53:17'),
(38, 'Master of Legal Studies in European Business Law', '1649682428legal.jpg', 'Masters Degrees', '6300', 'The MA in Conflict Resolution and Mediation is framed within the perspective of conflict studies. It offers participants an overview of recent knowledge about the conflict and develop skills and abilities in the different techniques of resolution / conflict transformation / disputes.', 'Description\r\nThis postgraduate program is tailored specifically for people without a law degree working at the intersection of law, business and technical fields.', '48', '36', '72', '40 Bloomsbury Way -London- WC1A 2SE', NULL, '2022-04-11 17:07:08', '2022-04-11 17:07:08'),
(43, 'Doctor of Economics', '1649684326qtq50-PqYxHz.jpeg', 'Doctoral', '6300', 'The PhD program is a research-oriented degree program. It is designed to enable students to concentrate in a specialized field, and to provide them the opportunity to do original, fundamental research in that field. The program prepares students for a teaching and/or research career in universities, research institutions, businesses and in the government.', 'Description\r\nThe PhD program is a research-oriented degree program. It is designed to enable students to concentrate in a specialized field, and to provide them the opportunity to do original, fundamental research in that field. The program prepares students for a teaching and/or research career in universities, research institutions, businesses and in the government.\r\n\r\nThe PhD program focuses on original research by the student, but also requires course-work. Doctoral students proceed from admission to the program, to candidacy for the degree, and then to defense of the thesis. Each has a thesis supervisor who oversees the student’s research. Students obtain candidacy by successful completing of a qualifying examination. A full-time student making good progress is expected to be able to complete the PhD degree in four years. The first two years of the program will normally be devoted to coursework, leading to the major field examination and a research paper. After that, the student will begin to write the thesis.\r\n\r\nResearch Foci\r\n\r\nBesides microeconomics, macroeconomics, and econometrics, the Department’s research areas focus on: economic growth and development, industrial organization, international economics, China economy, experimental and behavioral economics, and labor economics.\r\n\r\neconomics\r\nAdmission Requirements\r\n\r\ni. General Admission Requirements\r\n\r\nApplicants seeking admission to a master’s degree should have:\r\n\r\nobtained a bachelor’s degree from a recognized institution, or an approved equivalent qualification;\r\nii. English Language Admission Requirements\r\nYou have to fulfill English Language requirements with one of the following proficiency attainments*:\r\n\r\nTOEFL-iBT 80\r\nTOEFL-pBT 550\r\nIELTS (Academic Module) Overall score: 6.0 and all sub-scores: 5.5\r\niii. Program-Specific Admission Requirements\r\nApplicants should have a satisfactory score in GMAT or GRE, on top of (i) and (ii) above\r\n\r\n*If your first language is English, and your bachelor’s degree or equivalent qualification was awarded by an institution where the medium of instruction was English, you will be waived from fulfilling the above English Language requirements.', '22', '15', '35', '40 Bloomsbury Way -London- WC1A 2SE', NULL, '2022-04-11 17:38:46', '2022-04-11 17:38:46');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `disc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `image`, `name`, `date`, `disc`, `created_at`, `updated_at`) VALUES
(2, '16477058071-263x263.jpg', 'Diploma in Legal Studies', 'March 2, 2021 - 3:00 pm', 'This online Diploma in Legal Studies course from International College gives you the opportunity to study key subjects in legal studies, greatly increasing your understanding and knowledge of legal systems and related procedures and practices.  You will review the types of law and how they are created, how the adversary legal system operates, and what types of legal procedures there are.', '2022-03-19 13:46:19', '2022-03-19 14:03:27'),
(3, '16477058683-263x263.jpg', 'Project Management Professional (PMP)', 'October 6, 2021 - 1:00 pm', 'As a PMI-registered education provider, ESS has the qualifications to guide participants through the PMP certification process. This includes offering a PMP preparation course that provides candidates with the knowledge they need to successfully pass the PMP exam. The course credits may be applied toward the project management education requirement of the PMP certification.', '2022-03-19 14:04:28', '2022-03-19 14:04:28'),
(4, '16477059194-263x263.jpg', 'Entrepreneurship', 'November 11, 2021 - 7:00 am', 'his online business course will teach you how large-scale organizations are managed, the structures and objectives involved, and how to evaluate a company’s performance by using key performance indicators (KPIs). You will be more aware of business management styles and the environmental factors management should consider. You will know the function of human resource managers, operations managers, project managers and accountants. You will gain knowledge of the systems development life cycle. This course will help you recognize the personal qualities of an entrepreneur and the most important factors that an entrepreneur should consider to be successful.', '2022-03-19 14:05:20', '2022-03-19 14:05:20');

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `name`, `phone`, `email`, `course`, `created_at`, `updated_at`) VALUES
(2, 'Mohamed Mohamed Ali', '01022630262', 'samehdesigner6@gmail.com', 'Master in Economics and Political Science', '2022-03-19 15:08:36', '2022-03-19 15:08:36'),
(3, 'Tekno Trans', '01022630272', 'samehdesigner6@gmail.com', 'Master in Economics and Political Science', '2022-03-19 15:08:50', '2022-03-19 15:08:50'),
(4, 'Adel Azez', '01068526660', 'adelaziz0050@gmail.com', 'Master of Global Management', '2022-03-19 15:09:01', '2022-03-19 15:09:01'),
(5, 'sameh mohamed', '01022630272', 'samehdesigner6@gmail.com', 'Master of Education in Educational Leadership', '2022-03-20 21:16:51', '2022-03-20 21:16:51');

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` bigint UNSIGNED NOT NULL,
  `page_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_icon_1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_link_1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_icon_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_link_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_icon_3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_link_3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_icon_4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_link_4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_heading` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_disc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tab_title_1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tab_disc_1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tab_title_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tab_disc_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tab_title_3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tab_disc_3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_heading` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_disc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `select_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `select_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `select_disc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `select_icon_1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `select_heading_1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `select_disc_1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `select_icon_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `select_heading_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `select_disc_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_heading` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_disc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `page_name`, `social_icon_1`, `social_link_1`, `social_icon_2`, `social_link_2`, `social_icon_3`, `social_link_3`, `social_icon_4`, `social_link_4`, `phone`, `mail`, `slider_image`, `slider_heading`, `slider_disc`, `button_text`, `button_link`, `tab_title_1`, `tab_disc_1`, `tab_title_2`, `tab_disc_2`, `tab_title_3`, `tab_disc_3`, `course_heading`, `course_disc`, `select_image`, `select_title`, `select_disc`, `select_icon_1`, `select_heading_1`, `select_disc_1`, `select_icon_2`, `select_heading_2`, `select_disc_2`, `form_title`, `event_heading`, `event_disc`, `created_at`, `updated_at`) VALUES
(1, 'Home Page', '<i class=\"fa-brands fa-facebook\"></i>', 'https://www.facebook.com/', '<i class=\"fa-brands fa-twitter\"></i>', 'https://twitter.com/', '<i class=\"fa-brands fa-linkedin\"></i>', 'https://www.linkedin.com/', '<i class=\"fa-brands fa-instagram\"></i>', 'https://www.instagram.com/', '0020102263027255', 'info@imctgroup.com', '16477427083-263x263.jpg', 'WE ENSURE BETTER EDUCATION FOR A BETTER WORLD', 'In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of the space telescope known as the Hubble.', 'Get Startedddd', 'http://imctlearn.com/', 'Learn Online Courses', 'Usage of the Internet is becoming more common due to rapid advancement of technology.', 'No.1 of universities', 'For many of us, our very first experience of learning about the celestial bodies begins when we saw our first.', 'Huge Library', 'If you are a serious astronomy fanatic like a lot of us are, you can probably remember that one event.', 'Popular Courses we offer', 'There is a moment in the life of any aspiring.', '1647980607post-2.jpg', 'Get reduced fee during this Summer!', 'inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.', '<i class=\"fa-solid fa-graduation-cap\"></i>', 'Expert Instructors', 'Usage of the Internet is becoming more common due to rapid advancement of technology and power.', '<i class=\"fa-solid fa-file-certificate\"></i>', 'Certification', 'Usage of the Internet is becoming more common due to rapid advancement of technology and power.', NULL, 'Upcoming Events of our Instituteee', 'If you are a serious astronomy fanatic like a lot of us', NULL, '2022-03-22 18:23:27');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` bigint UNSIGNED NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$1szhP6PblSUALKCvffq9aO9horwCv7HKuEtm1m.WBvV87cRl71Dhm', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2022_03_16_160805_create_courses_table', 1),
(2, '2022_03_17_182352_create_homes_table', 2),
(3, '2022_03_19_134437_create_categories_table', 3),
(4, '2022_03_19_150019_create_events_table', 4),
(5, '2022_03_19_162920_create_forms_table', 5),
(6, '2022_03_19_233036_create_abouts_table', 6),
(7, '2022_03_20_135846_create_logins_table', 7),
(8, '2022_03_22_140536_create_partners_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint UNSIGNED NOT NULL,
  `page_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Partner',
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `page_name`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Partner', '16479622292213213.jpg', '2022-03-22 13:17:09', '2022-03-22 13:17:09'),
(4, 'Partner', '1647962397Untitled-2.jpg', '2022-03-22 13:19:57', '2022-03-22 13:19:57'),
(5, 'Partner', '1647962401Untitled-2-copy.jpg', '2022-03-22 13:20:01', '2022-03-22 13:20:01'),
(6, 'Partner', '1647962409Untitled-2-copy-1.jpg', '2022-03-22 13:20:09', '2022-03-22 13:20:09'),
(7, 'Partner', '1647962413Untitled-2-copy333.jpg', '2022-03-22 13:20:13', '2022-03-22 13:20:13'),
(9, 'Partner', '1647967328Untitled-288.jpg', '2022-03-22 14:42:08', '2022-03-22 14:42:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `verfies`
--

CREATE TABLE `verfies` (
  `id` bigint UNSIGNED NOT NULL,
  `number` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `natoinalty` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `study` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verfies`
--

INSERT INTO `verfies` (`id`, `number`, `name`, `natoinalty`, `study`, `image`, `created_at`, `updated_at`) VALUES
(7, '14045', 'MOHAMMED SAEED M ALQAHTANI', 'Saudi', 'Master in Political Science and International Relations', '16483075411-Copy-45.jpg', '2022-03-26 19:12:21', '2022-03-26 19:12:21'),
(4, '14049', 'SAAD SALEH KHUDHAIR', 'Iraqi', 'Master in Political Science and International Relations', '16481361301-Copy-45.jpg', '2022-03-24 19:35:30', '2022-03-24 19:35:30'),
(5, '14048', 'AHMED ADEM', 'Ethiopian', 'Master in Political Science and International Relations', '16481362461-Copy-44.jpg', '2022-03-24 19:37:26', '2022-03-24 19:37:26'),
(6, '14046', 'MOHAMED ISMAIL MSHEIEL', 'Syrian', 'Master in Political Science and International Relations', '16481371301-Copy-43.jpg', '2022-03-24 19:52:10', '2022-03-24 19:52:10'),
(8, '14032', 'ABDELBADIE SAAD IBRAHIM AHMED OTHMAN', 'Egyptian', 'Master in International Commercial Arbitration', '16483076011-Copy-41.jpg', '2022-03-26 19:13:21', '2022-03-26 19:13:21'),
(9, '14030', 'SAEED ABBOUD SAEED ABBOUD', 'Emirates', 'Master in International Commercial Arbitration', '16483076321-Copy-40.jpg', '2022-03-26 19:13:52', '2022-03-26 19:13:52'),
(10, '14031', 'MAJEED RASHID FARHAN', 'Iraqi', 'Master in Human Resources Management', '16483076781-Copy-39.jpg', '2022-03-26 19:14:38', '2022-03-26 19:14:38'),
(11, '14023', 'MOHAMMED ALHUSSAIN M ALBARIQI', 'Saudi', 'Master in Human Resources Management', '16483077091-Copy-38.jpg', '2022-03-26 19:15:09', '2022-03-26 19:15:09'),
(12, '14022', 'NASER MOHAMMAD M ALBARGY', 'Saudi', 'Master in Human Resources Management', '16483077431-Copy-37.jpg', '2022-03-26 19:15:43', '2022-03-26 19:15:43'),
(13, '14021', 'FATIMAH ALHASSAN A ABU FALAH', 'Saudi', 'Master in Human Resources Management', '16483078661-Copy-36.jpg', '2022-03-26 19:17:46', '2022-03-26 19:17:46'),
(14, '14040', 'LAILA AHMED MOHAMED MOHAMED', 'Iraqi', 'Master in Business Administration', '16483084751-Copy-35.jpg', '2022-03-26 19:27:55', '2022-03-26 19:27:55'),
(15, '14035', 'HAIDER NADHIM ABDULRAZZAQ SHUBBAR ALI', 'Iraqi', 'Master in Business Administration', '16483085111-Copy-34.jpg', '2022-03-26 19:28:31', '2022-03-26 19:28:31'),
(16, '14025', 'ABEER MUSTAFA H MAMRJI', 'Saudi', 'Master in Business Administration', '16483085401-Copy-33.jpg', '2022-03-26 19:29:00', '2022-03-26 19:29:00'),
(17, '14024', 'AMAL MOHAMMED A ALBARIQI', 'Saudi', 'Master in Business Administration', '16483085721-Copy-32.jpg', '2022-03-26 19:29:32', '2022-03-26 19:29:32'),
(18, '14036', 'BACHIR ALARAB', 'Egyptian', 'Doctorate in Political Science and International Relations', '16483086021-Copy-31.jpg', '2022-03-26 19:30:02', '2022-03-26 19:30:02'),
(19, '14034', 'MUSABEH SAEED ALI BALEJAID ALKETBI', 'Emirates', 'Doctorate in Political Science and International Relations', '16483086291-Copy-30.jpg', '2022-03-26 19:30:29', '2022-03-26 19:30:29'),
(20, '14027', 'EMAD EDDIN.A.M.A.AL AZEH', 'Jordanian', 'Doctorate in Political Science and International Relations', '16483086601-Copy-29.jpg', '2022-03-26 19:31:00', '2022-03-26 19:31:00'),
(21, '14020', 'ABDULABAS MOHAMMED ALWAN AL-MARYANI', 'Iraqi', 'Doctorate in Political Science and International Relations', '16483086851-Copy-28.jpg', '2022-03-26 19:31:25', '2022-03-26 19:31:25'),
(22, '14026', 'MA`MOUN AHMAD IBRAHIM AL OMARI', 'Jordanian', 'Doctorate in International Commercial Arbitration', '16483087191-Copy-27.jpg', '2022-03-26 19:31:59', '2022-03-26 19:31:59'),
(23, '14047', 'MOHANED AZHARY MAMOUN ELSIDEEG', 'Sudanese', 'Doctorate in Business Administration', '16483087451-Copy-26.jpg', '2022-03-26 19:32:25', '2022-03-26 19:32:25'),
(24, '14041', 'SANDRA ABI DAHER', 'Lebanese', 'Doctorate in Business Administration', '16483088501-Copy-25.jpg', '2022-03-26 19:34:10', '2022-03-26 19:34:10'),
(25, '14039', 'MOHAMED MZID', 'Tunisian', 'Doctorate in Business Administration', '16483088861-Copy-24.jpg', '2022-03-26 19:34:46', '2022-03-26 19:34:46'),
(26, '14038', 'ABDULLAH AYID A ALZAHRANI', 'Saudi', 'Doctorate in Business Administration', '16483089121-Copy-23.jpg', '2022-03-26 19:35:12', '2022-03-26 19:35:12'),
(27, '14033', 'ABLA YOUSEF JERIES DABABNEH', 'Jordanian', 'Doctorate in Business Administration', '16483089391-Copy-22.jpg', '2022-03-26 19:35:39', '2022-03-26 19:35:39'),
(28, '14028', 'BASIM THABIT HAMZAH ALSHAHER', 'Iraqi', 'Doctorate in Business Administration', '16483089651-Copy-21.jpg', '2022-03-26 19:36:05', '2022-03-26 19:36:05'),
(29, '14043', 'HIBA GHASSAN KADDAH', 'Lebanese', 'Doctorate in Human Resources Management', '16483089901-Copy-20.jpg', '2022-03-26 19:36:30', '2022-03-26 19:36:30'),
(30, '14037', 'HUDA BAQER NEAMAT ALKHOORI', 'Emirates', 'Doctorate in Human Resources Management', '16483090191-Copy-19.jpg', '2022-03-26 19:36:59', '2022-03-26 19:36:59'),
(31, '14029', 'ALI HASAN ABDULAH ALHAMMAD', 'Jordanian', 'Doctorate in Human Resources Management', '16483090881-Copy-18.jpg', '2022-03-26 19:38:08', '2022-03-26 19:38:08'),
(32, '14019', 'RIYADH ABDULHABEB ALI BIN TALEB', 'Yemeni', 'Master in Business Administration', '16483091281-Copy-17.jpg', '2022-03-26 19:38:48', '2022-03-26 19:38:48'),
(33, '14018', 'BECHARA GERGI SALIBA', 'Lebanese', 'Master in Political Science and International Relations', '16483091521-Copy-16.jpg', '2022-03-26 19:39:12', '2022-03-26 19:39:12'),
(34, '14017', 'MUSTAFA IDAYYIR ABDULHASAN AL-NWAISSRI', 'Iraqi', 'Doctorate in Business Administration', '16483091981-Copy-15.jpg', '2022-03-26 19:39:58', '2022-03-26 19:39:58'),
(35, '14016', 'LAILA AHMED MOHAMED MOHAMED', 'Egyptian', 'Master in Human Resources Management', '16483092691-Copy-14.jpg', '2022-03-26 19:41:09', '2022-03-26 19:41:09'),
(37, '14015', 'MOHAMMED KHALFAN SALIM AL RAWAHI', 'Omani', 'Master in Business Administration', '16483093061-Copy-13.jpg', '2022-03-26 19:41:46', '2022-03-26 19:41:46'),
(38, '14014', 'ALI HASSAN SALMAN NASSER', 'Emirates', 'Doctorate in Political Science and International Relations', '16483093361-Copy-12.jpg', '2022-03-26 19:42:16', '2022-03-26 19:42:16'),
(39, '14013', 'GHALIA RADWAN HAJJAR', 'Syrian', 'Master in Political Science and International Relations', '16483093711-Copy-11.jpg', '2022-03-26 19:42:51', '2022-03-26 19:42:51'),
(40, '14012', 'MUAADI FAISAL ALI SANAD', 'Yemeni', 'Master in Political Science and International Relations', '16483093941-Copy-10.jpg', '2022-03-26 19:43:14', '2022-03-26 19:43:14'),
(41, '14011', 'HAITHAM MOHAMMED A.ALDAKHIL', 'Saudi', 'Doctorate in Political Science and International Relations', '16483094171-Copy-9.jpg', '2022-03-26 19:43:37', '2022-03-26 19:43:37'),
(42, '14010', 'SAHAR ABDEL HALIM SALAMEH MRAYYAN', 'Jordanian', 'Master in Human Resources Management', '16483094521-Copy-8.jpg', '2022-03-26 19:44:12', '2022-03-26 19:44:12'),
(43, '14009', 'MAHDI SALEH KHALAF ALZAYIR', 'Iraqi', 'Master in Business Administration', '16483095121-Copy-7.jpg', '2022-03-26 19:45:12', '2022-03-26 19:45:12'),
(44, '14008', 'SAEED AHMAD ALSHIHABEE', 'Syrian', 'Master in Business Administration', '16483095341-Copy-6.jpg', '2022-03-26 19:45:34', '2022-03-26 19:45:34'),
(45, '14007', 'SAUED EID K ALEMMRANI', 'Saudi', 'Master in Business Administration', '16483096001-Copy-5.jpg', '2022-03-26 19:46:40', '2022-03-26 19:46:40'),
(46, '14006', 'ABDELQADER N.A.MEHYAR', 'Jordanian', 'Master in Business Administration', '16483096301-Copy-4.jpg', '2022-03-26 19:47:10', '2022-03-26 19:47:10'),
(47, '14005', 'YOUSSEF ANNAN', 'Lebanese', 'Master in Business Administration', '16483096561-Copy-3.jpg', '2022-03-26 19:47:36', '2022-03-26 19:47:36'),
(48, '14004', 'ALAA ELSAYED ABBAS MOBARAK', 'Egyptian', 'Master in Business Administration', '16483096831-Copy-2.jpg', '2022-03-26 19:48:03', '2022-03-26 19:48:03'),
(49, '14003', 'ALI AWAD MOHAMMED ITHAWI', 'Iraqi', 'Master in Business Administration', '16483097061-Copy-1.jpg', '2022-03-26 19:48:26', '2022-03-26 19:48:26'),
(50, '14002', 'ALI OMAR MOHAMMED ALFAQIH ALHAMIRI', 'Omani', 'Master in Political Science and International Relations', '16483097311-Copy.jpg', '2022-03-26 19:48:51', '2022-03-26 19:48:51'),
(51, 'DH1385', 'MAYTHAM FAYEZ MEZHER ALGASID', 'Iraqi', 'Doctorate in Human Resources Management', '16483098021-Copy-84.jpeg', '2022-03-26 19:50:02', '2022-03-26 19:50:02'),
(52, 'MIC1371', 'RAZ SHAHO MOHAMMED AL-JAF', 'Iraqi', 'Master in International Commercial Arbitration', '16483098331-Copy-83.jpeg', '2022-03-26 19:50:33', '2022-03-26 19:50:33'),
(53, 'MPS1355', 'MOHAN MAHI SHABEEB AL-KHAFAJI', 'Iraqi', 'Master in Political Science and International Relations', '16483098661-Copy-82.jpeg', '2022-03-26 19:51:06', '2022-03-26 19:51:06'),
(54, 'MPS1354', 'OSAMAH KHORSHEED BARANI', 'Iraqi', 'Master in Political Science and International Relations', '16483098961-Copy-81.jpeg', '2022-03-26 19:51:36', '2022-03-26 19:51:36'),
(55, 'MB1381', 'ODAY MUHI HASHIM AL-MAMOORI', 'Iraqi', 'Master in Business Administration', '16483099361-Copy-80.jpeg', '2022-03-26 19:52:16', '2022-03-26 19:52:16'),
(56, 'MB1377', 'AMMAR SHOAEB HAMAD AL-JUMAILY', 'Iraqi', 'Master in Business Administration', '16483099621-Copy-79.jpeg', '2022-03-26 19:52:42', '2022-03-26 19:52:42'),
(57, 'MB1368', 'NOORA FRAIDOON AMRO', 'Iraqi', 'Master in Business Administration', '16483100051-Copy-78.jpeg', '2022-03-26 19:53:25', '2022-03-26 19:53:25'),
(58, 'MB1337', 'AHMED ABDULHUSSEIN MOZAN AL-ZUBAIDI', 'Iraqi', 'Master in Business Administration', '16483100401-1.jpeg', '2022-03-26 19:54:00', '2022-03-26 19:54:00'),
(59, 'PHDP1033', 'HAYDER NAJM ABED ALSAEDI', 'Iraqi', 'Ph.D. in Political Science and International Relations', '16483100671-Copy-77.jpeg', '2022-03-26 19:54:27', '2022-03-26 19:54:27'),
(60, 'DPS1369', 'AHMED KHALAF FARHAN', 'Iraqi', 'Doctorate in Political Science and International Relations', '16483100991-Copy-76.jpeg', '2022-03-26 19:54:59', '2022-03-26 19:54:59'),
(61, 'DPS1335', 'AYAD NOORI SABBAR AL-RAWI', 'Iraqi', 'Doctorate in Political Science and International Relations', '16483101911-Copy-75.jpeg', '2022-03-26 19:56:31', '2022-03-26 19:56:31'),
(62, 'DPS1327', 'BASHAR MAHDI SALEH', 'Iraqi', 'Doctorate in Political Science and International Relations', '16483102781-Copy-74.jpeg', '2022-03-26 19:57:58', '2022-03-26 19:57:58'),
(63, 'DBP1325', 'MISHAN IBRAHIM HASSAN', 'Iraqi', 'Doctorate in Business Administration', '16483103041-Copy-73.jpeg', '2022-03-26 19:58:24', '2022-03-26 19:58:24'),
(64, 'DB1359', 'MOHAMEDELAMIN MUSTAFA OMER ELTINAY', 'Sudanese', 'Doctorate in Business Administration', '16483103381-Copy-72.jpeg', '2022-03-26 19:58:58', '2022-03-26 19:58:58'),
(65, 'MB1382', 'FAHAD JABER N ALOTAIBI', 'Kuwaiti', 'Master in Business Administration', '16483103721-Copy-71.jpeg', '2022-03-26 19:59:32', '2022-03-26 19:59:32'),
(66, 'MPS1358', 'RODAH SULEIMAN SAID DUALE', 'Somali', 'Master in Political Science and International Relations', '16483104021-Copy-70.jpeg', '2022-03-26 20:00:02', '2022-03-26 20:00:02'),
(67, 'DPS1376', 'TAGELDIN EL TEGANI MUKHTAR ABUELGASSIM', 'Sudanese', 'Doctorate in Political Science and International Relations', '16483106111-Copy-69.jpeg', '2022-03-26 20:03:31', '2022-03-26 20:03:31'),
(68, 'MB1305', 'AHMED MOHAMMED HASSAN AL YAHMADI', 'Amani', 'Master in Business Administration', '16483106731-Copy-68.jpeg', '2022-03-26 20:04:33', '2022-03-26 20:04:33'),
(69, 'MIC1366', 'YASSER ABDELHAKIM YOUSSEF EMARA', 'Egyptian', 'Master in International Commercial Arbitration', '16483107081-Copy-67.jpeg', '2022-03-26 20:05:08', '2022-03-26 20:05:08'),
(70, 'DB1301', 'HITHAME ELSAYED ABO ELMATTI ELKHODRY', 'Egyptian', 'Doctorate in Business Administration', '16483107351-Copy-66.jpeg', '2022-03-26 20:05:35', '2022-03-26 20:05:35'),
(71, 'DB1313', 'MOHAMED ELWESIF AHMED MOHAMED ELWESIF', 'Egyptian', 'Doctorate in Business Administration', '16483108911-Copy-65.jpeg', '2022-03-26 20:08:11', '2022-03-26 20:08:11'),
(72, 'DH1308', 'HASSAN MOUSSA IMAM ATTALLA', 'Egyptian', 'Doctorate in Human Resources Management', '16483109191-Copy-64.jpeg', '2022-03-26 20:08:39', '2022-03-26 20:08:39'),
(73, 'DPS1309', 'AHMED SHAHAT AHMED SHALABY', 'Egyptian', 'Doctorate in Political Science and International Relations', '16483109391-Copy-63.jpeg', '2022-03-26 20:08:59', '2022-03-26 20:08:59'),
(74, 'MB1370', 'YOUSSEF CHARIB ELSAYED MOHAMED', 'Egyptian', 'Master in Business Administration', '16483109651-Copy-62.jpeg', '2022-03-26 20:09:25', '2022-03-26 20:09:25'),
(75, 'MB1316', 'MOHAMED MANSOUR ALI MANSOUR MOSTAFA', 'Egyptian', 'Master in Business Administration', '16483110001-Copy-61.jpeg', '2022-03-26 20:10:00', '2022-03-26 20:10:00'),
(76, 'MB1345', 'AHMED MAHMOUD ABDELRAZEK KHALIL EWAIDA', 'Egyptian', 'Master in Business Administration', '16483110331-Copy-60.jpeg', '2022-03-26 20:10:33', '2022-03-26 20:10:33'),
(77, 'MB1375', 'AHMED SAYED MOHAMED MAHMOUD FARES', 'Egyptian', 'Master in Business Administration', '16483111661-Copy-59.jpeg', '2022-03-26 20:12:47', '2022-03-26 20:12:47'),
(78, 'MB1318', 'NOHA SLEEM', 'Lebanese', 'Master in Business Administration', '16483112131-Copy-58.jpeg', '2022-03-26 20:13:33', '2022-03-26 20:13:33'),
(79, 'MB1350', 'NABIL SALHA', 'Lebanese', 'Master in Business Administration', '16483112341-Copy-57.jpeg', '2022-03-26 20:13:54', '2022-03-26 20:13:54'),
(80, 'MB1346', 'MOHAMAD HASSAN KRESHT', 'Lebanese', 'Master in Business Administration', '16483112781-Copy-56.jpeg', '2022-03-26 20:14:38', '2022-03-26 20:14:38'),
(81, 'DH1383', 'CAMILLE CHEDID', 'Lebanese', 'Doctorate in Human Resources Management', '16483790951-Copy-55.jpeg', '2022-03-27 15:04:55', '2022-03-27 15:04:55'),
(82, 'DB1315', 'ALIA ABDALLAH MAHFOUZ', 'Lebanese', 'Doctorate in Business Administration', '16483791361-Copy-54.jpeg', '2022-03-27 15:05:36', '2022-03-27 15:05:36'),
(84, 'MB1374', 'ABD AL AMIR IBRAHIM ATTIEH', 'Lebanese', 'Master in Business Administration', '16483791611-Copy-53.jpeg', '2022-03-27 15:06:01', '2022-03-27 15:06:01'),
(85, 'DPS1386', 'SALAM RASHAD SLIM', 'Lebanese', 'Doctorate  in Political Science and International Relations', '16483792261-Copy-52.jpeg', '2022-03-27 15:07:06', '2022-03-27 15:07:06'),
(86, 'DPS1336', 'KHALIL TOUFIC EL KHOURY', 'Lebanese', 'Doctorate in Political Science and International Relations', '16483792821-Copy-51.jpeg', '2022-03-27 15:08:02', '2022-03-27 15:08:02'),
(87, 'DPS1353', 'JEAN MICHEL AKL', 'Lebanese', 'Doctorate in Political Science and International Relations', '16483793101-Copy-50.jpeg', '2022-03-27 15:08:30', '2022-03-27 15:08:30'),
(88, 'DH1341', 'AMAL ABDUL HAMID NACHABE', 'Lebanese', 'Doctorate in Human Resources Management', '16483793361-Copy-49.jpeg', '2022-03-27 15:08:56', '2022-03-27 15:08:56'),
(89, 'MB1314', 'MOSAAB ABDULALIM GHAZAL', 'Syrian', 'Master in Business Administration', '16483793761-Copy-48.jpeg', '2022-03-27 15:09:36', '2022-03-27 15:09:36'),
(90, 'MPS1372', 'FAWAZ HUSSEIN ALTURK', 'Syrian', 'Master in Political Science and International Relations', '16483794001-Copy-47.jpeg', '2022-03-27 15:10:00', '2022-03-27 15:10:00'),
(91, 'MIC1331', 'GHALIA NABIL MOHYEDDIN', 'Syrian', 'Master in International Commercial Arbitration', '16483794221-Copy-46.jpeg', '2022-03-27 15:10:22', '2022-03-27 15:10:22'),
(92, 'DB1384', 'ABDULMAJID AYED ALODAT', 'Syrian', 'Doctorate in Business Administration', '16483794751-Copy-45.jpeg', '2022-03-27 15:11:15', '2022-03-27 15:11:15'),
(93, 'MB1342', 'RUBA TAMIM MAIA', 'Syrian', 'Master in Business Administration', '16483795041-Copy-44.jpeg', '2022-03-27 15:11:44', '2022-03-27 15:11:44'),
(94, 'MPS1332', 'ASSEEL TAMIM AL HOUSSIEN', 'Syrian', 'Master in Political Science and International Relations', '16483795311-Copy-43.jpeg', '2022-03-27 15:12:11', '2022-03-27 15:12:11'),
(95, 'DPS1357', 'HESHAM ABDLKAREM HUSSEIN', 'Yemeni', 'Doctorate in Political Science and International Relations', '16483795571-Copy-42.jpeg', '2022-03-27 15:12:37', '2022-03-27 15:12:37'),
(96, 'DPS1365', 'FADHL AHMED MOHAMMED AL-ABBASI', 'Yemeni', 'Doctorate in Political Science and International Relations', '16483795841-Copy-41.jpeg', '2022-03-27 15:13:04', '2022-03-27 15:13:04'),
(97, 'MB1364', 'FATHI YAHYA MOHMMED AL-AHMADI', 'Yemeni', 'Master in Business Administration', '16483796081-Copy-40.jpeg', '2022-03-27 15:13:29', '2022-03-27 15:13:29'),
(98, 'MB1363', 'ABDULLAH NOMAN MOHAMMED AHMAD', 'Yemeni', 'Master in Business Administration', '16483796761-Copy-39.jpeg', '2022-03-27 15:14:36', '2022-03-27 15:14:36'),
(99, 'MPS1362', 'ABDULAZIZ NOMAN MOHAMMED AHMED', 'Yemeni', 'Master in Political Science and International Relations', '16483797091-Copy-38.jpeg', '2022-03-27 15:15:09', '2022-03-27 15:15:09'),
(100, 'MPS1361', 'SAMAH HASAN ABDULLAH MOHAMMED ALKHAWI', 'Yemeni', 'Master in Political Science and International Relations', '16483797321-Copy-37.jpeg', '2022-03-27 15:15:32', '2022-03-27 15:15:32'),
(101, 'MB1360', 'HUSSEIN ALI AHMED NAJI', 'Yemeni', 'Master in Business Administration', '16483797591-Copy-36.jpeg', '2022-03-27 15:15:59', '2022-03-27 15:15:59'),
(102, 'DPS1352', 'TALAL KHIRALLAH S', 'Saudi', 'Doctorate in Political Science and International Relations', '16483798471-Copy-34.jpeg', '2022-03-27 15:17:27', '2022-03-27 15:17:27'),
(103, 'MPS1348', 'SAEED MOHAMMED HASSAN ALMASHI', 'Saudi', 'Master in Political Science and International Relations', '16483798701-Copy-33.jpeg', '2022-03-27 15:17:50', '2022-03-27 15:17:50'),
(104, 'DH1320', 'YOUSSEF MABROUK M ALMOWALLED', 'Saudi', 'Doctorate in Human Resources Management', '16483798931-Copy-32.jpeg', '2022-03-27 15:18:13', '2022-03-27 15:18:13'),
(105, 'DH1312', 'HASSAN SAEED MISFER ALZAHRANI', 'Saudi', 'Doctorate in Human Resources Management', '16483799201-Copy-31.jpeg', '2022-03-27 15:18:40', '2022-03-27 15:18:40'),
(106, 'DB1338', 'HAITHAM SIRAJ MITWALLI', 'Saudi', 'Doctorate in Business Administration', '16483799481-Copy-30.jpeg', '2022-03-27 15:19:08', '2022-03-27 15:19:08'),
(107, 'DB1303', 'FEHAID SALEM R ALAJMI', 'Saudi', 'Doctorate in Business Administration', '16483799771-Copy-29.jpeg', '2022-03-27 15:19:37', '2022-03-27 15:19:37'),
(108, 'DB1311', 'KHALID ABDULAZIZ D.BINJDEED', 'Saudi', 'Doctorate in Business Administration', '16483800171-Copy-28.jpeg', '2022-03-27 15:20:18', '2022-03-27 15:20:18'),
(109, 'MB1304', 'MOHAMMED SULAIMAN ABDUL RAHMAN HAWSAWI', 'Saudi', 'Master in Business Administration', '16483800511-Copy-27.jpeg', '2022-03-27 15:20:51', '2022-03-27 15:20:51'),
(110, 'MB1347', 'FAISAL AHMED ABU HAIMED', 'Saudi', 'Master in Business Administration', '16483800761-Copy-26.jpeg', '2022-03-27 15:21:16', '2022-03-27 15:21:16'),
(111, 'MB1334', 'GHAZI SAUD D.ALSHAMMRY', 'Saudi', 'Master in Business Administration', '16483801301-Copy-25.jpeg', '2022-03-27 15:22:10', '2022-03-27 15:22:10'),
(112, 'MB1324', 'ALI AHMED M AL MAHMOOD', 'Saudi', 'Master in Business Administration', '16483801571-Copy-24.jpeg', '2022-03-27 15:22:37', '2022-03-27 15:22:37'),
(113, 'MB1349', 'ABEER SAAD ABU HAIMED', 'Saudi', 'Master in Business Administration', '16483801831-Copy-23.jpeg', '2022-03-27 15:23:03', '2022-03-27 15:23:03'),
(114, 'MB1367', 'JAMAL FOUAD A BASSYONI', 'Saudi', 'Master in Business Administration', '16483802151-Copy-22.jpeg', '2022-03-27 15:23:35', '2022-03-27 15:23:35'),
(408, 'MBA837', 'ABDULLAH AHMED HANOOSH', 'Iraqi', 'Ph.D. in Political Science and International Relations', '16484695941-Copy-2 (4).jpeg', '2022-03-28 16:13:14', '2022-03-28 16:13:14'),
(116, 'DB1378', 'JAMAL ABDULRAHMAN AMIN AKHOUN', 'Saudi', 'Doctorate in Business Administration', '16483802381-Copy-21.jpeg', '2022-03-27 15:23:58', '2022-03-27 15:23:58'),
(117, 'MB1379', 'AMAL HAQYA A ISKANDARANI', 'Saudi', 'Master in Business Administration', '16483802711-Copy-20.jpeg', '2022-03-27 15:24:31', '2022-03-27 15:24:31'),
(118, 'MB1380', 'AMANI ABDULAZIZ A MOHURGI', 'Saudi', 'Master in Business Administration', '16483803021-Copy-19.jpeg', '2022-03-27 15:25:02', '2022-03-27 15:25:02'),
(119, 'MB1373', 'WAFA MAHMOUD ABDULHAMEED SAYED', 'Emirates', 'Master in Business Administration', '16483803311-Copy-18.jpeg', '2022-03-27 15:25:31', '2022-03-27 15:25:31'),
(120, 'DB1328', 'MOHANNAD MOHAMMAD DAWOD HAMDAN', 'Jordanian', 'Doctorate in Business Administration', '16483803571-Copy-17.jpeg', '2022-03-27 15:25:57', '2022-03-27 15:25:57'),
(121, 'DH1323', 'MAHA M. D.EL-BITAR', 'Jordanian', 'Doctorate in Human Resources Management', '16483803801-Copy-16.jpeg', '2022-03-27 15:26:20', '2022-03-27 15:26:20'),
(122, 'MPS1351', 'MAHMOUD ABDEL WAHHAB MAHMOUD KHALIL', 'Jordanian', 'Master in Political Science and International Relations', '16483804581-Copy-15.jpeg', '2022-03-27 15:27:38', '2022-03-27 15:27:38'),
(417, 'HR827', 'ALSHARANA YAHYA ABDULLAH', 'saudi', 'Master in Human Resource Management', '16484701041.jpg', '2022-03-28 16:21:44', '2022-03-28 16:21:44'),
(125, 'DB1344', 'MOHAMMAD ABDALLAH MOHAMMAD SAWAN', 'Jordanian', 'Doctorate in Business Administration', '16483804841-Copy-14.jpeg', '2022-03-27 15:28:04', '2022-03-27 15:28:04'),
(126, 'DB1343', 'MOHAMMAD KHALEEL MOHAMMAD ALQAISI', 'Jordanian', 'Doctorate in Business Administration', '16483805171-Copy-13.jpeg', '2022-03-27 15:28:37', '2022-03-27 15:28:37'),
(127, 'DB1317', 'MOHAMAD AHMED OTHMAN ATYYAT', 'Jordanian', 'Doctorate in Business Administration', '16483806191-Copy-12.jpeg', '2022-03-27 15:30:19', '2022-03-27 15:30:19'),
(128, 'MH1333', 'FATIMA YOUSEF NAYEF ABABNEH', 'Jordanian', 'Master in Human Resources Management', '16483806401-Copy-11.jpeg', '2022-03-27 15:30:40', '2022-03-27 15:30:40'),
(129, 'DPS1356', 'ABDUL HAI ABEDALAZIZ A. ALRAMADIN', 'Jordanian', 'Doctorate in Political Science and International Relations', '16483806691-Copy-10.jpeg', '2022-03-27 15:31:09', '2022-03-27 15:31:09'),
(130, 'MB1302', 'TARIQ (MOH`D GHALIB) MOHMOUD HAMDI', 'Jordanian', 'Master in Business Administration', '16483807011-Copy-9.jpeg', '2022-03-27 15:31:41', '2022-03-27 15:31:41'),
(131, 'DB1321', 'SADDAM MAHMOUD AHMAD ALZOUBI', 'Jordanian', 'Doctorate in Business Administration', '16483807221-Copy-8.jpeg', '2022-03-27 15:32:02', '2022-03-27 15:32:02'),
(132, 'DB1307', 'SAYEL MOHAMAD ALI MEQBIL FAYYAD', 'Jordanian', 'Doctorate in Business Administration', '16483807421-Copy-7.jpeg', '2022-03-27 15:32:22', '2022-03-27 15:32:22'),
(133, 'DB1340', 'SHAHNAZ (M.S) .ABDAL RAHMAN AL OTAIBI', 'Jordanian', 'Doctorate in Business Administration', '16483807661-Copy-6.jpeg', '2022-03-27 15:32:46', '2022-03-27 15:32:46'),
(134, 'DB1330', 'RAWAN LUTFI ELYYAN KISWANI', 'Jordanian', 'Doctorate in Business Administration', '16483808811-Copy-5.jpeg', '2022-03-27 15:34:41', '2022-03-27 15:34:41'),
(135, 'MIC1329', 'RADWAN AHMAD EID ALDHMOUR', 'Jordanian', 'Master in International Commercial Arbitration', '16483809131-Copy-4.jpeg', '2022-03-27 15:35:13', '2022-03-27 15:35:13'),
(136, 'MB1310', 'KHALED IBRAHIM AHMED AL-THAHER', 'Jordanian', 'Master in Business Administration', '16483809361-Copy-3.jpeg', '2022-03-27 15:35:36', '2022-03-27 15:35:36'),
(137, 'MB1326', 'HANAN SHARIF YOUSEF ALQUBBAJ', 'Jordanian', 'Master in Business Administration', '16483810031.jpeg', '2022-03-27 15:36:43', '2022-03-27 15:36:43'),
(412, 'PHDPS887', 'ABDULLAH AHMED HANOOSH', 'Iraqi', 'Ph.D. in Political Science and International Relations', '16484699711-Copy-2 (6).jpeg', '2022-03-28 16:19:31', '2022-03-28 16:19:31'),
(140, 'MB1339', 'JAMILAH HAMDAN MAHMOUD AL NAJAR', 'Jordanian', 'Master in Business Administration', '16483810511-Copy-2.jpeg', '2022-03-27 15:37:31', '2022-03-27 15:37:31'),
(141, 'DPS1322', 'BASSIMA VICTOR JAMIL SAM’AN', 'Jordanian', 'Doctorate in Political Science and International Relations', '16483810811-Copy-1.jpeg', '2022-03-27 15:38:01', '2022-03-27 15:38:01'),
(142, 'MH1319', 'IBTIHAJE EL SENNE', 'Lebanese', 'Master in Human Resources Management', '16483811141-Copy.jpeg', '2022-03-27 15:38:34', '2022-03-27 15:38:34'),
(143, 'DPSR1189', 'Galal Saad OSMAN SALEH', 'Egyptian', 'Ph.D. in Political Science and International Relations', '1648381142WhatsApp-Image-2018-09-15-at-12.30.56-PM.jpeg', '2022-03-27 15:39:02', '2022-03-27 15:39:02'),
(144, 'MBA926', 'MOHAMED ELWESIF AHMED MOHAMED ELWESIF', 'Egyptian', 'Master in Business Administration', '164838118725252.jpg', '2022-03-27 15:39:47', '2022-03-27 15:39:47'),
(145, 'PHDPS916', 'LAMEES SAEED ABDULNABI DHIF', 'Bahrain', 'Ph.D. in Political Science and International Relations', '16483812081-Copy-167.jpeg', '2022-03-27 15:40:08', '2022-03-27 15:40:08'),
(146, 'HR872', 'SOUAD BASHIR ABULSAYAN', 'Libyan', 'Master in Human Resource Management', '16483812551-Copy-166.jpeg', '2022-03-27 15:40:55', '2022-03-27 15:40:55'),
(147, 'PS854', 'HANAN.M.AHMED ELSHAREF', 'Libyan', 'Master in Political Science and International Relations', '16483812801-Copy-165.jpeg', '2022-03-27 15:41:20', '2022-03-27 15:41:20'),
(148, 'PHD851', 'HUSSEIN MOHAMMED HUSSIEN ABDLMOLA', 'Libyan', 'Ph.D. in Business Administration', '16483813121-Copy-163.jpeg', '2022-03-27 15:41:52', '2022-03-27 15:41:52'),
(149, 'MBA876', 'SOBHI AHMED ELSAYED ELBATANOUI', 'Egyptian', 'Master in Business Administration', '16483813351-Copy-162.jpeg', '2022-03-27 15:42:15', '2022-03-27 15:42:15'),
(150, 'MBA1011', 'WALEED HMED SALIH ALMASRI', 'Jordanian', 'Master in Business Administration', '16483815741-Copy-161.jpeg', '2022-03-27 15:46:14', '2022-03-27 15:46:14'),
(151, 'PHDI1107', 'MUGRI YAQOUB ALI H', 'Saudi', 'Ph.D. in International Arbitration', '16483816011-Copy-160.jpeg', '2022-03-27 15:46:41', '2022-03-27 15:46:41'),
(152, 'MBA1095', 'NADER SAMIR NASHED KOWSSA', 'Egyptian', 'Master in Business Administration', '16483816271-Copy-159.jpeg', '2022-03-27 15:47:07', '2022-03-27 15:47:07'),
(153, 'PS1093', 'MAHAB MADANI ABDULQADER ALKURKASH', 'Iraqi', 'Master in Political Science and International Relations', '16483816581-Copy-158.jpeg', '2022-03-27 15:47:38', '2022-03-27 15:47:38'),
(154, 'PHD1092', 'MUNEER NOURALDEEN JOHMANI', 'Syrian', 'PH.D in Project Management', '16483816841-Copy-157.jpeg', '2022-03-27 15:48:04', '2022-03-27 15:48:04'),
(155, 'PHDH1089', 'MOSTAFA MOHAMED GABER NAZIR', 'Egyptian', 'Ph.D. in Human Resource Management', '16483817081-Copy-156.jpeg', '2022-03-27 15:48:28', '2022-03-27 15:48:28'),
(156, 'HR1088', 'MARYAM MOHAMMAD ALI ALSAHOUD', 'Jordanian', 'Master in Human Resource Management', '16483817741-Copy-155.jpeg', '2022-03-27 15:49:34', '2022-03-27 15:49:34'),
(157, 'PHDI1085', 'MOHAMED YEHIA SAID SAAD', 'Egyptian', 'Ph.D. in International Arbitration', '16483817981-Copy-154.jpeg', '2022-03-27 15:49:58', '2022-03-27 15:49:58'),
(158, 'MBA1084', 'MOHAMMAD MAHMOUD MOHAMMAD ALSHAIKH', 'Jordanian', 'Master in Business Administration', '16483818241-Copy-153.jpeg', '2022-03-27 15:50:24', '2022-03-27 15:50:24'),
(159, 'DPSR1192', 'muhaid abdelrahman mohamedahmed noureldin', 'Sudanese', 'Ph.D. in Political Science and International Relations', '16483818441-Copy-152.jpeg', '2022-03-27 15:50:44', '2022-03-27 15:50:44'),
(160, 'DBA1194', 'MOHAMMED ABDULWAHID MAHMOOD AL-HAKIMI', 'Yemeni', 'DOCTORATE IN BUSINESS ADMINISTRATION', '1648382597احترافيه.jpg', '2022-03-27 16:03:17', '2022-03-27 16:03:17'),
(161, 'MBA1182', 'ABD AL RAHMAN MOHAMMED JASIM', 'Iraqi', 'Master in Business Administration', '16483826271-Copy-151.jpeg', '2022-03-27 16:03:47', '2022-03-27 16:03:47'),
(162, 'IA1091', 'MUNA JABIR ALI ALANSAARI', 'United Arab Emirates', 'Master in International Arbitration', '16483826731-Copy-150.jpeg', '2022-03-27 16:04:33', '2022-03-27 16:04:33'),
(163, 'HR1087', 'MOHAMMED ALI MOHAMMED SALIM AL FARRAJI', 'omani', 'Master in Human Resource Management', '16483827161-Copy-149.jpeg', '2022-03-27 16:05:16', '2022-03-27 16:05:16'),
(164, 'MBA1200', 'MOHAMAD JUMAA SAIED ALI', 'Syrian', 'Master in Business Administration', '16483907811-Copy-148.jpeg', '2022-03-27 18:19:41', '2022-03-27 18:19:41'),
(165, 'DHR1151', 'HAITHM ABDULLAH MUBARAK ALMANGOOSH', 'Yemeni', 'Doctorate in Human Resource Management', '16483908061-Copy-147.jpeg', '2022-03-27 18:20:06', '2022-03-27 18:20:06'),
(166, 'DBA1158', 'YANAL HAYEL AL KHASAWNEH', 'Jordanian', 'Doctorate in Business Administration', '16483908771-Copy-145.jpeg', '2022-03-27 18:21:17', '2022-03-27 18:21:17'),
(167, 'MIA1188', 'YASSER MOSTAPHA EL TAYAR', 'Lebanese', 'Master in International Arbitration', '16483909241-Copy-144.jpeg', '2022-03-27 18:22:04', '2022-03-27 18:22:04'),
(168, 'DBA1153', 'WALID THYAB HUSSEIN SHQAIRAT', 'Jordanian', 'Doctorate in Business Administration Specialized in Healthcare Management', '16483909531-Copy-143.jpeg', '2022-03-27 18:22:33', '2022-03-27 18:22:33'),
(169, 'MBA1179', 'WALID HAMED FARAG ABDELFADIL', 'Egyptian', 'Master in Business Administration', '16483909821-Copy-142.jpeg', '2022-03-27 18:23:02', '2022-03-27 18:23:02'),
(170, 'MAB1137', 'WALEED FAREED M YALLY', 'Saudi', 'Master in Business Administration', '16483910211-Copy-141.jpeg', '2022-03-27 18:23:41', '2022-03-27 18:23:41'),
(171, 'MPR1197', 'WAJIH HIJAZI', 'Lebanese', 'Master in Political Science and International Relations', '16483910431-Copy-140.jpeg', '2022-03-27 18:24:03', '2022-03-27 18:24:03'),
(172, 'DIA1147', 'HESHAM MOHAMMED S BIN KAMAL', 'Saudi', 'Doctorate in International Arbitration', '16483910711-Copy-139.jpeg', '2022-03-27 18:24:31', '2022-03-27 18:24:31'),
(173, 'DIA1126', 'NASIM HASAN ABDELQADER QATANANI', 'Jordanian', 'Doctorate in International Arbitration', '16483910931-Copy-138.jpeg', '2022-03-27 18:24:53', '2022-03-27 18:24:53'),
(174, 'MBA1199', 'Media Ahmed Ali Al hamawendi', 'Iraqi', 'Master in Business Administration', '16483911341-Copy-137.jpeg', '2022-03-27 18:25:34', '2022-03-27 18:25:34'),
(175, 'DIA1196', 'raid rasheed salmeh al rwashdeh', 'Jordanian', 'Doctorate in International Arbitration', '16483911721-Copy-136.jpeg', '2022-03-27 18:26:12', '2022-03-27 18:26:12'),
(176, 'DBA1197', 'HUSSEIN MOHAMMED HUSSIEN ABDLMOLA', 'Lippi', 'Doctorate in Business Administration', '16483911981-Copy-135.jpeg', '2022-03-27 18:26:38', '2022-03-27 18:26:38'),
(177, 'DBA1191', 'JAMEEL FAROUQ JAMEEL KHOGEER', 'Saudi', 'Ph.D. in Business Administration', '16483912261-Copy-134.jpeg', '2022-03-27 18:27:06', '2022-03-27 18:27:06'),
(178, 'DBA1203', 'INAS OLWY ABDELRAZEK MAHMOUD', 'Egyptian', 'Ph.D. in Business Administration', '16483954101-Copy-133.jpeg', '2022-03-27 19:36:50', '2022-03-27 19:36:50'),
(179, 'MBA1202', 'Elie barbar Fares', 'Lebanese', 'Master in Business Administration', '16483954411-Copy-132.jpeg', '2022-03-27 19:37:21', '2022-03-27 19:37:21'),
(180, 'IA1006', 'MUGRI YAQOUB ALI H', 'Saudi', 'Master in International Arbitration', '16483954751-Copy-131.jpeg', '2022-03-27 19:37:55', '2022-03-27 19:37:55'),
(181, 'HR1007', 'NASER HUSSEIN ALI ALAZZAWI', 'Iraqi', 'Master in Human Resource Management', '16483955101-Copy-130.jpeg', '2022-03-27 19:38:31', '2022-03-27 19:38:31'),
(182, 'MBA1005', 'MOSTAFA MOHAMED GABER NAZIR', 'Egyptian', 'Master in Business Administration', '16483955301-Copy-129.jpeg', '2022-03-27 19:38:50', '2022-03-27 19:38:50'),
(183, 'HR1001', 'AL-SHIBLI MOHAMMED ABDULLAH DHAHI', 'Omani', 'Master in Human Resource Management', '16483955691-Copy-128.jpeg', '2022-03-27 19:39:29', '2022-03-27 19:39:29'),
(184, 'MBA1009', 'QASIM BEEDALLAH ZGHAIR ALAAYEDI', 'Iraqi', 'Master in Business Administration', '16483955891-Copy-127.jpeg', '2022-03-27 19:39:49', '2022-03-27 19:39:49'),
(185, 'HR1010', 'SOHA MAGDY MOHAMED EMAM', 'Egyptian', 'Master in Human Resource Management', '16483956561-Copy-126.jpeg', '2022-03-27 19:40:56', '2022-03-27 19:40:56'),
(186, 'MBA1003', 'DURAID IBRAHIM MAKHAILEF AL-BENYAN', 'Iraqi', 'Master in Business Administration', '16483956781-Copy-125.jpeg', '2022-03-27 19:41:18', '2022-03-27 19:41:18'),
(187, 'MBA1004', 'HAMZA NASRA', 'Tunisia', 'Master in Business Administration', '16483957181-Copy-124.jpeg', '2022-03-27 19:41:58', '2022-03-27 19:41:58'),
(188, 'MAB1011', 'WALEED AHMED SALIH ALMASRI', 'Jordanian', 'Master in Business Administration', '16483957431-Copy-123.jpeg', '2022-03-27 19:42:23', '2022-03-27 19:42:23'),
(189, 'HR757', 'YAZAN KHABBAZ', 'Argentina', 'Master in Human Resource Management', '16483957691-Copy-122.jpeg', '2022-03-27 19:42:49', '2022-03-27 19:42:49'),
(190, 'PHDI1090', 'MAROF HASSAN A. ALGHANANIM', 'Jordanian', 'Ph.D. in International Arbitration', '16483957941-Copy-120.jpeg', '2022-03-27 19:43:14', '2022-03-27 19:43:14'),
(191, 'MBA1094', 'MAYSRA MAHGOB ELHASSAN ELSAYED', 'Sudanese', 'Master in Business Administration', '16483958241-Copy-119.jpeg', '2022-03-27 19:43:44', '2022-03-27 19:43:44'),
(192, 'DBA1196', 'EHAB ABDELSATIAR ABUELNAGA ELHOUSSEINI', 'Egyptian', 'Doctorate in Business Administration', '16483958561-Copy-118.jpeg', '2022-03-27 19:44:16', '2022-03-27 19:44:16'),
(193, 'PHDP1101', 'NASR HARMOUCH', 'Lebanese', 'Ph.D. in Political Science and International Relations', '16483958821-Copy-116.jpeg', '2022-03-27 19:44:42', '2022-03-27 19:44:42'),
(194, 'IA1008', 'NASR HARMOUCH', 'Lebanese', 'Master in International Arbitration', '16483959081-Copy-113.jpeg', '2022-03-27 19:45:08', '2022-03-27 19:45:08'),
(195, 'MPM1201', 'HOSSAM-ELDIN SAMIR MOHAMED', 'Egyptian', 'Master in Project Management', '16483959851-Copy-112.jpeg', '2022-03-27 19:46:25', '2022-03-27 19:46:25'),
(196, 'MBA1083', 'MOHAMED KAMEL ALKHDR MOHAMED ATWA', 'Egyptian', 'Master in Business Administration', '16483960061-Copy-111.jpeg', '2022-03-27 19:46:46', '2022-03-27 19:46:46'),
(197, 'PHDB1082', 'MOHAMMED ALI MAHMOUD ABDALLA', 'Egyptian', 'Ph.D. in Business Administration', '16483960331-Copy-110.jpeg', '2022-03-27 19:47:13', '2022-03-27 19:47:13'),
(198, 'MBA1080', 'MOHAMMAD ABEDELRAHMAN ABDULLAH JARADAT', 'Jordanian', 'Master in Business Administration', '16483960991-Copy-108.jpeg', '2022-03-27 19:48:19', '2022-03-27 19:48:19'),
(199, 'PHDH1079', 'AL-SHIBLI – MOHAMMED ABDULLAH DHAHI', 'omani', 'Ph.D. in Human Resource Management', '16483961261-Copy-107.jpeg', '2022-03-27 19:48:46', '2022-03-27 19:48:46'),
(200, 'IA1078', 'ALMOTAIRI MOHAMMED THAMER A', 'Saudi', 'Master in International Arbitration', '16483961511-Copy-106.jpeg', '2022-03-27 19:49:11', '2022-03-27 19:49:11'),
(201, 'PHDH1076', 'MEHSEN NOUN', 'Lebanese', 'Ph.D. in Human Resource Management', '16483961721-Copy-105.jpeg', '2022-03-27 19:49:32', '2022-03-27 19:49:32'),
(202, 'PHDB1075', 'QASIM BEEDALLAH ZGHAIR ALAAYEDI', 'Iraqi', 'Ph.D. in Business Administration', '16483961971-Copy-104.jpeg', '2022-03-27 19:49:57', '2022-03-27 19:49:57'),
(203, 'MBA1074', 'FAISAL MOHAMMAD MOUSA OMARI', 'Jordanian', 'Master in Business Administration', '16483962211-Copy-103.jpeg', '2022-03-27 19:50:21', '2022-03-27 19:50:21'),
(204, 'PHDB1073', 'FAISAL SAEED ABDALLA SALIM ALSUWAIDI', 'United Arab Emirates', 'Ph.D. in Business Administration', '16483963761-Copy-102.jpeg', '2022-03-27 19:52:56', '2022-03-27 19:52:56'),
(205, 'PHDB1072', 'FAWWAZ JAMIL IBRAHIM MANSOUR', 'Jordanian', 'PH.D in Project Management', '16483964071-Copy-114.jpeg', '2022-03-27 19:53:27', '2022-03-27 19:53:27'),
(206, 'HR1071', 'FALAH HAMMOOD NUHAIR NUHAIR', 'Iraqi', 'Master in Human Resource Management', '16483964311-Copy-100.jpeg', '2022-03-27 19:53:51', '2022-03-27 19:53:51'),
(207, 'PHDP1070', 'AYYADAH MOHAMMED A RUMAYH', 'Saudi', 'Ph.D. in Political Science and International Relations', '16483964601-Copy-99.jpeg', '2022-03-27 19:54:20', '2022-03-27 19:54:20'),
(208, 'MBA1068', 'EMAD RABEA MOHAMED ELSAYED HOSIN', 'Egyptian', 'Master in Business Administration', '16483964871-Copy-98.jpeg', '2022-03-27 19:54:47', '2022-03-27 19:54:47'),
(209, 'PHDB1067', 'ALI JAMEEL THWAINI KHALEDI', 'Iraqi', 'Ph.D. in Business Administration', '16483965231-Copy-97.jpeg', '2022-03-27 19:55:23', '2022-03-27 19:55:23'),
(210, 'PHDB1066', 'ALMAHDI ALI HASSAN A', 'Saudi', 'Ph.D. in Business Administration', '16483965481-Copy-96.jpeg', '2022-03-27 19:55:48', '2022-03-27 19:55:48'),
(211, 'MBA1065', 'ALI FADHIL ABDULMAJEED AL-JABERI', 'Iraqi', 'Master in Business Administration', '16483965911-Copy-95.jpeg', '2022-03-27 19:56:31', '2022-03-27 19:56:31'),
(212, 'PHD1077', 'MOHAMMED ABOBAKR MOHAMMED BADHIB', 'Yemeni', 'PH.D in Project Management', '16483966481-Copy-94.jpeg', '2022-03-27 19:57:28', '2022-03-27 19:57:28'),
(213, 'PS1064', 'ALI HASSAN SALMAN NASSER', 'United Arab Emirates', 'Master in Political Science and International Relations', '16483966701-Copy-93.jpeg', '2022-03-27 19:57:50', '2022-03-27 19:57:50'),
(214, 'MBA1063', 'ALSAAD ALI MUBARAK S', 'Saudi', 'Master in Business Administration', '16483967281-Copy-92.jpeg', '2022-03-27 19:58:48', '2022-03-27 19:58:48'),
(215, 'MBA1002', 'AWAD HAMIED ALJABRIEN', 'Syrian', 'Master in Business Administration', '16483967501-Copy-91.jpeg', '2022-03-27 19:59:10', '2022-03-27 19:59:10'),
(216, 'PHDB1069', 'AWAD HAMIED ALJABRIEN', 'Syrian', 'Ph.D. in Business Administration', '16483967801-Copy-90.jpeg', '2022-03-27 19:59:40', '2022-03-27 19:59:40'),
(217, 'HR1062', 'ATIAT HUSSEIN AHMED ALQUDAH', 'United Arab Emirates', 'Master in Human Resource Management', '16483968061-Copy-88.jpeg', '2022-03-27 20:00:06', '2022-03-27 20:00:06'),
(218, 'PS1061', 'AZEZ M T SAOUD', 'Kuwaiti', 'Master in Political Science and International Relations', '16483968351-Copy-87.jpeg', '2022-03-27 20:00:35', '2022-03-27 20:00:35'),
(219, 'PS1060', 'ABDO MOHAMMAD ALMSAKEB', 'Syrian', 'Master in Political Science and International Relations', '16483969141-Copy-86.jpeg', '2022-03-27 20:01:54', '2022-03-27 20:01:54'),
(220, 'PS1059', 'ABDULLAH ABDUL SATTAR', 'Bekistani', 'Master in Political Science and International Relations', '16483969381-Copy-85.jpeg', '2022-03-27 20:02:18', '2022-03-27 20:02:18'),
(221, 'PHDB1058', 'ALWARHI ABDULMUHSIN ABDULRAHMAN M', 'Saudi', 'Ph.D. in Business Administration', '16483969611-Copy-84.jpeg', '2022-03-27 20:02:41', '2022-03-27 20:02:41'),
(222, 'IA1057', 'ABDELHAFIEZ SAAD OSMAN SAAD', 'Sudanese', 'Master in International Arbitration', '16483969851-Copy-83.jpeg', '2022-03-27 20:03:05', '2022-03-27 20:03:05'),
(223, 'IA1056', 'ABBAS KAMIL ABBAS ABBAS', 'Iraqi', 'Master in International Arbitration', '16483970111-Copy-82.jpeg', '2022-03-27 20:03:31', '2022-03-27 20:03:31'),
(224, 'PHDI1055', 'AMER MOHAMMAD KHALEEL ALDMOOR', 'Jordanian', 'Ph.D. in International Arbitration', '16483970541-Copy-81.jpeg', '2022-03-27 20:04:14', '2022-03-27 20:04:14'),
(225, 'MBA1054', 'AMER ABDULLAH LAZIM ALSAEDI', 'Iraqi', 'Master in Business Administration', '16483970761-Copy-80.jpeg', '2022-03-27 20:04:36', '2022-03-27 20:04:36'),
(226, 'MBA1053', 'TAHER ABDULLAH ABDULLAH SHARARAH', 'Egyptian', 'Master in Business Administration', '16483971001-Copy-89.jpeg', '2022-03-27 20:05:00', '2022-03-27 20:05:00'),
(227, 'PHDP1052', 'SALAH HUSSEIN HAIDRAH', 'Yemeni', 'Ph.D. in Political Science and International Relations', '16483971291-Copy-79.jpeg', '2022-03-27 20:05:29', '2022-03-27 20:05:29'),
(228, 'IA1051', 'SALEH ALI HUSSEIN SALO', 'Jordanian', 'Master in International Arbitration', '16483971521-Copy-78.jpeg', '2022-03-27 20:05:52', '2022-03-27 20:05:52'),
(229, 'MBA1050', 'SHWAN QADER MAAROOF', 'Iraqi', 'Master in Business Administration', '16483971771-Copy-77.jpeg', '2022-03-27 20:06:17', '2022-03-27 20:06:17'),
(230, 'MPM1049', 'SHAHEED MOHSIN SAUD SAUD', 'Iraqi', 'Master in Project Management', '16483972021-Copy-76.jpeg', '2022-03-27 20:06:42', '2022-03-27 20:06:42'),
(231, 'MBA1048', 'SAIF ULDEEN RAAD IBRAHIM', 'Iraqi', 'Master in Business Administration', '16483972291-Copy-75.jpeg', '2022-03-27 20:07:09', '2022-03-27 20:07:09'),
(232, 'PHDI1047', 'SIDI MOHAMED HAMIDI', 'Moroccan', 'Ph.D. in International Arbitration', '16483972611-Copy-74.jpeg', '2022-03-27 20:07:41', '2022-03-27 20:07:41'),
(233, 'PHDB1046', 'SOHA MAGDY MOHAMED EMAM', 'Egyptian', 'Ph.D. in Business Administration', '16483972921-Copy-73.jpeg', '2022-03-27 20:08:12', '2022-03-27 20:08:12'),
(234, 'PHDP1045', 'SEVERINA JOMAH M.ABURIASH', 'Jordanian', 'Ph.D. in Political Science and International Relations', '16483973881-Copy-72.jpeg', '2022-03-27 20:09:48', '2022-03-27 20:09:48'),
(235, 'HR1044', 'SANDRA ELIE TOUMA', 'Lebanese', 'Master in Human Resource Management', '16483974151-Copy-71.jpeg', '2022-03-27 20:10:15', '2022-03-27 20:10:15'),
(236, 'MBA1043', 'SAMER FOUAD FATAHI', 'Syrian', 'Master in Business Administration', '16483974401-Copy-70.jpeg', '2022-03-27 20:10:40', '2022-03-27 20:10:40'),
(237, 'MBA1042', 'ZAID ALI SHAKIR ALKHALIDI', 'Iraqi', 'Master in Business Administration', '16483974631-Copy-69.jpeg', '2022-03-27 20:11:03', '2022-03-27 20:11:03'),
(238, 'MBA1041', 'ZIAD SAUDI', 'Lebanese', 'Master in Business Administration', '16483976601-Copy-68.jpeg', '2022-03-27 20:14:20', '2022-03-27 20:14:20'),
(239, 'MBA1040', 'ZIAD ADLEMEH ABED SHAQOOR', 'Jordanian', 'Master in Business Administration', '16483976861-Copy-67.jpeg', '2022-03-27 20:14:46', '2022-03-27 20:14:46'),
(240, 'HR1039', 'ALSYBBHI RAJAA MOHAMMAD S', 'Saudi', 'Master in Human Resource Management', '16483977161-Copy-66.jpeg', '2022-03-27 20:15:16', '2022-03-27 20:15:16'),
(241, 'PHDB1038', 'DURAID IBRAHIM MAKHAILEF AL-BENYAN', 'Iraqi', 'Ph.D. in Business Administration', '16483977601-Copy-65.jpeg', '2022-03-27 20:16:00', '2022-03-27 20:16:00'),
(242, 'PHDI1037', 'KHALED ABDALSALAM', 'Lebanese', 'Ph.D. in International Arbitration', '16483977841-Copy-64.jpeg', '2022-03-27 20:16:24', '2022-03-27 20:16:24'),
(243, 'HR1036', 'KHALED SALEH AWADH AHMED', 'Yemeni', 'Master in Human Resource Management', '16483978041-Copy-63.jpeg', '2022-03-27 20:16:44', '2022-03-27 20:16:44'),
(244, 'MBA1035', 'KHALID ISMAIL SULEIMAN ALZAYED', 'Jordanian', 'Master in Business Administration', '16483978481-Copy-62.jpeg', '2022-03-27 20:17:28', '2022-03-27 20:17:28'),
(245, 'PHDB1034', 'KHALID AHMED ALI SHAHEEN ALHAMMADI', 'United Arab Emirates', 'Ph.D. in Business Administration', '16483978691-Copy-61.jpeg', '2022-03-27 20:17:49', '2022-03-27 20:17:49'),
(247, 'PHDI1032', 'HAMZA NASRA', 'Tunisia', 'Ph.D. in International Arbitration', '16483979231-Copy-59.jpeg', '2022-03-27 20:18:43', '2022-03-27 20:18:43'),
(248, 'MBA1030', 'AAREJI , HUSSAIN MOHAMMED', 'Saudi', 'Master in Business Administration', '16483979531-Copy-Copy.jpeg', '2022-03-27 20:19:13', '2022-03-27 20:19:13'),
(411, 'PHD891', 'ADMANE KARIM', 'Algerian', 'Ph.D. in Business Administration', '16484699501-Copy-3 (1).jpeg', '2022-03-28 16:19:11', '2022-03-28 16:19:11'),
(250, 'PMP1029', 'HASSAN GHAREEB', 'Lebanese', 'Master in Project Management', '16483979821-Copy-58.jpeg', '2022-03-27 20:19:42', '2022-03-27 20:19:42'),
(251, 'PHDB1028', 'HASSAN ABDULRASOOL HASAN BAITHRAH', 'Iraqi', 'Ph.D. in Business Administration', '16483980041-Copy-57.jpeg', '2022-03-27 20:20:04', '2022-03-27 20:20:04'),
(252, 'PHDB1027', 'JAMAL KAMEL AHMED HUSSEIN', 'Jordanian', 'Ph.D. in Business Administration', '16483980311-Copy-56.jpeg', '2022-03-27 20:20:31', '2022-03-27 20:20:31'),
(253, 'PHDP1026', 'JAFAR MOHAMMAD NEMER UDWAN', 'Jordanian', 'Ph.D. in Political Science and International Relations', '16483980621-Copy-55 (1).jpeg', '2022-03-27 20:21:02', '2022-03-27 20:21:02'),
(254, 'HR1025', 'JACQUELINE YOUSSEF', 'United Arab Emirates', 'Master in Human Resource Management', '16483980831-Copy-54 (1).jpeg', '2022-03-27 20:21:23', '2022-03-27 20:21:23'),
(255, 'PHDH1024', 'THAMER ABDELHAMID ABDELRAHMAN SALAMEH', 'Jordanian', 'Ph.D. in Human Resource Management', '16483981341-Copy-53 (1).jpeg', '2022-03-27 20:22:14', '2022-03-27 20:22:14'),
(256, 'MBA1023', 'BALIN JALAL ABDULLAH ABDULLAH', 'Iraqi', 'Master in Business Administration', '16483981581-Copy-52 (1).jpeg', '2022-03-27 20:22:38', '2022-03-27 20:22:38'),
(257, 'PHDI1022', 'BADR SALEH SAEED ATEF', 'Yemeni', 'Ph.D. in International Arbitration', '16483981841-Copy-51 (1).jpeg', '2022-03-27 20:23:04', '2022-03-27 20:23:04'),
(258, 'MBA1021', 'AOFA YOUSEF ZAHALAN', 'Syrian', 'Master in Business Administration', '16483982281-Copy-50 (1).jpeg', '2022-03-27 20:23:48', '2022-03-27 20:23:48'),
(259, 'MBA1020', 'ANAS HUSEIN MOHAMMAD SALAMEH', 'Jordanian', 'Master in Business Administration', '16483990461-Copy-49 (1).jpeg', '2022-03-27 20:37:26', '2022-03-27 20:37:26'),
(260, 'PHDB1019', 'AMAL SHAFIQ JASER DAAS', 'Jordanian', 'Ph.D. in Business Administration', '16483991051-Copy-48 (1).jpeg', '2022-03-27 20:38:25', '2022-03-27 20:38:25'),
(261, 'PHDB1018', 'ASHRAF MANSOUR ISMAEIL MOHAMED', 'Lippi', 'Ph.D. in Business Administration', '16483991351-Copy-47 (1).jpeg', '2022-03-27 20:38:55', '2022-03-27 20:38:55'),
(262, 'MBA1017', 'ASHRAF MANSOUR ISMAEIL MOHAMED', 'Sudanese', 'Master in Business Administration', '16483991611-Copy-46 (1).jpeg', '2022-03-27 20:39:21', '2022-03-27 20:39:21'),
(263, 'PHDI1016', 'OSSAMA TAHA MOHAMED MOURSY', 'Egyptian', 'Ph.D. in International Arbitration', '16483991841-Copy-45 (1).jpeg', '2022-03-27 20:39:44', '2022-03-27 20:39:44'),
(264, 'MBA1015', 'AHMED MUTTASHAR CHMAGH ALBAZOON', 'Iraqi', 'Master in Business Administration', '16483992421-Copy-44 (1).jpeg', '2022-03-27 20:40:42', '2022-03-27 20:40:42'),
(265, 'PHDP1014', 'ABUSIDDIQUE ARMAN MOHAMMED QASIM', 'Bangladesh', 'Ph.D. in Political Science and International Relations', '16483992971-Copy-43 (1).jpeg', '2022-03-27 20:41:37', '2022-03-27 20:41:37'),
(266, 'HR1013', 'IBRAHIM MAHMOUD SAAD MAHMOUD', 'Egyptian', 'Master in Human Resource Management', '16483993261-Copy-42 (1).jpeg', '2022-03-27 20:42:06', '2022-03-27 20:42:06'),
(267, 'MBA1012', 'IBRAHIM ABOUELFETOUH SOLIMAN HASSAN', 'Egyptian', 'Master in Business Administration', '16483993521-Copy-41 (1).jpeg', '2022-03-27 20:42:32', '2022-03-27 20:42:32'),
(268, 'MPR1140', 'MIRNA KHALIL WARDINI', 'Lebanon', 'Master in Political Science and International Relations', '16483993881-Copy-40 (1).jpeg', '2022-03-27 20:43:08', '2022-03-27 20:43:08'),
(269, 'DBA1142', 'MIRVAT SUBHI ZAKI AL HADIDI', 'Jordanian', 'Doctorate in Business Administration', '16483994131-Copy-39 (1).jpeg', '2022-03-27 20:43:33', '2022-03-27 20:43:33'),
(409, 'MBA832', 'AHMED JAMEEL SALIH ALSAMMARRAIE', 'Iraqi', 'Master in Business Administration', '16484698381-Copy-5 (2).jpeg', '2022-03-28 16:17:18', '2022-03-28 16:17:18'),
(271, 'DBA1165', 'MAHA ABDULQADER BAWAZIR', 'Saudi', 'Doctorate in Business Administration', '16483994621-Copy-37 (1).jpeg', '2022-03-27 20:44:22', '2022-03-27 20:44:22'),
(272, 'DPM1128', 'MAMDOUH AHMAD YOUSSEF', 'Syrian', 'Doctorate in Project Management', '16483995071-Copy-36 (1).jpeg', '2022-03-27 20:45:07', '2022-03-27 20:45:07'),
(273, 'MBA1124', 'MOAAZ GAMAL ELNADI', 'Egyptian', 'Master in Business Administration', '16483995541-Copy-35.jpeg', '2022-03-27 20:45:54', '2022-03-27 20:45:54'),
(274, 'MPR1141', 'MAHMOUD THEBAN KHTAIB AL OBAIDI', 'Iraqi', 'Master in Political Science and International Relations', '16483996121-Copy-34 (1).jpeg', '2022-03-27 20:46:52', '2022-03-27 20:46:52'),
(275, 'DBA1157', 'MOHAMMED SAAD M ALZAMEL', 'Saudi', 'Doctorate in Business Administration', '16483996771-Copy-32 (1).jpeg', '2022-03-27 20:47:57', '2022-03-27 20:47:57'),
(276, 'DIA1173', 'MOHAMMAD SALEM AHMAD ALNSOUR', 'Jordanian', 'Doctorate in International Arbitration', '16483997251-Copy-31 (1).jpeg', '2022-03-27 20:48:45', '2022-03-27 20:48:45'),
(277, 'DBA1155', 'MOHAMMAD RADWAN A SULTAN', 'Jordanian', 'Doctorate in Business Administration Specialized in Healthcare Management', '16483997551-Copy-30 (1).jpeg', '2022-03-27 20:49:15', '2022-03-27 20:49:15'),
(278, 'MBA1154', 'MOHAMMED HUSSEIN JEBUR', 'Iraqi', 'Master in Business Administration', '16483997801-Copy-29 (1).jpeg', '2022-03-27 20:49:40', '2022-03-27 20:49:40'),
(279, 'DIA1193', 'MOHAMED BAHAAELDIN MOHAMED ABOUELAZAYM', 'Egyptian', 'Doctorate in International Arbitration', '16483998091-Copy-164.jpeg', '2022-03-27 20:50:09', '2022-03-27 20:50:09'),
(280, 'MHR1159', 'MOHAMAD AHMAD ALFATNI', 'Saudi', 'Master in Human Resource Management', '16483998511-نسخ-25.jpeg', '2022-03-27 20:50:51', '2022-03-27 20:50:51'),
(281, 'DHR1125', 'MAJDOLEEN ABED ALFATTAH MAHMOUD HUDEIB', 'Jordanian', 'Doctorate in Human Resource Management', '16483998821-نسخ-24.jpeg', '2022-03-27 20:51:22', '2022-03-27 20:51:22'),
(282, 'DBA1130', 'LINA RADI NAJEM', 'Lebanese', 'Doctorate in Business Administration', '16483999051-نسخ-23.jpeg', '2022-03-27 20:51:45', '2022-03-27 20:51:45'),
(283, 'MAB1143', 'LAITH SAMI AHMED ALBAQIR', 'Iraqi', 'Master in Business Administration', '16483999311-نسخ-22.jpeg', '2022-03-27 20:52:11', '2022-03-27 20:52:11'),
(284, 'MBA1163', 'ABDELAZIZ LBOUIR', 'Moroccan', 'Master in Business Administration', '16483999601-نسخ-21.jpeg', '2022-03-27 20:52:40', '2022-03-27 20:52:40'),
(285, 'DHR1120', 'LOUBNA HUSSAIN RASHID ALAJMI', 'Saudi', 'Doctorate in Human Resource Management', '16484646841-نسخ-20.jpeg', '2022-03-28 14:51:24', '2022-03-28 14:51:24'),
(286, 'DPSR1148', 'LAWEN SHUKRI IBRAHIM', 'Syrian', 'Doctorate Political Science and International Relations', '16484647081-نسخ-19.jpeg', '2022-03-28 14:51:48', '2022-03-28 14:51:48'),
(287, 'DIA1171', 'FARID MOHMOUD ABDEL JABAR WILD ALI', 'Jordanian', 'Doctorate in International Arbitration', '16484647981-نسخ-18.jpeg', '2022-03-28 14:53:18', '2022-03-28 14:53:18'),
(288, 'MPR1187', 'FADHIL HATAB HASSAB AL TAMEME', 'Iraqi', 'Master in Political Science and International Relations', '16484648361-نسخ-17.jpeg', '2022-03-28 14:53:56', '2022-03-28 14:53:56'),
(289, 'DPSR 1190', 'OMAR MAHMOUD CHRAYTEH', 'Lebanon', 'Doctorate Political Science and International Relations', '16484648601-نسخ-16.jpeg', '2022-03-28 14:54:20', '2022-03-28 14:54:20'),
(290, 'MBA1121', 'EMAD GAZY MOURAD', 'Syrian', 'Master in Business Administration', '16484648861-نسخ-15.jpeg', '2022-03-28 14:54:46', '2022-03-28 14:54:46'),
(291, 'DPSR1180', 'ALI NASER AHMAD ALGHARIBEH', 'Yemeni', 'Doctorate Political Science and International Relations', '16484649071-نسخ-14.jpeg', '2022-03-28 14:55:07', '2022-03-28 14:55:07'),
(292, 'DBA1195', 'ALI FAHAD MAHOOD ALKWAISED AHOOD ALKWAISED', 'Iraqi', 'Doctorate in Business Administration', '16484649271-نسخ-13.jpeg', '2022-03-28 14:55:28', '2022-03-28 14:55:28'),
(293, 'DPSR1131', 'ALI MOHAMMED SULTAN AL ZAABI', 'Omani', 'Doctorate Political Science and International Relations', '16484649861-نسخ-12.jpeg', '2022-03-28 14:56:26', '2022-03-28 14:56:26'),
(294, 'DBA1177', 'MOHAMMAD FARRAG ABD ELRHMAN GAD', 'Egyptian', 'Doctorate Political Science and International Relations', '16484650121-نسخ-11.jpeg', '2022-03-28 14:56:52', '2022-03-28 14:56:52'),
(416, 'PHD825', 'MAHMOUD MOHAMMAD KHEDER ELEME', 'Jordanian', 'Ph.D. in Business Administration', '16484700781-1.jpg', '2022-03-28 16:21:18', '2022-03-28 16:21:18');
INSERT INTO `verfies` (`id`, `number`, `name`, `natoinalty`, `study`, `image`, `created_at`, `updated_at`) VALUES
(296, 'DPSR 1170', 'OLA ZAKI DAWOUD ALQAQ', 'Jordanian', 'Doctorate Political Science and International Relations', '16484659301-نسخ-9.jpeg', '2022-03-28 15:12:10', '2022-03-28 15:12:10'),
(297, 'MIA 1175', 'ABDULLAH ABDULRAHMAN A ALNGHIMISH', 'Saudi', 'Master in International Arbitration', '16484659591-نسخ-8.jpeg', '2022-03-28 15:12:39', '2022-03-28 15:12:39'),
(298, 'DHR1144', 'ABDULAZIZ AHMED ABDULAZIZ ALBARASI', 'Libyan', 'Doctorate in Human Resource Management', '16484659851-نسخ-7.jpeg', '2022-03-28 15:13:05', '2022-03-28 15:13:05'),
(299, 'MHR1145', 'ABDULRAHMAN AHMAD HMMOUD DARADKAH', 'Jordanian', 'Master in Human Resource Management', '16484660121-نسخ-6.jpeg', '2022-03-28 15:13:32', '2022-03-28 15:13:32'),
(300, 'MBA 1139', 'ADEL MOHAMED ELSAYED IBRAHIM ELESSILY', 'Egyptian', 'Master in Business Administration', '16484660351-Copy-28.jpeg', '2022-03-28 15:13:55', '2022-03-28 15:13:55'),
(301, 'MHR 1156', 'ADEL SALEH ABDULLAH ALNESAYAN', 'Saudi', 'Master in Human Resource Management', '16484660541-Copy-27.jpeg', '2022-03-28 15:14:14', '2022-03-28 15:14:14'),
(302, 'MHR 1162', 'SHIMAA YOUSSEF MAHMOUD ABOUSHEASHA', 'Egyptian', 'Master in Human Resource Management', '16484660771-Copy-26.jpeg', '2022-03-28 15:14:37', '2022-03-28 15:14:37'),
(303, 'MHR 1166', 'SHUKREYA ABDULLA ALI ALQATTAN', 'Bahrain', 'Master in Human Resource Management', '16484661031-Copy-25.jpeg', '2022-03-28 15:15:03', '2022-03-28 15:15:03'),
(304, 'MAB 1150', 'SHERIF MOHAMED IBRAHIM MOHAMED ELDAWY', 'Egyptian', 'Master in Business Administration', '16484661361-Copy-24.jpeg', '2022-03-28 15:15:36', '2022-03-28 15:15:36'),
(305, 'MHR 1186', 'SANA SALEH BAHLAC', 'Lebanon', 'Master in Human Resource Management', '16484661951-Copy-23.jpeg', '2022-03-28 15:16:35', '2022-03-28 15:16:35'),
(306, 'DPSR 1149', 'RANDA IBRAHIM ABOUSALEH', 'Lebanon', 'Doctorate Political Science and International Relations', '16484662151-Copy-22.jpeg', '2022-03-28 15:16:55', '2022-03-28 15:16:55'),
(307, 'MHR 1184', 'RINDALA MANSOUR', 'Lebanon', 'Master in Human Resource Management', '16484662501-Copy-21.jpeg', '2022-03-28 15:17:30', '2022-03-28 15:17:30'),
(308, 'MPR 1132', 'RAMADAN HASSAN SALEM MAKHLOUF', 'Jordanian', 'Master in Human Resource Management', '16484662731-Copy-20.jpeg', '2022-03-28 15:17:53', '2022-03-28 15:17:53'),
(413, 'MBA884', 'ABDULABAS MOHAMMED ALWAN', 'Iraqi', 'Master in Business Administration', '16484699921-Copy-1.jpeg', '2022-03-28 16:19:52', '2022-03-28 16:19:52'),
(310, 'MHR1168', 'KHALIL IBRAHIM HUSSEIN KHLOF AL AHRIJY', 'Iraqi', 'Master in Human Resource Management', '16484663301-Copy-18.jpeg', '2022-03-28 15:18:50', '2022-03-28 15:18:50'),
(311, 'MBA 1123', 'HAMZA YOUNIS ZAHRAN', 'Lebanon', 'Master in Business Administration', '16484663501-Copy-17.jpeg', '2022-03-28 15:19:11', '2022-03-28 15:19:11'),
(312, 'DBA 1176', 'HAMDY SAYED METWALLY OMAR ELSAMMAN', 'Egyptian', 'Doctorate in Business Administration', '16484663761-Copy-16.jpeg', '2022-03-28 15:19:36', '2022-03-28 15:19:36'),
(313, 'MBA 1152', 'HUSSIEN MOSSA A KHAPRANI', 'Saudi', 'Master in Business Administration', '16484664041-Copy-15.jpeg', '2022-03-28 15:20:04', '2022-03-28 15:20:04'),
(314, 'MBA1161', 'HUASSAM JAMEEL MOHAMMED HASSAN KHAYAT', 'Saudi', 'Master in Business Administration', '16484664281-Copy-14.jpeg', '2022-03-28 15:20:28', '2022-03-28 15:20:28'),
(315, 'MPR 1169', 'HABEEB ABBOOD DAWOOD AL WARE', 'Iraqi', 'Master in Political Science and International Relations', '16484664731-Copy-13.jpeg', '2022-03-28 15:21:13', '2022-03-28 15:21:13'),
(316, 'DIA 1183', 'HAYIF MAWLOOD MOHAMMED MOHAMMED', 'Iraqi', 'Doctorate in International Arbitration', '16484664941-Copy-12.jpeg', '2022-03-28 15:21:34', '2022-03-28 15:21:34'),
(317, 'DPM1138', 'JAWAD ABED HASOON AL DABAH', 'Iraqi', 'Doctorate in Project Management', '16484665161-Copy-11.jpeg', '2022-03-28 15:21:56', '2022-03-28 15:21:56'),
(410, 'PHD835', 'ABDULLAH AHMED HANOOSH', 'Iraqi', 'Ph.D. in Political Science and International Relations', '16484698611-Copy-2 (5).jpeg', '2022-03-28 16:17:41', '2022-03-28 16:17:41'),
(319, 'DPSR 1189', 'GALAL SAAD OSMAN SALEH', 'Egyptian', 'Doctorate Political Science and International Relations', '16484665591-Copy-9.jpeg', '2022-03-28 15:22:39', '2022-03-28 15:22:39'),
(320, 'DBA1185', 'JASSIM ALI SAHAN MOUSAWI', 'Iraqi', 'Doctorate in Business Administration', '16484665821-Copy-8.jpeg', '2022-03-28 15:23:02', '2022-03-28 15:23:02'),
(321, 'DBA1129', 'THAER KHALIL HWAIDI AL HAZZA', 'Iraqi', 'Doctorate in Business Administration', '16484666051-Copy-7.jpeg', '2022-03-28 15:23:25', '2022-03-28 15:23:25'),
(322, 'DIA1127', 'BADR SALEH SAEED ATEF', 'Yemeni', 'Doctorate in International Arbitration', '16484666361-Copy-6.jpeg', '2022-03-28 15:23:56', '2022-03-28 15:23:56'),
(323, 'MHR1134', 'BADR SHABAB ALGHARMOOL AL BUQAMI', 'Saudi', 'Master in Human Resource Management', '16484666601-Copy-5.jpeg', '2022-03-28 15:24:20', '2022-03-28 15:24:20'),
(324, 'DIA1160', 'AYA AL ZEIN', 'Lebanon', 'Doctorate in International Arbitration', '16484666871-نسخ-5.jpeg', '2022-03-28 15:24:47', '2022-03-28 15:24:47'),
(325, 'MBA1178', 'AYMAN SUBHI IBRAHIM NAJI', 'Jordanian', 'Master in Business Administration', '16484667291-نسخ-4.jpeg', '2022-03-28 15:25:29', '2022-03-28 15:25:29'),
(326, 'MPR1172', 'ANIS ALMI', 'Algeria', 'Master in Political Science and International Relations', '16484667531-نسخ-3.jpeg', '2022-03-28 15:25:53', '2022-03-28 15:25:53'),
(327, 'DBA1133', 'LAHCEN AIT BILAOU', 'Moroccan', 'Doctorate in Business Administration, (DBA)', '16484667921-نسخ-2.jpeg', '2022-03-28 15:26:32', '2022-03-28 15:26:32'),
(415, 'PS826', 'NASIM HASAN ABDELQADER QATANAI', 'Jordanian', 'Master in Political Science and International Relations', '16484700542.jpg', '2022-03-28 16:20:54', '2022-03-28 16:20:54'),
(414, 'PHD885', 'Abdelrahman Wagdy Mohamed', 'Egyptian', 'Master in Business Administration', '16484700301-Copy (2).jpeg', '2022-03-28 16:20:30', '2022-03-28 16:20:30'),
(330, 'DIA1135', 'AZAM SALEH FAHID ELFAYEZ', 'Jordanian', 'Doctorate in International Arbitration', '16484668141-نسخ-1.jpeg', '2022-03-28 15:26:54', '2022-03-28 15:26:54'),
(331, 'MHR1164', 'ASMAA MAMDOUH MOHAMED ELHALAWANY', 'Egyptian', 'Master in Human Resource Management', '16484668421-نسخ.jpeg', '2022-03-28 15:27:22', '2022-03-28 15:27:22'),
(332, 'MHR1181', 'AZAD MAROOF MOHAMMED MAWOLOUD', 'Iraqi', 'Master in Human Resource Management', '16484668701-Copy-3.jpeg', '2022-03-28 15:27:50', '2022-03-28 15:27:50'),
(333, 'MHR1136', 'AHMED MOHAMED IBRAHIM RAGAB', 'Egyptian', 'Master in Human Resource Management', '16484669071-Copy-2.jpeg', '2022-03-28 15:28:27', '2022-03-28 15:28:27'),
(334, 'MBA1146', 'AHMED SAAD BADR IBRAHIM', 'Egyptian', 'Master in Business Administration', '16484669401-Copy-115.jpeg', '2022-03-28 15:29:00', '2022-03-28 15:29:00'),
(335, 'MBA1167', 'AHMED HUSSEIN YOUSEF MEHMOUD', 'Jordan', 'Master in Business Administration', '16484669651-Copy.jpeg', '2022-03-28 15:29:25', '2022-03-28 15:29:25'),
(336, 'MBA857', 'KHALED ABDELMAJID ABDALLAH HUSSEIN', 'Jordan', 'Master in Business Administration', '16484669971.1.jpg', '2022-03-28 15:29:57', '2022-03-28 15:29:57'),
(337, 'MBA1031', 'Husain abdulghani suliman', 'Syrian', 'Master in Business Administration', '16484670411-Copy (1).jpeg', '2022-03-28 15:30:41', '2022-03-28 15:30:41'),
(338, 'MBA866', 'ROA’A SABRI MAJEED ALSUBAIH', 'Iraqi', 'Master in Business Administration', '1648467060CCI07122017_0001-002.jpg', '2022-03-28 15:31:00', '2022-03-28 15:31:00'),
(339, 'HR955', 'BARIKIAT NAIF SALEH A', 'Saudi Arabian', 'Master in Human Resource Management', '16484671341.1-17.jpg', '2022-03-28 15:32:14', '2022-03-28 15:32:14'),
(340, 'MBA840', 'ASMAA KADHIM GHDHAIB AL-HLAICHI', 'Iraqi', 'Master in Business Administration', '16484671591.1-16.jpg', '2022-03-28 15:32:39', '2022-03-28 15:32:39'),
(341, 'MBA904', 'AWAD MARHOUM ELZUBAIR RAHMAT ALLA', 'Sudanese', 'Master in Business Administration', '16484672601.1-15.jpg', '2022-03-28 15:34:20', '2022-03-28 15:34:20'),
(342, 'HR875', 'ALZAYOD.SOBAH KLIFH S', 'Saudi Arabian', 'Master in Human Resource Management', '16484672861.1-14.jpg', '2022-03-28 15:34:46', '2022-03-28 15:34:46'),
(343, 'PHD918', 'ALJOHANI MAJED HAMEED H', 'Saudi Arabian', 'Ph.D. in Human Resource Management', '16484673071.1-13.jpg', '2022-03-28 15:35:07', '2022-03-28 15:35:07'),
(344, 'PHDIA949', 'ALJEHANI MANSUUR AHMED A', 'Saudi Arabian', 'Ph.D. in International Arbitration', '16484673281.1-12.jpg', '2022-03-28 15:35:28', '2022-03-28 15:35:28'),
(345, 'PS899', 'ALI HUMEID ALI ALSAIDI', 'Omani', 'Master in Political Science and International Relations', '16484673481.1-11.jpg', '2022-03-28 15:35:48', '2022-03-28 15:35:48'),
(346, 'MBA944', 'AL HEFDHI MOHMOUD AHMED A', 'Saudi Arabian', 'Master in Business Administration', '16484673691.1-10.jpg', '2022-03-28 15:36:09', '2022-03-28 15:36:09'),
(347, 'MBA897', 'ALBSESY ALI MOHAMMED A', 'Saudi Arabian', 'Master in Business Administration', '16484673891.1-9.jpg', '2022-03-28 15:36:29', '2022-03-28 15:36:29'),
(348, 'PHD888', 'ALBAREGI ABDULLAH IBRAHIM M', 'Saudi Arabian', 'Ph.D. in Business Administration', '16484674091.1-8.jpg', '2022-03-28 15:36:49', '2022-03-28 15:36:49'),
(349, 'PHD889', 'ALALHARETH ABDULLAH HUSSAIN S', 'Saudi', 'Ph.D. in Business Administration', '16484675031.1-7.jpg', '2022-03-28 15:38:23', '2022-03-28 15:38:23'),
(350, 'PS834', 'AHMED SHAHAT AHMED SHALABY', 'Egyptian', 'Master in Political Science and International Relations', '16484675271.1-6.jpg', '2022-03-28 15:38:47', '2022-03-28 15:38:47'),
(351, 'PS833', 'AHMED HAMED GADAB ALABDULLAH', 'Syrian', 'Master in Political Science and International Relations', '16484675731.1-5.jpg', '2022-03-28 15:39:33', '2022-03-28 15:39:33'),
(352, 'PHD883', 'ADEL HASSAN MAHMOUD MUSTAFA', 'Egyptian', 'Ph.D. in Business Administration', '16484676231.1-4.jpg', '2022-03-28 15:40:23', '2022-03-28 15:40:23'),
(353, 'MBA890', 'ABDULMAJID AYED ALODAT', 'Syrian', 'Master in Business Administration', '16484676491.1-2.jpg', '2022-03-28 15:40:49', '2022-03-28 15:40:49'),
(355, 'PS878', 'SALAH HUSSEIN HAIDRAH', 'Yemeni', 'Master in Political Science and International Relations', '16484677501-Copy-58.jpeg', '2022-03-28 15:42:30', '2022-03-28 15:42:30'),
(356, 'PHD865', 'RIFAT OTHMAN AHMED OTHMAN', 'Yemeni', 'Ph.D. in Business Administration', '16484677721-Copy-57.jpeg', '2022-03-28 15:42:52', '2022-03-28 15:42:52'),
(357, 'PHD935', 'MOHAMMED ABDULWAHID MAHMOOD ALHAKIMI', 'Yemeni', 'Ph.D. in Business Administration', '16484678001-Copy-56.jpeg', '2022-03-28 15:43:20', '2022-03-28 15:43:20'),
(358, 'MBA930', 'MOHAMMAD KH A GH A ALSHAMMARI', 'Kuwaiti', 'Master in Business Administration', '16484678241-Copy-55.jpeg', '2022-03-28 15:43:44', '2022-03-28 15:43:44'),
(359, 'HR868', 'zeinab jamil kahwaji', 'Lebanese', 'Master in Human Resource Management', '16484678771-Copy-54.jpeg', '2022-03-28 15:44:37', '2022-03-28 15:44:37'),
(360, 'PHDPS963', 'YAHYA SALIM KHALFAN ALSIYABI', 'Omani', 'Ph.D. in Political Science and International Relationser in Business Administration', '16484679021-Copy-53.jpeg', '2022-03-28 15:45:02', '2022-03-28 15:45:02'),
(361, 'PHD880', 'TAREK SAAD SOLIMAN ABDULLAH HAIKAL', 'Egyptian', 'Ph.D. in Business Administration', '16484679711-Copy-52.jpeg', '2022-03-28 15:46:11', '2022-03-28 15:46:11'),
(362, 'MBA874', 'SALWAN AKRAM YAHYA AL- HAMADANI', 'Iraqi', 'Master in Business Administration', '16484679911-Copy-51.jpeg', '2022-03-28 15:46:31', '2022-03-28 15:46:31'),
(363, 'IA870', 'SALIM MOHAMMED MUSALLAM SAID ALARAIMI', 'Omani', 'Master in International Arbitration', '16484680151-Copy-50.jpeg', '2022-03-28 15:46:55', '2022-03-28 15:46:55'),
(364, 'IA863', 'RAID RASHEED SALMEH AL.RWASHDEH', 'Jordanian', 'Master in International Arbitratio', '16484680391-Copy-49.jpeg', '2022-03-28 15:47:19', '2022-03-28 15:47:19'),
(365, 'PHD864', 'RAHMAH MOHAMMED SALEH SHARABI', 'Yemeni', 'Ph.D. in Business Administration', '16484680791-Copy-48.jpeg', '2022-03-28 15:47:59', '2022-03-28 15:47:59'),
(366, 'PHD838', 'OSAMA SADIK JAAFAR AL-QURAISHI', 'Iraqi', 'Ph.D. in Business Administration', '16484681091-Copy-47.jpeg', '2022-03-28 15:48:29', '2022-03-28 15:48:29'),
(367, 'MBA836', 'Ahmad Mohammad Othman', 'Jordanian', 'Master in Business Administration', '16484681311-Copy-46.jpeg', '2022-03-28 15:48:51', '2022-03-28 15:48:51'),
(368, 'MBA839', 'OSAMA MOHAMED ABDELMEJIUD THABET', 'Palestinian', 'Master in Business Administration', '16484681561-Copy-45.jpeg', '2022-03-28 15:49:16', '2022-03-28 15:49:16'),
(369, 'MBA903', 'OMAR SHOHDY AHMED FARAG', 'Egyptian', 'Master in Business Administration', '16484682231-Copy-44.jpeg', '2022-03-28 15:50:23', '2022-03-28 15:50:23'),
(370, 'PHD956', 'NIBAL MOHAMED ALHOSSRIA', 'Syrian', 'Ph.D. in Business Administration', '16484682451-Copy-Copy.jpeg', '2022-03-28 15:50:45', '2022-03-28 15:50:45'),
(371, 'PHDIA947', 'MOUSTAFA ATAALLA ABDELRAHMAN HASSAN', 'Egyptian', 'Ph.D. in International Arbitration', '16484682691-Copy-43.jpeg', '2022-03-28 15:51:09', '2022-03-28 15:51:09'),
(372, 'PS923', 'MOUHAMAD ELJOUZO', 'Lebanese', 'Master in Political Science and International Relations', '16484682921-Copy-42.jpeg', '2022-03-28 15:51:32', '2022-03-28 15:51:32'),
(373, 'MBA946', 'MOSTAFA AHMED AHMED FARAG', 'Egyptian', 'Master in Business Administration', '16484683141-Copy-41.jpeg', '2022-03-28 15:51:54', '2022-03-28 15:51:54'),
(375, 'PHDPS933', 'MOHAMED SHALLAL SHIHAN SHIHAN', 'Egyptian', 'Ph.D. in Political Science and International Relations', '16484683641-Copy-39.jpeg', '2022-03-28 15:52:44', '2022-03-28 15:52:44'),
(376, 'PHD931', 'MOHAMED REDHA QASSIM JAWAD ALLAWATI', 'Omani', 'Ph.D. in Business Administration', '16484683881-Copy-38.jpeg', '2022-03-28 15:53:08', '2022-03-28 15:53:08'),
(377, 'MBA938', 'MOHAMED MAHMOUD MOHAMED RUSHDY', 'Egyptian', 'Master in Business Administration', '16484684081-Copy-37.jpeg', '2022-03-28 15:53:28', '2022-03-28 15:53:28'),
(378, 'PS940', 'MOHAMED MAHDI SALEH ALSHEIKHLI', 'Iraqi', 'Master in Political Science and International Relations', '16484684291-Copy-36.jpeg', '2022-03-28 15:53:49', '2022-03-28 15:53:49'),
(379, 'MBA934', 'MOHAMED ATEF FAHMI MOHAMED', 'Egyptian', 'Master in Business Administration', '16484685051-Copy-35.jpeg', '2022-03-28 15:55:05', '2022-03-28 15:55:05'),
(380, 'IA937', 'MHD FATEH BADER EDDIN ALBAGHAJATI', 'Syrian', 'Master in International Arbitration', '16484685371-Copy-34.jpeg', '2022-03-28 15:55:37', '2022-03-28 15:55:37'),
(381, 'PS945', 'MASHALLA H A ABUJAFOUL', 'Libyan', 'Master in Political Science and International Relations', '16484685591-Copy-33.jpeg', '2022-03-28 15:55:59', '2022-03-28 15:55:59'),
(382, 'PHD948', 'MANAL AHMED SWEILEM ALHUSBAN', 'Jordanian', 'Ph.D. in Human Resource Management', '16484685801-Copy-32.jpeg', '2022-03-28 15:56:20', '2022-03-28 15:56:20'),
(383, 'MBA943', 'MAHMOUD AHMAD HADDAD MAHROUS', 'Egyptian', 'Master in Business Administration', '16484686051-Copy-31.jpeg', '2022-03-28 15:56:45', '2022-03-28 15:56:45'),
(384, 'MBA922', 'MAHER W.A.MOHAMED', 'Jordanian', 'Master in Business Administration', '16484686271-Copy-30.jpeg', '2022-03-28 15:57:07', '2022-03-28 15:57:07'),
(385, 'PHD920', 'MAHER IBRAHIM ELABD MOHSIN', 'Egyptian', 'Ph.D. in Business Administration', '16484686551-Copy-28 (1).jpeg', '2022-03-28 15:57:35', '2022-03-28 15:57:35'),
(386, 'PHD915', 'LARA AHMAD ISMAIL', 'Lebanese', 'Ph.D. in Business Administration', '16484686781-Copy-27 (1).jpeg', '2022-03-28 15:57:58', '2022-03-28 15:57:58'),
(387, 'PHD869', 'SALIM ALI SALIM ALRISI', 'Omani', 'Ph.D. in Human Resource Management', '16484687031-Copy-29.jpeg', '2022-03-28 15:58:23', '2022-03-28 15:58:23'),
(388, 'PS861', 'KHALIL ELKHOURY', 'Lebanese', 'Master in Political Science and International Relations', '16484687251-Copy-25 (1).jpeg', '2022-03-28 15:58:45', '2022-03-28 15:58:45'),
(389, 'PHD858', 'KHALID MAHMOUD ABDULLA ALQASEM', 'Jordanian', 'Ph.D. in Business Administration', '16484687711-Copy-24 (1).jpeg', '2022-03-28 15:59:31', '2022-03-28 15:59:31'),
(390, 'MBA859', 'KHALEEL IBRAHIM QASIM HAMED', 'Jordanian', 'Master in Business Administration', '16484687931-Copy-23 (1).jpeg', '2022-03-28 15:59:53', '2022-03-28 15:59:53'),
(391, 'PS860', 'KHALEEL BILAL HASAN ELRUBAYE', 'Iraqi', 'Master in Political Science and International Relations', '16484688371-Copy-22 (1).jpeg', '2022-03-28 16:00:37', '2022-03-28 16:00:37'),
(392, 'PHD914', 'KAMIL DAWOOD ALWAN ALJAMMALI', 'Iraqi', 'Ph.D. in Business Administration', '16484688561-Copy-21 (1).jpeg', '2022-03-28 16:00:56', '2022-03-28 16:00:56'),
(393, 'MBA846', 'JASIM MOHAMMED SAID ALBALUSHI', 'Omani', 'Master in Business Administration', '16484688801-Copy-20 (1).jpeg', '2022-03-28 16:01:20', '2022-03-28 16:01:20'),
(394, 'PS856', 'HAYDER NAJM ABED ALSAEDI', 'Iraqi', 'Master in Political Science and International Relations', '16484689121-Copy-19 (1).jpeg', '2022-03-28 16:01:52', '2022-03-28 16:01:52'),
(396, 'PHD853', 'HAMZA ASAD SAID ALGHOUL', 'Jordanian', 'Ph.D. in Human Resource Management', '16484689361-Copy-18 (1).jpeg', '2022-03-28 16:02:16', '2022-03-28 16:02:16'),
(397, 'IA848', 'GALAL SAAD OSMAN SALEH', 'Egyptian', 'Master in International Arbitration', '16484689891-Copy-17 (1).jpeg', '2022-03-28 16:03:09', '2022-03-28 16:03:09'),
(398, 'PHD911', 'FUAD ABDELKARIM MUSA SANWAR', 'Jordanian', 'Ph.D. in Business Administration', '16484690081-Copy-16 (1).jpeg', '2022-03-28 16:03:28', '2022-03-28 16:03:28'),
(399, 'MBA901', 'ABDULLAH AHMED HANOOSH', 'Iraqi', 'Ph.D. in Political Science and International Relations', '16484690281-Copy-2 (1).jpeg', '2022-03-28 16:03:48', '2022-03-28 16:03:48'),
(400, 'PHD842', 'ELHAM MOHAMED ELTOHAMI KHALIL ELHOUSHI', 'Egyptian', 'Ph.D. in Business Administration', '16484690941-Copy-14 (1).jpeg', '2022-03-28 16:04:54', '2022-03-28 16:04:54'),
(401, 'PS879', 'DHURGHAM HASSOON ADHAB', 'Iraqi', 'Master in Political Science and International Relations', '16484691191-Copy-13 (1).jpeg', '2022-03-28 16:05:19', '2022-03-28 16:05:19'),
(402, 'MBA893', 'ALY AHMED ABDELSALAM ELBANA', 'Egyptian', 'Master in Business Administration', '16484691401-Copy-12 (1).jpeg', '2022-03-28 16:05:40', '2022-03-28 16:05:40'),
(403, 'MBA898', 'ALI JAMEEL THWAINI KHALEDI', 'Iraqi', 'Master in Business Administration', '16484691621-Copy-11 (1).jpeg', '2022-03-28 16:06:02', '2022-03-28 16:06:02'),
(404, 'PHD882', 'TALAT HANNA IBRAHIM SHAHEEN AWWAD', 'Palestinian', 'Ph.D. in Business Administration', '16484691831.1 (1).jpg', '2022-03-28 16:06:23', '2022-03-28 16:06:23'),
(405, 'MBA894', 'ALI ISMAIL ASKANDER', 'Iraqi', 'Master in Business Administration', '16484692041-Copy-10 (1).jpeg', '2022-03-28 16:06:44', '2022-03-28 16:06:44'),
(406, 'PHDPS895', 'ABDULLAH AHMED HANOOSH', 'Iraqi', 'Ph.D. in Political Science and International Relations', '16484692261-Copy-2 (2).jpeg', '2022-03-28 16:07:06', '2022-03-28 16:07:06'),
(407, 'MBA900', 'ALI ABDULHUSAIN SALEH ALHILE', 'Iraqi', 'Master in Business Administration', '16484692491-Copy-59.jpeg', '2022-03-28 16:07:29', '2022-03-28 16:07:29'),
(418, 'PHDPS769', 'LAHCEN LABGOURI', 'Moroccan', 'Ph.D. in Political Science and International Relations', '16484703661-e1492262867830.jpg', '2022-03-28 16:26:06', '2022-03-28 16:26:06'),
(419, 'MBA766', 'KHALID AHMED ALI SHAHEEN ALHAMMADI', 'Emirati', 'Master in Business Administration', '1648470943282d40e5-7946-439e-b5d5-5c25c90f077f-e1532713891388.jpg', '2022-03-28 16:35:43', '2022-03-28 16:35:43'),
(420, 'MBA635', 'Yousef Ali Melad Siriheid', 'Libyan', 'Master in Business Administration', '16484715551-30-e1479579525576.jpg', '2022-03-28 16:45:55', '2022-03-28 16:45:55'),
(421, 'MBA612', 'Hadeel Safaa Hamdi Adhami', 'Iraqi', 'Master in Business Administration', '16484716001-28-e1479141058200.jpg', '2022-03-28 16:46:40', '2022-03-28 16:46:40'),
(422, 'PHDPS667', 'Nawal Zghair A Thab', 'Iraqi', 'Ph.D. in Political Science and International Relations', '16484716241-27-e1479139831576.jpg', '2022-03-28 16:47:04', '2022-03-28 16:47:04'),
(423, 'MBA634', 'Najeeb Mohamed ElRayes', 'Libyan', 'Master in Business Administration', '16484716451-26-e1479139395180.jpg', '2022-03-28 16:47:25', '2022-03-28 16:47:25'),
(424, 'MBA645', 'Nariman Khaled Saleh', 'Saudi Arabian', 'Master in Business Administration', '16484716681-25-e1479138591605.jpg', '2022-03-28 16:47:48', '2022-03-28 16:47:48'),
(425, 'IA655', 'Mawaffaq Salim Mohd Alhalholi', 'Jordanian', 'Master In International Arbitration', '16484716901-24-e1479138245263.jpg', '2022-03-28 16:48:10', '2022-03-28 16:48:10'),
(426, 'Ps605', 'Mohayed AbdElRahman Mohamed Ahmed', 'Sudanese', 'Master in Political Science and International Relations', '16484717151-23-e1479137653718.jpg', '2022-03-28 16:48:35', '2022-03-28 16:48:35'),
(427, 'MBA672', 'Mohd Fawaz Fawzi Aldardari', 'Syrian', 'Master in Business Administration', '16484717431-22-e1479137369438.jpg', '2022-03-28 16:49:03', '2022-03-28 16:49:03'),
(428, 'HR666', 'Manal Ahmed Sweilem Alhusban', 'Jordanian', 'Master in Human Resource Management', '16484718181-20-e1479056461346.jpg', '2022-03-28 16:50:18', '2022-03-28 16:50:18'),
(429, 'IA590', 'Marof Hassan A. Alghananim', 'Jordanian', 'Master in International Arbitration', '16484726181-19-e1479051784700.jpg', '2022-03-28 17:03:38', '2022-03-28 17:03:38'),
(430, 'PHDPS609', 'Marwa Salman Yousef Salah', 'Jordanian', 'Ph.D. in Political Science and International Relations', '16484726511-18-e1479051521865.jpg', '2022-03-28 17:04:11', '2022-03-28 17:04:11'),
(431, 'PHD646', 'Mahmoud Mohamed Elsayed Salama', 'Egyptian', 'Ph.D.in Business Administration', '16484726771-17-e1479051318769.jpg', '2022-03-28 17:04:37', '2022-03-28 17:04:37'),
(432, 'Ps623', 'Mohamed Yehia Said Saad', 'Egyptian', 'Master in Political Science and International Relations', '16484726971-16-e1479050942628.jpg', '2022-03-28 17:04:57', '2022-03-28 17:04:57'),
(433, 'MBA633', 'Mouhammad Ali Nasser', 'Iraqi', 'Master in Business Administration', '16484727241-15-e1479050519380.jpg', '2022-03-28 17:05:24', '2022-03-28 17:05:24'),
(434, 'MBA610', 'Mohammed Moshin Hameed Al-Dawoodi', 'Iraqi', 'Master in Business Administration', '1648472746Scan-e1478803148392.jpg', '2022-03-28 17:05:46', '2022-03-28 17:05:46'),
(435, 'MBA591', 'Maher Ibrahim Elabd Mohsin', 'Egyptian', 'Master in Business Administration', '16484727941-10-e1478451802863.jpg', '2022-03-28 17:06:34', '2022-03-28 17:06:34'),
(436, 'MBA631', 'Malik Mohammad Hasan Shalabi', 'Jordanian', 'Master in Business Administration', '16484728181-9-e1478451368473.jpg', '2022-03-28 17:06:58', '2022-03-28 17:06:58'),
(437, 'IA654', 'Awad Atallah Salem Altarawneh', 'Jordanian', 'Master In International Arbitration', '16484728491-8-e1478450872848.jpg', '2022-03-28 17:07:29', '2022-03-28 17:07:29'),
(438, 'MBA616', 'Amr Amin Abdulwadod Radman', 'Yemeni', 'Master in Business Administration', '16484728751-7-e1478449032101.jpg', '2022-03-28 17:07:55', '2022-03-28 17:07:55'),
(439, 'MBA665', 'Omar Hamdan Deeb Alqudah', 'Jordanian', 'Master in Business Administration', '16484728981-6-e1478448772173.jpg', '2022-03-28 17:08:18', '2022-03-28 17:08:18'),
(440, 'HR618', 'Emad Mohamed Hamed Hefnawy', 'Egyptian', 'Master in Human Resource Management', '16484729221-5-e1478448464869.jpg', '2022-03-28 17:08:42', '2022-03-28 17:08:42'),
(441, 'Ps630', 'Ali Hamed Mohamed Mayouf', 'Libyan', 'Master in Political Science and International Relations', '16484729631-4-e1478189416227.jpg', '2022-03-28 17:09:23', '2022-03-28 17:09:23'),
(442, 'IA669', 'Isameldin Dahab Ali Ahmed', 'Sudanese', 'Master in International Arbitration', '16484729861-3-e1478185034198.jpg', '2022-03-28 17:09:47', '2022-03-28 17:09:47'),
(443, 'PS680', 'Adnan Thabet Abdo Saeed', 'Swedish', 'Master in Political Science and International Relations', '16484730191-2-e1478100849212.jpg', '2022-03-28 17:10:19', '2022-03-28 17:10:19'),
(444, 'MBA643', 'Othman Mohamed Othman Yassein Eltabbakh', 'Egyptian', 'Master in Business Administration', '16484730441-1-e1478100630871.jpg', '2022-03-28 17:10:44', '2022-03-28 17:10:44'),
(445, 'PHDPS663', 'Abdullah Tawfeeq Sami Al-qanas', 'Iraqi', 'Ph.D. in Political Science and International Relations', '16484730861-e1478100454296.jpg', '2022-03-28 17:11:26', '2022-03-28 17:11:26'),
(446, 'IA617', 'Abdulghani Yahya A Moafa', 'Saudi Arabian', 'Master in International Arbitration', '16484731081-27-e1477844364522.jpg', '2022-03-28 17:11:48', '2022-03-28 17:11:48'),
(447, 'MBA662', 'Abdul Wahid Abbas Masood', 'Yemeni', 'Master in Business Administration', '16484731301-25-e1477844308820.jpg', '2022-03-28 17:12:10', '2022-03-28 17:12:10'),
(448, 'Ps595', 'Abdulhadi Saeed Hasan Alzawari', 'Yemeni', 'Master in Political Science and International Relations', '16484731521-23-e1477844026900.jpg', '2022-03-28 17:12:32', '2022-03-28 17:12:32'),
(449, 'Ps651', 'Abdulaziz Sadeq Ameen', 'Yemeni', 'Master in Political Science and International Relations', '16484731751-22-e1477844006496.jpg', '2022-03-28 17:12:55', '2022-03-28 17:12:55'),
(450, 'Ps622', 'AbdulRazak Elkarhani', 'Lebanese', 'Master in Political Science and International Relations', '16484731961-21-e1477843780480.jpg', '2022-03-28 17:13:16', '2022-03-28 17:13:16'),
(451, 'Ps598', 'Amer Fahem Mohammed Mohammed', 'Iraqi', 'Master in Political Science and International Relations', '16484732191-20-e1477843612227.jpg', '2022-03-28 17:13:39', '2022-03-28 17:13:39'),
(452, 'Ps602', 'Adil Mohammed Salih Abdullah', 'Iraqi', 'Master in Political Science and International Relations', '1648473243Scan-2-e1477843464466.jpg', '2022-03-28 17:14:03', '2022-03-28 17:14:03'),
(453, 'Ps601', 'Tarek Saad Soliman Abdullah Haikal', 'Egyptian', 'Master in Political Science and International Relations', '16484732671-18-e1477843302832.jpg', '2022-03-28 17:14:27', '2022-03-28 17:14:27'),
(454, 'PHD639', 'Dhiya Aldin Abdalwahab Shihab', 'Iraqi', 'Ph.D.in Human Resource Management', '16484732891-17-e1477843089580.jpg', '2022-03-28 17:14:49', '2022-03-28 17:14:49'),
(455, 'MBA679', 'Shahnaz M.S.Abdal Rahman Alotaibi', 'Jordanian', 'Master in Business Administration', '16484733321-16-e1477842796348.jpg', '2022-03-28 17:15:32', '2022-03-28 17:15:32'),
(456, 'MBA629', 'Sherihan Khaled  Saleh', 'Saudi Arabian', 'Master in Business Administration', '16484733571-15-e1477842489625.jpg', '2022-03-28 17:15:57', '2022-03-28 17:15:57'),
(457, 'MBA636', 'Sayed Mohamed Ahmed Moustafa', 'Egyptian', 'Master in Business Administration', '16484733791-14-e1477841846151.jpg', '2022-03-28 17:16:19', '2022-03-28 17:16:19'),
(458, 'Ps600', 'Salam Rashad Slim', 'Lebanese', 'Master in Political Science and International Relations', '1648473400Scan-1-e1477841020992.jpg', '2022-03-28 17:16:40', '2022-03-28 17:16:40'),
(459, 'Ps607', 'Safar Abdullah Hammd Aldousari', 'Saudi Arabian', 'Master in Political Science and International Relations', '16484734221-13-e1477777839152.jpg', '2022-03-28 17:17:02', '2022-03-28 17:17:02'),
(460, 'PHDPS638', 'Reem Bassam Alfanek', 'Canadian', 'Ph.D. in Political Science and International Relations', '16484734661-11-e1477762649722.jpg', '2022-03-28 17:17:46', '2022-03-28 17:17:46'),
(461, 'HR593', 'Mohamed Saeed Mohsen', 'Yemeni', 'Master in Human Resource Management', '16484735351-8-e1477756234769.jpg', '2022-03-28 17:18:55', '2022-03-28 17:18:55'),
(462, 'MBA594', 'Khaled Ibrahim Ayesh Abureesh', 'Jordanian', 'Master in Business Administration', '16484735811-5-e1477495386692.jpg', '2022-03-28 17:19:41', '2022-03-28 17:19:41'),
(463, 'Ps615', 'Hussein Mohammed Ahmed Basha', 'Yemeni', 'Master in Political Science and International Relations', '164847361044-e1477415714212.jpg', '2022-03-28 17:20:10', '2022-03-28 17:20:10'),
(464, 'PHD614', 'Hasan Azeez Madhi Alchlehee', 'Iraqi', 'Ph.D.in Human Resource Management', '16484736361-4-e1476916820208.jpg', '2022-03-28 17:20:36', '2022-03-28 17:20:36'),
(465, 'Ps588', 'Hossam Gomaa AbdElbari AbouSaleh', 'Egyptian', 'Master in Political Science and International Relations', '16484736581-3-e1476916356748.jpg', '2022-03-28 17:20:58', '2022-03-28 17:20:58'),
(466, 'IA627', 'Hayif Mawlood Mohammed Mohammed', 'Iraqi', 'Master in International Arbitration', '16484736821-2-e1476916054769.jpg', '2022-03-28 17:21:22', '2022-03-28 17:21:22'),
(467, 'Ps620', 'Hafed Mustafa Elsadik Ahmed', 'Libyan', 'Master in Political Science and International Relations', '16484737031-1-e1476915553543.jpg', '2022-03-28 17:21:43', '2022-03-28 17:21:43'),
(468, 'PHD644', 'Jawad Kadhim Hassan', 'Iraqi', 'Ph.D.in Business Administration', '164847374365656565-e1476912067492.jpg', '2022-03-28 17:22:23', '2022-03-28 17:22:23'),
(469, 'MBA637', 'Jameal Farouq J Khogeer', 'Saudi Arabian', 'Master in Business Administration', '1648473765110-e1475948913329.jpg', '2022-03-28 17:22:45', '2022-03-28 17:22:45'),
(470, 'Ps599', 'Gomaa Hussein Mohamed Kelib', 'Egyptian', 'Master in Political Science and International Relations', '164847379119-e1475948382222.jpg', '2022-03-28 17:23:11', '2022-03-28 17:23:11'),
(471, 'PHDIA670', 'Tawfiq Salim Mohammad Alhalhouly', 'Jordanian', 'Ph.D.in International Arbitration', '164847381318-e1475945311785.jpg', '2022-03-28 17:23:33', '2022-03-28 17:23:33'),
(472, 'PHD650', 'Basma Farag Mohamed Altawati', 'Libyan', 'Ph.D.in Business Administration', '164847384817-e1475944806580.jpg', '2022-03-28 17:24:08', '2022-03-28 17:24:08'),
(473, 'MBA619', 'Ehab AbdElsatiar Abuelnaga Elhousseini', 'Egyptian', 'Master in Business Administration', '164847388116-e1475943691610.jpg', '2022-03-28 17:24:41', '2022-03-28 17:24:41'),
(474, 'HR640', 'Elham Mohamed Eltohami Khalil Elhoushi', 'Egyptian', 'Master in Human Resource Management', '1648473907r423423-e1475941816649.jpg', '2022-03-28 17:25:07', '2022-03-28 17:25:07'),
(475, 'MBA626', 'Ahmad Yousef Qasim Alkhalil', 'Jordanian', 'Master in Business Administration', '164847397514-e1475925486897.jpg', '2022-03-28 17:26:15', '2022-03-28 17:26:15'),
(476, 'MBA621', 'Ahmed Abdulhussein Mozan Alzuabidi', 'Iraqi', 'Master in Business Administration', '164847400113-e1475925055448.jpg', '2022-03-28 17:26:41', '2022-03-28 17:26:41'),
(477, 'PHDPS649', 'Ahmed Jamil Shkhitir Alqubailat', 'Jordanian', 'Ph.D. in Political Science and International Relations', '164847405312-e1475924501763.jpg', '2022-03-28 17:27:33', '2022-03-28 17:27:33'),
(478, 'PHD641', 'Ahlam Abdulla Hasan Ali', 'Bahraini', 'Ph.D.in Human Resource Management', '16484740940-e1475923898859.jpg', '2022-03-28 17:28:14', '2022-03-28 17:28:14'),
(479, 'MBA625', 'Ihsan Saeed Mohammed Alabd Ali', 'Iraqi', 'Master in Business Administration', '16484741191-e1475923567631.jpg', '2022-03-28 17:28:39', '2022-03-28 17:28:39'),
(480, 'PS586', 'Nouri Khalaf Shawi Al-Qallaf', 'Kuwaiti', 'Master in Political Science and International Relations', '1648474173121.jpg', '2022-03-28 17:29:33', '2022-03-28 17:29:33'),
(481, 'PHD.PS515', 'Najib Georges Abou Diwan', 'Lebanese', 'Ph.D. in Political Science and International Relations', '1648474223120.jpg', '2022-03-28 17:30:23', '2022-03-28 17:30:23'),
(482, 'MBA585', 'Ahmed Naguib Mahmoud Ahmed Shouma', 'Egyptian', 'Master in Business Administration', '1648474251119.jpg', '2022-03-28 17:30:51', '2022-03-28 17:30:51'),
(483, 'PHD518', 'Mohamad Adnan Abousaleh', 'Lebanese', 'Ph.D. in Business Administration', '1648474278118.jpg', '2022-03-28 17:31:18', '2022-03-28 17:31:18'),
(484, 'MBA503', 'Aljasir Mohammed Aboulkarim A', 'Saudi', 'Master in Business Administration', '164847432332.jpg', '2022-03-28 17:32:03', '2022-03-28 17:32:03'),
(485, 'MBA587', 'Mohamed Amin Amin Elnady', 'Egyptian', 'Master in Business Administration', '1648474346117.jpg', '2022-03-28 17:32:26', '2022-03-28 17:32:26'),
(486, 'phd502', 'Mohammad Ahmad Shehadeh Abu Awwad', 'Jordanian', 'Ph.D. in Business Administration', '1648474639116.jpg', '2022-03-28 17:37:19', '2022-03-28 17:37:19'),
(487, 'PHD.HR530', 'Fawzi Saad Alharthi', 'Saudi', 'Ph.D. in Human Resource Management', '1648474667115.jpg', '2022-03-28 17:37:47', '2022-03-28 17:37:47'),
(488, 'PHD.PS517', 'Ghassan Mohsen Abdullah Al-Amodi', 'Yemeni', 'Ph.D. in Political Science and International Relations', '1648474692114.jpg', '2022-03-28 17:38:12', '2022-03-28 17:38:12'),
(489, 'PHD529', 'Ali Nasser Hussain', 'Iraqi', 'Ph.D. in Business Administration', '1648474720113.jpg', '2022-03-28 17:38:40', '2022-03-28 17:38:40'),
(490, 'PHD.PS516', 'Ali Odeh Hassan Alsuheimat', 'Jordanian', 'Ph.D. in Political Science and International Relations', '164847474531.jpg', '2022-03-28 17:39:05', '2022-03-28 17:39:05'),
(491, 'MBA589', 'Alaa Mohmmad Saeed Ayoub', 'Jordanian', 'Master in Business Administration', '1648474774112.jpg', '2022-03-28 17:39:34', '2022-03-28 17:39:34'),
(492, 'PHD.IA522', 'Essam Ahmed Abbas Ahmed Hammad', 'Omani', 'Ph.D. in International Arbitration', '1648474797111.jpg', '2022-03-28 17:39:57', '2022-03-28 17:39:57'),
(493, 'PHD528', 'Abdulah .K . Mohammed', 'Iraqi', 'Ph.D. in Business Administration', '1648474822110.jpg', '2022-03-28 17:40:22', '2022-03-28 17:40:22'),
(494, 'PHD527', 'Abdullah Sulaiman Alnabhani', 'Omani', 'Ph.D. in Business Administration', '164847487419.jpg', '2022-03-28 17:41:14', '2022-03-28 17:41:14'),
(495, 'PHD.HR520', 'Saud Muteb N Aljabreen', 'Saudi', 'Ph.D. in Human Resource Management', '164847490218.jpg', '2022-03-28 17:41:42', '2022-03-28 17:41:42'),
(496, 'PHD521', 'Ridha Ben Necib', 'Tunisian', 'Ph.D. in Business Administration', '164847492917.jpg', '2022-03-28 17:42:09', '2022-03-28 17:42:09'),
(497, 'PHD526', 'Ramia Mahmoud Ahmad Abdou', 'Jordanian', 'Ph.D. in Business Administration', '164847495316.jpg', '2022-03-28 17:42:33', '2022-03-28 17:42:33'),
(498, 'P.S 559', 'rami ali saleh bin marei', 'Yemeni', 'Master in Political Science and International Relations', '164847497715.jpg', '2022-03-28 17:42:57', '2022-03-28 17:42:57'),
(499, 'Ps584', 'Djabi Radia', 'Algerian', 'Master in Political Science and International Relations', '164847500414.jpg', '2022-03-28 17:43:24', '2022-03-28 17:43:24'),
(500, 'PHD525', 'khalid Alfaytouri Hasan Shnabah', 'Libyan', 'Ph.D. in Business Administration', '164847503013.jpg', '2022-03-28 17:43:50', '2022-03-28 17:43:50'),
(501, 'PHD.HR523', 'Osama Alarnaout', 'Lebanese', 'Ph.D. in Human Resource Management', '164847509711.jpg', '2022-03-28 17:44:57', '2022-03-28 17:44:57'),
(502, 'PHD531', 'Ahmed Salaheldin Mohamed Hassanein', 'Egyptian', 'Ph.D. in Business Administration', '16484751241 (1).jpg', '2022-03-28 17:45:24', '2022-03-28 17:45:24'),
(503, 'h.R538', 'Mohamad abdul hadi abdul hadi', 'Lebanese', 'Master in Human Resource Management', '164847515612528798_524744371041518_1227938408_o.jpg', '2022-03-28 17:45:56', '2022-03-28 17:45:56'),
(504, 'PHD.PS.509', 'Walid Mohamed Medhat Mohamed Abbas', 'Egyptian', 'Ph.D. in Political Science and International Relations', '1648475242phdps509.jpg', '2022-03-28 17:47:22', '2022-03-28 17:47:22'),
(505, 'PHD510', 'Hanadi M A Alsayed Omar', 'Kuwaiti', 'Ph.D. in Political Science and International Relations', '1648475270phd510.jpg', '2022-03-28 17:47:50', '2022-03-28 17:47:50'),
(506, 'PS558', 'Noori Ali Farhan', 'Iraqi', 'Master in Political Science and International Relations', '1648475294ps558.jpg', '2022-03-28 17:48:14', '2022-03-28 17:48:14'),
(507, 'PHDIA513', 'Murad Mohmmad Ali Aburahma', 'Jordanian', 'Ph.D. in International Arbitration', '1648475345phdia513.jpg', '2022-03-28 17:49:05', '2022-03-28 17:49:05'),
(508, 'MPA552', 'Mohamad Adnan Abousaleh', 'Lebanese', 'Master in Business Administration', '1648475371mba552.jpg', '2022-03-28 17:49:31', '2022-03-28 17:49:31'),
(509, 'PS582', 'ABDELATY Omar Mohamed Elmahdy', 'Egyptian', 'Master in Political Science and International Relations', '1648475397ps582.jpg', '2022-03-28 17:49:57', '2022-03-28 17:49:57'),
(510, 'PS556', 'Ashour Abdulrahem Mohamed Younis', 'Libyan', 'Master in Political Science and International Relations', '1648475424ps556.jpg', '2022-03-28 17:50:24', '2022-03-28 17:50:24'),
(511, 'PHDIA512', 'Roshdi Moustafa Mostafa Abousamra', 'Egyptian', 'Ph.D. in International Arbitration', '1648475449phdia512.jpg', '2022-03-28 17:50:49', '2022-03-28 17:50:49'),
(512, 'PS581', 'Hmoud A H H Alshammari', 'Kuwaiti', 'Master in Political Science and International Relations', '1648475508ps581.jpg', '2022-03-28 17:51:48', '2022-03-28 17:51:48'),
(513, 'MPA548', 'Tamer Abdelmoneim Elzanati Elganayni', 'Egyptian', 'Master in Business Administration', '1648475564mba548.jpg', '2022-03-28 17:52:44', '2022-03-28 17:52:44'),
(514, 'MPA550', 'Ameen Ali Nasser Muaagar', 'Yemeni', 'Master in Business Administration', '1648475595mpa550.jpg', '2022-03-28 17:53:15', '2022-03-28 17:53:15'),
(515, 'MPA551', 'Oum Hani Bouchrit', 'Lebanese', 'Master in Business Administration', '1648475622mba551.jpg', '2022-03-28 17:53:42', '2022-03-28 17:53:42'),
(516, 'PHDHR511', 'Islam Abbas Mohamed Mosa', 'Sudanese', 'Ph.D. in Human Resource Management', '1648475651phd.hr511.jpg', '2022-03-28 17:54:11', '2022-03-28 17:54:11'),
(517, 'MPA549', 'Ahmed Jaber B Hakami', 'Saudi', 'Master in Business Administration', '1648475677mba549.jpg', '2022-03-28 17:54:37', '2022-03-28 17:54:37'),
(518, 'P.S542', 'Muhanad Mohammed Ali Abu qndel', 'Libyan', 'Master in Political Science and International Relations', '1648475712PS542.jpg', '2022-03-28 17:55:12', '2022-03-28 17:55:12'),
(519, 'P.S553', 'Moftah . O.H. Mohamed', 'Libyan', 'Master in Political Science and International Relations', '1648475737PS553.jpg', '2022-03-28 17:55:37', '2022-03-28 17:55:37'),
(520, 'P.S547', 'Mustapha Al Atiyat', 'Tunisian', 'Master in Political Science and International Relations', '1648475762PS547.jpg', '2022-03-28 17:56:02', '2022-03-28 17:56:02'),
(521, 'P.S541', 'Mohamed Ahmed B Abufalgha', 'Libyan', 'Master in Political Science and International Relations', '1648475807PS541.jpg', '2022-03-28 17:56:47', '2022-03-28 17:56:47'),
(522, 'P.S543', 'Fayez Rashed Ali Al Rashed', 'Saudi', 'Master in Political Science and International Relations', '1648475830PS543.jpg', '2022-03-28 17:57:10', '2022-03-28 17:57:10'),
(523, 'P.S540', 'Ghassan Mohsen Abdullah Al-Amodi', 'Yemen', 'Master in Political Science and International Relations', '1648475860PS540.jpg', '2022-03-28 17:57:40', '2022-03-28 17:57:40'),
(524, 'P.S539', 'Ali Odeh Hassan Alsuheimat', 'Jordanian', 'Master in Political Science and International Relations', '1648475886PS539.jpg', '2022-03-28 17:58:06', '2022-03-28 17:58:06'),
(525, 'P.S 545', 'Saad Abdullah A alshamrani', 'Saudi', 'Master in Political Science and International Relations', '1648475908PS545.jpg', '2022-03-28 17:58:28', '2022-03-28 17:58:28'),
(526, 'P.S544', 'Boudjabeur khaled', 'Algerian', 'Master in Political Science and International Relations', '1648475933PS544.jpg', '2022-03-28 17:58:53', '2022-03-28 17:58:53'),
(527, 'P.S546', 'Khaled Saad S Al Ghamdi', 'Saudi', 'Master in Political Science and International Relations', '1648476305PS546.jpg', '2022-03-28 18:05:05', '2022-03-28 18:05:05'),
(528, 'P.HD.P.S507', 'Hussein Mohamad Almurad', 'Saudi', 'PH.D.in Political Science and International Relations', '1648476353PHDPS508.jpg', '2022-03-28 18:05:53', '2022-03-28 18:05:53'),
(529, 'PHD507', 'Ahmed Abdullah Abdulkarim Albloushi', 'Saudi', 'PH.D.in Political Science and International Relations', '1648476385PHD507.jpg', '2022-03-28 18:06:25', '2022-03-28 18:06:25'),
(530, 'Phd503', 'SMEER Abdulraheem Shuaib', 'Iraqi', 'Phd in business administration', '164847641012767396_512039575645331_673830277_n.jpg', '2022-03-28 18:06:50', '2022-03-28 18:06:50'),
(531, 'Bsc5001', 'Bahjat atiyah mansoor', 'Iraqi', 'Business administration', '1648476487bsc5001.jpg', '2022-03-28 18:08:08', '2022-03-28 18:08:08'),
(532, 'Mba537', 'Ashraf Alaa Abdelwarrth Elsherif', 'Egyptian', 'Business administration', '1648476513mba537.jpg', '2022-03-28 18:08:33', '2022-03-28 18:08:33'),
(533, 'Mba536', 'Saleh Mohamed sallom', 'Syrian', 'Business administration', '1648476544mba536.jpg', '2022-03-28 18:09:04', '2022-03-28 18:09:04'),
(534, 'Mba535', 'Ahmed Salaheldin Mohamed hassanein', 'Egyptian', 'Business administration', '1648476608mba535.jpg', '2022-03-28 18:10:08', '2022-03-28 18:10:08'),
(535, 'Mba534', 'Maram salem mousa aldabis', 'Saudi', 'Business administration', '1648476634mba534.jpg', '2022-03-28 18:10:34', '2022-03-28 18:10:34'),
(536, 'Mba533', 'Afaf mohmoud rashed albalbisi', 'Palestinian', 'Business administration', '1648476662mba533.jpg', '2022-03-28 18:11:02', '2022-03-28 18:11:02'),
(537, 'Mba532', 'Baddi alsanoussi mouse', 'Libyan', 'Business administration', '1648476688mba532.jpg', '2022-03-28 18:11:28', '2022-03-28 18:11:28'),
(538, 'Mba531', 'Mohamed refaat Mohamed hamed', 'Egyptian', 'Business administration', '1648476714mba531.jpg', '2022-03-28 18:11:54', '2022-03-28 18:11:54'),
(539, 'Mba530', 'Jolan yaqoob matti al shoshe', 'Iraqi', 'Business administration', '1648476753mba530.jpg', '2022-03-28 18:12:33', '2022-03-28 18:12:33'),
(540, 'Mba529', 'Mazen Muhammad naffe albakjaji', 'Syrian', 'Business administration', '1648476783mba529.jpg', '2022-03-28 18:13:03', '2022-03-28 18:13:03'),
(541, 'Mba528', 'Sami Elian ahmed', 'Palestinian', 'Business administration', '1648476837mba528.jpg', '2022-03-28 18:13:57', '2022-03-28 18:13:57'),
(542, 'Mba527', 'Jamal farouq abdelglil taia', 'Egyptian', 'Business administration', '1648476862mba527.jpg', '2022-03-28 18:14:22', '2022-03-28 18:14:22'),
(543, 'Mba526', 'Dina Riyadh salih', 'An Iraqi', 'Business administration', '1648476893mba526.jpg', '2022-03-28 18:14:53', '2022-03-28 18:14:53'),
(544, 'Mba525', 'Hakami ahmed jaber', 'Saudi', 'Business administration', '1648476963mba525.jpg', '2022-03-28 18:16:03', '2022-03-28 18:16:03'),
(545, 'Mba524', 'Wassim mikhael mattar', 'Lebanese', 'Business administration', '1648476992mba524.jpg', '2022-03-28 18:16:32', '2022-03-28 18:16:32'),
(546, 'Mba523', 'Elsayed abdelaziz abdelkader ahmed', 'Egyptian', 'Business administration', '1648477519mba523.jpg', '2022-03-28 18:25:19', '2022-03-28 18:25:19'),
(547, 'Mba522', 'Ahmed Mohamed abdelhamid salem', 'Egyptian', 'Business administration', '1648477552mba522.jpg', '2022-03-28 18:25:52', '2022-03-28 18:25:52'),
(548, 'Mba521', 'Mohamed Abdelghani  Abdelaziz Galbat', 'Egyptian', 'Business administration', '1648477579mba521.jpg', '2022-03-28 18:26:19', '2022-03-28 18:26:19'),
(549, 'Mba520', 'Ahmed elbadawy Mohamed anwer', 'Egyptian', 'Business administration', '1648477608mba520.jpg', '2022-03-28 18:26:48', '2022-03-28 18:26:48'),
(550, 'Mba519', 'Mohamed redha ghuloom husain', 'Bahraini', 'Business administration', '1648477645mba519.jpg', '2022-03-28 18:27:25', '2022-03-28 18:27:25'),
(551, 'Mba518', 'Dana mousa melly', 'Saudi', 'Business administration', '1648477691mba518.jpg', '2022-03-28 18:28:11', '2022-03-28 18:28:11'),
(552, 'Mba517', 'Mohammed Trad Almatrafi', 'Saudi', 'Business administration', '1648477717mba517.jpg', '2022-03-28 18:28:37', '2022-03-28 18:28:37'),
(553, 'Mba516', 'Mousa faraj radhi', 'Iraqi', 'Business administration', '1648477742mba516.jpg', '2022-03-28 18:29:02', '2022-03-28 18:29:02'),
(554, 'Mba515', 'Ihab Mohammed Gharby Abdou', 'Egyptian', 'Business administration', '1648477771mba515.jpg', '2022-03-28 18:29:31', '2022-03-28 18:29:31'),
(555, 'Mba514', 'Ghassan Mohsen moustafa ahmed abdou', 'Syrian', 'Business administration', '1648477802mba514.jpg', '2022-03-28 18:30:02', '2022-03-28 18:30:02'),
(556, 'Mba513', 'Ghazi Abd-elsattar Almaimani', 'Saudi', 'Business administration', '1648477828mba513.jpg', '2022-03-28 18:30:28', '2022-03-28 18:30:28'),
(557, 'Mba512', 'Osama Ahmed Salama', 'Libyan', 'Business administration', '1648477856mba512.jpg', '2022-03-28 18:30:56', '2022-03-28 18:30:56'),
(558, 'Mba511', 'Alaa eldin Mohamed Ragheb Elbadry', 'Egyptian', 'Business administration', '1648477886mba511.jpg', '2022-03-28 18:31:26', '2022-03-28 18:31:26'),
(559, 'Mba510', 'Mohammad Ahmad Shehadeh Abu Awwad', 'Jordanian', 'Business administration', '1648477919mba5101.jpg', '2022-03-28 18:31:59', '2022-03-28 18:31:59'),
(560, 'Mba509', 'Mounir Farag Mahdi Borei', 'Egyptian', 'Business administration', '1648477955mba5091.jpg', '2022-03-28 18:32:35', '2022-03-28 18:32:35'),
(561, 'Mba508', 'Abdullah Abd-elslam Ali Altbouli', 'Libyan', 'Business administration', '1648478070mba508.jpg', '2022-03-28 18:34:30', '2022-03-28 18:34:30'),
(562, 'Mba507', 'Ahmad Rostom Mohamad Maher', 'Syrian', 'Business administration', '1648478103mba507.jpg', '2022-03-28 18:35:03', '2022-03-28 18:35:03'),
(563, 'Mba506', 'Khaled Mahmoud Gbril', 'Libyan', 'Business administration', '1648478130mba506.jpg', '2022-03-28 18:35:30', '2022-03-28 18:35:30'),
(564, 'Mba505', 'Mokhtar Ibrahim hamad aldhomy', 'Libyan', 'Business administration', '1648478156mba505.jpg', '2022-03-28 18:35:56', '2022-03-28 18:35:56'),
(565, 'Mba504', 'Ahmed Mahmoud ahmed salem', 'Egyptian', 'Business administration', '1648478184mba504.jpg', '2022-03-28 18:36:24', '2022-03-28 18:36:24'),
(566, 'Mba502', 'Hussain hamad alnaif', 'Syrian', 'Business administration', '1648478282mba502.jpg', '2022-03-28 18:38:02', '2022-03-28 18:38:02'),
(567, 'Mba501', 'Hashim Ali Nasser alirei', 'Yemeni', 'Business administration', '1648478307mba501.jpg', '2022-03-28 18:38:27', '2022-03-28 18:38:27'),
(568, 'Bm501', 'Ahmed Naguib Mahmoud Ahmed Shoma', 'Egyptian', 'Projects Management', '1648479292bm501.jpg', '2022-03-28 18:54:52', '2022-03-28 18:54:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verfies`
--
ALTER TABLE `verfies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `number` (`number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `verfies`
--
ALTER TABLE `verfies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=569;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
