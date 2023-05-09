
@extends('admin.layouts.master')


@section('title')
تخفیف عمومی
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item  font-size-12">   <a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12">   <a href="#">فروش</a></li>
            <li class="breadcrumb-item font-size-12 " aria-current="page">تخفیف عمومی</li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page">ایجاد تخفیف عمومی </li>
        </ol>
    </nav>


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h3 class="font-weight-bold">
             ایجاد تخفیف عمومی
                    </h3>
                    <p>
         از این بخش میتوانید تخفیف عمومی بسازید
                    </p>
                </section>
                <section class="d-flex justify-content-between align-items-center mt-5 mb-5  border-bottom  py-2">
                    <a href="{{ route('admin.market.discount.common') }}" class="btn btn-info  btn-sm">بازگشت</a>
                </section>
                <section class="">
                    <form action="" method="">
                        <section class="row">
                        <div class="col-12 col-md-6 form-group">
                             <lable for="عنوان مناسبت" class="my-4">عنوان مناسبت</lable>
                            <input type="text" placeholder="عنوان مناسبت" class="form-control form-control-sm ">
                        </div>

                            <div class="col-12 col-md-6 form-group">
                                <lable for="درصد تخفیف" class="my-4">درصد تخفیف</lable>
                                <input type="text" placeholder="درصد تخفیف" class="form-control form-control-sm ">
                            </div>

                            <div class="col-12 col-md-6 form-group">
                                <lable for="حداکثر تخفیف" class="my-4">حداکثر تخفیف</lable>
                                <input type="text" placeholder="حداکثر تخفیف" class="form-control form-control-sm ">
                            </div>

                            <div class="col-12 col-md-6 form-group">
                                <lable for="تاریخ شروع" class="my-4">تاریخ شروع</lable>
                                <input type="date" placeholder="تاریخ شروع" class="form-control form-control-sm ">
                            </div>
                            <div class="col-12 col-md-6 form-group">
                                <lable for="تاریخ پایان" class="my-4">تاریخ پایان</lable>
                                <input type="date" placeholder="تاریخ پایان" class="form-control form-control-sm ">
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
