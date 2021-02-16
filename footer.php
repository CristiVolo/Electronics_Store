  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand"><h1><span>C</span>yber<span>D</span>awn</h1></div>
      <h2>The ultimate component explorer</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/linkedin.png"/></a>
        </div>
        <div class="social-item">
            <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/youtube.png"/></a>
        </div>
      </div>
      <p>Copyright © 2020 CyberDawn. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->
  <script src="./hamburger.js"></script>
  <script type="text/javascript">
	  var a=0;
	  carousel();

	  function carousel()
  	{
		  var i;
		  var x= document.getElementsByClassName("mySlides");

		  for(i=0; i<x.length; i++)
		  {
			  x[i].style.display="none";
		  }

		  a++;  
		  if(a > x.length) {a = 1}
		  x[a-1].style.display = "block";
			setTimeout(carousel, 5000);
	  }
  </script>
</body>
</html>