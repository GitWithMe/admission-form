<?php require_once("../resources/config.php") ?>
<?php update_other_details(); login_check_student();?>
<?php forward_other1();
 $inst_name = $_SESSION['inst_name'];
 $student_name = $_SESSION['student_name'];
 $dob = $_SESSION['dob'];
 $reg_no = $_SESSION['reg_no'];
 ?>
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
          <a class="mdl-layout__tab">Family Details</a>
          <a class="mdl-layout__tab is-active">Other Details</a>
          <a href="logout.php" class="mdl-layout__tab">Logout</a>
       </div>
      </header>
      <main class="mdl-layout__content">
    <div class="mdl-layout__tab-panel is-active">
 <form role="form" action="" method="post" id="other-form" autocomplete="off">
 <div class="mdl-grid align-items" style="padding-left:400px">   
 <div id="candidate-container" class="demo-card-wide mdl-card mdl-shadow--16dp" style="width: 600px;">
  <div class="mdl-card__supporting-text">
<div id="card-heading">Other Information</div>
<div>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">   
Is the Child a ward of Confirmed Teacher of the same school? 
   <div>    
  <label class = "mdl-radio mdl-js-radio" for = "option21" >
    <input type = "radio" id = "option21" name = "isteacher" value="No"
    class = "mdl-radio__button" checked>
    <span class = "mdl-radio__label">No</span>
  </label>
          
  <label class = "mdl-radio mdl-js-radio mdl-js-ripple-effect" 
                  for = "option22">
     <input type = "radio" id = "option22" name = "isteacher" 
                 class = "mdl-radio__button" value="Yes">
    <span class = "mdl-radio__label">Yes</span>
  </label>
  </div>      
 </div>

 </div>
 
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
 Will the child be availing the transport facilitated by the school?
 <div>    
  <label class = "mdl-radio mdl-js-radio" for = "option03" >
    <input type = "radio" id = "option03" name = "transport_r" value="No"
                     class = "mdl-radio__button" checked>
    <span class = "mdl-radio__label">No</span>
  </label>
          
  <label class = "mdl-radio mdl-js-radio mdl-js-ripple-effect" 
                  for = "option04">
     <input type = "radio" id = "option04" name = "transport_r" 
                 class = "mdl-radio__button" value="Yes">
    <span class = "mdl-radio__label">Yes</span>
  </label>
  </div>      
 </div>
 <div>
   <label>
     <span class="imp">*</span><small>For the list of STOPS(PICKUP POINTS) of the transport facilitated by the school,   
     <?php if($inst_name=='APEEJAY SCHOOL SAKET') {?>
      <a href="SK_Route.htm" target="_blank">CLICK HERE</a></small>
    <?php }?>
    <?php if($inst_name=='APEEJAY SCHOOL PANCHSHEEL PARK') {?>
      <a href="SS_Route.htm" target="_blank">CLICK HERE</a></small>
    <?php }?>
    <?php if($inst_name=='APEEJAY SCHOOL PITAMPURA') {?>
      <a href="PP_Route.htm" target="_blank">CLICK HERE</a></small>
    <?php }?>
   </label>
 </div>
 <div id="route">
  <label>Choose the S.No. of the stop from where the child will be boarding and deboarding the transport facilitated by the school</label>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
  
    <select class="mdl-textfield__input" id="transport_r_no" name="transport_r_no">
      <option ></option>
      <option value="r1">r1</option>
      <option value="r2">r2</option>
      <option value="r3">r3</option>
      <option value="r4">r4</option>
      <option value="r5">r5</option>
      <option value="r6">r6</option>
      <option value="r7">r7</option>
      <option value="r8">r8</option>
      <option value="r9">r9</option>
      <option value="r10">r10</option>
      </select>
    <label class="mdl-textfield__label" for="transport_r_no"><span class="imp">*</span>S.No. of the stop for child's pickup</label>
  </div>
</div>


