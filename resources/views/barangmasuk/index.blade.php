<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

<<<<<<< HEAD
    <title>Barang Masuk</title>
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

<<<<<<< HEAD

=======
>>>>>>> 6f8881011d14a6a1e0dde8f298a37e1e47aa0a5a
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
                    <h1 class="page-header">Data Barang Masuk</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
<<<<<<< HEAD
                        {{-- <div class="panel-heading">
                          Barang Masuk
                            <a href="{{ Route('create-old') }}" class="btn btn-sm btn-info float-right mr-12">Tambah Data Lama</a>
                            <a href="{{ Route('create-new') }}" class="btn btn-sm btn-primary float-right">Tambah Data Baru</a>

                        </div> --}}
                        <div class="panel-heading">
                            Data Barang Masuk
                            <a href="{{ route('barangmasuk.create') }}"
                                class="btn btn-sm btn-primary float-right" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Tambah Data</a>

=======
                        <div class="panel-heading">
                          Barang Masuk
                            <a href="{{ route('barangmasuk.create') }}" class="btn btn-sm btn-primary float-right">Tambah Data</a>
>>>>>>> 6f8881011d14a6a1e0dde8f298a37e1e47aa0a5a
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>

                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Jumlah</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no=1; @endphp
                                        @foreach ($barangmasuk as $data)
                                            <tr>

                                                <td>{{ $no++ }}</td>
                                                <td>{{ $data->nama_barang }}</td>
                                                <td>{{ $data->jumlah }}</td>
                                                <td>{{ $data->tgl_masuk }}</td>
                                                <td>
<<<<<<< HEAD
                                                    <form action="{{ route('barangmasuk.destroy', $data->id) }}"
                                                        method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <a href="{{ route('barangmasuk.edit', $data->id) }}"
                                                            class="btn btn-info">Edit</a>
                                                        {{-- <a href="{{ route('barangmasuk.show', $data->id) }}"
                                                            class="btn btn-info">Show</a> --}}
                                                        <button type="submit" class="btn btn-info"
                                                            onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                                                </td>
                                            </tr>
                                        @endforeach
=======
                                                    <form action="{{route('barangmasuk.destroy', $data->id)}}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                    <a href="{{route('barangmasuk.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                                    <a href="{{route('barangmasuk.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                                                </td>
                                            </tr>
                                        @endforeach

>>>>>>> 6f8881011d14a6a1e0dde8f298a37e1e47aa0a5a
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
<<<<<<< HEAD
    @include('sweetalert::alert')

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
    @section('js')
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $(".delete-confirm").click(function(event) {
                var form = $(this).closest("form");
                var name = $(this).data("name");
                event.preventDefault();
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!",
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        </script>
    @endsection
=======
    <script src="{{ asset('backend/js/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>

>>>>>>> 6f8881011d14a6a1e0dde8f298a37e1e47aa0a5a
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
