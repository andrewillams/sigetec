<?php
/* @var $this FuncionarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Funcionarios',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' Funcionario', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' Funcionario', 'url'=>array('admin')),
);
?>

<h1>Funcionarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
