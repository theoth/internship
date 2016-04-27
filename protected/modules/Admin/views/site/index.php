
<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
$Companies = Users::model()->findAllByAttributes(array('activated'=>0,'type'=>2));
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

?>
   
</div>