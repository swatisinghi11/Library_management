$(document).ready(function(){
	
	var base_url = window.location.origin;
	var post_url_localhost = base_url+"/Library_management/index.php/Landing_page/select_id";
	var post_url_openshift = base_url+"/index.php/Landing_page/authentication";
	
	$("#signinform").submit(function(){
		var clg_id=$("#clg_id").val();
		var checkbox = document.getElementById('remember').checked;
	// Storing signIn data in signIn credentials.
		var select_id_credentials = {"clg_id":clg_id,"remember":checkbox};
		console.log("select_id call...",select_id_credentials);

	// Sending SignIn credentials to the server through ajax call.
		$.ajax({
			    type: 'POST',
			    url: post_url_localhost,
			    data: select_id_credentials,
			    dataType: "json",
		    //Receiving SignIn result from the server. 
			    success : function(select_id_result){
			    	console.log(select_id_result);
			    	var uuid=select_id_result.uuid;
			    	if(select_id_result.success == 1){
				    	console.log("successfully signed in!!!!!!!!!!!!!!");
				    	window.open("selected_student/"+uuid,"_self");
				    }
				    else {
				    	alert("Username Does not exists!!!");
				    }
				   
			    },
			    error : function(){
			        console.log("Signin Call failed !!!")
			    }
			});
		event.preventDefault();
	});

});