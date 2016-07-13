/**************** Validation Check for logged users ************/

function validate()
{
    
    if(document.admin_login.admin_uname.value == "")
    {
        alert('Please Enter Username !');
        document.admin_login.admin_uname.focus();
        return false;
    }
    if(document.admin_login.admin_pwd.value == "")
    {
        alert('Please Enter Password !');
        document.admin_login.admin_pwd.focus();
        return false;
    }     
    return(true);
    
}