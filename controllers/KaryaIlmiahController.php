<?php

namespace app\controllers;
use app\models\Karyailmiah;
use yii\data\ActiveDataProvider;

class KaryailmiahController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Karyailmiah::find();
        $dataProvider = new ActiveDataProvider(['query' => $query]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionTambah()
    {
        $Karyailmiah = new Karyailmiah;
        $Karyailmiah->judul = 'Ayu';
        $Karyailmiah->deskripsi = 'Penelitian';
        $Karyailmiah->jumlah_download = '100';
        if ($Karyailmiah->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Karyailmiah->getErrors());
            die();
        }
    }

    public function actionUpdate($id)
    {
        $Karyailmiah = Karyailmiah::findOne($id);
        $Karyailmiah->judul = 'Bahasa';
        if ($Karyailmiah->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Karyailmiah->getErrors());
            die();
        }
    }

    public function actionDelete($id)
    {
        $Karyailmiah = Karyailmiah::findOne($id);
        if ($Karyailmiah->delete()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($Karyailmiah->getErrors());
            die();
        }

    }
}
