@extends('admin.layouts.master')


@section('title')
    دسته بندی
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item  font-size-12">   <a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12">   <a href="#">فروش</a></li>
            <li class="breadcrumb-item font-size-12 " aria-current="page">روش ارسال</li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page">افزودن روش ارسال</li>
        </ol>
    </nav>


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h3 class="font-weight-bold">
                   افزودن روش ارسال
                    </h3>
                    <p>
                 از این بخش میتوانید روش ارسال مورد نظر خود را به سایت اضافه کنید
                    </p>
                </section>
                <section class="d-flex justify-content-between align-items-center mt-5 mb-5  border-bottom  py-2">
                    <a href="{{ route('admin.market.delivery.index') }}" class="btn btn-info  btn-sm">بازگشت</a>
                </section>
                <section class="">
                    <form action="" method="">
                        <section class="row">
                        <div class="col-12 col-md-6 form-group">
                            <lable for="نام روش ارسال" class="my-4">نام روش ارسال</lable>
                            <input type="text" placeholder="نام روش ارسال" class="form-control form-control-sm ">
                        </div>
                            <div class="col-12 col-md-6 form-group">
                                <lable for="هزینه روش ارسال" class="my-4">هزینه روش ارسال</lable>
                                <input type="text" placeholder="هزینه روش ارسال" class="form-control form-control-sm ">
                            </div>
                            <div class="col-12 col-md-6 form-group">
                                <lable for="زمان ارسال" class="my-4">زمان ارسال</lable>
                                <input type="text" placeholder="زمان ارسال" class="form-control form-control-sm ">
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
