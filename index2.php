<?php
// Pull user data from the cookie and store it as a variable
  $userInput1 = $_COOKIE["input1"];
  $userInput2 = $_COOKIE["input2"];
  $userInput3 = $_COOKIE["input3"];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- This is the stylesheet for Source Intelligence -->
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <!-- This is the our stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/customLess.css">
    <!-- This is the script for jquery use -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- jQuery library -->
  	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <!-- Add cdn to chart.js library files. -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
    <!-- This is the javaScript for Source Intelligence -->
    <script type="text/javascript" src="js/project.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Source Intelligence Onboarding">
    <meta name="author" content="Ramin Mesghali &amp; John Richardson">


    <title>Source Intelligence </title>

    <!-- Bootstrap core CSS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- This script gives you access to font-awesome icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
  </head>

  <body>
    <!-- This is the navbar for Source Intelligence -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
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
    </br>
<!-- Progress Bar at 66% Stage 2 -->
    <div class="progress">
      <table class="progressTable">
        <tr>
          <td class="index2Progress">Goal Recommendations</td>
          <td class="index2Progress">Goal Review</td>
          <td id="progress3">Security &amp; Submit</td>
        </tr>
      </table>
        <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 57%;">
          <span class="sr-only"></span>
        </div>
    </div>
    <br>
<!-- Main Header -->
    <div class="head">
      <h1 class="headingh1"> Review your first compliance goal to begin </h1>
      <h4 class="headingh4"> Your first goal is set up – you can make changes or add more goals after signing up.</h4></br>
    </div>
