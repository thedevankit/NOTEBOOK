<?php

   include('config.php');

/*$id='55';
   echo $id;*//*
 $result=mysql_query("SELECT * FROM stories WHERE id='$id'") or die('Something went wrong');
   */
   //echo mysql_num_rows($result);

/*
     while ($var_row=mysql_fetch_array($result)) 
   {
          echo"<b>".$var_row['id'];
         echo " </b><br>";
         echo"<b>".$var_row['title'];
         echo " </b><br>";

         echo$var_row['topic'];
         echo"  ";
         echo$var_row['feeling'];
         echo "  ";
         echo$var_row['story'];
         echo "<br>";
   }

$SQLCommand = "SELECT * FROM stories";
$result = mysql_query($SQLCommand);  

$yourArray = array();  


$index = 0;
while($row = mysql_fetch_assoc($result)){  
     $yourArray[$index] = $row;
     $index++;
}

echo "$index";
echo $row['id']['topic'];


*/

/*
 $result=mysql_query("SELECT COUNT(*) FROM stories") 
  
    while($row=mysql_fetch_array($result))
    {
    echo "Total count". $row['COUNT(*)'];
}
*/

$result=mysql_query("SELECT COUNT(*) AS cnt FROM stories");
while ($var_row=mysql_fetch_array($result)) 
    {
		echo $var_row['COUNT'];
	}
echo "_______________________________";

 $result1=mysql_query("SELECT * FROM stories
ORDER BY rand() LIMIT 3 ") or die('Something went wrong');

     while ($var_row=mysql_fetch_array($result1)) 
   {
          echo"<b>".$var_row['id'];
         echo " </b><br>";
         echo"<b>".$var_row['title'];
         echo " </b><br>";

         echo$var_row['topic'];
         echo"  ";
         echo$var_row['feeling'];
         echo "  ";
         echo$var_row['story'];
         echo "<br>";
   }


   

/*
$sql = mysql_query("select * from stories");
$userinfo = array();
$index1 = 0;

while ($row_user = mysql_fetch_assoc($sql))
    {
    	$userinfo[] = $row_user;
    	$index1++;
	
	}
foreach ($userinfo as $user) {


       if ($id!=$user[id]) {
       	

    echo "Id: {$user[id]}<br />"
       . "Name: {$user[topic]}<br />"
       . "Code: {$user[title]}<br /><br />";

       	echo "hiiiiiiiiiii ankit";
       }
}*/
/*
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
    



   }*/

?>