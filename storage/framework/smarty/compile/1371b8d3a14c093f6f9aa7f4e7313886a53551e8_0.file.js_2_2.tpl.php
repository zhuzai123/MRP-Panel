<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-28 01:30:39
  from '/www/wwwroot/zzz.zzz/resources/views/material/table/js_2_2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7e383fc58b06_21716239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1371b8d3a14c093f6f9aa7f4e7313886a53551e8' => 
    array (
      0 => '/www/wwwroot/zzz.zzz/resources/views/material/table/js_2_2.tpl',
      1 => 1585330236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:table/lang_chinese_2.tpl' => 1,
  ),
),false)) {
function content_5e7e383fc58b06_21716239 (Smarty_Internal_Template $_smarty_tpl) {
?>table_2 = $('#table_2').DataTable({
ajax: {
url: '<?php echo $_smarty_tpl->tpl_vars['table_2_config']->value['ajax_url'];?>
',
type: "POST"
},
processing: true,
serverSide: true,
order: [[ 0, 'desc' ]],
stateSave: true,
columnDefs: [
{
targets: [ '_all' ],
className: 'mdl-data-table__cell--non-numeric'
}
],
columns: [
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_2_config']->value['total_column'], 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
    { "data": "<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" },
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
],
<?php $_smarty_tpl->_subTemplateRender('file:table/lang_chinese_2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
})


var has_init = JSON.parse(localStorage.getItem(window.location.href + '-hasinit'));
if (has_init != true) {
localStorage.setItem(window.location.href + '-hasinit', true);
} else {
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_2_config']->value['total_column'], 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
    var checked = JSON.parse(localStorage.getItem(window.location.href + '-haschecked-checkbox_2_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
'));
    if (checked == true) {
    document.getElementById('checkbox_2_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
').checked = true;
    } else {
    document.getElementById('checkbox_2_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
').checked = true;
    }
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
}

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_2_config']->value['total_column'], 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
    modify_table_visible('checkbox_2_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
');
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
