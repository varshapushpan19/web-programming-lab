 <html>
 <head></head>
 <title></title>
 <body>
    <form method="POST" action="">
        enter id<input type="text" name="eid"><br>
        enter name<input type="text" name="ename"><br>
        enter dept<input type="text" name="dept"><br>
        enter salary<input type="text" name="sal"><br><br>
        <input type="submit" name="submit">
        
      </form>
      </body>
      </html>
      <?php
      $servername="localhost";
      $username="root";
      $password="";
      $dbname="emplydb";
      $tbname="employe";

      $conn=mysqli_connect($servername,$username,$password,$dbname);
      if(!$conn)
      {
        die("connection failed:".mysqli_connect_error());

      }
      else
      {
        echo"<br><h2 align=center>connected</h2></br>";
      }
      $id= $_POST['eid'];
      $name= $_POST['ename'];
      $dep= $_POST['dept'];
      $salary= $_POST['sal'];

      $query="INSERT INTO employe(eid,ename,dept,sal)VALUES('$id','$name','$dep','$salary')";
      $res=mysqli_query($conn,$query);
      if($res)
        {
            echo"submitted sucessfully";

        }
        else{
            echo"error";

        }
        mysqli_close($conn);
        ?>



 