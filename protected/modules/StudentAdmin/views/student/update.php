<?php
/* @var $this StudentController */
/* @var $model Student */


$this->breadcrumbs = array(
    'Students' => array('index'),
    $model->student_id => array('view', 'id' => $model->student_id),
    'Update',
);


$this->menu = array(
    //array('label' => 'Φοιτητές', 'url' => array('index')),
    //array('label' => 'Δημιουργία νέου φοιτητή', 'url' => array('create')),
    //array('label' => 'Εμφάνιση φοιτητή', 'url' => array('view', 'id' => $model->student_id)),
    //array('label' => 'Διαχείριση φοιτητών', 'url' => array('admin')),
);
?>

<h1>Υποβολή στοιχείων βαθμολογίας</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>