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
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'nama_user',
            'Password',
            'nama_lengkap',
        [
            'class'=> 'yii\grid\ActionColumn',
            'template'=>'{view} {update} {delete}',
        ],
        ],
    ])
?>    

