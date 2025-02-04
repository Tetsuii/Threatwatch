<footer class="footer">
  <div class="footer-container">
      <div class="footer-section">
          <h3>Threat Watch Asia</h3>
          <p>Makati City, NCR, Philippines</p><br>
          <p>jnr@threatwatch.asia</p><br>
      </div>
      <div class="footer-section">
          <h3>Quick Links</h3>
          <ul>
              <li><a href="{{ route('home') }}">Home</a></li>
              <li><a href="{{ route('about') }}">About Us</a></li>
              <li><a href="{{ route('services') }}">Services</a></li>
          </ul>
      </div>
      <div class="footer-section">
          <h3>Contact Us</h3>
          <div class="emailbox">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="submitbtn">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
      </div>
  </div>
  <div class="footer-bottom" style="height: 7px">
      &copy; {{ date('Y') }} ThreatWatch. All Rights Reserved.
  </div>
</footer>
