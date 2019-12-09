$("#stuname_r").blur(function (){
    if( !this.value ){
        $(this).prop('required', true);
        $(this).parent().addClass('is-invalid');
    }
});

$("#stuname_a").blur(function (){
    if( !this.value ){
        $(this).prop('required', true);
        $(this).parent().addClass('is-invalid');
    }
});

$("#stuname_d").blur(function (){
    if( !this.value ){
        $(this).prop('required', true);
        $(this).parent().addClass('is-invalid');
    }
});

$("#schoolname_r").blur(function (){
    if( !this.value ){
        $(this).prop('required', true);
        $(this).parent().addClass('is-invalid');
    }
});

$("#schoolname_a").blur(function (){
    if( !this.value ){
        $(this).prop('required', true);
        $(this).parent().addClass('is-invalid');
    }
});

$("#schoolname_d").blur(function (){
    if( !this.value ){
        $(this).prop('required', true);
        $(this).parent().addClass('is-invalid');
    }
});


$("#email_r").blur(function (){
    if( !this.value ){
        $(this).prop('required', true);
        $(this).parent().addClass('is-invalid');
    }
});

$("#email_a").blur(function (){
    if( !this.value ){
        $(this).prop('required', true);
        $(this).parent().addClass('is-invalid');
    }
});

$("#email_d").blur(function (){
    if( !this.value ){
        $(this).prop('required', true);
        $(this).parent().addClass('is-invalid');
    }
});

$("#mobile_r").blur(function (){
    if( !this.value ){
        $(this).prop('required', true);
        $(this).parent().addClass('is-invalid');
    }
});

$("#dob_r").blur(function (){
    if( !this.value ){
        $(this).prop('required', true);
        $(this).parent().addClass('is-invalid');
    }
});

$("#dob_a").blur(function (){
    if( !this.value ){
        $(this).prop('required', true);
        $(this).parent().addClass('is-invalid');
    }
});

$("#dob_d").blur(function (){
    if( !this.value ){
        $(this).prop('required', true);
        $(this).parent().addClass('is-invalid');
    }
});


$("#regno").blur(function (){
    if( !this.value ){
        $(this).prop('required', true);
        $(this).parent().addClass('is-invalid');
    }
});
$("#regno_d").blur(function (){
    if( !this.value ){
        $(this).prop('required', true);
        $(this).parent().addClass('is-invalid');
    }
});


$(".mdl-button[type='submit']").click(function (event){
    $(this).siblings("#stuname_r").addClass('is-invalid');
    $(this).siblings(".mdl-textfield").children("#stuname_r").prop('required', true);
    $(this).siblings("#stuname_a").addClass('is-invalid');
    $(this).siblings(".mdl-textfield").children("#stuname_a").prop('required', true);
    $(this).siblings("#stuname_d").addClass('is-invalid');
    $(this).siblings(".mdl-textfield").children("#stuname_d").prop('required', true);
    
    $(this).siblings("#schoolname_r").addClass('is-invalid');
    $(this).siblings(".mdl-textfield").children("#schoolname_r").prop('required', true);
    $(this).siblings("#schoolname_a").addClass('is-invalid');
    $(this).siblings(".mdl-textfield").children("#schoolname_a").prop('required', true);
     $(this).siblings("#schoolname_d").addClass('is-invalid');
    $(this).siblings(".mdl-textfield").children("#schoolname_d").prop('required', true);
    
    $(this).siblings("#email_r").addClass('is-invalid');
    $(this).siblings(".mdl-textfield").children("#email_r").prop('required', true);
    $(this).siblings("#email_a").addClass('is-invalid');
    $(this).siblings(".mdl-textfield").children("#email_a").prop('required', true);
    $(this).siblings("#email_d").addClass('is-invalid');
    $(this).siblings(".mdl-textfield").children("#email_d").prop('required', true);
    
    $(this).siblings("#mobile_r").addClass('is-invalid');
    $(this).siblings(".mdl-textfield").children("#mobile_r").prop('required', true);
    
    $(this).siblings("#regno").addClass('is-invalid');
    $(this).siblings(".mdl-textfield").children("#regno").prop('required', true);
    $(this).siblings("#regno_d").addClass('is-invalid');
    $(this).siblings(".mdl-textfield").children("#regno_d").prop('required', true);
    
    $(this).siblings("#dob_r").addClass('is-invalid');
    $(this).siblings(".mdl-textfield").children("#dob_r").prop('required', true);
    $(this).siblings("#dob_a").addClass('is-invalid');
    $(this).siblings(".mdl-textfield").children("#dob_a").prop('required', true);
    $(this).siblings("#dob_d").addClass('is-invalid');
    $(this).siblings(".mdl-textfield").children("#dob_d").prop('required', true);
   
});

