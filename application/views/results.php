<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Postal code</title>
</head>
<body>


<?php
	if(!empty($cities)) {
?>
		<h3>Cities corresponding to <?php echo $cities[0]->postcode ?> are: </h3>
		<div>
			<?php
				foreach($cities as $value) {
					echo $value->city.'<br>';
				}
			?>
		</div>
<?php
	} else {
		echo '<h3>Nothing to display.</h3>';
	}
?>
<br>
<a href="<?php echo base_url('welcome/') ?>">back</a>
</body>
</html>