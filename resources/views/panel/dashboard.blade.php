@extends('panel.layouts.master')

@section('content')

<div class="content-wrapper">
    
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-12">
            <h1 class="m-0 text-dark">پیشخوان</h1>
            </div>
        </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                {{-- @can('view users')
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner fa-num">
                                <h3>{{$user_count}}</h3>
                                <p>کاربران 30 روز اخیر</p>
                            </div>
                            <div class="icon">
                                <i class="fal fa-users"></i>
                            </div>
                            <a href="{{route('panel.users.index')}}" class="small-box-footer">
                            مشاهده بیشتر <i class="fad fa-arrow-circle-left"></i>
                            </a>
                        </div>
                    </div>
                @endcan --}}

                {{-- @can('view orders') 
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="inner fa-num">
                                <h3>{{$orders_count}}</h3>
                                <p>سفارشات 30 روز اخیر</p>
                            </div>
                            <div class="icon">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <a href="{{route('panel.orders.index')}}" class="small-box-footer">
                            مشاهده بیشتر <i class="fad fa-arrow-circle-left"></i>
                            </a>
                        </div>
                    </div>
                 @endcan
                @can('view products')
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-danger">
                            <div class="inner fa-num">
                                 <h3>{{$products}}</h3> 
                                <p>محصولات 30 روز اخیر</p>
                            </div>
                            <div class="icon">
                                <i class="fal fa-envelope"></i>
                            </div>
                             <a href="{{route('panel.products.index')}}" class="small-box-footer"> 
                            مشاهده بیشتر <i class="fad fa-arrow-circle-left"></i>
                            </a>
                        </div>
                    </div>
                @endcan --}}

            </div>
            {{-- @can('view users')
                <div class="card shadow-sm py-2 px-2 m-2">
                    <div class="p-4">
                        <h4 class="text-secondary">جدیدترین اعضای سایت</h4>
                    </div>
                    <table class="table table-sm">
                        <thead>
                            <th>#</th>
                            <th>شماره تماس</th>
                            <th>تاریخ ثبت نام</th>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            
                             <tr>
                                 <td>{{$user->id}}</td>
                                 <td>{{$user->mobile}}</td>
                                 <td>{{jd($user->created_at)}}</td>
                             </tr>
                            @endforeach
                        </tbody>
                    </table>
                
                </div>
                @endcan
                @can('view products')
                <div class="card shadow-sm py-2 px-2 m-2">
                    <div class="p-4">
                        <h4 class="text-secondary">آخرین محصولات سایت</h4>
                    </div>
                    <table class="table table-sm">
                        <thead>
                            <th>#</th>
                            <th>تصویر</th>
                            <th>نام محصول</th>
                            <th>دسته بندی محصول</th>
                            <th>قیمت</th>
                        </thead>
                        <tbody>
                            @foreach ($product_lists as $product)
                            
                             <tr>
                                 <td>{{$product->id}}</td>
                                 <td><img src="{{getImageSrc($product->getImage(), 'avatar')}}" class="rounded-circle" alt=""></td>
                                 <td>{{$product->name}}</td>
                                 <td>
                                 @foreach($product->categories as $category)
                                    <span class="badge badge-light">{{$category->title}}</span>
                                    @endforeach
                                 </td>
                                 <td>{{$product->getPriceTitle()}}</td>
                             </tr>
                            @endforeach
                        </tbody>
                    </table>
                
                </div>
            @endcan --}}

        </div>
    </div>
    
    </div>
    
@endsection
