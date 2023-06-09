<?php

namespace app\controllers;

use app\models\Mahasiswa087;
use yii\data\ActiveDataProvider;

class MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa087::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider 
        ]);    
    }
}
?>