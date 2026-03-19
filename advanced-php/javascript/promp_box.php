<script>
function add()
{
var a=parseInt(prompt('Enter a values :'));
var b=parseInt(prompt('Enter b values :'));    
var c=a+b;
// alert('additions of numbers is :'+c)
document.getElementById("result").innerHTML="additions of numbers is :"+c;
}

function sub()
{
var a=parseInt(prompt('Enter a values :'));
var b=parseInt(prompt('Enter b values :'));    
var c=a-b;
// alert('additions of numbers is :'+c)
document.getElementById("result").innerHTML="substractions of numbers is :"+c;
}

function ml()
{
var a=parseInt(prompt('Enter a values :'));
var b=parseInt(prompt('Enter b values :'));    
var c=a*b;
// alert('multiplications of numbers is :'+c)
document.getElementById("result").innerHTML="additions of numbers is :"+c;
}

function dv()
{
var a=parseInt(prompt('Enter a values :'));
var b=parseInt(prompt('Enter b values :'));    
var c=a/b;
// alert('additions of numbers is :'+c)
document.getElementById("result").innerHTML="Divisions of numbers is :"+c;
}
</script>
<button type="button" onclick="add()">Additions</button>
<button type="button" onclick="sub()">Substractions</button>
<button type="button" onclick="ml()">Multiplications</button>
<button type="button" onclick="dv()">Divisions</button>
<p id="result"></p>