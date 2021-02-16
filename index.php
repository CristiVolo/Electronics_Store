<?php 
  include_once 'header.php';
?>

  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Hello! <span></span></h1>
        <h1>Need any info about a component? <span></span></h1>
        <h1>Time to take a look, right here! <span></span></h1>
        <a href="#projects" type="button" class="bttn">Explore!&#9759</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Product <span>Categories </span></h1>
      </div>
      <div class="w3-content w3-section" style="width: 500px;">
		    <img class="mySlides w3-animate-left" src="images/transistors.jpg" style="width: 100%">
		    <img class="mySlides w3-animate-left" src="images/resistors.jpg" style="width: 100%">
		    <img class="mySlides w3-animate-fading" src="images/int_circ.jpg" style="width: 100%">
		    <img class="mySlides w3-animate-fading" src="images/led_strip.jpg" style="width: 100%">
	    </div>
    </div>
  </section>
  <!-- End Projects Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="./img/sparebots.jpg" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">About <span>us</span></h1>
        <h2>Passionate Hardware Junkies</h2>
        <p>Hello! We are a group of people that, for some time, had been sharing a common interest regarding hardware components, some of us from young ages, and we decided that we could mold our knowledge into a source that can be used by others who are just touching the tip of the iceberg regarding hardware components, or someone who needs a quick reminder. Regardless of which you consider yourself to be, you are welcome to take a look around! See what you can find;)
        </p>
        <a href="#" class="bttn">Done reading? Take a look!&#9757</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div><h1 class="section-title">Contact <span>info</span></h1></div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png"/></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+40 257 053 453</h2>
            <h2>+40 257 734 693</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png"/></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>cy_dawn2020@gmail.com</h2>
            <h2>cyberDawn@yahoo.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png"/></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>Timișoara, Romania</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

<?php
  include_once 'footer.php';
?>