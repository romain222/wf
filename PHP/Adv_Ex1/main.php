<?php
require_once __DIR__.'/getFile/getFile.php';

require_once __DIR__.'/formatFile/formatFile.php';

require_once __DIR__.'/insertFile/insertFile.php';


use function Adv_Ex1\getFile\getFile;
use function Adv_Ex1\formatFile\formatFile;
use function Adv_Ex1\insertFile\insertFile;

$fileString = getFile("https://api.apis.guru/v2/list.json");

$array = formatFile($fileString);

insertFile($array);

//insertFile(formatFile(getFile("https://api.apis.guru/v2/list.json")));
