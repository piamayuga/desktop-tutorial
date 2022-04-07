// ------------- sidebar ******* USER *******
class Mysidebar extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `
      <div class="sidebar">

      <div class="logo-details">
        <i class='icon'>
          <img src="images/pcoo_logo.png">
        </i>
        <div class="logo_name">PCOO</div>
        <i class='bx bx-menu' id="btn"></i>
      </div>
  
      <ul class="nav-list ">
  
        <!-- links -->
        <li>
          <a href="einfo.html">
            <i class='bx bx-user'></i>
            <span class="links_name">Employment Info</span>
          </a>
          <span class="tooltip">Employment Info</span>
        </li>
  
        <li>
          <a href="pds.html">
            <i class='bx bx-spreadsheet'></i>
            <span class="links_name">Personal Data Sheet</span>
          </a>
          <span class="tooltip">Personal Data Sheet</span>
        </li>
  
        <li>
          <a href="erecords.html">
            <i class='bx bx-folder'></i>
            <span class="links_name">Employment Records</span>
          </a>
          <span class="tooltip">Employment Records</span>
        </li>
  
        <li>
          <a href="request.html">
            <i class='bx bx-file-blank'></i>
            <span class="links_name">Request Form</span>
          </a>
          <span class="tooltip">Request Form</span>
        </li>
  
        <li>
          <a href="settings.html">
            <i class='bx bx-cog'></i>
            <span class="links_name">Settings</span>
          </a>
          <span class="tooltip">Settings</span>
        </li>
        <!-- links -->
  
        <li class="profile">
          <div class="profile-details">
            <img src="images/sample.png" alt="profileImg">
            <div class="name_job">
              <div class="name">Kyle De Mesa</div>
              <div class="job">Secretary</div>
            </div>
          </div>
  
          <a href="../controller/logout.php">
            <i type="button" class='bx bx-log-out' id="log_out" onClick=""></i>
          </a>
  
        </li>
  
      </ul>
  
    </div>
    `
  }
}
customElements.define('my-sidebar', Mysidebar)
// ------------- sidebar ******* USER *******




// ------------- sidebar ******* ADMIN *******
class a_sidebar extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `
    <div class="sidebar">

    <div class="logo-details">
      <i class='icon'>
        <img src="../images/pcoo_logo.png">
      </i>
      <div class="logo_name">PCOO</div>
      <i class='bx bx-menu' id="btn"></i>
    </div>

    <ul class="nav-list ">

      <!-- links -->
      <li>
        <a href="dashboard.html">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>

      <li>
        <a href="einfo.html">
          <i class='bx bx-group'></i>
          <span class="links_name">Employee Info</span>
        </a>
        <span class="tooltip">Employees Information</span>
      </li>

      <li>
        <a href="requests.html">
          <i class='bx bx-file'></i>
          <span class="links_name">Requests</span>
        </a>
        <span class="tooltip">Requests</span>
      </li>

      <li>
        <a href="settings.html">
          <i class='bx bx-cog'></i>
          <span class="links_name">Settings</span>
        </a>
        <span class="tooltip">Settings</span>
      </li>
      <!-- links -->

      <li class="profile">
        <div class="profile-details">
          <img src="../images/sample.png" alt="profileImg">
          <div class="name_job">
            <div class="name">Wilvin</div>
            <div class="job">HR</div>
          </div>
        </div>

        <a href="">
          <i type="button" class='bx bx-log-out' id="log_out"></i>
        </a>

      </li>

    </ul>

  </div>
    `
  }
}
customElements.define('my-sidebar-admin', a_sidebar)
// ------------- sidebar  ******* ADMIN *******