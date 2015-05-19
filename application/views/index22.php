<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<title>MAP API</title>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSPFEJoCJfvFTr0XtCIOeGImETkNW5GHg"></script>
<script type="text/javascript">
function initialize() {
var myLatlng = new google.maps.LatLng(15.87003,100.99254);
var myOptions = {
  zoom: auto,
  center: myLatlng,
  mapTypeId: google.maps.MapTypeId.ROADMAP,

}
var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: 'Default Marker',
        draggable:true
});

/*google.maps.event.addListener(map,'click',function(event) {

        marker = new google.maps.Marker({
        position: event.latLng,
        map: map,
        title: 'Click Generated Marker',
        draggable:true
        });
    }
);*/

google.maps.event.addListener(
    marker,
    'drag',
    function(event) {
        document.getElementById('lat').value = this.position.lat();
        document.getElementById('lng').value = this.position.lng();
        //alert('drag');
    });


google.maps.event.addListener(marker,'dragend',function(event) {
        document.getElementById('lat').value = this.position.lat();
        document.getElementById('lng').value = this.position.lng();
        alert('Drag end');
    });


  }
</script>
</head>
<body onload="initialize()">
<div id="map_canvas" style="width:500px;height:500px;"></div>
<form method="post" action="p3.php">
Lat: <input type="text" name="lat" id="lat"><br>
Lng: <input type="text" name="lng" id="lng">

<input type="submit" name="submit" id="submit" value="OK"> 
</form>

</body></html> 