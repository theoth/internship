<?php
/* @var $this InternshipPositionController */
/* @var $model InternshipPosition */

/*
$this->breadcrumbs = array(
    'Internship Positions' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'Πίσω στις θέσεις πρακτικής άσκησης', 'url' => array('index')),
    array('label' => 'Δημιουργία νέας θέσης', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#internship-position-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
 * 
 */
?>

<h1>Αναλυτική Κατάσταση</h1>


<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$user = Users::model()->findByPk(Yii::app()->user->id);
$d = Department::model()->findByAttributes(array('type_admin' => $user->type));
if ($d == NULL) {
    $did = NULL;
} else {
    $did = $d->id;
}
?>

<?php

$this->widget('booster.widgets.TbGridView', array(
    'id' => 'internship-position-grid',
    'template'=>'{items}',
    'enableSorting'=>false,
    'dataProvider' => $model->searchFromTo($did,$from,$to),
    'filter' => null,
    'columns' => array(
        'id',
        'atlas',
        'departments.name',
        'student.users.aem',
        'student.users.first_name',
        'student.users.last_name',
        'student.users.email',
        'student.users.telephone',
        'company.brand',
        'date_start',
        'date_end',
       
        
        /*
          'student_id',
          'status_submit_student',
          'status_submit_company',
          'status_submit_professor',
          'status',
          'title',
          'description',
          'published',
          'year',
          'st_absence1',
          'st_text1',
          'st_notes1',
          'st_text2',
          'st_notes2',
          'st_text3',
          'st_notes3',
          'st_absence2',
          'st_absence3',
          'st_final_text',
          'st_final_notes',
          'co_absence1',
          'co_absence2',
          'co_absence3',
          'co_text1',
          'co_notes1',
          'co_text2',
          'co_notes2',
          'co_text3',
          'co_notes3',
          'co_final_text',
          'co_final_notes',
          'prof_final_text',
         */
        
    ),
));
?>

