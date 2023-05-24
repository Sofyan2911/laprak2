<?php

namespace app\controllers;
use app\models\Mahasiswa024;
use yii\data\ActiveDataProvider;

class Mahasiswa024Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Mahasiswa024::find()
        ]);
        return $this->render('index', [
        'dataProvider' => $dataProvider
    
        ]);
    
    }

}

