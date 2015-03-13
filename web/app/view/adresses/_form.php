<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Adresses */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="adresses-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'street')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'plz')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'nr')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'country')->textInput() ?>

    <?= $form->field($model, 'object')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
