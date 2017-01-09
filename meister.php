<?php include("head.php") ?>

<body>
<div class="row">
    <div class="col-md-9">
        <div class="row">
            <div id="header">
                <?php include("headerLeft.php") ?>
                <div class="col-md-7">
                    <img alt="headerChild" src="images/meisterHead.PNG" style="width: 460px;" />
                </div>
            </div>
            <?php include("navigation.php") ?>
            <div id="content" class="col-md-7 innerPadding">
                <h4 class="news">Meisterwerk des Monats</h4>
                <img alt="Meisterwerk" src="images/meisterContent.PNG" style="width: 460px;" />
                <p>
                    Fritzchen, 4 Jahre
                    <br />
                    "Ein Sommertag"
                    <br />
                    Buntstriftzeichnung auf Papier
                    <div class="news" style="margin-top: 30px;">
                        <a href="#">Archiv</a>
                    </div>
                </p>
            </div>
        </div>
    </div>
    <?php include("teaser.php") ?>
    <?php include("footer.php") ?>
</div>

</body>

</html>