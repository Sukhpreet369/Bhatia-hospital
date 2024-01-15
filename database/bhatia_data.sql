-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2023 at 08:14 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bhatia_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `bh_about_list`
--

CREATE TABLE `bh_about_list` (
  `list_id` int(11) NOT NULL,
  `list_detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bh_about_list`
--

INSERT INTO `bh_about_list` (`list_id`, `list_detail`) VALUES
(1, 'Private Rooms'),
(2, 'Labour Room'),
(3, '24 Hours Pharmacy'),
(4, '24 Hours Laboratory'),
(5, 'Dialysis Room'),
(6, '24 Hours Emergency');

-- --------------------------------------------------------

--
-- Table structure for table `bh_homepage_about`
--

CREATE TABLE `bh_homepage_about` (
  `section_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `imageurl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bh_homepage_about`
--

INSERT INTO `bh_homepage_about` (`section_id`, `title`, `description`, `imageurl`) VALUES
(1, 'Who We Are?', 'Bhatia Hospital & Multispecialty Hospital at Patiala Punjab, Established in Sep 2018, is one of the tertiary care hospital in the city. It is situated on the Badungar Road Near Khalsa College. The State-of-the-art ICU (Intensive Care Unit) at the hospital is fully equipped to help stabilise accident victims and effectively handle all kinds of emergency cases. Super specialty care in the field of Medicine Neurology. Nephrology Brain & Spine Surgery, Joint Replacement, Orthopaedic Surgery, Obstetrics & Gynaecology, Infertility , Laparoscopic Surgeries Cancer Surgery , General Surgery, and Urology Surgeries & Oncology Cases. Our Hospital has a total of 30 beds, a 10 bed intensive Care Unit, Dialysis, Operation Theatre (Two) with the state of art facilities. Round the clock emergency, Intensive Care Unit, Pharmacy and Clinical Lab facilities are available. The management of the hospital would like to maintain constant high quality health care.', 'bhatiahospital_frant_02.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bh_home_carousel`
--

CREATE TABLE `bh_home_carousel` (
  `c_id` int(11) NOT NULL,
  `carousel_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bh_home_carousel`
--

INSERT INTO `bh_home_carousel` (`c_id`, `carousel_img`) VALUES
(1, 'author3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bh_home_feautes`
--

CREATE TABLE `bh_home_feautes` (
  `fid` int(11) NOT NULL,
  `bedno` text NOT NULL,
  `beddes` text NOT NULL,
  `otno` text NOT NULL,
  `otdes` text NOT NULL,
  `happyno` text NOT NULL,
  `happydes` text NOT NULL,
  `yrsno` text NOT NULL,
  `years` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bh_home_feautes`
--

INSERT INTO `bh_home_feautes` (`fid`, `bedno`, `beddes`, `otno`, `otdes`, `happyno`, `happydes`, `yrsno`, `years`) VALUES
(1, '35', 'Beds', '2', 'Operation Theaters', '4379', 'Happy Patients', '5', 'Years');

-- --------------------------------------------------------

--
-- Table structure for table `bh_home_services`
--

CREATE TABLE `bh_home_services` (
  `srid` int(11) NOT NULL,
  `sertitl` text NOT NULL,
  `serdes` text NOT NULL,
  `oderno` int(11) NOT NULL,
  `icon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bh_home_services`
--

INSERT INTO `bh_home_services` (`srid`, `sertitl`, `serdes`, `oderno`, `icon`) VALUES
(1, 'Neurology', 'Bhatia Hospital is one of the top neuro specialist hospitals in Patiala, and we are also the leading hospital for treating neurological diseases.', 0, '<i class=\"icofont icofont-brain-alt\"></i>'),
(2, 'Cancer', 'Cancer is a group of more than 100 different diseases. It can develop almost anywhere in the body.', 0, '<i class=\"icofont-brainstorming\"></i>'),
(3, 'Gynaecology', 'The department of Obstetrics and Gynaecology of Bhatia Hospitalhas been in existence since 5 yrs.', 0, '<i class=\"icofont icofont-heart-alt\"></i>'),
(4, 'Cardiology', 'Bhatia Hospital runs under the leadership of highly experienced cardiac surgeons who have played a pioneering role in the multi-vessel beating heart surgery and bloodless heart surgery.', 0, '<i class=\"icofont icofont-boy\"></i>'),
(5, ' Nephrology', 'Nephrology concerns the diagnosis and treatment of kidney diseases, including electrolyte disturbances and hypertension,', 0, '<i class=\"icofont icofont-heart-beat\"></i>'),
(6, 'Orthopaedics', 'Bhatia Hospital, the best orthopedic hospital in India provides comprehensive and world-class orthopaedic services.', 0, '<i class=\"icofont icofont-leg\"></i>');

-- --------------------------------------------------------

--
-- Table structure for table `bh_home_slider`
--

CREATE TABLE `bh_home_slider` (
  `sid` int(11) NOT NULL,
  `imageUrl` text NOT NULL,
  `ButtonText` text NOT NULL,
  `ButtonUrl` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bh_home_slider`
--

INSERT INTO `bh_home_slider` (`sid`, `imageUrl`, `ButtonText`, `ButtonUrl`, `link`) VALUES
(1, 'slider-hospital.jpg', '', '', '#'),
(2, 'slider-nuro-01.jpg', '', '', 'http://bhatiahospital.in/Neurology.php'),
(3, 'slider-kimmo-04.jpg', '', '', 'http://bhatiahospital.in/oncology.php'),
(4, 'slider-icu.jpg', '', '', 'http://bhatiahospital.in/ICU.php'),
(5, 'slider-ayushman.jpg', '', '', '#');

-- --------------------------------------------------------

--
-- Table structure for table `bh_home_widgets`
--

CREATE TABLE `bh_home_widgets` (
  `w_id` int(11) NOT NULL,
  `w_title` text NOT NULL,
  `w_des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bh_home_widgets`
--

INSERT INTO `bh_home_widgets` (`w_id`, `w_title`, `w_des`) VALUES
(1, 'Cancer Treatment', ' Free Cancer Treatment for ayushman card holders'),
(2, 'Medical Camps', '   The Hospital organizes free medical camps for the benefit of the poor and needy.'),
(4, '24 Hours', 'Emergency and Ambulance Services');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cust_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_phone` varchar(20) NOT NULL,
  `subject` text NOT NULL,
  `msage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cust_id`, `c_name`, `c_email`, `c_phone`, `subject`, `msage`) VALUES
(1, 'Navi', 'navi2112@gmail.com', '09809878990', 'enlidh', 'helo testingjh');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dep_id` int(11) NOT NULL,
  `dep_title` text NOT NULL,
  `dep_des` text NOT NULL,
  `dep_feat_img` varchar(200) NOT NULL,
  `treatments` text NOT NULL,
  `orderno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dep_id`, `dep_title`, `dep_des`, `dep_feat_img`, `treatments`, `orderno`) VALUES
(1, 'Neurology', '&lt;p&gt;The Department of Neurology and Neurosurgery in Bhatia Hospital provides prevention, diagnosis, treatment and rehabilitation of disorders that effect the Brain, Spine, Peripheral Nerves and blood vessels. Our physicians are pioneers in this field, developing new techniques and tools, with the goal of returning to normal functioning. This department offers the treatment of paralytic disorders, sleep disorders, multidisciplinary assessment and management of multiple sclerosis, headaches, Brain surgeries, skull base surgery, paediatric surgery, epilepsy surgery, endoscopic surgery to hydrocephalus surgery and spine surgeries.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;How come you need to see a neurologist?&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;If you are dealing with organic diseases of the brain, spinal cord, muscles, and neurological system, you may need to see a nephrologist. Examining the symptoms and illnesses that have impacted the patients&#039; mental state is how neurologists help them.&lt;/p&gt;&lt;p&gt;The following indicators indicate whether it&#039;s time to visit a neurospecialty hospital:&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Stroke&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;A stroke occurs when you lose blood supply to your brain. Without blood supply, brain cells begin to die. This can cause difficulty with speech, controlling your emotions, and more. Even when the stroke is over, you’ll need treatment to regain any skills that were lost.&lt;/p&gt;&lt;p&gt;A neurologist can help assess the extent of the damage to your brain. They can develop a treatment plan and prescribe medications to help you recover.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Headaches&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;You should likely schedule a consultation with a neurologist if you experience migraine pain, especially if the symptoms are connected to neurological conditions.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Epilspsy&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Epilepsy is a disorder of the brain characterized by repeated seizures. A seizure is usually defined as a sudden alteration of behavior due to a temporary change in the electrical functioning of the brain. Normally, the brain continuously generates tiny electrical impulses in an orderly pattern. These impulses travel along neurons — the network of nerve cells in the brain — and throughout the whole body via chemical messengers called neurotransmitters.&lt;/p&gt;&lt;p&gt;In epilepsy the brain&#039;s electrical rhythms have a tendency to become imbalanced, resulting in recurrent seizures. In patients with seizures, the normal electrical pattern is disrupted by sudden and synchronized bursts of electrical energy that may briefly affect their consciousness, movements or sensations.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Movement Disorder&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Balance issues that make it difficult to walk, as well as stumbling and unintended jerks, are all signs of significant neurological problems.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Neuro-Muscle Disorders&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Neuromuscular disorders affect the nerves that control certain muscles in your body. These muscles are called your voluntary muscles — they’re the muscles you can choose to move such as the ones in your arms, legs, or face.&lt;/p&gt;&lt;p&gt;Disorders that affect voluntary muscles can be genetically inherited (passed down from your parents) or may develop over time as a complication of certain health conditions such as an autoimmune disorder.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Neuropsychiatry&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Neurology and psychiatry are fields that detect and treat very specific symptoms. Neuropsychiatrists treat physical and mental indicators that fall into that “middle zone”.&lt;/p&gt;', 'cancer-01.jpg', '&lt;p&gt;Bhatia Hospital unit of Neurology offers complete brain care, including Ahzimers, headaches, spinal injury, brain injury, and many more. Some of these issues are resolved with the help of medications, but some patients might have reached a chronic level of their disease, which requires surgery. At Bhatia Hospital, you can get the most experienced neurosurgeons that can provide you with every possible treatment.&lt;/p&gt;', 0),
(2, 'Oncology', '&lt;p&gt;Bhatia Hospital considered in the list of India’s Top Cancer Hospitals. To the Cancer patients who had badly lost their hope of getting healthy again, Bhatia Hospital emerged as a miracle for them with a light of hope. Here at Bhatia Hospital, we serve a holistic and integrated treatment with the vast knowledge of experts in Medical Oncology, Radiation Oncology, and Surgical Oncology.&lt;/p&gt;&lt;p&gt;Cancer Care department at Bhatia Hospital, Patiala is equipped with latest technology cancer diagnosing and treatment machines as well as surgical and radiation Oncology specialists and also the diagnostic consultants that offer comprehensive Cancer Care to the patients. Our expert team of Oncologists handles every case together and decides on the best line of cancer treatment for a particular patient. We believe in treating Cancer with a combination of Chemotherapy, Radiation Therapy, Surgery and Targeted Therapy. We are totally ready for treating complex conditions like cancers of prostate, cervix, colon/rectum, as well as heart tumors. Our mission is to take the fight against cancer to the next level, and redefine clinical benchmarks and outcomes.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;MEDICAL ONCOLOGY&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Medical oncology is a branch of oncology which treats cancer using medication, including chemotherapy, hormonal therapy, immunotherapy, targeted therapy, etc. This department aims at increasing the life expectancy and optimizing the quality of life of cancer patients by curative chemotherapy, supportive and palliative care. The department manages all kinds of hematological and solid cancers in accordance with standard of care practice international guidelines. The department also provides important consultation regarding hematological problems to other specialities like cardiology, nephrology, neurology and critical care.&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Chemotherapy&lt;/li&gt;&lt;li&gt;Hormonal Therapy&lt;/li&gt;&lt;li&gt;Biological Therapy&lt;/li&gt;&lt;li&gt;Immunotherapy&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;SURGICAL ONCOLOGY&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;The Department of Surgical Oncology was established in 2007 and was one of the earliest Surgical Oncology departments in this region. The department has grown strength to strength, abreast with latest developments and moving towards the goal of adequate cancer surgery along with function/ organ preservation in time with the internationally accepted treatment standards and guidelines. It is the best center for cancer treatment and research, catering to the needs of people of the tricity and adjoining states. The department has several innovative and pioneering work in cancer control, treatment, research and training to its credit. The department has several innovative and pioneering work in cancer control, treatment, research, and training to its credit. The department provides a thorough surgical care, starting with establishing the diagnosis, through comprehensive staging of the tumor, ontologically sound surgery and a high standard of post-operative care. We Comprehensive Cancer Care Center with full-fledged departments of Radiation Oncology, Medical Oncology, Pediatric Oncology, and supported by allied services such as Plastic surgery, Critical care medicine, Anaesthesiology, Pathology, Radiology, Micrology, Nutrition and Transfusion Medicine.&lt;/p&gt;&lt;p&gt;On an average, 400 major oncological surgeries are performed by the department in a year. The spectrum of surgeries includes basic, advanced and supra major complex resection and reconstructions.&lt;/p&gt;&lt;p&gt;Procedures for head and neck (including Thyroid and Salivary Gland tumors)&lt;/p&gt;&lt;p&gt;Breast and gynaecological cancers (Ovary, Cervix and Endometrial cancers)&lt;/p&gt;&lt;p&gt;Major procedures performed are all types of Oesophageal cancer surgeries, Hepato-pancreatico-biliary cancer surgeries (Liver, Bile duct and Pancreatic tumours), upper and lower Gastrointestinal cancer surgeries (Stomach, Colon and Rectal cancers), Thoracic cancer surgeries (Lung, Trachea, Mediastinal neoplasms including Thymus gland tumor), Limb salvage surgery (Bone and soft tissue tumors)&lt;/p&gt;&lt;p&gt;Pelvic exenteration&lt;/p&gt;&lt;p&gt;Minimally invasive cancer surgeries include advanced laparoscopic and thoracoscopic (VATS- Video Assisted Thoracoscopic Surgery) surgeries.&lt;/p&gt;&lt;p&gt;Services offered&lt;br&gt;Thoracoscopic (VATS) surgery- Esophageal cancer, Lung and Mediastinal tumors&lt;br&gt;Laparoscopic surgery- Stomach, Pancreas, Colorectal, Gynecological and Urological cancers&lt;br&gt;TAMIS- Transanal Minimally Invasive surgery for early rectal cancers&lt;br&gt;Intersphincteric resection (ISR)- Sphincter preserving surgery for low rectal cancer&lt;br&gt;Conservative surgery- Breast, Limb saving surgery, Nephron sparing for kidney cancer&lt;br&gt;Sentinel node- Breast, Gynecological and Urological cancers&lt;br&gt;Pelvic Exenterative surgery- Colorectal, Gynec and Urological cancers&lt;br&gt;Lung and liver surgery/ metastasectomy&lt;br&gt;Plastic reconstruction- Local and free flaps&lt;br&gt;Chemotherapy venous access devices insertion&lt;br&gt;&lt;br&gt;TUMOR BOARD&lt;br&gt;“An integral part of the state-of-the-art cancer center”&lt;br&gt;&lt;br&gt;A well established multi-disciplinary system where medical oncologist, surgical oncologist, radiation oncologist,pathologist, radiologist discuss and plan out management of rare and difficult cancer care. It is also a robust audit of patient care by inputs from all specialists.&lt;br&gt;&lt;br&gt;Important updates are also discussed to keep each and everyone in the department abreast of recent knowledge of rapidly involving cancer treatment.&lt;/p&gt;', 'cancer-02.jpg', '&lt;p&gt;&lt;strong&gt;RADICAL SURGERY&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Radical surgery is done for the removal of the tumor and its associated tissue for the cure of the patient.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;CONSERVATIVE CANCER SURGERY&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Surgery is done to conserve the form or function of the organ despite the removal of the whole tumor and some normal tissue around the tumor.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;CYTOREDUCTIVE SURGERY&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Removal of maximum amount of tumor or any nearby tissues to which cancer may have spread so that chemotherapy can eradicate the remaining cancer.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;METASTECTOMY&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Surgical removal of secondary cancerous growths that have originated from cancer from other parts of the body for relieving symptoms or complete cure of cancer.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;PROPHYLACTIC CANCER SURGERY&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Removal of a normal organ in order to decrease the chances of cancer in that tissue in later life in high-risk individuals&lt;/p&gt;&lt;p&gt;&lt;strong&gt;PALLIATIVE SURGERY&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Surgery aimed to relieve the symptoms caused by cancer, so as to improve the quality of life of a patient when a complete cure for cancer is not possible.&lt;/p&gt;', 0),
(3, 'Gynaecology & Obsterics', '&lt;p&gt;As a woman ages, many changes come in her body and different health issues develop at different stages. The Center for Obstetrics and Gynaecology at Bhatia hospital offer world-class and comprehensive care for women&#039;s health. Our expert Gynaecologists offer their best opinion on preventive measures, ensure accurate diagnosis and provide suitable treatment.&lt;/p&gt;&lt;p&gt;The team at the Center for Obstetrics and Gynaecology is known to deal with the most complex disorders or diseases related to the female reproductive tract. Our doctors are highly experienced and skilled to cater to women of different age groups – from teenagers to senior citizens.&lt;/p&gt;&lt;p&gt;The Department of Gynaecology and Obstetrics at Bhatia hospital supports women lifelong throughout their journey from childbearing age to menopause &amp;amp; beyond. We offer state-of-the-art technologies with supreme care offering a range of services such as pre-pregnancy, childbearing and menopausal care (Pre and Post). Against a backdrop of rapid developments, our department strives to provide our patients with the best care by keeping abreast of the fast changing panorama of women’s health.&lt;/p&gt;&lt;p&gt;Our multidisciplinary team of experienced clinicians and specialist nurses ensure that all our patients’ needs are addressed, providing our patients and their families with the support they need during their period of illness and recovery.&lt;/p&gt;&lt;figure class=&quot;table&quot;&gt;&lt;table&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td&gt;&lt;h4&gt;&lt;strong&gt;Our Treatment Services&lt;/strong&gt;&lt;/h4&gt;&lt;ul&gt;&lt;li&gt;Infertility &amp;amp; IVF&lt;/li&gt;&lt;li&gt;Gynecology care&lt;/li&gt;&lt;li&gt;Maternity care&lt;/li&gt;&lt;li&gt;Abnormal Vaginal Discharge&lt;/li&gt;&lt;li&gt;Amenorrhea&lt;/li&gt;&lt;li&gt;Adenomyosis&lt;/li&gt;&lt;li&gt;Preventive care such as PAP smear, screening&lt;/li&gt;&lt;li&gt;Menstrual irregularities&lt;/li&gt;&lt;li&gt;Cervical Cancer&lt;/li&gt;&lt;li&gt;Dyspareunia&lt;/li&gt;&lt;li&gt;Endometriosis&lt;/li&gt;&lt;li&gt;Endometrial cancers&lt;/li&gt;&lt;li&gt;Fibroids&lt;/li&gt;&lt;li&gt;Menstrual Disorders&lt;/li&gt;&lt;li&gt;Menorrhagia&lt;/li&gt;&lt;li&gt;Menopause&lt;/li&gt;&lt;li&gt;Ovarian Cysts&lt;/li&gt;&lt;li&gt;Ovarian cancer&lt;/li&gt;&lt;li&gt;Problems related to adolescence such as precocious puberty, amenorrhea &amp;amp; more&lt;/li&gt;&lt;li&gt;Pelvic Organ Prolapse, Post menstrual bleeding&lt;/li&gt;&lt;li&gt;Pelvic Inflammatory Disease (PID)&lt;/li&gt;&lt;li&gt;Polycystic Ovary Syndrome (PCOS)&lt;/li&gt;&lt;li&gt;Rectocele&lt;/li&gt;&lt;li&gt;Screening, detection and treatment of gynecological malignancies&lt;/li&gt;&lt;li&gt;Urinary Tract Infections (UTI)&lt;/li&gt;&lt;li&gt;Urinary Incontinence&lt;/li&gt;&lt;li&gt;Vaginitis&lt;/li&gt;&lt;li&gt;Vaginal Bleeding&lt;/li&gt;&lt;/ul&gt;&lt;/td&gt;&lt;td&gt;&lt;h4&gt;&lt;strong&gt;More Common Performed Procedures And Investigations are:&lt;/strong&gt;&lt;/h4&gt;&lt;ul&gt;&lt;li&gt;Amniocentesis&lt;/li&gt;&lt;li&gt;Abdominal hysterectomy&lt;/li&gt;&lt;li&gt;Cesarean delivery&lt;/li&gt;&lt;li&gt;Colposcopy&lt;/li&gt;&lt;li&gt;Dilation and Curettage (D &amp;amp; C)&lt;/li&gt;&lt;li&gt;Family Planning&lt;/li&gt;&lt;li&gt;IVF/ IVI&lt;/li&gt;&lt;li&gt;Laparoscopic vault suspension&lt;/li&gt;&lt;li&gt;Laparoscopic Hysterectomy&lt;/li&gt;&lt;li&gt;Laparoscopic Salpingectomy&lt;/li&gt;&lt;li&gt;Laparoscopic treatment for Ectopic pregnancy&lt;/li&gt;&lt;li&gt;Laparoscopic oophorectomy&lt;/li&gt;&lt;li&gt;Mirena Insertion&lt;/li&gt;&lt;li&gt;Myomectomy (Abdominal/ Vaginal/ Laparoscopic)&lt;/li&gt;&lt;li&gt;Pap smear&lt;/li&gt;&lt;li&gt;Tubectomy&lt;/li&gt;&lt;li&gt;Vaginal hysterectomy&lt;/li&gt;&lt;li&gt;Vaginal delivery&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/figure&gt;', 'gynaecology-01.jpg', '', 0),
(4, 'ICU', '&lt;p&gt;ICU and CCU provide 24-hour care for individuals with life-threatening conditions. Intensive care is needed if someone is seriously ill and requires intensive treatment and close monitoring, or if they’re having surgery and intensive care can help them recover. Most people in an ICU have problems with one or more organs. For example, they may be unable to breathe on their own. There are many different conditions and situations that can mean someone needs intensive care. The critical care unit (CCU) at Bhatia hospital is specialized, round-the-clock care for patients with serious medical conditions. The unit is manned by intensivists, qualified and trained in the resuscitation and management of critical patients. Trained nurses and paramedics in association with personnel from the department of dietetics and physiotherapy form the complete team of the department and are responsible for standardized and protocolized management. Learning that you or someone you love needs to be admitted to the CCU can be stressful, but you can take comfort in knowing that Bhatia hospital is the best place for a patient to receive the dedicated medical service they need. Patients in the CCU are monitored 24*7 by specially trained clinicians who keep a close watch on each patient’s vital signs. If any abnormalities or warning signs arise, our medical professionals act at a moment’s notice to ensure the patient gets the best treatment. ICU and CCU provide 24-hour care for individuals with life-threatening conditions. Intensive care is needed if someone is seriously ill and requires intensive treatment and close monitoring, or if they’re having surgery and intensive care can help them recover. Most people on an ICU have problems with one or more organs. For example, they may be unable to breathe on their own. There are many different conditions and situations that can mean someone needs intensive care. The critical care unit (CCU) at Bhatia hospital is specialized, round-the-clock care for patients with serious medical conditions. The unit is manned by intensivists, qualified and trained in the resuscitation and management of critical patients. Trained nurses, paramedics in association with personnel from the department of dietetics and physiotherapy form the complete team of the department and are responsible for standardized and protocolized management. Learning that you or someone you love needs to be admitted to the CCU can be stressful, but you can take comfort knowing that Bhatia hospital is the best place for a patient to receive the dedicated medical service they need. Patients in the CCU are monitored 24*7 by specially trained clinicians who keep a close watch on each patient’s vital signs. If any abnormalities or warning signs arise, our medical professionals act at a moment’s notice to ensure the patient gets the best treatment.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Some hospitals may divide the ICU into more specific units such as:&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;CICU or CVICU: cardiac, coronary, or cardiovascular intensive care unit&lt;/li&gt;&lt;li&gt;MICU: medical intensive care unit&lt;/li&gt;&lt;li&gt;NICU: neonatal intensive care unit&lt;/li&gt;&lt;li&gt;PICU: pediatric intensive care unit&lt;/li&gt;&lt;li&gt;SICU: surgical intensive care unit&lt;/li&gt;&lt;li&gt;TICU: trauma intensive care unit&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;Visitors in the ICU are usually restricted to just family members and only one or two visitors at a time.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;What types of health issues are managed in an ICU?&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Admittance to an ICU means there’s a life threatening event. You may need to be cared for in the ICU if you:&lt;/p&gt;&lt;ul&gt;&lt;li&gt;have had major surgery, such as brain surgery, open heart surgery, coronary bypass surgery, or an organ transplant&lt;/li&gt;&lt;li&gt;have experienced major trauma such as a head injury or spinal cord injury&lt;/li&gt;&lt;li&gt;have had a heart attack or stroke&lt;/li&gt;&lt;li&gt;have serious burns&lt;/li&gt;&lt;li&gt;can’t breathe on your own&lt;/li&gt;&lt;li&gt;have vital organ failure&lt;/li&gt;&lt;li&gt;have life threatening complications of diabetes&lt;/li&gt;&lt;li&gt;have a life threatening infection&lt;/li&gt;&lt;/ul&gt;', 'icu-01.jpg', '&lt;p&gt;&lt;strong&gt;Arterial Line&lt;/strong&gt;&lt;br&gt;Putting canula in the artery&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Tracheostomy&lt;/strong&gt;&lt;br&gt;Putting tube by making hole in the neck&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Ryles Tube&lt;/strong&gt;&lt;br&gt;Putting tube in the stomach for meal&lt;/p&gt;', 0),
(5, 'Nephrology', '&lt;p&gt;Nephrology concerns the diagnosis and treatment of kidney diseases, including electrolyte disturbances and hypertension, and the care of those requiring renal replacement therapy, including dialysis and renal transplant patients.The word &#039;dialysis&#039; is from the mid-19th century: via Latin from the Greek word &#039;dialusis&#039;; from &#039;dialuein&#039; (split, separate), from &#039;dia&#039; (apart) and &#039;luein&#039; (set free). In other words, dialysis replaces the primary (excretory) function of the kidney, which separates (and removes) excess toxins and water from the blood, placing them in the urine.The mission of the Nephrology department at Bhatia hospital is to provide the highest quality of medical services to help patients suffering from various acute as well as chronic kidney diseases and kidney failure. The department provides all forms of dialysis including hemodialysis and peritoneal dialysis. It has an active renal transplant programme with around 100 transplants being performed every year. This is predominantly a living donor transplant programme.&lt;/p&gt;&lt;p&gt;PROCEDURES AVAILABLE: Bhatia hospital’s Nephrology department provides comprehensive treatment for kidney issues, hypertension-induced kidney disease, transplant support, haemo-dialysis and peritoneal dialysis.&lt;/p&gt;&lt;p&gt;Hemodialysis, Hemodiafiltration, Sustained low-efficiency dialysis (SLED), Peritoneal dialysis, Kidney biopsy, IJV catheter insertion, CAPD catheter insertion, Permacath insertion Kidney transplantation, Pre-transplant evaluation and pre-transplant care kidney transplant recipients, Post-transplant long-term care for kidney transplant recipients, Pre-transplant evaluation and pre-transplant care for living kidney donors, Pre-emptive kidney transplant (leading to better long-term prognosis for certain patients), Swap transplants, ABO incompatible transplants Dialysis services, In-center hemodialysis and peritoneal dialysis, Critical care, 24-hour emergency dialysis services, Educational programs for dialysis patients and their families&lt;/p&gt;', 'nephrology-01.jpg', '&lt;p&gt;&lt;strong&gt;Temporary Dialysis Catheter (Jugular, Femoral)&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;It is a flexible, hollow tube inserted into a large vein in your neck, chest, or leg near the groin which allows the blood to flow into and out of your body. To decrease the pain and to avoid complications we are using USG guidance during its insertion. This is generally kept for a small period of 3-4 weeks.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;PermaCath Insertion&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;(Tunneled Catheter) PermaCath tunneled Central Venous Catheter (CVC) is a special type of intravenous (IV) line that is placed into a large vein through a tunneled approach via chest. It can be used over a long period of time. We are doing its insertion in OT to maintain proper asepsis. The catheter will last anywhere from 6-12 months depending on its care.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Hemodialysis&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Dialysis replaces some of the functions when your kidneys no longer work. In hemodialysis, a dialysis machine and a special filter called an artificial kidney, or a dialyzer, are used to clean your blood. We are using the latest and most sophisticated machines for better clearance and fewer complications. To get your blood into the dialyzer, the nephrologist always advises for the timely creation of access, or entrance, into your blood vessels known as AV fistula.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Hemodialysis&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Dialysis replaces some of the functions when your kidneys no longer work. In hemodialysis, a dialysis machine and a special filter called an artificial kidney, or a dialyzer, are used to clean your blood. We are using the latest and most sophisticated machines for better clearance and fewer complications. To get your blood into the dialyzer, the nephrologist always advises for the timely creation of access, or entrance, into your blood vessels known as AV fistula&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Kidney Biopsy&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;A kidney biopsy involves taking two very tiny pieces (samples) of your kidney to look at with special microscopes to diagnose kidney diseases at early stages so that we can halt the damage to kidneys. The biopsy sample is taken by a kidney specialist through the skin with a very fine needle under USG guidance to increase precision. Its highly safe procedure takes just 2 minutes and we generally keep the patient for 4-6 hours in observation.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Kidney Transplant Care&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Kidney Specialists or Nephrologists have a key role to play in kidney transplant care. It starts from the selection of suitable donors in the family to pre and post-op care of both donor and the recipient.&lt;/p&gt;', 0),
(6, 'Cardiology', '&lt;p&gt;Bhatia Hospital of Cardiac Sciences provides comprehensive, state-of-the-art treatment in: Interventional Cardiology, CTVS. Our team of Interventional Cardiologist, and Cardiovascular surgeons are trained at the top institutes in India &amp;amp; abroad and are completely dedicated to the treatment of numerous coronary heart diseases. All our doctors work closely with other departments of Anaesthesiology and vascular imaging to provide the safest, highest quality, and the most innovative treatment for our patients. The Cardiac department at Ivy is making continuous efforts to improve patient health by utilizing minimally invasive techniques and through continual scientific innovation, revolutionary operative care &amp;amp; exemplary team effort. The hospital has a well developed center for non–invasive cardiology including– ECG, Treadmill Test (TMT), Echocardiography (ECHO), Stress Cardiology, Holter Monitoring and Color Doppler, to list a few. Bhatia Hospital provides comprehensive 24*7 Emergency assistance for patients suffering from heart attack, stroke, irregular heartbeat, low blood pressure, hypertension or any other cardiovascular disorder.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;OUR SERVICES&lt;/strong&gt;&lt;/p&gt;&lt;figure class=&quot;table&quot;&gt;&lt;table&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td&gt;&lt;p&gt;Non - Invasive Cardiology&lt;/p&gt;&lt;ul&gt;&lt;li&gt;TMT&lt;/li&gt;&lt;li&gt;Holter&lt;/li&gt;&lt;li&gt;TEE (Transesophageal ECHO)&lt;/li&gt;&lt;li&gt;Echocardiography&lt;/li&gt;&lt;li&gt;Stress Echocardiography&lt;/li&gt;&lt;li&gt;EECP&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;Interventional Cardiology&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Angiography&lt;/li&gt;&lt;li&gt;Angioplasty – Stenting&lt;/li&gt;&lt;li&gt;Valvuloplasty&lt;/li&gt;&lt;li&gt;Non-Surgical Heart Hole Closure (ASD, VSD, PDA, etc.)&lt;/li&gt;&lt;li&gt;Rotablation&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;Cardio Vascular Surgery&lt;/p&gt;&lt;ul&gt;&lt;li&gt;CABG (Bypass Surgery)&lt;/li&gt;&lt;li&gt;Valve Replacements&lt;/li&gt;&lt;li&gt;Congenital &amp;amp; Acquired Heart Defect Surgery&lt;/li&gt;&lt;li&gt;Peripheral Vascular Surgery&lt;/li&gt;&lt;li&gt;Laser for Varicose Veins&lt;/li&gt;&lt;/ul&gt;&lt;/td&gt;&lt;td&gt;&lt;p&gt;Electrophysiology&lt;/p&gt;&lt;ul&gt;&lt;li&gt;EP Study &amp;amp; RF Ablation&lt;/li&gt;&lt;li&gt;Pacemaker &amp;amp; AICD Implantation&lt;/li&gt;&lt;li&gt;Paediatric Cardiology&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;UNIQUE PRODEDURES&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Trans Aortic Valve Replacement (TAVR)&lt;/li&gt;&lt;li&gt;IVUS Guided Angioplasty&lt;/li&gt;&lt;li&gt;Aggre DYNE Guiding Platelet Therapy&lt;/li&gt;&lt;li&gt;Enhanced External Counterpulsation&lt;/li&gt;&lt;li&gt;Rotablation&lt;/li&gt;&lt;li&gt;CT Coronary Angio (in less than 10 seconds)&lt;/li&gt;&lt;li&gt;Renal Denervation&lt;/li&gt;&lt;/ul&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;/figure&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 'cardiology-01.jpg', '&lt;p&gt;&lt;strong&gt;Angiography&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;An X ray imaging technique to check for blockages in the blood vessels of the heart or elsewhere in the body&lt;/p&gt;&lt;p&gt;&lt;strong&gt;PT Coronary Angioplasty&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Percutaneus transluminal coronary angioplasty is minimally invasive procedure to open unblocked coronary arteries , allowing blood to circulate unobstructed to the heart muscle&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Temporary Pacing Involve&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Temporary pacing involve electrical cardiac stimulation to treat a bradyarrthymia or tachyarrthmias until it resolve or until long term therapy can be initated&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Pacemaker&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;It is a device meant to prevent the heart rate from falling too low and causing spells of dizziness or loss of consciousness. It is generally placed beneath the skin in the upper chest area and con&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Coronary Angiography&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Lumenography of arteries with contract agent under X rays&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Peripheral Angiography&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Lumenography of arteries with contract agent under X rays&lt;/p&gt;&lt;p&gt;&lt;strong&gt;PPI&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Put Pacing lead into heart connected to a pulse generator which is positioned under skin below shoulder bone&lt;/p&gt;&lt;p&gt;&lt;strong&gt;CABG&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;CABG or bypass surgery is the technique of constructing new blood channels to the heart at risk of an attack. Beating heart surgery is a new less invasive form of the surgery.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Valve Repairs And Replacements&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;The heart has 4 valves which can get diseased. They are then either repaired or replaced.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Repair Of Aortic Aneurysms, Dissection Aorta&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;The aorta is the main artery of the body. It can dilate or rupture. Surgery is done to correct this.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Repair Of Heart Defects In Children&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Children born with heart disease eg hole in the heart can have a limited lifespan. Timely repair restores their health.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Vascular Surgery&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Blood vessels can block leading to gangrene. In vascular surgery, the vessels are repaired.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Endovascular Surgery&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Repair is done without open surgery using stents and balloons.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Angioplasty&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;It is the method to treat the narrowings in the blood vessels of the heart (coronary) or elsewhere (peripheral). It involves dilation of the narrowing (stenosis) with a balloon and placing a stent&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Automatic Implantable Cardiac Defibrillator&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;It is a device similar to a pacemaker that has additional functions to treat abnormal fast rhythms of the heart.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Cardiac Resynchronisation Therapy&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;A pacemaker-like device with the capability to improve heart functions in a select group of patients.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;PALLIATIVE SURGERY&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Surgery aimed to relieve the symptoms caused by cancer, so as to improve the quality of life of a patient when a complete cure for cancer is not possible.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;PALLIATIVE SURGERY&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Surgery aimed to relieve the symptoms caused by cancer, so as to improve the quality of life of a patient when a complete cure for cancer is not possible.&lt;/p&gt;', 0),
(7, 'Orthopedic', '&lt;p&gt;Orthopedic department at Bhatia hospital is North India’s one of the best for treating any kind of Ortho related disorder. Our Orthopedics department is supervised by a vast experienced team of joint and bone specialists- Orthopedicians. They deal with Knee replacement surgeries, Traumatic Orthopedic surgeries, Hip replacement, Elbow replacement, and Shoulder replacement, along with arthroscopic surgeries or many other joint surgeries on a daily basis. Bhatia hospital is considered as the top orthopedic hospital in Chandigarh/ Mohali/ Panchkula with a wide array of orthopedic surgical procedures &amp;amp; surgeries from the expert orthopedicians. We focus on providing the highest level of patient care with professional expertise of early mobilization and have taken orthopedic treatment in North India to an altogether different level. Here we care for patients of all ages, from newborns to young adults to senior citizens requiring Total knee replacement, spine surgery, or any other surgeries. The joint implants are planned pre-operatively for perfect size and positioning as per the anatomy of the patient, thereby safeguarding the patients from any adverse effects.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;PROCEDURES&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Our wide range of offerings have made us rank among the best hospitals in India. Take a look at some of our most frequent surgeries performed by our orthopedicians.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Some common ortho treatments include:&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Back Pain treatment&lt;/li&gt;&lt;li&gt;Arthritis treatment&lt;/li&gt;&lt;li&gt;ACL injury&lt;/li&gt;&lt;li&gt;Cervical Disc Replacement Surgery&lt;/li&gt;&lt;li&gt;Carpal Tunnel Syndrome&lt;/li&gt;&lt;li&gt;Cervical Spondylosis treatment&lt;/li&gt;&lt;li&gt;Finger Joint Pain&lt;/li&gt;&lt;li&gt;Knee Replacement Surgery&lt;/li&gt;&lt;li&gt;Neuromuscular Disorders&lt;/li&gt;&lt;li&gt;Osteoporosis Treatment&lt;/li&gt;&lt;li&gt;Slip Disc Treatment&lt;/li&gt;&lt;li&gt;Spinal Fracture &amp;amp; Paralysis Treatment&lt;/li&gt;&lt;/ul&gt;', 'orthopedic-01.jpg', '&lt;p&gt;&lt;strong&gt;Total Hip Replacement&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;In this, the damaged bone &amp;amp; cartilage is removed and replaced with prosthetic components.The damaged femoral head is removed and replaced with a metal stem that is placed into the hollow centre&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Open Reduction Internal Fixation&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Open reduction and external fixation is a type of surgery used to fix broken bones&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Debridement&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;It is the medical removal of dead, damaged or infected tissue to improve the healing potential of the remaining healthy tissue.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Joint Replacement Surgery&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Joint replacement surgery is a procedure in which parts of a damaged joint are replaced with prosthesis. Joint replacement surgery is performed on the knee, hip, wrist, ankle, elbow and shoulder. The most commonly performed surgeries are hip and knee replacements.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Total Knee Replacement Surgery&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Total Knee Replacement Surgery is performed to treat knee damage caused by arthritis or because of any injury due to which it may be difficult for the patient to perform daily routine activities like walking or climbing stairs. When non-surgical treatments like use of walking supports and medications prove no longer to be helpful, the doctor may advise the patient to undergo a total knee replacement surgery.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Open Reduction Internal Fixation&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;The painful disc is replaced with a prosthetic implant to recover its normal functioning. A successful disc replacement surgery increases motion, improves the patient&#039;s lifestyle, while relieving the pain.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Hip Replacement Surgery&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Total hip replacement surgery intends to relieve hip pain and increase its function by resurfacing the bones that meet at the hip joint. The surgeon removes the femoral head and replaces it with prost&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Osteoporosis Treatment&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Osteoporosis weakens the bones and makes them susceptible to unexpected and sudden fractures. The condition often progresses without any painful and visible symptoms. The signs and symptoms include back pain, reduced mobility, drop in blood pressure, loss of height, stooped posture and an increased risk of falling. This disease is required to be treated by an expert Orthopedician.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Spondylitis Treatment&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;This disease is also called Ankylosing Spondylitis and is a result of inflammation of the vertebral joints. This condition develops silently and comes into prominence once fully developed.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Spinal Fractures And Paralysis&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;A spinal fracture is a dislocation or fracture of the vertebrae (backbone) and can occur anywhere along the spine. Most spinal fractures are caused from injury or trauma from car accidents, falls, sports or some sort of high velocity impact.&lt;/p&gt;', 0),
(8, 'Urology', '&lt;p&gt;Urology is one of the fastest progressing fields which deals with the management of surgical problems of kidneys, ureter, bladder, prostate, seminal vesicles, and other genital organs like the testicles and penis in males. In the females, besides dealing with the management of surgical problems of kidneys, ureter, and bladder, it deals with surgical problems of urinary incontinence, the urinary fistula like the ureterovaginal and vesicovaginal communications.&lt;/p&gt;&lt;p&gt;Urology is a part of health care that deals with diseases of the male and female urinary tract (kidneys, ureters, bladder and urethra). It also deals with the male organs that are able to make babies (penis, testes, scrotum, prostate, etc.). Since health problems in these body parts can happen to everyone, urologic health is important.&lt;/p&gt;&lt;p&gt;Urology is known as a surgical specialty. Besides surgery, a urologist is a doctor with wisdom of internal medicine, pediatrics, gynecology and other parts of health care. This is because a urologist encounters a wide range of clinical problems. The scope of urology is big and the American Urological Association has named seven subspecialty parts:&lt;/p&gt;&lt;p&gt;Pediatric Urology (children&#039;s urology) Urologic Oncology (urologic cancers) Renal (kidney) Transplant Male Infertility Calculi (urinary tract stones) Female Urology Neurourology (nervous system control of genitourinary organs) Who takes care of urology patients? If you have a problem with urologic health you might see a urologist. You might also see a person on the urologist&#039;s care team.&lt;/p&gt;', 'urology-01.jpg', '', 0),
(9, 'General-Surgery', '&lt;p&gt;The Department of General and Laparoscopic Surgery at Ivy is well equipped with the latest technology and infrastructure, supported by an experienced team of surgeons. We are committed to the principles and practices of WHO Global Initiative of Safe Surgery Save Lives. Our aim is to perform surgical procedures using minimal access techniques so that patients may enjoy faster recovery and fewer post-surgical complications.&lt;/p&gt;&lt;p&gt;&quot;General Surgery&quot; is a discipline of surgery having a central core of knowledge embracing anatomy, physiology, metabolism, immunology, nutrition, pathology, wound healing, shock and resuscitation, intensive care, and neoplasia, which are common to all surgical specialties.&lt;/p&gt;&lt;p&gt;A general surgeon has specialized knowledge and experience related to the diagnosis, preoperative, operative, and postoperative management, including the management of complications, in nine primary components of surgery, all of which are essential to the education of a broadly based surgeon:&lt;/p&gt;&lt;p&gt;Alimentary tract Abdomen and its contents Breast, skin, and soft tissue Head and neck, including trauma, vascular, endocrine, congenital and oncologic disorders—particularly tumors of the skin, salivary glands, thyroid, parathyroid, and the oral cavity Vascular system, excluding the intracranial vessels and heart Endocrine system, including thyroid, parathyroid, adrenal, and endocrine pancreas Surgical oncology, including coordinated multimodality management of the cancer patient by screening, surveillance, surgical adjunctive therapy, rehabilitation, and follow-up Comprehensive management of trauma, including musculoskeletal, hand, and head injuries—the responsibility for all phases of care of the injured patient is an essential component of general surgery Complete care of critically ill patients with underlying surgical conditions, in the emergency room, intensive care unit, and trauma/burn units The training program must consist of at least five years.&lt;/p&gt;&lt;p&gt;Not more than 12 months may be devoted to education in a single surgical discipline other than the principal components of surgery. Not more than six months in total may be allocated to nonsurgical clinical disciplines such as internal medicine, pediatrics, gastroenterology, anesthesiology, or surgical pathology. At least 54 months (4.5 years) must be clinical surgery, with experience in endoscopy, surgical intensive care, and emergency care included under this category. Three of the clinical surgery years must be concerned with the principal components of general surgery.&lt;/p&gt;', 'general-surgery-01.jpg', '&lt;p&gt;&lt;strong&gt;Laparoscopic Cholecystectomy&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;laparoscopic cholecystectomy is a procedure in which gall bladder is removed by laparoscopic techniques&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Hernioplasty&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Hernia Repair&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Appendectomy&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Removal of appendix&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Hemorrhoidectomy&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Excision of Piles&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Laparotomy&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Open Surgery&lt;/p&gt;', 0),
(10, 'Spine Surgery', '&lt;p&gt;By the time you sign up for back surgery, your doctor will probably have tried a number of treatments to ease your back pain or lower body weakness. While there are no guarantees the operation will provide relief, there are lots of options. Learn as much as you can about back surgery ahead of time. The more you know, the better the choice you’ll make.&lt;/p&gt;&lt;p&gt;What Are the Benefits?&lt;/p&gt;&lt;p&gt;Often, the result is more than just a drop in pain. You may find:&lt;/p&gt;&lt;ul&gt;&lt;li&gt;You can move around better.&lt;/li&gt;&lt;li&gt;You&#039;re more physically fit.&lt;/li&gt;&lt;li&gt;Your mood improves.&lt;/li&gt;&lt;li&gt;You don&#039;t need to take as much pain medicine.&lt;/li&gt;&lt;li&gt;You can go back to work.&lt;/li&gt;&lt;li&gt;You&#039;re more productive at work.&lt;/li&gt;&lt;li&gt;Are There Risks?&lt;/li&gt;&lt;li&gt;Most people who get back surgery have minimal, if any, complications.&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;That said, any operation has some degree of risk, including:&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Reaction to anesthesia or other drugs&lt;/li&gt;&lt;li&gt;Bleeding&lt;/li&gt;&lt;li&gt;Infection&lt;/li&gt;&lt;li&gt;Blood clots, for instance in your legs or lungs&lt;/li&gt;&lt;li&gt;Heart attack&lt;/li&gt;&lt;li&gt;Stroke&lt;/li&gt;&lt;li&gt;Herniated disk&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;Nerve damage, which can lead to weakness, paralysis, pain, sexual dysfunction, or loss of bowel or bladder control&lt;/p&gt;&lt;p&gt;The odds that something could go wrong go up for people with certain health conditions. They also vary by type of surgery. Part of your surgeon&#039;s job is to identify potential problems. So talk it over before you head to the OR.&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Back Surgery&lt;/li&gt;&lt;li&gt;Pros and Cons&lt;/li&gt;&lt;li&gt;Each type comes with its own risks and benefits&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Spinal fusion&lt;/strong&gt; This is the most common surgery for chronic nonspecific back pain with degenerative changes. The doctor will join spinal bones, called vertebrae, together. This limits the motion between them and how far your nerves can stretch. But it probably won’t limit your activity. It’s rare, but the bones don’t always fuse completely. Smoking can make this complication more likely. If it happens, you may need another operation to fix it.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Laminectomy&lt;/strong&gt; This is the most common surgery for lumbar spinal stenosis. In this procedure, a surgeon removes parts of the bone, bone spurs, or ligaments in your back. This relieves pressure on spinal nerves and can ease pain or weakness, but the procedure can make your spine less stable. If that happens, you’ll probably need a spinal fusion as well. Doctors sometimes do the two procedures together.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Foraminotomy&lt;/strong&gt; This surgery is used to relieve pain associated with a compressed nerve in the spine. The surgeon cuts away bone at the sides of your vertebrae to widen the space where nerves exit your spine. The extra room may relieve pressure on the nerves and ease your pain. Like a laminectomy, this procedure can also make your spine less stable. So the surgeon may do a spinal fusion at the same time. That’ll increase the amount of time you need for recovery.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Diskectomy&lt;/strong&gt; Sometimes a disk, the cushion that separates your vertebrae, can slip out of place, press on a spinal nerve, and cause back pain. In a diskectomy, the surgeon removes all or part of the disk. They may have to make a big cut in your back, or they may be able to do it through a small one called microdiscectomy. Microdiscectomy is performed with an operating microscope through a smaller incision than open discectomy and has become the standard surgical procedure for lumbar disc herniation. Sometimes a diskectomy is part of a larger surgery that includes laminectomy, foraminotomy, or spinal fusion.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Disk replacement&lt;/strong&gt; A surgeon removes the damaged spinal disk and inserts an artificial one between your vertebrae. Unlike fusion, this lets you continue to move your spine. Recovery time may be shorter than for a spinal fusion, too. But there is a slight chance the new disk could slip or fall out of place and require repair.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Interlaminar implant&lt;/strong&gt; This is a minimally invasive alternative to more invasive laminectomy or laminectomy plus fusion surgery. The surgeon implants a U-shaped device between two vertebrae in your lower back. It helps keep the space between them open and eases pressure on your spinal nerves. It can be done at the same time as a laminectomy. Unlike spinal fusion, the implant provides stability and lets you move your back almost like normal. You may not be able to bend backward as easily in that area.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;The biggest risk of back surgery&lt;/strong&gt; Not knowing for sure if it’s going to help with your pain. The best thing you can do is talk openly with your surgeon so they know what’s going on with your health and you know what to expect before you go into the operating room.&lt;/p&gt;', 'spin-surgery-01.jpg', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `d_cid` int(11) NOT NULL,
  `d_name` varchar(100) NOT NULL,
  `d_email` text NOT NULL,
  `d_phone` text NOT NULL,
  `d_add` text NOT NULL,
  `d_educt` text NOT NULL,
  `d_spec` text NOT NULL,
  `d_img` text NOT NULL,
  `dep_title` text NOT NULL,
  `orderno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`d_cid`, `d_name`, `d_email`, `d_phone`, `d_add`, `d_educt`, `d_spec`, `d_img`, `dep_title`, `orderno`) VALUES
(1, '      Dr. Gurjinderpal Singh ', ' bhatiahospital01@gmail.com', ' 94630-49848', '  Patel Enclave, Near Khalsa College, Patiala', ' PGI Chandigarh, Senior Neurologist', '   DM (Neurology)', 'gurjinderpal.jpg', 'Neurology', 0),
(2, 'Dr. Kanwarneet Singh', ' bhatiahospital01@gmail.com', '94630-49848', ' Patel Enclave, Near Khalsa College, Patiala', 'MS, DNB AIIMS, New Delhi', 'Cancer Surgeon & Laparoscopic Surgeon', 'kanwarneet.jpg', 'Oncology', 0),
(3, ' Dr. Harjot Kaur Bagga', ' bhatiahospital01@gmail.com', ' 94630-49848', '   Patel Enclave, Near Khalsa College, Patiala', ' none', 'Senior Oncologist Ex. Rajindra Hospital, Patiala', 'harjotbagga.jpg', 'Oncology', 0),
(4, 'Dr. Deepak Singla', '', '', '', 'DM Medical Oncology', 'DM Medical Oncology', 'deepaksingla.jpg', 'Oncology', 0),
(5, 'Dr. Arvinder Kaur', '', '', '', 'MD (Gynecology)', 'Senior Gynaecologist, Ex. Professor Rajindra Hospital, Patiala', 'Dr-Arvinder-Kaur.jpg', 'Gynaecology & Obsterics', 0),
(6, 'Dr. Beant Singh', '', '', '', 'Senior Gynecologist, Ex. Professor Rajindra Hospital, Patiala', 'Senior Gynecologist, Ex. Professor Rajindra Hospital, Patiala', 'Dr-Beant-Singh.jpg', 'Gynaecology & Obsterics', 0),
(7, 'Dr. Vaneet Kaur', '', '', '', 'MD (Anaesthesia) IDCCM (Critical Care)', 'MD (Anaesthesia) IDCCM (Critical Care)', 'Dr-Vaneet-Kaur.jpg', 'ICU', 0),
(8, 'Dr. Udham Singh', '', '', '', 'DM (Neurology)', '(PGI Chandigarh, Senior Consultant)', 'Dr-Udham-Singh.jpg', 'Nephrology', 0),
(9, 'Dr. Rahul Madaan', '', '', '', 'PDCC (Cardiology)', 'PDCC (Cardiology)', 'Dr-Rahul-Madan.jpg', 'Cardiology', 0),
(10, 'Dr. Pawan Kumar Kamal', '', '', '', 'MS (Orthopaedics) (DMC LUDHIANA)', 'JOINT REPLACEMENT AND SPORTS INJURY EXPERT', 'Dr-Pawan-Kumar-Kamal.jpg', 'Orthopedic', 0),
(11, 'Dr. Dewan Nasirudin', '', '', '', '(PHYSIOTHERAPY)', '(PHYSIOTHERAPY)', 'Dewan-Nasirudin.jpg', '', 0),
(12, 'Dr. Hitesh Kamal', '', '', '', 'MCh. (Urology)', 'MCh. (Urology)', 'Dr-Hitesh.jpg', 'Urology', 0),
(13, 'Dr. Salvinder Toor', '', '', '', 'MCh. (Neurosurgery)', 'MCh. (Neurosurgery)', 'Dr-Salvinder-Toor.jpg', 'Neurology', 0),
(14, 'Dr. Deepak Joshi', '', '', '', 'Mch. (Ortho)', 'Mch. (Ortho)', 'Deepak-Joshi.jpg', 'Spine Surgery', 0);

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `f_id` int(11) NOT NULL,
  `list` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`f_id`, `list`) VALUES
(1, 'Cancer Surgery & Chemotherapy'),
(2, '24 Hrs Emergency Facility'),
(3, 'Air Conditioned modern patient rooms'),
(4, 'Two modular operation theater with hepafilters.'),
(5, 'Trauma including Neurosurgery'),
(6, 'Labour room equipped with NST'),
(7, 'Neurology including Stroke Unit'),
(8, 'ICU with Ventilator Facility'),
(9, 'Joint Replacement (Knee/Hip)'),
(10, 'Dialysis & Nephrology Services'),
(11, 'Gynaecology - Painless Delivery, Cesarean Section, Gynae Surgery'),
(12, 'Laparoscopic surgeries (Lap Cholecystectomy & Hysterectomy)'),
(13, 'X-Ray, CT Scan & Lab Facilities'),
(14, 'EEG, Neurophysiology Lab'),
(15, 'Laparoscopic Treatment for all kinds of Cancer');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `gallery_img_nme` varchar(300) NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `gallery_img_nme`, `order`) VALUES
(1, 'g1.jpg', 0),
(2, 'g2.jpg', 0),
(3, 'g3.jpg', 0),
(4, 'g4.jpg', 0),
(5, 'g5.jpg', 0),
(6, 'g6.jpg', 0),
(7, 'g7.jpg', 0),
(8, 'g8.jpg', 0),
(9, 'g9.jpg', 0),
(10, 'g10.jpg', 0),
(11, 'g11.jpg', 0),
(12, 'g12.jpg', 0),
(13, 'g13.jpg', 0),
(14, 'g14.jpg', 0),
(15, 'g15.jpg', 0),
(16, 'g16.jpg', 0),
(17, 'g17.jpg', 0),
(18, 'g18.jpg', 0),
(19, 'g19.jpg', 0),
(20, 'g20.jpg', 0),
(21, 'g21.jpg', 0),
(22, 'g22.jpg', 0),
(23, 'g23.jpg', 0),
(24, 'g24.jpg', 0),
(25, 'g25.jpg', 0),
(26, 'g26.jpg', 0),
(27, 'g26.jpg', 0),
(28, 'g26.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `username`, `pwd`) VALUES
(1, 'admin', 'Pass@123#@');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bh_about_list`
--
ALTER TABLE `bh_about_list`
  ADD PRIMARY KEY (`list_id`);

--
-- Indexes for table `bh_homepage_about`
--
ALTER TABLE `bh_homepage_about`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `bh_home_carousel`
--
ALTER TABLE `bh_home_carousel`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `bh_home_feautes`
--
ALTER TABLE `bh_home_feautes`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `bh_home_services`
--
ALTER TABLE `bh_home_services`
  ADD PRIMARY KEY (`srid`);

--
-- Indexes for table `bh_home_slider`
--
ALTER TABLE `bh_home_slider`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `bh_home_widgets`
--
ALTER TABLE `bh_home_widgets`
  ADD PRIMARY KEY (`w_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`d_cid`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bh_about_list`
--
ALTER TABLE `bh_about_list`
  MODIFY `list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bh_homepage_about`
--
ALTER TABLE `bh_homepage_about`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bh_home_carousel`
--
ALTER TABLE `bh_home_carousel`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bh_home_feautes`
--
ALTER TABLE `bh_home_feautes`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bh_home_services`
--
ALTER TABLE `bh_home_services`
  MODIFY `srid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bh_home_slider`
--
ALTER TABLE `bh_home_slider`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bh_home_widgets`
--
ALTER TABLE `bh_home_widgets`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `d_cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
