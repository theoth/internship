<?php
/* @var $this InternshipPositionController */
/* @var $model InternshipPosition */

$this->breadcrumbs=array(
	'Internship Positions'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Θέσεις πρακτικής άσκησης', 'url'=>array('index')),
	array('label'=>'Δημιουργία νέας θέσης', 'url'=>array('create')),
	array('label'=>'Εμφάνιση θέσης', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Διαχείριση θέσεων', 'url'=>array('admin')),
);
?>

<h1>Επεξεργασία θέσης με id: <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>