function valida_envio(){
    var elem1= document.getElementById("autobus");
    var elem2= document.getElementById("rol");
    var elem3= document.getElementById("viaje");
    var elem4= document.getElementById("conductor");

    //valido el nombre
    if (elem1.value.length==0){
           alert("Escribe el numero de autobus")
           elem1.style.borderColor="red";
           document.formulario.autobus.focus()
           return 0;
    }
//valido el Rol
if (document.formulario.rol.value.length==0){
    alert("Escribe el rol ")
    elem2.style.borderColor="red";
    document.formulario.rol.focus()
    return 0;
}
//valido la selección del tipo de viaje
if (document.formulario.viaje.selectedIndex==0){
    alert("Selecciona el tipo de viaje")
    elem3.style.borderColor="red";
    document.formulario.viaje.focus()
    return 0;
}
//valido el nombre del conductor
if (document.formulario.conductor.value.length==0){
    alert("Escribe el nombre del conductor ")
    elem4.style.borderColor="red";
    document.formulario.conductor.focus()
    return 0;
}
//valido la clave del condcutor
if (document.formulario.clave.value.length==0){
    alert("Escribe la clave del conductor ")
    document.formulario.clave.focus()
    return 0;
}
//valido el nombre del capturista
if (document.formulario.capturista.value==0){
    alert("Escribe el nombre del capturista")
    document.formulario.capturista.focus()
    return 0;
}
//valido la clave del capturista
if (document.formulario.claveC.value==0){
    alert("Escribe la clave del capturista")
    document.formulario.claveC.focus()
    return 0;
}
//valido la selección del turno
if (document.formulario.turno.selectedIndex==0){
    alert("Selecciona el turno")
    document.formulario.turno.focus()
    return 0;
}
//valido el nombre de la unidad
if (document.formulario.dueño.value==0){
    alert("Escribe el nombre de la unidad")
    document.formulario.dueño.focus()
    return 0;
}
//valido el monto
if (document.formulario.monto.value==0){
    alert("Escribe el monto")
    document.formulario.monto.focus()
    return 0;
}



//Mensaje al enviar datos
alert("Muchas gracias por enviar el formulario");
document.formulario.add();
}
