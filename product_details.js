

// let imageAddress = ["pimage1","pimage2","pimage3","pimage4","pimage5"];
// // let wishlist = document.getElementById('wishlist_icon');
// let bigImg = document.getElementById('bigImg');
// let pics = document.getElementsByClassName('pics')[0];
// let add_to_wishlist = document.getElementsByClassName('add_to_wishlist')[0];
// let isClicked = false;

// for(let i = 0; i<imageAddress.length;i++)
//   {
//     pics.innerHTML += '<div onmouseover="showImage('+i+')"><img src="./assets/img/'+imageAddress[i]+'" alt="p_image"></div>';
//   }

// function showImage(index)
// {
//   // console.log(index);
//   bigImg.src = imageAddress[index];
// }


// function AddToWishlist()
// {
//   if (isClicked==false)
//   {
//    // $(this).src = "./assets/img/heartf.png";
//    add_to_wishlist.style.display = "flex";
//    hideWishlist();
//    add_to_wishlist.innerText = "Added to wishlist";
//    isClicked=true;
//   }
//   else
//   {
//     // $(this).src = "./assets/img/heart.png";
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