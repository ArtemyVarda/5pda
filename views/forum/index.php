<?php
/** @var $sections */
?>
<div class="forum_Head">
    <h2 class="title">Всего разделов сейчас: <?= count($sections) ?></h2>
    <?php if (!Yii::$app->user->isGuest): ?>
        <a href="/forum/create-section" class="btn">Создать новый раздел Макака</a>
    <?php endif; ?>
</div>
<div class="forum_sections">
    <?php if ($sections): ?>
        <?php foreach ($sections as $section): ?>
            <a href="/forum/subsections?id=<?= $section->id ?>" class="forum-section">
                <h3><?= $section->title ?></h3>
                <span><?= $section->description ?></span>
            </a>
        <?php endforeach; ?>
    <?php else: ?>
        <div>Здесь пока пусто</div>
    <?php endif; ?>
</div>
