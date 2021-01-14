<?php
//get id from url (?id="")
if (isset($_GET['id']) && $_GET['id'] != "") {
    $id = $_GET['id'];
  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Loading...</title>
  <style>
  /* background image etc */
    body {
      /* background-image: url("assets/LoadingScreen.png");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center; */
      background-image: url("assets/LoadingScreen.svg");
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
background-position: center;
    }

/* Loading bar background */
    #bar {
      position: fixed;
      width: 30%;
      height: 5%;
      background-color: rgb(232, 232, 232);
      border-radius: 1000px;
      box-shadow: 10px 10px 20px rgb(35, 35, 35);
      top: 50%;
      left: 50%;
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
    }

/* Loading bar */
    #progress {
      width: 0px;
      height: 100%;
      background-color: rgb(84, 129, 195);
      border-radius: 1000px;
    }
  </style>
</head>

<body>

<!-- loading bar element -->
  <div id="bar">
    <div id="progress"></div>
  </div>

  <script>
  //Javascript
  //initialization variables
      var loadingBar = document.getElementById("progress");
      var width = 0;
      var time = Math.floor(Math.random() * (20 - 10) + 10);
      var loop = setInterval(loading, time);
      var redir = "<?php echo "$id.php"; ?>";

//debug console
      console.log("Loading...");
      console.log("Load time: " + time);
      console.log("Redirecting to: " + redir);

//start loading
      function loading() {
        if (width >= 100) {
          //when done, redirect to desired page
          clearInterval(loop);
          window.location.replace(redir);
        } else {
          //if not done, add to loading bar width
          width += 1;
          loadingBar.style.width = width + "%";
        }
      }
  </script>

</body>

</html>

<?php
} else {
        //if nothing is set, redirect to hub/index
        header('Location: qtranslate.php?id=hub');
        exit();
    }
?>
