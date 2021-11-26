<?php
function generateRandonString($lenght){
    return substr(str_shuffle(str_repeat($x="ABCDEFGHIJKLMNOPQRSTUVWXYZ",ceil($lenght/strlen($x)))),1,$lenght); 

}
function generateRandonNumber($digits){
    return uniqid();

}



$header= array('loan_title','user_id','org_id','loan_package_id','package_name','brower_credit_score','amount','currency','status','amount_payable','principal_due','balance','penalty_due','charge_per_installment','no_of_installment','next_payment_date','payback_date','interest');
//code for downloading csv file automatically....
//header("Content-Disposition:attachment;filename=$filename");

$csv = fopen('file.csv','w');
fputcsv($csv, $header);
for($i=1; $i<=1000; $i++) { 
    $loan_title=generateRandonString(20);
    $user_id=random_int(1,1000);
    $org_id= random_int(500,2000);
    $loan_package_id=random_int(100, 200);
    $package_name=generateRandonString(20);
    $brower_credit_score=random_int(1000, 4000);
    $amount=34000;
    $currency=generateRandonString(20);
    $status=random_int(0, 4);
    $amount_payable=random_int(2000, 5000);
    $principal_due=(50000);
    $balance=random_int(1,1000);
    $penalty_due=5000;
    $charge_per_installment=random_int(1, 1000);
    $no_of_installemt=generateRandonString(20);
    $next_payment_date=date('d-F-Y', time());
    $payback_date=date('d-F-Y', time());
    $interest=random_int(1000,2000);
    $row=array($loan_title, $user_id, $org_id, $loan_package_id,$package_name,$brower_credit_score,$amount,
        $currency,$status,$amount_payable,$principal_due,$balance,$penalty_due,$charge_per_installment,
        $no_of_installemt, $next_payment_date,$payback_date,$interest);
    fputcsv($csv, $row);
    

}
echo "successful";
fclose($csv);





?>