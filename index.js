$(document).ready(function(){


    let firstname=true,lastname=true,dateofbirth=true,number=true,profile=true,address=true,email=true;

    $("#submit").on('click',function (event){
        validate_Firstname();
        validate_Lastname();
        validate_Email();
        validate_Number();
        validate_Profile();
        validate_Address();
        validate_dateofbirth();
        if(firstname==true && lastname==true && dateofbirth==true && number==true && profile==true && address==true && email==true){
            return true;
        }else{
            return false;
        }
    })



    function validate_Firstname(){

        Nameregex=/^[a-zA-Z]+$/g;
        Namelenregex=/^.{3,}$/g;

        if(!($("#input-firstname").val())){
            $("#input-firstname").css("border-color","red");
            $("#firstname").css("color","red");
            $("#emptyfirst").text("Please supply your first name");
            firstname=false;
        }else if(!Nameregex.test($("#input-firstname").val()) || !Namelenregex.test($("#input-firstname").val())){
            $("#input-firstname").css("border-color","red");
            $("#firstname").css("color","red");
            $("#emptyfirst").text("Please supply your valid first name");
            firstname=false;
        }else{
            $("#input-firstname").css("border-color","green");
            $("#firstname").css("color","green");
            $("#emptyfirst").text("");
            firstname=true;
        }
    }



    function validate_Lastname(){
        Nameregex=/^[a-zA-Z]+$/g;
        Namelenregex=/^.{3,}$/g;

        if(!($("#input-lastname").val())){
            $("#input-lastname").css("border-color","red");
            $("#lastname").css("color","red");
            $("#emptylast").text("Please supply your last name");
            lastname=false;
        }else if(!Nameregex.test($("#input-lastname").val()) || !Namelenregex.test($("#input-lastname").val())){
            $("#input-lastname").css("border-color","red");
            $("#lastname").css("color","red");
            $("#emptylast").text("Please supply your valid last name");
            lastname=false;
        }else{
            $("#input-lastname").css("border-color","green");
            $("#lastname").css("color","green");
            $("#emptylast").text("");
            lastname=true;
        }
    }



    function validate_Email(){
        let Emailregex=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

        if(!($("#input-email").val())){
            $("#input-email").css("border-color","red");
            $("#email").css("color","red");
            $("#emptyemail").text("Please supply your email ");
            email=false;
        }else if(!Emailregex.test($("#input-email").val())){
            $("#input-email").css("border-color","red");
            $("#email").css("color","red");
            $("#emptyemail").text("Please supply your valid email");
            email=false;
        }else{
            $("#input-email").css("border-color","green");
            $("#email").css("color","green");
            $("#emptyemail").text("");
            email=true;
        }
    }

    function validate_Number(){
        let Numberregex= /^[0-9]{10}$/g;

        if(!($("#input-number").val())){
            $("#input-number").css("border-color","red");
            $("#number").css("color","red");
            $("#emptynumber").text("Please supply your Mobile number");
            number=false;
        }else if(!Numberregex.test($("#input-number").val())){
            $("#input-number").css("border-color","red");
            $("#number").css("color","red");
            $("#emptynumber").text("Please supply your valid mobile number");
            number=false;
        }else{
            $("#input-number").css("border-color","green");
            $("#number").css("color","green");
            $("#emptynumber").text("");
            number=true;
        }
    }

    function validate_Profile(){
        if(!($("#input-profile").val())){
            $("#input-profile").css("border-color","red");
            $("#profile").css("color","red");
            profile=false;
        }else{
            $("#input-profile").css("border-color","green");
            $("#profile").css("color","green");
            profile=true;
        }
    }

    function validate_Address(){
        if(!($("#input-address").val())){
            $("#input-address").css("border-color","red");
            $("#address").css("color","red");
            address=false;
        }else{
            $("#input-address").css("border-color","green");
            $("#address").css("color","green");
            address=true;
        }
    }

    function validate_dateofbirth(){
        if(!($("#input-dateofbirth").val())){
            $("#input-dateofbirth").css("border-color","red");
            $("#dateofbirth").css("color","red");
            dateofbirth=false;
        }else{
            $("#input-dateofbirth").css("border-color","green");
            $("#dateofbirth").css("color","green");
            dateofbirth=true;
        }
    }
    
})