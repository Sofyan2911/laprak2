<?php 
    use yii\grid\GridView
?>

<?=
    GridView::Widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'nim',
            'nama',
            'kelas',
        ]
    ])
?>

