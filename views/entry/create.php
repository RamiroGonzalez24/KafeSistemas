<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntryForm */

$this->title = 'Formulario';
$this->params['breadcrumbs'][] = ['label' => 'Registros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entry-form-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'listFriends' => $listFriends
    ]) ?>

</div>
