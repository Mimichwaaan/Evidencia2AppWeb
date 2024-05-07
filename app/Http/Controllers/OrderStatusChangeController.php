<?php
// app/Http/Controllers/OrderStatusChangeController.php

namespace App\Http\Controllers;

use App\Models\OrderStatusChange;
use Illuminate\Http\Request;

class OrderStatusChangeController extends Controller
{
    public function store(Request $request)
    {
        // Lógica para almacenar un nuevo cambio de estado de orden
    }

    public function update(Request $request, OrderStatusChange $orderStatusChange)
    {
        // Lógica para actualizar un cambio de estado de orden existente
    }

    public function destroy(OrderStatusChange $orderStatusChange)
    {
        // Lógica para eliminar un cambio de estado de orden
    }
}
