const headerItems = [...document.querySelectorAll(".header__bar-list-item")];

setTimeout(() => {
	headerItems[0].style.opacity = "1";
}, 1000);

setTimeout(() => {
	headerItems[1].style.opacity = "1";
}, 1500);

setTimeout(() => {
	headerItems[2].style.opacity = "1";
}, 2000);

setTimeout(() => {
	document.querySelector(".header__heading").style.opacity = "1";
}, 500);

//fading in about items

const aboutItems = document.querySelectorAll(".about__item");

window.addEventListener("scroll", function() {
	aboutItems.forEach(item => {
        const itemFromTop = item.offsetTop;
        // console.log(itemFromTop);
        const heightFromTop = window.pageYOffset;
        // console.log(heightFromTop);
		if (heightFromTop > itemFromTop) {
			item.style.opacity = "1";
		}
	});
});
