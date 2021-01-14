<?php
if ($_COOKIE['robot'] == 1) {

//make database connection
    include_once('includes/connection.php');
    include_once('includes/data.php');

    $post = new Post;
    $posts = $post->fetch_all();

    $comment = new Comment;
    $comments = $comment->fetch_all_comments(); ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">

 <head>
   <meta charset="utf-8">
   <meta http-equiv="Cache-control" content="private">
   <title>InstaQube</title>
   <link rel="icon" type="image/svg+xml" href="assets/InstaQube.svg">
   <link rel="preload" as="font" href="style/Segoe UI.woff" type="font/woff2" crossorigin="anonymous">
   <link rel="preload" as="font" href="style/Segoe UI Italic.woff" type="font/woff2" crossorigin="anonymous">
   <link rel="preload" as="font" href="style/Segoe UI Bold.woff" type="font/woff2" crossorigin="anonymous">
   <link rel="preload" as="font" href="style/Segoe UI Bold Italic.woff" type="font/woff2" crossorigin="anonymous">
   <style media="screen">

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

   .post-container {
     padding-top: 6%;
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
     background-color: #ffffffd9;
   }

   .image {
     position: fixed;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 65%;
      left: 7.5%;
      top: 20%;
      height: 65%;
      background-color: #ffffff;
   }

   .image img {
    max-width: 100%;
    max-height: 100%;
  }

.image #modal-exit {
  color: #315d90;
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
        height: 15%;
        background-color: #bae3f8;
        overflow-x: hidden;
        overflow-y: auto;
      }

      .top #modal-user {
          color: #315d90;
          /* font-size: 25px; */
          font-size: 1.3vw;
          font-weight: bold;
          font-stretch: normal;
          font-style: normal;
          line-height: normal;
          letter-spacing: normal;
          text-decoration: none;
          padding: 2% 2% 0 2%;
          cursor: pointer;
      }

      .top #modal-likes {
        color: #315d90;
        /* font-size: 25px; */
        font-size: 1.3vw;
        font-weight: bold;
        font-stretch: normal;
        font-style: normal;
        line-height: normal;
        letter-spacing: normal;
        text-decoration: none;
        float: right;
        margin: 0;
        padding: 0 2% 0 2%;
      }

      .top #modal-description {
        color: #315d90;
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

      .bottom {
            position: fixed;
            display: block;
            width: 20%;
            height: 50%;
            top: 35%;
            overflow-x: hidden;
            overflow-y: auto;
            background-color: #ecf8fe;
          }

          .bottom #modal-comments {
                padding: 0 5% 0 5%;
                word-break: normal;
                color: #315d90;
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
                color: #315d90;
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

   body {
     margin: 0;
     font-family: 'Segoe UI Regular';
     font-size: 0.70vw;
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

       .post {
         position: fixed;
         background-color: #ecf8fe;
         width: 10vw;
         height: 5.5vw;
       }

       .post-bar {
         background-color: #bae3f8;
         height: 1vw;
         margin-top: 0;
       }

       .post-bar p {
         color: #ffffff;
         margin: 0;
       }

       .post-bar a {
         color: #ffffff;
         margin: 0;
         text-decoration: none;
       }

       #user {
         font-weight: bold;
         float: left;
         padding-left: 0.1vw;
         padding-top: 0.1vw;
       }

       #likes {
         float: right;
         padding-right: 0.1vw;
         padding-top: 0.1vw;
       }

       .post img {
         display: block;
         height: calc(100% - 1vw);
         max-width: 100%;
         margin-left: auto;
         margin-right: auto;
       }

/* normal scroll */

       .icon-scroll,
.icon-scroll:before {
  display: block;
  position: absolute;
  left: 50%;
}
.icon-scroll {
  width: 40px;
  height: 70px;
  margin-left: -20px;
  top: 30%;
  margin-top: -35px;
  box-shadow: inset 0 0 0 1px #315d90;
  border-radius: 25px;
}
.icon-scroll:before {
  content: '';
  width: 8px;
  height: 8px;
  background: #315d90;
  margin-left: -4px;
  top: 8px;
  border-radius: 4px;
  -webkit-animation-duration: 1.5s;
          animation-duration: 1.5s;
  -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
  -webkit-animation-name: scroll;
          animation-name: scroll;
}
@-webkit-keyframes scroll {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(46px);
            transform: translateY(46px);
  }
}
@keyframes scroll {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(46px);
            transform: translateY(46px);
  }
}

.scroller #text {
  position: absolute;
  margin-left: auto;
  margin-right: auto;
  left: 0;
  right: 0;
  text-align: center;
  width: auto;
  top: 38%;
  color: #315d90;
}

/* smaller scroll */

