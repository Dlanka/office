<?php

class Recruitment2Controller extends Controller
{

    public function actionIndex()
    {

        $this->render('panel');
    }
    public function actionJd()
    {

        $this->render('jd/index');
    }
    public function actionInterview()
    {

        $this->render('interview');
    }
    public function actionTestResult()
    {

        $this->render('inteviewTestResult');
    }
    public function actionInterviewQuetions()
    {

        $this->render('interviewQuetions');
    }
    public function actionCvConflict()
    {

        $this->render('cvConflict');
    }

    public function actionOnboarding()
    {

        $this->render('onboarding');
    }

    public function actionRequisition()
    {

        $this->render('index');
    }

    public function actionScreening2()
    {

        $this->render('screening2');
    }

    public function actionScreening()
    {
        $advertisement = RecruitementAdvertisement::model()->findAll();
        $this->render('screening', array("advertisement" => $advertisement));
    }

    public function actionShortListing()
    {

        $this->render('shortListing');
    }

    public function actionInterviewing()
    {

        $this->render('interviewing');
    }

    public function actionHoliday()
    {

        $this->render('calender/holiday');
    }

    public function actionMonth()
    {

        $this->render('calender/month');
    }

    public function actionDay()
    {

        $this->render('calender/day');
    }

    public function actionCVBank()
    {

        $this->render('cvbank');
    }

    public function actionWebapp()
    {
        $advertisement = RecruitementAdvertisement::model()->findAllByAttributes(array('publish' => 1));
        $this->render('webapp', array('advertisement' => $advertisement));
    }

    public function actionWebappForm($id)
    {
//        $advertisementID = $_GET['ad_id'];
        $advertisementID = $id;
        $this->render('webAppForm', array('advertisementID' => $advertisementID));
    }

    public function actionCreateAdd()
    {

        $this->render('advertiesment');
    }

    public function actionSummary()
    {

        $this->render('interviewSummery');
    }

    public function actionInterviewRegistration()
    {

        $this->render('interviewRegistaion');
    }

    public function actionJobOffer()
    {
        $this->render('jobOffer');
    }


    public function actionCreateTemplate()
    {
        $template = new RecruitementTemplate();
        $savedTemplate = RecruitementTemplate::model()->findAll();
        $this->render('template', array("template" => $template, "savedTemplate" => $savedTemplate));
    }

    public function actionShowSavedTemplates()
    {
        $template = RecruitementTemplate::model()->findAll();
        $this->renderPartial('viewDataTemplates', array("template" => $template));
    }

    public function actionsaveTemplate()
    {
        $template = new RecruitementTemplate();
        $template->job_title = $_POST['RecruitementTemplate']['job_title'];
        $template->advertisement_title = $_POST['RecruitementTemplate']['advertisement_title'];
        $template->branch_id = $_POST['RecruitementTemplate']['branch_id'];
        $template->job_role = $_POST['RecruitementTemplate']['job_role'];
        $template->requirement_experience = $_POST['RecruitementTemplate']['requirement_experience'];
        if ($template->save(false)) {
            echo Common::jsonSuccess(Common::get("success_msg_add"));
        }
    }

    public function actionEditTemplate()
    {
        $id = $_POST['template_id'];
        $template = RecruitementTemplate::model()->findByPk($id);
        $this->renderPartial('editTemplate', array("template" => $template));
    }

    public function actionUpdateTemplate()
    {
        $template = new RecruitementTemplate();
        $template = RecruitementTemplate::model()->findByPk($_POST['RecruitementTemplate']['id']);
        $template->job_title = $_POST['RecruitementTemplate']['job_title'];
        $template->advertisement_title = $_POST['RecruitementTemplate']['advertisement_title'];
        $template->branch_id = $_POST['RecruitementTemplate']['branch_id'];
        $template->job_role = $_POST['RecruitementTemplate']['job_role'];
        $template->requirement_experience = $_POST['RecruitementTemplate']['requirement_experience'];
        if ($template->save(false)) {
            echo Common::jsonSuccess(Common::get("success_msg_edit"));
        }
    }

