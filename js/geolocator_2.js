var map;

var mapCanvas;
var mapOptions;

var infowindow;
var service;
var marker;
var markers = [];
var locationSelect;

var myLatLng;
var latval;
var lngval;

$(document).ready(function(){

  geoLocationInit();
    function geoLocationInit(){

        var apiGeolocationSuccess = function(position) {
         alert("API geolocation success!\n\nlat = " + position.coords.latitude + "\nlng = " + position.coords.longitude);

          latval = position.coords.latitude;
          lngval = position.coords.longitude;
          console.log(position);
          myLatLng = new google.maps.LatLng(latval, lngval);
          createMap(myLatLng);
         // nearbySearch(myLatLng, 'school');
        };

        var tryAPIGeolocation = function() {
          jQuery.post( "https://www.googleapis.com/geolocation/v1/geolocate?key=AIzaSyBUofPSyZz5lIiHQKJUxfaQCz99l2myHs8", function(success) {
            apiGeolocationSuccess({coords: {latitude: success.location.lat, longitude: success.location.lng}});
          })
          .fail(function(err) {
            alert("API Geolocation error! \n\n"+ err);
          });
        };

      var browserGeolocationSuccess = function(position) {
       // alert("Browser geolocation success!\n\n lat = " + position.coords.latitude + "\n lng = " + position.coords.longitude);

        latval = position.coords.latitude;
        lngval = position.coords.longitude;
        console.log(position);
        myLatLng = new google.maps.LatLng(latval, lngval);
        createMap(myLatLng);
      // nearbySearch(myLatLng,'school');
          searchLocationsNear(myLatLng);
      };

      var browserGeolocationFail = function(error) {
        switch (error.code) {
          case error.TIMEOUT:
                              alert("Browser geolocation error !\n\n Timeout. Please Try Again \n\n");
                        break;
          case error.PERMISSION_DENIED:
                                      alert(error.message);
                                      alert("Hey, We will not misuse your permission \n\nIf you have accidently denied the permission. Please allow us your valuable permission by manually changing it from your browser \n\n So that we will serve you better\n\n");
                                  if(error.message.indexOf("Only secure origins are allowed") === 0) {
                                      tryAPIGeolocation();
                                    }
                              break;
          case error.POSITION_UNAVAILABLE:
                                        alert("Browser geolocation error !\n\n Position unavailable.\n\n Are you on Mars!!\n\n");
                                   break;
        }
      };

      var tryGeolocation = function() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition( browserGeolocationSuccess, browserGeolocationFail,
            {maximumAge: 50000, timeout: 20000, enableHighAccuracy: true}
            );
        }
      };

      tryGeolocation();
    }

    function createMap(myLatLng) {
           mapCanvas = document.getElementById("map");
           mapOptions = {
                          center: myLatLng,
                          zoom: 13,
                          mapTypeId: 'roadmap',
                          mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU}
                        };

            map = new google.maps.Map(mapCanvas, mapOptions);

              marker = new google.maps.Marker({
                map: map,
                icon: 'https://i.imgur.com/mnQU6gW.png',
                position: myLatLng,
                title: 'Here You are'
            });

       infowindow = new google.maps.InfoWindow();
       service = new google.maps.places.PlacesService(map);

        // searchButton = document.getElementById("searchButton").onclick = searchLocations;

        // locationSelect = document.getElementById("locationSelect");
        // locationSelect.onchange = function() {
        //     var markerNum = locationSelect.options[locationSelect.selectedIndex].value;
        //     if (markerNum != "none"){
        //         google.maps.event.trigger(markers[markerNum], 'click');
        //     }
        // };

    }

    // function searchLocations() {
    //     var address = document.getElementById("addressInput").value;
    //     var geocoder = new google.maps.Geocoder();
    //     geocoder.geocode({address: address}, function(results, status) {
    //         if (status == google.maps.GeocoderStatus.OK) {
    //             searchLocationsNear(results[0].geometry.location);
    //         } else {
    //             alert(address + ' not found');
    //         }
    //     });
    // }

    //nearbySearch(myLatLng,'school');
    function nearbySearch(myLatLng,rqtype){

      var request = {
                location: myLatLng,
                radius: '2000',
                types: [rqtype]
              };

       service.nearbySearch(request, callback);

      function callback(results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
          for (var i = 0; i < results.length; i++) {
            createPlaceMarkers(results[i]);
          }
        }
      }

    }

    function createPlaceMarkers(place) {
           marker = new google.maps.Marker({
                  map: map,
                  icon: icn,
                  position: place.geometry.location,
                  title: place.name
              });

            google.maps.event.addListener(marker, 'click', function() {
                infowindow.setContent(place.name);
                infowindow.open(map, this);
          });

    }

    // function clearLocations() {
    //     infowindow.close();
    //     for (var i = 0; i < markers.length; i++) {
    //         markers[i].setMap(null);
    //     }
    //     markers.length = 0;
        // locationSelect.innerHTML = "";
        // var option = document.createElement("option");
        // option.value = "none";
        // option.innerHTML = "See all results:";
        // locationSelect.appendChild(option);
    // }

    function searchLocationsNear(myLatLng) {
        // clearLocations();
        // var radius = document.getElementById('radiusSelect').value;
        var searchUrl = 'nearby.php?lat=' + myLatLng.lat() + '&lng=' + myLatLng.lng() ;
        // console.log(searchUrl);
        downloadUrl(searchUrl, function(data) {
            var xml = parseXml(data);
            var markerNodes = xml.documentElement.getElementsByTagName("marker");
            var bounds = new google.maps.LatLngBounds();
            for (var i = 0; i < markerNodes.length; i++) {
                var id = markerNodes[i].getAttribute("id");
                var name = markerNodes[i].getAttribute("name");
                var address = markerNodes[i].getAttribute("address");
                var city = markerNodes[i].getAttribute("city");
                var mobile = markerNodes[i].getAttribute("mobile");
                var latlng = new google.maps.LatLng(
                            parseFloat(markerNodes[i].getAttribute("lat")),
                            parseFloat(markerNodes[i].getAttribute("lng")));

                // createOption(name, city, i);
                createMarker(latlng, name, address, city, mobile);
                bounds.extend(latlng);
            }
            map.fitBounds(bounds);

        });

        function createMarker(latlng, name, address, city, mobile) {
            var html = "<b>" + name + "</b> <br/>" + address + ", " + city + "<br/>"+ mobile;
            var marker = new google.maps.Marker({
                map: map, 
                position: latlng,
                title: name
            });
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.setContent(html);
                infowindow.open(map, marker);
            });
            markers.push(marker);
        }

        // function createOption(name, city, num) {
        //     var option = document.createElement("option");
        //     option.value = num;
        //     option.innerHTML = name;
        //     // locationSelect.appendChild(option);
        // }

        function downloadUrl(url, callback) {
            var request = window.ActiveXObject ?
                new ActiveXObject('Microsoft.XMLHTTP') :
                new XMLHttpRequest;

            request.onreadystatechange = function() {
                if (request.readyState === 4) {
                    request.onreadystatechange = doNothing;
                    callback(request.responseText, request.status);
                }
            };

            request.open('GET', url, true);
            request.send(null);
        }

        function parseXml(str) {
            if (window.ActiveXObject) {
                var doc = new ActiveXObject('Microsoft.XMLDOM');
                doc.loadXML(str);
                return doc;
            } else if (window.DOMParser) {
                return (new DOMParser).parseFromString(str, 'text/xml');
            }
        }

        function doNothing() {}
    }
});

