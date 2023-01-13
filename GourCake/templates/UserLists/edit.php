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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userList->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userList->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List User Lists'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="userLists form content">
            <?= $this->Form->create($userList) ?>
            <fieldset>
                <legend><?= __('Edit User List') ?></legend>
                <?php
                    echo $this->Form->control('first_name');
                    echo $this->Form->control('last_name');
                    echo $this->Form->control('gender');
                    echo $this->Form->control('contact');
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
