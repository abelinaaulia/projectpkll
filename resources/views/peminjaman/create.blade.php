<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="jenisBarang" content="">

<<<<<<< HEAD
    <title>Peminjaman</title>
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

        <!-- /input-group -->
        @include('layouts.bagian.sidebar')
        <!-- /.nav-second-level -->
        </li>
        </ul>
    </div>
    </div>
    </nav>


    <!-- /.col-lg-12 -->
    {{-- TABLE --}}
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Peminjaman</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- TABLE -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Data
                        </div>
                        <form Action="{{ route('peminjaman.store') }}" method="post">
                            @csrf
                            <div class="panel-body">
                                <label for="">Nama barang</label>
                                <select name="id_barang" class="form-control @error('id_barang') is-invalid @enderror" >
                                    @foreach($barang as $data)
                                        <option value="{{$data->id}}">{{$data->barangmasuk->nama_barang}}</option>
                                    @endforeach
                                </select>
                                @error('id_barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="panel-body">
<<<<<<< HEAD
                                <label> Nama Peminjam</label>
=======
                                <label>Peminjam</label>
>>>>>>> 6f8881011d14a6a1e0dde8f298a37e1e47aa0a5a
                                <input type="text" class="form-control" name="peminjam">
                            </div>

                            <div class="panel-body">
                                <label for="">Jenis Kelamin</label> <br>
                                <input type="radio" name="jk" value="Perempuan" > Perempuan
                                <br>
                                <input type="radio" name="jk" value="Laki-laki"> Laki-laki
                                <br>

                                 @error('jk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="panel-body">
                                <label>No Telpon</label>
                                <input type="text" class="form-control" name="no_telp">
                            </div>
                            <div class="panel-body">
                                <label>Jumlah</label>
                                <input type="number" class="form-control" name="jumlah" min="1">
<<<<<<< HEAD
                                <option value="1">*tidak bisa menggunakan text</option>
=======
                                <option value="1">Tidak bisa menggunakan text</option>
>>>>>>> 6f8881011d14a6a1e0dde8f298a37e1e47aa0a5a
                                @error('jumlah') {{ $message }} @enderror
                            </div>

                            <div class="panel-body">
                                <label>Tanggal Pinjam</label>
                                <input type="date" class="form-control" name="tgl_pinjam">

                            </div>

                            <div class="panel-body">
                                <button type="reset" class="btn btn-warning">Reset</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
    </div>
    {{-- /TABLE --}}
    <!-- /.row -->
    <!-- /.panel-footer -->
    </div>
    <!-- /.panel .chat-panel -->
    </div>
    <!-- /.col-lg-4 -->
    </div>
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
