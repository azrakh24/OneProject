<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tutorial Laravel #21 : CRUD Eloquent Laravel - www.malasngoding.com</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Pegawai - <strong>TAMBAH DATA</strong> - <a href="https://www.malasngoding.com/category/laravel" target="_blank">www.malasngoding.com</a>
                </div>
                <div class="card-body">
                    <a href="/users" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/users/store">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nm_user" class="form-control" placeholder="Nama pegawai ..">
 
                            @if($errors->has('nm_user'))
                                <div class="text-danger">
                                    {{ $errors->first('nm_user')}}
                                </div>
                            @endif
 
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="no_hp_user" class="form-control" placeholder="Nama pegawai ..">
 
                            @if($errors->has('no_hp_user'))
                                <div class="text-danger">
                                    {{ $errors->first('no_hp_user')}}
                                </div>
                            @endif
 
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="password" class="form-control" placeholder="Nama pegawai ..">
 
                            @if($errors->has('password'))
                                <div class="text-danger">
                                    {{ $errors->first('password')}}
                                </div>
                            @endif
 
                        </div>
 

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="on_off" class="form-control" placeholder="Alamat pegawai .."></textarea>
 
                             @if($errors->has('on_off'))
                                <div class="text-danger">
                                    {{ $errors->first('on_off')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="username" class="form-control" placeholder="Alamat pegawai .."></textarea>
 
                             @if($errors->has('username'))
                                <div class="text-danger">
                                    {{ $errors->first('username')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>