
function validateEmail(idAtt)
{
  var email = document.getElementById(idAtt).value;
  if(email.length == 0)
  {
      emailError.innerHTML = "Email cannot be blank";
      document.getElementById(idAtt).style.border = "2px solid red";
      return false;
  }

  var mailformat = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/;
  if(!(email.match(mailformat)))
  {
      emailError.innerHTML = "Invalid email";
      document.getElementById(idAtt).style.border = "2px solid red";
      return false;
  }
}
function validateForm()
{
  if(!validateEmail('email'))
  {
      SubmitError.style.display = "block";
      SubmitError.innerHTML = "Invalid Email error!";
      setTimeout(function(){SubmitError.style.display = 'none';}, 3000);
      return false;
  }
  return true;
}
