<?php
setcookie("robot", "", time() - 3600);

if (isset($_GET['reason'])) {

    if ($_GET['reason'] == "vid") {
      $reason = "Human behaviour - user input corresponded with movements detected on webcam #586294";
    } else if ($_GET['reason'] == "game") {
      $reason = "Human behaviour - user response times indicate non-AI user";
    } else {
      $reason = "-";
    }

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>You have been Kicked</title>
    <link rel="icon" type="image/svg+xml" href="assets/QubeLogo.svg">
    <style media="screen">
        body {
          padding: 0;
          margin: 0;
          background-color: #707070;
          }
        #top {
          background-color: #d0d0d0;
          border-radius: 5px;
          margin: auto;
          width: 85%;
          cursor: not-allowed;
        }
        h1 {
          padding-top: 30px;
          font-size: 60px;
          font-family: Arial;
          text-align: center;
          border-bottom: 1px solid #333;
          border-bottom-style: dashed;
          padding-bottom: 20px;
        }

        p {
          text-align: center;
          font-family: Arial;
          font-weight: bold;
          padding-bottom: 3%;
        }
    </style>
  </head>
  <body>
    <div id="top">
      <h1>You have been kicked</h1>
      <p>Reason: <?php echo $reason; ?></p>
    </div><br><br>
    <a href="captcha.html"><img src="assets/QubeLogo.svg" style="display: block; max-width: 10%; margin: auto;"></a>
    <br>
    <p style="color: #ffffff;">Click on the logo to return</p>
  </body>
</html>
<?php

} else {
  header('Location: hub.php');
  exit();
}
 ?>
