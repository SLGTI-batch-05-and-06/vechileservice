<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <?php include('../include/script.php');?>
</head>

<body>
    <aside class="main sidebar-dark-primary elevation-4 sidebar-no-expand">
        <a href="<?php echo base_url?>admin" class="brand-link bg-primary text-sm">
            <img src="<?php echo validate_image($_settimgs->info('logo'))?>" alt="store logo"
                class="brand-image img-circle elevation-3" style="opacity:8; width:2.5rem;max-height:unset">
            <span class="brand-text font-weight-light"><?php echo $_settimgs->info('shhort')?></span></a>
        <div
            class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-transition os-host-scrollbar-horizontal-hidden">
            <div class="os-resize-observer-host-observed">
                <div class="os-resize-observer" style="left:0px; right:auto;"></div>
            </div>
            <div class="os-size-auto-observer observed" style="height:calc(100%+1px); float:left;">
                <div class="os-resize-observer"></div>
            </div>
            <div class="os-content-glue" style="margin: 0px -8px;width:249px; height:646px;"></div>
            <div class="os-padding">
                <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y:scroll;">
                    <div class="os-content" style="padding:0px 8px; height:100%; width:100%">
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</body>

</html>