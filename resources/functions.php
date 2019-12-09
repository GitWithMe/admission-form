<?php
 //Used to redirect to certain pages
function redirect($location){  
	header("Location: $location ");
}

//Used to connect query to the database
function query($sql){
	global $connection;
	return mysqli_query($connection, $sql);
}

//Used when the query exception catcher
function confirm($result){
	global $connection;
	if(!$result){
		die("QUERY FAILURE " . mysqli_error($connection));
	}
}

//Used to prevent SQL Injections
function escape_string($string){
	global $connection;
	return mysqli_real_escape_string($connection, $string);
}

//Used for fetching the Queries as an array from the database
function fetch_array($result){
	return mysqli_fetch_array($result);
}


/***************STUDENT_DETAILS.PHP*******************/
function update_student_details(){
   if(isset($_POST['submit'])){
   $inst_name = $_SESSION['inst_name'];
   $student_name = $_SESSION['student_name'];
   $dob = $_SESSION['dob'];
   $reg_no = $_SESSION['reg_no'];
   $gender = $_POST['gender'];
   $nationality = escape_string($_POST['nationality']);
   $first_child = escape_string($_POST['firstborn']);
   $last_school = escape_string($_POST['last_school']);
   $last_school_add = escape_string($_POST['last_school_add']);
   $last_apj_school = escape_string($_POST['ifapeejay']);
   $last_apj_school_name = escape_string($_POST['last_apj_school_name']);
   $last_apj_school_class = escape_string($_POST['last_apj_school_class']);
   $last_apj_school_admno = escape_string($_POST['last_apj_school_admno']);
   $other_apj_applied = escape_string($_POST['other_apj_applied']);
   $other_apj_applied_name = escape_string($_POST['other_apj_applied_name']);

  $query = query("UPDATE studregistrations SET student_name='{$student_name}', gender = '{$gender}', dob = '{$dob}', nationality = '{$nationality}', first_child = '{$first_child}', last_school = '{$last_school}', last_school_add = '{$last_school_add}', last_apj_school = '{$last_apj_school}', last_apj_school_class = '{$last_apj_school_class}', last_apj_school_admno = '{$last_apj_school_admno}', last_apj_school_name = '{$last_apj_school_name}', other_apj_applied='{$other_apj_applied}', other_apj_applied_name = '{$other_apj_applied_name}' WHERE inst_name = '{$inst_name}' AND reg_no = '{$reg_no}' AND student_name = '{$student_name}' AND dob = '{$dob}'");
    confirm($query);
  }
}

function forward_alumni(){
  if(isset($_POST['submit'])){
  redirect("alumni_details.php");
  }
}

/***************ALUMNI_DETAILS.PHP*******************/
function update_alumni_details(){
   if(isset($_POST['submit'])){
   $inst_name = $_SESSION['inst_name'];
   $student_name = $_SESSION['student_name'];
   $dob = $_SESSION['dob'];
   $reg_no = $_SESSION['reg_no'];
   $add1 = escape_string($_POST['add1']);
   $add2 = escape_string($_POST['add2']);
   $city = escape_string($_POST['city']);
   $pin = escape_string($_POST['pin']);
   $state = escape_string($_POST['state']);
   $sibling = escape_string($_POST['ifsibling1']);
   $no_of_sib = escape_string($_POST['no_of_sib']);
   $sib_name = escape_string($_POST['sib_name']);
   $sib_admno = escape_string($_POST['sib_admno']);
   $sib_class = escape_string($_POST['sib_class']);
   $oth_sibling = escape_string($_POST['ifsibling2']);
   $oth_no_of_sib = escape_string($_POST['oth_no_of_sib']);
   $oth_sib_name = escape_string($_POST['oth_sib_name']);
   $oth_sib_admno = escape_string($_POST['oth_sib_admno']);
   $oth_sib_class = escape_string($_POST['oth_sib_class']);
   $alumni = escape_string($_POST['isalumni1']);
   $alumni_who = escape_string($_POST['whoalumni1']);
   $alumni_f_admno = escape_string($_POST['alumni_f_admno']);
   $alumni_f_js = escape_string($_POST['alumni_f_js']);
   $alumni_f_yp = escape_string($_POST['alumni_f_yp']);
   $alumni_m_admno = escape_string($_POST['alumni_m_admno']);
   $alumni_m_js = escape_string($_POST['alumni_m_js']);
   $alumni_m_yp = escape_string($_POST['alumni_m_yp']);

  $query = query("UPDATE studregistrations SET add1='{$add1}', add2 = '{$add2}', city = '{$city}', pin = '{$pin}', state = '{$state}', sibling = '{$sibling}', no_of_sib = '{$no_of_sib}', sib_name = '{$sib_name}', sib_admno = '{$sib_admno}', sib_class = '{$sib_class}', oth_sibling = '{$oth_sibling}', oth_no_of_sib = '{$oth_no_of_sib}', oth_sib_name = '{$oth_sib_name}', oth_sib_admno = '{$oth_sib_admno}', oth_sib_class = '{$oth_sib_class}', alumni = '{$alumni}', alumni_who='{$alumni_who}', alumni_f_admno = '{$alumni_f_admno}', alumni_f_js = '{$alumni_f_js}', alumni_f_yp = '{$alumni_f_yp}', alumni_m_admno = '{$alumni_m_admno}', alumni_m_js = '{$alumni_m_js}', alumni_m_yp = '{$alumni_m_yp}' WHERE inst_name = '{$inst_name}' AND reg_no = '{$reg_no}' AND student_name = '{$student_name}' AND dob = '{$dob}'");
    confirm($query);
  }
}

