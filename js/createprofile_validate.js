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
    if(document.createprofile.ft_business_address_area.value == "")
    {
        alert('Please Enter Business Address Area !');
        document.createprofile.ft_business_address_area.focus();
        return false;
    }
    if(document.createprofile.ft_business_address_area.value == "")
    {
        alert('Please Enter Business Address Area !');
        document.createprofile.ft_business_address_area.focus();
        return false;
    }
    if(document.createprofile.ft_business_address_area.value == "")
    {
        alert('Please Enter Business Address Area !');
        document.createprofile.ft_business_address_area.focus();
        return false;
    }
    
    

    return(true);
    
}