<?php
/*
Template Name: Partner Form
*/
?>

<?php get_header(); ?>

<?php if ($_SERVER['REQUEST_METHOD'] == "GET") : ?>

<div id="content" class="partnerForm">

<form id="parentForm" action="">

<br/>
<br/>

<div>Please complete the following questionnaire. When you have finished, click the “Submit” button at the bottom of the page. Please note: your responses will be published exactly as we receive them, so be sure to double-check them for spelling and typographical errors beforehand.</div>

<br/>

<h1>Contact Information</h1>
<br/>

<div>For Internal Use Only (will not be included in your public profile)</div>

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

  .container {
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

  .fact_container {
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

<div style="position:relative;width:970px;height:120px;">

  <div style="position:absolute;left:0;">

    <!--  Partner 1 Information-->
    <div class="container">
      <div class="title">Partner 1 Full Name:</div>
      <div class="field"><input type="text" name="partner1FullName"/></div>
    </div>
    <div class="container">
      <div class="title">Home Phone Number:</div>
      <div class="field"><input type="text" name="homePhoneNumber"></div>
    </div>
    <div class="container">
      <div class="title">Email:</div>
      <div class="field"><input type="text" name="privateEmail"></div>
    </div>
  </div>

  <!--  Partner 2 Information-->
  <div style="position:absolute;left:460px;">
    <div class="container">
      <div class="title">Partner 2 Full Name:</div>
      <div class="field"><input type="text" name="partner2FullName"/></div>
    </div>
    <div class="container">
      <div class="title">Cell Phone Number:</div>
      <div class="field"><input type="text" name="cellPhoneNumber"></div>
    </div>
  </div>

</div>

<br/>

<div>To Be Posted Publicly on Your Contact Page</div>

<br/>

<div style="position:relative;width:970px;height:140px;">

  <div style="position:absolute;left:0;">

    <div class="container">
      <div class="title">Public Phone Number:</div>
      <div class="field"><input type="text" name="publicPhoneNumber"></div>
    </div>
    <div class="container">
      <div class="title">Attorney Contact Info:</div>
      <div class="field"><input type="text" name="agencyAttorneyInformation"></div>
    </div>
    <div class="container">
      <div class="title">Adoption Worker Info:</div>
      <div class="field"><input type="text" name="adoptionWorkerInfo"></div>
    </div>
  </div>
  <div style="position:absolute;left:460px;">
    <div class="container">
      <div class="title">Personal Website</div>
      <div class="field"><input type="text" name="personalWebsite"></div>
    </div>
    <div class="container">
      <div class="title">Facebook Page:</div>
      <div class="field"><input type="text" name="facebookPage"></div>
    </div>
    <div class="container">
      <div class="title">Twitter Page:</div>
      <div class="field"><input type="text" name="twitterPage"></div>
    </div>
  </div>

</div>


<h1>About Us</h1>
<br/>

<div style="position:relative;width:970px;height:320px;">

  <div style="position:absolute;left:0;">

    <!--  Partner 1 Information-->
    <div class="container">
      <div class="title">First Name:</div>
      <div class="field"><input type="text" name="partner1FirstName"/></div>
    </div>
    <div class="container">
      <div class="title">Age:</div>
      <div class="field"><input type="text" name="partner1Age" style="width:50px"/></div>
    </div>
    <div class="container">
      <div class="title">Profession:</div>
      <div class="field"><input type="text" name="partner1Profession"/></div>
    </div>
    <div class="container">
      <div class="title">Education:</div>
      <div class="field">
        <select name="partner1Education" size="1">
          <option value="0" selected="true">(Select)</option>
          <option value="Bachelor Degree">Bachelor Degree</option>
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
    <div class="container">
      <div class="title">Ethnicity:</div>
      <div class="field">
        <select name="partner1Ethnicity" size="1">
          <option value="0" selected="true">(Select)</option>
          <option value="African American">African American</option>
          <option value="Asian">Asian</option>
          <option value="Caucasian">Caucasian</option>
          <option value="Hispanic">Hispanic</option>
          <option value="Transracial">Transracial</option>
          <option value="Bi-racial">Bi-racial</option>
          <option value="Other">Other</option>
        </select>
      </div>
    </div>
    <div class="container">
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
    <div class="container">
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
    <div class="container">
      <div class="title">Hobbies:</div>
      <div class="field"><input type="text" name="partner1hobbies"/></div>
    </div>
  </div>

  <!--  Partner 2 Information-->
  <div style="position:absolute;left:460px;">
    <div class="container">
      <div class="title">First Name:</div>
      <div class="field"><input type="text" name="partner2FirstName"/></div>
    </div>
    <div class="container">
      <div class="title">Age:</div>
      <div class="field"><input type="text" name="partner2Age" style="width:50px"/></div>
    </div>
    <div class="container">
      <div class="title">Profession:</div>
      <div class="field"><input type="text" name="partner2Profession"/></div>
    </div>
    <div class="container">
      <div class="title">Education:</div>
      <div class="field">
        <select name="partner2Education" size="1">
          <option value="0" selected="true">(Select)</option>
          <option value="Bachelor Degree">Bachelor Degree</option>
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
    <div class="container">
      <div class="title">Ethnicity:</div>
      <div class="field">
        <select name="partner2Ethnicity" size="1">
          <option value="0" selected="true">(Select)</option>
          <option value="African American">African American</option>
          <option value="Asian">Asian</option>
          <option value="Caucasian">Caucasian</option>
          <option value="Hispanic">Hispanic</option>
          <option value="Transracial">Transracial</option>
          <option value="Bi-racial">Bi-racial</option>
          <option value="Other">Other</option>
        </select>
      </div>
    </div>
    <div class="container">
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
    <div class="container">
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
    <div class="container">
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

    <div class="container">
      <div class="title">City:</div>
      <div class="field"><input type="text" name="city"/></div>
    </div>

    <div class="container">
      <div class="title">State:</div>
      <div class="field">
        <select name="state" size="1">
          <option value="0" selected="true">(Select)</option>
          <option value="AL">Alabama</option>
          <option value="AK">Alaska</option>
          <option value="AZ">Arizona</option>
          <option value="AR">Arkansas</option>
          <option value="CA">California</option>
          <option value="CO">Colorado</option>
          <option value="CT">Connecticut</option>
          <option value="DE">Delaware</option>
          <option value="DC">District of Columbia</option>
          <option value="FL">Florida</option>
          <option value="GA">Georgia</option>
          <option value="HI">Hawaii</option>
          <option value="ID">Idaho</option>
          <option value="IL">Illinois</option>
          <option value="IN">Indiana</option>
          <option value="IA">Iowa</option>
          <option value="KS">Kansas</option>
          <option value="KY">Kentucky</option>
          <option value="LA">Louisiana</option>
          <option value="ME">Maine</option>
          <option value="MD">Maryland</option>
          <option value="MA">Massachusetts</option>
          <option value="MI">Michigan</option>
          <option value="MN">Minnesota</option>
          <option value="MS">Mississippi</option>
          <option value="MO">Missouri</option>
          <option value="MT">Montana</option>
          <option value="NE">Nebraska</option>
          <option value="NV">Nevada</option>
          <option value="NH">New Hampshire</option>
          <option value="NJ">New Jersey</option>
          <option value="NM">New Mexico</option>
          <option value="NY">New York</option>
          <option value="NC">North Carolina</option>
          <option value="ND">North Dakota</option>
          <option value="OH">Ohio</option>
          <option value="OK">Oklahoma</option>
          <option value="OR">Oregon</option>
          <option value="PA">Pennsylvania</option>
          <option value="RI">Rhode Island</option>
          <option value="SC">South Carolina</option>
          <option value="SD">South Dakota</option>
          <option value="TN">Tennessee</option>
          <option value="TX">Texas</option>
          <option value="UT">Utah</option>
          <option value="VT">Vermont</option>
          <option value="VA">Virginia</option>
          <option value="WA">Washington</option>
          <option value="WV">West Virginia</option>
          <option value="WI">Wisconsin</option>
          <option value="WY">Wyoming</option>
        </select>
      </div>
    </div>

    <div class="container">
      <div class="title">Region:</div>
      <div class="field">
        <select name="region" size="1">
          <option value="0" selected="true">(Select)</option>
          <option value="East Coast">East Coast</option>
          <option value="Midwest">Midwest</option>
          <option value="Northeast">Northeast</option>
          <option value="Northwest">Northwest</option>
          <option value="Southeast">Southeast</option>
          <option value="Southwest">Southwest</option>
          <option value="West Coast">West Coast</option>
        </select>
      </div>
    </div>

    <div class="container">
      <div class="title">Neighborhood:</div>
      <div class="field">
        <select name="neighborhood" size="1">
          <option value="0" selected="true">(Select)</option>
          <option value="Rural">Rural</option>
          <option value="Suburban">Suburban</option>
          <option value="Urban">Urban</option>
        </select>
      </div>
    </div>

    <div class="container">
      <div class="title">Years Together:</div>
      <div class="field"><input type="text" name="yearsTogether" style="width:50px"/></div>
    </div>

    <div class="container">
      <div class="title">Other Children:</div>
      <div class="field"><input type="text" name="otherChildren"/></div>
    </div>

    <div class="container">
      <div class="title">Pets:</div>
      <div class="field"><input type="text" name="pets"/></div>
    </div>

  </div>

  <div style="position:absolute;left:460px;">
    <h1>Child We’d Like to Adopt</h1>
    <br/>

    <div class="container">
      <div class="title">Child Age:</div>
      <div class="field">
        <select name="childAge" size="1">
          <option value="No Preference" selected="true">No preference</option>
          <option value="Newborn – 0-6 months">Newborn – 0-6 months</option>
          <option value="Up to 2 years old">Up to 2 years old</option>
        </select>
      </div>
    </div>

    <div class="container">
      <div class="title">Child Gender:</div>
      <div class="field">
        <select name="childGender" size="1">
          <option value="No Preference" selected="true">No preference</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>
    </div>

    <div class="container">
      <div class="title">Child Ethnicity 1:</div>
      <div class="field">
        <select name="childEthnicity1" size="1">
          <option value="No Preference" selected="true">No preference</option>
          <option value="African American">African American</option>
          <option value="Asian">Asian</option>
          <option value="Caucasian">Caucasian</option>
          <option value="Hispanic">Hispanic</option>
          <option value="Transracial">Transracial</option>
        </select>
      </div>
    </div>

    <div class="container">
      <div class="title">Child Ethnicity 2:</div>
      <div class="field">
        <select name="childEthnicity2" size="1">
          <option value="No Preference" selected="true">No preference</option>
          <option value="African American">African American</option>
          <option value="Asian">Asian</option>
          <option value="Caucasian">Caucasian</option>
          <option value="Hispanic">Hispanic</option>
          <option value="Transracial">Transracial</option>
        </select>
      </div>
    </div>

    <div class="container">
      <div class="title">Child Ethnicity 3:</div>
      <div class="field">
        <select name="childEthnicity3" size="1">
          <option value="No Preference" selected="true">No preference</option>
          <option value="African American">African American</option>
          <option value="Asian">Asian</option>
          <option value="Caucasian">Caucasian</option>
          <option value="Hispanic">Hispanic</option>
          <option value="Transracial">Transracial</option>
        </select>
      </div>
    </div>

    <div class="container">
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

    <div class="container">
      <div class="title">Type of Adoption:</div>
      <div class="field">
        <select name="childAdoptionType" size="1">
          <option value="Open" selected="true">Open</option>
          <option value="Semi-open">Semi-open</option>
          <option value="Closed">Closed</option>
        </select>
      </div>
    </div>

  </div>
</div>

<br/>

<h1>Favorite Facts</h1>
<br/>

<div>Once you have completed the information in these sections, please click the "Submit" button at the bottom of the page. The information will be published as is, so be sure to double-check your responses for spelling and typographical errors before submitting.</div>

<br/>

<div style="position:relative;width:970px;height:400px;">

  <div style="position:absolute;left:0;">
    <!--  Partner 1 Information-->
    <div class="container">
      <div class="title">Music:</div>
      <div class="field"><input type="text" name="partner1Fav1"/></div>
    </div>
    <div class="container">
      <div class="title">Singer:</div>
      <div class="field"><input type="text" name="partner1Fav2"/></div>
    </div>
    <div class="container">
      <div class="title">Song:</div>
      <div class="field"><input type="text" name="partner1Fav3"/></div>
    </div>
    <div class="container">
      <div class="title">TV Show:</div>
      <div class="field"><input type="text" name="partner1Fav4"/></div>
    </div>
    <div class="container">
      <div class="title">Movie:</div>
      <div class="field"><input type="text" name="partner1Fav5"/></div>
    </div>
    <div class="container">
      <div class="title">Actor/Actress:</div>
      <div class="field"><input type="text" name="partner1Fav6"/></div>
    </div>
    <div class="container">
      <div class="title">Animal:</div>
      <div class="field"><input type="text" name="partner1Fav7"/></div>
    </div>
    <div class="container">
      <div class="title">Book:</div>
      <div class="field"><input type="text" name="partner1Fav8"/></div>
    </div>
    <div class="container">
      <div class="title">Sport:</div>
      <div class="field"><input type="text" name="partner1Fav9"/></div>
    </div>
    <div class="container">
      <div class="title">City:</div>
      <div class="field"><input type="text" name="partner1Fav10"/></div>
    </div>
  </div>
  <!--  Partner 2 Information-->
  <div style="position:absolute;left:460px;">
    <div class="container">
      <div class="title">Music:</div>
      <div class="field"><input type="text" name="partner2Fav1"/></div>
    </div>
    <div class="container">
      <div class="title">Singer:</div>
      <div class="field"><input type="text" name="partner2Fav2"/></div>
    </div>
    <div class="container">
      <div class="title">Song:</div>
      <div class="field"><input type="text" name="partner2Fav3"/></div>
    </div>
    <div class="container">
      <div class="title">TV Show:</div>
      <div class="field"><input type="text" name="partner2Fav4"/></div>
    </div>
    <div class="container">
      <div class="title">Movie:</div>
      <div class="field"><input type="text" name="partner2Fav5"/></div>
    </div>
    <div class="container">
      <div class="title">Actor/Actress:</div>
      <div class="field"><input type="text" name="partner2Fav6"/></div>
    </div>
    <div class="container">
      <div class="title">Animal:</div>
      <div class="field"><input type="text" name="partner2Fav7"/></div>
    </div>
    <div class="container">
      <div class="title">Book:</div>
      <div class="field"><input type="text" name="partner2Fav8"/></div>
    </div>
    <div class="container">
      <div class="title">Sport:</div>
      <div class="field"><input type="text" name="partner2Fav9"/></div>
    </div>
    <div class="container">
      <div class="title">City:</div>
      <div class="field"><input type="text" name="partner2Fav10"/></div>
    </div>
  </div>
</div>

<br/>

<h1>Fun Facts</h1>
<br/>

<div style="position:relative;width:970px;height:1250px;">

  <div style="position:absolute;left:0;">

    <div class="fact_container">
      <div class="fact_title">The one thing you need to know about me is...</div>
      <div class="fact_field"><textarea name="partner1FunFact1" cols="50" rows="4"></textarea></div>
    </div>
    <div class="fact_container">
      <div class="fact_title">People describe me as...</div>
      <div class="fact_field"><textarea name="partner1FunFact2" cols="50" rows="4"></textarea></div>
    </div>
    <div class="fact_container">
      <div class="fact_title">I'm good at...</div>
      <div class="fact_field"><textarea name="partner1FunFact3" cols="50" rows="4"></textarea></div>
    </div>
    <div class="fact_container">
      <div class="fact_title">I'm not so good at...</div>
      <div class="fact_field"><textarea name="partner1FunFact4" cols="50" rows="4"></textarea></div>
    </div>
    <div class="fact_container">
      <div class="fact_title">The three things I can't live without are...</div>
      <div class="fact_field"><textarea name="partner1FunFact5" cols="50" rows="4"></textarea></div>
    </div>
    <div class="fact_container">
      <div class="fact_title">The person I look up to most, living or dead, is...</div>
      <div class="fact_field"><textarea name="partner1FunFact6" cols="50" rows="4"></textarea></div>
    </div>
    <div class="fact_container">
      <div class="fact_title">The best advice I ever received was...</div>
      <div class="fact_field"><textarea name="partner1FunFact7" cols="50" rows="4"></textarea></div>
    </div>
    <div class="fact_container">
      <div class="fact_title">The thing I most admire about my partner is...</div>
      <div class="fact_field"><textarea name="partner1FunFact8" cols="50" rows="4"></textarea></div>
    </div>
    <div class="fact_container">
      <div class="fact_title">The best thing about my family is...</div>
      <div class="fact_field"><textarea name="partner1FunFact9" cols="50" rows="4"></textarea></div>
    </div>
    <div class="fact_container">
      <div class="fact_title">The one thing the world needs more of is...</div>
      <div class="fact_field"><textarea name="partner1FunFact10" cols="50" rows="4"></textarea></div>
    </div>

  </div>
  <div style="position:absolute;left:460px;">

    <div class="fact_container">
      <div class="fact_title">The one thing you need to know about me is...</div>
      <div class="fact_field"><textarea name="partner2FunFact1" cols="50" rows="4"></textarea></div>
    </div>
    <div class="fact_container">
      <div class="fact_title">People describe me as...</div>
      <div class="fact_field"><textarea name="partner2FunFact2" cols="50" rows="4"></textarea></div>
    </div>
    <div class="fact_container">
      <div class="fact_title">I'm good at...</div>
      <div class="fact_field"><textarea name="partner2FunFact3" cols="50" rows="4"></textarea></div>
    </div>
    <div class="fact_container">
      <div class="fact_title">I'm not so good at...</div>
      <div class="fact_field"><textarea name="partner2FunFact4" cols="50" rows="4"></textarea></div>
    </div>
    <div class="fact_container">
      <div class="fact_title">The three things I can't live without are...</div>
      <div class="fact_field"><textarea name="partner2FunFact5" cols="50" rows="4"></textarea></div>
    </div>
    <div class="fact_container">
      <div class="fact_title">The person I look up to most, living or dead, is...</div>
      <div class="fact_field"><textarea name="partner2FunFact6" cols="50" rows="4"></textarea></div>
    </div>
    <div class="fact_container">
      <div class="fact_title">The best advice I ever received was...</div>
      <div class="fact_field"><textarea name="partner2FunFact7" cols="50" rows="4"></textarea></div>
    </div>
    <div class="fact_container">
      <div class="fact_title">The thing I most admire about my partner is...</div>
      <div class="fact_field"><textarea name="partner2FunFact8" cols="50" rows="4"></textarea></div>
    </div>
    <div class="fact_container">
      <div class="fact_title">The best thing about my family is...</div>
      <div class="fact_field"><textarea name="partner2FunFact9" cols="50" rows="4"></textarea></div>
    </div>
    <div class="fact_container">
      <div class="fact_title">The one thing the world needs more of is...</div>
      <div class="fact_field"><textarea name="partner2FunFact10" cols="50" rows="4"></textarea></div>
    </div>

  </div>
</div>

<br/>

<div class="fact_container">
  <div class="fact_title">Additional Comments</div>
  <div class="fact_field"><textarea name="additionalComments" cols="50" rows="4"></textarea></div>
</div>

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
      jQuery.post("/parent-form", jQuery('#parentForm').serialize(), function (data) {
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

  wp_mail('info@americaadopts.com', 'Parent Form Submission', $emailMessage);
  ?>
<?php endif; ?>

<!-- The main column ends  -->

<?php get_footer(); ?>