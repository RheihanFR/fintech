@extends('layouts.main')
@section('content')
    <!-- partial -->
    <div class="main-panel bs">
        <div class="content-wrapper">
            <div class="row">
                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                    <div class="col-lg-12 d-flex flex-row">
                        <div class="col-md-6">
                            <div class="card" style="width: 28rem;">
                                <div class="card-body">
                                    <div class="seofct-icon">
                                  <H4 class="card-title">Saldo Anda:</H4>
                                </div>
                                <H2>Rp. {{ number_format($wallet->saldo, 0, ',', '.')}}, 00</H2>
                                
                                    <button type="button" class="btn btn-primary my-3 mr-6" data-toggle="modal"
                                        data-target="#topupModal"><i class="menu-icon mdi mdi-database-plus float-right"></i>
                                        Top Up</button>
                                        <button type="button" class="btn btn-primary my-3 mr-3" data-toggle="modal" data-target="#tariktunaiModal">
                                            <i class="menu-icon mdi mdi-exit-to-app float-right"></i> Tarik Tunai
                                        </button>
                                        
                                
                                </div>
                              </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Tambahkan elemen lain sesuai kebutuhan -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    {{-- modal topup --}}
    <div class="modal fade" id="topupModal" tabindex="-1" role="dialog" aria-labelledby="topupModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="topupModalLabel">Top Up</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span>&times;</span>
                    </button>
                </div>
                <form action="{{ route('topup.request') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="rekening">Rekening</label>
                            <input id="rekening" name="rekening" type="text" placeholder="" class="form-control"
                                required value="{{ $wallet->rekening }}">
                        </div>

                        <div class="form-group">
                            <label for="nominal">Mau Topup Berapa!!!</label>
                            <input type="text" id="nominal" class="form-control" placeholder="" name="nominal"
                                required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-warning" data-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Batal</span>
                        </button>
                        <button type="submit" class="btn btn-primary ms-1">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Top Up</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end Topup --}}

    {{-- modal tarik tunai --}}
    <div class="modal fade" id="tariktunaiModal" tabindex="-1" role="dialog" aria-labelledby="tariktunaiModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="tariktunaiModalLabel">Tarik Tunai</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span>&times;</span>
                    </button>
                </div>
                <form action="{{ route('withdrawal.request') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <input id="rekening" name="rekening" type="hidden" placeholder="" class="form-control"
                                required value="{{ $wallet->rekening }}">
                        </div>

                        <div class="form-group">
                            <label for="nominal">Mau Tarik Berapa!!!</label>
                            <input type="text" id="nominal" class="form-control" placeholder="" name="nominal"
                                required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-warning" data-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Batal</span>
                        </button>
                        <button type="submit" class="btn btn-primary ms-1">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Tarik Tunai</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end Tatik tunai --}}
@endsection
