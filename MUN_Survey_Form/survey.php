<?php
session_start();
require_once('config.php');
$queryf="select * from testresponse where 1";
$queryf_run=mysqli_query($con,$queryf);
$rows=mysqli_num_rows($queryf_run);
echo "Results<br>";
echo "The total number of entries are :".$rows;
echo "<br>";
$query="select * from response where 1";
$query_run=mysqli_query($con,$query);
$result=mysqli_fetch_array($query_run);
$a1ec=(($result['agenda_1ec'])/($rows))*100;
$a2ec=(($result['agenda_2ec'])/($rows))*100;
$a3ec=(($result['agenda_3ec'])/($rows))*100;
$a1unscw=(($result['agenda_1unscw'])/($rows))*100;
$a2unscw=(($result['agenda_2unscw'])/($rows))*100;
$a3unscw=(($result['agenda_3unscw'])/($rows))*100;
$a1aippm=(($result['agenda_1aippm'])/($rows))*100;
$a2aippm=(($result['agenda_2aippm'])/($rows))*100;
$a3aippm=(($result['agenda_3aippm'])/($rows))*100;
$a1disec=(($result['agenda_1disec'])/($rows))*100;
$a2disec=(($result['agenda_2disec'])/($rows))*100;
$a3disec=(($result['agenda_3disec'])/($rows))*100;
$a1whsw=(($result['agenda_1whsw'])/($rows))*100;
$a2whsw=(($result['agenda_2whsw'])/($rows))*100;
$a3whsw=(($result['agenda_3whsw'])/($rows))*100;
$a1sc=(($result['agenda_1sc'])/($rows))*100;
$a2sc=(($result['agenda_2sc'])/($rows))*100;
$a3sc=(($result['agenda_3sc'])/($rows))*100;
$a1ip=(($result['agenda_1ip'])/($rows))*100;
$a2ip=(($result['agenda_2ip'])/($rows))*100;
$a3ip=(($result['agenda_3ip'])/($rows))*100;
echo "$a1ec % people prefers Agenda 1EC<br>";
echo "$a2ec % people prefers Agenda 2EC<br>";
echo "$a3ec % people prefers Agenda 3EC<br><br>";
echo "$a1unscw % people prefers Agenda 1UNSCW<br>";
echo "$a2unscw % people prefers Agenda 2UNSCW<br>";
echo "$a3unscw % people prefers Agenda 3UNSCW<br><br>";
echo "$a1aippm % people prefers Agenda 1AIPPM<br>";
echo "$a2aippm % people prefers Agenda 2AIPPM<br>";
echo "$a3aippm % people prefers Agenda 3AIPPM<br><br>";
echo "$a1disec % people prefers Agenda 1DISEC<br>";
echo "$a2disec % people prefers Agenda 2DISEC<br>";
echo "$a3disec % people prefers Agenda 3DISEC<br><br>";
echo "$a1whsw % people prefers Agenda 1WHSW<br>";
echo "$a2whsw % people prefers Agenda 2WHSW<br>";
echo "$a3whsw % people prefers Agenda 3WHSW<br><br>";
echo "$a1sc % people prefers Agenda 1SC<br>";
echo "$a2sc % people prefers Agenda 2SC<br>";
echo "$a3sc % people prefers Agenda 3SC<br><br>";
echo "$a1ip % people prefers Agenda 1IP<br>";
echo "$a2ip % people prefers Agenda 2IP<br>";
echo "$a3ip % people prefers Agenda 3IP<br>";
session_destroy();
?>