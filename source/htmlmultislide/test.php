<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
    $game = "Hiệp khách giang hồ"; /*this is a variable*/
    echo "I love $game <br>"; /*this is show view text */
    $oltxt = "I love $game <br>";
    $x = 15 + 20;
    echo $x ."<br>";
    $txt = "Javascript";
    echo "Tôi muốn học " . $txt . " thật nhiều nữa cơ <br>";

    function myText(){
        global $game;
        $game1 = "Cabal";
        echo "I love $game1 & $game";
    }
    myText();

    function demSo(){
        static $x = 0;
        echo $x;
        $x++;
    }
    echo "<br>";
    demSo();
    echo "<br>";
    demSo();
    echo "<br>";
    demSo();
    echo "<br>";
    demSo();
    echo "<br>";
    demSo();
    echo "<br>";
    demSo();
    echo "<br>";
    $y = 15.5;
    var_dump($game);
    var_dump($x);
    var_dump($y);
    $car = array("Toyota","Kia","Lexus","BMW");
    echo $car[3];
    var_dump($car);
    $x=null;
    echo strlen("Hello world!") ."<br>";
    echo str_replace("Hiệp khách giang hồ", "Cabal", $game); // outputs 6
    echo $oltxt;

    $z = acos(9);
    var_dump($z);
    echo $z;
    $h = 1999;
    var_dump(is_numeric($h));
    echo"===============================<br>";
    class myCar{
        public $color;
        public $model;
        public function __construct($color, $model){
            $this->color = $color;
            $this->model = $model;
        }
        public function message(){
            return "My car is a ".$this->color." ".$this->model."!";
        }
    }

    $myCarType = new myCar("Red","Lamboghini");
    echo $myCarType -> message();
    echo "<br>";
    $myCarType2 = new myCar("Blue","Lexus");
    echo $myCarType2 -> message();
    echo"<br>===============================<br>";
    $x = 23.4585224;
    $to_int = (int)$x;
    var_dump($to_int);
    echo $to_int."<br>";
    $to_string = (string)$x;
    var_dump($to_string);
    echo $to_string;
    echo"<br>===============================<br>";
    define("loCal","Welcome to Summer Script");
    function myTest(){
        echo loCal;
    }
    myTest();
    echo"<br>===============================<br>";
    $t=2;
    while($t <= 10){
        echo "$t,";
        $t++;
    }
    echo"<br>===============================<br>";
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    foreach($age as $x => $value){
        echo "$x = $value <br>";
    }
    echo"<br>===============================<br>";
    function nameSinger($sname){
        echo "ca sĩ $sname <br>";
    }
    nameSinger("Sơn Tùng");
    nameSinger("Bảo Anh");
    nameSinger("Lý Thế Dân");
    nameSinger("TMT");
    nameSinger("HKT");
    nameSinger("Huyền Trân");
    echo"<br>===============================<br>";
    $chi_thi="16";
    function chiThiMoi(&$ctname){
        echo $ctname . "+";
    }
    chiThiMoi($chi_thi);
    echo"<br>===============================<br>";
    $myBike = array("Exciter","Airblade","Z1000","Winner");
    $bike_length = count($myBike);
    for($x = 0; $x < $bike_length; $x++){
        echo $myBike[$x];
        echo "<br>";
    }
    echo"<br>===============================<br>";
    $cars = array(
        array("Toyota",25,15),
        array("Kia",45,55),
        array("Audi",30,20),
        array("Ferrari",40,90),
    );
    $dem = count($car);
    echo $dem;
    echo "<p><strong>Brand and In Stock</strong></p>";
    for($row = 0; $row < $dem; $row++){
        echo "<ul>";
        for($col = 0; $col < 3; $col++){
            echo "<li>".$cars[$row][$col]."</li>";
        }
        echo "</ul>";
    }
    echo"<br>===============================<br>";
   

?>
 <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = $_REQUEST['fname'];
        if(empty($name)){
            echo "Name is empty";
        }else{
            echo $name;
        }
    }
?>
</body>
</html>