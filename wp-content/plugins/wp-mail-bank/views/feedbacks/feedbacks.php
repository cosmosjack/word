<?php
/**
 * This Template is used for sending feedback.
 *
 * @author  Tech Banker
 * @package wp-mail-bank/views/feedbackss
 * @version 2.0.0
 */
if (!defined("ABSPATH")) {
   exit;
} // Exit if accessed directly
if (!is_user_logged_in()) {
   return;
} else {
   $access_granted = false;
   foreach ($user_role_permission as $permission) {
      if (current_user_can($permission)) {
         $access_granted = true;
         break;
      }
   }
   if (!$access_granted) {
      return;
   } else {
      ?>
      <div class="page-bar">
         <ul class="page-breadcrumb">
            <li>
               <i class="icon-custom-home"></i>
               <a href="admin.php?page=mb_email_configuration">
                  <?php echo $wp_mail_bank; ?>
               </a>
               <span>></span>
            </li>
            <li>
               <span>
                  <?php echo $mb_feedbacks; ?>
               </span>
            </li>
         </ul>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="portlet box vivid-green">
               <div class="portlet-title">
                  <div class="caption">
                     <i class="icon-custom-star"></i>
                     <?php echo $mb_feedbacks; ?>
                  </div>
                  <p class="premium-editions">
                     <?php echo $mb_upgrade_kanow_about ?> <a href="https://mail-bank.tech-banker.com/" target="_blank" class="premium-edition-text"><?php echo $mb_full_features ?></a> <?php echo $mb_chek_our; ?> <a href="https://mail-bank.tech-banker.com/backend-demos/" target="_blank" class="premium-edition-text"><?php echo $mb_online_demos; ?></a>
                  </p>
               </div>
               <div class="portlet-body form">
                  <form id="ux_frm_feedbacks">
                     <div class="form-body">
                        <div class="note note-warning">
                           <h4 class="block">
                              <?php echo $mb_feedbacks_thank_you; ?>
                           </h4>
                           <p>
                              <?php echo $mb_feedbacks_suggest_some_features; ?>
                           </p>
                           <p>
                              <?php echo $mb_feedbacks_suggestion_complaint; ?>
                           </p>
                           <p>
                              <?php echo $mb_feedbacks_write_us_on; ?>
                              <a href="mailto:support@tech-banker.com" target="_blank">support@tech-banker.com</a>
                           </p>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="control-label">
                                    <?php echo $mb_feedbacks_your_name; ?> :
                                    <i class="icon-custom-question tooltips" data-original-title="<?php echo $mb_feedbacks_your_name_tooltip; ?>" data-placement="right"></i>
                                    <span class="required" aria-required="true">*</span>
                                 </label>
                                 <input type="text" class="form-control" name="ux_txt_your_name" id="ux_txt_your_name" value="" placeholder="<?php echo $mb_feedbacks_your_name_placeholder; ?>">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="control-label">
                                    <?php echo $mb_feedbacks_your_email; ?> :
                                    <i class="icon-custom-question tooltips" data-original-title="<?php echo $mb_feedbacks_your_email_tooltip; ?>" data-placement="right"></i>
                                    <span class="required" aria-required="true">*</span>
                                 </label>
                                 <input type="text" class="form-control" name="ux_txt_email_address" id="ux_txt_email_address" value=""  placeholder="<?php echo $mb_feedbacks_your_email_placeholder; ?>">
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label">
                              <?php echo $mb_feedbacks; ?> :
                              <i class="icon-custom-question tooltips" data-original-title="<?php echo $mb_feedbacks_tooltip; ?>" data-placement="right"></i>
                              <span class="required" aria-required="true">*</span>
                           </label>
                           <textarea class="form-control" name="ux_txtarea_feedbacks" id="ux_txtarea_feedbacks" rows="8"  placeholder="<?php echo $mb_feedbacks_placeholder; ?>"></textarea>
                        </div>
                        <div class="line-separator"></div>
                        <div class="form-actions">
                           <div class="pull-right">
                              <input type="submit" class="btn vivid-green" name="ux_btn_send_request" id="ux_btn_send_request" value="<?php echo $mb_feedbacks_send_feedback; ?>">
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <?php
   }
}      