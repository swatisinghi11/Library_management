// function logout(){
// 	var base_url = window.location.origin;
// 	var post_url_localhost = base_url+"/Library_management/index.php/Landing_page";
// 	var post_url_openshift = base_url+"/index.php/Landing_page";
// 	window.open(post_url_locakhost,"_self");
// }

// $(document).ready(function(){
// 	var current_url = String(window.location.href);
// 	var index = current_url.indexOf("selected_student/");
// 	var selected_student_uuid = current_url.substr(index+17)
// 	console.log(selected_student_uuid);
// 	var base_url = window.location.origin;
// 	var post_url_localhost = base_url+"/legistifyphp_github/index.php/Landing_page/mainpage_selected_student_initialisation";
// 	var post_url_openshift = base_url+"/index.php/Landing_page/mainpage_initialisation";

// 	$.ajax({
// 		    type: 'POST',
// 		    url: post_url_localhost,
// 		    data: {"uuid":selected_student_uuid},
// 		    dataType: "json",
// 	    });
// });