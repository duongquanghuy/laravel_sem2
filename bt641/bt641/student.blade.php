<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	.panel{
		padding: 10px;
	}

</style>
<body>
    <div class="container">
    	<div class="panel panel-primary">
			<div class="panel-heading">
				Nhập thông tin sinh viên
			</div>
	        <form method="post" action="{{ Route('viewPost') }}">
	        	
	        	<div class="table-wrapper">
	        		
		            <div class="form-group">
		            	<label>Full Name</label>
		            	<input type="text" name="fullName" class="form-control" placeholder="Enter full name">
		            </div>
		            <div class="form-group">
		            	<label>Age</label>
		            	<input type="number" name="age" class="form-control" placeholder="Enter age">
		            </div>
		          
		            <div class="form-group">
		            	<label>Address</label>
		            	<input type="text" name="address" class="form-control" placeholder="Enter address">
		            </div>
		            <button class="btn btn-success">Add</button>
		        </div>
	        </form>
    	</div>
    </div>
    <div class="container">
    	<div class="panel panel-primary">
			<div class="panel-heading">
				hien thi thong tin sinh vien
			</div>
	       		<table class="table table-bordered">

					<thead>
						<tr>
							<th>stt</th>
							<th>Full Name</th>
							<th>age</th>
							<th>dia chi</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
									
							@foreach($studentList as $iteme)
			                    <tr>
			                      
			                        <td>{{ $index++ }}   </td>
			                        <td>{{ $iteme->fullName }} </td>
			                        <td>{{ $iteme->age }}      </td>
			                        <td>{{ $iteme->address }}   </td>

			                        <td>
										<form method="POST" action="{{ route('nieuws.destroy', [$iteme->id]) 	}}">
									    	{{ csrf_field() }}
									    	{{ method_field('DELETE') }}
									    <button type="submit">Delete</button>
										</form>
			                        </td>
			                         
			                       
			                    </tr>
			    			@endforeach

							
					</tbody>
				</table>
				{{ $studentList->links() }}

    	</div>
    </div>
</body>
</html>