<?php
/* @var $this RequestInternshipController */
/* @var $model RequestInternship */

$this->breadcrumbs=array(
	'Οι αιτήσεις μου'=>array('index'),
	$model->id,
);

$this->menu=array(
	//array('label'=>'List RequestInternship', 'url'=>array('index')),
	//array('label'=>'Create RequestInternship', 'url'=>array('create')),
	//array('label'=>'Update RequestInternship', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete RequestInternship', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage RequestInternship', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->title1 ?></h1>

<?php $this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
            'order',
		
		
		'date_request',
		
		'title1',
		'code1',
		
	),
)); 

echo CHtml::link('εμφάνιση', array('InternshipPosition/view', 'id'=>$model->code1)); 
?>

