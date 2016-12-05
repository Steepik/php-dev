<table class="table">
    <thead>
    <tr>
        <th>Название</th>
        <th>Описание</th>
    </tr>
    </thead>

<?php

while ($row = mysql_fetch_assoc($data['paginate'])) :
?>
    <tbody>
    <tr>
        <td><?php echo $row['title'];?></td>
        <td><?php echo $row['description'];?></td>
    </tr>
    </tbody>
<?php endwhile; ?>
</table>
