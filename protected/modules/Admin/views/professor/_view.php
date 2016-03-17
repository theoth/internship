<?php
/* @var $this ProfessorController */
/* @var $data Professor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode($data->id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />
        
        <?php //var_dump($data->attributes); ?>
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('user.first_name')); ?>:</b>
	<?php echo CHtml::encode($data->user->first_name); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('user.last_name')); ?>:</b>
	<?php echo CHtml::encode($data->user->last_name); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('department')); ?>:</b>
	<?php echo CHtml::encode($data->department); ?>
	<br />
        <?php echo CHtml::link('εμφάνιση καθηγητή', array('view', 'id'=>$data->id)); ?>



</div>