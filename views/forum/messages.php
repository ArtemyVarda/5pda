<?php
/**
 * @var $messages
 * @var $topicAuthor
 * @var $model
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div>
    <div class="topic_title">
        <?= $this->title ?> <br>
        <?= 'Автор:' . $topicAuthor ?>
    </div>

    <div class="messages">
        <?php foreach ($messages as $message): ?>
            <div class="message">
                <?= $message->date ?>
                <h3><?= $message->user->login ?></h3>
                <span><?= $message->text ?></span>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="messages__wrapper">
        <?php $msg = ActiveForm::begin() ?>

        <?= $msg->field($model, 'text')->textarea(['placeholder' => 'Ваше сообщение', 'value' => '']) ?>

        <?= Html::submitButton('🐵🦄', ['class' => 'msgBtn', 'disabled' => Yii::$app->user->isGuest]) ?>
        <?php ActiveForm::end() ?>
    </div>
</div>
