<?php
  // Starting session to save the user's input into a variable and store it as a cookie
  session_start();
    $userInput1 = $_POST['input1'];
    $userInput2 = $_POST['input2'];
    $userInput3 = $_POST['input3'];
    setcookie("input1", $userInput1);
    setcookie("input2", $userInput2);
    setcookie("input3", $userInput3);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- This is the stylesheet for Source Intelligence -->
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <!-- This is the stylesheet for our custom css -->
    <link rel="stylesheet" type="text/css" href="css/customLess.css">
    <!-- These are the scripts for jquery/javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/project.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Source Intelligence Onboarding">
    <meta name="author" content="Ramin Mesghali &amp; John Richardson">

    <title>Source Intelligence </title>

    <!-- Bootstrap core CSS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

  </head>
<!-- This is the code for Source Intelligence RESULTS PAGE 1-->
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"   data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <!-- Company Logo in NavBar -->
          <a  href="http://www.sourceintelligence.com/"><img class="siLogo" src="images/si.png" alt="Source"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Enterprise Solutions
              <span class="caret"></span></a>
              <ul class="dropdown-menu navbarDropdown">
                <li><a href="#">Conflict Minerals</a></li>
                <li><a href="#">Smeleter Verification</a></li>
                <li><a href="#">Restricted Substances</a></li>
                <li><a href="#">Anti-Corruption</a></li>
                <li><a href="#">Anti-Bribery</a></li>
                <li><a href="#">Human Trafficking</a></li>
                <li><a href="#">Forced Labor</a></li>
              </ul>
            </li>
            <li>
              <a href="register.html">Sign Up</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    </br>
    <br>
