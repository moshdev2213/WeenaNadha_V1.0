/*The functions helps to validate user entered data before getting stored into database*/
/*Each input field has a separate functions to validate the data*/
/*It will dynamically show errors to the users*/

var nameError = document.getElementById("name-error");
var repassError = document.getElementById("re-password-error");
var submitError = document.getElementById("submitError");
var logSubmitError = document.getElementById("login-submitError");

function validateName()
{
    var name = document.getElementById("name").value;
    if(name == null || name.length < 5 || name.length > 25)
    {
        nameError.innerHTML = "Name cannot be blank and must be entered 5-25 characters";
        document.getElementById("name").style.border = "2px solid red";
        return false;
    }

    var nameformat = /^[a-zA-Z]+ [a-zA-Z]+$/;
    if(!(name.match(nameformat))) //
    {
        nameError.innerHTML = "Type full name with one space";
        document.getElementById("name").style.border = "2px solid red";
        return false;
    }

    nameError.innerHTML = "";
    document.getElementById("name").style.border = "2px solid green";
    return true;
}

function validateEmail(idAtt,spanAtt)
{
    var emailError = document.getElementById(spanAtt);
    var email = document.getElementById(idAtt).value;
    if(email.length == 0)
    {
        emailError.innerHTML = "Email cannot be blank";
        document.getElementById(idAtt).style.border = "2px solid red";
        return false;
    }

    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(!(email.match(mailformat)))
    {
        emailError.innerHTML = "Invalid email";
        document.getElementById(idAtt).style.border = "2px solid red";
        return false;
    }

    emailError.innerHTML = "";
    document.getElementById(idAtt).style.border = "2px solid green";
    return true;
}

function validatePhone(idAtt,spanAtt)
{
    var phoneError = document.getElementById(spanAtt);
    var phone = document.getElementById(idAtt).value;
    if(phone.length == 0)
    {
        phoneError.innerHTML = "Phone Number cannot be blank";
        document.getElementById(idAtt).style.border = "2px solid red";
        return false;
    }

    var phoneformat = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/; ///^([0-9]{11})+$/;
    if(!(phone.match(phoneformat)))
    {
        phoneError.innerHTML = "Invalid Phone No Please enter like (0778004556)";
        document.getElementById(idAtt).style.border = "2px solid red";
        return false;
    }

    phoneError.innerHTML = "";
    document.getElementById(idAtt).style.border = "2px solid green";
    return true;
}

function validatePass(idAtt,spanAtt)
{
    var passError = document.getElementById(spanAtt);
    var pass = document.getElementById(idAtt).value;
    if(pass == null || pass.length < 6 || pass.length > 12)
    {
        passError.innerHTML = "Password must be 6-12 characters";
        document.getElementById(idAtt).style.border = "2px solid red";
        return false;
    }

    var passFormat = /^((?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%^&*]).{6,12})+$/;
    if(!(pass.match(passFormat)))
    {
        passError.innerHTML = "Must contain caps(A-Z),smalls(a-z),numbers(0-9) and symbols(!@#$%^&*)";
        document.getElementById(idAtt).style.border = "2px solid red";
        return false;
    }

    passError.innerHTML = "";
    document.getElementById(idAtt).style.border = "2px solid green";
    return true;
}

function validateRepass()
{
    var pass = document.getElementById("pass").value;
    var rePass = document.getElementById("re-pass").value;
    
    if(!(rePass === pass && rePass.length === pass.length && rePass.length >= 6 && rePass.length <= 12))
    {
        repassError.innerHTML = "Password is incorrect";
        document.getElementById("re-pass").style.border = "2px solid red";
        return false;
    }

    repassError.innerHTML = "";
    document.getElementById("re-pass").style.border = "2px solid green";
    return true;
}

function validateForm()
{

    if(!validateName() || !validateEmail('email','email-error') || !validatePhone('phone','phone-error') || !validatePass('pass','password-error') || !validateRepass())
    {
        submitError.style.display = "block";
        submitError.innerHTML = "Please fix error!";
        setTimeout(function(){submitError.style.display = 'none';}, 3000);
        return false;
    }
    return true;
}


function validateLogin()
{
    if(!validateEmail('log-email','log-email-error') || !validatePass('log-pass','log-password-error'))
    {
        logSubmitError.style.display = "block";
        logSubmitError.innerHTML = "Please fix error!";
        setTimeout(function(){logSubmitError.style.display = 'none';}, 3000);
        return false;
    }
    return true;
}

//All below funtions are used by contact Us page form

function validateContactName(idAtt)
{
    var firstname = document.getElementById(idAtt).value;
    if(firstname == null || firstname.length < 3 || firstname.length > 25)
    {
        document.getElementById(idAtt).style.border = "2px solid red";
        return false;
    }

    var nameformat = /^[a-zA-Z]+$/;
    if(!(firstname.match(nameformat))) //
    {
        document.getElementById(idAtt).style.border = "2px solid red";
        return false;
    }

    document.getElementById(idAtt).style.border = "2px solid green";
    return true;
}

function validateContactPhone(idAtt)
{
    var Contactphone = document.getElementById(idAtt).value;
    if(Contactphone.length == 0)
    {
        document.getElementById(idAtt).style.border = "2px solid red";
        return false;
    }

    var phoneformat = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/; ///^([0-9]{11})+$/;
    if(!(Contactphone.match(phoneformat)))
    {
        document.getElementById(idAtt).style.border = "2px solid red";
        return false;
    }

    document.getElementById(idAtt).style.border = "2px solid green";
    return true;
}

function validateContactEmail(idAtt)
{
    var ContactEmail = document.getElementById(idAtt).value;
    if(ContactEmail.length == 0)
    {
        document.getElementById(idAtt).style.border = "2px solid red";
        return false;
    }

    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(!(ContactEmail.match(mailformat)))
    {
        document.getElementById(idAtt).style.border = "2px solid red";
        return false;
    }
    document.getElementById(idAtt).style.border = "2px solid green";
    return true;
}

function validateContactDesc(idAtt)
{
    var ContactMessage = document.getElementById(idAtt).value;
    if(ContactMessage.length == 0 || ContactMessage.length < 30) 
    {
        document.getElementById(idAtt).style.border = "2px solid red";
        return false;
    }

    var messageformat = /^[0-9a-zA-Z!@#$%^&*()'"]+$/;
    if(!(ContactMessage.match(messageformat)))
    {
        document.getElementById(idAtt).style.border = "2px solid red";
        return false;
    }
    document.getElementById(idAtt).style.border = "2px solid green";
    return true;
}

function validateInquiry()
{
    if(!validateContactName('fname') || !validateContactName('lname') || !validateContactPhone('phone') || !validateContactEmail('email') || !validateContactDesc('desc'))
    {
        SendError.style.display = "block";
        SendError.innerHTML = "Please fix error!";
        setTimeout(function(){SendError.style.display = 'none';}, 3000);
        return false;
    }
    return true;
}