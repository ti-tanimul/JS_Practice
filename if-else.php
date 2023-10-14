<html>
<body>

<h2>JavaScript if</h2>

<p>Display "Good day!" if the hour is less than 18:00:</p>

<p id="demo"></p>

<script>
let age = 43;
if(age <18){
    document.getElementById("demo").innerHTML = "You Are Small";
}else if(age == 18){
    document.getElementById("demo").innerHTML = "You Are New Adult";
}else if(age < 30){
    document.getElementById("demo").innerHTML = "You are Adult";
}else{
    document.getElementById("demo").innerHTML = "You are Old";
}
</script>

</body>
</html>