<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\support\Facades\config;


class matapelajaranTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $x1 = config("mata_pelajaran.matapelajaran.matapelajaran_x.x1");
        // $xx1 = config("mata_pelajaran.matapelajaran.matapelajaran_x.x3.xx1");
        //facades
        //import

        $x1config = config::get("mata_pelajaran.matapelajaran.matapelajaran_x.x1");
        $xx1 = config("mata_pelajaran.matapelajaran.matapelajaran_x.x3.xx1");
       
        self::assertEquals($x1, "kelas x1");
        self::assertEquals($xx1, "kelas xx1");
        self::assertEquals($x1config, "$x1");

    }
}
