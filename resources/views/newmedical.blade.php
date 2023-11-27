<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<!------ Include the above in your HEAD tag ---------->

<div class="btn-toolbar">
    <a class="btn btn-secondary" href="{{ route('newmedical') }}">Nueva Historia +</a>
    <a class="btn btn-secondary" href="{{ route('medical') }}">Volver</a>
</div>
<div class="well" style="width: 2000px;">
    <h1>Nueva Historia</h1>
    <table class="table">
        <thead>
            <tr>
                <th># Usuario</th>
                <th>Profesional</th>
                <th>Información del Paciente</th>
                <th>Hora y Fecha</th>
                <th>Estado Actual</th>
                <th>Antecedentes</th>
                <th>Evolución Final</th>
                <th>Concepto Profesional</th>
                <th>Recomendaciones</th>
                <th>Editar/Crear</th>
                <th style=" width: 50px;">
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td>
                    <a href="user.html"><i class="icon-pencil"></i></a>
                    <a href="#myModal" role="button" data-toggle="modal"><i class="icon-check"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div class="pagination">
    <ul>
        <li><a href="#">Prev</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">Next</a></li>
    </ul>
</div>
<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Delete Confirmation</h3>
    </div>
    <div class="modal-body">
        <p class="error-text">Are you sure you want to delete the user?</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        <button class="btn btn-danger" data-dismiss="modal">Delete</button>
    </div>
</div>