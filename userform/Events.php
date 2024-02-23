<?php

namespace  ricit\humhub\modules\userform;

use Yii;
use yii\helpers\Url;

class Events
{
    /**
     * Defines what to do when the top menu is initialized.
     *
     * @param $event
     */
    public static function onTopMenuInit($event)
    {
        $event->sender->addItem([
            'label' => 'Userform',
            'icon' => '<i class="fa fa-comment"></i>',
            'url' => Url::to(['/userform/index']),
            'sortOrder' => 1000,
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'userform' && Yii::$app->controller->id == 'index'),
        ]);
    }

    /**
     * Defines what to do if admin menu is initialized.
     *
     * @param $event
     */
    public static function onAdminMenuInit($event)
    {
        $event->sender->addItem([
            'label' => 'Userform',
            'url' => Url::to(['/userform/admin']),
            'group' => 'manage',
            'icon' => '<i class="fa fa-comment"></i>',
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'userform' && Yii::$app->controller->id == 'admin'),
            'sortOrder' => 1000,
        ]);
    }
}
