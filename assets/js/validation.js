$(function(){
	$("#name_error").hide();
	$("#title_error").hide();
	$("#type_error").hide();
	$("#address_error").hide();
	$("#builtup_error").hide();
	$("#price_error").hide();
	$("#description_error").hide();
	$("#mobile_error").hide();
	$("#email_error").hide();
	$("#facilities_error").hide();
	$("#city_error").hide();
	$("#area_error").hide();
	var error_name=false;
	var error_title=false;
	var error_type=false;
	var error_address=false;
	var error_builtup=false;
	var error_price=false;
	var error_description=false;
	var error_mobile=false;
	var error_email=false;
	var error_facilities=false;
	var error_city=false;
	var error_area=false;
	
	$("#title").focusout(function(){
		check_title();
	});
	$("#type").focusout(function(){
		check_type();
	});
	$("#address").focusout(function(){
		check_address();
	});
	$("#builtup").focusout(function(){
		check_builtup();
	});
	$("#price").focusout(function(){
		check_price();
	});
	$("#description").focusout(function(){
		check_description();
	});
	$("#email").focusout(function(){
		check_email();
	});
	$("#facilities").focusout(function(){
		check_facilities();
	});
	$("#city").focusout(function(){
		check_city();
	});
	$("#area").focusout(function(){
		check_area();
	});
	$("#mobile").focusout(function(){
		check_mobile();
	});
	function check_mobile(){
		var pattern = new RegExp('[0-9]{10}');
		var length=$("#mobile").val().length;
		if(pattern.test($("#mobile").val())&&length==10){
			$("#mobile_error").hide();
		}else{
			$("#mobile_error").html("Invalid mobile no.");
			$("#mobile_error").show();
			error_mobile=true;
		}
	}
	function check_title(){
		var length=$("#title").val().length;
		if(length<=3){
			$("#title_error").html("Title required and must contains atleast 4 characters");
			$("#title_error").show();
			error_title=true;
		}else{
			$("#title_error").hide();
		}
	}
	function check_address(){
		var length=$("#address").val().length;
		if(length<=3){
			$("#address_error").html("Please enter address");
			$("#address_error").show();
			error_address=true;
		}else{
			$("#address_error").hide();
		}
	}
	function check_builtup(){
		var length=$("#builtup").val().length;
		if(length<=3){
			$("#builtup_error").html("Please enter builtup");
			$("#builtup_error").show();
			error_builtup=true;
		}else{
			$("#builtup_error").hide();
		}
	}
	function check_price(){
		var length=$("#price").val().length;
		if(length<=3){
			$("#price_error").html("Please enter price");
			$("#price_error").show();
			error_price=true;
		}else{
			$("#price_error").hide();
		}
	}
	function check_description(){
		var length=$("#description").val().length;
		if(length<=3){
			$("#description_error").html("Please enter description");
			$("#description_error").show();
			error_description=true;
		}else{
			$("#description_error").hide();
		}
	}
	function check_facilities(){
		var length=$("#facilities").val().length;
		if(length<=3){
			$("#facilities_error").html("Please enter facilities");
			$("#facilities_error").show();
			error_facilities=true;
		}else{
			$("#facilities_error").hide();
		}
	}
	function check_city(){
		var length=$("#city").val().length;
		if(length<=3){
			$("#city_error").html("Please enter city");
			$("#city_error").show();
			error_city=true;
		}else{
			$("#city_error").hide();
		}
	}
	function check_area(){
		var length=$("#area").val().length;
		if(length<=3){
			$("#area_error").html("Please enter area");
			$("#area_error").show();
			error_area=true;
		}else{
			$("#area_error").hide();
		}
	}
	$("#myprofile").submit(function(){
		 error_address=false;
		 error_city=false;
		 error_mobile=false;
		 
		 check_address();
		 check_city();
		 check_mobile();
		 if(
			 error_address==false &&
			 error_city==false &&
			 error_mobile==false)
		 {
			 return true;
		 }else{
			 return false;
		 }
	});
	$("#real_form").submit(function(){
		error_title=false;
		 error_type=false;
		 error_address=false;
		 error_builtup=false;
		 error_price=false;
		 error_description=false;
		 error_facilities=false;
		 error_city=false;
		 error_area=false;
		 
		 check_title();
		 check_type();
		 check_address();
		 check_builtup();
		 check_price();
		 check_description();
		 check_facilities();
		 check_city();
		 check_area();
		 if(error_title==false &&
		     error_type==false &&
			 error_address==false &&
			 error_builtup==false &&
			 error_price==false &&
			 error_description==false && 
			 error_facilities==false &&
			 error_city==false &&
			 error_area==false
		 ){
			 return true;
		 }else{
			 return false;
		 }
	});
});