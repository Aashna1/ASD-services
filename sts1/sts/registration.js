 var namepattern=/^[a-zA-Z]+$/
function validateForm()
{
var x=document.forms["registration"]["firstname"];

 if (x.value=="")
   
{

  
  document.getElementById('firstname').innerHTML="Please enter the first name.";
 
  
    x.focus();

  return false;

   }
 
 
else if(x.value.length>10)
  
 {

  x.value="";

  document.getElementById('firstname').innerHTML="Please enter less than 20 characters.";

  x.focus();

  return false;

   }

 else if ((!namepattern.test(x.value)))
  
 {

  document.getElementById('firstname').innerHTML="Please enter only alphabets.";

    x.value="";

  x.focus();

  x.style.border = 'Red';

  return false;

   }


