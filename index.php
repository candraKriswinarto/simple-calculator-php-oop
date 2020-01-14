<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Simple calc</title>
</head>
<body>
  <h1>Simple Calc Using OOP Concepts</h1>
  <form method="POST" action="includes/calc.inc.php">
    <input type="number" name="num1" placeholder="Enter first number">
    <select name="oper">
      <option value="add">Addition</option>
      <option value="sub">Subtraction</option>
      <option value="div">Division</option>
      <option value="mul">Multiplication</option>
    </select>
    <input type="number" name="num2" placeholder="Enter second number">
    <button type="submit" name="submit">Calculate</button>
  </form>
  <div class="result">
    <?php 
      if(!isset($_GET['result'])) {
        echo "<h3>Result: 0</h3>";
      } else {
        echo "<h3>Result: {$_GET['result']}</h3>";
      }

    ?>
  </div>
</body>
</html>