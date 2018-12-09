<script>// update profile page disable input and backgroundColor change js;
	// performed by capturing the object using onclick event
	var objEmail = $('#idInputEmailUpdateProfileDashboard');
	var objMobile = $('#idInputMobileUpdateProfileDashboard');
	var objDob = $('#idInputDobUpdateProfileDashboard');
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
			
			// validation starts
			var valueEmail = objEmail.val();
			var valueEmailCheckedStatus = emailPattern.test(valueEmail);

			var valueMobileNumber = objMobile.val();
			var valueMobileNumberCheckedStatus = mobileNumberPattern.test(valueMobileNumber);

			var valueDob = objDob.val();
			

			

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
			// validation ends


			// ajax and json starts
			


			if(valueEmailCheckedStatus==true && valueMobileNumberCheckedStatus == true)
			{

				var jsProfileInfo = {
					email : valueEmail,
					mobileNumber : valueMobileNumber,
					dob : valueDob
				};
				jsProfileInfo = JSON.stringify(jsProfileInfo);
				jsProfileInfo = JSON.parse(jsProfileInfo);
				alert(jsProfileInfo.email);
				
				// var xhttp = new XMLHttpRequest();
				// xhttp.onreadystatechange = function() {
				// 	if (this.readyState == 4 && this.status == 200) {
				// 		var msg = this.responseText;
				// 		alert(msg);
				// 	}
				// };

				// xhttp.open("POST", "http://localhost/webtech_project/Webtech_Project_MVC/mvc/model/modelDashboardProfileUpdate.php", true);
				// xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				// xhttp.send(jsProfileInfo);


			}









			//ajax and json ends


		})


	});


</script>