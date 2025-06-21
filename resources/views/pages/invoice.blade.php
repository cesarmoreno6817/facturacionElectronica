@extends('layouts.app')
 
@section('content')
 
<style>
   
   .invoice-container {
        max-width: 800px;
        margin: 0 auto;
        font-family: Arial, sans-serif;
    }
 
    .text-center {
        text-align: center;
    }
 
    h2, h4 {
        margin-bottom: 10px;
    }
 
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        margin-bottom: 20px;
    }
 
    th, td {
        border: 1px solid #444;
        padding: 8px;
        text-align: center;
    }
 
    .totals {
        margin-top: 20px;
        text-align: right;
    }
 
    .totals p {
        margin: 4px 0;
    }
</style>
 
<div class="invoice-container">
    <h2 class="text-center">{{ $invoice->store_Name }}</h2>
 
    <p><strong>Factura:</strong> N00{{ $invoice->id }}</p>
    <p><strong>Cliente:</strong> {{ $invoice->client_name }}</p>
    <p><strong>Documento:</strong> {{ $invoice->client_document }}</p>
    <p><strong>Fecha:</strong> {{ $invoice->created_at->format('d/m/Y') }}</p>
 
    <h4>Productos</h4>
    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($invoice->item as $item)
                <tr>
                    <td>{{ $item->product_name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>${{ number_format($item->unit_price, 2) }}</td>
                    <td>${{ number_format($item->quantity * $item->unit_price, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
 
    <div class="totals">
        <p><strong>Subtotal:</strong> ${{ number_format($invoice->subtotal, 2) }}</p>
        @php
            $tax_percentage = ($invoice->tax_total / ($invoice->total - $invoice->tax_total)) * 100;
        @endphp
        <p><strong>Impuesto:</strong> {{ number_format($tax_percentage, 2) }}%</p>
        <p><strong>Total Impuestos:</strong> ${{ number_format($invoice->tax_total, 2) }}</p>
        <p><strong>Total:</strong> ${{ number_format($invoice->total, 2) }}</p>
    </div>
</div>
@endsection
