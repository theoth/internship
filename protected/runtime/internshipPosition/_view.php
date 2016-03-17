<?php
/* @var $this InternshipPositionController */
/* @var $data InternshipPosition */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_start')); ?>:</b>
	<?php echo CHtml::encode($data->date_start); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_end')); ?>:</b>
	<?php echo CHtml::encode($data->date_end); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grade')); ?>:</b>
	<?php echo CHtml::encode($data->grade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_id')); ?>:</b>
	<?php echo CHtml::encode($data->company_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('professor_id')); ?>:</b>
	<?php echo CHtml::encode($data->professor_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('student_id')); ?>:</b>
	<?php echo CHtml::encode($data->student_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('file_student_reference_name')); ?>:</b>
	<?php echo CHtml::encode($data->file_student_reference_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_submit_student')); ?>:</b>
	<?php echo CHtml::encode($data->status_submit_student); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_company_name')); ?>:</b>
	<?php echo CHtml::encode($data->file_company_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_submit_company')); ?>:</b>
	<?php echo CHtml::encode($data->status_submit_company); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_submit_professor')); ?>:</b>
	<?php echo CHtml::encode($data->status_submit_professor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('published')); ?>:</b>
	<?php echo CHtml::encode($data->published); ?>
	<br />

	*/ ?>

</div>