# Tema Identidade de Governo para WordPress

IDG-WP é um tema para [WordPress](https://wordpress.org) que implementa a [Identidade Padrão de Comunicação Digital](http://www.portalpadrao.gov.br/) do governo federal.

A proposta deste projeto é oferecer para desenvolvedores um tema completo e genérico para que qualquer órgão da Administração Pública Federal possa utilizá-lo para construir um site ou portal.

Este projeto nasceu como tema para o site da [Secretaria Especial de Cultura](http://cultura.gov.br) do Ministerio da Cidadania.

## Estágio atual do projeto 

No momento estamos removendo algumas partes que estão com funcionalidades específicas para a Secretaria de Cultura e generalizando as configurações para que ele possa servir a qualquer órgão.

Assim que tivermos uma primeira versão, faremos uma pequena página com link para Download e começaremos a versionar o projeto.

## Funcionalidades 

* Cores personalizáveis
* Carrossel de destaques
* Página inicial modular
* Responsivo
* Agenda de autoridades/eventos
* Menus personalizáveis
* Rodapé personalizável

## Instalando e usando

Para utilizar este tema basta fazer o download deste repositório e colocar seu conteúdo dentro da pasta `wp-content/themes` da sua instalação WordPress.

## Desenvolvendo

Para montar um ambiente de desenvolvimento é necessário instalar o `npm` e o `gulp`.

Uma vez instalados:

Entre na pasta do tema e e instale as dependências:

```
npm install
```

Rode o gulp

```
gulp
```

É preciso rodar este comando sempre que for feita uma alteração em uma folha de estilo ou arquivo javascript para gerar os arquivos compilados. 

**Importante:** Para as folhas de estilo, utilizamos [SASS](https://sass-lang.com/). Nunca edite os arquivos compliados `.css`, edite aspenas os fontes em `assets/stylesheets/src`. Os arquivos `.js` seguem a mesma lógica e devem ser editados em `assets/js/src`.

## Sobre o projeto

Este projeto é desenvolvido atualmente pela equipe responsável pelo portal da [Secretaria Especial de Cultura](http://cultura.gov.br) do Ministério da Cidadania e bolsistas do projeto [Tainacan](https://tainacan.org), parceria entre o Instituto Brasileiro de Museus e a UFG.

Este projeto, ao menos por enquanto, **NÃO** é uma iniciativa de nenhuma das instituições citadas e estas não possuem qualquer responsabilidade sobre ele. 

Este tema é uma iniciativa dos técnicos envolvidos no desenvolvimento com a intenção de somar esforços e otimizar recursos para que outros órgãos possam se beneficiar e contribuir com este trabalho. 