    public function actionDeleteTemplate()
    {
        $id = $_POST['template_id'];
        $template = RecruitementTemplate::model()->deleteByPk(array('id' => $id));
        echo Common::jsonSuccess(Common::get("success_msg_delete"));

    }

    public function actiongetTemplate()
    {
        $id = $_POST['template_id'];
        $fullTemplateInfo = RecruitementTemplate::model()->findByPk($id);
        $this->renderPartial('showTemplateInfo', array("fullTemplateInfo" => $fullTemplateInfo));
    }

    public function actionsaveAdvertisement()
    {
        $advertisement = new RecruitementAdvertisement();
        $advertisement->template_id = $_POST['template_id'];
        $advertisement->publish_date = $_POST['publishDate'];
        $advertisement->expire_date = $_POST['expireDate'];
        $advertisement->ref_no = $_POST['ref_no'];
        if ($advertisement->save(false)) {
            //$insert_id = Yii::app()->db->getLastInsertID();
            $insert_id = $advertisement->primaryKey;
            echo Common::jsonSuccess(array('msg' => "success_msg_add", 'insert_id' => $insert_id));
        }
    }

    public function actiongetQuestions()
    {
        $advertisement_id = $_POST['template_id'];
        $questions = ScreeningCriteria::model()->findAll();
        $this->renderPartial('showQuestionInfo', array("questions" => $questions, "advertisement_id" => $advertisement_id));
    }

    public function actiongetTemplatePublishData()
    {
        $id = $_POST['template_id'];
        $templatePublishInfo = RecruitementAdvertisement::model()->findByAttributes(array('template_id' => $id));
        if (count($templatePublishInfo) > 0) {
            $this->renderPartial('templatePublishInfoUpdate', array("templatePublishInfo" => $templatePublishInfo));
        } else {
            $this->renderPartial('templatePublishInfo');
        }

    }

    public function actionShowSavedAdvertisements()
    {
        $advertisement = RecruitementAdvertisement::model()->findAll();
        $this->renderPartial('showAdvertisementInfo', array("advertisement" => $advertisement));
    }

    public function actionSaveAdvertisementQuestions()
    {
        $questions = $_POST['questions'];
        $arr = explode(",", $questions);
        //print_r($arr);die();
        $i = 0;
        while ($i < count($arr)) {
            $RecruitementAdvertisementQuestions = new RecruitementAdvertisementQuestions();
            $RecruitementAdvertisementQuestions->advertisement_id = $_POST['advertisement_id'];
            $RecruitementAdvertisementQuestions->questions = $arr[$i];
            $RecruitementAdvertisementQuestions->save();
            $i = $i + 1;
        }
        Common::jsonSuccess(Common::get("success_msg_add"));

    }

    public function actionPublishAdvertisement()
    {
        $res = RecruitementAdvertisement::model()->updateAll(array('publish' => 1), 'id = ' . Yii::app()->request->getPost('id') . '');
        Common::jsonSuccess(Common::get("success_msg_edit"));
    }

    public function actionHoldAdvertisement()
    {
        $res = RecruitementAdvertisement::model()->updateAll(array('publish' => 2), 'id = ' . Yii::app()->request->getPost('id') . '');
        Common::jsonSuccess(Common::get("success_msg_edit"));
    }

    public function actionRejectAdvertisement()
    {
        $res = RecruitementAdvertisement::model()->updateAll(array('publish' => 3), 'id = ' . Yii::app()->request->getPost('id') . '');
        Common::jsonSuccess(Common::get("success_msg_edit"));
    }

