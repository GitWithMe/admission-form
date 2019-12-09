<?php require_once("../resources/config.php") ?>
<?php update_family_details(); forward_other(); login_check_student();?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Apeejay Pre-School Admission</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.amber-orange.min.css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
<link rel="stylesheet" href="../css/mdDateTimePicker.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<link rel="stylesheet" href="../css/styles.css">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
  <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
     <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        	<img id="tan" src="https://www.apeejay.edu/images/logo.png">
        	<img id = 'ban' src="https://asn.nopaperforms.com/downloads/5ca74737d3b60555652459_soaring.png">
        </div>
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
          <a class="mdl-layout__tab">Student Details</a>
          <a class="mdl-layout__tab">Address/Alumni Details</a>
          <a class="mdl-layout__tab is-active">Family Details</a>
          <a class="mdl-layout__tab">Other Details</a>
          <a href="logout.php" class="mdl-layout__tab">Logout</a>
       </div>
      </header>
      <main class="mdl-layout__content">
    <div class="mdl-layout__tab-panel is-active">
  <div class="mdl-grid align-items" style="padding-left:5%">   
 <div id="candidate-container" class="demo-card-wide mdl-card mdl-shadow--16dp" style="width: 1250px;">
  <div class="mdl-card__supporting-text">    
  <div id="card-heading">Single Parent Details</div>
