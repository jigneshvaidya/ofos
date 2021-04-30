<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Fast food corner</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body bgcolor="#00ffd0">
    <font size="20" color="white" style="font-family:cooper black;">WELCOME TO FAST FOOD CORNER</font>
    <img src="Fast-Food-icon.png" width="60" height="60" align="right" alt=""/>
    <marquee>Fast food corner welcomes you with our best taste. Enjoy your best Movements us and make it unforgettable. Share your memories with FFC(Fast Food Corner) on <a href="https://www.facebook.com/">Facebook</a>, <a href="https://www.instagram.com/">Instagram</a> or <a href="https://twitter.com/">Twitter</a> and us #FastFoodCorner.</marquee>
    <hr>
    <table style="width:100%;" bgcolor='#dddddd' align='center'>
        <tr bgcolor='#FFFDF2'>
            <td style='width:50%' align='center'>
            <h1>MENU</h1><hr>
            <form>
                <table cellpadding="20" border="0" id="shell" style="width:100%">
                <tr>
                    <td style="width:33.33%">
                        <font color="green">
                        <input type="radio" name="rBurger" id="rVB" value="150" onclick="burgerPriceUpdate('150')"/>Veg burger<br>
                        </font>
                        <font color="yellow">
                            <input type="radio" name="rBurger" id="rEB" value="170" onclick="burgerPriceUpdate('170')"/>Egg burger<br>
                        </font>
                        <font color="red">
                            <input type="radio" name="rBurger" id="rNB" value="200" onclick="burgerPriceUpdate('200')"/>Non-veg burger<br>
                        </font>
                    </td>
                    <td style="width:33.33%">
                        <input type="checkbox" id="cbBurger" value="150" />Burger<br>
                        <input type="checkbox" id="cbCoke" value="20" />Coke<br>
                        <input type="checkbox" id="cbFrenchFries" value="30" />French Fries<br>
                    </td>
                    <td style="width:33.33%">
                        Rs. <label id="burger" ></label>/-<br>
                        Rs. 20/-<br>
                        Rs. 30/-<br>
                    </td>
                </tr>
                <tr>
                    <td colspan='3' style="width:100%"><hr></td>
                </tr>
                <tr>
                    <td style="width:33.33%">
                        Order(s) : <br>
                        Order Cost : <br>
                    </td>
                    <td colspan='2' style="width:66.66%">
                        <label id="oNum" >0</label><br>
                        <label id="oCost">0</label> Rs.<br>
                    </td>
                </tr>
                <tr>
                    <td style="width:33.33%"><input type="button" value="Place Order" id="order" onclick="show(); placeOrder(); getDate();"></td>
                    <td style="width:33.33%"></td>
                    <td style="width:33.33%"><input type="reset" value="CLEAR" onclick="oNum.value=1;"></td>
                </tr>
            </table>
            </form>
        </td>
            <td style='width:50%' align='center'>
                <h1>Fast food corner</h1>
                <p>Bill Receipt | Date : <label id="date"></label></p><hr>
                <div id="list"></div>
                <div id="bill"></div>
            </td>
        </tr>
    </table>
    <script src="sampleScript.js"></script>
	        <?php
			include_once("sample.html");
            ?>
</body>
</html>
<!--action="file:///C:/Users/hayagreeva/Documents/NetBeansProjects/WebFoodCorner/src/java/ffc/packaging.html" target="_blank"-->
<!--
color="#3B444B"
color="#004225"
color="#36454F"
-->