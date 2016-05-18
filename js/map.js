var map;

window.onload = function(){
    var punto = new google.maps.LatLng(-2.0000, -64.0000);
    var myOptions = {
      zoom: 4, 
      center: punto,
      mapTypeId: google.maps.MapTypeId.MAP
      }
  
  map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
  
  var n=1;
    var markers = [
        {
        'position':new google.maps.LatLng(10.180934, -64.682882) }, //Plaza Mayor
    
        {
        'position':new google.maps.LatLng(10.234320, -67.999734) }, //Via Veneto
    
        {
        'position':new google.maps.LatLng(8.975000, -79.552800) }, //Albrook Mall

        {
        'position':new google.maps.LatLng(10.193389, -64.693648) }, //Venezuela

        {
        'position':new google.maps.LatLng(-2.114530, -79.903339) }, //Ecuador

        {
        'position':new google.maps.LatLng(-8.394055, -52.628768) }, //Brasil

        {
        'position':new google.maps.LatLng(-16.50075, -68.150564) } //Bolivia
    ];
 
    n=1;
    for(var i in markers){
        marker = new google.maps.Marker({
            position: markers[i]['position']
            , map: map
      , icon: 'http://www.vermilinternacional.com/v2.png'
      , zIndex: n
        });
    
    google.maps.event.addListener(marker, 'mouseover', function(){
            this.setIcon('http://www.vermilinternacional.com/v1.png');
        });
 
        google.maps.event.addListener(marker, 'mouseout', function(){
            this.setIcon('http://www.vermilinternacional.com/v2.png');
        });
    } 
}
	
/*window.onload = function(){
    var punto = new google.maps.LatLng(10.170000, -64.6500);
    var myOptions = {
     	zoom: 5, //nivel de zoom para poder ver de cerca.
     	center: punto,
     	mapTypeId: google.maps.MapTypeId.MAP //Tipo de mapa inicial, mapa.
  		}
	
	map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
}*/


//Función de geolocalización
function pedirPosicion(pos) {
var centro = new google.maps.LatLng(pos.coords.latitude,pos.coords.longitude);
map.setCenter(centro); //pedimos que centre el mapa..
map.setMapTypeId(google.maps.MapTypeId.ROADMAP); //y lo volvemos un mapa callejero
}
 
function geolocalizame(){
navigator.geolocation.getCurrentPosition(pedirPosicion);
}


/* FRANQUICIAS ======================================================== */

//C.C Plaza mayor, Anzoategui.
function lugar1(){
    var punto = new google.maps.LatLng(10.180934, -64.682882);
    var myOptions = {
     	zoom: 18, //nivel de zoom para poder ver de cerca.
     	center: punto,
     	mapTypeId: google.maps.MapTypeId.MAP //Tipo de mapa inicial, mapa.
  		}
	
	map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
	
	var marker = new google.maps.Marker({
        position: map.getCenter()
        , map: map
        , icon: 'http://www.vermilinternacional.com/v2.png'
        , cursor: 'default'
        , draggable: false
	});
	
	google.maps.event.addListener(marker, 'mouseover', function(){
        this.setIcon('http://www.vermilinternacional.com/v1.png');
    });
 
    google.maps.event.addListener(marker, 'mouseout', function(){
        this.setIcon('http://www.vermilinternacional.com/v2.png');
    });	
}

//C.C Via Venetto, Valencia.
function lugar2(){
    var punto = new google.maps.LatLng(10.234320, -67.999734);
    var myOptions = {
     	zoom: 18, //nivel de zoom para poder ver de cerca.
     	center: punto,
     	mapTypeId: google.maps.MapTypeId.MAP //Tipo de mapa inicial, mapa.
  		}
	
	map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
	
	var marker = new google.maps.Marker({
        position: map.getCenter()
        , map: map
        , icon: 'http://www.vermilinternacional.com/v2.png'
        , cursor: 'default'
        , draggable: false
	});
	
	google.maps.event.addListener(marker, 'mouseover', function(){
        this.setIcon('http://www.vermilinternacional.com/v1.png');
    });
 
    google.maps.event.addListener(marker, 'mouseout', function(){
        this.setIcon('http://www.vermilinternacional.com/v2.png');
    });	
}

