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
	                    <h5>إنشاء خبر</h5>
	                </div>
	                <div class="card-body add-post">
	                    <form action="/new" method="POST" enctype="multipart/form-data" >
                      @csrf
	                        <div class="col-sm-12">
	                            <div class="form-group">
	                                <label for="validationCustom01">العنوان:</label>
	                                <input class="form-control" id="validationCustom01" type="text" placeholder=" العنوان" name="title" />
	                            </div>
								<input class="form-control form-control-lg" name="file" id="file" type="file">

	                            <div class="email-wrapper">
	                                <div class="theme-form">
	                                    <div class="form-group">
	                                        <label>المحتوى:</label>
	                                        <textarea id="text-box" name="description" cols="10" rows="2"></textarea>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
                          <div>
</div>
                  <div class="btn-showcase m-30 ">
	                        <button class="btn " type="submit" name="submit" style="background:#00BFFF;color:white;">إنشاء خبر</button>    
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