@extends('layouts.default')

@section('title')
    Checkout
@endsection

@section('body-class')
    class="page-template-default page page-id-739 logged-in wp-embed-responsive theme-zonar woocommerce-checkout
    woocommerce-page woocommerce-no-js wpb-js-composer js-comp-ver-6.10.0 vc_responsive"
@endsection

@section('content-web')
    <!-- content-->
    <div class="content" data-pagetitle="Checkout">
        <!-- hero-section-dec-->
        <div class="hero-section-dec color-bg">
            <div class="progress-indicator">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 -1 34 34">
                    <circle cx="16" cy="16" r="15.9155" class="progress-bar__background"></circle>
                    <circle cx="16" cy="16" r="15.9155"
                        class="progress-bar__progress 
                                    js-progress-bar"
                        style="stroke-dashoffset: 100px;"></circle>
                </svg>
            </div>
        </div>
        <!-- hero-section-dec end-->
        <!--fixed-column-wrap-->
        <div class="fixed-column-wrap">
            <div class="pr-bg"></div>
            <!--fixed-column-wrap-content-->
            <div class="fixed-column-wrap-content">
                <div class="bg" data-bg="https://hugostore.id/wp-content/uploads/2020/11/15-1.jpg"
                    style="background-image: url(&quot;https://hugostore.id/wp-content/uploads/2020/11/15-1.jpg&quot;);">
                </div>
                <div class="overlay"></div>
                <div class="progress-bar-wrap bot-element">
                    <div class="progress-bar"></div>
                </div>
                <!--fixed-column-wrap_title-->
                <div class="fixed-column-wrap_title first-tile_load">
                    <h2>Checkout</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus
                        lobortis pulvinar. </p>
                </div>
                <!--fixed-column-wrap_title end-->
                <div class="fixed-column-dec"></div>
                <div class="fixed-column-linedec"></div>
                <div class="scroll-notifer">Scroll Down </div>
            </div>
            <!--fixed-column-wrap-content end-->
        </div>
        <!--fixed-column-wrap end-->
        <!--column-wrap-->
        <div class="column-wrap">
            <!--column-wrap-container -->
            <div class="column-wrap-container fl-wrap">

                <div class="col-wc_dec"></div>
                <div class="container  wr-default-page">
                    <div class="woocommerce">
                        <div class="woocommerce-notices-wrapper"></div>
                        <div class="woocommerce-form-coupon-toggle">

                            <div class="woocommerce-info">
                                Have a coupon? <a href="https://hugostore.id/checkout/#" class="showcoupon">Click here to
                                    enter your code</a> </div>
                        </div>

                        <form class="checkout_coupon woocommerce-form-coupon" method="post" style="display:none">

                            <p>If you have a coupon code, please apply it below.</p>

                            <p class="form-row form-row-first">
                                <label for="coupon_code" class="screen-reader-text">Coupon:</label>
                                <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code"
                                    id="coupon_code" value="">
                            </p>

                            <p class="form-row form-row-last">
                                <button type="submit" class="button wp-element-button" name="apply_coupon"
                                    value="Apply coupon">Apply coupon</button>
                            </p>

                            <div class="clear"></div>
                        </form>
                        <div class="woocommerce-notices-wrapper"></div>
                        <form name="checkout" method="post" class="checkout woocommerce-checkout"
                            action="https://hugostore.id/checkout/" enctype="multipart/form-data" novalidate="novalidate">



                            <div class="col2-set" id="customer_details">
                                <div class="col-1">
                                    <div class="woocommerce-billing-fields">

                                        <h3>Billing details</h3>



                                        <div class="woocommerce-billing-fields__field-wrapper">
                                            <p class="form-row form-row-first validate-required"
                                                id="billing_first_name_field" data-priority="10"><label
                                                    for="billing_first_name" class="">First name&nbsp;<abbr
                                                        class="required" title="required">*</abbr></label><span
                                                    class="woocommerce-input-wrapper"><input type="text"
                                                        class="input-text " name="billing_first_name"
                                                        id="billing_first_name" placeholder="" value="Andhika"
                                                        autocomplete="given-name"></span></p>
                                            <p class="form-row form-row-last validate-required" id="billing_last_name_field"
                                                data-priority="20"><label for="billing_last_name" class="">Last
                                                    name&nbsp;<abbr class="required" title="required">*</abbr></label><span
                                                    class="woocommerce-input-wrapper"><input type="text"
                                                        class="input-text " name="billing_last_name" id="billing_last_name"
                                                        placeholder="" value="Satriawan" autocomplete="family-name"></span>
                                            </p>
                                            <p class="form-row form-row-wide" id="billing_company_field"
                                                data-priority="30"><label for="billing_company" class="">Company
                                                    name&nbsp;<span class="optional">(optional)</span></label><span
                                                    class="woocommerce-input-wrapper"><input type="text"
                                                        class="input-text " name="billing_company" id="billing_company"
                                                        placeholder="" value="" autocomplete="organization"></span>
                                            </p>
                                            <p class="form-row form-row-wide address-field update_totals_on_change validate-required"
                                                id="billing_country_field" data-priority="40"><label
                                                    for="billing_country" class="">Country / Region&nbsp;<abbr
                                                        class="required" title="required">*</abbr></label><span
                                                    class="woocommerce-input-wrapper"><select name="billing_country"
                                                        id="billing_country"
                                                        class="country_to_state country_select select2-hidden-accessible"
                                                        autocomplete="country"
                                                        data-placeholder="Select a country / region…"
                                                        data-label="Country / Region" tabindex="-1" aria-hidden="true">
                                                        <option value="">Select a country / region…</option>
                                                        <option value="AF">Afghanistan</option>
                                                        <option value="AX">Åland Islands</option>
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
                                                        <option value="PW">Belau</option>
                                                        <option value="BE">Belgium</option>
                                                        <option value="BZ">Belize</option>
                                                        <option value="BJ">Benin</option>
                                                        <option value="BM">Bermuda</option>
                                                        <option value="BT">Bhutan</option>
                                                        <option value="BO">Bolivia</option>
                                                        <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                                        <option value="BA">Bosnia and Herzegovina</option>
                                                        <option value="BW">Botswana</option>
                                                        <option value="BV">Bouvet Island</option>
                                                        <option value="BR">Brazil</option>
                                                        <option value="IO">British Indian Ocean Territory</option>
                                                        <option value="BN">Brunei</option>
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
                                                        <option value="CG">Congo (Brazzaville)</option>
                                                        <option value="CD">Congo (Kinshasa)</option>
                                                        <option value="CK">Cook Islands</option>
                                                        <option value="CR">Costa Rica</option>
                                                        <option value="HR">Croatia</option>
                                                        <option value="CU">Cuba</option>
                                                        <option value="CW">Curaçao</option>
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
                                                        <option value="SZ">Eswatini</option>
                                                        <option value="ET">Ethiopia</option>
                                                        <option value="FK">Falkland Islands</option>
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
                                                        <option value="HM">Heard Island and McDonald Islands</option>
                                                        <option value="HN">Honduras</option>
                                                        <option value="HK">Hong Kong</option>
                                                        <option value="HU">Hungary</option>
                                                        <option value="IS">Iceland</option>
                                                        <option value="IN">India</option>
                                                        <option value="ID" selected="selected">Indonesia</option>
                                                        <option value="IR">Iran</option>
                                                        <option value="IQ">Iraq</option>
                                                        <option value="IE">Ireland</option>
                                                        <option value="IM">Isle of Man</option>
                                                        <option value="IL">Israel</option>
                                                        <option value="IT">Italy</option>
                                                        <option value="CI">Ivory Coast</option>
                                                        <option value="JM">Jamaica</option>
                                                        <option value="JP">Japan</option>
                                                        <option value="JE">Jersey</option>
                                                        <option value="JO">Jordan</option>
                                                        <option value="KZ">Kazakhstan</option>
                                                        <option value="KE">Kenya</option>
                                                        <option value="KI">Kiribati</option>
                                                        <option value="KW">Kuwait</option>
                                                        <option value="KG">Kyrgyzstan</option>
                                                        <option value="LA">Laos</option>
                                                        <option value="LV">Latvia</option>
                                                        <option value="LB">Lebanon</option>
                                                        <option value="LS">Lesotho</option>
                                                        <option value="LR">Liberia</option>
                                                        <option value="LY">Libya</option>
                                                        <option value="LI">Liechtenstein</option>
                                                        <option value="LT">Lithuania</option>
                                                        <option value="LU">Luxembourg</option>
                                                        <option value="MO">Macao</option>
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
                                                        <option value="FM">Micronesia</option>
                                                        <option value="MD">Moldova</option>
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
                                                        <option value="NC">New Caledonia</option>
                                                        <option value="NZ">New Zealand</option>
                                                        <option value="NI">Nicaragua</option>
                                                        <option value="NE">Niger</option>
                                                        <option value="NG">Nigeria</option>
                                                        <option value="NU">Niue</option>
                                                        <option value="NF">Norfolk Island</option>
                                                        <option value="KP">North Korea</option>
                                                        <option value="MK">North Macedonia</option>
                                                        <option value="MP">Northern Mariana Islands</option>
                                                        <option value="NO">Norway</option>
                                                        <option value="OM">Oman</option>
                                                        <option value="PK">Pakistan</option>
                                                        <option value="PS">Palestinian Territory</option>
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
                                                        <option value="RU">Russia</option>
                                                        <option value="RW">Rwanda</option>
                                                        <option value="ST">São Tomé and Príncipe</option>
                                                        <option value="BL">Saint Barthélemy</option>
                                                        <option value="SH">Saint Helena</option>
                                                        <option value="KN">Saint Kitts and Nevis</option>
                                                        <option value="LC">Saint Lucia</option>
                                                        <option value="SX">Saint Martin (Dutch part)</option>
                                                        <option value="MF">Saint Martin (French part)</option>
                                                        <option value="PM">Saint Pierre and Miquelon</option>
                                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                                        <option value="WS">Samoa</option>
                                                        <option value="SM">San Marino</option>
                                                        <option value="SA">Saudi Arabia</option>
                                                        <option value="SN">Senegal</option>
                                                        <option value="RS">Serbia</option>
                                                        <option value="SC">Seychelles</option>
                                                        <option value="SL">Sierra Leone</option>
                                                        <option value="SG">Singapore</option>
                                                        <option value="SK">Slovakia</option>
                                                        <option value="SI">Slovenia</option>
                                                        <option value="SB">Solomon Islands</option>
                                                        <option value="SO">Somalia</option>
                                                        <option value="ZA">South Africa</option>
                                                        <option value="GS">South Georgia/Sandwich Islands</option>
                                                        <option value="KR">South Korea</option>
                                                        <option value="SS">South Sudan</option>
                                                        <option value="ES">Spain</option>
                                                        <option value="LK">Sri Lanka</option>
                                                        <option value="SD">Sudan</option>
                                                        <option value="SR">Suriname</option>
                                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                                        <option value="SE">Sweden</option>
                                                        <option value="CH">Switzerland</option>
                                                        <option value="SY">Syria</option>
                                                        <option value="TW">Taiwan</option>
                                                        <option value="TJ">Tajikistan</option>
                                                        <option value="TZ">Tanzania</option>
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
                                                        <option value="GB">United Kingdom (UK)</option>
                                                        <option value="US">United States (US)</option>
                                                        <option value="UM">United States (US) Minor Outlying Islands
                                                        </option>
                                                        <option value="UY">Uruguay</option>
                                                        <option value="UZ">Uzbekistan</option>
                                                        <option value="VU">Vanuatu</option>
                                                        <option value="VA">Vatican</option>
                                                        <option value="VE">Venezuela</option>
                                                        <option value="VN">Vietnam</option>
                                                        <option value="VG">Virgin Islands (British)</option>
                                                        <option value="VI">Virgin Islands (US)</option>
                                                        <option value="WF">Wallis and Futuna</option>
                                                        <option value="EH">Western Sahara</option>
                                                        <option value="YE">Yemen</option>
                                                        <option value="ZM">Zambia</option>
                                                        <option value="ZW">Zimbabwe</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--default"
                                                        dir="ltr" style="width: 100%;"><span class="selection"><span
                                                                class="select2-selection select2-selection--single"
                                                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                                aria-label="Country / Region" role="combobox"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-billing_country-container" role="textbox"
                                                                    aria-readonly="true"
                                                                    title="Indonesia">Indonesia</span><span
                                                                    class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper"
                                                            aria-hidden="true"></span></span><noscript><button
                                                            type="submit" name="woocommerce_checkout_update_totals"
                                                            value="Update country / region">Update country /
                                                            region</button></noscript></span></p>
                                            <p class="form-row address-field validate-required form-row-wide"
                                                id="billing_address_1_field" data-priority="50"><label
                                                    for="billing_address_1" class="">Street address&nbsp;<abbr
                                                        class="required" title="required">*</abbr></label><span
                                                    class="woocommerce-input-wrapper"><input type="text"
                                                        class="input-text " name="billing_address_1"
                                                        id="billing_address_1" placeholder="House number and street name"
                                                        value="JL Angkasa 2" autocomplete="address-line1"
                                                        data-placeholder="House number and street name"></span></p>
                                            <p class="form-row address-field form-row-wide" id="billing_address_2_field"
                                                data-priority="60"><label for="billing_address_2"
                                                    class="screen-reader-text">Apartment, suite, unit, etc.&nbsp;<span
                                                        class="optional">(optional)</span></label><span
                                                    class="woocommerce-input-wrapper"><input type="text"
                                                        class="input-text " name="billing_address_2"
                                                        id="billing_address_2"
                                                        placeholder="Apartment, suite, unit, etc. (optional)"
                                                        value="" autocomplete="address-line2"
                                                        data-placeholder="Apartment, suite, unit, etc. (optional)"></span>
                                            </p>
                                            <p class="form-row address-field validate-required form-row-wide"
                                                id="billing_city_field" data-priority="70"
                                                data-o_class="form-row form-row-wide address-field validate-required">
                                                <label for="billing_city" class="">Town / City&nbsp;<abbr
                                                        class="required" title="required">*</abbr></label><span
                                                    class="woocommerce-input-wrapper"><input type="text"
                                                        class="input-text " name="billing_city" id="billing_city"
                                                        placeholder="" value="Bekasi"
                                                        autocomplete="address-level2"></span>
                                            </p>
                                            <p class="form-row address-field validate-required validate-state form-row-wide"
                                                id="billing_state_field" data-priority="80"
                                                data-o_class="form-row form-row-wide address-field validate-required validate-state">
                                                <label for="billing_state" class="">Province&nbsp;<abbr
                                                        class="required" title="required">*</abbr></label><span
                                                    class="woocommerce-input-wrapper"><select name="billing_state"
                                                        id="billing_state" class="state_select select2-hidden-accessible"
                                                        autocomplete="address-level1" data-placeholder="Select an option…"
                                                        data-input-classes="" data-label="Province" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="">Select an option…</option>
                                                        <option value="AC">Daerah Istimewa Aceh</option>
                                                        <option value="SU">Sumatera Utara</option>
                                                        <option value="SB">Sumatera Barat</option>
                                                        <option value="RI">Riau</option>
                                                        <option value="KR">Kepulauan Riau</option>
                                                        <option value="JA">Jambi</option>
                                                        <option value="SS">Sumatera Selatan</option>
                                                        <option value="BB">Bangka Belitung</option>
                                                        <option value="BE">Bengkulu</option>
                                                        <option value="LA">Lampung</option>
                                                        <option value="JK">DKI Jakarta</option>
                                                        <option value="JB">Jawa Barat</option>
                                                        <option value="BT">Banten</option>
                                                        <option value="JT">Jawa Tengah</option>
                                                        <option value="JI">Jawa Timur</option>
                                                        <option value="YO">Daerah Istimewa Yogyakarta</option>
                                                        <option value="BA">Bali</option>
                                                        <option value="NB">Nusa Tenggara Barat</option>
                                                        <option value="NT">Nusa Tenggara Timur</option>
                                                        <option value="KB">Kalimantan Barat</option>
                                                        <option value="KT">Kalimantan Tengah</option>
                                                        <option value="KI">Kalimantan Timur</option>
                                                        <option value="KS">Kalimantan Selatan</option>
                                                        <option value="KU">Kalimantan Utara</option>
                                                        <option value="SA">Sulawesi Utara</option>
                                                        <option value="ST">Sulawesi Tengah</option>
                                                        <option value="SG">Sulawesi Tenggara</option>
                                                        <option value="SR">Sulawesi Barat</option>
                                                        <option value="SN">Sulawesi Selatan</option>
                                                        <option value="GO">Gorontalo</option>
                                                        <option value="MA">Maluku</option>
                                                        <option value="MU">Maluku Utara</option>
                                                        <option value="PA">Papua</option>
                                                        <option value="PB">Papua Barat</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--default"
                                                        dir="ltr" style="width: 100%;"><span class="selection"><span
                                                                class="select2-selection select2-selection--single"
                                                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                                aria-label="Province" role="combobox"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-billing_state-container" role="textbox"
                                                                    aria-readonly="true" title="Jawa Barat">Jawa
                                                                    Barat</span><span class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper"
                                                            aria-hidden="true"></span></span></span>
                                            </p>
                                            <p class="form-row address-field validate-required validate-postcode form-row-wide"
                                                id="billing_postcode_field" data-priority="90"
                                                data-o_class="form-row form-row-wide address-field validate-required validate-postcode">
                                                <label for="billing_postcode" class="">Postcode / ZIP&nbsp;<abbr
                                                        class="required" title="required">*</abbr></label><span
                                                    class="woocommerce-input-wrapper"><input type="text"
                                                        class="input-text " name="billing_postcode" id="billing_postcode"
                                                        placeholder="" value="17144" autocomplete="postal-code"></span>
                                            </p>
                                            <p class="form-row form-row-wide validate-required validate-phone"
                                                id="billing_phone_field" data-priority="100"><label for="billing_phone"
                                                    class="">Phone&nbsp;<abbr class="required"
                                                        title="required">*</abbr></label><span
                                                    class="woocommerce-input-wrapper"><input type="tel"
                                                        class="input-text " name="billing_phone" id="billing_phone"
                                                        placeholder="" value="0812345678" autocomplete="tel"></span></p>
                                            <p class="form-row form-row-wide validate-required validate-email"
                                                id="billing_email_field" data-priority="110"><label for="billing_email"
                                                    class="">Email address&nbsp;<abbr class="required"
                                                        title="required">*</abbr></label><span
                                                    class="woocommerce-input-wrapper"><input type="email"
                                                        class="input-text " name="billing_email" id="billing_email"
                                                        placeholder="" value="fimi.my.official@gmail.com"
                                                        autocomplete="email username"></span></p>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-2">
                                    <div class="woocommerce-shipping-fields">

                                        <h3 id="ship-to-different-address">
                                            <label
                                                class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                <input id="ship-to-different-address-checkbox"
                                                    class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox"
                                                    type="checkbox" name="ship_to_different_address" value="1">
                                                <span>Ship to a different address?</span>
                                            </label>
                                        </h3>

                                        <div class="shipping_address" style="display: none;">


                                            <div class="woocommerce-shipping-fields__field-wrapper">
                                                <p class="form-row form-row-first validate-required"
                                                    id="shipping_first_name_field" data-priority="10"><label
                                                        for="shipping_first_name" class="">First name&nbsp;<abbr
                                                            class="required" title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                            class="input-text " name="shipping_first_name"
                                                            id="shipping_first_name" placeholder="" value="Andhika"
                                                            autocomplete="given-name"></span></p>
                                                <p class="form-row form-row-last validate-required"
                                                    id="shipping_last_name_field" data-priority="20"><label
                                                        for="shipping_last_name" class="">Last name&nbsp;<abbr
                                                            class="required" title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                            class="input-text " name="shipping_last_name"
                                                            id="shipping_last_name" placeholder="" value="Satriawan"
                                                            autocomplete="family-name"></span></p>
                                                <p class="form-row form-row-wide" id="shipping_company_field"
                                                    data-priority="30"><label for="shipping_company"
                                                        class="">Company name&nbsp;<span
                                                            class="optional">(optional)</span></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                            class="input-text " name="shipping_company"
                                                            id="shipping_company" placeholder="" value=""
                                                            autocomplete="organization"></span></p>
                                                <p class="form-row form-row-wide address-field update_totals_on_change validate-required"
                                                    id="shipping_country_field" data-priority="40"><label
                                                        for="shipping_country" class="">Country / Region&nbsp;<abbr
                                                            class="required" title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><select name="shipping_country"
                                                            id="shipping_country"
                                                            class="country_to_state country_select select2-hidden-accessible"
                                                            autocomplete="country"
                                                            data-placeholder="Select a country / region…"
                                                            data-label="Country / Region" tabindex="-1"
                                                            aria-hidden="true">
                                                            <option value="">Select a country / region…</option>
                                                            <option value="AF">Afghanistan</option>
                                                            <option value="AX">Åland Islands</option>
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
                                                            <option value="PW">Belau</option>
                                                            <option value="BE">Belgium</option>
                                                            <option value="BZ">Belize</option>
                                                            <option value="BJ">Benin</option>
                                                            <option value="BM">Bermuda</option>
                                                            <option value="BT">Bhutan</option>
                                                            <option value="BO">Bolivia</option>
                                                            <option value="BQ">Bonaire, Saint Eustatius and Saba
                                                            </option>
                                                            <option value="BA">Bosnia and Herzegovina</option>
                                                            <option value="BW">Botswana</option>
                                                            <option value="BV">Bouvet Island</option>
                                                            <option value="BR">Brazil</option>
                                                            <option value="IO">British Indian Ocean Territory</option>
                                                            <option value="BN">Brunei</option>
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
                                                            <option value="CG">Congo (Brazzaville)</option>
                                                            <option value="CD">Congo (Kinshasa)</option>
                                                            <option value="CK">Cook Islands</option>
                                                            <option value="CR">Costa Rica</option>
                                                            <option value="HR">Croatia</option>
                                                            <option value="CU">Cuba</option>
                                                            <option value="CW">Curaçao</option>
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
                                                            <option value="SZ">Eswatini</option>
                                                            <option value="ET">Ethiopia</option>
                                                            <option value="FK">Falkland Islands</option>
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
                                                            <option value="HM">Heard Island and McDonald Islands
                                                            </option>
                                                            <option value="HN">Honduras</option>
                                                            <option value="HK">Hong Kong</option>
                                                            <option value="HU">Hungary</option>
                                                            <option value="IS">Iceland</option>
                                                            <option value="IN">India</option>
                                                            <option value="ID" selected="selected">Indonesia</option>
                                                            <option value="IR">Iran</option>
                                                            <option value="IQ">Iraq</option>
                                                            <option value="IE">Ireland</option>
                                                            <option value="IM">Isle of Man</option>
                                                            <option value="IL">Israel</option>
                                                            <option value="IT">Italy</option>
                                                            <option value="CI">Ivory Coast</option>
                                                            <option value="JM">Jamaica</option>
                                                            <option value="JP">Japan</option>
                                                            <option value="JE">Jersey</option>
                                                            <option value="JO">Jordan</option>
                                                            <option value="KZ">Kazakhstan</option>
                                                            <option value="KE">Kenya</option>
                                                            <option value="KI">Kiribati</option>
                                                            <option value="KW">Kuwait</option>
                                                            <option value="KG">Kyrgyzstan</option>
                                                            <option value="LA">Laos</option>
                                                            <option value="LV">Latvia</option>
                                                            <option value="LB">Lebanon</option>
                                                            <option value="LS">Lesotho</option>
                                                            <option value="LR">Liberia</option>
                                                            <option value="LY">Libya</option>
                                                            <option value="LI">Liechtenstein</option>
                                                            <option value="LT">Lithuania</option>
                                                            <option value="LU">Luxembourg</option>
                                                            <option value="MO">Macao</option>
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
                                                            <option value="FM">Micronesia</option>
                                                            <option value="MD">Moldova</option>
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
                                                            <option value="NC">New Caledonia</option>
                                                            <option value="NZ">New Zealand</option>
                                                            <option value="NI">Nicaragua</option>
                                                            <option value="NE">Niger</option>
                                                            <option value="NG">Nigeria</option>
                                                            <option value="NU">Niue</option>
                                                            <option value="NF">Norfolk Island</option>
                                                            <option value="KP">North Korea</option>
                                                            <option value="MK">North Macedonia</option>
                                                            <option value="MP">Northern Mariana Islands</option>
                                                            <option value="NO">Norway</option>
                                                            <option value="OM">Oman</option>
                                                            <option value="PK">Pakistan</option>
                                                            <option value="PS">Palestinian Territory</option>
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
                                                            <option value="RU">Russia</option>
                                                            <option value="RW">Rwanda</option>
                                                            <option value="ST">São Tomé and Príncipe</option>
                                                            <option value="BL">Saint Barthélemy</option>
                                                            <option value="SH">Saint Helena</option>
                                                            <option value="KN">Saint Kitts and Nevis</option>
                                                            <option value="LC">Saint Lucia</option>
                                                            <option value="SX">Saint Martin (Dutch part)</option>
                                                            <option value="MF">Saint Martin (French part)</option>
                                                            <option value="PM">Saint Pierre and Miquelon</option>
                                                            <option value="VC">Saint Vincent and the Grenadines
                                                            </option>
                                                            <option value="WS">Samoa</option>
                                                            <option value="SM">San Marino</option>
                                                            <option value="SA">Saudi Arabia</option>
                                                            <option value="SN">Senegal</option>
                                                            <option value="RS">Serbia</option>
                                                            <option value="SC">Seychelles</option>
                                                            <option value="SL">Sierra Leone</option>
                                                            <option value="SG">Singapore</option>
                                                            <option value="SK">Slovakia</option>
                                                            <option value="SI">Slovenia</option>
                                                            <option value="SB">Solomon Islands</option>
                                                            <option value="SO">Somalia</option>
                                                            <option value="ZA">South Africa</option>
                                                            <option value="GS">South Georgia/Sandwich Islands</option>
                                                            <option value="KR">South Korea</option>
                                                            <option value="SS">South Sudan</option>
                                                            <option value="ES">Spain</option>
                                                            <option value="LK">Sri Lanka</option>
                                                            <option value="SD">Sudan</option>
                                                            <option value="SR">Suriname</option>
                                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                                            <option value="SE">Sweden</option>
                                                            <option value="CH">Switzerland</option>
                                                            <option value="SY">Syria</option>
                                                            <option value="TW">Taiwan</option>
                                                            <option value="TJ">Tajikistan</option>
                                                            <option value="TZ">Tanzania</option>
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
                                                            <option value="GB">United Kingdom (UK)</option>
                                                            <option value="US">United States (US)</option>
                                                            <option value="UM">United States (US) Minor Outlying
                                                                Islands</option>
                                                            <option value="UY">Uruguay</option>
                                                            <option value="UZ">Uzbekistan</option>
                                                            <option value="VU">Vanuatu</option>
                                                            <option value="VA">Vatican</option>
                                                            <option value="VE">Venezuela</option>
                                                            <option value="VN">Vietnam</option>
                                                            <option value="VG">Virgin Islands (British)</option>
                                                            <option value="VI">Virgin Islands (US)</option>
                                                            <option value="WF">Wallis and Futuna</option>
                                                            <option value="EH">Western Sahara</option>
                                                            <option value="YE">Yemen</option>
                                                            <option value="ZM">Zambia</option>
                                                            <option value="ZW">Zimbabwe</option>
                                                        </select><span
                                                            class="select2 select2-container select2-container--default"
                                                            dir="ltr" style="width: 100%;"><span
                                                                class="selection"><span
                                                                    class="select2-selection select2-selection--single"
                                                                    aria-haspopup="true" aria-expanded="false"
                                                                    tabindex="0" aria-label="Country / Region"
                                                                    role="combobox"><span
                                                                        class="select2-selection__rendered"
                                                                        id="select2-shipping_country-container"
                                                                        role="textbox" aria-readonly="true"
                                                                        title="Indonesia">Indonesia</span><span
                                                                        class="select2-selection__arrow"
                                                                        role="presentation"><b
                                                                            role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper"
                                                                aria-hidden="true"></span></span><noscript><button
                                                                type="submit" name="woocommerce_checkout_update_totals"
                                                                value="Update country / region">Update country /
                                                                region</button></noscript></span></p>
                                                <p class="form-row address-field validate-required form-row-wide"
                                                    id="shipping_address_1_field" data-priority="50"><label
                                                        for="shipping_address_1" class="">Street address&nbsp;<abbr
                                                            class="required" title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                            class="input-text " name="shipping_address_1"
                                                            id="shipping_address_1"
                                                            placeholder="House number and street name"
                                                            value="JL Angkasa 2" autocomplete="address-line1"
                                                            data-placeholder="House number and street name"></span></p>
                                                <p class="form-row address-field form-row-wide"
                                                    id="shipping_address_2_field" data-priority="60"><label
                                                        for="shipping_address_2" class="screen-reader-text">Apartment,
                                                        suite, unit, etc.&nbsp;<span
                                                            class="optional">(optional)</span></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                            class="input-text " name="shipping_address_2"
                                                            id="shipping_address_2"
                                                            placeholder="Apartment, suite, unit, etc. (optional)"
                                                            value="" autocomplete="address-line2"
                                                            data-placeholder="Apartment, suite, unit, etc. (optional)"></span>
                                                </p>
                                                <p class="form-row address-field validate-required form-row-wide"
                                                    id="shipping_city_field" data-priority="70"
                                                    data-o_class="form-row form-row-wide address-field validate-required">
                                                    <label for="shipping_city" class="">Town / City&nbsp;<abbr
                                                            class="required" title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                            class="input-text " name="shipping_city" id="shipping_city"
                                                            placeholder="" value="Bekasi"
                                                            autocomplete="address-level2"></span>
                                                </p>
                                                <p class="form-row address-field validate-required validate-state form-row-wide"
                                                    id="shipping_state_field" data-priority="80"
                                                    data-o_class="form-row form-row-wide address-field validate-required validate-state">
                                                    <label for="shipping_state" class="">Province&nbsp;<abbr
                                                            class="required" title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><select name="shipping_state"
                                                            id="shipping_state"
                                                            class="state_select select2-hidden-accessible"
                                                            autocomplete="address-level1"
                                                            data-placeholder="Select an option…" data-input-classes=""
                                                            data-label="Province" tabindex="-1" aria-hidden="true">
                                                            <option value="">Select an option…</option>
                                                            <option value="AC">Daerah Istimewa Aceh</option>
                                                            <option value="SU">Sumatera Utara</option>
                                                            <option value="SB">Sumatera Barat</option>
                                                            <option value="RI">Riau</option>
                                                            <option value="KR">Kepulauan Riau</option>
                                                            <option value="JA">Jambi</option>
                                                            <option value="SS">Sumatera Selatan</option>
                                                            <option value="BB">Bangka Belitung</option>
                                                            <option value="BE">Bengkulu</option>
                                                            <option value="LA">Lampung</option>
                                                            <option value="JK">DKI Jakarta</option>
                                                            <option value="JB">Jawa Barat</option>
                                                            <option value="BT">Banten</option>
                                                            <option value="JT">Jawa Tengah</option>
                                                            <option value="JI">Jawa Timur</option>
                                                            <option value="YO">Daerah Istimewa Yogyakarta</option>
                                                            <option value="BA">Bali</option>
                                                            <option value="NB">Nusa Tenggara Barat</option>
                                                            <option value="NT">Nusa Tenggara Timur</option>
                                                            <option value="KB">Kalimantan Barat</option>
                                                            <option value="KT">Kalimantan Tengah</option>
                                                            <option value="KI">Kalimantan Timur</option>
                                                            <option value="KS">Kalimantan Selatan</option>
                                                            <option value="KU">Kalimantan Utara</option>
                                                            <option value="SA">Sulawesi Utara</option>
                                                            <option value="ST">Sulawesi Tengah</option>
                                                            <option value="SG">Sulawesi Tenggara</option>
                                                            <option value="SR">Sulawesi Barat</option>
                                                            <option value="SN">Sulawesi Selatan</option>
                                                            <option value="GO">Gorontalo</option>
                                                            <option value="MA">Maluku</option>
                                                            <option value="MU">Maluku Utara</option>
                                                            <option value="PA">Papua</option>
                                                            <option value="PB">Papua Barat</option>
                                                        </select><span
                                                            class="select2 select2-container select2-container--default"
                                                            dir="ltr" style="width: 100%;"><span
                                                                class="selection"><span
                                                                    class="select2-selection select2-selection--single"
                                                                    aria-haspopup="true" aria-expanded="false"
                                                                    tabindex="0" aria-label="Province"
                                                                    role="combobox"><span
                                                                        class="select2-selection__rendered"
                                                                        id="select2-shipping_state-container"
                                                                        role="textbox" aria-readonly="true"
                                                                        title="Jawa Barat">Jawa Barat</span><span
                                                                        class="select2-selection__arrow"
                                                                        role="presentation"><b
                                                                            role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper"
                                                                aria-hidden="true"></span></span></span>
                                                </p>
                                                <p class="form-row address-field validate-required validate-postcode form-row-wide"
                                                    id="shipping_postcode_field" data-priority="90"
                                                    data-o_class="form-row form-row-wide address-field validate-required validate-postcode">
                                                    <label for="shipping_postcode" class="">Postcode /
                                                        ZIP&nbsp;<abbr class="required"
                                                            title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                            class="input-text " name="shipping_postcode"
                                                            id="shipping_postcode" placeholder="" value="17144"
                                                            autocomplete="postal-code"></span>
                                                </p>
                                            </div>


                                        </div>

                                    </div>
                                    <div class="woocommerce-additional-fields">



                                        <div class="woocommerce-additional-fields__field-wrapper">
                                            <p class="form-row notes" id="order_comments_field" data-priority="">
                                                <label for="order_comments" class="">Order notes&nbsp;<span
                                                        class="optional">(optional)</span></label><span
                                                    class="woocommerce-input-wrapper">
                                                    <textarea name="order_comments" class="input-text " id="order_comments"
                                                        placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea>
                                                </span>
                                            </p>
                                        </div>


                                    </div>
                                </div>
                            </div>




                            <h3 id="order_review_heading">Your order</h3>


                            <div id="order_review" class="woocommerce-checkout-review-order">
                                <table class="shop_table woocommerce-checkout-review-order-table">
                                    <thead>
                                        <tr>
                                            <th class="product-name">Product</th>
                                            <th class="product-total">Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                MJX B18 Pro&nbsp; <strong class="product-quantity">×&nbsp;1</strong> </td>
                                            <td class="product-total">
                                                <span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">Rp</span>35.000.000</bdi></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>

                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td><span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">Rp</span>35.000.000</bdi></span>
                                            </td>
                                        </tr>




                                        <tr class="woocommerce-shipping-totals shipping">
                                            <th>Shipping</th>
                                            <td data-title="Shipping">
                                                <ul id="shipping_method" class="woocommerce-shipping-methods">
                                                    <li>
                                                        <input type="hidden" name="shipping_method[0]" data-index="0"
                                                            id="shipping_method_0_free_shipping1"
                                                            value="free_shipping:1" class="shipping_method"><label
                                                            for="shipping_method_0_free_shipping1">Free shipping</label>
                                                    </li>
                                                </ul>


                                            </td>
                                        </tr>






                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td><strong><span class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">Rp</span>35.000.000</bdi></span></strong>
                                            </td>
                                        </tr>


                                    </tfoot>
                                </table>

                                <div id="payment" class="woocommerce-checkout-payment">
                                    <ul class="wc_payment_methods payment_methods methods">
                                        <li class="wc_payment_method payment_method_bacs">
                                            <input id="payment_method_bacs" type="radio" class="input-radio"
                                                name="payment_method" value="bacs" checked="checked"
                                                data-order_button_text="">

                                            <label for="payment_method_bacs">
                                                Direct bank transfer </label>
                                            <div class="payment_box payment_method_bacs">
                                                <p>Make your payment directly into our bank account. Please use your Order
                                                    ID as the payment reference. Your order will not be shipped until the
                                                    funds have cleared in our account.</p>
                                            </div>
                                        </li>
                                        <li class="wc_payment_method payment_method_cheque">
                                            <input id="payment_method_cheque" type="radio" class="input-radio"
                                                name="payment_method" value="cheque" data-order_button_text="">

                                            <label for="payment_method_cheque">
                                                Check payments </label>
                                            <div class="payment_box payment_method_cheque" style="display:none;">
                                                <p>Please send a check to Store Name, Store Street, Store Town, Store State
                                                    / County, Store Postcode.</p>
                                            </div>
                                        </li>
                                        <li class="wc_payment_method payment_method_cod">
                                            <input id="payment_method_cod" type="radio" class="input-radio"
                                                name="payment_method" value="cod" data-order_button_text="">

                                            <label for="payment_method_cod">
                                                Cash on delivery </label>
                                            <div class="payment_box payment_method_cod" style="display:none;">
                                                <p>Pay with cash upon delivery.</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="form-row place-order">
                                        <noscript>
                                            Since your browser does not support JavaScript, or it is disabled, please ensure
                                            you click the <em>Update Totals</em> button before placing your order. You may
                                            be charged more than the amount stated above if you fail to do so. <br /><button
                                                type="submit" class="button alt wp-element-button"
                                                name="woocommerce_checkout_update_totals" value="Update totals">Update
                                                totals</button>
                                        </noscript>

                                        <div class="woocommerce-terms-and-conditions-wrapper">
                                            <div class="woocommerce-privacy-policy-text">
                                                <p>Your personal data will be used to process your order, support your
                                                    experience throughout this website, and for other purposes described in
                                                    our <a href="https://hugostore.id/checkout/"
                                                        class="woocommerce-privacy-policy-link" target="_blank">privacy
                                                        policy</a>.</p>
                                            </div>
                                            <div class="woocommerce-terms-and-conditions"
                                                style="display: none; max-height: 200px; overflow: auto;">
                                                <h2>Who we are</h2>
                                                <p>Our website address is: https://webredox.net/demo/wp/zonar/elementor.</p>
                                                <h2>What personal data we collect and why we collect it</h2>
                                                <h3>Comments</h3>
                                                <p>When visitors leave comments on the site we collect the data shown in the
                                                    comments form, and also the visitor’s IP address and browser user agent
                                                    string to help spam detection.</p>
                                                <p>An anonymized string created from your email address (also called a hash)
                                                    may be provided to the Gravatar service to see if you are using it. The
                                                    Gravatar service privacy policy is available here:
                                                    https://automattic.com/privacy/. After approval of your comment, your
                                                    profile picture is visible to the public in the context of your comment.
                                                </p>
                                                <h3>Media</h3>
                                                <p>If you upload images to the website, you should avoid uploading images
                                                    with embedded location data (EXIF GPS) included. Visitors to the website
                                                    can download and extract any location data from images on the website.
                                                </p>
                                                <h3>Contact forms</h3>
                                                <h3>Cookies</h3>
                                                <p>If you leave a comment on our site you may opt-in to saving your name,
                                                    email address and website in cookies. These are for your convenience so
                                                    that you do not have to fill in your details again when you leave
                                                    another comment. These cookies will last for one year.</p>
                                                <p>If you visit our login page, we will set a temporary cookie to determine
                                                    if your browser accepts cookies. This cookie contains no personal data
                                                    and is discarded when you close your browser.</p>
                                                <p>When you log in, we will also set up several cookies to save your login
                                                    information and your screen display choices. Login cookies last for two
                                                    days, and screen options cookies last for a year. If you select
                                                    “Remember Me”, your login will persist for two weeks. If you log out of
                                                    your account, the login cookies will be removed.</p>
                                                <p>If you edit or publish an article, an additional cookie will be saved in
                                                    your browser. This cookie includes no personal data and simply indicates
                                                    the post ID of the article you just edited. It expires after 1 day.</p>
                                                <h3>Embedded content from other websites</h3>
                                                <p>Articles on this site may include embedded content (e.g. videos, images,
                                                    articles, etc.). Embedded content from other websites behaves in the
                                                    exact same way as if the visitor has visited the other website.</p>
                                                <p>These websites may collect data about you, use cookies, embed additional
                                                    third-party tracking, and monitor your interaction with that embedded
                                                    content, including tracking your interaction with the embedded content
                                                    if you have an account and are logged in to that website.</p>
                                                <h3>Analytics</h3>
                                                <h2>Who we share your data with</h2>
                                                <p>If you request a password reset, your IP address will be included in the
                                                    reset email.</p>
                                                <h2>How long we retain your data</h2>
                                                <p>If you leave a comment, the comment and its metadata are retained
                                                    indefinitely. This is so we can recognize and approve any follow-up
                                                    comments automatically instead of holding them in a moderation queue.
                                                </p>
                                                <p>For users that register on our website (if any), we also store the
                                                    personal information they provide in their user profile. All users can
                                                    see, edit, or delete their personal information at any time (except they
                                                    cannot change their username). Website administrators can also see and
                                                    edit that information.</p>
                                                <h2>What rights you have over your data</h2>
                                                <p>If you have an account on this site, or have left comments, you can
                                                    request to receive an exported file of the personal data we hold about
                                                    you, including any data you have provided to us. You can also request
                                                    that we erase any personal data we hold about you. This does not include
                                                    any data we are obliged to keep for administrative, legal, or security
                                                    purposes.</p>
                                                <h2>Where we send your data</h2>
                                                <p>Visitor comments may be checked through an automated spam detection
                                                    service.</p>
                                                <h2>Your contact information</h2>
                                                <h2>Additional information</h2>
                                                <h3>How we protect your data</h3>
                                                <h3>What data breach procedures we have in place</h3>
                                                <h3>What third parties we receive data from</h3>
                                                <h3>What automated decision making and/or profiling we do with user data
                                                </h3>
                                                <h3>Industry regulatory disclosure requirements</h3>
                                            </div>
                                            <p class="form-row validate-required">
                                                <label
                                                    class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                    <input type="checkbox"
                                                        class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox"
                                                        name="terms" id="terms">
                                                    <span class="woocommerce-terms-and-conditions-checkbox-text">I have
                                                        read and agree to the website <a
                                                            href="https://hugostore.id/privacy-policy/"
                                                            class="woocommerce-terms-and-conditions-link"
                                                            target="_blank">terms and conditions</a></span>&nbsp;<abbr
                                                        class="required" title="required">*</abbr>
                                                </label>
                                                <input type="hidden" name="terms-field" value="1">
                                            </p>
                                        </div>


                                        <button type="submit" class="button alt wp-element-button"
                                            name="woocommerce_checkout_place_order" id="place_order"
                                            value="Place order" data-value="Place order">Place order</button>

                                        <input type="hidden" id="woocommerce-process-checkout-nonce"
                                            name="woocommerce-process-checkout-nonce" value="c1a694e2a0"><input
                                            type="hidden" name="_wp_http_referer"
                                            value="/?wc-ajax=update_order_review">
                                    </div>
                                </div>

                            </div>


                        </form>

                    </div>
                </div>
            </div>
            <!--column-wrap-container end -->
        </div>
        <!--column-wrap end-->
        <div class="to-top-btn to-top"><i class="fal fa-long-arrow-up"></i></div>
    </div>
    <!-- content end-->
    <div class="hero-scroll-down-notifer">
        <div class="scroll-down-wrap ">
            <div class="mousey">
                <div class="scroller"></div>
            </div>
        </div>
        <i class="far fa-angle-down"></i>
    </div>


    <!-- share-wrapper-->
    <div class="share-wrapper">
        <div class="close-share-btn"><i class="fal fa-long-arrow-left"></i></div>
        <div class="share-container fl-wrap  isShare"
            data-share="[&#39;facebook&#39;, &#39;pinterest&#39;, &#39;tumblr&#39;, &#39;twitter&#39;, &#39;linkedin&#39;,   ]">
            <a href="http://www.facebook.com/share.php?u=https%3A%2F%2Fhugostore.id%2Fcheckout%2F"
                class="pop share-icon share-icon-facebook"></a><a
                href="http://pinterest.com/pin/create/button/?url=https%3A%2F%2Fhugostore.id%2Fcheckout%2F&amp;media=&amp;description="
                class="pop share-icon share-icon-pinterest"></a><a
                href="http://www.tumblr.com/share?v=3&amp;u=https%3A%2F%2Fhugostore.id%2Fcheckout%2F"
                class="pop share-icon share-icon-tumblr"></a><a
                href="https://twitter.com/share?via=in1.com&amp;text=Checkout%20%E2%80%93%20Hugostore"
                class="pop share-icon share-icon-twitter"></a><a
                href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fhugostore.id%2Fcheckout%2F&amp;title=Checkout%20%E2%80%93%20Hugostore&amp;summary=&amp;source=in1.com"
                class="pop share-icon share-icon-linkedin"></a>
        </div>
    </div>
    <!-- share-wrapper  end -->
    </div>
    <!--wrapper end -->
@endsection
