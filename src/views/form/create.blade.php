@extends('spratly::layouts.default')

@section('content')
<!-- .outer -->
<div class="container-fluid outer">
<div class="row-fluid">
<!-- .inner -->
<div class="span12 inner">
<!--BEGIN INPUT TEXT FIELDS-->
<div class="row-fluid">
    <div class="span12">
        <div class="box dark">
            <header>
                <div class="icons"><i class="icon-edit"></i></div>
                <h5>Input Text Fields</h5>
                <!-- .toolbar -->
                <div class="toolbar">
                    <ul class="nav">
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-th-large"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="">q</a></li>
                                <li><a href="">a</a></li>
                                <li><a href="">b</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="accordion-toggle minimize-box" data-toggle="collapse" href="#div-1">
                                <i class="icon-chevron-up"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.toolbar -->
            </header>
            <div id="div-1" class="accordion-body collapse in body">
                <form class="form-horizontal">
                    <div class="control-group">
                        <label for="text1" class="control-label">Normal Input Field</label>

                        <div class="controls with-tooltip">
                            <input type="text" id="text1" class="span6 input-tooltip"
                                   data-original-title="Please use your name" data-placement="bottom"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="pass1" class="control-label">Password Field</label>

                        <div class="controls with-tooltip">
                            <input class="span6 input-tooltip" type="password" id="pass1"
                                   data-original-title="Please use your secure password" data-placement="top"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Read only input</label>

                        <div class="controls">
                            <input class="span6" type="text" value="read only" readonly>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Disabled input</label>

                        <div class="controls">
                            <input class="span6" type="text" value="disabled" disabled>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="text2" class="control-label">With Placeholder</label>

                        <div class="controls">
                            <input class="span6" type="text" id="text2" placeholder="placeholder text"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="limiter" class="control-label">Input limiter</label>

                        <div class="controls">
                            <textarea class="span6" id="limiter"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="text4" class="control-label">Default Textarea</label>

                        <div class="controls">
                            <textarea class="span6" id="text4"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="autosize" class="control-label">Textarea With Autosize</label>

                        <div class="controls">
                            <textarea id="autosize" class="span6"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="tags" class="control-label">Tags</label>

                        <div class="controls">
                            <input class="span6" name="tags" id="tags" value="foo,bar,baz"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--END TEXT INPUT FIELD-->

<!--BEGIN SELECT        -->
<div class="row-fluid">
<div class="span12">
<div class="box">
<header>
    <div class="icons"><i class="icon-th-large"></i></div>
    <h5>Selects</h5>
    <ul class="nav pull-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#"><i
                    class="icon-th-large"></i></a>
            <ul class="dropdown-menu">
                <li><a href="">q</a></li>
                <li><a href="">a</a></li>
                <li><a href="">b</a></li>
            </ul>
        </li>
        <li>
            <a class="accordion-toggle minimize-box" data-toggle="collapse" href="#div-2">
                <i class="icon-chevron-up"></i>
            </a>
        </li>
    </ul>
</header>
<div id="div-2" class="accordion-body collapse in body">
<form class="form-horizontal">

<div class="control-group">
    <label class="control-label">Select Dropdown</label>

    <div class="controls">
        <select class="span6">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
</div>

<div class="control-group">
<label class="control-label">Select with search</label>

<div class="controls">
<select data-placeholder="Choose a Country..." class="chzn-select span6" tabindex="2">
<option value=""></option>
<option value="United States">United States</option>
<option value="United Kingdom">United Kingdom</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antarctica">Antarctica</option>
<option value="Antigua and Barbuda">Antigua and Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Bouvet Island">Bouvet Island</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
<option value="Brunei Darussalam">Brunei Darussalam</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote D'ivoire">Cote D'ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Territories">French Southern Territories</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-bissau">Guinea-bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
<option value="Korea, Republic of">Korea, Republic of</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macao">Macao</option>
<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
<option value="Moldova, Republic of">Moldova, Republic of</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montenegro">Montenegro</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Northern Mariana Islands">Northern Mariana Islands</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn">Pitcairn</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russian Federation">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Helena">Saint Helena</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
<option value="Saint Lucia">Saint Lucia</option>
<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
<option value="South Sudan">South Sudan</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syrian Arab Republic">Syrian Arab Republic</option>
<option value="Taiwan, Republic of China">Taiwan, Republic of China</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
<option value="Thailand">Thailand</option>
<option value="Timor-leste">Timor-leste</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela">Venezuela</option>
<option value="Viet Nam">Viet Nam</option>
<option value="Virgin Islands, British">Virgin Islands, British</option>
<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
<option value="Wallis and Futuna">Wallis and Futuna</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>
</div>
</div>

