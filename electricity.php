<html>
<body>
<h1> electricity bill</h1>
<form method="post" action="#">
    consumer id:<input type="number" name="id"><br>
    name:<input type="text" name="name"><br>
    previous reading:<input type="number" name="prev"><br>
    persent reading:<input type="number" name="pres"><br>
    <input type="submit">

</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $id=$_POST['id'];
        $name=$_POST['name'];
        $prev=$_POST['prev'];
        $pres=$_POST['pres'];
        $units=$pres-$prev;
        echo" ";
        echo"<h3>kerala state electricity board(KSEB)</h3>";
        echo"<br><br>";
        echo"consumer id:".$id."<br>";
        echo"consumer name:".$name."<br>";
        echo"units consumed:".$units."<br>";
        if($units <=100)
            {
                 $amt=$units*3;
                  
            }
            else if($units>100 && $units<=200)
                {
                    $amt=$units*4;

                }
                else if($units>200 && $units<=300)
                {
                    $amt=$units*5;
                    
                }
                else{
                    $amt=$units*6;

                }
                echo"<h4> total:Rs.".($amt)."</h4><br>";
                echo"";

    }
    ?>
    </body>
    </html>