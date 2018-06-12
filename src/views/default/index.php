<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use yozh\widget\widgets\Modal;
use yozh\widget\widgets\ActiveButton;

include '_header.php';

$columns = $model->attributeIndexList();

array_push( $columns, [
		'class'          => 'yii\grid\ActionColumn',
		'header'         => 'Actions',
		'contentOptions' => [ 'class' => 'actions' ],
		'template'       => '{update}{view}{delete}',
		'buttons'        => [
			
			/*
			'update' => function( $url, $model ) {
				return Html::a( '<span class="glyphicon glyphicon-pencil"></span>', $url, [
					'title' => Yii::t( 'app', 'Update' ),
				] );
			},
			
			'delete' => function( $url, $model ) {
				return Html::a( '<span class="glyphicon glyphicon-trash"></span>', $url, [
					'title'       => Yii::t( 'app', 'Delete' ),
					'data-method' => 'post',
				] );
			},
		
				*/
		],
		
		/*
		'urlCreator' => function( $action, $model, $key, $index ) {
			
			$classname = strtolower( ( new\ReflectionObject( $model ) )->getShortName() );
			
			return Url::to( "/$classname/{$model->id}/$action" );
		}
		*/
	]

);

?>

<?= $this->render( '_search', $_params_ ); ?>

<div class="<?= "$modelId-$actionId" ?>">

    <h1><?= Html::encode( $this->title ) ?></h1>

    <p>
		<?= Html::a( Yii::t( 'app', 'Create'), [ 'create' ], [ 'class' => 'btn btn-success' ] ) ?>
    </p>
	
    <?php Pjax::begin(); ?>
	
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
	
	<?= GridView::widget( [
		'dataProvider' => $dataProvider,
		//'filterModel' => $searchModel,
		'tableOptions' => [
			'class' => 'table table-striped table-hover',
		],
		
		'columns' => $columns,
		
		/*
		'columns' => [
				
				'id',
				'title',
				'rate',
				
				['class' => 'yii\grid\ActionColumn']
		],
		*/
	
	] ); ?>
 
	<?php Pjax::end(); ?>
 
</div>

<?= Modal::widget( [
	'id' => Modal::PLUGIN_ID,
] ) ?>

<?php $this->registerJs( $this->render( '_js.php', [ 'section' => 'modal' ] ), $this::POS_END ); ?>
