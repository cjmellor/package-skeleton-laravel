<?php

use VendorName\Skeleton\Tests\TestCase;
use Plannr\Laravel\FastRefreshDatabase\Traits\FastRefreshDatabase;

uses(TestCase::class, FastRefreshDatabase::class)->in(__DIR__);