<div class="control-group">
    <label class="control-label">Multiple select</label>
    <div class="controls">
        <select multiple="multiple" size="5" class="span6">
            <option selected>1</option>
            <option selected>2</option>
            <option>3</option>
            <option selected>4</option>
            <option>5</option>
        </select>
    </div>
</div>

<div class="control-group">
<label class="control-label">Multiple with search</label>
<div class="controls">
<select data-placeholder="Choose a Country..." class="chzn-select span6" multiple tabindex="4">
<option value=""></option>
<option value="United States">United States</option>
<option value="United Kingdom">United Kingdom</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antarctica">Antarctica</option>
<option value="Antigua and Barbuda">Antigua and Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Bouvet Island">Bouvet Island</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
<option value="Brunei Darussalam">Brunei Darussalam</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote D'ivoire">Cote D'ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Territories">French Southern Territories</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-bissau">Guinea-bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
<option value="Korea, Republic of">Korea, Republic of</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macao">Macao</option>
<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
<option value="Moldova, Republic of">Moldova, Republic of</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montenegro">Montenegro</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Northern Mariana Islands">Northern Mariana Islands</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn">Pitcairn</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russian Federation">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Helena">Saint Helena</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
<option value="Saint Lucia">Saint Lucia</option>
<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
<option value="South Sudan">South Sudan</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syrian Arab Republic">Syrian Arab Republic</option>
<option value="Taiwan, Republic of China">Taiwan, Republic of China</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
<option value="Thailand">Thailand</option>
<option value="Timor-leste">Timor-leste</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela">Venezuela</option>
<option value="Viet Nam">Viet Nam</option>
<option value="Virgin Islands, British">Virgin Islands, British</option>
<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
<option value="Wallis and Futuna">Wallis and Futuna</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>
</div>
</div>

<div class="control-group">
    <label class="control-label">Single Select with Groups</label>
    <div class="controls">
        <select data-placeholder="Your Favorite Football Team" class="span6 chzn-select" tabindex="5">
            <option value=""></option>
            <optgroup label="NFC EAST">
                <option>Dallas Cowboys</option>
                <option>New York Giants</option>
                <option>Philadelphia Eagles</option>
                <option>Washington Redskins</option>
            </optgroup>
            <optgroup label="NFC NORTH">
                <option>Chicago Bears</option>
                <option>Detroit Lions</option>
                <option>Green Bay Packers</option>
                <option>Minnesota Vikings</option>
            </optgroup>
            <optgroup label="NFC SOUTH">
                <option>Atlanta Falcons</option>
                <option>Carolina Panthers</option>
                <option>New Orleans Saints</option>
                <option>Tampa Bay Buccaneers</option>
            </optgroup>
            <optgroup label="NFC WEST">
                <option>Arizona Cardinals</option>
                <option>St. Louis Rams</option>
                <option>San Francisco 49ers</option>
                <option>Seattle Seahawks</option>
            </optgroup>
            <optgroup label="AFC EAST">
                <option>Buffalo Bills</option>
                <option>Miami Dolphins</option>
                <option>New England Patriots</option>
                <option>New York Jets</option>
            </optgroup>
            <optgroup label="AFC NORTH">
                <option>Baltimore Ravens</option>
                <option>Cincinnati Bengals</option>
                <option>Cleveland Browns</option>
                <option>Pittsburgh Steelers</option>
            </optgroup>
            <optgroup label="AFC SOUTH">
                <option>Houston Texans</option>
                <option>Indianapolis Colts</option>
                <option>Jacksonville Jaguars</option>
                <option>Tennessee Titans</option>
            </optgroup>
            <optgroup label="AFC WEST">
                <option>Denver Broncos</option>
                <option>Kansas City Chiefs</option>
                <option>Oakland Raiders</option>
                <option>San Diego Chargers</option>
            </optgroup>
        </select>
    </div>
