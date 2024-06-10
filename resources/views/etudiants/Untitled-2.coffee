//  dans le controlleur : 
 $request->validate([
            'titre'=>'required|unique:livres',
            'prix'=>'numeric|min:10',

        ]);

        //dans la vue 

        @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $e)
    <li>
        {{$e}}
    </li>
        @endforeach
    </div>
    @endif
    @error('prix')
<div class="text-danger">{{$message}}</div>
     @enderror


