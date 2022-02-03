@extends('admin.common.head')
@section('content')

<body>
	<div id="wrapper">
		
		@include('admin.common.sidebar')
		<!----->

		<div id="page-wrapper" class="gray-bg dashbard-1">
			<div class="content-main">

				<!--banner-->	
				<div class="banner">
					<h2>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
						<span>Dashboard</span>
					</h2>
				</div>
				<!--//banner-->
				<!--content-->
				<div class="content-top">


					<div class="col-md-12 ">
						
							<div class="content-top-1">
								@foreach ($view as $file)
                                {{$file->title}}<br>
                                <a href="{{asset('uploads/'.$file->pdffile)}}">Open the pdf!</a>
                                <iframe src="{{asset('uploads/'.$file->pdffile)}}" width="100%" height="500" alt="pdf"></iframe>
                                @endforeach
								<div class="clearfix"> </div>
							</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
            {{-- modal --}}
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">
				
				  <!-- Modal content-->
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					  <h4 class="modal-title">PDF Upload</h4>
					</div>
					<div class="modal-body">
					<div class="grid-form1">
						{{-- <h3 id="forms-example" class="">Basic Form</h3> --}}
						
						<form method="POST" action="{{ route('file.upload.post') }}"  enctype="multipart/form-data">
							@csrf
							<div class="form-group">
							<label for="title">Title</label>
							<input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Title" required>
							</div>
							<div class="form-group">
							<label for="pdffile">PDF File</label>
							<input type="file" accept="application/pdf,application/vnd.ms-excel" class="form-control @error('pdffile') is-invalid @enderror" id="pdffile" name="pdffile" required>
							</div>
							<button type="submit" class="btn btn-default">UPLOAD</button>
						</form>
				   </div>
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				  </div>
				  
				</div>
			  </div>



			<div class="copy">
				<p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>

<!---->
<!--scrolling js-->
<script src="{{asset('admin/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('admin/js/scripts.js')}}"></script>
<!--//scrolling js-->
<script src="{{asset('admin/js/bootstrap.min.js')}}"> </script>
</body>
</html>

@endsection
