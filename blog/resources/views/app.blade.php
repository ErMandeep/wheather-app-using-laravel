<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Weather App</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style type="text/css">
    @import url("https://fonts.googleapis.com/css?family=Raleway&display=swap");
body {
  background: #f5f5f5;
  font-family: "Raleway", sans-serif;
}

.wrapper {
  max-width: 500px;
  margin: 5% auto;
}

.card {
  width: 100%;
  height: auto;
}
.card .header {
  position: relative;
  height: 250px;
  background-size: cover;
  background-repeat: no-repeat;
  border-radius: 12px;
  box-shadow: 0 3px 9px rgba(0, 0, 0, 0.15);
  z-index: 1;
}
.card .header .center {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate3d(-50%, -50%, 0);
          transform: translate3d(-50%, -50%, 0);
  text-align: center;
}
.card .header h1 {
  font-weight: 300;
  color: #fff;
  font-size: 54px;
  font-family: sans-serif;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.7);
  margin: 0;
}
.card .header h3 {
  color: #fff;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.7);
  font-weight: 300;
  margin: 0;
}
.card .details {
  background: #fff;
  margin-top: -15px;
  padding: 0 25px;
  padding-top: 15px;
  padding-bottom: 15px;
  margin: 0 7px;
  border-radius: 0 0 12px 12px;
  box-shadow: 0 12px 27px rgba(0, 0, 0, 0.15);
  z-index: 0;
}
.card .details > h2 {
  font-weight: 300;
  margin: 0;
  margin-bottom: 15px;
}
.card .details > ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
.card .details > ul > li {
  position: relative;
  margin-bottom: 15px;
  color: #666;
}
.card .details > ul > li:after {
  content: "";
  position: absolute;
  bottom: -7px;
  left: 0;
  display: block;
  background-color: #eee;
  height: 1px;
  width: 100%;
}
</style>


</head>
<body>
<div class="wrapper">
  <div class="card">
    <div class="header" style="background-image: url('https://picsum.photos/500/250?blur=2')">
      <div class="center">
        <h1>{{$temperature}} &#176;C</h1>
        <h3>{{$weather_descriptions}}</h3>
      </div>
    </div>
    <div class="details">
      <h2>{{$request}}</h2>
      <ul>
        <li>Wind direction: {{$wind_dir}}</li>
        <li>Temperature: {{$temperature}} &#176;C</li>
        <li>Precip: {{$precip}} mm</li>
        <li>Humidity:  {{$humidity}}%</li>
        <li>Pressure: {{$pressure}} mb</li>
      </ul>
    </h3>
  </div>


    <div class="details">
   <form id="myForm" style="width: 40%" method="GET"> 
       <input type="text" class="form-control" name="city" id="fname" placeholder="City"><br>
       <button type="submit" class="btn btn-warning" id="submit">Submit</button>
   </form>
</div>


</div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>