<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	{{--<a href="{{ route('panel.dashboard') }}" class="brand-link">
		<img src="{{ getImageSrc(getOption('site_information.favicon','images/admin-logo.png')) }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
		 <span class="brand-text font-weight-light">
				{{ getOption('site_information.website_name',config('settings.website_name')) }}
		</span>
	</a> --}}

	<!-- Sidebar -->
	<div class="sidebar do-nicescroll">

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav d-block nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item">
					<a href="{{ route('admin.panel') }}" class="nav-link {{ is_active('admin.panel') }}">
						<p>پیشخوان</p>
					</a>
				</li>


					@can('show_user')
						<li class="nav-item">
							<a href="{{route('admin.user.index')}}" class="nav-link {{ is_active('admin.user.index')}}">
								<p>مدیریت کاربران</p>
							</a>
						</li>
					@endcan
                @canany('show_permission', 'show_role')
                    <li class="nav-item has-treeview {{is_active(['admin.permission.index' , 'admin.permission.create' , 'admin.permission.edit' , 'admin.Role.index' , 'admin.Role.create' , 'admin.Role.edit'] , 'menu-open')}} ">
                        <a href="#"
                           class="nav-link {{is_active(['admin.permission.index' , 'admin.permission.create' , 'admin.permission.edit' , 'admin.Role.index' , 'admin.Role.create' , 'admin.Role.edit'] , 'active')}}">
                            <p>
                                <i class="left fad fa-angle-left"></i>
                                سطوح دسترسی
                            </p>
                            <i class="nav-icon "></i>
                        </a>
                        <ul class="nav nav-treeview p-0">

                            @can('show_role')
                                <li class="nav-item">
                                    <a class="nav-link {{is_active(['admin.Role.index' , 'admin.Role.create' , 'admin.Role.edit'])}} "
                                       href="{{route('admin.Role.index')}}">
                                        مدیریت مقام ها
                                        <i class="nav-icon "></i>
                                    </a>
                                </li>
                            @endcan
                            @can('show_permission')
                                <li class="nav-item">
                                    <a class="nav-link {{is_active(['admin.permission.index' , 'admin.permission.create' , 'admin.permission.edit'])}} "
                                       href="{{route('admin.permission.index')}}">
                                        مدیریت دسترسی ها
                                        <i class="nav-icon "></i>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @canany('show_article' , 'show_categroy_article' )
                    <li class="nav-item has-treeview {{is_active(['admin.categoryA.index', 'admin.categoryA.create' , 'admin.categoryA.edit' , 'admin.article.index' , 'admin.article.create' , 'admin.article.edit' ] , 'menu-open')}} ">
                        <a href="#"
                           class="nav-link {{is_active(['admin.categoryA.index', 'admin.categoryA.create' , 'admin.categoryA.edit' ,'admin.article.index' , 'admin.article.create' , 'admin.article.edit' ] , 'active')}}">
                            <p>
                                <i class="left fad fa-angle-left"></i>
                                مقالات
                            </p>
                            <i class="nav-icon "></i>
                        </a>

                        <ul class="nav nav-treeview p-0">
                            <li class="nav-item">
                                <a class="nav-link {{ is_active(['admin.categoryA.index' , 'admin.categoryA.create' , 'admin.categoryA.edit']) }} "
                                   href="{{route('admin.categoryA.index')}}">
                                    مدیریت دسته بندی
                                    <i class="nav-icon "></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ is_active(['admin.article.index' , 'admin.article.create' , 'admin.article.edit']) }} "
                                   href="{{route('admin.article.index' )}}">
                                    مدیریت مقالات
                                    <i class="nav-icon "></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                @can('show_vila')
                    <li class="nav-item">
                        <a href="{{route('admin.vila.index')}}"
                           class="nav-link {{is_active(['admin.vila.index' ])}}">
                            <p>مدیریت ویلا</p>
                            <i class="nav-icon "></i>
                        </a>
                    </li>
                @endcan
                @can('show_comment' )
                    <li class="nav-item has-treeview {{is_active(['admin.comments'] , 'menu-open')}} ">
                        <a href="#"
                           class="nav-link {{is_active(['admin.comments' ] , 'active')}}">
                            <p>
                                <i class="left fad fa-angle-left"></i>
                                ({{\App\Comment::where('approved' , 0)->count()}}) نظرات
                            </p>
                            <i class="nav-icon "></i>
                        </a>

                        <ul class="nav nav-treeview p-0">
                            <li class="nav-item">
                                <a class="nav-link {{ isUrl(route('admin.comments' )) }} "
                                   href="{{route('admin.comments')}}">
                                    ({{\App\Comment::where('approved' , 1)->count()}})  نظرات
                                    <i class="nav-icon "></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ isUrl(route('admin.comments' , ['unapproved' => '1'])) }} "
                                   href="{{route('admin.comments' , ['unapproved' => 1])}}">
                                    ({{\App\Comment::where('approved' , 0)->count()}})  نظرات تایید نشده
                                    <i class="nav-icon "></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                @can('show_discount')
                    <li class="nav-item">
                        <a href="{{route('admin.discount.index')}}"
                           class="nav-link {{is_active(['admin.discount.index' ])}}">
                            <p>مدیریت تخفیفات</p>
                            <i class="nav-icon "></i>
                        </a>
                    </li>
                @endcan
                @can('show_slider')
                    <li class="nav-item">
                        <a href="{{route('admin.slider.index')}}"
                           class="nav-link {{is_active(['admin.slider.index' , 'admin.slider.create', 'admin.slider.edit'])}}">
                            <p>مدیریت اسلایدر</p>
                            <i class="nav-icon "></i>
                        </a>
                    </li>
                @endcan
                @can('show_contact')
                    <li class="nav-item">
                        <a href="{{route('admin.contact.index')}}"
                           class="nav-link {{is_active(['admin.contact.index' ])}}">
                            <p> پیام های دریافتی ({{\App\Contact::where('approved' , '0')->count()}})</p>
                            <i class="nav-icon "></i>
                        </a>
                    </li>
                @endcan
                @can('show_option')
                    <li class="nav-item">
                        <a href="{{route('admin.option.index')}}"
                           class="nav-link {{is_active(['admin.option.index' ])}}">
                            <p>تنظیمات</p>
                            <i class="nav-icon "></i>
                        </a>
                    </li>
                @endcan
				</ul>
			</nav>
			<!-- /.sidebar-menu -->
		</div>
		<!-- /.sidebar -->
	</aside>
