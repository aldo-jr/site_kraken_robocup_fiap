<?php include("header.php"); ?>

<div class="container">
    <div class="col-md-10 ml-auto mr-auto">

        <div class="alert alert-success text-center sr-only" role="alert">
            <h4 class="alert-heading ">Tempo perdido com sucesso!</h4>
            <br>
            <p>Obrigado por enviar um contato, mas sinto lhe informar que ninguém lerá isso!</p>

            <img src="https://t04.deviantart.net/gNqheazatD9UnSlVMUHMpUMveQs=/fit-in/700x350/filters:fixed_height(100,100):origin()/pre01/00fe/th/pre/i/2014/176/6/6/hue_hue_hue_br_by_voltrotz-d7nvrcl.png" alt="">
            <hr>
            <p class="mb-0">Volte sempre que quiser perder seu tempo! HUEHUEHUE.</p>
        </div>

        <form class="">
            <div class="form-group row">
                <label for="nome" class="col-sm-3 col-form-label">Nome Completo (*): </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nome" placeholder="Nome">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">E-mail (*): </label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" id="email" placeholder="E-mail">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="assunto" class="col-sm-3 col-form-label">Assunto (*): </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="assunto" placeholder="Assunto">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="texto" class="col-sm-3 col-form-label">Texto (*): </label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="texto" placeholder="Texto" rows="5"></textarea>
                </div>
            </div>
            
            <div class="form-group row">
                
                <div class="col-sm-9 ml-auto">
                    <input type="submit" class="btn btn-primary" value="Enviar contato">
                </div>
            </div>
        </form>
    </div>
</div>

<?php include("footer.php"); ?>