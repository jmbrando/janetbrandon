<?php

  $message_sent = false;
  if(isset($_POST['email']) && $_POST['email'] != ''){

    if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){

      // submit the form
      $userName = $_POST['name'];
      $userEmail = $_POST['email'];
      $messageSubject = $_POST['subject'];
      $message = $_POST['message'];

      $to = "janetmbrandon@gmail.com";
      $body = "";

      $body .= "From: ".$userName. "\r\n";
      $body .= "Email: ".$userEmail. "\r\n";
      $body .= "Message: ".$message. "\r\n";

      mail($to,$messageSubject,$body);

      $message_sent = true;
    }
    else{
      $invalid_class_name = "form-invalid";
    }

  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-V41J4HDCYH"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-V41J4HDCYH');
    </script>

    <meta charset="UTF-8">
    <title>Janet Brandon | UX/UI Designer, Website Designer, Graphic Designer Freelance Artist | Contact Page</title>
    <meta name="description" content="Contact page of Janet Brandon: UX/UI Designer, Website Designer, Graphic Designer Freelance Artist">
    <meta name="keywords" content="edmonton graphic designer, ux/ui designer, web designer, website, freelance, artist, design, illustrator, visual communications">
    <meta name="author" content="Janet Brandon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:title" content="Janet Brandon | UX/UI Designer, Website Designer, Graphic Designer, Freelance Artist | Contact Page">
    <meta property="og:description" content="Portfolio webpages of Janet Brandon: UX/UI Designer, Website Designer, Graphic Designer Freelance Artist">
    <meta property="og:image" content="img/portfolio-cover.jpg">
    <meta property="og:url" content="https://janetbrandon.com/contact.php">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dorsa&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=News+Cycle&display=swap" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">

    <link rel="stylesheet" href="css/template.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
    <div class="grid-container">
      <header>
        <div class="container">
          <a href="index.html" class="flag" aria-label="site logo flag background">
            <svg viewBox="0 0 68 86">
              <polygon class="cls-1" points="0 0 0 73.19 33.75 86 68 73.19 68 0 0 0"/>
            </svg>
          </a>
          <a href="index.html" class="logo" aria-label="logo">
            <svg viewBox="0 0 91.99 98.53">
              <path d="M92,17.67c-.24-.49-8,1.55-11.27,2.55-9.53,3-18.66,5.82-26.84,9.4,1.6-7.23,3.19-15,4.85-23.71V5.8a5,5,0,0,0-9.87-1.6C46.94,16,45.19,25.65,43.36,34.52,32.42,40.06,24.05,45.42,17,51.37A64.33,64.33,0,0,0,5.93,63.31a38.7,38.7,0,0,0-4.09,7.41A22.93,22.93,0,0,0,0,79.59a22.43,22.43,0,0,0,2.22,8.88,18.77,18.77,0,0,0,5.94,7.34,14.74,14.74,0,0,0,8.58,2.72c.36,0,.73,0,1.09,0a19.33,19.33,0,0,0,4.69-.91,26.2,26.2,0,0,0,4.27-1.79,21.17,21.17,0,0,0,6.78-6.57A53.9,53.9,0,0,0,37.78,82,125.26,125.26,0,0,0,43.8,67c3-8.75,5.59-18.13,8.49-30.41l.27-1.21,0-.2c8.9-4.37,18-8.46,28.42-12.63C84.94,21,92.23,18.18,92,17.67ZM42,40.8c-2,9.1-4,16.68-6.14,23.65a120.19,120.19,0,0,1-5.26,14.1,45.54,45.54,0,0,1-3.42,6.3C25.76,87,24.27,89.21,23,90a10.41,10.41,0,0,1-5.74,1.26A9.22,9.22,0,0,1,12.2,90a12.34,12.34,0,0,1-5.57-9.46,22.45,22.45,0,0,1,1.19-7.49,32.72,32.72,0,0,1,3.23-6.29,58,58,0,0,1,9.77-11.08A118.85,118.85,0,0,1,42,40.8Z"/>
            </svg>
          </a>
          <a class="menu-btn">
            <svg viewBox="0 0 39 25">
              <path d="M1.5,3h36a1.5,1.5,0,0,0,0-3H1.5a1.5,1.5,0,0,0,0,3Z"/>
              <path d="M37.5,22H1.5a1.5,1.5,0,0,0,0,3h36a1.5,1.5,0,0,0,0-3Z"/>
              <path d="M37.5,11H1.5a1.5,1.5,0,0,0,0,3h36a1.5,1.5,0,0,0,0-3Z"/>
            </svg>
          </a>
          <nav>
            <a class="exit-btn">
              <svg viewBox="0 0 90.06 85.13">
                <path d="M89.73,4.9A7,7,0,0,0,80.93.33h0a44.69,44.69,0,0,0-5.16,2.05c-1.57.7-3,1.49-4.52,2.24L66.93,7.09c-1.41.83-2.74,1.76-4.1,2.63l-2,1.33-1.94,1.43L55,15.35q-3.73,3-7.37,6.11-3.42,3-6.62,6.15c-.76-.91-1.52-1.82-2.29-2.72C33,18.31,27.15,12,21,6S13.6,1.33,19,8,29.57,21.48,34.42,28.55C35.2,29.67,36,30.82,36.71,32A221.28,221.28,0,0,0,22,49.18C14.27,59,7.7,69.56,1.35,80.17c-3,5.4-.52,6.92,2.95,1.88C11.55,72.19,19,62.47,27.37,53.72c4.58-4.89,9.35-9.6,14.33-14Q44.93,45,47.93,50.35A233.22,233.22,0,0,1,59.09,73.29l.08.19a4.87,4.87,0,0,0,.28.56A5.36,5.36,0,0,0,67,76a6,6,0,0,0,1.9-8A240.23,240.23,0,0,0,54.8,45.54q-3.75-5.32-7.73-10.44,3.48-2.84,7.1-5.46c2.44-1.7,4.9-3.36,7.35-5l3.79-2.26,1.89-1.14,1.93-1c1.29-.66,2.56-1.39,3.87-2l3.91-1.78c1.31-.49,2.63-1.07,3.92-1.5a31.87,31.87,0,0,1,3.52-1.05,8.15,8.15,0,0,0,.82-.2A7,7,0,0,0,89.73,4.9Z"/>
              </svg>
            </a>
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="graphic.html">Graphic Design</a></li>
              <li><a href="web.html">UX/UI Design</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
            <a href="index.html" class="menu-logo">
              <h1>Janet Brandon</h1>
              <p>Graphic Design</p>
              <p>UX/UI Design</p>
            </a>
          </nav>
        </div>
      </header>

      <section class="banner banner-contact">
        <h2 class="hidden">Contact Page</h2>
        <div class="banner-cover-box"></div>
      </section>

      <section class="contact">
        <div class="text-container">
          <h2>Contact</h2>
          <p>Looking for a designer? As an Edmonton graphic designer, it is my passion to assist the community and enhance the businesses that make this city unique. Please contact me to inquire about your project and I will be happy to provide more information.</p>
          <div class="closing-svg">
            <svg viewBox="0 0 38 15">
              <path d="M29.0947 15C26.716 15 24.4787 14.2201 22.7971 12.8031L19.0006 9.60736L15.2052 12.8031C13.5225 14.2201 11.2864 15 8.90772 15C6.52908 15 4.29176 14.2201 2.60902 12.8031C0.926279 11.3862 0 9.50337 0 7.5005C0 5.49763 0.926279 3.61376 2.60902 2.19685C4.29176 0.779948 6.52789 0 8.90772 0C11.2875 0 13.5237 0.779948 15.2052 2.19685L19.0006 5.39264L22.796 2.19685C24.4787 0.779948 26.7148 0 29.0935 0C31.4721 0 33.7094 0.779948 35.391 2.19685C37.0737 3.61376 38 5.49663 38 7.5005C38 9.50437 37.0737 11.3872 35.391 12.8031C33.7094 14.2201 31.4721 15 29.0935 15H29.0947ZM25.2993 10.6973C26.3134 11.5502 27.6613 12.0212 29.0947 12.0202C30.528 12.0192 31.8759 11.5502 32.89 10.6963C33.9042 9.84234 34.4623 8.70742 34.4623 7.5005C34.4623 6.29358 33.9042 5.15866 32.89 4.30471C31.8759 3.45077 30.528 2.9808 29.0947 2.9808C27.6613 2.9808 26.3134 3.45077 25.2993 4.30471L21.5039 7.5005L25.2993 10.6973ZM8.90653 2.9808C7.47317 2.9808 6.12532 3.45077 5.11116 4.30471C4.097 5.15866 3.53886 6.29358 3.53886 7.5005C3.53886 8.70742 4.097 9.84234 5.11116 10.6963C6.12532 11.5502 7.47317 12.0202 8.90653 12.0202C10.3399 12.0202 11.6877 11.5502 12.7019 10.6963L16.4973 7.5005L12.7019 4.30471C11.6877 3.45077 10.3399 2.9808 8.90653 2.9808Z"/>
            </svg>
          </div>
        </div>
      </section>

      <section class="contact-links">
        <div class="text-container">
          <h2 class="hidden">Contact Links</h2>
          <div class="social-links">
            <a href="mailto:info@janetbrandon.com" class="mail">
              <svg viewBox="0 0 32 32">
                <path d="M29 4h-26c-1.65 0-3 1.35-3 3v20c0 1.65 1.35 3 3 3h26c1.65 0 3-1.35 3-3v-20c0-1.65-1.35-3-3-3zM12.461 17.199l-8.461 6.59v-15.676l8.461 9.086zM5.512 8h20.976l-10.488 7.875-10.488-7.875zM12.79 17.553l3.21 3.447 3.21-3.447 6.58 8.447h-19.579l6.58-8.447zM19.539 17.199l8.461-9.086v15.676l-8.461-6.59z"></path>
              </svg>
              <h3>Email</h3>
              <p>info@janetbrandon.com</p>
            </a>
            <div class="social-media">
              <a href="https://www.facebook.com/visualsbyjanet" rel="noreferrer noopener" target="_blank" class="facebook" aria-label="facebook link">
                <svg viewBox="0 0 32 32">
                  <path d="M19 6h5v-6h-5c-3.86 0-7 3.14-7 7v3h-4v6h4v16h6v-16h5l1-6h-6v-3c0-0.542 0.458-1 1-1z"></path>
                </svg>
              </a>
              <a href="https://www.instagram.com/visualsbyjanet" rel="noreferrer noopener" target="_blank" class="instagram" aria-label="instagram link">
                <svg viewBox="0 0 32 32">
                  <path d="M16 2.881c4.275 0 4.781 0.019 6.462 0.094 1.563 0.069 2.406 0.331 2.969 0.55 0.744 0.288 1.281 0.638 1.837 1.194 0.563 0.563 0.906 1.094 1.2 1.838 0.219 0.563 0.481 1.412 0.55 2.969 0.075 1.688 0.094 2.194 0.094 6.463s-0.019 4.781-0.094 6.463c-0.069 1.563-0.331 2.406-0.55 2.969-0.288 0.744-0.637 1.281-1.194 1.837-0.563 0.563-1.094 0.906-1.837 1.2-0.563 0.219-1.413 0.481-2.969 0.55-1.688 0.075-2.194 0.094-6.463 0.094s-4.781-0.019-6.463-0.094c-1.563-0.069-2.406-0.331-2.969-0.55-0.744-0.288-1.281-0.637-1.838-1.194-0.563-0.563-0.906-1.094-1.2-1.837-0.219-0.563-0.481-1.413-0.55-2.969-0.075-1.688-0.094-2.194-0.094-6.463s0.019-4.781 0.094-6.463c0.069-1.563 0.331-2.406 0.55-2.969 0.288-0.744 0.638-1.281 1.194-1.838 0.563-0.563 1.094-0.906 1.838-1.2 0.563-0.219 1.412-0.481 2.969-0.55 1.681-0.075 2.188-0.094 6.463-0.094zM16 0c-4.344 0-4.887 0.019-6.594 0.094-1.7 0.075-2.869 0.35-3.881 0.744-1.056 0.412-1.95 0.956-2.837 1.85-0.894 0.888-1.438 1.781-1.85 2.831-0.394 1.019-0.669 2.181-0.744 3.881-0.075 1.713-0.094 2.256-0.094 6.6s0.019 4.887 0.094 6.594c0.075 1.7 0.35 2.869 0.744 3.881 0.413 1.056 0.956 1.95 1.85 2.837 0.887 0.887 1.781 1.438 2.831 1.844 1.019 0.394 2.181 0.669 3.881 0.744 1.706 0.075 2.25 0.094 6.594 0.094s4.888-0.019 6.594-0.094c1.7-0.075 2.869-0.35 3.881-0.744 1.050-0.406 1.944-0.956 2.831-1.844s1.438-1.781 1.844-2.831c0.394-1.019 0.669-2.181 0.744-3.881 0.075-1.706 0.094-2.25 0.094-6.594s-0.019-4.887-0.094-6.594c-0.075-1.7-0.35-2.869-0.744-3.881-0.394-1.063-0.938-1.956-1.831-2.844-0.887-0.887-1.781-1.438-2.831-1.844-1.019-0.394-2.181-0.669-3.881-0.744-1.712-0.081-2.256-0.1-6.6-0.1v0z"></path>
                  <path d="M16 7.781c-4.537 0-8.219 3.681-8.219 8.219s3.681 8.219 8.219 8.219 8.219-3.681 8.219-8.219c0-4.537-3.681-8.219-8.219-8.219zM16 21.331c-2.944 0-5.331-2.387-5.331-5.331s2.387-5.331 5.331-5.331c2.944 0 5.331 2.387 5.331 5.331s-2.387 5.331-5.331 5.331z"></path>
                  <path d="M26.462 7.456c0 1.060-0.859 1.919-1.919 1.919s-1.919-0.859-1.919-1.919c0-1.060 0.859-1.919 1.919-1.919s1.919 0.859 1.919 1.919z"></path>
                </svg>
              </a>
              <a href="https://www.linkedin.com/in/janet-brandon/" rel="noreferrer noopener" target="_blank" class="linkedin" aria-label="linked-in link">
                <svg viewBox="0 0 32 32">
                  <path d="M12 12h5.535v2.837h0.079c0.77-1.381 2.655-2.837 5.464-2.837 5.842 0 6.922 3.637 6.922 8.367v9.633h-5.769v-8.54c0-2.037-0.042-4.657-3.001-4.657-3.005 0-3.463 2.218-3.463 4.509v8.688h-5.767v-18z"></path>
                  <path d="M2 12h6v18h-6v-18z"></path>
                  <path d="M8 7c0 1.657-1.343 3-3 3s-3-1.343-3-3c0-1.657 1.343-3 3-3s3 1.343 3 3z"></path>
                </svg>
              </a>
              <a href="https://www.behance.net/janetbrandon" rel="noreferrer noopener" target="_blank" class="behance" aria-label="behance link">
                <svg viewBox="0 0 32 32">
                  <path d="M9.281 6.412c0.944 0 1.794 0.081 2.569 0.25 0.775 0.162 1.431 0.438 1.988 0.813 0.55 0.375 0.975 0.875 1.287 1.5 0.3 0.619 0.45 1.394 0.45 2.313 0 0.994-0.225 1.819-0.675 2.481-0.456 0.662-1.119 1.2-2.006 1.625 1.213 0.35 2.106 0.962 2.706 1.831 0.6 0.875 0.887 1.925 0.887 3.163 0 1-0.194 1.856-0.575 2.581-0.387 0.731-0.912 1.325-1.556 1.781-0.65 0.462-1.4 0.8-2.237 1.019-0.831 0.219-1.688 0.331-2.575 0.331h-9.544v-19.688h9.281zM8.719 14.363c0.769 0 1.406-0.181 1.906-0.55 0.5-0.363 0.738-0.963 0.738-1.787 0-0.456-0.081-0.838-0.244-1.131-0.169-0.294-0.387-0.525-0.669-0.688-0.275-0.169-0.588-0.281-0.956-0.344-0.356-0.069-0.731-0.1-1.113-0.1h-4.050v4.6h4.388zM8.956 22.744c0.425 0 0.831-0.038 1.213-0.125 0.387-0.087 0.731-0.219 1.019-0.419 0.287-0.194 0.531-0.45 0.706-0.788 0.175-0.331 0.256-0.756 0.256-1.275 0-1.012-0.287-1.738-0.856-2.175-0.569-0.431-1.325-0.644-2.262-0.644h-4.7v5.419h4.625z"></path>
                  <path d="M22.663 22.675c0.587 0.575 1.431 0.863 2.531 0.863 0.788 0 1.475-0.2 2.044-0.6s0.913-0.825 1.044-1.262h3.45c-0.556 1.719-1.394 2.938-2.544 3.675-1.131 0.738-2.519 1.113-4.125 1.113-1.125 0-2.131-0.181-3.038-0.538-0.906-0.363-1.663-0.869-2.3-1.531-0.619-0.663-1.106-1.45-1.45-2.375-0.337-0.919-0.512-1.938-0.512-3.038 0-1.069 0.175-2.063 0.525-2.981 0.356-0.925 0.844-1.719 1.494-2.387s1.413-1.2 2.313-1.588c0.894-0.387 1.881-0.581 2.975-0.581 1.206 0 2.262 0.231 3.169 0.706 0.9 0.469 1.644 1.1 2.225 1.887s0.994 1.694 1.25 2.706c0.256 1.012 0.344 2.069 0.275 3.175h-10.294c0 1.119 0.375 2.188 0.969 2.756zM27.156 15.188c-0.462-0.512-1.256-0.794-2.212-0.794-0.625 0-1.144 0.106-1.556 0.319-0.406 0.213-0.738 0.475-0.994 0.787-0.25 0.313-0.425 0.65-0.525 1.006-0.1 0.344-0.163 0.663-0.181 0.938h6.375c-0.094-1-0.438-1.738-0.906-2.256z"></path>
                  <path d="M20.887 8h7.981v1.944h-7.981v-1.944z"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </section>

      <?php
      if($message_sent):
      ?>

      <section class="thank-you">
        <div class="text-container">
          <h4>Thank you for your message, we'll be in touch.</h4>
        </div>
      </section>

      <?php
      else:
      ?>
      <section class="message">
        <div class="text-container">
          <h2>Message</h2>
          <p>Interested in finding out more? Send me a brief message and I will be happy to respond!</p>
          <form action="contact.php" method="POST" class="form">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="<?= $invalid_class_name ?? "" ?>">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject">
            <label for="message">Message</label>
            <textarea name="message" id="message"></textarea>
            <button type="submit" name="submit" class="button">Submit</button>
            <!-- <a href="#" type="submit">Submit</a> -->
          </form>
          <div class="closing-svg">
            <svg viewBox="0 0 38 15">
              <path d="M29.0947 15C26.716 15 24.4787 14.2201 22.7971 12.8031L19.0006 9.60736L15.2052 12.8031C13.5225 14.2201 11.2864 15 8.90772 15C6.52908 15 4.29176 14.2201 2.60902 12.8031C0.926279 11.3862 0 9.50337 0 7.5005C0 5.49763 0.926279 3.61376 2.60902 2.19685C4.29176 0.779948 6.52789 0 8.90772 0C11.2875 0 13.5237 0.779948 15.2052 2.19685L19.0006 5.39264L22.796 2.19685C24.4787 0.779948 26.7148 0 29.0935 0C31.4721 0 33.7094 0.779948 35.391 2.19685C37.0737 3.61376 38 5.49663 38 7.5005C38 9.50437 37.0737 11.3872 35.391 12.8031C33.7094 14.2201 31.4721 15 29.0935 15H29.0947ZM25.2993 10.6973C26.3134 11.5502 27.6613 12.0212 29.0947 12.0202C30.528 12.0192 31.8759 11.5502 32.89 10.6963C33.9042 9.84234 34.4623 8.70742 34.4623 7.5005C34.4623 6.29358 33.9042 5.15866 32.89 4.30471C31.8759 3.45077 30.528 2.9808 29.0947 2.9808C27.6613 2.9808 26.3134 3.45077 25.2993 4.30471L21.5039 7.5005L25.2993 10.6973ZM8.90653 2.9808C7.47317 2.9808 6.12532 3.45077 5.11116 4.30471C4.097 5.15866 3.53886 6.29358 3.53886 7.5005C3.53886 8.70742 4.097 9.84234 5.11116 10.6963C6.12532 11.5502 7.47317 12.0202 8.90653 12.0202C10.3399 12.0202 11.6877 11.5502 12.7019 10.6963L16.4973 7.5005L12.7019 4.30471C11.6877 3.45077 10.3399 2.9808 8.90653 2.9808Z"/>
            </svg>
          </div>
        </div>
      </section>

      <?php
      endif;
      ?>

      <footer>
        <div class="container">
          <div class="footer-logo">
            <svg viewBox="0 0 91.99 98.53">
              <path d="M92,17.67c-.24-.49-8,1.55-11.27,2.55-9.53,3-18.66,5.82-26.84,9.4,1.6-7.23,3.19-15,4.85-23.71V5.8a5,5,0,0,0-9.87-1.6C46.94,16,45.19,25.65,43.36,34.52,32.42,40.06,24.05,45.42,17,51.37A64.33,64.33,0,0,0,5.93,63.31a38.7,38.7,0,0,0-4.09,7.41A22.93,22.93,0,0,0,0,79.59a22.43,22.43,0,0,0,2.22,8.88,18.77,18.77,0,0,0,5.94,7.34,14.74,14.74,0,0,0,8.58,2.72c.36,0,.73,0,1.09,0a19.33,19.33,0,0,0,4.69-.91,26.2,26.2,0,0,0,4.27-1.79,21.17,21.17,0,0,0,6.78-6.57A53.9,53.9,0,0,0,37.78,82,125.26,125.26,0,0,0,43.8,67c3-8.75,5.59-18.13,8.49-30.41l.27-1.21,0-.2c8.9-4.37,18-8.46,28.42-12.63C84.94,21,92.23,18.18,92,17.67ZM42,40.8c-2,9.1-4,16.68-6.14,23.65a120.19,120.19,0,0,1-5.26,14.1,45.54,45.54,0,0,1-3.42,6.3C25.76,87,24.27,89.21,23,90a10.41,10.41,0,0,1-5.74,1.26A9.22,9.22,0,0,1,12.2,90a12.34,12.34,0,0,1-5.57-9.46,22.45,22.45,0,0,1,1.19-7.49,32.72,32.72,0,0,1,3.23-6.29,58,58,0,0,1,9.77-11.08A118.85,118.85,0,0,1,42,40.8Z"/>
            </svg>
            <h2>Janet Brandon</h2>
          </div>
          <ul class="footer-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="graphic.html">Graphic Design</a></li>
            <li><a href="web.html">UX/UI Design</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
          <div class="bottom-bar">
            <div class="social">
              <a href="https://www.facebook.com/visualsbyjanet" rel="noreferrer noopener" target="_blank" class="facebook" aria-label="facebook link">
                <svg viewBox="0 0 32 32">
                  <path d="M19 6h5v-6h-5c-3.86 0-7 3.14-7 7v3h-4v6h4v16h6v-16h5l1-6h-6v-3c0-0.542 0.458-1 1-1z"></path>
                </svg>
              </a>
              <a href="https://www.instagram.com/visualsbyjanet" rel="noreferrer noopener" target="_blank" class="instagram" aria-label="instagram link">
                <svg viewBox="0 0 32 32">
                  <path d="M16 2.881c4.275 0 4.781 0.019 6.462 0.094 1.563 0.069 2.406 0.331 2.969 0.55 0.744 0.288 1.281 0.638 1.837 1.194 0.563 0.563 0.906 1.094 1.2 1.838 0.219 0.563 0.481 1.412 0.55 2.969 0.075 1.688 0.094 2.194 0.094 6.463s-0.019 4.781-0.094 6.463c-0.069 1.563-0.331 2.406-0.55 2.969-0.288 0.744-0.637 1.281-1.194 1.837-0.563 0.563-1.094 0.906-1.837 1.2-0.563 0.219-1.413 0.481-2.969 0.55-1.688 0.075-2.194 0.094-6.463 0.094s-4.781-0.019-6.463-0.094c-1.563-0.069-2.406-0.331-2.969-0.55-0.744-0.288-1.281-0.637-1.838-1.194-0.563-0.563-0.906-1.094-1.2-1.837-0.219-0.563-0.481-1.413-0.55-2.969-0.075-1.688-0.094-2.194-0.094-6.463s0.019-4.781 0.094-6.463c0.069-1.563 0.331-2.406 0.55-2.969 0.288-0.744 0.638-1.281 1.194-1.838 0.563-0.563 1.094-0.906 1.838-1.2 0.563-0.219 1.412-0.481 2.969-0.55 1.681-0.075 2.188-0.094 6.463-0.094zM16 0c-4.344 0-4.887 0.019-6.594 0.094-1.7 0.075-2.869 0.35-3.881 0.744-1.056 0.412-1.95 0.956-2.837 1.85-0.894 0.888-1.438 1.781-1.85 2.831-0.394 1.019-0.669 2.181-0.744 3.881-0.075 1.713-0.094 2.256-0.094 6.6s0.019 4.887 0.094 6.594c0.075 1.7 0.35 2.869 0.744 3.881 0.413 1.056 0.956 1.95 1.85 2.837 0.887 0.887 1.781 1.438 2.831 1.844 1.019 0.394 2.181 0.669 3.881 0.744 1.706 0.075 2.25 0.094 6.594 0.094s4.888-0.019 6.594-0.094c1.7-0.075 2.869-0.35 3.881-0.744 1.050-0.406 1.944-0.956 2.831-1.844s1.438-1.781 1.844-2.831c0.394-1.019 0.669-2.181 0.744-3.881 0.075-1.706 0.094-2.25 0.094-6.594s-0.019-4.887-0.094-6.594c-0.075-1.7-0.35-2.869-0.744-3.881-0.394-1.063-0.938-1.956-1.831-2.844-0.887-0.887-1.781-1.438-2.831-1.844-1.019-0.394-2.181-0.669-3.881-0.744-1.712-0.081-2.256-0.1-6.6-0.1v0z"></path>
                  <path d="M16 7.781c-4.537 0-8.219 3.681-8.219 8.219s3.681 8.219 8.219 8.219 8.219-3.681 8.219-8.219c0-4.537-3.681-8.219-8.219-8.219zM16 21.331c-2.944 0-5.331-2.387-5.331-5.331s2.387-5.331 5.331-5.331c2.944 0 5.331 2.387 5.331 5.331s-2.387 5.331-5.331 5.331z"></path>
                  <path d="M26.462 7.456c0 1.060-0.859 1.919-1.919 1.919s-1.919-0.859-1.919-1.919c0-1.060 0.859-1.919 1.919-1.919s1.919 0.859 1.919 1.919z"></path>
                </svg>
              </a>
              <a href="https://www.linkedin.com/in/janet-brandon/" rel="noreferrer noopener" target="_blank" class="linkedin" aria-label="linked-in link">
                <svg viewBox="0 0 32 32">
                  <path d="M12 12h5.535v2.837h0.079c0.77-1.381 2.655-2.837 5.464-2.837 5.842 0 6.922 3.637 6.922 8.367v9.633h-5.769v-8.54c0-2.037-0.042-4.657-3.001-4.657-3.005 0-3.463 2.218-3.463 4.509v8.688h-5.767v-18z"></path>
                  <path d="M2 12h6v18h-6v-18z"></path>
                  <path d="M8 7c0 1.657-1.343 3-3 3s-3-1.343-3-3c0-1.657 1.343-3 3-3s3 1.343 3 3z"></path>
                </svg>
              </a>
              <a href="https://www.behance.net/janetbrandon" rel="noreferrer noopener" target="_blank" class="behance" aria-label="behance link">
                <svg viewBox="0 0 32 32">
                  <path d="M9.281 6.412c0.944 0 1.794 0.081 2.569 0.25 0.775 0.162 1.431 0.438 1.988 0.813 0.55 0.375 0.975 0.875 1.287 1.5 0.3 0.619 0.45 1.394 0.45 2.313 0 0.994-0.225 1.819-0.675 2.481-0.456 0.662-1.119 1.2-2.006 1.625 1.213 0.35 2.106 0.962 2.706 1.831 0.6 0.875 0.887 1.925 0.887 3.163 0 1-0.194 1.856-0.575 2.581-0.387 0.731-0.912 1.325-1.556 1.781-0.65 0.462-1.4 0.8-2.237 1.019-0.831 0.219-1.688 0.331-2.575 0.331h-9.544v-19.688h9.281zM8.719 14.363c0.769 0 1.406-0.181 1.906-0.55 0.5-0.363 0.738-0.963 0.738-1.787 0-0.456-0.081-0.838-0.244-1.131-0.169-0.294-0.387-0.525-0.669-0.688-0.275-0.169-0.588-0.281-0.956-0.344-0.356-0.069-0.731-0.1-1.113-0.1h-4.050v4.6h4.388zM8.956 22.744c0.425 0 0.831-0.038 1.213-0.125 0.387-0.087 0.731-0.219 1.019-0.419 0.287-0.194 0.531-0.45 0.706-0.788 0.175-0.331 0.256-0.756 0.256-1.275 0-1.012-0.287-1.738-0.856-2.175-0.569-0.431-1.325-0.644-2.262-0.644h-4.7v5.419h4.625z"></path>
                  <path d="M22.663 22.675c0.587 0.575 1.431 0.863 2.531 0.863 0.788 0 1.475-0.2 2.044-0.6s0.913-0.825 1.044-1.262h3.45c-0.556 1.719-1.394 2.938-2.544 3.675-1.131 0.738-2.519 1.113-4.125 1.113-1.125 0-2.131-0.181-3.038-0.538-0.906-0.363-1.663-0.869-2.3-1.531-0.619-0.663-1.106-1.45-1.45-2.375-0.337-0.919-0.512-1.938-0.512-3.038 0-1.069 0.175-2.063 0.525-2.981 0.356-0.925 0.844-1.719 1.494-2.387s1.413-1.2 2.313-1.588c0.894-0.387 1.881-0.581 2.975-0.581 1.206 0 2.262 0.231 3.169 0.706 0.9 0.469 1.644 1.1 2.225 1.887s0.994 1.694 1.25 2.706c0.256 1.012 0.344 2.069 0.275 3.175h-10.294c0 1.119 0.375 2.188 0.969 2.756zM27.156 15.188c-0.462-0.512-1.256-0.794-2.212-0.794-0.625 0-1.144 0.106-1.556 0.319-0.406 0.213-0.738 0.475-0.994 0.787-0.25 0.313-0.425 0.65-0.525 1.006-0.1 0.344-0.163 0.663-0.181 0.938h6.375c-0.094-1-0.438-1.738-0.906-2.256z"></path>
                  <path d="M20.887 8h7.981v1.944h-7.981v-1.944z"></path>
                </svg>
              </a>
              <a href="mailto:info@janetbrandon.com" class="mail" aria-label="email link">
                <svg viewBox="0 0 32 32">
                  <path d="M29 4h-26c-1.65 0-3 1.35-3 3v20c0 1.65 1.35 3 3 3h26c1.65 0 3-1.35 3-3v-20c0-1.65-1.35-3-3-3zM12.461 17.199l-8.461 6.59v-15.676l8.461 9.086zM5.512 8h20.976l-10.488 7.875-10.488-7.875zM12.79 17.553l3.21 3.447 3.21-3.447 6.58 8.447h-19.579l6.58-8.447zM19.539 17.199l8.461-9.086v15.676l-8.461-6.59z"></path>
                </svg>
              </a>
            </div>
            <div class="copyright">
              <p>&copy; Copyright 2021 Janet Brandon</p>
              <p>Graphic Designer</p>
              <p>UX/UI Designer</p>
            </div>
          </div>
        </div>
      </footer>

    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/modernizr-custom.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>
