<html>
<body>

<h2>JavaScript For Loop</h2>

<p id="demo"></p>

<script>
// let text = "";
// for (let i = 0; i < 5; i++) {
//   text += i + "<br>";
// }
// document.getElementById("demo").innerHTML = text;

// const person = {fname:"John", lname:"Doe", age:25}; 
// for (let x in person) {
//     document.getElementById("demo").innerHTML = person.fname; 
// }

let vari = [1,3,4,7,9, 28, 45];
for(let x of vari){
    
    document.getElementById("demo").innerHTML = x;
}

</script>

</body>
</html>