

<div class="view">
    
    <?php
    //$company = Company::model()->findByAttributes(array('company_id'=>$cid));
    //$s = Student::model()->findByAttributes(array('user_id'=>$uid));
   
    ?>
    Ο χρήστης <?php echo $data->company->brand . ' ' . ' ' . 'δημοσίευσε' . ' στις ' . ($data->created); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
    <?php echo CHtml::encode($data->title); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
    <?php echo CHtml::encode($data->description); ?>
    <br />

    <?php echo CHtml::link('περισσότερα', array('viewInternshipPosition', 'id' => $data->id)); ?>


</div>
<?php
    