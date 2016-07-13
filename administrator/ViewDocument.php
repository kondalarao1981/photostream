<?php
session_start();
error_reporting(0);
require_once('includes/AdminConfig.php');

    if(isset($_SESSION['admin_id']) == ""){
        
        header('Location: index.php');
    }

?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Consumer Complaints" />

	<title>Consumer Complaints Uploaded Document</title>
</head>

<body>

            <?php
            
                /*********** Code for Viewing the document ************/
                                
                                if(isset($_GET['type']) == 'view'){
                                    
                                    $vaction_id = $_GET['securitytoken'];
                                    $exp_vaction_id = explode("-", $vaction_id);
                                    $view_val = $exp_vaction_id[1];
                                    $vcomplaint_id = base64_decode($view_val); 
                                    
                                    $sel_doc = mysqli_query($con, "SELECT complaint_img_path FROM complaints_info WHERE complaint_id = '$vcomplaint_id'");
                                    $sel_data = mysqli_fetch_array($sel_doc);
                                    
                                    $document = $sel_data['complaint_img_path'];
                                    
                ?>
                        <img src="../<?php echo $document;?>" alt="View Document" />
                <?php
                                   }  
                                ?>
</body>
</html>