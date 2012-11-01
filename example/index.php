<?php 
//Start coverage collection
require_once __DIR__.'/../src/CodeCoverage.class.php';
$codeCoverage = new CodeCoverage(__DIR__.'/log/coverage.json', __DIR__."/../");
$codeCoverage->start();

require_once __DIR__.'/app.php';

$app = new App;
$app->run();

//Write coverage results
$codeCoverage->stop();

