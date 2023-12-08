
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="exercise.css">
</head>

<body style="background-color:lightblue">
  <center>
    <h1>Exercise Log</h1>
  </center>
  <right><button><a><a href="./index.php">Go back to your page</a></button></right>
  <form>
    <label for="exercise">Exercise:</label>
    <input type="text" id="exercise" name="exercise"><br><br>
    <label for="calories">Calories Burned:</label>
    <input type="number" id="calories" name="calories"><br><br>
    <button type="button" onclick="addExercise()">Add</button>
  </form>

  <form id="exercise-form">
  <label for="body-part">Body Part:</label>
  <select id="body-part" name="body-part">
    <option value="arms">Arms</option>
    <option value="legs">Legs</option>
    <option value="chest">Chest</option>
    <option value="back">Back</option>
    <option value="abs">Abs</option>
    <option value="core">Core</option>
    <option value="shoulders">Shoulders</option>
    <option value="glutes">Glutes</option>
  </select><br><br>
  <button type="submit">Submit</button>
</form>

<ul id="exercise-list"></ul>

<script>
  function recommendExercise(bodyPart) {
    switch (bodyPart) {
      case "arms":
        return ["bicep curls", "tricep extensions", "hammer curls", "overhead tricep extensions"];
      case "legs":
        return ["squats", "lunges", "deadlifts", "leg press"];
      case "chest":
        return ["bench press", "push-ups", "chest flys", "incline press"];
      case "back":
        return ["pull-ups", "rows", "lat pulldowns", "back extensions"];
      case "abs":
        return ["crunches", "sit-ups", "leg raises", "planks"];
      case "core":
        return ["Russian twists", "side planks", "bicycle crunches", "mountain climbers"];
      case "shoulders":
        return ["overhead press", "lateral raises", "front raises", "rear delt flys"];
      case "glutes":
        return ["squats", "lunges", "deadlifts", "hip thrusts"];
      default:
        return [];
    }
  }

  function handleFormSubmit(event) {
    event.preventDefault();
    const bodyPart = document.getElementById("body-part").value;
    const exercises = recommendExercise(bodyPart);
    const exerciseList = document.getElementById("exercise-list");
    exerciseList.innerHTML = "";
    if (exercises.length === 0) {
      exerciseList.innerHTML = "No exercises found for this body part.";
    } else {
      for (let i = 0; i < exercises.length; i++) {
        const exerciseItem = document.createElement("li");
        exerciseItem.textContent = exercises[i];
        exerciseList.appendChild(exerciseItem);
      }
    }
  }

  const exerciseForm = document.getElementById("exercise-form");
  exerciseForm.addEventListener("submit", handleFormSubmit);
</script>

  
  

  <table>
    <tr>
      <th>Exercise</th>
      <th>Calories Burned</th>
    </tr>
  </table>
  <script src="exercise.js"></script>

</body>

</html>