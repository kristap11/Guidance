
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="main.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="sidebar.css" />
    <link rel="stylesheet" href="card.css" />
    <!-- Boxicons CDN Link -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <main class="container-lg container-xl container-xxl">
      <ul class="topbar m-0 list-unstyled">
        <div
          class="topbarChild d-flex justify-content-between align-items-center"
        >
          <li class="topBarLogo text-dark">
            <div class="logo-details d-flex align-items-center">
              <i class="bx bx-menu rounded-circle" id="btn"></i>
              <img
                class="ms-2 ms-sm-3 my-auto"
                src="./images/newLogin/logo.png"
                width="35"
                height="35"
                alt="bcp-logo"
              />
              <div class="logo_name text-dark ms-1 ms-sm-3">BESTLINK</div>
              <div class="my-auto search-boxContainer d-none d-lg-block">
                <input
                  type="text"
                  class="form-control search-box"
                  type="search"
                  placeholder="Search..."
                  aria-label="Example text with button addon"
                  aria-describedby="button-addon1"
                />
              </div>
            </div>
          </li>
          <div class="d-flex align-items-center justify-content-end">
            <li>
              <i class="bx bxs-message-dots fs-4 me-3 mt-1 m-0"></i>
              <i class="bx bxs-bell fs-4 mt-1 m-0"></i>
            </li>
            <li>
              <div class="nav-item dropdown my-auto ms-4">
                <a
                  id="dropdownmenu"
                  class="nav-link dropdown-toggle d-flex align-items-center"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <h5 class="m-0 d-none d-sm-block">User Name</h5>
                  <img
                    class="ms-0 ms-sm-3"
                    src="./images/man.png"
                    width="32"
                    height="32"
                    alt="profile-picture"
                  />
                </a>
                <ul class="dropdown-menu border shadow dropdownContainer">
                  <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="login/login.php">Logout</a>
                  </li>
                </ul>
              </div>
            </li>
          </div>
        </div>
      </ul>
      <div class="px-0 d-xl-flex position-relative d-flex">
        <div class="sidebar close rounded shadow">
          <ul class="nav-list p-0 m-0">
            <li class="d-block d-lg-none">
              <i class="bx bx-search"></i>
              <input type="text" placeholder="Search..." />
              <span class="tooltip">Search</span>
            </li>
            <li>
              <a href="#">
                <i class="bx bx-grid-alt"></i>
                <span class="links_name">Dashboard</span>
              </a>
              <span class="tooltip">Dashboard</span>
            </li>
            <li>
              <a href="./profiling/profiling.php">
                <i class="bx bx-palette"></i>
                <span class="links_name">Profiling</span>
              </a>
              <span class="tooltip">Profiling</span>
            </li>
            <li>
              <a href="./counseling_service/counseling_service.php">
                <i class="bx bx-log-in"></i>
                <span class="links_name">Counseling Service</span>
              </a>
              <span class="tooltip">Counseling Service</span>
            </li>
            <li>
              <div class="iocn-link arrow">
                <a class="">
                  <i class="bx bx-message-square-error"></i>
                  <span class="links_name">Appointment</span>
                </a>
                <i class="bx bx-chevron-down arrow"></i>
              </div>
              <ul class="sub-menu">
                <li><a class="link_name p-0">Appointment</a></li>
                <li><a href="/error/404.html">Counseling Service</a></li>
                <li><a href="/error/500.html">500 Error</a></li>
              </ul>
              <!-- <span class="tooltip">Analytics</span> -->
            </li>
            <li>
              <a href="./visitlogs/visitlogs.php">
                <i class="bx bx-message-dots"></i>
                <span class="links_name">Visit logs</span>
              </a>
              <span class="tooltip">Visit logs</span>
            </li>
            <li>
              <a href="./career_orientation/career_orientation.php">
                <i class="bx bx-edit-alt"></i>
                <span class="links_name">Career Orientation</span>
              </a>
              <span class="tooltip">Career Orientation</span>
            </li>
            <li>
              <a href="./scholarship/scholarship.php">
                <i class="bx bx-table"></i>
                <span class="links_name">Scholarship</span>
              </a>
              <span class="tooltip">Scholarship</span>
            </li>
            <li>
              <a href="./res/res.php">
                <i class="bx bx-cog"></i>
                <span class="links_name">Research/Evaluation/Survey</span>
              </a>
              <span class="tooltip">Research/Evaluation/Survey</span>
            </li>
            <li>
              <a href="./res/res.php">
                <i class="bx bx-cog"></i>
                <span class="links_name">Student Evaluation</span>
              </a>
              <span class="tooltip">Student Evaluation</span>
            </li>
            <li>
              <a href="./res/res.php">
                <i class="bx bx-cog"></i>
                <span class="links_name">Reports</span>
              </a>
              <span class="tooltip">Reports</span>
            </li>
          </ul>
        </div>
        <section class="home-section mx-3 bg-light rounded shadow">
          <div class="text">
            <div class="header">Guidance And Counseling Service</div>

	<div class="cards_wrap">
		<div class="card_item">
			<div class="card_inner">
        <div class="count">10</div>
				<div class="service">Couseling Service</div>

			</div>
		</div>
		<div class="card_item">
			<div class="card_inner">
				<img src="doctor_strange.png">
				<div class="service">Doctor Strange</div>
				<div class="count">Benedict Cumberbatch</div>
				<div class="film">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</div>
			</div>
		</div>
		<div class="card_item">
			<div class="card_inner">
				<img src="black_widow.png">
				<div class="service">Black Widow</div>
				<div class="count">Scarlett Johansson</div>
				<div class="film">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</div>
			</div>
		</div>
		<div class="card_item">
			<div class="card_inner">
				<img src="Spider_man.png">
				<div class="service">Spider Man</div>
				<div class="count">Tom Holland</div>
				<div class="film">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</div>
			</div>
		</div>
		<div class="card_item">
			<div class="card_inner">
				<img src="black_widow.png">
				<div class="service">Black Widow</div>
				<div class="count">Scarlett Johansson</div>
				<div class="film">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</div>
			</div>
		</div>
		<div class="card_item">
			<div class="card_inner">
				<img src="black_panther.png">
				<div class="service">Black Panther</div>
				<div class="count">Chadwick Boseman</div>
				<div class="film">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</div>
			</div>
		</div>
		<div class="card_item">
			<div class="card_inner">
				<img src="Spider_man.png">
				<div class="service">Spider Man</div>
				<div class="count">Tom Holland</div>
				<div class="film">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</div>
			</div>
		</div>
		<div class="card_item">
			<div class="card_inner">
				<img src="doctor_strange.png">
				<div class="service">Doctor Strange</div>
				<div class="count">Benedict Cumberbatch</div>
				<div class="film">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt aliqua.</div>
			</div>
		</div>
	</div>
          </div>
        </section>
      </div>
    </main>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <script>
      let sidebar = document.querySelector(".sidebar");
      let closeBtn = document.querySelector("#btn");
      let searchBtn = document.querySelector(".bx-search");
      let arrow = document.querySelectorAll(".arrow");

      closeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
      });

      searchBtn.addEventListener("click", () => {
        // Sidebar open when you click on the search iocn
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
      });

      // following are the code to change sidebar button(optional)
      function menuBtnChange() {
        if (sidebar.classList.contains("open")) {
          closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
        } else {
          closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
        }
      }

      for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e) => {
          let arrowParent = e.currentTarget.parentNode;
          console.log(arrowParent);
          arrowParent.classList.toggle("showMenu");
        });
      }

      let sidebarBtn = document.querySelector(".bx-menu");
      console.log(sidebarBtn);
      sidebarBtn.addEventListener("click", () => {
        sidebar.classList.toggle("close");
      });
    </script>
  </body>
</html>
