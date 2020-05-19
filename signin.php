<html>
<body>
<?php $usernameFile="usernameFile.txt"; $usernameFileLink=fopen($usernameFile,'w') or die ("Unable to validate credentials"); ?> <!-- opens file stream to usernameFile.txt -->
<?php fwrite($usernameFileLink,$_POST["username"]); fclose($usernameFileLink); ?> <!-- writes username of the user loggin in to usernameFile.txt -->
<?php shell_exec("./getPassword.sh"); ?> <!-- searches for the user's password in the users.txt file, and puts it into passwordTemp.txt -->
<?php $passwordFile="passwordTemp.txt"; $passwordFileLink=fopen($passwordFile,'r') or die ("Unable to check password"); ?> <!-- opens file stream to passwordTemp.txt -->
<?php $correctPassword=fread($passwordFileLink,filesize($passwordFile)); ?> <!-- gets the correct password from passwordTemp.txt -->
<?php fclose($passwordFileLink); shell_exec("rm passwordTemp.txt"); ?>
<?php
if (strcmp(trim($_POST["password"]),trim($correctPassword)) == 0)
{
include 'homepage.php';
}
else
{
echo 'Incorrect username or password';
}
?> <!-- opens the homepage if the username and password were good -->
</body>
</html>
