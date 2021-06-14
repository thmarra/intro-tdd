# Introdução a TDD

Código com exemplos do post "Introdução a  TDD" acessível em:

https://dev.to/thalimarra/introducao-ao-desenvolvimento-guiado-por-testes-tdd-42ed

## Docker
O docker-compose aqui presente já contempla o necessário para instalar as bibliotecas necessárias e executar os 
testes. Estão presentes as seguintes imagens:
- Composer 2.0: gerencia as dependências do projeto
- PHPUnit: imagem do PHP 8.0 com a chamada da biblioteca de testes

### Instalar dependências
1. Baixar o repositório e acessar a pasta
2. Executar o comando: `docker-compose run composer install`

### Executando os testes
```
docker-compose run phpunit tests --color
```
- Executar um único teste: `phpunit tests --color --filter nome_da_funcao`

### Remover projeto
```
docker-compose down
```
