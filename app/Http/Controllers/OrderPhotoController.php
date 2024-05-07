<?php
// app/Http/Controllers/OrderPhotoController.php

namespace App\Http\Controllers;

use App\Models\OrderPhoto;
use Illuminate\Http\Request;

class OrderPhotoController extends Controller
{
    public function store(Request $request)
    {
        // Lógica para almacenar una nueva foto de orden
    }

    public function update(Request $request, OrderPhoto $orderPhoto)
    {
        // Lógica para actualizar una foto de orden existente
    }

    public function destroy(OrderPhoto $orderPhoto)
    {
        // Lógica para eliminar una foto de orden
    }
}
