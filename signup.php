<html>
<body>
Hello, <?php echo $_POST["name"]; ?>!<br>
Email address: <?php echo $_POST["email"]; ?><br>
Username: <?php echo $_POST["username"]; ?><br>
<?php $usersFile="users.txt"; $usersFileLink=fopen($usersFile,'a') or die ("Unable to access user database"); ?>
<?php $newUserData=$_POST["name"].','.$_POST["username"].','.$_POST["email"].','.$_POST["password"].','.','.','.','.','.','.','.','.','."false"."\n"; ?>
<?php fwrite($usersFileLink,$newUserData); fclose($usersFileLink); ?>
<p>Click <a href="index.html">here</a> to return to the landing page.</p>
</body>
</html>
