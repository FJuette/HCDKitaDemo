<?php include("head.php") ?>

<body>
<div class="row">
    <div class="col-md-9">
        <div class="row">
            <div id="header">
                <?php include("headerLeft.php") ?>
                <div class="col-md-7">
                    <img alt="headerChild" src="images/calendarHead.PNG" style="width: 460px;" />
                </div>
            </div>
        </div>
        <div class="row">
            <?php include("navigation.php") ?>
            <div id="content" class="col-md-7 innerPadding">
                <h4>KiTa-Kalendar</h4>
                <img alt="Bildbeispiel des Kalenders" src="images/calendar.PNG" style="width: 460px;" />
            </div>
        </div>
    </div>
    <div id="sidebar" class="col-md-3 innerPadding">
        <div class="sbItem" style="margin-top: 330px;">
            <img src="images/calendarLegende.PNG" alt="Legende">
        </div>
    </div>
    <?php include("footer.php") ?>
</div>

</body>

</html>