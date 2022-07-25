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
    <?php if($_settings ->chk_flashdata('success')):?>
    <script>
    alert_toast("<?php echo $_settings->flashdata('success')?>", 'success')
    </script>
    <?php endif;?>
    <style>
    img#cimg {
        height: 15vh;
        width: 15vh;
        object-fit: cover;
        border-radius: 100% 100%;
    }
    </style>
    <div class="col-lg-12">
        <div class="card card-primary">
            <div class="card-header">
                <h5 class="card-title">System Information</h5>
            </div>
            <div class="card-body">
                <form id="system-frm">
                    <div class="form-group">
                        <label for="name" class="control-label">Systeam Name</label>
                        <input type="text" class="form-control form-control-sm" name="name"
                            value="<?php echo $settings->info('name')?>">
                    </div>
                    <div class="form-group">
                        <label for="short_name" class="control-label">Systeam Short Name</label>
                        <input type="text" class="form-control form-control-sm" name="short_name"
                            value="<?php echo $settings->info('short_name')?>">
                    </div>
                    <div class="form-group">
                        <label for="name" class="control-label">Systeam logo</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input rounded-circle" id="customfile" name="img"
                                onchange="displayImg(this,$(this))">
                                <label for="customfile" class="custom-file-label">Choose File</label>
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <img src="<?php echo validate_image($_settings->info('logo'))?>" class="img-fluid img-thumbnail" id="bimg">
                    </div>
                </form>
                <div class="card-footer">
                    <div class="col-md-12">
                        <div class="row">
                            <button class="btn btn-sm btn-primary" form="system-frm"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function displayIMG(input,_this) {
            if(input.files && input.files[0]){
                var reader = new filereader();
                reader.onload = function(e){
                    $('#bimg').attr('src',e.target.result);
                    _this.sibilings('.custom-file-label').html(input.files[0].name)
                }
                reader.readasdataURL(input.files[0]);
            }
        }
        
    </script>
</body>

</html>