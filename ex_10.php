<?php
for ($i = 1; $i < $argc; $i++) {
    echo sha1($argv[$i]) . "\n";
}