//student_details.php
$(function(){
 $('#otherchild').hide();
 $('#schoolname').hide();
 $("input[name$='ifapeejay']").click(function() {
var x = $(this).val();
  if(x=='No'){
  	$('#otherchild').hide();
    $('#schoolname').hide();
    $('#schoolname1').val('');
    $('#class').val('');
    $('#admno').val('');
  }
  else if(x=='Yes'){
  	$('#otherchild').show();
  	$('#schoolname').show();
    }
    else
    	return;
  });
});

$(function(){
 $('#otherschool').hide();
 $("input[name$='other_apj_applied']").click(function() {
var x = $(this).val();
  if(x=='No'){
    $('#otherschool').hide();
    $('#other_apj_applied_name').val('');
    $('#other_apj_applied_name').prop('required', false);
  }
  else if(x=='Yes'){
   $('#otherschool').show();
   $('#other_apj_applied_name').prop('required', true);
    }
    else
      return;
  });
});

//Alumni_details.php
$(function(){
 $('#ifsibling1').prop('required', true);
 $('#numnamesib1').hide();
 $('#admnosibling1').hide();
 $('#classectionsib1').hide();
 $('#classsib1').prop('required', false);
 $('#sectionsib1').prop('required', false);
 $('#namesibling1').prop('required', false);
 $("input[name$='ifsibling1']").click(function() {
var x = $(this).val();
  if(x=='No'){
 $('#numnamesib1').hide();
 $('#admnosibling1').hide();
 $('#classectionsib1').hide();
 $('#classsib1').prop('required', false);
 $('#sectionsib1').prop('required', false);
 $('#namesibling3').prop('required', false);
 $('#totalsibling1').val('');
 $('#namesibling3').val('');
 $('#admnosibling3').val('');
 $('#classsib1').val('');
 $('#sectionsib1').val('');
  }
  else if(x=='Yes'){
 $('#numnamesib1').show();
 $('#admnosibling1').show();
 $('#classectionsib1').show();
 $('#classsib1').prop('required', true);
 $('#sectionsib1').prop('required', true);
 $('#namesibling3').prop('required', true);
    }
    else
    	return;
  });
});

$(function(){
 $('#ifsibling1').prop('required', true);
 $('#numnamesib2').hide();
 $('#admnosibling2').hide();
 $('#classectionsib2').hide();
 $('#classsib2').prop('required', false);
 $('#sectionsib2').prop('required', false);
 $('#namesibling4').prop('required', false);
 $("input[name$='ifsibling2']").click(function() {
var x = $(this).val();
  if(x=='No'){
 $('#numnamesib2').hide();
 $('#admnosibling2').hide();
 $('#classectionsib2').hide();
 $('#classsib2').prop('required', false);
 $('#sectionsib2').prop('required', false);
 $('#namesibling2').prop('required', false);
 $('#totalsibling2').val('');
 $('#namesibling4').val('');
 $('#admnosibling4').val('');
 $('#classsib2').val('');
 $('#sectionsib2').val('');
  }
  else if(x=='Yes'){
 $('#numnamesib2').show();
 $('#admnosibling2').show();
 $('#classectionsib2').show();
 $('#classsib2').prop('required', true);
 $('#sectionsib2').prop('required', true);
 $('#namesibling2').prop('required', true);
    }
    else
    	return;
  });
});

$(function(){
 $('#whoalumni').hide();
 $("input[name$='isalumni1']").click(function() {
var x = $(this).val();
  if(x=='No'){
   if ($("input[name$='whoalumni1']").is(':checked'))
   $("input[name$='whoalumni1']").prop('checked', false);
    $('#fatherjoin').prop('required', false);
    $('#motherjoin').prop('required', false);
    $('#alumni-card').hide();
  	$('#whoalumni').hide();
    $('#whoalumni').prop('required', false);
    $('#motheradmno').val('');
    $('#motherjoin').val('');
    $('#motherpass').val('');
    $('#fatheralumni').hide();
    $('#fatheradmno').val('');
    $('#fatherjoin').val('');
    $('#fatherpass').val('');
   }
  else if(x=='Yes'){
  	$('#whoalumni').show();
     $('#whoalumni').prop('required', true);
    }
    else
    	return;
  });
});

