<?php
return [
    'app_key'        =>  '',
    'app_secret'     =>  '',
    'format'         =>  'json',
    'fieldTypes'     =>  "tid,payment,receiver_name,receiver_state,receiver_zip,shipping_type,receiver_phone,receiver_mobile,received_payment,status,price,buyer_rate,orders,created,pay_time,modified,end_time",
    'sessionKey'     =>  '',
    'orderStatus'    =>  'WAIT_SELLER_SEND_GOODS',
    'gatewayUrl'     =>  env('API_GATEWAY_TAOBAO','http://gw.api.taobao.com/router/rest'),
    'daySecond'      =>  '86400',
];