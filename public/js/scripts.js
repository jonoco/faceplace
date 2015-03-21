/**
 * scripts.js
 */
var main = function () {
	$('.status-btn').addClass('disabled');

	$('.status-box').keyup(function () {
		var postLength = $(this).val().length;
		if (postLength > 0) {
			$('.status-btn').removeClass('disabled');
		} else {
			$('.status-btn').addClass('disabled');
		}
	});

	$("#reg-username").keyup(function (e) {
		var username = $(this).val();
		if (username.length > 2) {
			$.ajax({
				type:'POST',
				url: '/check_username.php',
				data: "username=" + username,
				cache: false,
			})
			.done(function (count) {
				if (count > 0) {
					console.log('match found');
					$('#user-result').text('username already taken');
					$('#user-result').css('color', '#ee2222');
					$("#reg-username").parent().removeClass('has-success');
					$("#reg-username").parent().addClass('has-error');
				} else {
					console.log('no match');
					$('#user-result').text('username available');
					$('#user-result').css('color', '#00CC33');
					$("#reg-username").parent().removeClass('has-error');
					$("#reg-username").parent().addClass('has-success');
				}
			});	
		} else {
			$('#user-result').text('');
			$("#reg-username").parent().removeClass('has-success');
		}
	});	
};

$(document).ready(main);