<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>.meta</title>

	<link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">

</head>
<body>

<div style="max-width: 1500px; margin: 5rem auto">
	<div class="row">

		<div class="col-xl">
			<div class="container">
				<h1>Folders</h1>
				<div class="folders">

				</div>
			</div>
		</div>
		<div class="col-xl">
			<div class="container">
				<h1>Actions</h1>

			</div>
		</div>

	</div>
</div>


<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




<script>


const urlParams = new URLSearchParams(window.location.search);

const files = JSON.parse(urlParams.get('files'));

console.log(files);

</script>


</body>
</html>
