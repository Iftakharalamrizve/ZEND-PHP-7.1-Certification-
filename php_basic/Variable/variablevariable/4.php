<?php
function test() {
    $_POST['asdf'] = 'something';
    // NULL -- not what initially expected
    // $string = '_POST';
    // var_dump(${$string});
    // var_dump($_POST['asdf']);

    // Works as expected
    // var_dump(${'_POST'});

    // // Works as expected
    // Works as expected
    $string = '_POST';
    global ${$string};
    var_dump(${$string});

}

test();
// $p = '_POST';
// print_r(${$p}['asdf']);