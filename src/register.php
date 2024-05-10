<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4>
              Add Contacts
              <a href="login.php" class="btn btn-danger float-end"> BACK</a>
            </h4>
          </div>
          <div class="card-body">
            <form action="./model/register_model.php" method="POST">
              <div class="classform-group mb-3">
                <label for="">Full Name</label>
                <input type="text" name="full_name" class="form-control">
              </div>
              <div class="classform-group mb-3">
                <label for="">Phone</label>
                <input type="text" name="phone" class="form-control">
              </div>
              <div class="classform-group mb-3">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control">
              </div>
              <div class="classform-group mb-3">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control">
              </div>
              <div class="form-group mb-3">
                <button type="submit" name="register_btn" class="btn btn-primary">Register</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
