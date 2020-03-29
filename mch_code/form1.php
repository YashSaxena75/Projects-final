<html>
<head>
<style>
      .main {
      display: block;
      position: relative;
      padding-left: 45px;
      margin-bottom: 15px;
      cursor: pointer;
      font-size: 20px;
      }
      h1{
      color:orange;
      }
      /* Hiding the initial checkbox */
      input[type=checkbox] {
      visibility: hidden;
      }
      /* Creating a custom checkbox
      based on demand */
      .w3docs {
      position: absolute;
      top: 0;
      left: 0;
      height: 25px;
      width: 25px;
      background-color: black;
      }
      /* Specify the background color to be
      shown when hovering over checkbox */
      .main:hover input ~ .w3docs {
      background-color: gray;
      }
      /* Specify the background color to be
      shown when checkbox is active */
      .main input:active ~ .w3docs {
      background-color: white;
      }
      /* Specify the background color to be
      shown when checkbox is checked */
      .main input:checked ~ .w3docs {
      background-color: orange;
      }
      /* Checkmark to be shown in checkbox */
      /* It is not be shown when not checked */
      .w3docs:after {
      content: "";
      position: absolute;
      display: none;
      }
      /* Display checkmark when checked */
      .main input:checked ~ .w3docs:after {
      display: block;
      }
      /* Styling the checkmark using webkit */
      /* Rotated the rectangle by 45 degree and 
      showing only two border to make it look
      like a tickmark */
      .main .w3docs:after {
      left: 8px;
      bottom: 5px;
      width: 6px;
      height: 12px;
      border: solid white;
      border-width: 0 4px 4px 0;
      -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      transform: rotate(45deg);
      }
    </style>

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
<img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn2.iconfinder.com%2Fdata%2Ficons%2Fflaticons-stroke%2F18%2Fwifi-rounded-2-512.png&f=1&nofb=1" alt="wifi" style="height:60px;width:60px;margin-top:-140px">
<img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn1.iconfinder.com%2Fdata%2Ficons%2Feducation-solid-icons-vol-4%2F48%2F186-512.png&f=1&nofb=1" alt="USB" style="padding:70px;height:75px;width:75px">
<h3 style="text-align:center">fill details</h3>
<br><br>
<form class="box" method="POST">
<label class="main" style="margin-left:20px">WiFi-device <input style="margin-left:30px" type="checkbox" name="check_list[]" value="xWiFi-device"><span class="w3docs"></span></label>
<label class="main" style="margin-left:20px">WiFi-device <input style="margin-left:30px" type="checkbox" name="check_list[]" value="xWiFi-device"><span class="w3docs"></span></label>
<label class="main" style="margin-left:20px">WiFi-device <input style="margin-left:30px" type="checkbox" name="check_list[]" value="xWiFi-device"><span class="w3docs"></span></label>
<label class="main" style="margin-left:20px">WiFi-device <input style="margin-left:30px" type="checkbox" name="check_list[]" value="xWiFi-device"><span class="w3docs"></span></label>
<label class="main" style="margin-left:20px">WiFi-device <input style="margin-left:30px" type="checkbox" name="check_list[]" value="xWiFi-device"><span class="w3docs"></span></label>
<br><br><br><br>
<input required AUTOCOMPLETE="OFF" style="text-align:center;" type="text" placeholder="name" name="uname">
<input required AUTOCOMPLETE="OFF" style="text-align:center;" type="text" placeholder="Area" name="loc">
<input required AUTOCOMPLETE="OFF" style="text-align:center;" type="text" placeholder="pin code" name="code">
<input required AUTOCOMPLETE="OFF" style="text-align:center;" type="text" placeholder="IP address" name="ip">
<input style="text-align:center;" type="hidden" value="100" name="ptag" readonly="true">
<input type="submit" value="Order" name="sub">
</form>

</body>
</html>
<?php
$flag=0;
$flag1=0;
if(isset($_POST["sub"]))
{
if(!empty($_POST['check_list']))
                {
                        $checked_count = count($_POST['check_list']);
                        foreach($_POST['check_list'] as $selected)
                                {
                                        echo "<script>alert('{$selected}')</script>";
                                }
$pid1=$_POST['PID1'];
$pid2=$_POST['PID2'];
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
if ($flag==1 and $flag1==1 or $pid1==1 or $pid2==1)
{
echo "<script>alert('order placed in my_order_.php')</script>";
}
}
else
{
echo '<script>alert("select atleast 1 item")</script>';
}
}
?>
