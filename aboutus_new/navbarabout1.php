<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link href="//db.onlinewebfonts.com/c/3d801c16769ba2dd6344be073c5bb938?family=TradeGothicLTW01-Light" rel="stylesheet" type="text/css"/>
<style>
/* Navbar Background */


/* Dropdown Hover */
.nav-item.dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0;
    background-color: navy !important;
}

/* Dropdown Styling */
.custom-dropdown {
    background-color: navy !important;
    border: none;
    transition: all 0.3s ease-in-out;
    width: 250px;
}

.custom-dropdown .dropdown-item {
    color: white !important;
    font-size: 1.3rem;
    transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
}

.custom-dropdown .dropdown-item:hover {
    background-color: #1a1a6e !important; /* Darker navy for hover effect */
    color: white !important;
    font-size: 1.55rem;
}

/* Navbar Links */
.navbar-nav .nav-link {
    color: white !important;
    font-size: 1.5rem;
}

.navbar-nav .nav-link:hover {
    color: #f0f0f0 !important; /* Lighter white for hover effect */
}
</style>

<div class="navcontainer">
<nav class="navbar navbar-expand-lg" style="background: navy;">
    <a class="navbar-brand color-white tgfmlt" onmouseover="somelinks(this)" onmouseout="normallinks(this)" href="https://www.iitmjanakpuri.com/index.php">
        <img src="../upload_new/gallery/logow.png" class="logom" id="logom" style="width: 9.2rem; height: 5.2rem;"/>
    </a>
    <div class="container text-center">
        <button class="navbar-toggler tgfmlt color-maroon custom-toggler ml-auto" style="margin-bottom: 12px;" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon custom-toggler"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <!-- About Us Dropdown -->
                <li class="nav-item dropdown" style="margin-left: 5em; margin-right: 5em;">
                    <a class="nav-link dropdown-toggle color-white tgfmlt sl1" href="#" id="aboutDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        About Us
                    </a>
                    <div class="dropdown-menu custom-dropdown" aria-labelledby="aboutDropdown">
                        <a class="dropdown-item" href="#about">About Us</a>
                        <a class="dropdown-item" href="#vision-mission">Vision & Mission</a>
                        <a class="dropdown-item" href="#founder">Founder</a>
                        <a class="dropdown-item" href="#governing-body">Governing Body</a>
                        <a class="dropdown-item" href="#chairman">Chairman</a>
                        <a class="dropdown-item" href="#quality-policy">Quality Policy</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
</div>

<script>
    function somelinks(x) {
        x.style.color = '#fff';
        x.style.fontWeight = 'bolder';
        x.style.transform = 'scale(1.2)';
    }

    function normallinks(x) {
        x.style.transform = 'scale(1)';
        x.style.fontWeight = 'normal';
    }
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
