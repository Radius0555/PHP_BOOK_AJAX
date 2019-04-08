<html>
 <head>
 <title>Przykład XHR</title>
 <style type="text/css">
 #wygenerowana_zawartosc{
 border: 1px solid black;
 width: 300px;
 background-color: #dddddd;
 }
 </style>
 </head>
 <body>
 <p><strong>Ajax pobrał tekst zawierający HTML:</strong></p>
 <div id="wygenerowana_zawartosc">&nbsp;</div>
 <script type="text/javascript">
let xhr = new XMLHttpRequest();
xhr.open("GET", "sample_table.html", true);
xhr.onreadystatechange=function()
{
	if (xhr.readyState == 4)
	{
		var wiadomosc = "";
		if (xhr.status==200)
		{
			wiadomosc = xhr.responseText;
		}
		else
		{
			wiadomosc = "Podczas wysyłania żądania wystąpił błąd";
		}
		document.getElementById("wygenerowana_zawartosc").innerHTML = wiadomosc;
	}
}
xhr.send(null);
 </script>
 </body>
</html>