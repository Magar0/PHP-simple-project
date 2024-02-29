<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <title>PHP Document</title>
</head>

<body>

  <nav class="navbar bg-body-tertiary bg-info-subtle">
    <div class="container-fluid">
      <a class="navbar-brand">Navbar</a>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <section class="container pt-3">
    <h1 class="mb-3 text-center">Contact US</h1>

    <form action="userInfo.php">
      <div class="mb-3">
        <label for="name" class="form-label">Name :</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address :</label>
        <input type="email" class="form-control" id="email" name="email" required>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="mobile" class="form-label">Mobile :</label>
        <input type="text" class="form-control" id="mobile" name="mobile">
      </div>
      <div class="mb-3">
        <label for="comment" class="form-label">Comment :</label>
        <textarea type="text" rows="4" class="form-control" id="comment" name="comment"> </textarea>

      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="check1">
        <label class="form-check-label" for="check1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </section>

  <footer class="pb-2 fixed-bottom bg-secondary">
    <p class="text-center mt-2 mb-0 text-white">Copyright &copy; 2024 | Rakesh Magar </p>
  </footer>
</body>

</html>