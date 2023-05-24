<?php

namespace app\controllers;
use app\models\Matakuliah;
use yii\data\ActiveDataProvider;

class DaftarMatakuliahController extends \yii\web\Controller
{
    public function actionIndex()
    {
        // memanggil view 'index'
        $query = matakuliah::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}
