const apiKey = 'aqVnLwHw62y7e9T0b2QWB0BZMyrhFgpe';

navigator.geolocation.getCurrentPosition((position) => {
  const { latitude, longitude } = position.coords;

  const apiUrl = `https://api.tomorrow.io/v4/timelines?location=${latitude},${longitude}&fields=pollen_tree,pollen_weed,pollen_grass&units=metric&timesteps=1d&apikey=$aqVnLwHw62y7e9T0b2QWB0BZMyrhFgpe`;

  fetch(apiUrl)
    .then((response) => response.json())
    .then((data) => {
      const detailsElement = document.getElementById("details");
      const pollenTypes = ['Tree', 'Weed', 'Grass'];
      let pollenHtml = '';
      const pollenData = data.data.timelines[0].intervals[0].values;
      pollenTypes.forEach((type) => {
        if (pollenData[`pollen_${type.toLowerCase()}`]) {
          pollenHtml += `<p>${type} Pollen Count: ${pollenData[`pollen_${type.toLowerCase()}`]}</p>`;
        }
      });
      detailsElement.innerHTML = pollenHtml;
    })
    .catch((error) => {
      console.error(error);
    });
});
