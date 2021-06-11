function validateForm() {

    var carnet = document.forms["myForm"]["carnet"].value;
    var validation = /\b[aA]/;
    var validationCero = /[0]/g;
    var validationLast = /[1,3,9]\b/g;

    var subCarnet =carnet.substring(0, 3);
    var validationLast5 = /[5]\b/g;

    var resultCarnetA = validation.test(carnet);
    var validationCeroA = validationCero.test(carnet);
    var validationLastA = validationLast.test(carnet);
    var validationLast5A = validationLast5.test(subCarnet);

    var length = carnet.length==6;

    var name = document.forms["myForm"]["name"].value;
    if ( name== "") {
      alert("nombre esta vacio");
      return false;
    }
    var lastName = document.forms["myForm"]["lastName"].value;
    if ( lastName== "") {
      alert("apellido esta vacio");
      return false;
    }
    var direction = document.forms["myForm"]["direction"].value;
    if ( direction == "") {
      alert("direccion esta vacio");
      return false;
    }
    var gender = document.forms["myForm"]["gender"].value;
    if (gender == "") {
      alert("género} esta vacio");
      return false;
    }
    var phone = document.forms["myForm"]["phone"].value;
    if (phone == "") {
      alert("celular esta vacio");
      return false;
    }
    var birth = document.forms["myForm"]["birth"].value;
    var year =birth.substring(0, 4);
    var age = 2021-year;
    alert("age"+year);

    if(age<18){
        alert("debes ser mayor de 17 años");
        return false;
    }
        var career = document.forms["myForm"]["career"].value;
    if (career == "") {
      alert("carnet esta vacio");
      return false;
    }
    var poetry = document.forms["myForm"]["poetry"].value;
    if (poetry == "") {
      alert("carnet esta vacio");
      return false;
    }
    if(resultCarnetA && length && !validationCeroA && validationLastA && validationLast5A){
        alert("Si estas bien");
         return true;
    }else{
        alert("El carnet debe llevar minimo 6 caracteres, la primer letra debe ser a, no debe tener ceros, el tercer caracter debe ser 5 y debe terminar en 1,3 o 9");
        return false;
    }
// para la fechas mayor d eedad console.log('2016-01-02'.split(new RegExp('-')));
// expected output: Array ["2016", "01", "02"]

    // if (birth == "") {
    //   alert("carnet esta vacio");
    //   return false;
    // }



  }