<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>

<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- jQuery library -->
 <!--    // <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script> -->

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- CSS LINK -->
    <link href="../css/Style.css" rel="stylesheet" />


   
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
   
<?php $this->beginBody() ?>
   <div class="container-fluid top-bar" style="width:100%" >
 
    <div class="container">
        <div class="row">
            <div class="col-md-4">
      <a style="text-decoration:none" href="<?= Url::to(['site/index']) ?>"><img style="margin-top: -7px;width: 327px;" src="../Images/car_logo.png" class="img-responsive"/>
            <h1 style="color: white;font-size: 38px;margin-top: -29px;margin-left: 7px;">CAR RENTALS<span style="font-size:20px">.com</span></h1>
              </a>
            </div>
            <div class="col-md-4">
              
            </div>
            <div class="col-md-4 pull-right">
            <!--   <h3 class="pull-right" style="color:white; color:white;margin-top: 48px;">A-207 Shhreh-faisal,karachi</h2>
              <h3 class="pull-right" style="color:white; color:white;">CarRentals@gmail.com</h2> -->
              <h5 class="pull-right" style="color:white; margin-top: 21px;">
                <span style="font-size:15px">   <i class="fa fa-location-arrow" style="margin-right:20px" aria-hidden="true"></i>Road, Gulshan-e-Iqbal 13A</span>
              <br><a href="mailto:Carrentals@gmail.com" style="font-size:15px; color: white;"> <i class="fa fa-envelope-o" style="margin-right:17px" aria-hidden="true"></i>Carrentals@gmail.com </a>
              <br><a href="callto:+923008557698"style="color:white;"><i class="fa fa-phone" style="margin-right:22px" aria-hidden="true"></i>Call Us: +92 300 855 7698</a></h5>
            </div>
</div>
  </div>
  </div>

  

<div class="wrap">

    <?php
    NavBar::begin([
              'brandUrl' => Yii::$app->homeUrl,
              'options' => [
              'class' => 'nav_bar_color navbar-inverse navbar-fixed-top ',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => [
            [     
                'label' => 'HOME', 
                'url' => ['/site/index'],
                'linkOptions' => [],

            ],
            


            [
                  'label' => 'ABOUT US',
                   'url' => ['/site/about'],
             
                  
            ],
             [
                     'label' => 'CONTACT US', 
                     'url' => ['/site/contact']
            ],
             [      'label' => 'BOOK A CAR',
                    'url' => ['bookcar/createuser'],
                   
                  ],

////////////ADMINISTRATION************************/////////////////////////////

[
            'label' => 'ADMINISTRATION',
            'items' => [
             [
                      'label' => 'Add New Car', 
                      'url' => ['register-car/create']
             ],

                 '<li class="divider" style="height: 2px ;margin: 11px 0 ;background-color: #7A0000 ;"></li>',
               // '<li class="dropdown-header">Dropdown Header</li>',
               [
                      'label' => 'Booked Car', 
                      'url' => ['bookcar/create']
             ],

              
             // [ 
             //       'label' => 'Level 1 - Dropdown B',
             //        'url' => ['/site/about']
             //  ],
             ],
              'visible' => !Yii::$app->user->isGuest

        ],


        [
            'label' => 'REPORTS',
            'items' => [
             [
                      'label' => 'Car Reports', 
                      'url' => ['register-car/index']
             ],

             '<li class="divider" style="height: 2px ;margin: 11px 0 ;background-color: #7A0000 ;"></li>',
               [
                      'label' => 'Booking Reports', 
                      'url' => ['bookcar/index']
             ],
             ],
              'visible' => !Yii::$app->user->isGuest

        ],


///////////////////////////////////////////////////////////////////////////////////
            Yii::$app->user->isGuest ? (
                ['label' => 'LOGIN', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'LOGOUT (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout ']
                )
                . Html::endForm()
                . '</li>'
            )




        ],
    ]);
    NavBar::end();
    ?>

    <div class="container" style="position: relative; top: 147px;">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
       
    </div>


<div class="container-fluid" style="position: relative; top: 147px;" >

 <?= $content ?>
</div>


</div>




                   <!-- MAP and Footer-->

<div class="map-responsive">
<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d70855.59632105487!2d67.02419452666875!3d24.93626979694747!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1493468883409" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
            <a href="#Back_TO_Top">
    <div class="center-block square">
      <i class="fa fa-chevron-up fa-2x upbtn" aria-hidden="true"></i>

    </div>
    </a>
        <div class="footer1">
           <div class="social">
                
                     <a href="#Back_TO_Top" style="color:white;"><i class="fa fa-facebook fa-2x fbhover" style="width:40px; height:30px; border-radius:4px;" aria-hidden="true"></i></a>
                &nbsp;&nbsp;<a href="#" style="color:white;"> <i class="fa fa-instagram fa-2x instahover" style="width:40px; height:30px; border-radius:4px;" aria-hidden="true"></i></a>
              &nbsp;&nbsp;&nbsp;&nbsp; <a href="#" style="color:white;"><i class="fa fa-google-plus fa-2x googlehover" style="width:40px; height:30px; border-radius:4px;" aria-hidden="true"></i></a>
                 &nbsp;&nbsp;&nbsp;&nbsp;<a href="#" style="color:white;"><i class="fa fa-linkedin fa-2x linkedinhover" style="width:40px; height:30px; border-radius:4px;" aria-hidden="true"></i></a>
              &nbsp;&nbsp;&nbsp; <a href="#" style="color:white;"><i class="fa fa-twitter fa-2x twitterhover" style="width:40px; height:30px; border-radius:4px;" aria-hidden="true"></i></a>
              

                    
               </div>
</div>


         <div class="footer2">
    
              <p style="text-align:center;font-size:small;color:white; position: relative;top: -20px;">
                     
                 
                   &copy;2017 Rent a Car. All Rights Reserved.
              </p>
       
                

         </div>
    

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
