<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class GamesData
{

    public static function allGamesAccounts() {
        $games = [
            [
                "id" => 1,
                'cover' => "cod-cover.jpg",
                "name"=> "Call of Duty Mobile",
                'desc' => "Harga sudah termasuk PPN. Informasi tambahan, untuk transaksi menggunakan Telkomsel akan dikenakan biaya tambahan pajak.
                Bayarlah pakai QRIS, GoPay, OVO, Bank Transfer, Indosat, Tri Indonesia, XL Axiata, Smartfren, DANA, Shopee Pay, LinkAja, Kredivo, Alfamart, Indomaret, Codacash, DOKU, dan kartu kredit.
                Unduh dan mainkan sekarang!",
                "accounts" => [
                    [
                        "spec" => "1 legend weapon | 67 epic weapon | 20 epic chararacter",
                        "price" => 250000,
                        "email" => "adit@gmail.com",
                        "password" => "pentastore",
                    ],
                    [
                        "spec" => "1 legend weapon | 310 epic weapon | 157 epic character",
                        "price" => 150000,
                        "email" => "fandi@gmail.com",
                        "password" => "pentastore",
                    ],
                ]
            ],
            [
                "id" => 2,
                "name"=> "Gensin Impact",
                'cover' => "genshin-cover.png",
                "name"=> "Gensin Impact",
                'desc' => "Harga sudah termasuk PPN. Informasi tambahan, untuk transaksi menggunakan Telkomsel akan dikenakan biaya tambahan pajak.
                Bayarlah pakai QRIS, GoPay, OVO, Bank Transfer, Indosat, Tri Indonesia, XL Axiata, Smartfren, DANA, Shopee Pay, LinkAja, Kredivo, Alfamart, Indomaret, Codacash, DOKU, dan kartu kredit.
                Unduh dan mainkan sekarang!",
                "nominal" => [
                    "70 Gensin Crystal" => 17000,
                    "300 Gensin Crystal" => 75000,
                    "1000 Gensin Crystal" => 200000,
                    "2000 Gensin Crystal" => 400000,
                    "3000 Gensin Crystal" => 800000,
                ],
                "accounts" => [
                    [
                        "spec" => "Akun SSR | Asia Server | AR58 | 16 Karakter B5(6 CONS) | 5 Weapon B5 (2SIGNATURE) | 4 Skin well Build Akun",
                        "price" => 200000,
                        "email" => "iwan@gmail.com",
                        "password" => "pentastore",
                    ],
                ]
            ],
            [
                "id" => 3,
                "name"=> "FC Mobile",
                "cover" => "fc-cover.jpeg",
                'desc' => "Harga sudah termasuk PPN. Informasi tambahan, untuk transaksi menggunakan Telkomsel akan dikenakan biaya tambahan pajak.
                Bayarlah pakai QRIS, GoPay, OVO, Bank Transfer, Indosat, Tri Indonesia, XL Axiata, Smartfren, DANA, Shopee Pay, LinkAja, Kredivo, Alfamart, Indomaret, Codacash, DOKU, dan kartu kredit.
                Unduh dan mainkan sekarang!",
                "nominal" => [
                    "50 FC" => 7000,
                    "100 FC" => 13500,
                    "500 FC" => 80000,
                    "1000 FC" => 150000,
                    "2000 FC" => 290000,
                ],
                "accounts" => [
                    [
                        "spec" => "Coin FC 17 juta | Permata 13k | Dudek 6  | Mascherano 3",
                        "price" => 100000,
                        "email" => "Ridogaming88@gmail.com",
                        "password" => "pentastore",
                    ],
                ]
            ],
            [
                "id" => 4,
                "name"=> "Ragnarok X Mobile",
                'cover'  => "radnarok-cover.jpeg",
                'desc'  => "Harga sudah termasuk PPN. Informasi tambahan, untuk transaksi menggunakan Telkomsel akan dikenakan biaya tambahan pajak.
                Bayarlah pakai QRIS, GoPay, OVO, Bank Transfer, Indosat, Tri Indonesia, XL Axiata, Smartfren, DANA, Shopee Pay, LinkAja, Kredivo, Alfamart, Indomaret, Codacash, DOKU, dan kartu kredit.
                Unduh dan mainkan sekarang!",
                "nominal" => [
                    "2300 Diamonds" => 70000,
                    "5000 Diamonds" => 160000,
                    "10000 Diamonds" => 300000,
                    "16000 Diamonds" => 550000,
                    "32000 Diamonds" => 1000000,
                ],
                "accounts" => [
                    [
                        "spec" => "WTS dagger | Gipsy Frentic Land 83/59 | Bragi-KOF | AU 5 | AE 4",
                        "price" => 600000,
                        "email" => "gamingsejati56@gmail.com",
                        "password" => "pentastore",
                    ],
                ]
            ],
            [
                "id" => 5,
                "name"=> "Clash Of Clans",
                'cover' => 'coc-cover.png',
                'desc'  => "Harga sudah termasuk PPN. Informasi tambahan, untuk transaksi menggunakan Telkomsel akan dikenakan biaya tambahan pajak.
                Bayarlah pakai QRIS, GoPay, OVO, Bank Transfer, Indosat, Tri Indonesia, XL Axiata, Smartfren, DANA, Shopee Pay, LinkAja, Kredivo, Alfamart, Indomaret, Codacash, DOKU, dan kartu kredit.
                Unduh dan mainkan sekarang!",
                "nominal" => [
                    "100 Gems" => 20000,
                    "500 Gems" => 70000,
                    "2500 Gems" => 300000,
                    "6500 Gems" => 750000,
                    "14000 Gems" => 1400000,
                ],
                "accounts" => [
                    [
                        "spec" => "Town Hall Level 15 | Gems 2597 | Highest Trophies 5415 | Barbarian King Level 83 | Archer Queen Level 83 | Royal Champion Level 30 | Grand Warden Level 55",
                        "price" => 1500000,
                        "email" => "pejuangtangguh47@gmail.com",
                        "password" => "pentastore",
                    ],
                ]
            ],
            [
                "id" => 6,
                "name"=> "Mobile Legend",
                'cover' => 'ml-cover.jpg',
                'desc'  => "Harga sudah termasuk PPN. Informasi tambahan, untuk transaksi menggunakan Telkomsel akan dikenakan biaya tambahan pajak.
                Bayarlah pakai QRIS, GoPay, OVO, Bank Transfer, Indosat, Tri Indonesia, XL Axiata, Smartfren, DANA, Shopee Pay, LinkAja, Kredivo, Alfamart, Indomaret, Codacash, DOKU, dan kartu kredit.
                Unduh dan mainkan sekarang!",
                "nominal" => [
                    "44 Diamonds" => 12000,
                    "170 Diamonds" => 45000,
                    "568 Diamonds" => 150000,
                    "2010 Diamonds" => 500000,
                    "3010 Diamonds" => 1000000,
                ],
                "accounts" => [
                    [
                        "spec" => "Rank Epic | 122 Heroes 180 Skin | Venom Dyroth | 2 Epic Shop | Lightborn Alucard | 6 Starlight | 18 Special | 7 Emblem Max",
                        "price" => 885000,
                        "email" => "aldi@gmail.com",
                        "password" => "pentastore",
                    ],
                    [
                        "spec" => "Rank Legend 4 | 122 Heroes 138 Skin | Saber Squad Layla | Kof Karina | 2 Starlight | 3 Summer | Mpl Brody | 9 Special | 7 Emblem Max",
                        "price" => 775000,
                        "email" => "aditya@gmail.com",
                        "password" => "pentastore",
                    ],
                    [
                        "spec" => "Rank Mythic Immortal | M987 | CHEAP | 117 Herroes | VII max emblem | 154 skins | 23K Battle point | moonton log in | FULL ACCES ANDROID & IOS",
                        "price" => 955000,
                        "email" => "isan@gmail.com",
                        "password" => "pentastore",
                    ],
                    [
                        "spec" => "Rank Mythic Immortal | M990 | CHEAP | 122 Herroes | VII max emblem | 160 skins | 45K Battle point | moonton log in | FULL ACCES ANDROID & IOS",
                        "price" => 975000,
                        "email" => "isan@gmail.com",
                        "password" => "pentastore",
                    ],
                    [
                        "spec" => "Rank Mythic Immortal | M989 | CHEAP | 122 Herroes | VII max emblem | 182 skins | 148K Battle point | moonton log in | FULL ACCES ANDROID & IOS",
                        "price" => 1040000,
                        "email" => "andika@gmail.com",
                        "password" => "pentastore",
                    ],
                ]
            ],
            [
                "id" => 7,
                "name"=> "PUBG",
                'cover' => 'pubg-cover.jpg',
                'desc'  => "Harga sudah termasuk PPN. Informasi tambahan, untuk transaksi menggunakan Telkomsel akan dikenakan biaya tambahan pajak.
                Bayarlah pakai QRIS, GoPay, OVO, Bank Transfer, Indosat, Tri Indonesia, XL Axiata, Smartfren, DANA, Shopee Pay, LinkAja, Kredivo, Alfamart, Indomaret, Codacash, DOKU, dan kartu kredit.
                Unduh dan mainkan sekarang!",
                "nominal" => [
                    "60 UC" => 14000,
                    "325 UC" => 78000,
                    "660 UC" => 159000,
                    "1800 UC" => 397000,
                    "3850 UC" => 795000,
                ],
                "accounts" => [
                    [
                        "spec" => "Akun lv 80 | Tittle+avatar mythic fashion | M4 Glacier Lv 4 + ada helm glacier | AKM HELLFIRE | Uzi lv 1 | Crossbow lv 1 | Bom killmes | Open kepang | Set pmgc",
                        "price" => 500000,
                        "email" => "padel@gmail.com",
                        "password" => "pentastore",
                    ],
                    [
                        "spec" => "OPEN JENGGOT & SKIN MK MERAH | SKIN SET BAJU BANYAK | SENJATA UPGRADE ADA 4 | M416 THE FOOL LEVEL 5 | M416 GLACIER LEVEL 3 | QBZ DAZLING LEVEL 1 | GOLOK LEVEL 1",
                        "price" => 800000,
                        "email" => "iwan@gmail.com",
                        "password" => "pentastore",
                    ],
                    [
                        "spec" => "MYTHIC FASHION 54/300 | SET MUMI KUNING | SET MUMI PUTIH | SET FLAMEWRAIT | HELM INFERNO | WEAPON | M4 GLACIER LV 7 MAX  | M4 SPLENDOR LV 7 MAX  | SCARL PUMPKIN LV 5 | BERYL LV 4 | UMP LV 4  | VECTOR LV 4 | M24 LV 3 (-1 MATERIAL UP LV 4)",
                        "price" => 2250000,
                        "email" => "ucup@gmail.com",
                        "password" => "pentastore",
                    ],
                    [
                        "spec" => "CONQUEROR C1S3 & C5S14 | SET ALL ITEM : 193 SET | SKIN ALL MYTHIC (44/50) | SKIN ALL SENJATA : 155 ITEM | SENJATA UPGRADE 15  | M416 GLACIER MAX | AKM GLACIER LEVEL 4 | SCAR-L CRYSTAL LEVEL 4 | M762 PONY LEVEL 4 | UZI ROMANTIS LEVEL 4 | UMP EMP LEVEL 4 | VECTOR GOLDEN LEVEL 1 | DP KILLER LEVEL 1 | MINI ICICLE LEVEL 1 | M416 TECHNO LEVEL 1 | KAR HUNTER LEVEL 1 | MK14 GILDED LEVEL 1 | SKORPION GOLDEN LEVEL 1 | PANCI ACOLAVE LEVEL 1 | PANCI KEJU LEVEL 1 | SKIN HELM : 24 ITEM (HELM INFERNO) | SKIN TAS : 32 ITEM | SKIN MOBIL : AEGIZ LEVEL 2 & KOENISEG JESKO | PET COMPANION : SERIGALA , DOG OREN , CAT , PINGUIN",
                        "price" => 4500000,
                        "email" => "okid@gmail.com",
                        "password" => "pentastore",
                    ],
                    [
                        "spec" => "LEVEL_74 | MF 52/300 | 14 lab | Material free 3 | OPEN FACE + KEPANG  | WEAPON | GLASIER LEVEL 7 | UMP marine basic | Golok basic | Kar Basic | Scorpion basic | Kar terror basic | Candy Thompson basic | Awm basic | Scar L LV 2 | Beryl DP UMP mini akm LV 4",
                        "price" => 2900000,
                        "email" => "habib@gmail.com",
                        "password" => "pentastore",
                    ],
                    [
                        "spec" => "MUMY BIRU | OPEN KEPANG | TANDUK RYZEN | RP ON LVL 60 | 10 SENJATA LAB 3 KILLMES | M4 GLACIER LVL 6 OPEN SCHOPE X3 | M4 THE FOOL LVL 4 | UMP MARINE KILL MESS  | 2 MOBIL SPORT CAR | UAZ Dodge Hornet | Dacia Dodge Charger Hellcat | SEJATA LAB LVL 1  | DBS | KAR VIOLET VOLT | CROSSBOW | MG3 SOARING DRAGON | KAR NEBULA HUNTER | RAMBO WINTER | SHOTGUN BERBURU SENJA",
                        "price" => 1200000,
                        "email" => "adam@gmail.com",
                        "password" => "pentastore",
                    ],
                ]
            ],
            [
                "id" => 8,
                "name"=> "Free Fire",
                'cover' => 'ff-cover.jpg',
                'desc'  => "Harga sudah termasuk PPN. Informasi tambahan, untuk transaksi menggunakan Telkomsel akan dikenakan biaya tambahan pajak.
                Bayarlah pakai QRIS, GoPay, OVO, Bank Transfer, Indosat, Tri Indonesia, XL Axiata, Smartfren, DANA, Shopee Pay, LinkAja, Kredivo, Alfamart, Indomaret, Codacash, DOKU, dan kartu kredit.
                Unduh dan mainkan sekarang!",
                "nominal" => [
                    '5 Diamonds' => '842',
                    '12 Diamonds' => '1991',
                    '50 Diamonds' => '6732',
                    '70 Diamonds' => '9257',
                    '100 Diamonds' => '13464',
                ],
                "accounts" => [
                    [
                        "spec" => "KAKASHI ON, | GENJI ON, | ANGEL HIJAU ON, | JORDAN FULL SET ON | TINJU ON | EVO SCAR LVL 5 S | G2 2 RASA | TEROMPET+MAMBA",
                        "price" => 240000,
                        "email" => "Itur74@gmail.com",
                        "password" => "pentastore",
                    ],
                    [
                        "spec" => "SG PARROT | VAULT OTW 500 | EVO 2 | MP LV (4) | SCAR LV (4)",
                        "price" => 150000,
                        "email" => "robi@gmail.com",
                        "password" => "pentastore",
                    ],
                    [
                        "spec" => "Epas old s7,s8,s9,s12,s16 | Boyah pas 1x | Bandit ori + ghost | Emote pristel on | Skin tinju on",
                        "price" => 95000,
                        "email" => "rizki@gmail.com",
                        "password" => "pentastore",
                    ],
                ]
            ],
            [
                "id" => 9,
                "name"=> "Chimeraland",
                'cover' => "chimeraland-cover.jpg",
                'desc'  => "Harga sudah termasuk PPN. Informasi tambahan, untuk transaksi menggunakan Telkomsel akan dikenakan biaya tambahan pajak.
                Bayarlah pakai QRIS, GoPay, OVO, Bank Transfer, Indosat, Tri Indonesia, XL Axiata, Smartfren, DANA, Shopee Pay, LinkAja, Kredivo, Alfamart, Indomaret, Codacash, DOKU, dan kartu kredit.
                Unduh dan mainkan sekarang!",
                "nominal" => [
                    "60 Amber" => 12100,
                    "300 Amber" => 61700,
                    "680 Amber" => 118500,
                    "980 Amber" => 177900,
                    "1980 Amber" => 349800,
                ],
                "accounts" => [
                    [
                        "spec" => "sv 117-121 | Sigil full max lvl 7 | 4 deo 50k saber, ilus | Eq att full starspiltter",
                        "price" => 3800000,
                        "email" => "opung87@gmail.com",
                        "password" => "pentastore",
                    ],
                    [
                        "spec" => "CP : 91k | PET Deo : crane 50k,kambing 50k,saber,crown,tengu,howlhog,serpent,artigra (FULL BUILD) | Pet Ilus : maiden,dululu,paus(FULL BUILD) | Pet Noble : murali,finn fox, dll | Attendan : LILBEL,DUYUNG(MERAH SEMUA) | Equipment : ortzi,starspliter | Weapon : ortzi | Sigil Lvl : 6-7 | Star : 280",
                        "price" => 2500000,
                        "email" => "rokiputra@gmail.com",
                        "password" => "pentastore",
                    ],
                ]
            ],
        ];

        return $games;
    }

    public static function allGames() {
        $games = [
            [
                "id" => 1,
                'cover' => "cod-cover.jpg",
                "name"=> "Call of Duty Mobile",
                'logo' => 'CallofDuty_CP.png',
                'desc' => "Harga sudah termasuk PPN. Informasi tambahan, untuk transaksi menggunakan Telkomsel akan dikenakan biaya tambahan pajak.
                Bayarlah pakai QRIS, GoPay, OVO, Bank Transfer, Indosat, Tri Indonesia, XL Axiata, Smartfren, DANA, Shopee Pay, LinkAja, Kredivo, Alfamart, Indomaret, Codacash, DOKU, dan kartu kredit.
                Unduh dan mainkan sekarang!",
                "nominal" => [
                    "50cp" => 5000,
                    "100cp" => 15000,
                    "200cp" => 30000,
                    "500cp" => 75000,
                    "1000cp" => 110000,
                ],
            ],
            [
                "id" => 2,
                "name"=> "Gensin Impact",
                'logo'=> '6480_Genshin-Impact_Crystals.png',
                'cover' => "genshin-cover.png",
                "name"=> "Gensin Impact",
                'desc' => "Harga sudah termasuk PPN. Informasi tambahan, untuk transaksi menggunakan Telkomsel akan dikenakan biaya tambahan pajak.
                Bayarlah pakai QRIS, GoPay, OVO, Bank Transfer, Indosat, Tri Indonesia, XL Axiata, Smartfren, DANA, Shopee Pay, LinkAja, Kredivo, Alfamart, Indomaret, Codacash, DOKU, dan kartu kredit.
                Unduh dan mainkan sekarang!",
                "nominal" => [
                    "70 Gensin Crystal" => 17000,
                    "300 Gensin Crystal" => 75000,
                    "1000 Gensin Crystal" => 200000,
                    "2000 Gensin Crystal" => 400000,
                    "3000 Gensin Crystal" => 800000,
                ],
            ],
            [
                "id" => 3,
                "name"=> "FC Mobile",
                "cover" => "fc-cover.jpeg",
                'logo' => '12000-FC-Points.png',
                'desc' => "Harga sudah termasuk PPN. Informasi tambahan, untuk transaksi menggunakan Telkomsel akan dikenakan biaya tambahan pajak.
                Bayarlah pakai QRIS, GoPay, OVO, Bank Transfer, Indosat, Tri Indonesia, XL Axiata, Smartfren, DANA, Shopee Pay, LinkAja, Kredivo, Alfamart, Indomaret, Codacash, DOKU, dan kartu kredit.
                Unduh dan mainkan sekarang!",
                "nominal" => [
                    "50 FC" => 7000,
                    "100 FC" => 13500,
                    "500 FC" => 80000,
                    "1000 FC" => 150000,
                    "2000 FC" => 290000,
                ],
            ],
            [
                "id" => 4,
                "name"=> "Ragnarok X Mobile",
                'logo' => 'rag.png',
                'cover'  => "radnarok-cover.jpeg",
                'desc'  => "Harga sudah termasuk PPN. Informasi tambahan, untuk transaksi menggunakan Telkomsel akan dikenakan biaya tambahan pajak.
                Bayarlah pakai QRIS, GoPay, OVO, Bank Transfer, Indosat, Tri Indonesia, XL Axiata, Smartfren, DANA, Shopee Pay, LinkAja, Kredivo, Alfamart, Indomaret, Codacash, DOKU, dan kartu kredit.
                Unduh dan mainkan sekarang!",
                "nominal" => [
                    "2300 Diamonds" => 70000,
                    "5000 Diamonds" => 160000,
                    "10000 Diamonds" => 300000,
                    "16000 Diamonds" => 550000,
                    "32000 Diamonds" => 1000000,
                ],
            ],
            [
                "id" => 5,
                "name"=> "Clash Of Clans",
                'logo' => 'CoC_1200_Gems.png',
                'cover' => 'coc-cover.png',
                'desc'  => "Harga sudah termasuk PPN. Informasi tambahan, untuk transaksi menggunakan Telkomsel akan dikenakan biaya tambahan pajak.
                Bayarlah pakai QRIS, GoPay, OVO, Bank Transfer, Indosat, Tri Indonesia, XL Axiata, Smartfren, DANA, Shopee Pay, LinkAja, Kredivo, Alfamart, Indomaret, Codacash, DOKU, dan kartu kredit.
                Unduh dan mainkan sekarang!",
                "nominal" => [
                    "100 Gems" => 20000,
                    "500 Gems" => 70000,
                    "2500 Gems" => 300000,
                    "6500 Gems" => 750000,
                    "14000 Gems" => 1400000,
                ],
            ],
            [
                "id" => 6,
                "name"=> "Mobile Legend",
                'logo'=> '50orless_MLBB_Diamonds.png',
                'cover' => 'ml-cover.jpg',
                'desc'  => "Harga sudah termasuk PPN. Informasi tambahan, untuk transaksi menggunakan Telkomsel akan dikenakan biaya tambahan pajak.
                Bayarlah pakai QRIS, GoPay, OVO, Bank Transfer, Indosat, Tri Indonesia, XL Axiata, Smartfren, DANA, Shopee Pay, LinkAja, Kredivo, Alfamart, Indomaret, Codacash, DOKU, dan kartu kredit.
                Unduh dan mainkan sekarang!",
                "nominal" => [
                    "44 Diamonds" => 12000,
                    "170 Diamonds" => 45000,
                    "568 Diamonds" => 150000,
                    "2010 Diamonds" => 500000,
                    "3010 Diamonds" => 1000000,
                ],
            ],
            [
                "id" => 7,
                "name"=> "PUBG",
                'logo' => '1599546061912PLgMlY23.png',
                'cover' => 'pubg-cover.jpg',
                'desc'  => "Harga sudah termasuk PPN. Informasi tambahan, untuk transaksi menggunakan Telkomsel akan dikenakan biaya tambahan pajak.
                Bayarlah pakai QRIS, GoPay, OVO, Bank Transfer, Indosat, Tri Indonesia, XL Axiata, Smartfren, DANA, Shopee Pay, LinkAja, Kredivo, Alfamart, Indomaret, Codacash, DOKU, dan kartu kredit.
                Unduh dan mainkan sekarang!",
                "nominal" => [
                    "60 UC" => 14000,
                    "325 UC" => 78000,
                    "660 UC" => 159000,
                    "1800 UC" => 397000,
                    "3850 UC" => 795000,
                ],
            ],
            [
                "id" => 8,
                "name"=> "Free Fire",
                'logo' => 'Freefire_diamonds.png',
                'cover' => 'ff-cover.jpg',
                'desc'  => "Harga sudah termasuk PPN. Informasi tambahan, untuk transaksi menggunakan Telkomsel akan dikenakan biaya tambahan pajak.
                Bayarlah pakai QRIS, GoPay, OVO, Bank Transfer, Indosat, Tri Indonesia, XL Axiata, Smartfren, DANA, Shopee Pay, LinkAja, Kredivo, Alfamart, Indomaret, Codacash, DOKU, dan kartu kredit.
                Unduh dan mainkan sekarang!",
                "nominal" => [
                    '5 Diamonds' => '842',
                    '12 Diamonds' => '1991',
                    '50 Diamonds' => '6732',
                    '70 Diamonds' => '9257',
                    '100 Diamonds' => '13464',
                ],
            ],
            [
                "id" => 9,
                "name"=> "Chimeraland",
                'logo' => '4680_ZEPETO_coin.png',
                'cover' => "chimeraland-cover.jpg",
                'desc'  => "Harga sudah termasuk PPN. Informasi tambahan, untuk transaksi menggunakan Telkomsel akan dikenakan biaya tambahan pajak.
                Bayarlah pakai QRIS, GoPay, OVO, Bank Transfer, Indosat, Tri Indonesia, XL Axiata, Smartfren, DANA, Shopee Pay, LinkAja, Kredivo, Alfamart, Indomaret, Codacash, DOKU, dan kartu kredit.
                Unduh dan mainkan sekarang!",
                "nominal" => [
                    "60 Amber" => 12100,
                    "300 Amber" => 61700,
                    "680 Amber" => 118500,
                    "980 Amber" => 177900,
                    "1980 Amber" => 349800,
                ],
            ],
            [
                "id" => 10,
                "name"=> "Metal Slug",
                'logo' => 'MSA_310 _Ruby.png',
                'cover' => "metalslug-cover.png",
                'desc'  => "Harga sudah termasuk PPN. Informasi tambahan, untuk transaksi menggunakan Telkomsel akan dikenakan biaya tambahan pajak.
                Bayarlah pakai QRIS, GoPay, OVO, Bank Transfer, Indosat, Tri Indonesia, XL Axiata, Smartfren, DANA, Shopee Pay, LinkAja, Kredivo, Alfamart, Indomaret, Codacash, DOKU, dan kartu kredit.
                Unduh dan mainkan sekarang!",
                "nominal" => [
                    "60 Ruby" => 13500,
                    "310 Amber" => 64000,
                    "630 Amber" => 121000,
                    "1300 Amber" => 243000,
                    "3200 Amber" => 630000,
                ],
            ],
        ];

        return $games;
    }

    public static function getGameById($id) {
        $games = static::allGames();
        $game = null;

        foreach ($games as $key => $value) {
            if ($value['id'] == $id) {
                $game = $value;
            }
        }

        return $game;
    }

    public static function getGameAccountById($id) {
        $games = static::allGamesAccounts();
        $game = null;

        foreach ($games as $key => $value) {
            if ($value['id'] == $id) {
                $game = $value;
            }
        }

        return $game;
    }
}
