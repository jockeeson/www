<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
 <title>RTCC EM-tips 2016</title>
 <meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
 <link rel="stylesheet" type="text/css" href="/style.css" />
</head>
<!-- 
<?php
    if (isset($_POST['button']))
    {
         exec('/home/jocke/python/breadboard_tools/led_test.py');
// 			shell_exec("/home/jocke/python/breadboard_tools/led_test.py");
    }
?>
 -->
<body>
 <div id="wrapper">
  <div id="header">
   <?php  
		include($_SERVER['DOCUMENT_ROOT'].'/base/header.html');
   ?>    
  </div> <!-- End header -->
  <div id="left_column"> 
   <?php  
		include($_SERVER['DOCUMENT_ROOT'].'/base/left_column.html');
   ?>    
  </div><!-- End left column -->
  <div id="main_column"> 

<!-- 
    <form method="post">
     <p>
      <button name="button">Run led_test.py</button>
     </p>
    </form>
 -->
  
   <?php  
		include($_SERVER['DOCUMENT_ROOT'].'/includes/main1.html');
   ?>    
   <?php  
		include($_SERVER['DOCUMENT_ROOT'].'/includes/main2.html');
   ?>    
   <?php  
		include($_SERVER['DOCUMENT_ROOT'].'/includes/main1.html');
   ?>    
   <?php  
		include($_SERVER['DOCUMENT_ROOT'].'/includes/main2.html');
   ?>    
  </div><!-- End main column -->
 </div> <!-- End wrapper -->
</body>
</html>
