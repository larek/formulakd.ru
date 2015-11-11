$(document).ready(function(){
    $(".fancybox").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '50%',
		height		: '50%',
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
	       var phone = $(".userPhone").val();
	        
	        $.get("/site/callback",{name : name, phone : phone}).done(function(data){
	            
	           if (data == "1") 
	                $(".userName").val("");
	                $(".userPhone").val("");
	                $(".btn-callback").html("Отправить");
	                $(".alert-callback").css("display","block");
	        });
	    }
	});
	

});