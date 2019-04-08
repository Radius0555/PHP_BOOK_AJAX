<html>
<head></head>
<body>
<p>Oryginalna zawartość</p>
<script type="text/javascript">
var xhr = new XMLHttpRequest();
//ustawienie właściwości żądania
xhr.open("GET", window.location.pathname, true);
//zdefiniowanie funkcji zwrotnej
xhr.onreadystatechange=function(){
if (xhr.readyState == 4){ //stan = 4 oznacza zakończone żądanie
var wiadomosc = "";
if (xhr.status==200){ //sukces
wiadomosc = "Ajax załadował zawartość";
}
else{ //błąd
wiadomosc = "Podczas wysyłania żądania wystąpił błąd";
}
document.getElementsByTagName("p")[0].innerHTML = wiadomosc;
}
}
//wysłanie żądania
xhr.send(null);
</script>
</body>
</html>