
function formValidation()
{

var  address= document.edit_admin_profile.admin_current_address;
var  contact_no= document.edit_admin_profile.admin_contact_no;
var  email= document.edit_admin_profile.admin_email;





if(address_validation(address))
{ 

if(allnumeric(contact_no))
{
if(ValidateEmail(email))
{
window.location.href="test.php";
return true;
} 
}
} 

return false;

} 


function address_validation(address)
{ 
var letters = /^[a-zA-Z0-9!@#$%^&*,. ]+$/;
if(address.value.match(letters))
{
return true;
}
else
{
alert('Invalid address');
address.focus();
return false;
}
}

function allnumeric(contact_no)
{ 
var numbers = /^[0-9]+$/;
if(contact_no.value.match(numbers))
{
return true;
}
else
{
alert('Phone Number must have numeric characters only');
contact_no.focus();
return false;
}
}
function ValidateEmail(email)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email.value.match(mailformat))
{
return true;
}
else
{
alert("You have entered an invalid email address!");
return false;
}
} 


