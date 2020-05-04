<?php
 include('connection.php');
 session_start();
if(!isset($_SESSION['uname']))
{
   header('Location:index.php');
}
?>

<!DOCTYPE html>
<html>
  <head> 
      <title> to-do-list </title>
   </head>
      <body>
          <form method="POST">
              <table>
                  <tr>
                      <td> TITLE:</td>
                      <td><input type="text" name="t" required></td>
                      
                 </tr>  
                  <tr>
                      <td> DETAIL:</td>
                      <td><input type="text" name="det" required></td>
                      
                  </tr>  
                   <tr>
                       <td> DATE:</td>
                       <td><input type="date" name="dat" required></td>
                       
                  </tr>  
                  <tr>
                       <td><input type="submit" name="send" value="save"></td>
                 </tr>  
            </table>
         </form>
      </body>   
 </html>   

 <?php

if(isset($_POST['send']))
{
  $t=$_POST['t'];
  $det=$_POST['det'];
  $dt=$_POST['dat'];
  $userid=$_SESSION['userid'];
  
  


if($conn)
{
          /*echo "connection successfull"; insert the data in database*/
           $sql="insert into task(uid,title,detail,date)values('$userid','$t','$det','$dt')";
           $res=mysqli_query($conn,$sql);
               if($res)
                 {
                   header('Location:dasboard.php');
                 }
                   else
                 {
                   echo "failed to insert records...";
                 }
}
 else
{
  echo "connection failed";
}
}


?>