.icon-scroll-small,
.icon-scroll-small:before {

position: fixed;
left: 95%;
}
.icon-scroll-small {
display: none;
width: 20px;
height: 35px;
margin-left: -20px;
top: 95%;
margin-top: -35px;
box-shadow: inset 0 0 0 1px #315d90;
border-radius: 25px;
}
.icon-scroll-small:before {
position: absolute;
content: '';
width: 6px;
height: 6px;
background: #315d90;
margin-left: -12px;
top: 6px;
border-radius: 3px;
-webkit-animation-duration: 1.5s;
   animation-duration: 1.5s;
-webkit-animation-iteration-count: infinite;
   animation-iteration-count: infinite;
-webkit-animation-name: scrollSmall;
   animation-name: scrollSmall;
}
@-webkit-keyframes scrollSmall {
0% {
opacity: 1;
}
100% {
opacity: 0;
-webkit-transform: translateY(10px);
     transform: translateY(10px);
}
}
@keyframes scrollSmall {
0% {
opacity: 1;
}
100% {
opacity: 0;
-webkit-transform: translateY(10px);
     transform: translateY(10px);
}
}

   </style>
 </head>

 <body>

   <div class="header">
     <a href="/qtranslate.php?id=hub"><img src="assets/QubeLogo.svg" alt="The Qube logo" style="float: left; padding-left: 1%;"></a>
     <a href="/UNinstaqube.php"><img src="assets/QTranslate.svg" alt="QTranslate logo" style="float: right; padding-right: 1%;"></a>
     <a href="/instaqube.php"><img src="assets/InstaQube.svg" alt="InstaQube logo"style="float: none; margin-left: auto; margin-right: auto;"></a>
   </div>

<div class="post-container">
   <?php
   $i = 1;
    foreach ($posts as $post) {
        $randX = rand(0, 15);
        $randY = rand(0, 15);

        if ($i % 9 == 1 || $i % 9 == 4 || $i % 9 == 7) {
            $randX += 5;
        } elseif ($i % 9 == 2 || $i % 9 == 5 || $i % 9 == 8) {
            $randX += 35;
        } elseif ($i % 9 == 3 || $i % 9 == 6 || $i % 9 == 0) {
            $randX += 65;
        }

        if ($i % 9 == 1 || $i % 9 == 2 || $i % 9 == 3) {
            $randY += 15;
        } elseif ($i % 9 == 4 || $i % 9 == 5 || $i % 9 == 6) {
            $randY += 42;
        } elseif ($i % 9 == 7 || $i % 9 == 8 || $i % 9 == 0) {
            $randY += 70;
        }

        $x = strval($randX) . "%";
        $y = strval($randY) . "%";

        if ($i % 9 == 1) {
            $name = "layer" . strval(($i - 1) / 9); ?><div class="<?php echo $name ?>" style="min-height: 1080px"><?php
        } ?>

         <div class="post" style="left: <?php echo $x; ?>; top: <?php echo $y; ?>;"  onclick="showModal(this)" data-image="<?php echo $post['media'] ?>" data-user="<?php echo $post['user'] ?>" data-postid="<?php echo $post['post_id'] ?>" data-description="<?php echo $post['description'] ?>"  data-likes="<?php echo $post['likes'] ?>">
           <div class="post-bar"  onclick="showModal(this)" data-image="<?php echo $post['media'] ?>" data-user="<?php echo $post['user'] ?>" data-postid="<?php echo $post['post_id'] ?>" data-description="<?php echo $post['description'] ?>"  data-likes="<?php echo $post['likes'] ?>">
             <a href="user.php?id=<?php echo $post['user'] ?>" id="user"><?php echo $post['user'] ?></a>
             <p id="likes"  onclick="showModal(this)" data-image="<?php echo $post['media'] ?>" data-user="<?php echo $post['user'] ?>" data-postid="<?php echo $post['post_id'] ?>" data-description="<?php echo $post['description'] ?>  data-likes="<?php echo $post['likes'] ?>"">&#10084; <?php echo $post['likes'] ?></p>
           </div>
           <img src="Pthumbnail/<?php echo $post['thumbnail'] ?>" onclick="showModal(this)" data-image="<?php echo $post['media'] ?>" data-user="<?php echo $post['user'] ?>" data-postid="<?php echo $post['post_id'] ?>" data-description="<?php echo $post['description'] ?>" data-likes="<?php echo $post['likes'] ?>" >
         </div>

      <?php

       if ($i % 9 == 0) {
           ?></div><?php
       }

        $i++;
    } ?>
</div>
<div class="scroller">
  <div class='icon-scroll' id="scrollAnim"></div>
  <br><br><br>
    <p id="text">Scroll down</p>
</div>

<div class="scroller-small">
  <div class='icon-scroll-small' id="scrollAnimSmall"></div>
</div>

