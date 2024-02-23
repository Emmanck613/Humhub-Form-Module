<?php

use ricit\humhub\modules\userform\Events;
use humhub\modules\admin\widgets\AdminMenu;
use humhub\widgets\TopMenu;

return [
	'id' => 'userform',
	'class' => 'ricit\humhub\modules\userform\Module',
	'namespace' => 'ricit\humhub\modules\userform',
	'events' => [
		[
			'class' => TopMenu::class,
			'event' => TopMenu::EVENT_INIT,
			'callback' => [Events::class, 'onTopMenuInit'],
		],
		[
			'class' => AdminMenu::class,
			'event' => AdminMenu::EVENT_INIT,
			'callback' => [Events::class, 'onAdminMenuInit']
		],
	],
];
