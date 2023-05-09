@extends('admin.layouts.master')


@section('title')
   نظر
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item  font-size-12">   <a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12">   <a href="#">فروش</a></li>
            <li class="breadcrumb-item font-size-12 " aria-current="page">   نظرات</li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page">نمایش نظر  </li>
        </ol>
    </nav>


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h3 class="font-weight-bold">
                  نمایش نظر
                    </h3>
                    <p>
            از این بخش میتوانید نظر کاربر را دیده و پاسخ مناسب را در نظر بگیرید
                    </p>
                </section>
                <section class="d-flex justify-content-between align-items-center mt-5 mb-5  border-bottom  py-2">
                    <a href="{{ route('admin.market.comment.index') }}" class="btn btn-info  btn-sm">بازگشت</a>
                </section>
                <section class="card mb-4">
<section class="card-header text-white bg-dark text-center ">
کامران محمدی - 1281749328
</section>
                    <section class="card-body">
<h5 class="border-bottom font-weight-bold py-3 card-title">مشخصات کالا : ساعت هوشمند apple watch کد کالا 098203</h5>
                    <p class="py-2 card-text">در یک کلام عالی بود . ممنون از فروشگاه خوب شما برای فراهم کردن این محصول</p>
                    </section>
                    <section class="card-footer text-center py-4">
                        تاریخ و زمان ثبت نظر : اول اردیبهشت سال 1402 ساعت 12 بعد از ظهر
                    </section>
                </section>




                <section class="">
                    <form action="" method="">
                        <section class="row">
                        <div class="col-12 form-group">
                            <lable class="font-weight-bold"  for="پاسخ ادمین">پاسخ ادمین</lable>
                            <textarea   class="form-control form-control-lg mt-2" rows="6" cols="4">درود ...</textarea>
                        </div>

<div class="col-12">
    <button class="btn btn-outline-primary btn-sm">ثبت</button>
</div>

                        </section>
                    </form>
                </section>
            </section>
        </section>
    </section>

@endsection
