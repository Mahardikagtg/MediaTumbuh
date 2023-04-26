<head>
    <meta charset="utf-8">
    <title>Profile-MediaTumbuh</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="account-settings">
			<div class="user-profile">
				<div class="user-avatar">
					@if($user -> foto)
					<?php
					$tempat = $user['foto'];
					$id = $user['username'];
					echo "<img src='/images/user/$id/$tempat'/>";
					?>
					@else
					<?php
					echo "<img src='/images/user/kosong.png'/>";
					?>
					@endif
				</div>
				<h5 class="user-name"><?php echo $user -> username ?></h5>
				<h6 class="user-email"><?php echo $user -> email ?></h6>
			</div>
		</div>
	</div>
</div>
</div>
<form class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12" action="/editprofile" method="get">
<div class="card h-100">
	<div class="card-body">
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mb-2 text-primary">Personal Details</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="fullName">Username</label>
					<input type="text" class="form-control" id="username" placeholder="Enter username" value="<?php echo $user -> username ?>" disabled>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="fullName">Full Name</label>
					<input type="text" class="form-control" id="nama" placeholder="Enter full name" value="<?php echo $user -> nama ?>" disabled>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="eMail">Email</label>
					<input type="email" class="form-control" id="email" placeholder="Enter email ID" value="<?php echo $user -> email ?>" disabled>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="phone">Phone</label>
					<input type="text" class="form-control" id="nomorhp" placeholder="Enter phone number" value="<?php echo $user -> nomorhp ?>" disabled>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="gender">Gender</label>
					@if($user -> jeniskelamin == 'L')
					<div class="radio">
					<label><input type="radio" name="jeniskelamin" value ="L" checked disabled>Laki-laki</label>
					</div>
					<div class="radio">
					<label><input type="radio" name="jeniskelamin" value="P" disabled>Perempuan</label>
					</div>
					@elseif($user -> jeniskelamin == 'P')
					<div class="radio">
					<label><input type="radio" name="jeniskelamin" value ="L" disabled>Laki-laki</label>
					</div>
					<div class="radio">
					<label><input type="radio" name="jeniskelamin" value="P" checked disabled>Perempuan</label>
					</div>
					@else
					<div class="radio">
					<label><input type="radio" name="jeniskelamin" value ="L" disabled>Laki-laki</label>
					</div>
					<div class="radio">
					<label><input type="radio" name="jeniskelamin" value="P" disabled>Perempuan</label>
					</div>
					@endif
				</div>
			</div>
		</div>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mt-3 mb-2 text-primary">Address</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="Street">Street</label>
					<input type="name" class="form-control" id="alamat" placeholder="Enter Street" value="<?php echo $user -> alamat ?>" disabled>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="Street">Postal Code</label>
					<input type="name" class="form-control" id="kodepos" placeholder="Enter Street" value="<?php echo $user -> kodepos ?>" disabled>
				</div>
			</div>
		</div>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="text-right">
				<a href="/" class="btn btn-outline-success" role="button">Back to Home</a>
				<a href="/editprofile" class="btn btn-primary" role="button">Edit Profile</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</form>

<style type="text/css">
body {
    margin: 0;
    padding-top: 40px;
    color: #2e323c;
    background: #f5f6fa;
    position: relative;
    height: 100%;
}
.account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 150px;
    height: 150px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
    color: #9fa8b9;
}
.account-settings .about {
    margin: 2rem 0 0 0;
    text-align: center;
}
.account-settings .about h5 {
    margin: 0 0 15px 0;
    color: #007ae1;
}
.account-settings .about p {
    font-size: 0.825rem;
}
.form-control {
    border: 1px solid #cfd1d8;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: #ffffff;
    color: #2e323c;
}

.card {
    background: #ffffff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}


</style>

<script type="text/javascript">

</script>
</body>