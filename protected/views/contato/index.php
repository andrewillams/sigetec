<?php
/* @var $this ContatoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Contatos',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' Contato', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' Contato', 'url'=>array('admin')),
);
?>

<h1>Contatos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
