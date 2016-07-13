<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ConsumerComplaints Admin Panel">
    <link rel="shortcut icon" href="images/favicon.html">

    <title>Admin Login</title>

    <!--Core CSS -->
    <link href="bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />

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

  <body class="lock-screen">

    <div class="container">
    
    

      <form name="admin_login" class="form-signin" action="index.php" method="post" onsubmit="return(validate());">
     
        <h2 class="form-signin-heading">Admin Panel</h2>        
        
        <div class="login-wrap">
            
            <div class="user-login-info">
                <input type="text" name="admin_uname" class="form-control" placeholder="User Name" autofocus>
                <input type="password" name="admin_pwd" class="form-control" placeholder="Password">
                
                
                <?php
            
                if(isset($_POST['admin_submit'])){
                        
                        require_once('includes/AdminConfig.php');
                    
                        $admin_uname = $_POST['admin_uname'];
                        $admin_pwd = sha1($_POST['admin_pwd']);
                        
                        $query = mysql_query("SELECT * FROM ph_administrator WHERE admin_name = '$admin_uname' AND admin_pwd = '$admin_pwd'");
                        
                        $data = mysql_fetch_array($query);
                        
                        $username = $data['admin_name'];
                        $pwd = $data['admin_pwd'];
                        $uid = $data['admin_id'];
                        
                        if(($admin_uname != $username) || ($admin_pwd != $pwd)){
                            
                    ?>
                        <div class="alert alert-block alert-danger fade in">
                            <button data-dismiss="alert" class="close close-sm" type="button">
                                <i class="fa fa-times"></i>
                            </button>
                            <strong>Incorrect</strong> Username/Password.
                        </div>
                    
                    <?php  
                         
                        }else{
                            
                            $_SESSION['username'] = $username;
                            $_SESSION['admin_id'] = $uid;
                            
                            echo "<script>";
                            echo "location.replace('Dashboard.php');";
                            echo "</script>";                        
                            
                        }      
                     }
                        
                    ?>                    
            </div>  
            
            <input class="btn btn-lg btn-login btn-block" name="admin_submit" type="submit" value="Sign in">
        
        </div>
          
      </form>

    </div>



    <!-- Placed js at the end of the document so the pages load faster -->

    <!--Core js-->
    <script src="js/jquery.js"></script>
    <script src="bs3/js/bootstrap.min.js"></script>
    
    <script src="js/adminsignin_validate.js" type="text/javascript"></script>

  </body>

</html>
