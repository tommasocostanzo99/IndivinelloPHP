<!DOCTYPE html>
<?php
  if(isset($_POST["confButton"]))
  {
    $nome = test_input($_POST["nome"]);
    $email = test_input($_POST["email"]);
    $cognome = test_input($_POST["cognome"]);
    $password = test_input($_POST["password"]);
    $nazionalita = test_input($_POST["nazionalita"]);
    $sesso = test_input($_POST["sesso"]);
    $patente = test_input($_POST["patenteA"]) . test_input($_POST["patenteB"]);
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
<html>
  <head>
    <script>
    function ConfermaModulo(){
        for(var i=0; i<document.getElementsByClassName("formRegistrazione").length; i++){
            if(document.getElementsByClassName("formRegistrazione")[i].value==""){               
               alert("non hai inserito tutti i campi");
              return;
            }
            else 
               document.getElementsByName("riepilogoTextForm")[i].innerHTML =document.getElementsByClassName("formRegistrazione")[i].value;
                                                                          
        }
        if(document.getElementsByName("sesso")[0].checked==false && document.getElementsByName("sesso")[1].checked==false){
             alert("non hai inserito tutti i campi");
             return;
        }
        else if(document.getElementsByName("sesso")[0].checked==true){
                  document.getElementsByName("riepilogoRadioForm")[0].innerHTML="maschio";
        }
        else if(document.getElementsByName("sesso")[1].checked==true){
                  document.getElementsByName("riepilogoRadioForm")[0].innerHTML="femmina";
        }
        if(document.getElementsByName("patente")[0].checked==true){
                  document.getElementsByName("riepilogoCheckboxForm")[0].innerHTML="cat.a ";
        }
        if(document.getElementsByName("patente")[1].checked==true){
                  document.getElementsByName("riepilogoCheckboxForm")[0].innerHTML+="cat.b";
        }
        document.getElementById("formRegistrazione").style.display="none";
        document.getElementById("confermaModulo").style.display="block";
    }
    </script>
  </head>
  <body>
    <form action="" method="post">
      <div id="formRegistrazione">
        <p>Nome: </p><input type="text" class="formRegistrazione" name="nome">
        <p>Cognome: </p><input type="text" class="formRegistrazione" name="cognome">
        <p>Sesso: </p><input type="radio" name="sesso" value="M">Maschio <input type="radio" name="sesso" value="F"> Femmina
        <p>Nazionalit&agrave:</p>  
        <select id="nazionalita" class="formRegistrazione" name="nazionalita">
          <option value="italiana">Italiana</option>
          <option value="tedesca">Tedesca</option>
          <option value="francese">Francese</option>
        </select>
        <p>Patente: </p><input type="checkbox" class="patente" name="patenteA" value="A">Cat. a <input type="checkbox" class="patente" name="patenteB" value="B"> Cat. b<br>
        <p>Email: </p><input type="text" class="formRegistrazione" name="email">
        <p>Password: </p><input type="password" class="formRegistrazione" name="password">
        <button type="button" name="conferma" onclick="ConfermaModulo()">Invia</button>
      </div>
      <div id="confermaModulo" style="display:none;" >
        <h5>Nome:</h5><p name="riepilogoTextForm"> </p>       
        <h5>Cognome:</h5><p name="riepilogoTextForm"> </p>
        <h5>Sesso:</h5><p name="riepilogoRadioForm"> </p>
        <h5>Nazionalit&agrave:</h5><p name="riepilogoTextForm"> </p>
        <h5>Patente:</h5><p name="riepilogoCheckboxForm"> </p>
        <h5>Email:</h5><p name="riepilogoTextForm"> </p>
        <input type="submit" value="conferma" name="confButton">
      </form>
    </div>
  </body>
</html>