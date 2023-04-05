<?php

test('no debugging methods are being used')
    ->expect(['dd', 'ddd', 'dump'])
    ->each
    ->not
    ->toBeUsed();
