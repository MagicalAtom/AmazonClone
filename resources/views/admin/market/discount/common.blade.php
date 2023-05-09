@extends('admin.layouts.master')


@section('title')
تخفیف عمومی
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item  font-size-12">   <a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12">   <a href="#">فروش</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> تخفیف عمومی</li>
        </ol>
    </nav>


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h3 class="font-weight-bold">
             تخفیف عمومی
                    </h3>
                    <p>
             در این بخش میتوانید برای کاربران تخفیف عمومی درست کرده یا تخفیف های قبلی را مدیریت کنید
                    </p>
                </section>
                <section class="d-flex justify-content-between align-items-center mt-5 mb-5  border-bottom  py-2">
                    <a href=" {{ route('admin.market.discount.common.create') }}" class="btn btn-info  btn-sm">ایجاد تخفیف عمومی</a>
                    <div class="w-16rem">
                    <input type="text" placeholder="جست و جو" class="form-control form-control-sm form-text">
                    </div>
                </section>
                <section class="table-responsive ">
<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th>آیدی</th>
        <th>درصد تخفیف</th>
        <th>سقف تخفیف</th>
        <th>عنوان تخفیف</th>
        <th>تاریخ شروع</th>
        <th>تاریخ پایان</th>
        <th class=" text-center margin-left"> <i class="fa fa-cogs pl-2"></i>عملیات</th>
    </tr>
    </thead>
     <tbody>
     <tr>
         <th>1</th>
         <td>30%</td>
         <td>25000 هزار تومان</td>
         <td>بزرگداشت کوروش کبیر</td>
         <td>اردیبهشت</td>
         <td>22 بهمن سال 1401</td>
         <td class="w-25 text-left margin-left-btn">
             <a href="#" class="btn btn-primary btn-sm "><i class="fa fa-edit  pl-2"></i>ویرایش</a>
             <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash-alt  pl-2"></i>حذف</button>
         </td>
     </tr>
     </tbody>
</table>
                </section>
            </section>
        </section>
    </section>

@endsection
