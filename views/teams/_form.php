<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Teams */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teams-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'club_id')->textInput() ?>

    <?= $form->field($model, 'season')->textInput(['maxlength' => 4]) ?>

    <?= $form->field($model, 'short')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'year')->textInput(['maxlength' => 4]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
