<?php
/**
 * Oldpassword
 * @category  MobileAnalytics
 * @package   CobubRazor
 * @author    Cobub Team <open.cobub@gmail.com>
 * @copyright 2011-2016 NanJing Western Bridge Co.,Ltd.
 * @license   http://www.cobub.com/docs/en:razor:license GPL Version 3
 * @link      http://www.cobub.com
 * @since     Version 0.1
 */
$old_password = array('name' => 'old_password', 'id' => 'old_password', 'value' => set_value('old_password'), 'size' => 30, );
/**
 * New_password
 * @category  MobileAnalytics
 * @package   CobubRazor
 * @author    Cobub Team <open.cobub@gmail.com>
 * @copyright 2011-2016 NanJing Western Bridge Co.,Ltd.
 * @license   http://www.cobub.com/docs/en:razor:license GPL Version 3
 * @link      http://www.cobub.com
 * @since     Version 0.1
 */
$new_password = array('name' => 'new_password', 'id' => 'new_password', 'maxlength' => $this -> config -> item('password_max_length', 'tank_auth'), 'size' => 30, );
/**
 * Confirm_new_password
 * @category  MobileAnalytics
 * @package   CobubRazor
 * @author    Cobub Team <open.cobub@gmail.com>
 * @copyright 2011-2016 NanJing Western Bridge Co.,Ltd.
 * @license   http://www.cobub.com/docs/en:razor:license GPL Version 3
 * @link      http://www.cobub.com
 * @since     Version 0.1
 */
$confirm_new_password = array('name' => 'confirm_new_password', 'id' => 'confirm_new_password', 'maxlength' => $this -> config -> item('password_max_length', 'tank_auth'), 'size' => 30, );
?>
<?php echo form_open($this -> uri -> uri_string()); ?>
<section id="main" class="column" style='height:1500px;'>
<article class="module width_full">
<header><h3> <?php echo lang('m_changePassword'); ?> </h3></header>
	<div class="module_content">
	<fieldset>
        <?php echo form_label(lang('m_cp_currentPassword'), $old_password['id']); ?>
        <?php echo form_password($old_password); ?>
		<font style="color: red;"><?php echo form_error($old_password['name']); ?><?php echo isset($errors[$old_password['name']]) ? $errors[$old_password['name']] : ''; ?></font>
	</fieldset>
	<fieldset>
        <?php echo form_label(lang('m_cp_newPassword'), $new_password['id']); ?>
        <?php echo form_password($new_password); ?>
		<font style="color: red;"><?php echo form_error($new_password['name']); ?><?php echo isset($errors[$new_password['name']]) ? $errors[$new_password['name']] : ''; ?></font>
	</fieldset>
	<fieldset>
        <?php echo form_label(lang('l_re_confirmPassword'), $confirm_new_password['id']); ?>
        <?php echo form_password($confirm_new_password); ?>
		<font style="color: red;"><?php echo form_error($confirm_new_password['name']); ?><?php echo isset($errors[$confirm_new_password['name']]) ? $errors[$confirm_new_password['name']] : ''; ?></font>
		</fieldset>
	</div>
	<footer>
		<div class="submit_link">
    <?php
    if (isset($guest_roleid) && $guest_roleid == 2) {
        echo form_submit('change', lang('m_cp_saveChanges'), 'disabled');
    } else {
        echo form_submit('change', lang('m_cp_saveChanges'));
    }
    ?> 
		</div>
	</footer>
</article>
</section>
<?php echo form_close(); ?>