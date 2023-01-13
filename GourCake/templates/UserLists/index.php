<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\UserList> $userLists
 */
?>
<div class="userLists index content">
    <?= $this->Html->link(__('New User List'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('User Lists') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('contact') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($userLists as $userList): ?>
                <tr>
                    <td><?= $this->Number->format($userList->id) ?></td>
                    <td><?= h($userList->first_name) ?></td>
                    <td><?= h($userList->last_name) ?></td>
                    <td><?= h($userList->contact) ?></td>
                    <td><?= h($userList->email) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $userList->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userList->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userList->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userList->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
