<head>

   <style type="text/css" >
    
    body{
        
        position: absolute; 
        left:8%;
        top:10%;
        }

    </style>

   <title>MENUM</title>
</head>

<body style = "background-color :#B0B0B0 ;">
  <div align='center'>  <img src = "https://miro.medium.com/max/1418/1*X8xob2f3dwAmB8k6JXIN3Q.jpeg" width="800" height="300" > </div>
    
</body>

<body>


<div align="center"> <h1>ŞİKAYET FORMU</h1> </div>
<p align="center">Aşağıda belirtilen formu eksiksiz doldurunuz.En kısa zamanda geri dönüş yapalım</p>

</body>

<?php

use yii\helpers\Html;

use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model kouosl\projemodulu\models\SikayetTablosu */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'SikayetTablosus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sikayet-tablosu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>



</div>


