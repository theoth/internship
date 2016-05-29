<?php
/* @var $this QuestionnaireStudentController */
/* @var $model QuestionnaireStudent */

$this->breadcrumbs = array(
    'Questionnaire Students' => array('index'),
    $model->id,
);

$in = InternshipPosition::model()->findByAttributes(array('questionnaire_student_id' => $model->id));
$this->menu = array(
    //array('label'=>'List QuestionnaireStudent', 'url'=>array('index')),
    //array('label'=>'Πίσω στην θέση μου', 'url'=>array('internshipPosition/myindex')),
    array('label' => 'Ενημέρωση', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Διαγραφή', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Πίσω', 'url' => array('internshipPosition/view', 'id' => $in->id)),
);
?>

<h1> Ερωτηματαλόγιο Φοιτητή</h1>

<?php
if ($model->in1 != NULL) {
    ?>

    <?php
    $ansLigoPoly = utils::ligoPoly();
    $ansNaiOxi = utils::naiOxi();
    $texts = $model->AttributeLabels();
    $this->widget('booster.widgets.TbDetailView', array(
        'data' => $model,
        'attributes' => array(
            array('label' => $texts['in1'], 'value' => $ansLigoPoly[$model->in1]),
            array('label' => $texts['in2'], 'value' => $ansLigoPoly[$model->in2]),
            array('label' => $texts['in3'], 'value' => $ansLigoPoly[$model->in3]),
            array('label' => $texts['in4'], 'value' => $ansLigoPoly[$model->in4]),
            array('label' => $texts['in5'], 'value' => $ansLigoPoly[$model->in5]),
            array('label' => $texts['in6'], 'value' => $ansLigoPoly[$model->in6]),
            array('label' => $texts['in7'], 'value' => $ansLigoPoly[$model->in7]),
            array('label' => $texts['in8'], 'value' => $ansLigoPoly[$model->in8]),
            array('label' => $texts['in9'], 'value' => $ansLigoPoly[$model->in9]),
            array('label' => $texts['in10'], 'value' => $ansLigoPoly[$model->in10]),
            array('label' => $texts['in11'], 'value' => $ansLigoPoly[$model->in11]),
            array('label' => $texts['in12'], 'value' => $ansLigoPoly[$model->in12]),
            array('label' => $texts['in13'], 'value' => $ansLigoPoly[$model->in13]),
            array('label' => $texts['in14'], 'value' => $ansLigoPoly[$model->in14]),
            array('label' => $texts['in15'], 'value' => $ansLigoPoly[$model->in15]),
            array('label' => $texts['in16'], 'value' => $ansLigoPoly[$model->in16]),
            array('label' => $texts['in17'], 'value' => $ansLigoPoly[$model->in17]),
            array('label' => $texts['in18'], 'value' => $ansLigoPoly[$model->in18]),
            array('label' => $texts['in19'], 'value' => $ansLigoPoly[$model->in19]),
            array('label' => $texts['in20'], 'value' => $ansNaiOxi[$model->in20]),
            'in21',
            'in22',
            'in23',
            'comments',
        ),
    ));
} else {
    echo'Δεν έχει συμπληρωθεί ακόμα.';
}
?>
