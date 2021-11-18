<?php
/*
 * Heytics Config
 */

// DB
define("DB_SERVER", "127.0.0.1");
define("DB_USER", "ht_client_web");
define("DB_PASSWORD", "!H3yt1cs@2020@DB_Prod@!h9KEWEINkk#e82#49u1@j3@01o393%@1mba#3JJR!");
define("DB_NAME", "heytics_core");

// METHOD 
define('REQUEST_METHOD', $_SERVER['REQUEST_METHOD']);

// STATIC - ENTORNO
define('ENVIRONMENT', 'dev');
$INVESTOR_STORE_ID = 0;

// MODO - PRODUCCION
if (ENVIRONMENT == "com") {

    // STORE COMERCIOS
    $INVESTOR_STORE_ID = 6;

    // FIREBASE
    $FIREBASE_REALTIME_DB_ENV = "com";

    // DB GENEXUS
    $GX_IP_BASE = "http://149.28.103.163:8080/";
    define("DB_GX_SERVER", "10.40.0.3");
    define("DB_GX_USER", "db_client");
    define("DB_GX_PASSWORD", "!H3yt1cs@2020@DB_Prod@!h9KEWEINkk#e82#49u1@j3@01o393%@");
    define("DB_GX_NAME", "heyticsdb");

    // GENEXUS
    define("GX_URL", "https://app.heytics.com/heytics");
    define("GX_CLIENT_ID", "3a66709e8ada47e999f32bd02d4094ee");

    // Algolia
    define("ALGOLIA_INDEX_NAME", "Heytics_Marketplace_PROD");
    define("ALGOLIA_APPLICATION_ID", "0UGEMFJE2T");
    define("ALGOLIA_APPLICATION_KEY", "adb57ca6f5a94ab93c30652c68974a13");

    /**
     * CONFIGURACIONES DE EMISORES DE PAGOS
     */

    // PA - MetroBank
    define("GATEWAY_PAYMENT_PA_METROBANK_CONFIG_MID", "103305");
    define("GATEWAY_PAYMENT_PA_METROBANK_CONFIG_TID", "103305001");
    define("GATEWAY_PAYMENT_PA_METROBANK_CONFIG_API_KEY", "*HEYTICS*2021_V1.0");
    define("GATEWAY_PAYMENT_PA_METROBANK_URL_SOAP", "https://gateway.merchantprocess.net/tokenV2/TokenWebService.asmx");

    // PA - Banco General Yappy
    define("GW_PAYMENT_PA_BANCOGENERAL_YAPPY_ID", 'b05e8896b16f216543088984886eaafe');
    define("GW_PAYMENT_PA_BANCOGENERAL_YAPPY_PASSWORD", 'QkdfMGYyMTc3MDViYTc5OWEwYjA5YTQuRnl5WnpaS1Fxa1VPdWM0dUlBcEwzeDRkeGVDeEhRSjV4N2ZZbU9ocQ==');
    define("GW_PAYMENT_PA_BANCOGENERAL_YAPPY_SANDBOX", false);
    define("GW_PAYMENT_PA_BANCOGENERAL_YAPPY_VERSION", 'P1.0.0');
}

// MODO - DESARROLLO
else if (ENVIRONMENT == "dev") {

    // STORE COMERCIOS
    $INVESTOR_STORE_ID = 22;

    // FIREBASE
    $FIREBASE_REALTIME_DB_ENV = "dev";

    // DB GENEXUS
    $GX_IP_BASE = "http://45.77.199.193:8080/";
    define("DB_GX_SERVER", "10.39.0.3");
    define("DB_GX_USER", "db_client");
    define("DB_GX_PASSWORD", "!H3yt1cs@2020@DB_Prod@!h9KEWEINkk#e82#49u1@j3@01o393%@");
    define("DB_GX_NAME", "heyticsdbdesarrollo");

    // GENEXUS
    define("GX_URL", "https://app.heytics.dev/heytics");
    define("GX_CLIENT_ID", "53a432d4a30e4e0eb72cc068156ba024");

    // Algolia
    define("ALGOLIA_INDEX_NAME", "Heytics_Marketplace_DEV");
    define("ALGOLIA_APPLICATION_ID", "0UGEMFJE2T");
    define("ALGOLIA_APPLICATION_KEY", "adb57ca6f5a94ab93c30652c68974a13");

    /**
     * CONFIGURACIONES DE EMISORES DE PAGOS
     */

    // PA - MetroBank
    define("GATEWAY_PAYMENT_PA_METROBANK_CONFIG_MID", "108066");
    define("GATEWAY_PAYMENT_PA_METROBANK_CONFIG_TID", "108066001");
    define("GATEWAY_PAYMENT_PA_METROBANK_CONFIG_API_KEY", "*HEYTICS*2020v1.0");
    define("GATEWAY_PAYMENT_PA_METROBANK_URL_SOAP", "http://tokenv2.test.merchantprocess.net/TokenWebService.asmx");

    // PA - Banco General Yappy
    define("GW_PAYMENT_PA_BANCOGENERAL_YAPPY_ID", "b05e8896b16f216543088984886eaafe");
    define("GW_PAYMENT_PA_BANCOGENERAL_YAPPY_PASSWORD", "QkdfMGYyMTc3MDViYTc5OWEwYjA5YTQuRnl5WnpaS1Fxa1VPdWM0dUlBcEwzeDRkeGVDeEhRSjV4N2ZZbU9ocQ==");
    define("GW_PAYMENT_PA_BANCOGENERAL_YAPPY_SANDBOX", false);
    define("GW_PAYMENT_PA_BANCOGENERAL_YAPPY_VERSION", 'P1.0.0');
}

