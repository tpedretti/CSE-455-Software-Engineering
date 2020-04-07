<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Project Eir 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="media/bootstrap.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Project Eir</a>
        <a class="btn btn-primary" href="signup.php">Sign Up</a>
      </div>
    </nav>

      </nav>
    <main role="main" class="flex-shrink-0">
		<div class="container">
			<div id="content">

				<!-- This is right before the PHP happens -->
				<form class="form-signin" method="post" action="process.php">
					<fieldset>
						<legend>Contact Us</legend>

						<div class="form-group">
							<label for="inputEmail" class="col-sm-2 col-form-label">Email Address</label>
							<input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
						</div>

						<div class="form-group">
							<label for="issueContent" class="col-form-label">What do you want to contact us about?</label>
							<input type="text" id="issueContent" name="issueContent" class="form-control" placeholder="Issue Title" required>
						</div>

						<div class="form-group">
							<label for="issueText">Describe Issue</label>
							<textarea class="form-control" id="issueText" name="issueText" rows="3" style="height: 164px;"></textarea>
						</div>


						<!--<div class="form-group">-->
                                                <!--    <label for="inputFile">File input</label>-->
						<!--	<input type="file" class="form-control-file" id="inputFile" aria-describedby="fileHelp">-->
						<!--	<small id="fileHelp" class="form-text text-muted">Please upload images or files that deal with the issue.</small>-->
						<!--</div>-->

						<button class="btn btn-lg btn-primary btn-block" type="submit" id="submit">Submit Issue</button>
					</fieldset>
				</form>

			</div>
		</div>
    </main>

    <style>
    body{
      background-image: url('style/images/gray1.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
      page-break-before: always;
      page-break-after: always;
    }


    </style>


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
