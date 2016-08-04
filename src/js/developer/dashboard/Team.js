/* global $ */

(function() {
	function confirmMessage() {
		const confirmButton = $('.confirm-button');
		const modalBox = $('#new-team-member');
		confirmButton.click(e => {
			e.preventDefault();
			modalBox.addClass('active');
		});
	}

	$(document).ready(() => {
		confirmMessage();
	});
})();
