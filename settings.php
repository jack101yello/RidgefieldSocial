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

$usernameFile="usernameFile.txt"; $usernameFileLink=fopen($usernameFile,'w') or die ("Unable to validate credentials");
fwrite($usernameFileLink,$_POST["username"]); fclose($usernameFileLink);
echo "Settings changed";

if (strcmp($_POST["subscription"],"yes") == 0)
{
shell_exec("./Shell/addToMailingList.sh `cat usernameFile.txt`");
echo "Adding user";
}
else
{
shell_exec("./Shell/removeFromMailingList.sh `cat usernameFile.txt`");
echo "Removing user";
}

}

else
{
echo 'Incorrect username or password';
}
include "settings.html";
?>
</body>
</html>
