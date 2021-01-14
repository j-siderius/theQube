<?php
  if ($_COOKIE['robot'] == 1) {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>0101101 01110101 01111010 001101001 01010100 100101011 01100010 01100101</title>
    <link rel="icon" type="image/svg+xml" href="assets/QLeft.png">
    <style media="screen">
       body {
         background-image: url('assets/0101GameQube.svg');
         background-repeat: no-repeat;
         background-size: cover;
       }
       #button {
         position: absolute;
         top: 0;
         right: 0;
         width: 7%;
         height: 15%;
         background: transparent;
         font-size: 0;
         border: none;
       }
    </style>
  </head>
  <body>

    <input id="button" type="button" onclick="location.href='qtranslate.php?id=gameqube';"/>

  </body>
</html>
<?php
  } else {
    setcookie("robot", "", time() - 3600);
      header('Location: captcha.html');
      exit();
  }
?>
