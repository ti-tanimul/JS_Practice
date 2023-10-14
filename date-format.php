<html>
<body>

<h1>JavaScript Dates</h1>
<h2>Using new Date()</h2>
<p>Create a new date object with the current date and time:</p>

<p id="demo"></p>

<script>
// const d = new Date("2023-09-30  ");
// document.getElementById("demo").innerHTML = d;
//---------//
// const months = ["January","February","March","April","May","June","July","August",
// "September","October","November","December"];
// const d = new Date();
// let month = months[d.getMonth()];
// document.getElementById("demo").innerHTML = month;
//----set Date Method-----//
// let text;
const today = new Date();
const someday = new Date();
someday.setFullYear(2100, 0, 14);

if (someday < today) {
  text = "Today is before January 14, 2100.";
} else {
  text = "Today is after January 14, 2100.";
}

document.getElementById("demo").innerHTML = text;
</script>

</body>
</html>