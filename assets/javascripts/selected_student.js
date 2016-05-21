function logout(){
	var base_url = window.location.origin;
	var post_url_localhost = base_url+"/legistifyphp_github/index.php/Landing_page";
	var post_url_openshift = base_url+"/index.php/Landing_page";
	window.open(post_url_openshift,"_self");
}