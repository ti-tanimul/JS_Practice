<!DOCTYPE html>
<html>
<body>
<h2>JavaScript Do While Loop</h2>
<p id="demo"></p>
<script>
    let i = -2;
    let text = "";
    do{
        text += i + "<br>";
        i++;
    }while(i < 10);

// while (i < 10) {
//   text += i + "<br>";
//   i++;
// }

document.getElementById("demo").innerHTML = text;
</script>

</body>
</html>