/* eslint-disable */

import General from './_generalScripts';

const App = {

	/**
	 * App.init
	 */
	init() {
		// General scripts
		function initGeneral() {
			return new General();
		}
		initGeneral();
	}

};

document.addEventListener('DOMContentLoaded', () => {

	const iconOpenPopup = document.querySelector('.content-popup-video-home .icon-player');
	iconOpenPopup?.addEventListener('click',function(){
		document.querySelector('.content-popup-video').classList.add('active');
	});

	const openPopup = document.querySelector('.image-popup-video');
	openPopup?.addEventListener('click',function(){
		document.querySelector('.content-popup-video').classList.add('active');
	});

	const closePopupBody = document.querySelector('.content-popup-video');
	closePopupBody?.addEventListener('click',function(){
		document.querySelector('.content-popup-video').classList.remove('active');
		$('iframe').attr('src', $('iframe').attr('src'));
	});

	const closePopup = document.querySelector('.close-modal');
	closePopup?.addEventListener('click',function(){
		document.querySelector('.content-popup-video').classList.remove('active');
		$('iframe').attr('src', $('iframe').attr('src'));
	});


	let seminarForm = document.getElementById("seminarsForm");
	seminarForm?.addEventListener("submit", (e) => {
		e.preventDefault();

		let fullName = document.getElementById("fullName");
		let email = document.getElementById("email");
		let phone = document.getElementById("phone");

		if (fullName.value == "" || email.value == "" || phone.value == "" ) {
			document.querySelector('.message-required').classList.add('active');
		} else {
			document.querySelector('#modal-form .btn-close').click();
			$('#modal-success').modal('show');
		}
	});


	let contactForm = document.getElementById("contactForm");
	contactForm?.addEventListener("submit", (e) => {
		e.preventDefault();

		let fullName = document.getElementById("name_contact");
		let email = document.getElementById("email_contact");
		let phone = document.getElementById("phone_contact");

		if (fullName.value == "" || email.value == "" || phone.value == "" ) {
			document.querySelector('.message-required.contact').classList.add('active');
		} else {
			// perform operation with form input
			document.querySelector('.message-required.contact').classList.remove('active');
			document.querySelector('.content-alert-validate').classList.add('active');

			setTimeout(() => {
				document.querySelector('.content-alert-validate').classList.remove('active');
			}, 5000);
		}
	});


	App.init();
});