function forward_family(){
  if(isset($_POST['submit'])){
  redirect("family_details.php");
  }
}
/***************FAMILY_DETAILS.PHP*******************/

function update_family_details(){
   if(isset($_POST['submit'])){
   $inst_name = $_SESSION['inst_name'];
   $student_name = $_SESSION['student_name'];
   $dob = $_SESSION['dob'];
   $reg_no = $_SESSION['reg_no'];
   $single_parent = escape_string($_POST['issingle']);
   $single_parent_status = escape_string($_POST['status']);
   $physically_challenged = escape_string($_POST['isspecial']);
   $physically_challenged_when = escape_string($_POST['physically_challenged_when']);
   $physically_challenged_details = escape_string($_POST['physically_challenged_details']);
   $f_name = escape_string($_POST['f_name']);
   $f_profession = escape_string($_POST['f_profession']);
   $f_profession_v = escape_string($_POST['f_profession_v']);
   $f_company = escape_string($_POST['f_company']);
   $f_company_type = escape_string($_POST['f_company_type']);
   $f_company_type_v = escape_string($_POST['fatherorgtype1']);
   $f_company_sector = escape_string($_POST['f_company_sector']);
   $f_company_oth_sector = escape_string($_POST['f_company_oth_sector']);
   $f_designation = escape_string($_POST['f_designation']);
   $f_off_add1 = escape_string($_POST['f_off_add1']);
   $f_tele_off = escape_string($_POST['f_tele_off']);
   $f_tele_res = escape_string($_POST['f_tele_res']);
   $f_mobile = escape_string($_POST['f_mobile']);
   $f_email = escape_string($_POST['f_email']);
   $f_achievment = escape_string($_POST['f_achievment']);
   $m_name = escape_string($_POST['m_name']);
   $m_profession = escape_string($_POST['m_profession']);
   $m_profession_v = escape_string($_POST['m_profession_v']);
   $m_company = escape_string($_POST['m_company']);
   $m_company_type = escape_string($_POST['m_company_type']);
   $m_company_type_v = escape_string($_POST['motherorgtype1']);
   $m_company_sector = escape_string($_POST['m_company_sector']);
   $m_company_oth_sector = escape_string($_POST['m_company_oth_sector']);
   $m_designation = escape_string($_POST['m_designation']);
   $m_off_add1 = escape_string($_POST['m_off_add1']);
   $m_tele_off = escape_string($_POST['m_tele_off']);
   $m_tele_res = escape_string($_POST['m_tele_res']);
   $m_mobile = escape_string($_POST['m_mobile']);
   $m_email = escape_string($_POST['m_email']);
   $m_achievment = escape_string($_POST['m_achievment']);
   

  $query = query("UPDATE studregistrations SET single_parent='{$single_parent}', single_parent_status = '{$single_parent_status}', physically_challenged = '{$physically_challenged}', physically_challenged_when = '{$physically_challenged_when}', physically_challenged_details = '{$physically_challenged_details}', f_name = '{$f_name}', f_profession = '{$f_profession}', f_company='{$f_company}', f_company_type = '{$f_company_type}', f_company_sector = '{$f_company_sector}', f_company_oth_sector = '{$f_company_oth_sector}', f_designation = '{$f_designation}', f_off_add1 = '{$f_off_add1}', f_tele_off = '{$f_tele_off}', f_tele_res = '{$f_tele_res}', f_mobile = '{$f_mobile}', f_email = '{$f_email}', f_achievment = '{$f_achievment}', m_name = '{$m_name}', m_profession = '{$m_profession}', m_company='{$m_company}', m_company_type = '{$m_company_type}', m_company_sector = '{$m_company_sector}', m_company_oth_sector = '{$m_company_oth_sector}', m_designation = '{$m_designation}', m_off_add1 = '{$m_off_add1}', m_tele_off = '{$m_tele_off}', m_tele_res = '{$m_tele_res}', m_mobile = '{$m_mobile}', m_email = '{$m_email}', m_achievment = '{$m_achievment}', f_profession_v = '{$f_profession_v}', f_company_type_v = '{$f_company_type_v}', m_profession_v = '{$m_profession_v}', m_company_type_v = '{$m_company_type_v}' WHERE inst_name = '{$inst_name}' AND reg_no = '{$reg_no}' AND student_name = '{$student_name}' AND dob = '{$dob}'");
  confirm($query);
  }
}

function forward_other(){
  if(isset($_POST['submit'])){
  redirect("other_details.php");
  }
}

