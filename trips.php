<?php
include ("php/veryfirst.php");
/**
 * Created by PhpStorm.
 * User: Hasak
 * Date: 27.02.2017.
 * Time: 22:12
 */
echo'<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/tripsGrid.css">
  <title>'.$izleti[$l].' - '.$ata[$l].'</title>
  ';
include ("php/head.php");
echo"
</head>
<body>
";
include("php/first.php");
echo'
<script type=\'text/javascript\' src=\'js/tripsLoader.js\'></script>
<div class="container">
<div class="well text-right">'.$textaran[$l].'</div>
</div>
';
echo '
<div class="container tripsList">
	
</div>
';
$directories = glob('img/trips/*' , GLOB_ONLYDIR);
$j=0;
foreach ($directories as $dirs){
    echo'<div id="myModal'.$j.'" class="modal fade" role="dialog"> <!-------------------------- STAAAAAART ----------------------->
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">'.$triiips[$j][$l].'</h4>
      </div>
      <div class="modal-body">
        
        
        <div id="myCarousel'.$j.'" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          
          ';
    $var="";
    $ii=0;
    $dirname = $dirs."/";
    $images = glob($dirname."*.*");
    foreach($images as $image) {
        $ii++;
        if($ii==1)
            $aa='active';
        else $aa='';
        $var.='<div class="item '.$aa.'">
              <img src="'.$image.'" alt="'.$triiips[$j][$l].'">
            </div>';
    }
    echo'
          
          
          <ol class="carousel-indicators">
            <li data-target="#myCarousel'.$j.'" data-slide-to="0" class="active"></li>';
    for($i=1;$i<$ii-1;$i++)
        echo"<li data-target=\"#myCarousel'.$j.'\" data-slide-to='".$i."'></li>";
    echo'
          </ol>
        
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            '.$var.'
          </div>
        
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel'.$j.'" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel'.$j.'" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        
        
      </div>
      <div class="modal-footer">
      
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>';
    $j++;
}
include("php/last.php");
echo'
</body>
</html>
';
?>