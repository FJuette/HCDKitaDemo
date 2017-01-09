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
                                    <h3 class="login">Login</h3>
                                </div>
                                <div class="panel-body">
                                    <fieldset>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Benutzername (Eltern oder Erzieher)" name="user" id="user" type="text">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Passwort" name="password" id="password" type="password" value="">
                                        </div>
                                        <input class="btn btn-lg btn-success btn-block" type="submit" value="Login" onclick="DoLogin()">
                                    </fieldset>
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


<script type="text/javascript">
    function DoLogin() {
        var username = document.getElementById("user").value;
        if (username == "Eltern") {
            window.location = "family.php";
        }
        else if (username == "Erzieher") {
            window.location = "internal.php";
        }
        else {
            alert("Bitte nur die Benutzer \"Eltern\" oder \"Erzieher\" verwenden.")
        }
    }
</script>

</html>