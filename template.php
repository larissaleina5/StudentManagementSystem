<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <title>admin Dashboard panel</title>
</head>
<body>
<nav>
    <div class="logo-name">
        <div class="logo-image">
            <img src="images.jpg" alt="">
        </div>
        <span class="logo_name">codinglab</span>
        </div>
    <div class="menu-items">
        <ul class="nav-links">
            <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
            <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">add course</span>
                </a></li><li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">view course</span>
                </a></li><li><a href="#">
                    <i class="uil uil-estate">registration</i>
                    <span class="link-name">view student</span>
                </a></li><li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">edit</span>
                </a></li>
        </ul>
        <a class="layout mode">
            <li><a href="#">
                    <i class="uil uil-sing out"></i>
                    <span class="link-name">Log out</span>
                </a></li>
        <li class="mode">
            <a href="#">
                <i class="uil uil-moon"></i>
                <span class="link-name">Dark mode</span>
            </a>
            <div class="mode-toggle">
                <span class="switch"></span>
            </div>
        </li>
        </a>
    </div>
</nav>
<section class="dashboard">
    <div class="top">
        <i class="uil uil-bars sidebar-toggle"></i>
        <div class="search-box">
            <i class="uil uil-search"></i>
            <input type="text" placeholder="search here">
            </div>
        <div class="dash content">
            <div class="overview">
                <div class="title">
                    <div class="uil uil-tachometer-fast-alt"><i/>
                        <span class="text">Dashboard</span>
                    </div>
                    <s class="boxes">
                        <div class="box box1">
                            <i class="uil uil-thumbs-up"></i>
                            <span class="text">Total Likes</span>
                            <span class="number">50,120</span>
                            <div>
                                <div class="box box2">
                                    <i class="uil uil-comments"></i>
                                    <span class="text">Comments</span>
                                    <span class="number">20,120</span>
                                </div><div class="box box3">
                                    <i class="uil uil-share"></i>
                                    <span class="text">Total Share</span>
                                    <span class="number">10,120</span>
                                </div>
                            </div>
                        </div>
                        <div class="activity">
                            <div class="title">
                                <i class="uil uil-clock-there"></i>
                                <span class="text">Recent Activity</span>
                                </div>
                            <div class="activity-data">
                                <div class="activity-data">
                                    <div class="data names">
                                        <span class="data-title">Name</span>
                                        <span class="data-title">Mikey</span>
                                        <span class="data-title">Akum</span>
                                        <span class="data-title">Name</span>
                                        <span class="data-title">Name</span>
                                        <span class="data-title">Name</span>
                                        <
                                    </div>
                                    <div class="data email">
                                        <span class="data-title">Email</span>
                                        <span class="data-title">Luci@gmail </span>
                                        <span class="data-title">Name</span>
                                        <span class="data-title">Name</span>
                                        <span class="data-title">Name</span>
                                        <s
                                    </div>
                                    <div class="data joined">
                                        <span class="data-title">Joined</span>
                                        <span class="data-title">2022-02-12</span>
                                        <span class="data-title">2022-02-13</span>
                                        <span class="data-title">2022-02-14</span>
                                        <span class="data-title">2022-02-15</span>
                                        <span class="data-title">2022-02-16</span>
                                        <span class="data-title">2022-02-17</span>
                                        <span class="data-title">2022-02-18</span>
                                        <span class="data-title">2022-02-19</span>

                                    </div>
                                    <div class="data type">
                                        <span class="data-title">Type</span>
                                        <span class="data-list">add course</span>
                                        <span class="data-list">view course</span>
                                        <span class="data-list"> register</span>
                                        <span class="data-list">view student</span>
                                        <span class="data-list">Edit</span>
                                    </div>
                                    <div class="data status">
c                                        <span class="data-title">status</span>
                                        <span class="data-list">status</span>
                                        <span class="data-list">status</span>
                                        <span class="data-list">status</span>
v                                        <span class="data-list">status</span>
                                        <span class="data-list">status</span>
                                    </div>
                                </div>
                            </div>
                        </div>
</section>
<script src="dashboard.js"></script>
</body>
</html>
