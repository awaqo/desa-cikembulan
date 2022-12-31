<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Laporan Pengaduan PDF</title>
    <style>
        .text-center {
            text-align: center !important;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th {
            background-color: #cdebff;
            border: 1px solid #bbe0fa;
            text-align: left;
            padding: 8px;
            text-transform: uppercase;
        }
        td {
            border: 1px solid #bbe0fa;
            text-align: left;
            vertical-align: top;
            padding: 8px;
        }
    </style>
</head>
<body style="margin: 0; padding: 0; box-sizing: border-box">
    <div>
        <h1 class="text-center">{{ $title }}</h1>
        <div style="width: 60%; margin-left: auto; margin-right: auto; border-bottom: 3px solid #393c3e; margin-bottom: 3px;"></div>
        <div style="width: 60%; margin-left: auto; margin-right: auto; border-bottom: 3px solid #393c3e; margin-bottom: 3px;"></div>
        <p style="text-align: center">Diexport pada : {{ $date }}</p>
        <div style="margin-top: 40px;">
            @foreach ($datas as $d)
                <table style="font-size: 12px; margin-bottom: 40px">
                    {{-- Data diri --}}
                    <tr>
                        <th style="text-align: center">No. Aduan</th>
                        <th style="text-align: center">NIK</th>
                        <th style="text-align: center">Nama</th>
                        <th style="text-align: center">Alamat KTP</th>
                    </tr>

                    <tr>
                        <td style="text-align: center; width: 30px">{{ $d->id }}</td>
                        <td style="width: 90px">{{ $d->nik }}</td>
                        <td style="width: 150px">{{ $d->nama }}</td>
                        <td>{{ $d->alamat_ktp }}</td>
                    </tr>

                    <tr>
                        <th colspan="4" style="text-align: center">Judul</th>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align: center">{{ $d->judul }}</td>
                    </tr>

                    <tr>
                        <th colspan="4" style="text-align: center">Deskripsi</th>
                    </tr>
                    <tr>
                        <td colspan="4">{{ $d->deskripsi }}</td>
                    </tr>
                </table>
            @endforeach
        </div>
    </div>
    
</body>
</html>