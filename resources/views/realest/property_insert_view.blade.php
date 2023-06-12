@extends('layouts.master')
@section('css')
<link href="{{URL::asset('passets/css-rtl/style-dark.css')}}" rel="stylesheet">
<!-- Internal Select2 css -->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<!--Internal  Datetimepicker-slider css -->
<link href="{{URL::asset('assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/pickerjs/picker.min.css')}}" rel="stylesheet">
<!-- Internal Spectrum-colorpicker css -->
<link href="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.css')}}" rel="stylesheet">
<!--- Internal Select2 css-->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<!---Internal Fileupload css-->
<link href="{{URL::asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>
<!---Internal Fancy uploader css-->
<link href="{{URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet" />
<!--Internal Sumoselect css-->
<link rel="stylesheet" href="{{URL::asset('assets/plugins/sumoselect/sumoselect-rtl.css')}}">
<!--Internal  TelephoneInput css-->
<link rel="stylesheet" href="{{URL::asset('assets/plugins/telephoneinput/telephoneinput-rtl.css')}}">
<style>
    body {
background-color: #33475b;
}
    #location-data {
  display: flex;
  flex-wrap: wrap;
}

#location-data label {
  width: 100px;
  margin-right: 10px;
  text-align: right;
}

#location-data input[type="text"] {
  flex: 1;
}
    .gallery {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        max-width: 800px;

    }
    
    .gallery img {
        width: 20%;
        height: 200px;
        object-fit: cover;
        margin-bottom: 10px;
        margin-right: 10px;
        margin-bottom: 10px;
    }
    </style>
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">عقار</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ اضافة عقار</span>
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





<form action="{{ route("property.store") }}"method="post" enctype="multipart/form-data">
    {{ method_field('post') }}
    {{ csrf_field() }}
				<!-- row -->
				<div class="row">
                    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<!--div-->
						<div class="card">



							<div class="card-body">

								<div class="main-content-label mg-b-5">
									{{Getusertype()}}
								</div>
                                <p> </p>
                               
								<div class="row row-sm">
                                    <div class="col-lg">
                                        <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" 
                                        placeholder="اسم العقار" 
                                        type="text" 
                                        name="name"
                                       value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-lg">
										<input class="form-control" placeholder="اكتب اسم المدينه" type="text"     name="country"
                                        value="{{ old('country') }}" >
									</div>
                                    <div class="col-lg">
										<input class="form-control" placeholder="سعر العقار" type="text"  name="price"
                                        value="{{ old('price') }}" >
									</div>
                                    <div class="col-lg">
										<input class="form-control" placeholder="مساحة العقار" type="text"  name="space"
                                        value="{{ old('space') }}">
									</div>
								</div>
								<div class="row row-sm mg-t-20">
									<div class="col-lg">
										<textarea class="form-control" placeholder="اضافة وصف للعقار" rows="3" name="description" ></textarea>
									</div>
                                    <div class="mb-4">
                                        <p class="mg-b-10">عدد الغرف</p>
                                        <select name="numbeer_room" class="form-control SlectBox" onclick="console.log($(this).val())" onchange="console.log('change is firing')">
                                            <!--placeholder-->
                                            <option title="Volvo is a car"  value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <p class="mg-b-10">عدد الحمامات</p>
                                        <select name="numbeer_toilet" class="form-control SlectBox" onclick="console.log($(this).val())" onchange="console.log('change is firing')">
                                            <!--placeholder-->
                                            <option title="Volvo is a car"  value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
								</div>
                                <div class="card-body">
                                    <div>
                                        <h6 class="card-title mb-1">اضافة بعض التفاصيل للعقار</h6>
                                    </div>
                                    <div class="mb-4">
                                        <p class="mg-b-10">الاتجاه</p>
                                        <select name="property_direction" class="form-control SlectBox" onclick="console.log($(this).val())" onchange="console.log('change is firing')">
                                            <!--placeholder-->
                                            <option title="Volvo is a car"  value="شمالي">شمالي</option>
                                            <option value="saab">غربي</option>
                                            <option value="mercedes">شرقي</option>
                                            <option value="audi">جنوبي</option>
                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        <p class="mg-b-10">مدة الايجار</p>
                                        <select name="Rental_term" class="form-control SlectBox" onclick="console.log($(this).val())" onchange="console.log('change is firing')">
                                            <!--placeholder-->
                                            <option title="Volvo is a car"  value="سنوي">سنوي</option>                                           
                                            <option value="شهري">شهري</option>
                                            <option value="يومي">يومي</option>
                                            <option value="تمليك">للبيع</option>
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <p class="mg-b-10">نوع العقار</p>
                                        <select name="catogerie_id" class="form-control SlectBox" onclick="console.log($(this).val())" onchange="console.log('change is firing')">
                                            <!--placeholder-->
                                            <option title="Volvo is a car"  value="منزل">اختار نوع العقار</option> 
                                           @foreach ($catogery as $data)
                                           <option value="{{$data->id}}">{{$data->name}}</option>
                                           @endforeach

                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <p class="mg-b-10">مميزات العقار</p>
                                        <select name="future[]" multiple="multiple" class="testselect2">
                                            <option selected value="سطح خاص">سطح خاص</option>
                                            <option value="مدخل سيارة">مدخل سيارة</option>
                                            <option value="مكيفات">مدخل سيارة</option>
                                            <option value="مدخل خاص ">مدخل خاص </option>
                                            <option value="إطلالة على معلم رئيسي">إطلالة على معلم رئيسي</option>
                                            <option value="إنترنت">إنترنت</option>
                                            <option value="منطقة لعب للأطفال "> منطقة لعب للأطفال </option>
                                            <option value="نادي رياضي مشترك ">نادي رياضي مشترك </option>
                                        </select>
                                    </div>
                                </div>
                                {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

                                <input type="file" multiple id="gallery-photo-add">
                                <div class="gallery"></div> --}}
                                {{---------------------------------------------------------------------------------------------------------------------------------------------------------}}
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div>
                                                    <h6 class="card-title mb-1">تحميل صور العقار</h6>
                                                    <p></p>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-sm-12 col-md-4">
                                                        <input name="images[]" type="file" class="dropify" data-height="200" multiple id="gallery-photo-add" enctype="multipart/form-data" multiple>                                              
                                                    </div>
                                                    <div class="gallery"></div>
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="col-lg">
                                    <input class="form-control" placeholder="مساحة العقار" type="text"  name="space"
                                    value="{{ old('space') }}">
                                </div> --}}

                                  <div id="location-data">
                                    <label for="latitude">خطوط العرض:</label>
                                    <input class="form-control" type="text" id="latitude" name="latitude" readonly>
                                    <br>
                                    <label for="longitude">خطوط الطول:</label>
                                    <input class="form-control" type="text" id="longitude" name="longitude" readonly>
                                  </div>
                                  <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label for="projectinput1" > العنوان</label>
                                        <input  type="text" id="pac-input"
                                               class="form-control"
                                               placeholder="البحث" name="address">
    
                                        {{-- @error("address")
                                        <span class="text-danger"> {{$message}}</span>
                                        @enderror --}}
                                    </div>
                                </div>
                               

   



                                </div>


                                <div id="map" style="height: 500px;width: 1000px; margin: 0 auto;"></div>
                      <br>
                      <p></p>
                                <button type="submit" class="btn btn-danger"
                                style="width:200px; height:50px; background-color: blue; color:white; margin: 0 auto;">حفظ العقار</button>
                        
				    </div>
				<!-- row closed -->
			   </div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
    </form>