</div>
<div class="control-group">
    <label class="control-label">Multiple Select with Groups</label>
    <div class="controls">
        <select data-placeholder="Your Favorite Football Team" class="span6 chzn-select" multiple tabindex="6">
            <option value=""></option>
            <optgroup label="NFC EAST">
                <option>Dallas Cowboys</option>
                <option>New York Giants</option>
                <option>Philadelphia Eagles</option>
                <option>Washington Redskins</option>
            </optgroup>
            <optgroup label="NFC NORTH">
                <option>Chicago Bears</option>
                <option>Detroit Lions</option>
                <option>Green Bay Packers</option>
                <option>Minnesota Vikings</option>
            </optgroup>
            <optgroup label="NFC SOUTH">
                <option>Atlanta Falcons</option>
                <option>Carolina Panthers</option>
                <option>New Orleans Saints</option>
                <option>Tampa Bay Buccaneers</option>
            </optgroup>
            <optgroup label="NFC WEST">
                <option>Arizona Cardinals</option>
                <option>St. Louis Rams</option>
                <option>San Francisco 49ers</option>
                <option>Seattle Seahawks</option>
            </optgroup>
            <optgroup label="AFC EAST">
                <option>Buffalo Bills</option>
                <option>Miami Dolphins</option>
                <option>New England Patriots</option>
                <option>New York Jets</option>
            </optgroup>
            <optgroup label="AFC NORTH">
                <option>Baltimore Ravens</option>
                <option>Cincinnati Bengals</option>
                <option>Cleveland Browns</option>
                <option>Pittsburgh Steelers</option>
            </optgroup>
            <optgroup label="AFC SOUTH">
                <option>Houston Texans</option>
                <option>Indianapolis Colts</option>
                <option>Jacksonville Jaguars</option>
                <option>Tennessee Titans</option>
            </optgroup>
            <optgroup label="AFC WEST">
                <option>Denver Broncos</option>
                <option>Kansas City Chiefs</option>
                <option>Oakland Raiders</option>
                <option>San Diego Chargers</option>
            </optgroup>
        </select>
    </div>
</div>
<div class="control-group">
    <label class="control-label">Single Select</label>
    <div class="controls">
        <select data-placeholder="Your Favorite Type of Bear" class="span6 chzn-select" tabindex="7">
            <option value=""></option>
            <option>American Black Bear</option>
            <option>Asiatic Black Bear</option>
            <option>Brown Bear</option>
            <option>Giant Panda</option>
            <option selected>Sloth Bear</option>
            <option disabled>Sun Bear</option>
            <option>Polar Bear</option>
            <option disabled>Spectacled Bear</option>
        </select>
    </div>
</div>
<div class="control-group">
    <label class="control-label">Multiple Select</label>
    <div class="controls">
        <select data-placeholder="Your Favorite Types of Bear" multiple class="span6 chzn-select" tabindex="8">
            <option value=""></option>
            <option>American Black Bear</option>
            <option>Asiatic Black Bear</option>
            <option>Brown Bear</option>
            <option>Giant Panda</option>
            <option selected>Sloth Bear</option>
            <option disabled>Sun Bear</option>
            <option selected>Polar Bear</option>
            <option disabled>Spectacled Bear</option>
        </select>
    </div>
</div>
<div class="control-group">
    <label class="control-label">Multiple Select & Deselect</label>
    <div class="controls">
        <select data-placeholder="Your Favorite Types of Bear" multiple class="span6 chzn-select" id="test_me_paddington" name="test_me_form" tabindex="8">
            <option value=""></option>
            <option>American Black Bear</option>
            <option>Asiatic Black Bear</option>
            <option>Brown Bear</option>
            <option>Giant Panda</option>
            <option selected disabled>Sloth Bear</option>
            <option disabled>Sun Bear</option>
            <option selected disabled>Paddington Bear</option>
            <option selected>Polar Bear</option>
            <option disabled>Spectacled Bear</option>
        </select>
    </div>
