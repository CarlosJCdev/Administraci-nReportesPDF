window.onload = function(){
    var fecha = new Date(); 
    var mes = fecha.getMonth()+1;
    var dia = fecha.getDate(); 
    var año = fecha.getFullYear();
    if(dia<10)
      dia='0'+dia;
    if(mes<10)
      mes='0'+mes;
    document.getElementById('fecha').value=dia+"-"+mes+"-"+año;
  }


