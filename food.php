<!DOCTYPE html>
<html>

<head>
  <title>Food Log</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="food.css">
</head>

<body style="background-color: lightblue;">
  <center>
    <h1>Food Log</h1>
  </center>
  
  <right><button><a><a href="./index.php">Go back to your page</a></button><right>

  <iframe src="http://www.nutritiondata.com/widget/basic-search" frameborder="0" scrolling="no" width="245" height="360"> Your browser does not support inline frames or is currently configured not to display inline frames. </iframe>

    <form>
      <label for="food">Food:</label>
      <input type="text" id="food" name="food"><br><br>
      <label for="calories">Calories:</label>
      <input type="number" id="calories" name="calories"><br><br>
      <button type="button" onclick="addFood()">Add</button>
    </form>
  </center>

  <div>
    <label for="targetCalories">Target Calories:</label>
    <input type="number" id="targetCalories" name="targetCalories" onchange="calculateRemainingCalories()"><br><br>
    <label for="remainingCalories">Remaining Calories:</label>
    <input type="number" id="remainingCalories" name="remainingCalories" readonly>
  </div>
  <table>
    <tr>
      <th>Food</th>
      <th>Calories</th>
    </tr>
  </table>
  <script src="food.js"></script>

</body>

</html>