<?php

/*
Template Name: Partner Form
*/
get_header(); ?>


<div class="container">
  <div class="row">
    <div class="topborder"></div>
  </div>
</div>
<div class="spacer"></div>
<div class="container">
<div class="row">
<div class="col-md-12">

<?php if ($_SERVER['REQUEST_METHOD'] == "GET") : ?>

  <div id="content" class="partnerForm">

  <form id="parentForm" action="">

  <br/>
  <br/>

  <div>Please complete the following questionnaire. When you have finished, click the "Submit" button at the bottom of the page. Please note: your responses will be published exactly as we receive them, so be sure to double-check them for spelling and typographical errors beforehand.</div>

  <br/>

  <h1>Contact Information</h1>
  <br/>


  <style type="text/css">

    .title {
      width: 160px;
      height: 20px;
      position: absolute;
      left: 0;
    }

    .field {
      width: 460px;
      height: 20px;
      position: absolute;
      left: 160px;
    }

    .containerL {
      position: relative;
      height: 40px;
    }

    .fact_title {
      width: 460px;
      height: 26px;
    }

    .fact_field {
      width: 460px;
      height: 100px;
    }

    .fact_containerL {
      position: relative;
    }

    .field input {
      width: 250px;
    }

    .field select {
      width: 180px;
    }

    .fact_field textarea {
      width: 400px;
    }

  </style>


  <br/>

  <div style="position:relative;width:970px;height:180px; ">

    <div style="position:absolute;left:0;">

      <div class="containerL">
        <div class="title">Public Phone Number:</div>
        <div class="field"><input type="text" name="publicPhoneNumber"></div>
      </div>
      <div class="containerL">
        <div class="title">Public Email Address:</div>
        <div class="field"><input type="text" name="agencyAttorneyInformation"></div>
      </div>
      <div class="containerL">
        <div class="title">Adoption Worker Info:</div>
        <div class="field"><input type="text" name="adoptionWorkerInfo"></div>
      </div>
      <div class="containerL">
        <div class="title">Personal Website</div>
        <div class="field"><input type="text" name="personalWebsite"></div>
      </div>

    </div>
    <div style="position:absolute;left:460px;">

      <div class="containerL">
        <div class="title">Facebook Page:</div>
        <div class="field"><input type="text" name="facebookPage"></div>
      </div>
      <div class="containerL">
        <div class="title">Twitter Page:</div>
        <div class="field"><input type="text" name="twitterPage"></div>
      </div>
      <div class="containerL">
        <div class="title">Youtube Page:</div>
        <div class="field"><input type="text" name="youtubePage"></div>
      </div>
      <div class="containerL">
        <div class="title">Pinterest Page:</div>
        <div class="field"><input type="text" name="pinterestPage"></div>
      </div>
    </div>

  </div>


  <h1>About Us</h1>
  <br/>

  <div style="position:relative;width:970px;height:320px;">

    <div style="position:absolute;left:0;">

      <!--  Partner 1 Information-->
      <div class="containerL">
        <div class="title">First Name:</div>
        <div class="field"><input type="text" name="partner1FirstName"/></div>
      </div>
      <div class="containerL">
        <div class="title">Age:</div>
        <div class="field"><input type="text" name="partner1Age" style="width:50px"/></div>
      </div>
      <div class="containerL">
        <div class="title">Profession:</div>
        <div class="field"><input type="text" name="partner1Profession"/></div>
      </div>
      <div class="containerL">
        <div class="title">Education:</div>
        <div class="field">
          <select name="partner1Education" size="1">
            <option value="0" selected="true">(Select)</option>
            <option value="Bachelor Degree">Bachelor Degree</option>
            <option value="College Diploma">College Diploma</option>
            <option value="High School Diploma">High School Diploma</option>
            <option value="LLB">LL.B</option>
            <option value="Masters Degree">Masters Degree</option>
            <option value="MBA">MBA</option>
            <option value="MD">MD</option>
            <option value="MFA">MFA</option>
            <option value="PhD">PhD</option>
            <option value="Other">Other</option>
          </select>
        </div>
      </div>
      <div class="containerL">
        <div class="title">Ethnicity:</div>
        <div class="field">
          <select name="partner1Ethnicity" size="1">
            <option value="0" selected="true">(Select)</option>
            <option value="Black">Black</option>
            <option value="East Asian">East Asian</option>
            <option value="Latin American">Latin American</option>
            <option value="Middle Eastern">Middle Eastern</option>
            <option value="Multiracial">Multiracial</option>
            <option value="South Asian">South Asian</option>
            <option value="White">White</option>
            <option value="Other">Other</option>
          </select>
        </div>
      </div>
      <div class="containerL">
        <div class="title">Religion:</div>
        <div class="field">
          <select name="partner1Religion" size="1">
            <option value="0" selected="true">(Select)</option>
            <option value="Buddhist">Agnostic</option>
            <option value="Buddhist">Athiest</option>
            <option value="Buddhist">Buddhist</option>
            <option value="Catholic">Catholic</option>
            <option value="Christian">Christian</option>
            <option value="Jewish">Jewish</option>
            <option value="Lutheran">Lutheran</option>
            <option value="Spiritual">Spiritual</option>
            <option value="Other">Other</option>
          </select>
        </div>
      </div>

      <div class="containerL">
        <div class="title">Astrological Sign:</div>
        <div class="field">
          <select name="partner1AstrologicalSign" size="1">
            <option value="0" selected="true">(Select)</option>
            <option value="Aquarius">Aquarius</option>
            <option value="Aries">Aries</option>
            <option value="Cancer">Cancer</option>
            <option value="Capricorn">Capricorn</option>
            <option value="Gemini">Gemini</option>
            <option value="Leo">Leo</option>
            <option value="Libra">Libra</option>
            <option value="Pisces">Pisces</option>
            <option value="Sagittarius">Sagittarius</option>
            <option value="Scorpio">Scorpio</option>
            <option value="Taurus">Taurus</option>
            <option value="Virgo">Virgo</option>
          </select>
        </div>
      </div>
      <div class="containerL">
        <div class="title">Hobbies:</div>
        <div class="field"><input type="text" name="partner1hobbies"/></div>
      </div>
    </div>

    <!--  Partner 2 Information-->
    <div style="position:absolute;left:460px;">
      <div class="containerL">
        <div class="title">First Name:</div>
        <div class="field"><input type="text" name="partner2FirstName"/></div>
      </div>
      <div class="containerL">
        <div class="title">Age:</div>
        <div class="field"><input type="text" name="partner2Age" style="width:50px"/></div>
      </div>
      <div class="containerL">
        <div class="title">Profession:</div>
        <div class="field"><input type="text" name="partner2Profession"/></div>
      </div>
      <div class="containerL">
        <div class="title">Education:</div>
        <div class="field">
          <select name="partner2Education" size="1">
            <option value="0" selected="true">(Select)</option>
            <option value="Bachelor Degree">Bachelor Degree</option>
            <option value="LLB">LL.B</option>
            <option value="High School Diploma">High School Diploma</option>
            <option value="College Diploma">College Diploma</option>
            <option value="Masters Degree">Masters Degree</option>
            <option value="MBA">MBA</option>
            <option value="MD">MD</option>
            <option value="MFA">MFA</option>
            <option value="PhD">PhD</option>
            <option value="Other">Other</option>
          </select>
        </div>
      </div>
      <div class="containerL">
        <div class="title">Ethnicity:</div>
        <div class="field">
          <select name="partner2Ethnicity" size="1">
            <option value="0" selected="true">(Select)</option>
            <option value="Black">Black</option>
            <option value="East Asian">East Asian</option>
            <option value="Latin American">Latin American</option>
            <option value="Middle Eastern">Middle Eastern</option>
            <option value="Multiracial">Multiracial</option>
            <option value="South Asian">South Asian</option>
            <option value="White">White</option>
            <option value="Other">Other</option>
          </select>
        </div>
      </div>

      <div class="containerL">
        <div class="title">Religion:</div>
        <div class="field">
          <select name="partner2Religion" size="1">
            <option value="0" selected="true">(Select)</option>
            <option value="Buddhist">Agnostic</option>
            <option value="Buddhist">Athiest</option>
            <option value="Buddhist">Buddhist</option>
            <option value="Catholic">Catholic</option>
            <option value="Christian">Christian</option>
            <option value="Jewish">Jewish</option>
            <option value="Lutheran">Lutheran</option>
            <option value="Spiritual">Spiritual</option>
            <option value="Other">Other</option>
          </select>
        </div>
      </div>
      <div class="containerL">
        <div class="title">Astrological Sign:</div>
        <div class="field">
          <select name="partner2AstrologicalSign" size="1">
            <option value="0" selected="true">(Select)</option>
            <option value="Aquarius">Aquarius</option>
            <option value="Aries">Aries</option>
            <option value="Cancer">Cancer</option>
            <option value="Capricorn">Capricorn</option>
            <option value="Gemini">Gemini</option>
            <option value="Leo">Leo</option>
            <option value="Libra">Libra</option>
            <option value="Pisces">Pisces</option>
            <option value="Sagittarius">Sagittarius</option>
            <option value="Scorpio">Scorpio</option>
            <option value="Taurus">Taurus</option>
            <option value="Virgo">Virgo</option>
          </select>
        </div>
      </div>
      <div class="containerL">
        <div class="title">Hobbies:</div>
        <div class="field"><input type="text" name="partner2hobbies"/></div>
      </div>
    </div>
  </div>


  <br/>

  <div style="position:relative;width:970px;height:330px;">

    <div style="position:absolute;left:0;">

      <h1>Quick Facts</h1>
      <br/>

      <div class="containerL">
        <div class="title">City:</div>
        <div class="field"><input type="text" name="city"/></div>
      </div>

      <div class="containerL">
        <div class="title">Province</div>
        <div class="field">
          <select name="state" size="1">
            <option value="0" selected="true">(Select)</option>
            <option value="Alberta">Alberta</option>
            <option value="British Columbia">British Columbia</option>
            <option value="Manitoba">Manitoba</option>
            <option value="New Brunswick">New Brunswick</option>
            <option value="Newfoundland">Newfoundland</option>
            <option value="Northwest Territories">Northwest Territories</option>
            <option value="Nova Scotia">Nova Scotia</option>
            <option value="Nunavut">Nunavut</option>
            <option value="Ontario">Ontario</option>
            <option value="Prince Edward Island">Prince Edward Island</option>
            <option value="Quebec">Quebec</option>
            <option value="Saskatchewan">Saskatchewan</option>
            <option value="Yukon">Yukon</option>
          </select>

        </div>
      </div>


      <div class="containerL">
        <div class="title">Neighbourhood:</div>
        <div class="field">
          <select name="neighbourhood" size="1">
            <option value="0" selected="true">(Select)</option>
            <option value="Rural">Rural</option>
            <option value="Suburban">Suburban</option>
            <option value="Urban">Urban</option>
          </select>
        </div>
      </div>

      <div class="containerL">
        <div class="title">Years Together:</div>
        <div class="field"><input type="text" name="yearsTogether" style="width:50px"/></div>
      </div>

      <div class="containerL">
        <div class="title">Other Children:</div>
        <div class="field"><input type="text" name="otherChildren"/></div>
      </div>

      <div class="containerL">
        <div class="title">Pets:</div>
        <div class="field"><input type="text" name="pets"/></div>
      </div>

    </div>

    <div style="position:absolute;left:460px;">
      <h1>Child We'd Like to Adopt</h1>
      <br/>

      <div class="containerL">
        <div class="title">Child Age:</div>
        <div class="field">
          <select name="childAge" size="1">
            <option value="No Preference" selected="true">No preference</option>
            <option value="Newborn – 0-6 months">Newborn – 0-6 months</option>
            <option value="Up to 2 years old">Up to 2 years old</option>
          </select>
        </div>
      </div>

      <div class="containerL">
        <div class="title">Child Gender:</div>
        <div class="field">
          <select name="childGender" size="1">
            <option value="No Preference" selected="true">No preference</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </div>
      </div>

      <div class="containerL">
        <div class="title">Child Ethnicity :</div>
        <div class="field">

          <select name="childEthnicity1" size="1">
            <option value="No Preference" selected="true">No preference</option>
            <option value="Caucasian">Caucasian</option>
          </select>

        </div>
      </div>

      <div class="containerL">
        <div class="title">Special Needs:</div>
        <div class="field">
          <select name="childSpecialNeeds" size="1">
            <option value="No" selected="true">No</option>
            <option value="Yes">Yes</option>
            <option value="Mildly correctable">Mildly correctable</option>
            <option value="Open to discussion">Open to discussion</option>
          </select>
        </div>
      </div>

      <div class="containerL">
        <div class="title">Type of Adoption:</div>
        <div class="field">
          <select name="childAdoptionType" size="1">
            <option value="No Preference" selected="true">No preference</option>
            <option value="Open">Open</option>
            <option value="Semi-open">Semi-open</option>
            <option value="Closed">Closed</option>
          </select>
        </div>
      </div>

    </div>
  </div>

  <br/>

  <h1>Favourite Facts</h1>
  <br/>

  <div></div>

  <br/>

  <div style="position:relative;width:970px;height:400px;">

    <div style="position:absolute;left:0;">
      <!--  Partner 1 Information-->
      <div class="containerL">
        <div class="title">Music:</div>
        <div class="field"><input type="text" name="partner1Fav1"/></div>
      </div>
      <div class="containerL">
        <div class="title">Singer:</div>
        <div class="field"><input type="text" name="partner1Fav2"/></div>
      </div>
      <div class="containerL">
        <div class="title">Song:</div>
        <div class="field"><input type="text" name="partner1Fav3"/></div>
      </div>
      <div class="containerL">
        <div class="title">TV Show:</div>
        <div class="field"><input type="text" name="partner1Fav4"/></div>
      </div>
      <div class="containerL">
        <div class="title">Movie:</div>
        <div class="field"><input type="text" name="partner1Fav5"/></div>
      </div>
      <div class="containerL">
        <div class="title">Actor/Actress:</div>
        <div class="field"><input type="text" name="partner1Fav6"/></div>
      </div>
      <div class="containerL">
        <div class="title">Animal:</div>
        <div class="field"><input type="text" name="partner1Fav7"/></div>
      </div>
      <div class="containerL">
        <div class="title">Book:</div>
        <div class="field"><input type="text" name="partner1Fav8"/></div>
      </div>
      <div class="containerL">
        <div class="title">Sport:</div>
        <div class="field"><input type="text" name="partner1Fav9"/></div>
      </div>
      <div class="containerL">
        <div class="title">Food:</div>
        <div class="field"><input type="text" name="partner1Fav10"/></div>
      </div>
    </div>
    <!--  Partner 2 Information-->
    <div style="position:absolute;left:460px;">
      <div class="containerL">
        <div class="title">Music:</div>
        <div class="field"><input type="text" name="partner2Fav1"/></div>
      </div>
      <div class="containerL">
        <div class="title">Singer:</div>
        <div class="field"><input type="text" name="partner2Fav2"/></div>
      </div>
      <div class="containerL">
        <div class="title">Song:</div>
        <div class="field"><input type="text" name="partner2Fav3"/></div>
      </div>
      <div class="containerL">
        <div class="title">TV Show:</div>
        <div class="field"><input type="text" name="partner2Fav4"/></div>
      </div>
      <div class="containerL">
        <div class="title">Movie:</div>
        <div class="field"><input type="text" name="partner2Fav5"/></div>
      </div>
      <div class="containerL">
        <div class="title">Actor/Actress:</div>
        <div class="field"><input type="text" name="partner2Fav6"/></div>
      </div>
      <div class="containerL">
        <div class="title">Animal:</div>
        <div class="field"><input type="text" name="partner2Fav7"/></div>
      </div>
      <div class="containerL">
        <div class="title">Book:</div>
        <div class="field"><input type="text" name="partner2Fav8"/></div>
      </div>
      <div class="containerL">
        <div class="title">Sport:</div>
        <div class="field"><input type="text" name="partner2Fav9"/></div>
      </div>
      <div class="containerL">
        <div class="title">Food:</div>
        <div class="field"><input type="text" name="partner2Fav10"/></div>
      </div>
    </div>
  </div>

  <br/>


  <div>Accept <a href="/terms-of-use-and-disclaimer" target="_blank">Terms of Use</a> <input type="checkbox" name="termsOfUse" id="termsOfUse"/></div>
  <br/>

  <input type="button" value="Submit" onclick="submitForm(); return false;"/>

  <br/>
  <br/>
  <br/>

  </form>
  </div>

  <script type="text/javascript">
    function submitForm() {
      if (jQuery("#termsOfUse").attr('checked')) {
        jQuery.post("/parent-form/", jQuery('#parentForm').serialize(), function (data) {
          jQuery('#content').html("<br/><br/><br/>Form submitted successfully.<br/><br/><br/>")
        });
      }
      else {
        alert("Please accept the terms of use.");
      }
    }
  </script>

