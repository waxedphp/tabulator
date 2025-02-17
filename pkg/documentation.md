# Tabulator

Complex Tables, Simple Code

Tabulator allows you to create interactive tables in seconds from any HTML Table, JavaScript Array, AJAX data source or JSON formatted data.

http://tabulator.info

MIT license


### HTML:

```

  <div class="waxed-tabulator"
    data-name="payload1"

  ></div>

```

### PHP:

```

$this->waxed->display([
  'payload' =>
  [
    'columns' => [
      ['title' => 'Name', 'field' => 'name', 'sorter' => 'server', ],
      ['title' => 'Gender', 'field' => 'gender', ],
    ],

    'data' => [
      ['id' => 1, 'name' => 'Billy Bob', 'age'=>"12", 'gender'=>"male", 'height'=>1, 'col'=>"red", 'dob'=>"", 'cheese'=>1],
      ['id' => 2, 'name' => 'Jeany Bob', 'age'=>"13", 'gender'=>"female", 'height'=>1, 'col'=>"red", 'dob'=>"", 'cheese'=>1],
    ],
  ],
], 'template');

```


### PHP, using Utils:

```

$this->waxed->display([
  'payload1' => $waxed->Utils()->Tabulator()
          ->addDataset('People',[

      ['id' => 1, 'name' => 'Billy Bob', 'age'=>12, 'gender'=>"male", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>10],
      ['id' => 2, 'name' => 'Jeany Bob', 'age'=>13, 'gender'=>"female", 'height'=>1, 'col'=>"red", 'dob'=>"", 'progress'=>90],

          ])
          ->setColors(['#990000','#009900'])->forTabulator(),

], 'template');

```

