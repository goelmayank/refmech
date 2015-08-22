<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
		<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
		<title>Sigma Web Admin.</title> 
       
		<link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" /> 
		<link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" /> 
        <link rel="stylesheet" type="text/css" href="css/styles.css" media="screen" /> 
        
<style type="text/css"> 
 
/* -------------------- Logo -------------------- */
 
#header-main #logo { 
	background: url(images/themes/blue/logo.gif) no-repeat left 10px; 
	width: 100%; 
	height: 70px; 
	}
 
 
 
	
/* -------------------- Header background -------------------- */
	
#header-main { 
	background: #005195 url(images/themes/blue/header-bg.jpg) repeat-x top left; 
	}
 
 
 
 
/* -------------------- Tabs -------------------- */
 
ul#nav li {
	background:transparent url(images/themes/blue/tab-left.gif) no-repeat scroll left top;
	float:left;
	margin:0 5px 0 0;
	padding:0 0 0 9px;
	}
 
ul#nav li a, ul#nav li a:visited {
	background:transparent url(images/themes/blue/tab-right.gif) no-repeat scroll right top;
	color:#FFFFFF;
	display:block;
	float:left;
	padding:7px 15px 6px 6px;
	text-decoration:none;
	}
	
ul#nav li a:hover {
	padding:8px 15px 5px 6px;
	}
 
ul#nav li#current { /* give the id="current" to the currently selected tab */
	background:transparent url(images/themes/blue/tab-active-left.gif) no-repeat scroll left top;
	}
 
ul#nav li#current a {
	background:transparent url(images/themes/blue/tab-active-right.gif) no-repeat scroll right top;
	color:#444444;
	}
    
    </style> 
	</head> 
	<body> 
    	
        <div id="header"> 
        
            <div id="header-status" style="height: 38px;"> 
 
    
            </div> <!-- End #header-status --> 
            
            <!-- Header. Main part --> 
            <div id="header-main"> 
                <div class="container_12"> 
                    <div class="grid_12"> 
                        <div id="logo"> 
    
                        </div> 
                    </div> 
 
                </div> 
                <div class="clear"></div> 
            </div> <!-- End #header-main --> 
        
        </div> <!-- End #header --> 
        
 
        
        
		<div class="container_12"> 
        
			<div class="prefix_3 grid_6 suffix_3"> 
 
                <div class="module"> 
 
                     <h2><span>Log in</span></h2> 
                        
                     <div class="module-body"> 
                     	
                        <div class="notification n-information">Information notification.</div>                        
                       <form action="action_login.php" class="login" method="post"> 
                            
                         <fieldset> 
                            <p> 
 
                                <label>Username</label> 
                                <input type="text" class="input-medium" id="username" name="username" /> 
                            </p> 
                            <p> 
                            <label>Password</label> 
                                <input type="password" class="input-medium" id="password" name="password" /> 
                            </p> 
                            <p> 
                            <label>Security Code</label> 
                                <input type="text" class="input-medium" id="securityCode" name="securityCode" /> 
                            </p> 
                            <p> 
                            <img src="../php_captcha.php" align="bottom"  style="margin:0px; padding:0px;" /> 
                            </p> 
                            <p> 
                            
 
                            	<label><input type="checkbox" name="remember_me" id="" value="remember"  /> Remember me</label> 
                            </p> 
 
                                <input class="submit-green" type="submit" value="Submit"  name="submit" id="submit"/> 
                           </fieldset> 
                        </form> 
                        
                        <ul> 
                            <li><a href="" title="Click Here to retrive password.">I forgot my password</a></li> 
                        </ul> 
                        
 
 
                        
                        
                     </div> <!-- End .module-body --> 
                </div> <!-- End .module --> 
            </div> <!-- End .grid_6 --> 
            <div class="clear"></div> 
        </div> <!-- End .container_12 --> 
 
				
           
        <!-- Footer --> 
        <div id="footer"> 
        	<div class="container_12"> 
            	<div class="grid_12"> 
                	<!-- You can change the copyright line for your own --> 
                	<p>&copy; 2012. <a href="http://www.sigmawebsolution.com/" >Sigma CPanel</a></p> 
        		</div> 
            </div> 
 
            <div class="clear"></div> 
        </div> <!-- End #footer --> 
	</body> 
</html>