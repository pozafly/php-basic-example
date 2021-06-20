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
  <?php
    // data/id 값에 해당하는 파일의 내용
    echo file_get_contents("data/".$_GET['id']);
  ?>
</body>
</html>