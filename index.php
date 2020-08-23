<?php
  include_once('db.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!--Swiper CDN-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!--AOS CDN-->
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!--Custom CSS-->
    <link rel="stylesheet" href="./css/main.css">
    <title>AgedPrompt | Coming soon</title>
</head>
<body>
    <!--Navbar-->
   <nav class="navbar">
       <a href="#" class="navbar__link">
           <img class="navbar__img" src="./img/logo.png" alt="logo">
        </a>
   </nav>

   <section>
       <div class="container">
        <div class="container__img">
           <img src="./img/user.png" alt="user" data-duration="1500" data-aos="zoom-in" >
        </div>
        <div class="content" data-duration="1500"  data-aos="slide-up" >
           <h1 class="content__heading1">Lonely shouldn’t come with Age </h1>
           <p>AgedPrompt is an app that tackles lonliness in old people by calling 
               and chatting with them regulary as well as reminding them to take their medications. 
           </p>
           <p class="content__para2"> Available for download soon on all major mobile platforms</p>
           <div class="main">
            <h2>Sign up to join the waitlist</h2>

            <?php
                if(isset($success)) {
                    echo '<div  class="alert alert-info alert-dismissible text-success col-md-12" role="alert" style="font-size: 2rem;"> 
                    <button type="button" class="close" data-dismiss="alert"> <span aria-hidden="true">&times;</span>
                    </button>' . $success . '</div>';
                } elseif (isset($error)) {
                    echo '<div class="alert alert-danger alert-dismissible" role="alert" style="font-size: 2rem;">
                            <button type="button" class="close" data-dismiss="alert"> <span aria-hidden="true">&times;</span>
                            </button>' . $error . '</div>';
                }
         ?>

          <div class="form__wrapper">
            <form action="" method="POST">
                <input 
                 type="email"
                 id="email" 
                 name="email" 
                 placeholder="Email">
                <input 
                type="submit"
                name="submit"
                value="Notify Me" >
 
            </form>
         </div>

        

        </div>
        </div>

        <div class="img__wrapper">
            <img src="./img/couple.png" alt="">
        </div>
    </div>

       <div class="card__container">
           <div class="card" data-aos="zoom-in" data-duration="1500">
               <img class="card__img" src="./img/app-icon.png" alt="download">
               <p class="card__para">Download App from either Google PlayStore or iOS App Store</p>
           </div>

           <div class="card" data-aos-delay="30" data-aos="zoom-out" data-duration="1500" style="color:white; background-color: #399BB6;">
            <img class="card__img" src="./img/support-icon.png" alt="support">
            <p class="card__para">Sign up as an elder or get a family member to sign up</p>
        </div>

        <div class="card" data-aos="zoom-in" data-duration="1500">
            <img class="card__img" src="./img/reminder-icon.png" alt="reminder">
            <p class="card__para">Get frequent messages and reminders from Patrick & Agatha </p>
        </div>

       </div>
   </section>
    

   <section>
       <div class="wrapper">
          
        <div class="cover">
           <div class="wrapper__img">
               <img src="./img/old-couple.png" alt="old man" data-aos="fade-down-right" data-aos-delay="10" data-duration="1500" >
           </div>
           <div class="wrapper__body">
               <h2>Register for self or register for the elderly.</h2>
               <p>Registration on the AgedPrompt comes in two ways, registering for the an elderly one or registering for self. This enables effective set up espiecially for those that arent technologically oriented.s</p>
               <button class="button button-active">Get Started</button>
            </div>

        </div>
      
        <div class="second-cover">
           <div class="wrapper__img" >
               <img src="./img/old-people.png" alt="old man" data-aos="fade-down-left" data-aos-delay="10" data-duration="1500">
           </div>
           <div class="wrapper__body">
            <h2>Track medications and exercise routines with Agatha.</h2>
            <p>Our AI consultant Agatha tracks, monitor and reminds the elder of the certain medications and exercise routines to aid in improving physical health.</p>
            <button class="button-link button-active">Get Started</button>
        </div>
    </div>

        <div class="cover">
            <div class="wrapper__img">
                <img src="./img/old-man1.png" alt="old man"data-aos="fade-down-right" data-aos-delay="10" data-duration="1500" >
            </div>
            <div class="wrapper__body">
                <h2>Contact registered loved ones with 1 click.</h2>
                <p>Users can have multiple emergency contacts which can be easily accessed and contacted in a click either by voice call or SMS. Contacts can be notified if medications and exercise routines are not being done regularlyUsers can have multiple emergency contacts which can be easily accessed and contacted in a click either by voice call or SMS. Contacts can be notified if medications and exercise routines are not being done regularly</p>
                <button class="button button-active">Get Started</button>
            </div>

      </div>
     
      <div class="second-cover">
        <div class="wrapper__img">
            <img src="./img/old-woman.png" alt="old man"data-aos="fade-down-left" data-aos-delay="10" data-duration="1500" >
        </div>
        <div class="wrapper__body" >
            <h2>Maintain mental health with  Patrick.</h2>
            <p>Patrick constantly maintains conversations and through voice and text to help alleviate loneliness enabling mental stability in users.</p>
            <button class="button-link button-active">Get Started</button>
        </div>
    </div>
  </div>
   </section>
   

  
<div class="hero">
    <h2 data-duration="1500" data-aos="zoom-in"><span>AgedPrompt</span>  Sneak Peak</h2>
    <p>AgedPrompt comes with various features and functionalities, here are a few screens to
         keep you on your toes while you wait for launch.
    </p>

<!-- Swiper -->
 <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
          <img src="./img/slide-1.png" alt="">
      </div>
      <div class="swiper-slide">
        <img src="./img/slide-2.png" alt="">
      </div>
      <div class="swiper-slide">
        <img src="./img/slide-3.png" alt="">
      </div>
      
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div> 

</div>


<div class="footer">
    <h2><span>AgedPrompt</span> will be coming to devices soon</h2>
    <div class="form__wrapper">
        <p>Sign up to join the waitlist</p>
        <?php
                if(isset($success)) {
                    echo '<div  class="alert alert-info alert-dismissible text-success col-md-12" role="alert" style="font-size: 2rem;"> 
                    <button type="button" class="close" data-dismiss="alert"> <span aria-hidden="true">&times;</span>
                    </button>' . $success . '</div>';
                } elseif (isset($error)) {
                    echo '<div class="alert alert-danger alert-dismissible col-md-12" role="alert" style="font-size: 2rem;">
                            <button type="button" class="close" data-dismiss="alert"> <span aria-hidden="true">&times;</span>
                            </button>' . $error . '</div>';
                }
         ?>
        <form action="" method="POST">
        <input 
        type="email" 
        id="email"
        name="email" 
        placeholder="Email">

        <input 
        type="submit"
        name="submit" 
        value="Notify Me">
     </form>
    </div>
    <div class="footer__img">
        <img src="./img/img.png" alt="">
    </div>

</div>

   <!--Custom Javascript-->
    <!--Swiper Javascript-->
    <!--AOS Javascript-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./js/script.js"></script>
    <script>
      AOS.init({
          offset: 400,
      });
    </script>
</body>
</html>