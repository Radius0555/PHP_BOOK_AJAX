<html>
 <head>
 <title>Przykład z rysowaniem po siatce</title>
 <style type="text/css">
 #siatka, #paleta{
 padding: 0px;
 margin: 0px;
 border-collapse: collapse;
 }
 #paleta td, #siatka td{
 width: 20px;
 height: 20px;
 }
 #siatka td{
 border: 1px solid #cccccc;
 }
 </style>
 <script type="text/javascript"
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" >
 </script>
 <script type="text/javascript">
  $(document).ready(function() {
//siatka 10 na 10
 for(i=0; i<10; ++i){
 $("#siatka").append(
 "<tr>" +
 "<td>&nbsp;</td>" +
 "<td>&nbsp;</td>" +
 "<td>&nbsp;</td>" +
 "<td>&nbsp;</td>" +
 "<td>&nbsp;</td>" +
 "<td>&nbsp;</td>" +
 "<td>&nbsp;</td>" +
 "<td>&nbsp;</td>" +
 "<td>&nbsp;</td>" +
 "<td>&nbsp;</td>" +
 "</tr>"
 );
 }
$.getJSON("load_drawing.php", function(dane){
 $("#siatka td").each(function(indeks){
 $(this).css("background-color", dane[indeks]);
 });
 });
 var aktywny_kolor = "rgb(0, 0, 0)";
 $("#paleta td").each(
 function( index ){
//przypisanie zdarzenia onClick
 $( this ).bind (
 "click",
 function(){
 aktywny_kolor = $(this).css("background-color");
 $("#debug_kolor_palety").html("aktywny kolor palety to: " +
 "<span style='width: 20px; height: 20px; background-color:"
 + aktywny_kolor
 + ";'>" + aktywny_kolor + "</span>");
 }
 );
 });
 $("#siatka td").each(
 function( index ){
//przypisanie zdarzenia onClick
 $( this ).bind (
 "click",
 function(){
 $(this).css("background-color", aktywny_kolor);
 }
 );
 });
$("#czysc").click(function(){
 $("#siatka td").css("background-color", "transparent");
 });
 $("#zapisz").click(function(){
 var koloryJson = new Object();
  var i=0;
 $("#siatka td").each(function() {
 koloryJson[i] = $(this).css("background-color");
 ++i;
 });
 $.ajax(
 {
 type: "post",
 url: "save_drawing.php",
 dataType: "text",
 data: koloryJson,
 success: function(data) {
 $("#debug_wiadomosc").html("rysunek zapisany");
 },
 failure: function(){
 $("#debug_wiadomosc").html(
 "Podczas próby zapisania rysunku nastąpił błąd");
 }
 });
 });
 });
 </script>
 </head>
 <body>
 <p><strong>Paleta kolorów:</strong></p>
 <table id="paleta">
 <tr>
 <td style="background-color: rgb(0, 0, 0);">&nbsp;</td>
 <td style="background-color: rgb(119, 119, 119);">&nbsp;</td>
 <td style="background-color: rgb(255, 255, 255);">&nbsp;</td>
 <td style="background-color: rgb(255, 0, 0);">&nbsp;</td>
 <td style="background-color: rgb(0, 255, 0);">&nbsp;</td>
 <td style="background-color: rgb(0, 0, 255);">&nbsp;</td>
 <td style="background-color: rgb(255, 255, 0);">&nbsp;</td>
 </tr>
 </table>
 <button id="zapisz">Zapisz</button>
 <p><strong>Rysuj!</strong></p>
 <table id="siatka" cellspacing="0">
 </table>
 <p><em>Konsola debugowania:&nbsp;</em></p>
 <div id="debug_wiadomosc"></div>
 <div id="debug_kolor_palety"></div>
 </body>
</html>