<div class="spacer" style="min-height: 600px;">
</div>
</div>

   <div class="modal" id="modal" onclick="hideModal()">
      <div class="image">
        <p id="modal-exit">&#x2716;</p>
        <img id="modal-image">
      </div>
      <div class="sidebar">
        <div class="top">
        <a href="" id="modal-user"></a>
        <p id="modal-likes"></p>
        <p id="modal-description"></p>
        </div>
        <div class="bottom">
      	<p id="modal-comments"></p>
        </div>
      </div>
   </div>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   <script type="text/javascript">
   for (i = 0; i < 100; i++) {
    $(".layer" + i + " .post").hide();
  }

  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    console.log(scroll);

    //scrolling animation
    // if (scroll >= 225) {
    //   document.getElementById("scrollAnim").style.left = "95%";
    //   document.getElementById("scrollAnim").style.top = "95%";
    //   document.getElementById("scrollAnim").style.position = "fixed";
    //   document.getElementById("scrollAnim").style.height = "35px";
    //   document.getElementById("scrollAnim").style.width = "20px";
    //   document.getElementById("scrollAnim").style.opacity = "70%";
    // } else {
    //   document.getElementById("scrollAnim").style.left = "50%";
    //   document.getElementById("scrollAnim").style.top = "30%";
    //   document.getElementById("scrollAnim").style.position = "absolute";
    //   document.getElementById("scrollAnim").style.height = "70px";
    //   document.getElementById("scrollAnim").style.width = "40px";
    //   document.getElementById("scrollAnim").style.opacity = "100%";
    // }
    if (scroll >= 225) {
      document.getElementById("scrollAnim").style.display = "none"
      document.getElementById("scrollAnimSmall").style.display = "block";
    } else {
      document.getElementById("scrollAnim").style.display = "block"
      document.getElementById("scrollAnimSmall").style.display = "none";
    }

    //scroll to first row of posts
    // if (scroll < 300) {
    //   window.scrollTo(0,300);
    // }

    for (i = 0; i < 100; i++) {
      var imgLayer = ".layer" + i + " .post";

      //-200 - 200 > opacity 0 - 100
      //200 - 880 > opacity 100
      //880 - 1280 > opacity 100 - 0

      if (scroll >= (1080 * i) - 400 && scroll < (1080 * i) + 200) {
        //-200 - opacity 0
        //200 - opacity 1
        //scroll / 200 = opacity
        var postZoom = 1 + ((scroll - i * 1080) / 1080) * 0.5;
        console.log("postZoom: " + postZoom);
        var opac = ((scroll - (1080 * i)) / 600) * 100;
        console.log("opacity: " + opac);
        $(imgLayer).css({
          opacity: opac + "%",
          transform: 'scale(' + postZoom + ')'
        })
        $(imgLayer).attr("onclick", "showModal(this)");
        $(imgLayer).show();
        console.log("layer" + i);
      } else if (scroll >= (1080 * i) + 200 && scroll < (1080 * i) + 880) {
        //opacity 100
        var postZoom = 1 + ((scroll - i * 1080) / 1080) * 0.5;
        console.log("postZoom: " + postZoom);
        $(imgLayer).css({
          opacity: 100 + "%",
          transform: 'scale(' + postZoom + ')'
        })
        $(imgLayer).attr("onclick", "showModal(this)");
        $(imgLayer).show();
        console.log("layer" + i);
      } else if (scroll >= (1080 * i) + 880 && scroll < (1080 * (i + 1)) + 400) {
        //880 - opacity 100
        //1280 - opacity 0
        //1 - (scroll - 880 / 200) = opacity
        var postZoom = 1 + ((scroll - i * 1080) / 1080) * 0.5;
        console.log("postZoom: " + postZoom);
        var opac = 100 - (((scroll - (1080 * i)) - 880) / 600) * 100;
        console.log("opacity: " + opac);
        $(imgLayer).css({
          opacity: opac + "%",
          transform: 'scale(' + postZoom + ')'
        })
        $(imgLayer).attr("onclick", "showModal(this)");
        $(imgLayer).show();
        console.log("layer" + i);
      } else {
        //hide
        $(imgLayer).css({
          opacity: 0 + "%"
        })
        $(imgLayer).attr("onclick", "null");
        $(imgLayer).hide();
      }
    }

    var backgroundZoom = 1 + (scroll / 10000) * 0.1;
    console.log("backgroundZoom: " + backgroundZoom);
    $(".background").css({
      transform: 'scale(' + backgroundZoom + ')'
    })

  })

     function showModal(element) {
       document.getElementById("modal-image").src = "media/" + element.getAttribute("data-image");
       document.getElementById("modal-description").innerHTML = element.getAttribute("data-description");
       document.getElementById("modal-user").innerHTML = element.getAttribute("data-user");
       document.getElementById("modal-user").href = "user.php?id=" + element.getAttribute("data-user");
       document.getElementById("modal-likes").innerHTML = "&#10084; " + element.getAttribute("data-likes");
       getComment(element.getAttribute("data-postid"));
       document.getElementById("modal").style.display = "block";
     }

     function hideModal(element) {
       document.getElementById("modal").style.display = "none";
     }

     //initial scroll
     // function firstScroll() {
     //   window.scrollTo(0,500);
     // }

     function getComment(postid) {
       var xmlhttp=new XMLHttpRequest();
       xmlhttp.onreadystatechange=function() {
         if (this.readyState==4 && this.status==200) {
           document.getElementById("modal-comments").innerHTML=this.responseText;
         }
       }
       xmlhttp.open("GET","includes/commentP.php?postid="+postid,true);
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
