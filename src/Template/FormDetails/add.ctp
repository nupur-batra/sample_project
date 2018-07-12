<section class="content-header">
  <h1>
    Form Detail
    <small><?= __('Add') ?></small>
  </h1>
  
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?= __('Form') ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($formDetail, array('role' => 'form', 'id' => 'validation')) ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('name');
            echo $this->Form->input('email');
            echo $this->Form->input('gender',['options' => ['female' => 'Female' , 'male' => 'Male' ]]);
            echo $this->Form->input('comments');
          ?>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <?= $this->Form->button(__('Save')) ?>
          </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>

<?php

// validation.js and messages.js are used for field validations and are placed at /webroot/js folder
$this->Html->script([
    'validation','messages',
    'http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'
],
    ['block' => 'script']);
?>
