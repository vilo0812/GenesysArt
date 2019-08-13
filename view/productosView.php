<!DOCTYPE html>
<html lang="en">
<head>
   <!--no funciona el focus contacto-->
    <meta charset="UTF-8">
    <title>GenesysArt</title><!--falta colocar el nombre de la paguina del cliente-->
        <meta name="description" content="pagina de souvenirs"><!--missing content-->
        <meta name="autor" content="descritionde pagina separadas por comas"> <!--the author´s name is missing-->
        <meta name="keyword" content="descrition de pagina separadas por comas"><!--missing content-->
        <meta name="viewport" content="width=device-width, user-escalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="public/css/style.css">
        <link rel="stylesheet" href="public/css/font.css">
        <link rel="stylesheet" href="public/css/productos.css">
      
</head>
<body>
   <header class="header"><!--aqui hacermos la interceccion de tres cajas en columnas que contengan numero de cliente y su correo, 2da una foto de la paguina y finalmente tendra su menu de navegación-->
              <nav class="nav_header ">
                 <div class="top">
                      <div class="left"><a class="logo" href="?id=inicio">GenesisArts</a></div><!--una caja del logo-->
                      <div class="right">
                    
                      
                      </div><!--una caja contenedora de los datos de los contactos-->
                  </div>
                  
              </nav><!--aqui crearemos la primera caja del header que permitira colocar numero y correo del cliente, ademas de unos iconos-->
              
             
              <nav class="nav_main">
                 <ul class="list_main">
                 
                    <li class="list_display">
                    <a class="pull letter" href="#">MENU</a>
                 
                         <ul class="ul_main">
                                  <li class="li_main"><a  class="a_main" href="?id=inicio">inicio</a></li><!--esta lista encierra el ancla de...-->
                                  <li class="li_main"><a  class="a_main" href="">productos</a></li><!--esta lista encierra el ancla de...-->
            <li class="li_main"><a   id="ancla"  class="a_main" href="">contactos</a></li><!--esta lista encierra el ancla de...-->
                         
                              </ul><!--fin lista-->
                 
                            </li>
                 
                     </ul>
                  
                       
                 
              </nav><!--aqui crearemos el navegador principal-->
       
   </header>

   <section class="wraper padding">
        <section class="main padding">
                
                 <div class="categorias">
                           <h2>Productos</h2>
              </div>
                 
        <section class="productos">
            <!-- -----------------TAZAS ------------------------------------------------------------->
          <article class="article articulo_producto padding">
                      <figure class="center padding articulo_figura">
                               <a href="../formularios/formulario.php?a=1" class="producto_article      tazauno"></a>
            
                     </figure>
           </article>
            <!--tazauno-->
           <article class="article articulo_producto padding">
                      <figure class="center padding articulo_figura">
                               <a href="../formularios/formulario.php?a=2" class="producto_article      tazados"></a>
            
                     </figure>
           </article>
            <!--tazados-->

           <article class="article articulo_producto padding">
                      <figure class="center padding articulo_figura">
                               <a href="../formularios/formulario.php?a=3" class="producto_article      tazatres"></a>
            
                     </figure>
           </article>
            <!--tazatres-->

           <article class="article articulo_producto padding">
                      <figure class="center padding articulo_figura">
                               <a href="../formularios/formulario.php?a=4" class="producto_article      tazacuatro"></a>
            
                     </figure>
           </article>
           <!--tazacuatro-->
           <article class="article articulo_producto padding">
                      <figure class="center padding articulo_figura">
                               <a href="../formularios/formulario.php?a=5" class="producto_article      tazacinco"></a>
            
                     </figure>
           </article>
           <!--tazacinco-->
           <article class="article articulo_producto padding">
                      <figure class="center padding articulo_figura">
                               <a href="../formularios/formulario.php?a=6" class="producto_article       tazaseis"></a>
            
                     </figure>
           </article>
           <!--tazaseis-->
           <article class="article articulo_producto padding">
                      <figure class="center padding articulo_figura">
                               <a href="../formularios/formulario.php?a=7" class="producto_article        tazasiete"></a>
            
                     </figure>
           </article>
           <!--tazasiete-->
           <article class="article articulo_producto padding">
                      <figure class="center padding articulo_figura">
                               <a href="../formularios/formulario.php?a=8" class="producto_article      tazaocho"></a>
            
                     </figure>
           </article>
           <!--tazaocho-->
           <article class="article articulo_producto padding">
                      <figure class="center padding articulo_figura">
                               <a href="../formularios/formulario.php?a=9" class="producto_article      tazanueve"></a>
            
                     </figure>
           </article>
           <!--tazanueve-->
           <article class="article articulo_producto padding">
                      <figure class="center padding articulo_figura">
                               <a href="../formularios/formulario.php?a=10" class="producto_article      tazadiez"></a>
            
                     </figure>
           </article>
           <!--tazadiez-->
           <article class="article articulo_producto padding">
                      <figure class="center padding articulo_figura">
                               <a href="../formularios/formulario.php?a=11" class="producto_article      tazaonce"></a>
            
                     </figure>
           </article>
           <!--tazaonce-->
           <article class="article articulo_producto padding">
                      <figure class="center padding articulo_figura">
                               <a href="../formularios/formulario.php?a=12" class="producto_article      tazadoce"></a>
                     </figure>
           </article>
           <!--tazadoce-->
          </section>
           
        </section><!--estas cajas contendra los links de cada tipo de producto-->
        
        <aside class="aside padding margin">
           <div class="titulo">
               <h2 class="Genesis">Genesis</h2>
               <h2 class="Art">ART</h2>
           </div><!--caja de titulo-->
           
           <div class="comentarios">
               <h3>Si deseas enviar un mensaje </h3>
               <form action="../formularios/verificacion.php" class="mensaje_form" method="post">
                  
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
                <a href="?id=inicio" class="small">GenesisArt</a>
                <a href=""  id="anclados" class="small">quienes somos</a>
                <small class="small">derechos reservados GenesisArt</small>
                </div>
           
   </footer><!--esta parte la paguina tendra unos pequeños links que den información extra ejemplo(madrir, souvenirs, galeria, recomendamos, mapa web)-->
      <script src="public/js/focus.js"></script>
</body><!--el fondo se contendra con una imagen de la preferencia del cliente-->
</html>