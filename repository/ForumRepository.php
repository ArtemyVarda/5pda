<?php

namespace app\repository;

use app\entity\Sections;

class ForumRepository
{
    public static function getSections(): array
    {
        return Sections::find()->all();
    }

    public static function createSection($title, $desc)
    {
        $srction = new Sections();
        $srction->title = $title;
        $srction->description = $desc;
        $srction->save();
        return $srction->id;
    }

}