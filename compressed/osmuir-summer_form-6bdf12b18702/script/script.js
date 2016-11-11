$(document).ready(function(){
	console.log('loaded');
	$('#submit').click(function(){

		
			
		var question1 = [];
		$.each($("input[name='question1']:checked"), function(){
			question1.push($(this).val());
		})

		var question2 = $('#question2').val();
		var question3 = $('#question3').val();
		var question4 = $('#question4').val();
		var question5 = $('#question5').val();
		var name = $('#name').val();
		var company_name = $('#company_name').val();
		var department = $('#department').val();
		var employees = $('#employees').val();
		var title = $('#title').val();
		var telephone = $('#telephone').val();
		var email = $('#email').val();

		console.log(question1.join(", "));
		console.log(name);

		var question1 = question1.join(", ");
		

		if( question1 == '' || question2 == '' || question3 == '' || question4 == '' || question5 == '' || name == '' || company_name == '' || department == '' || employees == '' || title == '' || telephone == '' || email == '') 
		{

			$('#responses').html('<span>全部需要填寫</span>');

		} else {

			$.ajax({
				url: "/records/insertRecords",
				type: "POST",
				// data: $('#submit_form').serialize(),
				data: {
					question1: question1,
					question2: question2,
					question3: question3,
					question4: question4,
					question5: question5,
					name: name,
					company_name: company_name,
					department: department,
					employees: employees,
					title: title,
					telephone: telephone,
					email: email
				},
				dataType: "Text",
				cache: false
			})
			// .beforeSend(function(){
			// 	$('#responses').html("<span>Loading ...</span>");
			// })
			.done(function(data){
				console.log('success');
				$('form').trigger("reset");
				$('#responses').fadeIn().html(data);
				setTimeout(function(){
					$('#responses').fadeOut("slow");
				}, 5000);

				window.location.href = 'thankyou';

			})
			.fail(function(){
				console.log("error");
			})
			
		}

		event.preventDefault();

		
	})
})