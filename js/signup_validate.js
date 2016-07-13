/**************** Validation Check for User Registrations ************/

function validate()
{
    var emailID = document.signup.ft_email.value;
    atpos = emailID.indexOf("@");
    dotpos = emailID.lastIndexOf(".");
    if(document.signup.ft_your_name.value == "")
    {
        alert('Please Enter Your Name !');
        document.signup.ft_your_name.focus();
        return false;
    }   
    if(document.signup.ft_email.value == "")
    {
        alert('Please Enter E-Mail Address !');
        document.signup.ft_email.focus();
        return false;
    }
    if(atpos < 1 || (dotpos - atpos < 2))
    {
        alert('Please Enter Valid E-Mail Address !');
        document.signup.ft_email.focus();
        return false;
        
    }
    if(document.signup.ft_mobile.value == "")
    {
        alert('Please Enter Mobile Number !');
        document.signup.ft_mobile.focus();
        return false;
    }
    if(document.signup.ft_password.value == "")
    {
        alert('Please Enter Password !');
        document.signup.ft_password.focus();
        return false;
    }
    if(document.signup.ft_confirm_password.value == "")
    {
        alert('Please Enter Confirm Password !');
        document.signup.ft_confirm_password.focus();
        return false;
    }     
    if(document.signup.ft_password.value!= document.signup.ft_confirm_password.value)
    {
        alert('Password and Confirm Password doesnot Match !');
        document.signup.ft_confirm_password.focus();
        return false;
    }
    

    return(true);
    
}