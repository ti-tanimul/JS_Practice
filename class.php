<html>
<body>
<h1>JavaScript Classes</h1>
<p>Creating two car objects from a car class:</p>

<p id="demo"></p>

<script>
class Car {
  constructor(brand) {
    this.carName = brand;
  }
  present() {
    return 'I have a ' + this.carName;
  }
}

class Model extends Car {
  constructor(brand, mod) {
    super(brand);
    this.model = mod;
  }
  show() {
    return this.present() + ', it is a ' + this.model;
  }
}
const myCar = new Model("Ford", "IHG65");
const myCar1 = new Model("Toyota", "IHsr34G65");
document.getElementById("demo").innerHTML = myCar1.show();
</script>
</script>

</body>
</html>