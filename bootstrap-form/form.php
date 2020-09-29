<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Ecera System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="formcss.css">
        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>

    <body>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="#"><i class="fas fa-laptop-code"></i> <b>Ecera System</b> </a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item active">
						<a class="nav-link" href="#">Sign Up<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Login</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Dropdown
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Action 1</a>
						<a class="dropdown-item" href="#">Action 2</a>
						<a class="dropdown-item" href="#">Action 3</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">More..</a>
						</div>
					</li>
					</ul>
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="search" placeholder="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
				</div>
		</nav>

		<div class="form-holder">
			<form>
				<div class="form-row bg-light" id="formHeading">
					<h2>Sign Up!</h2>
				</div>
				<br>
			<div class="form-row">
					<div class="form-group col-md-6">
					<label for="inputFirstName4">First Name</label>
					<input type="text" class="form-control" id="inputFirstName4" placeholder="<?php echo "First Name"?>">
					</div>
					<div class="form-group col-md-6">
					<label for="inputLastName4">Last Name</label>
					<input type="text" class="form-control" id="inputLastName4" placeholder="<?php echo "Last Name"?>">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail">Email</label>
					<input type="text" class="form-control" id="inputEmail" placeholder="Email">
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
					<label for="inputPassword">Password</label>
					<input type="password" class="form-control" id="inputPassword">
					</div>
					<div class="form-group col-md-6">
					<label for="confirmPassword">Confirm Password</label>
					<input type="password" class="form-control" id="confirmPassword">
					</div>
				</div>
				<div class="form-group">
					<label for="inputAddress">Address</label>
					<input type="text" class="form-control" id="inputAddress" placeholder="Street Adress">
				</div>
				<div class="form-group">
					<label for="inputAddress2">Address 2</label>
					<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
					<label for="inputCity">City</label>
					<input type="text" class="form-control" id="inputCity">
					</div>
					<div class="form-group col-md-4">
					<label for="inputState">State</label>
					<select id="inputState" class="form-control">
						<option selected>Choose...</option>
						<option>Delhi</option>
						<option>West Bengal</option>
						<option>Kerala</option>
						<option>Uttar Pradesh</option>
					</select>
					</div>
					<div class="form-group col-md-2">
					<label for="inputZip">Zip</label>
					<input type="text" class="form-control" id="inputZip">
					</div>
				</div>
				<div class="form-group">
						<label for="exampleFormControlFile1">Resume</label>
						<input type="file" class="form-control-file" id="exampleFormControlFile1">
				</div>
				<div class="form-group">
					<div class="form-check">
					<input class="form-check-input" type="checkbox" id="gridCheck">
					<label class="form-check-label" for="gridCheck">
						I Agree to the Terms and Conditions.
					</label>
					</div>
				</div>
				<button type="submit" class="btn btn-primary btn-block">Sign Up</button>
			</form>


		</div>
        
    </body>

</html>