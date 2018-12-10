  //init markers
  var trips = [
    {
      name: "Mostar",
      bubbleText: "",
      bubbleImg:"https://ucuzucakbileti.net/wp-content/uploads/2015/11/Saraybosna-Mostar.jpg",
      location: {lat:43.3395362, lng:17.7512001},
      icon: "img/tripIcon.png"
    },
    {
      name: "Travnik",
      bubbleText: "",
      bubbleImg: "https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Travnik_%28collage_image%29.jpg/250px-Travnik_%28collage_image%29.jpg",
      location: {lat:44.2262552, lng:17.6425836},
      icon: "img/tripIcon.png"
    },
    {
      name: "Jajce",
      bubbleText: "vodopad",
      bubbleImg: "http://www.utazas-ajanlat.hu/images2/bosznia-hercegovina-sarajevo-sarajevo/misztikus-bosznia-es-a-piramisok-3-nap-2-ej-0.jpg",
      location: {lat:44.339932, lng:17.2713069},
      icon: "img/tripIcon.png"
    },
    {
      name: "Bihać",
      bubbleText: "",
      bubbleImg: "http://visitmycountry.net/bosnia_herzegovina/bh/images/stories/destinacije/fbih/bihac/bihac.jpg",
      location: {lat:44.813920, lng:15.872669},
      icon: "img/tripIcon.png"
    },
    {
      name: "Prokoško jezero",
      bubbleText: "",
      bubbleImg: "http://bosniantravel.com/wp-content/uploads/2017/04/ProkoskoJezero.jpg",
      location: {lat:43.957397, lng:17.754192},
      icon: "img/tripIcon.png"
    },
    {
      name: "Konjic - rafting",
      bubbleText: "",
      bubbleImg: "http://hoteloazakonjic.com/images/slide2.jpg",
      location: {lat:43.651092, lng:17.962637},
      icon: "img/tripIcon.png"
    },
    {
      name: "Buna",
      bubbleText: "",
      bubbleImg: "https://c1.staticflickr.com/4/3435/3838977567_195ea78706_b.jpg",
      location: {lat:43.256749, lng:17.903323},
      icon: "img/tripIcon.png"
    },
    {
      name: "Jablanica",
      bubbleText: "",
      bubbleImg: "http://depo.ba/media/pictures/2012/09/02/f6a05214ff72dc5823a7731365372895.jpg",
      location: {lat:43.692735, lng:17.820442},
      icon: "img/tripIcon.png"
    },
    {
      name: "Kravice vodopad",
      bubbleText: "",
      bubbleImg: "http://www.visitmycountry.net/bosnia_herzegovina/bh/images/stories/ponude/izleti/kravice/kravice_vmc_izlet_0.jpg",
      location: {lat:43.156051, lng:17.608003},
      icon: "img/tripIcon.png"
    },
    {
      name: "Ajdinovići",
      bubbleText: "",
      bubbleImg: "http://radiokameleon.ba/wp-content/uploads/2016/02/domace-1.jpg",
      location: {lat:44.071243, lng:18.557191},
      icon: "img/tripIcon.png"
    },
    {
      name: "Bijambare pećina",
      bubbleText: "",
      bubbleImg: "http://www.masterdmc.com/wp-content/uploads/2015/07/naslovna_0.jpg",
      location: {lat:44.092000, lng:18.503096},
      icon: "img/tripIcon.png"
    },
  ]
  var homes = [
    {
      name: "Otes house",
      bubbleText: "3 floor house in Otes near Ilidža",
      location: {lat:43.8385 , lng:18.3050},
      icon: "img/houseIcon.png"
    },
    {
      name: "Butmirska Cesta",
      bubbleText: "House near center of Elidža and Airport",
      location: {lat:43.8216347 , lng:18.3169005},
      icon: "img/houseIcon.png"
    }
  ]
  //points of interest(office rent-a-car, airport)
  var pois = [
  	{
  		name: "Office",
  		bubbleText: "Ulica Omara Hasana 15",
  		location: {lat: 43.8557502, lng: 18.4127439},
  		icon: "img/officeIcon.png"
  	},
  	{
  		name: "Airport",
  		bubbleText: "Sarajevo International Airport (SJJ)",
  		location: {lat: 43.824731, lng: 18.3313595},
  		icon: "img/airportIcon.png"
  	}
  ]
  var map;
  var poisMarker = [];
  var poisInfo = [];
  var tripsMarker = [];
  var tripsInfo = [];
  var homesMarker = [];
  var homesInfo = [];
  var gog;

