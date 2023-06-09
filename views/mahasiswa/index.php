<?php
    use yii\grid\GridView;
    use yii\helpers\Html;
?>

    <p>
        <?=Html::button('Mahasiswa Baru', ['class'=>'btn btn-primary']) ?>
    </p>
<?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns'=> [
            'profil087.id',
            'id',
            'nim',
            'nama',
            'kelas',
            'jurusan',
            'profil087.foto_profil',
        [
            'class'=> 'yii\grid\ActionColumn',
            'template'=>'{view} {update} {delete}',
        ],
        ],
    ])
?>    