//Albrook Mall, Panama.
function lugar3(){
    var punto = new google.maps.LatLng(8.975000, -79.552800);
    var myOptions = {
     	zoom: 18, //nivel de zoom para poder ver de cerca.
     	center: punto,
     	mapTypeId: google.maps.MapTypeId.MAP //Tipo de mapa inicial, mapa.
  		}
	
	map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
	
	var marker = new google.maps.Marker({
        position: map.getCenter()
        , map: map
        , icon: 'http://www.vermilinternacional.com/v2.png'
        , cursor: 'default'
        , draggable: false
	});
	
	google.maps.event.addListener(marker, 'mouseover', function(){
        this.setIcon('http://www.vermilinternacional.com/v1.png');
    });
 
    google.maps.event.addListener(marker, 'mouseout', function(){
        this.setIcon('http://www.vermilinternacional.com/v2.png');
    });	
}


/* DISTRIBUIDORES ======================================================== */

//Casa Vermil
function lugarA(){
    var punto = new google.maps.LatLng(10.193389, -64.693648);
    var myOptions = {
      zoom: 17, //nivel de zoom para poder ver de cerca.
      center: punto,
      mapTypeId: google.maps.MapTypeId.MAP //Tipo de mapa inicial, mapa.
      }
  
  map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
  
  var marker = new google.maps.Marker({
        position: map.getCenter()
        , map: map
        , icon: 'http://www.vermilinternacional.com/v2.png'
        , cursor: 'default'
        , draggable: false
  });
  
  google.maps.event.addListener(marker, 'mouseover', function(){
        this.setIcon('http://www.vermilinternacional.com/v1.png');
    });
 
    google.maps.event.addListener(marker, 'mouseout', function(){
        this.setIcon('http://www.vermilinternacional.com/v2.png');
    }); 
}

//Samanes 7, Ecuador.
function lugarB(){
    var punto = new google.maps.LatLng(-2.114530, -79.903339);
    var myOptions = {
      zoom: 17, //nivel de zoom para poder ver de cerca.
      center: punto,
      mapTypeId: google.maps.MapTypeId.MAP //Tipo de mapa inicial, mapa.
      }
  
  map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
  
  var marker = new google.maps.Marker({
        position: map.getCenter()
        , map: map
        , icon: 'http://www.vermilinternacional.com/v2.png'
        , cursor: 'default'
        , draggable: false
  });
  
  google.maps.event.addListener(marker, 'mouseover', function(){
        this.setIcon('http://www.vermilinternacional.com/v1.png');
    });
 
    google.maps.event.addListener(marker, 'mouseout', function(){
        this.setIcon('http://www.vermilinternacional.com/v2.png');
    }); 
}

//Rio de Janeiro, Brasil.
function lugarC(){
    var punto = new google.maps.LatLng(-22.907893, -43.178627);
    var myOptions = {
      zoom: 17, //nivel de zoom para poder ver de cerca.
      center: punto,
      mapTypeId: google.maps.MapTypeId.MAP //Tipo de mapa inicial, mapa.
      }
  
  map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
  
  var marker = new google.maps.Marker({
        position: map.getCenter()
        , map: map
        , icon: 'http://www.vermilinternacional.com/v2.png'
        , cursor: 'default'
        , draggable: false
  });
  
  google.maps.event.addListener(marker, 'mouseover', function(){
        this.setIcon('http://www.vermilinternacional.com/v1.png');
    });
 
    google.maps.event.addListener(marker, 'mouseout', function(){
        this.setIcon('http://www.vermilinternacional.com/v2.png');
    }); 
}

//La Paz, Bolivia.
function lugarD(){
    var punto = new google.maps.LatLng(-16.50075, -68.150564);
    var myOptions = {
      zoom: 17, //nivel de zoom para poder ver de cerca.
      center: punto,
      mapTypeId: google.maps.MapTypeId.MAP //Tipo de mapa inicial, mapa.
      }
  
  map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
  
  var marker = new google.maps.Marker({
        position: map.getCenter()
        , map: map
        , icon: 'http://www.vermilinternacional.com/v2.png'
        , cursor: 'default'
        , draggable: false
  });
  
  google.maps.event.addListener(marker, 'mouseover', function(){
        this.setIcon('http://www.vermilinternacional.com/v1.png');
    });
 
    google.maps.event.addListener(marker, 'mouseout', function(){
        this.setIcon('http://www.vermilinternacional.com/v2.png');
    }); 
}