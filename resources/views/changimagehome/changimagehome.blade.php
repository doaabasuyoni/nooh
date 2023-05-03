@extends('layouts.app')
@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/dropzone.css')}}">
@endpush

@section('content')
	<div class="container mt-5" dir="rtl">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5> تغير الصور في الصفحة الرئيسية</h5>
	                </div>
	                <div class="card-body add-post">
	                    <form action="/editchangimage" method="POST" enctype="multipart/form-data" >
                      @csrf
	                        <div class="col-sm-12">
	                            <div class="form-group">
	                                <label for="validationCustom01">الصورة الأولى:</label>
									<input class="form-control form-control-lg" name="file" id="file" type="file">
	                            </div>
								<div class="form-group">
	                                <label for="validationCustom01">الصورة الثانية:</label>
									<input class="form-control form-control-lg" name="file1" id="file" type="file">
	                            </div>
								<div class="form-group">
	                                <label for="validationCustom01">الصورة الثالثة:</label>
									<input class="form-control form-control-lg" name="file2" id="file" type="file">
	                            </div>   
	                        </div>
                          <div>
                           </div>
                  <div class="btn-showcase m-30 ">
	                        <button class="btn " type="submit" name="submit" style="background:#00BFFF;color:white;">تغير الصور</button>    
	                    </div>
                      </form>
	            </div>
	        </div>
	    </div>
	</div>
	@push('scripts')
	<script src="{{asset('assets/js/editor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
    <script src="{{asset('assets/js/dropzone/dropzone.js')}}"></script>
    <script src="{{asset('assets/js/dropzone/dropzone-script.js')}}"></script>
    <script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
    <script src="{{asset('assets/js/email-app.js')}}"></script>
    <script src="{{asset('assets/js/form-validation-custom.js')}}"></script>
	@endpush
@endsection