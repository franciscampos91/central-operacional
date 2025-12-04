# CEOP – Central Operacional  
Sistema de Gestão Operacional e Gerenciamento de Escalas

O **CEOP (Central Operacional)** é uma aplicação web desenvolvida em **PHP (arquitetura MVC)** utilizando **Twig** como mecanismo de templates e **MySQL** como banco de dados.  
O objetivo do sistema é oferecer uma plataforma simples e eficiente para gerenciar **colaboradores, equipes, funções e escalas de serviço** em uma central operacional.

---

## 📌 Funcionalidades (em desenvolvimento)

### ✔ Gestão de Colaboradores
- Cadastro de colaboradores
- Busca automática no SIRH (futuro)
- Classificação por:
  - Operacional  
  - Supervisor  
  - Chefia  
- Status:
  - Ativo  
  - Inativando  
  - Agregado  
- Organização por equipes:
  - Adm  
  - A  
  - B  
  - C  
  - D  
  - E  

---

### ✔ Gestão Operacional
- Visualização do efetivo por equipe
- Cadastro de funções:
  - Chefe  
  - Adm  
  - Supervisor  
  - Atendente  
  - Despachador  

---

### ✔ Gestão de Escala (módulo em construção)
- Previsão de escala
- Escala diária
- Histórico de serviços
- Distribuição equilibrada dos colaboradores

---

## 🛠 Tecnologias Utilizadas

| Camada | Tecnologia |
|--------|------------|
| Linguagem | PHP 8+ |
| Estrutura | MVC personalizado |
| Template Engine | Twig |
| Banco de Dados | MySQL |
| Front-end | HTML, CSS, JavaScript |
| Gerenciador de Dependências | Composer |

---

## 📂 Estrutura de Pastas
app/
 ├─ Controller/      # Controladores do sistema (lógica de entrada)
 ├─ Core/            # Núcleo da aplicação, roteamento e carregamento
 ├─ Model/           # Models e regras de negócio
 ├─ Template/        # Template base principal (layout)
 └─ View/            # Arquivos Twig organizados por módulo (efetivo, escala, etc.)

public/
 ├─ css/             # Arquivos CSS
 ├─ js/              # Scripts JavaScript
 └─ img/             # Imagens e ícones do sistema

vendor/              # Dependências instaladas pelo Composer

index.php            # Arquivo inicial (bootstrap da aplicação)
README.md            # Documentação do projeto



## 👨‍💻 Autor

 Este projeto foi desenvolvido por Francis Campos. Você pode encontrar mais sobre mim e meu trabalho nos seguintes perfis:

- [GitHub](https://github.com/franciscampos91)
- [LinkedIn](https://www.linkedin.com/in/franciscampos91/)

Fique à vontade para seguir e conectar!