<?php endif; ?>

<?php if ($_SERVER['REQUEST_METHOD'] == "POST") : ?>
  <?php
  $partner1FullName = $_REQUEST["partner1FullName"];
  $emailMessage = "";
  foreach ($_POST as $var => $value) {
    $emailMessage = $emailMessage . $var . ": " . stripslashes($value) . "\n\n";
  }

  wp_mail('info@canadaadopts.com', 'Parent Form Submission', $emailMessage);
  ?>
<?php endif; ?>


</div>
</div>
</div><!-- #main -->


<footer id="colophon" class="containerL-fullwidth" role="contentinfo">

  <?php get_sidebar('footer'); ?>

  <div class="footer text-center"><a href="http://www.canadaadopts.com/pregnant/">PREGNANT?</a> | <a href="http://www.canadaadopts.com/hoping-to-adopt/">HOPING TO ADOPT </a> | <a href="http://www.canadaadopts.com/adoption-profiles/">FIND A FAMILY</a> | <a
        href="http://www.canadaadopts.com/services/">SERVICES</a> | <a href="http://www.canadaadopts.com/resources/">RESOURCES</a> | <a href="http://www.canadaadopts.com/about-us/">ABOUT US</a></br>
    <small><a href="http://www.canadaadopts.com/us/terms-use/" class="orangetxt">Terms of Use </a>| <a class="orangetxt" href="http://www.canadaadopts.com/privacy-policy/">Privacy</a></small>
    </br>
    <small>Copyright © 2014. All rights reserved. America Adopts</small>
  </div>
</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>