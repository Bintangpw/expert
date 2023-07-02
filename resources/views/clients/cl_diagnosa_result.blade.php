@extends('clients.cl_main')
@section('title', 'Form Diagnosa')

@section('cl_content')

    <div class="container fs-6">
        <div class="row mx-auto my-4" style="width: 100%">
            <ol class="screen-progress-bar clearfix step-3-of-3">
                <li class="step-1"><span>Informasi<br />Tes</span></li>
                <li class="step-2"><span>Pertanyaan<br />Tes</span></li>
                <li class="step-3"><span>Hasil<br />Anda</span></li>
            </ol>
            <div class="col-lg-10 mx-auto" style="width: 100%">
            <table class="table text-white rounded-4" style="width: 100%; background-color:#4C0BCE">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Diagnosa ID</th>
                    <th scope="col">Tingkat gangguan</th>
                    <th scope="col">Persentase</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td scope="row">1</td>
                    <td>{{ $diagnosa->diagnosa_id }}</td>
                    <td> {{ $diagnosa_dipilih["kode_gangguan"]->kode_gangguan }} | {{ $diagnosa_dipilih["kode_gangguan"]->gangguan }}</td>
                    {{-- <td>{{ ($diagnosa_dipilih["value"] * 100) }} %</td> --}}
                    <td>{{ (round(($hasil["value"] * 100), 2)) }} %</td>
                    
                  </tr>
                </tbody>
            </table>
        </div>

        {{-- section 2 --}}
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <div class="d-flex justify-content-center text-white" style="width: 100%; gap: 50px">
                    {{-- Pakar --}}
                    <div class="table-container">
                        <table class="table-dark table-hover mt-lg-5 p-3 mx-3 rounded-4" style="width: 100%; background-color:#4C0BCE">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="3" class="text-center text-uppercase">Pakar</th>
                                </tr>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Gejala</th>
                                    <th scope="col">Nilai (MB - MD)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pakar as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            {{ $item->kode_gejala }} | {{ $item->kode_gangguan }}
                                        </td>
                                        <td>{{ $item->mb - $item->md }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{-- User --}}
                    <div class="table-container">
                        <table class="table-dark table-hover mt-lg-5 p-3 mx-3 rounded-4" style="width: 100%; background-color:#4C0BCE">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="2" class="text-center text-uppercase">User</th>
                                </tr>
                                <tr>
                                    <th scope="col">Gejala</th>
                                    <th scope="col">Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($gejala_by_user as $key)
                                <tr>
                                    <td>{{ $key[0] }}</td>
                                    <td>{{ $key[1] }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{-- Tabel Cf Gabungan --}}
                    {{-- CF Gabungan --}}
                    <div class="table-container">
                        <table class="table-dark table-hover mt-lg-5 p-3 mx-3 rounded-4" style="width: 100%; background-color:#4C0BCE">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center text-uppercase">Hasil</th>
                                </tr>
                                <tr>
                                    <th scope="col">Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cf_kombinasi["cf"] as $key)
                                <tr>
                                    <td>{{ $key }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        {{-- section 3 --}}
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card my-4">
                    <div class="card-header">
                      Hasil
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">
                        {{ $diagnosa_dipilih["kode_gangguan"]->kode_gangguan }} | {{ $diagnosa_dipilih["kode_gangguan"]->gangguan }}
                        </h5>
                      <p class="card-text">Jadi dapat disimpulkan bahwa pasien didiagnosis mengalami gangguan makan {{ $diagnosa_dipilih["kode_gangguan"]->gangguan }} dengan tingkat kepastian yaitu <span class="fw-semibold fs-4">{{ round(($hasil["value"] * 100), 2) }}</span> %</p>
                      {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    </div>
                  </div>
            </div>
        </div>
        {{-- @include('components.cl_article') --}}
            <div >
                <a href="/" class="btn btn-primary flex w-100 radius-4" style="background-color:#4C0BCE"> KEMBALI</a>
            </div>
       </div>
    </div>
@endsection
