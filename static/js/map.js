function initMap() {
        var myLatLng = {lat: 38.708001, lng: -9.149648};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: myLatLng,
          styles:
            [
              {
                "elementType": "labels",
                "stylers": [
                  {
                    "visibility": "on"
                  }
                ]
              },
              {
                "elementType": "labels.icon",
                "stylers": [
                  {
                    "visibility": "off"
                  }
                ]
              },
              {
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#000000"
                  },
                  {
                    "saturation": 36
                  },
                  {
                    "lightness": 40
                  }
                ]
              },
              {
                "elementType": "labels.text.stroke",
                "stylers": [
                  {
                    "color": "#000000"
                  },
                  {
                    "lightness": 16
                  },
                  {
                    "visibility": "on"
                  }
                ]
              },
              {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [
                  {
                    "color": "#000000"
                  },
                  {
                    "lightness": 20
                  }
                ]
              },
              {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [
                  {
                    "color": "#000000"
                  },
                  {
                    "lightness": 17
                  },
                  {
                    "weight": 1.2
                  }
                ]
              },
              {
                "featureType": "administrative",
                "elementType": "labels",
                "stylers": [
                  {
                    "visibility": "off"
                  }
                ]
              },
              {
                "featureType": "administrative",
                "elementType": "labels.text",
                "stylers": [
                  {
                    "visibility": "off"
                  }
                ]
              },
              {
                "featureType": "administrative.locality",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#ff36d2"
                  },
                  {
                    "visibility": "on"
                  }
                ]
              },
              {
                "featureType": "administrative.neighborhood",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#707070"
                  }
                ]
              },
              {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#250046"
                  },
                  {
                    "saturation": "55"
                  },
                  {
                    "lightness": "-20"
                  },
                  {
                    "visibility": "on"
                  }
                ]
              },
              {
                "featureType": "landscape",
                "elementType": "geometry.fill",
                "stylers": [
                  {
                    "visibility": "on"
                  }
                ]
              },
              {
                "featureType": "landscape",
                "elementType": "labels",
                "stylers": [
                  {
                    "visibility": "off"
                  }
                ]
              },
              {
                "featureType": "landscape.man_made",
                "elementType": "geometry.fill",
                "stylers": [
                  {
                    "color": "#1c1c1c"
                  }
                ]
              },
              {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#000000"
                  },
                  {
                    "lightness": 21
                  },
                  {
                    "visibility": "off"
                  }
                ]
              },
              {
                "featureType": "poi.business",
                "elementType": "geometry",
                "stylers": [
                  {
                    "visibility": "off"
                  }
                ]
              },
              {
                "featureType": "road",
                "elementType": "labels",
                "stylers": [
                  {
                    "visibility": "off"
                  }
                ]
              },
              {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#000000"
                  },
                  {
                    "lightness": 18
                  }
                ]
              },
              {
                "featureType": "road.arterial",
                "elementType": "geometry.fill",
                "stylers": [
                  {
                    "color": "#90ef90"
                  },
                  {
                    "lightness": "0"
                  }
                ]
              },
              {
                "featureType": "road.arterial",
                "elementType": "geometry.stroke",
                "stylers": [
                  {
                    "visibility": "off"
                  },
                  {
                    "weight": "2.00"
                  }
                ]
              },
              {
                "featureType": "road.arterial",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#e100b4"
                  }
                ]
              },
              {
                "featureType": "road.arterial",
                "elementType": "labels.text.stroke",
                "stylers": [
                  {
                    "color": "#2c2c2c"
                  }
                ]
              },
              {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [
                  {
                    "color": "#90ef90"
                  },
                  {
                    "lightness": "0"
                  },
                  {
                    "visibility": "on"
                  }
                ]
              },
              {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [
                  {
                    "visibility": "off"
                  }
                ]
              },
              {
                "featureType": "road.highway",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "visibility": "off"
                  }
                ]
              },
              {
                "featureType": "road.highway",
                "elementType": "labels.text.stroke",
                "stylers": [
                  {
                    "hue": "#ff000a"
                  },
                  {
                    "visibility": "off"
                  }
                ]
              },
              {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#90ef90"
                  },
                  {
                    "saturation": "0"
                  },
                  {
                    "lightness": "0"
                  }
                ]
              },
              {
                "featureType": "road.local",
                "elementType": "geometry.stroke",
                "stylers": [
                  {
                    "lightness": "0"
                  }
                ]
              },
              {
                "featureType": "road.local",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#e100b4"
                  }
                ]
              },
              {
                "featureType": "road.local",
                "elementType": "labels.text.stroke",
                "stylers": [
                  {
                    "saturation": "-52"
                  }
                ]
              },
              {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#000000"
                  },
                  {
                    "lightness": 19
                  },
                  {
                    "visibility": "off"
                  }
                ]
              },
              {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#1c1c1c"
                  },
                  {
                    "lightness": "-78"
                  }
                ]
              },
              {
                "featureType": "water",
                "elementType": "labels",
                "stylers": [
                  {
                    "visibility": "off"
                  }
                ]
              }
            ]

        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!'
        });
      }
