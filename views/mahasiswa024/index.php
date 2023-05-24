<?php

use app\models\Mahasiswa024;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

?>
<div class="mahasiswa024-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::button('Tambah Mahasiswa', ['class' => 'btn btn-primary']) ?>
    </p>

    <?php 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'Id',
            'Nim',
            'Nama',
            'Kelas',
            //'Jurusan',
            'profil024.Foto_profil',

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Mahasiswa024 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Id' => $model->Id]);
                }
            ],
        ],
    ]); ?>

</div>



