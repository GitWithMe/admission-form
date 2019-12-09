<?php require_once("resources/config.php") ?>
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
<link rel="stylesheet" href="css/mdDateTimePicker.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<link rel="stylesheet" href="css/styles.css">
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
        	<img id="tan" src="https://admission.nopaperforms.com/uploads/college/image/5c9b479e2c5b0307572833_ASN.png">
        	<img id = 'ban' src="https://asn.nopaperforms.com/downloads/5ca74737d3b60555652459_soaring.png">
        </div>
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
          <a class="mdl-layout__tab is-active">Student Details</a>
          <a class="mdl-layout__tab">Address/Alumni Details</a>
          <a class="mdl-layout__tab">Family Details</a>
          <a class="mdl-layout__tab">Other Details</a>
          <a href="r_f/logout.php" class="mdl-layout__tab">Logout</a>
       </div>
      </header>
      <main class="mdl-layout__content">
    <div class="mdl-layout__tab-panel is-active">
 
   <div class="mdl-grid align-items" style="padding-left:15%">   
 <div id="candidate-container" class="demo-card-wide mdl-card mdl-shadow--16dp" style="width: 1000px;">
   <div class="mdl-card__supporting-text">
<div id="card-heading">Process Page</div>
<form role="form" action="" method="post" id="stuinfo-form" autocomplete="off" style="padding-left: 14%;">

  
  </div> 
    </div>
   
    </div>
<div id="next">
   <!-- <input type="submit" name="submit" id="btn-login" class="btn btn-default" value="Apply Now"> -->
 <input type="submit" name="submit" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect" value="->">
 
  </div>
  <div id="se">
 <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">Save & Exit</button>
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
<script src="js/moment.min.js"></script>
<script src="js/mdDateTimePicker.js"></script>
<script type="text/javascript" src="js/datetime.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/validate.js"></script>
</body>
</html>
