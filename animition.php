<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
#container {
  width: 400px;
  height: 400px;
  position: relative;
  background: yellow;
}
#animate {
  width: 50px;
  height: 50px;
  position: absolute;
  background-color: red;
}
</style>
</head>
<body>
    <button onclick = "myMove()" >Click</button>
    <div id="container" >
        <div id="animate"></div>
    </div>
    <script src="for-in.js"></script>
</body>
</html>