<html>
 <head>
 <title>Ładowanie XML-a z jQuery</title>
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
 $.get("zwierzeta.xml" , function(dane){
 var wiadomosc = "";
 var imiona = dane.getElementsByTagName("imie");
 for(i=0; i < imiona.length; ++i){
 wiadomosc += imiona[i].firstChild.nodeValue + "<br/>\n";
 }
 $("#wygenerowana_zawartosc").html(wiadomosc);
 }, "xml");
 });
 </script>
 </head>
 <body>
 <p><strong>Ajax pobrał text:</strong></p>
 <div id="wygenerowana_zawartosc">&nbsp;</div>
 </body>
</html>