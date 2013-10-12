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
            <form method="POST">
            <div id="page-inputs"></div>
            <button type="button" class="btn btn-primary btn-lg btn-block" id="add-page-input-btn"><span class="glyphicon glyphicon-plus"></span> Add Page</button>
            <button type="submit" class="btn btn-success btn-lg btn-block">Compare <span class="glyphicon glyphicon-chevron-right"></span></button>
            </form>
        </div>
        <div class="col-md-8">
            <?php
            print_r($_POST['page']);
            ?>
        </div>
    </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<!-- Javascript for adding pages -->
<script src="js/pages.js"></script>
</body>
</html>