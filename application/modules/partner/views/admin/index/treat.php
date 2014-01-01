<form class="form-horizontal" method="POST" action="">
    <?php echo $this->getTokenField(); ?>
    <legend>
    <?php
        if ($this->get('partner') != '') {
            echo $this->trans('menuActionEditPartner');
        } else {
            echo $this->trans('menuActionNewPartner');
        }
    ?>
    </legend>
    <div class="form-group">
        <label for="name" class="col-lg-2 control-label">
            <?php echo $this->trans('name'); ?>:
        </label>
        <div class="col-lg-4">
            <input class="form-control"
                   type="text"
                   name="name"
                   id="name"
                   value="<?php if ($this->get('partner') != '') { echo $this->escape($this->get('partner')->getName()); } ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="banner" class="col-lg-2 control-label">
            <?php echo $this->trans('banner'); ?>:
        </label>
        <div class="col-lg-4">
            <input class="form-control"
                   type="text"
                   name="banner"
                   id="email"
                   value="<?php if ($this->get('partner') != '') { echo $this->escape($this->get('partner')->getBanner()); } ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="link" class="col-lg-2 control-label">
            <?php echo $this->trans('link'); ?>:
        </label>
        <div class="col-lg-4">
            <input class="form-control"
                   type="text"
                   name="link"
                   id="email"
                   value="<?php if ($this->get('partner') != '') { echo $this->escape($this->get('partner')->getLink()); } ?>" />
        </div>
    </div>
    <div class="content_savebox">
        <button type="submit" name="save" class="btn">
            <?php
            if ($this->get('partner') != '') {
                echo $this->trans('editButton');
            } else {
                echo $this->trans('addButton');
            }
            ?>
        </button>
    </div>
</form>
