
<div class="admin">
    <div class="admin_login">
        <form action="<?php echo base_url_admin.'?mp=main&mt=login' ?>" method="post">
            <div class="admin_name">
                <label for="user"><?php echo wlText::_('name');  ?></label>
                <input type="text" name="name" id="user" />
            </div>
            <div class="admin_name">
                <label for="pass"><?php echo wlText::_('password');  ?></label>
                <input type="password" name="password" id="pass" />
            </div>
            <div class="admin_name">
                <input type="submit" value="login" />
            </div>
        </form>
    </div>
</div>