// Add your JS customizations here
const swiper = new Swiper(".mySwiper", {
	slidesPerView: 1,
	spaceBetween: 10,
	loop: true,
	navigation: {
		nextEl: ".next-button",
		prevEl: ".prev-button",
	},
	autoplay: {
		delay: 3000,
		disableOnInteraction: false,
	},
});

const searchToggler = () => {
	let myElement = document.getElementById("navbarSupportedContent");
	let searchBar = document.getElementById("search-form-wrapper");
	myElement.classList.toggle("hidden");
	searchBar.classList.toggle("hidden");
};