<form role="form" action="" method="post" id="parents-form" autocomplete="off" >
  <?php  
 $inst_name = $_SESSION['inst_name'];
 $student_name = $_SESSION['student_name'];
 $dob = $_SESSION['dob'];
 $reg_no = $_SESSION['reg_no'];
 $query = query("SELECT * FROM studregistrations WHERE inst_name = '{$inst_name}' AND reg_no = '{$reg_no}' AND student_name = '{$student_name}' AND dob = '{$dob}'");
  confirm($query);
  while ($row = fetch_array($query)) {
   $single_parent = $row['single_parent'];
   $single_parent_status = $row['single_parent_status'];
   $_SESSION['sps'] = $single_parent_status;
   $physically_challenged = $row['physically_challenged'];
   $physically_challenged_when = $row['physically_challenged_when'];
   $physically_challenged_details = $row['physically_challenged_details'];
   $f_name = $row['f_name'];
   $f_profession = $row['f_profession'];
   $f_profession_v = $row['f_profession_v'];
   $f_company = $row['f_company'];
   $f_company_type = $row['f_company_type'];
   $f_company_type_v = $row['f_company_type_v'];
   $f_company_sector = $row['f_company_sector'];
   $f_company_oth_sector = $row['f_company_oth_sector'];
   $f_designation = $row['f_designation'];
   $f_off_add1 = $row['f_off_add1'];
   $f_tele_off = $row['f_tele_off'];
   $f_tele_res = $row['f_tele_res'];
   $f_mobile = $row['f_mobile'];
   $f_email = $row['f_email'];
   $f_achievment = $row['f_achievment'];
   $m_name = $row['m_name'];
   $m_profession = $row['m_profession'];
   $m_profession_v = $row['m_profession_v'];
   $m_company = $row['m_company'];
   $m_company_type = $row['m_company_type'];
   $m_company_type_v = $row['m_company_type_v'];
   $m_company_sector = $row['m_company_sector'];
   $m_company_oth_sector = $row['m_company_oth_sector'];
   $m_designation = $row['m_designation'];
   $m_off_add1 = $row['m_off_add1'];
   $m_tele_off = $row['m_tele_off'];
   $m_tele_res = $row['m_tele_res'];
   $m_mobile = $row['m_mobile'];
   $m_email = $row['m_email'];
   $m_achievment = $row['m_achievment'];
   ?>  
<table>
  <td style="padding-left: 65px">
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"><span class="imp">*</span>
    Single Parent ? ( Not re-married ) 
   <div style="display: inline-block;">    
  <label class = "mdl-radio mdl-js-radio" for = "option14" >
    <input type = "radio" id = "option14" name = "issingle" value="No"
    class = "mdl-radio__button" <?php echo ($single_parent=='No')?'checked':'' ?> required>
    <span class = "mdl-radio__label">No</span>
  </label>
          
  <label class = "mdl-radio mdl-js-radio mdl-js-ripple-effect" 
                  for = "option15">
     <input type = "radio" id = "option15" name = "issingle" 
      class = "mdl-radio__button" value="Yes" <?php echo ($single_parent=='Yes')?'checked':'' ?>>
    <span class = "mdl-radio__label">Yes</span>
  </label>
  </div>      
 </div>
  </td>
 <td id="status1" style="padding-left: 65px">
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"><span class="imp">*</span> Status
     
   <div style="display: inline-block;">    
  <label class = "mdl-radio mdl-js-radio" for = "option16" >
    <input type = "radio" id = "option16" name = "status" value="Legally Divorced(Not) Remarried"
    class = "mdl-radio__button" <?php echo ($single_parent_status=='Legally Divorced(Not) Remarried')?'checked':'' ?>>
    <span class = "mdl-radio__label">Legally Divorced(Not) Remarried</span>
  </label>
          
  <label class = "mdl-radio mdl-js-radio mdl-js-ripple-effect" 
                  for = "option17">
     <input type = "radio" id = "option17" name = "status" 
  class = "mdl-radio__button" value="Widow" <?php echo ($single_parent_status=='Widow')?'checked':'' ?>>
    <span class = "mdl-radio__label">Widow</span>
  </label>
  <label class = "mdl-radio mdl-js-radio mdl-js-ripple-effect" 
                  for = "option18">
     <input type = "radio" id = "option18" name = "status" 
  class = "mdl-radio__button" value="Widower" <?php echo ($single_parent_status=='Widower')?'checked':'' ?>>
    <span class = "mdl-radio__label">Widower</span>
  </label>
  </div>      
 </div>
  </td>
</table>
</div>
</div>
</div>
<table>
  <td>
 <div class="mdl-grid align-items" id="father-details">   
 <div id="candidate-container" class="demo-card-wide mdl-card mdl-shadow--16dp" style="width: 650px;">
  <div class="mdl-card__supporting-text">
<div id="card-heading">Father Details</div>
<div style="padding-left: 14%;">
<h6><strong><small>For help related profession type,<a href="help_occu.htm" target="_blank">Click Here</a></small></strong></h6>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
 <input class="mdl-textfield__input" type="text" id="fathername" name="f_name" value="<?php echo $f_name ?>"/>
     <label class="mdl-textfield__label" for="fathername"><span class="imp">*</span>Father's Name</label>
 </div>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <select class="mdl-textfield__input" id="fatherprofession" name="f_profession_v">
      <option value="<?php echo $f_profession_v ?>"><?php echo $f_profession ?></option>
      <option value="Artist/Writer" disabled style="background: #e0ffff;">Artist/Writer</option>
      <option value="Artist/Writer">Accompanist</option>
      <option value="Artist/Writer">Artist - Painter</option>
      <option value="Artist/Writer">Artist - Sculptor</option>
      <option value="Artist/Writer">Author-Children Books</option>
      <option value="Artist/Writer">Author-General</option>
      <option value="Artist/Writer">Cinema Artiste</option>
      <option value="Artist/Writer">Copy writer</option>
      <option value="Artist/Writer">Cultural Artiste - Dancer</option>
      <option value="Artist/Writer">Cultural Artiste - Musician</option>
      <option value="Artist/Writer">Disc Jockey</option>
      <option value="Artist/Writer">Dubbing Artist</option>
      <option value="Artist/Writer">Makeup Artist</option>
      <option value="Artist/Writer">Radio Jockey</option>
      <option value="Artist/Writer">T.V. Announcer</option>
      <option value="Artist/Writer">Technical Writer</option>
      <option value="Artist/Writer">Theatre Artist</option>
      <option value="Artist/Writer">Transcriptor</option>
      <option value="Artist/Writer">Translator</option>
      <option value="Artist/Writer">TV Artiste</option>
      <option value="Artist/Writer">TV Anchor</option>
      <option value="Artist/Writer">TV Newsreader</option>
      

      <option value="Media/Journalism/Advertising" disabled style="background: #e0ffff;">Media/Journalism/Advertising</option>
      <option value="Media/Journalism/Advertising">Broadcast Journalist</option>
      <option value="Media/Journalism/Advertising">Content Developer</option>
      <option value="Media/Journalism/Advertising">Event Manager</option>
      <option value="Media/Journalism/Advertising">Media Monitoring Professional</option>
      <option value="Media/Journalism/Advertising">Print Journalist</option>
      <option value="Media/Journalism/Advertising">Professional Photographer</option>
      <option value="Media/Journalism/Advertising">Public Relations Professional</option>
      <option value="Media/Journalism/Advertising">Freelance Reporter</option>
      <option value="Media/Journalism/Advertising">Staff Reporter</option>
      <option value="Media/Journalism/Advertising">TV Production & Films Professional </option>
      <option value="Media/Journalism/Advertising">Web Journalist</option>

      <option value="Media/Journalism/Advertising" style="background: #e0ffff;">Career Diplomat</option>

      <option value="Sports/Athletics (full-time)" disabled style="background: #e0ffff;">Sports/Athletics (full-time)</option>
      <option value="Sports/Athletics (full-time)">District Level Sportsperson</option>
      <option value="Sports/Athletics (full-time)">District-level Coach</option>
      <option value="Sports/Athletics (full-time)">National Level Coach</option>
      <option value="Sports/Athletics (full-time)">National Level Sportsperson</option>
      <option value="Sports/Athletics (full-time)">State-level Coach</option>
      <option value="Sports/Athletics (full-time)">State-level Sportsperson</option>

      <option value="Finance/Insurance" disabled style="background: #e0ffff;">Finance/Insurance</option>
      <option value="Finance/Insurance">Actuarist</option>
      <option value="Finance/Insurance">Advisor</option>
      <option value="Finance/Insurance">Analyst</option>
      <option value="Finance/Insurance">Consultancy Services Professional</option>
      <option value="Finance/Insurance">Credit Ratings Agency Professional</option>
      <option value="Finance/Insurance">Financial Services Professional</option>
      <option value="Finance/Insurance">Hedge Fund Professional</option>
      <option value="Finance/Insurance">Insurance Services Professional</option>
      <option value="Finance/Insurance">Private Equity Professional</option>
      <option value="Finance/Insurance">TV Production & Films Professional </option>
      <option value="Finance/Insurance">Trading / Brokerage Professional</option>
      <option value="Finance/Insurance">Venture Capital Professional</option>

      <option value="Medical/Health Services" disabled style="background: #e0ffff;">Medical/Health Services</option>
      <option value="Medical/Health Services">Acupressure Specialist</option>
      <option value="Medical/Health Services">Acupuncturist</option>
      <option value="Medical/Health Services">Ayurvedic Practitioner</option>
      <option value="Medical/Health Services">Clinic Manager</option>
      <option value="Medical/Health Services">Dentistry</option>
      <option value="Medical/Health Services">Dietician</option>
      <option value="Medical/Health Services">Registered Medical Practitioner (RMP)</option>
      <option value="Medical/Health Services">Doctor - General Practitioner (registered by MCI)</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Anaesthesiology</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Any other discipline</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Cardiology</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Cosmetic Surgery</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Dermatology</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Diabetology</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Endodontics</option>
      <option value="Medical/Health Services">Doctor - Specialisation - ENT</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Gastroenterology</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Gynaecology</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Infertility</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Nephrology</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Neurology</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Obstetrics</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Oncology</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Ophthalmology</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Optometry</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Optometry</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Orthopaedics</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Paediatrics</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Radiology</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Surgery</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Urologist</option>
      <option value="Medical/Health Services">Doctor-Own Nursing Home</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Cosmetic Surgery</option>
      <option value="Medical/Health Services">Homoeopathic Practitioner</option>
      <option value="Medical/Health Services">Hospital Administrator</option>
      <option value="Medical/Health Services">Medical Officer</option>
      <option value="Medical/Health Services">Medical Photographer</option>
      <option value="Medical/Health Services">Medical Representive</option>
      <option value="Medical/Health Services">Medical Transcriptor</option>
      <option value="Medical/Health Services">Nurse</option>
      <option value="Medical/Health Services">Nutritionist</option>
      <option value="Medical/Health Services">Paramedical Staff</option>
      <option value="Medical/Health Services">Pharmacist/Chemist</option>
      <option value="Medical/Health Services">SPA Educationist</option>
      <option value="Medical/Health Services">Psychologist - Psychiatrist</option>
      <option value="Medical/Health Services">Therapist</option>
      <option value="Medical/Health Services">Unani Practioner</option>

      <option value="Armed Forces" disabled style="background: #e0ffff;">Armed Forces</option>
      <option value="Armed Forces">Air Force-Commissioned Officer</option>
      <option value="Armed Forces">Army-Commissioned Officer</option>
      <option value="Armed Forces">Ex Air  Force Commissioned Officer</option>
      <option value="Armed Forces">Ex Army Commissioned Officer</option>
      <option value="Armed Forces">Ex Navy Commissioned Officer</option>
      <option value="Armed Forces">Navy-Commissioned Officer</option>
      <option value="Armed Forces">PBOR [Jawan]</option>
      <option value="Armed Forces">PBOR [Non-Commissioned Officer]r</option>
      <option value="Armed Forces">PBOR [Senior Non-Commissioned Officer]</option>

      <option value="Security Services/Agencies" disabled style="background: #e0ffff;">Security Services/Agencies</option>
      <option value="Security Services/Agencies">BSF Staff</option>
      <option value="Security Services/Agencies">CBI Staff</option>
      <option value="Security Services/Agencies">CISF Staff</option>
      <option value="Security Services/Agencies">Coast Guard Staff</option>
      <option value="Security Services/Agencies">CRPF Staff</option>
      <option value="Security Services/Agencies">Indo Tibetan Border Police Staff</option>
      <option value="Security Services/Agencies">NSG Staff</option>
      <option value="Security Services/Agencies">Police Staff</option>
      <option value="Security Services/Agencies">Private Security Services Staff</option>
      <option value="Security Services/Agencies">SPG Staff</option>

      <option value="Education/Educational Research" disabled style="background: #e0ffff;">Education/Educational Research</option>
      <option value="Education/Educational Research">Consultant</option>
      <option value="Education/Educational Research"> Counsellor</option>
      <option value="Education/Educational Research">Director</option>
      <option value="Education/Educational Research"> Educational Program Designer for Competitive exams</option>
      <option value="Education/Educational Research">Faculty - International Education</option>
      <option value="Education/Educational Research">Guest Lecturer</option>
      <option value="Education/Educational Research">Headmaster/ Headmistress</option>
      <option value="Education/Educational Research">Lecturer</option>
      <option value="Education/Educational Research">Library Manager</option>
      <option value="Education/Educational Research">Owner - Degree granting Institution</option>
      <option value="Education/Educational Research">Owner - Play School</option>
      <option value="Education/Educational Research">Owner - Primary School</option>
      <option value="Education/Educational Research">Owner - Secondary School</option>
      <option value="Education/Educational Research">Principal</option>
      <option value="Education/Educational Research">Professor</option>
      <option value="Education/Educational Research">Reader</option>
      <option value="Education/Educational Research">Researcher</option>
      <option value="Education/Educational Research">School Administrator</option>
      <option value="Education/Educational Research">Special Educator</option>
      <option value="Education/Educational Research">Teacher  - School</option>
      <option value="Education/Educational Research">Teacher - Coaching Institute</option>
      <option value="Education/Educational Research">Teacher - Private Tuitions</option>
      <option value="Education/Educational Research">Vice Principal</option>
      
      <option value="Law/Judiciary" disabled style="background: #e0ffff;">Law/Judiciary</option>
      <option value="Law/Judiciary">Advocate-District Court</option>
      <option value="Law/Judiciary">Advocate-High Court</option>
      <option value="Law/Judiciary">Advocate-Supreme Court</option>
      <option value="Law/Judiciary">Court Clerk</option>
      <option value="Law/Judiciary">Court Official</option>
      <option value="Law/Judiciary">Judge-District Court</option>
      <option value="Law/Judiciary">Judge-High Court</option>
      <option value="Law/Judiciary">Judge-Supreme Court</option>
      <option value="Law/Judiciary">Legal Consultant</option>
      <option value="Law/Judiciary">Legal Councellor</option>

      <option value="Civil Services-All India/State" disabled style="background: #e0ffff;">Civil Services-All India/State</option>
      <option value="Civil Services-All India/State">IAAS</option>
      <option value="Civil Services-All India/State">IAS</option>
      <option value="Civil Services-All India/State">IES</option>
      <option value="Civil Services-All India/State">Indian Foreign Service</option>
      <option value="Civil Services-All India/State">Indian Forest Service</option>
      <option value="Civil Services-All India/State">Indian Postal Service</option>
      <option value="Civil Services-All India/State">IPS</option>
      <option value="Civil Services-All India/State">IRS</option>
      <option value="Civil Services-All India/State">Provincial Civil Services</option>
      <option value="Civil Services-All India/State">Provincial Police Services</option>
      <option value="Civil Services-All India/State">Sub Divisional Magistrate</option>

      <option value="Public Service" disabled style="background: #e0ffff;">Public Service</option>
      <option value="Public Service">Central Ministry</option>
      <option value="Public Service">MCD Councillor</option>
      <option value="Public Service">NGO</option>
      <option value="Public Service">Politician</option>
      <option value="Public Service">Scale-1 Office</option>
      <option value="Public Service">State Ministry</option>

      <option value="Airlines" disabled style="background: #e0ffff;">Airlines</option>
      <option value="Airlines">Air Traffic Controller</option>
      <option value="Airlines">Airhostess</option>
      <option value="Airlines">Airline Steward</option>
      <option value="Airlines">Ground Staff-Clerk</option>
      <option value="Airlines">Ground Staff-Executive</option>
      <option value="Airlines">Ground Staff-Manager</option>
      <option value="Airlines">Ground Staff-Superintendent</option>
      <option value="Airlines">Ground Traffic controller</option>
      <option value="Airlines"> Maintenance engineer</option>
      <option value="Airlines">Pilot</option>

      <option value="Entrepreneur/Business Owner" style="background: #e0ffff;">Entrepreneur/Business Owner</option>
      
      <option value="Construction/Property" disabled style="background: #e0ffff;">Construction/Property</option>
      <option value="Construction/Property">Builder</option>
      <option value="Construction/Property">Engineering & Architects Co</option>
      <option value="Construction/Property">Property Consultant</option>
      <option value="Construction/Property">Property Dealer</option>
      <option value="Construction/Property">Property Developer</option>
      <option value="Construction/Property">Site Incharge</option>

      <option value="Housewife (Homemaker)" style="background: #e0ffff;">Housewife (Homemaker)</option>

      <option value="Other Self-Employed" disabled style="background: #e0ffff;">Other Self-Employed</option>
      <option value="Other Self-Employed">Buying Agent</option>
      <option value="Other Self-Employed">Consultant</option>
      <option value="Other Self-Employed">Designer</option>
      <option value="Other Self-Employed">Distributor</option>
      <option value="Other Self-Employed">Event Manager</option>
      <option value="Other Self-Employed">Farmer</option>
      <option value="Other Self-Employed">Freelancer</option>
      <option value="Other Self-Employed">Guest Speaker</option>
      <option value="Other Self-Employed">Insurance Agent</option>
      <option value="Other Self-Employed">Jeweller</option>
      <option value="Other Self-Employed">Owner - Chemist Shop</option>
      <option value="Other Self-Employed">Owner - Coaching Institute</option>
      <option value="Other Self-Employed">Owner - General Shop</option>
      <option value="Other Self-Employed">Owner - Restaurant</option>
      <option value="Other Self-Employed">Owner - Retail Shop</option>
      <option value="Other Self-Employed">Owner-Proprietorship Company</option>
      <option value="Other Self-Employed">Photographer</option>
      <option value="Other Self-Employed">Priest</option>
      <option value="Other Self-Employed">Private Detective</option>
      <option value="Other Self-Employed">SSA - Sole Selling Agent</option>
      <option value="Other Self-Employed">Technical Analyst</option>
      <option value="Other Self-Employed">Textile Designer</option>
      <option value="Other Self-Employed">Tours and Tourism Consultant</option>
      <option value="Other Self-Employed">Trader</option>
      <option value="Other Self-Employed">Trainer</option>
      <option value="Other Self-Employed">Transporter</option>
      <option value="Other Self-Employed">Travel Agent</option>
      <option value="Other Self-Employed">Vendor</option>
      <option value="Other Self-Employed">Wholesaler</option>

      <option value="Professional (Employed)" disabled style="background: #e0ffff;">Professional (Employed)</option>
      <option value="Professional (Employed)">Administration / Operations</option>
      <option value="Professional (Employed)">Analyst</option>
      <option value="Professional (Employed)">Architect</option>
      <option value="Professional (Employed)">Association / Chamber of Commerce</option>
      <option value="Professional (Employed)">BPO Professional</option>
      <option value="Professional (Employed)">Banking Professional (Nationalised Bank)</option>
      <option value="Professional (Employed)">Banking Professional (Private Bank)</option>
      <option value="Professional (Employed)">Business Development Professional</option>
      <option value="Professional (Employed)">Chartered Accountant</option>
      <option value="Professional (Employed)">Chef</option>
      <option value="Professional (Employed)">Company Secretary</option>
      <option value="Professional (Employed)">Consultant</option>
      <option value="Professional (Employed)">Document Controller</option>
      <option value="Professional (Employed)">Engineer</option>
      <option value="Professional (Employed)">Graphic Designer</option>
      <option value="Professional (Employed)">Hospital (Non-Medical) Staff</option>
      <option value="Professional (Employed)">Hospitality Sector Professional</option>
      <option value="Professional (Employed)">Human Resources Professional</option>
      <option value="Professional (Employed)">I.T. Professional</option>
      <option value="Professional (Employed)">Information Officer</option>
      <option value="Professional (Employed)">Market Researcher</option>
      <option value="Professional (Employed)">Merchant Navy Professional</option>
      <option value="Professional (Employed)">Tours and Tourism Consultant</option>
      <option value="Professional (Employed)">Nursing Home (Non-Medical Staff)</option>
      <option value="Professional (Employed)">Operations</option>
      <option value="Professional (Employed)">Sales and Marketing Professional</option>
      <option value="Professional (Employed)">Shipping Professional</option>
      <option value="Professional (Employed)">Visa & Immigration Consultant</option>
       
      <option value="Scientific Research" disabled style="background: #e0ffff;">Scientific Research</option>
      <option value="Scientific Research">Research Associate</option>
      <option value="Scientific Research">Research Fellow</option>
      <option value="Scientific Research">Scientific Services Cell</option>
      <option value="Scientific Research">Scientist with Govt. Institute</option>
      <option value="Scientific Research">Scientist with Private Institute</option>

      <option value="Unemployed" style="background: #e0ffff;">Unemployed</option>
    </select>
    <label class="mdl-textfield__label" for="fatherprofession"><span class="imp">*</span>Father's Profession</label>
   </div>
  

  <input type="hidden" name="f_profession" id="father_profession" value="<?php echo $f_profession ?>">
  
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="fathercompname">
   <input class="mdl-textfield__input" id="fathercompname1" name="f_company" value="<?php echo $f_company ?>" type="text" />
   <label class="mdl-textfield__label" for="fathercompname1"><span class="imp">*</span>Company/Organisation Name</label>
 </div>

 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="fatherorgtype">
    <select class="mdl-textfield__input" id="fatherorgtype1" name="fatherorgtype1">
      <option value="<?php echo $f_company_type_v ?>"><?php echo $f_company_type ?></option>
      <option value="Commercial – Private Sector" style="background-color:lightcyan" disabled="true">Commercial – Private Sector</option>
    <option value="Commercial – Private Sector1">Tiny Business ( &lt; 1 cr turnover)</option>
    <option value="Commercial – Private Sector2">Small Business(  1 to 4 cr turnover)</option>
    <option value="Commercial – Private Sector3">Medium Business( 4 to 200 cr turnover)</option>
    <option value="Commercial – Private Sector4">Large Business( &gt; 200 cr turnover)</option>
    <option value="Commercial – Government Sector" style="background-color:lightcyan" disabled="true">Commercial – Government Sector</option>
    <option value="Commercial – Government Sector1">Tiny Business ( &lt; 1 cr turnover)</option>
    <option value="Commercial – Government Sector2">Small Business(  1 to 4 cr turnover)</option>
    <option value="Commercial – Government Sector3">Medium Business( 4 to 200 cr turnover)</option>
    <option value="Commercial – Government Sector4">Large Business( &gt; 200 cr turnover)</option>
    <option value="Government" style="background-color:lightcyan" disabled="true">Government</option>
    <option value="Government1">International</option>
    <option value="Government2">Central</option>
    <option value="Government3">State</option>
    <option value="Government4">Local</option>
    <option value="Non-Profit" style="background-color:lightcyan" disabled="true">Non-Profit</option>
    <option value="Non-Profit1">Domestic</option>
    <option value="Non-Profit2">International</option>
      </select>
    <label class="mdl-textfield__label" for="fatherorgtype1"><span class="imp">*</span>Company/Organisation Type</label>
    <input type="hidden" name="f_company_type" id="f_company_type" value="<?php echo $f_company_type ?>">
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="fathersector">
    <select class="mdl-textfield__input" id="fathersector1" name="f_company_sector">
      <option value="<?php echo $f_company_sector ?>"><?php echo $f_company_sector ?></option>
      <option value="Diplomatic Services/Embassy">Diplomatic Services/Embassy</option>
    <option value="Broadcasting">Broadcasting</option>
    <option value="Print Media">Print Media</option>
    <option value="Advertising">Advertising</option>
    <option value="Banking">Banking</option>
    <option value="Insurance and Diversified Financials">Insurance and Diversified Financials</option>
    <option value="Investment Banking / Brokerage">Investment Banking / Brokerage</option>
    <option value="Investment Management">Investment Management</option>
    <option value="Computer / IT / Software related Services">Computer / IT / Software related Services</option>
    <option value="Housing / Urban Development / Real Estate / Construction">Housing / Urban Development / Real Estate / Construction</option>
    <option value="Environmental Conservation">Environmental Conservation</option>
    <option value="Consulting">Consulting</option>
    <option value="Education / Educational Research">Education / Educational Research</option>
    <option value="Education (School/College/University)">Education (School/College/University)</option>
    <option value="Scientific Research">Scientific Research</option>
    <option value="Engineering">Engineering</option>
    <option value="Entertainment/Leisure">Entertainment/Leisure</option>
    <option value="Agriculture, Food and Beverage">Agriculture, Food and Beverage</option>
    <option value="Lodging/Hotel">Lodging/Hotel</option>
    <option value="Medical/Healthcare Services">Medical/Healthcare Services</option>
    <option value="Armed Forces">Armed Forces</option>
    <option value="Security Services / Agency">Security Services / Agency</option>
    <option value="Printing/Publishing">Printing/Publishing</option>
    <option value="Retailing / Wholesaling">Retailing / Wholesaling</option>
    <option value="Social Services">Social Services</option>
    <option value="Telecommunications">Telecommunications</option>
    <option value="Trading">Trading</option>
    <option value="Transportation">Transportation</option>
    <option value="Aerospace/Automotive/Airlines/Transportation Equipment">Aerospace/Automotive/Airlines/Transportation Equipment</option>
    <option value="Biotechnology">Biotechnology</option>
    <option value="Chemicals">Chemicals</option>
    <option value="Consumer Products">Consumer Products</option>
    <option value="Energy/Extractive Minerals">Energy/Extractive Minerals</option>
    <option value="Heavy/Raw Materials Supplier">Heavy/Raw Materials Supplier</option>
    <option value="High Technology / Electronics">High Technology / Electronics</option>
    <option value="Highly Diversified Manufacturing">Highly Diversified Manufacturing</option>
    <option value="Highly Diversified Non-Manufacturing">Highly Diversified Non-Manufacturing</option>
    <option value="Machinery and Equipment Manfacturers">Machinery and Equipment Manfacturers</option>
    <option value="Other Manufacturing">Other Manufacturing</option>
    <option value="Textiles">Textiles</option>
    <option value="Pharmaceuticals">Pharmaceuticals</option>
    <option value="Accounting">Accounting</option>
    <option value="Advocacy / Legal Services">Advocacy / Legal Services</option>
    <option value="Foundation / Grant Making">Foundation / Grant Making</option>
    <option value="Judiciary">Judiciary</option>
    <option value="Government">Government</option>
    <option value="Utilities Sector (Power, Water, Waste Mgmt etc.)">Utilities Sector (Power, Water, Waste Mgmt etc.)</option>
    <option value="Any other sector(Specify)">Any other sector  (Specify)</option>
      </select>
      <label class="mdl-textfield__label" for="fathersector1"><span class="imp">*</span>Sector of Company/Org</label>
  </div>
   <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="fatherother">
 <input class="mdl-textfield__input" id="fatherother1" name="f_company_oth_sector" 
  value="<?php echo $f_company_oth_sector ?>" type="text" />
 <label class="mdl-textfield__label" for="fatherother1"><span class="imp">*</span>Other Sector info</label>
 </div>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="fatherdesig">
 <input class="mdl-textfield__input" id="fatherdesig1" name="f_designation" value="<?php echo $f_designation ?>" type="text" />
 <label class="mdl-textfield__label" for="fatherdesig1"><span class="imp">*</span>Father's Designation</label>
 </div>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label has-placeholder" id="fatherofficeaddr">
  <textarea class="mdl-textfield__input" type="text" name="f_off_add1" id="fatherofficeaddr1" placeholder="" rows= "2" value="<?php echo $f_off_add1 ?>"><?php echo $f_off_add1 ?></textarea>
  <label class="mdl-textfield__label" for="fatherofficeaddr1"><span class="imp">*</span> 
  Office Address</label>
</div>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="fatherofficephone">
 <input class="mdl-textfield__input" id="fatherofficephone1" name="f_tele_off" value="<?php echo $f_tele_off ?>" type="text" />
 <label class="mdl-textfield__label" for="fatherofficephone1"><span class="imp">*</span>Telephone (Office)</label>
 </div>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
 <input class="mdl-textfield__input" id="fatherhomephone" name="f_tele_res" value="<?php echo $f_tele_res ?>" type="text" />
 <label class="mdl-textfield__label" for="fatherhomephone"><span class="imp">*</span>Telephone (Residence)</label>
 </div>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
 <input class="mdl-textfield__input" id="fathermobile" name="f_mobile" value="<?php echo $f_mobile ?>" type="text" />
 <label class="mdl-textfield__label" for="fathermobile">Mobile Number</label>
 </div>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
 <input class="mdl-textfield__input" id="fatheremail" name="f_email" value="<?php echo $f_email ?>" type="email" readonly>
 <label class="mdl-textfield__label" for="fatheremail">Email Address</label>
  </div>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label has-placeholder">
  <textarea class="mdl-textfield__input" type="text" id="fatherachievments" name="f_achievment" rows="2" placeholder="" value="<?php echo $f_achievment ?>" maxlength="250">
    <?php echo $f_achievment ?>
  </textarea>
  <label class="mdl-textfield__label" for="fatherachievments">Any other highlights of achievements of father or anything else you would like us to know (Optional)</label>
</div>     
 </div>
  </div> 
    </div>
   
    </div>
  </td>
  <td>
 <div class="mdl-grid align-items" id="mother-details">   
 <div id="candidate-container" class="demo-card-wide mdl-card mdl-shadow--16dp" style="width: 650px;">
 <div class="mdl-card__supporting-text">
<div id="card-heading">Mother Details</div>
<div style="padding-left: 14%;">
<h6><strong><small>For help related profession type,<a href="help_occu.htm" target="_blank">Click Here</a></small></strong></h6>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
     <input class="mdl-textfield__input" type="text" id="mothername" name="m_name" value="<?php echo $m_name ?>">
     <label class="mdl-textfield__label" for="mothername"><span class="imp">*</span>Mother's Name</label>
 </div>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <select class="mdl-textfield__input" id="motherprofession" name="m_profession_v">
      <option value="<?php echo $m_profession_v ?>"><?php echo $m_profession ?></option>
      <option value="Artist/Writer" disabled style="background: #e0ffff;">Artist/Writer</option>
      <option value="Artist/Writer">Accompanist</option>
      <option value="Artist/Writer">Artist - Painter</option>
      <option value="Artist/Writer">Artist - Sculptor</option>
      <option value="Artist/Writer">Author-Children Books</option>
      <option value="Artist/Writer">Author-General</option>
      <option value="Artist/Writer">Cinema Artiste</option>
      <option value="Artist/Writer">Copy writer</option>
      <option value="Artist/Writer">Cultural Artiste - Dancer</option>
      <option value="Artist/Writer">Cultural Artiste - Musician</option>
      <option value="Artist/Writer">Disc Jockey</option>
      <option value="Artist/Writer">Dubbing Artist</option>
      <option value="Artist/Writer">Makeup Artist</option>
      <option value="Artist/Writer">Radio Jockey</option>
      <option value="Artist/Writer">T.V. Announcer</option>
      <option value="Artist/Writer">Technical Writer</option>
      <option value="Artist/Writer">Theatre Artist</option>
      <option value="Artist/Writer">Transcriptor</option>
      <option value="Artist/Writer">Translator</option>
      <option value="Artist/Writer">TV Artiste</option>
      <option value="Artist/Writer">TV Anchor</option>
      <option value="Artist/Writer">TV Newsreader</option>
      

      <option value="Media/Journalism/Advertising" disabled style="background: #e0ffff;">Media/Journalism/Advertising</option>
      <option value="Media/Journalism/Advertising">Broadcast Journalist</option>
      <option value="Media/Journalism/Advertising">Content Developer</option>
      <option value="Media/Journalism/Advertising">Event Manager</option>
      <option value="Media/Journalism/Advertising">Media Monitoring Professional</option>
      <option value="Media/Journalism/Advertising">Print Journalist</option>
      <option value="Media/Journalism/Advertising">Professional Photographer</option>
      <option value="Media/Journalism/Advertising">Public Relations Professional</option>
      <option value="Media/Journalism/Advertising">Freelance Reporter</option>
      <option value="Media/Journalism/Advertising">Staff Reporter</option>
      <option value="Media/Journalism/Advertising">TV Production & Films Professional </option>
      <option value="Media/Journalism/Advertising">Web Journalist</option>

      <option value="Media/Journalism/Advertising" style="background: #e0ffff;">Career Diplomat</option>

      <option value="Sports/Athletics (full-time)" disabled style="background: #e0ffff;">Sports/Athletics (full-time)</option>
      <option value="Sports/Athletics (full-time)">District Level Sportsperson</option>
      <option value="Sports/Athletics (full-time)">District-level Coach</option>
      <option value="Sports/Athletics (full-time)">National Level Coach</option>
      <option value="Sports/Athletics (full-time)">National Level Sportsperson</option>
      <option value="Sports/Athletics (full-time)">State-level Coach</option>
      <option value="Sports/Athletics (full-time)">State-level Sportsperson</option>

      <option value="Finance/Insurance" disabled style="background: #e0ffff;">Finance/Insurance</option>
      <option value="Finance/Insurance">Actuarist</option>
      <option value="Finance/Insurance">Advisor</option>
      <option value="Finance/Insurance">Analyst</option>
      <option value="Finance/Insurance">Consultancy Services Professional</option>
      <option value="Finance/Insurance">Credit Ratings Agency Professional</option>
      <option value="Finance/Insurance">Financial Services Professional</option>
      <option value="Finance/Insurance">Hedge Fund Professional</option>
      <option value="Finance/Insurance">Insurance Services Professional</option>
      <option value="Finance/Insurance">Private Equity Professional</option>
      <option value="Finance/Insurance">TV Production & Films Professional </option>
      <option value="Finance/Insurance">Trading / Brokerage Professional</option>
      <option value="Finance/Insurance">Venture Capital Professional</option>

      <option value="Medical/Health Services" disabled style="background: #e0ffff;">Medical/Health Services</option>
      <option value="Medical/Health Services">Acupressure Specialist</option>
      <option value="Medical/Health Services">Acupuncturist</option>
      <option value="Medical/Health Services">Ayurvedic Practitioner</option>
      <option value="Medical/Health Services">Clinic Manager</option>
      <option value="Medical/Health Services">Dentistry</option>
      <option value="Medical/Health Services">Dietician</option>
      <option value="Medical/Health Services">Registered Medical Practitioner (RMP)</option>
      <option value="Medical/Health Services">Doctor - General Practitioner (registered by MCI)</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Anaesthesiology</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Any other discipline</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Cardiology</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Cosmetic Surgery</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Dermatology</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Diabetology</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Endodontics</option>
      <option value="Medical/Health Services">Doctor - Specialisation - ENT</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Gastroenterology</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Gynaecology</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Infertility</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Nephrology</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Neurology</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Obstetrics</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Oncology</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Ophthalmology</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Optometry</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Optometry</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Orthopaedics</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Paediatrics</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Radiology</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Surgery</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Urologist</option>
      <option value="Medical/Health Services">Doctor-Own Nursing Home</option>
      <option value="Medical/Health Services">Doctor - Specialisation - Cosmetic Surgery</option>
      <option value="Medical/Health Services">Homoeopathic Practitioner</option>
      <option value="Medical/Health Services">Hospital Administrator</option>
      <option value="Medical/Health Services">Medical Officer</option>
      <option value="Medical/Health Services">Medical Photographer</option>
      <option value="Medical/Health Services">Medical Representive</option>
      <option value="Medical/Health Services">Medical Transcriptor</option>
      <option value="Medical/Health Services">Nurse</option>
      <option value="Medical/Health Services">Nutritionist</option>
      <option value="Medical/Health Services">Paramedical Staff</option>
      <option value="Medical/Health Services">Pharmacist/Chemist</option>
      <option value="Medical/Health Services">SPA Educationist</option>
      <option value="Medical/Health Services">Psychologist - Psychiatrist</option>
      <option value="Medical/Health Services">Therapist</option>
      <option value="Medical/Health Services">Unani Practioner</option>

      <option value="Armed Forces" disabled style="background: #e0ffff;">Armed Forces</option>
      <option value="Armed Forces">Air Force-Commissioned Officer</option>
      <option value="Armed Forces">Army-Commissioned Officer</option>
      <option value="Armed Forces">Ex Air  Force Commissioned Officer</option>
      <option value="Armed Forces">Ex Army Commissioned Officer</option>
      <option value="Armed Forces">Ex Navy Commissioned Officer</option>
      <option value="Armed Forces">Navy-Commissioned Officer</option>
      <option value="Armed Forces">PBOR [Jawan]</option>
      <option value="Armed Forces">PBOR [Non-Commissioned Officer]r</option>
      <option value="Armed Forces">PBOR [Senior Non-Commissioned Officer]</option>

      <option value="Security Services/Agencies" disabled style="background: #e0ffff;">Security Services/Agencies</option>
      <option value="Security Services/Agencies">BSF Staff</option>
      <option value="Security Services/Agencies">CBI Staff</option>
      <option value="Security Services/Agencies">CISF Staff</option>
      <option value="Security Services/Agencies">Coast Guard Staff</option>
      <option value="Security Services/Agencies">CRPF Staff</option>
      <option value="Security Services/Agencies">Indo Tibetan Border Police Staff</option>
      <option value="Security Services/Agencies">NSG Staff</option>
      <option value="Security Services/Agencies">Police Staff</option>
      <option value="Security Services/Agencies">Private Security Services Staff</option>
      <option value="Security Services/Agencies">SPG Staff</option>

      <option value="Education/Educational Research" disabled style="background: #e0ffff;">Education/Educational Research</option>
      <option value="Education/Educational Research">Consultant</option>
      <option value="Education/Educational Research"> Counsellor</option>
      <option value="Education/Educational Research">Director</option>
      <option value="Education/Educational Research"> Educational Program Designer for Competitive exams</option>
      <option value="Education/Educational Research">Faculty - International Education</option>
      <option value="Education/Educational Research">Guest Lecturer</option>
      <option value="Education/Educational Research">Headmaster/ Headmistress</option>
      <option value="Education/Educational Research">Lecturer</option>
      <option value="Education/Educational Research">Library Manager</option>
      <option value="Education/Educational Research">Owner - Degree granting Institution</option>
      <option value="Education/Educational Research">Owner - Play School</option>
      <option value="Education/Educational Research">Owner - Primary School</option>
      <option value="Education/Educational Research">Owner - Secondary School</option>
      <option value="Education/Educational Research">Principal</option>
      <option value="Education/Educational Research">Professor</option>
      <option value="Education/Educational Research">Reader</option>
      <option value="Education/Educational Research">Researcher</option>
      <option value="Education/Educational Research">School Administrator</option>
      <option value="Education/Educational Research">Special Educator</option>
      <option value="Education/Educational Research">Teacher  - School</option>
      <option value="Education/Educational Research">Teacher - Coaching Institute</option>
      <option value="Education/Educational Research">Teacher - Private Tuitions</option>
      <option value="Education/Educational Research">Vice Principal</option>
      
      <option value="Law/Judiciary" disabled style="background: #e0ffff;">Law/Judiciary</option>
      <option value="Law/Judiciary">Advocate-District Court</option>
      <option value="Law/Judiciary">Advocate-High Court</option>
      <option value="Law/Judiciary">Advocate-Supreme Court</option>
      <option value="Law/Judiciary">Court Clerk</option>
      <option value="Law/Judiciary">Court Official</option>
      <option value="Law/Judiciary">Judge-District Court</option>
      <option value="Law/Judiciary">Judge-High Court</option>
      <option value="Law/Judiciary">Judge-Supreme Court</option>
      <option value="Law/Judiciary">Legal Consultant</option>
      <option value="Law/Judiciary">Legal Councellor</option>

      <option value="Civil Services-All India/State" disabled style="background: #e0ffff;">Civil Services-All India/State</option>
      <option value="Civil Services-All India/State">IAAS</option>
      <option value="Civil Services-All India/State">IAS</option>
      <option value="Civil Services-All India/State">IES</option>
      <option value="Civil Services-All India/State">Indian Foreign Service</option>
      <option value="Civil Services-All India/State">Indian Forest Service</option>
      <option value="Civil Services-All India/State">Indian Postal Service</option>
      <option value="Civil Services-All India/State">IPS</option>
      <option value="Civil Services-All India/State">IRS</option>
      <option value="Civil Services-All India/State">Provincial Civil Services</option>
      <option value="Civil Services-All India/State">Provincial Police Services</option>
      <option value="Civil Services-All India/State">Sub Divisional Magistrate</option>

      <option value="Public Service" disabled style="background: #e0ffff;">Public Service</option>
      <option value="Public Service">Central Ministry</option>
      <option value="Public Service">MCD Councillor</option>
      <option value="Public Service">NGO</option>
      <option value="Public Service">Politician</option>
      <option value="Public Service">Scale-1 Office</option>
      <option value="Public Service">State Ministry</option>

      <option value="Airlines" disabled style="background: #e0ffff;">Airlines</option>
      <option value="Airlines">Air Traffic Controller</option>
      <option value="Airlines">Airhostess</option>
      <option value="Airlines">Airline Steward</option>
      <option value="Airlines">Ground Staff-Clerk</option>
      <option value="Airlines">Ground Staff-Executive</option>
      <option value="Airlines">Ground Staff-Manager</option>
      <option value="Airlines">Ground Staff-Superintendent</option>
      <option value="Airlines">Ground Traffic controller</option>
      <option value="Airlines"> Maintenance engineer</option>
      <option value="Airlines">Pilot</option>

      <option value="Entrepreneur/Business Owner" style="background: #e0ffff;">Entrepreneur/Business Owner</option>
      
      <option value="Construction/Property" disabled style="background: #e0ffff;">Construction/Property</option>
      <option value="Construction/Property">Builder</option>
      <option value="Construction/Property">Engineering & Architects Co</option>
      <option value="Construction/Property">Property Consultant</option>
      <option value="Construction/Property">Property Dealer</option>
      <option value="Construction/Property">Property Developer</option>
      <option value="Construction/Property">Site Incharge</option>

      <option value="Housewife (Homemaker)" style="background: #e0ffff;">Housewife (Homemaker)</option>

      <option value="Other Self-Employed" disabled style="background: #e0ffff;">Other Self-Employed</option>
      <option value="Other Self-Employed">Buying Agent</option>
      <option value="Other Self-Employed">Consultant</option>
      <option value="Other Self-Employed">Designer</option>
      <option value="Other Self-Employed">Distributor</option>
      <option value="Other Self-Employed">Event Manager</option>
      <option value="Other Self-Employed">Farmer</option>
      <option value="Other Self-Employed">Freelancer</option>
      <option value="Other Self-Employed">Guest Speaker</option>
      <option value="Other Self-Employed">Insurance Agent</option>
      <option value="Other Self-Employed">Jeweller</option>
      <option value="Other Self-Employed">Owner - Chemist Shop</option>
      <option value="Other Self-Employed">Owner - Coaching Institute</option>
      <option value="Other Self-Employed">Owner - General Shop</option>
      <option value="Other Self-Employed">Owner - Restaurant</option>
      <option value="Other Self-Employed">Owner - Retail Shop</option>
      <option value="Other Self-Employed">Owner-Proprietorship Company</option>
      <option value="Other Self-Employed">Photographer</option>
      <option value="Other Self-Employed">Priest</option>
      <option value="Other Self-Employed">Private Detective</option>
      <option value="Other Self-Employed">SSA - Sole Selling Agent</option>
      <option value="Other Self-Employed">Technical Analyst</option>
      <option value="Other Self-Employed">Textile Designer</option>
      <option value="Other Self-Employed">Tours and Tourism Consultant</option>
      <option value="Other Self-Employed">Trader</option>
      <option value="Other Self-Employed">Trainer</option>
      <option value="Other Self-Employed">Transporter</option>
      <option value="Other Self-Employed">Travel Agent</option>
      <option value="Other Self-Employed">Vendor</option>
      <option value="Other Self-Employed">Wholesaler</option>

      <option value="Professional (Employed)" disabled style="background: #e0ffff;">Professional (Employed)</option>
      <option value="Professional (Employed)">Administration / Operations</option>
      <option value="Professional (Employed)">Analyst</option>
      <option value="Professional (Employed)">Architect</option>
      <option value="Professional (Employed)">Association / Chamber of Commerce</option>
      <option value="Professional (Employed)">BPO Professional</option>
      <option value="Professional (Employed)">Banking Professional (Nationalised Bank)</option>
      <option value="Professional (Employed)">Banking Professional (Private Bank)</option>
      <option value="Professional (Employed)">Business Development Professional</option>
      <option value="Professional (Employed)">Chartered Accountant</option>
      <option value="Professional (Employed)">Chef</option>
      <option value="Professional (Employed)">Company Secretary</option>
      <option value="Professional (Employed)">Consultant</option>
      <option value="Professional (Employed)">Document Controller</option>
      <option value="Professional (Employed)">Engineer</option>
      <option value="Professional (Employed)">Graphic Designer</option>
      <option value="Professional (Employed)">Hospital (Non-Medical) Staff</option>
      <option value="Professional (Employed)">Hospitality Sector Professional</option>
      <option value="Professional (Employed)">Human Resources Professional</option>
      <option value="Professional (Employed)">I.T. Professional</option>
      <option value="Professional (Employed)">Information Officer</option>
      <option value="Professional (Employed)">Market Researcher</option>
      <option value="Professional (Employed)">Merchant Navy Professional</option>
      <option value="Professional (Employed)">Tours and Tourism Consultant</option>
      <option value="Professional (Employed)">Nursing Home (Non-Medical Staff)</option>
      <option value="Professional (Employed)">Operations</option>
      <option value="Professional (Employed)">Sales and Marketing Professional</option>
      <option value="Professional (Employed)">Shipping Professional</option>
      <option value="Professional (Employed)">Visa & Immigration Consultant</option>
       
      <option value="Scientific Research" disabled style="background: #e0ffff;">Scientific Research</option>
      <option value="Scientific Research">Research Associate</option>
      <option value="Scientific Research">Research Fellow</option>
      <option value="Scientific Research">Scientific Services Cell</option>
      <option value="Scientific Research">Scientist with Govt. Institute</option>
      <option value="Scientific Research">Scientist with Private Institute</option>

      <option value="Unemployed" style="background: #e0ffff;">Unemployed</option>
    </select>
    <label class="mdl-textfield__label" for="motherprofession"><span class="imp">*</span>Mother's Profession</label>
   </div>

  <input type="hidden" name="m_profession" id="mother_profession" value="<?php echo $m_profession ?>">
  
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="mothercompname">
   <input class="mdl-textfield__input" id="mothercompname1" name="m_company" value="<?php echo $m_company ?>" type="text" />
   <label class="mdl-textfield__label" for="mothercompname1"><span class="imp">*</span>Company/Organisation Name</label>
 </div>

 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="motherorgtype">
    <select class="mdl-textfield__input" id="motherorgtype1" name="motherorgtype1">
      <option value="<?php echo $m_profession_v ?>"><?php echo $m_company_type ?></option>
      <option value="Commercial – Private Sector" style="background-color:lightcyan" disabled="true">Commercial – Private Sector</option>
    <option value="Commercial – Private Sector1">Tiny Business ( &lt; 1 cr turnover)</option>
    <option value="Commercial – Private Sector2">Small Business(  1 to 4 cr turnover)</option>
    <option value="Commercial – Private Sector3">Medium Business( 4 to 200 cr turnover)</option>
    <option value="Commercial – Private Sector4">Large Business( &gt; 200 cr turnover)</option>
    <option value="Commercial – Government Sector" style="background-color:lightcyan" disabled="true">Commercial – Government Sector</option>
    <option value="Commercial – Government Sector1">Tiny Business ( &lt; 1 cr turnover)</option>
    <option value="Commercial – Government Sector2">Small Business(  1 to 4 cr turnover)</option>
    <option value="Commercial – Government Sector3">Medium Business( 4 to 200 cr turnover)</option>
    <option value="Commercial – Government Sector4">Large Business( &gt; 200 cr turnover)</option>
    <option value="Government" style="background-color:lightcyan" disabled="true">Government</option>
    <option value="Government1">International</option>
    <option value="Government2">Central</option>
    <option value="Government3">State</option>
    <option value="Government4">Local</option>
    <option value="Non-Profit" style="background-color:lightcyan" disabled="true">Non-Profit</option>
    <option value="Non-Profit1">Domestic</option>
    <option value="Non-Profit2">International</option>
      </select>
    <label class="mdl-textfield__label" for="motherorgtype1"><span class="imp">*</span>Company/Organisation Type</label>
    <input type="hidden" name="m_company_type" id="m_company_type" value="<?php echo $m_company_type ?>">
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="mothersector">
    <select class="mdl-textfield__input" id="mothersector1" name="m_company_sector">
      <option value="<?php echo $m_company_sector ?>"><?php echo $m_company_sector ?></option>
      <option value="Diplomatic Services/Embassy">Diplomatic Services/Embassy</option>
    <option value="Broadcasting">Broadcasting</option>
    <option value="Print Media">Print Media</option>
    <option value="Advertising">Advertising</option>
    <option value="Banking">Banking</option>
    <option value="Insurance and Diversified Financials">Insurance and Diversified Financials</option>
    <option value="Investment Banking / Brokerage">Investment Banking / Brokerage</option>
    <option value="Investment Management">Investment Management</option>
    <option value="Computer / IT / Software related Services">Computer / IT / Software related Services</option>
    <option value="Housing / Urban Development / Real Estate / Construction">Housing / Urban Development / Real Estate / Construction</option>
    <option value="Environmental Conservation">Environmental Conservation</option>
    <option value="Consulting">Consulting</option>
    <option value="Education / Educational Research">Education / Educational Research</option>
    <option value="Education (School/College/University)">Education (School/College/University)</option>
    <option value="Scientific Research">Scientific Research</option>
    <option value="Engineering">Engineering</option>
    <option value="Entertainment/Leisure">Entertainment/Leisure</option>
    <option value="Agriculture, Food and Beverage">Agriculture, Food and Beverage</option>
    <option value="Lodging/Hotel">Lodging/Hotel</option>
    <option value="Medical/Healthcare Services">Medical/Healthcare Services</option>
    <option value="Armed Forces">Armed Forces</option>
    <option value="Security Services / Agency">Security Services / Agency</option>
    <option value="Printing/Publishing">Printing/Publishing</option>
    <option value="Retailing / Wholesaling">Retailing / Wholesaling</option>
    <option value="Social Services">Social Services</option>
    <option value="Telecommunications">Telecommunications</option>
    <option value="Trading">Trading</option>
    <option value="Transportation">Transportation</option>
    <option value="Aerospace/Automotive/Airlines/Transportation Equipment">Aerospace/Automotive/Airlines/Transportation Equipment</option>
    <option value="Biotechnology">Biotechnology</option>
    <option value="Chemicals">Chemicals</option>
    <option value="Consumer Products">Consumer Products</option>
    <option value="Energy/Extractive Minerals">Energy/Extractive Minerals</option>
    <option value="Heavy/Raw Materials Supplier">Heavy/Raw Materials Supplier</option>
    <option value="High Technology / Electronics">High Technology / Electronics</option>
    <option value="Highly Diversified Manufacturing">Highly Diversified Manufacturing</option>
    <option value="Highly Diversified Non-Manufacturing">Highly Diversified Non-Manufacturing</option>
    <option value="Machinery and Equipment Manfacturers">Machinery and Equipment Manfacturers</option>
    <option value="Other Manufacturing">Other Manufacturing</option>
    <option value="Textiles">Textiles</option>
    <option value="Pharmaceuticals">Pharmaceuticals</option>
    <option value="Accounting">Accounting</option>
    <option value="Advocacy / Legal Services">Advocacy / Legal Services</option>
    <option value="Foundation / Grant Making">Foundation / Grant Making</option>
    <option value="Judiciary">Judiciary</option>
    <option value="Government">Government</option>
    <option value="Utilities Sector (Power, Water, Waste Mgmt etc.)">Utilities Sector (Power, Water, Waste Mgmt etc.)</option>
    <option value="Any other sector(Specify)">Any other sector  (Specify)</option>
      </select>
      <label class="mdl-textfield__label" for="mothersector1"><span class="imp">*</span>Sector of Company/Org</label>
  </div>
   <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="motherother">
 <input class="mdl-textfield__input" id="motherother1" name="m_company_oth_sector" value="<?php echo $m_company_oth_sector ?>" type="text" />
 <label class="mdl-textfield__label" for="motherother1"><span class="imp">*</span>Other Sector info</label>
 </div>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="motherdesig">
 <input class="mdl-textfield__input" id="motherdesig1" name="m_designation" value="<?php echo $m_designation ?>" type="text" />
 <label class="mdl-textfield__label" for="motherdesig1"><span class="imp">*</span>Mother's Designation</label>
 </div>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label has-placeholder" id="motherofficeaddr">
  <textarea class="mdl-textfield__input" type="text" name="m_off_add1" rows= "2" id="motherofficeaddr1" placeholder="" value="<?php echo $m_off_add1 ?>"><?php echo $m_off_add1 ?></textarea>
  <label class="mdl-textfield__label" for="motherofficeaddr1"><span class="imp">*</span> 
  Office Address</label>
</div>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="motherofficephone">
 <input class="mdl-textfield__input" id="motherofficephone1" name="m_tele_off" value="<?php echo $m_tele_off ?>" type="text" />
 <label class="mdl-textfield__label" for="motherofficephone1"><span class="imp">*</span>Telephone (Office)</label>
 </div>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
 <input class="mdl-textfield__input" id="motherhomephone" name="m_tele_res" value="<?php echo $m_tele_res ?>" type="text" />
 <label class="mdl-textfield__label" for="motherhomephone"><span class="imp">*</span>Telephone (Residence)</label>
 </div>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
 <input class="mdl-textfield__input" id="mothermobile" name="m_mobile" value="<?php echo $m_mobile ?>" type="text" />
 <label class="mdl-textfield__label" for="mothermobile">Mobile Number</label>
 </div>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
 <input class="mdl-textfield__input" id="motheremail" name="m_email" value="<?php echo $m_email ?>" type="email" />
 <label class="mdl-textfield__label" for="motheremail">Email Address</label>
 <span class="mdl-textfield__error">Enter a valid email!</span>
 </div>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label has-placeholder">
  <textarea class="mdl-textfield__input" type="text" id="motherachievments" name="m_achievment" placeholder="" rows="2" value="<?php echo $m_achievment ?>" maxlength="250">
    <?php echo $m_achievment ?>
    </textarea>
  <label class="mdl-textfield__label" for="motherachievments">Any other highlights of achievements of mother or anything else you would like us to know (Optional)</label>
</div>     
 </div>
  </div> 
    </div>
   
    </div>
  </td>
  
</table> 

 <div class="mdl-grid align-items" style="padding-left:5%">   
 <div id="candidate-container" class="demo-card-wide mdl-card mdl-shadow--16dp" style="width: 1250px;">
  <div class="mdl-card__supporting-text">
<div id="card-heading">Special Needs Details</div>
<div style="padding-left: 50px">
<table>
  <td style="padding-left: 65px">
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"><span class="imp">*</span>
    Is child physically challenged?( or Special Needs Child )
   <div style="display: inline-block;">    
  <label class = "mdl-radio mdl-js-radio" for = "option19" >
    <input type = "radio" id = "option19" name = "isspecial" value="No"
  class = "mdl-radio__button" <?php echo ($physically_challenged=='No')?'checked':'' ?> required>
    <span class = "mdl-radio__label">No</span>
  </label>
          
  <label class = "mdl-radio mdl-js-radio mdl-js-ripple-effect" 
                  for = "option20">
     <input type = "radio" id = "option20" name = "isspecial" 
    class = "mdl-radio__button" <?php echo ($physically_challenged=='Yes')?'checked':'' ?> value="Yes">
    <span class = "mdl-radio__label">Yes</span>
  </label>
  </div>      
 </div>
  </td>
 <td id="specialdetail" style="padding-left: 65px">
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label has-placeholder">
  <input class="mdl-textfield__input" type="text" id="specialreason" name="physically_challenged_when" value="<?php echo $physically_challenged_when ?>" placeholder="">
  <label class="mdl-textfield__label" for="specialreason"><span class="imp">*</span> 
  Physically challenged since when?</label>
</div>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="padding-left: 10px;">
    <select class="mdl-textfield__input" id="specialnature" name="physically_challenged_details">
      <option value="<?php echo $physically_challenged_details ?>"><?php echo $physically_challenged_details ?></option>
      <option value="Blindness (BL)">Blindness (BL)</option>
    <option value="Low Vision (LW)">Low Vision (LW)</option>
    <option value="Leprosy Cured (HI)">Leprosy Cured (HI)</option>
    <option value="Hearing Impairement (HI)">Hearing Impairement (HI)</option>
    <option value="Loco-Motor Disability (LM)">Loco-Motor Disability (LM)</option>
    <option value="Mental Retardation (MR)">Mental Retardation (MR)</option>
    <option value="Mental Illness (MI)">Mental Illness (MI)</option>
    <option value="Cerebral Palsy (CP)">Cerebral Palsy (CP)</option>
    <option value="Autism (AT)">Autism (AT)</option>
    <option value="Multiple or Other (ML)">Multiple or Other (ML)</option>
      </select>
    <label class="mdl-textfield__label" for="specialnature"><span class="imp">*</span>Nature of disability/Special Needs</label>
  </div>  
  </td>
</table>  
</div>
</div>
</div>
 </div>
<button form="parents-form" formaction="alumni_details.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">Back</button>
<div id="center">
 <button type="submit" name="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">Save & Continue</button>
  </div>
  </div>
   <?php } ?>
  </form>
 <footer class="mdl-mega-footer">
    <div class="mdl-mega-footer--middle-section">
        <div class="mdl-logo">
            Copyright ©2008-2019 Apeejay Education Society. All Rights Reserved.
            </div>
       </footer>
      </main>
   
</div>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="../js/moment.min.js"></script>
<script src="../js/mdDateTimePicker.js"></script>
<script type="text/javascript" src="../js/datetime.js"></script>
<script type="text/javascript" src="../js/app.js"></script>
<script type="text/javascript" src="../js/validate.js"></script>
</body>
</html>
