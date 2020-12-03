<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>PS4 Games</title>
      <!-- Include Bootstrap -->
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/bootstrap-theme.css" rel="stylesheet">
      <!-- Include Site Specific Styles -->
      <link href="css/site.css" rel="stylesheet">
   </head>
   <body>
      <!-- Fixed navbar -->
      <div class="container">
         <div class="header clearfix">
            <nav>
               <ul class="nav nav-pills pull-right">
                  <li role="presentation"><a href="MainPage.php">Home</a></li>
                  <li role="presentation"><a href="GamesPage.php">Game</a></li>
                  <li role="presentation"><a href="ConsolePage.php">Console</a></li>
                  <li role="presentation"><a href="MyWebsite.php">Recommendation</a></li>
                  <li role="presentation"><a href="LogIn.php">Log-In</a></li>
               </ul>
            </nav>
         </div>
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <style>
            * {
            box-sizing: border-box;
            }
            input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
            }
            label {
            padding: 12px 12px 12px 0;
            display: inline-block;
            }
            input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            }
            }
            .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            }
            .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
            }
            .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
            }
            /* Clear floats after the columns */
            .row:after {
            content: "";
            display: table;
            clear: both;
            }
            /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {
            .col-25, .col-75, input[type=submit] {
            width: 100%;
            margin-top: 0;
            }
            }
         </style>
         <div class="container">
            <form action="/action_page.php">
               <div class="row">
                  <div class="col-25">
                     <label for="fname">Username:</label>
                  </div>
                  <div class="col-75">
                     <input type="text" id="username" name="username" placeholder="Your username..">
                  </div>
               </div>
               <div class="row">
                  <div class="col-25">
                     <label for="game">Game Title</label>
                  </div>
                  <div class="col-75">
                     <select id="game" name="game" >
                        <option value="game">Select Game</option>
                        <option value="spiderman">Spider-Man</option>
                        <option value="Driveclub">DRIVECLUB</option>
                        <option value="ufc">UFC 3</option>
                        <option value="fortnite">Fortnite</option>
                        <option value="knack">Knack</option>
                        <option value="spyro">Spyro</option>
                        <option value="the incredible">The Incredibles</option>
                        <option value="crash">Crash Bandicoot</option>
                        <option value="F1">F1 2018</option>
                        <option value="FIFA">FIFA 20</option>
                        <option value="NBA">NBA 2K20</option>
                     </select>
                  </div>
               </div>
               <div class="row">
                  <div class="col-25">
                     <label for="subject">Your Thoughts:</label>
                  </div>
                  <div class="col-75">
                     <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                     <a class="btn btn-primary" href="ReviewSubmited.php" role="button">Sumbit</a>
                  </div>
               </div>
         </div>
         </form>
      </div>
      </div>
      </head>
   </body>
</html>



<?php
// ----INCLUDE APIS------------------------------------
// Include our Website API
include ("api/api.inc.php");

// ----PAGE GENERATION LOGIC---------------------------
function createPage()
{
    $tcontent = <<<PAGE


PAGE;
    return $tcontent;
}

// ----BUSINESS LOGIC---------------------------------
$tpagecontent = createPage();
$taction = htmlspecialchars($_SERVER['PHP_SELF']);
$tmethod = "POST";
$tpagecontent = createPage();

// ----BUILD OUR HTML PAGE----------------------------
// Create an instance of our Page class
$tindexpage = new MasterPage("Home Page");
$tindexpage->setDynamic2($tpagecontent);
$tindexpage->renderPage();

?>