</div>
<div class="control-group">
    <label class="control-label">Allow Deselect on Single Selects</label>
    <div class="controls">
        <select data-placeholder="Your Favorite Type of Bear" class="span6 chzn-select-deselect" tabindex="7">
            <option value=""></option>
            <option>American Black Bear</option>
            <option>Asiatic Black Bear</option>
            <option>Brown Bear</option>
            <option>Giant Panda</option>
            <option selected>Sloth Bear</option>
            <option>Sun Bear</option>
            <option>Polar Bear</option>
            <option>Spectacled Bear</option>
        </select>
    </div>
</div>
<div class="control-group">
    <label class="control-label">Single right to left select</label>
    <div class="controls">
        <select data-placeholder="Your Favorite Type of Bear" class="span6 chzn-select chzn-rtl" tabindex="9">
            <option value=""></option>
            <option>American Black Bear</option>
            <option>Asiatic Black Bear</option>
            <option>Brown Bear</option>
            <option>Giant Panda</option>
            <option selected>Sloth Bear</option>
            <option>Polar Bear</option>
        </select>
    </div>
</div>
<div class="control-group">
    <label class="control-label">Multiple right to left select</label>
    <div class="controls">
        <select data-placeholder="Your Favorite Types of Bear" multiple class="span6 chzn-select  chzn-rtl" tabindex="10">
            <option value=""></option>
            <option>American Black Bear</option>
            <option>Asiatic Black Bear</option>
            <option>Brown Bear</option>
            <option>Giant Panda</option>
            <option selected>Sloth Bear</option>
            <option selected>Polar Bear</option>
        </select>
    </div>
</div>
<div class="control-group">
    <label class="control-label">Spinner</label>
    <div class="controls">
        <input value="10" id="spin1">
    </div>
</div>

<div class="control-group">
    <label class="control-label">Decimal Spinner</label>
    <div class="controls">
        <input id="spin2" name="value" value="5.47">
    </div>
</div>

<div class="control-group">
    <label class="control-label">Currency Spinner</label>
    <div class="controls">
        <input id="spin3" name="value" value="5">
    </div>
</div>
</form>
</div>
</div>
</div>
</div>
<!--END SELECT-->

<!-- BEGIN CHECKBOX & RADIO -->

<div class="row-fluid">
    <div class="span12">
        <div class="box">
            <header>
                <div class="icons"><i class="icon-check"></i></div>
                <h5>Checkbox & Radio</h5>
                <div class="toolbar">
                    <input class="uniform" type="checkbox" checked>
                </div>
            </header>
            <div class="block">

                <div class="row-fluid">
                    <div class="span12">
                        <div class="body">
                            <form action="" class="form-horizontal">

                                <div class="row-fluid">
                                    <div class="span6">
                                        <div class="control-group">
                                            <label class="control-label">Checkbox</label>
                                            <div class="controls">
                                                <label>
                                                    <input class="uniform" type="checkbox" value="option1" checked> Checked checkbox
                                                </label>
                                                <label>
                                                    <input class="uniform" type="checkbox" value="option2"> Unchecked checkbox
                                                </label>
                                                <label>
                                                    <input class="uniform" type="checkbox" value="option3" checked disabled> Disabled checked
                                                </label>
                                                <label>
                                                    <input class="uniform" type="checkbox" value="option2" disabled> Disabled unchecked
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span6">
                                        <div class="control-group">
                                            <label class="control-label">Radio</label>
                                            <div class="controls">
                                                <label>
                                                    <input class="uniform" type="radio" name="optionsRadios" value="option1" checked>Checked radio
                                                </label>
                                                <label>
                                                    <input class="uniform" type="radio" name="optionsRadios" value="option2">Unchecked radio
                                                </label>
                                                <label>
                                                    <input class="uniform" type="radio" name="optionsRadios2" value="option3" checked disabled>
                                                    Disabled checked radio
                                                </label>
                                                <label>
                                                    <input class="uniform" type="radio" name="optionsRadios2" value="option4" disabled>
                                                    Disabled unchecked radio
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="span3">
                        <div class="body">
                            <label class="checkbox">Basic</label>
                            <div id="normal-toggle-button">
                                <input type="checkbox" checked="checked">
                            </div>
                        </div>
                    </div>
                    <div class="span3">
                        <div class="body">
                            <label class="checkbox">Callback</label>
                            <div id="callback-toggle-button">
                                <input type="checkbox">
                            </div>
                            <p id="magic-text">Status is: false</p>
                        </div>
                    </div>
                    <div class="span3">
                        <div class="body">
                            <label class="checkbox">Text & Size</label>
                            <div id="text-toggle-button">
                                <input type="checkbox">
                            </div>
                        </div>
                    </div>
                    <div class="span3">
                        <div class="body">
                            <label class="checkbox">Style</label>
                            <div id="danger-toggle-button">
                                <input type="checkbox" checked="checked">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- END CHECKBOX & RADIO -->