$(function(){
 $('#alumni-card').hide();
 	$('#fatherjoin').prop('required', false);
  	$('#motherjoin').prop('required', false);
 $("input[name$='whoalumni1']").click(function() {
var x = $(this).val();
  if(x=='Father'){
  	$('#alumni-card').show();
  	$('#motheralumni').hide();
  	$('#fatheralumni').show();
    $('#motheradmno').val('');
    $('#motherjoin').val('');
    $('#motherpass').val('');
  	$('#fatherjoin').prop('required', true);
  	$('#motherjoin').prop('required', false);
   }
  else if(x=='Mother'){
  	$('#alumni-card').show();
  	$('#motheralumni').show();
  	$('#fatheralumni').hide();
    $('#fatheradmno').val('');
    $('#fatherjoin').val('');
    $('#fatherpass').val('');
  	$("#motheralumni").css("border-style", "none");
  	$('#fatherjoin').prop('required', false);
  	$('#motherjoin').prop('required', true);
    }
  else if(x=='Both'){
  	$('#alumni-card').show();
  	$('#motheralumni').show();
  	$('#fatheralumni').show();
  	$('#motherjoin').prop('required', true);
  	$('#fatherjoin').prop('required', true);
    }  
    else
    	return;
  });
});

//family_details.php
$(function(){
 $('#status1').hide();
 $("input[name$='issingle']").click(function() {
var x = $(this).val();
  if(x=='No'){
    $("input[name$='status']").prop('required', false);
    $('#father-details').show();
    $('#mother-details').show();
    $('#status1').hide();
    $('#fathername').prop('required',true);
    $('#mothername').prop('required',true);
    $('#fatherprofession').prop('required',true);
    $('#motherprofession').prop('required',true);
    $('#fathercompname1').prop('required',true);
    $('#mothercompname1').prop('required',true);
    $('#fatherorgtype1').prop('required',true);
    $('#motherorgtype1').prop('required',true);
    $('#fathersector1').prop('required',true);
    $('#mothersector1').prop('required',true);
    $('#fatherdesig1').prop('required',true);
    $('#motherdesig1').prop('required',true);
    $('#fatherofficeaddr1').prop('required',true);
    $('#motherofficeaddr1').prop('required',true);
    $('#fatherofficephone1').prop('required',true);
    $('#motherofficephone1').prop('required',true);
    $('#fatherhomephone').prop('required',true);
    $('#motherhomephone').prop('required',true);
    $('#fathermobile').prop('required',true);
    $('#mothermobile').prop('required',true);
   }
  else if(x=='Yes'){
    $("input[name$='status']").prop('required', true);
    $('#status1').show();
 }
  else
    return;
  });
});

$(function(){
$("input[name$='status']").click(function() {
  var y = $(this).val();
  if(y=='Legally Divorced(Not) Remarried'){
    $('#father-details').show();
    $('#mother-details').show();
    $('#fathername').prop('required',true);
    $('#mothername').prop('required',true);
    $('#fatherprofession').prop('required',true);
    $('#motherprofession').prop('required',true);
    $('#fathercompname1').prop('required',true);
    $('#mothercompname1').prop('required',true);
    $('#fatherorgtype1').prop('required',true);
    $('#motherorgtype1').prop('required',true);
    $('#fathersector1').prop('required',true);
    $('#mothersector1').prop('required',true);
    $('#fatherdesig1').prop('required',true);
    $('#motherdesig1').prop('required',true);
    $('#fatherofficeaddr1').prop('required',true);
    $('#motherofficeaddr1').prop('required',true);
    $('#fatherofficephone1').prop('required',true);
    $('#motherofficephone1').prop('required',true);
    $('#fatherhomephone').prop('required',true);
    $('#motherhomephone').prop('required',true);
    $('#fathermobile').prop('required',true);
    $('#mothermobile').prop('required',true);
    }
  else if(y=='Widow'){
    $('#father-details').hide();
    $('#mother-details').show();
    $('#fathername').val('');
    $('#mothername').prop('required',true);
    $('#fathername').prop('required',false);
 
    $('#fatherprofession').val('');
    $('#father_profession').val('');
    $('#fatherprofession').prop('required',false);
    $('#motherprofession').prop('required',true);

    $('#fathercompname1').val('');
    $('#mothercompname1').prop('required',true);
    $('#fathercompname1').prop('required',false);

    $('#fatherorgtype1').val('');
    $('#f_company_type').val('');
    $('#fatherorgtype1').prop('required',false);
    $('#motherorgtype1').prop('required',true);

    $('#fathersector1').val('');
    $('#mothersector1').prop('required',true);
    $('#fathersector1').prop('required',false);

    $('#fatherdesig1').val('');
    $('#motherdesig1').prop('required',true);
    $('#fatherdesig1').prop('required',false);

    $('#fatherofficeaddr1').val('');
    $('#motherofficeaddr1').prop('required',true);
    $('#fatherofficeaddr1').prop('required',false);

    $('#fatherofficephone1').val('');
    $('#motherofficephone1').prop('required',true);
    $('#fatherofficephone1').prop('required',false);

    $('#fatherhomephone').val('');
    $('#motherhomephone').prop('required',true);
    $('#fatherhomephone').prop('required',false);

    $('#fathermobile').val('');
    $('#fatherachievments').val('');
  }
   else if(y=='Widower'){
    $('#mother-details').hide();
    $('#father-details').show();
    $('#mothername').val('');
    $('#fathername').prop('required',true);
    $('#mothername').prop('required',false);

    $('#motherprofession').val('');
    $('#mother_profession').val('');
    $('#motherprofession').prop('required',false);
    $('#fatherprofession').prop('required',true);

    $('#mothercompname1').val('');
    $('#fathercompname1').prop('required',true);
    $('#mothercompname1').prop('required',false);

    $('#motherorgtype1').val('');
    $('#m_company_type').val('');
    $('#motherorgtype1').prop('required',false);
    $('#fatherorgtype1').prop('required',true);

    $('#mothersector1').val('');
    $('#fathersector1').prop('required',true);
    $('#mothersector1').prop('required',false);

    $('#motherdesig1').val('');
    $('#fatherdesig1').prop('required',true);
    $('#motherdesig1').prop('required',false);

    $('#motherofficeaddr1').val('');
    $('#fatherofficeaddr1').prop('required',true);
    $('#motherofficeaddr1').prop('required',false);

    $('#motherofficephone1').val('');
    $('#fatherofficephone1').prop('required',true);
    $('#motherofficephone1').prop('required',false);

    $('#motherhomephone').val('');
    $('#fatherhomephone').prop('required',true);
    $('#motherhomephone').prop('required',false);

    $('#mothermobile').val('');
    $('#motheremail').val('');
    $('#motherachievments').val('');
   }
   else
     return;
  });
});

