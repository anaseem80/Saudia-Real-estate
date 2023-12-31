@extends('layouts.master')


@section('css')
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!--- Internal Select2 css-->
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!--Internal  Quill css -->
    {{-- <link href="{{ URL::asset('assets/plugins/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/quill/quill.bubble.css') }}" rel="stylesheet"> --}}
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css') }}"
        rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/pickerjs/picker.min.css') }}" rel="stylesheet">

    <link href="{{ URL::asset('assets/plugins/spectrum-colorpicker/spectrum.css') }}" rel="stylesheet">
@section('title')
    اعدادات الموقع و التطبيق
@stop
<style>
    .mg-r-10 {
        margin-right: 10px;
    }

    #quillEditor {
        direction: rtl;
        text-align: right;
    }

    body {
        font-family: Arial;
    }

    .tab {
        overflow: hidden;
        border-bottom: 1px solid #ccc;
        background-color: #fff;
    }

    .tab button {
        background-color: inherit;
        float: right;
        border: none;
        outline: navajowhite;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 15px;

    }

    .tab button:hover {
        background-color: #ddd;
        outline: navajowhite
    }

    .tab button.active {
        background-color: #0428c4;
        color: #fff;
        outline: navajowhite
    }

    .tabcontent {
        display: none;
        padding: 6px 12px;
        /* border: 1px solid #ccc; */
        border-top: none;
        animation: fadeEffect 1s;
        /* margin-top: 20px; */
        background-color: #fff;
        padding: 15px
    }

    @keyframes fadeEffect {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }
</style>
<style>
    .editor {
        width: 400px;
        margin: 0 auto;
    }

    textarea {
        width: 100%;
        height: 200px;
        font-size: 16px;
        font-weight: normal;
    }

    .controls {
        margin-top: 10px;
    }

    .font-size {
        width: 100px;
    }

    .font-weight {
        width: 100px;
    }

    .preview {
        margin-top: 20px;
    }
</style>




