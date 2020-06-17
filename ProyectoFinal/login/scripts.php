

<!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">  -->
<link rel="stylesheet" type="text/css" href="js/alertifyjs/css/themes/default.css">
<link rel="stylesheet" type="text/css" href="js/alertifyjs/css/alertify.css">

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/alertifyjs/alertify.js"></script>
<script>
             
                function comprobarnif(){
                
                    dni = formulario.dni.value ;
                    var numero;
                    var letra1;
                    var letra;
                    var expresion_regular_dni;
                
                    expresion_regular_dni = /^\d{8}[a-zA-Z]$/;
                    
                    if(expresion_regular_dni.test (dni) == true){
                        numero = dni.substr(0,dni.length-1);
                        letra1 = dni.substr(dni.length-1,1);
                        letra1 = letra1.toUpperCase();
                        numero = numero % 23;
                        letra='TRWAGMYFPDXBNJZSQVHLCKET';
                        letra=letra.substring(numero,numero+1);
                        if (letra!=letra1) {
                            alert('La letra no corresponde con el DNI.');    
                            formulario.dni.value="";     
                        }else{
                           
                        
                        }
                    }else{
                        alert('DNI no válido.');
                        formulario.dni.value="";
                    }
                    
                }   

                
            </script>