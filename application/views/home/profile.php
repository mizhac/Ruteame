<!DOCTYPE html>
<html>
    <head>
        <?php $this->load->view('home/partial/head'); ?>
    <body>
        <?php $this->load->view('home/partial/menu'); ?>
        
        <div class="section grey lighten-5">
            <div class="container">
                <div class="row">
                    <div class="card">
                        <div class="card-image">
                            <img src="<?php echo $user->media_media_url; ?>" class="back2">

                            <span class="card-title"><b><?php echo $user->country; ?></b></span>

                        </div>
                        <div class="chip" style="margin: 1em;">
                            <img src="<?php echo $user->user_profile_image_url; ?>" alt="Contact Person">
                            <?php echo $user->user_name; ?>
                        </div>
                        <div class="card-content">
                            <p><?php echo $user->text; ?></p>
                        </div>
                    </div>

                    <ul class="collection z-depth-1">
                        <?php foreach ($results as $result) : ?>
                            <li class="collection-item avatar">
                                <img src="<?php echo $result->user_profile_image_url; ?>" alt="" class="circle">
                                <span class="title"><b><?php echo $result->user_name; ?></b></span>
                                <p><?php echo $result->created_at; ?><br>
                                    <?php echo $result->text; ?>
                                </p>
                                <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>



        <?php $this->load->view('home/partial/foot'); ?>
        <script>
            $(document).ready(function() {
                $('.collection-item').pushpin({top: $('.collection-item').offset().top});
            });
        </script>
    </body>
</html>