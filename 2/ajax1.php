<html>
<head></head>
<body>
<p>Oryginalna zawartość</p>
<script type="text/javascript">
var xhr = new XMLHttpRequest();
xhr.open("GET","zwierzeta.xml");
xhr.onreadystatechange = function()
{
	if (xhr.readyState == 4)
	{ 	
		if (xhr.status==200)
		{
			alert("sukces");
		}
		else
		{
			alert("błąd");
		}
	}
}
xhr.send("nasza zawartość");
</script>
</body>
</html>