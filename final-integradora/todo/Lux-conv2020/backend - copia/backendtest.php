<?php
//declarando las variables

$error = '';


$nombre = '';
$apellido = '';
$email = '';


$datepicker = '';

$mayor_18_anos = '';
$allow_global = '0'; 
$allowbrand = '0';
$acepto_bases_y_condiciones = '';

$sielegisteotro = '';

$residency = '';

$porquenolovolveriasacomprar = '';
$cuerpo = '';

$porquerazonloelegiste = '';

$comoloconocisteotro = '';
$comoloconocistefinal = '';
$porquerazonloelegisteotra = '';
$porquerazonloelegistefinal = '';




    $nombre = $_GET["nombre"];
    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    $nombre = trim($nombre);


	
	  $apellido = $_GET["apellido"];
    $apellido = filter_var($apellido, FILTER_SANITIZE_STRING);
    $apellido = trim($apellido);   

   


    $email = $_GET["email"];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $email = trim($email); 

    $datepicker = $_GET["datepicker"];
    $datepicker = filter_var($datepicker, FILTER_SANITIZE_STRING);
    $datepicker= trim($datepicker);

    //transforma los datos de birthday final a la forma que envia bunker

    $birthdayfinal = date('Y-m-d', strtotime($datepicker));
  
    /* corrobora si la persona es mayor de 18 años */
  

  	$comoloconociste = $_GET["comoloconociste"];
    $comoloconociste = filter_var($comoloconociste, FILTER_SANITIZE_STRING);
    $comoloconociste = trim($comoloconociste);



	  $comoloconocisteotro = $_GET["comoloconocisteotro"];
    $comoloconocisteotro = filter_var($comoloconocisteotro, FILTER_SANITIZE_STRING);
    $comoloconocisteotro = trim($comoloconocisteotro);

    $comoloconocistefinal = $comoloconociste." ".$comoloconocisteotro;

    /* */
  	$porquerazonloelegiste = $_GET["porquerazonloelegiste"];
    $porquerazonloelegiste = filter_var($porquerazonloelegiste, FILTER_SANITIZE_STRING);
    $porquerazonloelegiste = trim($porquerazonloelegiste);


    
	  $porquerazonloelegisteotra = $_GET["porquerazonloelegisteotra"];
    $porquerazonloelegisteotra = filter_var($porquerazonloelegisteotra, FILTER_SANITIZE_STRING);
    $porquerazonloelegisteotra = trim($porquerazonloelegisteotra);

    $porquerazonloelegistefinal = $porquerazonloelegiste." ".$porquerazonloelegisteotra;
	
    $fueronclaraslasinstrucciones = $_GET["fueronclaraslasinstrucciones"];
    $fueronclaraslasinstrucciones = filter_var($fueronclaraslasinstrucciones, FILTER_SANITIZE_STRING);
    $fueronclaraslasinstrucciones = trim($fueronclaraslasinstrucciones);

    if ($fueronclaraslasinstrucciones == "Si"){
      $fueronclaraslasinstrucciones = 1;
    } else{
      $fueronclaraslasinstrucciones = 0;
    }

	  $residency = $_GET["residency"];
    $residency = filter_var($residency, FILTER_SANITIZE_STRING);
    $residency = trim($residency);
    if ($residency == "Si"){
      $residency = 1;
    }else {
      $residency = 0;
    }

    $porquenolovolveriasacomprar = $_GET["porquenolovolveriasacomprar"];
    $porquenolovolveriasacomprar = filter_var($porquenolovolveriasacomprar, FILTER_SANITIZE_STRING);
    $porquenolovolveriasacomprar = trim($porquenolovolveriasacomprar);

    $sugerencia = $_GET["sugerencia"];
    $sugerencia = filter_var($sugerencia, FILTER_SANITIZE_STRING);
    $sugerencia = trim($sugerencia);

    $tegustonuevoALA = $_GET["tegustonuevoALA"];
    $tegustonuevoALA = filter_var($tegustonuevoALA, FILTER_SANITIZE_STRING);
    $tegustonuevoALA = trim($tegustonuevoALA);

    if ($tegustonuevoALA == "Si"){
    $tegustonuevoALA = 1; 
  }  else{
    $tegustonuevoALA = 0; 
  }



//validar mayor18
if (isset($_GET["mayor18"])){
$mayor_18_anos = $_GET["mayor18"];
if ($mayor_18_anos == 1){
  $mayor_18_anos = 1;
}else {
    $mayor_18_anos = 0;
    
}}

//validar allow brand
if (isset($_GET["brand"])){
$allowbrand = $_GET["brand"];
if ($allowbrand == 1){
  $allowbrand = 1;
}else {  $allowbrand = 0;}}

//validar allow global
if (isset($_GET["global"])){
$allow_global = $_GET["global"];
if ($allow_global == 1){
  $allow_global = 1;
}else {  $allow_global = 0;}}

//validar acepto_bases_y_condiciones
if (isset($_GET["byc"])){
$acepto_bases_y_condiciones = $_GET["byc"];
if ($acepto_bases_y_condiciones == 1){
  $acepto_bases_y_condiciones = 1;
}else {  $acepto_bases_y_condiciones = 0;}}


