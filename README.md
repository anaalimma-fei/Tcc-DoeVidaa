# VivaSangue

Projeto de TCC — Técnico em Desenvolvimento de Sistemas.

O VivaSangue é uma plataforma web para facilitar o acesso a informações sobre doação de sangue, campanhas e locais oficiais.

## Tecnologias
- HTML5
- CSS3
- JavaScript
- PHP
- MySQL

## Estrutura
- `index.php` — página inicial
- `onde-doar.php` — locais de doação
- `campanhas.php` — campanhas
- `calendario.php` — calendário
- `como-doar.php` — conteúdo educativo
- `tipos-sanguineos.php` — tipos sanguíneos
- `faq.php` — perguntas frequentes
- `admin/` — área administrativa
- `api/` — endpoints PHP
- `config/` — conexão/configurações
- `database/` — banco MySQL

## Como executar
1. Instale XAMPP, WAMP ou outro servidor Apache + PHP + MySQL.
2. Coloque a pasta `VivaSangue` dentro de `htdocs`.
3. Crie o banco executando `database/vivasangue.sql` no MySQL/phpMyAdmin.
4. Confira os dados de conexão em `config/database.php`.
5. Acesse `http://localhost/VivaSangue/`.

## Segurança
O exemplo administrativo usa `password_hash`, prepared statements, validação básica, sessão e controle de acesso.

## Dados de demonstração
As campanhas e instituições presentes no SQL são fictícias e estão marcadas como demonstração. Para uso real, os dados devem ser substituídos/confirmados com instituições oficiais.

> O sistema não determina se uma pessoa está apta ou inapta a doar. A avaliação é realizada pela equipe de saúde do local de doação.
