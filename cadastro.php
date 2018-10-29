<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="theme-color" content="#000000">
    <link rel="manifest" href="/manifest.json">
    <link rel="shortcut icon" href="/icon.png">
    <title>LR7 Software - Cadastrar</title>
    <link href="css/main.fbca519a.css" rel="stylesheet">
</head>

<body>
    <div id="pwa-havaianas">
        <section class="cadastro-clientes">
            <div class="btnVoltar">
                <a href="#" onclick="goBack()"><button class="btn"><i class="fas fa-arrow-left"></i><span class="buttonClass"></span></button></a>
            </div>
            <div class="content">
                <div class="header"><img src="img/logo.327dbfa9.png" class="App-logo" alt="logo">
                    <h2></h2></div>
                <form class="input" action="insert.php" method="POST">
                    <label for="input">Nome</label>
                    <input type="text" class="form-control" placeholder="Digite nome e sobrenome" value="" name="name">
                </div>
                <div class="input">
                    <label for="input">Cel.</label>
                    <input type="text" class="form-control" maxlength="15" placeholder="Digite o numero de celular" value="" name="cellphone">
                </div>
                <div class="genre">
                    <p class="tit">Sexo:</p>
                    <div class="input-radio">
                        <section>
                            <label>M</label>
                            <input type="radio" name="gender" value="m">
                        </section>
                        <section>
                            <label>F</label>
                            <input type="radio" name="gender" value="f">
                        </section>
                    </div>
                </div>
                <div class="birthday">
                    <div class="input">
                        <label for="input">Aniversário</label>
                        <input type="text" class="form-control" maxlength="10" placeholder="Dia / Mês / Ano" value="" name="birthday">
                    </div>
                </div>
                <div class="blouse">
                    <p class="tit">Blusa:</p>
                    <div class="input-radio">
                        <section>
                            <label>PP</label>
                            <input type="radio" name="blouse" value="pp">
                        </section>
                        <section>
                            <label>P</label>
                            <input type="radio" name="blouse" value="p">
                        </section>
                        <section>
                            <label>M</label>
                            <input type="radio" name="blouse" value="m">
                        </section>
                        <section>
                            <label>G</label>
                            <input type="radio" name="blouse" value="g">
                        </section>
                        <section>
                            <label>GG</label>
                            <input type="radio" name="blouse" value="gg">
                        </section>
                    </div>
                </div>
                <div class="pants">
                    <p class="tit">Calças</p>
                    <div class="input-radio">
                        <section>
                            <label>PP</label>
                            <input type="radio" name="pants" value="pp">
                        </section>
                        <section>
                            <label>P</label>
                            <input type="radio" name="pants" value="p">
                        </section>
                        <section>
                            <label>M</label>
                            <input type="radio" name="pants" value="m">
                        </section>
                        <section>
                            <label>G</label>
                            <input type="radio" name="pants" value="g">
                        </section>
                        <section>
                            <label>GG</label>
                            <input type="radio" name="pants" value="gg">
                        </section>
                    </div>
                </div>
                <div class="pants">
                    <p class="tit">Top</p>
                    <div class="input-radio">
                        <section>
                            <label>PP</label>
                            <input type="radio" name="top" value="pp">
                        </section>
                        <section>
                            <label>P</label>
                            <input type="radio" name="top" value="p">
                        </section>
                        <section>
                            <label>M</label>
                            <input type="radio" name="top" value="m">
                        </section>
                        <section>
                            <label>G</label>
                            <input type="radio" name="top" value="g">
                        </section>
                        <section>
                            <label>GG</label>
                            <input type="radio" name="top" value="gg">
                        </section>
                    </div>
                </div>
                <div class="pants">
                    <p class="tit tit_biquini">Biquíni Bottom</p>
                    <div class="input-radio">
                        <section>
                            <label>PP</label>
                            <input type="radio" name="biquinitop" value="pp">
                        </section>
                        <section>
                            <label>P</label> 
                            <input type="radio" name="biquinitop" value="p">
                        </section>
                        <section>
                            <label>M</label>
                            <input type="radio" name="biquinitop" value="m">
                        </section>
                        <section>
                            <label>G</label>
                            <input type="radio" name="biquinitop" value="g">
                        </section>
                        <section>
                            <label>GG</label>
                            <input type="radio" name="biquinitop" value="gg">
                        </section>
                    </div>
                </div>
                <div class="shoes">
                    <p class="tit">Calçados:</p>
                    <div class="input-radio">
                        <section>
                            <label>33/34</label>
                            <input type="radio" name="shoes" value="33/34">
                        </section>
                        <section>
                            <label>35/36</label>
                            <input type="radio" name="shoes" value="35/36">
                        </section>
                        <section>
                            <label>37/38</label>
                            <input type="radio" name="shoes" value="37/38">
                        </section>
                        <section>
                            <label>39/40</label>
                            <input type="radio" name="shoes" value="39/40">
                        </section>
                        <section>
                            <label>41/42</label>
                            <input type="radio" name="shoes" value="41/42">
                        </section>
                        <section>
                            <label>43/44</label>
                            <input type="radio" name="shoes" value="43/44">
                        </section>
                        <section>
                            <label>45/45</label>
                            <input type="radio" name="shoes" value="45/45">
                        </section>
                    </div>
                <div class="obs">
                    <div class="input">
                        <label for="input">Obs</label>
                        <input type="text" class="form-control" value="" name="obs">
                    </div>
                </div>
                <div class="cadastrar">
                    
                    <button type="submit" class="btn"><i class="fas fa-arrow-circle-right"></i><span class="buttonClass">Cadastrar</span></button>
                </div>
                </form>
            </div>
        </section>
    </div>
    	<script>
    	function goBack() {
    	    window.history.go(-1);
    	}
        </script>
</body>

</html>