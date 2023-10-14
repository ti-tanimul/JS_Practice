<html>
<body>
<h2>My First Web Page</h2>
<p id="demo"></p>

<script>
const person = {
    name : "Tanimul",
    university : "City University",
    age : 24
}
let txt='';
for(let x in person){
    txt += person[x] + " " ;
}
document.getElementById("demo").innerHTML=txt;
</script>

</body>
</html>