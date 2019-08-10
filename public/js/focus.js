/*var contacto=document.getElementById("contacto");
contacto.addEventListener(''); 

var btn_contacto=document.getElementById("btn_contacto");
btn_contacto.addEventListener('click', focus);
var focus = function (){
alert('esta funcionando');  }
contacto.focus();
*/
 var ancla = document.getElementById("ancla");

 ancla.addEventListener("click",contacto = function(e){
var height = window.innerHeight;
var width= window.innerWidth;
     if(width<=1000  &&width>900){
         scroll(1130,1130);  
     }else if(width<=900 && width>795 ){
        scroll(1630,1630);
    }else if(width<=795 ){
              scroll(2380,2380);
    }else{
       scroll(900,900);
    }   
e.preventDefault();
var foco = document.getElementById("contacto");
foco.className=foco.className + " foco";
var focodos = document.getElementById("quienessomos");
focodos.className="underwrap";
});

var anclados = document.getElementById("anclados");
anclados.addEventListener("click",quienessomos = function(e){
window.scrollTo(0,document.body.scrollHeight);
e.preventDefault();
var foco = document.getElementById("quienessomos");
foco.className=foco.className + " foco";
    var focodos = document.getElementById("contacto");
focodos.className="nowrap";
});


