<html>
<body>
<h2>JavaScript Iterables</h2>
<p>Iterate over a String:</p>

<p id="demo"></p>

<script>
// Create a String
const name = "W3Schools";

// List all Elements
let text = ""
for (const x of name) {
  text = text + x + "<br>";
}

document.getElementById("demo").innerHTML = text;
</script>
</body>
</html>