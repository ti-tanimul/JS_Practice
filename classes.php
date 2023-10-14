<!DOCTYPE html>
<html>
<body>
<h1>JavaScript Classes</h1>
<p>Creating two car objects from a car class:</p>

<p id="demo"></p>

<script>
class Car{
    constructor(name, model){
        this.name = name;
        this.model = model;
    }
    age() {
    const date = new Date();
    return this.model;
  }
}

const myCar = new Car("Ford", 123);
document.getElementById("demo").innerHTML = /*"My car is "*/ + myCar.age() + " years old.";
</script>

</body>
</html>