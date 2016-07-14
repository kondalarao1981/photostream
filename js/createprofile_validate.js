/**************** Validation Check for Business Profile ************/

function validate()
{
    
    
    if(document.createprofile.ft_business_name.value == "")
    {
        alert('Please Enter Studio/Business Name !');
        document.createprofile.ft_business_name.focus();
        return false;
    }   
    if(document.createprofile.ft_business_address.value == "")
    {
        alert('Please Enter Business Address !');
        document.createprofile.ft_business_address.focus();
        return false;
    }    
    if(document.createprofile.ft_business_address_area.value == "")
    {
        alert('Please Enter Business Address Area !');
        document.createprofile.ft_business_address_area.focus();
        return false;
    }
    if(document.createprofile.ft_pincode.value == "")
    {
        alert('Please Enter Pincode !');
        document.createprofile.ft_pincode.focus();
        return false;
    }
    if(document.createprofile.ft_city.value == "")
    {
        alert('Please Enter City !');
        document.createprofile.ft_city.focus();
        return false;
    }
    
    if(document.createprofile.ft_state.value == "")
    {
        alert('Please Enter State !');
        document.createprofile.ft_state.focus();
        return false;
    }
    
    

    return(true);
    
}