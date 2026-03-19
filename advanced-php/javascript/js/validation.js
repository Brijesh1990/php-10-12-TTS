function valid()
{
    if(document.frm.fname.value=="")
    {
        alert('Please enter your firstName *')
        document.frm.fname.focus();
        return false;
    }

    
    if(document.frm.lname.value=="")
    {
        alert('Please enter your lastName *')
        document.frm.lname.focus();
        return false;
    }
    
    if(document.frm.email.value=="")
    {
        alert('Please enter your email *')
        document.frm.email.focus();
        return false;
    }

    
    if(document.frm.pass.value=="")
    {
        alert('Please enter your Password *')
        document.frm.pass.focus();
        return false;
    }

    
    if(document.frm.cpass.value=="")
    {
        alert('Please enter your confirmed Password *')
        document.frm.cpass.focus();
        return false;
    }

    
    if(document.frm.phone.value=="")
    {
        alert('Please enter your Phone *')
        document.frm.phone.focus();
        return false;
    }
}