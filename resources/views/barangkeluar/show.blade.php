<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Barang Keluar</title>

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
                    <h1 class="page-header">Show Data Barang Keluar</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Barang Keluar
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <form action="{{route('barangkeluar.update',$barangkeluar->id)}}" method="post">
                                    @csrf
                                    @method('put')
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
                                                <label for="">Jumlah</label>
                                                <input type="number" name="jumlah" value="{{$barangkeluar->jumlah}}" class="form-control @error('jumlah') is-invalid @enderror">
                                                @error('jumlah')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="panel-body">
                                                <label for="">Tanggal Keluar</label>
                                                <input type="date" name="tgl_keluar" value="{{$barangkeluar->tgl_keluar}}" class="form-control @error('tgl_keluar') is-invalid @enderror">
                                                @error('tgl_keluar')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="panel-body">
                                                <a href="{{ route('barangkeluar.index') }}"
                                                    class="btn btn-block btn-primary">Kembali</a>
                                            </div>
                            </form>
                                    </thead>

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