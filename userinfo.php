


   <!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet">
 
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">ZafarTechnical</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      

      <li class="nav-item">
        <a class="nav-link" href="#">Gallery</a>
      </li>
     
     <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
     
     <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
     
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

 

  <section class="my-5">
	<div class="py-5">
		<h2 class="text-center"> Form</h2>
		<div class="w-50 m-auto">
			<form method="post" action="userinfo.php" >
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="user" autocomplete="off" class="form-control">
					
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" autocomplete="off" class="form-control">
					
				</div>
				<div class="form-group">
					<label>Mobile</label>
					<input type="text" name="mobile" autocomplete="off" class="form-control">
					
				</div>
				<div class="form-group">
					<label>Comments</label>
					<textarea class="form-control" name="comment">
						
					</textarea>
				</div>
				<button type="Submit" class="btn btn-success">Submit</button>
				
			</form>
		</div>
	</div>
</section>	

 

  <footer>
  <p class="p-3 bg-dark text-white text-center">@ZafarTechnical.</p>
</footer>


    



</body>
</html>