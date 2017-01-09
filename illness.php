<?php include("head.php") ?>

<body>
<div class="row">
    <div class="col-md-9">
        <div class="row">
            <div id="header">
                <?php include("headerLeft.php") ?>
                <div class="col-md-7">
                    <img alt="headerChild" src="images/illnessHead.PNG" style="width: 460px;" />
                </div>
            </div>
        </div>
        <div class="row">
            <?php include("navigation.php") ?>
            <div id="content" class="col-md-7 innerPadding">
                <h4 class="about">Aktuell, ansteckende Erkrankungen</h4>
                <h5>Stand: 04.01.2017</h5>
                Achtung, derzeit kursieren in unserer KiTa folgende Krankheiten:
                <ul>
                    <li>Windpocken in der Hasen- und Elefantengruppe</li>
                    <li>Kopgläuse in der Käfergruppe</li>
                </ul>
            </div>
        </div>
    </div>
    <div id="sidebar" class="col-md-3 innerPadding">
        <div class="sbItem sbLogin">
            <img src="images/teaser_6.PNG" class="teaserPicture" alt="Teaser">
            <p>
                Informationen zu Kopfläusen... <a href="#">mehr</a>
            </p>
        </div>
        <div class="sbItem sbLogin">
            <img src="images/teaser_7.PNG" class="teaserPicture" alt="Teaser">
            <p>
                Informationen zu Röteln... <a href="#">mehr</a>
            </p>
        </div>
    </div>
    <?php include("footer.php") ?>
</div>

</body>

</html>