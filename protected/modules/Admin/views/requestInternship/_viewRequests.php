<?php
/* @var $this RequestInternshipController */
/* @var $data RequestInternship */
?>

<?php
            if ($data->is_in==0){
                
            
            ?>

<div class="view">

    
    
    <b><?php echo CHtml::encode($data->users->getAttributeLabel('aem')); ?>:</b>
    <?php echo CHtml::encode($data->users->aem); ?>
    <br />
    
    <b><?php echo CHtml::encode(('Όνοματεπώνυμο')); ?>:</b>
    <?php echo CHtml::encode($data->getBothnamesurname()); ?>
    <br />
    
    <b><?php echo CHtml::encode($data->getAttributeLabel('department_id')); ?>:</b>
    <?php echo CHtml::encode($data->departments->name); ?>
    <br />
    
    
    <b><?php echo('Αξιολόγηση: ');?></b> <?php echo(RequestInternship::algorithm($data->id));?> <br>
    

_________________________________________________________________________________________
<br />

<?php echo "οι αιτήσεις των φοιτητών με σειρά προτεραιότητας" ?>
    <br/>
    <?php
    $r = RequestInternship::model()->findAllByAttributes(array('status'=>0,'student_id'=>$data->id));

    foreach ($r as $i) {
        ?>
        
            
            
    <b><?php echo ('Τίτλος Θέσης: ');?></b><?php echo CHtml::link($i->title1 , array('internshipPosition/view', 'id'=>$i->internship_position_id,'status'=>3));?> <b> <?php echo('με προτεραιότητα ');?></b><?php echo($i->order);  ?>
            
            <?php echo CHtml::link('εμφάνιση αίτησης' , array('view', 'id'=>$i->id));?>

            <br/>
            <?php }
    ?>

</div>
<?php
}
?>