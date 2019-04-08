<html>
<head>
<title>Przykład Myśliwy</title>
</head>
<script type="text/javascript"
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" >
</script>
<script>
$(document).ready(function()
{
	$("#mysliwy").click(function()
	{
		$("#wynik").load("predator_prey.php?typ=mysliwy");	
	});
	$("#ofiara").click(function()
	{
		$("#wynik").load("predator_prey.php?typ=ofiara");
	});
});
</script>
<body>
<button id="mysliwy">Myśliwy</button>
<button id="ofiara">Ofiara</button>
<p><strong>Odpowiedź z PHP:</strong></p>
<div id="wynik">&nbsp;</div>
</body>
</html>