<?php
     $user=array("user01","user02","user03");
     $pass=array(1912,123,4567);

     $estado=false; 

   $nombre=$_POST['Nombre'];
   $password=$_POST['Pass'];

   $tam=count($user); 

   for ($x=0; $x<$tam;$x++)
   {
   if ($user[$x]==$nombre && $pass[$x]==$password)
   {
       $estado=true;
   }
   if ($estado)
   {
       header("location:ventas.html");
   }
   else 
   {
       header("location:index.html");
   }
   }


  ?>
