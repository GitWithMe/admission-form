<?php require_once("../resources/config.php") ?>
<?php update_student_details(); forward_alumni(); login_check_student(); ?>
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
          <a class="mdl-layout__tab is-active">Student Details</a>
          <a class="mdl-layout__tab">Address/Alumni Details</a>
          <a class="mdl-layout__tab">Family Details</a>
          <a class="mdl-layout__tab">Other Details</a>
          <a href="logout.php" class="mdl-layout__tab">Logout</a>
       </div>
      </header>
      <main class="mdl-layout__content">
    <div class="mdl-layout__tab-panel is-active">
 
   <div class="mdl-grid align-items" style="padding-left:15%">   
 <div id="candidate-container" class="demo-card-wide mdl-card mdl-shadow--16dp" style="width: 1000px;">
   <div class="mdl-card__supporting-text">
<div id="card-heading">Student Information</div>
<form role="form" action="" method="post" id="stuinfo-form" autocomplete="off" style="padding-left: 14%;">
  <table>  
<?php
 $inst_name = $_SESSION['inst_name'];
 $student_name = $_SESSION['student_name'];
 $dob = $_SESSION['dob'];
 $reg_no = $_SESSION['reg_no'];
 $query = query("SELECT * FROM studregistrations WHERE inst_name = '{$inst_name}' AND reg_no = '{$reg_no}' AND student_name = '{$student_name}' AND dob = '{$dob}'");
  confirm($query);
  while ($row = fetch_array($query)) {
   $myname = $row['student_name'];
   $mydob = $row['dob'];
   $gender = $row['gender'];
   $nationality = $row['nationality'];
   $first_child = $row['first_child'];
   $last_school = $row['last_school'];
   $last_school_add = $row['last_school_add'];
   $last_apj_school = $row['last_apj_school'];
   $last_apj_school_name = $row['last_apj_school_name'];
   $last_apj_school_class = $row['last_apj_school_class'];
   $last_apj_school_admno = $row['last_apj_school_admno'];
   $other_apj_applied = $row['other_apj_applied'];
   $other_apj_applied_name = $row['other_apj_applied_name'];
   ?> 
    <td style="padding-right: 20px">
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
 <input class="mdl-textfield__input" id="nameofstu" name="student_name" type="text" value="<?php echo $myname;?>" readonly/>
 <label class="mdl-textfield__label" for="nameofstu">Name of Student</label>
 </div>
   <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
 <input class="mdl-textfield__input" id="dob2" name="dob2" value="<?php echo $mydob;?>" placeholder="DD-MM-YYYY" readonly>
 <label class="mdl-textfield__label" for="dob">date of Birth</label>
 <i class="material-icons mdl-textfield__label__icon" id="cal2" style="position: absolute; right: 0; top: 20px;">date_range</i>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <select class="mdl-textfield__input" id="gender" name="gender" required>
      <option value="<?php echo $gender;?>"><?php echo $gender;?></option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      </select>
    <label class="mdl-textfield__label" for="gender"><span class="imp">*</span>Gender</label>
  </div>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
     <input class="mdl-textfield__input" type="text" id="nationality" name="nationality" value="<?php echo $nationality;?>" />
     <label class="mdl-textfield__label" for="nationality"><span class="imp">*</span>Nationality</label>
       </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <span class="imp">*</span>First Born Child?
   <div style="display: inline; padding-left: 25px;">    
  <label class = "mdl-radio mdl-js-radio" for = "option1">
    <input type = "radio" id = "option1" name = "firstborn" value="Yes"
     class = "mdl-radio__button" <?php echo ($first_child=='Yes')?'checked':'' ?> required>
    <span class = "mdl-radio__label">Yes</span>
  </label>
          
  <label class = "mdl-radio mdl-js-radio mdl-js-ripple-effect" 
                  for = "option2">
     <input type = "radio" id = "option2" name = "firstborn" value="No"     
  class = "mdl-radio__button" <?php echo ($first_child=='No')?'checked':'' ?>>
    <span class = "mdl-radio__label">No</span>
  </label>
  </div>      
 </div>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <span class="imp">*</span>Any other APEEJAY School Applied to (or applying to)?
   <div style="display: inline; padding-left: 25px;">    
  <label class = "mdl-radio mdl-js-radio" for = "option01">
    <input type = "radio" id = "option01" name = "other_apj_applied" value="Yes"
     class = "mdl-radio__button" <?php echo ($other_apj_applied=='Yes')?'checked':'' ?> required>
    <span class = "mdl-radio__label">Yes</span>
  </label>
          
  <label class = "mdl-radio mdl-js-radio mdl-js-ripple-effect" 
                  for = "option02">
     <input type = "radio" id = "option02" name = "other_apj_applied" value="No"     
  class = "mdl-radio__button" <?php echo ($other_apj_applied=='No')?'checked':'' ?>>
    <span class = "mdl-radio__label">No</span>
  </label>
  </div>      
 </div>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="otherschool">
    <select class="mdl-textfield__input" id="other_apj_applied_name" name="other_apj_applied_name">
      <option value="<?php echo $other_apj_applied_name;?>"><?php echo $other_apj_applied_name;?></option>
      <option value="Apeejay School Saket">Apeejay School Saket</option>
      <option value="Apeejay School Panchsheel Park">Apeejay School Panchsheel Park</option>
      <option value="Apeejay School Pitampura">Apeejay School Pitampura</option>
      </select>
    <label class="mdl-textfield__label" for="gender">select the other Apeejay School applied to (or applying to) for admission.</label>
  </div>
</td>
<td style="border-left: solid 1px #CDCDCD;">
  <div class="mdl-card__supporting-text">
   <h6><strong>Last School Attended</strong></h6>
   <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <select class="mdl-textfield__input" id="prevschoolname" name="last_school_add">
      <option value="<?php echo $last_school_add;?>"><?php echo $last_school_add;?></option>
      <option value="none">None</option>
      <option value="play/pre school of apeejay education society">Play/Pre School Of Apeejay Education Society</option>
      <option value="other play school">Other Play School</option>
      </select>
    <label class="mdl-textfield__label" for="prevschoolname">Play/Pre School last attended</label>
  </div>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label has-placeholder">
  <textarea class="mdl-textfield__input" type="text" id="prevschooladdr" name="last_school" rows= "2"  placeholder="" value="<?php echo $last_school;?>" maxlength="250">
    <?php echo $last_school;?>
  </textarea>
  <label class="mdl-textfield__label" for="prevschooladdr">Play/Pre School’s Name,  Address and Duration of study of child</label>
</div>
 
   <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
     Is child in a lower class at any other APEEJAY school
   <div style="display: inline; padding-left: 25px;">    
  <label class = "mdl-radio mdl-js-radio" for = "option3" >
    <input type = "radio" id = "option3" name = "ifapeejay" value="No"
    class = "mdl-radio__button" <?php echo ($last_apj_school=='No')?'checked':'' ?>>
    <span class = "mdl-radio__label">No</span>
  </label>
          
  <label class = "mdl-radio mdl-js-radio mdl-js-ripple-effect" 
                  for = "option4">
     <input type = "radio" id = "option4" name = "ifapeejay" 
  class = "mdl-radio__button" value="Yes" <?php echo ($last_apj_school=='Yes')?'checked':'' ?>>
    <span class = "mdl-radio__label">Yes</span>
  </label>
  </div>      
 </div>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="schoolname">
 <input class="mdl-textfield__input" id="schoolname1" name="last_apj_school_name" type="text" value="<?php echo $last_apj_school_name ?>" />
 <label class="mdl-textfield__label" for="schoolname1">School Name</label>
 </div>
 <table id="otherchild">
  <td>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100px;">
    <select class="mdl-textfield__input" id="class" name="last_apj_school_class">
      <option value="<?php echo $last_apj_school_class ?>"><?php echo $last_apj_school_class ?></option>
      <option value="PRE">PRE</option>
      <option value="NUR">NUR</option>
      <option value="LKG">LKG</option>
      <option value="UKG">UKG</option>
      <option value="KG">KG</option>
      <option value="I">I</option>
      <option value="II">II</option>
      <option value="III">III</option>
      <option value="IV">IV</option>
      <option value="V">V</option>
      <option value="VI">VI</option>
      <option value="VII">VII</option>
      <option value="VIII">VIII</option>
      <option value="IX">IX</option>
      <option value="X">X</option>
      <option value="XI">XI</option>
      <option value="XII">XII</option>
      </select>
    <label class="mdl-textfield__label" for="class">Class</label>
  </div>  
 </td>
 <td style="padding-left: 2%">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: inherit;">
 <input class="mdl-textfield__input" id="admno" name="last_apj_school_admno" type="text" value="<?php echo $last_apj_school_admno ?>"/> <?php } ?>
 <label class="mdl-textfield__label" for="admno">AdmNo.</label>
 </div> 
 </td>
</table>
 

</td>
</table>
  
  </div> 
    </div>
   
    </div>

   <!-- <input type="submit" name="submit" id="btn-login" class="btn btn-default" value="Apply Now"> -->
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
