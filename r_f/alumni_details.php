<?php require_once("../resources/config.php") ?>
<?php update_alumni_details(); forward_family(); login_check_student();?>
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
          <a class="mdl-layout__tab is-active">Address/Alumni Details</a>
          <a class="mdl-layout__tab">Family Details</a>
          <a class="mdl-layout__tab">Other Details</a>
          <a href="logout.php" class="mdl-layout__tab">Logout</a>
       </div>
      </header>
      <main class="mdl-layout__content">
 <div class="mdl-layout__tab-panel is-active"> 
 <div class="mdl-grid align-items" style="padding-left:5%">   
 <div id="candidate-container" class="demo-card-wide mdl-card mdl-shadow--16dp" style="width: 1250px;">
  <div class="mdl-card__supporting-text">
<div id="card-heading">Address & Sibling Details</div>
<form role="form" action="" method="post" id="aluminfo-form" autocomplete="off" style="padding-left: 50px">
 <?php  
 $inst_name = $_SESSION['inst_name'];
 $student_name = $_SESSION['student_name'];
 $dob = $_SESSION['dob'];
 $reg_no = $_SESSION['reg_no'];
 $query = query("SELECT * FROM studregistrations WHERE inst_name = '{$inst_name}' AND reg_no = '{$reg_no}' AND student_name = '{$student_name}' AND dob = '{$dob}'");
  confirm($query);
  while ($row = fetch_array($query)) {
   $add1 = $row['add1'];
   $add2 = $row['add2'];
   $city = $row['city'];
   $pin = $row['pin'];
   $state = $row['state'];
   $sibling = $row['sibling'];
   $no_of_sib = $row['no_of_sib'];
   $sib_name = $row['sib_name'];
   $sib_admno = $row['sib_admno'];
   $sib_class = $row['sib_class'];
   $oth_sibling = $row['oth_sibling'];
   $oth_no_of_sib = $row['oth_no_of_sib'];
   $oth_sib_name = $row['oth_sib_name'];
   $oth_sib_admno = $row['oth_sib_admno'];
   $oth_sib_class = $row['oth_sib_class'];
   $alumni = $row['alumni'];
   $alumni_who = $row['alumni_who'];
   $alumni_f_admno = $row['alumni_f_admno'];
   $alumni_f_js = $row['alumni_f_js'];
   $alumni_f_yp = $row['alumni_f_yp'];
   $alumni_m_admno = $row['alumni_m_admno'];
   $alumni_m_js = $row['alumni_m_js'];
   $alumni_m_yp = $row['alumni_m_yp'];
   ?>  
  <table>
    <td>
      <div class="mdl-card__supporting-text">
   <h6><strong>Residential Address</strong></h6>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label has-placeholder">
  <textarea class="mdl-textfield__input" type="text" id="addr1" name="add1" placeholder="" rows= "2" value="<?php echo $add1 ?>" required><?php echo $add1 ?></textarea>
  <label class="mdl-textfield__label" for="addr1"><span class="imp">*</span> 
Address Line 1</label>
</div>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label has-placeholder">
  <textarea class="mdl-textfield__input" type="text" id="addr2" name="add2" rows= "2" placeholder="" value="<?php echo $add2 ?>" required><?php echo $add2 ?></textarea>
  <label class="mdl-textfield__label" for="addr2"><span class="imp">*</span> 
Address Line 2</label>
</div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
     <input class="mdl-textfield__input" type="text" id="city" name="city"
     value="<?php echo $city ?>" required/>
     <label class="mdl-textfield__label" for="city"><span class="imp">*</span>City</label>
 </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
     <input class="mdl-textfield__input" type="number" pattern="/^[0-9]{1,4}$/" id="pin" name="pin" value="<?php echo $pin ?>" required / >
     <label class="mdl-textfield__label" for="pin"><span class="imp">*</span>Pin</label>
     <span class="mdl-textfield__error">Not a valid Pin Number!</span>
 </div>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
     <input class="mdl-textfield__input" type="text" id="state" name="state" 
     value="<?php echo $state ?>" required />
     <label class="mdl-textfield__label" for="state"><span class="imp">*</span>State</label>
 </div>
</td>
<td style="border-left: solid 1px #CDCDCD;">
  <div class="mdl-card__supporting-text">
    
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="padding-bottom: 35%">
   <span class="imp">*</span> Does the child have a Sibling in the same School? <small>(own brother or sister of same parents)</small>
   <div>    
  <label class = "mdl-radio mdl-js-radio" for = "option5" >
    <input type = "radio" id = "option5" name = "ifsibling1" value="No"
    class = "mdl-radio__button" <?php echo ($sibling=='No')?'checked':'' ?> required>
    <span class = "mdl-radio__label">No</span>
  </label>
          
  <label class = "mdl-radio mdl-js-radio mdl-js-ripple-effect" 
                  for = "option6">
     <input type = "radio" id = "option6" name = "ifsibling1" 
  class = "mdl-radio__button" <?php echo ($sibling=='Yes')?'checked':'' ?> value="Yes">
    <span class = "mdl-radio__label">Yes</span>
  </label>
  </div>      
 </div>
 <table id="numnamesib1">
  <td>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 110px">
     <input class="mdl-textfield__input" type="number" name="no_of_sib" id="totalsibling1" value="<?php echo $no_of_sib ?>"/>
     <label class="mdl-textfield__label" for="totalsibling1">No. of Siblings?</label>
 </td> 
 <td style="padding-left: 10px">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="namesibling1" style="width: 130px">
 <input class="mdl-textfield__input" id="namesibling3" name="sib_name" type="text" 
 value="<?php echo $sib_name ?>" />
 <label class="mdl-textfield__label" for="namesibling3"><span class="imp">*</span>Name of Sibling</label>
 </div></td> 
 </table>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="admnosibling1" style="width: 130px">
 <input class="mdl-textfield__input" id="admnosibling3" name="sib_admno" type="text" value="<?php echo $sib_admno ?>"/>
 <label class="mdl-textfield__label" for="admnosibling3">Sibling's AdmnNo</label>
 </div>
  <table id="classectionsib1">
   <td>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100px;">
    <select class="mdl-textfield__input" id="classsib1" name="sib_class">
      <option value="<?php echo $sib_class ?>"><?php echo $sib_class ?></option>
      <option value="PRE-A">PRE-A</option>
      <option value="PRE-B">PRE-B</option>
      <option value="PRE-C">PRE-C</option>
      <option value="PRE-D">PRE-D</option>
      <option value="PRE-E">PRE-E</option>
      <option value="PRE-F">PRE-F</option>
      <option value="NUR-A">NUR-A</option>
      <option value="NUR-B">NUR-B</option>
      <option value="NUR-C">NUR-C</option>
      <option value="NUR-D">NUR-D</option>
      <option value="NUR-E">NUR-E</option>
      <option value="NUR-F">NUR-F</option>
      <option value="LKG-A">LKG-A</option>
      <option value="LKG-B">LKG-B</option>
      <option value="LKG-C">LKG-C</option>
      <option value="LKG-D">LKG-D</option>
      <option value="LKG-E">LKG-E</option>
      <option value="LKG-F">LKG-F</option>
      <option value="UKG-A">UKG-A</option>
      <option value="UKG-B">UKG-B</option>
      <option value="UKG-C">UKG-C</option>
      <option value="UKG-D">UKG-D</option>
      <option value="UKG-E">UKG-E</option>
      <option value="UKG-F">UKG-F</option>
      <option value="KG-A">KG-A</option>
      <option value="KG-B">KG-B</option>
      <option value="KG-C">KG-C</option>
      <option value="KG-D">KG-D</option>
      <option value="KG-E">KG-E</option>
      <option value="KG-F">KG-F</option>
      <option value="I-A">I-A</option>
      <option value="I-B">I-B</option>
      <option value="I-C">I-C</option>
      <option value="I-D">I-D</option>
      <option value="I-E">I-E</option>
      <option value="I-F">I-F</option>
      <option value="II-A">II-A</option>
      <option value="II-B">II-B</option>
      <option value="II-C">II-C</option>
      <option value="II-D">II-D</option>
      <option value="II-E">II-E</option>
      <option value="II-F">II-F</option>
      <option value="III-A">III-A</option>
      <option value="III-B">III-B</option>
      <option value="III-C">III-C</option>
      <option value="III-D">III-D</option>
      <option value="III-E">III-E</option>
      <option value="III-F">III-F</option>
      <option value="IV-A">IV-A</option>
      <option value="IV-B">IV-B</option>
      <option value="IV-C">IV-C</option>
      <option value="IV-D">IV-D</option>
      <option value="IV-E">IV-E</option>
      <option value="IV-F">IV-F</option>
      <option value="V-A">V-A</option>
      <option value="V-B">V-B</option>
      <option value="V-C">V-C</option>
      <option value="V-D">V-D</option>
      <option value="V-E">V-E</option>
      <option value="V-F">V-F</option>
      <option value="VI-A">VI-A</option>
      <option value="VI-B">VI-B</option>
      <option value="VI-C">VI-C</option>
      <option value="VI-D">VI-D</option>
      <option value="VI-E">VI-E</option>
      <option value="VI-F">VI-F</option>
      <option value="VII-A">VII-A</option>
      <option value="VII-B">VII-B</option>
      <option value="VII-C">VII-C</option>
      <option value="VII-D">VII-D</option>
      <option value="VII-E">VII-E</option>
      <option value="VII-F">VII-F</option>
      <option value="VIII-A">VIII-A</option>
      <option value="VIII-B">VIII-B</option>
      <option value="VIII-C">VIII-C</option>
      <option value="VIII-D">VIII-D</option>
      <option value="VIII-E">VIII-E</option>
      <option value="VIII-F">VIII-F</option>
      <option value="IX-A">IX-A</option>
      <option value="IX-B">IX-B</option>
      <option value="IX-C">IX-C</option>
      <option value="IX-D">IX-D</option>
      <option value="IX-E">IX-E</option>
      <option value="IX-F">IX-F</option>
      <option value="X-A">X-A</option>
      <option value="X-B">X-B</option>
      <option value="X-C">X-C</option>
      <option value="X-D">X-D</option>
      <option value="X-E">X-E</option>
      <option value="X-F">X-F</option>
      <option value="XI-A">XI-A</option>
      <option value="XI-B">XI-B</option>
      <option value="XI-C">XI-C</option>
      <option value="XI-D">XI-D</option>
      <option value="XI-E">XI-E</option>
      <option value="XI-F">XI-F</option>
      <option value="XII-A">XII-A</option>
      <option value="XII-B">XII-B</option>
      <option value="XII-C">XII-C</option>
      <option value="XII-D">XII-D</option>
      <option value="XII-E">XII-E</option>
      <option value="XII-F">XII-F</option>
      </select>
    <label class="mdl-textfield__label" for="classsib1"><span class="imp">*</span>Class</label>
  </div> 
   </td>
   </table> 
 </div>
 </td>
 <td style="border-left: solid 1px #CDCDCD;">
  <div class="mdl-card__supporting-text">
    
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="padding-bottom: 35%">
  <span class="imp">*</span>Does the child have a Sibling in another APEEJAY School? <small>(own brother or  sister of same parents)</small>
   <div>    
  <label class = "mdl-radio mdl-js-radio" for = "option7" >
    <input type = "radio" id = "option7" name = "ifsibling2" value="No"
   class = "mdl-radio__button" <?php echo ($oth_sibling=='No')?'checked':'' ?> required >
    <span class = "mdl-radio__label">No</span>
  </label>
          
  <label class = "mdl-radio mdl-js-radio mdl-js-ripple-effect" 
                  for = "option8">
     <input type = "radio" id = "option8" name = "ifsibling2" 
 class = "mdl-radio__button" <?php echo ($oth_sibling=='Yes')?'checked':'' ?> value="Yes">
    <span class = "mdl-radio__label">Yes</span>
  </label>
  </div>      
 </div>
 <table id="numnamesib2">
  <td>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 110px">
     <input class="mdl-textfield__input" type="number" name="oth_no_of_sib" id="totalsibling2" value="<?php echo $oth_no_of_sib ?>"/>
     <label class="mdl-textfield__label" for="totalsibling2">No. of Siblings?</label>
 </td> 
 <td style="padding-left: 10px">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="namesibling2" style="width: 130px">
 <input class="mdl-textfield__input" id="namesibling4" name="oth_sib_name" type="text" value="<?php echo $oth_sib_name ?>"/>
 <label class="mdl-textfield__label" for="namesibling4"><span class="imp">*</span>Name of Sibling</label>
 </div></td> 
 </table>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="admnosibling2" style="width: 130px">
 <input class="mdl-textfield__input" id="admnosibling4" name="oth_sib_admno" type="text" value="<?php echo $oth_sib_admno ?>"/>
 <label class="mdl-textfield__label" for="admnosibling4">Sibling's AdmnNo</label>
 </div>
  <table id="classectionsib2">
   <td>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100px;">
    <select class="mdl-textfield__input" id="classsib2" name="oth_sib_class">
      <option value="<?php echo $oth_sib_class ?>"><?php echo $oth_sib_class ?></option>
      <option value="PRE-A">PRE-A</option>
      <option value="PRE-B">PRE-B</option>
      <option value="PRE-C">PRE-C</option>
      <option value="PRE-D">PRE-D</option>
      <option value="PRE-E">PRE-E</option>
      <option value="PRE-F">PRE-F</option>
      <option value="NUR-A">NUR-A</option>
      <option value="NUR-B">NUR-B</option>
      <option value="NUR-C">NUR-C</option>
      <option value="NUR-D">NUR-D</option>
      <option value="NUR-E">NUR-E</option>
      <option value="NUR-F">NUR-F</option>
      <option value="LKG-A">LKG-A</option>
      <option value="LKG-B">LKG-B</option>
      <option value="LKG-C">LKG-C</option>
      <option value="LKG-D">LKG-D</option>
      <option value="LKG-E">LKG-E</option>
      <option value="LKG-F">LKG-F</option>
      <option value="UKG-A">UKG-A</option>
      <option value="UKG-B">UKG-B</option>
      <option value="UKG-C">UKG-C</option>
      <option value="UKG-D">UKG-D</option>
      <option value="UKG-E">UKG-E</option>
      <option value="UKG-F">UKG-F</option>
      <option value="KG-A">KG-A</option>
      <option value="KG-B">KG-B</option>
      <option value="KG-C">KG-C</option>
      <option value="KG-D">KG-D</option>
      <option value="KG-E">KG-E</option>
      <option value="KG-F">KG-F</option>
      <option value="I-A">I-A</option>
      <option value="I-B">I-B</option>
      <option value="I-C">I-C</option>
      <option value="I-D">I-D</option>
      <option value="I-E">I-E</option>
      <option value="I-F">I-F</option>
      <option value="II-A">II-A</option>
      <option value="II-B">II-B</option>
      <option value="II-C">II-C</option>
      <option value="II-D">II-D</option>
      <option value="II-E">II-E</option>
      <option value="II-F">II-F</option>
      <option value="III-A">III-A</option>
      <option value="III-B">III-B</option>
      <option value="III-C">III-C</option>
      <option value="III-D">III-D</option>
      <option value="III-E">III-E</option>
      <option value="III-F">III-F</option>
      <option value="IV-A">IV-A</option>
      <option value="IV-B">IV-B</option>
      <option value="IV-C">IV-C</option>
      <option value="IV-D">IV-D</option>
      <option value="IV-E">IV-E</option>
      <option value="IV-F">IV-F</option>
      <option value="V-A">V-A</option>
      <option value="V-B">V-B</option>
      <option value="V-C">V-C</option>
      <option value="V-D">V-D</option>
      <option value="V-E">V-E</option>
      <option value="V-F">V-F</option>
      <option value="VI-A">VI-A</option>
      <option value="VI-B">VI-B</option>
      <option value="VI-C">VI-C</option>
      <option value="VI-D">VI-D</option>
      <option value="VI-E">VI-E</option>
      <option value="VI-F">VI-F</option>
      <option value="VII-A">VII-A</option>
      <option value="VII-B">VII-B</option>
      <option value="VII-C">VII-C</option>
      <option value="VII-D">VII-D</option>
      <option value="VII-E">VII-E</option>
      <option value="VII-F">VII-F</option>
      <option value="VIII-A">VIII-A</option>
      <option value="VIII-B">VIII-B</option>
      <option value="VIII-C">VIII-C</option>
      <option value="VIII-D">VIII-D</option>
      <option value="VIII-E">VIII-E</option>
      <option value="VIII-F">VIII-F</option>
      <option value="IX-A">IX-A</option>
      <option value="IX-B">IX-B</option>
      <option value="IX-C">IX-C</option>
      <option value="IX-D">IX-D</option>
      <option value="IX-E">IX-E</option>
      <option value="IX-F">IX-F</option>
      <option value="X-A">X-A</option>
      <option value="X-B">X-B</option>
      <option value="X-C">X-C</option>
      <option value="X-D">X-D</option>
      <option value="X-E">X-E</option>
      <option value="X-F">X-F</option>
      <option value="XI-A">XI-A</option>
      <option value="XI-B">XI-B</option>
      <option value="XI-C">XI-C</option>
      <option value="XI-D">XI-D</option>
      <option value="XI-E">XI-E</option>
      <option value="XI-F">XI-F</option>
      <option value="XII-A">XII-A</option>
      <option value="XII-B">XII-B</option>
      <option value="XII-C">XII-C</option>
      <option value="XII-D">XII-D</option>
      <option value="XII-E">XII-E</option>
      <option value="XII-F">XII-F</option>
      </select>
    <label class="mdl-textfield__label" for="classsib2"><span class="imp">*</span>Class</label>
  </div> 
   </td>
 </table> 
 </div>
 </td>
</table>
 

</td>
</table>
  </div> 
    </div>
   
    </div>

<table>
  <td style="padding-left: 65px">
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="isalumni"><span class="imp">*</span>
    Is Parent Alumni of the same School ?
   <div style="display: inline-block;">    
  <label class = "mdl-radio mdl-js-radio" for = "option9" >
    <input type = "radio" id = "option9" name = "isalumni1" value="No"
    class = "mdl-radio__button" <?php echo ($alumni=='No')?'checked':'' ?> required>
    <span class = "mdl-radio__label">No</span>
  </label>
          
  <label class = "mdl-radio mdl-js-radio mdl-js-ripple-effect" 
                  for = "option10">
     <input type = "radio" id = "option10" name = "isalumni1" 
  class = "mdl-radio__button" <?php echo ($alumni=='Yes')?'checked':'' ?> value="Yes">
    <span class = "mdl-radio__label">Yes</span>
  </label>
  </div>      
 </div>
  </td>
 <td id="whoalumni" style="padding-left: 65px">
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"><span class="imp">*</span>
    Who was Alumni ? 
   <div style="display: inline-block;">    
  <label class = "mdl-radio mdl-js-radio" for = "option11" >
    <input type = "radio" id = "option11" name = "whoalumni1" value="Father"
   class = "mdl-radio__button" <?php echo ($alumni_who=='Father')?'checked':'' ?>>
    <span class = "mdl-radio__label">Father</span>
  </label>
          
  <label class = "mdl-radio mdl-js-radio mdl-js-ripple-effect" 
                  for = "option12">
     <input type = "radio" id = "option12" name = "whoalumni1" 
  class = "mdl-radio__button" <?php echo ($alumni_who=='Mother')?'checked':'' ?> value="Mother">
    <span class = "mdl-radio__label">Mother</span>
  </label>
  <label class = "mdl-radio mdl-js-radio mdl-js-ripple-effect" 
                  for = "option13">
     <input type = "radio" id = "option13" name = "whoalumni1" 
    class = "mdl-radio__button" <?php echo ($alumni_who=='Both')?'checked':'' ?> value="Both">
    <span class = "mdl-radio__label">Both</span>
  </label>
  </div>      
 </div>
  </td>
</table>

 <div id="alumni-card" class="mdl-grid align-items" style="padding-left:20%">   
 <div id="candidate-container" class="demo-card-wide mdl-card mdl-shadow--16dp" style="width: 806.2px;">
  <div class="mdl-card__supporting-text">
<div id="card-heading">Alumni Details</div>
<div style="padding-left: 5%;">
   <h6><strong>( To qualify as alumni, parent should have studied for at least 4 years and passed class XII Board Examination from the same Apeejay School )</strong></h6>
  <table>
    <td style="padding-right: 20px" id="fatheralumni">
  <div class="mdl-card__supporting-text" style="padding-left: ">
   <h6><strong>Father's The Alumni</strong></h6>    
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
 <input class="mdl-textfield__input" id="fatheradmno" name="alumni_f_admno" type="text" value="<?php echo $alumni_f_admno ?>"/>
 <label class="mdl-textfield__label" for="fatheradmno">Father's Admission No.</label>
 </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
 <input class="mdl-textfield__input" type="number" name="alumni_f_js" id="fatherjoin" value="<?php echo $alumni_f_js ?>">
 <label class="mdl-textfield__label" for="fatherjoin"><span class="imp">*</span>Year of joining same school</label>
 </div>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
 <input class="mdl-textfield__input" type="number" name="alumni_f_yp" id="fatherpass" value="<?php echo $alumni_f_yp ?>">
 <label class="mdl-textfield__label" for="fatherpass">Year of passing Class XII(from same school</label>
 </div>
 </div>
</td>
<td id="motheralumni" style="border-left: solid 1px #CDCDCD;">
  <div class="mdl-card__supporting-text" style="padding-left: ">
   <h6><strong>Mother's The Alumni</strong></h6>    
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
 <input class="mdl-textfield__input" id="motheradmno" name="alumni_m_admno" type="text" value="<?php echo $alumni_m_admno ?>"/>
 <label class="mdl-textfield__label" for="motheradmno">Mother's Admission No.</label>
 </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
 <input class="mdl-textfield__input" type="number" name="alumni_m_js" id="motherjoin" value="<?php echo $alumni_m_js ?>">
 <label class="mdl-textfield__label" for="motherjoin"><span class="imp">*</span>Year of joining same school</label>
 </div>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
 <input class="mdl-textfield__input" type="number" name="alumni_m_yp" id="motherpass" value="<?php echo $alumni_m_yp ?>">
 <label class="mdl-textfield__label" for="motherpass">Year of passing Class XII(from same school</label> <?php } ?>
 </div>
 </td>
</table>
 

</td>
</table>
   </div>
  </div> 
    
    </div>
</div>
<button form="aluminfo-form" formaction="student_details.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">Back</button>
<div id="center">
 <button type="submit" name="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">Save & Continue</button>
</div>
   </div>
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
