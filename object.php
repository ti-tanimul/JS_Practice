<html>
<body>
<h2>My First Web Pageff</h2>
<p id="demo"></p>

<script>
// const person = {
//     name: "Tanimul",
//     university: "City University",
//     age: 24,
//     language: "Bangla",
//     get lang(){
//         return this.language;
//     }
// };
// document.getElementById("demo").innerHTML= person.lang;

const person = {
    name: "Tanimul",
    university: "City University",
    age: 24,
    language: "NO",
    set lang(value){
        this.language = value;
    }
};
person.lang = "English";
document.getElementById("demo").innerHTML= person.language;

</script>

</body>
</html>