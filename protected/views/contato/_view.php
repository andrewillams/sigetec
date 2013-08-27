<?php
/* @var $this ContatoController */
/* @var $data Contato */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idContato')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idContato), array('view', 'id'=>$data->idContato)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fixo')); ?>:</b>
	<?php echo CHtml::encode($data->fixo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('celular')); ?>:</b>
	<?php echo CHtml::encode($data->celular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('skype')); ?>:</b>
	<?php echo CHtml::encode($data->skype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('facebook')); ?>:</b>
	<?php echo CHtml::encode($data->facebook); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('twitter')); ?>:</b>
	<?php echo CHtml::encode($data->twitter); ?>
	<br />


</div>