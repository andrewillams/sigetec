<?php
/* @var $this FilialController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Filiais',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' Filial', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' Filial', 'url'=>array('admin')),
);
?>

<h1>Filiais</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
