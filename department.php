<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Departments</title>
  <link rel="stylesheet" href="style/departments.css"> <!-- Linking external CSS -->

  <style>
    /* nav {
      background-color: #0077cc;
      padding: 15px;
      color: white;
      text-align: center;
    } */

    .search-container {
      text-align: center;
      margin: 20px auto;
    }

    #searchInput {
      width: 60%;
      padding: 10px;
      font-size: 16px;
      border-radius: 8px;
      border: 1px solid #ccc;
      outline: none;
      box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }

    .services-section h2 {
      margin-top: 30px;
      font-size: 1.5rem;
      text-align: center;
      color: #333;
    }

    /* .department-list {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 12px;
      margin: 20px auto;
      max-width: 900px;
    }

    .department-list a {
      padding: 12px 20px;
      background-color: #f0f0f0;
      border-radius: 6px;
      text-decoration: none;
      color: #0077cc;
      border: 1px solid #0077cc;
      transition: background 0.3s, color 0.3s;
    }

    .department-list a:hover {
      background-color: #0077cc;
      color: white;
    }

    hr {
      margin: 20px auto;
      width: 90%;
    } */
  </style>
</head>
<body>
  <!-- header -->
    <header class = "header bg-blue">
        <nav class = "navbar bg-blue">
            <div class = "container flex">
                <div class="DocApp_logo">
                    <a href="guest.php"><img src="imagesforweb/DocApp_Medical_Logo_Design.png" /></a>
                </div>
                <!-- <a href = "index1.php" class = "navbar-brand">
                </a> -->
                <button type = "button" class = "navbar-show-btn">
                    <img src = "imagesforweb/ham-menu-icon.png" />
                </button>

                <div class = "navbar-collapse bg-white">
                    <button type = "button" class = "navbar-hide-btn">
                        <img src = "imagesforweb/close-icon.png">
                    </button>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="#" data-page="services.php" class="nav-link">Service</a></li>
                        <li class="nav-item"><a href="#" data-page="bookDoctor.php" class="nav-link">Doctors</a></li>
                        <li class="nav-item"><a href="#" data-page="department.php" class="nav-link">Departments</a></li>
                        <li class="nav-item"><a href="#" data-page="blog.php" class="nav-link">Blog</a></li>
                        <li class="nav-item"><a href="#" data-page="info.php" class="nav-link">About</a></li>
                    </ul>
                </div> 
                <div class="btn-group">
                    <a href="login.php" class="btn btn-white">login</a>
                    <span class="separator">or</span>
                    <a href="signup.php" class="btn btn-light-blue">signup</a>
                </div>
            </div>
        </nav>

        
    </header>
    <!-- end of header -->

  <nav>
    <h1>Departments</h1>
  </nav>

  <section>
    <hr><br>

    <!-- 🔍 Search bar -->
    <div class="search-container">
      <input type="text" id="searchInput" onkeyup="filterDepartments()" placeholder="Search for departments...">
    </div>

    <!-- Recommended Departments -->
    <div>
      <h2>Recommended Doctor Departments</h2>
      <div class="department-list">
        <a href="general.php">General Medicine</a>
        <a href="cardiology.php">Cardiology</a>
        <a href="dermatology.html">Dermatology</a>
        <a href="pediatrics.html">Pediatrics (Children)</a>
        <a href="orthopedics.html">Orthopedics (Bones & Joints)</a>
        <a href="gynecology.html">Gynecology (Women's Health)</a>
        <a href="neurology.html">Neurology (Brain & Nerves)</a>
        <a href="ent.html">ENT (Ear, Nose, Throat)</a>
        <a href="ophthalmology.html">Ophthalmology (Eye)</a>
        <a href="psychiatry.html">Psychiatry (Mental Health)</a>
        <a href="urology.html">Urology (Urinary System)</a>
        <a href="gastroenterology.html">Gastroenterology (Stomach & Digestive)</a>
        <a href="oncology.html">Oncology (Cancer)</a>
        <a href="dentistry.html">Dentistry (Teeth & Oral Health)</a>
        <a href="pulmonology.html">Pulmonology (Lungs & Breathing)</a>
      </div>
    </div>

    <!-- Optional Departments -->
    <div>
      <h2>Optional Additional Departments</h2>
      <div class="department-list">
        <a href="nephrology.html">Nephrology</a>
        <a href="endocrinology.html">Endocrinology (Hormones, Diabetes)</a>
        <a href="rheumatology.html">Rheumatology (Arthritis)</a>
        <a href="infectiousDiseases.html">Infectious Diseases</a>
        <a href="nutrition&dietetics.html">Nutrition & Dietetics</a>
        <a href="anesthesiology.html">Anesthesiology</a>
        <a href="surgery.html">Surgery (General or specialized)</a>
      </div>
    </div>

    <hr>
  </section>

  <!-- ✅ JavaScript for Live Search -->
  <script>
    function filterDepartments() {
      const input = document.getElementById('searchInput').value.toLowerCase();
      const departmentLists = document.querySelectorAll('.department-list');

      departmentLists.forEach(list => {
        const links = list.querySelectorAll('a');
        links.forEach(link => {
          const text = link.textContent.toLowerCase();
          link.style.display = text.includes(input) ? 'inline-block' : 'none';
        });
      });
    }
  </script>
</body>
</html>
