<?php
include_once("connect.php");
$sql = "SELECT sr_no, image_path FROM images LIMIT 5";
$resultset = mysqli_query($db, $sql) or die("database error:". mysqli_error($db));
$image_count = 0;
$button_html = '';
$slider_html = '';
$thumb_html = '';
while( $rows = mysqli_fetch_assoc($resultset)){
$active_class = "";
if(!$image_count) {
$active_class = 'active';
$image_count = 1;
}
$image_count++;
$thumb_image = $rows['sr_no'].".jpeg";
// slider image html
$slider_html.= "<div class='item ".$active_class."'>";
$slider_html.= "<img src='".$rows['image_path']."' class='img-responsive'>";
$slider_html.= "<div class='carousel-caption'></div></div>";
// Thumbnail html
$thumb_html.= "<li><img src='thumbnails/".$rows['image_path']."' alt='$thumb_image'></li>";
// Button html
$button_html.= "<li data-target='#carousel-example-generic' data-slide-to='".$image_count."' class='".$active_class."'></li>";
}
?>