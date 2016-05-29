<?php
/* @var $this ProfessorController */
/* @var $model Professor */

$this->breadcrumbs = array(
    'Professors' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'Πίσω στους καθηγητές', 'url' => array('index')),
    array('label' => 'Δημιουργία νέου καθηγητή', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#professor-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Αναζήτηση καθηγητών</h1>


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
    'id' => 'professor-grid',
    'dataProvider' => $model->searchByDepartment($did),
    'filter' => $model,
    'columns' => array(
        'user.last_name',
        'user.first_name',
        'id',
        'user_id',
        'department_id',
        array(
            'class' => 'booster.widgets.TbButtonColumn',
        ),
    ),
));
?>
