<?php
/**
 * Created by IntelliJ IDEA.
 * User: shihuipeng
 * Date: 2017/11/3
 * Time: 上午12:14
 */

$sql = "select                       0 as borrow_sort,                    b.days,                    case                        when b.days > 0 then b.days                        else b.borrow_period * 30                    end as tzqx,                    b.bid,                    b.name,                    b.borrow_style,                    b.status,                    b.flag,                    b.classify,                    b.borrow_period,                    b.tender_account_min,                    b.account,                    b.verify_time,                    b.borrow_valid_time,                    cast(format(b.repay_account_capital * 100/ b.account, 2) as decimal(10,2)) as borrow_account_scale,                    b.borrow_apr,                    ds.isxs,                    bt.ex_apr,                    dr.borrow_account_wait,                    'wd' as 'data_source'                from wd.05b_0base b                left join wd.05b_7dsbid ds on b.bid = ds.bid                left join wd.05b_0base_run dr on b.bid = dr.bid                left join wd.rz_05b_0base_ext bt on b.bid=bt.bid   where  b.status IN (1, 3, 6) AND b.esc_status > 0 AND b.isapp = 0 AND b.bid not in(3,4,5,7,238,357,361,1040,1041,1794,1795,1800,1801,1804,1805,1900,2015,2143,10000,10004,10024,10283,10284,10274,10271,10273,10247,10272,10223,10226,10227,10253,10225,10574,15869,16623,17846)  and isnull(ds.isxs) and b.classify in (1)  AND (b.repay_account_capital/b.account) <= 1 limit  0 , 12";

$sql = explode(' limit ',$sql )[0];
$sql_split = explode('union',$sql );
$count = 0;
foreach ($sql_split as $_sql ){
    $_sql_split_split = explode('from', $_sql);
    $_sql_count = "select count(*) as count from ".$_sql_split_split[1];
    var_dump($_sql_count);
}


