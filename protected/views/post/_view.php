<?php
/* @var $this PostController */
/* @var $data Post */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conteudo')); ?>:</b>
	<?php echo CHtml::encode($data->conteudo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('administrador_id')); ?>:</b>
	<?php echo CHtml::encode($data->author->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categoria_id')); ?>:</b>
	<?php echo CHtml::encode($data->Categoria->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_time')); ?>:</b>
	<?php echo CHtml::encode($data->created_time); ?>
	<br />


</div>
