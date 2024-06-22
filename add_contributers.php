<?php
require 'conn.php';
$id = $_GET['author_id'];
if (isset($_POST['submit'])) {
   $auther_id = $_POST['auther_id'];
    $name = $_POST['userName'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $userRole = $_POST['userRole'];
    $sql = "INSERT INTO contributors(con_name, email, Country, con_Role, author_id) VALUES ('$name', '$email', '$country', '$userRole', '$auther_id')";
    if (mysqli_query($conn, $sql)) {
      header("Location:Author_new_submission.php");
    } else {
      header("Location:add_contributers.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Contributor</title>
    <style>
        .alert {
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
        }
        .alert-content {
            background-color: #fefefe;
            padding: 20px;
            border: 1px solid #888;
            width: 400px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            text-align: center;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
        }
        .form-control {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button.form-control {
            cursor: pointer;
        }
    </style>
       <script>
        function showAlert() {
            var modal = document.getElementById("myAlert");
            modal.style.display = "flex";
            document.getElementById("userName").focus();
        }

        function closeAlert() {
            var modal = document.getElementById("myAlert");
            modal.style.display = "none";
            window.location.href = "Author_new_submission.php";
        }

        function submitForm() {
            var form = document.getElementById("userForm");
            form.submit();
        }

        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("submitButton").addEventListener("click", submitForm);
            document.querySelector(".close").addEventListener("click", closeAlert);
        });
    </script>
</head>
<body onload="showAlert()">

<div id="myAlert" class="alert">
  <div class="alert-content">
    <span class="close">&times;</span>
    <h3>Add Contributors</h3>
    <form id="userForm" method="post" action="add_contributers.php">
      <input type="hidden" name="auther_id" value="<?php echo $id; ?>">
    <label for="userName">Name:</label>
    <input type="text" class="form-control" id="userName" placeholder="Enter your name" name="userName" required><br><br>
    <label for="userName">Email:</label>
    <input type="text" class="form-control" name="email" id="Contact" value="" maxlength="32" placeholder="Enter your email"><br><br>
    <label for="userName">select country:</label>
  <select name="country" class="form-control" id="country" autocomplete="country-name" required aria-required="true" style="height: 35px; cursor: pointer;">
      <option>select country</option>
      <?php
          $countries = array(
          'Afghanistan' => 'Afghanistan',
          'Åland Islands' => 'Åland Islands',
          'Albania' => 'Albania',
          'Algeria' => 'Algeria',
          'American Samoa' => 'American Samoa',
          'Andorra' => 'Andorra',
          'Angola' => 'Angola',
          'Anguilla' => 'Anguilla',
          'Antarctica' => 'Antarctica',
          'Antigua and Barbuda' => 'Antigua and Barbuda',
          'Argentina' => 'Argentina',
          'Armenia' => 'Armenia',
          'Aruba' => 'Aruba',
          'Australia' => 'Australia',
          'Austria' => 'Austria',
          'Azerbaijan' => 'Azerbaijan',
          'Bahamas' => 'Bahamas',
          'Bahrain' => 'Bahrain',
          'Bangladesh' => 'Bangladesh',
          'Barbados' => 'Barbados',
          'Belarus' => 'Belarus',
          'Belgium' => 'Belgium',
          'Belize' => 'Belize',
          'Benin' => 'Benin',
          'Bermuda' => 'Bermuda',
          'Bhutan' => 'Bhutan',
          'Bolivia' => 'Bolivia',
          'Bonaire, Sint Eustatius and Saba' => 'Bonaire, Sint Eustatius and Saba',
          'Bosnia and Herzegovina' => 'Bosnia and Herzegovina',
          'Botswana' => 'Botswana',
          'Bouvet Island' => 'Bouvet Island',
          'Brazil' => 'Brazil',
          'British Indian Ocean Territory' => 'British Indian Ocean Territory',
          'Brunei Darussalam' => 'Brunei Darussalam',
          'Bulgaria' => 'Bulgaria',
          'Burkina Faso' => 'Burkina Faso',
          'Burundi' => 'Burundi',
          'Cabo Verde' => 'Cabo Verde',
          'Cambodia' => 'Cambodia',
          'Cameroon' => 'Cameroon',
          'Canada' => 'Canada',
          'Cayman Islands' => 'Cayman Islands',
          'Central African Republic' => 'Central African Republic',
          'Chad' => 'Chad',
          'Chile' => 'Chile',
          'China' => 'China',
          'Christmas Island' => 'Christmas Island',
          'Cocos (Keeling) Islands' => 'Cocos (Keeling) Islands',
          'Colombia' => 'Colombia',
          'Comoros' => 'Comoros',
          'Congo' => 'Congo',
          'Congo, Democratic Republic of the' => 'Congo, Democratic Republic of the',
          'Cook Islands' => 'Cook Islands',
          'Costa Rica' => 'Costa Rica',
          'Côte d\'Ivoire' => "Côte d'Ivoire",
          'Croatia' => 'Croatia',
          'Cuba' => 'Cuba',
          'Curaçao' => 'Curaçao',
          'Cyprus' => 'Cyprus',
          'Czech Republic' => 'Czech Republic',
          'Denmark' => 'Denmark',
          'Djibouti' => 'Djibouti',
          'Dominica' => 'Dominica',
          'Dominican Republic' => 'Dominican Republic',
          'Ecuador' => 'Ecuador',
          'Egypt' => 'Egypt',
          'El Salvador' => 'El Salvador',
          'Equatorial Guinea' => 'Equatorial Guinea',
          'Eritrea' => 'Eritrea',
          'Estonia' => 'Estonia',
          'Ethiopia' => 'Ethiopia',
          'Falkland Islands (Malvinas)' => 'Falkland Islands (Malvinas)',
          'Faroe Islands' => 'Faroe Islands',
          'Fiji' => 'Fiji',
          'Finland' => 'Finland',
          'France' => 'France',
          'French Guiana' => 'French Guiana',
          'French Polynesia' => 'French Polynesia',
          'French Southern Territories' => 'French Southern Territories',
          'Gabon' => 'Gabon',
          'Gambia' => 'Gambia',
          'Georgia' => 'Georgia',
          'Germany' => 'Germany',
          'Ghana' => 'Ghana',
          'Gibraltar' => 'Gibraltar',
          'Greece' => 'Greece',
          'Greenland' => 'Greenland',
          'Grenada' => 'Grenada',
          'Guadeloupe' => 'Guadeloupe',
          'Guam' => 'Guam',
          'Guatemala' => 'Guatemala',
          'Guernsey' => 'Guernsey',
          'Guinea' => 'Guinea',
          'Guinea-Bissau' => 'Guinea-Bissau',
          'Guyana' => 'Guyana',
          'Haiti' => 'Haiti',
          'Heard Island and McDonald Islands' => 'Heard Island and McDonald Islands',
          'Holy See' => 'Holy See',
          'Honduras' => 'Honduras',
          'Hong Kong' => 'Hong Kong',
          'Hungary' => 'Hungary',
          'Iceland' => 'Iceland',
          'India' => 'India',
          'Indonesia' => 'Indonesia',
          'Iran, Islamic Republic of' => 'Iran, Islamic Republic of',
          'Iraq' => 'Iraq',
          'Ireland' => 'Ireland',
          'Isle of Man' => 'Isle of Man',
          'Israel' => 'Israel',
          'Italy' => 'Italy',
          'Jamaica' => 'Jamaica',
          'Japan' => 'Japan',
          'Jersey' => 'Jersey',
          'Jordan' => 'Jordan',
          'Kazakhstan' => 'Kazakhstan',
          'Kenya' => 'Kenya',
          'Kiribati' => 'Kiribati',
          'Korea, Democratic People\'s Republic of' => "Korea, Democratic People's Republic of",
          'Korea, Republic of' => 'Korea, Republic of',
          'Kuwait' => 'Kuwait',
          'Kyrgyzstan' => 'Kyrgyzstan',
          'Lao People\'s Democratic Republic' => "Lao People's Democratic Republic",
          'Latvia' => 'Latvia',
          'Lebanon' => 'Lebanon',
          'Lesotho' => 'Lesotho',
          'Liberia' => 'Liberia',
          'Libya' => 'Libya',
          'Liechtenstein' => 'Liechtenstein',
          'Lithuania' => 'Lithuania',
          'Luxembourg' => 'Luxembourg',
          'Macao' => 'Macao',
          'Macedonia, the former Yugoslav Republic of' => 'Macedonia, the former Yugoslav Republic of',
          'Madagascar' => 'Madagascar',
          'Malawi' => 'Malawi',
          'Malaysia' => 'Malaysia',
          'Maldives' => 'Maldives',
          'Mali' => 'Mali',
          'Malta' => 'Malta',
          'Marshall Islands' => 'Marshall Islands',
          'Martinique' => 'Martinique',
          'Mauritania' => 'Mauritania',
          'Mauritius' => 'Mauritius',
          'Mayotte' => 'Mayotte',
          'Mexico' => 'Mexico',
          'Micronesia, Federated States of' => 'Micronesia, Federated States of',
          'Moldova, Republic of' => 'Moldova, Republic of',
          'Monaco' => 'Monaco',
          'Mongolia' => 'Mongolia',
          'Montenegro' => 'Montenegro',
          'Montserrat' => 'Montserrat',
          'Morocco' => 'Morocco',
          'Mozambique' => 'Mozambique',
          'Myanmar' => 'Myanmar',
          'Namibia' => 'Namibia',
          'Nauru' => 'Nauru',
          'Nepal' => 'Nepal',
          'Netherlands' => 'Netherlands',
          'New Caledonia' => 'New Caledonia',
          'New Zealand' => 'New Zealand',
          'Nicaragua' => 'Nicaragua',
          'Niger' => 'Niger',
          'Nigeria' => 'Nigeria',
          'Niue' => 'Niue',
          'Norfolk Island' => 'Norfolk Island',
          'Northern Mariana Islands' => 'Northern Mariana Islands',
          'Norway' => 'Norway',
          'Oman' => 'Oman',
          'Pakistan' => 'Pakistan',
          'Palau' => 'Palau',
          'Palestine, State of' => 'Palestine, State of',
          'Panama' => 'Panama',
          'Papua New Guinea' => 'Papua New Guinea',
          'Paraguay' => 'Paraguay',
          'Peru' => 'Peru',
          'Philippines' => 'Philippines',
          'Pitcairn' => 'Pitcairn',
          'Poland' => 'Poland',
          'Portugal' => 'Portugal',
          'Puerto Rico' => 'Puerto Rico',
          'Qatar' => 'Qatar',
          'Réunion' => 'Réunion',
          'Romania' => 'Romania',
          'Russian Federation' => 'Russian Federation',
          'Rwanda' => 'Rwanda',
          'Saint Barthélemy' => 'Saint Barthélemy',
          'Saint Helena, Ascension and Tristan da Cunha' => 'Saint Helena, Ascension and Tristan da Cunha',
          'Saint Kitts and Nevis' => 'Saint Kitts and Nevis',
          'Saint Lucia' => 'Saint Lucia',
          'Saint Martin (French part)' => 'Saint Martin (French part)',
          'Saint Pierre and Miquelon' => 'Saint Pierre and Miquelon',
          'Saint Vincent and the Grenadines' => 'Saint Vincent and the Grenadines',
          'Samoa' => 'Samoa',
          'San Marino' => 'San Marino',
          'Sao Tome and Principe' => 'Sao Tome and Principe',
          'Saudi Arabia' => 'Saudi Arabia',
          'Senegal' => 'Senegal',
          'Serbia' => 'Serbia',
          'Seychelles' => 'Seychelles',
          'Sierra Leone' => 'Sierra Leone',
          'Singapore' => 'Singapore',
          'Sint Maarten (Dutch part)' => 'Sint Maarten (Dutch part)',
          'Slovakia' => 'Slovakia',
          'Slovenia' => 'Slovenia',
          'Solomon Islands' => 'Solomon Islands',
          'Somalia' => 'Somalia',
          'South Africa' => 'South Africa',
          'South Georgia and the South Sandwich Islands' => 'South Georgia and the South Sandwich Islands',
          'South Sudan' => 'South Sudan',
          'Spain' => 'Spain',
          'Sri Lanka' => 'Sri Lanka',
          'Sudan' => 'Sudan',
          'Suriname' => 'Suriname',
          'Svalbard and Jan Mayen' => 'Svalbard and Jan Mayen',
          'Swaziland' => 'Swaziland',
          'Sweden' => 'Sweden',
          'Switzerland' => 'Switzerland',
          'Syrian Arab Republic' => 'Syrian Arab Republic',
          'Taiwan, Province of China' => 'Taiwan, Province of China',
          'Tajikistan' => 'Tajikistan',
          'Tanzania, United Republic of' => 'Tanzania, United Republic of',
          'Thailand' => 'Thailand',
          'Timor-Leste' => 'Timor-Leste',
          'Togo' => 'Togo',
          'Tokelau' => 'Tokelau',
          'Tonga' => 'Tonga',
          'Trinidad and Tobago' => 'Trinidad and Tobago',
          'Tunisia' => 'Tunisia',
          'Turkey' => 'Turkey',
          'Turkmenistan' => 'Turkmenistan',
          'Turks and Caicos Islands' => 'Turks and Caicos Islands',
          'Tuvalu' => 'Tuvalu',
          'Uganda' => 'Uganda',
          'Ukraine' => 'Ukraine',
          'United Arab Emirates' => 'United Arab Emirates',
          'United Kingdom' => 'United Kingdom',
          'United States' => 'United States',
          'United States Minor Outlying Islands' => 'United States Minor Outlying Islands',
          'Uruguay' => 'Uruguay',
          'Uzbekistan' => 'Uzbekistan',
          'Vanuatu' => 'Vanuatu',
          'Venezuela, Bolivarian Republic of' => 'Venezuela, Bolivarian Republic of',
          'Viet Nam' => 'Viet Nam',
          'Virgin Islands, British' => 'Virgin Islands, British',
          'Virgin Islands, U.S.' => 'Virgin Islands, U.S.',
          'Wallis and Futuna' => 'Wallis and Futuna',
          'Western Sahara' => 'Western Sahara',
          'Yemen' => 'Yemen',
          'Zambia' => 'Zambia',
          'Zimbabwe' => 'Zimbabwe'
      );
      foreach ($countries as $code => $name) {
          echo "<option value='$code'>$name</option>";
      }
      ?>
    </select><br>
    <br>
    <label for="userRole">Role:</label><br>
    <input  type="radio" id="adminRole" name="userRole" value="Author">
    <label for="adminRole">Author</label><br>
    <input type="radio" id="userRole" name="userRole" value="Translator">
    <label for="userRole">Translator</label><br><br>
    <button class="form-control" type="submit" name="submit" id="submitButton">Submit</button>
  </form>
  </div>
</div>

</body>
</html>
