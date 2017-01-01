<div class="avatar-zone">
    <img id="img_id" src="<?php echo base_url("upload/existing_studnet_photo/demo.png"); ?>" alt="select photo" style="width: 180px; height: 160px;"/>
</div>
<input type='file' name="photo" onchange="upload_img(this);" class="upload_btn">

<script>
    $(document).ready(function() {
        //This function is use for image preview before upload
        function upload_img(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#img_id').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        
    });
</script>
