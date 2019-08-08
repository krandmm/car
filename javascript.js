function Validation()
{
var sellername=document.registration.seller_name;
var address = document.registration.address;
var city = document.registration.city;
var phone = document.registration.telephone;
var email = document.registration.email;
var make = document.registration.make;
var model = document.registration.model;
var year = document.registration.year;


if(Seller(sellername))
{
if(Addess(address))
{
if(City(city))
{
if(Phone(phone))
{
if(Email(email))
{
if(Make(make))
{
if(Model(model))
{
if(Year(year))   
}
} 
}
} 
}
}
}
    
return false;
} 




function Seller(sellername)
{ 
var letters = /^[A-Za-z]+$/;
if(sellername.value.match(letters))
{
return true;
}
else
{
alert('Seller name must have alphabet characters only');
return false;
}
}

    
    
function Address(address)
{ 
if(addess.length === 0 || !address.trim());
{
return true;
}
else
{
alert('Address not valid');
return false;
}
}

function City(city)
{ 
var letters = /^[A-Za-z]+$/;
if(sellername.value.match(letters))
{
return true;
}
else
{
alert('Address not valid');
return false;
}
}


function Phone(phone)
{  
var reg=^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$;
if((phone.value.match(reg)) || !(phone.length < 10) 
{
return true;
}
else
{
alert("Invalid Phonenumber");
return false;
}
}

    
    
function Email(email)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email.value.match(mailformat))
{
return true;
}
else
{
alert("You have entered an invalid email address !");
return false;
}
} 

    
function Make(make)
{   
var letters = /^[A-Za-z]+$/;
if(make.value.match(letters))
{
return true;
}
else
{
alert("Invalid Make");
return false;
}
}

    
function Model(model)
{   
if(!model.length === 0);
{
return true;
}
else
{
alert("Invalid Make");
return false;
}
}
        
function Year(year)
{   
if(typeof year == 'number' && !year.length === 4);
{
return true;
}
else
{
alert("Invalid Year");
return false;
}
}





