<form action="{{ url('user/update') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="mypassword">Introduzca su contraseña actual</label>
        <input type="password" name="mypassword" class="form-control">
        <div class="text-danger">{{ $errors->first('mypassword') }}</div>
    </div>
    <div class="form-group">
        <label for="password">Introduzca su nueva contraseña:</label>
        <input type="password" name="password" class="form-control">
        <div class="text-danger">{{ $errors->first('password') }}</div>
    </div>
    <div class="form-group">
        <label for="mypassword">Confirma tu nueva contraseña:</label>
        <input type="password" name="password_confirmed" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Introduzca su nuevo nombre:</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Actualizar datos</button>
</form>