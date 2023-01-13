<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserList $userList
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List User Lists'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="userLists form content">
            <?php //$this->Form->create($userList) ?>
            <fieldset>
                <legend><?php// __('Add User List') ?></legend>
                <?php
                    // echo $this->Form->control('first_name');
                    // echo $this->Form->control('last_name');
                    // echo $this->Form->control('gender');
                    // echo $this->Form->control('contact');
                    // echo $this->Form->control('email');
                    // echo $this->Form->control('password');
                ?>
            </fieldset>
            <?php //$this->Form->button(__('Submit')) ?>
            <?php //$this->Form->end() ?>
        </div>
    </div>
</div> -->
<section class="wrapper mt-5">
        <div class="container mt-5">
            <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 text-center">
                <!-- form create  -->
                <?= $this->Form->create($userList) ?>
                   
                    <div class="row">
                        <!-- first colum  -->
                        <div class=col-6>
                            <div class="form-floating mb-3">
                            <?php echo $this->Form->control('first_name');?>
 
                            </div>
                            <div class="form-floating mb-3">
                            <?php echo $this->Form->control('last_name');?>
                            </div>
                            <div class="form-floating mb-3">
                            <?php echo $this->Form->control('contact');?>
                            </div>

                        </div>
                        <!-- second colum  -->
                        <div class="col-6">
                            <div class="form-floating mb-3">
                           <?php echo $this->Form->control('email');?>
                            </div>
                            <div class="form-floating mb-3">
                            <?php echo $this->Form->control('password');?>
                            </div>
                            <div class="form-floating">
                                <input type="password" name="confirm_password" class="form-control" id="confirm_password" value = "<?= isset($_POST['confirm_password'])? $_POST['confirm_password'] : ''?>" placeholder="Password">
                                <label for="confirm_password">Confirm Password</label>
                                <span class="error"><?php echo isset($error_set['confirm_password'])? $error_set['confirm_password']:'';?></span><br>
                                <span class="error"><?php echo isset($error_set['invalid'])? $error_set['invalid']:'';?></span>
                            </div>
                            <div class="checkbox mt-2">
                                <input type="checkbox" name="show_password" class="checkbox" id="show_password"> <label class="text-primary">Show Password<label>
                            </div>
                        </div>
                        <div class="mb-2">
                                <label for="gender" class="form-label">Gender</label>
                            </div>
                            <div class="form">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="other" value="other">
                                    <label class="form-check-label" for="inlineRadio2">Other</label>
                                </div><br>
                               
                               
                            </div>
                    </div>
               
                    <?= $this->Form->button(__('Submit')) ?>
                    
                    <?= $this->Form->end() ?>
                            </div>
        </div>
    </section>