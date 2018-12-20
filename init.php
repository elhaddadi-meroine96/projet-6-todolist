<?php

$done=true;
if ($done ==true){
                    session_start();    
                    setcookie(session_name(),session_id(),0);
                    $file = session_id().'.json';
                  } else {
                    $file ='todo.json';
                  }
                   
                  
             $name = htmlspecialchars(trim(filter_var($_POST['name'], FILTER_SANITIZE_STRING))); 




?>