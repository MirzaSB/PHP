<?php

namespace mypackage;

use util as u;
use util\db\Querier as q;

class Local {}

//Resolve these:

//Aliased namespace
// u\Writer;

//Aliased class
// q;

//Class referenced in local context
// Local

print u\Writer::class. "\n";
print q::class. "\n";
print Local::class . "\n";

?>