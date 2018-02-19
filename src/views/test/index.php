<?php if (isset($datas)): ?>

<div class="block">
    <h3 class="red">Вывод тестовых данных</h3>
    <?php foreach ($datas as $data ): ?>
        <p><?=$data->ip?></p>
        <p><?=$data->comment?></p>
    <?php endforeach; ?>
</div>

<?php endif; ?>
