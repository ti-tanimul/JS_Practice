<!DOCTYPE html>
<html>
<body>

<h1>The JavaScript <i>this</i> Keyword</h1>
<p id="demo"></p>
<script>
const person = {
  firstName: "John",
  lastName: "Doe",
  id: 5566,
fullName : function(){
    return this.firstName +" " + this.lastName + "<br>" + this.id;
}
};
document.getElementById("demo").innerHTML = person.fullName();
</script>
</body>
</html>