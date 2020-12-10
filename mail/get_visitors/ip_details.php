    <div class="get_visitore">

        <?php

require_once('UserInfo.php');


$ip= UserInfo::get_ip();
$os= UserInfo::get_os();
$browser= UserInfo::get_browser();
$device= UserInfo::get_device();






require_once('geoplugin.class.php');

$geoplugin = new geoPlugin();


//locate the IP
$geoplugin->locate();











$city=$geoplugin->city ;
$region=$geoplugin->region ;
$r_code=	$geoplugin->regionCode;
$country= $geoplugin->countryName;
$code=$geoplugin->countryCode ;
$lati=$geoplugin->latitude ;
$longl=$geoplugin->longitude ;
$zip=$geoplugin->locationAccuracyRadius ;
$zone=$geoplugin->timezone;
$currency=$geoplugin->currencyCode ;
$currencysymole=	$geoplugin->currencySymbol ;
$exchange_rate=$geoplugin->currencyConverter ;


?>

        <form action="" method="post">

            <input type="hidden" name="ip" id="ip" value="<?php echo $ip; ?>" />
            <input type="hidden" name="os" id="os" value="<?php echo $os; ?>" />
            <input type="hidden" name="browser" id="browser" value="<?php echo $browser; ?>" />
            <input type="hidden" name="device" id="device" value="<?php echo $device; ?>" />
        </form>



        <form action="" method="post">

            <input type="hidden" name="country" id="country" value="<?php echo $country; ?>" />
            <input type="hidden" name="code" id="code" value="<?php echo $code; ?>" />
            <input type="hidden" name="region" id="region" value="<?php echo $region; ?>" />
            <input type="hidden" name="city" id="city" value="<?php echo $city; ?>" />
            <input type="hidden" name="zip" id="zip" value="<?php echo $zip; ?>" />
            <input type="hidden" name="zone" id="zone" value="<?php echo $zone; ?>" />
            <input type="hidden" name="currencysymole" id="currencysymole" value="<?php echo $currencysymole; ?>" />
            <input type="hidden" name="currency" id="currency" value="<?php echo $currency; ?>" />
            <input type="hidden" name="lati" id="lati" value="<?php echo $lati; ?>" />
            <input type="hidden" name="longl" id="longl" value="<?php echo $longl; ?>" />
            <input type="hidden" name="exchange_rate" id="exchange_rate" value="<?php echo $exchange_rate; ?>" />
            <input type="hidden" name="r_code" id="r_code" value="<?php echo $r_code; ?>" />

        </form>


        <script>
            $(document).ready(function() {
                get_device_details();
                insert_ip_list();
                get_full_details();



                setInterval(function() {
                    get_full_details();
                    get_device_details();
                    insert_ip_list();

                }, 1000);


                function get_full_details() {
                    var ip = $("#ip").val();
                    var browser = $("#browser").val();
                    var device = $("#device").val();
                    var isp = $("#isp").val();
                    var country = $("#country").val();
                    var code = $("#code").val();
                    var region = $("#region").val();
                    var city = $("#city").val();
                    var zip = $("#zip").val();
                    var zone = $("#zone").val();
                    var currencysymole = $("#currencysymole").val();
                    var currency = $("#currency").val();
                    var lati = $("#lati").val();
                    var longl = $("#longl").val();
                    var exchange_rate = $("#exchange_rate").val();
                    var r_code = $("#r_code").val();
                    var action = "get_full_details";

                    $.ajax({
                        url: "get_visitors/full_details.php",
                        method: "POST",
                        data: {
                            ip: ip,
                            browser: browser,
                            device: device,
                            country: country,
                            code: code,
                            region: region,
                            city: city,
                            zip: zip,
                            zone: zone,
                            currencysymole: currencysymole,
                            currency: currency,
                            lati: lati,
                            longl: longl,
                            exchange_rate: exchange_rate,
                            r_code: r_code,
                            action: action

                        },
                        success: function(data) {

                        }
                    })
                }

                function get_device_details() {
                    var ip = $("#ip").val();
                    var os = $("#os").val();
                    var browser = $("#browser").val();
                    var device = $("#device").val();
                    var action = "Get_data";
                    $.ajax({
                        url: "get_visitors/insert_device.php",
                        method: "POST",
                        data: {
                            ip: ip,
                            os: os,
                            browser: browser,
                            device: device,
                            action: action

                        },
                        success: function(data) {


                        }
                    })
                }

                function insert_ip_list() {
                    var ip = $("#ip").val();
                    var os = $("#os").val();
                    var browser = $("#browser").val();
                    var device = $("#device").val();
                    var action = "insert_ip_list";
                    $.ajax({
                        url: "get_visitors/insert_ip_list.php",
                        method: "POST",
                        data: {
                            ip: ip,
                            os: os,
                            browser: browser,
                            device: device,
                            action: action

                        },
                        success: function(data) {


                        }
                    })
                }

            })

        </script>
    </div>