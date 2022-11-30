<?php

include_once(__DIR__.'/../vendor/autoload.php');

echo "app...";

use App\Models\Aluno;
use App\Persistence\ConnectionFactory;
use App\DTOS\SensorDTO;

$connFactory = new ConnectionFactory
$conn = $connFactory->getInstance();

$sensorDTO11 = new SensorDTO(26,55);
$sensorDTO22 = new SensorDTO(21,72);

$sqlInsertSensorData = "insert into previsaodotempo (temperatura, umidade) values "
$conn->exec($sqlInsertSensorData."(".$sensorDTO11->_temperatura.",".$sensorDTO11->_umidade.");");
$conn->exec($sqlInsertSensorData."(".$sensorDTO22->_temperatura.",".$sensorDTO22->_umidade.");");

$sqlSelectDadosBrutos = "select * from previsaodotempo";

$stmt = $conn->query($sqlSelectDadosBrutos);
$sensorDataArr = $stmt->fetchAll(\PDO::FETCH_ASSOC);

echo "<br></br>temperatura -- umidade <br></br>";


foreach ($sensorDataArr as $sensorData){
    echo "<br></br>".$sensorData['temperatura']."--".$sensorData['umidade'];
}