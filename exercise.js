function addExercise() {
  var exercise = document.getElementById("exercise").value;
  var calories = document.getElementById("calories").value;

  if (exercise && calories) {
    var table = document.querySelector("table");
    var newRow = table.insertRow(-1);
    var exerciseCell = newRow.insertCell(0);
    var caloriesCell = newRow.insertCell(1);

    exerciseCell.innerHTML = exercise;
    caloriesCell.innerHTML = calories;

    document.getElementById("exercise").value = "";
    document.getElementById("calories").value = "";
  }
}
