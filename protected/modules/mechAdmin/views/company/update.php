<?php
/* @var $this CompanyController */
/* @var $model Company */

$this->breadcrumbs=array(
	'Companies'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Εταιρείες', 'url'=>array('index')),
	array('label'=>'Δημιουργία νέας εταιρείας', 'url'=>array('create')),
	array('label'=>'Εμφάνιση εταιρείας', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Διαχείριση εταιρειών', 'url'=>array('admin')),
);
?>

<h1>Επεξεργασία εταιρείας με id: <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>