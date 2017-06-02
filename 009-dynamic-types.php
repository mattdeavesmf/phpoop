<?php

if (true) {
    echo 'true';
} else {
    echo 'false';
}

echo PHP_EOL;

if (1) {
    echo '1 is true';
} else {
    echo '1 if false';
}

echo PHP_EOL;

if (0) {
    echo '0 is true';
} else {
    echo '0 if false';
}

echo PHP_EOL;

if ('1') {
    echo 'string "1" is true';
} else {
    echo 'string "0" is true';
}

echo PHP_EOL;

if ('0') {
    echo 'string "0" is true';
} else {
    echo 'string "0" is true';
}

echo PHP_EOL;

if ('-1') {
    echo 'string "-1" is true';
} else {
    echo 'string "-1" is true';
}

echo PHP_EOL;

if (array()) {
    echo 'empty array is true';
} else {
    echo 'empty array is false';
}

echo PHP_EOL;

if (array('value1')) {
    echo 'array is true';
} else {
    echo 'array is false';
}

echo PHP_EOL;

if (empty('')) {
    echo 'empty string is empty';
} else {
    echo 'empty string is empty';
}

echo PHP_EOL;

if (1 == true) {
    echo '1 is true';
} else {
    echo '1 is false';
}

echo PHP_EOL;

if (1 === true) {
    echo '1 is strictly == true';
} else {
    echo '1 is strictly == false';
}

echo PHP_EOL;

if ('1' == 1) {
    echo '"1 is equal to 1"';
} else {
    echo '"1" is not equal to 1';
}

echo PHP_EOL;
echo 'http://php.net/manual/en/types.comparisons.php';