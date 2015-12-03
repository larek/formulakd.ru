$(document).ready(function(){
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

	        $.get("/site/callback",{name : name, company : company, phone : phone, email : email, subject : subject, message : message}).done(function(data){

	           if (data == "1")
	                $(".userFormField").val("");

	                $(".btn-callback").html("Отправить");
	                $(".alert-callback").css("display","block");
	        });
	    }
	});





});
