const apiKey = '84fb1fb742aa1b35db5a1349a19297f5';

// Get the user's geolocation
navigator.geolocation.getCurrentPosition((position) => {
  const { latitude, longitude } = position.coords;

  // Set up the OpenWeather API URL with the latitude and longitude
  const apiUrl = `https://api.openweathermap.org/data/2.5/air_pollution?lat=${latitude}&lon=${longitude}&appid=84fb1fb742aa1b35db5a1349a19297f5`;

  // Fetch the air pollution data
  fetch(apiUrl)
    .then((response) => response.json())
    .then((data) => {
      // Display the air pollution data
      const detailsElement = document.getElementById("details");
      detailsElement.innerHTML = `
        <p>Air Quality Index (AQI): ${data.list[0].main.aqi}</p>
        <p>Carbon Monoxide (CO): ${data.list[0].components.co} µg/m³</p>
        <p>Nitrogen Dioxide (NO₂): ${data.list[0].components.no2} µg/m³</p>
        <p>Ozone (O₃): ${data.list[0].components.o3} µg/m³</p>
        <p>Sulfur Dioxide (SO₂): ${data.list[0].components.so2} µg/m³</p>
        <p>Particulate Matter (PM2.5): ${data.list[0].components.pm2_5} µg/m³</p>
        <p>Particulate Matter (PM10): ${data.list[0].components.pm10} µg/m³</p>
      `;
    })
    .catch((error) => {
      console.error(error);
    });
});
