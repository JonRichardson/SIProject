<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- This is the stylesheet for Source Intelligence -->
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <!-- This is the stylesheet for us -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <!-- These are the scripts for jquery/javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/project.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Source Intelligence Onboarding">
    <meta name="author" content="Ramin Mesghali & John Richardson">

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
          <a  href="http://www.sourceintelligence.com/"><img class="siLogo" src="images/si.png" alt="Source"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li></li>
            <li></li>
            <li></li>
          </ul>
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
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">For Suppliers
              <span class="caret"></span></a>
              <ul class="dropdown-menu navbarDropdown">
                <li><a href="#">Resource Center</a></li>
                <li><a href="#">Training & Certifiction</a></li>
                <li><a href="#">Restricted Substances</a></li>
                <li><a href="#">Anti-Corruption</a></li>
                <li><a href="#">Anti-Bribery</a></li>
                <li><a href="#">Human Trafficking</a></li>
                <li><a href="#">Forced Labor</a></li>
              </ul>
            </li>
            <li><a href="../navbar-fixed-top/">Customer Service</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </br>
  <br>
<!-- Progress Bar at 33% -->
  <div class="progress">
    <table class="progressTable">
      <tr>
        <td class="registerProgress">Goal Recommendations</td>
        <td>Goal Review</td>
        <td id="progress3">Security & Submit</td>
      </tr>
    </table>
    <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 16%;">
      <span class="sr-only"></span>
    </div>
  </div>
  <br>
  <div class="head">
    <h1 class="headingh1"> Select your first transparency goal to begin </h1>
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
                  <table>
                    <tr>
                      <td class="inputPageVariables"><?php echo $_GET['input1'];?></td>
                      <td></td>
                      <td class="inputPageVariables"><?php echo $_GET['input2'];?></td>
                      <td></td>
                      <td class="inputPageVariables"><?php echo $_GET['input3'];?></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th class="tableLabels">Type</th>
                      <th> </th>
                      <th class="tableLabels">Industry</th>
                      <th> </th>
                      <th class="tableLabels">Location</th>
                      <th> </th>
                    </tr>
                  </table>
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
                  <p class="priorityName">Regulations</p>
                </div>
              </div>
              <div class="col-sm-6">
                <h4 class="panelText1">Regulations to be concerned with as a Manufacturer in Asia</h4>
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
          <div class="mapDiv2">
            <img id="map" src="images/asia_globe.png" height="280" width="280">
          </div>
          </br>
          </br>
          <span class="regulations">Regulations you should be concerned with:</span></br>
          <span class="industry">Based on your industry, who you sell to and where you primarily do business, your company's biggest compliance concern should be:</span>
            <ul class="regList">
              <li><em>China's GB18401-2003</em></li>
              <li><em>Japan's Household Goods Quality Labeling Act</em></li>
              <!-- <li class="moreItems"><a href="register.html" data-toggle="modal" data-target="#myModal"> + 6 more items ...</a></li> -->
            </ul>
            </br>
            </br>
          <div class="button">
            <button class="btn btn-primary customBtn" type="submit" onclick="location.href='index2.html'">Select this goal</button>
          </div>
        </div>
      </div>
    </div>
  <!-- Div 1 -->
  <!-- Div 2 -->
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
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">Sign up now to review these goals</div>
      </div>
    </div>
    <!-- Div 2 -->
    <!-- Div 3 -->
    <div class="panel panel-default priorityPanels">
      <a id="priorityThree" class="accordion-toggle yourPlan" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        <div class="panel-heading expandPanel">
          <h4 class="panel-title">
            <div class="row">
              <div id="priorityThreeBox" class="col-sm-4 greyBox3">
              </br>
                <i class="fa fa-envira panelIcon" aria-hidden="true"></i>
                <div class="iconLabel">
                  <span>Priority 3</span>
                  <p class="priorityName">Smelter Verification</p>
                </div>
              </div>
              <div class="col-sm-6">
                <h4 class="panelText3">Verify the Smelters associated with your Manufacturer</h4>
              </div>
              <div class="col-sm-2 panelChevron">
                <i class="fa fa-chevron-down chevron3 rotate" aria-hidden="true"></i>
              </div>
            </div>
          </h4>
        </div>
      </a>
        <div id="collapse3" class="panel-collapse collapse">
          <div class="panel-body">Sign up now to review these goals</div>
        </div>
      </div>
    </div>
  </div>
<!-- Modal -->
  <!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">You'll need to sign up to see the other goals.  You can click the button below to review the available goals on the next page.</h4>
        </div>
        <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-primary">Stay on Page</button>
          <button type="button" onclick="location.href='index2.html'" class="btn btn-primary" data-dismiss="modal">Learn more on next page</button>
          <button type="button" onclick="location.href='register.html'" class="btn btn-primary">Sign Up</button> -->
        <!-- </div>
      </div>
    </div>
  </div> -->
<!-- This is an animation for the modal -->
  <!-- <script>
      document.addEventListener('DOMContentLoaded', function() {
          document.getElementById('element').addEventListener('click', function( e ) {
              Custombox.open({
                  target: '#modal',
                  effect: 'slide'
              });
              e.preventDefault();
          });
      });
  </script> -->
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