@extends('dashboard.layout.app')
@section('content')

    <div class="content-body" style="min-height: 1056px;">
        <div class="container-fluid">
            <!-- Row -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-titles">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item ps-0"><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Deposit</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">

                    <div class="col-xl-6 col-lg-8 offset-lg-2">
                        <div class="card profile-card card-bx m-b30">

                            <form action="{{ route('user.processDeposit') }}" method="POST">
                                @csrf

                                <div class="card-body">
                                    <h3 class="text-center"> Process Payment</h3>
                                    <hr class="mb-3">
                                    <br>
                                    @if(session()->has('success'))
                                        <div class="alert alert-success alert-dismissible fade show">
                                            {{ session()->get('success') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="box">
                                        <div class="box-header with-border">
                                            <h4 class="box-title">Deposit Info</h4>
                                        </div>
                                        <!-- /.box-header -->
                                        <table class="table table-striped" style="width:100%">
                                            <tr>
                                                <th>Amount:</th>
                                                <td>$@convert($deposit->amount)</td>
                                            </tr>
                                            <tr>
                                                <th>Payment Method:</th>
                                                <td>{{ $deposit->payment_method->name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Created Date:</th>
                                                <td>{{ date('d M, Y', strtotime($deposit->created_at)) }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <hr>
                                    <br>
                                    <div class="row">
                                        <div class="box-header with-border">
                                            <h4 class="box-title">Make Payment</h4>
                                        </div>
                                        <!-- /.box-header -->
                                        <form class="form">
                                            <div class="box-body">
                                                <p class="text-danger">Make payment to the wallet below</p>

                                                <div class="row">
                                                    <div class="col-md-12 col-12">
                                                        <div class="form-group">
                                                            <input readonly type="text" class="form-control" value="{{ $deposit->payment_method->name }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-12 mt-3">
                                                        <h4>Scan QRCode</h4>
                                                        {!! QrCode::size(150)->generate($deposit->payment_method->value); !!}
                                                    </div>
                                                    <div class="col-md-12 col-12 mt-3">
                                                        <div class="form-group">
                                                            <label for="">Copy Address</label>
                                                            <div class="input-group">

                                                                <input type="text" class="form-control " id="foo" value="{{ $deposit->payment_method->value }}">
                                                                <div class="input-group-addon">
                                                                    <a class="btn input-group-addon" data-clipboard-target="#foo">
                                                                        <i class="fa fa-clipboard" aria-hidden="true"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="col-md-12 col-12 mt-3">
                                                        <div class="form-group">
                                                            <button type="button" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#modal-center">
                                                                Confirm Deposit
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>

    <script>
        new ClipboardJS('.btn');
    </script>
@endsection
