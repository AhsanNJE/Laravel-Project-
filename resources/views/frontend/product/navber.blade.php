
  <nav class="navbar navbar-expand-lg navbar-light bg-info col-md-6 p-2 mt-2">
  <h4><a class="navbar-brand" href="{{ route('home') }}">My<span style="color:red">Soft</span></a></h4>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ ('addproduct') }}">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ Route('category') }}">Add Category</a></li>
            <li><a class="dropdown-item" href="{{ Route('showcategory') }}">Show Category</a></li>
          </ul>
        </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Product
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ Route('addproduct') }}">Add Product</a></li>
            <li><a class="dropdown-item" href="{{ Route('showproduct') }}">Show Product</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            SubCategory
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ Route('subcat') }}">Add SubCat</a></li>
            <li><a class="dropdown-item" href="{{ Route('subcatshow') }}">Show SubCat</a></li>
          </ul>
        </li>
    </ul>
  </div>
</nav>

