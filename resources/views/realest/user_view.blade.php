@extends('layouts.master')
@section('css')
    <!-- Internal Data table css -->
    <link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/prism/prism.css') }}" rel="stylesheet">
    <!---Internal Owl Carousel css-->
    <link href="{{ URL::asset('assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <!---Internal  Multislider css-->
    <link href="{{ URL::asset('assets/plugins/multislider/multislider.css') }}" rel="stylesheet">
    <!--- Select2 css -->
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection
@section('title')
    صفحة المستخدمين
@stop

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">المستخدمين</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    رؤية جميع المستخدمين</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session()->has('Add'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Add') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


    @if (session()->has('Edit'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Edit') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


    @if (session()->has('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('delete') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session()->has('Error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Error') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


    <!-- row -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">

                        <a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale"
                            data-toggle="modal" href="#exampleModal">اضافة المستخدم</a>

                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table key-buttons text-md-nowrap" data-page-length='50'>
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">#</th>
                                    <th class="border-bottom-0">اسم المستخدم</th>
                                    <th class="border-bottom-0">رقم الهاتف</th>
                                    <th class="border-bottom-0">البريد الاكتروني</th>
                                    <th class="border-bottom-0">صلاحيات المستخدم</th>
                                    <th class="border-bottom-0"> البلد </th>


                                    <th class="border-bottom-0"> العمليات</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0; ?>
                                @foreach ($userdata as $user)
                                    <?php $i++; ?>
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->first_phone }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->user_type }}</td>
                                        <td>{{ $user->country }}</td>
                                        <td>

                                            <button class="btn btn-outline-success btn-sm" 
                                                data-name="{{ $user->name }}"
                                                data-pro_id="{{ $user->id }}"
                                                data-first_phone={{ $user->first_phone }}
                                                data-second_phone={{ $user->second_phone }}
                                                data-city="{{ $user->city }}"
                                                data-country="{{ $user->country }}"
                                                data-toggle="modal" data-target="#edit_user">تعديل</button>



                                            <button class="btn btn-outline-danger btn-sm "
                                                data-pro_id="{{ $user->id }}" data-name="{{ $user->name }}"
                                                data-toggle="modal" data-target="#modaldemo9">حذف</button>


                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- add -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">اضافة المستخدم</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="user.store" method="post">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">اسم الالمستخدم</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>



                            {{-- <div class="mb-4">
                                <p class="mg-b-10">نوع المستخدم</p>
                                <select name="advertiser_type" class="form-control SlectBox"
                                    onclick="console.log($(this).val())" onchange="console.log('change is firing')">
                                    <option title="office" value="office">مكتب</option>
                                    <option title="broker" value="broker">وسيط</option>                                   
                                     <option title="owner" value="owner">مالك</option>
                                    <option title="user" value="user">مستخدم</option>
                                </select>
                            </div> --}}
                            <div class="mb-4">
                                <p class="mg-b-10">نوع المستخدم</p>
                                <select name="advertiser_type" class="form-control SlectBox"
                                    onchange="toggleFields(this.value)">
                                    <option title="user" value="user">مستخدم</option>

                                    <option title="office" value="office">مكتب</option>
                                    <option title="broker" value="broker">وسيط</option>
                                    <option title="owner" value="owner">مالك</option>
                                </select>
                            </div>






                            <div class="form-group">
                                <label for="title">رقم الهاتف الاول</label>
                                <input type="text" class="form-control" name="first_phone" id="first_phone">
                            </div>
                            <div class="form-group">
                                <label for="title">رقم الهاتف الثاني</label>
                                <input type="text" class="form-control" name="second_phone" id="second_phone">
                            </div>
                            <div class="form-group">
                                <label for="title">البلد </label>
                                <input type="text" class="form-control" name="country" id="country">
                            </div>
                            <div class="form-group">
                                <label for="title">المدينه </label>
                                <input type="text" class="form-control" name="city" id="city">
                            </div>



                            <div class="form-group" id="commercialFields" style="display: none;">
                                <label for="commercial_registration_no">رقم السجل التجاري</label>
                                <input type="text" class="form-control" name="commercial_registration_no"
                                    id="commercial_registration_no">
                            </div>

                            <div class="form-group" id="licenseFields" style="display: none;">
                                <label for="license_number">رقم الرخصة</label>
                                <input type="text" class="form-control" name="license_number" id="license_number">
                            </div>

                            <div class="form-group">
                                <label for="title">البريد الاكتروني </label>
                                <input type="text" class="form-control" name="email" id="email">
                            </div>
                            <div class="form-group">
                                <label for="password">كلمة السر</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>


                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">تاكيد</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>

        <!-- edit -->
        <div class="modal fade" id="edit_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">تعديل المستخدم</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action='user.update' method="post">
                        {{ method_field('post') }}
                        {{ csrf_field() }}




                        {{-- <div class="mb-4">
                                <p class="mg-b-10">القسم</p>
                                <select id="user_type" name="user_type" class="form-control SlectBox"
                                    onclick="console.log($(this).val())" onchange="console.log('change is firing')">
                                    <option title="Volvo is a car" value="admin">مسؤال</option>

                                    <option value="user">مستخدم</option>

                                </select>
                            </div> --}}




                        {{-- <div class="form-group">
                                <label for="title">عدد الاعلانات المسموح بها</label>
                             
                                <input type="text" class="form-control" name="number_ads" id="number_ads">
                            </div> --}}

                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">اسم المستخدم :</label>

                                <input type="hidden" class="form-control" name="pro_id" id="pro_id"
                                    value="">

                                <input type="text" class="form-control" name="name" id="name">
                            </div>

                            <div class="form-group">
                                <label for="title">رقم الهاتف الاول</label>
                                <input type="text" class="form-control" name="first_phone" id="first_phone"
                                    value="">
                            </div>

                            <div class="form-group">
                                <label for="title">رقم الهاتف الثاني</label>
                                <input type="text" class="form-control" name="second_phone" id="second_phone"
                                    value="">
                            </div>

                            <div class="form-group">
                                <label for="title">البلد </label>
                                <input type="text" class="form-control" name="country" id="country"
                                    value="">
                            </div>
                            <div class="form-group">
                                <label for="title">المدينه </label>
                                <input type="text" class="form-control" name="city" id="city"
                                    value="">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">تعديل البيانات</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modaldemo9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">حذف الالمستخدم</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="user.destroy" method="post">
                        {{ method_field('post') }}
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <p>هل انت متاكد من عملية الحذف ؟</p><br>
                            <input type="hidden" name="pro_id" id="pro_id" value="">
                            <input class="form-control" name="name" id="name" type="text" readonly>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                            <button type="submit" class="btn btn-danger">تاكيد</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>



    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
    <script>
        function toggleFields(selectedOption) {
            var commercialFields = document.getElementById("commercialFields");
            var licenseFields = document.getElementById("licenseFields");

            commercialFields.style.display = "none";
            licenseFields.style.display = "none";

            if (selectedOption === "office" || selectedOption === "owner") {
                commercialFields.style.display = "block";
                licenseFields.style.display = "block";
            } else if (selectedOption === "broker") {
                licenseFields.style.display = "block";
            }
        }
    </script>
    <!-- Internal Data tables -->
    <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
    <!--Internal  Datatable js -->
    <script src="{{ URL::asset('assets/js/table-data.js') }}"></script>
    <!-- Internal Prism js-->
    <script src="{{ URL::asset('assets/plugins/prism/prism.js') }}"></script>
    <!--Internal  Datepicker js -->
    <script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <!-- Internal Select2 js-->
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!-- Internal Modal js-->
    <script src="{{ URL::asset('assets/js/modal.js') }}"></script>


    <script>
        $('#edit_user').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var name = button.data('name')
            var pro_id = button.data('pro_id')
            var first_phone = button.data('first_phone')
            var second_phone = button.data('second_phone')
            var country = button.data('country')
            var city = button.data('city')

            var modal = $(this)
            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #pro_id').val(pro_id);
            modal.find('.modal-body #second_phone').val(second_phone);
            modal.find('.modal-body #country').val(country);
            modal.find('.modal-body #city').val(city);
            modal.find('.modal-body #first_phone').val(first_phone);
        })


        $('#modaldemo9').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var pro_id = button.data('pro_id')
            var name = button.data('name')
            var modal = $(this)

            modal.find('.modal-body #pro_id').val(pro_id);
            modal.find('.modal-body #name').val(name);
        })
    </script>

@endsection
