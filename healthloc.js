const API_KEY = `84fb1fb742aa1b35db5a1349a19297f5`;

const searchTemperature = () => {
    const city = document.getElementById('city-name').value;
    const url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${API_KEY}&units=metric`;
    fetch(url)
        .then(res => res.json())
        .then(data => displayTemperature(data));
}

const setInnerText = (id, text) => {
    document.getElementById(id).innerText = text;
}

const displayTemperature = temperature => {
    console.log(temperature);
    setInnerText('city', temperature.name);
    setInnerText('temp', temperature.main.temp);
    setInnerText('weather', temperature.weather[0].main);

    // weather icon settings 
    const url = `http://openweathermap.org/img/wn/${temperature.weather[0].icon}@2x.png`;
    const imgIcon = document.getElementById('image-icon');
    imgIcon.setAttribute('src', url);

    // display health advice based on weather condition
    const adviceContainer = document.getElementById('advice-container');
    let advice = '';
    const weatherCondition = temperature.weather[0].main;
    switch (weatherCondition) {
        case 'Clear':
            advice = 'It\'s a clear day, make sure to apply sunscreen and drink plenty of water.';
            break;
        case 'Clouds':
            advice = 'It\'s a cloudy day, don\'t forget to wear sunscreen and drink plenty of water.';
            break;
        case 'Rain':
            advice = 'It\'s raining, make sure to carry an umbrella and wear a raincoat.';
            break;
        case 'Snow':
            advice = 'It\'s snowing, dress warmly and wear waterproof shoes.';
            break;
        case 'Thunderstorm':
            advice = 'There\'s a thunderstorm, stay indoors and avoid using electronic devices.';
            break;
        case 'Mist':
        case 'Smoke':
        case 'Haze':
            advice = 'It\'s a bit misty outside, wear a mask if you have respiratory issues.';
            break;
        default:
            advice = 'Enjoy your day and stay healthy!';
            break;
    }
    setInnerText('advice', advice);
}

