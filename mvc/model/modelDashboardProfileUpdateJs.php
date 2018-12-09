<script>// update profile page disable input and backgroundColor change js;
	// performed by capturing the object using onclick event
	var objEmail = $('#idInputEmailUpdateProfileDashboard');
	var objMobile = $('#idInputMobileUpdateProfileDashboard');
	function removeDisabled(obj){
		
		obj.parentNode.nextSibling.nextElementSibling.disabled = false;
		obj.style.backgroundColor = "#51A5D0";
		var objectSmall = obj.parentNode;


		$(objectSmall).removeClass('text-danger');
		$(objectSmall).addClass('text-info');
		
	}
	
	var emailPattern = /^[^0-9.-_][a-z0-9.-_]{3,20}@[a-z]{3,20}\.[a-z]{2,5}/;
	var mobileNumberPattern = /^\d{11}$/;

	 
	$('document').ready(function(){
		$('#idButtonUpdateProfileDashboard').click(function(){
			
			var valueEmail = objEmail.val();
			var valueEmailCheckedStatus = emailPattern.test(valueEmail);
			if(valueEmailCheckedStatus==false)
			{
				objEmail.get(0).parentNode.firstElementChild.firstElementChild.textContent = 'Invalid email';
				objEmail.prev().removeClass('text-info');
				objEmail.prev().addClass('text-danger');

			}
			else{
				objEmail.get(0).parentNode.firstElementChild.firstElementChild.textContent = 'valid';
				objEmail.prev().removeClass('text-info', 'text-danger');
				objEmail.prev().addClass('text-success');
			}
			var valueMobileNumber = objMobile.val();
			var valueMobileNumberCheckedStatus = mobileNumberPattern.test(valueMobileNumber);


			if(valueMobileNumberCheckedStatus==false)
			{
				objMobile.get(0).parentNode.firstElementChild.firstElementChild.textContent = 'Invalid number';
				objMobile.prev().removeClass('text-info');
				objMobile.prev().addClass('text-danger');

			}
			else{
				objMobile.get(0).parentNode.firstElementChild.firstElementChild.textContent = 'valid';
				objMobile.prev().removeClass('text-info', 'text-danger');
				objMobile.prev().addClass('text-success');
			}





		})


	});



</script>