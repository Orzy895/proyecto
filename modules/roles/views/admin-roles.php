<?php
include_once "../../../template/head_template.php"
?>

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../controllers/process_admin_roles.js"></script>
</head>

<h2 class="text-center text-2xl font-bold mb-4">Panel de Administración de Usuario</h2>

<div>
    <label for="userList"><strong>Seleccionar Usuario:</strong></label>
    <select id="userList" name="userList">
        <option value="">Seleccione un usuario</option>
    </select>
</div>

<form id="updateProfileForm">
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre" readonly>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" readonly>

    <label for="cedula">Cédula</label>
    <input type="text" id="cedula" name="cedula" readonly>

    <label for="role">Role</label>
    <select id="role" name="role" required></select>

    <button type="submit" class="mt-4">Actualizar Usuario</button>
</form>
<p id="message"></p>

<div class="flex justify-center">
    <button class="btn" id="deleteUserButton">Eliminar Usuario</button>

</div>
<?php
include_once "../../../template/foot_template.php"
?>