<!--BEGIN AUTOMATIC JUMP-->
<div class="row-fluid">
    <div class="span12">
        <div class="box">
            <header>
                <div class="icons"><i class="icon-exchange"></i></div>
                <h5>Automatically jump to the next input-field</h5>
            </header>
            <div class="body">
                <form id="validVal" class="form-horizontal">
                    <div class="control-group">
                        <label class="control-label">Autotab</label>

                        <div class="controls controls-row">
                            <input class="span4 autotab" type="text" maxlength="3" tabindex="11">
                            <input class="span4 autotab" type="text" maxlength="4" tabindex="12">
                            <input class="span4" type="text" maxlength="5" tabindex="13">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Select</label>

                        <div class="controls controls-row">
                            <select class="span4 autotab" name="tabs1_7" tabindex="14">
                                <option value="one">One</option>
                                <option value="two">Two</option>
                                <option value="three">Three</option>
                            </select>
                            <select class="span4 autotab" tabindex="15">
                                <option value="one">One</option>
                                <option value="two">Two</option>
                                <option value="three">Three</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--END AUTOMATIC JUMP-->


<!--BEGIN MASKED INPUTS-->
<div class="row-fluid">
    <div class="span12">
        <div class="box">
            <header>
                <div class="icons"><i class="icon-bolt"></i></div>
                <h5>Masked Inputs</h5>
                <ul class="nav pull-right">
                    <li><a href="#">Link</a></li>
                    <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-th-large"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="">q</a></li>
                            <li><a href="">a</a></li>
                            <li><a href="">b</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="accordion-toggle minimize-box" data-toggle="collapse" href="#div-4">
                            <i class="icon-chevron-up"></i>
                        </a>
                    </li>
                </ul>
            </header>
            <div id="div-4" class="accordion-body collapse in body">
                <form class="form-horizontal">
                    <div class="control-group">
                        <label class="control-label">Date</label>

                        <div class="controls">
                            <input class="span6" type="text" data-mask="99/99/9999">
                            <span class="help-inline">99/99/9999</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Phone</label>
                        <div class="controls">
                            <input class="span6" type="text" data-mask="(999) 999-9999">
                            <span class="help-inline">(999) 999-9999</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Product key</label>
                        <div class="controls">
                            <input class="span6" type="text" data-mask="a*-999-a999">
                            <span class="help-inline">a*-999-a999</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Phone</label>
                        <div class="controls">
                            <input class="span6" type="text" data-mask="+33 999 999 999">
                            <span class="help-inline">+33 999 999 999</span>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Percent</label>
                        <div class="controls">
                            <input class="span6" type="text" data-mask="99%">
                            <span class="help-inline">99%</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--END MASKED INPUTS-->

<!-- BEGIN COLOR PICKER -->

