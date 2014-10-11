
function formValidation()
{

var name = document.user_edit_registration.a_edit_fullname;
var  post= document.user_edit_registration.a_edit_post;
var  address= document.user_edit_registration.admin_current_address;
var  contact_no= document.user_edit_registration.admin_contact_no;
var  email= document.user_edit_registration.admin_email;





if(allLetter(name))
{
    if(allLetter2(post))
{
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
}
}

return false;

} 
function e_username_validation(e_username,mx,my)
{
var e_username_len = e_username.value.length;
if (e_username_len == 0 || e_username_len >= my || e_username_len < mx)
{
alert("User Name should not be empty / length be between "+mx+" to "+my);
e_username.focus();
return false;
}
else{
    
    var letters = /^[A-Za-z]+[0-9A-Za-z]+$/;
if(e_username.value.match(letters))
{
return true;
}
else
{
alert('Username must start with a alphabetic character.');
e_username.focus();
return false;
}
}

}





function pass_validation(pass,mx,my)
{
var pass_len = pass.value.length;
if (pass_len == 0 ||pass_len >= my || pass_len < mx)
{
alert("Password should not be empty / length be between "+mx+" to "+my);
pass.focus();
return false;
}
else{
    
   var letters = /^[0-9a-zA-Z]+$/;
if(pass.value.match(letters))
{
return true;
}
else
{
alert('Password must have alphanumeric characters only');
pass.focus();
return false;
}
}
}


function pass_match(pass,repass)
{
    if (pass == repass)
        {
            return true;
        }
        else{
          alert('Password and Confirm Password doesnot match.');
pass.focus();
return false;
        }
}




function allLetter(name)
{ 
var letters = /^[A-Za-z. ]+$/;
if(name.value.match(letters))
{
return true;
}
else
{
alert('Username must have alphabet characters only');
name.focus();
return false;
}
}



function allLetter2(post)
{ 
var letters = /^[A-Za-z. ]+$/;
if(post.value.match(letters))
{
return true;
}
else
{
alert('Post must have alphabet characters only');
post.focus();
return false;
}
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