$(function(){
 if ($_SESSION['sps'] == 'Widow') {
  $('#father-details').hide();
}
else if ($_SESSION['sps'] == 'Widower') {
  $('#mother-details').hide();
}
});

$(function(){
 $('#fatherother').hide();
 $('#fatherprofession').change(function() {
    var y = $(this).val();
    if(y=='Unemployed' || y=='Housewife (Homemaker)'){
    $('#fathercompname').hide();
     $('#fathercompname1').prop('required', false);
     $('#fathercompname1').val('');
    $('#fatherorgtype').hide();
    $('#fatherorgtype1').prop('required', false);
    $('#fatherorgtype1').val('');
    $('#fathersector').hide();
    $('#fathersector1').prop('required', false);
    $('#fathersector1').val('');
    $('#fatherdesig').hide();
    $('#fatherdesig1').prop('required', false);
    $('#fatherdesig1').val('');
    $('#fatherofficeaddr').hide();
    $('#fatherofficeaddr1').prop('required', false);
    $('#fatherofficeaddr1').val('');
    $('#fatherofficephone').hide();
    $('#fatherofficephone1').prop('required', false);
    $('#fatherofficephone1').val('');
    }
  else{
    $('#fathercompname').show();
    $('#fathercompname1').prop('required', true);
    $('#fatherorgtype').show();
    $('#fatherorgtype1').prop('required', true);
    $('#fathersector').show();
    $('#fathersector1').prop('required', true);
    $('#fatherdesig').show();
    $('#fatherdesig1').prop('required', true);
    $('#fatherofficeaddr').show();
    $('#fatherofficeaddr1').prop('required', true);
    $('#fatherofficephone').show();
    $('#fatherofficephone1').prop('required', true); 
  }
   
});
});

$(function(){
 $('#fathersector1').change(function() {
    var y = $(this).val();
    if(y=='Any other sector(Specify)'){
    $('#fatherother').show();
  }
  else{
    $('#fatherother').hide();
  }
   
});
});

$(function(){
 $('#motherother').hide();
 $('#motherprofession').change(function() {
    var y = $(this).val();
    if(y=='Unemployed' || y=='Housewife (Homemaker)'){
    $('#mothercompname').hide();
    $('#mothercompname1').prop('required', false);
    $('#mothercompname1').val('');
    $('#motherorgtype').hide();
    $('#motherorgtype1').prop('required', false);
    $('#motherorgtype1').val('');
    $('#mothersector').hide();
    $('#mothersector1').prop('required', false);
    $('#mothersector1').val('');
    $('#motherdesig').hide();
    $('#motherdesig1').prop('required', false);
    $('#motherdesig1').val('');
    $('#motherofficeaddr').hide();
    $('#motherofficeaddr1').prop('required', false);
    $('#motherofficeaddr1').val('');
    $('#motherofficephone').hide();
    $('#motherofficephone1').prop('required', false);
    $('#motherofficephone1').val('');
    }
  else{
    $('#mothercompname').show();
    $('#mothercompname1').prop('required', true);
    $('#motherorgtype').show();
    $('#motherorgtype1').prop('required', true);
    $('#mothersector').show();
    $('#mothersector1').prop('required', true);
    $('#motherdesig').show();
    $('#motherdesig1').prop('required', true);
    $('#motherofficeaddr').show();
    $('#motherofficeaddr1').prop('required', true);
    $('#motherofficephone').show();
    $('#motherofficephone1').prop('required', true); 
  }
   
});
});

