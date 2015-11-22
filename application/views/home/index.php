<!DOCTYPE html>
<html>
    <?php $this->load->view('home/partial/head'); ?>
    <body>
        <?php $this->load->view('home/partial/menu'); ?>
        <div class="section grey lighten-5">
            <div class="container">
                <div class="row grey lighten-5 back">
                    <?php foreach($results as $result) : ?>
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator back2" src="<?php echo $result->media_media_url; ?>">
                            </div>
                            <br>
                            <div class="chip" style="margin: 1em;">
                                <img src="<?php echo $result->user_profile_image_url; ?>">
                                <a href="<?php echo base_url() ?>profile/user/<?php echo $result->id_str; ?>"><?php echo $result->user_name; ?></a>
                            </div>

                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4"><?php echo $result->country; ?><i class="material-icons right">more_vert</i></span>
                                <p><a href="<?php echo base_url() ?>detalle/<?php echo $result->id_str; ?>">This is a link</a></p>
                                <p><?php echo $result->text; ?></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                        <br>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
        <?php $this->load->view('home/partial/foot'); ?>
    </body>
</html>