$(document).ready(function(){

  // var HeightSliderTextBlock = $(window).width()/3 - 100;
  // console.log(HeightSliderTextBlock);
  // $(".slider_back").each(function(){
  //   $(this).height(HeightSliderTextBlock);
  // });


    $(".fancybox").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '50%',
		height		: '80%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});

	$(".btn-callback").click(function(){
	    if($(".require").val()==""){
	        alert("Заполните поля");
	    }
	    else{
	        $(".btn-callback").html("Подождите");
	       var name = $(".userName").val();
         var company = $(".userCompany").val();
	       var phone = $(".userPhone").val();
         var email = $(".userEmail").val();
         var subject = $(".userSubject").val();
         var message = $(".userMessage").val();
         var callbackType = $(".callbackType").val();

	        $.get("/site/callback",{name : name, company : company, phone : phone, email : email, subject : subject, message : message, callbackType: callbackType}).done(function(data){

	           if (data == "1")
	                $(".userFormField").val("");

	                $(".btn-callback").html("Отправить");
	                $(".alert-callback").css("display","block");
	        });
	    }
	});

	$(".btn-widget-callback").click(function(){
		name = $(".callback-widget-name").val();
		phone = $(".callback-widget-phone").val();
		email = "";
        subject = "";
        message = "";
        callbackType = "";
        company = "";

		if(name=="" || phone==""){
			alert('Заполните пожалуйста все поля');
		}else{

			$(".btn-widget-callback").html("Подождите");
	     


	        $.get("/site/callback",{name : name, company : company, phone : phone, email : email, subject : subject, message : message, callbackType: callbackType}).done(function(data){

	           if (data == "1")
	                $(".callback-widget-name").val("");
	            	$(".callback-widget-phone").val("");

	                $(".btn-widget-callback").html("Получить консультацию");
	                $(".alert-widget-callback").css("display","block");
	        });

		}
	});





});
