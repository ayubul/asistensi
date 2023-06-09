<?php

namespace app\controllers;

use app\models\Mahasiswa087;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use Yii;

class Mahasiswa087Controller extends \yii\web\Controller
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
    
        public function actionCreate()
        {
            $mahasiswa087 = new Mahasiswa087;
            $mahasiswa087->no_induk_mahasiswa = '60200121087-'.rand(10,99);
            $mahasiswa087->nama_mahasiswa = 'Ayu Aziza Feriana';
            $mahasiswa087->kelas ='D';
            $mahasiswa087->status ='Baru';
            if ($mahasiswa087->save()) {
                Yii::$app->session->setFlash('success', 'Data Tersimpan');
                return $this->redirect(['index']);
            }
        }
        public function actionUpdate($id)
        {
            $mahasiswa087 = mahasiswa087::findOne(['id' => $id]);
            if($mahasiswa087 !== null){
                $mahasiswa087->kelas = 'A';
                $mahasiswa087->status = 'Update';
                $mahasiswa087->save();
                Yii::$app->session->setFlash('success', 'Data Terupdate');
            }
            return $this->redirect(['index']);
        }
    
        public function actionDelete($id)
        {
            $mahasiswa049 = Mahasiswa087::findOne($id);
            if ($mahasiswa087->delete()) {
            return $this->redirect(['index']);
            }
        }
        public function actionView($id){
            $mahasiswa087 = mahasiswa087::findOne($id);
            return $this->render('view', ['mahasiswa087' => $mahasiswa087]);
        }   
}
