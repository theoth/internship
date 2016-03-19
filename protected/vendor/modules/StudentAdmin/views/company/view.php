<?php
/* @var $this CompanyController */
/* @var $model Company */

$this->breadcrumbs=array(
	'Companies'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'πίσω', 'url'=>array('InternshipPosition/index')),
	
);
?>

<h1>Εταιρεία | <?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'brand',
		'description',
		
	),
)); ?>
