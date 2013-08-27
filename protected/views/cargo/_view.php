<?php
/* @var $this CargoController */
/* @var $data Cargo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCargo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idCargo), array('view', 'id'=>$data->idCargo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idSetor')); ?>:</b>
	<?php echo CHtml::encode($data->idSetor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCargoSuperior')); ?>:</b>
	<?php echo CHtml::encode($data->idCargoSuperior); ?>
	<br />


</div>