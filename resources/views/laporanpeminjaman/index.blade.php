<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

<<<<<<< HEAD
    <title>Laporan Peminjaman</title>
=======
    <title>Startmin - Bootstrap Admin Theme</title>
>>>>>>> 6f8881011d14a6a1e0dde8f298a37e1e47aa0a5a

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('backend/css/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{ asset('backend/css/timeline.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('backend/css/startmin.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('backend/css/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('backend/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        @include('layouts.bagian.navbar')
        <!-- /.navbar-top-links -->
        @include('layouts.bagian.sidebar')

        <!-- /.nav-second-level -->
        </li>
        </ul>
    </div>
    </div>
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Laporan Peminjaman</h1>

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div style="display: flex; justify-content: space-between;">

                                <div class="">
<<<<<<< HEAD
                                    Laporan Peminjaman

                                </div>
                                <div class="">
                                    <form action="{{ route('laporanpeminjaman.index') }}" method="post"
                                        style="display: flex;">
=======
                                Laporan Peminjaman

                                </div>
                                <div class="">
                                    <form action="{{ route('laporanpeminjaman.index') }}" method="post"  style="display: flex;">
>>>>>>> 6f8881011d14a6a1e0dde8f298a37e1e47aa0a5a
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Pilih Data</button>

                                        <select name="status" id="" class="form-control">
                                            <option value="0">Belum Dikembalikan</option>
                                            <option value="1">Sudah Dikembalikan</option>
                                        </select>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>

                                        <tr>
                                            <th>No</th>
                                            <th>Nama Peminjam</th>
                                            <th>Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no=1; @endphp
                                        @foreach ($laporanpeminjaman as $data)
                                            <tr>

                                                <th>{{ $no++ }}</th>
                                                <td>{{ $data->peminjam }}</td>
<<<<<<< HEAD
                                                <td>{{ $data->status ? 'Sudah Dikembalikan' : 'Belum Dikembalikan' }}
                                                </td>
=======
                                                <td>{{ $data->status ? 'Sudah Dikembalikan' : 'Belum Dikembalikan' }}</td>
>>>>>>> 6f8881011d14a6a1e0dde8f298a37e1e47aa0a5a

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>


                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <!-- /.row -->
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('backend/js/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('backend/js/metisMenu.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('backend/js/raphael.min.js') }}"></script>
    <script src="{{ asset('backend/js/morris.min.js') }}"></script>
    <script src="{{ asset('backend/js/morris-data.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('backend/js/startmin.js') }}"></script>

</body>

</html>
