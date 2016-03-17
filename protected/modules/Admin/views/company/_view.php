<?php
/* @var $this CompanyController */
/* @var $data Company */
?>
<?php 
    $u=Users::model()->findByPk($data->user_id);
    if ($u->activated==1) {
    ?>


<div class="view">

    
    
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode($data->id); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('brand')); ?>:</b>
	<?php echo CHtml::encode($data->brand); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	
        <?php echo CHtml::link('εμφάνιση εταιρείας', array('view', 'id'=>$data->id)); ?>

    

</div>

<?php } ?>