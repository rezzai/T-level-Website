<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Homepage</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="index.css" rel="stylesheet" type="text/css" media = "screen">
</head>

<body>
<h1><center>The Health Advice Group</center></h1>
<nav class="navbar">
  <a href="About us.php">About us</a>
  <a href="Information.php">Information</a>
	<a href="register.php">Sign up!</a>
  <a href="login.php">Login</a>
  <a href="homepage.php">Home</a>
</nav>
	
	<div id="iddfff5e8906e8e" a='{"t":"g7bs","v":"1.2","lang":"en","locs":[1453],"ssot":"c","sics":"ds","cbkg":"#616161","cfnt":"#FFFFFF","cend":"#FFFFFF00"}'>Weather Data Source: <a href="https://sharpweather.com/weather_london/">weather forecast London</a></div><script async src="https://static1.sharpweather.com/widgetjs/?id=iddfff5e8906e8e"></script>
		<!-- Widget -->
	
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
	 </div>
     <script src="homepage.js "></script>
	
	<center>
	<table width="200" borderstyle="none">
  <tbody>
    <tr>
      <td><img src="../Images/climate change.jpg" class="slider-thumb" alt="" height = "200" width = "200"></td>
      <td><img src="../Images/heatwave.jpg" class="slider-thumb" alt="" height = "200" width = "200"></td>
      <td><img src="../Images/air pollution.jpg" class="slider-thumb" alt="" height = "200" width = "200"></td>
      <td><img src="../Images/storm.jpg" class="slider-thumb" alt="" height = "200" width = "200"></td>
	 <td><img src="../Images/blizzard.jpg" class="slider-thumb" alt="" height = "200" width = "200"></td>
      <td><img src="../Images/hayfever.jpg" class="slider-thumb" alt="" height = "200" width = "200"></td>
    </tr>
    <tr>
	  <td><center><u><a href="./Climate Change.php">What is climate change?</center></td></u></td>
      <td><center><u><a href="./heatwave.php">What to do in a heatwave?</center></u></td>
      <td><center><u><a href="./Air pollution.php">What is Air pollution?</center></u></td>
      <td><center><u><a href="./StormAdvice.php">Staying safe within a storm.</center></u></td>
	  <td><center><u><a href="./freezing weather.php">A guide to freezing weather.</center></u></td>
	  <td><center><u><a href ="./Hayfever.php">How to survive pollen&nbsp; season with hayfever</center></td>
    </tr>
  </tbody>
</table>
 </center>
	
	
	<center>		
	<button><a><a href="./Risk assessment.php">Want to take our free risk assessment? </a></button>
	  <article class="Signup">Want to keep track of your personal health? Sign up here!</article>
		<button><a><a href="./register.php">Sign up!</a></button>

    <script src="https://website-widgets.pages.dev/dist/sienna.min.js" defer></script>
</body>
</html>