<!-- Collapsable panels below -->
    <div class="container" >
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
              </h4>
            </div>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse in">
            <div class="panel-body infoLeftAndRight">
              <div class="container contHeight">
                <div class="row">
                  <div class="col-sm-1">
                  </div>
                  <div class="col-sm-5 infoLeft">
                    <div class="leftColHeader">
                      <span>Test 1</span>
                      <span>Test 2</span>
                      <span>Test 3</span>
                      <span>Test 4</span>
                    </div>
                    </br>
                    </br>
                    <!-- This displays the user animation of four images -->
                    <div id="cf">
                      <img src="images/test_1.png"/>
                      <img src="images/test_2.png"/>
                      <img src="images/test_3.png"/>
                      <img src="images/test_4.png"/>
                    </div>
                    <br>
                  </div>
                  <div class="col-sm-5 infoRight">
                    <h4 class="regulationsHeader">Selected Regulations</h4>
                      <div class="regulationList">
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
                          $regulations = $regulations['regulation'];
                          $regulations = explode(",",$regulations);
                          // Loops through string to display regulations in list
                          foreach ($regulations as $str) {
                            echo "<li>".$str."</li>";
                          }
                        }
                          elseif ($userInput2 == "Apparel"){
                            try {
                                $results = $db->query("SELECT apparel FROM manufacturer WHERE region = '$userInput3'");
                            } catch (Exception $e) {
                                echo "Not successful";
                                exit;
                            }
                            $regulations = $results->fetch(PDO::FETCH_ASSOC);
                            $regulations = $regulations['apparel'];
                            $regulations = explode(",",$regulations);
                            foreach ($regulations as $str) {
                              echo "<li>".$str."</li>";
                            }
                          }
                          elseif ($userInput2 == "Consumer Goods") {
                            try {
                                $results = $db->query("SELECT consumerGoods FROM manufacturer WHERE region = '$userInput3'");
                            } catch (Exception $e) {
                                echo "Not successful";
                                exit;
                            }
                            $regulations = $results->fetch(PDO::FETCH_ASSOC);
                            $regulations = $regulations['consumerGoods'];
                            $regulations = explode(",",$regulations);
                            foreach ($regulations as $str) {
                              echo "<li>".$str."</li>";
                            }
                          }
                          elseif ($userInput2 == "Electronics") {
                            try {
                                $results = $db->query("SELECT electronics FROM manufacturer WHERE region = '$userInput3'");
                            } catch (Exception $e) {
                                echo "Not successful";
                                exit;
                            }
                            $regulations = $results->fetch(PDO::FETCH_ASSOC);
                            $regulations = $regulations['electronics'];
                            $regulations = explode(",",$regulations);
                            foreach ($regulations as $str) {
                              echo "<li>".$str."</li>";
                            }
                          }
                          elseif ($userInput2 == "Aero & Defense") {
                            try {
                                $results = $db->query("SELECT aeroDefense FROM manufacturer WHERE region = '$userInput3'");
                            } catch (Exception $e) {
                                echo "Not successful";
                                exit;
                            }
                            $regulations = $results->fetch(PDO::FETCH_ASSOC);
                            $regulations = $regulations['aeroDefense'];
                            $regulations = explode(",",$regulations);
                            foreach ($regulations as $str) {
                              echo "<li>".$str."</li>";
                            }
                          }
                          elseif ($userInput2 == "Industrial") {
                            try {
                                $results = $db->query("SELECT industrial FROM manufacturer WHERE region = '$userInput3'");
                            } catch (Exception $e) {
                                echo "Not successful";
                                exit;
                            }
                            $regulations = $results->fetch(PDO::FETCH_ASSOC);
                            $regulations = $regulations['industrial'];
                            $regulations = explode(",",$regulations);
                            foreach ($regulations as $str) {
                              echo "<li>".$str."</li>";
                            }
                          }
                        ?>
                      </div>
                      <br>
                    <!-- Table for Source Intelligence features-->
                    <table class="featuresTable" rules= "rows">
                      <thead>
                        <span class="tableHeader">Features</span>
                      </thead>
                      <tr class="rightTableRows">
                        <td class="slideText">
                          <i class="fa fa-chevron-right featuresChevron" aria-hidden="true"></i>
                          24 Hour Phone Support
                        </td>
                        <td class="featuresCheck">
                          <i class="fa fa-check" aria-hidden="true"></i>
                        </td>
                        <td><hr></td>
                      </tr>
                      <tr class="rightTableRows">
                        <td class="slideText">
                          <i class="fa fa-chevron-right featuresChevron" aria-hidden="true"></i>
                          Email Alerts
                        </td>
                        <td class="featuresCheck">
                          <i class="fa fa-check" aria-hidden="true"></i>
                        </td>
                        <td><hr></td>
                      </tr>
                      <tr class="rightTableRows">
                        <td class="slideText">
                          <i class="fa fa-chevron-right featuresChevron" aria-hidden="true"></i>
                          Compliance Status with Selected Regulations
                        </td>
                        <td class="featuresCheck">
                          <i class="fa fa-check" aria-hidden="true"></i>
                        </td>
                        <td><hr></td>
                      </tr>
                      <tr class="rightTableRows">
                        <td class="slideText">
                          <i class="fa fa-chevron-right featuresChevron" aria-hidden="true"></i>
                          Unlimited Parts
                        </td>
                        <td class="featuresCheck">
                          <i class="fa fa-check" aria-hidden="true"></i>
                        </td>
                        <td><hr></td>
                      </tr>
                      <tr class="rightTableRows">
                        <td class="slideText">
                          <i class="fa fa-chevron-right featuresChevron" aria-hidden="true"></i>
                          Unlimited Supplier Contacts
                        </td>
                        <td class="featuresCheck">
                          <i class="fa fa-check" aria-hidden="true"></i>
                        </td>
                        <td><hr></td>
                      </tr>
                      <tr class="rightTableRows">
                        <td class="slideText">
                          <i class="fa fa-chevron-right featuresChevron" aria-hidden="true"></i>
                          Over 20 State, Federal and International Regulations
                        </td>
                        <td class="featuresCheck">
                          <i class="fa fa-check" aria-hidden="true"></i>
                        </td>
                        <td><hr></td>
                      </tr>
                    </table>
                  </div>
                  <div class="col-sm-1">
                  </div>
                </div>
              </div>
              </br>
            </div>
          </div>
        </div>
      </div>
    </div>
    </br>
    <!-- These are the buttons at the buttom of the page-->
    <h4 class="signUpText">You can change target and allocation of this goal or add more goals after you sign up.</h4>
    <br>
    <div class="button">
      <button class="btn btn-primary customBtn" type="submit" onclick="location.href='index.html'">Back</button>
      <button class="btn btn-primary customBtn" type="submit" onclick="location.href='register.html'">Continue to Sign Up</button>
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
