<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Postit</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<script>
function add()
{
    var div_element = document.createElement("div");
    div_element.innerHTML = '<formmethod="post"action="CGIのURI"><textarea rows="20" cols="20"></textarea></form>';
    var parent_object = document.getElementById("piyo");
    parent_object.appendChild(div_element);
}
</script>


        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>


<div>
<button onclick="add();">このボタンを押して動的にUIを追加！</button>
</div>
 
<div id="piyo">
</div>

    </body>
</html>
