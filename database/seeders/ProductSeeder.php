<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $products = [
      'deodorant' => [
        [
          'name' => 'Mesmerize',
          'code' => 'AVON Roll-on',
          'stock' => 4,
          'price' => 14,
        ],
        [
          'name' => 'Sweet Honesty',
          'code' => 'AVON Roll-on',
          'stock' => 5,
          'price' => 14,
        ],
        [
          'name' => 'Feeling Fresh',
          'code' => 'AVON Roll-on',
          'stock' => 2,
          'price' => 14,
        ],
        [
          'name' => 'Night Magic',
          'code' => 'AVON Roll-on',
          'stock' => 4,
          'price' => 14,
        ],
        [
          'name' => 'Rare Pearls',
          'code' => 'AVON Roll-on',
          'stock' => 9,
          'price' => 14,
        ],
        [
          'name' => 'Imari',
          'code' => 'AVON Roll-on',
          'stock' => 12,
          'price' => 14,
        ],
        [
          'name' => 'Wild Country',
          'code' => 'AVON Roll-on',
          'stock' => 4,
          'price' => 14,
        ],
        [
          'name' => 'Black Suede',
          'code' => 'AVON Roll-on',
          'stock' => 9,
          'price' => 14,
        ],
        [
          'name' => 'Haiku',
          'code' => 'AVON Roll-on',
          'stock' => 5,
          'price' => 14,
        ],
        [
          'name' => 'Skin so Soft',
          'code' => 'AVON Roll-on',
          'stock' => 1,
          'price' => 14,
        ],
        [
          'name' => 'Far Away',
          'code' => 'AVON Roll-on',
          'stock' => 4,
          'price' => 14,
        ],
        [
          'name' => 'Candid',
          'code' => 'AVON Roll-on',
          'stock' => 1,
          'price' => 14,
        ],
        [
          'name' => 'Timeless',
          'code' => 'AVON Roll-on',
          'stock' => 7,
          'price' => 14,
        ],
        [
          'name' => 'Rare Gold',
          'code' => 'AVON Roll-on',
          'stock' => 6,
          'price' => 14,
        ],
      ],
      'perfume' => [
        [
          'name' => 'Gaelle',
          'code' => 'Perfum (w)',
          'stock' => '1',
          'price' => '350'
        ],
        [
          'name' => 'Miss Tutu',
          'code' => 'Perfum (w)',
          'stock' => '2',
          'price' => '30'
        ],
        [
          'name' => 'True Grit',
          'code' => 'Perfum (m)',
          'stock' => '2',
          'price' => '30'
        ],
        [
          'name' => 'The Look',
          'code' => 'Perfum (uni)',
          'stock' => '1',
          'price' => '30'
        ],
        [
          'name' => 'Wild Country',
          'code' => 'Perfum (m)',
          'stock' => '1',
          'price' => '120'
        ],
        [
          'name' => 'Odyssey',
          'code' => 'Perfum (w)',
          'stock' => '2',
          'price' => '100'
        ],
        [
          'name' => 'Si',
          'code' => 'Perfum (w)',
          'stock' => '1',
          'price' => '600'
        ],
        [
          'name' => 'Roberto Cavalli',
          'code' => 'Perfum (m)',
          'stock' => '2',
          'price' => '350'
        ],
        [
          'name' => 'Eye Candy',
          'code' => 'Perfum (w)',
          'stock' => '1',
          'price' => '350'
        ],
        [
          'name' => 'Trista',
          'code' => 'Perfum (w)',
          'stock' => '2',
          'price' => '350'
        ],
        [
          'name' => 'Giorgio',
          'code' => 'Perfum (m)',
          'stock' => '1',
          'price' => '350'
        ],
        [
          'name' => 'Pride',
          'code' => 'Perfum (m)',
          'stock' => '1',
          'price' => '350'
        ],
        [
          'name' => 'Polo',
          'code' => 'Perfum (m)',
          'stock' => '1',
          'price' => '450'
        ],
        [
          'name' => '212',
          'code' => 'Perfum (m)',
          'stock' => '1',
          'price' => '350'
        ],
        [
          'name' => 'Versace',
          'code' => 'Perfum (w)',
          'stock' => '1',
          'price' => '350'
        ],
      ],
      'powder' => [
        [
          'name' => 'Pare Pearls',
          'code' => 'Powder',
          'stock' => '1',
          'price' => '7'
        ],
        [
          'name' => 'Haiku',
          'code' => 'Powder Avon',
          'stock' => '1',
          'price' => '7'
        ],
        [
          'name' => 'Night Magic',
          'code' => 'Powder Avon',
          'stock' => '1',
          'price' => '7'
        ],
        [
          'name' => 'Odyssey',
          'code' => 'Powder Avon',
          'stock' => '1',
          'price' => '7'
        ],
        [
          'name' => 'Imari',
          'code' => 'Powder Avon',
          'stock' => '1',
          'price' => '7'
        ],
      ],
      'tie' => [
        [
          'name' => 'Coloured Tie',
          'code' => 'Flying',
          'stock' => 18,
        ],
        [
          'name' => 'Plain Tie',
          'code' => 'Flying',
          'stock' => 5,
        ],
      ],
      'shawl' => [
        [
          'name' => 'shawl',
          'code' => 'Bronze',
          'color' => 'Bronze',
          'stock' => 2
        ],
        [
          'name' => 'shawl',
          'code' => 'Beige',
          'color' => 'Beige',
          'stock' => 4
        ],
        [
          'name' => 'shawl',
          'code' => 'Grey',
          'color' => 'Grey',
          'stock' => 4
        ],
      ],
      'belt' => [
        [
          'name' => "Lady's Belt",
          'code' => 'Elastic Gold',
          'stock' => 3
        ],
        [
          'name' => "Lady's Belt",
          'code' => 'Elastic Silva',
          'stock' => 5
        ],
      ],
      'singlet' => [
        [
          'name' => 'Singlet',
          'code' => 'Sleeve White',
          'color' => 'white',
          'stock' => 6,
          'price' => 30
        ],
        [
          'name' => 'Singlet',
          'code' => 'Sleeveless',
          'color' => 'white',
          'stock' => 11,
          'price' => 10
        ],
      ],
      null => [
        [
          'name' => 'Gridle',
          'code' => 'steamless',
          'stock' => 10,
          'price' => 40
        ]
      ],
      'boxer' => [
        [
          'name' => 'men boxers',
          'code' => 'C Classic',
          'stock' => 9,
          'price' => 27
        ],
        [
          'name' => 'Boxer Shorts',
          'code' => 'Pay Den',
          'stock' => 8,
          'price' => 30
        ],
        [
          'name' => 'Boxer Shorts',
          'code' => 'John Adam',
          'stock' => 9,
          'price' => 27
        ],
      ],
      'panty' => [
        [
          'name' => 'Primark',
          'code' => 'Ladies Panty',
          'stock' => 6,
          'price' => 35
        ],
        [
          'name' => 'Ladies Panty',
          'code' => 'Ellen Amber',
          'stock' => 16,
          'price' => 27
        ],
        [
          'name' => 'Ladies Panty',
          'code' => 'Singles',
          'stock' => 8,
          'price' => 8
        ],
      ],
      'Brassiere' => [
        [
          'name' => 'Bra - small',
          'size' => 'small',
          'code' => 'Assorted',
          'stock' => 6,
          'price' => 30
        ],
        [
          'name' => 'Bra - large',
          'size' => 'large',
          'code' => 'Assorted',
          'stock' => 13,
          'price' => 35
        ],
        [
          'name' => 'Bra - x-small',
          'size' => 'x-small',
          'code' => 'Assorted',
          'stock' => 9,
          'price' => 25
        ],
      ],
      'sock' => [
        [
          'name' => 'Sock men',
          'code' => 'Assorted',
          'stock' => 17,
          'price' => 10
        ],
      ],
      'earring' => [
        [
          'name' => 'Earrings',
          'code' => 'grey',
          'stock' => 9,
          'price' => 15
        ],
      ],
      'rings' => [
        [
          'name' => 'Rings',
          'code' => 'Black',
          'stock' => 6,
          'price' => 15
        ]
      ],
      'pijamas' => [
        [
          'name' => 'PJ Ladies',
          'code' => 'Assorted',
          'stock' => 6,
          'price' => 40
        ],
        [
          'name' => 'PJ Men',
          'code' => 'Assorted',
          'stock' => 7,
          'price' => 40
        ],
      ],
      'shirt' => [
        [
          'name' => 'Ladies Shirt',
          'code' => 'Nisne',
          'stock' => 3,
          'price' => 25
        ]
      ],
      'lip gloss' => [
        [
          'name' => 'UC Lip Gloss',
          'code' => 'Flavoured',
          'stock' => 2,
          'price' => 20
        ]
      ],
      'brooch' => [
        [
          'name' => 'Brooch Rose',
          'code' => 'blue',
          'stock' => 20,
          'price' => 10
        ],
        [
          'name' => 'Brooch Rose',
          'code' => 'navy',
          'stock' => 20,
          'price' => 10
        ],
        [
          'name' => 'Brooch Rose',
          'code' => 'red',
          'stock' => 9,
          'price' => 10
        ],
        [
          'name' => 'Brooch metal',
          'code' => 'Assorted',
          'stock' => 22,
          'price' => 15
        ],
        [
          'name' => 'Brooch Rose',
          'code' => 'Navy big',
        ],
      ],
      'necklace' => [
        [
          'name' => 'Necklace',
          'code' => 'Assorted',
          'stock' => 8,
          'price' => 15
        ],
        [
          'name' => 'Pearls NeckLace',
          'code' => 'Base',
          'stock' => 2,
          'price' => 10
        ],
      ],
      'bow tie' => [
        [
          'name' => 'Bow Tie',
          'code' => 'black',
          'stock' => 15,
          'price' => 40
        ]
      ],
      'glasses' => [
        [
          'name' => 'Sun Glass',
          'code' => 'Assorted',
          'stock' => 6,
          'price' => 10
        ]
      ],

      // 'DRESSES' =>
      // array(
      //   0 =>
      //   array(
      //     'name' => 'MAYA BROOKE',
      //     'code' => 'DRESS SUIT GREY & BLACK',
      //     'price' => 350,
      //     'stock' => [
      //       36 => NULL,
      //       38 => 1,
      //       40 => 1,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   1 =>
      //   array(
      //     'name' => 'MAYA BROOKE',
      //     'code' => 'DRESS SUIT LEMON GREEN',
      //     'price' => 350,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => 1,
      //       54 => 1,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   2 =>
      //   array(
      //     'name' => 'JULIE JORDAN ',
      //     'code' => 'DRESS/MULTI COLORED',
      //     'price' => 280,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => 1,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   3 =>
      //   array(
      //     'name' => 'DONNAR DRESS',
      //     'code' => 'MULTI COLOR',
      //     'price' => 280,
      //     'stock' => [
      //       36 => NULL,
      //       38 => 1,
      //       40 => 1,
      //       42 => 1,
      //       44 => 2,
      //       46 => 1,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   4 =>
      //   array(
      //     'name' => 'DONNA RICCO',
      //     'code' => 'DRESS MULTI COLORED',
      //     'price' => 280,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => 1,
      //       42 => 1,
      //       44 => 2,
      //       46 => 1,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   5 =>
      //   array(
      //     'name' => 'GABBY SKYE',
      //     'code' => 'BLACK & BEIGE',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => 1,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   6 =>
      //   array(
      //     'name' => 'SANDRA DAREN DRESS',
      //     'code' => 'BLACK & BLUE',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => 2,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   7 =>
      //   array(
      //     'name' => 'TAS COLLECTION',
      //     'code' => 'SHORTS & TOP',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   8 =>
      //   array(
      //     'name' => 'ZAMARA BLAZER',
      //     'code' => NULL,
      //     'price' => 180,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 2,
      //       44 => 2,
      //       46 => 2,
      //       48 => 2,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   9 =>
      //   array(
      //     'name' => 'KOR@KOR DRESS',
      //     'code' => 'MULTI COLOR',
      //     'price' => 220,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 2,
      //       44 => 2,
      //       46 => 2,
      //       48 => 2,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   10 =>
      //   array(
      //     'name' => 'KOR@KOR DRESS',
      //     'code' => 'YELLOW & BLUE',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => 1,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   11 =>
      //   array(
      //     'name' => 'ANOMA LINE',
      //     'code' => 'POKA',
      //     'price' => 220,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   12 =>
      //   array(
      //     'name' => 'KOR@KOR DRESS',
      //     'code' => 'CURRY',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => 1,
      //       52 => 1,
      //       54 => 1,
      //       56 => 1,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   13 =>
      //   array(
      //     'name' => 'KOR@KOR DRESS',
      //     'code' => 'RED ',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   14 =>
      //   array(
      //     'name' => 'KOR@KOR DRESS',
      //     'code' => 'NAVY',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => 1,
      //       52 => 1,
      //       54 => 1,
      //       56 => 1,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   15 =>
      //   array(
      //     'name' => 'BENA SUIT',
      //     'code' => 'BLUE',
      //     'price' => 350,
      //     'stock' => [
      //       36 => NULL,
      //       38 => 1,
      //       40 => 1,
      //       42 => 1,
      //       44 => 1,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   16 =>
      //   array(
      //     'name' => 'HERMA DRESS',
      //     'code' => 'WHITE LACE',
      //     'price' => 300,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   17 =>
      //   array(
      //     'name' => 'TEX WOMAN',
      //     'code' => 'WHITE LACE2113',
      //     'price' => 300,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   18 =>
      //   array(
      //     'name' => 'TEX WOMAN',
      //     'code' => 'BLUE LACE/2113',
      //     'price' => 300,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   19 =>
      //   array(
      //     'name' => 'BLOUSE ',
      //     'code' => 'POKA DOT NAVEY 373',
      //     'price' => 150,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => 1,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   20 =>
      //   array(
      //     'name' => 'BLOUSE',
      //     'code' => 'WHITE 458',
      //     'price' => 150,
      //     'stock' => [
      //       36 => NULL,
      //       38 => 1,
      //       40 => 1,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   21 =>
      //   array(
      //     'name' => 'EAC BLOUSE',
      //     'code' => 'CURRY/9518',
      //     'price' => 180,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   22 =>
      //   array(
      //     'name' => 'EAC BLOUSE',
      //     'code' => 'NAY/9509',
      //     'price' => 180,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   23 =>
      //   array(
      //     'name' => 'ADM /WHITE OFF',
      //     'code' => 9707,
      //     'price' => 300,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 2,
      //       46 => 2,
      //       48 => 2,
      //       50 => 2,
      //       52 => 2,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   24 =>
      //   array(
      //     'name' => 'SW COLLECTION',
      //     'code' => 'CREAM/10228',
      //     'price' => 280,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => 1,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   25 =>
      //   array(
      //     'name' => 'SW COLLECTION',
      //     'code' => 1157,
      //     'price' => 300,
      //     'stock' => [
      //       36 => NULL,
      //       38 => 1,
      //       40 => 1,
      //       42 => 1,
      //       44 => 1,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   26 =>
      //   array(
      //     'name' => 'EAC SKIRT',
      //     'code' => 8454,
      //     'price' => 200,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   27 =>
      //   array(
      //     'name' => 'EAC SKIRT',
      //     'code' => 'GREY/8397',
      //     'price' => 200,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => 1,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   28 =>
      //   array(
      //     'name' => 'EAC SKIRT',
      //     'code' => 'RED 8396',
      //     'price' => 200,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   29 =>
      //   array(
      //     'name' => 'EAC SKIRT',
      //     'code' => 'BLACK/8407',
      //     'price' => 200,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   30 =>
      //   array(
      //     'name' => 'VAGELIZA TROUSER',
      //     'code' => 'CSV125',
      //     'price' => 150,
      //     'stock' => [
      //       36 => NULL,
      //       38 => 1,
      //       40 => 1,
      //       42 => 1,
      //       44 => 1,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   31 =>
      //   array(
      //     'name' => 'EAC BLOUSE',
      //     'code' => '9512 WHITE',
      //     'price' => 180,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => 1,
      //       46 => NULL,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   32 =>
      //   array(
      //     'name' => 'FELLINAZ BLOUSE',
      //     'code' => 'NAVY POA 373',
      //     'price' => 150,
      //     'stock' => [
      //       36 => NULL,
      //       38 => 1,
      //       40 => 11,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   33 =>
      //   array(
      //     'name' => 'FELLINAZ BLOUSE',
      //     'code' => 'WHITE 458',
      //     'price' => 150,
      //     'stock' => [
      //       36 => NULL,
      //       38 => 1,
      //       40 => 1,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   34 =>
      //   array(
      //     'name' => 'HERMINA WHITE ',
      //     'code' => 241,
      //     'price' => 300,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   35 =>
      //   array(
      //     'name' => 'FOMANTA BLOUSE',
      //     'code' => 9518,
      //     'price' => 180,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   36 =>
      //   array(
      //     'name' => 'FIGURE DRESS',
      //     'code' => 'BLUE 1907',
      //     'price' => 280,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   37 =>
      //   array(
      //     'name' => 'FIGURE DRESS',
      //     'code' => 'NAVY 1885',
      //     'price' => 280,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   38 =>
      //   array(
      //     'name' => 'FOMANTA BLOUSE',
      //     'code' => 'RED 9273',
      //     'price' => 180,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   39 =>
      //   array(
      //     'name' => 'ENAZ BLAER',
      //     'code' => 5386,
      //     'price' => 200,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   40 =>
      //   array(
      //     'name' => 'ENAZ BLOUSE',
      //     'code' => '9273/ORANGE',
      //     'price' => 180,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   41 =>
      //   array(
      //     'name' => 'ENAZ SKIRTS',
      //     'code' => 'NAVY 8389',
      //     'price' => 200,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   42 =>
      //   array(
      //     'name' => 'ENAZ BLAZER',
      //     'code' => 'CHECK',
      //     'price' => 200,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   43 =>
      //   array(
      //     'name' => 'ENAZ BLAZER',
      //     'code' => 'NAVY CHECK 5386',
      //     'price' => 200,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => 1,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   44 =>
      //   array(
      //     'name' => 'FOMANTA BLAZER',
      //     'code' => 'BLACK 5361',
      //     'price' => 200,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => 1,
      //       54 => 1,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   45 =>
      //   array(
      //     'name' => 'FULL MOON',
      //     'code' => 'WHITE 1040 LACE DRESS',
      //     'price' => 300,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   46 =>
      //   array(
      //     'name' => 'FIGURE DRESS',
      //     'code' => 'BLACK 1907',
      //     'price' => 280,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   47 =>
      //   array(
      //     'name' => 'ATILIM BLAZER',
      //     'code' => 'ORANGE',
      //     'price' => 150,
      //     'stock' => [
      //       36 => NULL,
      //       38 => 1,
      //       40 => 1,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   48 =>
      //   array(
      //     'name' => 'FAVORI BLAZER',
      //     'code' => 'BLACK 26037-020',
      //     'price' => 180,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   49 =>
      //   array(
      //     'name' => 'FAVORI BLAZER',
      //     'code' => '26037-010',
      //     'price' => 180,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   50 =>
      //   array(
      //     'name' => 'MELANCHOLA SKIRT & TOP',
      //     'code' => NULL,
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 2,
      //       46 => 2,
      //       48 => 2,
      //       50 => 2,
      //       52 => 2,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   51 =>
      //   array(
      //     'name' => 'ARIZONIA -',
      //     'code' => 2595,
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => 1,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   52 =>
      //   array(
      //     'name' => 'MAVELINO PINK',
      //     'code' => 3322,
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => 1,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   53 =>
      //   array(
      //     'name' => 'MUTLINE ',
      //     'code' => '5563-30',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => 1,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   54 =>
      //   array(
      //     'name' => 'MAVELINO',
      //     'code' => '3138 - NAVY',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => 1,
      //       42 => 1,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   55 =>
      //   array(
      //     'name' => 'MAVELLINO',
      //     'code' => '3138- GREY',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   56 =>
      //   array(
      //     'name' => 'MAVELLINO',
      //     'code' => '3308- COFFEE ZIP FRONT',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => 1,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => 1,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   57 =>
      //   array(
      //     'name' => 'MAVELINO',
      //     'code' => '3308-NAVY',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => 1,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   58 =>
      //   array(
      //     'name' => 'MAVELLINO',
      //     'code' => '3322-NAVY',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => NULL,
      //       52 => 1,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   59 =>
      //   array(
      //     'name' => 'MAVELLINO',
      //     'code' => '3319-PURPLE',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   60 =>
      //   array(
      //     'name' => 'MAVELLINO',
      //     'code' => '3213-GREEN',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   61 =>
      //   array(
      //     'name' => 'ANCHOLIA',
      //     'code' => '4000- BLACK',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   62 =>
      //   array(
      //     'name' => 'MM',
      //     'code' => '1116-CURRY',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   63 =>
      //   array(
      //     'name' => 'MM',
      //     'code' => '1116-NAVY',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   64 =>
      //   array(
      //     'name' => 'MM',
      //     'code' => '1058-BLUE',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
            
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 2,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   65 =>
      //   array(
      //     'name' => 'MAVELLINO',
      //     'code' => '3333-WINE',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   66 =>
      //   array(
      //     'name' => 'MAVELLINO',
      //     'code' => '3333-BLACK',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => 1,
      //       42 => 1,
      //       44 => NULL,
      //       46 => 1,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   67 =>
      //   array(
      //     'name' => 'SASSINA ',
      //     'code' => 'CV-2349',
      //     'price' => 220,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   68 =>
      //   array(
      //     'name' => 'JAMUELEA',
      //     'code' => 'POKA DOT',
      //     'price' => 280,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => 1,
      //       42 => 1,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   69 =>
      //   array(
      //     'name' => 'ESTEE TROUSER & TOP',
      //     'code' => 1791,
      //     'price' => 280,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => 1,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   70 =>
      //   array(
      //     'name' => 'MULTLINE',
      //     'code' => 5764,
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => 1,
      //       50 => 1,
      //       52 => 1,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   71 =>
      //   array(
      //     'name' => 'MM DRESS',
      //     'code' => 'PINK',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => 1,
      //       46 => 2,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   72 =>
      //   array(
      //     'name' => 'MM DRESS',
      //     'code' => 'BLACK',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   73 =>
      //   array(
      //     'name' => 'DIMARE DRESS',
      //     'code' => 6295,
      //     'price' => 300,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => 1,
      //       50 => 1,
      //       52 => 1,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   74 =>
      //   array(
      //     'name' => 'DIMARE DRESS',
      //     'code' => 325629,
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => 1,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   75 =>
      //   array(
      //     'name' => 'VALS - ',
      //     'code' => '20-1722',
      //     'price' => 300,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 2,
      //       44 => 3,
      //       46 => 1,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   76 =>
      //   array(
      //     'name' => 'MONUKA D/SUIT',
      //     'code' => NULL,
      //     'price' => 280,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => 3,
      //       50 => 2,
      //       52 => NULL,
      //       54 => 2,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   77 =>
      //   array(
      //     'name' => 'VALS - ',
      //     'code' => '20-172',
      //     'price' => 300,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 2,
      //       44 => 2,
      //       46 => 1,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   78 =>
      //   array(
      //     'name' => 'TAKIM SKIRT & TOP',
      //     'code' => NULL,
      //     'price' => NULL,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   79 =>
      //   array(
      //     'name' => 'WHITE ROSE',
      //     'code' => 7193,
      //     'price' => NULL,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => 2,
      //       46 => 1,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   80 =>
      //   array(
      //     'name' => 'MAVELLINO',
      //     'code' => 3329,
      //     'price' => NULL,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   81 =>
      //   array(
      //     'name' => 'SASSINA TOP',
      //     'code' => 'WHITE/RED  - 0052',
      //     'price' => 150,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   82 =>
      //   array(
      //     'name' => 'SASSINA TOP',
      //     'code' => 'GREEN/WHITE - 0052',
      //     'price' => 150,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   83 =>
      //   array(
      //     'name' => 'ESTEE TROUSER TOP',
      //     'code' => NULL,
      //     'price' => NULL,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   84 =>
      //   array(
      //     'name' => 'BES & SE BLUZ',
      //     'code' => 'BLUE - 1043-1',
      //     'price' => 150,
      //     'stock' => [
      //       36 => NULL,
      //       38 => 1,
      //       40 => 1,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   85 =>
      //   array(
      //     'name' => 'BES &SE BLUZ',
      //     'code' => 'BROWN - 1043 -1',
      //     'price' => 150,
      //     'stock' => [
      //       36 => NULL,
      //       38 => 1,
      //       40 => 1,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   86 =>
      //   array(
      //     'name' => 'ENAC BLUZ',
      //     'code' => NULL,
      //     'price' => NULL,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   87 =>
      //   array(
      //     'name' => 'MAVELLINO D/SUIT',
      //     'code' => 1100,
      //     'price' => 450,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => 1,
      //       48 => 2,
      //       50 => 3,
      //       52 => 2,
      //       54 => 2,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   88 =>
      //   array(
      //     'name' => 'OCATAVIA',
      //     'code' => NULL,
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => 1,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   89 =>
      //   array(
      //     'name' => 'GODVIA',
      //     'code' => 'LONG DRESS',
      //     'price' => 200,
      //     'stock' => [
      //       36 => NULL,
      //       38 => 1,
      //       40 => 2,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   90 =>
      //   array(
      //     'name' => 'JACQUE VERT',
      //     'code' => NULL,
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => 1,
      //       40 => 1,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   91 =>
      //   array(
      //     'name' => 'SHELBY & P',
      //     'code' => NULL,
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => 1,
      //       40 => 2,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   92 =>
      //   array(
      //     'name' => 'PERLA SUIRT',
      //     'code' => 'BROWN - 1043 -1',
      //     'price' => 280,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   93 =>
      //   array(
      //     'name' => 'PERLA SUIRT',
      //     'code' => 'BLACK',
      //     'price' => 280,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   94 =>
      //   array(
      //     'name' => 'PERLA SUIRT',
      //     'code' => 'NAVY',
      //     'price' => 280,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => 1,
      //       48 => NULL,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   95 =>
      //   array(
      //     'name' => 'PERLA SUIRT',
      //     'code' => 'RED',
      //     'price' => 280,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   96 =>
      //   array(
      //     'name' => 'PERLA SUIRT',
      //     'code' => 'PINK',
      //     'price' => 280,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => NULL,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   97 =>
      //   array(
      //     'name' => 'R&M',
      //     'code' => 'D/JACKET - 417918',
      //     'price' => NULL,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => 2,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   98 =>
      //   array(
      //     'name' => 'TERAMO',
      //     'code' => 'PINK',
      //     'price' => NULL,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => 1,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   99 =>
      //   array(
      //     'name' => 'MO LABEL',
      //     'code' => 'RED',
      //     'price' => NULL,
      //     'stock' => [
      //       36 => NULL,
      //       38 => 2,
      //       40 => 2,
      //       42 => 2,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   100 =>
      //   array(
      //     'name' => 'XX WOMAN',
      //     'code' => 'BLUE',
      //     'price' => 280,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   101 =>
      //   array(
      //     'name' => 'XX WOMAN',
      //     'code' => 'ARMY  KLETTO/TOP ',
      //     'price' => 280,
      //     'stock' => [
      //       36 => 1,
      //       38 => 1,
      //       40 => 1,
      //       42 => 1,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   102 =>
      //   array(
      //     'name' => 'XX WOMAN',
      //     'code' => 'BURNT  ORANGE KLETTO/TOP ',
      //     'price' => 280,
      //     'stock' => [
      //       36 => 1,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   103 =>
      //   array(
      //     'name' => 'MELODY',
      //     'code' => 'NAVY',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   104 =>
      //   array(
      //     'name' => 'MELODY',
      //     'code' => 'WINE',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   105 =>
      //   array(
      //     'name' => ' MELODY -1171-26',
      //     'code' => 'CURRY',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => NULL,
      //       48 => 1,
      //       50 => 2,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   106 =>
      //   array(
      //     'name' => 'MAVELLINO',
      //     'code' => 'PINK BUTTON- 3303',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   107 =>
      //   array(
      //     'name' => 'MAVELLINO',
      //     'code' => 'COFFEE-3319',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   108 =>
      //   array(
      //     'name' => 'B&S LINE',
      //     'code' => 'RED DRESS',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => NULL,
      //       46 => 1,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   109 =>
      //   array(
      //     'name' => 'LAFLAZZI BLACK ',
      //     'code' => 2602,
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => 2,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   110 =>
      //   array(
      //     'name' => 'ARIZONIA',
      //     'code' => 'GREEN K-124',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => 1,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   111 =>
      //   array(
      //     'name' => 'DIMOSS',
      //     'code' => 'RED - 935',
      //     'price' => 220,
      //     'stock' => [
      //       36 => NULL,
      //       38 => 1,
      //       40 => 1,
      //       42 => 1,
      //       44 => 1,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   112 =>
      //   array(
      //     'name' => 'DFARK WINE PLEAT',
      //     'code' => 1002,
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => 1,
      //       40 => 2,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   113 =>
      //   array(
      //     'name' => 'LADY MORGANA',
      //     'code' => '4919 - BLUE',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => 1,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   114 =>
      //   array(
      //     'name' => 'ELEGANT LINE - 5725-40',
      //     'code' => 'POKA',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   115 =>
      //   array(
      //     'name' => 'SOPHIA - 7003 DRESS',
      //     'code' => NULL,
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   116 =>
      //   array(
      //     'name' => 'JUPITER DRESS',
      //     'code' => 8170,
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => 1,
      //       50 => 1,
      //       52 => 1,
      //       54 => 1,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   117 =>
      //   array(
      //     'name' => 'WHITE ROSE',
      //     'code' => 'POKA- DRESS',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 2,
      //       46 => NULL,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   118 =>
      //   array(
      //     'name' => 'TEX WOMAN',
      //     'code' => 'LACE- 2094',
      //     'price' => 300,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 2,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   119 =>
      //   array(
      //     'name' => 'LADY MORGANA NAVY ',
      //     'code' => 'PLEAT-5124',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   120 =>
      //   array(
      //     'name' => 'HRD 10032',
      //     'code' => 'NAVY',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => NULL,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   121 =>
      //   array(
      //     'name' => 'HRD 10032',
      //     'code' => 'BLACK',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => NULL,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   122 =>
      //   array(
      //     'name' => 'ARIZONIA 10059',
      //     'code' => 'BLACK',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   123 =>
      //   array(
      //     'name' => 'DIMOSS 107',
      //     'code' => 'NAVY',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => 1,
      //       40 => 1,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   124 =>
      //   array(
      //     'name' => 'MAVELLINO',
      //     'code' => '3305-BLACK',
      //     'price' => 2500,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => NULL,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   125 =>
      //   array(
      //     'name' => 'MELODY MARKER',
      //     'code' => 'BLUE ',
      //     'price' => NULL,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   126 =>
      //   array(
      //     'name' => NULL,
      //     'code' => NULL,
      //     'price' => NULL,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   127 =>
      //   array(
      //     'name' => 'ARIZONIA KO59',
      //     'code' => 'BLACK',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   128 =>
      //   array(
      //     'name' => 'DIMOSS 107',
      //     'code' => 'NAVY',
      //     'price' => 220,
      //     'stock' => [
      //       36 => NULL,
      //       38 => 1,
      //       40 => 1,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   129 =>
      //   array(
      //     'name' => 'MAVELLINO 3305',
      //     'code' => 'BLACK',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => NULL,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   130 =>
      //   array(
      //     'name' => 'MELODY MAKER 1057',
      //     'code' => 'BLUE',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => 1,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   131 =>
      //   array(
      //     'name' => 'ELEGANT LINE 5820-27',
      //     'code' => 'NAVY',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   132 =>
      //   array(
      //     'name' => 'ELEGANT LINE 5820-28',
      //     'code' => 'GREY',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => 1,
      //       50 => NULL,
      //       52 => 1,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   133 =>
      //   array(
      //     'name' => 'DIMARE 401505BB',
      //     'code' => 'BLACK &WHITE',
      //     'price' => 300,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   134 =>
      //   array(
      //     'name' => 'LADY MORGANA STRIPED 4938',
      //     'code' => 'BLACK',
      //     'price' => 220,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => 2,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   135 =>
      //   array(
      //     'name' => 'MAVELINO 3213',
      //     'code' => 'RED',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => 1,
      //       40 => 1,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => 1,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   136 =>
      //   array(
      //     'name' => 'MODAMILA',
      //     'code' => 'RED 4005',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => 1,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   137 =>
      //   array(
      //     'name' => 'MODAMILA',
      //     'code' => 'BLUE 4000',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   138 =>
      //   array(
      //     'name' => 'MODAMILA',
      //     'code' => 'BLACK -4000',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => 1,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   139 =>
      //   array(
      //     'name' => 'ROSSO ORGIN',
      //     'code' => 'GREY',
      //     'price' => 220,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   140 =>
      //   array(
      //     'name' => 'MELODY MARKER',
      //     'code' => 'BLACK',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 2,
      //       52 => 1,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   141 =>
      //   array(
      //     'name' => 'ELEGANT LINE 5740-27',
      //     'code' => 'NACY & RED',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   142 =>
      //   array(
      //     'name' => 'DIMOSS PLEATED  - 31972',
      //     'code' => NULL,
      //     'price' => 220,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => 1,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   143 =>
      //   array(
      //     'name' => 'DFARK -1002',
      //     'code' => 'NAVY',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => 1,
      //       52 => 1,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   144 =>
      //   array(
      //     'name' => 'MAVELINO 3213',
      //     'code' => 'NAVY',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => 1,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   145 =>
      //   array(
      //     'name' => 'MAVELLINO 3138',
      //     'code' => 'NAVY',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   146 =>
      //   array(
      //     'name' => 'ELEGANT LINE - 5716',
      //     'code' => 'SHIRT DRESS',
      //     'price' => 220,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   147 =>
      //   array(
      //     'name' => 'ELEGANT - 5753',
      //     'code' => 'SHIRT DRESS',
      //     'price' => 220,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => 1,
      //       50 => 1,
      //       52 => 2,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   148 =>
      //   array(
      //     'name' => 'WALLIS TOP',
      //     'code' => 'ARMY GREEN',
      //     'price' => 100,
      //     'stock' => [
      //       36 => 2,
      //       38 => 1,
      //       40 => 1,
      //       42 => 2,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   149 =>
      //   array(
      //     'name' => 'FOR QUEEN',
      //     'code' => 'TROUSER / TOP',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   150 =>
      //   array(
      //     'name' => 'ELEGANT LINE SHIRT DRESS',
      //     'code' => 5697,
      //     'price' => 220,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   151 =>
      //   array(
      //     'name' => 'ELEGANT SHIRT DRESS',
      //     'code' => 5810,
      //     'price' => 220,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   152 =>
      //   array(
      //     'name' => 'BOW NEXT PLEAT',
      //     'code' => 'CURRY',
      //     'price' => 180,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   153 =>
      //   array(
      //     'name' => 'JYLLA GOZAL',
      //     'code' => 'RED TROUER/TOP',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   154 =>
      //   array(
      //     'name' => 'JACQUE VERT',
      //     'code' => 'RED DRESS',
      //     'price' => 250,
      //     'stock' => [
      //       36 => NULL,
      //       38 => 1,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   155 =>
      //   array(
      //     'name' => 'CANTA CLUTCH',
      //     'code' => 'BLACK & WHITE',
      //     'price' => 120,
      //     'stock' => [
      //       36 => NULL,
      //       38 => 3,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   156 =>
      //   array(
      //     'name' => 'CANTA CLUTCH',
      //     'code' => 'CROCO BACK',
      //     'price' => 120,
      //     'stock' => [
      //       36 => NULL,
      //       38 => 1,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      // ),

      // 'LADIES SHOES' =>
      // array(
      //   0 =>
      //   array(
      //     'name' => 'SCRAPE SHOE',
      //     'color' => 'BLACK',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => 1,
      //       39 => 1,
      //       40 => 1,
      //       41 => 1,
      //       42 => NULL,
      //     ]
      //   ),
      //   1 =>
      //   array(
      //     'name' => 'SSCRAPE',
      //     'color' => 'BROWN',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => 1,
      //       39 => 1,
      //       40 => 1,
      //       41 => NULL,
      //       42 => NULL,
      //     ]
      //   ),
      //   2 =>
      //   array(
      //     'name' => 'AAROFRAY',
      //     'color' => 'BLACK',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => NULL,
      //       39 => NULL,
      //       40 => NULL,
      //       41 => 2,
      //       42 => NULL,
      //     ]
      //   ),
      //   3 =>
      //   array(
      //     'name' => 'AAROFRAY',
      //     'color' => '2" COFFEE',
      //     'stock' => [
      //       36 => NULL,
      //       37 => 1,
      //       38 => 1,
      //       39 => NULL,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => NULL,
      //     ]
      //   ),
      //   4 =>
      //   array(
      //     'name' => 'MPO SLB',
      //     'color' => 'BLACK',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => 1,
      //       39 => 1,
      //       40 => 2,
      //       41 => 1,
      //       42 => 1,
      //     ]
      //   ),
      //   5 =>
      //   array(
      //     'name' => 'FRERES SANTO BIG',
      //     'color' => 'FLAT BLACK',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => NULL,
      //       39 => 1,
      //       40 => NULL,
      //       41 => 3,
      //       42 => 1,
      //     ]
      //   ),
      //   6 =>
      //   array(
      //     'name' => 'FRERES SANTO BIG',
      //     'color' => 'SUEDE FLAAT BLACK',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => 1,
      //       39 => 1,
      //       40 => 1,
      //       41 => NULL,
      //       42 => 1,
      //     ]
      //   ),
      //   7 =>
      //   array(
      //     'name' => 'MPO SLB',
      //     'color' => 'RED',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => NULL,
      //       39 => NULL,
      //       40 => NULL,
      //       41 => 1,
      //       42 => NULL,
      //     ]
      //   ),
      //   8 =>
      //   array(
      //     'name' => 'FIRST SNOW',
      //     'color' => 'BLACK',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => 3,
      //       39 => NULL,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => NULL,
      //     ]
      //   ),
      //   9 =>
      //   array(
      //     'name' => 'TOMFORD',
      //     'color' => 'BLACK ',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => NULL,
      //       39 => NULL,
      //       40 => 1,
      //       41 => NULL,
      //       42 => NULL,
      //     ]
      //   ),
      //   10 =>
      //   array(
      //     'name' => 'SNDE BLOCK',
      //     'color' => 'RED',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => 3,
      //       39 => 1,
      //       40 => 1,
      //       41 => 1,
      //       42 => NULL,
      //     ]
      //   ),
      //   11 =>
      //   array(
      //     'name' => 'CHARLES & KEITH',
      //     'color' => 'RED',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => NULL,
      //       39 => 1,
      //       40 => 1,
      //       41 => 1,
      //       42 => NULL,
      //     ]
      //   ),
      //   12 =>
      //   array(
      //     'name' => 'CHARLES & KEITH',
      //     'color' => 'BLACK',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => NULL,
      //       39 => NULL,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => NULL,
      //     ]
      //   ),
      //   13 =>
      //   array(
      //     'name' => 'AAROFRAY',
      //     'color' => 'GREEN',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => NULL,
      //       39 => 2,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => NULL,
      //     ]
      //   ),
      //   14 =>
      //   array(
      //     'name' => 'AAROFRAY BLOCK WINE',
      //     'color' => NULL,
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => 1,
      //       39 => 1,
      //       40 => NULL,
      //       41 => 1,
      //       42 => 1,
      //     ]
      //   ),
      //   15 =>
      //   array(
      //     'name' => 'AAROFRAY',
      //     'color' => 'COMBI BLACK',
      //     'stock' => [
      //       36 => NULL,
      //       37 => 1,
      //       38 => 1,
      //       39 => NULL,
      //       40 => 1,
      //       41 => NULL,
      //       42 => 1,
      //     ]
      //   ),
      //   16 =>
      //   array(
      //     'name' => 'AAROFRAY 4"',
      //     'color' => 'NAVY',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => NULL,
      //       39 => 1,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => NULL,
      //     ]
      //   ),
      //   17 =>
      //   array(
      //     'name' => 'AAROFRAY 3"',
      //     'color' => 'NAVY',
      //     'stock' => [
      //       36 => NULL,
      //       37 => 1,
      //       38 => 3,
      //       39 => NULL,
      //       40 => 1,
      //       41 => 1,
      //       42 => NULL,
      //     ]
      //   ),
      //   18 =>
      //   array(
      //     'name' => 'AAROFRAY 4"',
      //     'color' => 'BROWN',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => NULL,
      //       39 => NULL,
      //       40 => 1,
      //       41 => 1,
      //       42 => NULL,
      //     ]
      //   ),
      //   19 =>
      //   array(
      //     'name' => 'AAROFRAY 3"',
      //     'color' => 'BLACK',
      //     'stock' => [
      //       36 => NULL,
      //       37 => 1,
      //       38 => 1,
      //       39 => 3,
      //       40 => 1,
      //       41 => NULL,
      //       42 => NULL,
      //     ]
      //   ),
      //   20 =>
      //   array(
      //     'name' => 'AAROFRAY 2"',
      //     'color' => 'BLACK',
      //     'stock' => [
      //       36 => NULL,
      //       37 => 1,
      //       38 => NULL,
      //       39 => 2,
      //       40 => 1,
      //       41 => 1,
      //       42 => NULL,
      //     ]
      //   ),
      //   21 =>
      //   array(
      //     'name' => 'AAROFRAY 2"',
      //     'color' => 'BROWN',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => 1,
      //       39 => NULL,
      //       40 => 1,
      //       41 => NULL,
      //       42 => NULL,
      //     ]
      //   ),
      //   22 =>
      //   array(
      //     'name' => 'AAROFRAY ',
      //     'color' => 'WINE',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => NULL,
      //       39 => NULL,
      //       40 => NULL,
      //       41 => 1,
      //       42 => NULL,
      //     ]
      //   ),
      //   23 =>
      //   array(
      //     'name' => 'AAROFRAY 2"',
      //     'color' => 'CREAM',
      //     'stock' => [
      //       36 => NULL,
      //       37 => 1,
      //       38 => 1,
      //       39 => 1,
      //       40 => 1,
      //       41 => 1,
      //       42 => NULL,
      //     ]
      //   ),
      //   24 =>
      //   array(
      //     'name' => 'GERTTIE FLAT',
      //     'color' => 'BROWN',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => NULL,
      //       39 => NULL,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => 6,
      //     ]
      //   ),
      //   25 =>
      //   array(
      //     'name' => 'ALTIN 727-000547',
      //     'color' => 'BLACK',
      //     'stock' => [
      //       36 => 1,
      //       37 => 2,
      //       38 => 2,
      //       39 => 1,
      //       40 => 1,
      //       41 => NULL,
      //       42 => NULL,
      //     ]
      //   ),
      //   26 =>
      //   array(
      //     'name' => 'ALTIN 547',
      //     'color' => 'BEIGE',
      //     'stock' => [
      //       36 => 1,
      //       37 => 2,
      //       38 => 2,
      //       39 => 2,
      //       40 => 1,
      //       41 => NULL,
      //       42 => NULL,
      //     ]
      //   ),
      //   27 =>
      //   array(
      //     'name' => 'ALTIN 130',
      //     'color' => 'BRONZE',
      //     'stock' => [
      //       36 => 1,
      //       37 => 2,
      //       38 => 2,
      //       39 => 2,
      //       40 => 1,
      //       41 => NULL,
      //       42 => NULL,
      //     ]
      //   ),
      //   28 =>
      //   array(
      //     'name' => 'AAROFORARY',
      //     'color' => 'BLACK',
      //     'stock' => [
      //       36 => NULL,
      //       37 => 1,
      //       38 => 2,
      //       39 => 2,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => NULL,
      //     ]
      //   ),
      //   29 =>
      //   array(
      //     'name' => 'AAROFRARY',
      //     'color' => 'SILVER',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => 2,
      //       39 => NULL,
      //       40 => 1,
      //       41 => 1,
      //       42 => NULL,
      //     ]
      //   ),
      //   30 =>
      //   array(
      //     'name' => 'AY SHOE 109020',
      //     'color' => 'NAVY',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => 2,
      //       39 => 1,
      //       40 => 2,
      //       41 => 2,
      //       42 => NULL,
      //     ]
      //   ),
      //   31 =>
      //   array(
      //     'name' => 'AY 695',
      //     'color' => 'WINE',
      //     'stock' => [
      //       36 => 1,
      //       37 => 2,
      //       38 => 2,
      //       39 => 2,
      //       40 => 1,
      //       41 => NULL,
      //       42 => NULL,
      //     ]
      //   ),
      //   32 =>
      //   array(
      //     'name' => 'AY 3103',
      //     'color' => 'BLACK',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => NULL,
      //       39 => 2,
      //       40 => 2,
      //       41 => 2,
      //       42 => 2,
      //     ]
      //   ),
      //   33 =>
      //   array(
      //     'name' => 'AY 103',
      //     'color' => 'BLACL',
      //     'stock' => [
      //       36 => 1,
      //       37 => 2,
      //       38 => 2,
      //       39 => 2,
      //       40 => 1,
      //       41 => NULL,
      //       42 => NULL,
      //     ]
      //   ),
      //   34 =>
      //   array(
      //     'name' => 'AY 104',
      //     'color' => 'BEIGE',
      //     'stock' => [
      //       36 => 1,
      //       37 => 2,
      //       38 => 2,
      //       39 => 1,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => NULL,
      //     ]
      //   ),
      //   35 =>
      //   array(
      //     'name' => 'AY 179',
      //     'color' => 'BLACK',
      //     'stock' => [
      //       36 => 1,
      //       37 => 2,
      //       38 => 2,
      //       39 => 2,
      //       40 => 1,
      //       41 => NULL,
      //       42 => NULL,
      //     ]
      //   ),
      //   36 =>
      //   array(
      //     'name' => 'BIG TREE 272-12',
      //     'color' => 'RED',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => 1,
      //       39 => NULL,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => NULL,
      //     ]
      //   ),
      //   37 =>
      //   array(
      //     'name' => 'BIG TREE 272-12',
      //     'color' => 'BLACK',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => NULL,
      //       39 => NULL,
      //       40 => NULL,
      //       41 => 1,
      //       42 => 1,
      //       44 => 1,
      //     ]
      //   ),
      //   38 =>
      //   array(
      //     'name' => 'BIG TREE 262-72',
      //     'color' => 'PIN',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => NULL,
      //       39 => NULL,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => NULL,
      //     ]
      //   ),
      //   39 =>
      //   array(
      //     'name' => 'CQRVELA',
      //     'color' => 'RED',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => NULL,
      //       39 => NULL,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => 1,
      //     ]
      //   ),
      //   40 =>
      //   array(
      //     'name' => 'ZARA EIGE SEUDE',
      //     'color' => 'BLACK',
      //     'stock' => [
      //       36 => NULL,
      //       37 => 1,
      //       38 => NULL,
      //       39 => NULL,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => NULL,
      //     ]
      //   ),
      //   41 =>
      //   array(
      //     'name' => 'ZARA SEUDE',
      //     'color' => 'SLB - BLACK',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => 1,
      //       39 => NULL,
      //       40 => NULL,
      //       41 => 1,
      //       42 => NULL,
      //       44 => 3,
      //     ]
      //   ),
      //   42 =>
      //   array(
      //     'name' => 'ZARA SEUDE SLB',
      //     'color' => 'WINE',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => NULL,
      //       39 => NULL,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => NULL,
      //     ]
      //   ),
      //   43 =>
      //   array(
      //     'name' => 'ROVINGO SEUIDE',
      //     'color' => 'NAVY',
      //     'stock' => [
      //       36 => 1,
      //       37 => 2,
      //       38 => NULL,
      //       39 => NULL,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => NULL,
      //     ]
      //   ),
      //   44 =>
      //   array(
      //     'name' => 'SIMMI  SANDALS',
      //     'color' => 'BLACK',
      //     'stock' => [
      //       36 => NULL,
      //       37 => 1,
      //       38 => NULL,
      //       39 => 1,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => NULL,
      //     ]
      //   ),
      //   45 =>
      //   array(
      //     'name' => 'ROVINGO SEUIDE',
      //     'color' => 'GREY',
      //     'stock' => [
      //       36 => 1,
      //       37 => 1,
      //       38 => 1,
      //       39 => 2,
      //       40 => 1,
      //       41 => NULL,
      //       42 => NULL,
      //     ]
      //   ),
      //   46 =>
      //   array(
      //     'name' => 'CL 164',
      //     'color' => 'BLACK',
      //     'stock' => [
      //       36 => NULL,
      //       37 => 1,
      //       38 => 1,
      //       39 => 1,
      //       40 => 1,
      //       41 => 1,
      //       42 => NULL,
      //     ]
      //   ),
      //   47 =>
      //   array(
      //     'name' => 'SIMMI SANDALS',
      //     'color' => 'BLACK',
      //     'stock' => [
      //       36 => NULL,
      //       37 => 1,
      //       38 => 1,
      //       39 => 1,
      //       40 => 1,
      //       41 => NULL,
      //       42 => NULL,
      //     ]
      //   ),
      //   48 =>
      //   array(
      //     'name' => 'AARONFRAY CROC',
      //     'color' => 'BLACK',
      //     'stock' => [
      //       36 => NULL,
      //       37 => 1,
      //       38 => NULL,
      //       39 => 1,
      //       40 => 1,
      //       41 => 1,
      //       42 => NULL,
      //     ]
      //   ),
      //   49 => NULL,
      //   50 => NULL,
      //   51 => NULL,
      //   52 => NULL,
      //   53 => NULL,
      //   54 => NULL,
      //   55 => NULL,
      //   56 => NULL,
      //   57 =>
      //   array(
      //     'name' => 'SLIPPER/SSANDALS',
      //     'color' => NULL,
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => NULL,
      //       39 => NULL,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => NULL,
      //     ]
      //   ),
      //   58 =>
      //   array(
      //     'name' => 'ZARA SLB',
      //     'color' => 'BROWN',
      //     'stock' => [
      //       36 => NULL,
      //       37 => 1,
      //       38 => 1,
      //       39 => NULL,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => NULL,
      //     ]
      //   ),
      //   59 =>
      //   array(
      //     'name' => 'MUKARKA BLOCK',
      //     'color' => 'BROWN',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => 1,
      //       39 => 1,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => 2,
      //     ]
      //   ),
      //   60 =>
      //   array(
      //     'name' => 'MUKARKA BLOCK',
      //     'color' => 'BLACK',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => 1,
      //       39 => 1,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => 2,
      //     ]
      //   ),
      //   61 =>
      //   array(
      //     'name' => 'ZAFA WOMAN',
      //     'color' => 'BLACK',
      //     'stock' => [
      //       36 => NULL,
      //       37 => 1,
      //       38 => 1,
      //       39 => NULL,
      //       40 => NULL,
      //       41 => 1,
      //       42 => 1,
      //     ]
      //   ),
      //   62 =>
      //   array(
      //     'name' => 'DE MANJO',
      //     'color' => 'B;ACK',
      //     'stock' => [
      //       36 => NULL,
      //       37 => 1,
      //       38 => 1,
      //       39 => 1,
      //       40 => 1,
      //       41 => NULL,
      //       42 => NULL,
      //     ]
      //   ),
      //   63 =>
      //   array(
      //     'name' => 'ZARA BANC',
      //     'color' => 'BROWN',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => 1,
      //       39 => NULL,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => 1,
      //     ]
      //   ),
      //   64 =>
      //   array(
      //     'name' => 'NIKE TRAINERS',
      //     'color' => 'PURPLE',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => NULL,
      //       39 => 1,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => NULL,
      //     ]
      //   ),
      //   65 =>
      //   array(
      //     'name' => 'ZARA',
      //     'color' => 'GLITTER',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => NULL,
      //       39 => 1,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => 1,
      //     ]
      //   ),
      //   66 =>
      //   array(
      //     'name' => 'ZARA',
      //     'color' => 'BROWN',
      //     'stock' => [
      //       36 => NULL,
      //       37 => 1,
      //       38 => NULL,
      //       39 => NULL,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => NULL,
      //     ]
      //   ),
      //   67 =>
      //   array(
      //     'name' => 'LOLA',
      //     'color' => 'B;ACK',
      //     'stock' => [
      //       36 => NULL,
      //       37 => NULL,
      //       38 => NULL,
      //       39 => NULL,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => 1,
      //     ]
      //   ),
      // ),

      // 'TROUSERS GENTS' =>
      // array(
      //   0 =>
      //   array(
      //     'name' => 'MONAR WP-523-06',
      //     'color' => 'NAVY',
      //     'price' => 180,
      //     'stock' => [
      //       32 => NULL,
      //       33 => NULL,
      //       34 => NULL,
      //       36 => NULL,
      //       337 => NULL,
      //       38 => NULL,
      //       39 => NULL,
      //       40 => NULL,
      //       42 => 2,
      //       44 => 4,
      //       46 => 4,
      //       48 => 4,
      //       50 => 2,
      //       52 => 2,
      //       54 => 2,
      //     ]
      //   ),
      //   1 =>
      //   array(
      //     'name' => 'MONAR WP-523-04',
      //     'color' => 'COFFEE',
      //     'price' => 180,
      //     'stock' => [
      //       32 => NULL,
      //       33 => NULL,
      //       34 => NULL,
      //       36 => NULL,
      //       337 => NULL,
      //       38 => NULL,
      //       39 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => 2,
      //       46 => 2,
      //       48 => 2,
      //       50 => 1,
      //       52 => 1,
      //       54 => 1,
      //     ]
      //   ),
      //   2 =>
      //   array(
      //     'name' => 'MONAR WP-523-10',
      //     'color' => 'COFFEE',
      //     'price' => 180,
      //     'stock' => [
      //       32 => NULL,
      //       33 => NULL,
      //       34 => NULL,
      //       36 => NULL,
      //       337 => NULL,
      //       38 => NULL,
      //       39 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => 2,
      //       46 => 2,
      //       48 => 2,
      //       50 => 1,
      //       52 => 1,
      //       54 => 1,
      //     ]
      //   ),
      //   3 =>
      //   array(
      //     'name' => 'TM MARTIN- 20-012',
      //     'color' => 'CURRY',
      //     'price' => 180,
      //     'stock' => [
      //       32 => NULL,
      //       33 => NULL,
      //       34 => NULL,
      //       36 => NULL,
      //       337 => NULL,
      //       38 => NULL,
      //       39 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => NULL,
      //       50 => 1,
      //       52 => 1,
      //       54 => 1,
      //     ]
      //   ),
      //   4 =>
      //   array(
      //     'name' => 'MONDAR 07',
      //     'color' => 'BLACK',
      //     'price' => 180,
      //     'stock' => [
      //       32 => NULL,
      //       33 => NULL,
      //       34 => NULL,
      //       36 => NULL,
      //       337 => NULL,
      //       38 => NULL,
      //       39 => 1,
      //       40 => 1,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //     ]
      //   ),
      //   5 =>
      //   array(
      //     'name' => 'MONDAR 02',
      //     'color' => 'NAVY',
      //     'price' => 180,
      //     'stock' => [
      //       32 => NULL,
      //       33 => NULL,
      //       34 => NULL,
      //       36 => NULL,
      //       337 => NULL,
      //       38 => NULL,
      //       39 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => 1,
      //       54 => 1,
      //     ]
      //   ),
      //   6 =>
      //   array(
      //     'name' => 'MONDAR 05',
      //     'color' => 'BEIGE',
      //     'price' => 180,
      //     'stock' => [
      //       32 => NULL,
      //       33 => NULL,
      //       34 => NULL,
      //       36 => NULL,
      //       337 => NULL,
      //       38 => 2,
      //       39 => 1,
      //       40 => 1,
      //       42 => NULL,
      //       44 => 1,
      //       46 => NULL,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //     ]
      //   ),
      //   7 =>
      //   array(
      //     'name' => 'MONDAR 03',
      //     'color' => 'NAVY',
      //     'price' => 180,
      //     'stock' => [
      //       32 => NULL,
      //       33 => NULL,
      //       34 => NULL,
      //       36 => NULL,
      //       337 => NULL,
      //       38 => 1,
      //       39 => 1,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //     ]
      //   ),
      //   8 =>
      //   array(
      //     'name' => 'MONDAR 06',
      //     'color' => 'BLUE',
      //     'price' => 180,
      //     'stock' => [
      //       32 => NULL,
      //       33 => NULL,
      //       34 => NULL,
      //       36 => NULL,
      //       337 => NULL,
      //       38 => 1,
      //       39 => NULL,
      //       40 => 2,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //     ]
      //   ),
      //   9 =>
      //   array(
      //     'name' => 'BOSS',
      //     'color' => 'BEIGE',
      //     'price' => 150,
      //     'stock' => [
      //       32 => NULL,
      //       33 => NULL,
      //       34 => NULL,
      //       36 => NULL,
      //       337 => NULL,
      //       38 => NULL,
      //       39 => NULL,
      //       40 => 1,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //     ]
      //   ),
      //   10 =>
      //   array(
      //     'name' => 'MONDAR-06',
      //     'color' => 'COFFEE',
      //     'price' => 150,
      //     'stock' => [
      //       32 => NULL,
      //       33 => NULL,
      //       34 => NULL,
      //       36 => NULL,
      //       337 => NULL,
      //       38 => NULL,
      //       39 => NULL,
      //       40 => 1,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => 1,
      //       48 => NULL,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //     ]
      //   ),
      //   11 =>
      //   array(
      //     'name' => 'BALLINO',
      //     'color' => 'KHAKI',
      //     'price' => 150,
      //     'stock' => [
      //       32 => NULL,
      //       33 => NULL,
      //       34 => NULL,
      //       36 => NULL,
      //       337 => NULL,
      //       38 => NULL,
      //       39 => NULL,
      //       40 => NULL,
      //       42 => 2,
      //       44 => NULL,
      //       46 => 3,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //     ]
      //   ),
      //   12 =>
      //   array(
      //     'name' => 'BARENDI',
      //     'color' => 'COFFEE',
      //     'price' => 150,
      //     'stock' => [
      //       32 => NULL,
      //       33 => NULL,
      //       34 => NULL,
      //       36 => NULL,
      //       337 => NULL,
      //       38 => 1,
      //       39 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //     ]
      //   ),
      //   13 =>
      //   array(
      //     'name' => 'GA',
      //     'color' => 'COFFEE',
      //     'price' => 160,
      //     'stock' => [
      //       32 => NULL,
      //       33 => NULL,
      //       34 => NULL,
      //       36 => NULL,
      //       337 => NULL,
      //       38 => 1,
      //       39 => 1,
      //       40 => 1,
      //       42 => 1,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //     ]
      //   ),
      //   14 =>
      //   array(
      //     'name' => 'CARLO',
      //     'color' => 'WINE',
      //     'price' => 150,
      //     'stock' => [
      //       32 => NULL,
      //       33 => NULL,
      //       34 => NULL,
      //       36 => NULL,
      //       337 => NULL,
      //       38 => 1,
      //       39 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //     ]
      //   ),
      //   15 =>
      //   array(
      //     'name' => 'MONAR -08',
      //     'color' => 'KHAKI',
      //     'price' => 180,
      //     'stock' => [
      //       32 => NULL,
      //       33 => NULL,
      //       34 => NULL,
      //       36 => NULL,
      //       337 => NULL,
      //       38 => 1,
      //       39 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //     ]
      //   ),
      //   16 =>
      //   array(
      //     'name' => 'LOWELDI JEANS',
      //     'color' => 'BLACK',
      //     'price' => 100,
      //     'stock' => [
      //       32 => NULL,
      //       33 => NULL,
      //       34 => NULL,
      //       36 => NULL,
      //       337 => NULL,
      //       38 => 1,
      //       39 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //     ]
      //   ),
      //   17 =>
      //   array(
      //     'name' => 'CK SHORTS',
      //     'color' => 'BLUE',
      //     'price' => 100,
      //     'stock' => [
      //       32 => NULL,
      //       33 => NULL,
      //       34 => NULL,
      //       36 => NULL,
      //       337 => NULL,
      //       38 => 1,
      //       39 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //     ]
      //   ),
      //   18 =>
      //   array(
      //     'name' => 'ZARA',
      //     'color' => 'GREY',
      //     'price' => 100,
      //     'stock' => [
      //       32 => NULL,
      //       33 => NULL,
      //       34 => NULL,
      //       36 => NULL,
      //       337 => NULL,
      //       38 => NULL,
      //       39 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //     ]
      //   ),
      //   19 =>
      //   array(
      //     'name' => 'LEON JEANS',
      //     'color' => 'BLUE',
      //     'price' => 100,
      //     'stock' => [
      //       32 => NULL,
      //       33 => NULL,
      //       34 => NULL,
      //       36 => NULL,
      //       337 => NULL,
      //       38 => NULL,
      //       39 => NULL,
      //       40 => 1,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //     ]
      //   ),
      //   20 =>
      //   array(
      //     'name' => 'ZARA',
      //     'color' => 'KHAKI',
      //     'price' => NULL,
      //     'stock' => [
      //       32 => NULL,
      //       33 => NULL,
      //       34 => NULL,
      //       36 => NULL,
      //       337 => NULL,
      //       38 => NULL,
      //       39 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //     ]
      //   ),
      //   21 =>
      //   array(
      //     'name' => NULL,
      //     'color' => 'GREY',
      //     'price' => NULL,
      //     'stock' => [
      //       32 => NULL,
      //       33 => NULL,
      //       34 => NULL,
      //       36 => NULL,
      //       337 => NULL,
      //       38 => NULL,
      //       39 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => 1,
      //       48 => NULL,
      //       50 => 4,
      //       52 => 1,
      //       54 => NULL,
      //     ]
      //   ),
      // ),

      // 'TOPS' =>
      // array(
      //   0 =>
      //   array(
      //     'name' => 'PLEATED BACK',
      //     'code' => 'GREEN',
      //     'price' => 100,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => 1,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   1 =>
      //   array(
      //     'name' => 'PLEATED BACK',
      //     'code' => 'WHITE',
      //     'price' => 100,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => 1,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   2 =>
      //   array(
      //     'name' => 'PLEATED BACK',
      //     'code' => 'CURRY',
      //     'price' => 100,
      //     'stock' => [
      //       36 => NULL,
      //       38 => 1,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => 1,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   4 =>
      //   array(
      //     'name' => 'ZAC RACHEAL',
      //     'code' => 'BLACK',
      //     'price' => 80,
      //     'stock' => [
      //       36 => 1,
      //       38 => 1,
      //       40 => 1,
      //       42 => NULL,
      //       44 => 1,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   5 =>
      //   array(
      //     'name' => 'EH COLLECTION',
      //     'code' => 'BLUE',
      //     'price' => 80,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => 1,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   6 =>
      //   array(
      //     'name' => 'BOW NECK',
      //     'code' => 'PINK',
      //     'price' => 80,
      //     'stock' => [
      //       36 => NULL,
      //       38 => 1,
      //       40 => 1,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   7 =>
      //   array(
      //     'name' => 'BOW NECK',
      //     'code' => 'WHITE',
      //     'price' => 80,
      //     'stock' => [
      //       36 => NULL,
      //       38 => 2,
      //       40 => 2,
      //       42 => 2,
      //       44 => 2,
      //       46 => 1,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   8 =>
      //   array(
      //     'name' => 'RIVER ISLAND',
      //     'code' => 'WHITE',
      //     'price' => 80,
      //     'stock' => [
      //       36 => NULL,
      //       38 => 1,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   9 =>
      //   array(
      //     'name' => 'WALLIS TOP',
      //     'code' => NULL,
      //     'price' => 80,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 2,
      //       44 => 1,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   10 =>
      //   array(
      //     'name' => 'LORENSA',
      //     'code' => 'WHITE',
      //     'price' => 100,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => 1,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   11 =>
      //   array(
      //     'name' => 'LORENSA',
      //     'code' => 'GREEN',
      //     'price' => 100,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => 1,
      //       46 => NULL,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   12 =>
      //   array(
      //     'name' => 'LORENSA',
      //     'code' => 'BLUE',
      //     'price' => 100,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   13 =>
      //   array(
      //     'name' => 'GIZZLINE',
      //     'code' => 'BLACK',
      //     'price' => 180,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => NULL,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   14 =>
      //   array(
      //     'name' => 'GIZZLINE',
      //     'code' => 'WHITE',
      //     'price' => 180,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => 1,
      //       48 => 1,
      //       50 => NULL,
      //       52 => 1,
      //       54 => 1,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   15 =>
      //   array(
      //     'name' => 'GIZZLINE',
      //     'code' => 'STRIP WHITE',
      //     'price' => 180,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   16 =>
      //   array(
      //     'name' => 'K& D',
      //     'code' => 'RED TOP',
      //     'price' => 100,
      //     'stock' => [
      //       36 => NULL,
      //       38 => 1,
      //       40 => NULL,
      //       42 => 1,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   17 =>
      //   array(
      //     'name' => 'AMO OGANZA',
      //     'code' => 'RED TOP',
      //     'price' => 200,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   18 =>
      //   array(
      //     'name' => 'DORTHY PERKIN ',
      //     'code' => 'LACE',
      //     'price' => 100,
      //     'stock' => [
      //       36 => NULL,
      //       38 => 1,
      //       40 => 1,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   19 =>
      //   array(
      //     'name' => 'CLOCK HOUSE',
      //     'code' => 'GREEN',
      //     'price' => 80,
      //     'stock' => [
      //       36 => 3,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   20 =>
      //   array(
      //     'name' => 'QED POKA ',
      //     'code' => 'NAVY',
      //     'price' => 150,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => 3,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   21 =>
      //   array(
      //     'name' => 'SHN 4767-988',
      //     'code' => 'MULTI',
      //     'price' => 180,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   22 =>
      //   array(
      //     'name' => 'DIMARE',
      //     'code' => 'NBLUE',
      //     'price' => 180,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => 1,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   23 =>
      //   array(
      //     'name' => 'RE RACH ',
      //     'code' => 'NAVY',
      //     'price' => 150,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   24 =>
      //   array(
      //     'name' => 'SASAN',
      //     'code' => ' GREY & BLACK',
      //     'price' => 150,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   25 =>
      //   array(
      //     'name' => 'WALLIS TOP',
      //     'code' => 'BLK',
      //     'price' => 150,
      //     'stock' => [
      //       36 => 2,
      //       38 => 1,
      //       40 => 1,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   26 =>
      //   array(
      //     'name' => 'POKA CREPE',
      //     'code' => NULL,
      //     'price' => NULL,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => 2,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   27 =>
      //   array(
      //     'name' => 'BON MARCHE',
      //     'code' => 'LEMON',
      //     'price' => 100,
      //     'stock' => [
      //       36 => 1,
      //       38 => NULL,
      //       40 => 1,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   28 =>
      //   array(
      //     'name' => 'ALEX EVENING',
      //     'code' => 'BLUE',
      //     'price' => 180,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => 1,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   29 =>
      //   array(
      //     'name' => 'ADRAINA ',
      //     'code' => 'WHITE',
      //     'price' => 180,
      //     'stock' => [
      //       36 => 1,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   30 =>
      //   array(
      //     'name' => 'ADRAINA ',
      //     'code' => 'WINE',
      //     'price' => 180,
      //     'stock' => [
      //       36 => 1,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      //   31 =>
      //   array(
      //     'name' => 'YESSICA',
      //     'code' => NULL,
      //     'price' => NULL,
      //     'stock' => [
      //       36 => NULL,
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => 1,
      //       48 => NULL,
      //       50 => 2,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //       62 => NULL,
      //       64 => NULL,
      //     ]
      //   ),
      // ),
      // 'T SHIRTS' =>
      // array(
      //   0 =>
      //   array(
      //     'name' => 'JORDAN T SHIRT',
      //     'color' => 'PINK',
      //     'price' => 50,
      //     'stock' => 6,
      //   ),
      //   1 =>
      //   array(
      //     'name' => 'JORDAN T SHIRT',
      //     'color' => 'ARMY',
      //     'price' => 50,
      //     'stock' => 2,
      //   ),
      //   2 =>
      //   array(
      //     'name' => 'JORDAN T SHIRT',
      //     'color' => 'WHITE',
      //     'price' => 50,
      //     'stock' => 4,
      //   ),
      //   3 =>
      //   array(
      //     'name' => 'JORDAN T SHIRT',
      //     'color' => 'DARK GREY',
      //     'price' => 50,
      //     'stock' => 2,
      //   ),
      //   4 =>
      //   array(
      //     'name' => 'JORDAN T SHIRT',
      //     'color' => 'LIGHT GREY',
      //     'price' => 50,
      //     'stock' => 1,
      //   ),
      //   5 =>
      //   array(
      //     'name' => 'JORDAN T SHIRT',
      //     'color' => 'BLACK',
      //     'price' => 50,
      //     'stock' => 5,
      //   ),
      //   6 =>
      //   array(
      //     'name' => 'ADIDDIAS',
      //     'color' => 'WHITE',
      //     'price' => 50,
      //     'stock' => 7,
      //   ),
      //   7 =>
      //   array(
      //     'name' => 'ADDIAS',
      //     'color' => 'HOT RED',
      //     'price' => 50,
      //     'stock' => 2,
      //   ),
      //   8 =>
      //   array(
      //     'name' => 'YELLOW',
      //     'color' => NULL,
      //     'price' => NULL,
      //     'stock' => 3,
      //   ),
      //   9 =>
      //   array(
      //     'name' => NULL,
      //     'color' => 'RED',
      //     'price' => NULL,
      //     'stock' => 8,
      //   ),
      //   10 =>
      //   array(
      //     'name' => 'LA COST',
      //     'color' => 'MULTI',
      //     'price' => 70,
      //     'stock' => 20,
      //   ),
      //   11 =>
      //   array(
      //     'name' => 'NIKE',
      //     'color' => 'GREEN',
      //     'price' => 50,
      //     'stock' => 4,
      //   ),
      //   12 =>
      //   array(
      //     'name' => 'LACOST',
      //     'color' => 'BLACK',
      //     'price' => 70,
      //     'stock' => 3,
      //   ),
      //   13 =>
      //   array(
      //     'name' => 'SPORTS WEAR',
      //     'color' => 'BLUE',
      //     'price' => 150,
      //     'stock' => 6,
      //   ),
      //   14 =>
      //   array(
      //     'name' => 'SPORTS WEAR',
      //     'color' => 'PINK',
      //     'price' => 150,
      //     'stock' => 9,
      //   ),
      //   15 =>
      //   array(
      //     'name' => 'SPORTS WEAR',
      //     'color' => 'NAVY',
      //     'price' => 150,
      //     'stock' => 4,
      //   ),
      //   16 =>
      //   array(
      //     'name' => 'JARABIA LADIES',
      //     'color' => 'BLACK',
      //     'price' => 130,
      //     'stock' => 8,
      //   ),
      //   17 =>
      //   array(
      //     'name' => 'JARABIA LADIES',
      //     'color' => 'COLORED',
      //     'price' => 130,
      //     'stock' => 6,
      //   ),
      //   18 =>
      //   array(
      //     'name' => 'KAFTAN ',
      //     'color' => 'MEN',
      //     'price' => 300,
      //     'stock' => 2,
      //   ),
      //   19 =>
      //   array(
      //     'name' => 'G&D BOLERO',
      //     'color' => 'GREEN',
      //     'price' => 80,
      //     'stock' => 4,
      //   ),
      //   20 =>
      //   array(
      //     'name' => 'G&D BOLERO',
      //     'color' => 'WINE',
      //     'price' => 80,
      //     'stock' => 4,
      //   ),
      //   21 =>
      //   array(
      //     'name' => 'G&D BOLERO',
      //     'color' => 'NAVY',
      //     'price' => 80,
      //     'stock' => 4,
      //   ),
      //   22 =>
      //   array(
      //     'name' => 'G&D BOLERO',
      //     'color' => 'BLACK',
      //     'price' => 80,
      //     'stock' => 4,
      //   ),
      //   23 =>
      //   array(
      //     'name' => 'G&D BOLERO',
      //     'color' => 'BRONZE',
      //     'price' => 80,
      //     'stock' => 4,
      //   ),
      // ),
      // 'BAGS' =>
      // array(
      //   0 =>
      //   array(
      //     'name' => 'FENDI MINI',
      //     'price' => 150,
      //     'stock' => [
      //       'BLACK' => 4,
      //       'NAVY' => NULL,
      //       'RED' => NULL,
      //       'BROWN' => 3,
      //       'BEIGE' => 2,
      //       'BLACK&WHITE' => 1,
      //       'PURPLE' => NULL,
      //       'code' => NULL,
      //     ]
      //   ),
      //   1 =>
      //   array(
      //     'name' => 'MK MINI',
      //     'price' => 150,
      //     'stock' => [
      //       'BLACK' => 2,
      //       'NAVY' => NULL,
      //       'RED' => 3,
      //       'BROWN' => 3,
      //       'BEIGE' => 1,
      //       'BLACK&WHITE' => NULL,
      //       'PURPLE' => NULL,
      //       'code' => NULL,
      //     ]
      //   ),
      //   2 =>
      //   array(
      //     'name' => 'LV TRAVELING',
      //     'price' => 250,
      //     'stock' => [
      //       'BLACK' => NULL,
      //       'NAVY' => NULL,
      //       'RED' => NULL,
      //       'BROWN' => 2,
      //       'BEIGE' => NULL,
      //       'BLACK&WHITE' => NULL,
      //       'PURPLE' => NULL,
      //       'code' => NULL,
      //     ]
      //   ),
      //   3 =>
      //   array(
      //     'name' => 'ARON 6707',
      //     'price' => 250,
      //     'stock' => [
      //       'BLACK' => 2,
      //       'NAVY' => NULL,
      //       'RED' => 2,
      //       'BROWN' => 2,
      //       'BEIGE' => NULL,
      //       'BLACK&WHITE' => NULL,
      //       'PURPLE' => NULL,
      //       'code' => NULL,
      //     ]
      //   ),
      //   4 =>
      //   array(
      //     'name' => 'ARON 5950',
      //     'price' => NULL,
      //     'stock' => [
      //       'BLACK' => 2,
      //       'NAVY' => NULL,
      //       'RED' => 2,
      //       'BROWN' => 2,
      //       'BEIGE' => NULL,
      //       'BLACK&WHITE' => NULL,
      //       'PURPLE' => NULL,
      //       'code' => NULL,
      //     ]
      //   ),
      //   5 =>
      //   array(
      //     'name' => 'ARON 2304',
      //     'price' => NULL,
      //     'stock' => [
      //       'BLACK' => 3,
      //       'NAVY' => NULL,
      //       'RED' => 2,
      //       'BROWN' => 2,
      //       'BEIGE' => NULL,
      //       'BLACK&WHITE' => NULL,
      //       'PURPLE' => NULL,
      //       'code' => NULL,
      //     ]
      //   ),
      //   6 =>
      //   array(
      //     'name' => 'AARON 6133',
      //     'price' => NULL,
      //     'stock' => [
      //       'BLACK' => 2,
      //       'NAVY' => NULL,
      //       'RED' => NULL,
      //       'BROWN' => 2,
      //       'BEIGE' => NULL,
      //       'BLACK&WHITE' => NULL,
      //       'PURPLE' => NULL,
      //       'code' => NULL,
      //     ]
      //   ),
      //   7 =>
      //   array(
      //     'name' => 81072,
      //     'price' => NULL,
      //     'stock' => [
      //       'BLACK' => NULL,
      //       'NAVY' => NULL,
      //       'RED' => 1,
      //       'BROWN' => NULL,
      //       'BEIGE' => NULL,
      //       'BLACK&WHITE' => NULL,
      //       'PURPLE' => NULL,
      //       'code' => NULL,
      //     ]
      //   ),
      //   8 =>
      //   array(
      //     'name' => 82118,
      //     'price' => 180,
      //     'stock' => [
      //       'BLACK' => 1,
      //       'NAVY' => NULL,
      //       'RED' => 1,
      //       'BROWN' => 1,
      //       'BEIGE' => 1,
      //       'BLACK&WHITE' => NULL,
      //       'PURPLE' => NULL,
      //       'code' => NULL,
      //     ]
      //   ),
      //   9 =>
      //   array(
      //     'name' => 'CHRIS BELLAAAO12005005',
      //     'price' => 220,
      //     'stock' => [
      //       'BLACK' => 3,
      //       'NAVY' => NULL,
      //       'RED' => NULL,
      //       'BROWN' => NULL,
      //       'BEIGE' => NULL,
      //       'BLACK&WHITE' => NULL,
      //       'PURPLE' => NULL,
      //       'code' => NULL,
      //     ]
      //   ),
      //   10 =>
      //   array(
      //     'name' => 82153,
      //     'price' => 180,
      //     'stock' => [
      //       'BLACK' => NULL,
      //       'NAVY' => NULL,
      //       'RED' => NULL,
      //       'BROWN' => NULL,
      //       'BEIGE' => 1,
      //       'BLACK&WHITE' => NULL,
      //       'PURPLE' => NULL,
      //       'code' => NULL,
      //     ]
      //   ),
      //   11 =>
      //   array(
      //     'name' => 81072,
      //     'price' => 180,
      //     'stock' => [
      //       'BLACK' => NULL,
      //       'NAVY' => NULL,
      //       'RED' => 1,
      //       'BROWN' => NULL,
      //       'BEIGE' => NULL,
      //       'BLACK&WHITE' => NULL,
      //       'PURPLE' => NULL,
      //       'code' => NULL,
      //     ]
      //   ),
      //   12 =>
      //   array(
      //     'name' => 'LV MINI',
      //     'price' => 120,
      //     'stock' => [
      //       'BLACK' => 2,
      //       'NAVY' => NULL,
      //       'RED' => 2,
      //       'BROWN' => NULL,
      //       'BEIGE' => NULL,
      //       'BLACK&WHITE' => NULL,
      //       'PURPLE' => NULL,
      //       'code' => NULL,
      //     ]
      //   ),
      //   13 =>
      //   array(
      //     'name' => 'GREY',
      //     'price' => 150,
      //     'stock' => [
      //       'BLACK' => 1,
      //       'NAVY' => NULL,
      //       'RED' => NULL,
      //       'BROWN' => NULL,
      //       'BEIGE' => NULL,
      //       'BLACK&WHITE' => NULL,
      //       'PURPLE' => NULL,
      //       'code' => 1,
      //     ]
      //   ),
      //   14 =>
      //   array(
      //     'name' => 'ARON BLUE/5965',
      //     'price' => 120,
      //     'stock' => [
      //       'BLACK' => NULL,
      //       'NAVY' => NULL,
      //       'RED' => NULL,
      //       'BROWN' => NULL,
      //       'BEIGE' => NULL,
      //       'BLACK&WHITE' => NULL,
      //       'PURPLE' => NULL,
      //       'code' => NULL,
      //     ]
      //   ),
      //   15 =>
      //   array(
      //     'name' => 'BIG BAG',
      //     'price' => 200,
      //     'stock' => [
      //       'BLACK' => 1,
      //       'NAVY' => 1,
      //       'RED' => NULL,
      //       'BROWN' => NULL,
      //       'BEIGE' => NULL,
      //       'BLACK&WHITE' => NULL,
      //       'PURPLE' => NULL,
      //       'code' => NULL,
      //     ]
      //   ),
      //   16 =>
      //   array(
      //     'name' => 'TROUSER STAP',
      //     'price' => 40,
      //     'stock' => [
      //       'BLACK' => 5,
      //       'NAVY' => NULL,
      //       'RED' => NULL,
      //       'BROWN' => NULL,
      //       'BEIGE' => NULL,
      //       'BLACK&WHITE' => NULL,
      //       'PURPLE' => NULL,
      //       'code' => NULL,
      //     ]
      //   ),
      //   17 =>
      //   array(
      //     'name' => 'FENDI BIG',
      //     'price' => 200,
      //     'stock' => [
      //       'BLACK' => NULL,
      //       'NAVY' => NULL,
      //       'RED' => NULL,
      //       'BROWN' => 2,
      //       'BEIGE' => NULL,
      //       'BLACK&WHITE' => NULL,
      //       'PURPLE' => NULL,
      //       'code' => NULL,
      //     ]
      //   ),
      //   18 =>
      //   array(
      //     'name' => 826,
      //     'price' => NULL,
      //     'stock' => [
      //       'BLACK' => 1,
      //       'NAVY' => NULL,
      //       'RED' => NULL,
      //       'BROWN' => NULL,
      //       'BEIGE' => NULL,
      //       'BLACK&WHITE' => NULL,
      //       'PURPLE' => NULL,
      //       'code' => NULL,
      //     ]
      //   ),
      //   19 =>
      //   array(
      //     'name' => 'CHANNEL ',
      //     'price' => NULL,
      //     'stock' => [
      //       'BLACK' => NULL,
      //       'NAVY' => NULL,
      //       'RED' => NULL,
      //       'BROWN' => NULL,
      //       'BEIGE' => NULL,
      //       'BLACK&WHITE' => NULL,
      //       'PURPLE' => NULL,
      //       'code' => 1,
      //     ]
      //   ),
      //   20 =>
      //   array(
      //     'name' => 'QUILT CLUTCH',
      //     'price' => 120,
      //     'stock' => [
      //       'BLACK' => 3,
      //       'NAVY' => NULL,
      //       'RED' => 1,
      //       'BROWN' => 1,
      //       'BEIGE' => NULL,
      //       'BLACK&WHITE' => NULL,
      //       'PURPLE' => NULL,
      //       'code' => NULL,
      //     ]
      //   ),
      //   21 =>
      //   array(
      //     'name' => 'CLUTCH QUILT',
      //     'price' => 120,
      //     'stock' => [
      //       'BLACK' => 1,
      //       'NAVY' => NULL,
      //       'RED' => NULL,
      //       'BROWN' => NULL,
      //       'BEIGE' => NULL,
      //       'BLACK&WHITE' => NULL,
      //       'PURPLE' => NULL,
      //       'code' => NULL,
      //     ]
      //   ),
      // ),
      // 'TROUSERS LADIES' =>
      // array(
      //   // 0 =>
      //   // array(
      //   //   'name' => NULL,
      //   //   'price' => NULL,
      //   //   'stock' => [ 38 => 'S',
      //   //   40 => 'M',
      //   //   42 => 'L',
      //   //   44 => 'XL',
      //   //   46 => '2XL',
      //   //   48 => '3XL',
      //   //   50 => '4XL',
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,
      //   //   58 => NULL,
      //   //   60 => NULL,]
      //   // ),
      //   1 =>
      //   array(
      //     'name' => 'BAKIS/29042-50',
      //     'price' => 180,
      //     'stock' => [
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //     ]
      //   ),
      //   2 =>
      //   array(
      //     'name' => ' BAKIS BLUE',
      //     'price' => 180,
      //     'stock' => [
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => 1,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //     ]
      //   ),
      //   3 =>
      //   array(
      //     'name' => 'EYDIS COFFEE',
      //     'price' => 180,
      //     'stock' => [
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //     ]
      //   ),
      //   4 =>
      //   array(
      //     'name' => 'EYDIS CHECK RED',
      //     'price' => 180,
      //     'stock' => [
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //     ]
      //   ),
      //   5 =>
      //   array(
      //     'name' => 'EYDIS BLACK',
      //     'price' => 180,
      //     'stock' => [
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //     ]
      //   ),
      //   6 =>
      //   array(
      //     'name' => 'MAARRYLAAND TROOUSER 4040-356',
      //     'price' => 180,
      //     'stock' => [
      //       38 => 1,
      //       40 => 1,
      //       42 => 1,
      //       44 => 1,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //     ]
      //   ),
      //   7 =>
      //   array(
      //     'name' => 'EYDIS GREEN',
      //     'price' => NULL,
      //     'stock' => [
      //       38 => 1,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //     ]
      //   ),
      //   8 =>
      //   array(
      //     'name' => 'EYDIS CURRY',
      //     'price' => NULL,
      //     'stock' => [
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //     ]
      //   ),
      //   9 =>
      //   array(
      //     'name' => 'EYDIS NAVY',
      //     'price' => NULL,
      //     'stock' => [
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //     ]
      //   ),
      //   10 =>
      //   array(
      //     'name' => 'RED',
      //     'price' => NULL,
      //     'stock' => [
      //       38 => 2,
      //       40 => 1,
      //       42 => 1,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //     ]
      //   ),
      //   11 =>
      //   array(
      //     'name' => 'MARYLAND',
      //     'price' => 150,
      //     'stock' => [
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //     ]
      //   ),
      //   12 =>
      //   array(
      //     'name' => 'WHHITE JEANS',
      //     'price' => 100,
      //     'stock' => [
      //       38 => 3,
      //       40 => 1,
      //       42 => 3,
      //       44 => 1,
      //       46 => 1,
      //       48 => 2,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //     ]
      //   ),
      //   13 =>
      //   array(
      //     'name' => 'BLUE REGULAR JEANS',
      //     'price' => NULL,
      //     'stock' => [
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => 3,
      //       48 => 3,
      //       50 => 4,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //     ]
      //   ),
      //   14 =>
      //   array(
      //     'name' => 'ORANGE JEANS',
      //     'price' => 100,
      //     'stock' => [
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //     ]
      //   ),
      //   15 =>
      //   array(
      //     'name' => 'FASHION NOVA CARPI',
      //     'price' => 100,
      //     'stock' => [
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => 2,
      //       48 => NULL,
      //       50 => 2,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //     ]
      //   ),
      //   16 =>
      //   array(
      //     'name' => 'BLACK JEANS',
      //     'price' => 100,
      //     'stock' => [
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => 1,
      //       50 => 2,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //     ]
      //   ),
      //   17 =>
      //   array(
      //     'name' => 'JEANS LIGHT BLUE',
      //     'price' => 100,
      //     'stock' => [
      //       38 => 2,
      //       40 => 1,
      //       42 => NULL,
      //       44 => 2,
      //       46 => 1,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //     ]
      //   ),
      //   18 =>
      //   array(
      //     'name' => 'JJEANS LIGHT BLUE',
      //     'price' => 100,
      //     'stock' => [
      //       38 => 1,
      //       40 => 2,
      //       42 => 1,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //     ]
      //   ),
      //   19 =>
      //   array(
      //     'name' => 'JEANS SKIRT',
      //     'price' => NULL,
      //     'stock' => [
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //     ]
      //   ),
      //   20 =>
      //   array(
      //     'name' => 'BEIGE',
      //     'price' => 100,
      //     'stock' => [
      //       38 => 1,
      //       40 => 1,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //     ]
      //   ),
      //   21 =>
      //   array(
      //     'name' => 'JEANS WINE',
      //     'price' => 100,
      //     'stock' => [
      //       38 => NULL,
      //       40 => 2,
      //       42 => 2,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //     ]
      //   ),
      //   22 =>
      //   array(
      //     'name' => 'JEGGINGS',
      //     'price' => 100,
      //     'stock' => [
      //       38 => 1,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //     ]
      //   ),
      //   23 =>
      //   array(
      //     'name' => 'OLD NAVY',
      //     'price' => 100,
      //     'stock' => [
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //       58 => NULL,
      //       60 => NULL,
      //     ]
      //   ),
      // ),
      // 'MEN SHIRTS' =>
      // array(
      //   0 =>
      //   array(
      //     'name' => 'TM MARTIN',
      //     'color' => 'CHECK',
      //     'price' => 140,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => 2,
      //       '42/L' => 2,
      //       '44/XL' => 2,
      //       '46/2XL' => 2,
      //       '48/3XL' => 2,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   1 =>
      //   array(
      //     'name' => 'WILLIAM HUNT',
      //     'color' => 'STRIP BLUE',
      //     'price' => 140,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => 1,
      //       '42/L' => 1,
      //       '44/XL' => 1,
      //       '46/2XL' => 1,
      //       '48/3XL' => 1,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   2 =>
      //   array(
      //     'name' => 'BAR DU COTTON',
      //     'color' => 'FLOWERED',
      //     'price' => 140,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => NULL,
      //       '42/L' => NULL,
      //       '44/XL' => 3,
      //       '46/2XL' => 1,
      //       '48/3XL' => NULL,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   3 =>
      //   array(
      //     'name' => 'DEVOJON',
      //     'color' => 'FLOWERED CURRY',
      //     'price' => 140,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => NULL,
      //       '42/L' => NULL,
      //       '44/XL' => 2,
      //       '46/2XL' => NULL,
      //       '48/3XL' => 1,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   4 =>
      //   array(
      //     'name' => 'DEVOJON',
      //     'color' => 'BLACK & WHITE SHORT SLEEVE',
      //     'price' => 120,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => 3,
      //       '42/L' => 3,
      //       '44/XL' => 1,
      //       '46/2XL' => 2,
      //       '48/3XL' => NULL,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   5 =>
      //   array(
      //     'name' => 'DEVOJON',
      //     'color' => 'GOLD &GREY',
      //     'price' => 140,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => NULL,
      //       '42/L' => 2,
      //       '44/XL' => 1,
      //       '46/2XL' => NULL,
      //       '48/3XL' => 1,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   6 =>
      //   array(
      //     'name' => 'WILLIAM HUNT',
      //     'color' => 'STRIP NAVY',
      //     'price' => 140,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => 2,
      //       '42/L' => 1,
      //       '44/XL' => 1,
      //       '46/2XL' => NULL,
      //       '48/3XL' => 1,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   7 =>
      //   array(
      //     'name' => 'LUCIA FALONI',
      //     'color' => 'STRIP MULTI',
      //     'price' => 140,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => 1,
      //       '42/L' => 1,
      //       '44/XL' => 1,
      //       '46/2XL' => 1,
      //       '48/3XL' => 1,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   8 =>
      //   array(
      //     'name' => 'DEVEJON',
      //     'color' => 'FLOWERED BLUE',
      //     'price' => 140,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => NULL,
      //       '42/L' => 1,
      //       '44/XL' => 1,
      //       '46/2XL' => NULL,
      //       '48/3XL' => NULL,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   9 =>
      //   array(
      //     'name' => 'JACK WILLIS',
      //     'color' => 'FLOWERED RED',
      //     'price' => 140,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => NULL,
      //       '42/L' => 1,
      //       '44/XL' => 1,
      //       '46/2XL' => NULL,
      //       '48/3XL' => NULL,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   10 =>
      //   array(
      //     'name' => 'WILLIAM HUNT',
      //     'color' => 'FLOWERED BROWN',
      //     'price' => 140,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => 3,
      //       '42/L' => 4,
      //       '44/XL' => NULL,
      //       '46/2XL' => NULL,
      //       '48/3XL' => 1,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   11 =>
      //   array(
      //     'name' => 'ALBERTO ROMA',
      //     'color' => 'GREY',
      //     'price' => 140,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => NULL,
      //       '42/L' => 2,
      //       '44/XL' => NULL,
      //       '46/2XL' => NULL,
      //       '48/3XL' => NULL,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   12 =>
      //   array(
      //     'name' => 'DIMERO',
      //     'color' => 'BLACK',
      //     'price' => 140,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => 1,
      //       '42/L' => NULL,
      //       '44/XL' => NULL,
      //       '46/2XL' => NULL,
      //       '48/3XL' => NULL,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   13 =>
      //   array(
      //     'name' => 'LUCIA FALONI',
      //     'color' => 'PINK LINES',
      //     'price' => 140,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => NULL,
      //       '42/L' => 1,
      //       '44/XL' => 1,
      //       '46/2XL' => NULL,
      //       '48/3XL' => 1,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   14 =>
      //   array(
      //     'name' => 'LUCIA FALONI',
      //     'color' => 'BROWN ',
      //     'price' => 140,
      //     'stock' => [
      //       '38/S' => 1,
      //       '40/M' => NULL,
      //       '42/L' => NULL,
      //       '44/XL' => 1,
      //       '46/2XL' => NULL,
      //       '48/3XL' => NULL,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   15 =>
      //   array(
      //     'name' => 'WILLIAM HUNT',
      //     'color' => 'BLUE LINEN',
      //     'price' => 140,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => 2,
      //       '42/L' => 2,
      //       '44/XL' => 1,
      //       '46/2XL' => NULL,
      //       '48/3XL' => NULL,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   16 =>
      //   array(
      //     'name' => 'RALP LAUREEN',
      //     'color' => 'JEANS',
      //     'price' => 120,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => 1,
      //       '42/L' => 1,
      //       '44/XL' => NULL,
      //       '46/2XL' => NULL,
      //       '48/3XL' => NULL,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   17 =>
      //   array(
      //     'name' => 'UMBERTO TITO',
      //     'color' => 'BEIGE',
      //     'price' => 120,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => 1,
      //       '42/L' => 2,
      //       '44/XL' => NULL,
      //       '46/2XL' => 2,
      //       '48/3XL' => 1,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   18 =>
      //   array(
      //     'name' => 'SCF PLAIN',
      //     'color' => 'BLUE LINEN',
      //     'price' => 140,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => 3,
      //       '42/L' => 5,
      //       '44/XL' => NULL,
      //       '46/2XL' => NULL,
      //       '48/3XL' => NULL,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   19 =>
      //   array(
      //     'name' => 'COSTA CAMAN',
      //     'color' => 'WHITE',
      //     'price' => 120,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => NULL,
      //       '42/L' => 2,
      //       '44/XL' => NULL,
      //       '46/2XL' => NULL,
      //       '48/3XL' => 1,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   20 =>
      //   array(
      //     'name' => 'SCOSTA/WH',
      //     'color' => 'WHITE',
      //     'price' => 120,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => 1,
      //       '42/L' => NULL,
      //       '44/XL' => NULL,
      //       '46/2XL' => NULL,
      //       '48/3XL' => NULL,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   21 =>
      //   array(
      //     'name' => 'FUCIA FALONI',
      //     'color' => 'WHITE',
      //     'price' => 120,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => 1,
      //       '42/L' => 1,
      //       '44/XL' => NULL,
      //       '46/2XL' => NULL,
      //       '48/3XL' => 1,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   22 =>
      //   array(
      //     'name' => 'ASSORTED',
      //     'color' => 'WHITE',
      //     'price' => 100,
      //     'stock' => [
      //       '38/S' => 6,
      //       '40/M' => 3,
      //       '42/L' => NULL,
      //       '44/XL' => NULL,
      //       '46/2XL' => NULL,
      //       '48/3XL' => NULL,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   23 =>
      //   array(
      //     'name' => 'CERMONIAL',
      //     'color' => 'WHITE',
      //     'price' => 120,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => 1,
      //       '42/L' => 1,
      //       '44/XL' => 1,
      //       '46/2XL' => 1,
      //       '48/3XL' => NULL,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   24 =>
      //   array(
      //     'name' => 'WILLIAM HUNT',
      //     'color' => 'BLACK',
      //     'price' => 120,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => 2,
      //       '42/L' => 2,
      //       '44/XL' => NULL,
      //       '46/2XL' => 2,
      //       '48/3XL' => 2,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   25 =>
      //   array(
      //     'name' => 'LUCIA FALONI',
      //     'color' => 'BLUE LINEN',
      //     'price' => 140,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => NULL,
      //       '42/L' => 2,
      //       '44/XL' => 2,
      //       '46/2XL' => 1,
      //       '48/3XL' => NULL,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   26 =>
      //   array(
      //     'name' => 'WILLIAM HUNT',
      //     'color' => 'WHITE',
      //     'price' => 120,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => 1,
      //       '42/L' => 2,
      //       '44/XL' => 1,
      //       '46/2XL' => 2,
      //       '48/3XL' => NULL,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   27 =>
      //   array(
      //     'name' => 'UMBERTO TITO',
      //     'color' => 'STRIP BLACK',
      //     'price' => 120,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => NULL,
      //       '42/L' => 2,
      //       '44/XL' => 2,
      //       '46/2XL' => NULL,
      //       '48/3XL' => 3,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   28 =>
      //   array(
      //     'name' => 'UMBERTO TITO',
      //     'color' => 'STRP PURPLE',
      //     'price' => 120,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => 2,
      //       '42/L' => 2,
      //       '44/XL' => 2,
      //       '46/2XL' => NULL,
      //       '48/3XL' => 2,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   29 =>
      //   array(
      //     'name' => 'LUCIA FALONI',
      //     'color' => 'CHECK LINEN',
      //     'price' => 140,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => 1,
      //       '42/L' => 1,
      //       '44/XL' => NULL,
      //       '46/2XL' => 1,
      //       '48/3XL' => 1,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   30 =>
      //   array(
      //     'name' => 'UMBERTO TITO',
      //     'color' => 'CHECK - RED',
      //     'price' => 140,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => 1,
      //       '42/L' => 1,
      //       '44/XL' => NULL,
      //       '46/2XL' => NULL,
      //       '48/3XL' => 1,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   31 =>
      //   array(
      //     'name' => 'UMBERTO TITO',
      //     'color' => 'BLACK &WINE',
      //     'price' => 120,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => 1,
      //       '42/L' => 1,
      //       '44/XL' => 1,
      //       '46/2XL' => NULL,
      //       '48/3XL' => NULL,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   32 =>
      //   array(
      //     'name' => 'CARLO CACA',
      //     'color' => 'BROWN ',
      //     'price' => 120,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => NULL,
      //       '42/L' => 1,
      //       '44/XL' => 1,
      //       '46/2XL' => NULL,
      //       '48/3XL' => NULL,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   33 =>
      //   array(
      //     'name' => 'DEVOJON',
      //     'color' => 'WHITE - SHORT SLEEVE',
      //     'price' => 120,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => NULL,
      //       '42/L' => 2,
      //       '44/XL' => NULL,
      //       '46/2XL' => NULL,
      //       '48/3XL' => NULL,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   34 =>
      //   array(
      //     'name' => 'DEVOJON',
      //     'color' => 'BROWN FLOWERED',
      //     'price' => 120,
      //     'stock' => [
      //       '38/S' => 1,
      //       '40/M' => 1,
      //       '42/L' => 1,
      //       '44/XL' => 1,
      //       '46/2XL' => 1,
      //       '48/3XL' => NULL,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   35 =>
      //   array(
      //     'name' => 'UMBERTO TITO',
      //     'color' => 'DICED BLK/WINE',
      //     'price' => 120,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => 3,
      //       '42/L' => 2,
      //       '44/XL' => 1,
      //       '46/2XL' => NULL,
      //       '48/3XL' => 3,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   36 =>
      //   array(
      //     'name' => 'LF JEANS',
      //     'color' => 'BLUE - SHORT SLEEVE',
      //     'price' => 100,
      //     'stock' => [
      //       '38/S' => 1,
      //       '40/M' => NULL,
      //       '42/L' => NULL,
      //       '44/XL' => NULL,
      //       '46/2XL' => NULL,
      //       '48/3XL' => NULL,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   37 =>
      //   array(
      //     'name' => 'POLO',
      //     'color' => 'JEANS - BLUE',
      //     'price' => 120,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => 3,
      //       '42/L' => 1,
      //       '44/XL' => 1,
      //       '46/2XL' => 1,
      //       '48/3XL' => 1,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   38 =>
      //   array(
      //     'name' => 'WH DOT',
      //     'color' => 'BLUE',
      //     'price' => 120,
      //     'stock' => [
      //       '38/S' => 1,
      //       '40/M' => 1,
      //       '42/L' => 1,
      //       '44/XL' => NULL,
      //       '46/2XL' => 2,
      //       '48/3XL' => 1,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   39 =>
      //   array(
      //     'name' => ' CAARLO   CENTRE',
      //     'color' => 'GREY',
      //     'price' => 120,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => NULL,
      //       '42/L' => 1,
      //       '44/XL' => NULL,
      //       '46/2XL' => 1,
      //       '48/3XL' => NULL,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   40 =>
      //   array(
      //     'name' => 'POLO',
      //     'color' => 'PINK LINES',
      //     'price' => 120,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => NULL,
      //       '42/L' => NULL,
      //       '44/XL' => NULL,
      //       '46/2XL' => 1,
      //       '48/3XL' => NULL,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   41 =>
      //   array(
      //     'name' => 'SCOSTA',
      //     'color' => 'CHECK',
      //     'price' => 120,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => NULL,
      //       '42/L' => 1,
      //       '44/XL' => NULL,
      //       '46/2XL' => NULL,
      //       '48/3XL' => NULL,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   42 =>
      //   array(
      //     'name' => 'UMBERTO TITO',
      //     'color' => 'COMBI',
      //     'price' => 120,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => NULL,
      //       '42/L' => 1,
      //       '44/XL' => NULL,
      //       '46/2XL' => NULL,
      //       '48/3XL' => NULL,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   43 =>
      //   array(
      //     'name' => 'BERRTITO',
      //     'color' => 'GREY',
      //     'price' => 120,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => NULL,
      //       '42/L' => 1,
      //       '44/XL' => 1,
      //       '46/2XL' => NULL,
      //       '48/3XL' => NULL,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   44 =>
      //   array(
      //     'name' => 'UMBERTO TITO',
      //     'color' => 'MULTI',
      //     'price' => 120,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => NULL,
      //       '42/L' => NULL,
      //       '44/XL' => 1,
      //       '46/2XL' => NULL,
      //       '48/3XL' => NULL,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   45 =>
      //   array(
      //     'name' => 'UMBERTO TITO',
      //     'color' => 'MULTI',
      //     'price' => 120,
      //     'stock' => [
      //       '38/S' => NULL,
      //       '40/M' => NULL,
      //       '42/L' => NULL,
      //       '44/XL' => NULL,
      //       '46/2XL' => 1,
      //       '48/3XL' => NULL,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   46 =>
      //   array(
      //     'name' => 'UMBERTO TITO',
      //     'color' => 'PURPLE',
      //     'price' => 120,
      //     'stock' => [
      //       '38/S' => 1,
      //       '40/M' => NULL,
      //       '42/L' => NULL,
      //       '44/XL' => NULL,
      //       '46/2XL' => NULL,
      //       '48/3XL' => NULL,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   47 =>
      //   array(
      //     'name' => 'UMBERTO TITO',
      //     'color' => 'WINE',
      //     'price' => 120,
      //     'stock' => [
      //       '38/S' => 1,
      //       '40/M' => NULL,
      //       '42/L' => NULL,
      //       '44/XL' => 1,
      //       '46/2XL' => NULL,
      //       '48/3XL' => NULL,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      //   48 =>
      //   array(
      //     'name' => 'WH DOT',
      //     'color' => 'BLUE',
      //     'price' => 140,
      //     'stock' => [
      //       '38/S' => 1,
      //       '40/M' => 1,
      //       '42/L' => 1,
      //       '44/XL' => 2,
      //       '46/2XL' => 1,
      //       '48/3XL' => NULL,
      //       '50/4XL' => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       58 => NULL,
      //     ]
      //   ),
      // ),
      // 'MEN SHOES' =>
      // array(
      //   0 =>
      //   array(
      //     'name' => 'ROVINGO OXFORD',
      //     'color' => 'LACE BROWN',
      //     'PRIE' => 300,
      //     'stock' => [
      //       39 => NULL,
      //       40 => NULL,
      //       41 => 1,
      //       42 => 2,
      //       43 => NULL,
      //       44 => 1,
      //       45 => NULL,
      //       46 => NULL,
      //       47 => NULL,
      //     ]
      //   ),
      //   1 =>
      //   array(
      //     'name' => 'ROVINGO OXFORD',
      //     'color' => 'LACE BLACK',
      //     'PRIE' => 300,
      //     'stock' => [
      //       39 => NULL,
      //       40 => 1,
      //       41 => 1,
      //       42 => 1,
      //       43 => NULL,
      //       44 => 1,
      //       45 => NULL,
      //       46 => NULL,
      //       47 => NULL,
      //     ]
      //   ),
      //   2 =>
      //   array(
      //     'name' => 'ROVINGO HOOK',
      //     'color' => 'BLACK',
      //     'PRIE' => 300,
      //     'stock' => [
      //       39 => NULL,
      //       40 => 1,
      //       41 => NULL,
      //       42 => NULL,
      //       43 => NULL,
      //       44 => 1,
      //       45 => NULL,
      //       46 => NULL,
      //       47 => NULL,
      //     ]
      //   ),
      //   3 =>
      //   array(
      //     'name' => 'ROVINGO WAEVE',
      //     'color' => 'WINE',
      //     'PRIE' => 300,
      //     'stock' => [
      //       39 => NULL,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => NULL,
      //       43 => NULL,
      //       44 => 1,
      //       45 => NULL,
      //       46 => NULL,
      //       47 => NULL,
      //     ]
      //   ),
      //   4 =>
      //   array(
      //     'name' => 'NIKE TRAINER',
      //     'color' => 'BLACK',
      //     'PRIE' => 250,
      //     'stock' => [
      //       39 => NULL,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => NULL,
      //       43 => NULL,
      //       44 => 1,
      //       45 => NULL,
      //       46 => NULL,
      //       47 => NULL,
      //     ]
      //   ),
      //   5 =>
      //   array(
      //     'name' => 'XRARY',
      //     'color' => 'BROWN',
      //     'PRIE' => 300,
      //     'stock' => [
      //       39 => NULL,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => NULL,
      //       43 => NULL,
      //       44 => 1,
      //       45 => NULL,
      //       46 => NULL,
      //       47 => NULL,
      //     ]
      //   ),
      //   6 =>
      //   array(
      //     'name' => 'ROVINGO',
      //     'color' => NULL,
      //     'PRIE' => 300,
      //     'stock' => [
      //       39 => NULL,
      //       40 => NULL,
      //       41 => 2,
      //       42 => 1,
      //       43 => 1,
      //       44 => NULL,
      //       45 => NULL,
      //       46 => NULL,
      //       47 => NULL,
      //     ]
      //   ),
      //   7 =>
      //   array(
      //     'name' => 'ROVINGO SLIPPERS',
      //     'color' => 'BLACK',
      //     'PRIE' => 180,
      //     'stock' => [
      //       39 => NULL,
      //       40 => 1,
      //       41 => 1,
      //       42 => NULL,
      //       43 => NULL,
      //       44 => NULL,
      //       45 => NULL,
      //       46 => NULL,
      //       47 => NULL,
      //     ]
      //   ),
      //   8 =>
      //   array(
      //     'name' => 'ROVINGO SLIPPERS',
      //     'color' => 'BROWN',
      //     'PRIE' => 180,
      //     'stock' => [
      //       39 => NULL,
      //       40 => 1,
      //       41 => 1,
      //       42 => NULL,
      //       43 => NULL,
      //       44 => NULL,
      //       45 => NULL,
      //       46 => NULL,
      //       47 => NULL,
      //     ]
      //   ),
      //   9 =>
      //   array(
      //     'name' => 'ROVINGO SNEAKERS',
      //     'color' => 'BROWN',
      //     'PRIE' => 300,
      //     'stock' => [
      //       39 => NULL,
      //       40 => 1,
      //       41 => 1,
      //       42 => 1,
      //       43 => NULL,
      //       44 => 1,
      //       45 => NULL,
      //       46 => NULL,
      //       47 => NULL,
      //     ]
      //   ),
      //   10 =>
      //   array(
      //     'name' => 'ROVINGO SNEAKER ',
      //     'color' => 'BLUE',
      //     'PRIE' => 300,
      //     'stock' => [
      //       39 => NULL,
      //       40 => 1,
      //       41 => 1,
      //       42 => NULL,
      //       43 => NULL,
      //       44 => 1,
      //       45 => NULL,
      //       46 => NULL,
      //       47 => NULL,
      //     ]
      //   ),
      //   11 =>
      //   array(
      //     'name' => 'GEINO CROC',
      //     'color' => 'BLACK',
      //     'PRIE' => NULL,
      //     'stock' => [
      //       39 => NULL,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => NULL,
      //       43 => NULL,
      //       44 => NULL,
      //       45 => NULL,
      //       46 => NULL,
      //       47 => 1,
      //     ]
      //   ),
      //   12 =>
      //   array(
      //     'name' => 'ROVINGO PATENT',
      //     'color' => 'BLACK',
      //     'PRIE' => NULL,
      //     'stock' => [
      //       39 => NULL,
      //       40 => 1,
      //       41 => NULL,
      //       42 => NULL,
      //       43 => NULL,
      //       44 => NULL,
      //       45 => NULL,
      //       46 => NULL,
      //       47 => NULL,
      //     ]
      //   ),
      //   13 =>
      //   array(
      //     'name' => 'ROVINGO SANDALS',
      //     'color' => 'BROWN',
      //     'PRIE' => 250,
      //     'stock' => [
      //       39 => NULL,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => 2,
      //       43 => NULL,
      //       44 => 1,
      //       45 => NULL,
      //       46 => NULL,
      //       47 => NULL,
      //     ]
      //   ),
      //   14 =>
      //   array(
      //     'name' => 'FERRAMO SLIPPERS',
      //     'color' => 'BROWN',
      //     'PRIE' => 250,
      //     'stock' => [
      //       39 => NULL,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => 1,
      //       43 => 1,
      //       44 => 1,
      //       45 => 1,
      //       46 => NULL,
      //       47 => NULL,
      //     ]
      //   ),
      //   15 =>
      //   array(
      //     'name' => 'MENTONE SHOES',
      //     'color' => 'COFFEE',
      //     'PRIE' => 250,
      //     'stock' => [
      //       39 => NULL,
      //       40 => NULL,
      //       41 => 1,
      //       42 => 1,
      //       43 => 1,
      //       44 => 1,
      //       45 => 1,
      //       46 => NULL,
      //       47 => NULL,
      //     ]
      //   ),
      //   16 =>
      //   array(
      //     'name' => 'MENTONE SHOES',
      //     'color' => 'BLACK',
      //     'PRIE' => 400,
      //     'stock' => [
      //       39 => NULL,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => NULL,
      //       43 => NULL,
      //       44 => NULL,
      //       45 => NULL,
      //       46 => NULL,
      //       47 => NULL,
      //     ]
      //   ),
      //   17 =>
      //   array(
      //     'name' => 'MENTONE SHOES',
      //     'color' => 'COFFEE',
      //     'PRIE' => 400,
      //     'stock' => [
      //       39 => NULL,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => 1,
      //       43 => 1,
      //       44 => 1,
      //       45 => 1,
      //       46 => 1,
      //       47 => NULL,
      //     ]
      //   ),
      //   18 =>
      //   array(
      //     'name' => 'MENTONE SHOES',
      //     'color' => 'BLACK',
      //     'PRIE' => 400,
      //     'stock' => [
      //       39 => NULL,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => 1,
      //       43 => 1,
      //       44 => 1,
      //       45 => 1,
      //       46 => 1,
      //       47 => NULL,
      //     ]
      //   ),
      //   19 =>
      //   array(
      //     'name' => 'GIENO SHOE',
      //     'color' => 'BROWN',
      //     'PRIE' => 400,
      //     'stock' => [
      //       39 => NULL,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => NULL,
      //       43 => NULL,
      //       44 => NULL,
      //       45 => NULL,
      //       46 => 1,
      //       47 => NULL,
      //     ]
      //   ),
      //   20 =>
      //   array(
      //     'name' => 'GIENO SHOE',
      //     'color' => 'BLACK',
      //     'PRIE' => 400,
      //     'stock' => [
      //       39 => NULL,
      //       40 => NULL,
      //       41 => 1,
      //       42 => NULL,
      //       43 => NULL,
      //       44 => 1,
      //       45 => NULL,
      //       46 => NULL,
      //       47 => NULL,
      //     ]
      //   ),
      //   21 =>
      //   array(
      //     'name' => 'MENTONE SHOES',
      //     'color' => 'BROWN',
      //     'PRIE' => 400,
      //     'stock' => [
      //       39 => NULL,
      //       40 => NULL,
      //       41 => NULL,
      //       42 => NULL,
      //       43 => NULL,
      //       44 => NULL,
      //       45 => NULL,
      //       46 => 1,
      //       47 => NULL,
      //     ]
      //   ),
      // ),
      // 'LADIES SHIRT' =>
      // array(
      //   0 =>
      //   array(
      //     'name' => 'SCOST',
      //     'color' => 'PINK',
      //     'price ' => 120,
      //     'stock' => [
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => 2,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => 1,
      //       56 => NULL,
      //     ]
      //   ),
      //   1 =>
      //   array(
      //     'name' => 'SCOST',
      //     'color' => 'PLEATED PINK',
      //     'price ' => 120,
      //     'stock' => [
      //       38 => 2,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //     ]
      //   ),
      //   2 =>
      //   array(
      //     'name' => 'MANKROM',
      //     'color' => 'PINK',
      //     'price ' => 120,
      //     'stock' => [
      //       38 => NULL,
      //       40 => 2,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => 1,
      //       54 => NULL,
      //       56 => NULL,
      //     ]
      //   ),
      //   3 =>
      //   array(
      //     'name' => 'SCOST',
      //     'color' => 'POKA FRAILS BLACK',
      //     'price ' => 120,
      //     'stock' => [
      //       38 => NULL,
      //       40 => 1,
      //       42 => 3,
      //       44 => 1,
      //       46 => 1,
      //       48 => 2,
      //       50 => 1,
      //       52 => 1,
      //       54 => NULL,
      //       56 => NULL,
      //     ]
      //   ),
      //   4 =>
      //   array(
      //     'name' => 'JM MARTIN',
      //     'color' => 'NAVY',
      //     'price ' => 120,
      //     'stock' => [
      //       38 => NULL,
      //       40 => 2,
      //       42 => 1,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //     ]
      //   ),
      //   5 =>
      //   array(
      //     'name' => 'SCOSTA',
      //     'color' => 'NAVY',
      //     'price ' => 120,
      //     'stock' => [
      //       38 => 1,
      //       40 => 1,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => 1,
      //       50 => NULL,
      //       52 => 1,
      //       54 => 1,
      //       56 => NULL,
      //     ]
      //   ),
      //   6 =>
      //   array(
      //     'name' => 'BAR DU COTTON',
      //     'color' => 'NAVY',
      //     'price ' => 120,
      //     'stock' => [
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //     ]
      //   ),
      //   7 =>
      //   array(
      //     'name' => 'JM MARTIN',
      //     'color' => 'FRAILS WHITE',
      //     'price ' => 120,
      //     'stock' => [
      //       38 => NULL,
      //       40 => NULL,
      //       42 => 1,
      //       44 => 1,
      //       46 => NULL,
      //       48 => 1,
      //       50 => NULL,
      //       52 => 1,
      //       54 => NULL,
      //       56 => NULL,
      //     ]
      //   ),
      //   8 =>
      //   array(
      //     'name' => 'FERGILS',
      //     'color' => 'PINK',
      //     'price ' => 120,
      //     'stock' => [
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //     ]
      //   ),
      //   9 =>
      //   array(
      //     'name' => 'SCOSTA',
      //     'color' => 'PINK',
      //     'price ' => 120,
      //     'stock' => [
      //       38 => 1,
      //       40 => 1,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => 1,
      //       54 => NULL,
      //       56 => NULL,
      //     ]
      //   ),
      //   10 =>
      //   array(
      //     'name' => 'SCOST',
      //     'color' => 'HOT PINK',
      //     'price ' => 120,
      //     'stock' => [
      //       38 => NULL,
      //       40 => 1,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => 1,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //     ]
      //   ),
      //   11 =>
      //   array(
      //     'name' => 'BAD DU',
      //     'color' => 'CHECK WINE',
      //     'price ' => 120,
      //     'stock' => [
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => 1,
      //       48 => NULL,
      //       50 => 1,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //     ]
      //   ),
      //   12 =>
      //   array(
      //     'name' => 'VORTEX',
      //     'color' => 'SKY BLUE',
      //     'price ' => 60,
      //     'stock' => [
      //       38 => 4,
      //       40 => 2,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => 2,
      //       48 => 1,
      //       50 => 1,
      //       52 => 1,
      //       54 => NULL,
      //       56 => 1,
      //     ]
      //   ),
      //   13 =>
      //   array(
      //     'name' => 'VORTEX',
      //     'color' => 'WHITE',
      //     'price ' => 60,
      //     'stock' => [
      //       38 => 5,
      //       40 => 1,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => 1,
      //       50 => 1,
      //       52 => 2,
      //       54 => 1,
      //       56 => NULL,
      //     ]
      //   ),
      //   14 =>
      //   array(
      //     'name' => 'MANKROM',
      //     'color' => 'FRAILS BLUE',
      //     'price ' => 120,
      //     'stock' => [
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => 1,
      //       46 => 1,
      //       48 => 1,
      //       50 => NULL,
      //       52 => 1,
      //       54 => NULL,
      //       56 => NULL,
      //     ]
      //   ),
      //   15 =>
      //   array(
      //     'name' => 'SCOSTA',
      //     'color' => 'BLUE',
      //     'price ' => 120,
      //     'stock' => [
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //     ]
      //   ),
      //   16 =>
      //   array(
      //     'name' => NULL,
      //     'color' => 'PURPLE',
      //     'price ' => 120,
      //     'stock' => [
      //       38 => 1,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //     ]
      //   ),
      //   17 =>
      //   array(
      //     'name' => 'MANKROM',
      //     'color' => 'WHITE',
      //     'price ' => NULL,
      //     'stock' => [
      //       38 => NULL,
      //       40 => 1,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //     ]
      //   ),
      //   18 =>
      //   array(
      //     'name' => 'SCOSTA',
      //     'color' => 'FRAILS',
      //     'price ' => NULL,
      //     'stock' => [
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => 1,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => NULL,
      //       56 => NULL,
      //     ]
      //   ),
      //   19 =>
      //   array(
      //     'name' => 'MANKROM',
      //     'color' => 'BLUE',
      //     'price ' => NULL,
      //     'stock' => [
      //       38 => NULL,
      //       40 => NULL,
      //       42 => NULL,
      //       44 => NULL,
      //       46 => NULL,
      //       48 => NULL,
      //       50 => NULL,
      //       52 => NULL,
      //       54 => 1,
      //       56 => NULL,
      //     ]
      //   ),
      //   20 => NULL,
      //   // 21 =>
      //   // array(
      //   //   'name' => 'CLOTH',
      //   //   'color' => 'color',
      //   //   'price ' => 'QTY',
      //   //   'stock' => [ 38 => 'price',
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 22 =>
      //   // array(
      //   //   'name' => 'CLOTH',
      //   //   'color' => 'WHITE',
      //   //   'price ' => 9,
      //   //   'stock' => [ 38 => 100,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 23 =>
      //   // array(
      //   //   'name' => 'CLOTH',
      //   //   'color' => 'MULTI ',
      //   //   'price ' => 8,
      //   //   'stock' => [ 38 => 130,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 24 =>
      //   // array(
      //   //   'name' => 'WAX',
      //   //   'color' => 'BLACK & WHITE',
      //   //   'price ' => 2,
      //   //   'stock' => [ 38 => 350,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 25 =>
      //   // array(
      //   //   'name' => 'WAX',
      //   //   'color' => 'BLACK & WHITE',
      //   //   'price ' => 2,
      //   //   'stock' => [ 38 => 265,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 26 =>
      //   // array(
      //   //   'name' => 'WAX',
      //   //   'color' => 'BLACK & WHITE',
      //   //   'price ' => 1,
      //   //   'stock' => [ 38 => 430,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 27 =>
      //   // array(
      //   //   'name' => 'BELT',
      //   //   'color' => 'BLACK ',
      //   //   'price ' => 34,
      //   //   'stock' => [ 38 => 30,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 28 =>
      //   // array(
      //   //   'name' => 'BELT',
      //   //   'color' => 'RED',
      //   //   'price ' => 9,
      //   //   'stock' => [ 38 => 30,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 29 => NULL,
      //   // 30 =>
      //   // array(
      //   //   'name' => 'INNER',
      //   //   'color' => 'RED',
      //   //   'price ' => 134,
      //   //   'stock' => [ 38 => 30,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 31 =>
      //   // array(
      //   //   'name' => 'INNER',
      //   //   'color' => 'BLACK',
      //   //   'price ' => 39,
      //   //   'stock' => [ 38 => 30,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 32 =>
      //   // array(
      //   //   'name' => 'INNER',
      //   //   'color' => 'WHITE',
      //   //   'price ' => 19,
      //   //   'stock' => [ 38 => 30,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 33 =>
      //   // array(
      //   //   'name' => 'INNER',
      //   //   'color' => 'PURPLE',
      //   //   'price ' => 29,
      //   //   'stock' => [ 38 => 30,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 34 =>
      //   // array(
      //   //   'name' => 'INNER',
      //   //   'color' => 'GREY',
      //   //   'price ' => 5,
      //   //   'stock' => [ 38 => 30,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 35 =>
      //   // array(
      //   //   'name' => 'INNER',
      //   //   'color' => 'BLUE',
      //   //   'price ' => 6,
      //   //   'stock' => [ 38 => 30,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 36 =>
      //   // array(
      //   //   'name' => 'INNER',
      //   //   'color' => 'ASSORTED',
      //   //   'price ' => 3,
      //   //   'stock' => [ 38 => 30,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 37 =>
      //   // array(
      //   //   'name' => 'INNER',
      //   //   'color' => 'WINE',
      //   //   'price ' => 4,
      //   //   'stock' => [ 38 => 30,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 38 =>
      //   // array(
      //   //   'name' => 'INNER',
      //   //   'color' => 'HOT PINK',
      //   //   'price ' => 1,
      //   //   'stock' => [ 38 => 30,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 39 =>
      //   // array(
      //   //   'name' => 'INNER',
      //   //   'color' => 'CREAM',
      //   //   'price ' => 1,
      //   //   'stock' => [ 38 => 30,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 40 =>
      //   // array(
      //   //   'name' => 'INNER',
      //   //   'color' => 'BEIGE',
      //   //   'price ' => 1,
      //   //   'stock' => [ 38 => 30,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 41 =>
      //   // array(
      //   //   'name' => 'INNER',
      //   //   'color' => 'YELLOW',
      //   //   'price ' => 1,
      //   //   'stock' => [ 38 => 30,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 42 =>
      //   // array(
      //   //   'name' => 'INNER',
      //   //   'color' => 'GREEN',
      //   //   'price ' => 1,
      //   //   'stock' => [ 38 => 30,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 43 =>
      //   // array(
      //   //   'name' => 'INNER',
      //   //   'color' => 'LIGHT BLUE',
      //   //   'price ' => 1,
      //   //   'stock' => [ 38 => 30,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 44 =>
      //   // array(
      //   //   'name' => 'POLO SHIRT',
      //   //   'color' => 'WHITE',
      //   //   'price ' => 34,
      //   //   'stock' => [ 38 => 80,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 45 =>
      //   // array(
      //   //   'name' => 'POLO SHIRT',
      //   //   'color' => 'BLUE',
      //   //   'price ' => 7,
      //   //   'stock' => [ 38 => 80,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 46 => NULL,
      //   // 47 =>
      //   // array(
      //   //   'name' => 'PURSE',
      //   //   'color' => 'BLACK',
      //   //   'price ' => 2,
      //   //   'stock' => [ 38 => 40,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 48 =>
      //   // array(
      //   //   'name' => 'SHORTS',
      //   //   'color' => 'BLACK & WHITE',
      //   //   'price ' => 11,
      //   //   'stock' => [ 38 => 30,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 49 =>
      //   // array(
      //   //   'name' => 'SHORTS',
      //   //   'color' => 'BLUE',
      //   //   'price ' => 3,
      //   //   'stock' => [ 38 => 30,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 50 =>
      //   // array(
      //   //   'name' => 'SHORTS',
      //   //   'color' => 'PINK',
      //   //   'price ' => 4,
      //   //   'stock' => [ 38 => 30,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 51 =>
      //   // array(
      //   //   'name' => 'SHORTS',
      //   //   'color' => 'PURPLE',
      //   //   'price ' => 3,
      //   //   'stock' => [ 38 => 30,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 52 =>
      //   // array(
      //   //   'name' => 'TOP',
      //   //   'color' => 'LEOPARD TOP',
      //   //   'price ' => 12,
      //   //   'stock' => [ 38 => 80,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 53 =>
      //   // array(
      //   //   'name' => 'JEGGINGS',
      //   //   'color' => 'MULTI COLORED',
      //   //   'price ' => 10,
      //   //   'stock' => [ 38 => 60,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 54 =>
      //   // array(
      //   //   'name' => 'CERMONIAL MEN SHIRT',
      //   //   'color' => 'WHITE',
      //   //   'price ' => 9,
      //   //   'stock' => [ 38 => 60,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 55 =>
      //   // array(
      //   //   'name' => 'POLO LADIES SHIRT',
      //   //   'color' => 'PINK',
      //   //   'price ' => 11,
      //   //   'stock' => [ 38 => 80,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 56 =>
      //   // array(
      //   //   'name' => 'VORTEXLADIES SHORT SLEEVE SHIRT',
      //   //   'color' => 'WHITE',
      //   //   'price ' => 7,
      //   //   'stock' => [ 38 => 60,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 57 =>
      //   // array(
      //   //   'name' => 'VORTEXLADIES SHORT SLEEVE SHIRT',
      //   //   'color' => 'BLUE',
      //   //   'price ' => 3,
      //   //   'stock' => [ 38 => 60,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 58 =>
      //   // array(
      //   //   'name' => 'TOWEL',
      //   //   'color' => 'WHITE/BLUE',
      //   //   'price ' => 2,
      //   //   'stock' => [ 38 => 60,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      //   // 59 =>
      //   // array(
      //   //   'name' => 'KAFTAN MEN',
      //   //   'color' => 'GOLD',
      //   //   'price ' => 1,
      //   //   'stock' => [ 38 => 250,
      //   //   40 => NULL,
      //   //   42 => NULL,
      //   //   44 => NULL,
      //   //   46 => NULL,
      //   //   48 => NULL,
      //   //   50 => NULL,
      //   //   52 => NULL,
      //   //   54 => NULL,
      //   //   56 => NULL,]
      //   // ),
      // ),

    ];

    foreach ($products as $category => $items) {

      foreach ($items as $item) {
        $record['name'] = null;
        $record['code'] = null;
        $record['price'] = null;
        $record['color'] = null;
        $record['category'] = null;
        $record['stock'] = null;
        //name
        if (isset($item['name'])) {
          $record['name'] = $item['name'];
        }
        // code
        if (isset($item['code'])) {
          $record['code'] = $item['code'];
        }
        // price
        if (isset($item['price'])) {
          $record['price'] = $item['price'];
        }
        // color
        if (isset($item['color'])) {
          $record['color'] = $item['color'];
        }
        // category
        $record['category'] = $category;

        //stock
        if (isset($item['stock'])) {
          if (is_array($item['stock'])) {
            foreach ($item['stock'] as $type => $qty) {
              if ($qty == null) {
                continue;
              }
              $record['size/type'] = $type;
              $record['stock'] = $qty;
              \App\Models\Product::factory()->create($record);
            }
          } else {
            $record['stock'] = $item['stock'];
            \App\Models\Product::factory()->create($record);
          }
        }
      }
    }
  }
}
