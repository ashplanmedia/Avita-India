<?php

function bytesToHuman($bytes, $precision = 2)
{
    $units = [' bytes', ' KB', ' MB', ' GB', ' TB'];

    for ($i = 0; $bytes > 1024; $i++) {
        $bytes /= 1024;
    }

    return round($bytes, $precision) . $units[$i];
}

function enabled_countries(  ) {
    return ['in'];
}

function supported_language( $country ) {

    switch ( $country ) {
       
        case 'in':
            return ['en'];
        default:
            return ['en'];
    }

}

function facebookLinkForCountry( $country ) {

    switch ( $country ) {
        case 'in':  return 'https://www.facebook.com/AvitaIndia/';
        default:    return "";
    }
}

function instagramLinkForCountry( $country ) {

    switch ( $country ) {
        case 'in':  return 'https://www.instagram.com/avitaind/';
        default:    return "";
    }
}

function twitterLinkForCountry( $country ) {

    switch ( $country ) {
        case 'in':  return 'https://twitter.com/AvitaIndia';
        default:    return "";
    }
}

function metaKeywordByCountryAndLanguage( $country, $language ) {

    // Default
    $keyword = "The AVITA product series ranges from PC, smart home and IoT & has come to realisation based on three core values: Liberty, Diversity and Individualism";

    switch ( $country ) {
        case 'in':
            if ( $language == 'en') {
                $keyword = "The AVITA product series ranges from PC, smart home and IoT & has come to realisation based on three core values: Liberty, Diversity and Individualism";
            } else {
                $keyword = "The AVITA product series ranges from PC, smart home and IoT & has come to realisation based on three core values: Liberty, Diversity and Individualism";
            }
            break;
 
    }

    return $keyword;
}

function metaDescriptionByCountryAndLanguage( $country, $language ) {

    // Default
    $description = "At AVITA we believe in the wonder and power of the individual. We make premium technology products that not only fit your lifestyle but are representations of you.

    The AVITA product series which ranges from PC, smart home and IoT devices has come to realization based on three core values: Liberty, Diversity and Individualism for an exceptional and highly personal experience to the new generation of tech users..";

    switch ( $country ) {
        case 'in':
            if ( $language == 'en') {
                $description = "At AVITA we believe in the wonder and power of the individual. We make premium technology products that not only fit your lifestyle but are representations of you.
                The AVITA product series which ranges from PC, smart home and IoT devices has come to realization based on three core values: Liberty, Diversity and Individualism for an exceptional and highly personal experience to the new generation of tech users.";
            } else {
                $description = "At AVITA we believe in the wonder and power of the individual. We make premium technology products that not only fit your lifestyle but are representations of you.
                The AVITA product series which ranges from PC, smart home and IoT devices has come to realization based on three core values: Liberty, Diversity and Individualism for an exceptional and highly personal experience to the new generation of tech users.";
            }
            break;
       
    }

    return $description;

}


function googleAnalyticCode( $country ) {

    switch ( $country ) {
        case 'in' : return 'UA-128035503-6';
         }


    return 'UA-128035503-6';    // Default


}
