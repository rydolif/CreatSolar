'use strict';

document.addEventListener("DOMContentLoaded", function() {

	//----------------------SLIDER-hero----------------------
		var mySwiper = new Swiper('.business__slider', {
			slidesPerView: 1,
			spaceBetween: 30,
			navigation: {
				nextEl: '.business__slider_next',
				prevEl: '.business__slider_prev',
			},
			// loop: true,
			// effect: 'fade',
			// autoplay: {
			// 	delay: 5000,
			// },
			// pagination: {
			// 	el: '.hero__pagination',
			// 	clickable: 'true',
			// 	},
			// breakpoints: {
			// 	320: {
			// 		slidesPerView: 2,
			// 		spaceBetween: 20
			// 	},
			// }
		});

	//----------------------SCROLL-----------------------
		const scrollTo = (scrollTo) => {
			let list = document.querySelector(scrollTo);
			list = '.' + list.classList[0]  + ' a[href^="#"';

			// console.log(list);

			document.querySelectorAll(list).forEach(link => {
				link.addEventListener('click', function(e) {
						e.preventDefault();
						const scrollMenu = document.querySelector(scrollTo);
	
						let href = this.getAttribute('href').substring(1);
	
						const scrollTarget = document.getElementById(href);
	
						// const topOffset = scrollMenu.offsetHeight;
						const topOffset = 70;
						const elementPosition = scrollTarget.getBoundingClientRect().top;
						const offsetPosition = elementPosition - topOffset;
	
						window.scrollBy({
								top: offsetPosition,
								behavior: 'smooth'
						});
	
						
						let button = document.querySelector('.hamburger'),
								nav = document.querySelector('.header__nav'),
								header = document.querySelector('.header');
	
						button.classList.remove('hamburger--active');
						nav.classList.remove('header__nav--active');
						header.classList.remove('header--menu');
				});
			});
		};
		scrollTo('.hero__down');
	
	//----------------------FIXED-HEADER-----------------------
		const headerFixed = (headerFixed, headerActive) => {
			const header =  document.querySelector(headerFixed),
						active = headerActive.replace(/\./, '');
	
			window.addEventListener('scroll', function() {
				const top = pageYOffset;
				
				if (top >= 90) {
					header.classList.add(active);
				} else {
					header.classList.remove(active);
				}
	
			});
	
		};
		headerFixed('.header', '.header--active');
	
	//----------------------HAMBURGER-----------------------
		const hamburger = (hamburgerButton, hamburgerNav, hamburgerHeader) => {
			const button = document.querySelector(hamburgerButton),
						nav = document.querySelector(hamburgerNav),
						header = document.querySelector(hamburgerHeader);

			const body = document.querySelector('body');
	
			button.addEventListener('click', (e) => {
				button.classList.toggle('hamburger--active');
				nav.classList.toggle('header__nav--active');
				header.classList.toggle('header--menu');
				body.classList.toggle('no-scroll');
			});
	
		};
		hamburger('.hamburger', '.header__nav', '.header');
		
	//----------------------MODAL-----------------------
		const modals = (modalSelector) => {
			const	modal = document.querySelectorAll(modalSelector);

			if (modal) {
				let i = 1;

				modal.forEach(item => {
					const wrap = item.id;
					const link = document.querySelector('.' + wrap);
					let close = item.querySelector('.close');

					if (link) {
						link.addEventListener('click', (e) => {
							if (e.target) {
								e.preventDefault();
							}
							item.style.display = 'flex';
							document.body.classList.add('modal--open')
						});
					}

					close.addEventListener('click', () => {
						item.style.display = 'none';
						document.body.classList.remove('modal--open');
					});

					item.addEventListener('click', (e) => {
						if (e.target === item) {
							item.style.display = 'none';
							document.body.classList.remove('modal--open');
						}
					});
				});
			}

		};
		modals('.modal');

	});
	