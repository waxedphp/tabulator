<?php
return [
  'payload1' => $waxed->setter('Tabulator')
          ->addDataset('People',[

      ['id' => 1, 'name' => 'Billy Bob', 'age'=>12, 'gender'=>"male", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>10],
      ['id' => 2, 'name' => 'Jeany Bob', 'age'=>13, 'gender'=>"female", 'height'=>5, 'col'=>"orange", 'dob'=>"", 'progress'=>90],
      ['id' => 3, 'name' => 'George Bob', 'age'=>12, 'gender'=>"male", 'height'=>3, 'col'=>"red", 'dob'=>"", 'progress'=>30],
      ['id' => 4, 'name' => 'Jane Sob', 'age'=>13, 'gender'=>"female", 'height'=>5, 'col'=>"red", 'dob'=>"", 'progress'=>90],
      ['id' => 5, 'name' => 'Bart Sob', 'age'=>12, 'gender'=>"male", 'height'=>2, 'col'=>"blue", 'dob'=>"", 'progress'=>10],
      ['id' => 6, 'name' => 'Patricia Fob', 'age'=>13, 'gender'=>"female", 'height'=>4, 'col'=>"red", 'dob'=>"", 'progress'=>90],
      ['id' => 7, 'name' => 'Billy Bob', 'age'=>12, 'gender'=>"male", 'height'=>5, 'col'=>"grey", 'dob'=>"", 'progress'=>20],
      ['id' => 8, 'name' => 'Jeany Bob', 'age'=>13, 'gender'=>"female", 'height'=>2, 'col'=>"green", 'dob'=>"", 'progress'=>90],
      ['id' => 9, 'name' => 'Billy Bob', 'age'=>12, 'gender'=>"male", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>10],
      ['id' => 10, 'name' => 'Jeany Bob', 'age'=>13, 'gender'=>"female", 'height'=>3, 'col'=>"red", 'dob'=>"", 'progress'=>70],
      ['id' => 11, 'name' => 'Billy Bob', 'age'=>12, 'gender'=>"male", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>15],
      ['id' => 12, 'name' => 'Jeany Bob', 'age'=>13, 'gender'=>"female", 'height'=>5, 'col'=>"red", 'dob'=>"", 'progress'=>80],
      ['id' => 13, 'name' => 'Billy Bob', 'age'=>12, 'gender'=>"male", 'height'=>5, 'col'=>"red", 'dob'=>"", 'progress'=>25],
      ['id' => 14, 'name' => 'Jeany Bob', 'age'=>13, 'gender'=>"female", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>30],
      ['id' => 15, 'name' => 'Billy Bob', 'age'=>12, 'gender'=>"male", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>35],
      ['id' => 16, 'name' => 'Jeany Bob', 'age'=>13, 'gender'=>"female", 'height'=>2, 'col'=>"red", 'dob'=>"", 'progress'=>40],
      ['id' => 17, 'name' => 'Billy Bob', 'age'=>12, 'gender'=>"male", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>10],
      ['id' => 18, 'name' => 'Jeany Bob', 'age'=>13, 'gender'=>"female", 'height'=>4, 'col'=>"red", 'dob'=>"", 'progress'=>10],
      ['id' => 19, 'name' => 'Billy Bob', 'age'=>12, 'gender'=>"male", 'height'=>5, 'col'=>"red", 'dob'=>"", 'progress'=>10],
      ['id' => 20, 'name' => 'Jeany Bob', 'age'=>13, 'gender'=>"female", 'height'=>4, 'col'=>"red", 'dob'=>"", 'progress'=>20],
          ])
          ->setColors(['#990000','#009900'])
          ->setFormatter('progress', 'progress')
          ->setFormatter('height', 'star', ['stars'=>5])
          ->setFormatter('col', 'color')
          ->setLocalPagination(5)
          ->setSetup([
            'height'=>'350px',
            'selectable' => 1,
            'locale' => 'sk',
            'langs' => [
              'sk' => [
                "pagination"=>[
                  "first"=>"Prvá",
                  "first_title"=>"Prvá stránka",
                  "last"=>"Posledná",
                  "last_title"=>"Posledná stránka",
                  "prev"=>"Predchádzajúca",
                  "prev_title"=>"Predchádzajúca stránka",
                  "next"=>"Nasledujúca",
                  "next_title"=>"Nasledujúca stránka",
                  "all"=>"Všetko",
                ],

              ]

            ],
          ])
          ->forTabulator(),

];