@endsection
@section('js')
<!--Internal  Datepicker js -->
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!--Internal  jquery.maskedinput js -->
<script src="{{URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>
<!--Internal  spectrum-colorpicker js -->
<script src="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>
<!-- Internal Select2.min js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!--Internal Ion.rangeSlider.min js -->
<script src="{{URL::asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
<!--Internal  jquery-simple-datetimepicker js -->
<script src="{{URL::asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>
<!-- Ionicons js -->
<script src="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>
<!--Internal  pickerjs js -->
<script src="{{URL::asset('assets/plugins/pickerjs/picker.min.js')}}"></script>
<!-- Internal form-elements js -->
<script src="{{URL::asset('assets/js/form-elements.js')}}"></script>
<!--Internal  Datepicker js -->
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!-- Internal Select2 js-->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!--Internal Fileuploads js-->
<script src="{{URL::asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>
<!--Internal Fancy uploader js-->
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>
<!--Internal  Form-elements js-->
<script src="{{URL::asset('assets/js/advanced-form-elements.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
<!--Internal Sumoselect js-->
<script src="{{URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js')}}"></script>
<!-- Internal TelephoneInput js-->
<script src="{{URL::asset('assets/plugins/telephoneinput/telephoneinput.js')}}"></script>
<script src="{{URL::asset('assets/plugins/telephoneinput/inttelephoneinput.js')}}"></script>
<script>
$(function() {
    // Multiple images preview in browser



    var imagesPreview = function(input, placeToInsertImagePreview) {
  


        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }
                console.log("Selected picture name: 111");
                reader.readAsDataURL(input.files[i]);
            }
        }

    };
    console.log("Selected picture name: 222" );
    $('#gallery-photo-add').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });
    
});
  </script>












