<html>
 <head>
 <title>Ładowanie tekstu z jQuery</title>
 <style type="text/css">
 #wygenerowana_zawartosc{
 border: 1px solid black;
 width: 300px;
 background-color: #dddddd;
 }
  </style>
 <script type="text/javascript"
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" >
 </script>
 <script type="text/javascript">
 $(document).ready(function() {
	$("#wygenerowana_zawartosc").load("zwierzeta.xml");
	$("#wygenerowana_zawartosc").wrap("pre");
 });
 </script>
 </head>
 <body>
 <p><strong>Ajax pobrał tekst:</strong></p>
 <div id="wygenerowana_zawartosc">&nbsp;</div>
 </body>
</html>