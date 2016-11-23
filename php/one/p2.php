<!-- 重点   get  post -->
<!-- 处理提交过来的数据的 -->
<?php
// 接受提交过来的post的数据
// print_r($_POST);
// print_r($_GET);
print_r($_REQUEST);// 两种方式传过来的参数，都可以接收
// AJax主要与之区别是无刷新，不用跳转页面
// 必须取得是服务器的时间

echo time();
// 取当前时间戳
// 后台是运行在服务器上
// 时间戳转化
echo date("Y-m-d",time()); 
echo date("Y-m-d H:i:s",time());



// 混编  在后缀名为php的文件中写html
// 必须后缀名为php
// 在php里面可以呈现html,是一个联通的环境

// 定义常量
// 名称一般大写,*常量*只能定义一次，定义多次回出现报错
// define后面的第一个参数定义常量的名称，第二个定义参数的值，第三个参数默认是false:区分大小写,true:不区分大小写
// notice只是警告，不是致命错误
define("NAME","小李");
define("NAME","李晓");
echo NAME;
echo name;


echo "<hr>";
// 内置常量
print_r(PHP_OS);
echo "<hr>";
print_r(PHP_VERSION);// 版本号
echo "<hr>";
// die;
echo 111;
// exit;
// die("4444");
// 用一个die可以把后面的视图给不显示，有利于测试，在混编的情况下


// 要有两个下划线
echo "<hr>";
echo __LINE__;// 显示当前行数
echo "<hr>";
echo __FILE__;// 显示文件当前的位置
echo "<hr>";
function test(){
	echo __FUNCTION__ ;
	// 显示当前函数的名称
}
test();

// 定义一个类
class te{
	function fun(){
		echo __CLASS__;// 显示类名
		echo "<hr>";
		echo __METHOD__;// 显示类名下的方法名
	}
}
$te=new te();
$te->fun();

// 关键字是不能用来定义的，所以下面的函数的名称是会报错的 
// function echo(){

// }


echo "<hr>";
// 双引号是有功能的
$hhh="ghghgh\\hjhjhjghhg";
echo $hhh;


echo "<hr>";
$ni=array("武汉"=>"huo","上海"=>"魔都","北京"=>"政治");
foreach($ni as $key=>$value){
	echo $key.":".$value."<br>";
}
echo "<hr>";
$ni1=array("手机"=>array("ipaid"=>"白色","苹果"),
	       "糖果"=>array("徐福记"=>"牛奶味","金丝猴"));

foreach($ni1 as $key=>$value){
	echo $key.":".$value."<br>";
	// 首先把这个打印出来
	// 然后根据这个
	foreach ($ni1[$key] as $k => $v) {
		echo $k.":".$v."<br>";
	}
}

class Obj{

}
$newobj=new Obj();
echo gettype($newobj);
echo "<hr>";
$res= fopen("1.txt","r");// res是一个资源类型
echo "<hr>";
$res1=fread($res, 10);
echo $res1;

echo "<hr>";
$ar1=array("xiao","ded","adsdwad");
unset($ar1[0]);
// 删除一个参数
print_r($ar1);
$ress=is_array($ar1);
$in=in_array("lili",$ar1);
echo $in;


$stss="";
if(!empty($stss)){
	echo "不为空";
}else{
	echo "为空";
}
// 后台验证更重要的，客户端的可以改，服务端是不会被更改的
$str=null;
if(isset($str)){
	echo "有值"
}else{
	echo "无值";
}


// is_type判断是否是某种类型，会返还布尔值
// is_array -- 检测变量是否是数组
// is_bool --  检测变量是否是布尔型 
// is_callable --  检测参数是否为合法的可调用结构 
// is_double -- is_float() 的别名
// is_float -- 检测变量是否是浮点型
// is_int -- 检测变量是否是整数
// is_integer -- is_int() 的别名
// is_long -- is_int() 的别名
// is_null --  检测变量是否为 NULL 
// is_numeric --  检测变量是否为数字或数字字符串 
// is_object -- 检测变量是否是一个对象
// is_real -- is_float() 的别名
// is_resource --  检测变量是否为资源类型 
// is_scalar --  检测变量是否是一个标量 
// is_string -- 检测变量是否是字符串

?>
