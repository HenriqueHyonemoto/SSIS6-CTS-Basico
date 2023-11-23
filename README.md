# Executando: 
· Crie uma pasta chamada ADS diretamente na pasta do XAMPP -> (\XAMPP\htdocs\ADS) <br>
· Clone/Pull o repositorio dentro dela <br>
· Abra *localhost/ADS* no seu navegador <br>

# Respostas
## 01 (localhost/ADS/)->indexx.php
![image](https://github.com/HenriqueHyonemoto/SSIS6-CTS-Basico/assets/91375748/7c6e61c6-8536-4fd9-b626-9478d545fe48) <br>
> [!NOTE]
> Primeiro: HHyonemoto <br>
> Prontuario: VP123456 <br>

## 02 (localhost/ADS/)->0.php
![image](https://github.com/HenriqueHyonemoto/SSIS6-CTS-Basico/assets/91375748/c6af3fc8-fb03-4395-97f0-af27a086ba20) <br>

· Pesquisar por HASH decode <br>
![image](https://github.com/HenriqueHyonemoto/SSIS6-CTS-Basico/assets/91375748/64a2a3ed-a0fc-4a46-ad97-60d57166f60c) <br>

> [!NOTE]
> Senha: 12$eqd&;asd990- <br>
*é necessario digitar no campo <br>

## 03  (localhost/ADS/)->1.php
· Dando CTRL + A na pagina, é possivel ver um texto "Prova de Segurança! Siga para a pagina valendoo.php" <br>
![image](https://github.com/HenriqueHyonemoto/SSIS6-CTS-Basico/assets/91375748/9a8750c0-b099-4ef0-88c0-1b64e7babcc0) <br>


· Porém, no codigo fonte, o href esta vazio, o que impossibilita de levar para a proxima pagina <br>
![image](https://github.com/HenriqueHyonemoto/SSIS6-CTS-Basico/assets/91375748/7b683f3d-a44d-494a-a294-7e53a30ce2f1) <br>


· logo passamos pra href = "valendoo.php" 

> [!NOTE]
> ![image](https://github.com/HenriqueHyonemoto/SSIS6-CTS-Basico/assets/91375748/849126d9-6b96-425f-9ec9-1bbf6b686b78) <br>

· Clicamos nele
> ![image](https://github.com/HenriqueHyonemoto/SSIS6-CTS-Basico/assets/91375748/86273506-451f-4464-afe8-975d87dd51be) <br>

## 04 (localhost/ADS/)->valendoo.php   
· Codigo fonte fala sobre algum arquivo de leitura <br>
![image](https://github.com/HenriqueHyonemoto/SSIS6-CTS-Basico/assets/91375748/b7ee5e7a-9e33-4799-88d9-c8500fc4d111) <br>

· Descobrimos que as imagens estão em uma pasta chamada /pictures/ <br>
![image](https://github.com/HenriqueHyonemoto/SSIS6-CTS-Basico/assets/91375748/baa3d55c-e600-4ec5-bcc2-815831135187) <br>
· Colocamos *localhost/ADS/pictures/* na URL e encontramos varias imagens <br>
![image](https://github.com/HenriqueHyonemoto/SSIS6-CTS-Basico/assets/91375748/28ce7226-8c43-4590-85ff-123f36ddd6de) <br>
· imagem.png contém <br>
![image](https://github.com/HenriqueHyonemoto/SSIS6-CTS-Basico/assets/91375748/0d4ed7bf-e8a6-4bcf-acb4-9d10f32113d3) <br>

· Coloca o nome da pagina na URL <br>
> [!NOTE] 
> localhost/ADS/pictures/dificultando.php <br>

## 05 (localhost/ADS/dificultando.php)   
![image](https://github.com/HenriqueHyonemoto/SSIS6-CTS-Basico/assets/91375748/b7b3900c-fac8-456a-92a5-2370488ef796) <br>

· Este nivel diz que é necessario chamar o professor pra poder completar a fase <br>

· Troquei o codigo original, aqui por 4 (pois esse comando conta o lugar que a palavra ta na url, os anteriores estavam 4, porém esse estava 5, o que necessitaria de dificultando.php estar entro de mais uma pasta ao invés de ADS (Ex ADS/PastaNova/dificultando.php).<br>
![image](https://github.com/HenriqueHyonemoto/SSIS6-CTS-Basico/assets/91375748/649c93a3-192e-4c74-841b-fc5bbcad4172) <br>
· Digite a senha e clique no botão normalmente <br>
> [!NOTE] 
> Senha: VP123456 <br>
## 06 (localhost/ADS/dificultando-nivel.php)
![image](https://github.com/HenriqueHyonemoto/SSIS6-CTS-Basico/assets/91375748/9c0fb9ad-7d61-410a-a44f-1a95fd551f17)<br>
· No arquivo logo.psd é encontrado uma camada chamada:
![image](https://github.com/HenriqueHyonemoto/SSIS6-CTS-Basico/assets/91375748/9d7cde39-bbdf-497b-85e7-d28a15753af9)<br>

![image](https://github.com/HenriqueHyonemoto/SSIS6-CTS-Basico/assets/91375748/b07669bb-4fcc-4e16-a1bc-2bb4487f8b0b) <br>

> [!NOTE]
> Login: SSIS <br>
> Senha: 2023 <br>

## 07 (localhost/ADS/quasela.php) 

· Ele pede mais uma senha <br>

![image](https://github.com/HenriqueHyonemoto/SSIS6-CTS-Basico/assets/91375748/c1b5696c-9738-44c5-a8e7-9730929cf8f7)

Inspecionar o elemento com CTRL + U assim que entrar na pagina, se der erro, confirmar envio de formulario <br>

![image](https://github.com/HenriqueHyonemoto/SSIS6-CTS-Basico/assets/91375748/3340a310-0d57-4f40-bbf9-e7b81703ea86) <br>

> [!IMPORTANT] 
> Senha: seja-rapido <br>

De onde?

## 08 (localhost/ADS/desafio/seja-rapido.php)
· Codigo fonte fala sobre pressionar teclas, testei todas, mas nenhuma funcionou
![image](https://github.com/HenriqueHyonemoto/SSIS6-CTS-Basico/assets/91375748/03dea725-f6bb-41b2-98bb-a2d876df33f3)

> [!WARNING] 
> ???  <br>

## 09 (localhost/ADS/fasefinal.php)

![image](https://github.com/HenriqueHyonemoto/SSIS6-CTS-Basico/assets/91375748/a8810d42-e434-438a-b94b-1edaf17bf39d)

· Clicar no botão leva para uma pagina externa:

![image](https://github.com/HenriqueHyonemoto/SSIS6-CTS-Basico/assets/91375748/58ec0093-9300-4415-8c77-91d1a1ecc39a)

> [!WARNING] 
> ???  <br>

## 10 ??? (overthewire.org/wargames/bandit/)???

???

> [!WARNING] 
> ???  <br>
