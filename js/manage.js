

$( document ).ready(function() {


	//Obtain all currencies
	$.getJSON('https://openexchangerates.org/api/currencies.json', function(data) {

		$.each( data, function( i ) {

			$('#currency1 option:last').after('<option value="'+i+'">'+i+'</option>');
			$('#currency2 option:last').after('<option value="'+i+'">'+i+'</option>');


		});

	});

	// Adding Pairs
	$("#addPairs").on('click', function(){ 

		var currency1  = $("#currency1").val();

		var currency2  = $("#currency2").val();

		console.log("CONTROL 1");

		console.log(currency1);
		console.log(currency2);

		if(currency1 == currency2){

			alert("Select diferent currencys.");

		}else{

			console.log("CONTROL 2");


			$.ajax({ 

				method: "POST",
				url: "controller/saverecords.php",
				data: {"currency1": currency1, "currency2": currency2},

			}).done(function( data ) { 


				var result = $.parseJSON(data); 


				if(result == 1) {

					alert('Pairs saved successfully.');
					

				}else if( result == 2) {
					alert('All fields are required.');

				} else{
					alert('Pairs data could not be saved. Please try again');
				}


			});
		}

	});

	// Remove Pairs
	$("#removePairs").on('click', function(){

		var rev  =  confirm("Are you sure to remove the pair?");

		if (rev) {

			var pair1  = $("#pair1").val();

			var pair2  = $("#pair2").val();

			$.ajax({ 

				method: "POST",
				url: "controller/removerecords.php",
				data: {"pair1": pair1, "pair2": pair2},

			}).done(function( data ) { 

				var result = $.parseJSON(data); 


				if(result == 1) {

					alert('Pairs removed successfully.');
					
				} else{

					alert('Pairs data could not be removed. Please try again');
				}


			});
		}



	});

});



