<?php

$host = "localhost";
$port = "5432";
$user = "postgres";
$pass = "1";
$db = "tripsegura";

$con = pg_connect("host=$host port=$port dbname=$db user=$user
password=$pass")
     or die ("Could not connect to server\n");

$sql = "select * from questoes";

$result = pg_query($con, $sql);

while($consulta = pg_fetch_assoc($result))
 {
    echo $consulta["descricao"];
}

?>