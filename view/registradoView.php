<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title><!--falta colocar el nombre de la paguina del cliente-->
        <meta name="description" content="pagina de souvenirs"><!--missing content-->
        <meta name="autor" content="descritionde pagina separadas por comas"> <!--the author´s name is missing-->
        <meta name="keyword" content="descrition de pagina separadas por comas"><!--missing content-->
        <meta name="viewport" content="width=device-width, user-escalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="public/css/style.css">
        <link rel="stylesheet" href="public/css/font.css">
        <link rel="stylesheet" href="public/css/productos.css">
        <link rel="stylesheet" href="public/css/formulario.css">
        
</head>
<body>
   <header class="header"><!--aqui hacermos la interceccion de tres cajas en columnas que contengan numero de cliente y su correo, 2da una foto de la paguina y finalmente tendra su menu de navegación-->
              <nav class="nav_header">
                 <div class="top">
                      <div class="left"><a class="logo" href="">GenesisArts</a></div><!--una caja del logo-->
                      <div class="right">
                    
                     <a href="#" class="facebook"></a>
                      
                      </div><!--una caja contenedora de los datos de los contactos-->
                  </div>
                  
              </nav><!--aqui crearemos la primera caja del header que permitira colocar numero y correo del cliente, ademas de unos iconos-->
              
   </header>

   <section class="wraper padding">
        <section class="main padding">
           <div class="categorias">
               <h2>registrado exitosamente</h2>
               <section class="formulario">
                    <p>felicidades usted ha sido registrado con exito, vuelva al menu principal para inciar sesión <br><a href="?id=home" style="color:blue;"> volver a inicio</a></p>
                    <br>
                    <p>o inicie sesión directamente con este link <br><a href="?id=home" style="color:blue;"> iniciar sesión</a></p>
               </section>
           </div>
           <section class="articulos">
              
           
           
           
           </section>
            
           
        </section><!--estas cajas contendra los links de cada tipo de producto-->
        
        <aside class="aside padding margin">
           <div class="titulo">
               <h2 class="Genesis">Genesis</h2>
               <h2 class="Art">ART</h2>
           </div><!--caja de titulo-->
           
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
   <section id="quienessomos" class="underwrap">
       <div  class="quienesSomos">
              <h2>QUIENES SOMOS</h2>
               <p>Somos una empresa dedicada a suplir las necesidades de esos negocios que buscan algo diferente, diseños originales, productos innovadores, piezas de colección. Nos enfocamos en crear colecciones únicas para cada negocio, sin que este presente un costo extra. Sencillamente la pasión por la excelente es nuestro principal enfoque.</p>            
               
       </div>
   </section>
   <footer class="footer">
            <div class="div_footer">
                <a href="index.php" class="small">GenesisArt</a>
                <a href=""  id="anclados" class="small">quienes somos</a>
                <small class="small">derechos reservados GenesisArt</small>
                </div>
           
   </footer><!--esta parte la paguina tendra unos pequeños links que den información extra ejemplo(madrir, souvenirs, galeria, recomendamos, mapa web)-->
    <script src="public/js/focus.js"></script>
    <script src="public/js/formulario.js"></script>
</body><!--el fondo se contendra con una imagen de la preferencia del cliente-->
</html>
    