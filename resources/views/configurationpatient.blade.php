<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/styles.css">
<!------ Include the above in your HEAD tag ---------->

<div class="sidenav">
    <div class="login-main-text">
        <h2>Configuration<br> Profile</h2>
        <p>Changes</p>
    </div>
</div>
<div class="main">
    <div class="col-md-6 col-sm-12">
        <div class="login-form">
            <form action="/register" method="POST">
                @csrf
                <div class="form-group">
                    <label for="id_number">Número de Identificación</label>
                    <input id="id_number" type="text" class="form-control" placeholder="Número de Identificación" name="id_number" required>
                </div>
                <div class="form-group">
                    <label for="name">Nombres</label>
                    <input id="name" type="text" class="form-control" placeholder="Nombres" name="name" required>
                </div>
                <div for="username" class="form-group">
                    <label>Apellidos</label>
                    <input id="username" type="text" class="form-control" placeholder="Apellidos" name="username" required>
                </div>
                <div for="email" class="form-group">
                    <label>Correo Electrónico</label>
                    <input id="email" type="email" class="form-control" placeholder="Correo Electrónico" name="email">
                </div>
                <div for="phone_number" class="form-group">
                    <label>Número de Celular</label>
                    <input id="phone_number" type="text" class="form-control" placeholder="Número de Celular" name="phone_number">
                </div>
                <div for="location" class="form-group">
                    <label>Ubicación</label>
                    <input id="location" type="text" class="form-control" placeholder="Ubicación" name="location">
                </div>
                <div for="password" class="form-group">
                    <label>Nueva Contraseña</label>
                    <input id="password" type="password" class="form-control" placeholder="Contraseña" name="password" required>
                </div>
                <a href="{{ route('home') }}" class="btn btn-black">Guardar Cambios</a>
                <a href="{{ route('home') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</div>