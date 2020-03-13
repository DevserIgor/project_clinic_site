    <?php 
        require 'topo.php';
    ?>

    <!-- Banner Area Starts -->
    <section class="banner-area other-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Fale conosco</h1>
                    <a href="index.php">Início</a> <span>|</span> <a href="exames.php">Fale conosco</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <br><br>

    <!-- Map Area Starts -->
    <section class="map-area section-padding" style="padding:50px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.998128419931!2d-43.37475814907813!3d-22.802533239819493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x996460a8f581d9%3A0x1ecd4cf7e21ba17d!2sPolyclinic%20Child%20Jesus!5e0!3m2!1sen!2sbr!4v1581704018252!5m2!1sen!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- Map Area End -->


    <!-- Contact Form Starts -->
    <section class="contact-form section-padding3">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex">
                        <div class="into-icon">
                            <i class="fa fa-home"></i>
                        </div>
                        <div class="info-text">
                            <h3>Rua Expedicionários, 148</h3>
                            <p>São João de Meriti / RJ</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="into-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="info-text">
                            <h3>(21) 2655-1085</h3>
                            <p>Seg à Sex das 6h30 às 18h<br>Sáb das 6h30 às 13h</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form action="contato_processa.php" method="post">
                        <div class="left">
                            <input type="text" placeholder="Nome" style="border-color:#ccddef;" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome'" required>
                            <input type="email" placeholder="Email" style="border-color:#ccddef;" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required>
                            <input type="text" placeholder="Assunto" style="border-color:#ccddef;" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Assunto'" required>
                        </div>
                        <div class="right">
                            <textarea name="message" cols="20" rows="7" placeholder="Mensagem" style="border-color:#ccddef;" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mensagem'" required></textarea>
                        </div>
                        <button type="submit" class="template-btn">Enviar mensagem</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form End -->
    
    <?php 
        require 'rodape.php';
    ?>