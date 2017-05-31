<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Postal code</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
	  	$(function() {
            $("#postcode").autocomplete({
            	minLength: 3,
                source: function(request, response) {
                    $.ajax({
                        url: "<?php echo base_url('welcome/read_postcode') ?>",
                        dataType: "json",
                        data: {q: request.term},
                        success: function(data) {
                            response(data);
                        }
                    });
                }
            });
        });
  </script>
</head>
<body>
 
<div class="ui-widget">
	<form method="POST" action="<?php echo base_url('welcome/show_city'); ?>">
	    <label for="postcode">Postcode: </label>
	    <input type="number" id="postcode" name="postcode"> <br><br>
	    <input type="submit" value="Submit">
	</form>
</div>


<?php
	if(!empty($cities)) {
?>
		<h3>Corresponding cities are: </h3>
		<div>
			<?php
				foreach($cities as $value) {
					echo $value->city.'<br>';
				}
			?>
		</div>
<?php
	}
?>
</body>
</html>