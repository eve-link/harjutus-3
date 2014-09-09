<!DOCTYPE html>
<html>
<head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Harjutus-3</title>
</head>

<body> 
  <h2>Muutujad</h2>

  <?php
  $variable = 10;
  echo "<br>";
  ?>

  <?php
  $variable = 20;
  echo $variable;
  ?>

  <h2>Stringid</h2>

  <?php echo "Hello world!"; ?>
  <br>
  <?php echo 'Hello world!';?>
  <br>

  <?php 
  $number = 24; 
  $number2 = 26;
  echo "2026";
  ?>
  <h2>Nimekirja väljastamine muutujate ja stringide abi</h2>

  <?php 
  $student1 = "Anneli";
  $student2 = "Ingrid";
  $student3 = "Marko";
  $student4 = "Heiko";
  $student5 = "Mihkel";
  $firstName = "Eve";
  $lastName = "Link";
  $fullName = "$firstName $lastName ";
  ?>

<ul>
  <?php 
  echo 
 "<li>" . $student1 . "</li>
  <li>" . $student2 . "</li>
  <li>" . $student3 . "</li>
  <li>" . $student4 . "</li>
  <li>" . $student5 . "</li>"
  ?>
  </ul>

  <?php 
  echo $fullName;
   ?>


</body>
</html> 