<html>
    <body>
<form action = "send.php" method= "POST">
<label for = "name">Name:</label>
<input type = "text" name = "name" >
<label for = "subject">Message:</label>
<textarea id="subject" name ="subject" ></textarea>
<input type ="submit" value= "Shout!">
</form>
</body>
</html>

<?php
require_once("connection.php");

    $result = mysqli_query($link, "SELECT *  FROM shouts ORDER BY shout_text ")
      or die( mysqli_error($link) );
      echo "<table>";
    while ($data = mysqli_fetch_assoc($result)){
     echo "<tr>";
        print "<td>".$data['shout_text']."</td>";
        print "<td>".$data['name']."</td>";
        print "<td>".date('d-M-Y',strtotime($data['shout_date']))."</td>";
      //  print "<br>";
    echo "</tr>";
    }
    echo "</table>"
?>