//guarda el mail del administrador
$mailmio = "modalsurveyus@gmail.com";
//asunto del mensaje
$asunto = "Formulario Ala para diluir Enviado con éxito";
//Guarda la info para enviar al mail del administrador
$mensajemio = 
"Nombre: ".$nombre." 
"."Apellido: ".$apellido." 
"."Email: ".$email." 
"."Fecha de nacimiento: ".$birthdayfinal." 
"."Te gustó el nuevo ala para diluir?: ".$tegustonuevoALA." 
"."Como lo conociste: ".$comoloconociste." 
"."como lo conociste otro: ".$comoloconocisteotro." 
"."porque razon lo elegiste: ".$porquerazonloelegistefinal." 
"."fueron claras las instrucciones: ".$fueronclaraslasinstrucciones." 
"."Lo volverias a comprar: ".$residency." 
"."Por que no lo volverias a comprar?: ".$porquenolovolveriasacomprar." 
"."Dejanos una sugerencia: ".$sugerencia." 
"."Soy mayor de 18: ".$mayor_18_anos." 
"."Acepto que ALA: ".$allowbrand." 
"."Acepto que unilever: ".$allow_global." 
"."Acepto bases y condiciones: ".$acepto_bases_y_condiciones." 
";

//ENVIAR CORREO
if($error == ''){
 

//guarda el mensaje para enviar al usuario satisfactoriamente
//$mensajeusuario = "¡Ya estás participando para ala para diluir!";

//
mail ($mailmio, $asunto, $mensajemio);

//agregar si quiere recibir el usuario un mail
//mail ($email, $asunto, $mensajeusuario);

//Envio del JSON
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://ar.eagle-latam.com/api/v4/consumers",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => false,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_GETFIELDS =>" {
     \r\n
     \"first_name\": \"$nombre\",
     \"last_name\": \"$apellido\",
     \"email\": \"$email\",
     \"birthday\": \"$birthdayfinal\",
     \"te_gusto_el_nuevo_ala_para_diluir\": \"$tegustonuevoALA\",
     \"como_lo_conociste\": \"$comoloconociste\",
     \"si_respondiste_otro_cual\": \"$comoloconocisteotro\",
     \"por_que_razon_lo_elegiste\": \"$porquerazonloelegistefinal\", 
     \"fueron_claras_las_instrucciones_de_uso\": \"$fueronclaraslasinstrucciones\",
     \"lo_volverias_a_comprar\": \"$residency\",
     \"en_caso_que_la_respuesta_haya_sido_que_no_por_que\": \"$porquenolovolveriasacomprar\",
     \"te_gustaria_darnos_alguna_sugerencia\":  \"$sugerencia\", 
     \"mayor_18_anos\": \"$mayor_18_anos\",
     \"allow_global\": \"$allowbrand\",
     \"allow_brand\": \"$allow_global\",
     \"acepto_bases_y_condiciones\": \"$acepto_bases_y_condiciones\"\r\n
    }",

    
      CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json",
        "Authorization: Bearer 1c1368bfeda82df1ce4d1a3c05ddd38759a3a20f" //Api de ALA SOu para diluir todo joya!
        
      ),
    ));
    
    $response = curl_exec($curl);
     //  echo $response;


  
    //   header("Location: ../exito.html");
    

    

}else{
    echo $error;
    echo "No se pudo mandar el formulario";
}

// ---


  //print json en pantalla

 


    curl_close($curl);




    echo '----Resultados------</br>';
    echo "Nombre ".$nombre."</br>";
    echo "Apellido ".$apellido."</br>";

    echo "Email ".$email."</br>";
 
    echo "Fecha de nacimiento: ".$birthdayfinal."</br>";

    echo "¿Te gustó el nuevo ALA para Diluir? : ".$tegustonuevoALA."</br>";
    echo "¿Cómo lo conociste?: ".$comoloconociste."</br>";
    echo "Si respondiste otro ¿Cual?: ".$comoloconocisteotro."</br>"; 
    echo "¿Por qué razón lo elegiste?: ".$porquerazonloelegiste."</br>";
    echo "Si razón elegiste ¿Cual?: ".$porquerazonloelegisteotra."</br>"; 

    echo "¿Fueron claras las instrucciones de uso?: ".$fueronclaraslasinstrucciones."</br>";
    echo "¿Lo volverías a comprar? ".$residency."</br>";
    echo "En caso no lo volverías a comprar ¿Por qué? : ".$porquenolovolveriasacomprar."</br>";

    echo "¿Te gustaría darnos alguna sugerencia?: ".$sugerencia."</br>";



    echo "Mayor 18?: ".$mayor_18_anos."</br>";
    echo "Acepta marca mande?: ".$allowbrand."</br>";
    echo "Acepta Unilever mande?: ".$allow_global."</br>";
    echo "Acepta bases y condiciones?: ".$acepto_bases_y_condiciones."</br>";


    //Seccion de conexion con bdd
    

//conexion con la base y seleccion de la basede datos
include ("conect.php");



//ejecución de la sentencia sql
mysqli_query($conexion, "INSERT INTO `first_name`, `last_name`, `email`, `birthday`, `te_gusto_el_nuevo_ala_para_diluir`, `como_lo_conociste`, `si_respondiste_otro_cual`, `por_que_razon_lo_elegiste`, `fueronclaraslasinstrucciones`, `lo_volverias_a_comprar`, `en_caso_que_la_respuesta_haya_sido_que_no_por_que`, `te_gustaria_darnos_alguna_sugerencia`, `mayor_18_anos`, `allow_global`, `allow_brand`, `acepto_bases_y_condiciones`) VALUES 
('$nombre', '$apellido', '$email', '$birthdayfinal', '$tegustonuevoALA', '$comoloconociste', '$comoloconocisteotro', '$porquerazonloelegistefinal', '$fueronclaraslasinstrucciones', '$residency', '$porquenolovolveriasacomprar', '$sugerencia', '$mayor_18_anos', '$allowbrand', '$allow_global', '$acepto_bases_y_condiciones'");




?>  