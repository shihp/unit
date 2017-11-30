<?php
/**
 * Created by IntelliJ IDEA.
 * User: shihuipeng
 * Date: 2017/10/16
 * Time: 下午2:33
 */

$str = "606579|13380|133800|6|2017-10-16|2017-10-16 10:25:39|100.00|1.00|101.00|0.00|0.00|826556||0|0|0|0|0|1";

$arr = explode('|',$str );
var_dump($arr);


$int_fields     = ['id','parent_id','borrow_deadline','borrow_deadline_type',
    'repayment_total_periods','data_source','borrower_id','is_advance','client_property'

];

$float_fields     = ['rate_base','rate_reward',
    'borrow_amount','borrow_amount_real','repayment_method','repayment_total_amount','redpacket_amt',
    'rates_amt','capital','interest'

];


$string_fields  = ['parent_name','borrow_name','borrow_type','full_time','borrower_name','platcust','open_branch',
    'withdraw_account','payee_name','bank_id','pay_code','order_no','prod_id','contact_phone','host_req_serial_no','brabank_name'];

$data = count($int_fields) + count($float_fields) + count($string_fields);
var_dump($data);

$_info = '" "';

echo '|'.$_info.'|';