<!DOCTYPE html>
<html>
<head>
    <title>Facture</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
<h1>Facture {{ $invoice->invoice_number }}</h1>

<table>
    <tr>
        <th>Prix HT</th>
        <th>TVA</th>
        <th>Prix TTC</th>
    </tr>
    @foreach($invoice->invoiceItems as $item)
    <tr>
        <td>{{ $item->price_excluding_vat }} €</td>
        <td>{{ $item->vat }} %</td>
        <td>{{ $item->price_including_vat }} €</td>
    </tr>
    @endforeach
</table>
</body>
</html>
