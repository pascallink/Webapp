<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Contacts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contacts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'fullname')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'mail')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'session')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'pw')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'authKey')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'accessToken')->textInput(['maxlength' => 50]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
