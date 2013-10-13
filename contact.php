<!DOCTYPE html>
<html>
<head>
	<title>Wikilinks | Contact Us</title>
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="../../assets/js/html5shiv.js"></script>
        <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->


    <link href="css/custom.css" rel="stylesheet" media="screen">
</head>
<body>

<div class="jumbotron">
  <div class="container">
    <h1>Contact Us</h1>
    <h3>We'd <span class="glyphicon glyphicon-heart"></span> to hear from you!</h3>
  </div>
</div>

<div class="container">
  <form>
    <div class="page-inputs">
    	<input type="text" class="form-control input-lg page-input" id="name" placeholder="Name"/>
    	<input type="text" class="form-control input-lg page-input" id="email" placeholder="Email"/>
    	<textarea class="form-control input-lg page-input" rows="10" id="message" placeholder="Message"></textarea>
    	<button type="button" class="btn btn-primary btn-lg btn-block" id="add-page-input-btn"><span class="glyphicon glyphicon-send"></span> Send</button>
    </div>
  </form>
</div>

<div class="footer">
    <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
        <ul class="nav navbar-nav">
        	<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-info-sign"></span> About</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-briefcase"></span> Terms of Service</a></li>
            <li><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>
        </ul>
        <ul>
            <li><p class="navbar-text navbar-right">Wikilinks &copy; 2013</p></li>
        </ul>
    </nav>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<!-- Javascript for adding pages -->
<script src="js/pages.js"></script>
<!-- jQueryUI (for cool effects and such) -->
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
</body>
</html>