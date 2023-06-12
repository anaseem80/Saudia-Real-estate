@extends('layouts.master')
@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
@endsection
@section('title')
الصفحه الرائيسيه
@stop

@section('page-header')
		<p>_</p>
		<i></i>

@endsection
@section('content')
				<!-- row -->
				<div class="row row-sm">
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-primary-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">مجموع عدد العقارات</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">{{$totalProperties}}</h4>
											<p class="mb-0 tx-12 text-white op-7">هذه الاحصائيه لاخر شهر</p>
										</div>

									</div>
								</div>
							</div>
							<span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-danger-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">مجموع الدول المختلفه المستخدمه للتطبيق</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">{{$totalCountries}}</h4>
											<p class="mb-0 tx-12 text-white op-7">هذه الاحصائيه لاخر شهر</p>
										</div>
									
									</div>
								</div>
							</div>
							<span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-success-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">مجموع عدد الاستعلامات عن جميع العقارات</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">{{$totalQueries}}</h4>
											<p class="mb-0 tx-12 text-white op-7">هذه الاحصائيه لاخر شهر</p>
										</div>

									</div>
								</div>
							</div>
							<span id="compositeline3" class="pt-1">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-warning-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">مجموع عدد مستخدمين التطبيق</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">{{$totalUsers}}</h4>
											<p class="mb-0 tx-12 text-white op-7">هذه الاحصائيه لاخر شهر</p>
										</div>

									</div>
								</div>
							</div>
							<span id="compositeline4" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
						</div>
					</div>
				</div>
				<!-- row closed -->
				
				<!-- row opened -->
				{{-- <div class="row row-sm">
					{{-- <div class="col-md-12 col-lg-12 col-xl-7">
						<div class="card">
							<div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mb-0">Order status</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
								<p class="tx-12 text-muted mb-0">Order Status and Tracking. Track your order from ship date to arrival. To begin, enter your order number.</p>
							</div>
							<div class="card-body">
								<div class="total-revenue">
									<div>
									  <h4>120,750</h4>
									  <label><span class="bg-primary"></span>success</label>
									</div>
									<div>
									  <h4>56,108</h4>
									  <label><span class="bg-danger"></span>Pending</label>
									</div>
									<div>
									  <h4>32,895</h4>
									  <label><span class="bg-warning"></span>Failed</label>
									</div>
								  </div>
								<div id="bar" class="sales-bar mt-4"></div>
							</div>
						</div>
					</div> --}}



					{{-- <div class="col-lg-12 col-xl-5">
						<div class="card card-dashboard-map-one">
						  <label class="main-content-label">Sales Revenue by Customers in the UAE</label>
						  <span class="d-block mg-b-20 text-muted tx-12">Sales Performance of all states in the United Arab Emirates</span>
						  <div class="">
							<div id="uae-map" style="width: 100%; height: 400px;"></div>
						  </div>
						</div>
					  </div>




 --}}

 




				</div> 
				<!-- row closed -->

				<!-- row opened -->
				<div class="row row-sm">  
					<div class="col-xl-4 col-md-12 col-lg-12">
						<div class="card">
							<div class="card-header pb-1">
								<h3 class="card-title mb-2">اخر العملاء طلبا للعقارات</h3>
								<p class="tx-12 mb-0 text-muted">العميل هو فرد أو شركة تشتري خدمة العقارات وقد تطورت لتشمل الوقت الفعلي</p>
							</div>
							<div class="card-body p-0 customers mt-1">
								<div class="list-group list-lg-group list-group-flush">


									@foreach ($last5Customers as $item)
									<div class="list-group-item list-group-item-action" href="#">
										<div class="media mt-0">
											<img class="avatar-lg rounded-circle ml-3 my-auto" src="{{URL::asset('assets/img/faces/3.jpg')}}" alt="Image description">
											<div class="media-body">
												<div class="d-flex align-items-center">
													<div class="mt-0">
														<h5 class="mb-1 tx-15">{{$item->username}}</h5>
														<p class="mb-0 tx-13 text-muted">User ID: {{$item->id}}<span class="text-success ml-2">User email: {{$item->useremail}}</span></p>
													</div>
													<span class="mr-auto wd-45p fs-16 mt-2">
											
													</span>
												</div>
											</div>
										</div>
									</div>
									@endforeach
									
									
									
							



								</div>
							</div>
						</div>
					</div>






					<div class="col-xl-4 col-md-12 col-lg-6">
						<div class="card">
							<div class="card-header pb-1">
								<h3 class="card-title mb-2">النشطات في التطبيق والموقع</h3>
						
							</div>
							<div class="product-timeline card-body pt-2 mt-1">
								<ul class="timeline-1 mb-0">
									<li class="mt-0"> <i class="ti-pie-chart bg-primary-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">عدد العقارات </span> <a href="#" class="float-left tx-11 text-muted"></a>
										<p class="mb-0 text-muted tx-12">{{$totalProperties}}  مجموع العقارات </p>
									</li>
									<li class="mt-0"> <i class="mdi mdi-cart-outline bg-danger-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">عدد العقارات الغير مقبوله</span> <a href="#" class="float-left tx-11 text-muted"></a>
										<p class="mb-0 text-muted tx-12">{{$totaldontProperties}} العقارات الغير مقبوله</p>
									</li>
									<li class="mt-0"> <i class="ti-bar-chart-alt bg-success-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">عدد الاستعلامات</span> <a href="#" class="float-left tx-11 text-muted"></a>
										<p class="mb-0 text-muted tx-12">{{$totalQueries}}  جميع الاستعلامات</p>
									</li>
									<li class="mt-0"> <i class="ti-wallet bg-warning-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">عدد الابلاغات</span> <a href="#" class="float-left tx-11 text-muted"></a>
										<p class="mb-0 text-muted tx-12">{{$totalReports}}  جميع الابلاغات</p>
									</li>
									<li class="mt-0"> <i class="si si-eye bg-purple-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">عدد المستخدمين</span> <a href="#" class="float-left tx-11 text-muted"></a>
										<p class="mb-0 text-muted tx-12">{{$totalUsers}} عدد المستخدمين</p>
									</li>
									<li class="mt-0 mb-0"> <i class="icon-note icons bg-primary-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">عدد الدول </span> <a href="#" class="float-left tx-11 text-muted"></a>
										<p class="mb-0 text-muted tx-12">{{$totalCountries}} عدد الدول</p>
									</li>
								</ul>
							</div>
						</div>
					</div>


					<div class="col-md-12 col-lg-4 col-xl-4">
						<div class="card card-dashboard-eight pb-2">
							<h6 class="card-title">اعلي الدول</h6><span class="d-block mg-b-10 text-muted tx-12">احصائيه لاعلي الدول المتواجد به مستخدمين للتطبيق والموقع </span>
							<div class="list-group">
							


								@foreach ($mostuserCountries as $item)
							
								<div class="list-group-item border-top-0">
									<i class="flag-icon flag-icon-Egypt flag-icon-squared"></i>
									<p>{{$item->country}}</p><span>{{$item->count}}</span>
								</div>
								
	
								@endforeach



							
							</div>
						</div>
					</div>




				</div>
				<!-- row close -->

				<!-- row opened -->
				<div class="row row-sm row-deck">
					<div class="col-md-12 col-lg-4 col-xl-4">
						<div class="card card-dashboard-eight pb-2">
							<h6 class="card-title">اعلي المناطق</h6><span class="d-block mg-b-10 text-muted tx-12">احصائيه لاعلي المناطق  تواجدا للعقارات</span>
							<div class="list-group">
							


								@foreach ($mostCountries as $item)
							
								<div class="list-group-item border-top-0">
									<i class="flag-icon flag-icon-ae flag-icon-squared"></i>
									<p>{{$item->country}}</p><span>{{$item->count}}</span>
								</div>
								
	
								@endforeach



							
							</div>
						</div>
					</div>



					<div class="col-md-12 col-lg-8 col-xl-8">
						<div class="card card-table-two">
							<div class="d-flex justify-content-between">
								<h4 class="card-title mb-1">اكثر العقارات عليها طلب</h4>
								<i class="mdi mdi-dots-horizontal text-gray"></i>
							</div>
							<span class="tx-12 tx-muted mb-3 ">هذه بيانات اكثر العقارات طالبا في التطبيق و الموقع.</span>
							<div class="table-responsive country-table">
								<table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
									<thead>
										<tr>
											<th class="wd-lg-5p">معرف العقار</th>
											<th class="wd-lg-15p tx-right">اسم العقار</th>
											<th class="wd-lg-10p tx-right">بلد العقار</th>
											<th class="wd-lg-10p tx-right">المعرف الخاص بصاحب العقار</th>
											<th class="wd-lg-10p tx-right">عدد الطلبات للعقار</th>
											<th class="wd-lg-10p tx-right">عدد مشاهدات العقار</th>
											<th class="wd-lg-10p tx-right">تاريخ نشر العقار</th>
									
										</tr>
									</thead>
									<tbody>

										@foreach ($highestQueriedProperty as $item)
										<tr>
											<td>{{$item->id}}</td>
											<td class="tx-right tx-medium tx-inverse">{{$item->name}}</td>
											<td class="tx-right tx-medium tx-inverse">{{$item->country}}</td>
											<td class="tx-right tx-medium tx-inverse">{{$item->user_id}}</td>
											<td class="tx-right tx-medium tx-success">+{{$item->inquiry_count}}</td>
											<td class="tx-right tx-medium tx-inverse">{{$item->views}}</td>
											<td class="tx-right tx-medium tx-inverse">{{$item->created_at}}</td>
										</tr>
										@endforeach


									</tbody>
								</table>
							</div>
						</div>
					</div>


					<div class="col-md-12 col-lg-8 col-xl-8">
						<div class="card card-table-two">
							<div class="d-flex justify-content-between">
								<h4 class="card-title mb-1">اكثر العقارات المبلغ عنها</h4>
								<i class="mdi mdi-dots-horizontal text-gray"></i>
							</div>
							<span class="tx-12 tx-muted mb-3 ">هذه بيانات اكثر العقارات المبلغ عنها.</span>
							<div class="table-responsive country-table">
								<table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
									<thead>
										<tr>
											<th class="wd-lg-5p">معرف العقار</th>
											<th class="wd-lg-15p tx-right">اسم العقار</th>
											<th class="wd-lg-10p tx-right">بلد العقار</th>
											<th class="wd-lg-10p tx-right">المعرف الخاص بصاحب العقار</th>
											<th class="wd-lg-10p tx-right">عدد الابلاغات للعقار</th>
											<th class="wd-lg-10p tx-right">عدد مشاهدات العقار</th>
											<th class="wd-lg-10p tx-right">تاريخ نشر العقار</th>
									
										</tr>
									</thead>
									<tbody>

										@foreach ($highestReportedProperty as $item)
										<tr>
											<td>{{$item->id}}</td>
											<td class="tx-right tx-medium tx-inverse">{{$item->name}}</td>
											<td class="tx-right tx-medium tx-inverse">{{$item->country}}</td>
											<td class="tx-right tx-medium tx-inverse">{{$item->user_id}}</td>
											<td class="tx-right tx-medium tx-danger">+{{$item->report_count}}</td>
											<td class="tx-right tx-medium tx-inverse">{{$item->views}}</td>
											<td class="tx-right tx-medium tx-inverse">{{$item->created_at}}</td>
										</tr>
										@endforeach


									</tbody>
								</table>
							</div>
						</div>
					</div>

				
					


					<div class="col-md-12 col-lg-8 col-xl-8">
						<div class="card card-table-two">
							<div class="d-flex justify-content-between">
								<h4 class="card-title mb-1">اكثر العقارات مشاهدات</h4>
								<i class="mdi mdi-dots-horizontal text-gray"></i>
							</div>
							<span class="tx-12 tx-muted mb-3 ">هذه بيانات اكثر العقارات مشاهده وزيارة من قبل المستخدمين.</span>
							<div class="table-responsive country-table">
								<table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
									<thead>
										<tr>
											<th class="wd-lg-5p">معرف العقار</th>
											<th class="wd-lg-15p tx-right">اسم العقار</th>
											<th class="wd-lg-10p tx-right">بلد العقار</th>
											<th class="wd-lg-10p tx-right">المعرف الخاص بصاحب العقار</th>
										
											<th class="wd-lg-10p tx-right">عدد مشاهدات العقار</th>
											<th class="wd-lg-10p tx-right">تاريخ نشر العقار</th>
									
										</tr>
									</thead>
									<tbody>

										@foreach ($mostViewedProperties as $item)
										<tr>
											<td>{{$item->id}}</td>
											<td class="tx-right tx-medium tx-inverse">{{$item->name}}</td>
											<td class="tx-right tx-medium tx-inverse">{{$item->country}}</td>
											<td class="tx-right tx-medium tx-inverse">{{$item->user_id}}</td>
									
											<td class="tx-right tx-medium tx-inverse">{{$item->views}}</td>
											<td class="tx-right tx-medium tx-inverse">{{$item->created_at}}</td>
										</tr>
										@endforeach


									</tbody>
								</table>
							</div>
						</div>
					</div>






				</div>
				<!-- /row -->
			</div>
		</div>
		<!-- Container closed -->
@endsection
@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Moment js -->
<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<!--Internal  Flot js-->
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.categories.js')}}"></script>
<script src="{{URL::asset('assets/js/dashboard.sampledata.js')}}"></script>
<script src="{{URL::asset('assets/js/chart.flot.sampledata.js')}}"></script>
<!--Internal Apexchart js-->
<script src="{{URL::asset('assets/js/apexcharts.js')}}"></script>
<!-- Internal Map -->
<script src="{{URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{URL::asset('assets/js/modal-popup.js')}}"></script>
<!--Internal  index js -->
<script src="{{URL::asset('assets/js/index.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.vmap.sampledata.js')}}"></script>	


@endsection