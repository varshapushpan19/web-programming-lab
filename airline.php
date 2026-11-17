<?php
$servername="localhost";
$username="root";
$password="";
$dbname="airrdb";
$tbname="air";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
    {
        die("Connection failed".mysqli_connect_error());
    }
    else
        {
            echo"<br><h2 align=center>Flight details</h2><br/>";

        }
        $sql="SELECT*FROM air";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0)
            {
                echo"<table border=2 algin=center>";
                echo"<th><th>From</th>";
                echo"<th>Airline</th>";
                echo"<th>Departure date</th>";
                echo"<th>Arrival date</th>";
                echo"<th>to</th>";
                echo"<th>flight number</th>";
                echo"<th>terminal</th></tr>";
                while($row=mysqli_fetch_assoc($res))
                    {
                echo"<tr><td>$row[fro]</td>";
                echo"<td>$row[airline]</td>";
                echo"<td>$row[dd]</td>";
                echo"<td>$row[ad]</td>";
                echo"<td>$row[too]</td>";
                echo"<td>$row[fn]</td>";
                echo"<td>$row[ter]</td></tr>";

                    }
                    echo"</table>";
                

            }
            else{
                echo"0 result";
            }
            mysqli_close($conn);
            ?>