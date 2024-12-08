<aside>
  <div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
    <div>
      <h3 class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
        <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-5 fw-semibold">ADMIN</span>
        
      </h3>
      </div>
      <ul class="list-unstyled ps-0">

      <li class="mb-1">
          <a href="dashboard.php"> <button class="btn btn-toggle align-items-center rounded">
            Dashboard
          </button> </a>
        </li>
        <li class="mb-1">
          <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
            Ambulance
          </button>
          <div class="collapse" id="home-collapse" style="">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="add-ambulance.php" class="link-dark rounded">Add ambulance</a></li>
              <li><a href="manage-ambulance.php" class="link-dark rounded">Manage Ambulance</a></li>
            </ul>
          </div>
        </li>
        <li class="border-top my-3"></li>
        <li class="mb-1">
        
  <a href="../index.php" style="text-decoration: none;">Log out</a>

        </li>
      </ul>
  </div>
</aside>