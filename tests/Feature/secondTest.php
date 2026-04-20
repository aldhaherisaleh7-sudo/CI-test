<?php

it('should say second test 10 times', function() {
   $number = 10;
   while($number > 0){
        echo "second test";
	$number--;
   }
  expect(true)->toBe(true);
});
