<?php
$title = "Place an order || Agrorite Limited";
require_once "header.php";
?>
  <div class="header-space"></div>
  <!-- Header End -->
  <!-- Breadcrumb Area Start -->
  <nav class="breadcrumb-area bg-dark bg-6 ptb-20 n40">
    <div class="container d-md-flex">
      <h2 class="text-white mb-0">Make A Request</h2>
      <ol class="breadcrumb p-0 m-0 bg-dark ml-auto">
        <li class="breadcrumb-item"><a class="text-white" href="index">Home</a> <span class="text-white">/</span></li>
        <li aria-current="page" class="breadcrumb-item active text-white">Buy from us</li>
      </ol>
    </div>
  </nav>
  <!-- Breadcrumb Area End -->
  

        <!-- Start Contact Area -->
        <section class="contact-area ptb-100">
            <div class="container">
                <div class="section-title contact-form">
                    <h2>Place an order</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit consequuntur temporibus velit.</p>
                </div>

                <!-- <div class="contact-form" > -->
                
                    <form class="" id="commodity_buyForm">
                    <div id="error_buyMessage" style="width:100%; height:100%; display:none; color:red; text-align: center; margin:20px"></div>
            <div id="success_buyMessage" style="width:100%; height:100%; display:none; color:green; text-align: center; margin:20px"></div>
                        <div class="row">
                       
                            <div class="col-12 col-lg-6 col-md-6 col-xl-6 col-sm-12">
                                <div class="form-group">
                                    <label>Full Name</label>

                                    <input type="text" name="name" id="clientName" class="form-control"  placeholder="Full Names">
                                </div>
                            </div>

                            <!-- <div class="col-12 col-lg-6 col-md-6 col-xl-6 col-sm-12">
                                <div class="form-group">
                                    <label>Last Name</label>

                                    <input type="name" id="lastName" class="form-control" required data-error="Please put in your last name" placeholder="Last Name">
                                </div>
                            </div> -->

                            <div class="col-12 col-lg-6 col-md-6 col-xl-6 col-sm-12">
                                <div class="form-group">
                                    <label>Phone Number</label>

                                    <input type="text" id="telephone" class="form-control" name="number" placeholder="Phone Number">
                                </div>
                            </div>


                            <!-- <div class="input-group ">
  <div class="input-group-btn">
    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="emoji">????????</span>
    </button>
    <ul class="dropdown-menu scrollable-menu">
      <li class="">
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">US</span>
          <span class="country-name truncate col-9">United States</span>
          <span class="dial-code col-2 text-right">+1</span>
          <span class="example-number sr-only">(201) 555-0123</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">GB</span>
          <span class="country-name truncate col-9">United Kingdom</span>
          <span class="dial-code col-2 text-right">+44</span>
          <span class="example-number sr-only">07400 123456</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">CA</span>
          <span class="country-name truncate col-9">Canada</span>
          <span class="dial-code col-2 text-right">+1</span>
          <span class="example-number sr-only">(204) 234 5678</span>
        </a>
      </li>
      <li role="separator" class="divider"></li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">AF</span>
          <span class="country-name truncate col-9">Afghanistan (???????????????????????????)</span>
          <span class="dial-code col-2 text-right">+93</span>
          <span class="example-number sr-only">070 123 4567</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">AX</span>
          <span class="country-name truncate col-9">??land Islands</span>
          <span class="dial-code col-2 text-right">+358</span>
          <span class="example-number sr-only">041 2345678</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">AL</span>
          <span class="country-name truncate col-9">Albania (Shqip??ri)</span>
          <span class="dial-code col-2 text-right">+355</span>
          <span class="example-number sr-only">066 123 4567</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">DZ</span>
          <span class="country-name truncate col-9">Algeria (???????????????????????)</span>
          <span class="dial-code col-2 text-right">+213</span>
          <span class="example-number sr-only">0551 23 45 67</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">AS</span>
          <span class="country-name truncate col-9">American Samoa</span>
          <span class="dial-code col-2 text-right">+1684</span>
          <span class="example-number sr-only">(684) 733-1234</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">AD</span>
          <span class="country-name truncate col-9">Andorra</span>
          <span class="dial-code col-2 text-right">+376</span>
          <span class="example-number sr-only">312 345</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">AO</span>
          <span class="country-name truncate col-9">Angola</span>
          <span class="dial-code col-2 text-right">+244</span>
          <span class="example-number sr-only">923 123 456</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">AI</span>
          <span class="country-name truncate col-9">Anguilla</span>
          <span class="dial-code col-2 text-right">+1264</span>
          <span class="example-number sr-only">(264) 235-1234</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">AQ</span>
          <span class="country-name truncate col-9">Antarctica</span>
          <span class="dial-code col-2 text-right">+672</span>
          <span class="example-number sr-only">55 1234</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">AG</span>
          <span class="country-name truncate col-9">Antigua &amp; Barbuda</span>
          <span class="dial-code col-2 text-right">+1268</span>
          <span class="example-number sr-only">(268) 464-1234</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">AR</span>
          <span class="country-name truncate col-9">Argentina</span>
          <span class="dial-code col-2 text-right">+54</span>
          <span class="example-number sr-only">011 15-2345-6789</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">AM</span>
          <span class="country-name truncate col-9">Armenia (????????????????)</span>
          <span class="dial-code col-2 text-right">+374</span>
          <span class="example-number sr-only">077 123456</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">AW</span>
          <span class="country-name truncate col-9">Aruba</span>
          <span class="dial-code col-2 text-right">+297</span>
          <span class="example-number sr-only">560 1234</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">AC</span>
          <span class="country-name truncate col-9">Ascension Island</span>
          <span class="dial-code col-2 text-right">+247</span>
          <span class="example-number sr-only">1234</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">AU</span>
          <span class="country-name truncate col-9">Australia</span>
          <span class="dial-code col-2 text-right">+61</span>
          <span class="example-number sr-only">0412 345 678</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">AT</span>
          <span class="country-name truncate col-9">Austria (??sterreich)</span>
          <span class="dial-code col-2 text-right">+43</span>
          <span class="example-number sr-only">0664 123456</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">AZ</span>
          <span class="country-name truncate col-9">Azerbaijan (Az??rbaycan)</span>
          <span class="dial-code col-2 text-right">+994</span>
          <span class="example-number sr-only">040 123 45 67</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">BS</span>
          <span class="country-name truncate col-9">Bahamas</span>
          <span class="dial-code col-2 text-right">+1242</span>
          <span class="example-number sr-only">(242) 359-1234</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">BH</span>
          <span class="country-name truncate col-9">Bahrain (???????????????????????)</span>
          <span class="dial-code col-2 text-right">+973</span>
          <span class="example-number sr-only">3600 1234</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">BD</span>
          <span class="country-name truncate col-9">Bangladesh (????????????????????????)</span>
          <span class="dial-code col-2 text-right">+880</span>
          <span class="example-number sr-only">01812-345678</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">BB</span>
          <span class="country-name truncate col-9">Barbados</span>
          <span class="dial-code col-2 text-right">+1246</span>
          <span class="example-number sr-only">(246) 250-1234</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">BY</span>
          <span class="country-name truncate col-9">Belarus (????????????????)</span>
          <span class="dial-code col-2 text-right">+375</span>
          <span class="example-number sr-only">8 029 491-19-11</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">BE</span>
          <span class="country-name truncate col-9">Belgium (Belgi??)</span>
          <span class="dial-code col-2 text-right">+32</span>
          <span class="example-number sr-only">0470 12 34 56</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">BZ</span>
          <span class="country-name truncate col-9">Belize</span>
          <span class="dial-code col-2 text-right">+501</span>
          <span class="example-number sr-only">622-1234</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">BJ</span>
          <span class="country-name truncate col-9">Benin (B??nin)</span>
          <span class="dial-code col-2 text-right">+229</span>
          <span class="example-number sr-only">622-1234</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">BM</span>
          <span class="country-name truncate col-9">Bermuda</span>
          <span class="dial-code col-2 text-right">+1441</span>
          <span class="example-number sr-only">(441) 370-1234</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">BT</span>
          <span class="country-name truncate col-9">Bhutan (???????????????)</span>
          <span class="dial-code col-2 text-right">+975</span>
          <span class="example-number sr-only">17 12 34 56</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code hidden">BO</span>
          <span class="country-name truncate col-9">Bolivia</span>
          <span class="dial-code col-2 text-right">+591</span>
          <span class="example-number sr-only">71234567</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">BA</span>
          <span class="country-name truncate col-9">Bosnia &amp; Herzegovina (?????????? ?? ??????????????????????)</span>
          <span class="dial-code col-2 text-right">+387</span>
          <span class="example-number sr-only">061 123 456</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">BW</span>
          <span class="country-name truncate col-9">Botswana</span>
          <span class="dial-code col-2 text-right">+267</span>
          <span class="example-number sr-only">71 123 456</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">BV</span>
          <span class="country-name truncate col-9">Bouvet Island</span>
          <span class="dial-code col-2 text-right">+47</span>
          <span class="example-number hidden">406 12 345</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">BR</span>
          <span class="country-name truncate col-9">Brazil (Brasil)</span>
          <span class="dial-code col-2 text-right">+55</span>
          <span class="example-number hidden">(11) 96123-4567</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">IO</span>
          <span class="country-name truncate col-9">British Indian Ocean Territory</span>
          <span class="dial-code col-2 text-right">+246</span>
          <span class="example-number hidden">380 1234</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">VG</span>
          <span class="country-name truncate col-9">British Virgin Islands</span>
          <span class="dial-code col-2 text-right">+1284</span>
          <span class="example-number hidden">(284) 300-1234</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">BN</span>
          <span class="country-name truncate col-9">Brunei</span>
          <span class="dial-code col-2 text-right">+673</span>
          <span class="example-number hidden">712 3456</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">BG</span>
          <span class="country-name truncate col-9">Bulgaria (????????????????)</span>
          <span class="dial-code col-2 text-right">+359</span>
          <span class="example-number hidden">048 123 456</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">BF</span>
          <span class="country-name truncate col-9">Burkina Faso</span>
          <span class="dial-code col-2 text-right">+226</span>
          <span class="example-number hidden">70 12 34 56</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">BI</span>
          <span class="country-name truncate col-9">Burundi (Uburundi)</span>
          <span class="dial-code col-2 text-right">+257</span>
          <span class="example-number hidden">79 56 12 34</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">KH</span>
          <span class="country-name truncate col-9">Cambodia (?????????????????????)</span>
          <span class="dial-code col-2 text-right">+855</span>
          <span class="example-number hidden">091 234 567</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">CM</span>
          <span class="country-name truncate col-9">Cameroon (Cameroun)</span>
          <span class="dial-code col-2 text-right">+237</span>
          <span class="example-number sr-only">6 71 23 45 67</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">CV</span>
          <span class="country-name truncate col-9">Cape Verde (Kabu Verdi)</span>
          <span class="dial-code col-2 text-right">+238</span>
          <span class="example-number sr-only">991 12 34</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">BQ</span>
          <span class="country-name truncate col-9">Caribbean Netherlands</span>
          <span class="dial-code col-2 text-right">+599</span>
          <span class="example-number sr-only">318 1234</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">KY</span>
          <span class="country-name truncate col-9">Cayman Islands</span>
          <span class="dial-code col-xs-2 text-right">+1345</span>
          <span class="example-number sr-only">(345) 323-1234</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">CF</span>
          <span class="country-name truncate col-9">Central African Republic (R??publique centrafricaine)</span>
          <span class="dial-code col-xs-2 text-right">+236</span>
          <span class="example-number sr-only">70 01 23 45</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">TD</span>
          <span class="country-name truncate col-9">Chad (Tchad)</span>
          <span class="dial-code col-xs-2 text-right">+235</span>
          <span class="example-number sr-only">63 01 23 45</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">CL</span>
          <span class="country-name truncate col-9">Chile</span>
          <span class="dial-code col-xs-2 text-right">+56</span>
          <span class="example-number sr-only">09 6123 4567</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">CN</span>
          <span class="country-name truncate col-9">China (??????)</span>
          <span class="dial-code col-xs-2 text-right">+86</span>
          <span class="example-number sr-only">131 2345 6789</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">CX</span>
          <span class="country-name truncate col-9">Christmas Island</span>
          <span class="dial-code col-xs-2 text-right">+61</span>
          <span class="example-number sr-only">0412 345 678</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">CC</span>
          <span class="country-name truncate col-9">Cocos (Keeling) Islands</span>
          <span class="dial-code col-xs-2 text-right">+61</span>
          <span class="example-number sr-only">0412 345 678</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">CO</span>
          <span class="country-name truncate col-9">Colombia</span>
          <span class="dial-code col-2 text-right">+57</span>
          <span class="example-number sr-only">321 1234567</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">KM</span>
          <span class="country-name truncate col-9">Comoros (????????? ????????????????)</span>
          <span class="dial-code col-2 text-right">+269</span>
          <span class="example-number sr-only">321 23 45</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">CG</span>
          <span class="country-name truncate col-9">Congo (Republic) (Congo-Brazzaville)</span>
          <span class="dial-code col-2 text-right">+242</span>
          <span class="example-number sr-only">0991 234</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">CD</span>
          <span class="country-name truncate col-9">Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)</span>
          <span class="dial-code col-2 text-right">+243</span>
          <span class="example-number sr-only">06 123 4567</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">CK</span>
          <span class="country-name truncate col-9">Cook Islands</span>
          <span class="dial-code col-2 text-right">+682</span>
          <span class="example-number sr-only">71 234</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">CR</span>
          <span class="country-name truncate col-9">Costa Rica</span>
          <span class="dial-code col-2 text-right">+506</span>
          <span class="example-number sr-only">8312 3456</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">CI</span>
          <span class="country-name truncate col-9">C??te d???Ivoire</span>
          <span class="dial-code col-2 text-right">+225</span>
          <span class="example-number sr-only">01 23 45 67</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">HR</span>
          <span class="country-name truncate col-9">Croatia (Hrvatska)</span>
          <span class="dial-code col-2 text-right">+385</span>
          <span class="example-number sr-only">091 234 5678</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">CU</span>
          <span class="country-name truncate col-9">Cuba</span>
          <span class="dial-code col-2 text-right">+53</span>
          <span class="example-number sr-only">05 1234567</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">CW</span>
          <span class="country-name truncate col-9">Cura??ao</span>
          <span class="dial-code col-2 text-right">+599</span>
          <span class="example-number sr-only">9 518 1234</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">CY</span>
          <span class="country-name truncate col-9">Cyprus (????????????)</span>
          <span class="dial-code col-2 text-right">+357</span>
          <span class="example-number sr-only">96 123456</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">CZ</span>
          <span class="country-name truncate col-9">Czech Republic (??esk?? republika)</span>
          <span class="dial-code col-2 text-right">+420</span>
          <span class="example-number sr-only">601 123 456</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">DK</span>
          <span class="country-name truncate col-9">Denmark (Danmark)</span>
          <span class="dial-code col-2 text-right">+45</span>
          <span class="example-number sr-only">20 12 34 56</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">DG</span>
          <span class="country-name truncate col-9">Diego Garcia</span>
          <span class="dial-code col-2 text-right">+246</span>
          <span class="example-number sr-only">0412 345 678</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">DJ</span>
          <span class="country-name truncate col-9">Djibouti</span>
          <span class="dial-code col-2 text-right">+253</span>
          <span class="example-number sr-only">77 83 10 01</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">DM</span>
          <span class="country-name truncate col-9">Dominica</span>
          <span class="dial-code col-2 text-right">+1767</span>
          <span class="example-number sr-only">(767) 225-1234</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">DO</span>
          <span class="country-name truncate col-9">Dominican Republic (Rep??blica Dominicana)</span>
          <span class="dial-code col-2 text-right">+1</span>
          <span class="example-number sr-only">(809) 234-5678</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">EC</span>
          <span class="country-name truncate col-9">Ecuador</span>
          <span class="dial-code col-2 text-right">+593</span>
          <span class="example-number sr-only">099 123 4567</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">EG</span>
          <span class="country-name truncate col-9">Egypt (???????????????)</span>
          <span class="dial-code col-2 text-right">+20</span>
          <span class="example-number sr-only">0100 123 4567</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">SV</span>
          <span class="country-name truncate col-9">El Salvador</span>
          <span class="dial-code col-2 text-right">+503</span>
          <span class="example-number sr-only">7012 3456</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">GQ</span>
          <span class="country-name truncate col-9">Equatorial Guinea (Guinea Ecuatorial)</span>
          <span class="dial-code col-2 text-right">+240</span>
          <span class="example-number sr-only">222 123 456</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">ER</span>
          <span class="country-name truncate col-9">Eritrea</span>
          <span class="dial-code col-2 text-right">+291</span>
          <span class="example-number sr-only">07 123 456</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">EE</span>
          <span class="country-name truncate col-9">Estonia (Eesti)</span>
          <span class="dial-code col-2 text-right">+372</span>
          <span class="example-number sr-only">5123 4567</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">ET</span>
          <span class="country-name truncate col-9">Ethiopia</span>
          <span class="dial-code col-2 text-right">+251</span>
          <span class="example-number sr-only">091 123 4567</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">FK</span>
          <span class="country-name truncate col-9">Falkland Islands (Islas Malvinas)</span>
          <span class="dial-code col-2 text-right">+500</span>
          <span class="example-number sr-only">51234</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">FO</span>
          <span class="country-name truncate col-9">Faroe Islands (F??royar)</span>
          <span class="dial-code col-2 text-right">+298</span>
          <span class="example-number sr-only">211234</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">FJ</span>
          <span class="country-name truncate col-9">Fiji</span>
          <span class="dial-code col-2 text-right">+679</span>
          <span class="example-number sr-only">701 2345</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">FI</span>
          <span class="country-name truncate col-9">Finland (Suomi)</span>
          <span class="dial-code col-2 text-right">+358</span>
          <span class="example-number sr-only">041 2345678</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">FR</span>
          <span class="country-name truncate col-9">France</span>
          <span class="dial-code col-2 text-right">+33</span>
          <span class="example-number sr-only">06 12 34 56 78</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">GF</span>
          <span class="country-name truncate col-9">French Guiana (Guyane fran??aise)</span>
          <span class="dial-code col-2 text-right">+594</span>
          <span class="example-number sr-only">0694 20 12 34</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">PF</span>
          <span class="country-name truncate col-9">French Polynesia (Polyn??sie fran??aise)</span>
          <span class="dial-code col-2 text-right">+689</span>
          <span class="example-number sr-only">87 12 34 56</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">GA</span>
          <span class="country-name truncate col-9">Gabon</span>
          <span class="dial-code col-2 text-right">+241</span>
          <span class="example-number sr-only">06 03 12 34</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">GM</span>
          <span class="country-name truncate col-9">Gambia</span>
          <span class="dial-code col-2 text-right">+220</span>
          <span class="example-number sr-only">301 2345</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">GE</span>
          <span class="country-name truncate col-9">Georgia (??????????????????????????????)</span>
          <span class="dial-code col-2 text-right">+995</span>
          <span class="example-number sr-only">555 12 34 56</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">DE</span>
          <span class="country-name truncate col-9">Germany (Deutschland)</span>
          <span class="dial-code col-2 text-right">+49</span>
          <span class="example-number sr-only">01512 3456789</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">GH</span>
          <span class="country-name truncate col-9">Ghana (Gaana)</span>
          <span class="dial-code col-2 text-right">+233</span>
          <span class="example-number sr-only">023 123 4567</span>
        </a>
      </li>
      <li>
        <a href="#" class="dropdown-item d-flex justify-content-between">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">GI</span>
          <span class="country-name truncate col-9">Gibraltar</span>
          <span class="dial-code col-2 text-right">+350</span>
          <span class="example-number sr-only">57123456</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">GR</span>
          <span class="country-name truncate col-9">Greece (????????????)</span>
          <span class="dial-code col-2 text-right">+30</span>
          <span class="example-number sr-only">691 234 5678</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">GL</span>
          <span class="country-name truncate col-9">Greenland (Kalaallit Nunaat)</span>
          <span class="dial-code col-2 text-right">+299</span>
          <span class="example-number sr-only">22 12 34</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">GD</span>
          <span class="country-name truncate col-9">Grenada</span>
          <span class="dial-code col-2 text-right">+1473</span>
          <span class="example-number sr-only">(473) 403-1234</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">GP</span>
          <span class="country-name truncate col-9">Guadeloupe</span>
          <span class="dial-code col-2 text-right">+590</span>
          <span class="example-number sr-only">0690 30-1234</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">GU</span>
          <span class="country-name truncate col-9">Guam</span>
          <span class="dial-code col-2 text-right">+1671</span>
          <span class="example-number sr-only">(671) 300-1234</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">GT</span>
          <span class="country-name truncate col-9">Guatemala</span>
          <span class="dial-code col-2 text-right">+502</span>
          <span class="example-number sr-only">5123 4567</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">GG</span>
          <span class="country-name truncate col-9">Guernsey</span>
          <span class="dial-code col-2 text-right">+44</span>
          <span class="example-number sr-only">07781 123456</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">GN</span>
          <span class="country-name truncate col-9">Guinea (Guin??e)</span>
          <span class="dial-code col-2 text-right">+224</span>
          <span class="example-number sr-only">601 12 34 56</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">GW</span>
          <span class="country-name truncate col-9">Guinea-Bissau (Guin?? Bissau)</span>
          <span class="dial-code col-2 text-right">+245</span>
          <span class="example-number sr-only">955 012 345</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">GY</span>
          <span class="country-name truncate col-9">Guyana</span>
          <span class="dial-code col-2 text-right">+592</span>
          <span class="example-number sr-only">609 1234</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">HT</span>
          <span class="country-name truncate col-9">Haiti</span>
          <span class="dial-code col-2 text-right">+509</span>
          <span class="example-number sr-only">34 10 1234</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">HM</span>
          <span class="country-name truncate col-9">Heard &amp; McDonald Islands</span>
          <span class="dial-code col-2 text-right">+672</span>
          <span class="example-number sr-only">0412 345 678</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">HN</span>
          <span class="country-name truncate col-9">Honduras</span>
          <span class="dial-code col-2 text-right">+504</span>
          <span class="example-number sr-only">9123-4567</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">HK</span>
          <span class="country-name truncate col-9">Hong Kong (??????)</span>
          <span class="dial-code col-2 text-right">+852</span>
          <span class="example-number sr-only">5123 4567</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">HU</span>
          <span class="country-name truncate col-9">Hungary (Magyarorsz??g)</span>
          <span class="dial-code col-2 text-right">+36</span>
          <span class="example-number sr-only">(20) 123 4567</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">IS</span>
          <span class="country-name truncate col-9">Iceland (??sland)</span>
          <span class="dial-code col-2 text-right">+354</span>
          <span class="example-number sr-only">611 1234</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">IN</span>
          <span class="country-name truncate col-9">India (????????????)</span>
          <span class="dial-code col-2 text-right">+91</span>
          <span class="example-number sr-only">099876 54321</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">ID</span>
          <span class="country-name truncate col-9">Indonesia</span>
          <span class="dial-code col-2 text-right">+62</span>
          <span class="example-number sr-only">0812-345-678</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">IR</span>
          <span class="country-name truncate col-9">Iran (???????????????????)</span>
          <span class="dial-code col-2 text-right">+98</span>
          <span class="example-number sr-only">0912 345 6789</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">IQ</span>
          <span class="country-name truncate col-9">Iraq (?????????????????????)</span>
          <span class="dial-code col-2 text-right">+964</span>
          <span class="example-number sr-only">0791 234 5678</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">IE</span>
          <span class="country-name truncate col-9">Ireland</span>
          <span class="dial-code col-2 text-right">+353</span>
          <span class="example-number sr-only">085 012 3456</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">IM</span>
          <span class="country-name truncate col-9">Isle of Man</span>
          <span class="dial-code col-2 text-right">+44</span>
          <span class="example-number sr-only">07924 123456</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">IL</span>
          <span class="country-name truncate col-9">Israel (???????????????????)</span>
          <span class="dial-code col-2 text-right">+972</span>
          <span class="example-number sr-only">050-123-4567</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">IT</span>
          <span class="country-name truncate col-9">Italy (Italia)</span>
          <span class="dial-code col-2 text-right">+39</span>
          <span class="example-number sr-only">312 345 6789</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">JM</span>
          <span class="country-name truncate col-9">Jamaica</span>
          <span class="dial-code col-2 text-right">+1876</span>
          <span class="example-number sr-only">(876) 210-1234</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">JP</span>
          <span class="country-name truncate col-9">Japan (??????)</span>
          <span class="dial-code col-2 text-right">+81</span>
          <span class="example-number sr-only">090-1234-5678</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">JE</span>
          <span class="country-name truncate col-9">Jersey</span>
          <span class="dial-code col-2 text-right">+44</span>
          <span class="example-number sr-only">07797 123456</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">JO</span>
          <span class="country-name truncate col-9">Jordan (?????????????????????)</span>
          <span class="dial-code col-2 text-right">+962</span>
          <span class="example-number sr-only">07 9012 3456</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">KZ</span>
          <span class="country-name truncate col-9">Kazakhstan (??????????????????)</span>
          <span class="dial-code col-2 text-right">+7</span>
          <span class="example-number sr-only">8 (771) 000 9998</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">KE</span>
          <span class="country-name truncate col-9">Kenya</span>
          <span class="dial-code col-2 text-right">+254</span>
          <span class="example-number sr-only">0712 123456</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">KI</span>
          <span class="country-name truncate col-9">Kiribati</span>
          <span class="dial-code col-2 text-right">+686</span>
          <span class="example-number sr-only">72012345</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">XK</span>
          <span class="country-name truncate col-9">Kosovo</span>
          <span class="dial-code col-2 text-right">+383</span>
          <span class="example-number sr-only"></span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">KW</span>
          <span class="country-name truncate col-9">Kuwait (?????????????????????)</span>
          <span class="dial-code col-2 text-right">+965</span>
          <span class="example-number sr-only">500 12345</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">KG</span>
          <span class="country-name truncate col-9">Kyrgyzstan (????????????????????)</span>
          <span class="dial-code col-2 text-right">+996</span>
          <span class="example-number sr-only">0700 123 456</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">LA</span>
          <span class="country-name truncate col-9">Laos (?????????)</span>
          <span class="dial-code col-2 text-right">+856</span>
          <span class="example-number sr-only">020 23 123 456</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">LV</span>
          <span class="country-name truncate col-9">Latvia (Latvija)</span>
          <span class="dial-code col-2 text-right">+371</span>
          <span class="example-number sr-only">21 234 567</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">LB</span>
          <span class="country-name truncate col-9">Lebanon (???????????????????)</span>
          <span class="dial-code col-2 text-right">+961</span>
          <span class="example-number sr-only">71 123 456</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">LS</span>
          <span class="country-name truncate col-9">Lesotho</span>
          <span class="dial-code col-2 text-right">+266</span>
          <span class="example-number sr-only">5012 3456</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">LR</span>
          <span class="country-name truncate col-9">Liberia</span>
          <span class="dial-code col-2 text-right">+231</span>
          <span class="example-number sr-only">0770 123 456</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">LY</span>
          <span class="country-name truncate col-9">Libya (???????????????????)</span>
          <span class="dial-code col-2 text-right">+218</span>
          <span class="example-number sr-only">091-2345678</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">LI</span>
          <span class="country-name truncate col-9">Liechtenstein</span>
          <span class="dial-code col-2 text-right">+423</span>
          <span class="example-number sr-only">660 234 567</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">LT</span>
          <span class="country-name truncate col-9">Lithuania (Lietuva)</span>
          <span class="dial-code col-2 text-right">+370</span>
          <span class="example-number sr-only">(8-612) 34567</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">LU</span>
          <span class="country-name truncate col-9">Luxembourg</span>
          <span class="dial-code col-2 text-right">+352</span>
          <span class="example-number sr-only">628 123 456</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">MO</span>
          <span class="country-name truncate col-9">Macau (??????)</span>
          <span class="dial-code col-2 text-right">+853</span>
          <span class="example-number sr-only">6612 3456</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">MK</span>
          <span class="country-name truncate col-9">Macedonia (FYROM) (????????????????????)</span>
          <span class="dial-code col-2 text-right">+389</span>
          <span class="example-number sr-only">072 345 678</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">MG</span>
          <span class="country-name truncate col-9">Madagascar (Madagasikara)</span>
          <span class="dial-code col-2 text-right">+261</span>
          <span class="example-number sr-only">032 12 345 67</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">MW</span>
          <span class="country-name truncate col-9">Malawi</span>
          <span class="dial-code col-2 text-right">+265</span>
          <span class="example-number sr-only">0991 23 45 67</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">MY</span>
          <span class="country-name truncate col-9">Malaysia</span>
          <span class="dial-code col-2 text-right">+60</span>
          <span class="example-number hidden" 012-345-6789></span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">MV</span>
          <span class="country-name truncate col-9">Maldives</span>
          <span class="dial-code col-2 text-right">+960</span>
          <span class="example-number sr-only">771-2345</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">ML</span>
          <span class="country-name truncate col-9">Mali</span>
          <span class="dial-code col-2 text-right">+223</span>
          <span class="example-number sr-only">65 01 23 45</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">MT</span>
          <span class="country-name truncate col-9">Malta</span>
          <span class="dial-code col-2 text-right">+356</span>
          <span class="example-number sr-only">9696 1234</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">MH</span>
          <span class="country-name truncate col-9">Marshall Islands</span>
          <span class="dial-code col-2 text-right">+692</span>
          <span class="example-number sr-only">235-1234</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">MQ</span>
          <span class="country-name truncate col-9">Martinique</span>
          <span class="dial-code col-2 text-right">+596</span>
          <span class="example-number sr-only">0696 20 12 34</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">MR</span>
          <span class="country-name truncate col-9">Mauritania (???????????????????????????)</span>
          <span class="dial-code col-2 text-right">+222</span>
          <span class="example-number sr-only">22 12 34 56</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">MU</span>
          <span class="country-name truncate col-9">Mauritius (Moris)</span>
          <span class="dial-code col-2 text-right">+230</span>
          <span class="example-number sr-only">5251 2345</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">YT</span>
          <span class="country-name truncate col-9">Mayotte</span>
          <span class="dial-code col-2 text-right">+262</span>
          <span class="example-number sr-only">0639 12 34 56</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">MX</span>
          <span class="country-name truncate col-9">Mexico (M??xico)</span>
          <span class="dial-code col-2 text-right">+52</span>
          <span class="example-number sr-only">044 22 123 4567</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">FM</span>
          <span class="country-name truncate col-9">Micronesia</span>
          <span class="dial-code col-2 text-right">+691</span>
          <span class="example-number sr-only">350 1234</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">MD</span>
          <span class="country-name truncate col-9">Moldova (Republica Moldova)</span>
          <span class="dial-code col-2 text-right">+373</span>
          <span class="example-number sr-only">0621 12 345</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">MC</span>
          <span class="country-name truncate col-9">Monaco</span>
          <span class="dial-code col-2 text-right">+377</span>
          <span class="example-number sr-only">06 12 34 56 78</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">MN</span>
          <span class="country-name truncate col-9">Mongolia (????????????)</span>
          <span class="dial-code col-2 text-right">+976</span>
          <span class="example-number sr-only">8812 3456</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">ME</span>
          <span class="country-name truncate col-9">Montenegro (Crna Gora)</span>
          <span class="dial-code col-2 text-right">+382</span>
          <span class="example-number sr-only">067 622 901</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">MS</span>
          <span class="country-name truncate col-9">Montserrat</span>
          <span class="dial-code col-2 text-right">+1664</span>
          <span class="example-number sr-only">(664) 492-3456</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">MA</span>
          <span class="country-name truncate col-9">Morocco (?????????????????????)</span>
          <span class="dial-code col-2 text-right">+212</span>
          <span class="example-number sr-only">0650-123456</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">MZ</span>
          <span class="country-name truncate col-9">Mozambique (Mo??ambique)</span>
          <span class="dial-code col-2 text-right">+258</span>
          <span class="example-number sr-only">82 123 4567</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">MM</span>
          <span class="country-name truncate col-9">Myanmar (Burma) (??????????????????)</span>
          <span class="dial-code col-2 text-right">+95</span>
          <span class="example-number sr-only">09 212 3456</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">NA</span>
          <span class="country-name truncate col-9">Namibia (Namibi??)</span>
          <span class="dial-code col-2 text-right">+264</span>
          <span class="example-number sr-only">081 123 4567</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">NR</span>
          <span class="country-name truncate col-9">Nauru</span>
          <span class="dial-code col-2 text-right">+674</span>
          <span class="example-number sr-only">555 1234</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">NP</span>
          <span class="country-name truncate col-9">Nepal (???????????????)</span>
          <span class="dial-code col-2 text-right">+977</span>
          <span class="example-number sr-only">984-1234567</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">NL</span>
          <span class="country-name truncate col-9">Netherlands (Nederland)</span>
          <span class="dial-code col-2 text-right">+31</span>
          <span class="example-number sr-only">06 12345678</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">NC</span>
          <span class="country-name truncate col-9">New Caledonia (Nouvelle-Cal??donie)</span>
          <span class="dial-code col-2 text-right">+687</span>
          <span class="example-number sr-only">75.12.34</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">NZ</span>
          <span class="country-name truncate col-9">New Zealand</span>
          <span class="dial-code col-2 text-right">+64</span>
          <span class="example-number sr-only">021 123 4567</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">NI</span>
          <span class="country-name truncate col-9">Nicaragua</span>
          <span class="dial-code col-2 text-right">+505</span>
          <span class="example-number sr-only">8123 4567</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">NE</span>
          <span class="country-name truncate col-9">Niger (Nijar)</span>
          <span class="dial-code col-2 text-right">+227</span>
          <span class="example-number sr-only">93 12 34 56</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">NG</span>
          <span class="country-name truncate col-9">Nigeria</span>
          <span class="dial-code col-2 text-right">+234</span>
          <span class="example-number sr-only">0802 123 4567</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">NU</span>
          <span class="country-name truncate col-9">Niue</span>
          <span class="dial-code col-2 text-right">+683</span>
          <span class="example-number sr-only">1234</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">NF</span>
          <span class="country-name truncate col-9">Norfolk Island</span>
          <span class="dial-code col-2 text-right">+672</span>
          <span class="example-number sr-only">3 81234</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">MP</span>
          <span class="country-name truncate col-9">Northern Mariana Islands</span>
          <span class="dial-code col-2 text-right">+1670</span>
          <span class="example-number sr-only">(670) 234-5678</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">KP</span>
          <span class="country-name truncate col-9">North Korea (?????? ???????????? ?????? ?????????)</span>
          <span class="dial-code col-2 text-right">+850</span>
          <span class="example-number sr-only">0192 123 4567</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">NO</span>
          <span class="country-name truncate col-9">Norway (Norge)</span>
          <span class="dial-code col-2 text-right">+47</span>
          <span class="example-number sr-only">406 12 345</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">OM</span>
          <span class="country-name truncate col-9">Oman (???????????????????)</span>
          <span class="dial-code col-2 text-right">+968</span>
          <span class="example-number sr-only">9212 3456</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">PK</span>
          <span class="country-name truncate col-9">Pakistan (???????????????????????)</span>
          <span class="dial-code col-2 text-right">+92</span>
          <span class="example-number sr-only">0301 2345678</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">PW</span>
          <span class="country-name truncate col-9">Palau</span>
          <span class="dial-code col-2 text-right">+680</span>
          <span class="example-number sr-only">620 1234</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">PS</span>
          <span class="country-name truncate col-9">Palestinian Territories (?????????????????????)</span>
          <span class="dial-code col-2 text-right">+970</span>
          <span class="example-number sr-only">0599 123 456</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">PA</span>
          <span class="country-name truncate col-9">Panama (Panam??)</span>
          <span class="dial-code col-2 text-right">+507</span>
          <span class="example-number sr-only">6001-2345</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">PG</span>
          <span class="country-name truncate col-9">Papua New Guinea</span>
          <span class="dial-code col-2 text-right">+675</span>
          <span class="example-number sr-only">681 2345</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">PY</span>
          <span class="country-name truncate col-9">Paraguay</span>
          <span class="dial-code col-2 text-right">+595</span>
          <span class="example-number sr-only">0961 456789</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">PE</span>
          <span class="country-name truncate col-9">Peru (Per??)</span>
          <span class="dial-code col-2 text-right">+51</span>
          <span class="example-number sr-only">912 345 678</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">PH</span>
          <span class="country-name truncate col-9">Philippines</span>
          <span class="dial-code col-2 text-right">+63</span>
          <span class="example-number sr-only">0905 123 4567</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">PN</span>
          <span class="country-name truncate col-9">Pitcairn Islands</span>
          <span class="dial-code col-2 text-right">+672</span>
          <span class="example-number sr-only">0412 345 678</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">PL</span>
          <span class="country-name truncate col-9">Poland (Polska)</span>
          <span class="dial-code col-2 text-right">+48</span>
          <span class="example-number sr-only">512 345 678</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">PT</span>
          <span class="country-name truncate col-9">Portugal</span>
          <span class="dial-code col-2 text-right">+351</span>
          <span class="example-number sr-only">912 345 678</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">PR</span>
          <span class="country-name truncate col-9">Puerto Rico</span>
          <span class="dial-code col-2 text-right">+1</span>
          <span class="example-number sr-only">(787) 234-5678</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">QA</span>
          <span class="country-name truncate col-9">Qatar (???????????????)</span>
          <span class="dial-code col-2 text-right">+974</span>
          <span class="example-number sr-only">3312 3456</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">RE</span>
          <span class="country-name truncate col-9">R??union (La R??union)</span>
          <span class="dial-code col-2 text-right">+262</span>
          <span class="example-number sr-only">0692 12 34 56</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">RO</span>
          <span class="country-name truncate col-9">Romania (Rom??nia)</span>
          <span class="dial-code col-2 text-right">+40</span>
          <span class="example-number sr-only">0712 345 678</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">RU</span>
          <span class="country-name truncate col-9">Russia (????????????)</span>
          <span class="dial-code col-2 text-right">+7</span>
          <span class="example-number sr-only">8 (912) 345-67-89</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">RW</span>
          <span class="country-name truncate col-9">Rwanda</span>
          <span class="dial-code col-2 text-right">+250</span>
          <span class="example-number sr-only">0720 123 456</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">WS</span>
          <span class="country-name truncate col-9">Samoa</span>
          <span class="dial-code col-2 text-right">+685</span>
          <span class="example-number sr-only">601234</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">SM</span>
          <span class="country-name truncate col-9">San Marino</span>
          <span class="dial-code col-2 text-right">+378</span>
          <span class="example-number sr-only">66 66 12 12</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">ST</span>
          <span class="country-name truncate col-9">S??o Tom?? &amp; Pr??ncipe (S??o Tom?? e Pr??ncipe)</span>
          <span class="dial-code col-2 text-right">+239</span>
          <span class="example-number sr-only">981 2345</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">SA</span>
          <span class="country-name truncate col-9">Saudi Arabia (????????????????? ?????????????? ??????????????????????)</span>
          <span class="dial-code col-2 text-right">+966</span>
          <span class="example-number sr-only">051 234 5678</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">SN</span>
          <span class="country-name truncate col-9">Senegal (S??n??gal)</span>
          <span class="dial-code col-2 text-right">+221</span>
          <span class="example-number sr-only">70 123 45 67</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">RS</span>
          <span class="country-name truncate col-9">Serbia (????????????)</span>
          <span class="dial-code col-2 text-right">+381</span>
          <span class="example-number sr-only">060 1234567</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">SC</span>
          <span class="country-name truncate col-9">Seychelles</span>
          <span class="dial-code col-2 text-right">+248</span>
          <span class="example-number sr-only">2 510 123</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">SL</span>
          <span class="country-name truncate col-9">Sierra Leone</span>
          <span class="dial-code col-2 text-right">+232</span>
          <span class="example-number sr-only">(025) 123456</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">SG</span>
          <span class="country-name truncate col-9">Singapore</span>
          <span class="dial-code col-2 text-right">+65</span>
          <span class="example-number sr-only">8123 4567</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">SX</span>
          <span class="country-name truncate col-9">Sint Maarten</span>
          <span class="dial-code col-2 text-right">+1721</span>
          <span class="example-number sr-only">(721) 520-5678</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">SK</span>
          <span class="country-name truncate col-9">Slovakia (Slovensko)</span>
          <span class="dial-code col-2 text-right">+421</span>
          <span class="example-number sr-only">0912 123 456</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">SI</span>
          <span class="country-name truncate col-9">Slovenia (Slovenija)</span>
          <span class="dial-code col-2 text-right">+386</span>
          <span class="example-number sr-only">031 234 567</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">SB</span>
          <span class="country-name truncate col-9">Solomon Islands</span>
          <span class="dial-code col-2 text-right">+677</span>
          <span class="example-number sr-only">74 21234</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">SO</span>
          <span class="country-name truncate col-9">Somalia (Soomaaliya)</span>
          <span class="dial-code col-2 text-right">+252</span>
          <span class="example-number sr-only">7 1123456</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">ZA</span>
          <span class="country-name truncate col-9">South Africa</span>
          <span class="dial-code col-2 text-right">+27</span>
          <span class="example-number sr-only">071 123 4567</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">KR</span>
          <span class="country-name truncate col-9">South Korea (????????????)</span>
          <span class="dial-code col-2 text-right">+82</span>
          <span class="example-number sr-only">010-0000-0000</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">SS</span>
          <span class="country-name truncate col-9">South Sudan (??????????? ????????????????????)</span>
          <span class="dial-code col-2 text-right">+211</span>
          <span class="example-number sr-only">0977 123 456</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">ES</span>
          <span class="country-name truncate col-9">Spain (Espa??a)</span>
          <span class="dial-code col-2 text-right">+34</span>
          <span class="example-number sr-only">612 34 56 78</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">LK</span>
          <span class="country-name truncate col-9">Sri Lanka (??????????????? ???????????????)</span>
          <span class="dial-code col-2 text-right">+94</span>
          <span class="example-number sr-only">071 234 5678</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">BL</span>
          <span class="country-name truncate col-9">St. Barth??lemy (Saint-Barth??lemy)</span>
          <span class="dial-code col-2 text-right">+590</span>
          <span class="example-number sr-only">0690 30-1234</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">SH</span>
          <span class="country-name truncate col-9">St. Helena</span>
          <span class="dial-code col-2 text-right">+290</span>
          <span class="example-number sr-only">2 1234</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">KN</span>
          <span class="country-name truncate col-9">St. Kitts &amp; Nevis</span>
          <span class="dial-code col-2 text-right">+1869</span>
          <span class="example-number sr-only">(869) 765-2917</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">LC</span>
          <span class="country-name truncate col-9">St. Lucia</span>
          <span class="dial-code col-2 text-right">+1758</span>
          <span class="example-number sr-only">(758) 284-5678</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">MF</span>
          <span class="country-name truncate col-9">St. Martin (Saint-Martin (partie fran??aise))</span>
          <span class="dial-code col-2 text-right">+590</span>
          <span class="example-number sr-only">0690 30-1234</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">PM</span>
          <span class="country-name truncate col-9">St. Pierre &amp; Miquelon (Saint-Pierre-et-Miquelon)</span>
          <span class="dial-code col-2 text-right">+508</span>
          <span class="example-number sr-only">055 12 34</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">VC</span>
          <span class="country-name truncate col-9">St. Vincent &amp; the Grenadines</span>
          <span class="dial-code col-2 text-right">+1784</span>
          <span class="example-number sr-only">(784) 430-1234</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">SD</span>
          <span class="country-name truncate col-9">Sudan (???????????????????????)</span>
          <span class="dial-code col-2 text-right">+249</span>
          <span class="example-number sr-only">091 123 1234</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">SR</span>
          <span class="country-name truncate col-9">Suriname</span>
          <span class="dial-code col-2 text-right">+597</span>
          <span class="example-number sr-only">741-2345</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">SJ</span>
          <span class="country-name truncate col-9">Svalbard &amp; Jan Mayen</span>
          <span class="dial-code col-2 text-right">+47</span>
          <span class="example-number sr-only">412 34 567</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">SZ</span>
          <span class="country-name truncate col-9">Swaziland</span>
          <span class="dial-code col-2 text-right">+268</span>
          <span class="example-number sr-only">7612 3456</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">SE</span>
          <span class="country-name truncate col-9">Sweden (Sverige)</span>
          <span class="dial-code col-2 text-right">+46</span>
          <span class="example-number sr-only">070-123 45 67</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">CH</span>
          <span class="country-name truncate col-9">Switzerland (Schweiz)</span>
          <span class="dial-code col-2 text-right">+41</span>
          <span class="example-number sr-only">078 123 45 67</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">SY</span>
          <span class="country-name truncate col-9">Syria (???????????????????)</span>
          <span class="dial-code col-2 text-right">+963</span>
          <span class="example-number sr-only">0944 567 890</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">TW</span>
          <span class="country-name truncate col-9">Taiwan (??????)</span>
          <span class="dial-code col-2 text-right">+886</span>
          <span class="example-number sr-only">0912 345 678</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">TJ</span>
          <span class="country-name truncate col-9">Tajikistan</span>
          <span class="dial-code col-2 text-right">+992</span>
          <span class="example-number sr-only">(8) 917 12 3456</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">TZ</span>
          <span class="country-name truncate col-9">Tanzania</span>
          <span class="dial-code col-2 text-right">+255</span>
          <span class="example-number sr-only">0621 234 567</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">TH</span>
          <span class="country-name truncate col-9">Thailand (?????????)</span>
          <span class="dial-code col-2 text-right">+66</span>
          <span class="example-number sr-only">081 234 5678</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">TL</span>
          <span class="country-name truncate col-9">Timor-Leste</span>
          <span class="dial-code col-2 text-right">+670</span>
          <span class="example-number sr-only">7721 2345</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">TG</span>
          <span class="country-name truncate col-9">Togo</span>
          <span class="dial-code col-2 text-right">+228</span>
          <span class="example-number sr-only">90 11 23 45</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">TK</span>
          <span class="country-name truncate col-9">Tokelau</span>
          <span class="dial-code col-2 text-right">+690</span>
          <span class="example-number sr-only">7290</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">TO</span>
          <span class="country-name truncate col-9">Tonga</span>
          <span class="dial-code col-2 text-right">+676</span>
          <span class="example-number sr-only">771 5123</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">TT</span>
          <span class="country-name truncate col-9">Trinidad &amp; Tobago</span>
          <span class="dial-code col-2 text-right">+1868</span>
          <span class="example-number sr-only">(868) 291-1234</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">TN</span>
          <span class="country-name truncate col-9">Tunisia (?????????????????)</span>
          <span class="dial-code col-2 text-right">+216</span>
          <span class="example-number sr-only">20 123 456</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">TR</span>
          <span class="country-name truncate col-9">Turkey (T??rkiye)</span>
          <span class="dial-code col-2 text-right">+90</span>
          <span class="example-number sr-only">0501 234 5678</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">TM</span>
          <span class="country-name truncate col-9">Turkmenistan</span>
          <span class="dial-code col-2 text-right">+993</span>
          <span class="example-number sr-only">8 66 123456</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">TC</span>
          <span class="country-name truncate col-9">Turks &amp; Caicos Islands</span>
          <span class="dial-code col-2 text-right">+1649</span>
          <span class="example-number sr-only">(649) 213-1234</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">TV</span>
          <span class="country-name truncate col-9">Tuvalu</span>
          <span class="dial-code col-2 text-right">+688</span>
          <span class="example-number sr-only">901234</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">UG</span>
          <span class="country-name truncate col-9">Uganda</span>
          <span class="dial-code col-2 text-right">+256</span>
          <span class="example-number sr-only">0712 345678</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">UA</span>
          <span class="country-name truncate col-9">Ukraine (??????????????)</span>
          <span class="dial-code col-2 text-right">+380</span>
          <span class="example-number sr-only">039 123 4567</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">AE</span>
          <span class="country-name truncate col-9">United Arab Emirates (??????????????????? ?????????????? ????????????????????)</span>
          <span class="dial-code col-2 text-right">+971</span>
          <span class="example-number sr-only">050 123 4567</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">UY</span>
          <span class="country-name truncate col-9">Uruguay</span>
          <span class="dial-code col-2 text-right">+598</span>
          <span class="example-number sr-only">094 231 234</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">UM</span>
          <span class="country-name truncate col-9">U.S. Outlying Islands</span>
          <span class="dial-code col-2 text-right">+1</span>
          <span class="example-number sr-only">(201) 555-0123</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">VI</span>
          <span class="country-name truncate col-9">U.S. Virgin Islands</span>
          <span class="dial-code col-2 text-right">+1340</span>
          <span class="example-number sr-only">(340) 642-1234</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">UZ</span>
          <span class="country-name truncate col-9">Uzbekistan (O??zbekiston)</span>
          <span class="dial-code col-2 text-right">+998</span>
          <span class="example-number sr-only">8 91 234 56 78</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">VU</span>
          <span class="country-name truncate col-9">Vanuatu</span>
          <span class="dial-code col-2 text-right">+678</span>
          <span class="example-number sr-only">591 2345</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">VA</span>
          <span class="country-name truncate col-9">Vatican City (Citt?? del Vaticano)</span>
          <span class="dial-code col-2 text-right">+39</span>
          <span class="example-number sr-only">312 345 6789</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">VE</span>
          <span class="country-name truncate col-9">Venezuela</span>
          <span class="dial-code col-2 text-right">+58</span>
          <span class="example-number sr-only">0412-1234567</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">VN</span>
          <span class="country-name truncate col-9">Vietnam (Vi???t Nam)</span>
          <span class="dial-code col-2 text-right">+84</span>
          <span class="example-number sr-only">091 234 56 78</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">WF</span>
          <span class="country-name truncate col-9">Wallis &amp; Futuna</span>
          <span class="dial-code col-2 text-right">+681</span>
          <span class="example-number sr-only">50 12 34</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">EH</span>
          <span class="country-name truncate col-9">Western Sahara (????????????????? ????????????????????)</span>
          <span class="dial-code col-2 text-right">+212</span>
          <span class="example-number sr-only">0650-123456</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">YE</span>
          <span class="country-name truncate col-9">Yemen (???????????????????)</span>
          <span class="dial-code col-2 text-right">+967</span>
          <span class="example-number sr-only">0712 345 678</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">ZM</span>
          <span class="country-name truncate col-9">Zambia</span>
          <span class="dial-code col-2 text-right">+260</span>
          <span class="example-number sr-only">095 5123456</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="flag-emoji col-1">????????</span>
          <span class="country-code sr-only">ZW</span>
          <span class="country-name truncate col-9">Zimbabwe</span>
          <span class="dial-code col-2 text-right">+263</span>
          <span class="example-number sr-only">071 123 4567</span>
        </a>
      </li>
    </ul>
  </div>
  <span class="input-group-addon">US</span>
  <input type="text" class="form-control" placeholder="(555) 123-4567">
