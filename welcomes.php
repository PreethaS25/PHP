<?php  
      if(isset($_GET["submit"]))
      {
        $name=$_GET["uname"];//receiving name field value in $name variable  
        echo "Welcome, $name";  
        
        print "Your address is: <br/><b>" . $_GET ['address'] . "</b>";
    
         $val=$_GET['arr'];

         $cnt=count($val);
         echo "your choice are"."<br>";
         for($i=0;$i<$cnt;$i++)
         {
             echo $val[$i]."<br>";
         }  

         $col = $_REQUEST['color'];
         if( ( $col != null ) )
         {
              $msg ="a nice $col ";
              echo $msg;
         }
        }

?>  
