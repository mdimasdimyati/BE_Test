@extends('layout')
@section('content')


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
                          <form class="form-sample">
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">Nama Lengkap</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Nama Kandidat" value="{{$candidate->name}}" disabled>
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Jenis Kelamin</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Laki-laki" value="<?=$candidate->gender == 'L' ? 'Laki-laki' : 'Perempuan';?>" disabled>
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Tempat Lahir</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Tempat Lahir" value="{{$candidate->city_of_birth}}" disabled>
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Tanggal Lahir</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Tanggal Lahir" value="{{$candidate->date_of_birth}}" disabled>
                                      </div>
      
                                      <div class="form-group">
                                          <label for="#">Agama</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Agama" value="{{$candidate->religion->name}}" disabled>
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Email</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder=" Email" value="{{$candidate->email}}" disabled>
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Nomor HP</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Nomor HP " value="{{$candidate->phone}}" disabled>
                                      </div>
      
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">Nomor KTP </label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Nomor KTP " value="{{$candidate->identity_number}}" disabled>
                                      </div>
                                      <div class="form-group">
                                          <label for="#"> File KTP</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="File KTP " value="{{$candidate->identity_file}}" disabled>
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Nama Bank </label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Nama Bank " value="<?= $candidate->bank_id == 100 ? $candidate->bank_name : $candidate->bank->name?>" disabled>
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Nomor Bank Akun </label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Nomor Bank Akun " value="{{$candidate->bank_account}}" disabled>
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Alamat Domisili </label><span class="text-danger">*</span>
                                          <textarea class="form-control" id="#" rows="6"
                                              placeholder="Alamat Domisili" disabled>{{$candidate->address}}</textarea>
                                      </div>
                                  </div>
                              </div><br>
                              <h4 class="card-title"> Data Pendidikan </h4>
                                  <div class="row ">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">Pendidikan</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Pendidikan" value="{{$candidate->education->name}}" disabled>
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Universitas</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Universitas" value="<?= $candidate->university_id == 100 ? $candidate->university_other : $candidate->university->name?>" disabled>
                                      </div>
                                      <div class="form-group">
                                          <label for="#"> Tahun Lulus</label><span class="text-danger">*</span>
                                          <div class="form-group">
                                              <div class="input-group" name="#">
                                                  <input type="text" class="form-control" id="#" placeholder="Tahun Lulus" value="<?= $candidate->graduation_year == '-' ? 'Masih Kuliah' : $candidate->graduation_year; ?>" disabled>
                                              </div>
                                          </div>
      
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">Jurusan </label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Jurusan" value="{{$candidate->major}}" disabled>
                                      </div>
                                      <div class="form-group">
                                          <label for="#"> Semester</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="Semester" value="{{$candidate->semester}}" disabled>
                                      </div>
                                  </div><br>
                                  </div>
                                  <h4 class="card-title"> Pengalaman Organisai </h4>
                                  <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">Organisasi</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="organisasi" value="{{ $candidate->organi->org_name}}" disabled>
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Tahun</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="tahun" value="{{ $candidate->organi->year}}" disabled>
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Jabatan</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" id="#" placeholder="jabatan"value="{{ $candidate->organi->position}}" disabled>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">Deskripsi Kegiatan </label><span class="text-danger">*</span>
                                          <textarea class="form-control" id="exampleTextarea1" rows="6" disabled>{{ $candidate->organi->description}}</textarea>
                                      </div>
                                  </div>
                                  </div><br>
                                  <h4 class="card-title"> Keahlian yang Dimiliki </h4>
                                  <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label for="#">Keahlian</label><span class="text-danger">*</span>
                                          <textarea class="form-control" id="exampleTextarea1" rows="10" disabled>{{$candidate->skill}}</textarea>
                                      </div>
                                  </div>
                                  </div><br>
                                  <h4 class="card-title">Lain - Lain </h4>
                                  <div class="row ">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">File CV</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" value="{{$candidate->file_cv}}" placeholder="File CV.pdf" disabled>
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Past Photo</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control" value="{{$candidate->file_photo}}" placeholder="Photo.jpg" disabled>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#"> Portofolio</label>
                                          <input type="text" class="form-control" value="{{$candidate->file_portfolio}}" placeholder="Portofolio.pdf" disabled>
                                      </div>
                                  </div>
                                  </div><br>
                                  <h4 class="card-title">Mengenal Jasamarga dari ? </h4>
                                  <div class="row">
                                  <div class="col-md-6">
                                      
                                      <div class="form-group">
                                          {{-- <input type="text" class="form-control" value="{{ $candidate->source_information_id}}" placeholder=""> --}}
                                          <input type="text" class="form-control" value="<?= $candidate->source_information_id == 6 ? $candidate->source_information_other : $candidate->infor->name; ?>" disabled>
                                        </div>
                                  </div>
                                  </div><br>
                                  <h4 class="card-title">Proses Seleksi </h4>
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="#">Unit Kerja</label><span class="text-danger">*</span>
                                              <input type="text" class="form-control" value="{{$candidate->unit}}"  disabled>
                                          </div>
                                          <div class="form-group">
                                              <label for="#">Hasil Assesmen </label><span class="text-danger">*</span>
                                              <input type="text" class="form-control" value="{{$candidate->assessment_score}}"  disabled>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="#"> Rangkin</label><span class="text-danger">*</span>
                                              <input type="text" class="form-control" vvalue="{{$candidate->ranking}}"  disabled>
                                          </div>
                                      </div>
                                  </div><br>
                          </form>
                          <div class="float-right">
                              <a href="{{ url('data_activity') }}" type="button" class="btn btn-dark mb-2  mr-2">Kembali</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      
          <!-- ---------------------------------------------------------------------- -->
      
      </div>
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021 <a
                      href="https://www.jasamarga.com/" target="_blank">© PT Jasa Marga (Persero)</a>. All
                  rights
                  reserved.</span>
              <span class="float-none float-sm-right d-block text-muted  text-center">Suported by Information
                  Technology
                  Group </span>
          </div>
      </footer>
        <!-- partial -->
      </div>

@endsection
