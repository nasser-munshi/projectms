
function formValidation()
{

var name = document.edit_create_module.edit_module_name;
var  s_time= document.edit_create_module.start_time;
var  d_time= document.edit_create_module.submit_time;
var  description= document.edit_create_module.edit_module_description;






if(allLetter(name))
{
    if(allnumeric(s_time))
{
    if(allnumeric2(d_time))
{
if(address_validation(description))
{ 

return true;
 
}
} 
}
}
return false;

} 













function allLetter(name)
{ 
var letters = /^[A-Za-z]+[0-9A-Za-z. ]+$/;
if(name.value.match(letters))
{
return true;
}
else
{
alert('Project Name must have alphabet characters only');
name.focus();
return false;
}
}







function address_validation(description)
{ 
var letters = /^[a-zA-Z0-9!@#$%^&*,. ]+$/;
if(description.value.match(letters))
{
return true;
}
else
{
alert('Invalid description');
description.focus();
return false;
}
}

function allnumeric(s_time)
{ 
var numbers = /^[0-9]+$/;
if(s_time.value.match(numbers))
{
return true;
}
else
{
alert('Start Time must have only numeric character.');
s_time.focus();
return false;
}
}

function allnumeric2(d_time)
{ 
var numbers = /^[0-9]+$/;
if(d_time.value.match(numbers))
{
return true;
}
else
{
alert('Submit Time must have only numeric character.');
d_time.focus();
return false;
}
}




