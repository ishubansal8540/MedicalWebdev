-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2020 at 11:55 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medicare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `sno` int(100) NOT NULL AUTO_INCREMENT,
  `user` varchar(400) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sno`, `user`, `password`) VALUES
(8, 'admin', 'admin123'),
(9, 'Admin', 'YWRtaW4xMjM=');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `sno` int(100) NOT NULL AUTO_INCREMENT,
  `doctor_specialization` int(11) NOT NULL,
  `doctor_name` varchar(500) DEFAULT NULL,
  `patient_id` int(200) NOT NULL,
  `patient_name` varchar(200) NOT NULL,
  `consultant_fees` varchar(200) NOT NULL,
  `appointment_time` varchar(500) DEFAULT NULL,
  `appointment_date` varchar(500) NOT NULL,
  `date` varchar(200) NOT NULL,
  `status` int(100) DEFAULT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`sno`, `doctor_specialization`, `doctor_name`, `patient_id`, `patient_name`, `consultant_fees`, `appointment_time`, `appointment_date`, `date`, `status`) VALUES
(6, 0, 'Dr. Ravsharan Singh', 0, '', '', NULL, '2017-04-27 10:05:55', '', 1),
(10, 0, 'Dr. Puneet Phull', 0, '', '', '02:00pm - 03:00pm', '6-June-2017', '2017-04-30 22:02:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart2`
--

