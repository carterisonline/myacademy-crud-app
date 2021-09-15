<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@600&display=swap" rel="stylesheet">

<head>
	<meta charset="UTF-8">
	<title>MyAcademy Gateway</title>
</head>

<style type="text/css">
	.center {
		margin: auto;
		text-align: center;
		width: 50%;
		padding: 10px;
	}

	.callout {
		padding:0.35rem;
		padding-left: 0.5rem;
		margin-top: 0px;
		margin-bottom:10px;
		border:1px solid #10101033;
		border-left-width:.25rem;
		border-radius:.25rem;
		border-left-color:#5bc0de;
	}
</style>

<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

<script type="text/javascript">
	function handleEnterKey() {
		let studentInput = document.getElementById("student_name");
		studentInput.addEventListener("keydown", event => {
			if (event.keyCode === 13) {
				event.preventDefault();
				truncateAndSubmit();
			}
		})
	}


	function truncateAndSubmit() {
		const ident = document.getElementById('student_name').value.trim().split(/\.?\s+/).map(word => word.toLowerCase()).join('-');
		if (document.getElementById('student_name').value.trim().length !== 0) {
			setTimeout(() => document.location.href = './student/' + ident, 500);
		} else {
			$('#alert_placeholder').html('<div class="alert alert-warning" role="alert"> Please provide a valid student name.</div>');
		}
	}
</script>

<body>
	<div class="jumbotron">
		<h1 class="center"> MyAcademy Student Admin </h1>
	</div>

	<div class="container shadow-lg p-5 mb-5 bg-white rounded" style="margin: auto; width: 32%">
		<h2> Find a student... </h2>
		<form id="student_cargo" onsubmit="">
			<div class="form-group">
				<label for="student"> Student Name </label>
				<input type="text" class="form-control" id="student_name" placeholder="eg. Bob Ross" onkeypress="handleEnterKey()">
			</div>
			<div id="alert_placeholder"></div>
			<button type="button" onclick="truncateAndSubmit()" class="btn btn-primary">Submit</button>
		</form>
	</div>

	<div class="alert alert-warning shadow p-5" style="margin: auto; width: 32%">
		<h3 style="font-family: 'Alegreya', serif;"> I'm looking to... </h3>
		<br/>
		<div class="callout">
			<a href="./submit/grade" style="text-decoration: underline;"> Submit a grade </a>
		</div>
		<div class="callout">
			<a href="./submit/referral" style="text-decoration: underline;"> Submit a referral </a>
		</div>
	</div>
</body>

</html>