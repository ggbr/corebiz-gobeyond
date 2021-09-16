<?php

namespace App\Models;

use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    use HasFactory;

    protected $table = "ads";


    protected $fillable = [
        "ip"
    ];

    public static function newAccess(Request $request){

        Ads::create([
            'ip' => $request->getHttpHost()
        ]);
    }

}
