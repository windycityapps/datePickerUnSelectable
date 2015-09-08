$(document).ready (function() {
/*
grab the input provided by the query
if there are values than parse the input
*/
var inputDays = $('#arrayvals').val();

if(inputDays != undefined) {
var disabledDays = JSON.parse(inputDays);
}
/**
function to exclude pickable dates in jquery datepicker
monthNames array to convert int to a month name string
*/
function daystaken(date) {
var monthNames = ["January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"
];
var m = monthNames[date.getUTCMonth()], d = date.getDate(), y = date.getFullYear();
	for (i = 0; i < disabledDays.length; i++) {
			if($.inArray((m) + ' ' + d + ', ' + y, disabledDays) != -1) {	
			return [false];
		}	
	}
	return [true];
}
$('#date').datepicker({
		minDate: 0,					// days start
		maxDate: '+5w',				// max weeks out
		dateFormat: 'MM d, yy',		//	date format 
		constrainInput: true,
		beforeShowDay: daystaken	
	});
});