<?php 
    use yii\grid\GridView
?>

<?=
    GridView::Widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'kode_mk',
            'nama_mk',
            
        ]
    ])
?>
