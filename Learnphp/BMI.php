<?php //http://localhost/php/BMI.php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

?>

<!doctype html>
<html >
<head>
<style>
body {
  background-image: url('allimg/download.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" , initial-scale=1>
    <title>BodyMassIndex</title>
    <link rel="icon" type="image/png" href="allimg/home.png">
<style>
.but {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 12px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
  margin: 4px 40px;
  cursor: pointer;
}
.but1 {
  background-color: rgb(204, 0, 0);
  border: none;
  color: white;
  padding: 12px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
  margin: 4px 30px;
  cursor: pointer;
}
.button2 {padding: 20px 105px;}
.button3 {padding: 20px 122px;}
h9 {
  font-size: 20px;
  background-color: lightblue;
}

h10 {
  font-size: 20px;
  color: rgb(77, 0, 31);
}

h11 {
  font-size: 15px;
  color: rgb(153, 0, 61);
}

#para1 {
  text-align: center;
  color:rgb(0, 0, 153);
}

h13 {
  font-size: 21px;
  text-align: center;
  color:#330066;
  background-color: #ffff00
}

hh{
    font-size: 60px;
}

/*-------------------------------------------------------------------------------------------*/
* {
  box-sizing: border-box;
}

.header {
  border: 10px solid blue;
  padding: 10px;
}

.php {
  width: 38%;
  float: left;
  padding: 10px;
  border: 10px solid #4CAF50;
}

.piccontent{
  width: 62%;
  float: left;
  padding: 10px;
  border: 10px solid red;
}
/*--------------------------------------------------------------------------*/
h12 {
  color: maroon;
  margin-left: 5px;
  font-size: 35px;
} 

/*---------------------------------------------------------------------------------------------------------------*/
</style>

<style>
e {
  font-size: 25px;
  text-align: center;
  text-shadow: 2px 2px 5px #3d5c5c;
}
</style>

<style>
h {
  background-color: #ffff00;
  font-size: 36px;
  text-align: center;
  text-shadow: 2px 2px 5px blue;
}
</style>

<style>
h33 {
  background-color: #ffff00;
  font-size: 34px;
  text-align: center;
  text-shadow: 2px 2px 5px blue;
}
</style>
</head>
<!---------------------------------------------------------------------------------------------------------------------->
<body style="background-color:linen;">

<div class="header">
<hh id="para1"><pre> โปรแกรมคำนวณหาค่าดัชนีมวลกาย </pre></hh>
</div>

<div class="php">

<h1 style="color:rgb(0, 77, 26);"style="background-color:#ffff00;">
<pre>     <u>กรอกข้อมูลความสูงและน้ำหนัก</u> </pre>
</h1>  

<form action="BMI.php" method="POST">

    <h9><pre>        ความสูง : <input type="text" name="num1"> เมตร</pre>
        <pre>        น้ำหนัก : <input type="text" name="num2"> กิโลกรัม </pre></h9>
    
    <h2 style="color:rgb(209, 0, 0);"> 
       <pre>

       <input type="submit" class="but button2" value="Submit">
       <h11>   (กดปุ่ม Submit เมื่อ confirm ข้อมูลของคุณ)  </h11>

       <input type="reset"  class="but1 button3" value="Clear">
       <h11>   (กดปุ่ม clear  เพื่อ reset   ข้อมูลของคุณ)  </h11>   

       </pre>
    </h2>

</form>

<?php //----------------------------------------------------------------------------//

if(isset($num1))
{

  $sum = $num1 * $num1;
  $avg = $num2/$sum;

  
  
    if($avg<=1){

      $avg = 0;

      echo "<e><pre><u>ค่า BodyMassIndex ของคุณ</u></pre></e><hr>";
      echo "<h33><pre>คุณให้ข้อมูลส่วนสูงผิด<br></pre></h33><hr>";
      //-----------------------------------------------------------------------------//
      echo "<h13>ตารางเกณฑ์ดัชนีมวลกาย Body Mass Index </h13><hr>";
      //-----------------------------------------------------------------------------//
      echo "<pre><h10> น้อยกว่า  18.5                น้ำหนักน้อยผอม</h10></pre>	
      <pre><h10> ระหว่าง  18.5-22.9            ปกติสุขภาพดี</h10></pre>	
      <pre><h10> ระหว่าง  23.0-24.9            น้ำหนักเกินท้วม</h10></pre>	
      <pre><h10> ระหว่าง  25.0-29.9            อ้วนโรคอ้วนระดับ 1</h10></pre>	
      <pre><h10> มากกว่า 30.0                 อ้วนมากโรคอ้วนระดับ 2 </h10></pre><hr>";
      //-----------------------------------------------------------------------------//
     echo "<h1> Body Mass Index </h1> 
     <h3><pre>     BodyMassIndex หรือ ดัชนีมวลกาย เป็นค่าที่ได้จากน้ำหนักและส่วนสูง 
โดยการนำค่าน้ำหนักหน่วยเป็นกิโลกรัมหารด้วยส่วนสูงเป็นเมตรยกกำลังสอง 
kg/m<sup>2</sup> ค่า BMT เป็นค่าที่ใช้วัดปริมาณมวลเนื้อเยื่อกล้ามเนื้อ ไขมัน กระดูก 
ในตัวบุคคล เพื่อจำแนกบุคคลนั้นว่ามีน้ำหนักต่ำกว่าเกณฑ์ น้ำหนักตามเกณฑ์ 
หรือ น้ำหนักเกินเกณฑ์ หรือ ไม่ โดยองค์การอนามัยโลก  หรือ  WHO
WorldHealthOrganization ได้เป็นผู้กำหนดค่ามาตรฐานBMI สำหรับผู้ที่มี
อายุตั้งแต่ 20 ปีขึ้นไป เพื่อใช้เป็นดัชนีชี้วัดปริมาณไขมันในร่างกายเพื่อระบุถึง
ความเสี่ยงต่อการเป็นโรคอ้วนหรือผอมจนเกินไปตามหลักข้างบนข้างต้น</pre></h3>";
    }else{

     echo "<e><pre>ค่า BodyMassIndex ของคุณ</pre></e><hr>";
     echo "<h><pre>".number_format( $avg , 1 )."<br></pre></h><hr>";
     //-----------------------------------------------------------------------------//
     echo "<h13>ตารางเกณฑ์ดัชนีมวลกาย Body Mass Index </h13><hr>";
     //-----------------------------------------------------------------------------//
    echo "<pre><h10> น้อยกว่า  18.5                น้ำหนักน้อยผอม</h10></pre>	
    <pre><h10> ระหว่าง  18.5-22.9            ปกติสุขภาพดี</h10></pre>	
    <pre><h10> ระหว่าง  23.0-24.9            น้ำหนักเกินท้อม</h10></pre>	
    <pre><h10> ระหว่าง  25.0-29.9            อ้วนโรคอ้วนระดับ 1</h10></pre>	
    <pre><h10> มากกว่า 30.0                 อ้วนมากโรคอ้วนระดับ 2 </h10></pre><hr>";
     //-----------------------------------------------------------------------------//
    echo "<h1> Body Mass Index </h1> 
    <h3><pre>     BodyMassIndex หรือ ดัชนีมวลกาย เป็นค่าที่ได้จากน้ำหนักและส่วนสูง 
โดยการนำค่าน้ำหนักหน่วยเป็นกิโลกรัมหารด้วยส่วนสูงเป็นเมตรยกกำลังสอง 
kg/m<sup>2</sup> ค่า BMT เป็นค่าที่ใช้วัดปริมาณมวลเนื้อเยื่อกล้ามเนื้อ ไขมัน กระดูก 
ในตัวบุคคล เพื่อจำแนกบุคคลนั้นว่ามีน้ำหนักต่ำกว่าเกณฑ์ น้ำหนักตามเกณฑ์ 
หรือ น้ำหนักเกินเกณฑ์ หรือ ไม่ โดยองค์การอนามัยโลก  หรือ  WHO
WorldHealthOrganization ได้เป็นผู้กำหนดค่ามาตรฐานBMI สำหรับผู้ที่มี
อายุตั้งแต่ 20 ปีขึ้นไป เพื่อใช้เป็นดัชนีชี้วัดปริมาณไขมันในร่างกายเพื่อระบุถึง
ความเสี่ยงต่อการเป็นโรคอ้วนหรือผอมจนเกินไปตามหลักข้างบนข้างต้น</pre></h3>";
  }// End isset

}else{
  echo "ไม่มีข้อมูล !";
}

?>

</div>

<div class="piccontent">
<img src="allimg/B.jpg" width="885" height="870">
<img src="allimg/fat.jpg" width="885" height="289">
</div>

<img src="allimg/pikul.jpg" width="1503" height="1503">


</body>
</html>