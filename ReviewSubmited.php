<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Signed Up</title>
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
        <h3 class="text-muted">PS4 Revs</h3>
      </div>

      <div class="jumbotron">
        <h1>Thank You!</h1>
        <p>Your Review Has Been Succefully Submitted.</p>


      </div>


        <div class="page-header">

        </div>



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

