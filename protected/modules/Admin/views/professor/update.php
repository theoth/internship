<?php
/* @var $this ProfessorController */
/* @var $model Professor */

$this->breadcrumbs=array(
	'Professors'=>array('index'),
	$model->professor_id=>array('view','id'=>$model->professor_id),
	'Update',
);

$this->menu=array(
	array('label'=>'Πίσω στους καθηγητές', 'url'=>array('index')),
	array('label'=>'Δημιουργία νέου καθηγητή', 'url'=>array('create')),
	array('label'=>'Εμφάνιση καθηγητή', 'url'=>array('view', 'id'=>$model->professor_id)),
	array('label'=>'Αναζήτηση καθηγητών', 'url'=>array('admin')),
);
?>

<h1>Επεξεργασία καθηγητή |<?php echo $model->professor_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>