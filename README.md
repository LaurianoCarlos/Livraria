# Livro App API

A Livro App API é uma API RESTful para gerenciar uma lista de livros. A API permite que os usuários se cadastrem, façam login e adicionem, atualizem, excluam e visualizem livros em sua lista pessoal.

## Instalação

Para instalar a API, siga as seguintes etapas:

1. Clone o repositório para o seu computador
2. Execute `composer install` para instalar as dependências do projeto
3. Crie um arquivo `.env` na raiz do projeto e configure as variáveis de ambiente necessárias (como as informações do banco de dados)
4. Execute `php artisan migrate` para criar as tabelas do banco de dados
5. Execute `php artisan serve` para iniciar o servidor de desenvolvimento

## Uso

Para usar a API, você pode fazer solicitações HTTP para as rotas disponíveis. A documentação completa da API está disponível em `/docs`, que é gerada automaticamente usando o pacote `L5 Swagger`.

### Endpoints Disponíveis

- `POST /api/register` - Registra um novo usuário
- `POST /api/login` - Autentica um usuário e retorna um token de acesso
- `GET /api/livros` - Retorna uma lista dos livros do usuário autenticado
- `POST /api/livros` - Adiciona um novo livro à lista do usuário autenticado
- `PUT /api/livros/{id}` - Atualiza um livro existente na lista do usuário autenticado
- `DELETE /api/livros/{id}` - Exclui um livro existente da lista do usuário autenticado

## Contribuição

Se você deseja contribuir para o projeto, sinta-se à vontade para abrir uma issue ou enviar uma pull request. Certifique-se de seguir as diretrizes de contribuição antes de enviar sua solicitação.

## Licença

Este projeto está licenciado sob a Licença MIT. Veja o arquivo `LICENSE` para obter mais detalhes.
