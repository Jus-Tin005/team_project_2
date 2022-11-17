/*
! Cookie Codes Area
*/
const cookieContainer = document.querySelector(".cookie-container"),
          acceptButton = document.querySelector(".accept-btn"),
          rejectButton = document.querySelector(".reject-btn");

acceptButton.addEventListener("click", () => {
        cookie();
});

rejectButton.addEventListener("click", () => {
        cookie();
});

      function cookie(){
        cookieContainer.classList.remove("active");
  localStorage.setItem("cookieBannerDisplayed", "true");
      }


//       Future Hope International School Calendar 2022
// Future Hope International School Events Calendar


setTimeout(() => {
  if (!localStorage.getItem("cookieBannerDisplayed")) {
    cookieContainer.classList.add("active");
  }
}, 1000);


/*
!......................................................Banner Area..............................
*/

var getSlideImg = document.getElementById("slide-img");

var images = new Array(
        "./images/primary/image6.jpg",
        "./images/primary/image7.jpg",
        "./images/primary/image8.jpg",
        "./images/primary/image9.jpg"
);

var imgLength = images.length;
var i = 0;

function slider(){
        if(i >imgLength -1){
                i = 0;
        }

        getSlideImg.src = images[i];
        i++;
        setTimeout("slider()",3000);

}
