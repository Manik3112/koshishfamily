<footer class="footer">
  <!-- START THE SOCIAL MEDIA CONTENT  -->
  <div class="footer-sm" style="background-color: #212121;">
    <div class="container">
      <div class="row py-4 text-center text-white">
        <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
          Connect with us on social media
        </div>
        <div class="col-lg-7 col-md-6">
          <a href="https://www.instagram.com/koshish_family" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://www.youtube.com/@KoshishFamily" target="_blank"><i class="fab fa-youtube"></i></a>
          <a href="https://www.linkedin.com/company/koshishfamily/" target="_blank"><i class="fab fa-linkedin"></i></a>
        </div>
      </div>
    </div>
  </div>

  <!-- START THE CONTENT FOR THE CAMPANY INFO -->
  <div class="container mt-5">
    <div class="row text-white justify-content-center mt-3 pb-3">
      <div class="col-12 col-sm-6 col-lg-4 mx-auto">
        <h5 class="text-capitalize fw-bold">Koshish Family</h5>
        <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
        <p class="lh-lg">
          A Family for the Underprivileged. Dedicated towards helping children gain education and their overall skills .
        </p>
      </div>
      <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
        <h5 class="text-capitalize fw-bold">Departments</h5>
        <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
        <ul class="list-inline campany-list">
          <li><a href="/pathshala">Pathshala</a></li>
          <li><a href="/collectdkure">Collect Distribution Kure</a></li>
          <li><a href="/art-and-craft">Arts & Crafts</a></li>
        </ul>
      </div>
      <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
        <h5 class="text-capitalize fw-bold">contact</h5>
        <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
        <ul class="list-inline campany-list">
          <li><a href="#">Dehradun,India</a></li>
          <li><a href="mailto:koshishfamily@gmail.com">koshishfamily@gmail.com</a></li>
          <li><a href="mailto:koshishfamily.hr@gmail.com">Contact our HR team</a></li>
          <li><a href="https://forms.gle/R5NvNZdiupQ7V6L18" target="_blank">Donate Here</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- START THE COPYRIGHT INFO  -->
  <div class="footer-bottom pt-5 pb-5">
    <div class="container">
      <div class="row text-center text-white">
        <div class="col-12">
          <div class="footer-bottom__copyright">
            &COPY; Copyright 2025 <a href="#">Koshish Family</a> | Created by Koshish Tech Titans</a><br><br>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Include React and ReactDOM from CDN -->
    <script src="https://unpkg.com/react@18/umd/react.development.js"></script>
    <!-- <script src="<?= base_url() ?>assets/js/react.js"></script> -->
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>
    <!-- <script src="<?= base_url() ?>assets/js/react-dom.js"></script> -->
    <!-- Include Babel for JSX support -->
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    <!-- <script src="<?= base_url() ?>assets/js/babel.min.js"></script> -->
    
    <script type="text/babel">
        if(App){
            const reactRoot = ReactDOM.createRoot(document.getElementById('reactRoot'));
            reactRoot.render(<App />);
        }
    </script>
    </body>
</html>
