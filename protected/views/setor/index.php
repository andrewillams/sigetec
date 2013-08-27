<?php
/* @var $this SetorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Setors',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' Setor', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' Setor', 'url'=>array('admin')),
);
?>

<h1>Setors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
