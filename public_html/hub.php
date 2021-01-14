<?php
  if ($_COOKIE['robot'] == 1) {
?>

<!DOCTYPE html>
<html>
<body>
<title>The Qube Hub</title>
<link rel="icon" type="image/svg+xml" href="assets/QubeLogo.svg">
<style media="screen">
body {
  background-image: url('assets/HomeBackground.svg');
  background-repeat: no-repeat;
  background-size: cover;
}
</style>

<script type = 'text/javascript' src="includes/hub.js" ></script>
</body>
</html>
<?php
  } else {
      setcookie("robot", "", time() - 3600);
      header('Location: captcha.html');
      exit();
  }
?>
