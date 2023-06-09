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
            'id' ,
            'id_mahasiswa' => 'Id Mahasiswa',
            'foto_profil' => 'Foto Profil',
        ],
    ])
?>    

