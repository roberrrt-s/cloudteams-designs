/* global $ */

(function() {
	function confirmMessage() {
		const subpageSection = $('#subpage-1');
		const confirmButton = $('.confirm-button');
		const contentSection = $('.subpage-wrapper > fieldset');
		const confirmSection = $('.confirm-wrapper');
		const sendingSection = $('.sending-wrapper');
		// const confirmSection = $('.confirm-section');

		confirmButton.click(e => {
			e.preventDefault();

			const height = subpageSection.css('height');
			subpageSection.css('height', `${height}`);

			contentSection.fadeOut(() => {
				sendingSection.fadeIn();
			});

			setTimeout(() => {
				sendingSection.fadeOut(() => {
					confirmSection.fadeIn();
				});
			}, 2000);

			setTimeout(() => {
				confirmSection.fadeOut(() => {
					contentSection.fadeIn();
				});
			}, 4000);
		});
	}

	function confirmButtons() {
		const allButtons = $('a.btn.invite-button');

		allButtons.click(e => {
			e.preventDefault();

			const width = $(e.target).css('width');
			const height = $(e.target).css('height');
			$(e.target).css({
				'width': width,
				'height': height
			});

			$(e.target).html('<i style="display: none;" class="icon icon-check">');

			$(e.target).off();
			$(e.target).find('i').fadeIn();

		});
	}

	$(document).ready(() => {
		confirmMessage();
		confirmButtons();
	});
})();
