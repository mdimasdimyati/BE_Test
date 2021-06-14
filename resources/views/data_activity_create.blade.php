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
                          @if ($errors->any())
                                <div class="alert alert-danger">
                                    {{ $errors->first() }}
                                </div>
                          @endif
                          <form class="form-sample" action="/data_activity_store" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">Nama Lengkap</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="#" name="name"  placeholder="Nama Kandidat"  >
                                          @error('name')
                                          <span class="text-danger">{{ $message }}</span>
                                          @enderror
                                      </div>
                                      <div class="form-group">
                                          <label for="gender">Jenis Kelamin</label><span class="text-danger">*</span>
                                          <select class="custom-select @error('gender') is-invalid @enderror" name="gender">
                                            <option selected value="">--- Pilih Jenis Kelamin ---</option>
                                               <option value="L">Laki-laki</option>
                                                <option value="P">Perempuan</option>
                                          </select>
                                          @error('gender')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Tempat Lahir</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control  @error('city_of_birth') is-invalid @enderror" id="city_of_birth" name="city_of_birth" placeholder="Tempat Lahir"  >
                                          @error('city_of_birth')
                                          <span class="text-danger">{{ $message }}</span>
                                          @enderror
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Tanggal Lahir</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control  @error('date_of_birth') is-invalid @enderror" id="date_of_birth" name="date_of_birth" placeholder="YYY-MM-DD">
                                          @error('date_of_birth')
                                          <span class="text-danger">{{ $message }}</span>
                                          @enderror
                                      </div>
      
                                      <div class="form-group">
                                        <label for="religion_id">Agama</label><span class="text-danger">*</span>
                                        <select class="custom-select  @error('religion_id') is-invalid @enderror" name="religion_id">
                                            <option selected value="">--- Pilih Agama ---</option>
                                            @foreach ($religion as $rgn)
                                                <option value="{{ $rgn->id }}">{{ $rgn->name }}</option>
                                            @endforeach
                                           
                                          </select>
                                          @error('religion_id')
                                          <span class="text-danger">{{ $message }}</span>
                                          @enderror
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Email</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" placeholder=" Email"  >
                                          @error('email')
                                          <span class="text-danger">{{ $message }}</span>
                                          @enderror
                                      </div>
                                      <div class="form-group">
                                          <label for="#">Nomor HP</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control  @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Nomor HP "  >
                                          @error('phone')
                                          <span class="text-danger">{{ $message }}</span>
                                          @enderror
                                      </div>
      
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="#">Nomor KTP </label><span class="text-danger">*</span>
                                        <input type="text" class="form-control  @error('identity_number') is-invalid @enderror" id="#" name="identity_number" placeholder="Nomor KTP "  >
                                        @error('identity_number')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="identity_file"> File KTP</label><span class="text-danger">*</span>
                                        <input type="file" class="form-control  @error('identity_file') is-invalid @enderror" name="identity_file" id="identity_file" placeholder="File KTP "  >
                                        @error('identity_file')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                 
                                    <div class="form-group">
                                        <label for="bank_id">Nama Bank </label><span class="text-danger">*</span>
                                        <select class="custom-select  @error('bank_id') is-invalid @enderror" id="bank_id" name="bank_id">
                                            <option selected value="">--- Pilih Bank ---</option>
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
                                        <input type="text" class="form-control  @error('bank_name') is-invalid @enderror" id="bank_name" name="bank_name" placeholder="Nama Bank "  >
                                        @error('bank_name')
                                          <span class="text-danger">{{ $message }}</span>
                                          @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="bank_account">Nomor Bank Akun </label><span class="text-danger">*</span>
                                        <input type="text" class="form-control  @error('bank_account') is-invalid @enderror" id="bank_account" name="bank_account" placeholder="Nomor Bank Akun "  >
                                        @error('bank_account')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="#">Alamat Domisili </label><span class="text-danger">*</span>
                                        <textarea class="form-control  @error('address') is-invalid @enderror" id="#" rows="6" name="address" placeholder="Alamat Domisili"  ></textarea>
                                        @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div><br>
                            <h4 class="card-title"> Data Pendidikan </h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="education_id">Pendidikan </label><span class="text-danger">*</span>
                                        <select class="custom-select  @error('education_id') is-invalid @enderror" name="education_id">
                                            <option selected value="">--- Pilih Pendidikan ---</option>
                                            @foreach ($education as $ed)
                                                <option value="{{ $ed->id }}">{{ $ed->name }}</option>
                                            @endforeach
                                        
                                        </select>
                                        @error('education_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="university_id">Universitas </label><span class="text-danger">*</span>
                                        <select class="custom-select  @error('university_id') is-invalid @enderror" id="university_id" name="university_id">
                                            <option selected value="">--- Pilih Universitas ---</option>
                                            @foreach ($university as $uv)
                                                <option value="{{ $uv->id }}">{{ $uv->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('university_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group" id="other_university" style="display: none;">
                                        <label for="university_other">Universitas Lainnya </label><span class="text-danger">*</span>
                                        <input type="text" class="form-control  @error('university_other') is-invalid @enderror" id="university_other" name="university_other" placeholder="Nama Universitas "  >
                                        @error('university_other')
                                          <span class="text-danger">{{ $message }}</span>
                                          @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="#"> Tahun Lulus</label><span class="text-danger">*</span>
                                        <div class="form-group">
                                            <div class="input-group" name="#">
                                                <input type="text" class="form-control mr-2  @error('university_id') is-invalid @enderror" id="graduation_year" name = "graduation_year" placeholder="Tahun Lulus">
                                                    <div class="form-check ">
                                                        <label class="form-check-label">
                                                            <input type="checkbox"  class="form-check-input" id="still_college"> Masih Kuliah
                                                        </label>
                                                    </div>
                                                
                                            </div>
                                            @error('graduation_year')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="#">Jurusan </label><span class="text-danger">*</span>
                                        <input type="text" class="form-control  @error('major') is-invalid @enderror" id="#" name="major" placeholder="Jurusan">
                                        @error('major')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="#"> Semester</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control  @error('semester') is-invalid @enderror" id="#" name="semester" placeholder="Semester">
                                        @error('semester')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><br>
                            </div>
                            <h4 class="card-title"> Pengalaman Organisai ========</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="#">Organisasi</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control  @error('org_name') is-invalid @enderror" id="org_name" name="org_name" placeholder="organisasi">
                                        @error('org_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="#">Tahun</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control  @error('org_year') is-invalid @enderror" id="org_year" name="org_year" placeholder="tahun">
                                        @error('org_year')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="#">Jabatan</label><span class="text-danger">*</span>
                                        <input type="text" class="form-control  @error('org_position') is-invalid @enderror" id="org_position" name="org_position" placeholder="jabatan">
                                        @error('org_position')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="#">Deskripsi Kegiatan </label><span class="text-danger">*</span>
                                        <textarea class="form-control  @error('org_description') is-invalid @enderror" id="org_description" name = "org_description" rows="6"></textarea>
                                        @error('org_description')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="org_file"> File</label>
                                        <input type="file" class="form-control" name="org_file" placeholder="">
                                    </div>
                                </div>
                            </div><br>
                            <h4 class="card-title"> Keahlian yang Dimiliki </h4>
                                <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label for="#">Keahlian</label><span class="text-danger">*</span>
                                          <textarea class="form-control @error('skill') is-invalid @enderror" name="skill" rows="10"></textarea>
                                      </div>
                                      @error('skill')
                                      <span class="text-danger">{{ $message }}</span>
                                      @enderror
                                  </div>
                                </div><br>
                                <h4 class="card-title">Lain - Lain </h4>
                                <div class="row ">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="file_cv">File CV</label><span class="text-danger">*</span>
                                        <input type="file" class="form-control  @error('file_cv') is-invalid @enderror" name="file_cv" placeholder="File CV.pdf">
                                    </div>
                                    @error('file_cv')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group">
                                        <label for="file_photo">Past Photo</label><span class="text-danger">*</span>
                                        <input type="file" class="form-control  @error('file_photo') is-invalid @enderror" name="file_photo" placeholder="Photo.jpg">
                                    </div>
                                    @error('file_photo')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="file_portfolio"> Portofolio</label>
                                        <input type="file" class="form-control  @error('file_portfolio') is-invalid @enderror" name="file_portfolio" placeholder="Portofolio.pdf">
                                    </div>
                                    @error('file_portfolio')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                </div><br>
                                <h4 class="card-title">Mengenal Jasamarga dari ? </h4>
                                <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="source_information_id" id="internet" value="1">
                                            Internet
                                            <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="source_information_id" id="kampus" value="4">
                                            Kampus
                                            <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="source_information_id" id="instagram" value="2">
                                            Instagram
                                            <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="source_information_id" id="facebook" value="5">
                                            Facebook
                                            <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="source_information_id" id="twitter" value="3">
                                            Twitter
                                            <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input type="radio" class="form-check-input lain" name="source_information_id" id="lain" value="6">
                                            Lain-lain
                                            <i class="input-helper"></i></label>
                                        </div>
                                    
                                        <input type="text" class="form-control  @error('source_information_other') is-invalid @enderror" id="information_other" name="source_information_other" placeholder="">
                                        @error('source_information_other')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                </div><br>
                                <h4 class="card-title">Media Sosial </h4>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="#">Instagram </label>
                                          <input type="text" class="form-control" name="instagram" placeholder="Account instagram">
                                      </div>
                                      <div class="form-group">
                                          <label for="#">twitter </label>
                                          <input type="text" class="form-control" name="twitter" placeholder="Account twitter">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="#">linkedin</label>
                                        <input type="text" class="form-control" name="linkedin" placeholder="Account linkedin">
                                    </div>
                                    <div class="form-group">
                                        <label for="#">facebook </label>
                                        <input type="text" class="form-control" name="facebook" placeholder="Account facebook">
                                    </div>
                                </div>
                              </div><br>
                              <div class="float-right">
                                <a href="{{ url('data_activity') }}" type="button" class="btn btn-dark mb-2  mr-2">Kembali</a>
                                <button type="submit" id="btn-submit" class="btn btn-primary mb-2 mr-2"> Simpan</button>
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
@section('page-script')
<script>
    $("#bank_id").on('change', function() {
        let bank = $("#bank_id").val();
        if (bank === '100') {
            document.getElementById('other_bank').style.display = 'block'
        }else{
            document.getElementById('other_bank').style.display = 'none'
            $("#bank_name").val("");
            
        }
    });
    $("#university_id").on('change', function() {
        let university = $("#university_id").val();
        if (university === '100') {
            document.getElementById('other_university').style.display = 'block'
        }else{
            document.getElementById('other_university').style.display = 'none'
            $("#university_other").val("");
        }
    });
    $("#still_college").on('click', function() {
        let check = document.getElementById("still_college");
    
        if (check.checked == true){
            // document.getElementById('graduation_year').setAttribute("readonly", true);
            // $("#graduation_year").setAttribute("readonly", true);
            $("#graduation_year").val("-");
        } else {
            $("#graduation_year").val("");
        }
        
    });

</script>
@stop