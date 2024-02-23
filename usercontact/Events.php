<?php

namespace  ricit\humhub\modules\usercontact;

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
            'label' => 'usercontact',
            'icon' => '<i class="fa fa-comment"></i>',
            'url' => Url::to(['/usercontact/index']),
            'sortOrder' => 1000,
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'usercontact' && Yii::$app->controller->id == 'index'),
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
            'label' => 'usercontact',
            'url' => Url::to(['/usercontact/admin']),
            'group' => 'manage',
            'icon' => '<i class="fa fa-comment"></i>',
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'usercontact' && Yii::$app->controller->id == 'admin'),
            'sortOrder' => 1000,
        ]);
    }
}
