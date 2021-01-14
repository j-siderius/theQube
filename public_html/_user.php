<?php
if ($_COOKIE['robot'] == 1) {

//make database connection
    include_once('includes/connection.php');
    include_once('includes/data.php');

    $user = new Post;

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $users = $user->fetchAllPosts($id); ?>


<html>
    <head>
      <meta charset="utf-8">
      <title>InstaQube - User</title>
<style media="screen">
body {
  margin: 0;
  font-family: 'Segoe UI Regular';
}

@font-face {
font-family: 'Segoe UI Regular';
font-display: swap;
font-style: normal;
font-weight: normal;
src: local('Segoe UI'), url('style/Segoe UI.woff') format('woff');
unicode-range: U+000-5FF; /* Latin glyphs */
}


@font-face {
font-family: 'Segoe UI Italic';
font-display: swap;
font-style: normal;
font-weight: normal;
src: local('Segoe UI Italic'), url('style/Segoe UI Italic.woff') format('woff');
unicode-range: U+000-5FF; /* Latin glyphs */
}


@font-face {
font-family: 'Segoe UI Bold';
font-display: swap;
font-style: normal;
font-weight: normal;
src: local('Segoe UI Bold'), url('style/Segoe UI Bold.woff') format('woff');
unicode-range: U+000-5FF; /* Latin glyphs */
}


@font-face {
font-family: 'Segoe UI Bold Italic';
font-display: swap;
font-style: normal;
font-weight: normal;
src: local('Segoe UI Bold Italic'), url('style/Segoe UI Bold Italic.woff') format('woff');
unicode-range: U+000-5FF; /* Latin glyphs */
}

.header {
 position: fixed;
 z-index: 2;
 top: 0;
 width: 100%;
 height: 7%;
 background-color: #99d6ef;
}

.header img {
  height: 90%;
  display: block;
}
</style>

    </head>

    <body>
      <div class="header">
        <a href="/qtranslate.php?id=hub"><img src="assets/QubeLogo.svg" alt="The Qube logo" style="float: left; padding-left: 1%;"></a>
        <a href="/UNinstaqube.php"><img src="assets/QTranslate.svg" alt="QTranslate logo" style="float: right; padding-right: 1%;"></a>
        <a href="/instaqube.php"><img src="assets/InstaQube.svg" alt="InstaQube logo"style="float: none; margin-left: auto; margin-right: auto;"></a>
      </div>

<div style="padding-top: 4%;">

<h2 style="padding-top: 6%; margin: 0 auto; width: 50%;"> <?php echo $id; ?> </h2>

<div style="padding-top: 3%;">


<?php foreach ($users as $user) { ?>
<li style="list-style-type: none; margin: 0 auto; width: 50%;">
  <img src="media/<?php echo $user['media'] ?>" max-width="50%" max-height: "50%" style="max-width: 50%; max-height: 50%;">
  <br>
  <h3 style="text-align: center;"><?php echo $user['description'] ?></h3>
  <hr>
</li>
  <?php } ?>

        </div>
    </body>
</html>


<?php
    } else {
        header('Location: instaqube.php');
        exit();
    }
} else {
    setcookie("robot", "", time() - 3600);
    header('Location: captcha.html');
    exit();
}
?>
