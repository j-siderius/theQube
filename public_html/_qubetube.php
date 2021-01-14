<?php
if ($_COOKIE['robot'] == 1) {

//make database connection
    include_once('includes/connection.php');
    include_once('includes/data.php');

    $video = new Video;
    $videos = $video->fetch_all();

    $comment = new VidComment;
    $comments = $comment->fetch_all_comments(); ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>QubeTube</title>
  <link rel="icon" type="image/svg+xml" href="assets/QubeTube.svg">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style media="screen">

    body {
      font-family: 'Segoe UI Regular';
      background-color: #3a3a3c;
      font-size: 0.70vw;
    }

    .header {
     position: fixed;
     left: 0;
     z-index: 2;
     top: 0;
     width: 100%;
     height: 7%;
     background-color: #282829;
    }

    .header img {
      height: 90%;
      display: block;
    }

    @font-face {
    font-family: 'Segoe UI Regular';
    font-display: swap;
    font-style: normal;
    font-weight: normal;
    src: local('Segoe UI Regular'), url('style/Segoe UI.woff') format('woff');
    }


    @font-face {
    font-family: 'Segoe UI Italic';
    font-display: swap;
    font-style: normal;
    font-weight: normal;
    src: local('Segoe UI Italic'), url('style/Segoe UI Italic.woff') format('woff');
    }


    @font-face {
    font-family: 'Segoe UI Bold';
    font-display: swap;
    font-style: normal;
    font-weight: normal;
    src: local('Segoe UI Bold'), url('style/Segoe UI Bold.woff') format('woff');
    }


    @font-face {
    font-family: 'Segoe UI Bold Italic';
    font-display: swap;
    font-style: normal;
    font-weight: normal;
    src: local('Segoe UI Bold Italic'), url('style/Segoe UI Bold Italic.woff') format('woff');
    }

    .modal {
      z-index: 1;
      display: none;
      position: fixed;
      left: 0;
      top: 7%;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: #58585ad9;
    }

    .video {
      position: fixed;
       display: flex;
       align-items: center;
       justify-content: center;
       width: 65%;
       left: 7.5%;
       top: 20%;
       height: 65%;
       background-color: #58585a;
    }

    .video video {
      height: 100%;
      max-width: 100%;
    }

    .video #modal-exit {
      color: ##3a3a3c;
    position: absolute;
    padding-left: 0.5vw;
    padding-top: 0.5vw;
    top: 0;
    left: 0;
    margin: 0;
    /* font-size: 200%; */
    font-size: 2vw;
    opacity: 75%;
    cursor: pointer;
    }

   .sidebar {
         position: fixed;
         display: flex;
         justify-content: right;
         left: 72.5%;
         top: 20%;
         width: 20%;
         height: 65%;
       }

   .top {
     position: fixed;
     display: block;
     justify-content: center;
     width: 20%;
     height: 10%;
     background-color: #282829;
   }

   .top #title {
       color: #ffffff;
       /* font-size: 25px; */
       font-size: 1.3vw;
       font-weight: bold;
       font-stretch: normal;
       font-style: normal;
       line-height: normal;
       letter-spacing: normal;
       text-decoration: none;
       padding: 0 2% 0 2%;
       margin-top: 0;
       margin-bottom: 0;
   }

   .top #interested {
     color: #ffffff;
     /* font-size: 18px; */
     font-size: 0.8vw;
     font-weight: 300;
     font-stretch: normal;
     font-style: normal;
     line-height: normal;
     letter-spacing: normal;
     padding: 0 2% 0 2%;
     margin-top: 0;
     margin-bottom: 0;
   }

   .top #live {
     color: rgba(255, 0, 0, 1);
     /* font-size: 20px; */
     font-size: 0.8vw;
     font-weight: 300;
     display: none;
     padding: 0 2% 0 2%;
     margin-top: 0;
     margin-bottom: 0;
   }

   .bottom {
         position: fixed;
         display: block;
         width: 20%;
         height: 55%;
         top: 30%;
         overflow-x: hidden;
         overflow-y: auto;
         background-color: #3a3a3c;
       }

   .bottom #modal-comments {
         padding: 0 5% 0 5%;
         word-break: break-all;
         color: #ffffff;
         /* font-size: 18px; */
         font-size: 0.8vw;
         font-weight: 300;
         font-stretch: normal;
         font-style: normal;
         line-height: normal;
         letter-spacing: normal;
         padding: 0 2% 0 2%;
       }

     .bottom #modal-comments a {
       color: #ffffff;
       /* font-size: 20px; */
       font-size: 1vw;
       font-weight: bold;
       font-stretch: normal;
       font-style: normal;
       line-height: normal;
       letter-spacing: normal;
       text-decoration: none;
     }

     .bottom #modal-comments ul {
       padding: 0 2% 0 2%;
     }

     .grid-container {
       display: grid;
       grid-template-columns: auto auto auto auto auto auto auto auto auto auto;
       grid-column-gap: 0.5%;
       grid-row-gap: 2%;
     }

     .grid-item {
       background-color: #58585a;
       height: 100%;
       position: relative;
     }

     .grid-item img {
       vertical-align: middle;
       justify-content: center;
       max-width: 100%;
       max-height: 100%;
     }

     .live-marker {
       color: rgba(255, 0, 0, 1);
       margin: 0;
       position: absolute;
       bottom: 5%;
       left: 5%;
     }

  </style>
