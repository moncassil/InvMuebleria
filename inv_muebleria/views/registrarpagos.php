<center><img src="barra.png" width="%50" height="%50"></center>
 <div class="contenido">
 	<div class="form_top">
 		<h2> Registro <span>Pagos</span></h2>
    </div>
    <form class="form_reg" action="">
    
    <input class="input" type="date" placeholder="FECHA" required  autofocus>
    <input class="input" type="text"  placeholder="CANTIDAD" required>
    <input class="input" type="text"  placeholder="ADEUDO" required>
    <input class="input" type="text"  placeholder="COMENNTARIOS" required>
    <input class="input" type="tel"  placeholder="ID DEL CLIENTE QUE REALIZO EL PAGO" required>
    <input class="input" type="tel"  placeholder="NSS DEL EMPLEADO QUE REGISTRO EL PAGO" required>	
    <div class="boton">
     <input class="registrar" type="submit" value="REGISTRAR">
     <input class="limpiar" type="reset" value="LIMPIAR">
     </div>
   
    </form>
 </div >
<center>
 <table >
        <thead>
        <tr>
            <th colspan="1"><a href="registrarpagos.html">NUEVO</a></th>
            <th colspan="7"> <center>REGISTROS DE PAGOS</center></th> 
            </tr> 
        </thead>
        <tbody>
            <tr>
                <td>FECHA</td>
                <td>CANTIDAD</td>
                <td>ADEUDO</td>
                <td>COMENTARIOS</td>
                <td>ID DEL CLIENTE QUE REALIZO EL PAGO</td>
                <td>NS DEL EMPLEADO QUE REGISTRO EL PAGO</td>
                <td colspan="2"> <center>OPERACION A REALIZAR</center></td>
                
            </tr>
      <!--   migue elimina esto -->
            <tr>
                <td>17/05/2018</td>
                <td>1000</td>
                <td>NO</td>
                <td>PAGO TODO LO DEL MES DE MAYO</td>
                <td>1001</td>
                <td>JGM23</td>
                <td><a href="">Modficar</a></td>
                <td><a href="">Eliminar</a></td>
            </tr>
        <!-- hasta aqui solo era para hacer pruebas -->
        </tbody> 
    </table>
  </center>