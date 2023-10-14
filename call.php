<html>
<body>

<h2>JavaScript Functions</h2>

<p>This example creates an object with 3 properties (firstName, lastName, fullName).</p>
<p>The fullName property is a method:</p> 

<p id="demo"></p>

<script>
const myObject = {
  fullName: function(university, town) {
    return this.firstName + " " + this.lastName + university + town;
  }
};
const person1 = {
    firstName: "Tanimul",
    lastName: "Islam"
};
const person2 = {
    firstName: "Shakil",
    lastName: "Mridha"
};
const person3 = {
    firstName: "Tanim",
    lastName: "Ahmed"
};
document.getElementById("demo").innerHTML = myObject.fullName.call(person3, " City University", " Patuakhali");
</script>

</body>
</html>