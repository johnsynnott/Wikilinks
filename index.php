<!DOCTYPE html>
<html>
<head>
    <title>Wikilinks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    <h1>Wikilinks</h1>
    <h3>Cruising on the coattails of wikileaks.</h3>
  </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4" id="page-form-container">
            <form>
            <div id="page-inputs"></div>
            <button type="button" class="btn btn-primary btn-lg btn-block" id="add-page-input-btn"><span class="glyphicon glyphicon-plus"></span> Add Page</button>
            <button type="button" class="btn btn-danger btn-lg btn-block" id="remove-page-input-btn"><span class="glyphicon glyphicon-remove"></span> Remove Page</button>
            <button type="button" class="btn btn-success btn-lg btn-block" id="compare_pages_btn">Compare <span class="glyphicon glyphicon-chevron-right"></span></button>
            </form>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default" id="results_panel">
                <div class="panel-heading" id="results-panel-header"><span class="glyphicon glyphicon-chevron-left"></span> Use the form on the left to select pages to compare.</div>
                <div class="panel-body" id="results"></div>
                <div class="panel-footer"></div>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
        <ul class="nav navbar-nav">
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