<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
 Does the child reside in an area where the transport facilitated by the school is available?
 <div>    
  <label class = "mdl-radio mdl-js-radio" for = "option05" >
    <input type = "radio" id = "option05" name = "transport_a" value="No"
                     class = "mdl-radio__button" checked>
    <span class = "mdl-radio__label">No</span>
  </label>
          
  <label class = "mdl-radio mdl-js-radio mdl-js-ripple-effect" 
                  for = "option06">
     <input type = "radio" id = "option06" name = "transport_a" 
                 class = "mdl-radio__button" value="Yes">
    <span class = "mdl-radio__label">Yes</span>
  </label>
  </div>      
 </div>
<div>
   <label>
     <span class="imp">*</span><small>For the list of AREAS where the transport facilitated by the school is available,   
     <?php if($inst_name=='APEEJAY SCHOOL SAKET') {?>
      <a href="SK_Area.htm" target="_blank">CLICK HERE</a></small>
    <?php }?>
    <?php if($inst_name=='APEEJAY SCHOOL PANCHSHEEL PARK') {?>
      <a href="SS_Area.htm" target="_blank">CLICK HERE</a></small>
    <?php }?>
    <?php if($inst_name=='APEEJAY SCHOOL PITAMPURA') {?>
      <a href="PP_Area.htm" target="_blank">CLICK HERE</a></small>
    <?php }?>
   </label>
 </div>
 <div id="area">  
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <select class="mdl-textfield__input" id="transport_a_no" name="transport_a_no">
      <option ></option>
      <option value="a1">a1</option>
      <option value="a2">a2</option>
      <option value="a3">a3</option>
      <option value="a4">a4</option>
      <option value="a5">a5</option>
      <option value="a6">a6</option>
      <option value="a7">a7</option>
      <option value="a8">a8</option>
      <option value="a9">a9</option>
      <option value="a10">a10</option>
      </select>
    <label class="mdl-textfield__label" for="transport_a_no"><span class="imp">*</span>S.No. of the area of child's residence</label>
  </div>
</div>


 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">   
Is the child's parent / grandparent a qualified Medical Doctor / Govt. Civil Servant / Armed Forces (CO) /
Martyr / Diplomatic Corps. ? 
   <div>    
  <label class = "mdl-radio mdl-js-radio" for = "option25" >
    <input type = "radio" id = "option25" name = "isgrandparent" value="No"
                     class = "mdl-radio__button" checked>
    <span class = "mdl-radio__label">No</span>
  </label>
          
  <label class = "mdl-radio mdl-js-radio mdl-js-ripple-effect" 
                  for = "option26">
     <input type = "radio" id = "option26" name = "isgrandparent" 
                 class = "mdl-radio__button" value="Yes">
    <span class = "mdl-radio__label">Yes</span>
  </label>
  </div>      
 </div>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">   
Is the child's parent/grandparent a recognised State/National/International Awardee?
<small>(conferred by a Government/International Body)?</small>
   <div>    
  <label class = "mdl-radio mdl-js-radio" for = "option27" >
    <input type = "radio" id = "option27" name = "grandparentaward" value="No"
                     class = "mdl-radio__button" checked>
    <span class = "mdl-radio__label">No</span>
  </label>
          
  <label class = "mdl-radio mdl-js-radio mdl-js-ripple-effect" 
                  for = "option28">
     <input type = "radio" id = "option28" name = "grandparentaward" 
                 class = "mdl-radio__button" value="Yes">
    <span class = "mdl-radio__label">Yes</span>
  </label>
  </div>      
 </div>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label has-placeholder" id="awarddetail">
  <textarea class="mdl-textfield__input" type="text" id="awarddetail1" name="n_awardee_details" placeholder="" rows="2" style="width: 300px;" maxlength="200"></textarea>
  <label class="mdl-textfield__label" for="awarddetail1"><span class="imp">*</span>
  Specify the details of the Award</label>
</div>

  </div>
    </div>
   
    </div>

 <div class="mdl-grid align-items" style="padding-left: 5%">   
 <div id="candidate-container" class="demo-card-wide mdl-card mdl-shadow--16dp" style="width: 1200px; padding-left: 5%">
  <div class="mdl-card__supporting-text">
