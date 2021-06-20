<!doctype html>
<html>
<body>
  <h1>WEB</h1>
  <ol>
    <li><a href="parameter.php?id=HTML">HTML</a></li>
    <li><a href="parameter.php?id=CSS">CSS</a></li>
    <li><a href="parameter.php?id=Javascript">Javascript</a></li>
  </ol>
  <h2>
    <?php
      echo $_GET['id'];
    ?>
  </h2>
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, eligendi deleniti reiciendis sint sequi obcaecati minima corrupti dolorem nostrum nulla, sunt nihil at velit? Iusto atque nostrum quod consequatur culpa.
</body>
</html>