$(document).ready(function(){
	console.log("skjhfkljhglkj");
	var base_url = window.location.origin;
	// var post_url_localhost = base_url+"/Library_management/index.php/Landing_page/librarian";
	// var post_url_openshift = base_url+"/index.php/Landing_page/authentication";
	
	$("#signinform").submit(function(){
		var username=$("#username").val();
		var password=$("#password").val();
		var checkbox = document.getElementById('remember').checked;
	// Storing signIn data in signIn credentials.
		var signin_credentials = {username:username,password:password,remember:checkbox};

		if(username==="jecrc@lib")
		{
			console.log("hey");
			if(password==="123")
			{
				console.log("i am");
				$("button").bind("click", function(){
					window.open("librarian","_self");					
				});
			}
			else
			{
				alert("Incorrect Password !!!");
			}
		}
		else
		{
			alert("Incorrect Username !!!");
		}
	});

});