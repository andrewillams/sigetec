<?php
/* @var $this CidadeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cidades',
);

$this->menu=array(
	array('label'=>'Nova Cidade', 'url'=>array('create')),
	array('label'=>'Gerenciar Cidades', 'url'=>array('admin')),
);
?>

<h1>Cidades</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
