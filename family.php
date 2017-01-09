<?php include("head.php") ?>

<body>
<div class="row">
    <div class="col-md-9">
        <div class="row">
            <div id="header">
                <?php include("headerLeft.php") ?>
                <div class="col-md-7">
                    <img alt="headerChild" src="images/loginheader.PNG" style="width: 460px;" />
                </div>
            </div>
        </div>
        <div class="row">
            <div id="navigation" class="col-md-5 innerPadding">
                <div class="login">
                    <h3><a href="index.php">Logout</a></h3>
                </div>
            </div>
            <div id="content" class="col-md-7 innerPadding">
                <h4 class="login">Herzlich Willkommen Familie Schneider</h4>
                <h5>Bitte wählen Sie aus:</h5>
                <ul class="menuFamily">
                    <li>
                        <a href="food.php">Essen bestellen</a>
                    </li>
                    <li>
                        <a href="#">Terminplan einsehen</a>
                    </li>
                    <li>
                        <a href="#">Geburstagskalendar einsehen</a>
                    </li>
                    <li>
                        <a href="#">Adresslisten einsehen</a>
                    </li>
                    <li>
                        <a href="#">Anmeldeformular</a>
                    </li>
                    <li>
                        <a href="#">Downloads</a>
                    </li>
                    <li>
                        <a href="#">Fotos und Videos der letzten Veranstaltungen einsehen</a>
                    </li>
                    <li>
                        <a href="#">Hinweise auf aktuell, ansteckende Erkrankungen</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php include("footer.php") ?>
</div>

</body>

</html>