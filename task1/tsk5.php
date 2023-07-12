<!-- Write a PHP program to print out the multiplication table upto 6*6. -->
<?php
for ($i = 1; $i < 7; $i++) {
  for ($j = 1; $j < 7; $j++) {
     if ($j == 1) {
       echo($i*$j);
       echo(" ");

     } else {
       echo ($i*$j);
       echo(" ");
     }
  }
  echo "\n";
}
?>
