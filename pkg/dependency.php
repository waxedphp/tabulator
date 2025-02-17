<?php

return [
  'js' => [
    //'/tabulator/tabulator-5.3.1/dist/js/tabulator.js',
    NODE . '/tabulator-tables/dist/js/tabulator.js',
    $PATH . '/plugin.js',
  ],
  'css' => [
    //'/tabulator/tabulator-5.3.1/dist/css/tabulator.css',
    //'/tabulator/tabulator-5.3.1/dist/css/tabulator_semanticui.css',
    //'/tabulator/tabulator-5.3.1/dist/css/tabulator_midnight.css',
    //'/tabulator/tabulator-5.3.1/dist/css/tabulator_site.css?site',
    //'/tabulator/tabulator-5.3.1/dist/css/tabulator_modern.css',
    //'/tabulator/tabulator-5.3.1/dist/css/tabulator_simple.css',
    //'/tabulator/tabulator-5.3.1/dist/css/tabulator_bootstrap5.css',
    NODE . '/tabulator-tables/dist/css/tabulator.css',
    NODE . '/tabulator-tables/dist/css/tabulator_midnight.css',
    $PATH . '/fix.css',

  ],
];
