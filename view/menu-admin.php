<?php require_once("header.php") ?>

<style>
  .welcome-admin {
    font-size: 2rem;
    margin-bottom: 4rem;
  }

  .text-title {
    font-size: 4rem;
    margin-bottom: 3rem;
  }

  .list-group {
    margin-top: 2rem;
  }

  .list-group>.list-group-item {
    width: 100%;
    display: flex;
    justify-content: space-around;
    align-items: center;
  }

  .list-group>.list-group-item>.btn-group {
    width: 100%;
  }

  .container-buttoms-icons {
    height: 3rem;
    display: flex;
    justify-content: space-around;
    align-items: center;
  }

  .container-buttoms-icons-item {
    font-size: 2rem;
  }

  .list-items {
    margin-top: 1rem;
  }

  .container-buttoms {
    width: 30rem;
  }

  .buttom-item {
    margin-left: 2.5rem;
    width: 30rem;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .buttom-item>.fa-solid,
  span {
    margin: 0.3rem;
    font-size: 1.5rem;
  }

  .button-action {
    margin-left: .8rem;
  }

  .dropdown-item-action {
    text-decoration: none;
    color: #FFF;
  }

  .buttom-publisher {
    font-size: 2rem;
  }

  .container-publisher {
    width: 78rem;
  }

  .container-publisher-item {
    text-align: center;
  }
</style>

<!-- Content -->

<div class="container text-center">
  <div class="row align-items-start">
    <div class="col welcome-admin">
      Bem vindo ao Menu Adminstrativo
    </div>
  </div>
</div>


<div class="container text-center">
  <div class="row align-items-center justify-content-between">

    <div class="col">
    </div>

    <div class="col">

      <h1 class="text-title">
        Editora
      </h1>

      <div class="list-group list-group-flush">


        <div class="list-group-item">

          <div class="btn btn-success buttom-item">
            <i class="fa-solid fa-plus"></i>
            <span class="button-action">Create</span>
          </div>

          <div class="btn btn-primary buttom-item">
            <i class="fa-solid fa-pen"></i>
            <span class="button-action">Edit</span>
          </div>

          <div class="btn btn-danger buttom-item">
            <i class="fa-solid fa-xmark"></i>
            <span class="button-action">Delete</span>
          </div>

        </div>

      </div>

      <div class="list-group list-group-flush">
        <div class="list-group-item">

          <div class="btn-group dropdown list-items">

            <button class="btn btn-light buttom-publisher" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Listar editoras
            </button>

          <div class="dropdown-menu container-publisher">

            <div class="dropdown-item  list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Subheading</div>
                  Content for list item
                </div>
                <span class="badge bg-primary rounded-pill">14</span>
            </div>

            <div class="dropdown-item list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Subheading</div>
                  Content for list item
            </div>

                <span class="badge bg-primary rounded-pill">14</span>
              </div>

            <div class="dropdown-item list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Subheading</div>
                  Content for list item
                </div>
                <span class="badge bg-primary rounded-pill">14</span>
            </div>

            </div>

          </div>

        </div>
      </div>




    </div>

    <div class="col">
    </div>
  </div>
</div>


<?php require_once("footer.php") ?>