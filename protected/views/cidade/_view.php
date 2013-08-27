<?php
/* @var $this CidadeController */
/* @var $data Cidade */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUf')); ?>:</b>
	<?php echo CHtml::encode($data->idUf0->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codIBGE')); ?>:</b>
	<?php echo CHtml::encode($data->codIBGE); ?>
	<br />


</div>
