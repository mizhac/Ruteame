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
                            <img src="<?php echo $user->media_media_url; ?>">
                            <span class="card-title"><?php echo $user->country; ?></span>
                        </div>
                        <div class="card-content">
                            <p><?php echo $user->text; ?></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="section grey lighten-5">
            <div class="container">
                <div class="row z-depth-1 white">
                    <?php foreach ($results as $result) : ?>
                        <div class="col s12">
                            <div class="col s4">
                                <div class="card">
                                    <div class="card-image">
                                        <img src="<?php echo $result->media_media_url; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col s8">
                                <div class="card white">
                                    <div class="card-content black-text">
                                        <span class="card-title amber-text"><?php echo $result->country; ?></span>
                                        <p><?php echo $result->text; ?></p>
                                        <br>
                                        <a class="waves-effect waves-light btn amber darken-2 right"><i class="material-icons right">cloud</i>Comentar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <footer class="page-footer amber accent-3">
            <div class="footer-copyright amber darken-2">
                <div class="container amber darken-2">
                <b>© 2015 by Hackspace</b>
                <a class="grey-text text-lighten-4 right" href="#!"><b>Ruteame.pe</b></a>
                </div>
              </div>
        </footer>
        <?php $this->load->view('home/partial/foot'); ?>
    </body>
</html>