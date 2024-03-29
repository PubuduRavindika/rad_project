<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard | Admin</title>
</head>
<body class="admin-dash-body">
    <div class="nav_container">
        <div class="nav_title">
            Student Registration System | WUSL
        </div>
        <div class="nav_details">
            <span>
                <p>Administrator</p>
                <div class="nav_btn_holder"><button onclick="location.href='../logout/action_admin_logout.php'">LOGOUT</button></div>
            </span>
            <img src="profile-2.png" alt="">
        </div>
    </div>

    <div class="dash-headder">Filled Applications</div>

    <div class="dash-container">
        <div class="dash-div">
            <button class="select-btn">First Year Registration Filled Forms</button>
            <button class="select-btn">Third Year Registration Filled Forms</button>
        </div>
        <div class="dash-div">
            <button class="select-btn">Second Year Registration Filled Forms</button>
            <button class="select-btn">Fourth Year Registration Filled Forms</button>
        </div>

        <div class="dash-div">
            <button class="select-btn">Third Year Selection Filled Forms</button>
        </div>
    </div>


    <div class="dash-headder">Add persons</div>

    <div class="dash-container">
        <div class="dash-div">
            <button class="select-btn" onclick="location.href='../add_students/add_students.php'">+ Add New Students</button>

            <button class="select-btn" onclick="location.href='../add_counsellor/add_student_counsellor.php'">+ Add Student Counsellor</button>
        </div>
        <div class="dash-div">
            <button class="select-btn" onclick="location.href='../add_management/add_management.php'">+ Add Management Assistants</button>
        </div>

        <div class="dash-div">
            <button class="select-btn" onclick="location.href='../add_hod/add_department_heads.php'">+ Add Department Heads</button>
        </div>
    </div>
    
</body>
</html>