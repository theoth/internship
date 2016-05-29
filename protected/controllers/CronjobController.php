<?php

/*
 * 1. epanalamvanomenes theseis
 * 2. 1os minas - apostoli mails , apostoli sms
 * 3. 2os minas - apostoli mails , apostoli sms
 * 4. 3os minas - apostoli mails , apostoli sms
 * 5. deadline gia praktiki
 * 
 * 
 */

class CronjobController extends Controller {

    public function actionIndex() {

        $time = time();

        $month_current = date('n');
        $year_current = date('Y');

        $date_current = date('Y-m-d');
        

        echo('I am in cronjob!');


        $allInternshipPositions = InternshipPosition::model()->findAllByAttributes(array('status' => 1));

        foreach ($allInternshipPositions as $i) {

            $month = date('n', strtotime($i->date_start));
            $year = date('Y', strtotime($i->date_start));
            //$deadline = date('Y-m-d', strtotime($i->date_end . '+ 10 days'));
            $department = Department::model()->findByPk($i->department_id);
            $student = Student::model()->findByPk($i->student_id);
            $company = Company::model()->findByPk($i->company_id);
            $professor = Professor::model()->findByPk($i->professor_id);
            echo($i->deadline);
            if ($date_current > $i->deadline) {
                echo'111';
                $this->end_internship($i->id);
            }

            for ($c = 1; $c <= $department->period; $c++) {



                if ($month_current >= $month + $c && $year_current == $year && $i->status_sent == $c - 1) {

                    $body = 'Αγαπητέ/Αγαπητή' . $student->users->first_name . ' ' . $student->users->last_name . ',' . "\n" . 'Σας ενημερώνουμε πως άνοιξε ο ' . $c . 'ος μήνας, συνεπώς πρέπει να υποβάλλετε την σχετική φόρμα.';
                    $this->SendStudentMail($i->student_id, $body, $i);
                    echo('mail sent to student' . $student->users->last_name . 'for ' . $c . 'month');

                    $body = 'Αγαπητέ/Αγαπητή' . $company->user->first_name . ' ' . $company->user->last_name . ',' . "\n" . ' Σας ενημερώνουμε πως άνοιξε ο ' . $c . 'ος μήνας, συνεπώς πρέπει να υποβάλλετε την σχετική φόρμα για τον φοιτητή' . $student->users->first_name . ' ' . $student->users->last_name;
                    $this->SendCompanyMail($i->company_id, $body, $i);
                    echo('mail sent to company' . $company->user->last_name . 'for ' . $c . 'month');

                    if ($i->status_sent == $department->period - 1) {
                        $body = 'Αγαπητέ/Αγαπητή' . $professor->user->first_name . ' ' . $professor->user->last_name . ',' . "\n" . ' Σας ενημερώνουμε πως άνοιξε ο ' . $c . 'ος μήνας, συνεπώς πρέπει να υποβάλλετε την σχετική φόρμα για τον φοιτητή' . $student->users->first_name . ' ' . $student->users->last_name;
                        $this->SendProfessorMail($i->professor_id, $body, $i);
                        echo('mail sent to professor' . $student->user->last_name . 'for ' . $c . 'month');
                    }
                    $i->status_sent = $c;
                    $i->save();
                }
            }
        }

        //------------epanalamvanomenes theseis---------------------
        $allInternshipPositions2 = InternshipPosition::model()->findAllByAttributes(array('status' => 2, 'repeated' => 1));

        foreach ($allInternshipPositions2 as $i) {
            if ($date_current <= $i->r_date_end) {
                $this->copyInternshipPosition($i);
            }
        }
    }

    public function copyInternshipPosition($in) {
        $model = new InternshipPosition;

        $model->created = date('Y-m-d h:i:s');
        $model->company_id = $in->company_id;
        $model->year = date('Y');
        $modelQuSt = new QuestionnaireStudent;
        $modelQuSt->save();
        $model->questionnaire_student_id = $modelQuSt->id;
        $modelQuPr = new QuestionnaireProfessor;
        $modelQuPr->save();
        $model->questionnaire_professor_id = $modelQuPr->id;
        $modelQuCo = new QuestionnaireCompany;
        $modelQuCo->save();
        $model->questionnaire_company_id = $modelQuCo->id;
        $model->published = 1;
        $model->title = $in->title;
        $model->save();
    }

    public function SendStudentMail($sid, $body, $in) {
        $student = Student::model()->findByPk($sid);
        $name = '=?UTF-8?B?' . base64_encode('Πλατφόρμα πρακτικής άσκησης') . '?=';
        $subject = '=?UTF-8?B?' . base64_encode($in->title . ' - Υποβολή στοιχείων') . '?=';
        $headers = "From: $name <{'e-position'}>\r\n" .
                "Reply-To: {'e-position@gmail.com'}\r\n" .
                "MIME-Version: 1.0\r\n" .
                "Content-Type: text/plain; charset=UTF-8";
        $email = $student->users->email;
        //mail($email, $subject, $body, $headers);

        if (!YII_DEBUG)
            mail($email, $subject, $body, $headers);
        else {
            var_dump($name);
            var_dump($subject);
            var_dump($headers);
            var_dump($body);
        }
    }

    public function SendProfessorMail($pid, $body, $in) {
        $professor = Professor::model()->findByPk($pid);
        $name = '=?UTF-8?B?' . base64_encode('Πλατφόρμα πρακτικής άσκησης') . '?=';
        $subject = '=?UTF-8?B?' . base64_encode($in->title . ' - Υποβολή στοιχείων') . '?=';
        $headers = "From: $name <{'e-position'}>\r\n" .
                "Reply-To: {'e-position@gmail.com'}\r\n" .
                "MIME-Version: 1.0\r\n" .
                "Content-Type: text/plain; charset=UTF-8";
        $email = $professor->user->email;
        //mail($email, $subject, $body, $headers);
        if (!YII_DEBUG)
            mail($email, $subject, $body, $headers);
        else {
            var_dump($name);
            var_dump($subject);
            var_dump($headers);
            var_dump($body);
        }
    }

    public function SendCompanyMail($cid, $body, $in) {
        $company = Company::model()->findByPk($cid);
        $name = '=?UTF-8?B?' . base64_encode('Πλατφόρμα πρακτικής άσκησης') . '?=';
        $subject = '=?UTF-8?B?' . base64_encode($in->title . ' - Υποβολή στοιχείων') . '?=';
        $headers = "From: $name <{'e-position'}>\r\n" .
                "Reply-To: {'e-position@gmail.com'}\r\n" .
                "MIME-Version: 1.0\r\n" .
                "Content-Type: text/plain; charset=UTF-8";
        $email = $company->user->email;
        //mail($email, $subject, $body, $headers);
        if (!YII_DEBUG)
            mail($email, $subject, $body, $headers);
        else {
            var_dump($name);
            var_dump($subject);
            var_dump($headers);
            var_dump($body);
        }
    }

    public function end_internship($id) {
        echo('eimai sto end_internship!');
        $model = $this->loadInternshipPositionModel($id);
        $model->status = 2;
        $model->save();
    }

    public function loadInternshipPositionModel($id) {
        $model = InternshipPosition::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');

        return $model;
    }

}
