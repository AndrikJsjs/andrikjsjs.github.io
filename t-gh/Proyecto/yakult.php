<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yakult Aguascalientes</title>
    <link
    rel="icon"
    type="image/png"
    href="http://assets.stickpng.com/images/58a0507e5583a1291368eeb5.png">
</head>
<body>
    <header>
        <h1>Yakult</h1>
    </header>
    <main>
        <article>
            <header id="ques"><h2>¿Qué es Yakult?</h2></header>
            <p>
                <img src="assets/yak-new.png" alt="Yakult" id="imagen-yakult">
                Es un producto a base de leche fermentada que contiene más de 8 mil millones (=8,000,000,000) de Lactobacillus casei Shirota que son capaces de llegar vivos a los intestinos mejorando las propiedades de la microbiota intestinal(flora intestinal).
               <br> Yakult puede ser consumido diariamente por toda la familia para contribuir a su salud intestinal.
            </p>
        </article>
        <form action="#" method="POST">
            <Label for="rojo">Yakult</Label>
            <input type="number" name="rojo" value="0">
            <br>
            <Label for="azul">Yakult 40LT</Label>
            <input type="number" name="azul" value="0">
            <br>
            <Label for="chico">Soful Solido</Label>
            <input type="number" name="chico" value="0">
            <br>
            <Label for="grande">Soful Bebible</Label>
            <input type="number" name="grande" value="0">
            <br>
            <input type="submit" name="enviar" value="Calcular" id="enviar">
        </form>
        <?php 
            if(isset($_POST['enviar'])){ 
                echo "<h1>Resultado</h1>";
                $rojo=$_POST['rojo'];
                $azul=$_POST['azul'];
                $chico=$_POST['chico'];
                $grande=$_POST['grande'];
                $res_rojo=$rojo*5.80;
                $res_azul=$azul*6.40;
                $res_chico=$chico*6.20;
                $res_grande=$grande*6.80;
                $resultado=$res_rojo+$res_azul+$res_chico+$res_grande;
                echo "El precio es $". $resultado;
            }
            ?>
        </main>
        <footer>
          <div>
            <h3 id="contactanos">Contactanos</h3>
            <a href="https://facebook.com/andrikjsjs" target="_blank"><img
                class="logos"
                src="assets/pngegg (1).png"
                alt="Andrik Ahumada"
                title="Facebook Andrik Ahumada"></a>
            <a href="https://instagram.com/andrikjsjs" target="_blank"><img
                class="logos"
                src="assets/pngwing.com.png"
                alt="AndrikJsjs"
                title="Instagram andrikjsjs"></a>
            <a href="https://twitter.com/andrikjsjs" target="_blank"><img
                class="logos"
                src="assets/pngegg.png"
                alt="AndrikJsjs"
                title="Twitter AndrikJsjs"></a>
                <div>
                    <p>andrik2604alexander@gmail.com</p>
                    <p class="autor">Creado por <strong><a href="curriculum.html" target="_blank">Andrik Ahumada</a>
                        </strong></p>
                </div>
          </div>
        </footer>
        <style>
            html{
                background-color: #F4EADF;
            }
            @font-face{
                font-family: Product-Sans;
                src: url(assets/Product\ Sans\ Regular.ttf);
            }
            header{
                background-color:#C1002B ;
                width: 90%;
                border-radius: 2%;
                padding: 10px 3% 10px 3%;
                margin: 10px 2% 0px 2%;  
                color: #F7F5F6;
            }
            #ques{
                background-color: #C1002B;
                color: #F7F5F6;
                text-align: center;
            }
            *{
                padding: 0%;
                margin: 0%;
                font-family: Product-Sans;
                text-shadow: 1px 1px 3px #ffa8ba;
            }
            article{
                padding: 0% 5% 2% 5%;
                font-size: 90%;

            }
            #imagen-yakult{
                width: 20%;
                box-shadow: none;
                padding: 0% 0% 0% 0%;
                margin: 0%;
            }
            label{
                font-size: 130%;
                padding: 0% 2% 0% 10%;
            }
            input{
                border: 3px solid #C1002B;
                border-radius: 15%;
                margin: 0% 0% 1% 0%;
                width: 5%;
                background-color: #F7F5F6;
                font-size: 100%;
                padding: 0% 0% 0% 1%;text-shadow: 1px 1px 3px #ffa8ba;
                box-shadow: 1px 1px 3px #ffa8ba;
                text-align: center;
                
            }
            #enviar{
                border: 3px solid #C1002B;
                border-radius: 5%;
                width: 90%;
                padding: 1% 0% 1% 0%;text-shadow: 1px 1px 3px #ffa8ba;
                box-shadow: 1px 1px 3px #ffa8ba;
                display: block;
                margin: 1% auto 1% auto;
            }
            h1{
                font-size: 2em;
            }
            p{
            padding-top: 10px;
            font-size: 20px;
            }
            img{
                float: right;
                margin: 2%;
                width: 300px;
                box-shadow: 10px 10px 20px #D84B5E;
                border-radius: 20px;
            }
            footer{
                text-align: center;
            }
            .logos {
                width: 50px;
                margin: 10px 5px 0px 5px;
                padding: 0px;
                display: inline;
                float: none;
                border-radius: 100%;
                box-shadow: 6px 6px 10px #D84B5E;
              }
              #contactanos{
                  padding: 0%;
              }
            .autor{
                padding-bottom: 15px;
            }
            a{
                color: #D84B5E ;
            }
            a:hover{
                color: #C1002B;
            }</style>
</body>
</html>