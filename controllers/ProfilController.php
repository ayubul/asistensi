<?php

namespace app\controllers;
use app\controllers;
use yii\data\ActiveDataProvider;

class ProfilController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' =>Profil087::find()
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}
