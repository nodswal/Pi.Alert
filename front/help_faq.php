<?php
  require 'php/templates/header.php';
?>
<!-- Page ------------------------------------------------------------------ -->
<div class="content-wrapper">

<!-- Content header--------------------------------------------------------- -->
    <section class="content-header">
    <?php require 'php/templates/notification.php'; ?>
      <h1 id="pageTitle">
         <?php echo lang('HelpFAQ_Title');?>
      </h1>
    </section>

    <!-- Main content ---------------------------------------------------------- -->
    <section class="content">
      <h4><?php echo lang('HelpFAQ_Cat_General');?></h4>

       <div class="panel-group" id="accordion_gen">
        <div class="panel panel-default">

          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion_gen" href="#collapse100">
              <?php echo lang('HelpFAQ_Cat_General_100_head');?></a>
            </h4>
          </div>

          <div id="collapse100" class="panel-collapse collapse" style="font-size: 16px;">
            <div class="panel-body"><?php echo lang('HelpFAQ_Cat_General_100_text_a');?>
              <span class="text-danger help_faq_code"><?php echo date_default_timezone_get(); ?></span><br>
              <?php echo lang('HelpFAQ_Cat_General_100_text_b');?> 
              <span class="text-danger help_faq_code"><?php echo php_ini_loaded_file(); ?></span><br>
              <?php echo lang('HelpFAQ_Cat_General_100_text_c');?>
            </div>
          </div>

        </div>

        
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion_gen" href="#collapse101">
              <?php echo lang('HelpFAQ_Cat_General_101_head');?></a>
            </h4>
          </div>
          <div id="collapse101" class="panel-collapse collapse" style="font-size: 16px;">
            <div class="panel-body">
              <?php echo lang('HelpFAQ_Cat_General_101_text');?>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion_gen" href="#collapse102">
              <?php echo lang('HelpFAQ_Cat_General_102_head');?></a>
            </h4>
          </div>
          <div id="collapse102" class="panel-collapse collapse" style="font-size: 16px;">
            <div class="panel-body">
              <?php echo lang('HelpFAQ_Cat_General_102_text');?>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion_gen" href="#collapse102docker">
              <?php echo lang('HelpFAQ_Cat_General_102docker_head');?></a>
            </h4>
          </div>
          <div id="collapse102docker" class="panel-collapse collapse" style="font-size: 16px;">
            <div class="panel-body">
              <?php echo lang('HelpFAQ_Cat_General_102docker_text');?>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion_gen" href="#collapse103">
              <?php echo lang('HelpFAQ_Cat_General_103_head');?></a>
            </h4>
          </div>
          <div id="collapse103" class="panel-collapse collapse" style="font-size: 16px;">
            <div class="panel-body">
              <?php echo lang('HelpFAQ_Cat_General_103_text');?>
            </div>
          </div>
        </div>
      </div> 

<h4><?php echo lang('Navigation_Devices');?></h4>
 <div class="panel-group" id="accordion_dev">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion_dev" href="#collapse200">
        <?php echo lang('HelpFAQ_Cat_Device_200_head');?></a>
      </h4>
    </div>
    <div id="collapse200" class="panel-collapse collapse" style="font-size: 16px;">
      <div class="panel-body">
         <?php echo lang('HelpFAQ_Cat_Device_200_text');?>
      </div>
    </div>
  </div>
</div> 


<h4><?php echo lang('HelpFAQ_Cat_Detail');?></h4>
 <div class="panel-group" id="accordion_det">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion_det" href="#collapse300">
        <?php echo lang('HelpFAQ_Cat_Detail_300_head');?> "<?php echo lang('DevDetail_MainInfo_Network');?>" / "<?php echo lang('DevDetail_MainInfo_Network_Port');?>"?</a>
      </h4>
    </div>
    <div id="collapse300" class="panel-collapse collapse" style="font-size: 16px;">
      <div class="panel-body">
        "<?php echo lang('DevDetail_MainInfo_Network');?>" <?php echo lang('HelpFAQ_Cat_Detail_300_text_a');?><br>
        "<?php echo lang('DevDetail_MainInfo_Network_Port');?>" <?php echo lang('HelpFAQ_Cat_Detail_300_text_b');?>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion_det" href="#collapse301">
        <?php echo lang('HelpFAQ_Cat_Detail_301_head_a');?> "<?php echo lang('DevDetail_EveandAl_ScanCycle');?>" <?php echo lang('HelpFAQ_Cat_Detail_301_head_b');?></a>
      </h4>
    </div>
    <div id="collapse301" class="panel-collapse collapse" style="font-size: 16px;">
      <div class="panel-body">
        <?php echo lang('HelpFAQ_Cat_Detail_301_text');?>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion_det" href="#collapse302">
        <?php echo lang('HelpFAQ_Cat_Detail_302_head_a');?> "<?php echo lang('DevDetail_EveandAl_RandomMAC');?>" <?php echo lang('HelpFAQ_Cat_Detail_302_head_b');?></a>
      </h4>
    </div>
    <div id="collapse302" class="panel-collapse collapse" style="font-size: 16px;">
      <div class="panel-body">
        <?php echo lang('HelpFAQ_Cat_Detail_302_text');?>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion_det" href="#collapse303">
        <?php echo lang('HelpFAQ_Cat_Detail_303_head');?></a>
      </h4>
    </div>
    <div id="collapse303" class="panel-collapse collapse" style="font-size: 16px;">
      <div class="panel-body">
        <?php echo lang('HelpFAQ_Cat_Detail_303_text');?>
      </div>
    </div>
  </div>
</div> 

<h4><?php echo lang('Navigation_Presence');?></h4>
 <div class="panel-group" id="accordion_pre">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion_pre" href="#collapse400">
        <?php echo lang('HelpFAQ_Cat_Presence_400_head');?></a>
      </h4>
    </div>
    <div id="collapse400" class="panel-collapse collapse" style="font-size: 16px;">
      <div class="panel-body">
        <?php echo lang('HelpFAQ_Cat_Presence_400_text');?>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion_pre" href="#collapse401">
        <?php echo lang('HelpFAQ_Cat_Presence_401_head');?></a>
      </h4>
    </div>
    <div id="collapse401" class="panel-collapse collapse" style="font-size: 16px;">
      <div class="panel-body">
        <?php echo lang('HelpFAQ_Cat_Presence_401_text');?>
      </div>
    </div>
  </div>
</div> 

<h4><?php echo lang('Navigation_Network');?></h4>
 <div class="panel-group" id="accordion_net">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion_net" href="#collapse600">
        <?php echo lang('HelpFAQ_Cat_Network_600_head');?></a>
      </h4>
    </div>
    <div id="collapse600" class="panel-collapse collapse" style="font-size: 16px;">
      <div class="panel-body">
        <?php echo lang('HelpFAQ_Cat_Network_600_text');?>
      </div>
    </div>
  </div>
</div> 

    </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->

<!-- ----------------------------------------------------------------------- -->
<?php
  require 'php/templates/footer.php';
?>
