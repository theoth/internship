<?php
/* @var $this RequestInternshipController */
/* @var $data RequestInternship */
?>

<div class="view">

    
    
    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::encode($data->id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
    <?php echo CHtml::link($data->title,array('RequestInternship/viewInternshipPosition','id'=>$data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
    <?php echo CHtml::encode($data->description); ?>
    <br />

-------------------------------------------------------------------------------------
<br />

<?php echo "Φοιτητές οι οποία την αιτήθηκαν βάση προτεραιότητας" ?>
    <br/>
    <?php
    $r = $data->requestInternships;
    foreach ($r as $i) {
        ?>
        
            
            <?php
            if ($i->student->is_in==0){
                
            
            ?>
            <?php echo CHtml::link($i->student->getBothnamesurname() , array('Student/view', 'id'=>$i->student_id)) . '   με προτεραιότητα   ' . $i->order; ?>
            
            <?php echo CHtml::link('εμφάνιση αίτησης' , array('view', 'id'=>$i->id));?>

            <br/>
            <?php }}
    ?>

</div>