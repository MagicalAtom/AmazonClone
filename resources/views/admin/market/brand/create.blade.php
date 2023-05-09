@extends('admin.layouts.master')


@section('title')
    برند ها
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item  font-size-12">   <a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12">   <a href="#">فروش</a></li>
            <li class="breadcrumb-item font-size-12 " aria-current="page">   برند ها</li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page">افزودن برند</li>
        </ol>
    </nav>


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h3 class="font-weight-bold">
                     افزودن برند
                    </h3>
                    <p>
               از این بخش میتوانید برند ها را به فروشگاه اضافه کنید
                    </p>
                </section>
                <section class="d-flex justify-content-between align-items-center mt-5 mb-5  border-bottom  py-2">
                    <a href="{{ route('admin.market.brand.index') }}" class="btn btn-info  btn-sm">بازگشت</a>
                </section>
                <section class="">
                    <form action="" method="">
                        <section class="row">
                        <div class="col-12 col-md-6 form-group">
                            <lable for="نام برند">نام برند</lable>
                            <input type="text" placeholder="نام برند" class="form-control form-control-sm">
                        </div>


                        <div class=" col-12 col-md-6 form-group">
                            <lable for="تصویر برند" class="">تصویر برند</lable>
                            <input type="file" class="form-control form-control-sm form-control-file ">
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
