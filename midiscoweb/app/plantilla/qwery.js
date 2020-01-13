var x;
x=$(document);
x.ready(inicializarEventos);

function inicializarEventos()
{
  var x=$("#text1");
  x.blur(pierdeFoco);
}

function pierdeFoco()
{
  var x=$(this);
  if (x.attr("value")==undefined)
    alert("No se han insertado los datos correctamente.");
}