</div> -->

                            <div class=" col-12 col-lg-6 col-md-6 col-xl-6 col-sm-12">
                                <div class="form-group">
                                    <label>Location</label>
                                    <select id="country" name="country" type="text" class="form-control" placeholder="Select Country">
                                        <option>Select Location</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AX">Aland Islands</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AS">American Samoa</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Antarctica</option>
                                        <option value="AG">Antigua and Barbuda</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaijan</option>
                                        <option value="BS">Bahamas</option>
                                        <option value="BH">Bahrain</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BY">Belarus</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BZ">Belize</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BM">Bermuda</option>
                                        <option value="BT">Bhutan</option>
                                        <option value="BO">Bolivia</option>
                                        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                        <option value="BA">Bosnia and Herzegovina</option>
                                        <option value="BW">Botswana</option>
                                        <option value="BV">Bouvet Island</option>
                                        <option value="BR">Brazil</option>
                                        <option value="IO">British Indian Ocean Territory</option>
                                        <option value="BN">Brunei Darussalam</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="BI">Burundi</option>
                                        <option value="KH">Cambodia</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CA">Canada</option>
                                        <option value="CV">Cape Verde</option>
                                        <option value="KY">Cayman Islands</option>
                                        <option value="CF">Central African Republic</option>
                                        <option value="TD">Chad</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CX">Christmas Island</option>
                                        <option value="CC">Cocos (Keeling) Islands</option>
                                        <option value="CO">Colombia</option>
                                        <option value="KM">Comoros</option>
                                        <option value="CG">Congo</option>
                                        <option value="CD">Congo, Democratic Republic of the Congo</option>
                                        <option value="CK">Cook Islands</option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="CI">Cote D'Ivoire</option>
                                        <option value="HR">Croatia</option>
                                        <option value="CU">Cuba</option>
                                        <option value="CW">Curacao</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="CZ">Czech Republic</option>
                                        <option value="DK">Denmark</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DM">Dominica</option>
                                        <option value="DO">Dominican Republic</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egypt</option>
                                        <option value="SV">El Salvador</option>
                                        <option value="GQ">Equatorial Guinea</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="EE">Estonia</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FK">Falkland Islands (Malvinas)</option>
                                        <option value="FO">Faroe Islands</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="GF">French Guiana</option>
                                        <option value="PF">French Polynesia</option>
                                        <option value="TF">French Southern Territories</option>
                                        <option value="GA">Gabon</option>
                                        <option value="GM">Gambia</option>
                                        <option value="GE">Georgia</option>
                                        <option value="DE">Germany</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GI">Gibraltar</option>
                                        <option value="GR">Greece</option>
                                        <option value="GL">Greenland</option>
                                        <option value="GD">Grenada</option>
                                        <option value="GP">Guadeloupe</option>
                                        <option value="GU">Guam</option>
                                        <option value="GT">Guatemala</option>
                                        <option value="GG">Guernsey</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GW">Guinea-Bissau</option>
                                        <option value="GY">Guyana</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HM">Heard Island and Mcdonald Islands</option>
                                        <option value="VA">Holy See (Vatican City State)</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HK">Hong Kong</option>
                                        <option value="HU">Hungary</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IR">Iran, Islamic Republic of</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IM">Isle of Man</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italy</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japan</option>
                                        <option value="JE">Jersey</option>
                                        <option value="JO">Jordan</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="KP">Korea, Democratic People's Republic of</option>
                                        <option value="KR">Korea, Republic of</option>
                                        <option value="XK">Kosovo</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="LA">Lao People's Democratic Republic</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LB">Lebanon</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">Libyan Arab Jamahiriya</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MO">Macao</option>
                                        <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="MV">Maldives</option>
                                        <option value="ML">Mali</option>
                                        <option value="MT">Malta</option>
                                        <option value="MH">Marshall Islands</option>
                                        <option value="MQ">Martinique</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="MU">Mauritius</option>
                                        <option value="YT">Mayotte</option>
                                        <option value="MX">Mexico</option>
                                        <option value="FM">Micronesia, Federated States of</option>
                                        <option value="MD">Moldova, Republic of</option>
                                        <option value="MC">Monaco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="ME">Montenegro</option>
                                        <option value="MS">Montserrat</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="MM">Myanmar</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NR">Nauru</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NL">Netherlands</option>
                                        <option value="AN">Netherlands Antilles</option>
                                        <option value="NC">New Caledonia</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="NI">Nicaragua</option>
                                        <option value="NE">Niger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NU">Niue</option>
                                        <option value="NF">Norfolk Island</option>
                                        <option value="MP">Northern Mariana Islands</option>
                                        <option value="NO">Norway</option>
                                        <option value="OM">Oman</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PW">Palau</option>
                                        <option value="PS">Palestinian Territory, Occupied</option>
                                        <option value="PA">Panama</option>
                                        <option value="PG">Papua New Guinea</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Peru</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PN">Pitcairn</option>
                                        <option value="PL">Poland</option>
                                        <option value="PT">Portugal</option>
                                        <option value="PR">Puerto Rico</option>
                                        <option value="QA">Qatar</option>
                                        <option value="RE">Reunion</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russian Federation</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="BL">Saint Barthelemy</option>
                                        <option value="SH">Saint Helena</option>
                                        <option value="KN">Saint Kitts and Nevis</option>
                                        <option value="LC">Saint Lucia</option>
                                        <option value="MF">Saint Martin</option>
                                        <option value="PM">Saint Pierre and Miquelon</option>
                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                        <option value="WS">Samoa</option>
                                        <option value="SM">San Marino</option>
                                        <option value="ST">Sao Tome and Principe</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SN">Senegal</option>
                                        <option value="RS">Serbia</option>
                                        <option value="CS">Serbia and Montenegro</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leone</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SX">Sint Maarten</option>
                                        <option value="SK">Slovakia</option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="SO">Somalia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                                        <option value="SS">South Sudan</option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="SD">Sudan</option>
                                        <option value="SR">Suriname</option>
                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                        <option value="SZ">Swaziland</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="SY">Syrian Arab Republic</option>
                                        <option value="TW">Taiwan, Province of China</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TZ">Tanzania, United Republic of</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TL">Timor-Leste</option>
                                        <option value="TG">Togo</option>
                                        <option value="TK">Tokelau</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TT">Trinidad and Tobago</option>
                                        <option value="TN">Tunisia</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TM">Turkmenistan</option>
                                        <option value="TC">Turks and Caicos Islands</option>
                                        <option value="TV">Tuvalu</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="AE">United Arab Emirates</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="US">United States</option>
                                        <option value="UM">United States Minor Outlying Islands</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VE">Venezuela</option>
                                        <option value="VN">Viet Nam</option>
                                        <option value="VG">Virgin Islands, British</option>
                                        <option value="VI">Virgin Islands, U.s.</option>
                                        <option value="WF">Wallis and Futuna</option>
                                        <option value="EH">Western Sahara</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                    </select>
                                </div>
                            </div>

                            

                            <div class="col-12 col-lg-6 col-md-6 col-xl-6 col-sm-12">
                                <div class="form-group">
                                    <label>Email</label>

                                    <input type="email" id="clientEmail" class="form-control" name="mail" placeholder="Email">
                                </div>
                            </div>


                            <div class="col-12 col-lg-6 col-md-6 col-xl-6 col-sm-12">
                                <div class="form-group">
                                    <label>Company</label>

                                    <input type="text" id="company" class="form-control" name="name" placeholder="Company's name">
                                </div>
                            </div>

                            

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Request</label>

                                    <textarea class="form-control" id="request" type="text" cols="30" rows="5" name="name" placeholder="Commodity Description in MT"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    
                                    <label for="img">Select Document:</span>
                                        <input type="file" id="proposal" name="proposal" required="true" accept=".doc,.docx,application/msword,.pdf">

                                </div>
                            </div>
                           

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn" id="contact-btn">Send Message</button>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- End Contact Area -->

        <?php require_once "footer.php"; ?>
        <script src="<?php echo $urlLink; ?>/scripts/js/commodity_buyForm.js"></script>
        
        


       
  