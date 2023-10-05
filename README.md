# Para testar o programa usando o curl:

1. Ter instalado o git
2. Usar o git bash
3. Usar os seguintes comandos no git bash para os métodos:

## MÉTODO GET
``curl -H "Authorization: Bearer 651339e9b586a" localhost/api/usuarios/listar``

## MÉTODO POST 
``curl -X POST -H "Authorization: Bearer 651339e9b586a" localhost/api/usuarios/cadastrar -d '{"login": "(valor)","senha": "(valor)"}'``

## MÉTODO PUT 
``curl -i -X PUT -H "Authorization: Bearer 651339e9b586a" localhost/api/usuarios/atualizar/(id) -d '{"login": "(valor)","senha": "(valor)"}'``

## MÉTODO DELETE
``curl -i -X PUT -H "Authorization: Bearer 651339e9b586a" localhost/api/usuarios/atualizar/(id) -d '{"login": "(valor)","senha": "(valor)"}'``

nota: substitua os valores entre parentêses "()" para um valor sem parênteses. Também é possível substituír o link padrãoo "localhost/" se não estiver usando o xampp.

4. Criar o banco de dados usando o código do arquivo ``API-PHP.sql``
5. Para conectar com o banco de dados, verifique se os valores definidos em ``bootstrap.php`` correspondem com os valores do seu servidor. 
