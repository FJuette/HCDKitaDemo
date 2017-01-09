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
                <h4 class="login">Hallo Sibylle Uhland</h4>
                <h5>Bitte wählen Sie aus:</h5>
                <ul class="menuFamily">
                    <li>
                        <a href="message.php">Nachrichten versenden</a>
                    </li>
                    <li>
                        <a href="addbrick.php">Textbausteine erstellen</a>
                    </li>
                    <li>
                        <a href="#">Textbausteine anpassen</a>
                    </li>
                    <li>
                        <a href="#">Gruppen anpassen</a>
                    </li>
                    <li>
                        <a href="#">Benutzerdaten pflegen</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php include("footer.php") ?>
</div>

</body>

</html>