<?php
function DBConnection()
{
  $servername = "localhost:3306";
  $database = "mydb"; 
  $username = "root";
  $password = "toor";
  $sql = "mysql:host=$servername;charset=utf8;dbname=$database;";
  $dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

  try
  {
    $my_Db_Connection = new PDO($sql, $username, $password, $dsn_Options);
    echo "Connected successfully\n";
  }
  catch (PDOException $error) 
  {
    echo 'Connection error: ' . $error->getMessage();
  }
  return $my_Db_Connection;
}

function validation($my_Insert_Statement)
{
  if ($my_Insert_Statement->execute()) {
    echo "New record created successfully\n";
  } else {
    echo "Unable to create record\n";
  }
}

function validation2($parray)
{
  $flag = false;
  $counter1 = 0;
  $counter2 = 0;
  for ($i = 0; $i < count($parray); $i++) {
    if (($parray[$i] <= 100) && ($parray[$i] >= 0))
    {
    if ($i < 3)
    {$counter1 = $counter1 + $parray[$i];}
    else
    {$counter2 = $counter2 + $parray[$i];}
    $flag = true;
    }
  }
  if (($counter1 == 100) && ($counter2 == 100))
  {$flag = true;}
  else {$flag = false;}
  return $flag;
}


$my_Db_Connection = DBConnection();
$tarray = array("A","B","C","X","Y","Z");
$parray = array();
for ($i = 0; $i < count($tarray); $i++) {
if (isset($_POST["Value".$tarray[$i]]))
{
array_push($parray,$_POST['Value'.$tarray[$i]]);
}
}


if (validation2($parray) == true)
{
  $my_Insert_Statement = $my_Db_Connection->prepare("INSERT INTO abc (A, B, C) VALUES (:A, :B, :C); INSERT INTO xyz (X, Y, Z) VALUES (:X, :Y, :Z)");
  for ($i = 0; $i < count($tarray); $i++) 
  {
    $my_Insert_Statement->bindParam(":".$tarray[$i], $parray[$i]);
  }
  validation($my_Insert_Statement);
}
else
{
  echo "Error\n";
}
?>