// Heytics Investors
define("INVESTOR_STORE_ID", $INVESTOR_STORE_ID);

// FIREBASE STATIC;
define("FIREBASE_REALTIME_DB_NAME", "https://heytics-restaurant-sm-default-rtdb.firebaseio.com/");
define("FIREBASE_REALTIME_DB_ENV", '/' . $FIREBASE_REALTIME_DB_ENV);
define("FIREBASE_REALTIME_TOKEN", "gJt21EOMlLaMglDruW9ojiBCB0qtlsv6JFu7Dz3Z");


// STATIC 
define("URL_BASE", "https://cp.heytics." . ENVIRONMENT . "/");
define("URL_BASE_API", "https://api-v2.heytics." . ENVIRONMENT . "/");
define("URL_BASE_GX", "https://app.heytics." . ENVIRONMENT . "/");
define("URL_BASE_WWW", "https://www.heytics." . ENVIRONMENT . "/");
define("URL_BASE_WWW_COM", "https://www.heytics.com");
define("URL_BASE_GX_HEYTICS", URL_BASE_GX . "heytics/");
define("URL_BASE_STATIC_FILES", "https://static-files.heytics." . ENVIRONMENT . "/");
define("URL_BASE_VIDEO", "https://files-videos.heytics." . ENVIRONMENT . "/");
define("URL_BASE_PROFILE_IMG", "https://files-profiles.heytics." . ENVIRONMENT . "/");
define("URL_BASE_STORE_GX_STATEMENTS_PDF", "https://pdf-files.heytics." . ENVIRONMENT . "/stores/generate.php");
define("URL_BASE_MAIN_IMG_ADVERTISING_APP", URL_BASE_STATIC_FILES . "main/advertising_app/");
define("URL_BASE_MK_IMG_ADVERTISING_WEB", URL_BASE_STATIC_FILES . "marketplace/advertising_web/");
define("URL_BASE_MK_IMG_ADVERTISING_APP", URL_BASE_STATIC_FILES . "marketplace/advertising_app/");
define("URL_BASE_MK_IMG_PRODUCT", URL_BASE_STATIC_FILES . "marketplace/products/");
define("URL_BASE_MK_VIDEO_PRODUCT", URL_BASE_VIDEO);
define("URL_BASE_MK_IMG_TAGS", URL_BASE_STATIC_FILES . "marketplace/tags/");
define("URL_BASE_MK_IMG_ADDRESS_ICONS_COUNTRIES", URL_BASE_STATIC_FILES . "marketplace/badges_countries/");
define("URL_BASE_PHY_IMG_ADVERTISING", URL_BASE_STATIC_FILES . "physical/advertising/");
define("URL_BASE_PHY_IMG_ECONOMIC_ACTIVITY", URL_BASE_STATIC_FILES . "physical/economic_activity/");
define("URL_BASE_PHY_IMG_ECONOMIC_ADVERTISING", URL_BASE_STATIC_FILES . "physical/economic_advertising/");
define("URL_BASE_PAG_IMG_ADVERTISING_MAIN", URL_BASE_STATIC_FILES . "payandgo/advertising_main/");
define("URL_BASE_PAG_IMG_ADVERTISING_STORE", URL_BASE_STATIC_FILES . "payandgo/advertising_stores/");
define("URL_BASE_GD_IMG_PRODUCT", URL_BASE_STATIC_FILES . "godeliver/products/");
define("URL_BASE_GD_IMG_SUPPLIES", URL_BASE_STATIC_FILES . "godeliver/supplies/");
define("URL_BASE_SM_IMG_ECONOMIC_ACTIVITY", URL_BASE_STATIC_FILES . "smartmenu/economic_activity/");
define("URL_BASE_SM_IMG_FOOD_COURT", URL_BASE_STATIC_FILES . "smartmenu/food_courts/");


// END PAYMENT METHODS
define("GW_PAYMENT_PA_BANCOGENERAL_YAPPY_SUCCESS_URL", URL_BASE_WWW . '?gt=yappy&response=success');
define("GW_PAYMENT_PA_BANCOGENERAL_YAPPY_FAIL_URL", URL_BASE_WWW . '?gt=yappy&response=fail');
