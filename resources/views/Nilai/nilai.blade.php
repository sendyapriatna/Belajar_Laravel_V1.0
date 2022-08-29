<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- CSS Assets -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>

    <title>Nilai</title>
</head>

<body>
    <div class="container">

        <div class="l-right">
            <div class="title">
                <h2 class="fw-bold mt-5">Data Nilai</h2>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <a href="/matkul/create">
                        <button class="btn btn-primary px-4 py-3">
                            + Tambah Data
                        </button>
                    </a>
                </div>
            </div>

            <div class="ttable bg-white mt-3">
                <div class="">
                    <table class="table table-bordered">
                        @csrf
                        <thead class="bg-grey color-white">
                        </thead>
                        <tbody class="color-white color-neutral-400">
                            @foreach($mahasiswa as $value)
                            <tr class="text-center table-success">
                                <th class="col-3" colspan="3">{{ $value->nama }} - {{ $value->nim }}</th>
                                <thead class="bg-grey color-white">
                                    <tr class="text-center">
                                        <th class="col-3 th1">Kode Matkul</th>
                                        <th class="col-3 th1">Nama Matkul</th>
                                        <th class="col-3 th1">NIlai</th>
                                    </tr>
                                </thead>
                                <tbody class="color-white color-neutral-400">
                                    @foreach($data as $value2)
                                    <?php if ($value->nim==$value2->nim) { ?>
                                        <tr class="text-center">
                                            <td class="col-3 td1">{{ $value2->kode_matkul}}</td>
                                            <td class="col-3 td1">{{ $value2->nama_matkul}}</td>
                                            <td class="col-3 td1">{{ $value2->nilai}}</td>
                                        </tr>
                                    <?php } ?>
                                    @endforeach
                                </tbody>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
