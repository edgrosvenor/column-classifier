<?php


namespace ColumnClassifier\Models;


use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Country extends Model
{

    use Sushi;

    protected $rows = [
        ["code" => "af", "country" => "afghanistan"],["code" => "al", "country" => "albania"],["code" => "dz", "country" => "algeria"],["code" => "as", "country" => "american samoa"],["code" => "ad", "country" => "andorra"],["code" => "ao", "country" => "angola"],["code" => "ai", "country" => "anguilla"],["code" => "aq", "country" => "antarctica"],["code" => "ag", "country" => "antigua and barbuda"],["code" => "ar", "country" => "argentina"],["code" => "am", "country" => "armenia"],["code" => "aw", "country" => "aruba"],["code" => "au", "country" => "australia"],["code" => "at", "country" => "austria"],["code" => "az", "country" => "azerbaijan"],["code" => "bs", "country" => "bahamas"],["code" => "bh", "country" => "bahrain"],["code" => "bd", "country" => "bangladesh"],["code" => "bb", "country" => "barbados"],["code" => "by", "country" => "belarus"],["code" => "be", "country" => "belgium"],["code" => "bz", "country" => "belize"],["code" => "bj", "country" => "benin"],["code" => "bm", "country" => "bermuda"],["code" => "bt", "country" => "bhutan"],["code" => "bo", "country" => "bolivia"],["code" => "ba", "country" => "bosnia and herzegovina"],["code" => "bw", "country" => "botswana"],["code" => "bv", "country" => "bouvet island"],["code" => "br", "country" => "brazil"],["code" => "io", "country" => "british indian ocean territory"],["code" => "bn", "country" => "brunei darussalam"],["code" => "bg", "country" => "bulgaria"],["code" => "bf", "country" => "burkina faso"],["code" => "bi", "country" => "burundi"],["code" => "kh", "country" => "cambodia"],["code" => "cm", "country" => "cameroon"],["code" => "ca", "country" => "canada"],["code" => "cv", "country" => "cape verde"],["code" => "ky", "country" => "cayman islands"],["code" => "cf", "country" => "central african republic"],["code" => "td", "country" => "chad"],["code" => "cl", "country" => "chile"],["code" => "cn", "country" => "china"],["code" => "cx", "country" => "christmas island"],["code" => "cc", "country" => "cocos (keeling) islands"],["code" => "co", "country" => "colombia"],["code" => "km", "country" => "comoros"],["code" => "cg", "country" => "congo"],["code" => "cd", "country" => "congo, the democratic republic of the"],["code" => "ck", "country" => "cook islands"],["code" => "cr", "country" => "costa rica"],["code" => "ci", "country" => "cote d'ivoire"],["code" => "hr", "country" => "croatia"],["code" => "cu", "country" => "cuba"],["code" => "cy", "country" => "cyprus"],["code" => "cz", "country" => "czech republic"],["code" => "dk", "country" => "denmark"],["code" => "dj", "country" => "djibouti"],["code" => "dm", "country" => "dominica"],["code" => "do", "country" => "dominican republic"],["code" => "tp", "country" => "east timor"],["code" => "ec", "country" => "ecuador"],["code" => "eg", "country" => "egypt"],["code" => "sv", "country" => "el salvador"],["code" => "gq", "country" => "equatorial guinea"],["code" => "er", "country" => "eritrea"],["code" => "ee", "country" => "estonia"],["code" => "et", "country" => "ethiopia"],["code" => "fk", "country" => "falkland islands (malvinas)"],["code" => "fo", "country" => "faroe islands"],["code" => "fj", "country" => "fiji"],["code" => "fi", "country" => "finland"],["code" => "fr", "country" => "france"],["code" => "gf", "country" => "french guiana"],["code" => "pf", "country" => "french polynesia"],["code" => "tf", "country" => "french southern territories"],["code" => "ga", "country" => "gabon"],["code" => "gm", "country" => "gambia"],["code" => "ge", "country" => "georgia"],["code" => "de", "country" => "germany"],["code" => "gh", "country" => "ghana"],["code" => "gi", "country" => "gibraltar"],["code" => "gr", "country" => "greece"],["code" => "gl", "country" => "greenland"],["code" => "gd", "country" => "grenada"],["code" => "gp", "country" => "guadeloupe"],["code" => "gu", "country" => "guam"],["code" => "gt", "country" => "guatemala"],["code" => "gn", "country" => "guinea"],["code" => "gw", "country" => "guinea-bissau"],["code" => "gy", "country" => "guyana"],["code" => "ht", "country" => "haiti"],["code" => "hm", "country" => "heard island and mcdonald islands"],["code" => "va", "country" => "holy see (vatican city state)"],["code" => "hn", "country" => "honduras"],["code" => "hk", "country" => "hong kong"],["code" => "hu", "country" => "hungary"],["code" => "is", "country" => "iceland"],["code" => "in", "country" => "india"],["code" => "id", "country" => "indonesia"],["code" => "ir", "country" => "iran, islamic republic of"],["code" => "iq", "country" => "iraq"],["code" => "ie", "country" => "ireland"],["code" => "il", "country" => "israel"],["code" => "it", "country" => "italy"],["code" => "jm", "country" => "jamaica"],["code" => "jp", "country" => "japan"],["code" => "jo", "country" => "jordan"],["code" => "kz", "country" => "kazakstan"],["code" => "ke", "country" => "kenya"],["code" => "ki", "country" => "kiribati"],["code" => "kp", "country" => "korea, democratic people's republic of"],["code" => "kr", "country" => "korea, republic of"],["code" => "kv", "country" => "kosovo"],["code" => "kw", "country" => "kuwait"],["code" => "kg", "country" => "kyrgyzstan"],["code" => "la", "country" => "lao people's democratic republic"],["code" => "lv", "country" => "latvia"],["code" => "lb", "country" => "lebanon"],["code" => "ls", "country" => "lesotho"],["code" => "lr", "country" => "liberia"],["code" => "ly", "country" => "libyan arab jamahiriya"],["code" => "li", "country" => "liechtenstein"],["code" => "lt", "country" => "lithuania"],["code" => "lu", "country" => "luxembourg"],["code" => "mo", "country" => "macau"],["code" => "mk", "country" => "macedonia, the former yugoslav republic of"],["code" => "mg", "country" => "madagascar"],["code" => "mw", "country" => "malawi"],["code" => "my", "country" => "malaysia"],["code" => "mv", "country" => "maldives"],["code" => "ml", "country" => "mali"],["code" => "mt", "country" => "malta"],["code" => "mh", "country" => "marshall islands"],["code" => "mq", "country" => "martinique"],["code" => "mr", "country" => "mauritania"],["code" => "mu", "country" => "mauritius"],["code" => "yt", "country" => "mayotte"],["code" => "mx", "country" => "mexico"],["code" => "fm", "country" => "micronesia, federated states of"],["code" => "md", "country" => "moldova, republic of"],["code" => "mc", "country" => "monaco"],["code" => "mn", "country" => "mongolia"],["code" => "ms", "country" => "montserrat"],["code" => "me", "country" => "montenegro"],["code" => "ma", "country" => "morocco"],["code" => "mz", "country" => "mozambique"],["code" => "mm", "country" => "myanmar"],["code" => "na", "country" => "namibia"],["code" => "nr", "country" => "nauru"],["code" => "np", "country" => "nepal"],["code" => "nl", "country" => "netherlands"],["code" => "an", "country" => "netherlands antilles"],["code" => "nc", "country" => "new caledonia"],["code" => "nz", "country" => "new zealand"],["code" => "ni", "country" => "nicaragua"],["code" => "ne", "country" => "niger"],["code" => "ng", "country" => "nigeria"],["code" => "nu", "country" => "niue"],["code" => "nf", "country" => "norfolk island"],["code" => "mp", "country" => "northern mariana islands"],["code" => "no", "country" => "norway"],["code" => "om", "country" => "oman"],["code" => "pk", "country" => "pakistan"],["code" => "pw", "country" => "palau"],["code" => "ps", "country" => "palestinian territory, occupied"],["code" => "pa", "country" => "panama"],["code" => "pg", "country" => "papua new guinea"],["code" => "py", "country" => "paraguay"],["code" => "pe", "country" => "peru"],["code" => "ph", "country" => "philippines"],["code" => "pn", "country" => "pitcairn"],["code" => "pl", "country" => "poland"],["code" => "pt", "country" => "portugal"],["code" => "pr", "country" => "puerto rico"],["code" => "qa", "country" => "qatar"],["code" => "re", "country" => "reunion"],["code" => "ro", "country" => "romania"],["code" => "ru", "country" => "russian federation"],["code" => "rw", "country" => "rwanda"],["code" => "sh", "country" => "saint helena"],["code" => "kn", "country" => "saint kitts and nevis"],["code" => "lc", "country" => "saint lucia"],["code" => "pm", "country" => "saint pierre and miquelon"],["code" => "vc", "country" => "saint vincent and the grenadines"],["code" => "ws", "country" => "samoa"],["code" => "sm", "country" => "san marino"],["code" => "st", "country" => "sao tome and principe"],["code" => "sa", "country" => "saudi arabia"],["code" => "sn", "country" => "senegal"],["code" => "rs", "country" => "serbia"],["code" => "sc", "country" => "seychelles"],["code" => "sl", "country" => "sierra leone"],["code" => "sg", "country" => "singapore"],["code" => "sk", "country" => "slovakia"],["code" => "si", "country" => "slovenia"],["code" => "sb", "country" => "solomon islands"],["code" => "so", "country" => "somalia"],["code" => "za", "country" => "south africa"],["code" => "gs", "country" => "south georgia and the south sandwich islands"],["code" => "es", "country" => "spain"],["code" => "lk", "country" => "sri lanka"],["code" => "sd", "country" => "sudan"],["code" => "sr", "country" => "suriname"],["code" => "sj", "country" => "svalbard and jan mayen"],["code" => "sz", "country" => "swaziland"],["code" => "se", "country" => "sweden"],["code" => "ch", "country" => "switzerland"],["code" => "sy", "country" => "syrian arab republic"],["code" => "tw", "country" => "taiwan, province of china"],["code" => "tj", "country" => "tajikistan"],["code" => "tz", "country" => "tanzania, united republic of"],["code" => "th", "country" => "thailand"],["code" => "tg", "country" => "togo"],["code" => "tk", "country" => "tokelau"],["code" => "to", "country" => "tonga"],["code" => "tt", "country" => "trinidad and tobago"],["code" => "tn", "country" => "tunisia"],["code" => "tr", "country" => "turkey"],["code" => "tm", "country" => "turkmenistan"],["code" => "tc", "country" => "turks and caicos islands"],["code" => "tv", "country" => "tuvalu"],["code" => "ug", "country" => "uganda"],["code" => "ua", "country" => "ukraine"],["code" => "ae", "country" => "united arab emirates"],["code" => "gb", "country" => "united kingdom"],["code" => "us", "country" => "united states"],["code" => "um", "country" => "united states minor outlying islands"],["code" => "uy", "country" => "uruguay"],["code" => "uz", "country" => "uzbekistan"],["code" => "vu", "country" => "vanuatu"],["code" => "ve", "country" => "venezuela"],["code" => "vn", "country" => "viet nam"],["code" => "vg", "country" => "virgin islands, british"],["code" => "vi", "country" => "virgin islands, u.s."],["code" => "wf", "country" => "wallis and futuna"],["code" => "eh", "country" => "western sahara"],["code" => "ye", "country" => "yemen"],["code" => "zm", "country" => "zambia"],["code" => "zw", "country" => "zimbabwe"],
    ];
}