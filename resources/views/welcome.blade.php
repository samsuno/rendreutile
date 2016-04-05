<!DOCTYPE html>
<html>
    <head>
        <title>Rendre Utile</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ URL::asset('cmap/style.css') }}" type="text/css" media="screen" />
        <script src="{{ URL::asset('cmap/france-map.js') }}"></script>
        <script src="{{ URL::asset('cmap/jquery-1.11.1.min.js') }}"></script>
        <script src="{{ URL::asset('cmap/france-map.js') }}"></script>
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
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
        <div class="container">
            <div class="content">
                <!--@include('flash::message')-->
                <h2>Sélectionner une région</h2>

                <div id="legende"></div><map  name="map"><div id="areas"></div>
                </map><img id="canvasMap" id="image" src="{{ URL::asset('cmap/trans.gif') }}" usemap="#map"/>
                <canvas id="canvas">Mettez à jour votre navigateur Internet !</canvas>
            </div>
        </div>
    </body>
</html>
