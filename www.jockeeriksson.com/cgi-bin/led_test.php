<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/s$
<html>
<head>
<!-- 
<?php 
if (isset($_POST['RedON']))
{
exec('python /home/jocke/python/breadboard_tools/led_test.py');
}
?>
 -->
 <title>RTCC EM-tips 2016</title>
 <meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
 <link rel="stylesheet" type="text/css" href="/style.css" />
</head>
<body>
<!-- <input type="button" id="reboot"  value="Reboot" onClick="<? exec('python /home/jocke/python/breadboard_tools/led_test.py'); ?>" /> -->
<?php exec('python /home/jocke/python/breadboard_tools/led_test.py'); ?>
<!-- <button name="RedON">Red On</button> -->

</body>
</html>

