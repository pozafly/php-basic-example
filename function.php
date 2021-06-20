<!doctype html>
<html>
<body>
  <h1>function</h1>
  <?php
    $str = "Lorem ipsum dolor sit amet 
    
    consectetur adipisicing elit. Corporis, eligendi 
    deleniti reiciendis sint sequi obcaecati minima 
    corrupti dolorem nostrum nulla, 
    
    sunt nihil at velit? Iusto atque nostrum quod consequatur culpa.";
    echo $str;
  ?>
  <h2>strlen()</h2>
  <?php
    echo strlen($str);
  ?>
  <h2>nl2br</h2>
  <?php
    echo nl2br($str);
  ?>
</body>
</html>