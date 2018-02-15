<html>
  <head>
    <script>
      function confermaModulo(){
        for(int i=0;i<document.getElementsByName("formRegistrazione").length; i++){
            if(document.getElementsByName("formRegistrazione")[i].value==null){
               alert("non hai inserito tutti i campi");
               return;
        }
        if(document.getElementsByName("sesso")[0].checked==false && document.getElementsByName("sesso")[1].checked==false){
            alert("non hai inserito tutti i campi");
        }
        /*if(document.getElementsByName("nome")[0].value==null){
           alert("non hai inserito tutti i campi");
            
        }
        else if(document.getElementsByName("cognome")[0].value==null){
           alert("non hai inserito tutti i campi");
           
        }
        else 
        }
        else if(document.getElementsByName("email")[0].value==null){
            alert("non hai inserito tutti i campi");
        }
        else if(document.getElementsByName("password")[0].value==null){
            alert("non hai inserito tutti i campi");
        }*/
        else{
            document.getElementById("formRegistrazione").style.display="none";
            document.getElementById("confermaModulo").style.display="block";
            document.getElementsByName("riepilogo")[0].innerHt
            
            
        }
      }
    
    </script>
  </head>
  <body>
    <form id="formRegistrazione">
        <p>Nome: </p><input type="text" name="formRegistrazione">
        <p>Cognome: </p><input type="text" name="formRegistrazione">
        <p>Sesso: </p><input type="radio" name="sesso" value="Maschio">Maschio <input type="radio" name="sesso" value="Femmina"> Femmina
        <p>Nazionalit&agrave:</p>  
        <select id="nazionalita" name="formRegistrazione">
          <option value="italiana">Italiana</option>
          <option value="tedesca">Tedesca</option>
          <option value="francese">Francese</option>
        </select>
        <p>Patente: </p><input type="checkbox" name="patente" value="a">Cat. a <input type="checkbox" name="patente" value="b"> Cat. b<br>
       <p>Email: </p><input type="text" name="formRegistrazione">
      <p>Password: </p><input type="password" name="formRegistrazione">
      <input type="button" name="conferma" onclick="confermaModulo()" value="Conferma">

    </form>
    <div id="confermaModulo" style="display:none;" >
        <p name="riepilogo">Nome: </p>
        <p name="riepilogo">Cognome: </p>
        <p name="riepilogo">Sesso: </p>
        <p name="riepilogo">Nazionalit&agrave: </p>
        <p name="riepilogo">Patente: </p>
        <p name="riepilogo">Email: </p>
    </div>
  </body>
</html>