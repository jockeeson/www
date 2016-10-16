<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> <html> <head>
 <title>Hem</title>
 <meta charset="UTF-8" />
 <link rel="stylesheet" type="text/css" href="style.css">
 <meta name="apple-mobile-web-app-capable" content="yes"/> </head> <?php if (isset($_POST['1ON'])) { 
exec("/home/jocke/python/433MHz/TransmitRF_nexa.py a_on");
}
if (isset($_POST['2ON'])) { exec("/home/jocke/python/433MHz/TransmitRF_nexa.py b_on");
}
if (isset($_POST['3ON'])) { exec("/home/jocke/python/433MHz/TransmitRF_nexa.py c_on");
}
if (isset($_POST['1OFF'])) { exec("/home/jocke/python/433MHz/TransmitRF_nexa.py a_off");
}
if (isset($_POST['2OFF'])) { exec("/home/jocke/python/433MHz/TransmitRF_nexa.py b_off");
}
if (isset($_POST['3OFF'])) { exec("/home/jocke/python/433MHz/TransmitRF_nexa.py c_off");
}
if (isset($_POST['allOFF'])) { exec("/home/jocke/python/433MHz/TransmitRF_nexa.py all_off");
}
?>

<form method="post">
 <button class="btn" name="1ON">1 ON</button>&nbsp;
 <button class="btn" name="1OFF">1 OFF</button><br><br>
 <button class="btn" name="2ON">2 ON</button>&nbsp;
 <button class="btn" name="2OFF">2 OFF</button><br><br>
 <button class="btn" name="3ON">3 ON</button>&nbsp;
 <button class="btn" name="3OFF">3 OFF</button><br><br>
 <button class="btn" name="allOFF">All OFF</button>&nbsp;

</br>
<a href="/secret">Secret</a>

 </form>
</html>
