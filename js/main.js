/*
*  ajaxGet function
*  make a get ajax response on a loading page
*/

var ajaxGet = (url, callback) => {
    let req = new XMLHttpRequest();
    req.open('GET', url);
    req.addEventListener('load', () => {
      if(req.status >= 200 && req.status <= 400) {
      //  console.log(req.responseText);
      callback(req.responseText);
      } else {
        console.error(req.status + ' ' + req.statusText + ' ' + url);
      }
    });
    req.addEventListener('error', () => {
      console.error('Erreur réseau' + req.status);
    });
    req.send(null);
  };

  /*
  *  API of geolocation
  *  use the client IP by default and send back his country 
  */

 ajaxGet('http://ip-api.com/json', response => {
     let reponse = JSON.parse(response);
     if (reponse.status == 'success') {
        let country = reponse.country;
        var pays = document.getElementById('pays');
        var region = document.getElementById('region');
        console.log(country);
        pays.value = country;
        pays.innerText = country;
        region.value = reponse.regionName;
     }
    
 });

/*
*   API of countries field filling
*   Pick each country name 
*/

 ajaxGet('https://restcountries.eu/rest/v2/all', response => {
     let data = JSON.parse(response);
     let pays = document.getElementById('country');
     for (country of data) {
        let option = document.createElement('option');
        option.value= country.name;
        option.innerHTML = country.name;
        pays.appendChild(option);
     }
 })