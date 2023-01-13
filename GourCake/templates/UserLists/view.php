<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserList $userList
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User List'), ['action' => 'edit', $userList->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User List'), ['action' => 'delete', $userList->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userList->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List User Lists'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User List'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="userLists view content">
            <h3><?= h($userList->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($userList->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($userList->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact') ?></th>
                    <td><?= h($userList->contact) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($userList->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($userList->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Gender') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($userList->gender)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
