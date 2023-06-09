@extends('admin.layouts.master')


@section('title')
    دسته بندی
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item  font-size-12">   <a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12">   <a href="#">فروش</a></li>
            <li class="breadcrumb-item font-size-12 " aria-current="page">    دسته بندی</li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page">   ایجاد دسته بندی</li>
        </ol>
    </nav>


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h3 class="font-weight-bold">
                      ایجاد دسته بندی
                    </h3>
                    <p>
                      از این بخش میتوانید دسته بندی جدید برای محصولات خود ایجاد کنید
                    </p>
                </section>
                <section class="d-flex justify-content-between align-items-center mt-5 mb-5  border-bottom  py-2">
                    <a href="{{ route('admin.market.category.index') }}" class="btn btn-info  btn-sm">بازگشت</a>
                </section>
                <section class="">
                    <form action="" method="">
                        <section class="row">
                        <div class="col-12 col-md-6 form-group">
                            <lable for="نام دسته بندی"> نام دسته بندی جدید</lable>
                            <input type="text" placeholder="نام دسته بندی" class="form-control form-control-sm">
                        </div>


                        <div class=" col-12 col-md-6 form-group">
                            <lable for="نام دسته بندی" class="mb-2"> نام دسته بندی جدید</lable>
                            <select name="" id="" class="form-control form-control-sm">
                                <option value="">دسته را انتخاب کنید</option>
                                <option value="">وسایل الکترونیکی</option>
                            </select>

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
