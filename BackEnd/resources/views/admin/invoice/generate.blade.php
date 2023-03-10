<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Invoice #6</title>

    <style>
        html,
        body {
            margin: 10px;
            padding: 10px;
            font-family: sans-serif;
        }
        h1,h2,h3,h4,h5,h6,p,span,label {
            font-family: sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }
        table thead th {
            height: 28px;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }
        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }
        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }
        .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }
        .order-details tbody tr td:nth-child(3) {
            width: 20%;
        }

        .text-start {
            text-align: left;
        }
        .text-end {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }
        .no-border {
            border: 1px solid #fff !important;
        }
        .bg-blue {
            background-color: #414ab1;
            color: #fff;
        }
    </style>
</head>
<body>

<table class="order-details">
    <thead>
    <tr>
        <th width="50%" colspan="2">
            <h2 class="text-start">SellPhoneS Invoice</h2>
        </th>
        <th width="50%" colspan="2" class="text-end company-data">
            <span>Id: #INV-{{$order->id}}</span> <br>
            <span>Ng??y: {{$order->Date()}}</span> <br>
            <span>?????a ch???: {{$order->abc()}}</span> <br>
        </th>
    </tr>
    <tr class="bg-blue">
        <th width="50%" colspan="2">Chi ti???t h??a ????n</th>
        <th width="50%" colspan="2">Th??ng tin kh??ch h??ng</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Id:</td>
        <td>{{$order->id}}</td>

        <td>T??n kh??ch h??ng:</td>
        <td>{{$order->address->receive_name}}</td>
    </tr>
    <tr>
        <td>Tracking Id/No.:</td>
        <td>TRACK-CRheOqspbA</td>

        <td>Email :</td>
        <td>{{$order->user->email}}</td>
    </tr>
    <tr>
        <td>Ng??y ?????t h??ng:</td>
        <td>{{$order->ordered_date}}</td>

        <td>S??? ??i???n tho???i:</td>
        <td>{{$order->address->receive_phone}}</td>
    </tr>
    <tr>
        <td>Ph????ng th???c thanh to??n:</td>
        <td>{{$order->payment_method}}</td>

        <td>?????a ch???:</td>
        <td>{{$order->abc()}}</td>
    </tr>
    <tr>
        <td>Tr???ng tha ????n h??ng:</td>
        <td>{{$order->status}}</td>

        <td>Pin code:</td>
        <td>566999</td>
    </tr>
    </tbody>
</table>

<table>
    <thead>
    <tr>
        <th class="no-border text-start heading" colspan="5">
            Danh s??ch s???n ph???m
        </th>
    </tr>
    <tr class="bg-blue">
        <th>ID</th>
        <th>S???n ph???m</th>
        <th>Gi??</th>
        <th>S??? l?????ng</th>
        <th>T???ng ti???n</th>
    </tr>
    </thead>
    <tbody>
    @foreach($order->detail as $detail)
    <tr>

        <td width="10%">16</td>
        <td>
            {{$detail->product->name}}
        </td>
        <td width="10%">{{number_format($detail->product->sell_price, 0, '', '.')}}</td>
        <td width="10%">{{$detail->quantity}}</td>
        <td width="15%" class="fw-bold">{{number_format($detail->product->sell_price*$detail->quantity, 0, '', '.')}} VND</td>
    </tr>

        @endforeach
    <tr>
        <td colspan="4" class="total-heading">T???ng ti???n - <small>Inc. all vat/tax</small> :</td>
        <td colspan="1" class="total-heading">{{number_format($order->total, 0, '', ',')}} VND</td>
    </tr>
    </tbody>
</table>

<br>
<p class="text-center">
    C???m ??n b???n ???? mua h??ng t???i SellPhoneS
</p>

</body>
</html>
