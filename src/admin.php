<?php
require 'includes/config.inc.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Project Eir</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="media/bootstrap.css" rel="stylesheet">
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
          <a class="navbar-brand" href="index.php">Project Eir</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarColor01">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>       
                  
                  <li class="nav-item">
                      <a class="nav-link">About</a>
                  </li>
              </ul>
              <!-- User login button or if logined show username -->
			                <!-- end of user login spot -->
			  </div>
	  </nav>
	<main role="main" class="flex-shrink-0">
		<div class="container">
			<div id="content">
           
             
            <!-- This is right before the PHP happens -->
            <!-- Tables ================================================== -->
            
            <?php            
            if(isset($_SESSION["username"]) && $_SESSION["username"] != '' && $_SESSION["accesslevel"] == 1)
            {
                $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
                mysqli_select_db($db, DB_NAME);

                $query = "SELECT `userEmail`, `ticTitle`, `ticIssue` FROM supportTickets WHERE `open`=1 ";
                $result = mysqli_query($db, $query);

                echo "<div class=\"row\">
                <div class=\"col-lg-12\">
                <div class=\"page-header\">
                <h1 id=\"tables\">Current Open Tickets</h1>
                </div>
                <div class=\"bs-component\">
                <table class=\"table table-hover\">
                <thead>
                  <tr>
                    <th scope=\"col\">User Email</th>
                    <th scope=\"col\">Ticket Title</th>
                    <th scope=\"col\">Ticket Content</th>
                  </tr>
                </thead>
                <tbody>";

                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<th scope=\"row\">" . $row['userEmail'] . "</td>";
                        echo "<td>" . $row['ticTitle'] . "</td>";
                        echo "<td>" . $row['ticIssue'] . "</td>";
                        echo "</tr>";
                    }
                }

                echo "</tbody>
                </table> 
                </div>
                </div>
                </div>";        

                $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
                mysqli_select_db($db, DB_NAME);

                $query = "SELECT `userEmail`, `ticTitle`, `ticIssue` FROM supportTickets WHERE `open`=0 ";
                $result = mysqli_query($db, $query);

                echo "<div class=\"row\">
                <div class=\"col-lg-12\">
                <div class=\"page-header\">
                <h1 id=\"tables\">Closed Tickets</h1>
                </div>
                <div class=\"bs-component\">
                <table class=\"table table-hover\">
                <thead>
                  <tr>
                    <th scope=\"col\">User Email</th>
                    <th scope=\"col\">Ticket Title</th>
                    <th scope=\"col\">Ticket Content</th>
                  </tr>
                </thead>
                <tbody>";

                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<th scope=\"row\">" . $row['userEmail'] . "</td>";
                        echo "<td>" . $row['ticTitle'] . "</td>";
                        echo "<td>" . $row['ticIssue'] . "</td>";
                        echo "</tr>";
                    }
                }

                echo "</tbody>
                </table> 
                </div>
                </div>
                </div>";
            }
            ?>
            
            </div>
        </div>
    </main>
    
    <!-- This is right after the PHP happens -->


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="media/js/jquery.js"></script>
    <script type="text/javascript" src="media/js/bootstrap.js"></script>
    <script type="text/javascript" src="media/js/bootstrap-transition.js"></script>
    <script type="text/javascript" src="media/js/bootstrap-alert.js"></script>
    <script type="text/javascript" src="media/js/bootstrap-modal.js"></script>
    <script type="text/javascript" src="media/js/bootstrap-dropdown.js"></script>
    <script type="text/javascript" src="media/js/bootstrap-scrollspy.js"></script>
    <script type="text/javascript" src="media/js/bootstrap-tab.js"></script>
    <script type="text/javascript" src="media/js/bootstrap-tooltip.js"></script>
    <script type="text/javascript" src="media/js/bootstrap-popover.js"></script>
    <script type="text/javascript" src="media/js/bootstrap-button.js"></script>
    <script type="text/javascript" src="media/js/bootstrap-collapse.js"></script>
    <script type="text/javascript" src="media/js/bootstrap-carousel.js"></script>
    <script type="text/javascript" src="media/js/bootstrap-typeahead.js"></script>
  </body>
</html>
