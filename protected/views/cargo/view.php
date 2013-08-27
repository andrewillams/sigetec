<?php
/* @var $this CargoController */
/* @var $model Cargo */

$this->breadcrumbs=array(
	'Cargos'=>array('index'),
	$model->idCargo,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Cargo', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Cargo', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update').' Cargo', 'url'=>array('update', 'id'=>$model->idCargo)),
	array('label'=>Yii::t('app','Delete').' Cargo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idCargo),'confirm'=>Yii::t('app','Are you sure you want to delete this item?'))),
	array('label'=>Yii::t('app','Manage').' Cargo', 'url'=>array('admin')),
);
?>

<h1>Exibir Cargo #<?php echo $model->idCargo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idCargo',
		'idSetor',
		'nome',
		'idCargoSuperior',
	),
)); ?>
