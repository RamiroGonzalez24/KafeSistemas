<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\EntryForm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="entry-form-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'dni')->textInput(['type' => 'number']) ?>

    <?= $form->field($model, 'friend')->widget(Select2::classname(), [
                        'data' => $listFriends,
                        'options' => ['placeholder' => Yii::t('app', 'Selecciona si tiene algun amigo registrado ') . '...'],
                        'pluginOptions' => [
                        'allowClear' => true,
                        ],
                    ])
   ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
