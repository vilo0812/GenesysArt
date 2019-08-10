<!DOCTYPE html>
<html lang="en">
<head>
   <!--no funciona el focus contacto-->
    <meta charset="UTF-8">
    <title>Document</title><!--falta colocar el nombre de la paguina del cliente-->
        <meta name="description" content="pagina de souvenirs"><!--missing content-->
        <meta name="autor" content="descritionde pagina separadas por comas"> <!--the author´s name is missing-->
        <meta name="keyword" content="descrition de pagina separadas por comas"><!--missing content-->
        <meta name="viewport" content="width=device-width, user-escalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/font.css">
        <link rel="stylesheet" href="../css/productos.css">
        <link rel="stylesheet" href="../css/formulario.css">
        <?php
        include "articulos.php";
        if($_GET){
        $arti=$_GET['a'];
        }
        ?>
      
</head>
<body>
   <header class="header"><!--aqui hacermos la interceccion de tres cajas en columnas que contengan numero de cliente y su correo, 2da una foto de la paguina y finalmente tendra su menu de navegación-->
              <nav class="nav_header">
                 <div class="top">
                      <div class="left"><a class="logo" href="../../index.php">GenesisArts</a></div><!--una caja del logo-->
                      <div class="right">
                    
                     <a href="#" class="facebook"></a>
                      
                      </div><!--una caja contenedora de los datos de los contactos-->
                  </div>
                  
              </nav><!--aqui crearemos la primera caja del header que permitira colocar numero y correo del cliente, ademas de unos iconos-->
              
             
              <nav class="nav_main">
                 <ul class="list_main">
                 
                    <li class="list_display">
                    <a class="pull letter" href="#">MENU</a>
                 
                         <ul class="ul_main">
                                  <li class="li_main"><a  class="a_main" href="../../index.php">inicio</a></li><!--esta lista encierra el ancla de...-->
                                  <li class="li_main"><a  class="a_main" href="../productos/producto.php">productos</a></li><!--esta lista encierra el ancla de...-->
            <li class="li_main"><a   id="ancla"  class="a_main" href="">contactos</a></li><!--esta lista encierra el ancla de...-->
                         
                              </ul><!--fin lista-->
                 
                            </li>
                 
                     </ul>
                  
                       
                 
              </nav><!--aqui crearemos el navegador principal-->
       
   </header>

   <section class="wraper padding">
        <section class="main padding">
                
                 <div class="categorias">
                           <h2>Formulario</h2>
              </div>
                 
        <section class="productos">
            
          <section class="articulo">
           <?php 
           $article = new articulos();
           $article->articulo($arti);
            
            ?>
            <!--imantres-->
            </section>
            <section class="formulario">
               <div class="contenedor_form">
               
                <form action="verificacion.php" name="formulario_envio" class="mensaje_form" method="post">
                 <div>
                     <div class="input_group">
                         <input type="text" name="nombre" id="nombre" class="input_form" >
                          <label for="nombre" id="labelNombre" class="label">nombre: </label>
                     </div>
                      <div class="input_group">
                      <input type="apellido" name="apellido" id="apellido" class="input_form" >
                       <label for="apellido" id="labelApellido" class="label">apellido: </label>
                     </div>
                     <div class="input_group">
                     <input type="email" name="email" id="email" class="input_form" >
                     <label for="email" id="labelEmail"class="label">correo: </label>
                     </div>
                     <div class="input_group">
                    <input type="hidden" name="articulo" id="articulo" value="taza mug">
                     </div>
                     
                      <input class="submit" name="mensaje_btn" id="mensaje_btn" type="submit" value="enviar" >
                     
                     
                 </div>

               </form>
               </div>

               <!--hay que meterle un javascript violento para que me verifique si los campos estan vacios-->
            </section>

         
         
         
          </section>
           
           
           
        </section><!--estas cajas contendra los links de cada tipo de producto-->
        
        <aside class="aside padding margin">
           <div class="titulo">
               <h2 class="Genesis">Genesis</h2>
               <h2 class="Art">ART</h2>
           </div><!--caja de titulo-->
           
           <div class="comentarios">
               <h3>Si deseas enviar un mensaje </h3>
               <form action="verificacion.php" class="mensaje_form" method="post">
                  
                   <textarea class="mensaje"name="mensaje" id="mensaje" cols="30" rows="10" re></textarea>
                   <input name="mensaje_btn" id="mensaje_btn" type="submit" value="enviar">
               </form>
           </div><!--caja de mensaje-->
       </aside>
       
   </section><!--esta lista contendra los links de cada tipo de producto-->
   <section id="contacto" class="nowrap">
     <h2 class="titulo_contacto">Contacto</h2>
      <div class="contactos">
                       <div class="contacto">
                                <div class="phone"></div>
                                <h3>34-693326816</h3>
                        </div>
                        <div class="contacto">
                                <div class="email"></div>
                                <h3>genesisart9134@gmail.com</h3>
                          </div>
                          <div class="contacto">
                                <div class="direction"></div>
                                <h3>Rua Cruz s/n, Cristoval 4960-130 Portugal</h3>
                          </div>
     </div>
   </section>
   <section  id="quienessomos" class="underwrap">
       <div class="quienesSomos">
              <h2>QUIENES SOMOS</h2>
               <p>Somos una empresa dedicada a suplir las necesidades de esos negocios que buscan algo diferente, diseños originales, productos innovadores, piezas de colección. Nos enfocamos en crear colecciones únicas para cada negocio, sin que este presente un costo extra. Sencillamente la pasión por la excelente es nuestro principal enfoque.</p>            
               
       </div>
   </section>
   <footer class="footer">
            <div class="div_footer">
                <a href="../../index.php" class="small">GenesisArt</a>
                <a href=""  id="anclados" class="small">quienes somos</a>
                <small class="small">derechos reservados GenesisArt</small>
                </div>
           
   </footer><!--esta parte la paguina tendra unos pequeños links que den información extra ejemplo(madrir, souvenirs, galeria, recomendamos, mapa web)-->
     
      <script src="../js/focus.js"></script>
      <script src="../js/formulario.js"></script>
</body><!--el fondo se contendra con una imagen de la preferencia del cliente-->
</html>