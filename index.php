<?php
            require "vendor/autoload.php";

            use GuzzleHttp\Client;
            use KubAT\PhpSimple\HtmlDomParser;

            $client = new Client([
                'headers' => [
                    'User-Agent' =>'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36
                    '
                ]       
            ]);

            $URL= "http://www.portaldaibiapaba.com.br/corona/";

            $html = $client->request("GET",$URL)->getBody();
            $dom = HtmlDomParser::str_get_html($html);

            //echo $dom;

            foreach ($dom->find('h1') as $key => $link){

                $urlDados = $link->content;


                $html = $client->request("GET",$URL)->getBody();
                $domDados = HtmlDomParser::str_get_html($html);

                $div = $domDados->find('div.container',0);
                $mundoCaso = $div->find('h1',1)->plaintext;
                $mundoMorte = $div->find('h1',2)->plaintext;
                $mundoRecuperado = $div->find('h1',3)->plaintext;
                $brasilCaso = $div->find('h1',5)->plaintext;
                $brasilMorte = $div->find('h1',6)->plaintext;
                $brasilRecuperado = $div->find('h1',7)->plaintext;

        ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ibiapba24horas - Corona Vírus no mundo e no Brasil em tempo real</title>
    <meta name="description" content="Dados em tempo real do corona virus no mundo e no brasil. Ibiapapaba24horas maior portal de noticias da serra da ibiapaba.">
    <meta name="keywords" content="coronavirus,serradaibiapaba,tiangua,ubajara,ibiapina,24horas,ibiapaba,virus,serra,saobenedito,vicosadoceara">
    <meta property=”og:title” content="Ibiapba24horas - Corona Vírus no mundo e no Brasil em tempo real"/>
    <meta property=”og:description” content="Dados em tempo real do corona virus no mundo e no brasil. Ibiapapaba24horas maior portal de noticias da serra da ibiapaba."/>
    <meta name="author" content="Ibiapaba24horas">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico">
    <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
    <link rel="stylesheet" href="./css/my-style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159235197-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-159235197-1');
</script>

</head>
<body>
    


<nav class="navbar navbar-light bg-azul-ibiapaba fixed-top py-1 box-shadow">
            <div class="mx-auto">
                <a href="http//:www.ibiapaba24horas.com" target="_blank" >  
                    <img width="50px" height="50px" src="images/logo_100x100.png" alt="background-corona">
                </a>  
            </div>
      </nav> 

    <div class="mx-auto text-center mt-5 py-5">
        <h1 class="display-4"> COVID-19  NO MUNDO </h1>
        <p class="lead"> FIQUE INFORMADO EM TEMPO REAL TUDO SOBRE CORONAVÍRUS NO MUNDO E NO BRASIL </p>
    </div>

    <amp-ad width="100vw" height="320"
     type="adsense"
     data-ad-client="ca-pub-1290649823929419"
     data-ad-slot="8546071569"
     data-auto-format="rspv"
     data-full-width="">
  <div overflow=""></div>
</amp-ad>


<div class="container" style="border: 0px solid red">
       
    <section>
    <h2 class="text-center mx-auto"> NO MUNDO </h2>

    <div class="row">
        <div class="col-12 col-sm-12 col-md-4" style="">        
            <div class="card bg-light mb-3 mx-auto" style="max-width: 18rem;">
                
                <div class="card-header h5 text-center">CONFIRMADOS</div>
                    <div class="card-body">                
                        <p class="card-text h2 text-center"><?php echo $mundoCaso; ?>  </p>
                    </div>
                </div>
        </div>


        <div class="col-12 col-sm-12 col-md-4" style="">        
            <div class="card bg-light mb-3 mx-auto" style="max-width: 18rem;">
                
                <div class="card-header h5 text-center">MORTES</div>
                    <div class="card-body">                
                        <p class="card-text h2 text-center text-danger"><?php  echo $mundoMorte; ?>  </p>
                    </div>
                </div>
        </div>

        <div class="col-12 col-sm-12 col-md-4" style="">        
            <div class="card bg-light mb-3 mx-auto" style="max-width: 18rem;">
                
                <div class="card-header h5 text-center">RECUPERADOS</div>
                    <div class="card-body">                
                        <p class="card-text h2 text-center text-success"><?php  echo $mundoRecuperado; ?>  </p>
                    </div>
                </div>
        </div>
    </div>

    </section>

    <section >
        <h2 class="text-center mx-auto py-1"> NO BRASIL </h2>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4" style="">        
                <div class="card bg-light mb-3 mx-auto" style="max-width: 18rem;">
                    
                    <div class="card-header h5 text-center">CONFIRMADOS</div>
                        <div class="card-body">                
                            <p class="card-text h2 text-center"><?php echo $brasilCaso; ?>  </p>
                        </div>
                    </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4" style="">        
                <div class="card bg-light mb-3 mx-auto" style="max-width: 18rem;">
                    
                    <div class="card-header h5 text-center">MORTES</div>
                        <div class="card-body">                
                            <p class="card-text h2 text-center text-danger"><?php  echo $brasilMorte; ?>  </p>
                        </div>
                    </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4" style="">        
                <div class="card bg-light mb-3 mx-auto" style="max-width: 18rem;">                
                    <div class="card-header h5 text-center">RECUPERADOS</div>
                        <div class="card-body">                
                            <p class="card-text h2 text-center text-success"><?php  echo $brasilRecuperado; ?>  </p>
                        </div>
                    </div>
                </div>
            </div>    
    </section>

    <section>
        <div class="container">
            <h1 class="text-center mt-4 py-3"> SITUAÇÃO DOS ESTADOS NO BRASIL </h1>
            <iframe title="Números do coronavírus no Brasil" aria-label="Table" id="datawrapper-chart-5xvOq" src="//datawrapper.dwcdn.net/5xvOq/7/" scrolling="no" frameborder="0" style="width: 0px; border: none; min-width: 100% !important; height: 829px;" height="828"></iframe>
        </div>
    </section> 

<!-- FIM CONTAINER -->
</div>

        <section>          
                <h1 class="text-center h4 my-font-titulo ">O QUE É CORONAVÍRUS ? </h1>
                <div class="msg-footer">
                    <div class="container-fluid">
                        <p class="display-5 text-center" style="color:#002441">A doença provocada pelo novo Coronavírus é oficialmente conhecida como COVID-19, sigla em inglês para “coronavirus disease 2019” (doença por coronavírus 2019, na tradução).

                        Vírus que causa doença respiratória pelo agente coronavírus, com casos recentes registrados na China e em outros países.

                        Quadro pode variar de leve a moderado, semelhante a uma gripe. Alguns casos podem ser mais graves, por exemplo, em pessoas que já possuem outras doenças. Nessas situaçōes, pode ocorrer síndrome respiratória aguda grave e complicações. Em casos extremos, pode levar a óbito.</p>
                    </div>
                </div>                        
        </section>



<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- ibiapaba24horas_main-top-manualslide_AdSense1_1x1_as -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1290649823929419"
     data-ad-slot="8546071569"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>



<div class="container">
        
        <section>           
            <h1 class="text-center h4 py-4 my-font-titulo "> TRANSMISSÃO  </h1>
               <div class="row">
                        <div class="col-12 col-md-12 col-lg-4 py-md-2">
                            <div class="d-flex justify-content-center  ">
                                  <img src="images/transmissao/espirro1.png"/>
                            </div>
                            <p class="text-center my-font"> Espirro </p>
                        </div>
                        
                         <div class="col-12 col-md-12 col-lg-4 py-md-2">
                            <div class="d-flex justify-content-center  ">
                                  <img src="images/transmissao/tosse-transmissao.png"/>
                            </div>
                            <p class="text-center my-font"> Tosse </p>
                         </div>
                         
                           <div class="col-12 col-md-12 col-lg-4 py-md-2">
                            <div class="d-flex justify-content-center  ">
                                  <img src="images/transmissao/catarro1.png"/>
                            </div>
                            <p class="text-center my-font"> Catarro </p>
                         </div>                         
                    
               </div>
        </section> 
        
         <section>           
            <h1 class="text-center h4 my-font-titulo "> SINTOMAS  </h1>
              <p class="text-center">Sinais e sintomas clínicos são <br>principalmente respiratórios, semelhantes aos de um resfriado comum</p>
               <div class="row">
                       
                         
                           <div class="col-12 col-md-12 col-lg-4 py-md-2">
                            <div class="d-flex justify-content-center  ">
                                  <img src="images/transmissao/saliva.png"/>
                            </div>
                            <p class="text-center my-font"> Gotículas de Saliva </p>
                        </div>
                        
                         <div class="col-12 col-md-12 col-lg-4 py-md-2">
                            <div class="d-flex justify-content-center  ">
                                  <img src="images/transmissao/contato-proximo.png"/>
                            </div>
                            <p class="text-center my-font"> Contato Pŕoximo </p>
                         </div>
                         
                           <div class="col-12 col-md-12 col-lg-4 py-md-2">
                            <div class="d-flex justify-content-center  ">
                                  <img src="images/transmissao/contato-objetos.png"/>
                            </div>
                            <p class="text-center my-font">Contato com objeto ou superfícies <br>contaminadas </p>
                         </div>
               </div>
        </section> 
        
          </div>



<section>
            <div class="msg-footer">
                   <div class="container">
                        <h1 class="display-5 text-center" style="color:#002441">Lave as mãos frequentemente com água e sabão e use antisséptico de mãos à base de álcool gel 70%, principalmente:</h1>
                        
                            <ul class="list-unstyled text-center">
                                <li>Após tossir ou respirar</li>
                                <li> Depois de cuidar de pessoas</li>
                                 <li> Antes e depois de comer</li>
                            </ul>  
                            
                                                                        
                       
                    </div>
                </div>
        </section>
        
    
           <footer>
             <div class="fundao">
                 <p style="padding:2px" class="text-center text-white">Ibiapaba24horas - Portal de noticias 24 horas da Serra da Ibiapaba</p>
             </div>
               
           </footer>
        

           <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<?php
exit();  
}

?>

    </body>
</html>