<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<style>
    div.error-message {
    color: red;
}
</style>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <!-- $this->Html->link(__('List User'), ['action' => 'index'], ['class' => 'side-nav-item'])  -->
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="user form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                    echo $this->Form->control('first_name',['required'=>false]);
                    echo $this->Form->control('contact',['required'=>false]);
                    echo $this->Form->control('email',['required'=>false]);
                    echo $this->Form->control('password',['required'=>false]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
        <?php $this->Breadcrumbs->add([
['title' => 'Deepu', 'url' => ['controller' => 'user', 'action' => 'index']],
 ['title' => 'abc', 'url' => ['controller' => 'user', 'action' => 'view', 7]]
]);?>
    </div>
    <?php echo $cell = $this->cell('Inbox'); ?>
</div>