<!-- .row-fluid -->
<div class="row-fluid">
    <!-- .span6 -->
    <div class="span12">
        <!-- .box -->
        <div class="box">
            <header>
                <div class="icons">
                    <i class="icon-edit"></i>
                </div>
                <h5>Color Picker</h5>
                <ul class="nav pull-right">
                    <li>
                        <a href="#colorPickerBlock" data-toggle="collapse" class="accordion-toggle minimize-box">
                            <i class="icon-chevron-up"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="close-box">
                            <i class="icon-remove"></i>
                        </a>
                    </li>
                </ul>
            </header>
            <!-- .BODY -->
            <div class="body collapse in" id="colorPickerBlock">
                <form class="form-horizontal">
                    <div class="control-group">
                        <label for="cp1" class="control-label">Field with hex format</label>

                        <div class="controls">
                            <input type="text" class="span6" value="#8fff00" id="cp1">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cp2" class="control-label">Field with the rgba format</label>

                        <div class="controls">
                            <input type="text" class="span6" value="rgb(0,194,255,0.78)" id="cp2"
                                   data-color-format="rgba">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cp3" class="control-label">As component</label>

                        <div class="controls">
                            <div class="input-append color" data-color="rgb(255, 146, 180)" data-color-format="rgb"
                                 id="cp3">
                                <input type="text" class="span6" value="" readonly>
                                <span class="add-on"><i style="background-color: rgb(255, 146, 180)"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cp3" class="control-label">Using events to work with the color</label>

                        <div class="controls">
                            <a href="#" class="btn small" id="cp4" data-color-format="hex"
                               data-color="rgb(255, 255, 255)">Change background color</a>
                        </div>
                    </div>
                </form>

            </div>
            <!-- /.BODY -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.span12 -->
</div>
<!-- /.row-fluid -->

<!-- END COLOR PICKER -->

<!-- BEGIN DATE PICKER -->
<div class="row-fluid">
    <!-- .span12 -->
    <div class="span12">
        <!-- .box -->
        <div class="box">
            <header>
                <div class="icons">
                    <i class="icon-calendar"></i>
                </div>
                <h5>Date Picker</h5>
                <ul class="nav pull-right">
                    <li>
                        <a href="#datePickerBlock" data-toggle="collapse" class="accordion-toggle minimize-box">
                            <i class="icon-chevron-up"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="close-box">
                            <i class="icon-remove"></i>
                        </a>
                    </li>
                </ul>
            </header>
            <div id="datePickerBlock" class="body collapse in">
                <form class="form-horizontal">
                    <div class="control-group">
                        <label class="control-label" for="dp1">Field with the format specified via options</label>
                        <div class="controls">
                            <input type="text" class="span6" value="02-16-2012" id="dp1" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="dp2">Field with the format specified via data tag</label>
                        <div class="controls">
                            <input type="text" class="span6" value="02/16/12" data-date-format="mm/dd/yy" id="dp2" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="dp3">As component</label>
                        <div class="controls">
                            <div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
                                <input class="span6" size="16" type="text" value="12-02-2012" readonly>
                                <span class="add-on"><i class="icon-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="dpYears">Start with years viewMode</label>
                        <div class="controls">
                            <div class="input-append date" id="dpYears" data-date="12-02-2012"
                                 data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                <input class="span6" size="16" type="text" value="12-02-2012" readonly>
                                <span class="add-on"><i class="icon-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="dpMonths">Limit the view mode to months</label>
                        <div class="controls">
                            <div class="input-append date" id="dpMonths" data-date="102/2012" data-date-format="mm/yyyy" data-date-viewmode="years" data-date-minviewmode="months">
                                <input class="span6" size="16" type="text" value="02/2012" readonly>
                                <span class="add-on"><i class="icon-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="body">
                            <p>Attached to other element then field and using events to work with the date values.</p>

                            <div class="alert alert-error" id="alert" style="display: none;">
                                <strong>Oh snap!</strong>
                                <p></p>
                            </div>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Start date<a href="#" class="btn small" id="dp4" data-date-format="yyyy-mm-dd" data-date="2012-02-20">Change</a></th>
                                    <th>End date<a href="#" class="btn small" id="dp5" data-date-format="yyyy-mm-dd" data-date="2012-02-25">Change</a></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td id="startDate">2012-02-20</td>
                                    <td id="endDate">2012-02-25</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.box -->
    </div>
    <!-- /.span12 -->
