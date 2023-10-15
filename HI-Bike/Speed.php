<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HI-Speed 檔位推薦</title>
    <style>
      @import url("./Speed.css");
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
        <h1>HI-Speed<br>檔位推薦</h1>
      </div>

      <h2>當前坡度</h2>
      <div id="function_1">
        <div class="left">
          <img src="./icon/traffic-sign.png">
        </div>
        <div class="right">
          <h3 id="Slope">1°</h3>
        </div>
      </div>

      <h2>當前最適檔位</h2>
      <div id="function_2">
        <div class="left">
          <img src="./icon/settings.png">
        </div>
        <div class="right">
          <h3>5檔</h3>
        </div>
      </div>

    </div>

    <!-- <script>
      function generateSlope() {
        var Slope = Math.floor(Math.random() * 3);
        document.getElementById("Slope").innerHTML = Slope+"°";
      }
      setInterval(generateSlope,1000);
    </script> -->

  </body>
  
</html>