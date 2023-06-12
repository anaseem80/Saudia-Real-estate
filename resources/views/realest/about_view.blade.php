@extends('layouts.master2')
@section('css')
<!-- Internal Select2 css -->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection

@section('content')
<form action="{{ route("setting.update") }}"method="post" enctype="multipart/form-data">
	{{ method_field('post') }}
	{{ csrf_field() }}
				<!-- row -->
				<div class="row row-sm">
				
					<!-- Col -->
					<div class="col-lg-4">
						<div class="card mg-b-20">
							<div class="card-body">
								
								<div class="pl-0">
									<div class="main-profile-overview">
										<div class="main-img-user profile-user">
											<img alt="" src="{{URL::asset('logoapp (1).png')}}"><a class="fas fa-camera profile-edit" href="JavaScript:void(0);"></a>
										</div>
										<div class="d-flex justify-content-between mg-b-20">
											<div>
												<h5 class="main-profile-name">{{$setting->company_name}}</h5>
												<p class="main-profile-name-text">{{$setting->email}}</p>
											</div>
										</div>
										<h6>السيره الذاتية</h6>
										<div class="main-profile-bio">
											{{$setting->biographical_information}}
										</div><!-- main-profile-bio -->
									
										<hr class="mg-y-30">
										<label class="main-content-label tx-13 mg-b-20">وسائل التواصل</label>
										<div class="main-profile-social-list">
											<div class="media">
												<div class="media-icon bg-primary-transparent text-primary">
													<i class="icon ion-logo-github"></i>
												</div>
												<div class="media-body">
													<span>جيتهاب</span> <a href="">{{$setting->github}}</a>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-success-transparent text-success">
													<i class="icon ion-logo-twitter"></i>
												</div>
												<div class="media-body">
													<span>تويتر</span> <a href="">{{$setting->twitter}}</a>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-info-transparent text-info">
													<i class="icon ion-logo-linkedin"></i>
												</div>
												<div class="media-body">
													<span>لينكدن</span> <a href="">{{$setting->linkedin}}</a>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-danger-transparent text-danger">
													<i class="icon ion-md-link"></i>
												</div>
												<div class="media-body">
													<span>موقع الشركه</span> <a href="">{{$setting->website_link}}</a>
												</div>
											</div>
										</div>
										<hr class="mg-y-30">
									
										
									
										<!--skill bar-->
									</div><!-- main-profile-overview -->
								</div>
								
							</div>
						</div>
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label tx-13 mg-b-25">
									التواصل
								</div>
								<div class="main-profile-contact-list">
									<div class="media">
										<div class="media-icon bg-primary-transparent text-primary">
											<i class="icon ion-md-phone-portrait"></i>
										</div>
										<div class="media-body">
											<span>الهاتف</span>
											<div>
												{{$setting->company_phone}}
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-icon bg-success-transparent text-success">
											<i class="icon ion-logo-slack"></i>
										</div>
										<div class="media-body">
											<span>موقع الشركه</span>
											<div>
												{{$setting->website_link}}
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-icon bg-info-transparent text-info">
											<i class="icon ion-md-locate"></i>
										</div>
										<div class="media-body">
											<span>عنوان الشركه</span>
											<div>
												{{$setting->company_address}}
											</div>
										</div>
									</div>
								</div><!-- main-profile-contact-list -->
							</div>
						</div>
					</div>

					<!-- Col -->
					<div class="col-lg-8">
						<div class="card">
							<div class="card-body">
								

									<div class="mb-4 main-content-label">الاسم</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">اسم الشركه</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control" readonly placeholder="UserName" value="{{$setting->company_name}}" name="username" id="username">
											</div>
										</div>
									</div>
									{{-- <div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">First Name</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="First Name" value="Petey">
											</div>
										</div>
									</div> --}}
									{{-- <div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">last Name</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="Last Name" value="Pechon">
											</div>
										</div>
									</div> --}}
									<div class="mb-4 main-content-label">معلومات الاتصال</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">البريد الاكتروني<i>(required)</i></label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control" readonly placeholder="Email" value="{{$setting->email}}" name="email" id="email">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">رابط الموقع</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control" readonly name="Website" id="Website"  placeholder="Website" value="{{$setting->website_link}}">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">هاتف الشركه</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control" readonly placeholder="phone number" value="{{$setting->company_phone}}" name="phone" id="phone">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">عنوان الشركه</label>
											</div>
											<div class="col-md-9">
												<textarea class="form-control" name="address" id="address" rows="2" readonly placeholder="Address">{{$setting->company_address}}</textarea>
											</div>
										</div>
									</div>
									<div class="mb-4 main-content-label">المعلومات التواصل الاجتماعي</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">تويتر</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control" readonly placeholder="twitter" value="{{$setting->twitter}}" name="twitter" id="twitter">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">فيسبوك</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control" readonly placeholder="facebook" value="{{$setting->facebook}}" name="facebook" id="facebook">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">جوجل</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control" readonly placeholder="google" value="{{$setting->google}}" name="google" id="google">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">لينكدن</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control" readonly placeholder="linkedin" value="{{$setting->linkedin}}" name="linkedin" id="linkedin">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">جيتهاب</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control" placeholder="github" value="{{$setting->github}}"  name="github" id="github" readonly>
											</div>
										</div>
									</div>
									<div class="mb-4 main-content-label">معلومات اضافيه عن الشركه</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label"  name="example" id="example">معلومات السيرة الذاتية</label>
											</div>
											<div class="col-md-9">
												<textarea class="form-control" readonly name="example-textarea-input" rows="4" placeholder="">{{$setting->biographical_information}}</textarea>
											</div>
										</div>
									</div>
							
								
							</div>
							
						</div>
					</div>
					<!-- /Col -->
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
	</form>
@endsection
@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Internal Select2.min js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection