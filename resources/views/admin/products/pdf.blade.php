<!DOCTYPE html>
<html>
<head>
    <title>Laporan Data Produk - Astro</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'DejaVu Sans', 'Arial', sans-serif;
            background: #fff;
            padding: 30px;
            color: #212529;
        }
        .header {
            text-align: center;
            border-bottom: 3px solid #0d47a1;
            padding-bottom: 15px;
            margin-bottom: 25px;
        }
        .header h1 {
            font-size: 28px;
            font-weight: 800;
            color: #0d47a1;
            margin: 0;
        }
        .header .sub {
            color: #6c757d;
            font-size: 14px;
            margin-top: 5px;
        }
        .header .badge-astro {
            display: inline-block;
            background: #ffc107;
            color: #0d47a1;
            padding: 4px 15px;
            border-radius: 20px;
            font-weight: 700;
            font-size: 12px;
            margin-top: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th {
            background: #0d47a1;
            color: #ffffff;
            padding: 12px 15px;
            text-align: left;
            font-weight: 700;
            font-size: 14px;
        }
        td {
            padding: 10px 15px;
            border-bottom: 1px solid #dee2e6;
            font-size: 13px;
            vertical-align: top;
        }
        tr:hover {
            background: #f8f9fa;
        }
        .text-right {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .footer {
            margin-top: 30px;
            padding-top: 15px;
            border-top: 1px solid #dee2e6;
            text-align: center;
            font-size: 12px;
            color: #6c757d;
        }
        .footer strong {
            color: #0d47a1;
        }
        .total-row {
            background: #f5f7fa;
            font-weight: 700;
        }
        .total-row td {
            border-top: 2px solid #0d47a1;
        }
    </style>
</head>
<body>

    <!-- HEADER -->
    <div class="header">
        <h1>Laporan Data Produk</h1>
        <div class="sub">Tanggal Cetak: {{ date('d-m-Y H:i') }}</div>
        <span class="badge-astro">Astro</span>
    </div>

    <!-- TABEL DATA -->
    <table>
        <thead>
            <tr>
                <th style="width:50px;">#</th>
                <th style="width:25%;">Nama</th>
                <th style="width:45%;">Deskripsi</th>
                <th style="width:15%;" class="text-right">Harga</th>
                <th style="width:10%;" class="text-center">Stok</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td><strong>{{ $item->name }}</strong></td>
                    <td>{{ $item->description }}</td>
                    <td class="text-right">Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                    <td class="text-center">{{ $item->stock }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center" style="padding:30px; color:#6c757d;">Belum ada data produk.</td>
                </tr>
            @endforelse
        </tbody>
        @if($products->count() > 0)
        <tfoot>
            <tr class="total-row">
                <td colspan="3" class="text-right">Total Produk :</td>
                <td colspan="2">{{ $products->count() }} item</td>
            </tr>
        </tfoot>
        @endif
    </table>

    <!-- FOOTER -->
    <div class="footer">
        <p>Dicetak dari sistem <strong>Astro</strong> &bull; {{ date('Y') }}</p>
        <p style="font-size:10px; color:#adb5bd;">Laporan ini dihasilkan secara otomatis oleh sistem.</p>
    </div>

</body>
</html>