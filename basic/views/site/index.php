<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

  <link href="../css/Style.css" rel="stylesheet" />

<div class="site-index">

<div id="myCarousel" class="carousel slide" data-ride="carousel" style="border-bottom:5px solid #7A0000; margin-top: -1px;">  
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" >
    <div class="item active">
      <img style="width: 100%;" src="../Images/slider1.jpg" alt="Slider Image"/>
    </div>
      

    <div class="item">
      <img style="width: 100%;" src="../Images/slider2.jpg" alt="Slider Image"/>
    </div>
      

    <div class="item">
      <img style="width: 100%;" src="../Images/slider3.jpg" alt="Slider Image"/>
    </div>
      
    <div class="item">
      <img style="width: 100%;" src="../Images/slider4.jpg" alt="Slider Image"/>
    </div>
      
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

   
<h2 class="firstHeading container-fluid" style="width: 80%; margin-top: 80px; font-size: 35px;">CAR LIST</h2>


    <div class="row" style="margin-left: 150px !important; margin-right: 150px !important;">
      
<?php
foreach($model as $rec){
  $name=$rec->Name;
  $image=$rec->Car_Image;
  $price=$rec->Price_Per_Day;
  $number=$rec->Car_Number;
echo "


<div class='col-lg-4' >
<form method='get' action='/carrentals/basic/web/index.php'>

<div class='panel-group'>
<div class='panel panel-success'>
<div class='panel-heading'>
$name <h5>Car Code:$number</h5> <h5>Price:&nbsp$price</h5>
</div>
<div class='panel-body' style='height: 184px;padding: 0px !important;'>
<img src='http://localhost/carrentals/basic/Images/$image'/ height='100%' width='100%' >
</div>
<div class='panel-footer'>

 <input class='btn btn-danger center-block' type='submit'>
</form>
</div>


</div>
 </div>

</div>

";
}
?>
</div>
    </div>             












<div>


<!-- 
<script type="text/javascript">

var container = document.getElementById("wrapper");
var array1 = ["car1","car2","car3","car1","car2","car3"];
for( i=0; i<array1.length; i++){
 container.insertAdjacentHTML('beforeend', '<h1 style="font-size:100px;padding: 50px;display: inline; ">'+array1[i]+'</h1>');}
</script>




<!- <div class="container">

<div style="margin: 70px 36px;position:relative;" id="wrapper"></div>
<script>
var container = document.getElementById("wrapper");
var array = ["../Images/stu_14.png","../Images/stu_16.png","../Images/stu_15.png","../Images/stu_17.png","../Images/stu_21.png", "../Images/stu_20.png", "../Images/stu_18.png", "../Images/stu_19.png","../Images/stu_14.png"];
// var array1 = ["syed","zohaib","ali","alvi","syed","zohaib","ali","alvi"]
for( i=0; i<array.length; i++){
  container.insertAdjacentHTML('beforeend', '<a href="<?= Url::to(['bookcar/createuser']) ?>"><img src="'+array[i]+'" alt="Images" style="border:2px solid #7A0000;padding: 20px;"></a>');
}



</script>

</div> -->
 -->

</div>
</head>
<body>
 <!-- <div id="wrapper"></div> -->

</div>
</div>
