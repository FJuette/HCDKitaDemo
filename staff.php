<?php include("head.php") ?>

<body>
<div class="row">
    <div class="col-md-9">
        <div class="row">
            <div id="header">
                <?php include("headerLeft.php") ?>
                <div class="col-md-7">
                    <img alt="headerChild" src="images/headerRight.png" style="width: 460px;" />
                </div>
            </div>
        </div>
        <div class="row">
            <?php include("navigation.php") ?>
            <div id="content" class="col-md-7 innerPadding">
                <h4 class="about">Mitarbeiter/innen</h4>
                <p>Derzeit sind es zehn Erzieher/innen und pädagogische Mitarbeiter/innen, die die Kinder der KiTa Erzstraße willkommen heißen.</p>
                <ul class="staffList">
                    <li>
                        <div class="row">
                            <div class="col-md-4">
                                <img class="staffImg" src="images/staff1.png">
                            </div>
                            <div class="col-md-8" style="margin-top: 50px;">
                                <b class="about">Heidrun Meier</b>
                                <br />
                                Erzieherin
                                <br />
                                Schwerpunkt: Natur- und Waldpädagogik
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-md-4">
                                <img class="staffImg" src="images/staff2.png">
                            </div>
                            <div class="col-md-8" style="margin-top: 50px;">
                                <b class="about">Sibylle Block</b>
                                <br />
                                Erzieherin
                                <br />
                                Schwerpunkt: Förderungspädagogik
                            </div>
                        </div>
                    </li>
                    <li>
                        ...
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <?php include("teaser.php") ?>
    <?php include("footer.php") ?>
</div>

</body>

</html>