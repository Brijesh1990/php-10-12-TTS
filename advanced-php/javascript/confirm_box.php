<script>
function lg()
{
 if(confirm('Are you sure to Logout ?'))
 {
    alert('You are logout successfully')
    window.location='https://www.amazon.in'
 }  
 else 
 {
    window.location='confirm_box.php'
 } 
}    
</script>    
<button onclick="lg()">Click to logout ?</button>
