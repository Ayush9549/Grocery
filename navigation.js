let isCateHover = false;

$(".categories").on("click",function(){
	if (isCateHover==false)
		{
			$(".categorig").css({"display":"flex"});
			$(".categories>img").css({"transform":"rotate(185deg)"})
			isCateHover = true;
		}
		else
		{
			$(".categorig").css({"display":"none"});
			$(".categories>img").css({"transform":"rotate(05deg)"})
			isCateHover = false;
		}
});


$(".user_pic").on("click",function(){
	console.log("hello");
	$(".menu_conatiner").animate({"width":"20%"},500);
});

$(".close").on("click",function(){
	console.log("hello");
	$(".menu_conatiner").animate({"width":"0%"},500);
});



$(".logout").on("click",function(){
	$(".menu_conatiner").animate({"width":"0%"},300);
});