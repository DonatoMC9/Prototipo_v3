<?php
   //iniciamos la sesion
   session_start();
   

   //re dirigimos a la pagina del index
   if(session_destroy()) {
      header("Location: index.html");
   }
?>