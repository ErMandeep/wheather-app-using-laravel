$(document).ready(function(){
  let apiURL = "https://www.metaweather.com/api/location/868274/";
  
  // #################
  // MetaWeather offers an API without open CORS policy,
  // so this pen will not be completed.
  // #################
  
  $.get(apiURL, function(data, status){
    console.log(data);
  });
});