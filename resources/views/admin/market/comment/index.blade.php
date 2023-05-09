@extends('admin.layouts.master')


@section('title')
نظرات
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item  font-size-12">   <a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12">   <a href="#">فروش</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page">   نظرات</li>
        </ol>
    </nav>


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h3 class="font-weight-bold">
              نظرات
                    </h3>
                    <p>
               از این بخش میتوانید آخرین نظرات ثبت شده در سایت را مشاهده و مدیریت کنید
                    </p>
                </section>
                <section class="d-flex justify-content-between align-items-center mt-5 mb-5  border-bottom  py-4">
                    <div class="w-16rem">
                    <input type="text" placeholder="جست و جو" class="form-control form-control-sm form-text">
                    </div>
                </section>
                <section class="table-responsive ">
<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th>آیدی</th>
        <th>شناسه کاربری</th>
        <th>نویسنده نظر</th>
        <th>کد کالا</th>
        <th>کالا</th>
        <th>وضعیت</th>
        <th class="w-16rem text-center margin-left"> <i class="fa fa-cogs pl-2"></i>عملیات</th>
    </tr>
    </thead>
     <tbody>
     <tr>

         <th>1</th>
         <td>213876</td>
         <td>محمد علیمردانی</td>
         <td>12312312</td>
         <td><img src="{{ asset('admin-assets/images/avatar-3.jpg') }}" alt="" class="max-height-2rem rounded-circle"></td>
         <td>در انتظار تایید</td>

         <td class="w-25 text-left margin-left-btn">
             <a href="#" class="btn btn-primary btn-sm  "><i class="fa fa-edit  pl-3"></i>ویرایش</a>
             <a href="{{ route('admin.market.comment.show') }}" class="btn btn-info btn-sm  "><i class="fa fa-eye  pl-3"></i>نمایش</a>
{{--             <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash-alt  pl-3"></i>حذف نظر</button>--}}
             <button type="submit" class="btn btn-outline-warning btn-sm"><i class="fa fa-check  pl-3"></i>تایید نظر</button>
         </td>


     </tr>
     <tr>

         <th>1</th>
         <td>213876</td>
         <td>محمد علیمردانی</td>
         <td>12312312</td>
         <td><img src="{{ asset('admin-assets/images/avatar-3.jpg') }}" alt="" class="max-height-2rem rounded-circle"></td>
         <td>تایید شده</td>

         <td class="w-25 text-left margin-left-btn">
             <a href="#" class="btn btn-primary btn-sm  "><i class="fa fa-edit  pl-3"></i>ویرایش</a>
             <a href="{{ route('admin.market.comment.show') }}" class="btn btn-info btn-sm  "><i class="fa fa-eye  pl-3"></i>نمایش</a>
                          <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash-alt  pl-3"></i>حذف نظر</button>
{{--             <button type="submit" class="btn btn-outline-warning btn-sm"><i class="fa fa-check  pl-3"></i>تایید نظر</button>--}}
         </td>


     </tr>


     </tbody>
</table>
                </section>
            </section>
        </section>
    </section>

@endsection
