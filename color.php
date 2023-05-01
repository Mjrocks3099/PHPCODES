<!DOCTYPE html>
<html>
<head>
	<title>Color Dropdown</title>
</head>
<body>
	<form method="POST">
		<label for="colors">Select a color:</label>
		<select id="colors" name="selected_color">
			<option value="red">Red</option>
			<option value="green">Green</option>
			<option value="blue">Blue</option>
		</select>
		<button type="submit" name="submit">Submit</button>
	</form>

	<?php 
		if(isset($_POST['submit'])){
			$selected_color = $_POST['selected_color'];
			echo "You selected the color: " . $selected_color;
		}
	?>
</body>
</html>
