<?php include("head.php") ?>

<body>
<div class="row">
    <div class="col-md-9">
        <div class="row">
            <div id="header">
                <?php include("headerLeft.php") ?>
                <div class="col-md-7">
                    <img alt="headerChild" src="images/food.PNG" style="width: 460px;" />
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
                <h4 class="login">Essen bestellen*</h4>

                <h5>31.10.2016 - 04.11.2016</h5>

                <table id="tblFood" border="1">
                    <thead>
                        <tr>
                            <td></td>
                            <td class="foodHead">Normal</td>
                            <td class="foodHead">Vegan</td>
                            <td class="foodHead">Vegetarisch</td>
                            <td class="foodHead">Allergiker</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="foodHead">Montag</td>
                            <td>
                                Gyros mit Krautsalat<br />
                                <input type="checkbox" title="anmelden" style="margin-top: 15px;"> anmelden<br />
                            </td>
                            <td>
                                Soja-Gyros mit Gemüse<br />
                                <input type="checkbox" title="anmelden" style="margin-top: 15px;"> anmelden<br />
                            </td>
                            <td>
                                Soja-Gyros mit Gemüse<br />
                                <input type="checkbox" title="anmelden" style="margin-top: 15px;"> anmelden<br />
                            </td>
                            <td>
                                Gyros mit Gemüsedip<br />
                                <input type="checkbox" title="anmelden" style="margin-top: 15px;"> anmelden<br />
                            </td>
                        </tr>
                        <tr>
                            <td class="foodHead">Dienstag</td>
                            <td>
                                Spaghetti Bolognese<br />
                                <input type="checkbox" title="anmelden" style="margin-top: 15px;"> anmelden<br />
                            </td>
                            <td>
                                Spaghetti mit Tomatensauce<br />
                                <input type="checkbox" title="anmelden" style="margin-top: 15px;"> anmelden<br />
                            </td>
                            <td>
                                Spaghetti mit Tomatensauce<br />
                                <input type="checkbox" title="anmelden" style="margin-top: 15px;"> anmelden<br />
                            </td>
                            <td>
                                Spaghetti Bolognese<br />
                                <input type="checkbox" title="anmelden" style="margin-top: 15px;"> anmelden<br />
                            </td>
                        </tr>
                        <tr>
                            <td class="foodHead">Mittwoch</td>
                            <td>
                                Knusperfisch mit Kartoffeln und Sauce<br />
                                <input type="checkbox" title="anmelden" style="margin-top: 15px;"> anmelden<br />
                            </td>
                            <td>
                                Gefülltes Gemüse mit Kartoffeln<br />
                                <input type="checkbox" title="anmelden" style="margin-top: 15px;"> anmelden<br />
                            </td>
                            <td>
                                Gefülltes Gemüse mit Kartoffeln<br />
                                <input type="checkbox" title="anmelden" style="margin-top: 15px;"> anmelden<br />
                            </td>
                            <td>
                                Seelachsfilet mit Kartoffeln und Sauce<br />
                                <input type="checkbox" title="anmelden" style="margin-top: 15px;"> anmelden<br />
                            </td>
                        </tr>
                        <tr>
                            <td class="foodHead">Donnerstag</td>
                            <td>
                                Hähnchen-schenkel mit Kartoffelcken<br />
                                <input type="checkbox" title="anmelden" style="margin-top: 15px;"> anmelden<br />
                            </td>
                            <td>
                                Sojaschnitzel mit Kartoffelecken<br />
                                <input type="checkbox" title="anmelden" style="margin-top: 15px;"> anmelden<br />
                            </td>
                            <td>
                                Gebratenes Gemüse mit Kartoffelecken<br />
                                <input type="checkbox" title="anmelden" style="margin-top: 15px;"> anmelden<br />
                            </td>
                            <td>
                                Hähnchen-schenkel mit Kartoffelcken<br />
                                <input type="checkbox" title="anmelden" style="margin-top: 15px;"> anmelden<br />
                            </td>
                        </tr>
                        <tr>
                            <td class="foodHead">Freitag</td>
                            <td>
                                Gemüsesuppe<br />
                                <input type="checkbox" title="anmelden" style="margin-top: 15px;"> anmelden<br />
                            </td>
                            <td>
                                Gemüsesuppe<br />
                                <input type="checkbox" title="anmelden" style="margin-top: 15px;"> anmelden<br />
                            </td>
                            <td>
                                Gemüsesuppe<br />
                                <input type="checkbox" title="anmelden" style="margin-top: 15px;"> anmelden<br />
                            </td>
                            <td>
                                Gemüsesuppe<br />
                                <input type="checkbox" title="anmelden" style="margin-top: 15px;"> anmelden<br />
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div style="font-size: 0.85em;"><span class="login">*</span>eine Liste der Zusatzstoffe und Allergene finden Sie auf einem gesonderten <a href="#" style="color: grey; text-decoration: underline;">Blatt</a>.</div>
                <div class="row" style="margin-top: 20px; margin-bottom: 10px;">
                    <div class="col-md-offset-4">
                        <input type="button" class="btn btn-success" value="Zusammenfassung anzeigen">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4"><a href="#" class="login">&lt;&lt;vorherige Woche</a></div>
                    <div class="col-md-offset-4 col-md-4" style="text-align: right"><a href="#" class="login">nächste Woche&gt;&gt;</a></div>
                </div>
            </div>
        </div>
    </div>
    <div id="sidebar" class="col-md-3 innerPadding">
        <div class="sbItem sbCalendar">
            <img src="images/teaser_5.PNG" class="teaserPicture" alt="Teaser">
            <p>
                *Liste der Zusatzstoffe und Allergene... <a href="#">mehr</a>
            </p>
        </div>
    </div>
    <?php include("footer.php") ?>
</div>

</body>

</html>