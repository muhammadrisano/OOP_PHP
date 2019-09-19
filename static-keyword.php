<?php

// class ContohStatic{
// 	public static $prop = 1;

// 	public static function method1(){
// 		return "Coba. ".self::$prop++." kali";
// 	}

// }
// echo ContohStatic::$prop;
// echo "<br/>";
// echo ContohStatic::method1();
// echo "<hr/>";
// echo ContohStatic::method1();

class ContohOpp{

	public static $pro1 = 1;


	public function method1(){

		return "ini contoh. ".self::$pro1++. " kali. <br/>";
	}


}

$var1 = new ContohOpp;

echo $var1->method1();
echo $var1->method1();
echo $var1->method1();

echo "<hr/>";
$var2 = new ContohOpp;

echo $var2->method1();
echo $var2->method1();
echo $var2->method1();


?>