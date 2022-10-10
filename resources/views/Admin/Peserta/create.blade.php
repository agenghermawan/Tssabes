@extends('Admin.Layout.main')

@section('title')
    Tambahkan Prestasi
@endsection
@section('content')
    <div class="row">
        <div class="col-12 col-md-6 rounded shadow">
            <div style="font-family: Nunito" class="p-3">
                <form action="{{route('statistik.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                        <select class="form-control" name="user_id">
                            @foreach($data['user'] as $item)
                                <option value="{{$item->id}}">{{$item->namaLengkap}}</option>
                            @endforeach
                        </select>
                        @error('user_id')
                        <p class="text text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="strength" class="form-label">Strength </label>
                        <input type="range" class="form-control" name="strength" min="0" max="100" value="0" oninput="this.form.strengthInput.value=this.value" />
                        <input type="number" class="form-control" disabled min="0" name="strengthInput" max="20" value="0" oninput="this.form.strength.value=this.value" />
                        @error('strength')
                        <p class="text text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="agility" class="form-label">Agility </label>
                        <input type="range" class="form-control" name="agility" min="0" max="100" value="0" oninput="this.form.inputAgility.value=this.value" />
                        <input type="number" class="form-control" disabled min="0" name="inputAgility" max="20" value="0" oninput="this.form.agility.value=this.value" />
                        @error('agility')
                        <p class="text text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Power</label>
                        <input type="range" class="form-control" name="power" min="0" max="100" value="0" oninput="this.form.inputpower.value=this.value" />
                        <input type="number" class="form-control" disabled min="0" name="inputpower" max="20" value="0" oninput="this.form.power.value=this.value" />
                        @error('power')
                        <p class="text text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary"> Submit data Statistic</button>
                </form>
            </div>
        </div>
        <div class="col-12 col-md-6" style="background-color:#f2f7ff">
            <img src="{{asset('image/statistik.jpg')}}" width="80%" class="d-flex mx-auto shadow"
                 style="border-radius: 40px 80px" height="400px" alt="">
        </div>
    </div>
@endsection

@section('opsionalJS')

@endsection

@section('optionalCSS')
@endsection
