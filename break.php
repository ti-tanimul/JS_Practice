<html>
<body>

<h2>JavaScript Loops</h2>

<p>A loop with a <b>break</b> statement.</p>

<p id="demo"></p>

<script>
let text = "";
for(i = 0; i<=100; i+=5){
    if(i === 25) {continue};
    text += i + "<br>";
}
document.getElementById("demo").innerHTML = text;
</script>

</body>
</html>