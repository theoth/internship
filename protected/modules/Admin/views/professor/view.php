<?php
/* @var $this ProfessorController */
/* @var $model Professor */

$this->breadcrumbs = array(
    'Professors' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'Πίσω στους καθηγητές', 'url' => array('viewRequests')),
    array('label' => 'Δημιουργία νέου καθηγητή', 'url' => array('create')),
    array('label' => 'Επεξεργασία καθηγητή', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Διαγραφή καθηγητή', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Αναζήτηση καθηγητών', 'url' => array('admin')),
);
?>

<h1> Εμφάνιση καθηγητή |<?php echo $model->id; ?></h1>
<?php //var_dump($model->attributes); ?>
<?php
$this->widget('booster.widgets.TbDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'user_id',
        'department',
        'user.username',
        'user.password',
        'user.first_name',
        'user.last_name',
        'user.email',
        'user.telephone',
        'user.academicid',
        'user.department',
        'user.activated',

    ),
));
?>
