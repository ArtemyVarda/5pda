<?php
/** @var $model */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<?php
$file = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']])
?>
<?= $file->field($model, 'file')->fileInput(['multiple' => true]) ?>
<?= Html::submitButton("загрузить") ?>
<?php
ActiveForm::end()
?>