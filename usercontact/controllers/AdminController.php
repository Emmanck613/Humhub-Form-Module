<?php

namespace ricit\humhub\modules\usercontact\controllers;
include "protected\modules\usercontact\models\Forms.php";

use humhub\modules\admin\components\Controller;
use humhub\modules\usercontact\models\Forms;
use Yii;
use yii\data\ActiveDataProvider;


class AdminController extends Controller
{
    /**
     * Render admin only page
     *
     * @return string
     */
    public function actionIndex()
    {
        $query = Forms::find();
        
        $provider = new ActiveDataProvider([
            'query' => $query,

            'pagination' => [
               'pageSize' => 15,
            ],

            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_ASC, 
                ]
            ],
        ]);
        
        // returns an array of Post objects
        return $this->render('index', [
            'dataProvider' => $provider,
         ]);
    }

}

