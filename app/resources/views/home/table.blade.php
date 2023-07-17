<!doctype html>
<html lang="en">
  <head>
  	<title>Table 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset('asset/tableasset/css/style.css')}}">
    

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Table #01</h2>
				</div>
			</div>
			<button type="button" class="btn btn-light"><a href="{{url('/')}}">add more data</a></button>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						      <th>#</th>
						      <th>Name</th>
						      <th>Email Address</th>
						      <th>Subject</th>
						      <th>Message</th>
						      <th>Edit</th>
						      <th>Delete</th>
						    </tr>
						  </thead>
						  <tbody>
							@foreach ($home_infoall as $home_infos)
						    <tr>
						     
						      <td>{{$home_infos->id}}</td>
						      <td>{{$home_infos->name}}</td>
							  <td>{{$home_infos->email}}</td>
							  <td>{{$home_infos->subject}}</td>
							  <td><button type="button" class="btn btn-light"><a href="{{url('/home/data-read'. $home_infos->id)}}">view message</a></button></td>
							  <td><button type="button" class="btn btn-light"><a href="{{url('/home/data-edit'. $home_infos->id)}}">edit</a></button></td>
							  <td><button type="button" class="btn btn-light"><a href="{{url('/home/data-delete'. $home_infos->id)}}">delete</a></button></td>
						    </tr>
						    <tr>
						 @endforeach
						      
						      <!-- <td>jacobthornton@email.com</td>
						    </tr>
						    <tr>
						  
						      <td>Larry</td>
						      <td>the Bird</td>
						      <td>larrybird@email.com</td>
						    </tr>
						    <tr>
						      
						      <td>John</td>
						      <td>Doe</td>
						      <td>johndoe@email.com</td>
						    </tr>
						    <tr>
						      
						      <td>Gary</td>
						      <td>Bird</td>
						      <td>garybird@email.com</td>
						    </tr> -->
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('asset/tableasset/js/jquery.min.js')}}"></script>
  <script src="{{asset('asset/tableasset/js/popper.js')}}"></script>
  <script src="{{asset('asset/tableasset/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('asset/tableasset/js/main.js')}}"></script>

	</body>
</html>