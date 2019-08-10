<?php
class email{
    //nombre que se utiliza cuando un comprador hace una sugerencia a Genesis art
    private $name="Mail From a Customber";
    private $email="genesisart9134@gmail.com";
    private $asunto="Genesys art quiere enviarte la informacion sobre cualquier articulo que desees comprar ";
    private $mensaje="GenesisArt esta cordealmente feliz de verderle nuestros productos los cuales podras conseguir en nuestras tiendas en la direccion...";
   private $header = "From: Customber <Custombermailfrom@domain.com>\r\n";
    public function mensaje ($mensaje) {
    mail($this->email,$this->name,$mensaje,$this->header);
       
 
    /*permite enviar un mensaje al correo de GenesisArt y darle las sugerencias de las persona */

    }//fin mensaje-- este metodo permite hacer un envio de informacion a el correo de genesis art donde los usuarios pueden mandarle informacion a su correo



   public function formulario  ($nombre,$apellido,$email_from){
    $subject= "genesisart";
    $mensaje="Hola " . $nombre . " " .$apellido . " " . $this->mensaje;  
    $mail_header = "From: genesisart <".$this->email.">\r\n";
    mail($email_from,$subject,$mensaje,$mail_header);
    
    /*permite enviar un mensaje al correo de la persona, para darle toda la informacion respecto a los articulos de genesisarts*/
    }//fin formulario--- este metodo permitira que los usuarios que quieren pedir los productos a genesis art puedan resivir la informacion completa sobre el producto
}

$object= new email();
if($_POST){
if(isset($_POST['mensaje'])){
$mensaje=$_POST['mensaje'];
$object->mensaje($mensaje);
}elseif(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email'])/* && isset($_POST['articulo'])*/){
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
/*$article=$_POST['articulo'];*/
$object->formulario($nombre,$apellido,$email);
}
}







?>