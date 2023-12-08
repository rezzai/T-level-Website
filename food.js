var totalCalories = 0;
var targetCalories = 0;

function addFood() {
  var food = document.getElementById("food").value;
  var calories = document.getElementById("calories").value;

  if (food && calories) {
    var table = document.querySelector("table");
    var newRow = table.insertRow(-1);
    var foodCell = newRow.insertCell(0);
    var caloriesCell = newRow.insertCell(1);

    foodCell.innerHTML = food;
    caloriesCell.innerHTML = calories;

    totalCalories += parseInt(calories);
    document.getElementById("calories").value = "";
    document.getElementById("food").value = "";
    document.getElementById("totalCalories").innerHTML = totalCalories;

    calculateRemainingCalories();
  }
}

function calculateRemainingCalories() {
  targetCalories = document.getElementById("targetCalories").value;
  var remainingCalories = targetCalories - totalCalories;
  document.getElementById("remainingCalories").value = remainingCalories;
}

