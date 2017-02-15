<?php
$companyData = Company::model()->findByPk(1);
//$ProcessedEmployees = Empbasic::model()->findAllByAttributes(array('is_salary_processed' => 1),
//array(
//    'limit' => 50  
//));  
//$ProcessedEmployees = Empbasic::model()->findAllByAttributes(array('is_salary_processed' => 1),
//array(
//    'limit' => 50
//)); 
//$ProcessedEmployees = Empbasic::model()->findByAttributes(array('emp_id' => 396));
//$ProcessedEmployees = Empbasic::model()->findAllByAttributes(array('is_salary_processed' => 1));
$processingyearandMonth = Attendance::getProcessingYearAndMonth();
$processingYear = $processingyearandMonth[0];
$processingMonth = $processingyearandMonth[1];
$processingHalf = $processingyearandMonth[2];
//$data = Variableallowance::model()->findByPk(7);

$empCnt = count($employees);
$cnt = 1;
foreach ($employees as $value) {
    $ProcessedAddorDedDataEPF = ProcessedSalaryAddDed::model()->findAllByAttributes(array('ref_emp_id' => $value->emp_id, 'sad_proc_year' => $processingYear, 'sad_proc_month' => $processingMonth, 'sad_proc_half' => $processingHalf, 'sad_epf_liable' => 1));
    $ProcessedAddorDedData = ProcessedSalaryAddDed::model()->findAllByAttributes(array('ref_emp_id' => $value->emp_id, 'sad_proc_year' => $processingYear, 'sad_proc_month' => $processingMonth, 'sad_proc_half' => $processingHalf, 'sad_epf_liable' => 0));
    $ProcessedBasicData = ProcessedSalaryBasicData::model()->findByAttributes(array('ref_emp_id' => $value->emp_id, 'psb_proc_year' => $processingYear, 'psb_proc_month' => $processingMonth, 'psb_proc_half' => $processingHalf));
//  $ProcessedSalaryAttendanceEPF = ProcessedSalaryAttendance::model()->findAllByAttributes(array('ref_emp_id' => $value->emp_id, 'sa_proc_year' => $processingYear, 'sa_proc_month' => $processingMonth,'sa_proc_half'=>$processingHalf,'sa_epf_liable'=>1 ));
//  $ProcessedSalaryAttendance = ProcessedSalaryAttendance::model()->findAllByAttributes(array('ref_emp_id' => $value->emp_id, 'sa_proc_year' => $processingYear, 'sa_proc_month' => $processingMonth,'sa_proc_half'=>$processingHalf,'sa_epf_liable'=>0 ));
    $modelEmployment = Employment::model()->findByAttributes(array('ref_emp_id' => array($value->emp_id)));
    $modelDesignation = Designation::model()->findByPk($modelEmployment->ref_desig_id);
    $modelEmpcat = Empcat::model()->findByPk($modelEmployment->ref_empcat_id);
    $modelDepartment = CompanyHierarchy::model()->findByPk($modelEmployment->emp_section_id);
    $modelBranch = Branch::model()->findByPk($modelEmployment->branch_id);
    $empBankInfo = Bankinfo::model()->findByAttributes(array('ref_emp_id' => $value->emp_id));


    $ProcessedSalaryAttendanceEPF = Yii::app()->db->createCommand()
            ->select('*, SUM(sa_amount) AS sum_of_type')
            ->from('processed_sal_attendance')
            ->group('sa_type')
            ->where('ref_emp_id = :ref_emp_id AND sa_proc_year = :sa_proc_year AND sa_proc_month = :sa_proc_month AND sa_proc_half = :sa_proc_half AND sa_epf_liable = :sa_epf_liable', array(':ref_emp_id' => $value->emp_id, ':sa_proc_year' => $processingYear, ':sa_proc_month' => $processingMonth, ':sa_proc_half' => $processingHalf, ':sa_epf_liable' => 1))
            ->queryAll();

    $ProcessedSalaryAttendance = Yii::app()->db->createCommand()
            ->select('*, SUM(sa_amount) AS sum_of_type')
            ->from('processed_sal_attendance')
            ->group('sa_premium')
            ->where('ref_emp_id = :ref_emp_id AND sa_proc_year = :sa_proc_year AND sa_proc_month = :sa_proc_month AND sa_proc_half = :sa_proc_half AND sa_epf_liable = :sa_epf_liable AND sa_type IN(4,5)', array(':ref_emp_id' => $value->emp_id, ':sa_proc_year' => $processingYear, ':sa_proc_month' => $processingMonth, ':sa_proc_half' => $processingHalf, ':sa_epf_liable' => 0))
            ->queryAll();
    ?>

    <page format="210x95" orientation="P" style="font: arial;">
        <div style="width:85mm; height:90mm; margin: 0; padding: 0;">

            <table cellspcing="0" cellpadding="0" border="0"
                   style=" width: 315px; font-family: Arial, Helvetica, sans-serif;">
                <tbody>

                    <!--Company Info-->

                    <tr>
                        <td style="width: 100%;">
                            <table cellspcing="0" cellpadding="0" border="0"
                                   style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                <tr>
                                    <td style="padding-top: 15px;text-align: center; width: 100%; font-size: 15px; color:rgb(67,72,73); text-transform: uppercase;font-weight: bold; font-family: Arial, Helvetica, sans-serif; ">
                                        <?php echo $companyData->com_name; ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding: 5px"></td>
                                </tr>

                                <tr>
                                    <td style="font-size: 12px;color:rgb(67,72,73);font-family: Arial, Helvetica, sans-serif; padding-bottom:0 ">
                                        <table cellspcing="0" cellpadding="0" border="0"
                                               style="vertical-align: top;border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                            <tr>
                                                <td style="padding: 0 10px;text-align: center;vertical-align: top;width:100%;font-size: 12px;color:rgb(67,72,73);font-family: Arial, Helvetica, sans-serif; ">
                                                    <?php echo $companyData->address; ?>
                                                </td>

                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="text-align: center; width: 100%; font-size: 12px; color:rgb(67,72,73); font-family: Arial, Helvetica, sans-serif; ">
                                        Pay Slip
                                    </td>
                                </tr>

                            </table>
                        </td>
                    </tr>

                    <!--Emplyee details-->  
                    <tr>
                        <td style="width: 100%; padding-left: 0;padding-right: 0;">
                            <table cellspcing="0" cellpadding="0" border="0"
                                   style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                <tr>
                                    <td style="padding-top: 10px;padding-bottom:10px;text-align: center; width: 100%; font-size: 14px; color:rgb(67,72,73); font-family: Arial, Helvetica, sans-serif; ">
                                        <table cellspcing="0" cellpadding="0" border="0"
                                               style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">

                                            <tr>
                                                <td style="width: 100%;padding-bottom:5px;">
                                                    <table cellspcing="0" cellpadding="0" border="0"
                                                           style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                                        <tr>
                                                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 50%;">
                                                                <table cellspcing="0" cellpadding="0" border="0"
                                                                       style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                                                    <tr>
                                                                        <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 100%;">
                                                                            EPF NO
                                                                        </td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 100%;">
                                                                            EMPLOYEE NAME
                                                                        </td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 100%;">
                                                                            DEPARTMENT
                                                                        </td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 100%;">
                                                                            LOCATION
                                                                        </td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 100%;">
                                                                            DESIGNATION
                                                                        </td>
                                                                    </tr> 

                                                                </table>
                                                            </td>
                                                            
                                                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 50%;">
                                                                <table cellspcing="0" cellpadding="0" border="0"
                                                                       style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                                                    <tr>
                                                                        <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 100%;">
                                                                            <?php echo $value->epf_no; ?>
                                                                        </td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 100%;">
                                                                            <?php echo $value->emp_name; ?>
                                                                        </td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 100%;">
                                                                            <?php echo EmpdetailsController::getPosition($value->rel_employment->emp_section_id, $value->rel_employment->rel_hierarchy->depth, 1)[0]->hierarchy_section_name; ?>  
                                                                        </td>
                                                                    </tr> 

                                                                    <tr>
                                                                        <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 100%;">
                                                                            <?php echo $value->rel_employment->rel_branch->br_name; ?> 
                                                                        </td>
                                                                    </tr> 
                                                                    <tr>
                                                                        <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 100%;">
                                                                            <?php echo $modelDesignation->designation; ?>
                                                                        </td>
                                                                    </tr> 

                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                            

                <!--                                            <tr>
                                                                <td style="width: 100%;padding-bottom:5px;">
                                                                    <table cellspcing="0" cellpadding="0" border="0"
                                                                           style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                                                        <tr>
                                                                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 50%;">
                                                                                EMP No
                                                                            </td>
                                                                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 50%;">
                                            <?php //echo $value->emp_no;  ?>                                 
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>  -->

                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- EARNINGS -->
                    <tr>
                        <td style="width: 100%; padding-left: 0;padding-right: 0;">
                            <table cellspcing="0" cellpadding="0" border="0"
                                   style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                <tr>
                                    <td style="text-align: left; font-size: 13px; color:rgb(67,72,73); border-bottom: 1px solid #434849;">
                                        EARNINGS
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!--Salary Details-->
                    <tr>
                        <td style="width: 100%; padding-left: 0;padding-right: 0;">
                            <table cellspcing="0" cellpadding="0" border="0"
                                   style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                <tr>

                                    <td style="padding-top: 10px;padding-bottom:10px;text-align: center; width: 100%; font-size: 14px; color:rgb(67,72,73); font-family: Arial, Helvetica, sans-serif; ">
                                        <table cellspcing="0" cellpadding="0" border="0"
                                               style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                            <tr>
                                                <td style="width: 100%;padding-bottom: 3px">
                                                    <table cellspcing="0" cellpadding="0" border="0"
                                                           style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                                        <tr>
                                                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 70%; ">
                                                                Basic Salary
                                                            </td>
                                                            <td style=" font-size: 13px; color:rgb(67,72,73);width: 30%;text-align: right">
                                                                <?php // echo count($ProcessedBasicData);   ?>
                                                                <?php // echo count($ProcessedSalaryAttendanceEPF); //print_r($ProcessedBasicData);  ?>
                                                                <?php
                                                                echo $ProcessedBasicData->psb_basic_or_day_salary;
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        $sumEarnings = 0;
                                                        $sumProcessedAtt = 0;
                                                        $BasicSalary = $ProcessedBasicData->psb_basic_or_day_salary;
                                                        ?>
                                                        <?php foreach ($ProcessedSalaryAttendanceEPF as $processedAtt) { ?>
                                                            <tr>    
                                                                <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 70%; "><?php echo $processedAtt['sa_type_name']; ?></td>
                                                                <td style=" font-size: 13px; color:rgb(67,72,73);width: 30%;text-align: right"><?php echo $processedAtt['sum_of_type']; ?></td>
                                                            </tr>
                                                            <?php
                                                            $sumProcessedAtt = $sumProcessedAtt + $processedAtt['sum_of_type'];
                                                        }
                                                        $sumProcessedAtt = $BasicSalary + $sumProcessedAtt;
                                                        ?>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td style="width: 100%;padding: 3px 0"></td>
                                            </tr> 
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>  

                    <!--EPF Liable Additions-->
                    <tr>
                        <td style="width: 100%; padding-left: 0;padding-right: 0;">
                            <table cellspcing="0" cellpadding="0" border="0"
                                   style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                <tr>
                                    <td style="padding-top: 5px;padding-bottom:10px;text-align: center; width: 100%; font-size: 14px; color:rgb(67,72,73); font-family: Arial, Helvetica, sans-serif; ">
                                        <table cellspcing="0" cellpadding="0" border="0"
                                               style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                                   <?php
                                                   $sumProcessedAddor = 0;
                                                   if (count($ProcessedAddorDedDataEPF) > 0) {
                                                       foreach ($ProcessedAddorDedDataEPF as $addEpf) {
                                                           if ($addEpf->sad_type == 1 || $addEpf->sad_type == 3) {
                                                               ?>
                                                        <tr>
                                                            <td style="width: 100%;padding-bottom: 3px">
                                                                <table cellspcing="0" cellpadding="0" border="0"
                                                                       style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                                                    <tr>
                                                                        <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 70%; ">
                                                                            <!--EPF 8%-->
                                                                            <?php echo $addEpf->sad_addorded_name; ?>
                                                                        </td>
                                                                        <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 30%;text-align: right">
                                                                            <!--25,000.00-->
                                                                            <?php echo $addEpf->sad_amount; ?>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        $sumProcessedAddor = $sumProcessedAddor + $addEpf->sad_amount;
                                                    }
                                                }
                                            }
                                            ?>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!--EPF Non-Liable Additions-->

                    <tr>
                        <td style="width: 100%; padding-left: 0;padding-right: 0;">
                            <table cellspcing="0" cellpadding="0" border="0"
                                   style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                <tr>
                                    <td style="padding-top: 5px;padding-bottom:10px;text-align: center; width: 100%; font-size: 14px; color:rgb(67,72,73); font-family: Arial, Helvetica, sans-serif; ">
                                        <table cellspcing="0" cellpadding="0" border="0"
                                               style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                                   <?php
                                                   $sumProcessedAddorDedData = 0;
                                                   if (count($ProcessedAddorDedData) > 0) {
                                                       foreach ($ProcessedAddorDedData as $add) {
                                                           if ($add->sad_type == 1 || $add->sad_type == 3) {
                                                               ?>
                                                        <tr>
                                                            <td style="width: 100%;padding-bottom: 3px">
                                                                <table cellspcing="0" cellpadding="0" border="0"
                                                                       style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                                                    <tr>
                                                                        <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 70%; ">
                                                                            <!--EPF 8%-->
                                                                            <?php echo $add->sad_addorded_name; ?>
                                                                        </td>
                                                                        <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 30%;text-align: right">
                                                                            <!--25,000.00-->
                                                                            <?php echo $add->sad_amount; ?>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        $sumProcessedAddorDedData = $sumProcessedAddorDedData + $add->sad_amount;
                                                    }
                                                }
                                            }
                                            ?>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <?php $sumEarnings = $sumProcessedAtt + $sumProcessedAddor + $sumProcessedAddorDedData; ?>  
                    <tr>
                        <td style="width: 100%; padding-left: 0;padding-right: 0;">
                            <table cellspcing="0" cellpadding="0" border="0"
                                   style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                <tr>
                                    <td style="padding-top: 5px;padding-bottom:10px;text-align: center; width: 100%; font-size: 14px; color:rgb(67,72,73); font-family: Arial, Helvetica, sans-serif; ">
                                        <table cellspcing="0" cellpadding="0" border="0"
                                               style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">

                                            <tr>
                                                <td style="width: 100%;padding-bottom: 3px">
                                                    <table cellspcing="0" cellpadding="0" border="0"
                                                           style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                                        <tr>
                                                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 70%; ">
                                                                GROSS PAY
                                                            </td>
                                                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 30%;text-align: right">
                                                                <?php echo number_format((float) $sumEarnings, 2, '.', ''); ?>           
                                                            </td>
                                                        </tr>
                                                    </table>  
                                                </td>
                                            </tr>

                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>


                    <!-- DEDUCTIONS -->  
                    <tr>
                        <td style="width: 100%; padding-left: 0;padding-right: 0;">
                            <table cellspcing="0" cellpadding="0" border="0"
                                   style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                <tr>
                                    <td style="text-align: left; font-size: 13px; color:rgb(67,72,73); border-bottom: 1px solid #434849;">
                                        DEDUCTIONS
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- EPF Liable Deductions --> 
                    <tr>
                        <td style="width: 100%; padding-left: 0;padding-right: 0;">
                            <table cellspcing="0" cellpadding="0" border="0"
                                   style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                <tr>
                                    <td style="padding-top: 5px;padding-bottom:10px;text-align: center; width: 100%; font-size: 14px; color:rgb(67,72,73); font-family: Arial, Helvetica, sans-serif; ">
                                        <table cellspcing="0" cellpadding="0" border="0"
                                               style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                                   <?php
                                                   $sumDeduction = 0;
                                                   $sumProcessedAttDeduction = 0;
                                                   if (count($ProcessedAddorDedDataEPF) > 0) {
                                                       foreach ($ProcessedAddorDedDataEPF as $dedEpf) {
                                                           if ($dedEpf->sad_type == 2 || $dedEpf->sad_type == 4) {
                                                               ?>
                                                        <tr>
                                                            <td style="width: 100%;padding-bottom: 3px">
                                                                <table cellspcing="0" cellpadding="0" border="0"
                                                                       style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                                                    <tr>
                                                                        <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 70%; ">
                                                                            <!--EPF 8%-->
                                                                            <?php echo $dedEpf->sad_addorded_name; ?>
                                                                        </td>
                                                                        <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 30%;text-align: right">
                                                                            <!--25,000.00-->
                                                                            <?php echo $dedEpf->sad_amount; ?>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        $sumProcessedAttDeduction = $sumProcessedAttDeduction + $dedEpf->sad_amount;
                                                    }
                                                }
                                            }
                                            ?> 
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- EPF Non-Liable Deductions --> 
                    <tr>
                        <td style="width: 100%; padding-left: 0;padding-right: 0;">
                            <table cellspcing="0" cellpadding="0" border="0"
                                   style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                <tr>
                                    <td style="padding-top: 5px;padding-bottom:10px;text-align: center; width: 100%; font-size: 14px; color:rgb(67,72,73); font-family: Arial, Helvetica, sans-serif; ">
                                        <table cellspcing="0" cellpadding="0" border="0"
                                               style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                                   <?php
                                                   $sumProcessedAddorDedDataDeduction = 0;
                                                   if (count($ProcessedAddorDedData) > 0) {
                                                       foreach ($ProcessedAddorDedData as $ded) {
                                                           if ($ded->sad_type == 2 || $ded->sad_type == 4) {
                                                               ?>
                                                        <tr>
                                                            <td style="width: 100%;padding-bottom: 3px">
                                                                <table cellspcing="0" cellpadding="0" border="0"
                                                                       style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                                                    <tr>
                                                                        <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 70%; ">
                                                                            <!--EPF 8%-->
                                                                            <?php echo $ded->sad_addorded_name; ?>
                                                                        </td>
                                                                        <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 30%;text-align: right">
                                                                            <!--25,000.00-->
                                                                            <?php echo $ded->sad_amount; ?>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        $sumProcessedAttDeduction = $sumProcessedAttDeduction + $ded->sad_amount;
                                                    }
                                                }
                                            }
                                            ?>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>


                    <?php $sumDeduction = $sumProcessedAttDeduction; ?>  
                    <tr>
                        <td style="width: 100%; padding-left: 0;padding-right: 0;">
                            <table cellspcing="0" cellpadding="0" border="0"
                                   style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                <tr>
                                    <td style="padding-top: 5px;padding-bottom:10px;text-align: center; width: 100%; font-size: 14px; color:rgb(67,72,73); font-family: Arial, Helvetica, sans-serif; ">
                                        <table cellspcing="0" cellpadding="0" border="0"
                                               style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">

                                            <tr>
                                                <td style="width: 100%;padding-bottom: 3px">
                                                    <table cellspcing="0" cellpadding="0" border="0"
                                                           style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                                        <tr>
                                                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 70%; ">
                                                                TOTAL DEDUCTIONS
                                                            </td>
                                                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 30%;text-align: right">
                                                                <?php echo number_format((float) $sumDeduction, 2, '.', ''); ?>           
                                                            </td>
                                                        </tr>
                                                    </table>  
                                                </td>
                                            </tr>

                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="width: 100%; padding-left: 0;padding-right: 0;">
                            <table cellspcing="0" cellpadding="0" border="0"
                                   style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                <tr>
                                    <td style="padding-top: 5px;padding-bottom:10px;text-align: center; width: 100%; font-size: 14px; color:rgb(67,72,73); font-family: Arial, Helvetica, sans-serif; ">
                                        <table cellspcing="0" cellpadding="0" border="0"
                                               style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">

                                            <tr>
                                                <td style="width: 100%;padding-bottom: 3px">
                                                    <table cellspcing="0" cellpadding="0" border="0"
                                                           style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                                        <tr>
                                                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 70%; ">
                                                                Net Salary
                                                            </td>
                                                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 30%;text-align: right">
                                                                <?php echo $ProcessedBasicData->psb_net_total; ?>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 100%; padding-left: 0;padding-right: 0;">
                            <table cellspcing="0" cellpadding="0" border="0"
                                   style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                <tr>
                                    <td style="text-align: left; font-size: 13px; color:rgb(67,72,73); border-bottom: 1px solid #434849;">
                                        OTHER INFORMATION
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 100%; padding-left: 0;padding-right: 0;">
                            <table cellspcing="0" cellpadding="0" border="0"
                                   style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                <tr>
                                    <td style="padding-top: 5px;padding-bottom:10px;text-align: center; width: 100%; font-size: 14px; color:rgb(67,72,73); font-family: Arial, Helvetica, sans-serif; ">
                                        <table cellspcing="0" cellpadding="0" border="0"
                                               style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                            <tr>
                                                <td style="width: 100%;padding-bottom: 3px">
                                                    <table cellspcing="0" cellpadding="0" border="0"
                                                           style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                                        <tr>
                                                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 70%; ">
                                                                Total For EPF
                                                            </td>
                                                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 30%;text-align: right">
                                                                <?php echo $ProcessedBasicData->psb_totforepf; ?>
                                                            </td>
                                                        </tr>
                                                        <?php foreach ($ProcessedSalaryAttendance as $processedAtt) { ?>
                                                            <?php if ($processedAtt['sum_of_type'] > 0) { ?>
                                                                <tr>
                                                                    <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 70%; "><?php echo 'OT (' . $processedAtt['sa_premium'] . ')'; ?></td>
                                                                    <td style=" font-size: 13px; color:rgb(67,72,73);width: 30%;text-align: right"><?php echo $processedAtt['sum_of_type']; ?></td>
                                                                </tr>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>


                    <tr>
                        <td style="width: 100%; padding-left: 0;padding-right: 0;">
                            <table cellspcing="0" cellpadding="0" border="0"
                                   style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                <tr>
                                    <td style="padding-top: 5px;padding-bottom:10px;text-align: center; width: 100%; font-size: 14px; color:rgb(67,72,73); font-family: Arial, Helvetica, sans-serif; ">
                                        <table cellspcing="0" cellpadding="0" border="0"
                                               style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">

                                            <tr>
                                                <td style="width: 100%;padding-bottom: 3px">
                                                    <table cellspcing="0" cellpadding="0" border="0"
                                                           style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                                        <tr>
                                                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 70%; ">
                                                                Brought Forward Coins
                                                            </td>
                                                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 30%;text-align: right">
                                                                <?php echo $ProcessedBasicData->psb_bf_coin; ?>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="width: 100%;padding-bottom: 3px">
                                                    <table cellspcing="0" cellpadding="0" border="0"
                                                           style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                                        <tr>
                                                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 70%; ">
                                                                Basic EPF 8% 
                                                            </td>
                                                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 30%;text-align: right">
                                                                <?php echo $ProcessedBasicData->psb_epf8; ?>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="width: 100%;padding-bottom: 3px">
                                                    <table cellspcing="0" cellpadding="0" border="0"
                                                           style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                                        <tr>
                                                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 70%; ">
                                                                Total
                                                            </td>
                                                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 30%;text-align: right">
                                                                <?php echo $ProcessedBasicData->psb_sub_total; ?>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="width: 100%;padding-bottom: 3px">
                                                    <table cellspcing="0" cellpadding="0" border="0"
                                                           style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                                        <tr>
                                                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 70%; ">
                                                                Carry Forward Coins
                                                            </td>
                                                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 30%;text-align: right">
                                                                <?php echo $ProcessedBasicData->psb_cf_coin; ?>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="width: 100%;padding-bottom: 3px">
                                                    <table cellspcing="0" cellpadding="0" border="0"
                                                           style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                                        <tr>
                                                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 70%; ">
                                                                EPF 12%
                                                            </td>
                                                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 30%;text-align: right">
                                                                <?php echo $ProcessedBasicData->psb_epf12; ?>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="width: 100%;padding-bottom: 3px">
                                                    <table cellspcing="0" cellpadding="0" border="0"
                                                           style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                                        <tr>
                                                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 70%; ">
                                                                EPF 3%
                                                            </td>
                                                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 30%;text-align: right">
                                                                <?php echo $ProcessedBasicData->psb_epf3; ?>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!--Earnings-->
            <!--          <tr>
                      <td style="width: 100%; padding-left: 0;padding-right: 0;">
                        <table cellspcing="0" cellpadding="0" border="0"
                               style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                          <tr>
                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73); border-bottom: 1px solid #434849;">
                              Earnings
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>-->



                                                                            <!--          <tr>
                                                                                        <td style="width: 100%; padding-left: 0;padding-right: 0;">
                                                                                          <table cellspcing="0" cellpadding="0" border="0"
                                                                                                 style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                                                                            <tr>
                                                                                              <td style="padding-top: 5px;padding-bottom:0px;text-align: center; width: 100%; font-size: 14px; color:rgb(67,72,73); font-family: Arial, Helvetica, sans-serif; ">
                                                                                                <table cellspcing="0" cellpadding="0" border="0"
                                                                                                       style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">

                                                                                                  <tr>
                                                                                                    <td style="width: 100%;padding-bottom: 3px">
                                                                                                      <table cellspcing="0" cellpadding="0" border="0"
                                                                                                             style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                                                                                        <tr>
                                                                                                          <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 70%; ">
                                                                                                            EPF 12%
                                                                                                          </td>
                                                                                                          <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 30%;text-align: right">
                                                                                                            1000.00
                    <?php // echo $epf->sal_amount;        ?>
                                                                                                          </td>
                                                                                                        </tr>
                                                                                                      </table>
                                                                                                    </td>
                                                                                                  </tr>

                                                                                                  <tr>
                                                                                                    <td style="width: 100%;padding-bottom: 3px">
                                                                                                      <table cellspcing="0" cellpadding="0" border="0"
                                                                                                             style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                                                                                        <tr>
                                                                                                          <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 70%; ">
                                                                                                            EPF 8%
                                                                                                          </td>
                                                                                                          <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 30%;text-align: right">
                                                                                                            1000.00
                    <?php // echo $etf_ded->sal_amount;        ?>
                                                                                                          </td>
                                                                                                        </tr>
                                                                                                      </table>
                                                                                                    </td>
                                                                                                  </tr>

                                                                                                  <tr>
                                                                                                    <td style="width: 100%;padding-bottom: 3px">
                                                                                                      <table cellspcing="0" cellpadding="0" border="0"
                                                                                                             style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                                                                                        <tr>
                                                                                                          <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 70%; ">
                                                                                                            ETF 3%
                                                                                                          </td>
                                                                                                          <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 30%;text-align: right">
                                                                                                            1000.00
                    <?php // echo $etf_3->sal_amount;        ?>
                                                                                                          </td>
                                                                                                        </tr>
                                                                                                      </table>
                                                                                                    </td>
                                                                                                  </tr>

                                                                                                </table>
                                                                                              </td>
                                                                                            </tr>
                                                                                          </table>
                                                                                        </td>
                                                                                      </tr>-->

                <!--                    <tr>
                                        <td style="width: 100%; padding-left: 0;padding-right: 0;">
                                            <table cellspcing="0" cellpadding="0" border="0"
                                                   style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                                <tr>

                                                    <td style="padding-top: 10px;padding-bottom:10px;text-align: center; width: 100%; font-size: 14px; color:rgb(67,72,73); font-family: Arial, Helvetica, sans-serif; ">
                                                        <table cellspcing="0" cellpadding="0" border="0"
                                                               style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                                            <tr>
                                                                <td style="width: 100%;padding-bottom: 3px">
                                                                    <table cellspcing="0" cellpadding="0" border="0"
                                                                           style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                                                        <tr>
                                                                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 30%; border-bottom: 1px dotted #4b4b4b;">
                                                                                &nbsp;</td>
                                                                            <td style="width: 40%"></td>
                                                                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 30%; border-bottom: 1px dotted #4b4b4b;">
                                                                                &nbsp;</td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 30%;margin-top: 5px; ">
                                                                                Signature
                                                                            </td>
                                                                            <td style="width: 40%"></td>
                                                                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 30%;margin-top: 5px;">
                                                                                Date
                                                                            </td>
                                                                        </tr>

                                                                    </table>
                                                                </td>
                                                            </tr>

                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>-->     

                    <tr>
                        <td style="width: 100%; padding-left: 0;padding-right: 0;">
                            <table cellspcing="0" cellpadding="0" border="0"
                                   style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                <tr>

                                    <td style="padding-top: 10px;padding-bottom:10px;text-align: center; width: 100%; font-size: 14px; color:rgb(67,72,73); font-family: Arial, Helvetica, sans-serif; ">
                                        <table cellspcing="0" cellpadding="0" border="0"
                                               style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">
                                            <tr>
                                                <td style="width: 100%;padding-bottom: 3px">
                                                    <table cellspcing="0" cellpadding="0" border="0"
                                                           style="border-collapse: collapse; width:100%; padding: 0; margin: 0;">

                                                        <tr>
                                                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 30%; ">
                                                                Bank
                                                            </td>
                                                            <td style="text-align: right; font-size: 13px; color:rgb(67,72,73);width: 70%;">
                                                                <!--Commercial Bank-->
                                                                <?php $empBank = Bank::model()->findByPk($empBankInfo->bank_name); ?>
                                                                <?php
                                                                if ($empBank->bank_name == "" || $empBank->bank_name == null) {
                                                                    echo 'Not Proposed';
                                                                } else {
                                                                    echo $empBank->bank_name;
                                                                }
                                                                ?>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 30%; ">
                                                                Bank Code
                                                            </td>
                                                            <td style="text-align: right; font-size: 13px; color:rgb(67,72,73);width: 70%;">
                                                                <!--8980023371-->
                                                                <?php
                                                                if ($empBankInfo->bank_acno == "" || $empBankInfo->bank_acno == null) {
                                                                    echo 'Not Proposed';
                                                                } else {
                                                                    echo $empBank->bank_code;
                                                                }
                                                                ?>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="text-align: left; font-size: 13px; color:rgb(67,72,73);width: 30%; ">
                                                                Account No
                                                            </td>
                                                            <td style="text-align: right; font-size: 13px; color:rgb(67,72,73);width: 70%;">
                                                                <!--8980023371-->
                                                                <?php
                                                                if ($empBankInfo->bank_acno == "" || $empBankInfo->bank_acno == null) {
                                                                    echo 'Not Proposed';
                                                                } else {
                                                                    echo $empBankInfo->bank_acno;
                                                                }
                                                                ?>
                                                            </td>
                                                        </tr>

                                                    </table>
                                                </td>
                                            </tr>

                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>


                </tbody>
            </table>


        </div>
    </page>

    <?php if ($empCnt != $cnt) { ?>  
        <pagebreak />
        <?php
    }

    $cnt++;
} 
?>

