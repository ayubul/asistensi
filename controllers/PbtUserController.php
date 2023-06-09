<?php

namespace app\controllers;

use app\models\PbtUser;
use yii\data\ActiveDataProvider;

class PbtUserController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = PbtUser::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider 
        ]);    
    }
}
?>
