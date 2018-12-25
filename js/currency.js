
$( document ).ready(function() {

	$.getJSON('https://api.exchangeratesapi.io/latest?base=EUR', function(data) {

		$.each( data.rates, function( i, rates ) {


			$('#tpanel tr:last').after('<tr><td>'+data.base+'</td><td>'+i+'</td><td>'+rates+'</td></tr>');



		});


	});

	//  currency data API https://openexchangerates.org/
	$.getJSON('https://openexchangerates.org/api/currencies.json', function(data) {

		$.each( data, function( i ) {

			$('#Base option:last').after('<option value="'+i+'">'+i+'</option>');


		});

	});
});

function nextPage(){

	location.href = 'Manage.php';


}

