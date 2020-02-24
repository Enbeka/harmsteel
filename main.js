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

//scroll from nav to element

document
	.querySelector(".header__bar-list-item--welding")
	.addEventListener("click", function() {
		let weldingFromTop = document.querySelector(".about__heading--welding").offsetTop;
		window.scrollTo(0, weldingFromTop);
	});
document
	.querySelector(".header__bar-list-item--constructions")
	.addEventListener("click", function() {
		let constructionsFromTop = document.querySelector(".about__heading--constructions").offsetTop;
		window.scrollTo(0, constructionsFromTop);
	});
document
	.querySelector(".header__bar-list-item--machining")
	.addEventListener("click", function() {
		let machiningFromTop = document.querySelector(".about__heading--machining").offsetTop;
		window.scrollTo(0, machiningFromTop);
	});
