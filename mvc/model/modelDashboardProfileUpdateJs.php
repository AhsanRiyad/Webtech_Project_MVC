<script>// update profile page disable input and backgroundColor change js;
	// performed by capturing the object using onclick event
	function removeDisabled(obj){
		
		obj.parentNode.nextSibling.nextElementSibling.disabled = false;
		obj.style.backgroundColor = "#51A5D0";
		
		
	}
	
	var emailPattern = /^[^0-9.-_][a-z0-9.-_]{3,20}@[a-z]{3,20}\.[a-z]{2,5}/;


	$('document').ready(function(){

   	alert('hello');

	});



</script>