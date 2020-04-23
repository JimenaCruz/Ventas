<?php
  $user=array("user01","user02","user03");
  $pass=array(0912,0204,1901);
   $estado=false; 

   $nombre=%POST['Nombre'];
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
       echo "User Ok";
   }
   else 
   {
       header("location:index.html");
   }
   }


  ?>
