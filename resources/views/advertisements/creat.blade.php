@extends('layouts.app')
@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/dropzone.css')}}">
@endpush

@section('content')
	<div class="container mt-5">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5> Create Advertisements</h5>
	                </div>
	                <div class="card-body add-post">
	                    <form action="/advertisements" method="POST" enctype="multipart/form-data" >
                      @csrf
	                        <div class="col-sm-12">
	                            <div class="form-group">
	                                <label for="validationCustom01">Title:</label>
	                                <input class="form-control" id="validationCustom01" type="text" placeholder=" Title" name="title" />
	                            </div>
	                            <div class="email-wrapper">
	                                <div class="theme-form">
	                                    <div class="form-group">
	                                        <label>Content:</label>
	                                        <textarea id="text-box" name="description" cols="10" rows="2"></textarea>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
                          <div>
                      </div>
                  <div class="btn-showcase m-30 ">
	                        <button class="btn " type="submit" name="submit" style="background:#5B8FB9;color:white;">Submit</button>    
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