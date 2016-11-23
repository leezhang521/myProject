<?php
// 1.之前可以省略掉php
// 2.或者省略掉结尾符号----
//3. 先找结尾再找开头，如果结尾不写，可以提升反应速度
//4.严格要求结尾分号必须加上
//5.如果出现乱码，必须给头部设置编码格式即
//header("Content-type:text/html;charset=utf-8");
header("Content-type:text/html;charset=utf-8");
echo "阿尼哈谁有";// 打印字符串或数字
echo ("只能echo字符串货数字，即可以echo标签");
echo "<div>";
echo 12345;
// 二.关于注释
// 分单行注释与多行注释
// 
/*****/

// 逻辑较为复杂的时候，注释很重要


$a = "声明变量";
echo $a;
echo "<hr>";
$b = "ha";
$ha="哈哈哈";
echo $$b;
// 变量的变量

echo "<hr>";
echo "这是变量解析";
$c="李";
$res="雪".$c;
echo $res;
echo "<hr>";
// 双引号会解析变量----单引号不会解析变量
$res2="雪$c";
echo $res2;


echo "<hr>";
$res3= "xue.'$c'";
echo $res3;

echo "<hr>";
$res4="学'$c'习";
echo $res4;


echo "<hr>";
$res5="你".$c."好";
echo $res5;

echo "<hr>";
$res6="nishi{$c}谁";
echo $res6;


echo "<hr>";
// 这是自动转换
$e=1;
$f="3";
echo ($e+$f);
// 结果整形

echo "<hr>";
echo gettype((int)$f);
// 类型转换？？？？？

echo "<hr>";
// 字符串定义方式2:定界符3.后面不能写注释，不然出错
// 一般定义长字符串
// 结尾顶头写前后都不能有空格
$str=<<<AAA
hhwdhwdhkhdhwd
AAA;
echo $str;

echo "<hr>";
// 字符串定义方式2:定界符3.后面不能写注释，不然出错
$str=<<<BBBB
GHIJHGKJDFKJGHDKFFGHKDFH
BBBB;
echo $str;


echo "<hr>";
$str1=[1,23];
$str2=$str1;//如果要引用传址，就加上&符号。即表示and 的符号 
$str2[0]=5;
echo $str1;
echo "<hr>";
print_r($str1);
echo "<hr>";
var_dump($str1);
// 这两个都可以输送字符串
echo "<hr>";
print_r($str2);


echo "<hr>";
$str3=&$str1;
$str3="飞翔";
echo $str1;

echo "<hr>";
$tt1=array("西红","xibei","hah");// 索引数组
print_r($tt1);

echo "<hr>";
$tt2=array("name1"=>"菲菲","name2"=>"xibei","name3"=>"hah");// 关联数组
print_r($tt2);

// 对象不能这么定义，数组可以这么定义，数组不支持这个对象
// $sss=[{name:"lala"}],
// print_r($sss);会报错


// 全局变量
	echo "<pre>";
	print_r($_SERVER);
	echo "</pre>";
	// 
// cookies用户名，密码

echo "<hr>";
echo printinfo();
print_r($_COOKIE);
$SESSION['username']="风雪";
session_start();
// 要开启之后，才能获取这个全局变量
var_dump($SESSION);
echo "所有的全局变量都存储在$GLOBALS这个全局变量里"
// print_r($GLOBALS);

?>