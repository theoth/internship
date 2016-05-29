<?php
/* @var $this InternshipPositionController */
/* @var $model InternshipPosition */

$this->breadcrumbs = array(
    'Internship Positions' => array('index'),
    $model->title,
);

$this->menu = array(
    array('label' => 'Πίσω στις θέσεις πρακτικής άσκησης', 'url' => array('index')),
    array('label' => 'Δημιουργία νέας θέσης', 'url' => array('create')),
    array('label' => 'Επεξεργασία θέσης', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Διαγραφή θέσης', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Ερωτηματολόγιο Φοιτητή', 'url' => array('questionnaireStudent/view', 'id' => $model->questionnaire_student_id)),
    array('label' => 'Ερωτηματολόγιο Καθηγητή', 'url' => array('questionnaireProfessor/view', 'id' => $model->questionnaire_professor_id)),
    array('label' => 'Ερωτηματολόγιο Εταιρείας', 'url' => array('questionnaireCompany/view', 'id' => $model->questionnaire_company_id)),
    array('label' => 'Αναζήτηση θέσεων', 'url' => array('admin')),
    array('label' => 'Βιβλίο Φοιτητή | Προβολή εκτύπωσης', 'url' => array('StudentBook','id'=>$model->id),'linkOptions'=>array('target'=>'_blank')),
    array('label' => 'Βιβλίο Καθηγητή | Προβολή εκτύπωσης', 'url' => array('ProfessorBook','id'=>$model->id),'linkOptions'=>array('target'=>'_blank')),
    array('label' => 'Βιβλίο Εταιρείας | Προβολή εκτύπωσης', 'url' => array('CompanyBook','id'=>$model->id),'linkOptions'=>array('target'=>'_blank')),
);
?>

<h1>Εμφάνιση θέσης | <?php echo $model->id; ?></h1>

<?php
$this->widget('booster.widgets.TbDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'published',
        'title',
        'date_start',
        'date_end',
        'deadline',
        'description',
        'department_id',
        'company_id',
        'company.brand',
        'professor_id',
        'professor.user.first_name',
        'professor.user.last_name',
        'student_id',
        'student.users.first_name',
        'student.users.last_name',
        'status_submit_student',
        'status_submit_company',
        'status_submit_professor',
        'status',
        'grade',
    ),
));
?>
<?php
if ($model->status == 1) {
    $month;
    echo CHtml::link('1ος μήνας', array('InternshipPosition/view', 'id' => $model->id, 'month' => 1));
    ?>


    <?php
    if ($month == 1) {

        echo str_repeat('&nbsp;', 160);
        echo CHtml::link('κλείσιμο', array('InternshipPosition/view', 'id' => $model->id, 'month' => 0));


        $this->widget('booster.widgets.TbDetailView', array(
            'data' => $model,
            'attributes' => array(
                'st_absence1',
                'st_text1',
                'st_notes1',
                'co_absence1',
                'co_text1',
                'co_notes1',
            ),
        ));
    }


    echo '<br/>';
    echo CHtml::link('2ος μήνας', array('InternshipPosition/view', 'id' => $model->id, 'month' => 2));

    if ($month == 2) {

        echo str_repeat('&nbsp;', 160);
        echo CHtml::link('κλείσιμο', array('InternshipPosition/view', 'id' => $model->id, 'month' => 0));


        $this->widget('booster.widgets.TbDetailView', array(
            'data' => $model,
            'attributes' => array(
                'st_absence2',
                'st_text2',
                'st_notes2',
                'co_absence2',
                'co_text2',
                'co_notes2',
            ),
        ));
    }


    echo '<br/>';
    echo CHtml::link('3ος μήνας', array('InternshipPosition/view', 'id' => $model->id, 'month' => 3));


    if ($month == 3) {
//str_repeat('&nbsp;', 5);
        echo str_repeat('&nbsp;', 160);
        echo CHtml::link('κλείσιμο', array('InternshipPosition/view', 'id' => $model->id, 'month' => 0));


        $this->widget('booster.widgets.TbDetailView', array(
            'data' => $model,
            'attributes' => array(
                'st_absence3',
                'st_text3',
                'st_notes3',
                'co_absence3',
                'co_text3',
                'co_notes3',
                'co_final_text',
                'co_final_notes',
                'prof_final_text',
            ),
        ));
    }
}
?>
