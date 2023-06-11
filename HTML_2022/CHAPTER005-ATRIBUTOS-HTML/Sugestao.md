## Sugestão: Sempre use atributos em minúsculas

 * O padrão HTML não requer nomes de atributos em letras minúsculas.
 * O atributo title (e todos os outros atributos) podem ser escritos com letras maiúsculas ou minúsculas como **title** ou **TITLE**.
 * No entanto, o W3C **recomenda** atributos em minúsculas em HTML e **exige** atributos em minúsculas para tipos de documentos mais rígidos, como XHTML.
 * No W3Schools, sempre usamos nomes de atributos em letras minúsculas.

## Sugestão: Sempre cite os valores dos atributos

 * O padrão HTML não exige aspas em torno dos valores de atributo.
 * No entanto, o W3C recomenda citações em HTML e exige citações para tipos de documentos mais rígidos, como XHTML.
 
### Boa:

  ``` <a href="https://www.w3schools.com/html">Visit our HTML tutorial</a> ```

### Ruim:

    ``` <a href=https://www.w3schools.com/html>Visit our HTML tutorial</a> ```

 * Às vezes você tem que usar aspas. Este exemplo não exibirá o atributo title corretamente, pois contém um espaço:

 ``` <p title=About W3Schools> ```

 * Na W3Schools sempre usamos aspas em torno dos valores dos atributos.