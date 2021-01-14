<?php
if ($_COOKIE['robot'] == 1) {
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <title>The Game Qube</title>
      <link rel="icon" type="image/svg+xml" href="assets/GameQube.svg">
      <link rel="preload" as="font" href="style/Segoe UI.woff" type="font/woff2" crossorigin="anonymous">
      <link rel="preload" as="font" href="style/Segoe UI Italic.woff" type="font/woff2" crossorigin="anonymous">
      <link rel="preload" as="font" href="style/Segoe UI Bold.woff" type="font/woff2" crossorigin="anonymous">
      <link rel="preload" as="font" href="style/Segoe UI Bold Italic.woff" type="font/woff2" crossorigin="anonymous">

      <style media="screen">
      #top{
        padding-top: 7.5vh;
        padding-bottom: 1vh;
        color: white;
        background-color: rgb(70,70,70);
        text-align: center;
      }
      #first{
      background-color:  #3a3a3c;
      }

      h1{
        font-size: 22px;
      }

      th, td{
        width: 100px;
        height: 40px;
        color: white;
        background-color: rgb(50,50,50);
      }
      th{
        font-size: 20px;
        background-color: #3a3a3c;
        color: #ffffffaa;
        cursor: not-allowed;
      }
      .firstLine{
        text-align: center;
        width: 20px;
      }

        body {
          font-family: 'Segoe UI Regular';
          background-color: #3a3a3c;
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

        .highscores {
            margin-top: 4%;
            background-color: #8cc63f;
            font-size: 30px;
            display: block;
            width: 2833px;
            text-align: center;
          }

      </style>
    </head>
    <body>

  <div class="header">
    <a href="/qtranslate.php?id=hub"><img src="assets/QubeLogo.svg" alt="The Qube logo" style="float: left; padding-left: 1%;"></a>
    <a href="/UNgameqube.php"><img src="assets/QTranslate.svg" alt="QTranslate logo" style="float: right; padding-right: 1%;"></a>
    <a href="/gameqube.php"><img src="assets/GameQube.svg" alt="QubeTube logo" style="float: none; margin-left: auto; margin-right: auto;"></a>
  </div>
      <h1 class="highscores">Highscores</h1>
      <table id="gameTable">
        <tr>
          <th id="first"></th>
          <th>Go</th>
          <th>Chess</th>
          <th>Y</th>
          <th>Zammas</th>
            <th id="sudoQu"><a href="/sudokugame.php" style="color: #8cc63f; text-decoration: underline;">SudoQu</a></th>
            <th>Sittyin</th>
            <th>zer0</th>
            <th>QBN1</th>
              <th>Hexa</th>
              <th>Astar</th>
              <th>Thud</th>
              <th>Shogi</th>
                <th>Kruzno</th>
                <th>TRf1</th>
                <th>28S</th>
                <th>Checkers</th>
                </tr>
                <tr>
                  <td class="firstLine">1</td>
                  <td id="cell-0"></td>
                  <td id="cell-1"></td>
                  <td id="cell-2"></td>
                  <td id="cell-3"></td>
                  <td id="cell-4"></td>
                  <td id="cell-5"></td>
                  <td id="cell-6"></td>
                  <td id="cell-7"></td>
                  <td id="cell-8"></td>
                  <td id="cell-9"></td>
                  <td id="cell-10"></td>
                  <td id="cell-11"></td>
                  <td id="cell-12"></td>
                  <td id="cell-13"></td>
                  <td id="cell-14"></td>
                  <td id="cell-15"></td>
                </tr>
                <tr>
                  <td class="firstLine">2</td>
                  <td id="cell-16"></td>
                  <td id="cell-17"></td>
                  <td id="cell-18"></td>
                  <td id="cell-19"></td>
                  <td id="cell-20"></td>
                  <td id="cell-21"></td>
                  <td id="cell-22"></td>
                  <td id="cell-23"></td>
                  <td id="cell-24"></td>
                  <td id="cell-25"></td>
                  <td id="cell-26"></td>
                  <td id="cell-27"></td>
                  <td id="cell-28"></td>
                  <td id="cell-29"></td>
                  <td id="cell-30"></td>
                  <td id="cell-31"></td>
                </tr>
                <tr>
                  <td class="firstLine">3</td>
                  <td id="cell-32"></td>
                  <td id="cell-33"></td>
                  <td id="cell-34"></td>
                  <td id="cell-35"></td>
                  <td id="cell-36"></td>
                  <td id="cell-37"></td>
                  <td id="cell-38"></td>
                  <td id="cell-39"></td>
                  <td id="cell-40"></td>
                  <td id="cell-41"></td>
                  <td id="cell-42"></td>
                  <td id="cell-43"></td>
                  <td id="cell-44"></td>
                  <td id="cell-45"></td>
                  <td id="cell-46"></td>
                  <td id="cell-47"></td>
                </tr>
                <tr>
                  <td class="firstLine">4</td>
                  <td id="cell-48"></td>
                  <td id="cell-49"></td>
                  <td id="cell-50"></td>
                  <td id="cell-51"></td>
                  <td id="cell-52"></td>
                  <td id="cell-53"></td>
                  <td id="cell-54"></td>
                  <td id="cell-55"></td>
                  <td id="cell-56"></td>
                  <td id="cell-57"></td>
                  <td id="cell-58"></td>
                  <td id="cell-59"></td>
                  <td id="cell-60"></td>
                  <td id="cell-61"></td>
                  <td id="cell-62"></td>
                  <td id="cell-63"></td>
                </tr>
                <tr>
                  <td class="firstLine">5</td>
                  <td id="cell-64"></td>
                  <td id="cell-65"></td>
                  <td id="cell-66"></td>
                  <td id="cell-67"></td>
                  <td id="cell-68"></td>
                  <td id="cell-69"></td>
                  <td id="cell-70"></td>
                  <td id="cell-71"></td>
                  <td id="cell-72"></td>
                  <td id="cell-73"></td>
                  <td id="cell-74"></td>
                  <td id="cell-75"></td>
                  <td id="cell-76"></td>
                  <td id="cell-77"></td>
                  <td id="cell-78"></td>
                  <td id="cell-79"></td>
                </tr>
                <tr>
                  <td class="firstLine">6</td>
                  <td id="cell-80"></td>
                  <td id="cell-81"></td>
                  <td id="cell-82"></td>
                  <td id="cell-83"></td>
                  <td id="cell-84"></td>
                  <td id="cell-85"></td>
                  <td id="cell-86"></td>
                  <td id="cell-87"></td>
                  <td id="cell-88"></td>
                  <td id="cell-89"></td>
                  <td id="cell-90"></td>
                  <td id="cell-91"></td>
                  <td id="cell-92"></td>
                  <td id="cell-93"></td>
                  <td id="cell-94"></td>
                  <td id="cell-95"></td>
                </tr>
                <tr>
                  <td class="firstLine">7</td>
                  <td id="cell-96"></td>
                  <td id="cell-97"></td>
                  <td id="cell-98"></td>
                  <td id="cell-99"></td>
                  <td id="cell-100"></td>
                  <td id="cell-101"></td>
                  <td id="cell-102"></td>
                  <td id="cell-103"></td>
                  <td id="cell-104"></td>
                  <td id="cell-105"></td>
                  <td id="cell-106"></td>
                  <td id="cell-107"></td>
                  <td id="cell-108"></td>
                  <td id="cell-109"></td>
                  <td id="cell-110"></td>
                  <td id="cell-111"></td>
                </tr>
                <tr>
                  <td class="firstLine">8</td>
                  <td id="cell-112"></td>
                  <td id="cell-113"></td>
                  <td id="cell-114"></td>
                  <td id="cell-115"></td>
                  <td id="cell-116"></td>
                  <td id="cell-117"></td>
                  <td id="cell-118"></td>
                  <td id="cell-119"></td>
                  <td id="cell-120"></td>
                  <td id="cell-121"></td>
                  <td id="cell-122"></td>
                  <td id="cell-123"></td>
                  <td id="cell-124"></td>
                  <td id="cell-125"></td>
                  <td id="cell-126"></td>
                  <td id="cell-127"></td>
                </tr>
                <tr>
                  <td class="firstLine">9</td>
                  <td id="cell-128"></td>
                  <td id="cell-129"></td>
                  <td id="cell-130"></td>
                  <td id="cell-131"></td>
                  <td id="cell-132"></td>
                  <td id="cell-133"></td>
                  <td id="cell-134"></td>
                  <td id="cell-135"></td>
                  <td id="cell-136"></td>
                  <td id="cell-137"></td>
                  <td id="cell-138"></td>
                  <td id="cell-139"></td>
                  <td id="cell-140"></td>
                  <td id="cell-141"></td>
                  <td id="cell-142"></td>
                  <td id="cell-143"></td>
                </tr>
                <tr>
                  <td class="firstLine">10</td>
                  <td id="cell-144"></td>
                  <td id="cell-145"></td>
                  <td id="cell-146"></td>
                  <td id="cell-147"></td>
                  <td id="cell-148"></td>
                  <td id="cell-149"></td>
                  <td id="cell-150"></td>
                  <td id="cell-151"></td>
                  <td id="cell-152"></td>
                  <td id="cell-153"></td>
                  <td id="cell-154"></td>
                  <td id="cell-155"></td>
                  <td id="cell-156"></td>
                  <td id="cell-157"></td>
                  <td id="cell-158"></td>
                  <td id="cell-159"></td>
                </tr>
                <tr>
                  <td class="firstLine">11</td>
                  <td id="cell-160"></td>
                  <td id="cell-161"></td>
                  <td id="cell-162"></td>
                  <td id="cell-163"></td>
                  <td id="cell-164"></td>
                  <td id="cell-165"></td>
                  <td id="cell-166"></td>
                  <td id="cell-167"></td>
                  <td id="cell-168"></td>
                  <td id="cell-169"></td>
                  <td id="cell-170"></td>
                  <td id="cell-171"></td>
                  <td id="cell-172"></td>
                  <td id="cell-173"></td>
                  <td id="cell-174"></td>
                  <td id="cell-175"></td>
                </tr>
                <tr>
                  <td class="firstLine">12</td>
                  <td id="cell-176"></td>
                  <td id="cell-177"></td>
                  <td id="cell-178"></td>
                  <td id="cell-179"></td>
                  <td id="cell-180"></td>
                  <td id="cell-181"></td>
                  <td id="cell-182"></td>
                  <td id="cell-183"></td>
                  <td id="cell-184"></td>
                  <td id="cell-185"></td>
                  <td id="cell-186"></td>
                  <td id="cell-187"></td>
                  <td id="cell-188"></td>
                  <td id="cell-189"></td>
                  <td id="cell-190"></td>
                  <td id="cell-191"></td>
                </tr>
                <tr>
                  <td class="firstLine">13</td>
                  <td id="cell-192"></td>
                  <td id="cell-193"></td>
                  <td id="cell-194"></td>
                  <td id="cell-195"></td>
                  <td id="cell-196"></td>
                  <td id="cell-197"></td>
                  <td id="cell-198"></td>
                  <td id="cell-199"></td>
                  <td id="cell-200"></td>
                  <td id="cell-201"></td>
                  <td id="cell-202"></td>
                  <td id="cell-203"></td>
                  <td id="cell-204"></td>
                  <td id="cell-205"></td>
                  <td id="cell-206"></td>
                  <td id="cell-207"></td>
                </tr>
                <tr>
                  <td class="firstLine">14</td>
                  <td id="cell-208"></td>
                  <td id="cell-209"></td>
                  <td id="cell-210"></td>
                  <td id="cell-211"></td>
                  <td id="cell-212"></td>
                  <td id="cell-213"></td>
                  <td id="cell-214"></td>
                  <td id="cell-215"></td>
                  <td id="cell-216"></td>
                  <td id="cell-217"></td>
                  <td id="cell-218"></td>
                  <td id="cell-219"></td>
                  <td id="cell-220"></td>
                  <td id="cell-221"></td>
                  <td id="cell-222"></td>
                  <td id="cell-223"></td>
                </td>
                <tr>
                  <td class="firstLine">15</td>
                  <td id="cell-224"></td>
                  <td id="cell-225"></td>
                  <td id="cell-226"></td>
                  <td id="cell-227"></td>
                  <td id="cell-228"></td>
                  <td id="cell-229"></td>
                  <td id="cell-230"></td>
                  <td id="cell-231"></td>
                  <td id="cell-232"></td>
                  <td id="cell-233"></td>
                  <td id="cell-234"></td>
                  <td id="cell-235"></td>
                  <td id="cell-236"></td>
                  <td id="cell-237"></td>
                  <td id="cell-238"></td>
                  <td id="cell-239"></td>
                </td>
        </table>

         <script src="includes/scoreboard.js"></script>
    </body>
</html>
<?php
} else {
        setcookie("robot", "", time() - 3600);
        header('Location: captcha.html');
        exit();
    }
?>