    public function actionApplyForJob()
    {
        $cvname = $_FILES['user_cv']['name'];
        $ad_id = $_POST['ad_id'];
        $Path = YiiBase::getPathOfAlias("webroot");
        $uploads_directory = $Path . '/CVData/';
        $rnd = rand(0, 9999);
        $filename = 'CV' . $rnd . '-' . basename($_FILES['user_cv']['name']);
        $RecruitementCv = new RecruitementCv();
        $RecruitementCv->fname = $_POST['fname'];
        $RecruitementCv->lname = $_POST['lname'];
        $RecruitementCv->email = $_POST['email'];
        $RecruitementCv->phone = $_POST['phone'];
        $RecruitementCv->optional_phone = $_POST['phoneOptional'];
        $RecruitementCv->nic_no = $_POST['nic'];
        $RecruitementCv->advertise_id = $_POST['ad_id'];
        $RecruitementCv->cv_data = $_FILES['user_cv']['name'];
        $RecruitementCv->cv_name = $filename;
        //echo $filename;die();
        if ($RecruitementCv->save(false)) {
            $inserted_id = $RecruitementCv->primaryKey;
            move_uploaded_file($_FILES['user_cv']['tmp_name'], $uploads_directory . $filename);
            echo Common::jsonSuccess(array('msg' => "success_msg_add", 'inserted_id' => $inserted_id, 'ad_id' => $ad_id));
        }
    }

    public function actionGetAppliedCVs()
    {
        $RecruitementCv = RecruitementCv::model()->findAll();
        $this->renderPartial('viewDataCVs', array("RecruitementCv" => $RecruitementCv));
    }

    public function actionDownloadCV($id)
    {
        $cv = RecruitementCv::model()->findByPk($id);
        $temp_arr = explode(".", $cv->cv_name);
        $endchar = $temp_arr[count($temp_arr) - 1];
        $path = 'CVData/' . $cv->cv_name;
        if ($endchar == 'jpg') {
            header('Content-Type: image/jpeg');
            header('Content-Disposition: attachment;filename="' . $cv->cv_name . '"');
        }
        if ($endchar == 'png') {
            header('Content-Type: image/jpeg');
            header('Content-Disposition: attachment;filename="' . $cv->cv_name . '"');
        }
        if ($endchar == 'gif') {
            header('Content-Type: image/jpeg');
            header('Content-Disposition: attachment;filename="' . $cv->cv_name . '"');
        } else {

            header('Content-Disposition: attachment;filename="' . $cv->cv_name . '"');
        }


        $fp = fopen($path, 'r');
        fpassthru($fp);
        fclose($fp);

        $fp = fopen($tmpfile, "w");
        fwrite($fp, $image);
    }

    public function actionGetAdvertisementQuestions()
    {
        $ad_id = $_POST['ad_id'];
        $user_id = $_POST['user_id'];
        $questions = RecruitementAdvertisementQuestions::model()->findAllByAttributes(array('advertisement_id' => $ad_id));
        $this->renderPartial('jobApplyQuestions', array("questions" => $questions, "user_id" => $user_id, "ad_id" => $ad_id));
    }

    public function actionSaveAnswer()
    {
        $RecruitementCvAnswers = new RecruitementCvAnswers();
        $RecruitementCvAnswers->user_id = $_POST['user_id'];
        $RecruitementCvAnswers->advertisement_id = $_POST['ad_id'];
        $RecruitementCvAnswers->question_id = $_POST['ques_id'];
        $RecruitementCvAnswers->answer_id = $_POST['ans'];
        if ($RecruitementCvAnswers->save(false)) {
            Common::jsonSuccess(Common::get("success_msg_add"));
        }
    }

    public function actionGetScreeningInformation()
    {
        $ad_id = $_POST['advertise_id'];
        $RecruitementAdvertisementQuestions = RecruitementAdvertisementQuestions::model()->findAllByAttributes(array('advertisement_id' => $ad_id));
        $this->renderPartial('screeningQuestions', array("RecruitementAdvertisementQuestions" => $RecruitementAdvertisementQuestions, "ad_id" => $ad_id));
    }

    public function actionGetApplicantsInformation()
    {
        $ad_id = $_POST['advertise_id'];
        $RecruitementAdvertisementApplicants = RecruitementCv::model()->findAllByAttributes(array('advertise_id' => $ad_id));
        $this->renderPartial('screeningApplicants', array("RecruitementAdvertisementApplicants" => $RecruitementAdvertisementApplicants));
    }