</head>

<body>

  <div class="header">
    <a href="/qtranslate.php?id=hub"><img src="assets/QubeLogo.svg" alt="The Qube logo" style="float: left; padding-left: 1%;"></a>
    <a href="/UNqubetube.php"><img src="assets/QTranslate.svg" alt="QTranslate logo" style="float: right; padding-right: 1%;"></a>
    <a href="/qubetube.php"><img src="assets/QubeTube.svg" alt="QubeTube logo"style="float: none; margin-left: auto; margin-right: auto;"></a>
  </div>

<div class="grid-container" style="padding-top: 7.5vh; padding-bottom: 7.5vh;">
  <?php
  $i = 1;
    foreach ($videos as $video) {
        ?>
      <div class="grid-item" id="<?php echo $i; ?>">
        <img src="thumbnail/<?php echo $video['thumbnail'] ?>" onclick="showModal(this)" data-videoid="<?php echo $video['video_id'] ?>" data-title="<?php echo $video['title'] ?>" data-video="<?php echo $video['media'] ?>" data-interested="<?php echo $video['likes'] ?>" data-live="<?php echo $video['live'] ?>">
        <p class="live-marker"><?php if ($video['live']) {
            echo "&#8226; LIVE";
        } ?></p>
      </div>
    <?php
    $i++;
    } ?>
</div>

<div style="bottom: 0px; padding-bottom: 7.5vh;"></div>

  <div class="modal" id="modal" onclick="hideModal()">
     <div class="video">
         <p id="modal-exit">&#x2716;</p>
       <video id="video" autoplay>Not Supported</video>
     </div>
     <div class="sidebar">
       <div class="top">
       <p id="title"></p>
       <p id="interested"></p>
       <h2 id="live">&#8226; LIVE</h2>
       </div>
       <div class="bottom">
       <p id="modal-comments"></p>
       </div>
     </div>
  </div>

  <script>
    var min = 180; //3 min
    var max = 300; //5 min
    var kickDelay = Math.floor(Math.random() * (max - min)) + min;
    console.log("kickDelay= " + kickDelay + "s");
    kickDelay *= 1000; //adjust for milliseconds
    setTimeout(kick, kickDelay);

    function kick() {
      window.location.assign("kicked.php?reason=vid")
    }

    function showModal(element) {
      document.getElementById("video").src = "video/" + element.getAttribute("data-video");
      document.getElementById("video").controls = true;
      document.getElementById("video").loop = false;
      document.getElementById("title").innerHTML = element.getAttribute("data-title");
      document.getElementById("interested").innerHTML = "Interested: " + element.getAttribute("data-interested");
      getComment(element.getAttribute("data-videoid"));
      document.getElementById("modal").style.display = "block";

      if (element.getAttribute("data-live") == 1) {
        document.getElementById("live").style.display = "block";
        document.getElementById("video").controls = false;
        document.getElementById("video").loop = true;
      }
    }

    function hideModal(element) {
      document.getElementById("modal").style.display = "none";
      document.getElementById("live").style.display = "none";
      document.getElementById("video").pause();
    }

    function getComment(postid) {
      var xmlhttp=new XMLHttpRequest();
      xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
          document.getElementById("modal-comments").innerHTML=this.responseText;
        }
      }
      xmlhttp.open("GET","includes/commentV.php?postid="+postid,true);
      xmlhttp.send();
    }
  </script>

</body>

</html>

<?php
} else {
        setcookie("robot", "", time() - 3600);
        header('Location: captcha.html');
        exit();
    }
?>
