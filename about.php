<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>BootStrap Tutorial 2</title>

		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author"  content="">

		<link href="css/bootstrap.css" rel="stylesheet"/>
		<style>
			body{
				padding-top: 60px; /* this is to indent from the titlebar placed by bootstrap*/
        		padding-bottom:40px; /*this is to indent the footer sticker*/
			}
		</style>
		<link href="css/bootstrap-responsive.css" rel="stylesheet" />

		<!-- HTML5 shim is for HTML5 support in IE -->
		<!-- [if lt IE 9] >
			<script src="../js/htmlshiv.js"></script>
		<![endif]-->		
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Eugene Online Judge</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="#">Home</a></li>
              <li><a href="#about">Compete</a></li>              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Problems<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Tutorial</a></li>
                  <li><a href="#">Easy</a></li>
                  <li><a href="#">Medium</a></li>
                  <li><a href="#">Hard</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">New Addtions</li>
                  <li><a href="#">Editorial</a></li>
                  <li><a href="#">Brainstorm</a></li>
                </ul>
              </li>
              <li><a href="#forum">Forum</a></li>
              <li><a href="#help">Help</a></li>
              <li class="active"><a href="#">About</a></li>
           </ul>
            <form class="navbar-form pull-right">
              <input class="span2" type="text" placeholder="Email">
              <input class="span2" type="password" placeholder="Password">
              <button type="submit" class="btn btn-success">Sign in</button>
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
      <h1>Welcome to Eugene Cloud Judge</h1><br/>
      <p>Eugene is a platform to compete with programmers around the world with hundred's
      of problems being added every month. Eugene is also a platform for employers to choose the right candidates based on your Eugene ranking or badges earned.We wish you success in this journey.</p>
      <p align="right">Team Eugene</p>
      <p><a href="#" class="btn btn-primary btn-large">Learn more &raquo;</a></p>
    </div>

    <!-- example row of columns -->
    <div class="row">
      <div class="span4">
        <h2>Advanced Text Editor</h2>
        <p>Codeguage is integrated with an advance text editor which supports syntax highlighting for multiple programming languages.It also includes- line number support
        and debugging facility for some languages</p>
        <p><a class="btn" href="#">View details &raquo;</a></p>
      </div>
      <div class="span4">
       <h2>Brainstorm Problems</h2>
       <p>Codeguage has included a brainstrom programs section in-addition to the existing
       sections.The Brainstrom questions are extremely hard challenging with minimal successful submissions.Try testing your batteries in this brand new section</p>
       <p><a class="btn" href="#">View details &raquo;</a></p>
      </div>
      <div class="span4">
       <h2>Editorials</h2>
       <p>Codeguage provides with a editorial section for most of the problems which seem to
       more challenging interms of how algoritm intensive the solution to the problem is.The editiorial section can even be managed by users after earning the moderator badge.</p>
       <p><a class="btn" href="#">View details &raquo;</a></p>
      </div>
    </div>

    <hr>

    <footer>
      <p align="center">All Rights Reserved &copy; RealitySoft,Inc 2013-14</p>
    </footer>

    </div> <!-- container -->    
    
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/vendor/jquery.js"></script>
    <script src="js/bootstrap/bootstrap-transition.js"></script>
    <script src="js/bootstrap/bootstrap-alert.js"></script>
    <script src="js/bootstrap/bootstrap-modal.js"></script>
    <script src="js/bootstrap/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap/bootstrap-tab.js"></script>
    <script src="js/bootstrap/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap/bootstrap-popover.js"></script>
    <script src="js/bootstrap/bootstrap-button.js"></script>
    <script src="js/bootstrap/bootstrap-collapse.js"></script>
    <script src="js/bootstrap/bootstrap-carousel.js"></script>
    <script src="js/bootstrap/bootstrap-typeahead.js"></script>
	</body>
</html>

	

