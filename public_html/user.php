<?php
if ($_COOKIE['robot'] == 1) {

//make database connection
    include_once('includes/connection.php');
    include_once('includes/data.php');

    $post = new Post;
    $user = new User;

    if (empty($_GET) || $_GET['id'] == "") {
        $run = false;
        $id = "User not found";
    } else if (isset($_GET['id'])) {
        $run = true;
        $id = $_GET['id'];
        $posts = $post->fetchAllPosts($id);
        $user = $user->fetch_user($id);
    }
     ?>


<html>
    <head>
      <meta charset="utf-8">
      <title>InstaQube - User</title>
<style media="screen">
body {
  font-family: 'Segoe UI Regular';
  font-size: 1.5vw;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

h3 {
  font-size: 1vw;
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

.posts {
  padding-top: 3%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.posts img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  max-width: 50%;
  max-height: 50%;
}

.profile {
  margin-top: 8%;
  width: 50%;
  background-color: #99d6ef;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  border-style: solid;
  border-radius: 10px;
  border-color: #d0d0d0;
  border-width: 3px;
}

.profilePicture {
  display: block;
  margin-left: auto;
  margin-right: auto;
  max-width: 50%;
  max-height: 50%;
}

.profileDescription {
  padding-top: 3%;
  padding-bottom: 5%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 80%;
}
</style>

    </head>

    <body>
      <div class="header">
        <a href="/qtranslate.php?id=hub"><img src="assets/QubeLogo.svg" alt="The Qube logo" style="float: left; padding-left: 1%;"></a>
        <a href="/UNinstaqube.php"><img src="assets/QTranslate.svg" alt="QTranslate logo" style="float: right; padding-right: 1%;"></a>
        <a href="/instaqube.php"><img src="assets/InstaQube.svg" alt="InstaQube logo"style="float: none; margin-left: auto; margin-right: auto;"></a>
      </div>

      <div class="back">
        <a href="/instaqube.php"><img src="assets/BackIconBlue.svg" alt="back" style="position: fixed; top: 12vh; left: 4vh; height: 5%;"></a>
      </div>

<div class="profile">
  <h2 class="user" style="padding-top: 0;"> <?php echo $id; ?> </h2>
  <img class="profilepicture" src="profile/<?php echo $user['media']; ?>" alt="profilePicture">
  <p class="profileDescription"><?php echo $user['description']; ?></p>
</div>

<div class="posts">


<?php
if ($run) {
foreach ($posts as $post) { ?>
<li style="list-style-type: none; margin: 0 auto; width: 50%;">
  <img src="media/<?php echo $post['media'] ?>" max-width="50%" max-height: "50%">
  <h3 style="text-align: center;"><?php echo $post['description'] ?></h3>
  <hr style="color: #d0d0d0; height: 2px; border-width: 0; border-radius: 1px; background-color: #d0d0d0;">
</li>
<?php }} ?>

        </div>
    </body>
</html>


<?php
} else {
        setcookie("robot", "", time() - 3600);
        header('Location: captcha.html');
        exit();
    }
?>
