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
 <p><strong>Ajax pobrał tekst:</strong></p>
 <div id="wygenerowana_zawartosc">&nbsp;</div>
 <script type="text/javascript">
 var xhr = new XMLHttpRequest();
 //ustawienie właściwości żądania
 xhr.open("GET", "zwierzeta.xml", true);
 //zdefiniowanie funkcji zwrotnej
 xhr.onreadystatechange=function(){
 if (xhr.readyState == 4){ //stan = 4 oznacza zakończone żądanie
 var wiadomosc = "";
 if (xhr.status==200){ //sukces
 //pobranie rezultatu jako zwykłego tekstu
 wiadomosc = "<pre>" + xhr.responseText + "</pre>";
 }
 else{ //błąd
 wiadomosc = "Podczas wysyłania żądania wystąpił błąd";
 }
  document.getElementById("wygenerowana_zawartosc").innerHTML = wiadomosc;
 }
 }
 //wysłanie żądania
 xhr.send(null);
 </script>
 </body>
</html>