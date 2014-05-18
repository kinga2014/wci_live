function do_notify_users(Urls) {
	$(document).ready(function(){
		$("#top_notify").slideDown({ duration: 1000, easing: "easeInOutQuart" });
		$("#n_main").attr("style", "margin-top: 30px;");
		
		$("#btn_hide").click(function() {
			$("#top_notify").slideUp({ duration: 1000, easing: "easeInOutQuart" });
			
			 setTimeout(function(){
			 	$("#n_main").removeAttr("style", "margin-top: 30px;");
			 }, 700);
			
			setTimeout(function(){
			 	window.location.href = Urls;
			 }, 600);
		});
	});
}

