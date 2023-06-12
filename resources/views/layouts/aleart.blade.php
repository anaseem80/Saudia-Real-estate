<!DOCTYPE html>
<html>
<head>
	<title>Alert Dialog</title>
	<style>
		.modal {
			display: block;
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(0, 0, 0, 0.5);
			z-index: 9999;
			overflow: auto;
		}

		.modal-dialog {
			background-color: #fff;
			border-radius: 10px;
			width: 400px;
			margin: 10% auto;
			padding: 20px;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
		}

		.modal-header {
			display: flex;
			justify-content: space-between;
			align-items: center;
			margin-bottom: 20px;
		}

		.modal-header h2 {
			margin: 0;
		}

		.modal-close {
			cursor: pointer;
			color: #aaa;
			font-size: 28px;
		}

		.modal-close:hover,
		.modal-close:focus {
			color: black;
			text-decoration: none;
			cursor: pointer;
		}

		.modal-body p {
			margin: 0 0 20px;
			font-size: 18px;
			line-height: 1.5;
		}

		.modal-button {
			display: block;
			width: 100%;
			padding: 10px;
			background-color: #4CAF50;
			color: #fff;
			font-size: 18px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}

		.modal-button:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<div class="modal">
		<div class="modal-dialog">
			<div class="modal-header">
				<h2>Alert</h2>
				<span class="modal-close">&times;</span>
			</div>
			<div class="modal-body">
				<p>You are not registered. Please register to access this feature.</p>
			</div>
			<button class="modal-button">Register</button>
		</div>
	</div>
	<script>
		var modal = document.querySelector('.modal');
		var modalClose = document.querySelector('.modal-close');
		var modalButton = document.querySelector('.modal-button');

		modalClose.addEventListener('click', function() {
			modal.style.display = 'none';
		});

		modalButton.addEventListener('click', function() {
			// Redirect the user to the registration page
			window.location.href = '/register';
		});
	</script>
</body>
</html>