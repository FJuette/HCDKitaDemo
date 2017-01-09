<?php include("head.php") ?>

<body>
<div class="row">
    <div class="col-md-9">
        <div class="row">
            <div id="header">
                <?php include("headerLeft.php") ?>
                <div class="col-md-7">
                    <img alt="headerChild" src="images/headerBrick.png" style="width: 460px;" />
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
                <h4 class="login">Textbaustein erstellen</h4>
                <div class="row">
                    <form class="form-horizontal">
                        <fieldset>

                            <!-- Text input-->
                            <div class="form-group" style="margin-left: -60px;">
                                <label class="col-md-4 control-label" for="textinput">Bezeichnung:</label>
                                <div class="col-md-8">
                                    <input id="textinput" name="textinput" type="text" placeholder="Einladung zum Frühjahrsputz" class="form-control input-md">
                                </div>
                            </div>

                            <!-- Textarea -->
                            <div class="form-group" style="margin-left: 5px;">
                                <div class="col-md-12">
                                    <textarea class="form-control" id="textarea" name="textarea" rows="10" placeholder="Liebe Eltern ..."></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4" style="margin-left: 20px;">
                                    <button class="btn btn-success">Textbaustein speichern</button>
                                </div>
                                <div class="col-md-4" style="margin-left: 20px;">
                                    <button class="btn btn-warning">Textbaustein verwefen</button>
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
            <img src="images/teaser_8.PNG" class="teaserPicture" alt="Teaser">
            <p>
                Textbausteine bearbeiten... <a href="#">mehr</a>
            </p>
        </div>

        <div class="sbItem sbCalendar">
            <img src="images/teaser_9.PNG" class="teaserPicture" alt="Teaser">
            <p>
                Nachricht versenden... <a href="#">mehr</a>
            </p>
        </div>
    </div>
    <?php include("footer.php") ?>
</div>

</body>

</html>