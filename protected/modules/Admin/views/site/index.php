
<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
$Companies = Users::model()->findAllByAttributes(array('activated'=>0,'type'=>2));
//var_dump($Companies);die();
$in=InternshipPosition::model()->findAllByAttributes(array('status'=>0,'published'=>0));
?>

<h1>Τελευταίες αναρτήσεις</h1>

<div id="listPosition">
<?php
$this->widget('booster.widgets.TbListView', array(
    'ajaxUpdate' => false,
    'dataProvider' => $dataProvider,
    'itemView' => '_viewInternshipPosition',
    'template' => "{items}\n{pager}",
    
));
?>
</div>








 

<div id="rectangle">
    
    <?php
//var_dump(!empty($Companies));   
if (!empty($Companies)){
    //echo "Υπάρχουν αιτήσεις από εταιρείες";
    echo Chtml::link('Νέες αιτήσεις από εταιρείες',array('company/viewRequests')); 
}
else{
    echo ("Δεν υπάρχουν νέες αιτήσεις από εταιρείες.");
}
?>
    <br>
    
    
    <?php
    if (!empty($in)){
    //echo "Υπάρχουν αιτήσεις από εταιρείες";
    echo Chtml::link('Νέες θέσεις από εταιρείες',array('internshipPosition/viewNewPositions')); 
}
else{
    echo ("Δεν υπάρχουν νέες θέσεις από εταιρείες.");
}
    
    
    ?>
   
</div>