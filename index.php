<?php
if(isset($_POST['btnSubmit'])) {
  $name     = strip_tags(trim($_POST["txtName"]));
  $email    = strip_tags(trim($_POST["txtEmail"]));
  $subj     = strip_tags(trim($_POST["txtSubject"]));
  $mesg     = strip_tags(trim($_POST["txtMessage"]));

  $errors = array();

  if(empty($name)) { $errors[] = "Please specify your name."; }

  if(empty($email)) {
    $errors[] = "Please specify your email address.";
  }
  else {
    if(!preg_match("/([a-z0-9-\_]+)\@([a-z0-9-]+)\.([a-z0-9\.]+)/i", $email)) {
      $errors[] = "Please enter a valid email address.";
    }
  }

  if(empty($subj)) { $errors[] = "Please select an email subject."; }
  if(empty($mesg)) { $errors[] = "Please enter your email message."; }

  if(count($errors) == 0) {

    // Email Headers
    $headers = "From: {$name}<{$email}>\r\n";
    $headers .= "Return-Path: {$name}<{$email}>\r\n";
    $headers .= "Reply-To: {$name}<{$email}>\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $mail_to = "hello@method1947.com";
    $subject  = $subj;

    $content  = "<html>
            <body>
            <div style=\"color: #000;font-family:Arial; font-size: 12px;\">\n

              The following message has been sent via the Method1947 Website contact form:<br>\n\n";

    $content  .=  "<br>From: <b>" . $name . "</b>";
    $content  .=  "<br>Email: <b>" . $email . "</b><br>\n";
    $content  .= "<br>Subject: <b>". $subject . "</b>\n";
    $content  .=  "<br><br>" . nl2br($mesg);
    $content  .=  "</div></body></html>";

    mail($mail_to, $subject, $content, $headers);
    header("location:index.php?act=ok");
  }
  else {
    $name = stripslashes($name);
    $email = stripslashes($email);
    $subj = stripslashes($subj);
    $mesg = stripslashes($mesg);
  }
}
else {
  $name = "";
  $email = "";
  $subj = "";
  $mesg = "";
}