CREATE TABLE IF NOT EXISTS `cart2` (
  `sno` int(200) NOT NULL AUTO_INCREMENT,
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `total_price` varchar(200) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cart2`
--

INSERT INTO `cart2` (`sno`, `id`, `name`, `image`, `price`, `total_price`) VALUES
(1, 5, 'Pairfoot', 'pairfoot.jpg', '4000', '660'),
(2, 5, 'Sports, Fitness And Outdoors', 'dealcrox belt.jpg', '246', '660'),
(3, 11, 'BodyFit', 'bodyfit_dumbles.jpg', '660', '660');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `sno` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(400) DEFAULT NULL,
  `Status` int(255) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`sno`, `name`, `Status`) VALUES
(9, 'Dermatology', 1),
(10, 'Dentist', 1),
(11, 'Cardiology', 1),
(12, 'Neurolgy', 0),
(13, 'Cardiology', 1),
(14, 'Coronology', 1),
(15, 'Diabetology', 1),
(16, 'Endocrinology', 1),
(17, 'Gastroenterology', 1),
(18, 'Gynaecology', 1),
(19, 'Hematology', 1),
(20, 'Immunology', 1),
(21, 'Leprology', 1),
(22, 'Nephrology', 1),
(23, 'Ortho', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `sno` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(500) DEFAULT NULL,
  `email_id` varchar(500) DEFAULT NULL,
  `address` varchar(2000) DEFAULT NULL,
  `contact` varchar(400) DEFAULT NULL,
  `message` varchar(5000) DEFAULT NULL,
  `status` int(100) DEFAULT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`sno`, `username`, `email_id`, `address`, `contact`, `message`, `status`) VALUES
(1, 'Amrit', 'amrit@gmail.com', '#Model Town,Patiala', '9876543210', 'hey', 1),
(2, 'Kapil', 'kappu@gmail.com', '#7 Anand Nagar,Patiala', '9876543211', 'OK', 0),
(4, 'Zen', 'zen@ymail.com', '#89 Nand Colony,Jalanadhar', '8907686578', 'ok', 0);

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE IF NOT EXISTS `diseases` (
  `sno` int(100) NOT NULL AUTO_INCREMENT,
  `category` varchar(400) DEFAULT NULL,
  `sub_category` varchar(400) DEFAULT NULL,
  `diseases_name` varchar(400) DEFAULT NULL,
  `detail` varchar(5000) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `symptoms` varchar(3000) NOT NULL,
  `causes` varchar(3000) NOT NULL,
  `prevention` varchar(5000) NOT NULL,
  `medicine` varchar(4300) NOT NULL,
  `username` varchar(500) DEFAULT NULL,
  `status` int(100) DEFAULT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`sno`, `category`, `sub_category`, `diseases_name`, `detail`, `image`, `symptoms`, `causes`, `prevention`, `medicine`, `username`, `status`) VALUES
(1, 'Cardiology', 'Cardiovascular Diseases', ' Abdominal aortic aneurysm', 'An abdominal aortic aneurysm is an enlarged area in the lower part of the aorta, the major blood vessel that supplies blood to the body. The aorta, about the thickness of a garden hose, runs from your heart through the center of your chest and abdomen.  Because the aorta is the body''s main supplier of blood, a ruptured abdominal aortic aneurysm can cause life-threatening bleeding.  Depending on the size and the rate at which your abdominal aortic aneurysm is growing, treatment may vary from watchful waiting to emergency surgery.  Once an abdominal aortic aneurysm is found, doctors will closely monitor it so that surgery can be planned if it''s necessary. Emergency surgery for a ruptured abdominal aortic aneurysm can be risky.', 'abdominal aortic aneurysm.jpg', ' Abdominal aortic aneurysms often grow slowly and usually without symptoms, making them difficult to detect. Some aneurysms will never   rupture. Many start small and stay small, although many expand over time. Others expand quickly. Predicting how fast an abdominal   aortic aneurysm may enlarge is difficult.<p><ul type="circle">As an abdominal aortic aneurysm enlarges, some people may notice:    <li>A pulsating feeling near the navel</li><li>Deep, constant pain in your abdomen or on the side of your abdomen</li><li>Back   pain</li></ul>If you have any of these signs and symptoms, such as sudden severe back or abdominal pain, get immediate emergency   help.<p><b> When to see a doctor</b><p>You should see your doctor if you have any of the symptoms listed above. The recommendations   below are for those who have no symptoms.<p>Because being male and smoking significantly increase the risk of abdominal aortic   aneurysm, men ages 65 to 75 who have ever smoked cigarettes should have a screening for abdominal aortic aneurysms using abdominal   ultrasound. If you are a man between ages 65 and 75 and you have never smoked, your doctor will decide on the need for an abdominal   ultrasound, usually based on other risk factors, such as a family history of aneurysm. Those with a family history of aneurysm may   have an ultrasound at age 60.<p>There isn''t enough evidence to determine whether women ages 65 to 75 who have ever smoked cigarettes   or have a family history of abdominal aortic aneurysm would benefit from abdominal aortic aneurysm screening. Ask your doctor if you   need to have an ultrasound screening based on your risk factors. Women who have never smoked generally don''t need to be screened for   the condition.<p><b>Complications</b><p>Tears in one or more of the layers of the wall of the aorta (aortic dissection) or a ruptured   aortic aneurysm are the main complications of abdominal aortic aneurysms. A ruptured aortic aneurysm can lead to life-threatening   internal bleeding. In general, the larger the aneurysm and the faster the aneurysm grows, the greater the risk of rupture.<p>Signs   and symptoms that your aortic aneurysm has ruptured may include:<p><ul type="circle"><li>Sudden, intense and persistent abdominal or   back pain, which can be described as a tearing sensation</li><li>Pain that radiates to your back or   legs</li><li>Sweatiness</li><li>Clamminess</li><li>Dizziness</li><li>Nausea</li><li>Vomiting</li><li>Low blood pressure</li><li>Fast   pulse</li></ul>', '', ' <b>Diagnosis</b><p>Abdominal aortic aneurysms are often found during an examination for another reason. For example, during a routine   exam, your doctor may feel a pulsating bulge in your abdomen, though it''s unlikely your doctor will be able to hear signs of an   aneurysm through a stethoscope. Aortic aneurysms are also often found during routine medical tests, such as a chest X-ray or   ultrasound of the heart or abdomen, sometimes ordered for a different reason.<p>To diagnose  an abdominal aortic aneurysm, doctors   will review your medical and family history and conduct a physical examination. If your doctor suspects that you have an aortic   aneurysm, specialized tests can confirm it. These tests might include:<p><ul type="circle"><li><b>Abdominal ultrasound.</b>This test   is most commonly used to diagnose abdominal aortic aneurysms. During this painless exam, you lie on your back on an examination table   and a small amount of warm gel is applied to your abdomen. The gel helps eliminate the formation of air pockets between your body and   the instrument the technician uses to see your aorta, called a transducer.</li><li><b>Computerized tomography (CT) scan.</b>This   painless test can provide your doctor with clear images of your aorta, and it can detect the size and shape of an aneurysm.<p> During   a CT scan, you lie on a table inside a doughnut-shaped machine. CT scanning generates X-rays to produce cross-sectional images of   your body. Doctors may inject a dye into your blood vessels that helps your arteries to be more visible on the CT pictures (CT   angiography).<li><b>Magnetic resonance imaging (MRI).</b> An MRI is a painless imaging test that may be used to diagnose an aneurysm   and determine its size and location.<p> In this test, you lie on a movable table that slides into a tunnel. An MRI uses a magnetic   field and pulses of radio wave energy to make pictures of your body. Doctors may inject a dye into your blood vessels to help your   blood vessels to be more visible on images (magnetic resonance angiography).<b>Regular screening for people at risk of abdominal   aortic aneurysms</b><p>The U.S. Preventive Services Task Force recommends that men ages 65 to 75 who have ever smoked should have a   one-time screening for abdominal aortic aneurysms using abdominal ultrasound. Men ages 60 and older with a family history of   abdominal aortic aneurysms should consider regular screening for the condition.There isn''t enough evidence to determine whether women   ages 65 to 75 who have ever smoked cigarettes or have a family history of abdominal aortic aneurysms would benefit from abdominal   aortic aneurysm screening. Ask your doctor if you need to have an ultrasound screening based on your risk factors. Women who have   never smoked generally don''t need to be screened for the condition.', '', 'Admin', 1),
(2, 'Cardiology', 'Cardiovascular Diseases', 'Ischemic Heart Disease', '\nIschemic Heart Disease, also known as Coronary Artery Disease, is a condition that affects the supply of blood to the heart. The blood vessels are narrowed or blocked due to the deposition of cholesterol on their walls. This reduces the supply of oxygen and nutrients to the heart muscles, which is essential for proper functioning of the heart. This may eventually result in a portion of the heart being suddenly deprived of its blood supply leading to the death of that area of heart tissue, resulting in a heart attack.\n\nAs the heart is the pump that supplies oxygenated blood to the various organs, any defect in the heart immediately affects the supply of oxygen to the vital organs like the brain, kidneys, liver, etc. This leads to the death of tissue within these organs and their eventual failure. Ischemic Heart Disease is the most common cause of death in many countries around the world. ', 'ischemic.png', '<b>SYMPTOMS OF ISCHEMIC HEART DISEASE:</b><ul type="circle"><li>Angina pectoris</li><li>Acute chest pain which can be associated with acute coronary syndrome, unstable angina or myocardial infarction</li><li>Heart failure -difficulty in breathing or swelling of the extremities due to weakness of the heart muscle. </li><p> Serious symptoms that might indicate a life-threatening condition:<br>        Chest pain, typically on the left side of the body (angina pectoris)<br>     Clammy skin  <br>   Nausea with or without vomiting<br>     Pain in the neck or jaw<br>     Rapid breathing (tachypnea) or shortness of breath <br>    Shoulder or arm pain', '<b> CAUSES OF ISCHEMIC HEART DISEASE</b>     <ul type="circle"><li>The major risk factors are smoking, diabetes mellitus and cholesterol levels.</li><li>Those with Hypercholesterolemia have a much higher tendency to develop the disease.</li><li>Hypertension is also a risk factor in the development of Ischemic Heart Disease</li><li>Genetic and hereditary factors may also be responsible for the disease.</li><li>Stress is also thought to be a risk factor.</li><p> What are the risk factors for ischemic heart disease?  A number of factors increase the risk of developing ischemic heart disease. Not all people with risk factors will get ischemic heart disease. Risk factors for ischemic heart disease include:      Diabetes     Family history of heart disease     High blood cholesterol     High blood pressure     High blood triglycerides     Obesity     Physical inactivity     Smoking and other tobacco use', 'ISCHEMIC HEART DISEASE PREVENTION:  Fatty diet, smoking, sedentary lifestyle and stress should be avoided, as they are the main causes of Ischemic heart diseases. Avoiding foods rich in saturated fats is important to reduce lipid levels in the blood and to prevent arteriosclerosis. Adequate regular exercise is also essential. Cholesterol and hypertension should be kept under good control with proper treatment. ', 'ISCHEMIC HEART DISEASE TREATMENT:      Organic Nitrates     Beta Blockers     Calcium Channel Blockers     Statins     Aspirin   ORGANIC NITRATES:3  Organic Nitrates relax the nonspecific smooth muscles.  NO- Nitrc oxide GC- guanylyl cyclase c-GMP- Cyclic GMP  Organic Nitrates stimulates the intracellular cyclic-GMP, which, results in vascular smooth muscle relaxation of both arterial and venous vasculature.  Increased venous pooling decreases left ventricular pressure (preload) and arterial dilatation decreases arterial resistance (afterload). Therefore, this reduces cardiac oxygen demand by decreasing left ventricular pressure and systemic vascular resistance by dilating arteries. Additionally, coronary artery dilation improves collateral flow to ischemic regions.  Organic Nitrate Drugs      Isosorbide Dinitrate     Isosorbide mononitrate  BETA BLOCKERS5  Beta Blockers act by reducing cardiac work and O2 consumption.  Mechanism Of Action:  The physiologic effects of catecholamines (norepinephrine and epinephrine) are mediated by activation of specific alpha and beta adrenergic receptors. There are three types of beta receptors. Beta blockers act by competitively inhibiting catecholamines from binding to these receptors.  Beta Blockers      Propanolol     Atanolol     Timolol  CALCIUM CHANNEL BLOCKERS4  Thus, Beta Blockers reduces the total coronary flow by blocking beta2 receptors.  Mechanism Of Action:  Calcium antagonist inhibits the passage of calcium ions through voltage-dependent L-type calcium channels in cell membranes in the heart and vascular smooth muscle as well as some other excitable tissues.  Calcium Channel Blockers      Amlodipine     Nifedipine  STATINS3,5  Ischemic heart disease is also due to the increased cholesterol levels. Statins are used to reduce the Cholesterol levels in hypercholesterolemia. Statins are the HMG-CoA Reductase inhibitors.  Statins leads to 60% decrease in the number of cardiac events (heart attack, sudden cardiac death), and a 17% reduced risk of stroke.  Mechanism Of Action:  Statins competitively inhibit conversion of 3-Hydroxy-3-methyl glutaryl coenzyme A to mevalonate by HMG-CoA Reductase.  Statins      Atorvastatin     Rusvastatin  ASPIRIN  Aspirin improves the rate of survival in patients with acute myocardial infarction and reduces the risk of myocardial infarction in patients with unstable angina, and after recovery from myocardial infarction. Medications used to treat ischemic heart disease  Drug therapy is commonly used for treatment of ischemic heart disease and includes:      Angiotensin-converting enzyme (ACE) inhibitors, which relax the blood vessels and lower blood pressure      Angiotensin receptor blockers (ARBs), which lower blood pressure      Anti-ischemic agents such as ranolazine (Ranexa)      Antiplatelet drugs, which prevent the formation of blood clots      Beta-blockers, which lower the heart rate      Calcium channel blockers, which reduce workload on the heart muscle      Nitrates, which dilate the blood vessels      Statins, which lower cholesterol  Many different medicines are available to treat ischemic heart disease. Your health care provider will work with you to select the appropriate medications, depending on your individual condition. It is important to follow your treatment plan for ischemic heart disease precisely and to take all of the medications as instructed. Surgical procedures used to treat ischemic heart disease  Severe symptoms that are not relieved by medication alone are treated with surgical procedures including:      Angioplasty and stent placement (procedure to remove plaque and restore blood flow in clogged arteries)      Coronary artery bypass graft (procedure that helps restore blood flow to the heart by routing the flow through transplanted arteries)  What you can do to improve your ischemic heart disease  In addition to following your treatment plan, you may be able to improve your ischemic heart disease by:      Carefully managing your diabetes, if applicable      Getting regular physical activity      Keeping your cholesterol at a healthy level      Maintaining normal blood pressure      Quitting tobacco use      Reducing cholesterol and fat in your diet', 'Admin', 1),
(3, 'Cardiology', 'Cardiovascular Diseases', 'Cerebrovascular disease (Stroke)', 'Cerebrovascular disease refers to a group of conditions that affect the supply of blood to the brain, causing limited or no blood flow to the affected areas. \n\nThere are a number of ways in which cerebrovascular disease can develop, one of the most common is atherosclerosis.\n\nAtherosclerosis is where high cholesterol levels, coupled with inflammation in the arteries of the brain, cause cholesterol to build up in the vessel as a thick, waxy plaque.\n\nThis plaque can limit, or completely obstruct, blood flow to the brain, causing a stroke, transient ischemic attacks, and can lead to cognitive impairment and dementia over time. ', 'Cerebrovascular disease (Stroke).jpg', '<br><b>Symptoms of cerebrovascular disease</b><br> The signs and symptoms of cerebrovascular disease depend on the location of the hemorrhage, thrombus, or embolus and the extent of cerebral tissue affected.<br>\nGeneral signs and symptoms of a hemorrhagic or ischemic event include motor dysfunction, such as hemiplegia (paralysis of one side) and hemiparesis (weakness on one side of the body). <br>\n\nEarly in a cerebrovascular attack (CVA), the patient may experience weakness (flaccid paralysis), followed by increased muscle tone and spasticity. They may lose their gag reflex or ability to cough. <ul type="circle"> Communication deficits may also occur, such as:\n\n   <li> Dysphagia - difficulty or discomfort in swallowing</li>\n   <li> Aphasia - difficulty putting thoughts into words</li>\n    <li>Dysarthria - difficulty articulating speech or slurred speech</li>\n   <li> Apraxia - difficulty planning or performing tasks</li></ul><br>\n Other signs and symptoms of a CVA may include:<p>\n\n    Vomiting<br>\n    Seizures<br>\n    Fever<br>\n    Confusion that leads to a complete loss of consciousness<br>\n    Labored or irregular breathing<br>\n    Apnea - pauses in breathing<br>\n    Bowel and bladder incontinence\n', '<p><b>Causes of cerebrovascular disease</b><br>\n\nIschemic stroke occurs when a blood vessel that supplies blood to the brain is blocked by a blood clot or plaque. A clot may form in an artery that is already very narrow; this is called a thrombus. If the thrombus results in the death of brain cells, this is called a stroke.<br>\n\nAlternatively, a clot may break off from somewhere else in the body and travel up to the brain to block a smaller artery; this is called an embolism and may cause an embolic stroke. This condition is more common in people who have arrhythmias, such as atrial fibrillation.\n[Damaged blood vessels]\nIschemic stroke can be caused by a tear in the lining of the carotid artery.<br>\n\nCertain drugs and medical conditions can make the blood more likely to clot and raise the risk of ischemic stroke.<br>\n\nA common cause of ischemic stroke in people under age 40 is a tear in the lining of the carotid artery. The tear lets blood flow between the layers of the carotid artery.<br>\n\nThis causes narrowing of the carotid artery and reduced blood flow to the brain.<br>\n\nHemorrhagic stroke occurs when a blood vessel in part of the brain becomes weak and bursts open, causing blood to leak into the skull and put pressure on the brain.<br>\n\nSome people have defects in the blood vessels of the brain that make this more likely. The flow of blood that occurs after the blood vessel ruptures damages brain cells.<br> \n\nMajor risk factors that individuals have control over include hypertension, smoking, obesity, and diabetes. ', '<p><b>Preventing Cerebrovascular Disease</b><p>\n\nCerebrovascular disease can be best prevented by abiding by the following recommendations: <p>\n\n   <ul type="square"><li> Stop smoking</li>\n   <li> Regular physical exercise</li>\n   <li> Eat heart-healthy diet with a low fat content</li>\n   <li> Maintain healthy weight</li>\n    <li>Control blood pressure</li>\n  <li>  Lower blood cholesterol with diet and medications if necessary</li>\n    <li>Individuals with heart arrhythmia should ask their doctor if they should be taking a blood thinner to prevent strokes\n</li></ul>', '<p><b>Treatment options for cerebrovascular disease</b>\n<p>\nIn the case of an acute stroke, a medication called tPA (tissue plasminogen activator) may be given. This medication breaks up the blood clot.\n<p>\nA stroke is a medical emergency and should be evaluated immediately when symptoms occur by calling 911.\n<p>\nSome medications for stroke can only be given within a certain time period from the start of the symptoms, so time is of the essence.\n<p>\nBlood platelet inhibitors including Aspirin, Dipyridamole, Ticlopidine, and Clopidogrel, are effective in reducing the risk of stroke. These drugs are also used in treating patients with a history of stroke or patients at risk of a stroke event.\n<p>\nCholesterol-lowering medications, called statins, are typically given for cerebrovascular disease to reduce risk of ischemic stroke.\n<p>\nCarotid endarterectomy is a procedure where an incision is made into the carotid artery, and the plaque is removed allowing the blood to flow again. Then the artery is repaired with sutures or a graft.\n<p>\nIn carotid angioplasty and stenting, a balloon-tipped catheter is inserted into the artery; then the balloon is inflated so that it presses against the plaque, squashing it flat and reopening the artery. A tiny, slender metal mesh tube (stent) is fitted inside the carotid artery to improve the blood flow in the arteries blocked by plaque. The stent helps by preventing the artery from collapsing or closing up after the procedure is complete.\n<p>\nBrain bleeds must be evaluated by a neurosurgeon, who may do a procedure to reduce the pressure caused by the brain bleed. <p>', 'Admin', 1),
(4, 'Cardiology', 'Cardiovascular Diseases', 'Peripheral vascular disease', 'What is peripheral vascular disease (PVD)? <p> Peripheral vascular disease (PVD) refers to diseases of the blood vessels (arteries and veins) located outside the heart and brain. While there are many causes of peripheral vascular disease, doctors commonly use the term peripheral vascular disease to refer to peripheral artery disease (peripheral arterial disease, PAD), a condition that develops when the arteries that supply blood to the internal organs, arms, and legs become completely or partially blocked as a result of atherosclerosis.The term peripheral vascular disease is commonly used to refer to peripheral artery disease (PAD or PAD), meaning narrowing or occlusion by atherosclerotic plaques of arteries outside of the heart and brain.<p> Peripheral artery disease is a form of arterial insufficiency, meaning that blood circulation through the arteries (blood vessels that carry blood away from the heart) is decreased.<p> Risk factors for peripheral artery disease include elevated blood cholesterol, diabetes, smoking, hypertension, inactivity, and overweight/obesity. <p>A small percentage of people over the age of 50 are believed to suffer from peripheral artery disease.<p>', 'peripheral-vascular-disease.jpg', '<b>What are the signs and symptoms of peripheral artery disease (PVD)?</b><p>Approximately half of people with peripheral artery disease do not experience any symptoms. For patients with symptoms, the most common symptoms are intermittent claudication and rest pain.<p><b>Intermittent claudication</b> refers to arm or leg pain or cramping in the arms or legs that occurs with exercise and goes away with rest. The severity and location of the pain of intermittent claudication vary depending upon the location and extent of blockage of the involved artery. The most common location of intermittent claudication is the calf muscle of the leg, leading to calf or leg pain while walking. The pain in the calf muscle occurs only during exercise such as walking, and the pain steadily increases with continued walking until the patient has to stop due to intolerable pain. Then the pain quickly subsides during rest. Intermittent claudication can affect one or both legs.<p><b>Rest pain in the legs</b> occurs when the artery occlusion is so critical that there is not enough blood Approximately half of people with peripheral artery disease do not experience any symptoms. For patients with symptoms, the most common symptoms are intermittent claudication and rest pain.      Intermittent claudication refers to arm or leg pain or cramping in the arms or legs that occurs with exercise and goes away with rest. The severity and location of the pain of intermittent claudication vary depending upon the location and extent of blockage of the involved artery. The most common location of intermittent claudication is the calf muscle of the leg, leading to calf or leg pain while walking. The pain in the calf muscle occurs only during exercise such as walking, and the pain steadily increases with continued walking until the patient has to stop due to intolerable pain. Then the pain quickly subsides during rest. Intermittent claudication can affect one or both legs.     Rest pain in the legs occurs when the artery occlusion is so critical that there is not enough blood Approximately half of people with peripheral artery disease do not experience any symptoms. For patients with symptoms, the most common symptoms are intermittent claudication and rest pain.      Intermittent claudication refers to arm or leg pain or cramping in the arms or legs that occurs with exercise and goes away with rest. The severity and location of the pain of intermittent claudication vary depending upon the location and extent of blockage of the involved artery. The most common location of intermittent claudication is the calf muscle of the leg, leading to calf or leg pain while walking. The pain in the calf muscle occurs only during exercise such as walking, and the pain steadily increases with continued walking until the patient has to stop due to intolerable pain. Then the pain quickly subsides during rest. Intermittent claudication can affect one or both legs.     Rest pain in the legs occurs when the a', '<b>What causes peripheral vascular disease?<b><p>The most common cause of peripheral vascular disease is atherosclerosis, or hardening of the arteries, a gradual process by which cholesterol plaques (material) builds up and causes inflammation in the inner walls of the arteries. This cholesterol plaque builds up over time and may block, narrow, or weaken the blood vessel walls, which results in restricted or blocked blood flow.<p>Other causes of peripheral vascular disease include:<p><b>Blood clot:</b><p>A blood clot can block a blood vessel<p><b>Diabetes:</b>Over the long-term, the high blood sugar level of persons with diabetes can damage blood vessels. This makes the blood vessels more likely to become narrowed or weakened. Plus, people with diabetes frequently also have high blood pressure and high fats in the blood, which accelerates the development of atherosclerosis.<p><b>Inflammation of the arteries:</b>This condition is called arteritis and can cause narrowing or weakening of the arteries. Several autoimmune conditions can develop vasculitis, and, besides the arteries, other organ systems are also affected.<p><b>Infection:</b>The inflammation and scarring caused by infection can block, narrow, or weaken blood vessels. Both salmonellosis (infection with Salmonella bacteria) and syphilis have been two infections traditionally known to infect and damage blood vessels.<p><b>Structural defects:</b>Defects in the structure of a blood vessel can cause narrowing. Most of these cases are acquired at birth, and the cause remains unknown. Takayasu disease is a vascular disease affecting the upper vessels of the body and affects usually Asian females.<p><b>Injury:</b>Blood vessels can be injured in an accident such as a car wreck or a bad fall.<p><b>What are the risk factors for peripheral vascular disease?</b><p>Risk factors for peripheral vascular disease (and atherosclerotic disease of all arteries throughout the body):<p>Positive family history of premature heart attacks or strokes<br>Older than 50 years<br>Overweight or obesity<br>Inactive (sedentary) lifestyle<br>Smoking<br>Diabetes<br>High blood pressure<br>High cholesterol or LDL (the "bad cholesterol"), plus high triglycerides and low HDL (the "good cholesterol")', '<p><b>Prevention of Peripheral Vascular Disease</b><p>Steps to prevent peripheral vascular disease (PVD) are primarily aimed at management of the risk factors for PVD. A prevention program for PVD may include:<p>Smoking cessation, including avoidance of second hand smoke and use of tobacco products<br>Dietary modifications including reduced fat, cholesterol, and simple carbohydrates (such as sweets), and increased amounts of fruits and vegetables<br>Treatment of dyslipidemia (high blood cholesterol levels) with medications as determined by your physician<br>Weight reduction<br> Moderation in alcohol intake<br>Medications as determined by your physician to reduce your risk of blood clot formation<br>Exercise plan of a minimum of 30 minutes daily<br>Control of diabetes mellitus<br>Control of hypertension (high blood pressure)', '<p><b>Treatment of PAD</b><p>An often effective treatment for PAD symptoms is regular physical activity. Your doctor may recommend a program of supervised exercise training for you, also known as cardiac rehabilitation. You may have to begin slowly, but simple walking regimens, leg exercises and treadmill exercise programs can ease symptoms. Exercise for intermittent claudication - poor circulation in leg arteries due to buildup of plaque - takes into account the fact that walking causes pain. The program consists of alternating activity and rest in intervals to build up the amount of time you can walk before the pain sets in. It''s best if this exercise program is undertaken in a rehabilitation center on a treadmill and monitored. If it isn''t possible to go to a rehabilitation center, your healthcare professional may recommend a structured community or home-based program that''s best suited to your situation.<p><b>Diet:</b>Many PAD patients have elevated cholesterol levels. A diet low in saturated and trans fat can help lower blood cholesterol levels, but cholesterol-lowering medication may be necessary to maintain the proper cholesterol levels.<p><b>Medication:</b>You may be prescribed high blood pressure medications and/or cholesterol-lowering medications. It''s important to make sure that you take the medication as recommended by your healthcare professional. Not following directions increases your risk for PAD, as well as heart attack and stroke.<p>In addition, you may be prescribed medications to help prevent blood clots.<p><p>', '', 1),
(5, 'Dermatology', 'Skin Disorders', 'Skin Cancer', '<p>Skin cancer — the abnormal growth of skin cells — most often develops on skin exposed to the sun. But this common form of cancer can also occur on areas of your skin not ordinarily exposed to sunlight.\n\nThere are three major types of skin cancer — basal cell carcinoma, squamous cell carcinoma and melanoma.<p>Skin cancer develops primarily on areas of sun-exposed skin, including the scalp, face, lips, ears, neck, chest, arms and hands, and on the legs in women. But it can also form on areas that rarely see the light of day — your palms, beneath your fingernails or toenails, and your genital area.<p>', 'skin_cancer.jpg', '<b>Basal cell carcinoma signs and symptoms<b><p>Basal cell carcinoma usually occurs in sun-exposed areas of your body, such as your neck or face. <p> Basal cell carcinoma may appear as: <p> A pearly or waxy bump<br>A flat, flesh-colored or brown scar-like lesion<p><b>Squamous cell carcinoma signs and symptoms</b><p>Most often, squamous cell carcinoma occurs on sun-exposed areas of your body, such as your face, ears and hands. People with darker skin are more likely to develop squamous cell carcinoma on areas that aren''t often exposed to the sun.<p>Squamous cell carcinoma may appear as:<p>A firm, red nodule<br>A flat lesion with a scaly, crusted surface<p><b>Melanoma signs and symptoms</b><p>normal skin or in an existing mole that becomes cancerous. Melanoma most often appears on the face or the trunk of affected men. In women, this type of cancer most often develops on the lower legs. In both men and women, melanoma can occur on skin that hasn''t been exposed to the sun.<p>Melanoma can affect people of any skin tone. In people with darker skin tones, melanoma tends to occur on the palms or soles, or under the fingernails or toenails.<p>Melanoma signs include:<p>A large brownish spot with darker speckles<br>A mole that changes in color, size or feel or that bleeds<br>A small lesion with an irregular border and portions that appear red, white, blue or blue-black<br>Dark lesions on your palms, soles, fingertips or toes, or on mucous membranes lining your mouth, nose, vagina or anus<p><b>Signs and symptoms of less common skin cancers</b><p><b>Kaposi sarcoma:</b>This rare form of skin cancer develops in the skin''s blood vessels and causes red or purple patches on the skin or mucous membranes<p>Kaposi sarcoma mainly occurs in people with weakened immune systems, such as people with AIDS, and in people taking medications that suppress their natural immunity, such as people who''ve undergone organ transplants.<p>Other people with an increased risk of Kaposi sarcoma include young men living in Africa or older men of Italian or Eastern European Jewish heritage.<p><b>Merkel cell carcinoma:</b>Merkel cell carcinoma causes firm, shiny nodules that occur on or just beneath the skin and in hair follicles. Merkel cell carcinoma is most often found on the head, neck and trunk.<p><b>Sebaceous gland carcinoma:</b>This uncommon and aggressive cancer originates in the oil glands in the skin. Sebaceous gland carcinomas — which usually appear as hard, painless nodules — can develop anywhere, but most occur on the eyelid, where they''re frequently mistaken for other eyelid problems.<p>', '<p><b>Causes</b><p>Skin cancer occurs when errors (mutations) occur in the DNA of skin cells. The mutations cause the cells to grow out of control and form a mass of cancer cells.<p><b>Cells involved in skin cancer</b><p>Skin cancer begins in your skin''s top layer — the epidermis. The epidermis is a thin layer that provides a protective cover of skin cells that your body continually sheds. The epidermis contains three main types of cells:<p><b>Squamous cells</b>lie just below the outer surface and function as the skin''s inner lining.<br><b>Basal cells,</b>which produce new skin cells, sit beneath the squamous cells.<br><b>Melanocytes- </b>which produce melanin, the pigment that gives skin its normal color — are located in the lower part of your epidermis. Melanocytes produce more melanin when you''re in the sun to help protect the deeper layers of your skin.<p><b>Ultraviolet light and other potential causes</b><p>Much of the damage to DNA in skin cells results from ultraviolet (UV) radiation found in sunlight and in the lights used in tanning beds. But sun exposure doesn''t explain skin cancers that develop on skin not ordinarily exposed to sunlight. This indicates that other factors may contribute to your risk of skin cancer, such as being exposed to toxic substances or having a condition that weakens your immune system.<p>', '<b>Prevention</b><p>Most skin cancers are preventable. To protect yourself, follow these skin cancer prevention tips:<p><b>Avoid the sun during the middle of the day. </b>For many people in North America, the sun''s rays are strongest between about 10 a.m. and 4 p.m. Schedule outdoor activities for other times of the day, even in winter or when the sky is cloudy.<p>You absorb UV radiation year-round, and clouds offer little protection from damaging rays. Avoiding the sun at its strongest helps you avoid the sunburns and suntans that cause skin damage and increase your risk of developing skin cancer. Sun exposure accumulated over time also may cause skin cancer<p><b>Wear sunscreen year-round. </b>Sunscreens don''t filter out all harmful UV radiation, especially the radiation that can lead to melanoma. But they play a major role in an overall sun protection program<p>Use a broad-spectrum sunscreen with an SPF of at least 15. Apply sunscreen generously, and reapply every two hours — or more often if you''re swimming or perspiring. Use a generous amount of sunscreen on all exposed skin, including your lips, the tips of your ears, and the backs of your hands and neck.<p><b>Wear protective clothing.</b>Sunscreens don''t provide complete protection from UV rays. So cover your skin with dark, tightly woven clothing that covers your arms and legs, and a broad-brimmed hat, which provides more protection than a baseball cap or visor does<p><b>Avoid tanning beds. </b>Lights used in tanning beds emit UV rays and can increase your risk of skin cancer.<p><b>Be aware of sun-sensitizing medications. </b>Some common prescription and over-the-counter drugs, including antibiotics, can make your skin more sensitive to sunlight.<p>Ask your doctor or pharmacist about the side effects of any medications you take. If they increase your sensitivity to sunlight, take extra precautions to stay out of the sun in order to protect your skin.<p><b>Check your skin regularly and report changes to your doctor. </b>Examine your skin often for new skin growths or changes in existing moles, freckles, bumps and birthmarks.<p>With the help of mirrors, check your face, neck, ears and scalp. Examine your chest and trunk, and the tops and undersides of your arms and hands. Examine both the front and back of your legs, and your feet, including the soles and the spaces between your toes. Also check your genital area and between your buttocks.<p>', '<b>Diagnosing skin cancer</b><p>To diagnose skin cancer, your doctor may:<p><b>Examine your skin. </b>Your doctor may look at your skin to determine whether your skin changes are likely to be skin cancer. Further testing may be needed to confirm that diagnosis.<p><b>Remove a sample of suspicious skin for testing (skin biopsy). </b>Your doctor may remove the suspicious-looking skin for lab testing. A biopsy can determine whether you have skin cancer and, if so, what type of skin cancer you have.<p><b>Determining the extent of the skin cancer</b><p>If your doctor determines you have skin cancer, you may have additional tests to determine the extent (stage) of the skin cancer.<p>Because superficial skin cancers such as basal cell carcinoma rarely spread, a biopsy which removes the entire growth often is the only test needed to determine the cancer stage. But if you have a large squamous cell carcinoma, Merkel cell carcinoma or melanoma, your doctor may recommend further tests to determine the extent of the cancer.<p>Additional tests might include imaging tests to examine the nearby lymph nodes for signs of cancer or a procedure to remove a nearby lymph node and test it for signs of cancer (sentinel lymph node biopsy).<p>Doctors use the Roman numerals I through IV to indicate a cancer''s stage. Stage I cancers are small and limited to the area where they began. Stage IV indicates advanced cancer that has spread to other areas of the body.<p>The skin cancer''s stage helps determine which treatment options will be most effective.<p>', 'Admin', 1),
(7, 'Dermatology', NULL, 'Vitiligo', NULL, 'vitiligo.jpg\r\n', '', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `sno` int(100) NOT NULL AUTO_INCREMENT,
  `doctor_name` varchar(500) DEFAULT NULL,
  `category` varchar(100) NOT NULL,
  `detail` varchar(1500) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `Contact` varchar(500) NOT NULL,
  `achievement` varchar(1500) DEFAULT NULL,
  `status` int(100) DEFAULT NULL,
  `fees` varchar(200) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`sno`, `doctor_name`, `category`, `detail`, `image`, `address`, `Contact`, `achievement`, `status`, `fees`) VALUES
(17, '<b>Dr. Ravsharan Singh</b>', 'Dermatologist', 'Dermatologist<br> Diploma in Medical Cosmetology , MD - Physician\nCosmetologist , 8 Years Experience <p>Dr. Rav Sharan Singh is Graduated MBBS, MD(IES LONDON), DM Cosmetology. He has a keen interest in SKIN LASERS and is updated with latest advancements in the field of derma to and cosmetic surgery. He regularly attends conferences and CME''s.<p><p><b>Services</b><br>Dermabrasion<br>\nLaser<br>Hair Removal - Face<br>Tattoo Removal<br>Photofacial<br>Sun Spots, Age Spots, And Other Pigmented Lesions<br>Leucoderma Treatment<br>Peel,Polishing, Lasers<br>Botox Injections<br>Laser<br>Dermaroller<br>Electrocaurtry<br><p><b>Specializations</b><br>Cosmetologist<p><b>Education</b>\n<br>\nDiploma in Medical Cosmetology - Annamalai University, 2010\n<br>MD - Physician - U.Crimea,Ukraine, 2007', 'ravsharan.jpg', '<p><b>Address</b>39-42, Shopping Complex, Gursharan Marg, Tripuri Town, Patiala, Punjab 147001', '9 years experience', '<p><b>\nAwards and Recognitions</b><br>\n\nBest skin and hair transplant Center in Punjab - 2013\n<p><b>Memberships</b><br>\n\nAssociation of hair restoration surgeons of India(A.H.R.S.)<br>\n\nIndian Medical Association (I.M.A.)<br>\n\nInternational Academy Of Cosmetic Dermatology(I.A.C.D) <p><b> Registrations</b><br>\n35504 Medical Council of India (MCI), 2009 <p>', 1, '300'),
(18, '<b>Dr. Puneet Phull</b>', 'Neurologist', 'Neurologist Stroke specialist,MBBS,MD,DM<p><b>Education</b><br>\n\n    MBBS from Govt. Medical College - Patiala<br>\n    MD from GSVM - Kanpur<br>\n    DM from GB Pant Hospital - New Delhi<p>', 'dr.puneet phull.jpg', ' C/O Patiala Neuro Center, 16, nabha road, Patiala - 147001, Phulkian Enclave near mini seccyt ', '093565 21683', 'neurology', 1, '500'),
(19, '<b>Dr. Amit Goyal</b>', 'Neurologist', 'neurology', 'amit.png', 'Main Market, 24 No. Railway Crossing Partap Nagar ,Patiala', '099170 00856', '9 years experience', 1, '300'),
(20, '<b>Dr. Rajan Shonek</b>', 'Ophthalmologist', ' MBBS MS - Ophthalmology ', 'dr-rajan-shonek.JPG', ' Plot No. 70, Rama Atray Memorial Eye Hospital Rd, Deelwal, Urban Estate, Patiala - 147002 ', '175-6520068', '22 years experience', 0, '500'),
(21, '<b>Dr. Kamalpreet S. Sachdeva</b>', 'Dentist', '<br> BDS<br>\nDentist , 15 Years Experience<br>Dr. Kamalpreet S. Sachdeva is a Dentist in Amritsar, Amritsar and has an experience of 15 years in this field. Dr. Kamalpreet S. Sachdeva practices at Dr. Sachdeva ''s Dental Clinic in Amritsar, Amritsar. He completed BDS from Nair Hospital Dental College (NHDC), Mumbai in 2002.<p>He is a member of Indian Dental Association, Dental Council of India and Smile Care Mumbai. Some of the services provided by the doctor are: Complete/Partial Dentures Fixing, Gum Disease Treatment/ Surgery, Impaction / Impacted Tooth Extraction and Artificial Teeth etc.<p><b>\nServices</b><br>\nArtificial Teeth<br>\nImpaction / Impacted Tooth Extraction<br>\nComplete/Partial Dentures Fixing<br>\nGum Disease Treatment/ Surgery<p><b>\nSpecializations</b><br>\nDentist<p><b> Education</b><br>\n\nBDS - Nair Hospital Dental College (NHDC), Mumbai, 2002 <p>\n  ', 'dr.kamalpreet.jpg', '<b>Address</b><br>#1, Majitha Road B/o Oceanic Fitness Centre, Amritsar, Landmark: Near Bhandari Hospital, Amritsar', '<font color="green"> Ph: 011 3024 2102 (Dial Extension: 954) </font>>', ' <b>Experience</b><br>\n2003 - 2016 Doctor at Dr. Sachdeva ''s Dental Clinic<p>\n<b>Memberships</b><br>\n\nIndian Dental Association<br>\n\nDental Council of India<br>\n\nSmile Care Mumbai<p>\n <b> Registrations</b><br>\nA-11603 Maharashtra State Dental Council, 2004<p> ', 1, '600'),
(22, '<b>Dr.  R.P. Singh</b>', 'Cardiologist', ' MBBS , MD - Medicine , DNB (Cardiology)<br> Cardiologist , 22 Years Experience<br> Dr. R.P Singh is a Cardiologist in Jawaddi Taksal, Ludhiana and has an experience of 22 years in this field. Dr. R.P Singh practices at Pancham Hospital in Jawaddi Taksal, Ludhiana. He completed MBBS from Government Medical College Amritsar in 1980, MD - Medicine from Government Medical College Amritsar in 1988 and DNB (Cardiology) from DNB in 1996.<br>He is a member of Indian Medical Association (IMA) and Cardiology Society of India. Some of the services provided by the doctor are: Cardioversion, Coronary Angiogram, Heart Conditions, Coronary Angioplasty / Bypass Surgery and Cardiac Catheterization etc.', 'dr. R.P. Singh.jpg', '<font color="skyblue">Pancham Hospital</font> <br> SCO 34-37, GK Mall, Canal Road,<br> Landmark : JAWADDI BRIDGE, Ludhiana ', '<font color="green"> Ph: 011 3310 4976 (Dial Extension: 581) </font>', '<ul><b> Experience</b><li> 2001 - 2004 Doctor at Fortis Heart Institute </li><li>2005 - 2015 Senior Consultant at SPS Apollo Hospital </li><li>2013 - Present Chief Interventional Cardiologist & Managing Director at Pancham Hospital</li> </ul><b><ul> Memberships</b><li>Indian Medical Association (IMA)</li><li> Cardiology Society of India</li></ul><b><ul> Registrations</b><li> 21079- PMC Punjab Medical Council, 1980 </li></ul>', 1, '500'),
(23, '<b> Dr. Perminder Kaur Shah</b>', 'Gynaecologist', ' MD / MS - Obstetrics & Gynaecology , MBBS<br> General Physician , 29 Years Experience<p>Dr. Perminder Kaur Shah who has an experience of over 33yrs in Obs & Gynae Practice. She has served as HOD of Obs & Gynae Deptt., Frances Newton Hospital, Ferozpur and HOD of Obs & Gynae Deptt., Guru Tegh Bahadur Hospital Ludhiana.<br>  Dr. Shah has been doing Laparoscopic Surgeries herself for all the Gynaecological conditions since many years and is among the few Gynaecologists in the city who practice the same doing since 1989.<br>  Currently providing all types of Facilities like Assisted reproductive techniques, Infertility diagnostics and treatment , pathology lab, laparoscopic surgeries and much more.<br><ul><b> Specializations</b><li>General Physician </li></ul>', 'dr.perminder kaur shah.jpg', '<font color="skyblue"> Shah Hospital</font> <br> #593/1, Model Town, Ludhiana', '<font color="green"> Ph: 011 3310 5556 (Dial Extension: 581) </font>', '<ul></b> Experience</b> <li>1983 -1985 CONSULTANT at Frances Newton Hospital </li><li>1985 - 1988 CONSULTANT at GTB </li><li>1988 - Present OWNER & SENIOR CONSULTANT at SHAH HOSPITAL</li> </ul> <ul><b>Memberships</b> <li> Indian Medical Association (IMA)</li><li> Federation of Obstetric and Gynaecological Societies of India (FOGSI)</li></ul><br><ul><b>Registrations</b><li> 20419 Punjab Medical Council, 1980 </li></ul>', 1, '400'),
(24, '<b> Dr. C.M. Singh</b>', 'Ophthalmologist', ' MBBS , MS - Ophthalmology<br> Ophthalmologist/ Eye Surgeon , General Physician , 14 Years Experience<br> Consultant Ophthalmologist You can get the phone number of Dr. C.M. Singh on Practo.com.<ul><b> Specializations </b><li>Ophthalmologist/ Eye Surgeon</li><li> General Physician</li></ul><ul type="circle"><b> Services</b><li>Refractive Surgery </li><li>Corneal Surgery </li><li>Eye Surgery </li><li>Eyelid Surgery</li><li> Canaloplasty Oculoplastic Surgery </li><li>Eye Muscle Surgery</li><li> Cataract Surgery</li><li> Anterior Segment Surgery</li><li> Corneal Transplantation Orbital Surgery</li><li> Laser Refractive & Cataract Surgery</li><li> Glaucoma Evaluation / Treatment LASIK Eye Surgery</li><li> Vitreoretinal Surgery </li></ul><ul><b> Education</b><li>  MBBS - Dayanand Medical College and Hospital (DMC and H), 1998</li><li>MS - Ophthalmology - Tver State Medical University, 2003</li></ul>	', 'dr.C.M.singh.jpg', ' <font color="skyblue">Dr. Shamsher Singh Eye Hospital</font><br>Dr Shamsher Singh Eye Hospital,<br> G.T. Road, Khanna, Punjab, Ludhiana', '<font color="green">Ph: 011 3310 4995 (Dial Extension: 067) </font>', '<ul><b> Experience</b><li> 2006 - 2009 Consultant at Ved Mandir Eye hospital,Daresi </li><li>2009 - 2015 Consultant at Dr.Shamsher Singh Eye Hospital,Khanna</li></ul><ul><b> Registrations</b> <li>31034 Punjab Medical Council, 2000 </li></ul>', 1, '400'),
(27, '<b>Dr. Jasveen Kaur</b>', 'Dermatologist', ' MBBS , MD - Dermatology<br> Dermatologist , 3 Years Experience <br>Dr. Jasveen is a well trained and qualified dermatologist, currently practicing in Khanna. She has done her post graduation from Punjab''s most reputed medical college, Dayanand Medical college, Ludhiana<br><p><b> Services</b><li>Dermabrasion</li><li> Acne / Pimples Treatment </li><li>Scar Treatment </li><li>Wart Removal</li><li> Laser Hair Removal - Face</li><li> Sun Spots, Age Spots, And Other Pigmented Lesions</li><li> Leucoderma Treatment Peel, Polishing,Lasers </li><li>Skin Disease </li><li>Treatment Anti Aging </li><li>Treatment Mole Removal</li><li> Dermaroller Medical Vitiligo Treatment</li><li> Melasma Treatment </li><li>Psoriasis Treatment</li> </ul><ul><b>Specializations</b><li> Dermatologist </li></ul><p><b>Education</b><br>MBBS - Shri Guru Ram Das Institute of Medical Sciences and Research, 200<br>MD - Dermatology - Dayanand Medical College, 2014<p>	', 'dr.jasveen kaur.jpg', '<font color="skyblue">Dr. Jasveen''s Skin Care</font><br>  #1st, Preet Scan Center, G T Road, <br>Ludhiana, Ludhiana ', '<font color="green">Ph: 011 3310 7895 (Dial Extension: 067) </font>', '<ul><b> Experience</b><li> 2014 - 2015 Senior Resident at Navodaya Medical College </li></ul><ul><b>Memberships</b><li>Indian Association of Dermatologists, Venereologists and Leprologists (IADVL) </li></ul><ul><b>Registrations</b><li> 40733 Punjab Medical Council, 2011 </li></ul>', 1, '200');

-- --------------------------------------------------------

--
-- Table structure for table `doctorslog`
--

CREATE TABLE IF NOT EXISTS `doctorslog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userip` binary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `doctorslog`
--

INSERT INTO `doctorslog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(1, 2, 'sarita@gmail.com', '0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-01-05 21:53:31', '', 1),
(2, 0, 'admin', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-01-05 22:36:07', '', 0),
(3, 2, 'sarita@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-01-05 22:36:37', '06/01/2017 07:36:45', 1),
(4, 2, 'sarita@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-01-05 22:41:33', '12:11:46', 1),
(5, 2, 'sarita@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-01-05 22:55:16', '06-01-2017 12:27:47 PM', 1),
(6, 0, 'admin', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-01-05 23:07:12', '', 0),
(7, 0, 'info@w3gang.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-01-07 00:04:42', '', 0),
(8, 0, 'info@w3gang.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-01-07 00:04:55', '', 0),
(9, 2, 'sarita@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-01-07 00:05:54', '07-01-2017 01:36:28 PM', 1),
(10, 0, 'anuj.lpu1@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-12-04 10:27:09', '', 0),
(11, 0, 'Anuj', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-12-04 10:27:40', '', 0),
(12, 0, 'admin', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-12-04 10:30:03', '', 0),
(13, 0, 'ADMIN', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-12-04 10:30:22', '', 0),
(14, 0, 'admin', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-12-04 10:31:26', '', 0),
(15, 0, 'admin', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-12-04 10:32:54', '', 0),
(16, 0, 'admin', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-12-04 10:33:05', '', 0),
(17, 0, 'sarita@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-12-04 10:33:58', '', 0),
(18, 0, 'anuj.lpu1@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-12-05 06:19:16', '', 0),
(19, 0, 'anuj.lpu1@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-12-05 06:21:30', '', 0),
(20, 0, 'anuj.lpu1@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-12-05 06:21:42', '', 0),
(21, 0, 'vijay@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-12-05 06:22:59', '', 0),
(22, 0, 'anuj.lpu1@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-12-05 06:23:56', '', 0),
(23, 1, 'anuj.lpu1@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-12-05 06:24:56', '05-12-2017 07:55:03 PM', 1),
(24, 1, 'anuj.lpu1@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-12-05 06:25:09', '05-12-2017 07:55:42 PM', 1),
(25, 0, 'Chahat', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-03-29 12:16:04', '', 0),
(26, 0, 'sachin', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-03-29 12:16:29', '', 0),
(27, 0, 'sachin', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-03-29 12:39:45', '', 0),
(28, 0, 'sachin', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-03-29 12:40:00', '', 0),
(29, 1, 'anuj.lpu1@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-03-29 12:40:46', '30-03-2018 01:11:29 AM', 1),
(30, 6, 'amrita@test.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-03-29 12:41:52', '', 1),
(31, 1, 'anuj.lpu1@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-04-26 15:06:18', '27-04-2018 03:37:03 AM', 1),
(32, 2, 'sarita@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-04-26 15:07:30', '27-04-2018 03:37:59 AM', 1),
(33, 0, 'anuj.lpu1@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-05-13 18:03:59', '', 0),
(34, 0, 'sachin', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-05-13 18:04:20', '', 0),
(35, 1, 'anuj.lpu1@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-05-13 18:05:00', '', 1),
(36, 0, 'anuj.lpu1@gmail.com', '127.0.0.1\0\0\0\0\0\0\0', '2018-09-28 16:51:37', '', 0),
(37, 0, 'sarita@gmail.com	', '127.0.0.1\0\0\0\0\0\0\0', '2018-09-28 16:52:50', '', 0),
(38, 0, 'sarita@gmail.com	', '127.0.0.1\0\0\0\0\0\0\0', '2018-09-28 16:54:58', '', 0),
(39, 0, 'Sarita Pandey', '127.0.0.1\0\0\0\0\0\0\0', '2018-09-28 16:55:31', '', 0),
(40, 2, 'sarita@gmail.com', '127.0.0.1\0\0\0\0\0\0\0', '2020-05-02 16:44:34', '03-05-2020 05:15:06 AM', 1),
(41, 0, 'deepak@gmail.com	', '127.0.0.1\0\0\0\0\0\0\0', '2020-05-02 16:45:56', '', 0),
(42, 3, 'nitesh@gmail.com', '127.0.0.1\0\0\0\0\0\0\0', '2020-05-06 12:10:12', '07-05-2020 12:48:01 AM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctorspecilization`
--

CREATE TABLE IF NOT EXISTS `doctorspecilization` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `specilization` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `doctorspecilization`
--

INSERT INTO `doctorspecilization` (`id`, `specilization`, `creationDate`, `updationDate`) VALUES
(1, 'Gynecologist/Obstetrician', '2016-12-27 22:37:25', ''),
(2, 'General Physician', '2016-12-27 22:38:12', ''),
(3, 'Dermatologist', '2016-12-27 22:38:48', ''),
(4, 'Homeopath', '2016-12-27 22:39:26', ''),
(5, 'Ayurveda', '2016-12-27 22:39:51', ''),
(6, 'Dentist', '2016-12-27 22:40:08', ''),
(7, 'Ear-Nose-Throat (Ent) Specialist', '2016-12-27 22:41:18', ''),
(9, 'Demo test', '2016-12-27 23:37:39', '28-12-2016 01:28:42 PM'),
(10, 'Bones Specialist demo', '2017-01-07 00:07:53', '07-01-2017 01:38:04 PM'),
(11, 'Dentist', '2017-11-25 03:56:29', '');

-- --------------------------------------------------------

--
-- Table structure for table `doc_hm`
--

CREATE TABLE IF NOT EXISTS `doc_hm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `specilization` varchar(255) NOT NULL,
  `doctorName` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `docFees` varchar(255) NOT NULL,
  `contactno` bigint(11) NOT NULL,
  `docEmail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `doc_hm`
--

INSERT INTO `doc_hm` (`id`, `specilization`, `doctorName`, `address`, `docFees`, `contactno`, `docEmail`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'Dentist', 'sachin', 'New Delhi', '500', 828577678654, 'anuj.lpu1@gmail.com', 'admin@123', '2016-12-28 22:25:37', '04-01-2017 01:27:51 PM'),
(2, 'Homeopath', 'Sarita Pandey', 'Varanasi', '600', 2147483647, 'sarita@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2016-12-28 22:51:51', ''),
(3, 'General Physician', 'Nitesh Kumar', 'Ghaziabad', '1200', 8523699999, 'nitesh@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-06 23:43:35', ''),
(4, 'Homeopath', 'Vijay Verma', 'New Delhi', '700', 25668888, 'vijay@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-06 23:45:09', ''),
(5, 'Ayurveda', 'Sanjeev', 'Gurugram', '8050', 442166644646, 'sanjeev@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-06 23:47:07', ''),
(6, 'General Physician', 'Amrita', 'New Delhi India', '2500', 45497964, 'amrita@test.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-06 23:52:50', ''),
(7, 'Demo test', 'abc ', 'xyz', '200', 852888888, 'test@demo.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-07 00:08:58', ''),
(8, 'Dermatologist', '<b>Dr. Ravsharan Singh</b>', '<p><b>Address</b>39-42, Shopping Complex, Gursharan Marg, Tripuri Town, Patiala, Punjab 147001', '300', 9090909090, 'drrav@gmail.com', 'drrav123', '2020-05-06 17:41:10', ''),
(9, 'Neurologist', '<b>Dr. Puneet Phull</b>', 'C/O Patiala Neuro Center, 16, nabha road, Patiala - 147001, Phulkian Enclave near mini seccyt ', '500', 9356577564, 'drpuneet@gmail.com', 'drpuneet123', '2020-05-06 17:43:08', ''),
(11, 'Neurologist', '<b>Dr. Amit Goyal</b>', 'Main Market, 24 No. Railway Crossing Partap Nagar ,Patiala', '300', 9917000856, 'dramit@gmail.com', 'dramit1234', '2020-05-06 17:45:20', ''),
(12, 'Ophthalmologist', '<b>Dr. Rajan Shonek</b>', 'Plot No. 70, Rama Atray Memorial Eye Hospital Rd, Deelwal, Urban Estate, Patiala - 147002 ', '500', 9976520068, 'drrajan@gmail.com', 'drrajan123', '2020-05-06 17:46:44', ''),
(13, 'Dentist', '<b>Dr. Kamalpreet S. Sachdeva</b>', '<b>Address</b><br>#1, Majitha Road B/o Oceanic Fitness Centre, Amritsar, Landmark: Near Bhandari Hospital, Amritsar', '600', 1130242102, 'drkamal@gmail.com', 'drkamal123', '2020-05-06 17:48:11', ''),
(14, 'Cardiologist', '<b>Dr.  R.P. Singh</b>', '<font color="skyblue">Pancham Hospital</font> <br> SCO 34-37, GK Mall, Canal Road,<br> Landmark : JAWADDI BRIDGE, Ludhiana ', '500', 1133104976, 'drrps@gmail.com', 'drrps1234', '2020-05-06 17:49:54', ''),
(15, 'Gynaecologist', '<b> Dr. Perminder Kaur Shah</b>', '<font color="skyblue"> Shah Hospital</font> <br> #593/1, Model Town, Ludhiana', '400', 1133105556, 'drperminder@gmail.com', 'drperm123', '2020-05-06 17:51:12', ''),
(16, 'Ophthalmologist', '<b> Dr. C.M. Singh</b>', '<font color="skyblue">Dr. Shamsher Singh Eye Hospital</font><br>Dr Shamsher Singh Eye Hospital,<br> G.T. Road, Khanna, Punjab, Ludhiana', '400', 1133104995, 'drcm@gmail.com', 'drcm123', '2020-05-06 17:52:15', ''),
(17, 'Dermatologist', '<b>Dr. Jasveen Kaur</b>', '<font color="skyblue">Dr. Jasveen''s Skin Care</font><br>  #1st, Preet Scan Center, G T Road, <br>Ludhiana, Ludhiana ', '200', 1133107895, 'drjasveen@gmail.com', 'drjas1234', '2020-05-06 17:53:29', '');

-- --------------------------------------------------------

--
-- Table structure for table `gym`
--

CREATE TABLE IF NOT EXISTS `gym` (
  `sno` int(200) NOT NULL AUTO_INCREMENT,
  `category` varchar(500) DEFAULT NULL,
  `item` varchar(500) DEFAULT NULL,
  `detail` varchar(1000) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `price` varchar(400) DEFAULT NULL,
  `status` int(100) DEFAULT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `gym`
--

INSERT INTO `gym` (`sno`, `category`, `item`, `detail`, `image`, `price`, `status`) VALUES
(1, 'BodyFit', '<b>Bodyfit Home Gym Adjustable Dumbells - 10 Kg (Black)</b>', '<ul type="circle">\r\n   <li> Material: Coated Weight Plates</li>\r\n   <li> Color: Black</li>\r\n   <li> Size: Standard   Package</li> <li>Content: 2 Dumbbell Rods, 1 Pair Leather Gloves,: 2 Kgx4, 1Kgx2</li></ul>\r\n', 'bodyfit_dumbles.jpg', '660', 1),
(2, 'BodyFit', '<b> Bodyfit BF 8-in-1 Blend Multi Bench for Home Gym</b>', '<ul type="circle"><li>     Protoner 6 in 1 bench</li><li>  Can be used for incline, decline and flat bench press</li><li> Comes with leg pully and dip stand </li><li> Material: Blend </li><li>In-Box Contents: Bench</li></ul>', 'blend_bench.jpg', '2,399', 1),
(3, 'Sports, Fitness And Outdoors', '<b>Dealcrox Belt Complet Women Fat Remover Belt XL Size</b>', '<ul type="circle"><li>It offers to lose your weight through maximizing your workout routine. </li><li>Heats up your core abdominal area making you sweat more while performing your daily activities.</li><li>Maximizes fitness routines, slim waist tummy and tights Increase your core body temperature Improve your overall well-being.</li><li> Dealcrox''s product are retailed by Dealcrox (Seller) only. Please note that we don''t have any resellers of our products, So buying from other sellers will not deliver the QUALITY PRODUCT- What we are promising & can''t be given at a lower price, So please do not give negative product review in case you are buying from other sellers apart from "Dealcrox" .</li></ul>', 'dealcrox belt.jpg', ' 246', 1),
(4, 'treadmil', 'tread', '', 'treadmil.jpg', '5000', 1),
(5, 'weight lose', 'weight_l', '', 'weight_lose.jpg', '2000', 1),
(6, 'Fitness', 'weight', '', 'images.jpg', '3000', 1),
(7, 'body fit', '', '', 'images (1).jpg', '4000', 1),
(8, 'Pairfoot', '', '', 'pairfoot.jpg', '4000', 1),
(9, 'Muscle Shake', '', '', 'muscle.jpg', '', 1),
(10, 'Muscle Shakes ', '', '', 'mus.jpg', '400', 1),
(11, 'Protein Shake', '', '', 'musc.jpg', '500', 1),
(21, 'Protein Shakee', NULL, NULL, 'muscc.jpg', '600', 1);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `sno` int(100) NOT NULL AUTO_INCREMENT,
  `category` varchar(400) DEFAULT NULL,
  `sub_category` varchar(400) DEFAULT NULL,
  `item_name` varchar(400) DEFAULT NULL,
  `detail` varchar(5000) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `username` varchar(500) DEFAULT NULL,
  `status` int(100) DEFAULT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`sno`, `category`, `sub_category`, `item_name`, `detail`, `image`, `username`, `status`) VALUES
(1, 'Infectious', 'Communicable', 'Flu', 'High', '20170108_190509.jpg', 'Sohan', 1),
(6, 'infectious', 'communicable', 'cold', 'medium', 'Beant 20161107_200946.jpg', 'John', 1),
(8, 'Non-infectious', 'non-communicable', 'Headache', 'medium', 'Beant 20161107_200946.jpg', 'Kareena', 1),
(9, 'Dermatology', 'skin problem', 'Skin burn', 'Medium', 'B612_20161227_152447.jpg', 'Gautam', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `sno` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `detail` varchar(500) DEFAULT NULL,
  `current` varchar(300) DEFAULT NULL,
  `image` varchar(400) DEFAULT NULL,
  `status` int(100) DEFAULT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`sno`, `name`, `detail`, `current`, `image`, `status`) VALUES
(2, 'Dr. V.K. Verma and Dr. Rakesh Goyal', 'Free Medical eye check up at Civil Hospital,Ludhiana on 01 June 2017 and 02 June 2017.', '2017-04-27 06:18:26', 'eye1.png', 1),
(4, 'Dr. Ravsharan Singh', 'Skin , Hair disorders lecture ', '2017-04-25 09:32:26', 'vitiligo.jpg', 1),
(5, 'Team of Civil Hospital, Khanna', 'Blood donation camp is being organised at Civil Hospital, Khanna.people of age group 18-65 years can donate teir blood.', '2017-04-27 06:38:39', 'blood donation.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `sno` int(200) NOT NULL AUTO_INCREMENT,
  `username` varchar(500) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(500) DEFAULT NULL,
  `confirm_password` varchar(500) DEFAULT NULL,
  `gender` varchar(500) DEFAULT NULL,
  `contact` varchar(400) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `status` int(100) DEFAULT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`sno`, `username`, `email`, `password`, `confirm_password`, `gender`, `contact`, `address`, `status`) VALUES
(1, 'Amy', 'amy@gmail.com', 'NzAwNA==', 'NzAwNA==', 'Female', '9874125630', '', 1),
(2, 'as', 'abc@gmail.com', 'MTIzNA==', 'MTIzNA==', 'Male', '12345', '', 1),
(3, 'abc', 'abc@gmail.com', 'MTIzNA==', 'MTIzNA==', 'Male', '9876543212', '', 1),
(4, 'chahat@gmail.com', 'cse2011chahat@gmail.com', '×m', 'MTIz', 'Male', '9876543212', '', 1),
(5, 'rajesh', 'rajesh@gmail.com', '1234', '1234', 'Male', '987673723', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE IF NOT EXISTS `sub_category` (
  `sno` int(100) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(400) DEFAULT NULL,
  `sub_category` varchar(400) DEFAULT NULL,
  `Status` int(255) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sno`, `category_name`, `sub_category`, `Status`) VALUES
(3, 'Dermatology', 'Skin Cancer', 0),
(4, '0', 'Acne', 1),
(5, '0', 'Lupus', 1),
(6, 'Dermatology', 'Rubeole(Measles)', 1),
(7, '\r\nDermatology', 'Hemangiome of skin', 1),
(8, '0', 'Cold Sore', 1),
(9, 'Dermatology', 'Psoriasis', 1),
(10, 'Cardiology', 'Heart Attack', 1),
(11, 'Cardiology', 'Angina', 1),
(12, 'Cardiology', 'Arrhythmia', 1),
(13, 'Cardiology', 'Coronary Artery Diseases', 1),
(14, 'Cardiology', 'Stroke', 1),
(15, 'Neurology', 'Anoxia', 1),
(16, 'Neurology', 'Brain Tumor', 0),
(17, 'Neurology', 'Brain Damage', 1),
(18, 'Neurology', 'Migrain', 0),
(19, '', 'hhhh', 0),
(20, '', 'Travel', 0);

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE IF NOT EXISTS `userlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userip` binary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(6, 1, '', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-01-05 23:02:28', '', 1),
(7, 1, 'info@w3gang.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-01-05 23:04:28', '', 1),
(8, 0, 'admin', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-01-05 23:07:41', '06-01-2017 12:38:09 PM', 0),
(9, 1, 'info@w3gang.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-01-05 23:08:01', '', 1),
(10, 1, 'info@w3gang.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-01-05 23:10:09', '06-01-2017 12:41:43 PM', 1),
(11, 2, 'test@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-01-06 23:57:18', '07-01-2017 01:27:34 PM', 1),
(12, 0, 'asdad', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-01-06 23:57:44', '', 0),
(13, 0, 'xyz@test.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-01-06 23:59:43', '', 0),
(14, 5, 'amit12@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-01-07 00:00:44', '07-01-2017 01:34:19 PM', 1),
(15, 1, 'info@w3gang.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-12-05 06:27:46', '05-12-2017 07:58:41 PM', 1),
(16, 0, 'sachinsaini3338@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-12-05 06:30:23', '', 0),
(17, 6, 'sachinsaini3338@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2017-12-05 06:30:45', '05-12-2017 08:01:00 PM', 1),
(18, 0, 'Chahat', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-03-29 12:11:02', '', 0),
(19, 0, 'Chahat', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-03-29 12:12:51', '', 0),
(20, 10, 'chahat111@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-03-29 12:13:25', '30-03-2018 12:45:40 AM', 1),
(21, 0, 'Chahat', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-03-29 12:42:22', '', 0),
(22, 0, 'chaha', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-03-29 12:42:39', '', 0),
(23, 0, 'Chahat', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-03-29 12:42:46', '', 0),
(24, 10, 'chahat111@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-03-29 12:43:08', '30-03-2018 01:13:44 AM', 1),
(25, 0, 'Chahat', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-04-06 20:58:37', '', 0),
(26, 1, 'info@w3gang.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-04-06 21:13:07', '', 1),
(27, 1, 'info@w3gang.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-04-06 21:24:01', '07-04-2018 09:54:04 AM', 1),
(28, 0, 'Chahat', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-04-06 21:34:12', '', 0),
(29, 0, 'Chahat', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-04-07 13:13:38', '', 0),
(30, 1, 'info@w3gang.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-04-09 19:13:02', '10-04-2018 07:46:01 AM', 1),
(31, 1, 'info@w3gang.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-04-09 21:00:52', '', 1),
(32, 0, 'chahat111@gmail.com', '127.0.0.1\0\0\0\0\0\0\0', '2018-04-12 11:07:00', '', 0),
(33, 0, 'chahat111@gmail.com', '127.0.0.1\0\0\0\0\0\0\0', '2018-04-12 11:08:01', '', 0),
(34, 11, 'deepak@gmail.com', '127.0.0.1\0\0\0\0\0\0\0', '2018-04-12 11:09:12', '', 1),
(35, 0, 'deepak', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-04-13 09:18:17', '', 0),
(36, 11, 'deepak@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-04-13 09:18:38', '', 1),
(37, 0, 'test@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-04-24 21:09:31', '', 0),
(38, 0, 'Sarita pandey', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-04-24 21:10:04', '', 0),
(39, 0, 'Chahat', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-04-24 21:11:03', '', 0),
(40, 10, 'chahat111@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-04-24 21:11:35', '', 1),
(41, 1, 'info@w3gang.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-04-26 14:54:08', '27-04-2018 03:24:15 AM', 1),
(42, 1, 'info@w3gang.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-04-26 15:00:25', '27-04-2018 03:32:12 AM', 1),
(43, 0, 'anuj.lpu1@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-04-26 15:02:55', '', 0),
(44, 0, 'anuj.lpu1@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-04-26 15:04:03', '', 0),
(45, 1, 'info@w3gang.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-04-26 15:08:31', '27-04-2018 03:38:49 AM', 1),
(46, 1, 'info@w3gang.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-05-12 23:26:56', '13-05-2018 12:03:26 PM', 1),
(47, 10, 'chahat111@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-05-13 11:35:34', '', 1),
(48, 11, 'deepak@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2018-05-14 20:54:44', '', 1),
(49, 0, 'as', '127.0.0.1\0\0\0\0\0\0\0', '2018-09-28 16:43:38', '', 0),
(50, 0, 'as', '127.0.0.1\0\0\0\0\0\0\0', '2018-09-28 16:43:57', '', 0),
(51, 0, 'abc@gmail.com', '127.0.0.1\0\0\0\0\0\0\0', '2018-09-28 16:44:15', '', 0),
(52, 0, 'amy@gmail.com', '127.0.0.1\0\0\0\0\0\0\0', '2018-09-28 16:44:55', '', 0),
(53, 1, 'info@w3gang.com', '127.0.0.1\0\0\0\0\0\0\0', '2018-09-28 16:45:33', '03-05-2020 05:13:16 AM', 1),
(54, 11, 'deepak@gmail.com', '127.0.0.1\0\0\0\0\0\0\0', '2020-05-02 16:37:54', '03-05-2020 05:10:01 AM', 1),
(55, 0, 'sarita@gmail.com', '127.0.0.1\0\0\0\0\0\0\0', '2020-05-02 16:42:56', '', 0),
(56, 0, 'deepak@gmail.com	', '127.0.0.1\0\0\0\0\0\0\0', '2020-05-02 16:45:40', '', 0),
(57, 0, 'deepak@gmail.com	', '127.0.0.1\0\0\0\0\0\0\0', '2020-05-02 16:45:50', '', 0),
(58, 11, 'deepak@gmail.com', '127.0.0.1\0\0\0\0\0\0\0', '2020-05-02 16:46:27', '07-05-2020 01:07:06 AM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `city` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `address`, `city`, `gender`, `email`, `password`, `regDate`, `updationDate`) VALUES
(1, 'Anuj kumar', 'Test address', 'Aligarh', 'Males', 'info@w3gang.com', 'f925916e2754e5e03f75dd58a5733251', '2016-12-25 23:03:09', '30-12-2016 11:27:47 AM'),
(2, 'Sarita pandey', 'New Delhi India', 'Delhi', 'female', 'test@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2016-12-29 21:34:39', ''),
(3, 'Amit', 'New Delhi', 'New delhi', 'male', 'amit@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-06 22:36:53', ''),
(4, 'Rahul Singh', 'New Delhi', 'New delhi', 'male', 'rahul@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-06 23:41:14', ''),
(5, 'Amit kumar', 'New Delhi India', 'Delhi', 'male', 'amit12@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-07 00:00:26', '07-01-2017 01:32:12 PM'),
(6, 'rohit', 'hmt', 'panchkula', 'male', 'sachinsaini3338@gmail.com', 'e6e061838856bf47e1de730719fb2609', '2017-12-05 06:30:08', ''),
(7, 'sachin', 'patila', 'patiala', 'male', 'sachinsaini33388@gmail.com', 'admin@123', '2017-12-05 06:39:29', ''),
(8, 'test', 'test', 'test', 'male', 'anuj.lpu1@gmail.com', '123', '2017-12-05 06:41:46', ''),
(9, 'Chahat', 'patiala', 'patiala', 'female', 'chahat@gmail.com', '1234', '2018-03-29 12:09:51', ''),
(10, 'Chahat', 'patiala', 'patiala', 'female', 'chahat111@gmail.com', 'abcdefgh', '2018-03-29 12:12:10', '30-03-2018 12:45:19 AM'),
(11, 'deepak', 'sangrur', 'sangrur', 'male', 'deepak@gmail.com', '1234567', '2018-04-12 11:08:41', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_appointment`
--

CREATE TABLE IF NOT EXISTS `user_appointment` (
  `sno` int(100) NOT NULL AUTO_INCREMENT,
  `doctor_name` varchar(500) DEFAULT NULL,
  `appointment_time` varchar(500) DEFAULT NULL,
  `appointment_date` varchar(500) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `status` int(100) DEFAULT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `user_appointment`
--

INSERT INTO `user_appointment` (`sno`, `doctor_name`, `appointment_time`, `appointment_date`, `username`, `status`) VALUES
(2, 'Dr. Puneet Phull', '11:00am - 02:00pm', '5-May-2017', 'Amit Sachdeva', 0),
(3, 'Puneet', '11:00am - 01:00pm', '6-May-2018', 'amaaan', 0),
(4, 'Puneet', '11:00am - 01:00pm', '7-September-2018', 'am', 1),
(5, 'Puneet', '11:00am - 01:00pm', '7-September-2018', 'am', 1),
(6, 'Puneet', '11:00am - 01:00pm', '7-September-2018', 'am', 1),
(7, 'Puneet', '11:00am - 01:00pm', '7-September-2018', 'am', 1),
(8, 'puneet', '11:00am - 01:00pm', '30-April-2018', 'chahat', 1),
(9, '', '11:00am - 01:00pm', 'Date-month-Year', 'am', 1),
(10, 'Dr. Puneet Phull', '11:00am - 01:00pm', 'Date-month-Year', 'asss', 1),
(11, 'Dr. Ravsharan Singh', '11:00am - 01:00pm', 'Date-month-Year', '', 1),
(12, 'Dr. Ravsharan Singh', '11:00am - 01:00pm', 'Date-month-Year', '', 1),
(13, 'Dr. Ravsharan Singh', '11:00am - 01:00pm', 'Date-month-Year', '', 1),
(14, 'Dr. Ravsharan Singh', '11:00am - 01:00pm', 'Date-month-Year', '', 1),
(15, 'Dr. Ravsharan Singh', '11:00am - 01:00pm', 'Date-month-Year', '', 1),
(16, 'Dr. Ravsharan Singh', '11:00am - 01:00pm', 'Date-month-Year', '', 1),
(17, 'Dr. Puneet Phull', '11:00am - 01:00pm', '4-May-2020', '', 1),
(18, 'Dr. Puneet Phull', '11:00am - 01:00pm', '2-May-Year', 'ammmm', 1),
(19, 'Dr. Ravsharan Singh', '11:00am - 01:00pm', 'Date-month-Year', 'abc', 1),
(20, 'Dr. Ravsharan Singh', '11:00am - 01:00pm', 'Date-month-Year', 'abc', 1),
(21, 'Dr. Ravsharan Singh', '1', 'Date-month-Year', 'gg', 1),
(22, 'Dr. Ravsharan Singh', '1', 'Date-month-Year', 'ggg', 1),
(23, 'Dr. Ravsharan Singh', '1', 'Date-month-Year', 'abc', 1),
(24, 'Dr. Ravsharan Singh', '10:00am', 'Date-month-Year', 'abc', 1),
(25, 'Dr. Ravsharan Singh', '', 'Date-month-Year', 'chahat', 1),
(26, 'Dr. Ravsharan Singh', '9:00', 'Date-month-Year', 'chahat', 1),
(27, 'Dr. Ravsharan Singh', '9:30am', 'Date-month-Year', 'abc', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart2`
--
ALTER TABLE `cart2`
  ADD CONSTRAINT `cart2_ibfk_1` FOREIGN KEY (`sno`) REFERENCES `signup` (`sno`);
