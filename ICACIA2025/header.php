<style>
           .header-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 15px;
            gap: 10px;
        }
        .logo-row {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }
       .logo-row img {
            max-height: 50px;
        }
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                text-align: center;
            }
            .logo-row {
                flex-direction: row;
                justify-content: center;
            }
        }
</style>

<header class="d-flex justify-content-between align-items-center p-3">
    <a href="index.php"><img src="images/logonew.png" alt="Logo Left" class="img-fluid" style="max-height: 50px;"></a>
    <img src="images/conferencelogo.jpg" alt="Conference Logo" class="img-fluid mx-auto d-block" style="max-height: 70px;">
    <div>
        <img src="images/ipu.png" alt="Logo Right 1" class="img-fluid me-2" style="max-height: 50px;">
        <img src="images/iste.png" alt="Logo Right 2" class="img-fluid" style="max-height: 50px;">
        <img src="images/iscapi.png" alt="Logo Right 3" class="img-fluid" style="max-height: 50px;">
    </div>
</header>