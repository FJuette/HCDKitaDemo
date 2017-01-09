<?php include("head.php") ?>

<body>
<div class="row">
    <div class="col-md-9">
        <div class="row">
            <div id="header">
                <?php include("headerLeft.php") ?>
                <div class="col-md-7">
                    <img alt="headerChild" src="images/teaser_9.PNG" style="width: 460px;" />
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
                <h4 class="login">Nachricht versenden</h4>
                <div class="row col-md-12">
                    <form class="form-horizontal">
                        <fieldset>

                            <!-- Text input-->
                            <div class="form-group" style="margin-left: -80px;">
                                <label class="col-md-4 control-label" for="textinput">An:</label>
                                <div class="col-md-8">
                                    <input id="textinput" name="textinput" type="text" placeholder="Hasengruppe; Käfergruppe" class="form-control input-md">
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group" style="margin-left: -80px;">
                                <label class="col-md-4 control-label" for="textinput">Kopie:</label>
                                <div class="col-md-8">
                                    <input id="textinput" name="textinput" type="text" placeholder="t.stein@kita-erzstrße.de" class="form-control input-md">
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group" style="margin-left: -80px;">
                                <label class="col-md-4 control-label" for="textinput">Betreff:</label>
                                <div class="col-md-8">
                                    <input id="textinput" name="textinput" type="text" placeholder="Einladung zum Elternabend" class="form-control input-md">
                                </div>
                            </div>

                            <button style="margin-left: 20px;" class="btn" onclick="Hint()">Textbaustein auswählen...</button>

                            <!-- Textarea -->
                            <div class="form-group" style="margin-left: 5px; margin-top: 2px;">
                                <div class="col-md-12">
                                    <textarea class="form-control" id="textarea" name="textarea" rows="10" placeholder="Liebe Eltern ..."></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4" style="margin-left: 20px;">
                                    <button class="btn btn-success" onclick="Hint()">Nachricht senden</button>
                                </div>
                                <div class="col-md-4" style="margin-left: 20px;">
                                    <button class="btn btn-warning" onclick="Hint()">Nachricht verwefen</button>
                                </div>
                            </div>


                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="sidebar" class="col-md-3 innerPadding">
        <div class="sbItem sbCalendar">
            <img src="images/headerBrick.png" class="teaserPicture" alt="Teaser">
            <p>
                Textbaustein erstellen... <a href="#">mehr</a>
            </p>
        </div>
    </div>
    <?php include("footer.php") ?>
</div>

</body>

<script type="text/javascript">
    function Hint() {
        alert("Funktion noch nicht implementiert");
    }
</script>

</html>