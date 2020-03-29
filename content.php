<?php
  if (!isset($_GET['p'])) { include('welcome.php');
  } elseif ($_GET['p'] == "rand") { include('rand.php');
  } elseif (in_array($_GET['p'], scandir('items/'))) { include('carousel.php'); 
  } else { echo '404'; }
  ?>