return [
'payload1' =>
  [
    'columns' => [
      ['title' => 'Name', 'field' => 'name', 'sorter' => 'server', 'searchable' => true ],
      ['title' => 'Gender', 'field' => 'gender', 'sorter' => 'server', 'searchable' => true ],
      ['title' => 'Progress', 'field' => 'progress', 'formatter' => 'progress', 'sorter' => 'server', ],
    ],

    'value' => [
      ['id' => 1, 'name' => 'Billy Bob', 'age'=>12, 'gender'=>"male", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>10],
      ['id' => 2, 'name' => 'Jeany Bob', 'age'=>13, 'gender'=>"female", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>90],
      ['id' => 1, 'name' => 'Billy Bob', 'age'=>12, 'gender'=>"male", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>10],
      ['id' => 2, 'name' => 'Jeany Bob', 'age'=>13, 'gender'=>"female", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>90],
      ['id' => 1, 'name' => 'Billy Bob', 'age'=>12, 'gender'=>"male", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>10],
      ['id' => 2, 'name' => 'Jeany Bob', 'age'=>13, 'gender'=>"female", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>90],
      ['id' => 1, 'name' => 'Billy Bob', 'age'=>12, 'gender'=>"male", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>10],
      ['id' => 2, 'name' => 'Jeany Bob', 'age'=>13, 'gender'=>"female", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>90],
      ['id' => 1, 'name' => 'Billy Bob', 'age'=>12, 'gender'=>"male", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>10],
      ['id' => 2, 'name' => 'Jeany Bob', 'age'=>13, 'gender'=>"female", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>90],
      ['id' => 1, 'name' => 'Billy Bob', 'age'=>12, 'gender'=>"male", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>10],
      ['id' => 2, 'name' => 'Jeany Bob', 'age'=>13, 'gender'=>"female", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>90],
      ['id' => 1, 'name' => 'Billy Bob', 'age'=>12, 'gender'=>"male", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>10],
      ['id' => 2, 'name' => 'Jeany Bob', 'age'=>13, 'gender'=>"female", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>90],
      ['id' => 1, 'name' => 'Billy Bob', 'age'=>12, 'gender'=>"male", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>10],
      ['id' => 2, 'name' => 'Jeany Bob', 'age'=>13, 'gender'=>"female", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>90],
      ['id' => 1, 'name' => 'Billy Bob', 'age'=>12, 'gender'=>"male", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>10],
      ['id' => 2, 'name' => 'Jeany Bob', 'age'=>13, 'gender'=>"female", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>90],
      ['id' => 1, 'name' => 'Billy Bob', 'age'=>12, 'gender'=>"male", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>10],
      ['id' => 2, 'name' => 'Jeany Bob', 'age'=>13, 'gender'=>"female", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>90],
      ['id' => 1, 'name' => 'Billy Bob', 'age'=>12, 'gender'=>"male", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>10],
      ['id' => 2, 'name' => 'Jeany Bob', 'age'=>13, 'gender'=>"female", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>90],
      ['id' => 1, 'name' => 'Billy Bob', 'age'=>12, 'gender'=>"male", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>10],
      ['id' => 2, 'name' => 'Jeany Bob', 'age'=>13, 'gender'=>"female", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>90],
      ['id' => 1, 'name' => 'Billy Bob', 'age'=>12, 'gender'=>"male", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>10],
      ['id' => 2, 'name' => 'Jeany Bob', 'age'=>13, 'gender'=>"female", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>90],
      ['id' => 1, 'name' => 'Billy Bob', 'age'=>12, 'gender'=>"male", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>10],
      ['id' => 2, 'name' => 'Jeany Bob', 'age'=>13, 'gender'=>"female", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>90],
      ['id' => 1, 'name' => 'Billy Bob', 'age'=>12, 'gender'=>"male", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>10],
      ['id' => 2, 'name' => 'Jeany Bob', 'age'=>13, 'gender'=>"female", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>90],
      ['id' => 1, 'name' => 'Billy Bob', 'age'=>12, 'gender'=>"male", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>10],
      ['id' => 2, 'name' => 'Jeany Bob', 'age'=>13, 'gender'=>"female", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>90],

    ],
  ],

];

