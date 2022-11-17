<?php
        $cookie_name = "userr";
        $cookie_value = $_POST["Uname"];
        
        setcookie($cookie_name, $cookie_value, time() +3600, "/"); // 1 hr

        if(!isset($_COOKIE[$cookie_name]))
        {
             echo "Cookie named '" . $cookie_name . "' is not set!";
        } 
        else
        {
           echo "Cookie '" . $cookie_name . "' is set!<br>";
           echo "Value is: " . $_COOKIE[$cookie_name];
        }
?>
<?php

  session_start(); //start the PHP_session function 

  if(isset($_SESSION['page_count']))
  {
     $_SESSION['page_count'] += 1;
  }
  else
  {
     $_SESSION['page_count'] = 1;
  }
   echo "<br/>";
   echo 'You are visitor number ' . $_SESSION['page_count'];

?>