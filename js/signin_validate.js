/**************** Validation Check for logged users ************/

function svalidate()
{
    var emailID = document.signin.login_email.value;
    atpos = emailID.indexOf("@");
    dotpos = emailID.lastIndexOf(".");
    if(document.signin.login_email.value == "")
    {
        alert('Please Enter E-Mail !');
        document.signin.login_email.focus();
        return false;
    }
    if(atpos < 1 || (dotpos - atpos < 2))
    {
        alert('Please Enter Valid E-Mail Address !');
        document.signin.login_email.focus();
        return false;
        
    }
    if(document.signin.login_password.value == "")
    {
        alert('Please Enter Password !');
        document.signin.login_password.focus();
        return false;
    }    
    if(document.signin.login_account_type.value == 0)
    {
        alert('Please Select Account Type !');
        document.signin.login_account_type.focus();
        return false;
    }  
    return(true);
    
}