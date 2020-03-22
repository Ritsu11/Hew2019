function regular_map() {
    //Halの緯度と軽度
    var var_location = new google.maps.LatLng(35.691821, 139.696829);

    var var_mapoptions = {
      center: var_location,
      zoom: 17
    };

    var var_map = new google.maps.Map(document.getElementById("map-container"),
      var_mapoptions);

    var var_marker = new google.maps.Marker({
      position: var_location,
      map: var_map,
      //Hal東京のポインタ―名
      title: "HAL TOKYO"
    });
  }

  // Initialize maps
  google.maps.event.addDomListener(window, 'load', regular_map);