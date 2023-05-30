<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BazmaController extends Controller
{
    public function responseFunction()
    {
        return response("ini adalah bentuk response");
    }
    public function responseHeader()
    {
        $bodyResponse = [
            'name' => 'firman',
            'school' => 'smk ti bazma',
        ];
        return response(json_encode($bodyResponse), 200)
            ->header('content-Type', 'Application/json')
            ->withHeaders([
                'App' => 'Firmansyah',
                'class' => 'xi',
                'web' => 'Laravel'
            ]);
    }
    public function encryptionData()
    {
        $encrypt = encrypt("ini adalah enkripsi");
        $encrypt = decrypt($encrypt);
        dd('$encrypt', '$decrypt');
    }
    public function redirectTo()
    {
        return "redirect to";
    }
    public function redirectFrom()
    {
        return redirect("redirect/to");
    }
    public function redirectToNameRoute()
    {
        return "redirect to with name route";
    }
    public function redirectFromNameRoute()
    {
        return redirect(route("redirect.to"));
    }
}
