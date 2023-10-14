<html>
<body>

<h1>JavaScript Comparison</h1>
<h2>The () ? : Ternary Operator</h2>

<p id="demo"></p>

<script>
    let age = "57";
    // document.getElementById("demo").innerHTML = ((age >= 18) ? "You are Adult" : "You Not Adult");
  if (isNaN(age)) {
    voteable = "Input is not a number";
  } else {
    voteable = (age >= 18) ? (age < 30) ? "Too adult" : "Old" : "You are young";
  }
  document.getElementById("demo").innerHTML = voteable;

</script>

</body>
</html>
