<!DOCTYPE html> 
<html> 
  
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />
<title>Canvas Map</title>

<style>
.main{
width: 800px;
height: 350px;
padding: 3em;
margin-left:25%;
background-color: #F1F1F1;

}
.texte{
width: 800px;
height: 350px;
padding: 3em;
margin-left:25%;
background-color: #FFFFFF;


}
</style>
</head> 
 
 <body> 
<div class="main">
<h2>Rendre Utile Map</h2>

<!--<script src="{{ URL::asset('cmap/france-map.js') }}"></script>-->

<link rel="stylesheet" href="{{ URL::asset('cmap/style.css') }}" type="text/css" media="screen" />
<script src="{{ URL::asset('cmap/jquery-1.11.1.min.js') }}"></script>
<script src="{{ URL::asset('cmap/france-map.js') }}"></script>
<div id="legende"></div><map  name="map"><div id="areas"></div> </map><img id="canvasMap" id="image" src="{{ URL::asset('cmap/trans.gif') }}" usemap="#map"/><canvas id="canvas">Mettez à jour votre navigateur Internet !</canvas>

</div>

 
  </body> 
</html>