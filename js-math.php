<html>
<body>

<h2>JavaScript Math.PI</h2>

<p>Math.PI returns the ratio of a circle's circumference to its diameter:</p>

<p id="demo"></p>

<script>
//     const a = Math.PI;
// document.getElementById("demo").innerHTML = a;
function Random (min, max){
    return Math.floor(Math.random()* (min, max + 1)) + min;
}
document.getElementById("demo").innerHTML = Random(1, 6);
</script>

</body>
</html>