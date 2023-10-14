<html>
<body>

<h1>JavaScript String Methods</h1>
<p>Display the first array element, after a string split:</p>

<p id="demo"></p>

<script>
    const fruits = ["Banana", "Orange", "Apple", "Mango"];
    fruits.splice(2, 1, "Lemon");
    document.getElementById("demo").innerHTML = fruits;
</script>

</body>
</html>