<html>
<body>

<h2>JavaScript Object Constructors</h2>

<p id="demo"></p>

<script>
// Constructor function for Person objects
function Person(first, last, age) {
  this.firstName = first;
  this.lastName = last;
  this.age = age;
  this.fullName = function(){
    return this.firstName + " " + this.lastName;
  }
}

// Create a Person object
const myFather1 = new Person("John", "Doe", 50);
const myFather2 = new Person("Johndfg", "Doewd", 550);
const myFather3 = new Person("Josdfshn", "dfgDoe", 550);

// Display age
// document.getElementById("demo").innerHTML = Person.fullName;
document.getElementById("demo").innerHTML = myFather2.fullName;
 
</script>

</body>
</html>