
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav-1" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>API CRUD</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav-1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('allMutabaah')}}">
              <i class="bi bi-circle" ></i><span>Mutabaah</span>
            </a>
          </li>
          <li>
            <a href="{{route('allEmas')}}">
              <i class="bi bi-circle" ></i><span>Harga Emas</span>
            </a>
          </li>
          <li>
            <a href="{{route('allBerita')}}">
              <i class="bi bi-circle" ></i><span>Berita</span>
            </a>
          </li>
          <li>
            <a href="{{route('allKhutbah')}}">
              <i class="bi bi-circle" ></i><span>Khutbah</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>API Get</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('doa') }}">
              <i class="bi bi-circle" ></i><span>Doa Harian</span>
            </a>
          </li>
         
        </ul>
      </li><!-- End Components Nav -->


    </ul>

  </aside>
