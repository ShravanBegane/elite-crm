<html>
<head>


        <script src="<?=$site_URL?>layouts/v7/lib/jquery/jquery.min.js?v=7.1.0"></script>
    <script src="<?=$site_URL?>layouts/v7/lib/jquery/jquery-migrate-1.0.0.js?v=7.1.0"></script>
    <link type='text/css' rel='stylesheet' href='layouts/v7/lib/todc/css/todc-bootstrap.min.css'>
    <link type='text/css' rel='stylesheet' href='layouts/v7/lib/todc/css/bootstrap.min.css'>
</head>
<body>

  
       <div class="col-xs-12" style="margin-top:15px">
               <div class="table-responsive">
<div class="listViewPageDiv content-area " id="listViewContent" style="min-height: auto;">
                <!--map---><?php
error_reporting(0); 
include_once('api/getEmployee.php');
    //include_once('api/getEmployeeList.php'); ?>
                
                <div class="col-sm-12 col-md-12">
                    <div id="map"></div>
                    <div id="list">
                        <ul class="list-group">
                          
                                <li class="list-group-item" style="background-color:<?php echo $clr; ?>"><a href="#"><?php echo $names; ?></a></li>

                     
                            <li class="list-group-item">
                                <a class="btn btn-primary" href="<?php echo $site_URL ?>location.php?link=locations" style=" width: 100%; margin: 0px;color: white;">Back To Home
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
</div>
</div>

 <div class="clearfix"></div>
 </div>
</body>

 <script>
        var customLabel = {
            restaurant: {
                label: 'R'
            },
            bar: {
                label: 'B'
            }
        };

        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>),
                zoom: 15
            });
            var infoWindow = new google.maps.InfoWindow;

            // Change this depending on the name of your PHP or XML fil


            downloadUrl('employee.xml', function(data) {
                var xml = data.responseXML;
                var markers = xml.documentElement.getElementsByTagName('marker');
                Array.prototype.forEach.call(markers, function(markerElem) {
                    var id = markerElem.getAttribute('id');
                    var name = markerElem.getAttribute('name');
                    var address = markerElem.getAttribute('address');
                    var color = markerElem.getAttribute('color');
                    var type = markerElem.getAttribute('type');
                    var point = new google.maps.LatLng(
                        parseFloat(markerElem.getAttribute('lat')),
                        parseFloat(markerElem.getAttribute('lng')));

                    var infowincontent = document.createElement('div');
                    var strong = document.createElement('strong');
                    strong.textContent = name
                    infowincontent.appendChild(strong);
                    infowincontent.appendChild(document.createElement('br'));

                    var text = document.createElement('text');
                    text.textContent = address
                    infowincontent.appendChild(text);
                    var icon = customLabel[type] || {};
                    var marker = new google.maps.Marker({
                        map: map,
                        position: point,
                        animation: google.maps.Animation.DROP,
                        icon: {
                            path: 'm 12,2.4000002 c -2.7802903,0 -5.9650002,1.5099999 -5.9650002,5.8299998 0,1.74375 1.1549213,3.264465 2.3551945,4.025812 1.2002732,0.761348 2.4458987,0.763328 2.6273057,2.474813 L 12,24 12.9825,14.68 c 0.179732,-1.704939 1.425357,-1.665423 2.626049,-2.424188 C 16.809241,11.497047 17.965,9.94 17.965,8.23 17.965,3.9100001 14.78029,2.4000002 12,2.4000002 Z',
                            fillColor: color,
                            fillOpacity: 1.0,
                            strokeColor: color,
                            strokeWeight: 1,
                            scale: 2,
                            anchor: new google.maps.Point(12, 24),
                        },
                    });
                    marker.addListener('click', function() {
                        infoWindow.setContent(infowincontent);
                        infoWindow.open(map, marker);
                    });
                });
            });
        }



        function downloadUrl(url, callback) {
            var request = window.ActiveXObject ?
                new ActiveXObject('Microsoft.XMLHTTP') :
                new XMLHttpRequest;

            request.onreadystatechange = function() {
                if (request.readyState == 4) {
                    request.onreadystatechange = doNothing;
                    callback(request, request.status);
                }
            };

            request.open('GET', url, true);
            request.send(null);
        }

        function doNothing() {}
        setTimeout(function() {
            window.location.reload()
        }, 60000);
    </script>
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcqVZ_mrDfGO-lipw2g1eo5qFXrf9N_As&callback=initMap">
    </script>
    <style>
        #map {
            width: 100% !important;
            height: 600px;
        }

        #list {
            position: absolute;
            top: 54px;
            left: 25px;
        }

        #list .list-group .list-group-item {
            text-align: center;
            padding-right: 23px;
            padding-left: 23px;
        }
    </style>
    <script>
        $("#adv-search").attr("disabled", true);
    </script>


<?php include "script.php" ?>
</html>