<div id="card-heading">Optional Information of Grandparents</div>
<div>
 <table>
   <tr>
     <td>
  <label class = "mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect"              for = "matgrandpa">
  <input type = "checkbox" id = "matgrandpa" class = "mdl-checkbox__input">
  <span class = "mdl-checkbox__label">Maternal Grandfather's Details</span>
 </label>  
     </td>
    <td style="padding-left: 5%;">
  <label class = "mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect"              for = "matgrandma">
  <input type = "checkbox" id = "matgrandma" class = "mdl-checkbox__input">
  <span class = "mdl-checkbox__label">Maternal Grandmother's Details</span>
 </label>  
     </td>
   <td style="padding-left: 5%;">
  <label class = "mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect"              for = "patgrandpa">
  <input type = "checkbox" id = "patgrandpa" class = "mdl-checkbox__input">
  <span class = "mdl-checkbox__label">Paternal Grandfather's Details</span>
 </label>  
     </td>
    <td style="padding-left: 5%;">
  <label class = "mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect"              for = "patgrandma">
  <input type = "checkbox" id = "patgrandma" class = "mdl-checkbox__input">
  <span class = "mdl-checkbox__label">Paternal Grandmother's Details</span>
 </label>  
     </td>       
   </tr>
 </table> 
</div>
</div>
 </div>
</div>

<!-- Maternal Grandfather's details START -->
<div class="mdl-grid align-items" style="padding-left: 5%" id="matgrandpacard">   
 <div id="candidate-container" class="demo-card-wide mdl-card mdl-shadow--16dp" style="width: 1200px; padding-left: 5%">
  <div class="mdl-card__supporting-text">
<div id="card-heading">Maternal Grandfather's details</div>
<table>
  <tr>
    <td>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">   
Living? 
  <div>    
  <label class = "mdl-radio mdl-js-radio" for = "option29" >
    <input type = "radio" id = "option29" name = "matgrandpaliv" value="No"
                     class = "mdl-radio__button">
    <span class = "mdl-radio__label">No</span>
  </label>
          
  <label class = "mdl-radio mdl-js-radio mdl-js-ripple-effect" 
                  for = "option30">
     <input type = "radio" id = "option30" name = "matgrandpaliv" 
                 class = "mdl-radio__button" value="Yes">
    <span class = "mdl-radio__label">Yes</span>
  </label>
  </div>
</div>
</td>
<td>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
 <input class="mdl-textfield__input" id="matgrandpaname" name="m_gf_name" type="text">
 <label class="mdl-textfield__label" for="matgrandpaname">Name</label>
 </div>
</td>
<td style="padding-left: 7%">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label has-placeholder">
  <textarea class="mdl-textfield__input" type="text" id="matgrandpaachieve" rows="2" placeholder="" style="width: 300px;" name="m_gf_details" maxlength="150"></textarea>
  <label class="mdl-textfield__label" for="matgrandpaachieve"> 
  Grandfather's details/achievements</label>
</div>
</td>
</tr>
</table>
</div>
</div>
</div>

<!-- Maternal Grandfather's details END -->

<!-- Maternal Grandmother's details START -->
<div class="mdl-grid align-items" style="padding-left: 5%" id="matgrandmacard" >   
 <div id="candidate-container" class="demo-card-wide mdl-card mdl-shadow--16dp" style="width: 1200px; padding-left: 5%">
  <div class="mdl-card__supporting-text">
<div id="card-heading">Maternal Grandmother's details</div>
<table>
  <tr>
    <td>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">   
Living? 
  <div>    
  <label class = "mdl-radio mdl-js-radio" for = "option31" >
    <input type = "radio" id = "option31" name = "matgrandmaliv" value="No"
                     class = "mdl-radio__button">
    <span class = "mdl-radio__label">No</span>
  </label>
          
  <label class = "mdl-radio mdl-js-radio mdl-js-ripple-effect" 
                  for = "option32">
     <input type = "radio" id = "option32" name = "matgrandmaliv" 
                 class = "mdl-radio__button" value="Yes">
    <span class = "mdl-radio__label">Yes</span>
  </label>
  </div>
</div>
</td>
<td>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
 <input class="mdl-textfield__input" id="matgrandmaname" name="m_gm_name" type="text" />
 <label class="mdl-textfield__label" for="matgrandmaname">Name</label>
 </div>
