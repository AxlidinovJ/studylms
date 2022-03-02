<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CoursesCategory */

$this->title = 'Create Courses Category';
$this->params['breadcrumbs'][] = ['label' => 'Courses Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-success box-body">

<div class="courses-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>