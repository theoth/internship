<?php
/* @var $this CompanyController */
/* @var $model Company */

$this->breadcrumbs=array(
	'Companies'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Εταιρείες', 'url'=>array('index')),
	array('label'=>'Δημιουργία νέας εταιρείας', 'url'=>array('create')),
	array('label'=>'Επεξεργασία εταιρείας', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Διαγραφή εταιρείας', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Διαχείριση εταιρειών', 'url'=>array('admin')),
);
?>

<h1>Εμφάνιση εταιρεία με id: <?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'brand',
		'description',
		'user_id',
	),
)); ?>
