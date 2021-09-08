<?php
include 'php/auth.php';

function addLinks()
{
  $links = scandir("projects/");             // creating an array with all items(files and folders) in the choosen folder(path) including the . and ..
  $links = array_splice($links, 2, count($links));  // get rid of the . and ..
  $links = array_values($links);        // reseting the indexes starting from 0

  foreach ($links as $i => $value) {
    if (file_exists('projects/' . $value . '/info.php')) {
      require_once 'projects/' . $value . '/info.php';
      //echo "index = " . $i . " / value = " . $value . "<br>";
      echo '<a href="/projects/' . $value . '/' . $projData["StartPage"] . '">' . $projData["ProjectName"] . '</a><br>';
    }
  }
}


?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/main.css">
</head>

<body>
  <div class="bgimg-1">
    <div class="caption">
      <span class="border"><?php addLinks(); ?></span>
    </div>
  </div>
</body>

</html>