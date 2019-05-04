<!DOCTYPE html>
<html lang="en">
<head>
  <title>Assignment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

 
<div class="container" align="center">
<h2 class="jumbotron">Image Gallary</h2>
<div class="col-md-5">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
<ol class="carousel-indicators">
<?php include_once("slider.php"); echo $button_html; ?>
</ol>
<div class="carousel-inner">
<?php include_once("slider.php"); echo $slider_html; ?>
</div>
<!-- Left and right controls -->
<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
</a>
<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
</a>
</div>
</div>
<ul class="thumbnails-carousel clearfix">
<?php include_once("slider.php"); echo $thumb_html; ?>
</ul>


</div>

</body>
</html>