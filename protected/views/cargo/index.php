<?php
/* @var $this CargoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cargos',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' Cargo', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' Cargo', 'url'=>array('admin')),
);
?>

<h1>Cargos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
