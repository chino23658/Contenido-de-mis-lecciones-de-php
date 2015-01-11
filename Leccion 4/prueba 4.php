<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>Nombre
    <label for="se"></label>
    <select name="se" id="se">
      <option value="so">Señor</option>
      <option value="se">señora</option>
      <option value="sr">señorito</option>
      <option value="ita">señorita</option>
    </select>
    <label for="fo"></label>
    <input type="text" name="fo" id="fo" value="<?php echo @$_POST["fo"];?>"/>
    Apellido
<label for="ap"></label>
  <input type="text" name="ap" id="ap" value="<?php echo @$_POST["ap"];?>"/>
  </p>
  <p>Lugar de Origen
    <label for="or"></label>
    <select name="or" id="or">
      <option value="nor">Norte America</option>
      <option value="cen">Centro America</option>
      <option value="sur">Sur América</option>
      <option value="sia">Asia</option>
      <option value="opa">Europa</option>
      <option value="af">Afríca</option>
    </select>
  </p>
  <p>Cuantos día planea permanecer en Costa Rica
    <label for="di"></label>
    <select name="di" id="di">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
    </select>
  </p>
  <p>Seleccione los servicios que desea:<br />
    <input type="checkbox" name="tra" id="tra" />
    <label for="tra">Transporte hotel-aeropuerto-hotel</label>
    <br />
    <input type="checkbox" name="gui" id="gui" />
    <label for="gui">Guía Turistico</label>
    <br />
    <input type="checkbox" name="aq" id="aq" />
    <label for="aq">Arquiler de Auto</label>
</p>
  <p>Tipo de hotel en que se alojará:<br />
    <input name="radio" type="radio" id="ec" value="ec" checked="checked" />
    <label for="ec">Económico</label>
    <br />
    <input type="radio" name="radio" id="esta" value="esta" />
    <label for="esta">Estándar</label>
    <br />
    <input type="radio" name="radio" id="estre" value="estre" />
    <label for="estre">5 estrellas</label>
  </p>
  <p>
    <input type="submit" name="bot" id="bot" value="Enviar" />
    <br />
  </p>
<p>&nbsp;</p>
</form>


</body>
</html>