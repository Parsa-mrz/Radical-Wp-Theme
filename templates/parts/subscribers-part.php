<!-- <?php
        echo ("<pre>");
        var_dump($items); ?> -->
<div class="wrap">
    <h1>لیست کاربران</h1>
    <br>
    <table class="wp-list-table widefat fixed striped table-view-list users">
        <thead>
            <tr>
                <th><?= __('Row', 'radical') ?></th>
                <th><?= __('Email', 'radical') ?></th>
                <th><?= __('Submitted Date', 'radical') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach ($items as $item) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $item['email'] ?></td>
                    <td><?= $item['created_at']  ?></td>
                </tr>
            <?php
                $i++;
            endforeach;
            ?>
        </tbody>
    </table>
</div>