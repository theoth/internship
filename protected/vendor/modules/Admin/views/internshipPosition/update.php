<?php
/* @var $this InternshipPositionController */
/* @var $model InternshipPosition */

$this->breadcrumbs=array(
	'Internship Positions'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Πίσω στις θέσεις πρακτικής άσκησης', 'url'=>array('index')),
	array('label'=>'Δημιουργία νέας θέσης', 'url'=>array('create')),
	array('label'=>'Εμφάνιση θέσης', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Αναζήτηση θέσεων', 'url'=>array('admin')),
);
?>

<h1>Επεξεργασία θέσης | <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>