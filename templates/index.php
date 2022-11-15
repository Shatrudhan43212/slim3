<?php include('layouts/header.php'); ?>
<!--start content-->
<!--bannerSection-->
<section class="banner" id="section1" data-width="1024" data-height="768">
  <div class="container">
    <div class="row">
      <div class="col-md-10 pull-left">
        <div class="bannerLeftBox">
          <h1>Driving History</h1>
          <p>Type in any name to get their driving history!</p>
          <?php 
          if(isset($_SESSION['errorMessage'])){
            foreach($_SESSION['errorMessage'] as $err){ ?>
              <span class="text-danger"><?= $err; ?></span><br>
            <?php } } unset($_SESSION['errorMessage']);?>
          <form method="post" action="<?= $baseUrl; ?>postPackageData" name="myform" onsubmit="return validateForm()">
          <input type="hidden" name="baseUrl" value="<?= $baseUrl; ?>">
            <div class="fieldBox">
              <div class="fldBX">
                <label>First Name</label>
                <input type="text" name="fname" id="fname" placeholder="First name" value="" />
              </div>
              <div class="fldBX">
                <label>Last Name</label>
                <input type="text" name="lname" id="lname" placeholder="Last Name" />
              </div>
              <div class="fldBX">
                <label>State</label>
                <select name="states" id="states">
                  <option value="">Select state</option>
                  <option value="NY">New york</option>
                  <option value="CF">California</option>
                </select>
              </div>
            </div>
            <div class="topFormSec">
              <h2>Choose your package</h2>
              <div class="col">
                <label class="radio">
                  1 Year Access for <b>$23.95/month</b>
                  <input type="radio" name="package" id="radio1" value="1 year" />
                  <span class="checkround"></span>
                </label>
                <label class="radio">
                  3 months access for <b>$23.95/month</b>
                  <input type="radio" name="package" id="radio2" value="3 months" />
                  <span class="checkround"></span>
                </label>
                <label class="radio">
                  <b>$1.00</b> for One Report
                  <input type="radio" name="package" id="radio3" value="One Report" />
                  <span class="checkround"></span>
                </label>
              </div>
              <div class="clearfix"></div>
            </div>

            <button type="submit" class="btn btn-warning" name="submit">Submit</button>
            <p class="frmtxt">Have a Question? <strong class="mtColor" onclick="LC_API.open_chat_window();return false;">Click here</strong> For Live Chat</p>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
</section>
<!--bannerSection-->


<!--formSection-->
<section class="formSection">
  <div class="carImg"><img src="<?= $baseUrl; ?>assets_new/images/car.png" alt=""></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="bannerFormBox">
          <img src="<?= $baseUrl; ?>assets_new/images/offerIcon.png">
          <div class="topFormSec">
            <h2>Your report will be available for download or print after the search.</h2>
            <p>You may not use our service to violate any part of the Fair Credit Reporting Act. This includes setting insurance rates, denying credit, or screening for employment or potential tenants.</p>
          </div>

        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<!--formSection-->


<div class="formSection orderSec homeList">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div>
          <img src="<?= $baseUrl; ?>assets_new/images/paperTem.png" alt="" class="pull-left">
        </div>
        <div>
          <h3>Report Included</h3>
          <div class="dividerH"></div>
          <ul>
            <li>Historical Records</li>
            <li>State Records</li>
            <li>Federal Records</li>
            <li> Driving History</li>
            <li>Public Records</li>
          </ul>
          <ul>
            <li>Background History</li>
            <li>Driving Records</li>
            <li>Driving Information</li>
            <li>Government Records</li>
          </ul>
          <div class="clearfix"></div>
          <a href="#">Search Now</a>
        </div>

      </div>
    </div>
  </div>
</div>






<div class="dontsec colorBg mb-0">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="dontMainBox">
          <img src="<?= $baseUrl; ?>assets_new/images/titleDo.png" class="titleBot">
          <div class="clearfix"></div>
          <div class="col-md-4">
            <h3><span>Find</span> a Friend!</h3>
            <hr>
            <div class="clearfix"></div>
            <p>Get back in touch with old friends! It’s so easy</p>
          </div>
          <div class="col-md-4">
            <h3><span>Check </span> DMV History</h3>
            <hr>
            <div class="clearfix"></div>
            <p>Make sure you don’t have an unpaid ticket!</p>
          </div>
          <div class="col-md-4">
            <h3><span>Stay </span> Safe</h3>
            <hr>
            <div class="clearfix"></div>
            <p>Make sure you are never a passenger with an unsafe driver.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>






<div class="dontsec greyBg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="dontMainBox">
          <img src="<?= $baseUrl; ?>assets_new/images/title.png" alt="" class="titleBot">
          <div class="clearfix"></div>
          <div class="col-md-4">
            <h3><span>Do NOT</span> Screen Employees</h3>
            <hr>
            <div class="clearfix"></div>
            <p>You may not look up information about current or potential employees.</p>
          </div>
          <div class="col-md-4">
            <h3><span>Do NOT</span> Stalk or Spy</h3>
            <hr>
            <div class="clearfix"></div>
            <p>Do not use information to track down people who do not want to see you.</p>
          </div>
          <div class="col-md-4">
            <h3><span>Do NOT</span> Steal an Identity</h3>
            <hr>
            <div class="clearfix"></div>
            <p>Using our information for identity theft is a serious crime.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<div class="formSection orderSec homeList bottomHis">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div>
          <h3><span>Type in Any Name</span>
            TO GET THEIR DRIVING HISTORY!</h3>
          <div class="dividerH"></div>
          <p>Our reports are based on information provided to us by third-party sources. We cannot be accountable for any mistakes or omissions they may make. All of the information, images and code on our site is covered by copyright and trademark laws.
          </p>
          <p>
            Our site may contain typographical or other errors. We cannot guarantee that any information provided on our site or in our reports is error-free. We may change the terms of our offer at any time in the future.
          </p>
          <p>Refund requests for cancelled Accounts may be made ay any time by contacting us at support@legaldmvlookup.com or by calling 1-855-549-1904. Once our support receives your request they will be able to immediately provide a refund to the user back to there original card within 90 days of purchase.</p>
        </div>
        <div>
          <img src="<?= $baseUrl; ?>assets_new/images/list_img.png" alt="" class="pull-right">
        </div>
      </div>
    </div>
  </div>
</div>
<!--end page main-->
<?php include('layouts/footer.php'); ?>