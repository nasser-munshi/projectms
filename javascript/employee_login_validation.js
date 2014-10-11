
function formValidation()
{
var e_username = document.employee_login.emp_username;
var pass = document.employee_login.emp_password;





if(e_username_validation(e_username))
{
if(pass_validation(pass))
{
return true;
}
}
return false;

} 
function e_username_validation(e_username)
{


    
    var letters = /^[A-Za-z]+[0-9A-Za-z]+$/;
if(e_username.value.match(letters))
{
return true;
}
else
{
alert('Invalide Username.');
e_username.focus();
return false;
}


}





function pass_validation(pass)
{


    
   var letters = /^[0-9a-zA-Z]+$/;
if(pass.value.match(letters))
{
return true;
}
else
{
alert('Invalide Password.');
pass.focus();
return false;
}

}


