<?php
const UNEXPECTED_RESULT = "非预期的返回结果:";
const NEED_PARAM = "需要必填字段:";
const NEED_VALID_PARAM = "字段值不合法:";
const NEED_WX_JSAPI_OPENID = "微信公众号支付(WX_JSAPI) 需要openid字段";
const NEED_RETURN_URL = "当channel参数为 ALI_WEB 或 ALI_QRCODE 或 UN_WEB 或JD_WAP 或 JD_WEB时 return_url为必填";
const NEED_IDENTITY_ID = "当channel参数为 YEE_WAP时 identity_id为必填";
const BILL_TIMEOUT_ERROR = "当channel参数为 JD* 不支持bill_timeout";
const NEED_QR_PAY_MODE = '当channel参数为 ALI_QRCODE时 qr_pay_mode为必填';
const NEED_CARDNO = '当channel参数为 YEE_NOBANKCARD时 cardno为必填';
const NEED_CARDPWD = '当channel参数为 YEE_NOBANKCARD时 cardpwd为必填';
const NEED_FRQID = '当channel参数为 YEE_NOBANKCARD时 frqid为必填';

const APP_ID = 'c37d661d-7e61-49ea-96a5-68c34e83db3b';
const APP_SECRET = 'c37d661d-7e61-49ea-96a5-68c34e83db3b';

/*
 * bank_code for channel JD_B2B
9102    中国工商银行      9107    招商银行
9103    中国农业银行      9108    光大银行
9104    交通银行          9109    中国银行
9105    中国建设银行
*/
define('BANK_CODE', serialize(array(9102, 9103, 9104, 9105, 9107, 9108, 9109)));
