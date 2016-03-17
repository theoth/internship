<?php
/* @var $this RequestInternshipController */
/* @var $model RequestInternship */

$this->breadcrumbs=array(
	'Request Internships'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Αιτήσεις φοιτητών', 'url'=>array('index')),
	array('label'=>'Δημιουργία νέας αίτησης', 'url'=>array('create')),
	array('label'=>'Εμφάνιση αίτησης', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Διαχείριση αιτήσεων', 'url'=>array('admin')),
);
?>

<h1>Επεξεργασία αίτησης με id: <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>