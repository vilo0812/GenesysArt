<?php include "mensaje.php" ?>
<form action="prueba.php" class="mensaje_form" method="post">
                  
                   <label for="nombre">nombre: </label>
                   <input type="text" name="nombre" id="nombre">
                   <br>
                   <label for="apellido">apellido: </label>
                   <input type="apellido" name="apellido" id="apellido">
                   <br>
                   <label for="email">correo: </label>
                   <input type="email" name="email" id="email">
                   <br>
                   <input type="hidden" name="articulo" id="articulo" value="taza mug">
                   <br>
                   <input name="mensaje_btn" id="mensaje_btn" type="submit" value="enviar">
               </form>

               <!--hay que meterle un javascript violento para que me verifique si los campos estan vacios-->