<?php 

   include('config.php');
 /* $title=array();*/
  $feeling='love';
  $topic;
  $message;
  $i=0;
  $id='49';
  $check_story;
 /* $dt=array();*/

   $result=mysql_query("SELECT * FROM stories ");
   $var_row=mysql_fetch_array($result);
     while ($var_row=mysql_fetch_array($result)) 
   {
      echo"<b>".$var_row['id'];
         echo " </b>";
         echo"<b>".$var_row['title'];
         echo " </b>";

         echo$var_row['topic'];
         echo"  ";
         echo$var_row['feeling'];
         echo "  ";
         echo$var_row['story'];
         echo "<br>";
    



   }

 if ($result=mysql_query("SELECT * FROM stories  WHERE  id='$id'")) 
 {

 }
 else
 {
  echo " ".mysql_error();
 }
if(mysql_fetch_row($result))
        {

      
           echo"<b>".$var_row['title'];
         echo " </b>";

         echo$var_row['topic'];
         echo"  ";
         echo$var_row['feeling'];
         echo "  ";
         echo$var_row['story'];
         echo "<br>";
    


         }
  /* foreach ($dt[] as $dt1[]) 
   {
      $dt1[]=;
      # code...
      echo "$dt1";
   }*/

  
 ?>