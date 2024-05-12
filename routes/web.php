<?php

use App\Controllers\ProfileController;

return [
    "/users/profile"=>[ProfileController::class,"index"],
    "/users/profile/edit"=>[ProfileController::class,"edit"],
    "/route1"=>[ProfileController::class, "toAnotherRoute"],
    "/route2"=>[ProfileController::class,"anotherMethod"]

];