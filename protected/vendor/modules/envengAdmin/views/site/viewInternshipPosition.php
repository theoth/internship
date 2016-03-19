<?php
/* @var $this ErgoController */
/* @var $model Ergo */

$this->breadcrumbs = array(
    'Τελευταίες δημοσιεύσεις' => array('index'),
    $model->title,
);
?>
<h1><?php echo $model->title; ?></h1>

<?php
$this->widget('booster.widgets.TbDetailView', array(
    'data' => $model,
    'attributes' => array(
        'title',
       'id',
	
		'description',
		
		
       
    ),
));


$criteria = new CDbCriteria;
//$criteria->compare('ergo_id', $model->id);


?>