<script>

    $("#pac-input").focusin(function() {
        $(this).val('');
    });

    $('#latitude').val('');
    $('#longitude').val('');

    // This example adds a search box to a map, using the Google Place Autocomplete
    // feature. People can enter geographical searches. The search box will return a
    // pick list containing a mix of places and predicted search terms.
    // This example requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
    function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 24.740691, lng: 46.6528521 },
            zoom: 13,
            mapTypeId: 'roadmap'
        });
        // move pin and current location
        infoWindow = new google.maps.InfoWindow;
        geocoder = new google.maps.Geocoder();
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                map.setCenter(pos);
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(pos),
                    map: map,
                    title: 'موقعك الحالي'
                });
                markers.push(marker);
                marker.addListener('click', function() {
                    geocodeLatLng(geocoder, map, infoWindow,marker);
                });
                // to get current position address on load
                google.maps.event.trigger(marker, 'click');
            }, function() {
                handleLocationError(true, infoWindow, map.getCenter());
            });
        } else {
            // Browser doesn't support Geolocation
            console.log('dsdsdsdsddsd');
            handleLocationError(false, infoWindow, map.getCenter());
        }
        var geocoder = new google.maps.Geocoder();
        google.maps.event.addListener(map, 'click', function(event) {
            SelectedLatLng = event.latLng;
            geocoder.geocode({
                'latLng': event.latLng
            }, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        deleteMarkers();
                        addMarkerRunTime(event.latLng);
                        SelectedLocation = results[0].formatted_address;
                        console.log( results[0].formatted_address);
                        splitLatLng(String(event.latLng));
                        $("#pac-input").val(results[0].formatted_address);
                    }
                }
            });
        });
        function geocodeLatLng(geocoder, map, infowindow,markerCurrent) {
            var latlng = {lat: markerCurrent.position.lat(), lng: markerCurrent.position.lng()};
            /* $('#branch-latLng').val("("+markerCurrent.position.lat() +","+markerCurrent.position.lng()+")");*/
            $('#latitude').val(markerCurrent.position.lat());
            $('#longitude').val(markerCurrent.position.lng());
            document.getElementById("latitude").value = position.coords.latitude;
          document.getElementById("longitude").value = position.coords.longitude;
            geocoder.geocode({'location': latlng}, function(results, status) {
                if (status === 'OK') {
                    if (results[0]) {
                        map.setZoom(8);
                        var marker = new google.maps.Marker({
                            position: latlng,
                            map: map
                        });
                        markers.push(marker);
                        infowindow.setContent(results[0].formatted_address);
                        SelectedLocation = results[0].formatted_address;
                        $("#pac-input").val(results[0].formatted_address);
                        infowindow.open(map, marker);
                    } else {
                        window.alert('No results found');
                    }
                } else {
                    window.alert('Geocoder failed due to: ' + status);
                }
            });
            SelectedLatLng =(markerCurrent.position.lat(),markerCurrent.position.lng());
        }
        function addMarkerRunTime(location) {
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
            markers.push(marker);
        }
        function setMapOnAll(map) {
            for (var i = 0; i < markers.length; i++) {
                markers[i].setMap(map);
            }
        }
        function clearMarkers() {
            setMapOnAll(null);
        }
        function deleteMarkers() {
            clearMarkers();
            markers = [];
        }
        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        $("#pac-input").val("أبحث هنا ");
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(input);
        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
            searchBox.setBounds(map.getBounds());
        });
        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
            var places = searchBox.getPlaces();
            if (places.length == 0) {
                return;
            }
            // Clear out the old markers.
            markers.forEach(function(marker) {
                marker.setMap(null);
            });
            markers = [];
            // For each place, get the icon, name and location.
            var bounds = new google.maps.LatLngBounds();
            places.forEach(function(place) {
                if (!place.geometry) {
                    console.log("Returned place contains no geometry");
                    return;
                }
                var icon = {
                    url: place.icon,
                    size: new google.maps.Size(100, 100),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(25, 25)
                };
                // Create a marker for each place.
                markers.push(new google.maps.Marker({
                    map: map,
                    icon: icon,
                    title: place.name,
                    position: place.geometry.location
                }));
                $('#latitude').val(place.geometry.location.lat());
                $('#longitude').val(place.geometry.location.lng());
                if (place.geometry.viewport) {
                    // Only geocodes have viewport.
                    bounds.union(place.geometry.viewport);
                } else {
                    bounds.extend(place.geometry.location);
                }
            });
            map.fitBounds(bounds);
        });
    }
    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
            'Error: The Geolocation service failed.' :
            'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
    }
    function splitLatLng(latLng){
        var newString = latLng.substring(0, latLng.length-1);
        var newString2 = newString.substring(1);
        var trainindIdArray = newString2.split(',');
        var lat = trainindIdArray[0];
        var Lng  = trainindIdArray[1];
        $("#latitude").val(lat);
        $("#longitude").val(Lng);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANd3nsdL7bmOR-8UkZDrTNtjaX63JbjZs&libraries=places&callback=initAutocomplete&language=ar&region=EG
     async defer"></script>
@endsection