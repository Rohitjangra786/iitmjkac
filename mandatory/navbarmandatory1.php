<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//db.onlinewebfonts.com/c/3d801c16769ba2dd6344be073c5bb938?family=TradeGothicLTW01-Light" rel="stylesheet" type="text/css"/>
    
    <style>
        /* Your existing styles here */

        .navbar {
            text-align: center;
        }

        .navbar-nav {
            width: 100%;
            text-align: center;
            flex-direction: column;
        }

        .navbar-toggler {
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>

<div class="navcontainer">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand color-white tgfmlt" onmouseover="somelinks(this)" onmouseout="normallinks(this)" href="https://www.iitmjanakpuri.com/index.php">
            <img src="../upload_new/gallery/logow.png" class="logom" id="logom" style="width: 9.2rem; height: 5.2rem;"/>
        </a>
        <button class="navbar-toggler tgfmlt color-maroon custom-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon custom-toggler"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link color-white tgfmlt sl1" href="#sch">In-House Scholarships</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-white tgfmlt sl1" href="pdfs/meritcum.pdf" target="_blank">Merit-cum-Means Linked Financial Assistance Scheme</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-white tgfmlt sl1" href="pdfs/EWS.pdf" target="_blank">EWS Scheme</a>
                </li>
            </ul>
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

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
