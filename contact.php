<?php require("inc/header.inc.php") ?>
<h1>Contact</h1>

<form action="https://ctec.clark.edu/CTEC122/scripts/form_echo.php" method="POST">
    <fieldset>
        <legend>Contact Form</legend>

        <label for="first">First Name</label><br>
        <input id="first" type="text" name="first" autofocus><br>

        <label for="last">Last Name</label><br>
        <input id="last" type="text" name="last"><br>

        <label for="email">Email</label><br>
        <input id="email" type="email" name="email" size="30"><br>

        <label for="phone">Phone Number</label><br>
        <input id="phone" type="tel" name="phone" size="30"><br>

        <label for="message">Message</label><br>
        <textarea id="message" name="message" cols="40" rows="5"></textarea><br>

        <input type="submit" value="Send">
        <input type="reset" value="Clear">
    </fieldset>
</form>
<?php require("inc/footer.inc.php") ?>