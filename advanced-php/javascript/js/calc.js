// addition
function add()
{
  document.getElementById("res").style="display:block; transition:2s ease all; font-size:25px";
  var a=parseInt(prompt('Enter a values :'));
  var b=parseInt(prompt('Enter b values :'));
  var c=a+b;
  document.getElementById("res").innerHTML="Additions of numbers is :"+c;

}
// substractions
function subs()
{
  document.getElementById("res").style="display:block; transition:2s ease all; font-size:25px";
  var a=parseInt(prompt('Enter a values :'));
  var b=parseInt(prompt('Enter b values :'));
  var c=a-b;
  document.getElementById("res").innerHTML="Substractions of numbers is :"+c;

}

// Mult
function ml()
{
  document.getElementById("res").style="display:block; transition:2s ease all; font-size:25px";
  var a=parseInt(prompt('Enter a values :'));
  var b=parseInt(prompt('Enter b values :'));
  var c=a*b;
  document.getElementById("res").innerHTML="Multiplications of numbers is :"+c;

}

// divisions
function dv()
{
  document.getElementById("res").style="display:block; transition:2s ease all; font-size:25px";
  var a=parseInt(prompt('Enter a values :'));
  var b=parseInt(prompt('Enter b values :'));
  var c=a/b;
  document.getElementById("res").innerHTML="Divisions of numbers is :"+c;

}