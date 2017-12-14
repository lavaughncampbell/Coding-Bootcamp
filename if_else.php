<?php

var_dump($_GET);

$label = null;
$color = null;

if(!empty($_GET));
  $color ="{$_GET{'color'}}";


  if($color == "#ff0000"){
  $label = "red";
}elseif($color == "#00ff00"){
  $label = "green";
}elseif($color == "#0000ff"){
  $label = "blue";
}else{
  $label = "unknown";
}
?>
<div style="color:<?php echo $color;?>">
    /The color is <?php echo $label; ?>
    </div>
    <a href="?color=00ff00">Green </a> |
    <a href="?color-ff0000">Red </a>
    <a href="?color = 0000ff">N;ie</a>
    
