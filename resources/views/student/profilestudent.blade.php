<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Profile View</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css"
		href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
<Style>
@import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap");
body {
	background: #ffffff;
	font-family: "Roboto", sans-serif;
}

.shadow {
	box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1) !important;
}

.profile-tab-nav {
	min-width: 250px;
}

.tab-content {
	flex: 1;
}

.form-group {
	margin-bottom: 1.25rem;
}

.nav-pills a.nav-link {
	padding: 15px 20px;
	border-bottom: 1px solid #ddd;
	border-radius: 0;
	color: #333;
}
.nav-pills a.nav-link i {
	width: 20px;
}

.img-circle img {
	height: 100px;
	width: 100px;
	border-radius: 100%;
	border: 5px solid #fff;
}


</Style>
	<section class="py-5 my-5">
		<div class="container">
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
							<img src="image/user.jpg" alt="Image" class="shadow">
						</div>
						<h4 class="text-center">Baraa Daher</h4>
					</div>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab"
							aria-controls="account" aria-selected="true">
							<i class="fa fa-home text-center mr-1"></i>
							Account
						</a>
						<a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab"
							aria-controls="password" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i>
							Password
						</a>
						<a class="nav-link" id="security-tab" data-toggle="pill" href="#security" role="tab"
							aria-controls="security" aria-selected="false">
							<i class="fa fa-user text-center mr-1"></i>
							Security
						</a>
						<a class="nav-link" id="notification-tab" data-toggle="pill" href="#notification" role="tab"
							aria-controls="notification" aria-selected="false">
							<i class="fa fa-bell text-center mr-1"></i>
							Notification
						</a>
					</div>
				</div>
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
						<h3 class="mb-4">Profile Page</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>First Name</label>
									<input type="text" class="form-control" value="Baraa">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Last Name</label>
									<input type="text" class="form-control" value="Daher">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Email</label>
									<input type="text" class="form-control" value="bara@gmail.com">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Phone number</label>
									<input type="text" class="form-control" value="+971233456774">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>University</label>
									<input type="text" class="form-control" value="Islamic University">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Your undergraduate major</label>
									<input type="text" class="form-control" value="Computer Engineer">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Bio</label>
									<textarea class="form-control"
										rows="4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore vero enim error similique quia numquam ullam corporis officia odio repellendus aperiam consequatur laudantium porro voluptatibus, itaque laboriosam veritatis voluptatum distinctio!</textarea>
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
					<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
						<h3 class="mb-4">Password Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Old password</label>
									<input type="password" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>New password</label>
									<input type="password" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Confirm new password</label>
									<input type="password" class="form-control">
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
					<div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
						<h3 class="mb-4">Security Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Login</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Two-factor auth</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="recovery">
										<label class="form-check-label" for="recovery">
											Recovery
										</label>
									</div>
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
					<div class="tab-pane fade" id="notification" role="tabpanel" aria-labelledby="notification-tab">
						<h3 class="mb-4">Notification Settings</h3>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="notification1">
								<label class="form-check-label" for="notification1">
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum accusantium
									accusamus,
									neque cupiditate quis
								</label>
							</div>
						</div>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="notification2">
								<label class="form-check-label" for="notification2">
									hic nesciunt repellat perferendis voluptatum totam porro eligendi.
								</label>
							</div>
						</div>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="notification3">
								<label class="form-check-label" for="notification3">
									commodi fugiat molestiae tempora corporis. Sed dignissimos suscipit
								</label>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>