</td>
<td style="padding-left: 7%">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label has-placeholder">
  <textarea class="mdl-textfield__input" type="text" id="matgrandmaachieve" placeholder="" rows="2" style="width: 300px;" name="m_gm_details" maxlength="150"></textarea>
  <label class="mdl-textfield__label" for="matgrandmaachieve"> 
  Grandmother's details/achievements</label>
</div>
</td>
</tr>
</table>
</div>
</div>
</div>
<!-- Maternal Grandmother's details END -->

<!-- Paternal Grandfather's details START -->
<div class="mdl-grid align-items" style="padding-left: 5%" id="patgrandpacard">   
 <div id="candidate-container" class="demo-card-wide mdl-card mdl-shadow--16dp" style="width: 1200px; padding-left: 5%">
  <div class="mdl-card__supporting-text">
<div id="card-heading">Paternal Grandfather's details</div>
<table>
  <tr>
    <td>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">   
Living? 
  <div>    
  <label class = "mdl-radio mdl-js-radio" for = "option33" >
    <input type = "radio" id = "option33" name = "patgrandpaliv" value="No"
                     class = "mdl-radio__button">
    <span class = "mdl-radio__label">No</span>
  </label>
          
  <label class = "mdl-radio mdl-js-radio mdl-js-ripple-effect" 
                  for = "option34">
     <input type = "radio" id = "option34" name = "patgrandpaliv" 
                 class = "mdl-radio__button" value="Yes">
    <span class = "mdl-radio__label">Yes</span>
  </label>
  </div>
</div>
</td>
<td>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
 <input class="mdl-textfield__input" id="patgrandpaname" name="p_gf_name" type="text" />
 <label class="mdl-textfield__label" for="patgrandpaname">Name</label>
 </div>
</td>
<td style="padding-left: 7%">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label has-placeholder">
  <textarea class="mdl-textfield__input" type="text" id="patgrandpaachieve" placeholder="" rows="2" style="width: 300px;" name="p_gf_details" maxlength="150"></textarea>
  <label class="mdl-textfield__label" for="patgrandpaachieve"> 
  Grandfather's details/achievements</label>
</div>
</td>
</tr>
</table>
</div>
</div>
</div>

<!-- Paternal Grandfather's details END -->
<!-- Paternal Grandmother's details START -->
<div class="mdl-grid align-items" style="padding-left: 5%" id="patgrandmacard">   
 <div id="candidate-container" class="demo-card-wide mdl-card mdl-shadow--16dp" style="width: 1200px; padding-left: 5%">
  <div class="mdl-card__supporting-text">
<div id="card-heading">Paternal Grandmother's details</div>
<table>
  <tr>
    <td>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">   
Living? 
  <div>    
  <label class = "mdl-radio mdl-js-radio" for = "option35" >
    <input type = "radio" id = "option35" name = "patgrandmaliv" value="No"
                     class = "mdl-radio__button">
    <span class = "mdl-radio__label">No</span>
  </label>
          
  <label class = "mdl-radio mdl-js-radio mdl-js-ripple-effect" 
                  for = "option36">
     <input type = "radio" id = "option36" name = "patgrandmaliv" 
                 class = "mdl-radio__button" value="Yes">
    <span class = "mdl-radio__label">Yes</span>
  </label>
  </div>
</div>
</td>
<td>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
 <input class="mdl-textfield__input" id="patgrandmaname" name="p_gm_name" type="text" />
 <label class="mdl-textfield__label" for="patgrandmaname">Name</label>
 </div>
</td>
<td style="padding-left: 7%">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label has-placeholder">
  <textarea class="mdl-textfield__input" type="text" id="patgrandmaachieve" placeholder="" rows="2" style="width: 300px;" name="p_gm_details" maxlength="150"></textarea>
  <label class="mdl-textfield__label" for="patgrandmaachieve"> 
  Grandmother's details/achievements</label>
</div>
</td>
</tr>
</table>
</div>
</div>
</div>
<!-- Paternal Grandmother's details END -->
<button form="other-form" formaction="family_details.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">Back</button>
<div id="center">
 <button type="submit" name="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">Submit</button>
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
