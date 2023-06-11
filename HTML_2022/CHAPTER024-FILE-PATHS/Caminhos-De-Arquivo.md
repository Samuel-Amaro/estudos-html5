# Caminhos de Arquivo

* Um caminho de arquivo descreve a localização de um arquivo na estrutura de pastas de um site.

## Exemplos de caminho de arquivo

|**Caminho**|**Description**|
 :---------|:-------------:|
 ```<img src="picture.jpg">``` |O arquivo "picture.jpg" está localizado na mesma pasta da página atual|
```<img src="images/picture.jpg">```| O arquivo "picture.jpg" está localizado na pasta de imagens na pasta atual|
 ```<img src="/images/picture.jpg">```|O arquivo "picture.jpg" está localizado na pasta de imagens na raiz da web atual|
 ```<img src="../picture.jpg">``` |O arquivo "picture.jpg" está localizado na pasta um nível acima da pasta atual|

* Um caminho de arquivo descreve a localização de um arquivo na estrutura de pastas de um site.

* Os caminhos de arquivo são usados ​​ao vincular a arquivos externos, como:

    * paginas web
    * Imagens
    * Folhas de estilo
    * JavaScript

## Melhor prática

* É uma prática recomendada usar caminhos de arquivo relativos (se possível).

* Ao usar caminhos de arquivo relativos, suas páginas da web não serão vinculadas ao seu URL base atual. Todos os links funcionarão em seu próprio computador (localhost), bem como em seu domínio público atual e em seus futuros domínios públicos.
