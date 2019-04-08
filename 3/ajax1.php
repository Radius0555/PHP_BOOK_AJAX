<html>
<head>
<script type="text/javascript"
src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js">
</script>
<script>
$(document).ready(function()
{
	$.getJSON("json_example.php", function(dane)
	{$.each(dane, function(kontynent, zwierzeta)
	{
		let wiadomosc = "<strong>" + kontynent + "</strong></br>";
		for(j=0;j<zwierzeta.length;j++)
		{
			wiadomosc += zwierzeta[j] + ",";
		}
		wiadomosc = wiadomosc.trim();
		wiadomosc = wiadomosc.substring(0, wiadomosc.length -1);
		$("#wygenerowana_zawartosc").append("<p>" + wiadomosc + "</p>");
	});
	});
});
</script>
</head>
<body>
<p><strong>JSON sparsowany przez Ajax:</strong></p>
<div id="wygenerowana_zawartosc">&nbsp;</div>
</body>
</html>