$required = "<span style=\"color:red;font-weight: bold\">*</span>";
?>
<?php include "includes/header.php"; ?>

    <div id="particles-js">
      <div class="grid-container">
        <div class="grid-x grid-padding-x">

          <div class="small-12 cell logo">
            <img src="img/method1947fullogo-light.svg" alt="Method1947 logo">
          </div>

          <div class="small-12 medium-8 large-5 end cell introtext">
            <h1>We design websites & create experiences.</h1>
            <p>Based in Torbay, Devon. We specialise in crafting polished, professional branding, websites and applications that will help you engage with your customers. Keep scrolling to find out how we can help you.</p>
            <a href="#contact-area"><div class="button">Get in touch</div></a>
          </div>

          <a href="https://www.google.co.uk/search?q=method1947&rlz=1C5CHFA_enGB783GB783&oq=method1947&aqs=chrome..69i57j69i60j69i61j69i60j69i61j69i59.1823j0j1&sourceid=chrome&ie=UTF-8#lrd=0x486d1b0258c5d68b:0xe28d8cdad4065e6,1,,," target="_blank">
            <div id="google-rating">
              <div class="text">
                <div class="rating">5.0</div>
                <img src="img/star.png">
                <img src="img/star.png">
                <img src="img/star.png">
                <img src="img/star.png">
                <img src="img/star.png">
              </div>
              <img src="img/google.png" alt="google logo">
            </div>
          </a>

        </div>
      </div>
    </div>

    <div class="grid-container">

      <div class="grid-x spacer">
        <div class="small-12 cell">
          <h2 class="centered">Companies we've partnered with.</h2>
        </div>
      </div>

      <div class="grid-x grid-margin-y grid-margin-x">
        <div class="brand small-6 medium-3 cell"><img src="img/nike.jpg" alt="nike logo"></div>
        <div class="brand small-6 medium-3 cell"><img src="img/adidas.jpg" alt="adidas logo"></div>
        <div class="brand small-6 medium-3 cell"><img src="img/sportsdirect.jpg" alt="sportsdirect logo"></div>
        <div class="brand small-6 medium-3 cell"><img src="img/underarmour.jpg" alt="underarmour logo"></div>
        <div class="brand small-6 medium-3 cell"><img src="img/puma.jpg" alt="puma logo"></div>
        <div class="brand small-6 medium-3 cell"><img src="img/gambaru.jpg" alt="flannels logo"></div>
        <div class="brand small-6 medium-3 cell"><img src="img/lovell.jpg" alt="lovell logo"></div>
        <div class="brand small-6 medium-3 cell"><img src="img/five.jpg" alt="five logo"></div>
      </div>

      <div class="grid-x spacer">
        <div class="small-12 cell">
          <h2 class="centered">What we can do for you.</h2>
        </div>
      </div>

      <div id="services" class="grid-x grid-margin-y grid-margin-x">
        <div class="small-12 medium-4 cell">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#00AA5B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
          <h3>Identity and Branding</h3>
          <p>Your brand identity is one of the most important aspects to consider when starting your business. It portrays who you are, what you do and is the first thing potential customers see. We can assist you with everything from designing a sleek professional logo to your tone of voice.</p>
        </div>
        <div class="small-12 medium-4 cell">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#00AA5B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
          <h3>Web Design & Development</h3>
          <p>A clear functional website is key to aquiring customer trust. With our help we can build a website that you are proud of and happy to share with your audience. But most importantly will convert visitors to paying customers. No project is too big or small.</p>
        </div>
        <div class="small-12 medium-4 cell">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#00AA5B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
          <h3>UX Consultancy</h3>
          <p>If you already have a website but it’s not performing to the level that you expect we can help. Using our knowledge of analytical data and best practice we can pinpoint exactly which parts of your site are under performing, and in turn we can suggest solutions to your problems.</p>
        </div>
      </div>

      <div class="grid-x grid-margin-y grid-margin-x">

        <div class="small-12 medium-6 cell images">
          <img src="img/about-image-1.jpg" alt="laptop and coffee">
          <img src="img/about-image-2.jpg" alt="eucalyptus plant">
        </div>

        <div class="small-12 medium-6 cell about">
          <h2>More about Method.</h2>
          <p>Based in Torbay, Devon. Method is an experienced group of creatives.
          <p>We have had the privilege of working with huge clients both internationally and domestically and our work has been experienced by millions. We also have a strong passion for helping local businesses get off the ground and enjoy helping them understand how their companies can benefit from growing their online presence.</p>
          <p>We're always happy to have a chat about your vision free of charge, and if we can’t help we are more than happy to point you in the right direction.</p>
        </div>

      </div>

    </div>

    <div id="contact-area">
      <div class="grid-container">

        <div class="grid-x">
          <div class="small-12 cell">
            <h2 class="centered">Contact us.</h2>
          </div>
        </div>

        <div class="grid-x">
          <div class="contact-form small-12 medium-8 medium-offset-2 large-6 large-offset-3 cell">

            <?php
            $act = isset($_GET['act']) ? $_GET['act'] : "";
            if($act == "ok") {
            ?>
                <div class="green">
                    <div class="success">
                      <p>Message sent</p>
                    </div>
                    <p>Your message was sent successfully. We'll be in touch soon.</p>
                </div>
            <?php
            }
            else {
                    if(count($errors) > 0) {
                        echo "
                        <div class=\"red\">
                            The following problems were encountered:
                            <ul>\n";

                        foreach($errors as $error) {
                            echo "
                                <li>" . $error . "</li>\n";
                        }

                        echo "
                            </ul>
                        </div>\n";
                    }
                    ?>

                <form action="<?=$_SERVER['PHP_SELF']; ?>" method="post">
                <input id="txtName" placeholder="Name" name="txtName" type="text" maxlength="50" style="width: 100%;" value="<?=$name?>" required>

                <input id="txtEmail" placeholder="Email" name="txtEmail" type="email" maxlength="50" style="width: 100%;" value="<?=$email?>" required>

                <input type="text" id="txtSubject" placeholder="Subject" name="txtSubject" maxlength="50" style="width: 100%;" value="<?=$subj?>" required>

                <textarea id="txtMessage" name="txtMessage" placeholder="Your Message" style="width: 100%; height: 150px;"><?=$mesg?></textarea>

                <input type="submit" id="btnSubmit" name="btnSubmit" value="Send Email Message" class="button">
                </form>
            <?php
            }
            ?>

          </div>
        </div>

        <div class="grid-x signoff">
          <div class="small-12 cell">
            <img src="img/method1947fullogo-dark.svg" alt="Method1947 logo">
             © 2018
          </div>
        </div>

      </div>
    </div>

<?php include "includes/footer.php"; ?>
