<html>
<head>
<title>Przykład XHR</title>
<script type="text/javascript"
src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" >
</script>
<script>
$(document).ready(function()
{
	$.ajax(
	{
		type:"get",
		url: windows.location.pathname,
		dataType: "text",
		success: function(data)
		{
			$("p").html("Ajax załadował zawartość");
		},
		failure: function()
		{
			$("p").html("Podczas wysyłania żadania wystąpił błąd");
		}
	});
});
</script>
</head>
<body>
<p><strong>Ajax pobrał tekst zawierający HTML:</strong></p>
</body>
</html>