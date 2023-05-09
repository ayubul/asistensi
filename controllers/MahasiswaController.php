<?php

namespace app\controllers;

class MahasiswaController extends \yii\web\Controller
{
    public function actionProfil()
    {
        return $this->render('profil');
    }
    public function actionDetail($id)
    {
        return "<h1>ini hasilnya</h1>";
    }


}
