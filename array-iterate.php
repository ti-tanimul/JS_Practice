<html>
<body>
<h1>JavaScript Arrays</h1>
<h2>The forEach() Method</h2>
<p>Call a function once for each array element:</p>
<p id="demo"></p>
<script>
const numbers = [45, 4, 9, 16, 25];

let txt = "";
// numbers.forEach(myFunction);
 const num = numbers.map(myFunction);
document.getElementById("demo").innerHTML = num;
function myFunction(value, index, array) {
    return value * 2
  txt += value + "<br>"; 
//   txt += index + "<br>"; 
//   txt += array + "<br>";
}
//----------//
function myFunction1(value, index, array){
    return value >20
}
const num1 = numbers.filter(myFunction1); //filter kore amader ja value dorkar seta print korte parbo
document.getElementById("demo").innerHTML = num1;
//----------//
function myFunction2(total, value, index, array){
return total + value
}
const num2 = numbers.reduce(myFunction2, 1)
document.getElementById("demo").innerHTML = num2;
</script>


</body>
</html>