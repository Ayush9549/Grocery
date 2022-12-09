


///// mobile screen menu ////
let isHomeClicked = false;
let isCategoriesClicked = false;
let isUserClicked = false;

$(".mobile_screen_home>img").on("click",function(){
	if (isHomeClicked==false)
	{
		$(".mobile_screen_home>img").attr('src','./assets/img/home.png');
		isHomeClicked=true;
	}
	else
	{
		// $(".footer_home>img").each(function(index){
		$(".mobile_screen_home>img").attr('src','./assets/img/homed.png');
		isHomeClicked=false;
		// });
	}
});

$(".mobile_screen_categories>img").on("click",function(){
	if (isCategoriesClicked==false)
	{
		$(".mobile_screen_categories>img").attr('src','./assets/img/categories.png');
		isCategoriesClicked=true;
	}
	else
	{
		// $(".footer_home>img").each(function(index){
		$(".mobile_screen_categories>img").attr('src','./assets/img/category.png');
		isCategoriesClicked=false;
		// });
	}
});

$(".mobile_screen_profile>img").on("click",function(){
	if (isUserClicked==false)
	{
		$(".mobile_screen_profile>img").attr('src','./assets/img/user.png');
		isUserClicked=true;
	}
	else
	{
		$(".footer_btns>img").each(function(index){
		  $(".mobile_screen_home>img").attr('src','./assets/img/homed.png');
		isHomeClicked=false;

		$(".footer_categories>img").attr('src','./assets/img/category.png');
		isCategoriesClicked=false;
		});
		$(".mobile_screen_profile>img").attr('src','./assets/img/user1.png');
		isUserClicked=false;
	}
});

// $(".footer_categories>img").on("click",function(){
// 	if (isClicked==false)
// 	{
// 		$(".footer_categories>img").attr('src','./assets/img/category.png');
// 		isClicked=true;
// 	}
// 	else
// 	{
// 		$(".footer_profile>img").each(function(index){
// 		$(".footer_categories>img").attr('src','./assets/img/categories.png');
// 		isClicked=false;
// 		});
// 	}
// });

// $(".footer_profile>img").on("click",function(){
// 	if (isClicked==false)
// 	{
// 		$(".footer_profile>img").attr('src','./assets/img/user.png');
// 		isClicked=true;
// 	}
// 	else
// 	{
// 		$(".footer_profile>img").each(function(index){
// 		$(".footer_profile>img").attr('src','./assets/img/user (1).png');
// 		isClicked=false;
// 		});
// 	}
	
// });

// $(".footer_btns").on("click",function(){
// 		let selectedElement = $(this).children();
// 		///////////// To reset style//////
// 		selectedElement.each(function( index ){
// 			// console.log(selectedElement.length);
// 			selectedElement.attr('src','./assets/img/home.png');
// 			selectedElement.attr('src','./assets/img/user.png');
// 			selectedElement.attr('src','./assets/img/category.png');
// 		});
// 		$(".footer_home>img").attr('src','./assets/img/homed.png');
// 		$(".footer_categories>img").attr('src','./assets/img/categories.png');
// 		$(".footer_profile>img").attr('src','./assets/img/user (1).png');
// 	});

let isLikeClicked = false;

$(".wishlist>img").on("click",function(){
	if(isLikeClicked==false)
	{
		$(this).attr('src','./assets/img/heartf.png');
		isLikeClicked=true;
	}
	else
	{
		$(this).attr('src','./assets/img/heart.png');
		isLikeClicked=false;
		
	}

});




//////////////Add to wishlist /////////

// let add_to_wishlist = document.getElementsByClassName('add_to_wishlist')[0];
// let wishlist = document.getElementsByTagName('img')[0];
// let isClicked = false;
  

// function AddToWishlist()
// {
//   if (isClicked==false)
//   {
//    wishlist.src = "./assets/img/heartf.png";
//    add_to_wishlist.style.display = "flex";
//    hideWishlist();
//    add_to_wishlist.innerText = "Added to wishlist";
//    isClicked=true;
//   }
//   else
//   {
//     wishlist.src = "./assets/img/heart.png";
//     hideWishlist();
//     add_to_wishlist.style.display = "flex";
//     add_to_wishlist.innerText = "Remove to wishlist";
//     isClicked=false;
//   }
// }

// function hideWishlist()
// {
//   setTimeout(function(){
//     add_to_wishlist.style.display = "none";
//   },1000);
// }


// $(".decrement").on("click",function(){
	
// })