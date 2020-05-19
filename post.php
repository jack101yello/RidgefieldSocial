<html>
<body>
<?php shell_exec("cat Posts/postFour.txt > Posts/postFive.txt"); ?>
<?php shell_exec("cat Posts/postThree.txt > Posts/postFour.txt"); ?>
<?php shell_exec("cat Posts/postTwo.txt > Posts/postThree.txt"); ?>
<?php shell_exec("cat Posts/postOne.txt > Posts/postTwo.txt"); ?>
<?php $postFile="Posts/postOne.txt"; $postFileLink=fopen($postFile,'w') or die ("Unable to submit post"); ?>
<?php $completePost="\n".date("Y/m/d")."\n".$_POST["postContents"]; ?>
<?php fwrite($postFileLink,$completePost); fclose($postFileLink); ?>
<?php include 'homepage.php'; ?>
</body>
</html>
