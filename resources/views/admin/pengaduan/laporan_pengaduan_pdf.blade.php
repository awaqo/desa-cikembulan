<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Pengaduan PDF</title>
    <style>
        .text-center {
            text-align: center !important;
        }
        table {
            border-collapse: collapse;
            width: 90%;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
    </style>
</head>
<body style="margin: 0; padding: 0; box-sizing: border-box">
    <div style="margin-left: 20px; margin-right: 20px;">
        <div>
            <h1 class="text-center">Laporan Pengaduan Warga</h1>
            <div style="width: 60%; margin-left: auto; margin-right: auto; border-bottom: 3px solid #393c3e; margin-bottom: 3px;"></div>
            <div style="width: 60%; margin-left: auto; margin-right: auto; border-bottom: 3px solid #393c3e; margin-bottom: 3px;"></div>
            <p style="text-align: center">Diexport pada : {{ $date }}</p>
            <div>
                {{-- data diri --}}
                <div>
                    <h3 style="width: 20%; text-align: center;)">Data diri</h3>
                    <div style="border-bottom: 2px solid #6c757d; margin-bottom: 10px; margin-top: -10px"></div>
                </div>
                @foreach ($showData as $d)
                    <table align="center">
                        {{-- Data diri --}}
                        <tr>
                            <th>No. Aduan</th>
                            <th>NIK</th>
                        </tr>
                        <tr style="border-bottom: 1px solid #ccc">
                            <td style="margin-top: 4px; padding: 5px 20px 30px 20px;">{{ $d->id }}</td>
                            <td style="margin-top: 4px; padding: 5px 20px 30px 20px;">{{ $d->nik }}</td>
                        </tr>

                        <tr>
                            <th style="padding-top: 30px;">Nama</th>
                            <th style="padding-top: 30px;">Jenis Kelamin</th>
                        </tr>
                        <tr style="border-bottom: 1px solid #ccc">
                            <td style="margin-top: 4px; padding: 5px 20px 30px 20px;">{{ $d->nama }}</td>
                            <td style="margin-top: 4px; padding: 5px 20px 30px 20px;">{{ $d->jenis_kelamin }}</td>
                        </tr>

                        <tr>
                            <th style="padding-top: 30px;">No. Handphone</th>
                            <th style="padding-top: 30px;">Email</th>
                        </tr>
                        <tr style="border-bottom: 1px solid #ccc">
                            <td style="margin-top: 4px; padding: 5px 20px 30px 20px;">{{ $d->no_hp }}</td>
                            <td style="margin-top: 4px; padding: 5px 20px 30px 20px;">{{ $d->email }}</td>
                        </tr>
                    </table>

                    {{-- alamat --}}
                    <div style="margin-top: 50px;">
                        <h3 style="width: 20%; text-align: center;)">Alamat pelapor</h3>
                        <div style="border-bottom: 2px solid #6c757d; margin-bottom: 10px; margin-top: -10px"></div>
                    </div>
                    <table align="center">
                        <tr>
                            <th>Provinsi</th>
                            <th>Kabupaten/Kota</th>
                        </tr>
                        <tr style="border-bottom: 1px solid #ccc">
                            <td style="margin-top: 4px; padding: 5px 20px 30px 20px;">{{ $d->prov }}</td>
                            <td style="margin-top: 4px; padding: 5px 20px 30px 20px;">{{ $d->kab_kota }}</td>
                        </tr>

                        <tr>
                            <th style="padding-top: 30px;">Kecamatan</th>
                            <th style="padding-top: 30px;">Desa/Kelurahan</th>
                        </tr>
                        <tr style="border-bottom: 1px solid #ccc">
                            <td style="margin-top: 4px; padding: 5px 20px 30px 20px;">{{ $d->kec }}</td>
                            <td style="margin-top: 4px; padding: 5px 20px 30px 20px;">{{ $d->desa_kelurahan }}</td>
                        </tr>

                        <tr>
                            <th colspan="2" style="padding-top: 30px;">Alamat KTP</th>
                        </tr>
                        <tr style="border-bottom: 1px solid #ccc">
                            <td colspan="2" style="margin-top: 4px; padding: 5px 20px 30px 20px;">{{ $d->alamat_ktp }}</td>
                        </tr>
                    </table>

                    {{-- aduan --}}
                    <div style="margin-top: 50px;">
                        <h3 style="width: 20%; text-align: center;)">Isi Aduan</h3>
                        <div style="border-bottom: 2px solid #6c757d; margin-bottom: 10px; margin-top: -10px"></div>
                    </div>
                    <table align="center">
                        <tr>
                            <th colspan="2" style="padding-top: 30px;">Judul</th>
                        </tr>
                        <tr style="border-bottom: 1px solid #ccc">
                            <td colspan="2" style="margin-top: 4px; padding: 5px 20px 30px 20px;">{{ $d->judul }}</td>
                        </tr>

                        <tr>
                            <th colspan="2" style="padding-top: 30px;">Deskripsi</th>
                        </tr>
                        <tr style="border-bottom: 1px solid #ccc">
                            <td colspan="2" style="margin-top: 4px; padding: 5px 20px 30px 20px;">{{ $d->deskripsi }}</td>
                        </tr>

                        <tr>
                            <th colspan="2" style="padding-top: 30px;">File Pendukung</th>
                        </tr>
                        <tr style="border-bottom: 1px solid #ccc">
                            <td colspan="2" style="margin-top: 4px; padding: 5px 20px 30px 20px;">
                                <img src="{{ public_path('storage/pengaduan/'. $d->file_pendukung) }}" style="margin-top: 5px; width: 550px; height: auto;">
                            </td>
                        </tr>
                    </table>
                @endforeach
            </div>
        </div>
    </div>

</body>
</html>