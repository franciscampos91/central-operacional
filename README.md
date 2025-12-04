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
├ Controller/ → Lógica dos controllers
├ Core/ → Núcleo do sistema (roteamento)
├ Model/ → Models e regras de negócio
├ Template/ → Template geral
└ View/ → Views do Twig organizadas por módulo

public/
├ css/
├ js/
└ img/

vendor/ → Dependências do Composer

index.php → Arquivo inicial do sistema
README.md → Documentação


## 👨‍💻 Autor

 Este projeto foi desenvolvido por Francis Campos. Você pode encontrar mais sobre mim e meu trabalho nos seguintes perfis:

- [GitHub](https://github.com/franciscampos91)
- [LinkedIn](https://www.linkedin.com/in/franciscampos91/)

Fique à vontade para seguir e conectar!
