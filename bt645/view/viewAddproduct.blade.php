<!DOCTYPE html>
<html>
<head>
	<title>add san pham</title>
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
		    <div class="container">
        <form method="POST" action="{{ route('viewPost') }}">
    
        	<div class="table-wrapper">
        		<div class="form-group">
	            	<label>Name Product</label>
	            	<input type="text" name="product" class="form-control" placeholder="Enter name Product">
	            </div>
	            <div class="form-group">
	            	<label>img Product</label>
	            	<input type="text" name="imgProduct" class="form-control" placeholder="Enter imgProduct">
	            </div>
	            <div class="form-group">
	            	<label>price</label>
	            	<input type="number" name="priceProduct" class="form-control" placeholder="Enter age">
	            </div>
	            <div class="form-group">
	            	<label>Product Description</label>
	            	<input type="email" name="description" class="form-control" placeholder="Enter email">
	            </div>
	           
	            <button class="btn btn-success">Add</button>
	        </div>
        </form>
    </div>
		
	</div>
</body>
</html>