</div>
<!-- END DATE PICKER -->

<!-- BEGIN DATE RANGE PICKER -->
<!-- .row-fluid -->
<div class="row-fluid">
    <!-- .span12 -->
    <div class="span12">
        <!-- .box -->
        <div class="box">
            <header>
                <div class="icons">
                    <i class="icon-calendar"></i>
                </div>
                <h5>Date Range Picker</h5>
                <ul class="nav pull-right">
                    <li>
                        <a href="#dateRangePickerBlock" data-toggle="collapse" class="accordion-toggle minimize-box">
                            <i class="icon-chevron-up"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="close-box">
                            <i class="icon-remove"></i>
                        </a>
                    </li>
                </ul>
            </header>
            <!-- .block -->
            <div id="dateRangePickerBlock" class="body collapse in">
                <form class="form-horizontal">
                    <div class="control-group">
                        <label class="control-label" for="reservation">Reservation dates</label>
                        <div class="controls">
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-calendar"></i></span><input type="text" name="reservation" id="reservation" />
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="reportrange">Pre-defined Ranges & Callback</label>
                        <div class="controls">
                            <input type="text" class="span4" value="02-16-2012" id="reportrange" >
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.block -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.span12 -->
</div>
<!-- /.row-fluid -->
<!--END DATE RANGE PICKER -->

<!-- BEGIN TIME PICKER -->
<div class="row-fluid">
    <div class="span12">
        <div class="box">
            <header>
                <div class="icons"><i class="icon-time"></i></div>
                <h5>Time Picker</h5>
            </header>
            <div class="body">
                <form action="" class="form-horizontal">
                    <div class="control-group">
                        <label class="control-label">Default Timepicker</label>
                        <div class="controls">
                            <div class="input-append bootstrap-timepicker-component">
                                <input class="input-small timepicker-default" type="text" /><span class="add-on"><i class="icon-time"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">24hr Timepicker</label>
                        <div class="controls">
                            <div class="input-append bootstrap-timepicker-component">
                                <input class="timepicker-24 input-small" type="text" /><span class="add-on"><i class="icon-time"></i></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END TIME PICKER -->

<!-- BEGIN GRID INPUTS-->
<div class="row-fluid">
    <div class="span12">
        <div class="box">
            <header>
                <div class="icons"><i class="icon-th"></i></div>
                <h5>Grid Inputs</h5>
                <ul class="nav pull-right">
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-th-large"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="">q</a></li>
                            <li><a href="">a</a></li>
                            <li><a href="">b</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#div-5" data-toggle="collapse" class="accordion-toggle minimize-box">
                            <i class="icon-chevron-up"></i>
                        </a>
                    </li>
                </ul>
            </header>
            <div id="div-5" class="accordion-body collapse in body">
                <form action="">
                    <div class="control-group">
                        <label class="control-label">Input grids</label>

                        <div class="controls controls-row">
                            <input class="span1" placeholder=".span1" type="text">
                            <input class="span11" placeholder=".span11" type="text">
                        </div>
                        <div class="controls controls-row">
                            <input class="span2" placeholder=".span2" type="text">
                            <input class="span10" placeholder=".span10" type="text">
                        </div>
                        <div class="controls controls-row">
                            <input class="span3" placeholder=".span3" type="text">
                            <input class="span9" placeholder=".span9" type="text">
                        </div>
                        <div class="controls controls-row">
                            <input class="span4" placeholder=".span4" type="text">
                            <input class="span8" placeholder=".span8" type="text">
                        </div>
                        <div class="controls controls-row">
                            <input class="span5" placeholder=".span5" type="text">
                            <input class="span7" placeholder=".span7" type="text">
                        </div>
                        <div class="controls controls-row">
                            <input class="span6" placeholder=".span6" type="text">
                            <input class="span6" placeholder=".span6" type="text">
                        </div>
                        <div class="controls controls-row">
                            <input class="span4" placeholder=".span4" type="text">
                            <input class="span4" placeholder=".span4" type="text">
                            <input class="span4" placeholder=".span4" type="text">
                        </div>
                        <div class="controls controls-row">
                            <input class="span3" placeholder=".span3" type="text">
                            <input class="span4" placeholder=".span4" type="text">
                            <input class="span5" placeholder=".span5" type="text">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--END GRID INPUTS-->

