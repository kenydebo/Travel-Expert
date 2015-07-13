<!-- 
//---
//--- Author: Patricia Dumontier
//--- Date Written: May 12, 2015
//--- Class: OOSD-Apr2015 Object Orient Software Design
//--- 
//--- Modified By: <developer's name>
//--- Date Modified: May 00, 2015
//--- Reason for Modification:
//--- 
-->

/*=========================
  HOVER EFFECT - PEOPLE
  http://bootsnipp.com/snippets/featured/thumbnail-caption-hover-effect
 ================= */

$( document ).ready(function() {
    $("[rel='tooltip']").tooltip();    
 
    $('.thumbnail').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    ); 
});

/**
  CUSTOMER QUOTES
*/


// When the DOM is ready, run this function
$(document).ready(function() {
  //Set the carousel options
  $('#quote-carousel').carousel({
    pause: true,
    interval: 4000,
  });
});



/**
  CONTACTS
*/
$( document ).ready(function() {
    $("[rel='tooltip']").tooltip();    
 
    $('.thumbnail').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    ); 
});

//<script src="https://maps.google.com/maps/api/js?sensor=false"></script>

   jQuery(function ($) {
        function init_map1() {
            var myLocation = new google.maps.LatLng(38.885516, -77.09327200000001);
            var mapOptions = {
                center: myLocation,
                zoom: 16
            };
            var marker = new google.maps.Marker({
                position: myLocation,
                title: "Property Location"
            });
            var map = new google.maps.Map(document.getElementById("map1"),
                mapOptions);
            marker.setMap(map);
        }
        init_map1();
    });
	
	
/**
  REGISTRATION
*/

function showtooltip(target)<!-- this function is for the mouseover and display information about the travel experts' class. After test it is work on firefox, but can not display on chrome and IE.-->
{
	console.log("showtooltip"+target);
	var myVar = document.getElementById(target);
	myVar.style.visibility = 'visible';
}
function hidetooltip(target)<!--this function is for the mouseover and display information about the travel experts' class. After test it is work on firefox, but can not display on chrome and IE.-->
{
	console.log("hidetooltip"+target);
	var myVar = document.getElementById(target);
	myVar.style.visibility = 'hidden';
}
