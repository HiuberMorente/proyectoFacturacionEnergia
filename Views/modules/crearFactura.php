<div class="content-wrapper">
  <center>
    <br><br><br>
    <h3>FACTURAR</h3>
    <br><br>

    <form action="" method="post">
      <tr>
        <td>
          <input
            type="text"
            name="buscarNis"
            size="20"
            placeholder="Buscar NIS">
          <button>Buscar</button>
        </td>
      </tr>
      <tr>
    </form>

    <br><br><br>

    <form method="post" action="">

      <button type="submit" class="btnImprimirFactura">GENERAR FACTURA PDF</button>
      <br><br><br>

      <table>
        <tr>
          <td>ID de factura:</td>
          <td><input type="text" name="id_factura" value="1" size="5"></td>
        </tr>
        <tr>
          <td>fecha emisión de factura:</td>
          <td><input type="text" name="fecha_factura" value="<?php echo date("d-m-Y"); ?>" size="15"></td>
        </tr>
        <tr>
          <td>Nombre Empresa:</td>
          <td><input type="text" name="nombre_tienda" value="Nombre de la tienda S.L" size="50"></td>
        </tr>

        <tr>
          <td>Teléfono:</td>
          <td><input type="text" name="telefono_tienda" value="900 00 00 00" size="15"></td>
        </tr>

        <tr>
          <td>Identificacion Fiscal:</td>
          <td><input type="text" name="identificacion_fiscal_tienda" value="11223344N" size="15"></td>
        </tr>
        <tr>
          <td>
            <hr>
          </td>
          <td>
            <hr>
          </td>
        </tr>
        <tr>
          <td>Nombre del cliente:</td>
          <td><input type="text" name="nombre_cliente" value="Fernando" size="15"></td>
        </tr>
        <tr>
          <td>Apellidos del cliente:</td>
          <td><input type="text" name="apellidos_cliente" value="García García" size="15"></td>
        </tr>
        <tr>
          <td>Dirección del cliente:</td>
          <td><input type="text" name="direccion_cliente" value="C/ cualquiera nº 1" size="50"></td>
        </tr>
        <tr>
          <td>Departamento del cliente:</td>
          <td><input type="text" name="poblacion_cliente" value="Sevilla" size="25"></td>
        </tr>
        <tr>
          <td>Municipio del cliente:</td>
          <td><input type="text" name="provincia_cliente" value="Sevilla" size="25"></td>
        </tr>

        <tr>
          <td>NIT:</td>
          <td><input type="text" name="identificacion_fiscal_cliente" value="44332211N" size="15"></td>
        </tr>
      </table>

    </form>

  </center>
</div>


