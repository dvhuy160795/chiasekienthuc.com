var user = {
	showPopupLogin : function(){
		$("#popup").dialog("on");
		var url = "/public/User/register";
		var showPopup = $.ajax({
			type: "post",
			url: url,
			dataType: "json"
		});
		showPopup.then(function(){
			alert(1);
			console.log(data);
		});
		
	},
	loginUser : function(){
		var url = "/public/User/login";
		var login = $.ajax({
			type: "post",
			url: url,
			data: data,
			dataType: "json"
		});
	}
};