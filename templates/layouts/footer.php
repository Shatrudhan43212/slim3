<!--footer-->
<div class="topFootBox">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="footerInfo topFootCol">
          <h3>Destiny Reports, LLC</h3>
          <div>
            <img src="<?= $baseUrl; ?>assets_new/locat.png" alt="">
            <p>92 Highlands Court<br> Wetumpka, Al 36093</p>
          </div>
          <div>
            <img src="<?= $baseUrl; ?>assets_new/phone-call.png" alt="">
            <p>Phone: <br><strong>1-855-935-6179</strong></p>
          </div>
          <div>
            <img src="<?= $baseUrl; ?>assets_new/headphone-915.png" alt="">
            <p>Live Chat: <br><strong class="mtColor">Chat Now</strong></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer>
  <div class="bottomFootBox">
    <div class="container">
      <div class="row">

        <div class="col-md-12 text-center">
          <div class="fLinkBx">
            <a href="<?= $baseUrl; ?>">Home</a> &nbsp; | &nbsp;
            <a href="<?= $baseUrl; ?>terms">Terms of Service</a> &nbsp; | &nbsp;
            <a href="#">Privacy Policy</a> &nbsp; | &nbsp;
            <a href="#">faq's</a> &nbsp; | &nbsp;
            <a href="<?= $baseUrl; ?>contact">Contact us</a>
          </div>
        </div>
        <div class="col-md-12">
          <p>Copyright © dmvreported.com. All rights reserved.</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--footer-->
</div>



<script src="<?= $baseUrl; ?>assets_new/scripts/jquery.min.js"></script>
<script src="<?= $baseUrl; ?>assets_new/scripts/bootstrap.min.js"></script>
<script src="<?= $baseUrl; ?>assets_new/scripts/jquery.parallax-scroll.min.js"></script>
<script src="<?= $baseUrl; ?>assets_new/scripts/validation.js"></script>
<script>
  $(function() {
    $(".bg-holder").parallaxScroll({
      friction: .5,
      direction: "vertical"
    })
  });
</script>
<script>
  $('.grn_btn').on('click', () => {
    var body = $("html, body");
    body.stop().animate({
      scrollTop: 0
    }, 500, 'swing', function() {});
  })
</script>


</body>

</html>