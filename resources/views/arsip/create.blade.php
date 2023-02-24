@extends('layouts.template')
@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Arsip
                        <a href="{{ route('arsip.index') }}" class="btn btn-sm btn-outline-primary" style="float: right">
                            Back
                        </a>
                    </div>
                    <div class="col-12 grid-margin">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">Create Data Arsip</h4>
                            <form action="{{ route('arsip.store') }}" method="post">
                                @csrf
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">ARSIP ID</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="arsipid" class="form-control" />
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">NO ARSIP</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="no_arsip" class="form-control" />
                                    </div>
                                    @if($errors->has('no_arsip'))
                                      <p style="font-style: bold; color: red;">{{ $errors->first('no_arsip') }}</p>
                                    @endif
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">KLASIFIKASI</label>
                                    <div class="col-sm-9">
                                      <select class="form-control" name="klasifikasi">
                                            <option value="-">-</option>
                                            <option value="DL.00">DL.00</option>
                                            <option value="DL.02">DL.02</option>
                                            <option value="HK.00">HK.00</option>
                                            <option value="HK.01">HK.01</option>
                                            <option value="HK.04">HK.04</option>
                                            <option value="HK.05">HK.05</option>
                                            <option value="HM.00">HM.00</option>
                                            <option value="HM.02">HM.02</option>
                                            <option value="HM.04">HM.04</option>
                                            <option value="KP.00">KP.00</option>
                                            <option value="KP.03">KP.03</option>
                                            <option value="KP.04">KP.04</option>
                                            <option value="KP.06">KP.06</option>
                                            <option value="KP.09">KP.09</option>
                                            <option value="KP.11">KP.11</option>
                                            <option value="KU.00">KU.00</option>
                                            <option value="KU.02">KU.02</option>
                                            <option value="KU.03">KU.03</option>
                                            <option value="KU.04">KU.04</option>
                                            <option value="KU.05">KU.05</option>
                                            <option value="KU.06">KU.06</option>
                                            <option value="KU.08">KU.08</option>
                                            <option value="KU.09">KU.09</option>
                                            <option value="KU.10">KU.10</option>
                                            <option value="KU.11">KU.11</option>
                                            <option value="KU.12">KU.12</option>
                                            <option value="KU.13">KU.13</option>
                                            <option value="KU.14">KU.14</option>
                                            <option value="LL.00">LL.00</option>
                                            <option value="OT.01">OT.01</option>
                                            <option value="OT.03">OT.03</option>
                                            <option value="PL.00">PL.00</option>
                                            <option value="PM.00">PM.00</option>
                                            <option value="PM.02">PM.02</option>
                                            <option value="PM.03">PM.03</option>
                                            <option value="PP.00">PP.00</option>
                                            <option value="PP.01">PP.01</option>
                                            <option value="PP.02">PP.02</option>
                                            <option value="PT.00">PT.00</option>
                                            <option value="PT.02">PT.02</option>
                                            <option value="PT.03">PT.03</option>
                                            <option value="TU.00">TU.00</option>
                                            <option value="TU.03">TU.03</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">BENTUK ARSIP</label>
                                    <div class="col-sm-9">
                                      <select class="form-control" name="bentuk_arsip">
                                        <option value="-">-</option>
                                        <option value="Foto">Foto</option>
                                        <option value="Gambar">Gambar</option>
                                        <option value="Koresponden">Koresponden</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">URAIAN</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="uraian" style="height: 100px"></textarea>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">KODE UNIT</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="kode_unit" class="form-control" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">JENIS ARSIP</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="jenis_arsip" class="form-control" />
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">RUAS</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="ruas" class="form-control" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">UNIT P</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="unit_p" class="form-control" />
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">MASUK/KELUAR</label>
                                    <div class="col-sm-9">
                                      <select class="form-control" name="m_k">
                                        <option value="Masuk">Arsip Masuk</option>
                                        <option value="Keluar">Arsip Keluar</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">TAHUN</label>
                                    <div class="col-sm-9">
                                      <input type="date" name="tahun" class="form-control" />
                                    </div>
                                    @if($errors->has('tahun'))
                                      <p style="font-style: bold; color: red;">{{ $errors->first('tahun') }}</p>
                                    @endif
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">JUMLAH</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="jumlah" class="form-control" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">SAMPAI DENGAN</label>
                                    <div class="col-sm-9">
                                      <input type="date" name="s_d" class="form-control" />
                                    </div>
                                    @if($errors->has('s_d'))
                                      <p style="font-style: bold; color: red;">{{ $errors->first('s_d') }}</p>
                                    @endif
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">NO BOX</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="no_box" class="form-control" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">PERKEMBANGAN</label>
                                    <div class="col-sm-9">
                                      <select class="form-control" name="perkembangan">
                                        <option value="-">-</option>
                                        <option value="Asli">Asli</option>
                                        <option value="Copy">Copy</option>
                                        <option value="Tembusan">Tembusan</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">LOKASI</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="lokasi" class="form-control" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">RETENSI</label>
                                    <div class="col-sm-9">
                                      <input type="date" name="retensi" class="form-control" />
                                    </div>
                                    @if($errors->has('retensi'))
                                      <p style="font-style: bold; color: red;">{{ $errors->first('retensi') }}</p>
                                    @endif
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">GUDANG</label>
                                    <div class="col-sm-9">
                                      <input type="date" name="gudang" class="form-control" />
                                    </div>
                                    @if($errors->has('gudang'))
                                      <p style="font-style: bold; color: red;">{{ $errors->first('gudang') }}</p>
                                    @endif
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">KETERANGAN</label>
                                    <div class="col-sm-9">
                                      <select class="form-control" name="keterangan">
                                        <option value="-">-</option>
                                        <option value="Simpan">Simpan</option>
                                        <option value="Permanen">Permanen</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">KELOMPOK</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="kelompok" class="form-control" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">PROYEK</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="proyek" class="form-control" />
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">INDEKS</label>
                                    <div class="col-sm-9">
                                      <input type="text" name="indeks" class="form-control" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div style="float: right">
                                <button type="submit" class="btn btn-sm btn-outline-success">Submit</button>
                                <button type="reset" class="btn btn-sm btn-outline-secondary">Reset</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection