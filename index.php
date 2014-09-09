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
  <br>

  <?php 
  $test = "mingi tekst";
  echo $test;
  ?>
  <br>

<?php 
  $age = "22";
  echo "Ma olen {$age}-ne aastane";
 ?>

<?php
    $source = "see Tekst SISALDAB suuri TÄHEMÄRKE!!!";
    $lower = strtolower($source);
    echo "<p>{$lower}</p>";
  ?>
  <?php
    $source2 = "see Tekst SISALDAB suuri TÄHEMÄRKE!!!";
    $upper = strtoupper($source2);
    echo "<p>{$upper}</p>";
  ?>
  <?php
    $source3 = "see Tekst SISALDAB suuri TÄHEMÄRKE!!!";
    $firstupper = ucfirst($source3);
    echo "<p>{$firstupper}</p>";
  ?>
  <?php
    $source3 = "see Tekst SISALDAB suuri TÄHEMÄRKE!!!";
    $firstupper = ucfirst($source3);
    echo "<p>{$firstupper}</p>";
  ?>
  <?php
    $source4 = "see Tekst SISALDAB suuri TÄHEMÄRKE!!!";
    $everyupper = ucwords($source4);
    echo "<p>{$everyupper}</p>";
  ?>
  <?php
    $source5 = "see Tekst SISALDAB suuri TÄHEMÄRKE!!!";
    $textlenght = strlen($source5);
    echo "<p>{$textlenght}</p>";
  ?>

<?php echo "A" . trim(" B C D E") . "F"; ?>

<h1>Täisarvud</h1>
<?php 
  $muutuja = "50";
  $muutuja2 = "70";
  echo ($muutuja * $muutuja2);
  echo "<br>";
  abs(-300);
?>
<br>


<?php
    // Viis ruudus:
    echo pow(5, 2);
    echo "<br>";
    // Seitse kuubis:
    echo pow(7, 3);
    echo "<br>";
    // Kolm astmel seitse:
    echo pow(3, 7);
?>
<br>
<?php
    // Ruutjuur 25-st:
    echo sqrt(25);
?>
<?php
    // Suvaline number
    echo rand();
    // Suvaline number vahemikus 7 - 22:
    echo rand(7, 22);
?>


</body>
</html> 