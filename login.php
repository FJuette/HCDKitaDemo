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
            <?php include("navigation.php") ?>
            <div id="content" class="col-md-7 innerPadding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="panel panel-default" style="margin-left: -8px;">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Login</h3>
                                </div>
                                <div class="panel-body">
                                    <form accept-charset="UTF-8" role="form" action="<?php $_PHP_SELF ?>" method="GET">
                                        <fieldset>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Benutzername" name="user" id="user" type="text">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Passwort" name="password" id="password" type="password" value="">
                                            </div>
                                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("footer.php") ?>
</div>

</body>

</html>