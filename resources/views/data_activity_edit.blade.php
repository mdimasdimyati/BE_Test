@extends('layout')
@section('content')
      <!-- partial -->
      <div class="main-panel">  
        <div class="content-wrapper">
          <div class="page-header">
              <p class="mb-1 text-black">Detail Data Kandidat Magang</p>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="/data_activity">Daftar kandidat </a></li>
                      <li class="breadcrumb-item active" aria-current="page">Lowongan Magang</li>
                  </ol>
              </nav>
          </div>
      
          <!-- ---------------------------------------------------------------------- -->
      
          <div class="row">
              <div class="col-12 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h4 class="card-title"> Data Diri </h4>
                          <form class="form-sample"  action="/data_activity_update/{{$candidate->id}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="#">Nama Lengkap</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{$candidate->name}}" name="name"  placeholder="Nama Kandidat"  >
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="gender">Jenis Kelamin</label><span class="text-danger">*</span>
                                        <select class="custom-select @error('gender') is-invalid @enderror" name="gender">
                                          <option selected value="<?= $candidate->gender != '' ? $candidate->gender : ''?>">
                                            <?= $candidate->gender == 'L' ? 'Laki-laki' : ($candidate->gender == 'P' ? 'Perempuan' : '--- Pilih Jenis Kelamin---');?>
                                        </option>
                                             <option value="L">Laki-laki</option>
                                              <option value="P">Perempuan</option>
                                        </select>
                                        @error('gender')
                                          <span class="text-danger">{{ $message }}</span>
                                          @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="#">Tempat Lahir</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control  @error('city_of_birth') is-invalid @enderror"  value="{{$candidate->city_of_birth}}" name="city_of_birth" placeholder="Tempat Lahir"  >
                                        @error('city_of_birth')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="#">Tanggal Lahir</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control  @error('date_of_birth') is-invalid @enderror" value="{{$candidate->date_of_birth}}" name="date_of_birth" placeholder="YYY-MM-DD">
                                        @error('date_of_birth')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
    
                                    <div class="form-group">
                                      <label for="religion_id">Agama</label><span class="text-danger">*</span>
                                      <select class="custom-select  @error('religion_id') is-invalid @enderror" name="religion_id">
                                          <option selected value="<?= $candidate->religion_id != '' ? $candidate->religion_id : ''?>">
                                            <?= $candidate->religion_id != '' ? $candidate->religion->name : '--- Pilih Agama---';?>
                                            </option>
                                          @foreach ($religion as $rgn)
                                              <option value="{{ $rgn->id }}">{{ $rgn->name }}</option>
                                          @endforeach
                                         
                                        </select>
                                        @error('religion_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control  @error('email') is-invalid @enderror" value="{{$candidate->email}}" name="email" placeholder=" Email"  >
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="#">Nomor HP</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control  @error('phone') is-invalid @enderror"  value="{{$candidate->phone}}" name="phone" placeholder="Nomor HP "  >
                                        @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
    
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="#">Nomor KTP </label><span class="text-danger">*</span>
                                      <input type="text" class="form-control  @error('identity_number') is-invalid @enderror"  value="{{$candidate->identity_number}}" name="identity_number" placeholder="Nomor KTP "  >
                                      @error('identity_number')
                                      <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                  </div>
                                  <div class="form-group">
                                      <label for="bank_id">Nama Bank </label><span class="text-danger">*</span>
                                      <select class="custom-select  @error('bank_id') is-invalid @enderror" id="bank_id" name="bank_id">
                                        <option selected value="<?= $candidate->bank_id != '' ? $candidate->bank_id : ''?>">
                                            <?= $candidate->bank_id != '' ? $candidate->bank->name : '--- Pilih Bank---';?>
                                            </option>
                                          @foreach ($bank as $bk)
                                              <option value="{{ $bk->id }}">{{ $bk->name }}</option>
                                          @endforeach
                                         
                                        </select>
                                        @error('bank_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                  </div>
                                  
                                  <div class="form-group" id="other_bank" style="display: none;">
                                      <label for="bank_name">Nama Bank Lainnya </label><span class="text-danger">*</span>
                                      <input type="text" class="form-control  @error('bank_name') is-invalid @enderror" id="bank_name" name="bank_name" value="{{$candidate->bank_name}}" placeholder="Nama Bank "  >
                                      @error('bank_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                  </div>
                                  <div class="form-group">
                                      <label for="bank_account">Nomor Bank Akun </label><span class="text-danger">*</span>
                                      <input type="text" class="form-control  @error('bank_account') is-invalid @enderror" id="bank_account" name="bank_account" value="{{$candidate->bank_account}}" placeholder="Nomor Bank Akun "  >
                                      @error('bank_account')
                                      <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                  </div>
                                  <div class="form-group">
                                      <label for="#">Alamat Domisili </label><span class="text-danger">*</span>
                                      <textarea class="form-control  @error('address') is-invalid @enderror" rows="6" name="address" placeholder="Alamat Domisili"  >{{$candidate->address}}</textarea>
                                      @error('address')
                                      <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                  </div>
                              </div>
                          </div><br>
                          <h4 class="card-title">Proses Seleksi </h4>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="#">Unit Kerja</label><span class="text-danger">*</span>
                                      <input type="text" class="form-control" name="unit" value="{{$candidate->unit}}"  >
                                  </div>
                                  <div class="form-group">
                                      <label for="#">Hasil Assesmen </label><span class="text-danger">*</span>
                                      <input type="text" class="form-control" name="assessment_score" value="{{$candidate->assessment_score}}"  >
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="#"> Rangkin</label><span class="text-danger">*</span>
                                      <input type="text" class="form-control" name="ranking" value="{{$candidate->ranking}}"  >
                                  </div>
                                  <div class="form-group">
                                    <label for="candidate_status_id">Hasil</label><span class="text-danger">*</span>
                                    <select class="custom-select  @error('candidate_status_id') is-invalid @enderror" name="candidate_status_id">
                                        <option selected value="<?= $candidate->candidate_status_id != '' ? $candidate->candidate_status_id : ''?>">
                                            <?= $candidate->candidate_status_id != '' ? $candidate->stat->status : '---Pilih Hasil--'?>
                                        </option>
                                        @foreach ($status as $st)
                                        
                                            <option value="{{ $st->id }}">{{ $st->status }}</option>
                                        @endforeach
                                       
                                      </select>
                                      @error('candidate_status_id')
                                      <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                  </div>
                              </div>
                          </div><br>
                          <div class="float-right">
                            <a href="{{ url('data_activity') }}" type="button" class="btn btn-dark mb-2  mr-2">Kembali</a>
                            <button type="submit" id="btn-submit" class="btn btn-primary mb-2 mr-2"> Simpan Perubahan</button>
                        </div>
                          </form>
                         
                      </div>
                  </div>
              </div>
          </div>
      
          <!-- ---------------------------------------------------------------------- -->
      
      </div>
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap Dash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
@endsection