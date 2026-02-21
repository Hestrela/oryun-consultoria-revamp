# Oryun Consultoria - Revamp & AI Integration

Este projeto é uma refatoração completa (revamp) de uma plataforma web desenvolvida originalmente como Trabalho de Conclusão de Curso (TCC) do ensino técnico em Administração. O objetivo principal é modernizar a arquitetura do sistema utilizando **PHP** e integrar um **Agente de Inteligência Artificial** para otimizar processos de consultoria.

## 🚀 Tecnologias Utilizadas

* **Backend:** PHP com gestão de dependências via **Composer**.
* **Frontend:** HTML5, CSS3 e JavaScript.
* **Bibliotecas e Ferramentas:**
    * **phpdotenv:** Para gerenciamento seguro de variáveis de ambiente.
    * **AOS (Animate On Scroll):** Para animações fluidas de scroll na interface.
    * **FontAwesome:** Para iconografia profissional.

## ✨ Funcionalidades

* **Interface Moderna:** Design focado em experiência do usuário com efeitos de digitação e sliders interativos.
* **Arquitetura Componentizada:** Uso de componentes reutilizáveis para header e footer, facilitando a manutenção.
* **Segurança:** Configuração de arquivos `.env` e `.gitignore` para proteção de credenciais sensíveis.
* **Agente de IA (Em desenvolvimento):** Integração de uma camada de inteligência artificial para automação de consultas.

## 🛠️ Como Executar o Projeto

1.  **Clone o repositório:**
    ```bash
    git clone https://github.com/Hestrela/oryun-consultoria-revamp.git
    ```
2.  **Instale as dependências via Composer:**
    ```bash
    composer install
    ```
3.  **Configure o ambiente:**
    * Crie um arquivo `.env` na raiz do projeto com base nas suas necessidades de configuração.
4.  **Inicie o servidor local:**
    Você pode usar o servidor embutido do PHP:
    ```bash
    php -S localhost:8000
    ```

## 🏗️ Estrutura do Projeto

* `src/componentes/`: Arquivos PHP reutilizáveis da interface.
* `src/css/` e `src/js/`: Estilização e scripts de interatividade.
* `vendor/`: Dependências gerenciadas pelo Composer.

## 🚧 Status do Projeto

Atualmente, o projeto está em fase de **WIP (Work In Progress)**, com foco na implementação da lógica do Agente de IA e refinamento dos fluxos de backend.

---
Desenvolvido por **Heitor Estrela de Andrade**.
