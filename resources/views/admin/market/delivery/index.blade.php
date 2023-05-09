@extends('admin.layouts.master')


@section('title')
دسته بندی
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item  font-size-12">   <a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12">   <a href="#">فروش</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> روش های ارسال</li>
        </ol>
    </nav>


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h3 class="font-weight-bold">
                     روش های ارسال
                    </h3>
                    <p>
                  از این بخش میتوانید روش های ارسال محصول را به سایت اضافه و مدیریت کنید
                    </p>
                </section>
                <section class="d-flex justify-content-between align-items-center mt-5 mb-5  border-bottom  py-2">
                    <a href=" {{ route('admin.market.delivery.create') }}" class="btn btn-info  btn-sm">افزودن</a>
                    <div class="w-16rem">
                    <input type="text" placeholder="جست و جو" class="form-control form-control-sm form-text">
                    </div>
                </section>
                <section class="table-responsive ">
<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th>آیدی</th>
        <th>روش ارسال</th>
        <th>هزینه ارسال</th>
        <th>مدت زمان ارسال</th>
        <th class="w-16rem text-center margin-left"> <i class="fa fa-cogs pl-2"></i>عملیات</th>
    </tr>
    </thead>
     <tbody>
     <tr>

         <th>1</th>
         <td>شرکت پست خراسان رضوی</td>
         <td>20000 هزار تومان</td>
         <td>معمولا 2 روز کاری</td>
         <td class="w-25 text-left margin-left-btn">
             <a href="#" class="btn btn-primary btn-sm  "><i class="fa fa-edit  pl-2"></i>ویرایش</a>
             <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash-alt  pl-2"></i>حذف</button>
         </td>


     </tr>
     <tr>

         <th>1</th>
         <td>شرکت پست خراسان رضوی</td>
         <td>20000 هزار تومان</td>
         <td>معمولا 2 روز کاری</td>
         <td class="w-25 text-left margin-left-btn">
             <a href="#" class="btn btn-primary btn-sm  "><i class="fa fa-edit  pl-2"></i>ویرایش</a>
             <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash-alt  pl-2"></i>حذف</button>
         </td>


     </tr>
     <tr>

         <th>1</th>
         <td>شرکت پست خراسان رضوی</td>
         <td>20000 هزار تومان</td>
         <td>معمولا 2 روز کاری</td>
         <td class="w-25 text-left margin-left-btn">
             <a href="#" class="btn btn-primary btn-sm  "><i class="fa fa-edit  pl-2"></i>ویرایش</a>
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
