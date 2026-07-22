<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tutorial Laravel Mail | ayongoding.com</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
	<h3>Tinggalkan Balasan</h3>
	<form method="post" action="/send">
	  @csrf
	  <div class="form-group">
	    <label>Your Name</label>
	    <input class="form-control" type="text" name="name">
	  </div>

	  <div class="form-group">
	    <label>Your Mobile Number</label>
	    <input class="form-control" type="number" name="mobile_number">
	  </div>

	  <div class="form-group">
	    <label>Your Email Address</label>
	    <input class="form-control" type="text" name="email_address">
	  </div>

      <div class="form-group">
        <label>Messsage</label>
	    <textarea class="form-control" name="message" rows="4"></textarea>
	  </div>

	  <div class="text-right">
	    <button type="submit" class="btn btn-primary">Kirim ke Email Saya</button>
	  </div>
	</form>
      </div>
    </div>
  </div>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>