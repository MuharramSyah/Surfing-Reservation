<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB; // Use DB facade for simpler inserts


class Countryseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1e8.svg",
                "country" => "Ascension Island",
                "code" => "ac"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1e9.svg",
                "country" => "Andorra",
                "code" => "ad"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1ea.svg",
                "country" => "United Arab Emirates",
                "code" => "ae"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1eb.svg",
                "country" => "Afghanistan",
                "code" => "af"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1ec.svg",
                "country" => "Antigua & Barbuda",
                "code" => "ag"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1ee.svg",
                "country" => "Anguilla",
                "code" => "ai"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1f1.svg",
                "country" => "Albania",
                "code" => "al"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1f2.svg",
                "country" => "Armenia",
                "code" => "am"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1f4.svg",
                "country" => "Angola",
                "code" => "ad"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1f6.svg",
                "country" => "Antarctica",
                "code" => "aq"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1f7.svg",
                "country" => "Argentina",
                "code" => "ar"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1f8.svg",
                "country" => "American Samoa",
                "code" => "as"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1f9.svg",
                "country" => "Austria",
                "code" => "at"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1fa.svg",
                "country" => "Australia",
                "code" => "au"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1fc.svg",
                "country" => "Aruba",
                "code" => "aw"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1fd.svg",
                "country" => "Åland Islands",
                "code" => "ax"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e6-1f1ff.svg",
                "country" => "Azerbaijan",
                "code" => "az"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1e6.svg",
                "country" => "Bosnia & Herzegovina",
                "code" => "ba"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1e7.svg",
                "country" => "Barbados",
                "code" => "bb"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1e9.svg",
                "country" => "Bangladesh",
                "code" => "bd"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1ea.svg",
                "country" => "Belgium",
                "code" => "be"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1eb.svg",
                "country" => "Burkina Faso",
                "code" => "bf"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1ec.svg",
                "country" => "Bulgaria",
                "code" => "bg"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1ed.svg",
                "country" => "Bahrain",
                "code" => "bh"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1ee.svg",
                "country" => "Burundi",
                "code" => "bi"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1ef.svg",
                "country" => "Benin",
                "code" => "bj"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1f1.svg",
                "country" => "St. Barthélemy",
                "code" => "bl"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1f2.svg",
                "country" => "Bermuda",
                "code" => "bm"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1f3.svg",
                "country" => "Brunei",
                "code" => "bn"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1f4.svg",
                "country" => "Bolivia",
                "code" => "bo"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1f6.svg",
                "country" => "Caribbean Netherlands",
                "code" => "bq"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1f7.svg",
                "country" => "Brazil",
                "code" => "br"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1f8.svg",
                "country" => "Bahamas",
                "code" => "bs"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1f9.svg",
                "country" => "Bhutan",
                "code" => "bt"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1fb.svg",
                "country" => "Bouvet Island",
                "code" => "bv"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1fc.svg",
                "country" => "Botswana",
                "code" => "bw"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1fe.svg",
                "country" => "Belarus",
                "code" => "by"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e7-1f1ff.svg",
                "country" => "Belize",
                "code" => "bz"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1e6.svg",
                "country" => "Canada",
                "code" => "ca"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1e8.svg",
                "country" => "Cocos (Keeling) Islands",
                "code" => "cc"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1e9.svg",
                "country" => "Congo - Kinshasa",
                "code" => "cg"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1eb.svg",
                "country" => "Central African Republic",
                "code" => "cf"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1ec.svg",
                "country" => "Congo - Brazzaville",
                "code" => "cd"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1ed.svg",
                "country" => "Switzerland",
                "code" => "ch"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1ee.svg",
                "country" => "Côte d’Ivoire",
                "code" => "ci"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1f0.svg",
                "country" => "Cook Islands",
                "code" => "ck"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1f1.svg",
                "country" => "Chile",
                "code" => "cl"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1f2.svg",
                "country" => "Cameroon",
                "code" => "cm"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1f3.svg",
                "country" => "China",
                "code" => "cn"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1f4.svg",
                "country" => "Colombia",
                "code" => "co"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1f5.svg",
                "country" => "Clipperton Island",
                "code" => "cp"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1f7.svg",
                "country" => "Costa Rica",
                "code" => "cr"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1fa.svg",
                "country" => "Cuba",
                "code" => "cu"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1fb.svg",
                "country" => "Cape Verde",
                "code" => "cv"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1fc.svg",
                "country" => "Curaçao",
                "code" => "cw"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1fd.svg",
                "country" => "Christmas Island",
                "code" => "cx"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1fe.svg",
                "country" => "Cyprus",
                "code" => "cy"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e8-1f1ff.svg",
                "country" => "Czechia",
                "code" => "cz"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e9-1f1ea.svg",
                "country" => "Germany",
                "code" => "de"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e9-1f1ec.svg",
                "country" => "Diego Garcia",
                "code" => "dg"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e9-1f1ef.svg",
                "country" => "Djibouti",
                "code" => "dj"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e9-1f1f0.svg",
                "country" => "Denmark",
                "code" => "dk"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e9-1f1f2.svg",
                "country" => "Dominica",
                "code" => "dm"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e9-1f1f4.svg",
                "country" => "Dominican Republic",
                "code" => "do"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1e9-1f1ff.svg",
                "country" => "Algeria",
                "code" => "dz"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ea-1f1e6.svg",
                "country" => "Ceuta & Melilla",
                "code" => "ea"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ea-1f1e8.svg",
                "country" => "Ecuador",
                "code" => "ec"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ea-1f1ea.svg",
                "country" => "Estonia",
                "code" => "ee"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ea-1f1ec.svg",
                "country" => "Egypt",
                "code" => "eg"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ea-1f1ed.svg",
                "country" => "Western Sahara",
                "code" => "eh"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ea-1f1f7.svg",
                "country" => "Eritrea",
                "code" => "er"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ea-1f1f8.svg",
                "country" => "Spain",
                "code" => "es"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ea-1f1f9.svg",
                "country" => "Ethiopia",
                "code" => "et"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ea-1f1fa.svg",
                "country" => "European Union",
                "code" => "eu"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1eb-1f1ee.svg",
                "country" => "Finland",
                "code" => "fi"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1eb-1f1ef.svg",
                "country" => "Fiji",
                "code" => "fj"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1eb-1f1f0.svg",
                "country" => "Falkland Islands",
                "code" => "fk"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1eb-1f1f2.svg",
                "country" => "Micronesia",
                "code" => "fm"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1eb-1f1f4.svg",
                "country" => "Faroe Islands",
                "code" => "fo"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1eb-1f1f7.svg",
                "country" => "France",
                "code" => "fr"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1e6.svg",
                "country" => "Gabon",
                "code" => "ga"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1e7.svg",
                "country" => "United Kingdom",
                "code" => "gb"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1e9.svg",
                "country" => "Grenada",
                "code" => "gd"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1ea.svg",
                "country" => "Georgia",
                "code" => "ge"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1eb.svg",
                "country" => "French Guiana",
                "code" => "gf"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1ec.svg",
                "country" => "Guernsey",
                "code" => "gg"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1ed.svg",
                "country" => "Ghana",
                "code" => "gh"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1ee.svg",
                "country" => "Gibraltar",
                "code" => "gi"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1f1.svg",
                "country" => "Greenland",
                "code" => "gl"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1f2.svg",
                "country" => "Gambia",
                "code" => "gm"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1f3.svg",
                "country" => "Guinea",
                "code" => "gn"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1f5.svg",
                "country" => "Guadeloupe",
                "code" => "gp"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1f6.svg",
                "country" => "Equatorial Guinea",
                "code" => "gq"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1f7.svg",
                "country" => "Greece",
                "code" => "gr"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1f8.svg",
                "country" => "South Georgia & South', Sandwich Islands",
                "code" => "gs"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1f9.svg",
                "country" => "Guatemala",
                "code" => "gt"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1fa.svg",
                "country" => "Guam",
                "code" => "gu"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1fc.svg",
                "country" => "Guinea-Bissau",
                "code" => "gw"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ec-1f1fe.svg",
                "country" => "Guyana",
                "code" => "gy"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ed-1f1f0.svg",
                "country" => "Hong Kong SAR China",
                "code" => "hk"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ed-1f1f2.svg",
                "country" => "Heard & McDonald Islands",
                "code" => "hm"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ed-1f1f3.svg",
                "country" => "Honduras",
                "code" => "hn"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ed-1f1f7.svg",
                "country" => "Croatia",
                "code" => "hr"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ed-1f1f9.svg",
                "country" => "Haiti",
                "code" => "ht"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ed-1f1fa.svg",
                "country" => "Hungary",
                "code" => "hu"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ee-1f1e8.svg",
                "country" => "Canary Islands",
                "code" => "ic"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ee-1f1e9.svg",
                "country" => "Indonesia",
                "code" => "id"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ee-1f1ea.svg",
                "country" => "Ireland",
                "code" => "ie"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ee-1f1f1.svg",
                "country" => "Israel",
                "code" => "il"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ee-1f1f2.svg",
                "country" => "Isle of Man",
                "code" => "im"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ee-1f1f3.svg",
                "country" => "India",
                "code" => "in"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ee-1f1f4.svg",
                "country" => "British Indian Ocean Territory",
                "code" => "io"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ee-1f1f6.svg",
                "country" => "Iraq",
                "code" => "iq"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ee-1f1f7.svg",
                "country" => "Iran",
                "code" => "ir",
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ee-1f1f8.svg",
                "country" => "Iceland",
                "code" => "is"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ee-1f1f9.svg",
                "country" => "Italy",
                "code" => "it"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ef-1f1ea.svg",
                "country" => "Jersey",
                "code" => "je"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ef-1f1f2.svg",
                "country" => "Jamaica",
                "code" => "jm"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ef-1f1f4.svg",
                "country" => "Jordan",
                "code" => "jo"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ef-1f1f5.svg",
                "country" => "Japan",
                "code" => "jp"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f0-1f1ea.svg",
                "country" => "Kenya",
                "code" => "ke"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f0-1f1ec.svg",
                "country" => "Kyrgyzstan",
                "code" => "kg"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f0-1f1ed.svg",
                "country" => "Cambodia",
                "code" => "kh"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f0-1f1ee.svg",
                "country" => "Kiribati",
                "code" => "ki"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f0-1f1f2.svg",
                "country" => "Comoros",
                "code" => "km"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f0-1f1f3.svg",
                "country" => "St. Kitts & Nevis",
                "code" => "kn"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f0-1f1f5.svg",
                "country" => "North Korea",
                "code" => "kp"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f0-1f1f7.svg",
                "country" => "South Korea",
                "code" => "kr"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f0-1f1fc.svg",
                "country" => "Kuwait",
                "code" => "kw"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f0-1f1fe.svg",
                "country" => "Cayman Islands",
                "code" => "ky"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f0-1f1ff.svg",
                "country" => "Kazakhstan",
                "code" => "kz"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f1-1f1e6.svg",
                "country" => "Laos",
                "code" => "la"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f1-1f1e7.svg",
                "country" => "Lebanon",
                "code" => "lb"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f1-1f1e8.svg",
                "country" => "St. Lucia",
                "code" => "lc"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f1-1f1ee.svg",
                "country" => "Liechtenstein",
                "code" => "li"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f1-1f1f0.svg",
                "country" => "Sri Lanka",
                "code" => "lk"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f1-1f1f7.svg",
                "country" => "Liberia",
                "code" => "lr"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f1-1f1f8.svg",
                "country" => "Lesotho",
                "code" => "ls"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f1-1f1f9.svg",
                "country" => "Lithuania",
                "code" => "lt"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f1-1f1fa.svg",
                "country" => "Luxembourg",
                "code" => "lu"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f1-1f1fb.svg",
                "country" => "Latvia",
                "code" => "lv"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f1-1f1fe.svg",
                "country" => "Libya",
                "code" => "ly"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1e6.svg",
                "country" => "Morocco",
                "code" => "ma"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1e8.svg",
                "country" => "Monaco",
                "code" => "mc"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1e9.svg",
                "country" => "Moldova",
                "code" => "md"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1ea.svg",
                "country" => "Montenegro",
                "code" => "me"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1eb.svg",
                "country" => "St. Martin",
                "code" => "mf"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1ec.svg",
                "country" => "Madagascar",
                "code" => "mg"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1ed.svg",
                "country" => "Marshall Islands",
                "code" => "mh"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1f0.svg",
                "country" => "North Macedonia",
                "code" => "mk"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1f1.svg",
                "country" => "Mali",
                "code" => "ml"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1f2.svg",
                "country" => "Myanmar (Burma)",
                "code" => "mm"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1f3.svg",
                "country" => "Mongolia",
                "code" => "mn"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1f4.svg",
                "country" => "Macao Sar China",
                "code" => "mo"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1f5.svg",
                "country" => "Northern Mariana Islands",
                "code" => "mp"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1f6.svg",
                "country" => "Martinique",
                "code" => "mq"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1f7.svg",
                "country" => "Mauritania",
                "code" => "mr"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1f8.svg",
                "country" => "Montserrat",
                "code" => "ms"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1f9.svg",
                "country" => "Malta",
                "code" => "mt"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1fa.svg",
                "country" => "Mauritius",
                "code" => "mu"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1fb.svg",
                "country" => "Maldives",
                "code" => "mv"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1fc.svg",
                "country" => "Malawi",
                "code" => "mw"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1fd.svg",
                "country" => "Mexico",
                "code" => "mx"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1fe.svg",
                "country" => "Malaysia",
                "code" => "my"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f2-1f1ff.svg",
                "country" => "Mozambique",
                "code" => "mz"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f3-1f1e6.svg",
                "country" => "Namibia",
                "code" => "na"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f3-1f1e8.svg",
                "country" => "New Caledonia",
                "code" => "nc"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f3-1f1ea.svg",
                "country" => "Niger",
                "code" => "ne"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f3-1f1eb.svg",
                "country" => "Norfolk Island",
                "code" => "nf"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f3-1f1ec.svg",
                "country" => "Nigeria",
                "code" => "ng"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f3-1f1ee.svg",
                "country" => "Nicaragua",
                "code" => "ni"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f3-1f1f1.svg",
                "country" => "Netherlands",
                "code" => "nl"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f3-1f1f4.svg",
                "country" => "Norway",
                "code" => "no"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f3-1f1f5.svg",
                "country" => "Nepal",
                "code" => "np"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f3-1f1f7.svg",
                "country" => "Nauru",
                "code" => "nr"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f3-1f1fa.svg",
                "country" => "Niue",
                "code" => "nu"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f3-1f1ff.svg",
                "country" => "New Zealand",
                "code" => "nz"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f4-1f1f2.svg",
                "country" => "Oman",
                "code" => "om"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f5-1f1e6.svg",
                "country" => "Panama",
                "code" => "pa"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f5-1f1ea.svg",
                "country" => "Peru",
                "code" => "pe"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f5-1f1eb.svg",
                "country" => "French Polynesia",
                "code" => "pf"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f5-1f1ec.svg",
                "country" => "Papua New Guinea",
                "code" => "pg"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f5-1f1ed.svg",
                "country" => "Philippines",
                "code" => "ph"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f5-1f1f0.svg",
                "country" => "Pakistan",
                "code" => "pk"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f5-1f1f1.svg",
                "country" => "Poland",
                "code" => "pl"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f5-1f1f2.svg",
                "country" => "St. Pierre & Miquelon",
                "code" => "pm"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f5-1f1f3.svg",
                "country" => "Pitcairn Islands",
                "code" => "pn"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f5-1f1f7.svg",
                "country" => "Puerto Rico",
                "code" => "pr"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f5-1f1f8.svg",
                "country" => "Palestinian Territories",
                "code" => "ps"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f5-1f1f9.svg",
                "country" => "Portugal",
                "code" => "pt"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f5-1f1fc.svg",
                "country" => "Palau",
                "code" => "pw"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f5-1f1fe.svg",
                "country" => "Paraguay",
                "code" => "py"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f6-1f1e6.svg",
                "country" => "Qatar",
                "code" => "qa"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f7-1f1ea.svg",
                "country" => "Réunion",
                "code" => "re"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f7-1f1f4.svg",
                "country" => "Romania",
                "code" => "ro"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f7-1f1f8.svg",
                "country" => "Serbia",
                "code" => "yu"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f7-1f1fa.svg",
                "country" => "Russia",
                "code" => "ru"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f7-1f1fc.svg",
                "country" => "Rwanda",
                "code" => "rw"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1e6.svg",
                "country" => "Saudi Arabia",
                "code" => "sa"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1e7.svg",
                "country" => "Solomon Islands",
                "code" => "sb"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1e8.svg",
                "country" => "Seychelles",
                "code" => "sc"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1e9.svg",
                "country" => "Sudan",
                "code" => "sd"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1ea.svg",
                "country" => "Sweden",
                "code" => "se"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1ec.svg",
                "country" => "Singapore",
                "code" => "sg"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1ed.svg",
                "country" => "St. Helena",
                "code" => "sh"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1ee.svg",
                "country" => "Slovenia",
                "code" => "si"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1ef.svg",
                "country" => "Svalbard & Jan Mayen",
                "code" => "sj"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1f0.svg",
                "country" => "Slovakia",
                "code" => "sk"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1f1.svg",
                "country" => "Sierra Leone",
                "code" => "sl"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1f2.svg",
                "country" => "San Marino",
                "code" => "sm"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1f3.svg",
                "country" => "Senegal",
                "code" => "sn"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1f4.svg",
                "country" => "Somalia",
                "code" => "so"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1f7.svg",
                "country" => "Suriname",
                "code" => "sr"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1f8.svg",
                "country" => "South Sudan",
                "code" => "ss"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1f9.svg",
                "country" => "São Tomé & Príncipe",
                "code" => "st"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1fb.svg",
                "country" => "El Salvador",
                "code" => "sv"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1fd.svg",
                "country" => "Sint Maarten",
                "code" => "sx"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1fe.svg",
                "country" => "Syria",
                "code" => "sy"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f8-1f1ff.svg",
                "country" => "Eswatini",
                "code" => "sz"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1e6.svg",
                "country" => "Tristan Da Cunha",
                "code" => "sh"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1e8.svg",
                "country" => "Turks & Caicos Islands",
                "code" => "tc"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1e9.svg",
                "country" => "Chad",
                "code" => "td"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1eb.svg",
                "country" => "French Southern Territories",
                "code" => "tf"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1ec.svg",
                "country" => "Togo",
                "code" => "tg"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1ed.svg",
                "country" => "Thailand",
                "code" => "th"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1ef.svg",
                "country" => "Tajikistan",
                "code" => "tj"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1f0.svg",
                "country" => "Tokelau",
                "code" => "tk"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1f1.svg",
                "country" => "Timor-Leste",
                "code" => "tl"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1f2.svg",
                "country" => "Turkmenistan",
                "code" => "tm"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1f3.svg",
                "country" => "Tunisia",
                "code" => "tn"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1f4.svg",
                "country" => "Tonga",
                "code" => "to"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1f7.svg",
                "country" => "Turkey",
                "code" => "tr"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1f9.svg",
                "country" => "Trinidad & Tobago",
                "code" => "tt"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1fb.svg",
                "country" => "Tuvalu",
                "code" => "tv"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1fc.svg",
                "country" => "Taiwan",
                "code" => "tw"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1f9-1f1ff.svg",
                "country" => "Tanzania",
                "code" => "tz"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fa-1f1e6.svg",
                "country" => "Ukraine",
                "code" => "ua"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fa-1f1ec.svg",
                "country" => "Uganda",
                "code" => "ug"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fa-1f1f2.svg",
                "country" => "U.S. Outlying Islands",
                "code" => "um"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fa-1f1f3.svg",
                "country" => "United Nations",
                "code" => "un"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fa-1f1f8.svg",
                "country" => "United States",
                "code" => "us"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fa-1f1fe.svg",
                "country" => "Uruguay",
                "code" => "uy"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fa-1f1ff.svg",
                "country" => "Uzbekistan",
                "code" => "uz"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fb-1f1e6.svg",
                "country" => "Vatican City",
                "code" => "va"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fb-1f1e8.svg",
                "country" => "St. Vincent & Grenadines",
                "code" => "vc"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fb-1f1ea.svg",
                "country" => "Venezuela",
                "code" => "ve"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fb-1f1ec.svg",
                "country" => "British Virgin Islands",
                "code" => "vg"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fb-1f1ee.svg",
                "country" => "U.S. Virgin Islands",
                "code" => "vi"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fb-1f1f3.svg",
                "country" => "Vietnam",
                "code" => "vn"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fb-1f1fa.svg",
                "country" => "Vanuatu",
                "code" => "vu"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fc-1f1eb.svg",
                "country" => "Wallis & Futuna",
                "code" => "wf"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fc-1f1f8.svg",
                "country" => "Samoa",
                "code" => "ws"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fd-1f1f0.svg",
                "country" => "Kosovo",
                "code" => "xk"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fe-1f1ea.svg",
                "country" => "Yemen",
                "code" => "ye"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1fe-1f1f9.svg",
                "country" => "Mayotte",
                "code" => "yt"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ff-1f1e6.svg",
                "country" => "South Africa",
                "code" => "za"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ff-1f1f2.svg",
                "country" => "Zambia",
                "code" => "zm"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f1ff-1f1fc.svg",
                "country" => "Zimbabwe",
                "code" => "zw"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f3f4-e0067-e0062-e0065-e006e-e0067-e007f.svg",
                "country" => "England",
                "code" => "uk"
            ],
            ["created_at" => Carbon::now(), "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f3f4-e0067-e0062-e0073-e0063-e0074-e007f.svg",
                "country" => "Scotland",
                "code" => "uk"
            ],
            [
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
                "flag" => "https://twemoji.maxcdn.com/2/svg/1f3f4-e0067-e0062-e0077-e006c-e0073-e007f.svg",
                "country" => "Wales",
                "code" => "uk"
            ]
        ];

        DB::table('countries')->insert($countries);
    }
}
