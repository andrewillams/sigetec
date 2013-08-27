<?php
/* @var $this CidadeController */
/* @var $model Cidade */

$this->breadcrumbs=array(
	'Cidades'=>array('index'),
	'Nova',
);

$this->menu=array(
	array('label'=>'Listar Cidades',    'url'=>array('index')),
	array('label'=>'Gerenciar Cidades', 'url'=>array('admin')),
);
?>

<h1>Nova Cidade</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>