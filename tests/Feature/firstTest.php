<?php

it('runs hellow word', function() {
   $number =  10;
   while($number > 0){
    echo "hello world";
    $number--;
   }
   expect(true)->toBe(true);
});
