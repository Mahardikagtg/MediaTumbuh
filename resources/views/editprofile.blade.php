<head>
    <meta charset="utf-8">
    <title>MediaTumbuh-Open and Edit Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<form action="/editprofile" method="post" enctype='multipart/form-data'>
@csrf
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
						<label>
						Upload Foto
						</label>
						<label style="color: blue">
							Select File
							<input class="form-control @error('gambar') is-invalid @enderror" type="file" name="gambar" onchange="form.submit()"/>
							@error('gambar')<div class="invalid-feedback"><?php echo $message ?></div>@enderror
						</label>
						<div>
							<h5 class="user-name"><?php echo $user -> username ?></h5>
							<h6 class="user-email"><?php echo $user -> email ?></h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
		<div class="card h-100">
			<div class="card-body">
				<div class="row gutters">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<h6 class="mb-2 text-primary">Personal Details</h6>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="fullName">Username</label>
							<input type="text" class="form-control" name="username" placeholder="Enter username" value="<?php echo $user -> username ?>">
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="fullName">Full Name</label>
							<input type="text" class="form-control" name="nama" placeholder="Enter full name" value="<?php echo $user -> nama ?>">
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="eMail">Email</label>
							<input type="email" class="form-control" name="email" placeholder="Enter email ID" value="<?php echo $user -> email ?>">
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="phone">Phone</label>
							<input type="text" class="form-control" name="nomorhp" placeholder="Enter phone number" value="<?php echo $user -> nomorhp ?>">
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="gender">Gender</label>
							@if($user -> jeniskelamin == 'L')
							<div class="radio">
							<label><input type="radio" name="jeniskelamin" value ="L" checked>Laki-laki</label>
							</div>
							<div class="radio">
							<label><input type="radio" name="jeniskelamin" value="P">Perempuan</label>
							</div>
							@elseif($user -> jeniskelamin == 'P')
							<div class="radio">
							<label><input type="radio" name="jeniskelamin" value ="L">Laki-laki</label>
							</div>
							<div class="radio">
							<label><input type="radio" name="jeniskelamin" value="P" checked>Perempuan</label>
							</div>
							@else
							<div class="radio">
							<label><input type="radio" name="jeniskelamin" value ="L">Laki-laki</label>
							</div>
							<div class="radio">
							<label><input type="radio" name="jeniskelamin" value="P">Perempuan</label>
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
							<input type="text" class="form-control" name="alamat" placeholder="Enter Street" value="<?php echo $user -> alamat ?>">
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="Street">Postal Code</label>
							<input type="text" class="form-control" name="kodepos" placeholder="Enter Street" value="<?php echo $user -> kodepos ?>">
						</div>
					</div>
				</div>
				<div class="row gutters">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="text-right">
							<a href="/profile" class="btn btn-outline-danger" role="button">Cancel</a>
							<button type="submit" class="btn btn-primary">Update</button>
						</div>				
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

label > input[type=file] {
    display: none;
}

</style>

<script type="text/javascript">
</script>
</body>