    public function actionFilterApplicantsInformation()
    {
        $ad_id = $_POST['advertise_id'];
        $questions = $_POST['questions'];
        $answers = $_POST['answers'];
        $questionArr = explode(",", $questions);
        $answerArr = explode(",", $answers);
        $filterArray = array();
        $i = 0;
        while ($i < count($questionArr)) {
//            $RecruitementAdvertisementApplicants = Yii::app()->db->createCommand()
//                //->select('user_id')
//                ->selectDistinct('user_id,advertisement_id')
//                ->from('recruitement_cv_answers')
//                ->group('user_id')
//                ->where('advertisement_id = :advertisement_id AND question_id = :question_id AND answer_id = :answer_id', array(':advertisement_id' => $ad_id, ':question_id' => $questionArr[$i], ':answer_id' => $answerArr[$i]))
//                ->queryAll();
            $RecruitementAdvertisementApplicants = Yii::app()->db->createCommand('SELECT DISTINCT rca.user_id AS user_id FROM recruitement_cv_answers rca
                                                                                  WHERE rca.advertisement_id ="' . $ad_id . '"  AND rca.question_id ="' . $questionArr[$i] . '" AND rca.answer_id = "' . $answerArr[$i] . '";')->queryAll();
//            $filterArray = implode(",",$RecruitementAdvertisementApplicants);
            array_push($filterArray, $RecruitementAdvertisementApplicants);
            $i = $i + 1;
        }
//        $newFilterArray = array_unique($filterArray);
        print_r($filterArray);
        //print_r($filterArray); echo "count is : ".count($filterArray);die();
        $this->renderPartial('filterApplicants', array("filterArray" => $filterArray, "newFilterArray" => $newFilterArray));
    }

    public function actionWeek()
    {
        $this->render('calender/week');
    }

    public function actionSalaryAnalyzer()
    {
        $this->render('//payroll/salaryPaymentAnalyzer');
    }

    public function actionGetTransferData()
    {
        $empid = $_POST['emp'];
        $acno = $_POST['ac'];
        $bankname = $_POST['nam'];
        $amt = $_POST['amt'];
        $retid = $_POST['ret'];
        $headersBank = Yii::app()->db->createCommand('SELECT banks.nam AS bankNames, MAX(banks.num) AS accCount FROM(
                                                                                            SELECT DISTINCT bank_name AS nam, COUNT(bank_acc_no) AS num
                                                                                              FROM prl_salary_bank_data
                                                                                             GROUP BY bank_name, ref_retrieve_id) AS banks
                                                                                              GROUP BY banks.nam;')->queryAll();
        $this->renderPartial('//payroll/salaryPaymentTransferInfo', array('empid' => $empid, 'acno' => $acno, 'bankname' => $bankname, 'amt' => $amt, 'retid' => $retid, 'headersBank' => $headersBank));
    }

    public function actionEditLoanData(){
        $loan_id = $_POST['loan_id'];
        $loan = Loan::model()->findByPk($loan_id);
        $ConfigLoan = ConfigLoan::model()->findByPk($loan->ref_loan_type);
        $this->renderPartial('//payroll/editLoanData',array('loan'=>$loan,'ConfigLoan'=>$ConfigLoan));
    }

    public function actionUpdateEmpLoanData(){
        $loan = Loan::model()->findByPk($_POST['Loan']['ln_id']);
        $amount = $loan->ln_amount = $_POST['ln_amount'];
        $interest = $loan->ln_interest = $_POST['ln_interest'];
        $installmentCount = $loan->ln_no_of_instalments = $_POST['ln_no_of_instalments'];
        $installmentAmountPerMonth = $amount / $installmentCount;
        $installAmount = ($amount * ($interest / 100) * ($installmentCount / 12)) + $installmentAmountPerMonth;
        if (isset($_POST['Loan'])) {
            $loan->ref_emp_id = $_POST['Loan']['ref_emp_id'];
            $loan->loan_type_des = $_POST['loan_type_des'];
            $loan->ref_loan_type = $_POST['Loan']['ref_loan_type'];
            $loan->ln_amount = $_POST['ln_amount'];
            $loan->ln_interest = $_POST['ln_interest'];
            $loan->ln_no_of_instalments = $_POST['ln_no_of_instalments'];
            $loan->ln_installment_amount = $installAmount;
            $loan->ln_issued_status = 0;
            $loan->save();
            Common::jsonSuccess(Common::get("success_msg_edit"));
        }
    }

}
