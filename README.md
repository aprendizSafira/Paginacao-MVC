# Paginação no MVC

CONCEITO:

Total = 21 itens

5 itens por pagina

Quantidade de icones de enumeração vai ter = (21 / 5) = 4, 2 icones

4 paginas vão mostrar 5 postagens e a última  apenas 1 post.

OFFSET = começa do item 1;

OFFSET da pagina 2 = (5 * o número da pagina) - quantidade por pagina;

						(5 * 2) - 5 = 5

-views/home.php : Exibe os itens

-models/Itens.php : Faz a requisição no banco de dados

-controllers/homeController.php : Faz a instância da class itens e envia os dados para o home.php
