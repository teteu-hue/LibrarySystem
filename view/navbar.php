<style>

  .navbar{
    height: 6rem;
    font-size: 1.5rem;
    margin-bottom: 4rem;
  }

  .navbar-brand{
    font-size: 1.5rem;
  }

</style>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/LibrarySystem/index.php">Biblioteca</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/LibrarySystem/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/LibrarySystem/view/books_page.php">Books</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/LibrarySystem/view/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/LibrarySystem/view/menu-admin.php">Admin</a>
        </li>
      </ul>
    </div>
  </div>
</nav>