<!-- BEGIN DUAL SELECT WITH FILTER-->
<div class="row-fluid">
    <div class="span12">
        <div class="box">
            <header>
                <h5><i class="icon-th-large"></i> Dual Select With Filtering</h5>

                <ul class="nav pull-right">
                    <li><a href="#">Link</a></li>
                    <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#"><i
                                class="icon-th-large"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="">q</a></li>
                            <li><a href="">a</a></li>
                            <li><a href="">b</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="accordion-toggle minimize-box" data-toggle="collapse" href="#div-3">
                            <i class="icon-chevron-up"></i>
                        </a>
                    </li>
                </ul>
            </header>
            <div id="div-3" class="accordion-body collapse in body">
                <div class="row-fluid">
                    <div style="width: 45%; float: left;">
                        <div class="input-append">
                            <input id="box1Filter" type="text" placeholder="Filter">
                            <button id="box1Clear" class="btn btn-warning" type="button">x</button>
                        </div>
                        <select id="box1View" multiple="multiple" style="width: 100%;" size="16">
                            <option value="501649">2008-2009 "Mini" Baja</option>
                            <option value="501497">AAPA - Asian American Psychological Association</option>
                            <option value="501053">Academy of Film Geeks</option>
                            <option value="500001">Accounting Association</option>
                            <option value="501227">ACLU</option>
                            <option value="501610">Active Minds</option>
                            <option value="501514">Activism with A Reel Edge (A.W.A.R.E.)</option>
                            <option value="501656">Adopt a Grandparent Program</option>
                            <option value="501050">Africa Awareness Student Organization</option>
                            <option value="501075">African Diasporic Cultural RC Interns</option>
                            <option value="501493">Agape</option>
                            <option value="501562">AGE-Alliance for Graduate Excellence</option>
                            <option value="500676">AICHE (American Inst of Chemical Engineers)</option>
                            <option value="501460">AIDS Sensitivity Awareness Project ASAP</option>
                            <option value="500004">Aikido Club</option>
                            <option value="500336">Akanke</option>
                        </select>
                        <br/>

                        <div class="alert alert-block">
                            <span id="box1Counter" class="countLabel"></span>
                            <select id="box1Storage"></select>
                        </div>

                    </div>
                    <div style="width: 10%;float: left; text-align: center; padding-top: 6%;">
                        <div class="btn-group btn-group-vertical" style="white-space: normal;">
                            <button id="to2" type="button" class="btn btn-primary">
                                <i class="icon-chevron-right"></i>
                            </button>
                            <button id="allTo2" type="button" class="btn btn-primary">
                                <i class="icon-forward"></i>
                            </button>
                            <button id="allTo1" type="button" class="btn btn-danger">
                                <i class="icon-backward"></i>
                            </button>
                            <button id="to1" type="button" class="btn btn-danger">
                                <i class=" icon-chevron-left icon-white"></i>
                            </button>
                        </div>
                    </div>
                    <div style="width: 45%;float: left;">
                        <div class="input-append">
                            <input id="box2Filter" type="text" placeholder="Filter">
                            <button id="box2Clear" class="btn btn-warning" type="button">x</button>
                        </div>
                        <select id="box2View" multiple="multiple" style="width: 100%;" size="16">
                        </select><br/>

                        <div class="alert alert-block">
                            <span id="box2Counter" class="countLabel"></span>
                            <select id="box2Storage"> </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--END DUAL SELECT WITH FILTER-->
</div>


<!-- /.inner -->
</div>
<!-- /.row-fluid -->
</div>
<!-- /.outer -->
@stop