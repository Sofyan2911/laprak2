<?php

namespace app\controllers;
use app\models\Profil024;
use yii\data\ActiveDataProvider;

class Profil024Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Profil024::find()
        ]);
        return $this->render('index', [
        'dataProvider' => $dataProvider
    
        ]);
    
    }

}

