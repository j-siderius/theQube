<?php
if ($_COOKIE['robot'] == 1) {
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SudoQu</title>
    <link rel="icon" type="image/svg+xml" href="assets/GameQube.svg">
    <link rel="preload" as="font" href="style/Segoe UI.woff" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="style/Segoe UI Italic.woff" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="style/Segoe UI Bold.woff" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="style/Segoe UI Bold Italic.woff" type="font/woff2" crossorigin="anonymous">
    <style type="text/css">


      html, body {
        background-color: rgb(90,90,90);
      }

      table {
        margin-left: auto;
        margin-right: 40%;
        margin-top: auto;
        margin-bottom: auto;
        height: 700px;
        width: 700px;
        border-collapse: collapse;
      }

      #backButton{
        border: 2px solid green;
        padding: 15px 20px;
        color: black;
        background-color: white;
      }
      #backButton:hover{
        border: 2px solid green;
        padding: 15px 20px;
        color: white;
        background-color: green;
      }

      #you{
        color: green;
      }
      #opp{
        color: red;
      }

      .border {
        color: rgb(255,255,255);
        background-color: rgb(40,40,40);
        right: 0;
        top:0;
        position: fixed;
        height: 100%;
        width: 20%;
      }
      .text{
        font-size: 20px;
        position: absolute;
        top: 20%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
      }

      .line{
        color: rgb(255,255,255);
        position: absolute;
        width:100%;
      }

        td {
          border: 2px solid rgb(0,0,0);
          text-align: center;
        }

      input {
        color: rgb(150,150,150);
        padding: 0;
        border: 0;
        text-align: center;
        width: 70px;
        height: 70px;
        font-size: 40px;
        background-color: rgb(90,90,90);
        outline: none;
      }

      input:disabled {
        background-color: rgb(30,30,30);
      }

      body {
        font-family: 'Segoe UI Regular';
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

    </style>
  </head>
  <body>
    <div class = "border">
      <div class = "text">
      <h1 id = "opp"></h1>
      <h2>vs</h2>
      <h1 id = "you">Public user</h1>
      <hr class = "line"></hr>
    </div>
    </div>

    <a href="/gameqube.php"><img src="assets/BackIcon.svg" alt="Back" style="position: fixed; height: 5%; top: 2vh; left: 2vh; cursor: pointer;"></a>
    <img src="assets/Question.svg" alt="Explanation" style="position: fixed; height: 5%; top: 10vh; left: 2vh; cursor: pointer;" onclick="getElementById('modal').style.display = 'block';">

    <div class="container">

      <table id="grid">

        <tr>
          <td><input onKeyPress = "checkElement(event, 0)" id="cell-0"  text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 1)" id="cell-1"  text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 2)" id="cell-2"  text="text" maxlength="1"></td>

          <td><input onKeyPress = "checkElement(event, 3)" id="cell-3"  text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 4)" id="cell-4"  text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 5)" id="cell-5"  text="text" maxlength="1"></td>

          <td><input onKeyPress = "checkElement(event, 6)" id="cell-6"  text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 7)" id="cell-7"  text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 8)" id="cell-8"  text="text" maxlength="1"></td>
        </tr>

        <tr>
          <td><input onKeyPress = "checkElement(event, 9)" id="cell-9"  text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 10)" id="cell-10" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 11)" id="cell-11" text="text" maxlength="1"></td>

          <td><input onKeyPress = "checkElement(event, 12)" id="cell-12" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 13)" id="cell-13" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 14)" id="cell-14" text="text" maxlength="1"></td>

          <td><input onKeyPress = "checkElement(event, 15)" id="cell-15" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 16)" id="cell-16" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 17)" id="cell-17" text="text" maxlength="1"></td>
        </tr>

        <tr>
          <td><input onKeyPress = "checkElement(event, 18)" id="cell-18" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 19)" id="cell-19" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 20)" id="cell-20" text="text" maxlength="1"></td>

          <td><input onKeyPress = "checkElement(event, 21)" id="cell-21" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 22)" id="cell-22" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 23)" id="cell-23" text="text" maxlength="1"></td>

          <td><input onKeyPress = "checkElement(event, 24)" id="cell-24" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 25)" id="cell-25" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 26)" id="cell-26" text="text" maxlength="1"></td>
        </tr>

        <tr>
          <td><input onKeyPress = "checkElement(event, 27)" id="cell-27" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 28)" id="cell-28" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 29)" id="cell-29" text="text" maxlength="1"></td>

          <td><input onKeyPress = "checkElement(event, 30)" id="cell-30" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 31)" id="cell-31" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 32)" id="cell-32" text="text" maxlength="1"></td>

          <td><input onKeyPress = "checkElement(event, 33)" id="cell-33" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 34)" id="cell-34" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 35)" id="cell-35" text="text" maxlength="1"></td>
        </tr>

        <tr>
          <td><input onKeyPress = "checkElement(event, 36)" id="cell-36" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 37)" id="cell-37" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 38)" id="cell-38" text="text" maxlength="1"></td>

          <td><input onKeyPress = "checkElement(event, 39)" id="cell-39" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 40)" id="cell-40" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 41)" id="cell-41" text="text" maxlength="1"></td>

          <td><input onKeyPress = "checkElement(event, 42)" id="cell-42" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 43)" id="cell-43" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 44)" id="cell-44" text="text" maxlength="1"></td>
        </tr>

        <tr>
          <td><input onKeyPress = "checkElement(event, 45)" id="cell-45" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 46)" id="cell-46" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 47)" id="cell-47" text="text" maxlength="1"></td>

          <td><input onKeyPress = "checkElement(event, 48)" id="cell-48" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 49)" id="cell-49" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 50)" id="cell-50" text="text" maxlength="1"></td>

          <td><input onKeyPress = "checkElement(event, 51)" id="cell-51" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 52)" id="cell-52" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 53)" id="cell-53" text="text" maxlength="1"></td>
        </tr>

        <tr>
          <td><input onKeyPress = "checkElement(event, 54)" id="cell-54" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 55)" id="cell-55" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 56)" id="cell-56" text="text" maxlength="1"></td>

          <td><input onKeyPress = "checkElement(event, 57)" id="cell-57" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 58)" id="cell-58" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 59)" id="cell-59" text="text" maxlength="1"></td>

          <td><input onKeyPress = "checkElement(event, 60)" id="cell-60" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 61)" id="cell-61" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 62)" id="cell-62" text="text" maxlength="1"></td>
        </tr>

        <tr>
          <td><input onKeyPress = "checkElement(event, 63)" id="cell-63" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 64)" id="cell-64" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 65)" id="cell-65" text="text" maxlength="1"></td>

          <td><input onKeyPress = "checkElement(event, 66)" id="cell-66" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 67)" id="cell-67" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 68)" id="cell-68" text="text" maxlength="1"></td>

          <td><input onKeyPress = "checkElement(event, 69)" id="cell-69" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 70)" id="cell-70" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 71)" id="cell-71" text="text" maxlength="1"></td>
        </tr>

        <tr>
          <td><input onKeyPress = "checkElement(event, 72)" id="cell-72" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 73)" id="cell-73" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 74)" id="cell-74" text="text" maxlength="1"></td>

          <td><input onKeyPress = "checkElement(event, 75)" id="cell-75" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 76)" id="cell-76" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 77)" id="cell-77" text="text" maxlength="1"></td>

          <td><input onKeyPress = "checkElement(event, 78)" id="cell-78" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 79)" id="cell-79" text="text" maxlength="1"></td>
          <td><input onKeyPress = "checkElement(event, 80)" id="cell-80" text="text" maxlength="1"></td>
        </tr>

      </table>
    </div>

<div id="modal" onclick="this.style.display = 'none';" style="z-index: 1; position: fixed; background-color: #58585ad9; height: 100%; width: 100%; top: 0; left: 0; display: none; ">
  <p id="modal-exit" style="position:absolute; top: 5%; left: 15vh; margin: 0; color: #ffffff; cursor: pointer;">&#x2716;</p>
      <h1 style="position: relative; text-align: center; top: 5%; color: #ffffff;">SudoQu Explanation</h1>
       <p style="position: relative; text-align: center; top: 5%; color: #ffffff;"><br>SudoQu is a 1 v 1 game on a 9x9 sudoku field. <br>The players take turns in laying down a number from 1 to 9 in the grid.
      <br>Matching numbers cannot be placed in the same line horizontally or vertically or in the same 3x3 square like in sudoku.
      <br>The first player that is unable to place a number according to the rules loses.</p>
    </div>

    <script src="includes/game.js"></script>

  </body>
</html>

<?php
} else {
        setcookie("robot", "", time() - 3600);
        header('Location: captcha.html');
        exit();
    }
     ?>
