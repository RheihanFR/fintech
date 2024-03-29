@extends('layouts.main')
@section('content')
    <!-- main content area start -->
    {{-- <div class="main-panel"> --}}
        <div class="content-wrapper">
            {{-- <div class="row"> --}}
                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                    <div class="col-lg-12 d-flex flex-row">
                        {{-- <div class="col-md-6"> --}}
                            <div class="main-content-inner">
                                <!-- data table start -->
                                <div class="col-12 mt-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Permintaan Top Up</h4>
                                            <div class="data-tables">
                                                <table id="table2" class="table table-bordered table-hover">
                                                    <thead class="bg-light text-capitalize">
                                                        <tr>
                                                            <th>No.</th>
                                                            <th>Customer</th>
                                                            <th>Rekening</th>
                                                            <th>Nominal</th>
                                                            <th>Kode Unik</th>
                                                            <th>Status</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($requestTopups as $i => $topup)
                                                            <tr>
                                                                <td>{{ $i + 1 }}</td>
                                                                <td>{{ $topup->wallet->user->nama }}</td>
                                                                <td>{{ $topup->rekening }}</td>
                                                                <td>{{ $topup->nominal }}</td>
                                                                <td>{{ $topup->kode_unik }}</td>
                                                                <td>{{ $topup->status }}</td>
                                                                <td class="col-2">
                                                                    @if ($topup->status === 'menunggu')
                                                                        <form
                                                                            action="{{ route('konfirmasi.topup', $topup->id) }}"
                                                                            method="post" style="display: inline;">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <button type="submit"
                                                                                class="btn btn-primary btn-sm">Konfirmasi</button>
                                                                        </form>

                                                                        <form
                                                                            action="{{ route('tolak.topup', $topup->id) }}"
                                                                            method="post" style="display: inline;">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <button type="submit"
                                                                                class="btn btn-danger btn-sm">Tolak</button>
                                                                        </form>
                                                                    @elseif($topup->status === 'dikonfirmasi')
                                                                        <button type="submit"
                                                                            class="btn btn-success btn-sm col-12">{{ $topup->status }}</button>
                                                                    @else
                                                                        <button type="submit"
                                                                            class="btn btn-danger btn-sm col-12">{{ $topup->status }}</button>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- data table end -->

                                <!-- data table start -->
                                <div class="col-12 mt-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Permintaan Tarik Tunai</h4>
                                            <div class="data-tables">
                                                <table id="table2" class="table table-bordered table-hover">
                                                    <thead class="bg-light text-capitalize">
                                                        <tr>
                                                            <th>No.</th>
                                                            <th>Customer</th>
                                                            <th>Rekening</th>
                                                            <th>Nominal</th>
                                                            <th>Kode Unik</th>
                                                            <th>Status</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($requestWithdrawals as $i => $withdrawal)
                                                            <tr>
                                                                <td>{{ $i + 1 }}</td>
                                                                <td>{{ $withdrawal->wallet->user->nama }}</td>
                                                                <td>{{ $withdrawal->rekening }}</td>
                                                                <td>{{ $withdrawal->nominal }}</td>
                                                                <td>{{ $withdrawal->kode_unik }}</td>
                                                                <td>{{ $withdrawal->status }}</td>
                                                                <td class="col-2">
                                                                    @if ($withdrawal->status === 'menunggu')
                                                                        <form
                                                                            action="{{ route('konfirmasi.withdrawal', $withdrawal->id) }}"
                                                                            method="post" style="display: inline;">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <button type="submit"
                                                                                class="btn btn-warning btn-sm">Konfirmasi</button>
                                                                        </form>

                                                                        <form
                                                                            action="{{ route('tolak.withdrawal', $withdrawal->id) }}"
                                                                            method="post" style="display: inline;">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <button type="submit"
                                                                                class="btn btn-danger btn-sm">Tolak</button>
                                                                        </form>
                                                                    @elseif($withdrawal->status === 'dikonfirmasi')
                                                                        <button type="submit"
                                                                            class="btn btn-success btn-sm col-12">{{ $withdrawal->status }}</button>
                                                                    @else
                                                                        <button type="submit"
                                                                            class="btn btn-danger btn-sm col-12">{{ $withdrawal->status }}</button>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- data table end -->
                            </div>
                        {{-- </div> --}}
                    </div>
                </div>
            {{-- </div> --}}
        </div>
    {{-- </div> --}}
    </div>
    <!-- sales report area end -->
    </div>
    </div>
    <!-- main content area end -->
@endsection
