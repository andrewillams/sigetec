<?php
/* @var $this SetorController */
/* @var $data Setor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idSetor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idSetor), array('view', 'id'=>$data->idSetor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sigla')); ?>:</b>
	<?php echo CHtml::encode($data->sigla); ?>
	<br />


</div>