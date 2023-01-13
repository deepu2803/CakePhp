<?php echo $this->Form->create(null,['type' => 'POST']);?>
<div class="form-controler">
    <div class="row">
    <div class="col-md-6">
            <?php echo $this->Form->control('first_name');?>
            <span class="error" id="first_name_error"></span>

           
            <?php echo $this->Form->control('contact');?>
            <span class="error" id="contact_error"></span>

            <?php echo $this->Form->control('email');?>
            <span class="error" id="email_error"></span>
           
            <?php echo $this->Form->control('password');?>
            <span class="error" id="first_name_error"></span>

            <?= $this->Form->button('Submit');?>
        </div>
    
</div>
<?= $this->Form->end() ?>
<?php echo $this->Html->image('https://images.pling.com/img/00/00/59/57/30/1497207/ca74eab8e8c48276d294a99d9199012faae6cac3d62c92c2d30a3e2aa1bb0455b4b1.jpg', array('alt' => 'CakePHP', 'border' => '0', 'data-src' => 'holder.js/100%x100')); ?>
