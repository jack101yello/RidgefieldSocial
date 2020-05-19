<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="index.css">
  <body>
    <h3 style="Color: Orange">Ridgefield Social</h3>
    <ul> <!-- menu bar -->
      <li class="active"><a href="homepage.php">Homepage</a></li>
      <li><a href="post.html">Post</a></li>
      <li><a href="schedule.html">Schedule</a></li>
      <li><a href="news.html">News</a></li>
      <li><a href="settings.html">Settings</a></li>
    </ul>
    <!-- Posts (display top 5 posts, as shown in the files in posts/ -->
    <h5><?php echo shell_exec("sed -n 1p Posts/postOne.txt"); ?></h5> <!-- user name of poster -->
    <h6><?php echo shell_exec("sed -n 2p Posts/postOne.txt"); ?></h6> <!-- date of post -->
    <p><?php echo shell_exec("sed -n 3p Posts/postOne.txt"); ?></p>   <!-- post itself -->
    <h5><?php echo shell_exec("sed -n 1p Posts/postTwo.txt"); ?></h5> <!-- user name of poster -->
    <h6><?php echo shell_exec("sed -n 2p Posts/postTwo.txt"); ?></h6> <!-- date of post -->
    <p><?php echo shell_exec("sed -n 3p Posts/postTwo.txt"); ?></p>   <!-- post itself -->
    <h5><?php echo shell_exec("sed -n 1p Posts/postThree.txt"); ?></h5> <!-- user name of poster -->
    <h6><?php echo shell_exec("sed -n 2p Posts/postThree.txt"); ?></h6> <!-- date of post -->
    <p><?php echo shell_exec("sed -n 3p Posts/postThree.txt"); ?></p>   <!-- post itself -->
    <h5><?php echo shell_exec("sed -n 1p Posts/postFour.txt"); ?></h5> <!-- user name of poster -->
    <h6><?php echo shell_exec("sed -n 2p Posts/postFour.txt"); ?></h6> <!-- date of post -->
    <p><?php echo shell_exec("sed -n 3p Posts/postFour.txt"); ?></p>   <!-- post itself -->
    <h5><?php echo shell_exec("sed -n 1p Posts/postFive.txt"); ?></h5> <!-- user name of poster -->
    <h6><?php echo shell_exec("sed -n 2p Posts/postFive.txt"); ?></h6> <!-- date of post -->
    <p><?php echo shell_exec("sed -n 3p Posts/postFive.txt"); ?></p>   <!-- post itself -->
  </body>
</html>