<!-- Progress Bar at 33% Stage1-->
    <div class="progress">
      <table class="progressTable">
        <tr>
          <td class="registerProgress">Goal Recommendations</td>
          <td>Goal Review</td>
          <td id="progress3">Security &amp; Submit</td>
        </tr>
      </table>
      <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 16%;">
        <span class="sr-only"></span>
      </div>
    </div>
    <br>
    <div class="head">
      <h1 class="headingh1"> Select your first compliance goal to begin </h1>
      <h4 class="headingh4"> We've recommended goals based on your industry and where you sell to.</h4>
      </br>
    </div>
  <!-- Collapsable panels below -->
    <div class="container">
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading customPanel">
            <h4 class="panel-title">
              <div class="row">
                <div class="col-sm-6">
                  </br>
                  <div class="mainPanelIconLabel">
                    <i class="fa fa-list-alt panelIcon" aria-hidden="true"></i>
                    <div class="iconLabel">
                      <p class="mainPanelLabel">Your Plan</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  </br>
                  <div class="pull-right variableTable">
                    <!-- This displays the user inputs from the onboarding page -->
                    <span class="inputPageVariables">
                      <?php echo $userInput1;?> of <?php echo $userInput2;?> in <?php echo $userInput3;?>
                    </span>
                  </div>
                </div>
              </div>
            </h4>
          </div>
        </div>
      <div class="panel panel-default firstPriority topMargin priorityPanels">
        <a id="priorityOne" class="accordion-toggle yourPlan" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          <div class="panel-heading expandPanel">
            <h4 class="panel-title">
              <div class="row">
                <div id="priorityOneBox" class="col-sm-4 greyBox1">
                </br>
                  <i class="fa fa-chain-broken panelIcon" aria-hidden="true"></i>
                  <div class="iconLabel">
                    <span>Priority 1</span>
                    <p class="priorityName">Chemical Management</p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- The PHP code here displays users inputs into first priority goal -->
                  <h4 class="panelText1">Chemical regulations to be concerned with as a <?php echo $userInput1;?> in <?php echo $userInput3;?></h4>
                </div>
                <div class="col-sm-2 panelChevron">
                  <i class="fa fa-chevron-down chevron1 rotate" aria-hidden="true"></i>
                </div>
              </div>
            </h4>
          </div>
        </a>
        <div id="collapseOne" class="panel-collapse collapse">
          <div class="panel-body fixed-panel">
            <!-- This displays a different globe image for each region selected by user -->
            <div class="mapDiv">
              <?php
                if ($userInput3 == "Asia") {
                    echo '<img class="mapImage" src="images/asia.png">';
                }
                  elseif ($userInput3 == "EU") {
                    echo '<img class="mapImage" src="images/eu.png">';
                }
                  elseif ($userInput3 == "US & Canada") {
                    echo '<img class="mapImage" src="images/us-and-canada.png">';
                }
                  elseif ($userInput3 == "Rest of World") {
                    echo '<img class="mapImage" src="images/map.png">';
                }
              ?>
            </div>
            </br>
            </br>
            <span class="regulations">Regulations you should be concerned with:</span></br>
            <span class="industry">Based on your industry and where you sell into, your company's first compliance concern should be:</span>
              <p>
                <?php
                // Database queries based on the users input
                // Displays regulations matching user inputs
                require('db/database.php');
                if ($userInput1 == "Retailer") {
                  try {
                      $results = $db->query("SELECT regulation FROM retailer WHERE region = '$userInput3'");
                  } catch (Exception $e) {
                      echo "Not successful";
                      exit;
                  }
                  $regulations = $results->fetch(PDO::FETCH_ASSOC);
                  echo $regulations['regulation'];
                }
                  elseif ($userInput2 == "Apparel"){
                    try {
                        $results = $db->query("SELECT apparel FROM manufacturer WHERE region = '$userInput3'");
                    } catch (Exception $e) {
                        echo "Not successful";
                        exit;
                    }
                    $regulations = $results->fetch(PDO::FETCH_ASSOC);
                    echo $regulations['apparel'];
                }
                  elseif ($userInput2 == "Consumer Goods") {
                    try {
                        $results = $db->query("SELECT consumerGoods FROM manufacturer WHERE region = '$userInput3'");
                    } catch (Exception $e) {
                        echo "Not successful";
                        exit;
                    }
                    $regulations = $results->fetch(PDO::FETCH_ASSOC);
                    echo $regulations['consumerGoods'];
                  }
                  elseif ($userInput2 == "Electronics") {
                    try {
                        $results = $db->query("SELECT electronics FROM manufacturer WHERE region = '$userInput3'");
                    } catch (Exception $e) {
                        echo "Not successful";
                        exit;
                    }
                    $regulations = $results->fetch(PDO::FETCH_ASSOC);
                    echo $regulations['electronics'];
                  }
                  elseif ($userInput2 == "Aero & Defense") {
                    try {
                        $results = $db->query("SELECT aeroDefense FROM manufacturer WHERE region = '$userInput3'");
                    } catch (Exception $e) {
                        echo "Not successful";
                        exit;
                    }
                    $regulations = $results->fetch(PDO::FETCH_ASSOC);
                    echo $regulations['aeroDefense'];
                  }
                  elseif ($userInput2 == "Industrial") {
                    try {
                        $results = $db->query("SELECT industrial FROM manufacturer WHERE region = '$userInput3'");
                    } catch (Exception $e) {
                        echo "Not successful";
                        exit;
                    }
                    $regulations = $results->fetch(PDO::FETCH_ASSOC);
                    echo $regulations['industrial'];
                  }
                ?>
              </p>
              </br>
              </br>
            <div class="button">
              <button class="btn btn-primary customBtn" type="submit" onclick="location.href='index2.php'">Select this goal</button>
            </div>
          </div>
        </div>
      </div>
    <!-- Second Panel -->
      <div class="panel panel-default priorityPanels">
        <a id="priorityTwo"class="accordion-toggle yourPlan" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
          <div class="panel-heading expandPanel">
            <h4 class="panel-title">
              <div class="row">
                <div id="priorityTwoBox" class="col-sm-4 greyBox2">
                </br>
                  <i class="fa fa-shield panelIcon" aria-hidden="true"></i>
                  <div class="iconLabel">
                    <span>Priority 2</span>
                    <p class="priorityName">Conflict Minerals</p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <h4 class="panelText2">All of the Minerals you should be concerned with</h4>
                </div>
                <div class="col-sm-2 panelChevron">
                  <i class="fa fa-chevron-down chevron2 rotate" aria-hidden="true"></i>
                </div>
              </div>
            </h4>
          </div>
        </a>
        <!-- Ready for Content -->
        <div id="collapse2" class="panel-collapse collapse">
          <div class="panel-body">Sign up now to review these goals</div>
        </div>
      </div>
      <!-- Third Panel -->
      <div class="panel panel-default priorityPanels">
        <a id="priorityThree" class="accordion-toggle yourPlan" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
          <div class="panel-heading expandPanel">
            <h4 class="panel-title">
              <div class="row">
                <div id="priorityThreeBox" class="col-sm-4 greyBox3">
                </br>
                  <i class="fa fa-user panelIcon" aria-hidden="true"></i>
                  <div class="iconLabel">
                    <span>Priority 3</span>
                    <p class="priorityName">Human Trafficking</p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <h4 class="panelText3">Concerns related to Human Trafficking</h4>
                </div>
                <div class="col-sm-2 panelChevron">
                  <i class="fa fa-chevron-down chevron3 rotate" aria-hidden="true"></i>
                </div>
              </div>
            </h4>
          </div>
        </a>
        <!--  Ready for content-->
          <div id="collapse3" class="panel-collapse collapse">
            <div class="panel-body">Sign up now to review these goals</div>
          </div>
        </div>
      </div>
    </div>
<!-- This is the sticky footer -->
    <div class="footer navbar-fixed-bottom">
      <div class="container">
        <ul>
          <li><a href="http://www.sourceintelligence.com/privacy-policy/"> Privacy</a></li>
          <li><a href="http://www.sourceintelligence.com/terms-of-use/"> Terms of Use</a></li>
          <li><a href="http://www.sourceintelligence.com/about/"> About Us</a></th>
          <li><a href="http://www.sourceintelligence.com/contact-us/"> Contact Us</a></li>
        </ul>
      </div>
    </div>
  </body>
</html>