@endsection
{{-- ection('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">الاقسام /</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">فئة العقار</span>
						</div>
					</div>
			
				</div>
				<!-- breadcrumb -->
@endsection --}}
@section('content')

<br>
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

@if (session()->has('delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ session()->get('delete') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if (session()->has('edit'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session()->get('edit') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<h2 class="mt-3">ألسندات المتحركة</h2>

<div class="tab">
    <button class="tablinks" onclick="openTab(event, 'Tab1')" id="defaultOpen"> معلومات عنا</button>
    <button class="tablinks" onclick="openTab(event, 'Tab2')">الشروط و الاحكام</button>
    <button class="tablinks" onclick="openTab(event, 'Tab3')">اعدادات الالوان </button>
    {{-- <button class="tablinks" onclick="openTab(event, 'Tab4')">البانر</button> --}}
    <button class="tablinks" onclick="openTab(event, 'Tab4')">الصيانة</button>
</div>









<div id="Tab1" class="tabcontent">
    <form action="{{ route('settings.update') }}" method="POST">
        @csrf
        {{-- <textarea id="myTextarea"></textarea> --}}
        <textarea id="textarea" name="about_page" rows="15">{{ $settings->about_page }}</textarea>
        {{-- <div class="ql-wrapper ql-wrapper-demo">
        <div id="quillEditor">
            <p>معلومات عنا</p>
        </div>
        <button class="btn btn-primary w-100 mt-2">حفظ</button>
    </div> --}}
        <button class="btn btn-primary w-100 mt-2">حفظ</button>

    </form>
</div>




<div id="Tab2" class="tabcontent">
    <form action="{{ route('settings.update') }}" method="POST">
        @csrf
        <textarea id="textarea2" name="privacy" rows="15">{{ $settings->privacy }}</textarea>

        <button class="btn btn-primary w-100 mt-2">حفظ</button>

    </form>
</div>













<div id="Tab3" class="tabcontent">





    <form action="{{ route('settings.update') }}" method="POST">
        @csrf
        <h3 class="text-center">تغيير الوان الموقع</h3>
        <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
            <div class="card shadow-none border-0">
                <div class="card-body text-center">
                    <div>
                        <input id="showAlpha" value="{{ $settings->color_primery }}" type="text"
                            class="form-control" name="color_primery">
                    </div>
                </div>






            </div>
        </div>
        <button class="btn btn-primary w-100 mt-2">حفظ</button>

    </form>

</div>


<div id="Tab4" class="tabcontent">
    <form method="POST" action="{{ route('admin.updatewebsite') }}">
        @csrf
        <h3>وضع الصيانه</h3>
        <div class="main-toggle-group-demo" style="text-align: right;">
            <div style="float: right; margin-right: 10px; margin-left: 10px;">
                تغيير وضع الصيانه
            </div>
            <input type="text" value="true" name="maintenance_mode" hidden>
            {{-- $maintenance->ismaintenanc --}}
            <div class="main-toggle">
                <span></span>
            </div>

        </div>

        <br>
        <textarea id="textarea3" name="content" rows="15">{{ $maintenance->content }}</textarea>



        @php
            $bg_color = $maintenance->ismaintenanc ? '#2ecc71' : '#e74c3c';
        @endphp

        <div style="background-color: {{ $bg_color }}; opacity: 0.8; text-align: center; padding: 20px;">
            <span style="color: white; font-size: 24px;">
                @if ($maintenance->ismaintenanc)
                    الصيانة يعمل
                    <div
                        style="background-color: #0F52BA; opacity: 0.8; padding: 5px; border-radius: 5px; display: inline-block; margin-left: 10px;">
                        تم التحديث</div>
                @else
                    الصيانة لا تعمل
                    <div
                        style="background-color: #e67e22; opacity: 0.8; padding: 5px; border-radius: 5px; display: inline-block; margin-left: 10px;">
                        جاري التحديث
                    </div>
                @endif
            </span>
        </div>


        <button class="btn btn-primary w-100 mt-2">حفظ</button>

    </form>



</div>


















@endsection

@section('js')

<script src="https://code.jquery.com/jquery-3.5.0.min.js"
    integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace('textarea');
</script>


<script>
    CKEDITOR.replace('textarea2');
</script>

<script>
    CKEDITOR.replace('textarea3');
</script>
<script>
    CKEDITOR.replace('textarea4');
</script>


<script>
    function openTab(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
{{-- <script>
    $(document).ready(function() {
        // Initialize the select2 plugin on the country select box
        $('#country').select2();

        // When a country is selected, fetch its cities and populate the city select box
        $('#country').on('change', function() {
            var country = $(this).val();
            $('#city').empty().append('<option></option>').prop('disabled', true);
            if (country) {
                $.ajax({
                    url: '/cities/' + country,
                    dataType: 'json',
                    success: function(data) {
                        $.each(data, function(key, value) {
                            $('#city').append('<option value="' + key + '">' +
                                value + '</option>');
                        });
                        $('#city').prop('disabled', false).select2();
                    }
                });
            }
        });
    });
</script> --}}
<!-- Internal Data tables -->
<script src="{{ URL::asset('assets/js/modal.js') }}"></script>
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
{{-- <script>
    document.querySelector("#image").addEventListener("change", function() {
        var reader = new FileReader();
        reader.onload = function(e) {
            document.querySelector("#preview").setAttribute("src", e.target.result);
            document.querySelector("#preview").style.display = "block";
        };
        reader.readAsDataURL(this.files[0]);
    });
</script> --}}
{{-- <script>
    $('#exampleModal2').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var name = button.data('name')
        var image = button.data('image')
        var modal = $(this)
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #name').val(name);
        modal.find('.modal-body #image').val(image);
    })
</script> --}}
<script>
    var textInput = document.getElementById('text-input');
    var fontSizeInput = document.getElementById('font-size');
    var fontWeightInput = document.getElementById('font-weight');
    var textPreview = document.getElementById('text-preview');

    textInput.addEventListener('input', updatePreview);
    fontSizeInput.addEventListener('input', updatePreview);
    fontWeightInput.addEventListener('input', updatePreview);

    function updatePreview() {
        var fontSize = fontSizeInput.value + 'px';
        var fontWeight = fontWeightInput.value;
        var text = textInput.value;

        textPreview.style.fontSize = fontSize;
        textPreview.style.fontWeight = fontWeight;
        textPreview.textContent = text;
    }
</script>
<script>
    $('#modaldemo9').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var name = button.data('name')
        var code = button.data('code')
        var modal = $(this)
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #name').val(name);
        modal.find('.modal-body #code').val(code);
    })
</script>
<script>
    $(document).ready(function() {
        $('#exampleModal2').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var name = button.data('name')
            var code = button.data('code')
            var modal = $(this)
            modal.find('.modal-body #id').val(id)
            modal.find('.modal-body #name').val(name)
            modal.find('.modal-body #code').val(code);
        })
    });
</script>
<!--Internal  Datepicker js -->
<script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
<!--Internal  jquery.maskedinput js -->
<script src="{{ URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js') }}"></script>
<!--Internal  spectrum-colorpicker js -->
<script src="{{ URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js') }}"></script>
<!-- Internal Select2.min js -->
<script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
<!--Internal Ion.rangeSlider.min js -->
<script src="{{ URL::asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
<!--Internal  jquery-simple-datetimepicker js -->
<script src="{{ URL::asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js') }}"></script>
<!-- Ionicons js -->
<script src="{{ URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js') }}"></script>
<!--Internal  pickerjs js -->
<script src="{{ URL::asset('assets/plugins/pickerjs/picker.min.js') }}"></script>
<!--Internal quill js -->
{{-- <script src="{{ URL::asset('assets/plugins/quill/quill.min.js') }}"></script> --}}
<!-- Internal form-elements js -->
<script src="{{ URL::asset('assets/js/form-elements.js') }}"></script>
<!-- Internal Form-editor js -->
<script src="{{ URL::asset('assets/js/form-editor.js') }}"></script>
<script>
    var defaultColor = '{{ $settings->color_primery }}';
</script>
@endsection
