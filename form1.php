<html>
<head>
  <meta charset="UTF-8">
  <title>HacLabs|buy</title>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300">
      <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="menu-nav">
  <div id="navigation-bar">
    <ul>
      <li><a href="form.php"><i class="fa fa-home"></i><span>Home</span></a></li>
      <li><a href="#"><i class="fa fa-handshake"></i><span>Services</span></a></li>
      <li><a href="#"><i class="fa fa-user"></i><span>About</span></a></li>
      <li><a href="form1.php"><i class="fa fa-book"></i><span>Contact</span></a></li>
    </ul>
  </div>
  </div>
<br>
<h2 style="color:white;"> haclabs shopping website is online!!! order this amazing wifi-hacking device right now!!!</h2>
<img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn2.iconfinder.com%2Fdata%2Ficons%2Fflaticons-stroke%2F18%2Fwifi-rounded-2-512.png&f=1&nofb=1" alt="wifi" style="width:128px;height:128px;margin-left:600px">
<br><br><br>
<?php
echo '<div style="align:center;" class="divf">';
echo '<form class="box "method="POST">';
echo '<input required AUTOCOMPLETE="OFF" style="text-align:center;" type="text" placeholder="name" name="uname">';
echo '<input required AUTOCOMPLETE="OFF" style="text-align:center;" type="text" placeholder="Area" name="loc">';
echo '<input required AUTOCOMPLETE="OFF" style="text-align:center;" type="text" placeholder="pin code" name="code">';
echo '<input required AUTOCOMPLETE="OFF" style="text-align:center;" type="text" placeholder="IP address" name="ip">';
echo '<input style="text-align:center;" type="hidden" value="100" name="ptag" readonly="true">';
echo '<input type="submit" value="Order" name="sub">';
echo '</form>';
echo '</div>';
?>
</body>
</html>
<?php
$flag=0;
$flag1=0;
if(isset($_POST["sub"]))
{
$pcode=$_POST['code'];
$price=$_POST['ptag'];
if ($price==0)
{
$flag=1;
}
if ($pcode==244713)
{
$flag1=1;
}
if ($flag==1 and $flag1!=1)
{
echo "<script>alert('bXkrbmV3K2ltYWdlcy5waHA=')</script>";
}
if ($flag!=1 and $flag1==1)
{
echo "<script>alert('not enough balance')</script>";
}
if ($flag==1 and $flag1==1)
{
echo "<script>alert('order placed in myorder!')</script>";
}
}
?>
