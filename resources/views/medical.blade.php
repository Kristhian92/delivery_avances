<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<!------ Include the above in your HEAD tag ---------->

<div class="btn-toolbar">
    <a class="btn btn-secondary" href="{{ route('newmedical') }}">Nueva Historia +</a>
    <a class="btn btn-secondary" href="{{ route('home') }}">Volver</a>
</div>
<div class="well">
    <h1>Historias Realizadas</h1>
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
                <th style="width: 50px;"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Paciente de 26 años de edad, el cual está ingresando a Medicina Intern</td>
                <td>08/05/2023 03:05:15 PM</td>
                <td>Hospitalizado</td>
                <td>Alergias, problemas del corazón</td>
                <td>Actualmente cursa con 138 días de hopitalización con evolución tórpida.</td>
                <td>Consciente, orientado en tiempo persona y espacio.</td>
                <td>Cita con Medicina Interna</td>
                <!-- <td>
                    <a href="user.html"><i class="icon-pencil"></i></a>
                    <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                </td> -->
            </tr>
            <tr>
                <td>2</td>
                <td>Ashley</td>
                <td>Paciente de 26 años de edad, el cual está ingresando a Medicina Intern</td>
                <td>08/05/2023 03:05:15 PM</td>
                <td>Hospitalizado</td>
                <td>Alergias, problemas del corazón</td>
                <td>Actualmente cursa con 138 días de hopitalización con evolución tórpida.</td>
                <td>Consciente, orientado en tiempo persona y espacio.</td>
                <td>Cita con Medicina Interna</td>


                <!-- <td>
                    <a href="user.html"><i class="icon-pencil"></i></a>
                    <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                </td> -->
            </tr>
            <tr>
                <td>3</td>
                <td>Audrey</td>
                <td>Paciente de 26 años de edad, el cual está ingresando a Medicina Intern</td>
                <td>08/05/2023 03:05:15 PM</td>
                <td>Hospitalizado</td>
                <td>Alergias, problemas del corazón</td>
                <td>Actualmente cursa con 138 días de hopitalización con evolución tórpida.</td>
                <td>Consciente, orientado en tiempo persona y espacio.</td>
                <td>Cita con Medicina Interna</td>


                <!-- <td>
                    <a href="user.html"><i class="icon-pencil"></i></a>
                    <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                </td> -->
            </tr>
            <tr>
                <td>4</td>
                <td>John</td>
                <td>Paciente de 26 años de edad, el cual está ingresando a Medicina Intern</td>
                <td>08/05/2023 03:05:15 PM</td>
                <td>Hospitalizado</td>
                <td>Alergias, problemas del corazón</td>
                <td>Actualmente cursa con 138 días de hopitalización con evolución tórpida.</td>
                <td>Consciente, orientado en tiempo persona y espacio.</td>
                <td>Cita con Medicina Interna</td>


                <!-- <td>
                    <a href="user.html"><i class="icon-pencil"></i></a>
                    <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                </td> -->
            </tr>
            <tr>
                <td>5</td>
                <td>Aaron</td>
                <td>Paciente de 26 años de edad, el cual está ingresando a Medicina Intern</td>
                <td>08/05/2023 03:05:15 PM</td>
                <td>Hospitalizado</td>
                <td>Alergias, problemas del corazón</td>
                <td>Actualmente cursa con 138 días de hopitalización con evolución tórpida.</td>
                <td>Consciente, orientado en tiempo persona y espacio.</td>
                <td>Cita con Medicina Interna</td>
                <!-- <td>
                    <a href="user.html"><i class="icon-pencil"></i></a>
                    <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                </td> -->
            </tr>
            <tr>
                <td>6</td>
                <td>Chris</td>
                <td>Paciente de 26 años de edad, el cual está ingresando a Medicina Intern</td>
                <td>08/05/2023 03:05:15 PM</td>
                <td>Hospitalizado</td>
                <td>Alergias, problemas del corazón</td>
                <td>Actualmente cursa con 138 días de hopitalización con evolución tórpida.</td>
                <td>Consciente, orientado en tiempo persona y espacio.</td>
                <td>Cita con Medicina Interna</td>


                <!-- <td>
                    <a href="user.html"><i class="icon-pencil"></i></a>
                    <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                </td> -->
            </tr>
        </tbody>
    </table>
</div>
<div class="pagination">
    <ul>
        <li><a href="#">Prev</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
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