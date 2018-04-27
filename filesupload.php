
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>Upload files</title>


	<!-- Include our stylesheet -->
	<link href="assets/css/styles.css" rel="stylesheet"/>

</head>
<body>
	<div class="filemanager">
		<form method="POST" action="dbconnect.php" name="submit" enctype="multipart/form-data">
	 Enter your name and click the button that says "Choose File" to choose a file from your phone/computer to upload</td>
<input type="text" name="username" placeholder="yourname"/>
                        <input type="file" name="imagepath[]" value="Choose File" />
                        <input type="submit" name="submit" value="Submit" />

	</div>
</body>
</html>
