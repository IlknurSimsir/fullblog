<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="admin_assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Admin Panel</title>
</head>

<body>
    <aside class="left-section">
        <div class="logo">
            <button class="menu-btn" id="menu-close">
                <i class='bx bx-log-out-circle'></i>
            </button>

            <a href="#">Ugur Arslan</a>
        </div>

        <div class="sidebar">
            <div class="item" id="active">
                <i class='bx bx-home-alt-2'></i>
                <a href="/all_texts">Yazılarım</a>
            </div>
            <div class="item">
                <i class='bx bx-grid-alt'></i>
                <a href="#">Course</a>
            </div>
            <div class="item">
                <i class='bx bx-folder'></i>
                <a href="/createtext">Yazı Oluştur</a>
            </div>
            <div class="item">
                <i class='bx bx-message-square-dots'></i>
                <a href="#">Message</a>
            </div>
            <div class="item">
                <i class='bx bx-cog'></i>
                <a href="#">Setting</a>
            </div>
        </div>

        <div class="pic">
            <div class="top">
                <div class="profile">
                    <div class="left">
                        <i class="bi bi-person-fill-check"></i>
                        <div class="user">
                            <h5>Uğur Arslan</h5>
                            <a href="#">Site Yöneticisi</a>
                        </div>
                    </div>
                    <i class='bx bxs-chevron-right'></i>
                </div>
            </div>
            </div>
    </aside>
    <script src="admin_assets/script.js">
    </script>
</body>

</html>