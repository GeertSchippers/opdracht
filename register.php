<?php
$servername = "localhost";
$username = "root";
$password = "";      
$db = "zeeslag";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

echo $bn = $_GET['name'];
echo $bs = $_GET['space'];
echo $bc = $_GET['coor'];


class bootje{
    private $name;
    private $spaces;
    public $coor;
    public function setspaces(){
        
        global $bn;
        global $bs;
        global $bc;
        $this->name = $bn;
        $this->spaces = $bs;
        $this->coor = $bc;
        
    }
}
$test = new bootje;
$test->setspaces();

$bcArray = explode(",", $test->coor);
print_r($bcArray);
$sqlRegisterBoatH3 ="UPDATE `coordinaten` SET `$bcArray[1]`=1, `$bcArray[2]`=1, `$bcArray[3]`=1 WHERE `id`=$bcArray[0]";
//$sqlRegisterBoatH ="UPDATE `coordinaten` SET `f`=1, `g`=1, `h`=1 WHERE `id`=3"; //van link naar rechts

$sqlRegisterBoatV ="UPDATE `coordinaten` SET `b`=1 WHERE `id`=1;
                    UPDATE `coordinaten` SET `b`=1 WHERE `id`=2;
                    UPDATE `coordinaten` SET `b`=1 WHERE `id`=3";
$conn->query($sqlRegisterBoatH3);
echo "boot geregistreert";


