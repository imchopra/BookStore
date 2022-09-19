<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
 footer{
    background-color:blue;
    text-align:center;
    margin-top:60px;
    color:white;  
  }
  nav ul{
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    nav ul li{
        position: relative;
        list-style: none;
    }
    nav ul li a{
        position: relative;
        margin: 0 15px;
        text-decoration: none;
        color:blue;
        font-weight: 500;
        font-size: 3.2em;
        padding: 100px;
    }
</style>
<title>Contact Form - PHP/MySQL Demo Code</title>
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<nav>
						<ul>
							<li><a href="customerform.php">Customer</a></li>
							<li><a href="Supplierform.php">Supplier</a></li>
							<li><a href="orderform.php">Order</a></li>
						</ul>
					</nav>
<body class="bg-light">

<div class="container">
<div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://www.zarla.com/images/zarla-the-pc-business-1x1-2400x2400-20211026-c6yyt9jjx6kc8bk8xv3g.png?crop=1:1,smart&width=250&dpr=2" alt="" width="300" height="300">
        <h2>Data Entry Form</h2>
      </div>
     

<h2>Supplier Form</h2>
<fieldset>
  <form name="frmContact" class="needs-validation " method="post" action="supplier.php">
  <p>
    <label for="Name">Supplier ID </label>
      <input type="number" class="form-control" name="id" id="id"   placeholder="Enter here" value="" required>
  <p>
      <label for="Name">Supplier Company Name </label>
      <input type="text" class="form-control" name="txtName" id="txtName" placeholder="Enter here" value="" required>
	  <div class="invalid-feedback">
                  Valid name is required.
                </div>
    </p>
    <p>
      <label for="address">Supplier Address</label>
      <input type="text"  class="form-control"  name="txtmail" id="txtmail" placeholder="Enter here" value="" required>
    </p>
    <p>
      <label for="address">Supplier Email Address</label>
      <input type="email"  class="form-control"  name="txtemail" id="txtemail" placeholder="Enter here" value="" required>
    </p>
    <input type="submit" name="Submit" id="Submit" value="Submit"  class="btn btn-primary btn-lg btn-block">
    <input type="submit" name="Update" id="Update" value="Update"  class="btn btn-primary btn-lg btn-block">
    
  </form>
</fieldset>
<br>
<br>
<!-- <a href="pdfg.php">
<input type="submit" name="Generate PDF" id="PDF" value="PDF"  class="btn btn-primary btn-lg btn-block">
</a> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<footer>
 Vasu Chopra 8766244
</footer>
</body>
</html>
