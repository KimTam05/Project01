<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
  	<title>Register</title>
</head>
<body class="bg-dark">
  	<div class="container-fluid text-white">
    	<div class="row">
      		<div class="col-4 py-5"></div>
      		<div class="col-4 py-5"> 
				<form method="post">
                    @csrf
					<div class="py-4 fs-1">
						Admin Register
					</div>
                    <div class="form-group py-1">
                        <label for="username">User Name</label>
                        <input type="text" name="name" placeholder="Enter name" class="form-control">
                        @error('name')
							<small class="text-danger">{{ $message }}</small>
						@enderror
                    </div>
					<div class="form-group py-1">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        @error('email')
							<small class="text-danger">{{ $message }}</small>
						@enderror
					</div>
                    <div class="form-group py-1">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        @error('password')
							<small class="text-danger">{{ $message }}</small>
						@enderror
                    </div>
                    <div class="form-group py-1">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
                        @error('confirm_password')
							<small class="text-danger">{{ $message }}</small>
						@enderror
                    </div>
                    <div class="form-group py-3">
                        <a href="{{route('admin.login')}}" class="text-white text-decoration-none">Login?</a>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
			</form>
			<div class="col-4 py-5"></div>
		</div>
    </div>
</body>
</html>