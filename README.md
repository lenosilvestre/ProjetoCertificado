# Sistema de Gerenciamento de Certificados de Eventos

Este é um sistema web desenvolvido em PHP para gerenciar certificados de eventos. Ele permite o cadastro de participantes, eventos, administradores, além de fornecer funcionalidades para pesquisa, alteração de senha e saída do sistema.

## Funcionalidades Principais

- **Cadastro de Participantes:** Permite adicionar novos participantes ao sistema.
- **Cadastro de Eventos:** Possibilita o registro de novos eventos, incluindo nome, data de início, carga horária, descrição e observações.
- **Cadastro de Administradores:** Permite o registro de novos administradores do sistema.
- **Pesquisa por Participantes:** Permite buscar por participantes cadastrados no sistema.
- **Alteração de Senha:** Oferece a funcionalidade de alterar a senha do administrador.
- **Saída do Sistema:** Permite ao usuário fazer logout do sistema.

## Estrutura do Projeto

O projeto está estruturado da seguinte forma:

- **Arquivos PHP:** Contêm as páginas e scripts PHP responsáveis pela lógica do sistema.
- **Arquivos CSS:** Arquivos de estilo para a interface do usuário.
- **Banco de Dados:** Utiliza um banco de dados MySQL para armazenar informações sobre participantes, eventos, certificados e usuários.

## Pré-requisitos

- Servidor web (por exemplo, Apache) configurado com suporte ao PHP.
- Banco de dados MySQL configurado e acessível pelo sistema.

## Instalação

1. Clone este repositório para o seu ambiente local.
2. Importe o script SQL fornecido (`certificadodb.sql`) para criar o banco de dados e suas tabelas.
3. Configure as credenciais do banco de dados no arquivo `banco.php`.
4. Inicie o servidor web e certifique-se de que o PHP esteja configurado corretamente.
5. Acesse o sistema através do navegador e comece a gerenciar certificados de eventos.

## Credenciais Padrão

Por padrão, o sistema vem com um usuário administrador pré-configurado:

- **Nome de usuário:** admin
- **Senha:** admin (armazenada como hash MD5)
