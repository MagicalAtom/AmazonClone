<?php

namespace App\Http\Controllers\Admin\Market;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
public function voucher(){
return view('admin.market.discount.voucher');
}
public function voucherCreate(){
    return view('admin.market.discount.voucher-create');
}
public function commonDiscount(){

    return view('admin.market.discount.common');

}
public function createCommon(){
    return view('admin.market.discount.common-create');
}

public function AmazingSale(){
    return view('admin.market.discount.amazing');

}
public function amazingSaleCreate(){
    return view('admin.market.discount.amazing-create');

}
}
