<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-26 22:25:09
  from '/www/wwwroot/zzz.zzz/resources/views/material/admin/manual/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7cbb4507dab9_04606184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '844d9fa63a6182f1a6024f2ae9b43f8c53fe603b' => 
    array (
      0 => '/www/wwwroot/zzz.zzz/resources/views/material/admin/manual/edit.tpl',
      1 => 1585232705,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/main.tpl' => 1,
    'file:dialog.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
),false)) {
function content_5e7cbb4507dab9_04606184 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:user/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">编辑产品系列 #<?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-sm-12">
            <section class="content-inner margin-top-no">
                <form id="main_form">
                    <div class="card">
                        <div class="card-main">
                            <div class="card-inner">
                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="name">产品系列</label>
                                    <input class="form-control maxwidth-edit" id="name" name="name" type="text"
                                           value="<?php echo $_smarty_tpl->tpl_vars['node']->value->name;?>
">
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="info">备注</label>
                                    <input class="form-control maxwidth-edit" id="info" name="info" type="text"
                                           value="<?php echo $_smarty_tpl->tpl_vars['node']->value->info;?>
">
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="profit_rate">利润率</label>
                                    <input class="form-control maxwidth-edit" id="profit_rate" name="profit_rate" type="text"
                                           value="<?php echo $_smarty_tpl->tpl_vars['node']->value->profit_rate;?>
">
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="tax_rate">税率</label>
                                    <input class="form-control maxwidth-edit" id="tax_rate" name="tax_rate" type="text"
                                           value="<?php echo $_smarty_tpl->tpl_vars['node']->value->tax_rate;?>
">
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="processing_rate">加工费率</label>
                                    <input class="form-control maxwidth-edit" id="processing_rate" name="processing_rate" type="text"
                                           value="<?php echo $_smarty_tpl->tpl_vars['node']->value->processing_rate;?>
">
                                </div>

                                <div class="form-group form-group-label">
                                    <div class="checkbox switch">
                                        <label for="status">
                                            <input <?php if ($_smarty_tpl->tpl_vars['node']->value->status == 1) {?>checked<?php }?> class="access-hide" id="status"
                                                   name="status" type="checkbox"><span class="switch-toggle"></span>是否上架
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-main">
                            <div class="card-inner">

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-10 col-md-push-1">
                                            <button id="submit" type="submit"
                                                    class="btn btn-block btn-brand waves-attach waves-light">修改
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>


    </div>
</main>

<?php $_smarty_tpl->_subTemplateRender('file:admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php echo '<script'; ?>
>

    $('#main_form').validate({
        rules: {
            name: {required: true},
            info: {required: true},
        },

        submitHandler: () => {

            if ($$.getElementById('status').checked) {
                var status = 1;
            } else {
                var status = 0;
            }

            $.ajax({
                type: "PUT",
                url: "/admin/manual/<?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
",
                dataType: "json",
                data: {
                    name: $$getValue('name'),
                    profit_rate: $$getValue('profit_rate'),
                    tax_rate: $$getValue('tax_rate'),
                    processing_rate: $$getValue('processing_rate'),
                    info: $$getValue('info'),
                    status
                },

                success: (data) => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        window.setTimeout("location.href=top.document.referrer", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);

                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },

                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `发生错误：${jqXHR.status}`;
                }
            });
        }
    });

<?php echo '</script'; ?>
>

<?php }
}
