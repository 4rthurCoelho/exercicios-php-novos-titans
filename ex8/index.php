
                        <!DOCTYPE html>
                        <html lang="pt-br">
                        <head>
                            <title>Exercicio-08</title>
                            <meta charset="utf-8">
                            <link rel="stylesheet" href="/css/style.css">
                            <link rel="stylesheet" href="/ex8/style.css">
                            <link
                            rel="stylesheet"
                            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
                        </head>
                        <body>
                        
                        <main class= "container">
                        
                            <a href="../index.php" id="voltar">Voltar</a>    

                            <h2>Exercício 8</h2>
                        
                            <p><br /> Adicione um número que o algoritmos vai ler e mostrar todos os número de 1 até ele e o seu produto :)<br /></p>
                        
                            <br />
                        
                            <form id="formulario" action="/ex8/index.php" method="post">
                                <div class="input-field">
                                    <label for="number">Número</label><br />
                                    <input type="number" name="value1" value="<?= $num ?>" id="valor1" autocomplete="off" placeholder="Adicione um numero!"/>
                                    <div class="underline"></div>
                                </div>
                                    <input type="submit" name="enviar" value="Enviar" class="enviar"/>	
                            </form>
                        
                            <?php
                        
                                $num = '';
                            
                                if(isset($_POST['value1'])) {
                            
                                    $num= $_POST['value1'];

                                    for ($a=1; $a <= $num; $a++) 

                                        echo "<div class='results'>$a<div>" . "";
 
                                }
                            ?>
                        
                        </main>
                        
                        </body>
                        </html>