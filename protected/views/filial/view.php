<?php
/* @var $this FilialController */
/* @var $model Filial */

$this->breadcrumbs=array(
	'Filials'=>array('index'),
	$model->idFilial,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Filial', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Filial', 'url'=>array('create')),
	array('label'=>Yii::t('app','Update').' Filial', 'url'=>array('update', 'id'=>$model->idFilial)),
	array('label'=>Yii::t('app','Delete').' Filial', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idFilial),'confirm'=>Yii::t('app','Are you sure you want to delete this item?'))),
	array('label'=>Yii::t('app','Manage').' Filial', 'url'=>array('admin')),
);
?>

<h1>Exibir <?php echo $model->nome.' - '.$model->cnpj; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nome',
		'cnpj',
		'inscEstadual',
		array(
			'name'=>'cep',
			'value'=>$model->idEndereco0->cep,
		),
		array(
			'name'=>'logradouro',
			'value'=>$model->idEndereco0->logradouro,
		),
		array(
			'name'=>'numero',
			'value'=>$model->idEndereco0->numero,
		),
		array(
			'name'=>'bairro',
			'value'=>$model->idEndereco0->bairro,
		),
		array(
			'name'=>'cidade',
			'value'=>$model->idEndereco0->idCidade0->nome.'-'.$model->idEndereco0->idCidade0->idUf0->sigla,
		),
		array(
			'name'=>'complemento',
			'value'=>$model->idEndereco0->complemento,
		),
		array(
			'name'=>'fixo',
			'value'=>$model->idContato0->fixo,
		),
		array(
			'name'=>'celular',
			'value'=>$model->idContato0->celular,
		),
		array(
			'name'=>'facebook',
			'value'=>$model->idContato0->facebook,
		),
		array(
			'name'=>'twitter',
			'value'=>$model->idContato0->twitter,
		),
		array(
			'name'=>'skype',
			'value'=>$model->idContato0->skype,
		),
	),
)); ?>
