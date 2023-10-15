<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HI-Remind 健康監測</title>
    <style>
      @import url("./Remind.css");
    </style>
  </head>
  <body>
    <div class="padding"></div>
    <div id="top">
      <div id="top_left">
        <a href="./index.php"><img src="./icon/left-arrow.png" id="left_arrow"></a>
      </div>
      <div id="top_medium">
        <div id="top_medium_medium">
          <img src="./icon/HI-Bike_Logo.png">
        </div>
      </div>
    </div>
    <div class="padding"></div>

    <div id="main">
      <div id="function_name">
        <h1>HI-Remind<br>健康監測</h1>
      </div>

      <h2>當前心率</h2>
      <div id="function_1">
        <div class="left">
          <img src="./icon/heart.png">
        </div>
        <div class="right">
          <h3 id="HeartRate"></h3><h4>bpm</h4>
        </div>
        <div class="text">
          <p>心率正常值應為 60~220bpm</p>
        </div>
      </div>

      <h2>血氧指數</h2>
      <div id="function_2">
        <div class="left">
          <img src="./icon/red_blood_cells.png">
        </div>
        <div class="right">
          <h3 id="BloodOxygen"></h3><h4>%SpO2</h4>
        </div>
        <div class="text">
          <p>血氧飽和度正常值應為95~100%SpO2</p>
        </div>
      </div>

    </div>

    <script>
      function generateHeartRate() {
        var HeartRate = document.getElementById("HeartRate");
        var generateHearteRate = Math.floor(Math.random() * 5) + 83;
        HeartRate.innerHTML = generateHearteRate;
        setInterval(1000);
      }
      function generateBloodOxygen() {
        var BloodOxygen = Math.floor(Math.random() * 3) + 97;
        document.getElementById("BloodOxygen").innerHTML = "." + BloodOxygen;
      }
      setInterval(generateHeartRate,1000);
      setInterval(generateBloodOxygen, 1500);
    </script>

  </body>
</html>