/***************OTHER_DETAILS.PHP*******************/
function update_other_details(){
   if(isset($_POST['submit'])){
   $inst_name = $_SESSION['inst_name'];
   $student_name = $_SESSION['student_name'];
   $dob = $_SESSION['dob'];
   $reg_no = $_SESSION['reg_no'];
   $staff = $_POST['isteacher'];
   $transport = escape_string($_POST['istransport']);
   $transport_r = escape_string($_POST['transport_r']);
   $transport_r_no = escape_string($_POST['transport_r_no']);
   $transport_a = escape_string($_POST['transport_a']);
   $transport_a_no = escape_string($_POST['transport_a_no']);
   $diplomet = escape_string($_POST['isgrandparent']);
   $n_awardee = escape_string($_POST['grandparentaward']);
   $n_awardee_details = escape_string($_POST['n_awardee_details']);
   $m_gf_live = escape_string($_POST['matgrandpaliv']);
   $m_gf_name = escape_string($_POST['m_gf_name']);
   $m_gf_details = escape_string($_POST['m_gf_details']);
   $m_gm_live = escape_string($_POST['matgrandmaliv']);
   $m_gm_name = escape_string($_POST['m_gm_name']);
   $m_gm_details = escape_string($_POST['m_gm_details']);
   $p_gf_live = escape_string($_POST['patgrandpaliv']);
   $p_gf_name = escape_string($_POST['p_gf_name']);
   $p_gf_details = escape_string($_POST['p_gf_details']);
   $p_gm_live = escape_string($_POST['patgrandmaliv']);
   $p_gm_name = escape_string($_POST['p_gm_name']);
   $p_gm_details = escape_string($_POST['p_gm_details']);
  
  
  $query = query("UPDATE studregistrations SET staff='{$staff}', transport = '{$transport}', transport_r = '{$transport_r}', transport_r_no = '{$transport_r_no}', transport_a = '{$transport_a}', transport_a_no = '{$transport_a_no}', diplomet = '{$diplomet}', n_awardee = '{$n_awardee}', n_awardee_details = '{$n_awardee_details}', m_gf_live = '{$m_gf_live}',  m_gf_name = '{$m_gf_name}', m_gf_details = '{$m_gf_details}', m_gm_live = '{$m_gm_live}', m_gm_name = '{$m_gm_name}', m_gm_details = '{$m_gm_details}', p_gf_live = '{$p_gf_live}', p_gf_name = '{$p_gf_name}', p_gf_details = '{$p_gf_details}', p_gm_live = '{$p_gm_live}', p_gm_name = '{$p_gm_name}', p_gm_details = '{$p_gm_details}' WHERE inst_name = '{$inst_name}' AND reg_no = '{$reg_no}' AND student_name = '{$student_name}' AND dob = '{$dob}'");
  }
}

function forward_other1(){
  if(isset($_POST['submit'])){
  redirect("../process.php");
  }
}

/***********************LOGIN.PHP******************/
function login_check_student(){ 
if(!isset($_SESSION['reg_no'])){
redirect("index.php");
}
  }

function login_student(){

   if(isset($_POST['submit'])){
    $inst_name = escape_string($_POST['schoolname_a']);
    $student_name = escape_string($_POST['stuname_a']);
    $dob1 = escape_string($_POST['dob_a']);
    $old_date = explode('-', $dob1); 
    $dob = $old_date[2].'-'.$old_date[1].'-'.$old_date[0];
    $reg_no = escape_string($_POST['regno']);
     
  $query = query("SELECT * FROM studregistrations WHERE inst_name = '{$inst_name}' AND reg_no = '{$reg_no}' AND student_name = '{$student_name}' AND dob = '{$dob}'");
  confirm($query);
   if(mysqli_num_rows($query) == 0){
    redirect("index.php");
   } 
   else{
   while ($row = fetch_array($query)) {
   $_SESSION['inst_name'] = $inst_name;
   $_SESSION['student_name'] = $student_name;
   $_SESSION['dob'] = $dob;
   $_SESSION['reg_no'] = $reg_no;
       
   redirect("r_f/student_details.php");
   }
     }
        }
           }


 function download_form(){

   if(isset($_POST['gestalt'])){
    $inst_name = escape_string($_POST['schoolname_d']);
    $student_name = escape_string($_POST['stuname_d']);
    $dob1 = escape_string($_POST['dob_d']);
    $old_date = explode('-', $dob1); 
    $dob = $old_date[2].'-'.$old_date[1].'-'.$old_date[0];
    $reg_no = escape_string($_POST['regno_d']);
      
  $query = query("SELECT * FROM studregistrations WHERE inst_name = '{$inst_name}' AND reg_no = '{$reg_no}' AND student_name = '{$student_name}' AND dob = '{$dob}'");
  confirm($query);
   if(mysqli_num_rows($query) == 0){
    redirect("index.php");
   } 
   else{
   while ($row = fetch_array($query)) {
   $_SESSION['inst_name'] = $inst_name;
   $_SESSION['student_name'] = $student_name;
   $_SESSION['dob'] = $dob;
   $_SESSION['reg_no'] = $reg_no;
      
   redirect("process.php");
   }
     }
        }
           }          
?>

