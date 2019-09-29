<!DOCTYPE html>
<html lang="en">
<head>
	<title>bt646 index</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap Table with Add and Delete Row Feature</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary" >
			<div class="panel-heading">
				danh sach phong			
			</div>
			<div class="panel-body">
				<table class="table table-bordered">

					<thead>
						<tr>
							<th>ma phong</th>
							<th>loai phong</th>
							<th>tang</th>
							<th>gia tien</th>
						</tr>
					</thead>
					<tbody>
									
							@foreach($dataFake as $iteme)
			                    <tr>
			                      
			                        <td>{{ $iteme['maPhong'] }}   </td>
			                        <td>{{ $iteme['loaiPhong'] }} </td>
			                        <td>{{ $iteme['tang'] }}      </td>
			                        <td>{{ $iteme['giaTien'] }}   </td>
			                       
			                       
			                    </tr>
			    			@endforeach

							<?php
								foreach ($dataFake as $item ) {
								  echo '
									<tr>
				                      	
				                        <td>'.$item['maPhong'].'</td>
				                        <td>'.$item['loaiPhong'].'</td>
				                        <td>'.$item['tang'].'</td>
				                        <td>'.$item['giaTien'].'</td>
				                        
				                    </tr>						



								   ';
								}
							?>
								
					</tbody>
				</table>

			</div>
			
		</div>
	</div>

</body>
</html>
