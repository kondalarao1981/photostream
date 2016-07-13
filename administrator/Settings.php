<?php   
session_start();
error_reporting(0);
require_once('includes/AdminConfig.php');

    if(isset($_SESSION['admin_id']) == ""){
        
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">                                                          

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ConsumerComplaints">
    <link rel="shortcut icon" href="images/favicon.html">

    <title>Consumer Complaints Users Information</title>       

    <!--Core CSS -->
    <link href="bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />

    <link rel="stylesheet" href="js/data-tables/DT_bootstrap.css" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" >
<!--header start-->
<header class="header fixed-top clearfix">
<?php require_once('Header.php');?>
</header>
<!--header end-->
<?php require_once('sidebar.php');?>
<!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->
        
        <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        General Settings
                    <!--</header>-->                     
                    </header>
                    
                    
                     <?php           
                     
                     if(isset($_POST['submit'])){
                        
                         date_default_timezone_set('Asia/Calcutta');
                         $page_name = $_POST['page_name'];
                         $meta_title = ucwords($_POST['meta_title']);                         
                         $meta_author = $_POST['meta_author'];
                         $meta_description = $_POST['meta_desc'];
                         $meta_keywords = $_POST['meta_keywords'];
                         $meta_status = 1;   
                         $date = date('d-m-Y H:i:s A');          
                                                  
                         
                         if(empty($meta_title) || $page_name == "" || empty($meta_author) || empty($meta_description) || empty($meta_keywords)){
                    ?>
                            <div class="alert alert-danger fade in">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Please enter all the required settings</strong>
                            </div>
                <?php
                         } 
                         else{         
                        
                         $sel1 = mysql_query("SELECT * FROM cc_settings WHERE settings_page_name = '$page_name'");
                            ///// Fetch the data from Database
                             $row = mysql_fetch_array($sel1);
                             
                             $page_id = $row['settings_id'];                             
                                                
                    ////Condition to Check whether there is a duplicate record 
                              if($row > 0){
                                
                                $updt = mysql_query("UPDATE cc_settings SET settings_page_name = '$page_name',settings_meta_title = '$meta_title', settings_meta_author = '$meta_author', settings_meta_description = '$meta_description', settings_meta_keywords = '$meta_keywords', settings_date = '$date' WHERE settings_id = '$page_id'");
                                
                                if($updt){
                     ?>
                                    <div class="alert alert-success fade in">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>Settings has been sucessfully Updated.</strong>
                                    </div>          
                     <?php                      
                                }         
                        }  
                            else{
                                
                        $inst = mysql_query("INSERT INTO cc_settings(settings_page_name, settings_meta_title, settings_meta_author, settings_meta_description, settings_meta_keywords, settings_status, settings_date) VALUES('$page_name','$meta_title', '$meta_author', '$meta_description', '$meta_keywords', '$meta_status', '$date')");
                            
                             if($inst){
            ?>
                 <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Settings has been sucessfully modified.</strong>
            </div>   
            <?php                               
                                    }
                                 } 
                            }                      
                      }    
        	?>
                    
                    <form name="settings_form" class="form-horizontal" action="Settings.php" method="post">
                    <div class="panel-body">
                        
                            <div class="form-group">
                                <label class="col-lg-5 col-sm-2 control-label">Page Name</label>
                                <div class="col-lg-6">
                                    <select class="form-control" name="page_name" style="width: 300px" id="source">
                                      <option value="">-- Select Page --</option>                             
                                      <option value="Accountactivation.php">Accountactivation.php</option>
                                      <option value="AccountOverview.php">AccountOverview.php</option>
                                      <option value="Answers.php">Answers.php</option>
                                      <option value="ChangePassword.php">ChangePassword.php</option>
                                      <option value="Faq.php">Faq.php</option>
                                      <option value="ForgotPassword.php">ForgotPassword.php</option>
                                      <option value="index.php">index.php</option>
                                      <option value="ManageAccount.php">ManageAccount.php</option>
                                      <option value="PostQuestion.php">PostQuestion.php</option>
                                      <option value="Questions.php">Questions.php</option>
                                      <option value="ResetPassword.php">ResetPassword.php</option>
                                      <option value="Search.php">Search.php</option>
                                      <option value="SignIn.php">SignIn.php</option>
                                      <option value="Signup.php">Signup.php</option>
                                      <option value="SubmitComplaint.php">SubmitComplaint.php</option>          
                                    </select>
                                </div><br /><br />
                                <div style="margin-left: 465px;">( Select the page name to which you want to apply the settings )</div>
                                
                            </div>
                            
                            <div class="form-group">
                                <label class="col-lg-5 col-sm-2 control-label">Meta Title</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="meta_title" placeholder="Enter Meta Title" /> 
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-lg-5 col-sm-2 control-label">Meta Tag Author</label>
                                <div class="col-lg-6">
                                    <div class="col-lg-15">
                                        <textarea class="form-control" name="meta_author" rows="6"></textarea>
                                    </div>
                                    <div style="margin-left: 15px;">( Enter author content seperated by commas. Eg: Test, example, Helloworld )</div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-lg-5 col-sm-2 control-label">Meta Tag Description</label>
                                <div class="col-lg-6">
                                    <div class="col-lg-15">
                                        <textarea class="form-control" name="meta_desc" rows="6"></textarea>
                                    </div>
                                    <div style="margin-left: 15px;">( Enter description content seperated by commas. Eg: Test, example, Helloworld )</div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-lg-5 col-sm-2 control-label">Meta Tag Keywords</label>
                                <div class="col-lg-6">                
                                    <div class="col-lg-15">
                                        <textarea class="form-control" name="meta_keywords" rows="6"></textarea>
                                    </div> 
                                    <div style="margin-left: 15px;">( Enter keywords content seperated by commas. Eg: Test, example, Helloworld)</div>     
                                </div>
                            </div>                
                                                 
                            
                            <div class="form-group">
                                <div class="col-lg-offset-5 col-lg-15">
                                    <input type="submit" name="submit" class="btn btn-danger" value="Submit" />
                                </div>
                            </div>
                        
                       </div>
                    
                </section>
            </div> 
            </form>     
                 
        </section>
    </section>
    <!--main content end-->    


</section>

<!-- Placed js at the end of the document so the pages load faster -->

<!--Core js-->
<script src="js/jquery-1.8.3.min.js"></script>
<script src="bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--Easy Pie Chart-->
<script src="js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="js/sparkline/jquery.sparkline.js"></script>
<!--jQuery Flot Chart-->
<script src="js/flot-chart/jquery.flot.js"></script>
<script src="js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="js/flot-chart/jquery.flot.resize.js"></script>
<script src="js/flot-chart/jquery.flot.pie.resize.js"></script>

<script type="text/javascript" src="js/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="js/data-tables/DT_bootstrap.js"></script>

<!--common script init for all pages-->
<script src="js/scripts.js"></script>

<!--script for this page only-->
<script src="js/table-editable.js"></script>

<!-- END JAVASCRIPTS -->
<script>
    jQuery(document).ready(function() {
        EditableTable.init();
    });
</script>

</body>
<!-- Mirrored from bucketadmin.themebucket.net/editable_table.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 17 Mar 2014 18:37:16 GMT -->
</html>