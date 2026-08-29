<?php require("inc/header.inc.php") ?>
<div class="waveless">
    <h1>Contact</h1>
</div>

<div class="wave">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 191" fill="none">
        <path d="M0 128.634C119.987 107.236 191.517 89.0772 309 56.6342C428.5 23.6343 560 -18.3658 680 8.63424C844 45.5342 960 149.634 1080 171.334C1202.72 193.116 1322.39 159.997 1440 128.634V190.634C960 190.634 480 190.634 0 190.634V128.634Z" fill="#1282A2" />
    </svg>
    <div class="row blue1">
        <div class="col">
            <h2>Get in Touch!</h2>
            <p>Have questions about my work, interested in hiring me, or just want to chat?</p>
            <p>Fill out the form to send me a message! I'll get back to you within the next few days.</p>
            <h2>Other Ways to Reach Me</h2>
            <ul>
                <li>Follow me on <a href="https://www.linkedin.com/in/lauren-holmgren/">LinkedIn</a></li>
                <li>Send me an email at <a href="mailto:webdevlauren@gmail.com">webdevlauren@gmail.com</a></li>
            </ul>
        </div>
        <div class="col">
            <form action="https://formsubmit.co/webdevlauren@gmail.com" method="POST">
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
        </div>
    </div>
</div>
<?php require("inc/footer.inc.php") ?>