function addMarker(markers, array, index, info, buttonList) {
  markers[index] = new google.maps.Marker({
    position: array[index].location,
    map: map,
    title: array[index].name,
    icon: array[index].icon
  });


  if (array[index].bubbleImg != null && array[index].bubbleImg != "" && array[index].bubbleImg != undefined) {
    var contentString = "<div clas=\"content\" > <h4>"+array[index].name+"</h4> <img class=\"bubbleImg\" src=\""+array[index].bubbleImg+"\"> <p style=\"font-size: medium;\">"+array[index].bubbleText+"</p> </div>";      
  }
  else{
    var contentString = "<div clas=\"content\" > <h4>"+array[index].name+"</h4> <p style=\"font-size: medium;\">"+array[index].bubbleText+"</p> </div>";      
  }
  

  

  info[index] = new google.maps.InfoWindow({
    content: contentString
  });

  markers[index].addListener('click', function() {
    info[markers.indexOf(this)].open(map, this);
  });

  $("."+buttonList).children().children().append('<li><input type="checkbox" name="" checked="true" class="' + buttonList + "Button" + index +'">' + array[index].name + ' <a class="fa fa-location-arrow '+ buttonList + "Location" + index +' "  aria-hidden="true"></a> <a class="fa fa-info-circle '+ buttonList + "Info" + index +' " aria-hidden="true"></a></li>');
  $("." + buttonList + "Button" + index).on("click", function () {
    if (!$(this).is(':checked')) {
      markers[index].setVisible(false);
    }
    else{
      markers[index].setVisible(true); 
    }
  });
  $("." + buttonList + "Location" + index).on("click", function () {
    map.setCenter(new google.maps.LatLng(array[index].location.lat, array[index].location.lng));
    map.setZoom(13);
  });
  $("." + buttonList + "Info" + index).on("click", function () {
    info[index].open(map, markers[index]);
  });
}

$(document).ready(function(){
  window.initMap = function(){
    map = new google.maps.Map(document.getElementById("map"), {
      zoom: 8,
      center: trips[1].location
    });
    for (var i = 0; i < trips.length; i++) {
      addMarker(tripsMarker, trips, i, tripsInfo, "tripsList");
    }
  /*
    for (var i = 0; i < homes.length; i++) {
      addMarker(homesMarker, homes, i, homesInfo, "accomodationList");
    }
*/
    for (var i = 0; i < pois.length; i++) {
      addMarker(poisMarker, pois, i, poisInfo, "poisList");
    }
  }
  $(".poisList").slideUp();
  $(".tripsList").slideUp();
  $(".accomodationList").slideUp();
  $("footer").addClass("mapFooterSpecific");
  $(".pois").on("click", function () {
    $(".poisList").slideToggle(500);
    $(".poisList").removeClass("hidden");
  });
  $(".accomodation").on("click", function () {
    $(".accomodationList").slideToggle(500);
    $(".accomodationList").removeClass("hidden");
  });
  $(".trips").on("click", function () {
    $(".tripsList").slideToggle(500);
    $(".tripsList").removeClass("hidden");
  });
  $(".poisHide").on("click", function () {
    if ($(this).is(':checked')) {
      for (var i = poisMarker.length - 1; i >= 0; i--) {
        poisMarker[i].setVisible(false);
      }
    }
    else{
      for (var i = poisMarker.length - 1; i >= 0; i--) {
        poisMarker[i].setVisible(true);
      }
    }
  });
  $(".accomodationHide").on("click", function () {
    if ($(this).is(':checked')) {
      for (var i = homesMarker.length - 1; i >= 0; i--) {
        homesMarker[i].setVisible(false);
      }
    }
    else{
      for (var i = homesMarker.length - 1; i >= 0; i--) {
        homesMarker[i].setVisible(true);
      }
    }
  });
  $(".tripsHide").on("click", function () {
    if ($(this).is(':checked')) {
      for (var i = tripsMarker.length - 1; i >= 0; i--) {
        tripsMarker[i].setVisible(false);
      }
    }
    else{
      for (var i = tripsMarker.length - 1; i >= 0; i--) {
        tripsMarker[i].setVisible(true);
      }
    }
  });
});