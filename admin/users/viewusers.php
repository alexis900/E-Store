<?php
$db->join("roles r", "r.role_id=u.role_id", "INNER");
$users = $db->get("users u");
?>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Imágen</th>
            <th>Correo Electronico</th>
            <th>Nombre</th>
            <th>Fecha de registro</th>
            <th>Rol</th>
        </tr>
    </thead>
    <tbody>
<?php
for ($i=0; $i < $db->count; $i++) {?>
    <tr>
        <td><?=$users[$i]['user_id']?></td>
        <td><img src="<?=$users[$i]['image']?>" alt="" width="40px"/></td>
        <td><?=$users[$i]['email']?></td>
        <td><?=$users[$i]['user_name']?></td>
        <td><?=$users[$i]['reg_date']?></td>
        <td><?=$users[$i]['role_name']?></td>
    </tr>
<?php
}
?>
    </tbody>
</table>