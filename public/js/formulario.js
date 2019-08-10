
var formulario = document.formulario_envio;
var nombre = document.getElementById('nombre');
var apellido =document.getElementById('apellido');
var email = document.getElementById('email');
var password = document.getElementById('password');
var passwordrep = document.getElementById('passwordrep');
var passwordrecu = document.getElementById('passwordrecu');
var labelNombre = document.getElementById('labelNombre');
var labelApellido = document.getElementById('labelApellido');
var labelEmail = document.getElementById('labelEmail');
var labelpassword = document.getElementById('labelpassword');
var labelpasswordrep = document.getElementById('labelpasswordrep');
var labelpasswordrecu = document.getElementById('labelpasswordrecu');

//funciones
var envio = function(e){
    if(nombre.value== "" || apellido.value=="" || email.value=="" || password.value=="" || passwordrep.value=="" || passwordrecu.value==""){
       nombre.className= nombre.className + " error";
        apellido.className= apellido.className + " error";
        email.className= email.className + " error";
        password.className= password.className + " error";
        passwordrep.className= passwordrep.className + " error";
        passwordrecu.className= passwordrecu.className + " error";
        
        labelNombre.className= labelNombre.className + " labelError";
        labelApellido.className= labelApellido.className + " labelError";
        labelEmail.className= labelEmail.className + " labelError";
        labelpassword.className= labelpassword.className + " labelError";
        labelpasswordrep.className= labelpasswordrep.className + " labelError";
        labelpasswordrecu.className= labelpasswordrecu.className + " labelError";
        
       e.preventDefault();
       }
    
}

var focusNombre = function(){
    labelNombre.className= "active";
}

var blurNombre = function (){
    labelNombre.className = "label";
    if(nombre.className == "input_form error"){
       nombre.className="input_form";
       }else if (!nombre.value== ""){
                 labelNombre.className= "active";
                 }
}

var focusApellido = function(){
    labelApellido.className= "active";
}

var blurApellido = function (){
    labelApellido.className = "label";
    if(apellido.className == "input_form error"){
       apellido.className="input_form";
       }else if (!apellido.value== ""){
                 labelApellido.className= "active";
                 }
}
var focusEmail = function(){
    labelEmail.className= "active";
}

var blurEmail = function (){
    labelEmail.className = "label";
    if(email.className == "input_form error"){
       email.className="input_form";
       }else if (!email.value== ""){
                 labelEmail.className= "active";
                 }
}
var focusPassword = function(){
       labelpassword.className= "active";
   }
   
   var blurPassword = function (){
       labelpassword.className = "label";
       if(password.className == "input_form error"){
          password.className="input_form";
          }else if (!password.value== ""){
                    labelpassword.className= "active";
                    }
   }
   var focusPasswordrep = function(){
       labelpasswordrep.className= "active";
   }
   
   var blurPasswordrep = function (){
       labelpasswordrep.className = "label";
       if(passwordrep.className == "input_form error"){
          passwordrep.className="input_form";
          }else if (!passwordrep.value== ""){
                    labelpasswordrep.className= "active";
                    }
   }
   var focusPasswordrecu = function(){
       labelpasswordrecu.className= "active";
   }
   
   var blurPasswordrep = function (){
       labelpasswordrecu.className = "label";
       if(passwordrecu.className == "input_form error"){
          passwordrecu.className="input_form";
          }else if (!passwordrecu.value== ""){
                    labelpasswordrecu.className= "active";
                    }
   }


//metodos""
formulario.addEventListener("submit", envio);
nombre.addEventListener("focus", focusNombre);
nombre.addEventListener("blur", blurNombre);
apellido.addEventListener("focus", focusApellido);
apellido.addEventListener("blur", blurApellido);
email.addEventListener("focus", focusEmail);
email.addEventListener("blur", blurEmail);
password.addEventListener("focus", focusPassword);
password.addEventListener("blur", blurPassword);
passwordrep.addEventListener("focus", focusPasswordrep);
passwordrep.addEventListener("blur", blurPasswordrep);
passwordrecu.addEventListener("focus", focusPasswordrep);
passwordrecu.addEventListener("blur", blurPasswordrecu);