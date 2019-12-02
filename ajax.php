<!DOCTYPE html>
<html lang="en">
   <!-- Head folded -->
	<head>
	


		<script type="text/javascript">
			$document.ready(function(){
				$.ajax({
					url:"date.php",
					data:"",
					dataType:"text",
					success:function(a){
						$('#show-a').text(a);
					}
				})
			})
		</script>

    </head>
	<body>
		Date:
		<div id="show-a"></div>

	</body>
</html>
