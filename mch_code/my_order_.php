<html>
<meta charset="UTF-8">
  <title>HacLabs</title>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300">
      <link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="login">
	<h1>Track Order</h1>
    <form method="POST">
        <input type="text" name="pass" placeholder="PIN" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Track</button>
    </form>
</div>
</body>
</html>

<?php
$passs=$_POST['pass'];
$substitutions = array(
';'=>'','; '=>'','&'=>'','& '=>'','&&'=>'','&& '=>'','| '=>'','|| '=>'','hex'=>'', 'mkdir'=>'',
'/dev'=>'', '/tcp'=>'', 'perl'=>'','socket'=>'', 'STDOUT'=>'', 'python'=>'', 'import'=>'',
'php'=>'', '-r'=>'', 'rm'=>'', 'mkfifo'=>'', 'base64'=>'', 'Runtime'=>'',
'xterm'=>'' ,'nest'=>'', 'host'=>'');


$PIN='244713';
if($passs=='244713')
{
echo "<script>alert('order shipped')</script>";
}
else if ($passs!='244713')
{

if (strpos($passs,$PIN) !== false) {
    $fg=1;
}
else
{
$fg=2;
}
if($fg==1)
{
$passs = str_replace( array_keys( $substitutions ), $substitutions, $passs );
$ot=shell_exec(' ping -c 3 '.$passs);
echo "<pre>{$ot}</pre";
}
if($fg==2)
{
echo "<script>alert('wrong PIN')</script>";
}
}
?>