$(function(){
 $('#mothersector1').change(function() {
    var y = $(this).val();
    if(y=='Any other sector(Specify)'){
    $('#motherother').show();
  }
  else{
    $('#motherother').hide();
  }
   
});
});

$(function(){
 $('#specialdetail').hide();
 $("input[name$='isspecial']").click(function() {
var x = $(this).val();
  if(x=='No'){
    $('#isspecial').val('');
    $('#specialnature').val('');
    $('#specialdetail').hide();
    $('#specialreason').prop('required', false);
    $('#specialnature').prop('required', false);
   }
  else if(x=='Yes'){
    $('#specialdetail').show();
    $('#specialreason').prop('required', true);
    $('#specialnature').prop('required', true);
    }
    else
      return;
  });
});

//other_details.php

$(function(){
 $('#awarddetail').hide();
 $("input[name$='grandparentaward']").click(function() {
var x = $(this).val();
  if(x=='No'){
    $('#awarddetail').hide();
    $('#awarddetail1').val('');
    $('#awarddetail1').prop('required', false);
  }
  else if(x=='Yes'){
    $('#awarddetail').show();
    $('#awarddetail1').prop('required', true);
    }
    else
      return;
  });
});

$(function(){
 $('#route').hide();
 $("input[name$='transport_r']").click(function() {
var x = $(this).val();
  if(x=='No'){
    $('#route').hide();
    $('#transport_r_no').val('');
    $('#transport_r_no').prop('required', false);
  }
  else if(x=='Yes'){
    $('#route').show();
    $('#transport_r_no').prop('required', true);
    }
    else
      return;
  });
});

$(function(){
 $('#area').hide();
 $("input[name$='transport_a']").click(function() {
var x = $(this).val();
  if(x=='No'){
    $('#area').hide();
    $('#transport_a_no').val('');
    $('#transport_a_no').prop('required', false);
  }
  else if(x=='Yes'){
    $('#area').show();
    $('#transport_a_no').prop('required', true);
    }
    else
      return;
  });
});

$(function(){
 $('#patgrandpacard').hide();
 $('#patgrandmacard').hide();
 $('#matgrandpacard').hide();
 $('#matgrandmacard').hide();

$("#matgrandpa").click(function() {
if($(this).is(":checked")) {
$("#matgrandpacard").show();
} else {
$("#matgrandpacard").hide();
}
 });    
});

$(function(){
 $('#patgrandpacard').hide();
 $('#patgrandmacard').hide();
 $('#matgrandpacard').hide();
 $('#matgrandmacard').hide();

$("#matgrandma").click(function() {
if($(this).is(":checked")) {
$("#matgrandmacard").show();
} else {
$("#matgrandmacard").hide();
}
 });    
});

$(function(){
 $('#patgrandpacard').hide();
 $('#patgrandmacard').hide();
 $('#matgrandpacard').hide();
 $('#matgrandmacard').hide();

$("#patgrandpa").click(function() {
if($(this).is(":checked")) {
$("#patgrandpacard").show();
} else {
$("#patgrandpacard").hide();
}
 });    
});

$(function(){
 $('#patgrandpacard').hide();
 $('#patgrandmacard').hide();
 $('#matgrandpacard').hide();
 $('#matgrandmacard').hide();

$("#patgrandma").click(function() {
if($(this).is(":checked")) {
$("#patgrandmacard").show();
} else {
$("#patgrandmacard").hide();
}
 });    
});

//Father profession text
$(function() {
  $("#fatherprofession").change(function(){
  var y = $("#fatherprofession option:selected").text();
  $('#father_profession').val(y);
    });
  });

//Father Company Type text
$(function() {
  $("#fatherorgtype1").change(function(){
  var y = $("#fatherorgtype1 option:selected").text();
  $('#f_company_type').val(y);
    });
  });

//mother profession text
$(function() {
  $("#motherprofession").change(function(){
  var y = $("#motherprofession option:selected").text();
  $('#mother_profession').val(y);
    });
  });

//mother Company Type text
$(function() {
  $("#motherorgtype1").change(function(){
  var y = $("#motherorgtype1 option:selected").text();
  $('#m_company_type').val(y);
    });
  });

