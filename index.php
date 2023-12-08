<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <title>User Dashboard</title>
</head>
<nav class="navbar">
  <a href="About us.php">About us</a>
  <a href="Information.php">Information</a>
	<a href="register.php">Sign up!</a>
  <a href="login.php">Login</a>
  <a href="homepage.php">Home</a>
</nav>

<body>
    <div class="container">
        <center><h1>Welcome to  your Dashboard!</h1><center>
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>

    <!--Personalised health widget--->
    <div class="container">
        <form class="col-md-6 m-auto py-5">
            <div class="input-group mb-3">
                <input id="city-name" type="text" class="form-control" placeholder="Enter a location for Weather ...">
                <div class="input-group-append">
                    <button onclick="searchTemperature()" type="button" class="btn btn-danger">Search</button>
                </div>
            </div>
        </form>
        <div class="weather-status text-white text-center">
            <img id="image-icon" src="https://openweathermap.org/img/wn/02d@2x.png" alt="">
            <h1 id="city">Please enter a location!</h1>
            <h3><span id="temp">0.00</span>&deg;C</h3>
            <h1 class="lead" id="weather">Clouds</h1>
        </div>

        <div id="advice-container">
           <center><p id="advice"></p></center>
        </div>
        
    <script src="healthloc.js"></script>

    <script>
        (function(d, s, id) {
            if (d.getElementById(id)) {
                if (window.__TOMORROW__) {
                    window.__TOMORROW__.renderWidget();
                }
                return;
            }
            const fjs = d.getElementsByTagName(s)[0];
            const js = d.createElement(s);
            js.id = id;
            js.src = "https://www.tomorrow.io/v1/widget/sdk/sdk.bundle.min.js";

            fjs.parentNode.insertBefore(js, fjs);
        })(document, 'script', 'tomorrow-sdk');
        </script>

          <center>
          <table width="200" border="4">
           <tbody>
            <tr>
             <td><a href="exercise.php">Exercise diary</a></td>
            <td><a href="food.php">Food diary</a></td>
             </tr>
           </tbody>
          </table>
          </center>


          <div class="tomorrow"
           data-location-id=""
           data-language="EN"
           data-unit-system="METRIC"
           data-skin="light"
           data-widget-type="upcoming"
           style="padding-bottom:22px;position:relative;"
        >
          <a
            href="https://www.tomorrow.io/weather-api/"
            rel="nofollow noopener noreferrer"
            target="_blank"
            style="position: absolute; bottom: 0; transform: translateX(-50%); left: 50%;"
          >
            <img
              alt="Powered by the Tomorrow.io Weather API"
              src="https://weather-website-client.tomorrow.io/img/powered-by.svg"
              width="250"
              height="18"
            />
          </a>
        </div>

</body>
</html>