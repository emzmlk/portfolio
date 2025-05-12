routes/web.php

use Illuminate/Support/Fracecades/route;
 Route: : get ('/',function(){
    return view ('welcome');
 });


controllers/parkingcontrollers.php 

namespace App\Http\Controllers ;
use Illuminate\Http\request ; 
class parking controller extends controller 
{
    public functon index ()
    {
        return view ('parking.index');

    }
    public function show ($id)
    {
        return "detail du parking pour le vehicule ID :" .$id ;
    }
}




==========
lectrure des routes et controleurs 


use App\https\controllers\parkingcontroller;

route ::('/',[parkingcontroller::class,'index']);
route ::(\\parkingz{id},[parkingcontroller::class,'show']);


=============== creation des vues ===========
<!DOCTYPE HTML >
<html lang="fr">
<head>
        <meta charset="UFT-8">
        <meta name ="viewport" contenr ="width, initial-scale=1.0">
        <title > gestion de parking </title>
</head>
<body>
    <h1> welcom </h1>
    <a href="/parking/1">voir le vehicule 1 </a>
</body>
</html>

namespaceApp\models; 
use Illuminate\database\eloquent\Dactories\Hasfactory;
use illuminate\database\eloquent\model ; 
class vehicul extends models 
