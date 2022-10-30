!(function (a) {
    "use strict";
    a("html, body");
    var e = a(".pwdMask > .form-control"),
        t = a(".pwd-toggle");
    a(".lnk-toggler").on("click", function (t) {
        t.preventDefault();
        var e = a(this).data("panel");
        a(".ytl-panel.active").removeClass("active"), a(e).addClass("active");
    }),
        a(t).on("click", function (t) {
            t.preventDefault(), a(this).toggleClass("fa-eye-slash fa-eye"), a(this).hasClass("fa-eye") ? a(e).attr("type", "text") : a(e).attr("type", "password");
        }),
        a("#forget-lnk").on("click", function () {
            a(".ytl-login .nav-tabs").find("li").removeClass("active");
        }),
        a(window).on("load", function () {
            a(".square-block").fadeOut(),
                a("#preload-block").fadeOut("slow", function () {
                    a(this).remove();
                });
        });
})(jQuery);


$(document).ready (function (){
    $(function () {

        // firstname validation

        $("#firstname").keypress(function (e) {
            var keyCode = e.keyCode || e.which;

            $("#firstnameError").html("");
 
            //Regex for Valid Characters i.e. Alphabets.
            var regex = /^[A-Za-z]+$/;
 
            //Validate TextBox value against the Regex.
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
                $("#firstnameError").html("Only Alphabets allowed.");
            }
 
            return isValid;
        });

        // lname validation

        $("#lastname").keypress(function (e) {
            var keyCode = e.keyCode || e.which;

            $("#lastnameError").html("");
 
            //Regex for Valid Characters i.e. Alphabets.
            var regex = /^[A-Za-z]+$/;
 
            //Validate TextBox value against the Regex.
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
                $("#lastnameError").html("Only Alphabets allowed.");
            }
 
            return isValid;
        });

        // email validation
        $("#email").change(function (e) {

            var email_val = $("#email").val();

            $("#emailError").html("");
          
            if(email_val){

                //Regex for Valid Characters i.e. email.
                var regex = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
    
                //Validate TextBox value against the Regex.
                var isValid = regex.test(email_val);
                if (!isValid) {
                    $("#emailError").html("Enter valid email id.");
                    $("#email").val("");
                }else{
                    $("#emailError").html("");
                }
            }

 
            return isValid;
        });



        // cemail validation
        $("#cemail").change(function (e) {

            var cemail_val = $("#cemail").val();
            var email_val = $("#email").val();


            $("#cemailError").html("");
          
            if(cemail_val){

                //Regex for Valid Characters i.e. email.
                var regex = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
    
                //Validate TextBox value against the Regex.
                var isValid = regex.test(cemail_val);
                if (!isValid) {
                    $("#cemailError").html("Enter valid email id.");
                    $("#cemail").val("");
                }else{
                    if (cemail_val != email_val) {
                        $("#cemailError").html("Your email and confirm email do not match");
                        $("#cemail").val("");
                    }else{
                        $("#cemailError").html("");
                    }
                }
            }

 
            return isValid;
        });

        // postcode validation
        $("#postcode").keypress(function (e) {

            var postcode_val = $("#postcode").val();

            $("#postcodeError").html("");
          
            if(postcode_val){

                //Regex for Valid Characters i.e. email.
                var regex = /\d+/g;                ;
    
                //Validate TextBox value against the Regex.
                var isValid = regex.test(postcode_val);
                if (!isValid) {
                    $("#postcodeError").html("Enter valid postcode.");
                    $("#postcode").val("");
                }
            }

            return isValid;
        });


    });

    $('form').on('submit', function() {
        // do validation here
        var firstname =  $("input[name=firstname]").val();
        var lastname =  $("input[name=lastname]").val();
        var email =  $("input[name=email]").val();
        var cemail =  $("input[name=confirmemail]").val();
        var address =  $("input[name=address]").val();
        var postcode =  $("input[name=postcode]").val();
        var state =  $('select[name="state"]').find(":selected").val();
        var city =  $('select[name="city"]').find(":selected").val();
    
        if(!firstname || !lastname || !email || !cemail || !address || !postcode || !state || !city){
            if(!firstname){
                $("#firstnameError").html("Please enter first name");
            }else{
                $("#firstnameError").html("");
            }

            if(!lastname){
                $("#lastnameError").html("Please enter last name");
            }else{
                $("#lastnameError").html("");
            }

            if(!email){
                $("#emailError").html("Please enter email");
            }else{
                $("#emailError").html("");
            }

            if(!cemail){
                $("#cemailError").html("Please enter confirm email");
            }else{
                $("#cemailError").html("");
            }

            if(!address){
                $("#addressError").html("Please enter address");
            }else{
                $("#addressError").html("");
            }

            if(!postcode){
                $("#postcodeError").html("Please enter postcode");
            }else{
                $("#postcodeError").html("");
            }

            if(!state){
                $("#stateError").html("Please enter state");
            }else{
                $("#stateError").html("");
            }

            if(!city){
                $("#cityError").html("Please enter city");
            }else{
                $("#cityError").html("");
            }

          return false;

        } else if(firstname && lastname && email && cemail && address && postcode && state && city){
            return true;
        }
    });

});
