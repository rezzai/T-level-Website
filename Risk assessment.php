<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Risk assessment</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="risk_assessment css.css" rel="stylesheet" type="text/css" />

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


<form>
  <fieldset>
    <center><legend>Home Risk Assessment</legend></center>

    <p>1. Are there any tripping hazards, such as loose rugs, cords, or cluttered pathways?</p>
    <label><input type="radio" name="q1" value="yes"> Yes</label>
    <label><input type="radio" name="q1" value="no"> No</label>

    <p>2. Are there any fire hazards, such as overloaded electrical outlets, unattended candles, or combustible
      materials near heat sources?</p>
    <label><input type="radio" name="q2" value="yes"> Yes</label>
    <label><input type="radio" name="q2" value="no"> No</label>

    <p>3. Are there any sharp objects or edges that could cause cuts or punctures, such as knives, scissors, or broken
      glass?</p>
    <label><input type="radio" name="q3" value="yes"> Yes</label>
    <label><input type="radio" name="q3" value="no"> No</label>

    <p>4. Are there any areas of the home that are poorly lit, making it difficult to navigate safely?</p>
    <label><input type="radio" name="q4" value="yes"> Yes</label>
    <label><input type="radio" name="q4" value="no"> No</label>

    <p>5. Are there any areas of the home with poor air quality, such as mold or mildew, or exposure to chemicals or
      pollutants?</p>
    <label><input type="radio" name="q5" value="yes"> Yes</label>
    <label><input type="radio" name="q5" value="no"> No</label>

    <p>6. Are there any potential drowning hazards, such as an open pool or unsecured bathtub?</p>
    <label><input type="radio" name="q6" value="yes"> Yes</label>
    <label><input type="radio" name="q6" value="no"> No</label>

    <p>7. Are there any potential poisoning hazards, such as medication or cleaning products left within reach of
      children or pets?</p>
    <label><input type="radio" name="q7" value="yes"> Yes</label>
    <label><input type="radio" name="q7" value="no"> No</label>

    <p>8. Are there any potential fall hazards, such as unstable furniture or unsecured handrails?</p>
    <label><input type="radio" name="q8" value="yes"> Yes</label>
    <label><input type="radio" name="q8" value="no"> No</label>

    <p>9. Are there any potential choking hazards, such as small objects or toys that could be swallowed?</p>
    <label><input type="radio" name="q9" value="yes"> Yes</label>
    <label><input type="radio" name="q9" value="no"> No</label>

    <p>10. Are there any potential burn hazards, such as hot water, stoves, or fireplaces?</p>
    <label><input type="radio" name="q10" value="yes"> Yes</label>
    <label><input type="radio" name="q10" value="no">No</label>
</form>
<br>
<center><input type="submit" value="Submit"></center>

<script>
  const form = document.querySelector('form');
  form.addEventListener('submit', (event) => {
    event.preventDefault();

    // Get the user's answers
    const answers = {
      q1: form.elements.q1.value,
      q2: form.elements.q2.value,
      q3: form.elements.q3.value,
      q4: form.elements.q4.value,
      q5: form.elements.q5.value,
      q6: form.elements.q6.value,
      q7: form.elements.q7.value,
      q8: form.elements.q8.value,
      q9: form.elements.q9.value,
      q10: form.elements.q10.value,

    };

    // Provide advice based on the user's answers
    if (answers.q1 === 'yes') {
      alert('To reduce the risk of tripping hazards, make sure all cords and rugs are secured and pathways are clear.');
    }

    if (answers.q2 === 'yes') {
      alert('To reduce the risk of fire hazards, make sure all electrical outlets are not overloaded, never leave candles unattended and store combustible materials away from heat sources.');
    }

    if (answers.q3 === 'yes') {
      alert('Approach with caution and avoid direct contact with your hands.Hold knives or scissors by the handle and use gloves or a tool for broken glass or sharp metal.Move slowly and carefully to avoid accidental injury.Dispose of broken glass in a sturdy container with a lid or wrap it in paper or cloth before placing it in a secure garbage bin.-If injured, clean the wound with soap and water, apply pressure, and seek medical attention for severe or infected injuries.');
    }

    if (answers.q4 === 'yes') {
      alert('If you have areas in your home that are poorly lit, there are several things you can do to improve the situation. These include adding more lighting fixtures or using brighter bulbs, installing motion sensor lights, using reflective surfaces to bounce light around, and considering natural lighting sources like windows or skylights. Improving the lighting in your home can make it safer and more comfortable to navigate.');
    }

    if (answers.q5 === 'yes') {
      alert('To address poor air quality in areas of your home due to mold, mildew, exposure to chemicals, or pollutants, you should identify and remove the source of the problem, improve ventilation (by installing fans or vents to improve air flow. You can also open windows or use air purifiers to improve air quality),maintain humidity levels(using a dehumidifier to reduce moisture in the air), and seek professional help if necessary. By taking these steps, you can improve the air quality in your home and protect your health.');
    }


    if (answers.q6 === 'yes') {
      alert('To prevent accidents and ensure safety around potential drowning hazards in your home, you should install barriers around open pools, use pool covers, secure doors to bathtubs, supervise children near water at all times, and learn CPR in case of an emergency. By taking these steps, you can prevent accidents and ensure the safety of yourself and others.');
    }

    if (answers.q7 === 'yes') {
      alert('To prevent accidental poisoning in your home due to potential hazards like medication or cleaning products left within reach of children or pets, you should store hazardous items properly, use child-resistant packaging, label hazardous products, dispose of hazardous waste properly, educate children about the dangers, and be prepared by keeping the number for poison control handy and knowing the signs of poisoning. ');
    }

     if (answers.q8 === 'yes') {
      alert('To prevent falls and ensure safety around potential fall hazards in your home, you should secure furniture and rugs, install handrails, improve lighting, remove clutter from walkways, and wear appropriate footwear');
    }

     if (answers.q9 === 'yes') {
      alert('To prevent choking hazards from small objects or toys, you can take several precautions such as keeping small objects and toys out of reach of young children, ensuring toys are age-appropriate, avoiding giving young children foods that could be choking hazards, cutting food into small pieces and supervising young children while they eat, learning how to perform the Heimlich maneuver, keeping emergency phone numbers handy, and teaching older children and adults about the dangers of choking and how to prevent it.');
    }

     if (answers.q10 === 'yes') {
      alert('To prevent burn injuries from potential hazards such as hot water, stoves, or fireplaces, you can take several precautions such as keeping hot liquids and foods out of reach of children and pets, using oven mitts or pot holders when handling hot items, installing safety gates or barriers, using caution when lighting candles, keeping a fire extinguisher, teaching your family members to stop, drop, and roll, and seeking medical attention immediately in case of a burn injury.');
    }

    // Clear the form
    form.reset();
  });
</script>
  
<script src="https://website-widgets.pages.dev/dist/sienna.min.js" defer></script>

</body>
</html>