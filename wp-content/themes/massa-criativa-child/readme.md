# Massa Criativa Child (Hello Elementor)

Child theme minimalista para acelerar a implementação no Elementor com tokens de design, utilitários e JS/CSS prontos.

## Requisitos
- WordPress 6.x
- **Hello Elementor** (tema pai) e **Elementor + Elementor Pro**
- PHP 8.1+

## Instalação
1. Em **Aparência > Temas**, instale/ative **Hello Elementor**.
2. Envie e ative **massa-criativa-child** (zip).
3. Em **Elementor > Configurações > Experimentos**, deixe Containers **Ativado** (se seu layout usa containers).
4. Em **Elementor > Ferramentas > Regenerar CSS** após ativar o tema.
5. Crie o **Header** e **Footer** no **Theme Builder** aplicando as classes utilitárias:
   - Header wrapper: `.mc-header mc-container`
   - Logo claro: `.mc-logo--light`; Logo escuro: `.mc-logo--dark`
   - Nav: `.mc-nav` e atributo `data-mc-nav`
   - Botão hamburguer: atributo `data-mc-toggle`
6. Seções:
   - Hero: `.section section--hero`
   - Seções comuns: `.section`
   - Seção escura "Por que escolher": `.section section--dark`
   - Grids: `.grid grid-3` ou `.grid grid-2` conforme o Figma
7. Defina a constante **MC_GTM_ID** no `wp-config.php` para ativar o GTM:
   ```php
   define('MC_GTM_ID', 'GTM-XXXXXXX');
   ```

## Dicas de Performance
- Converter imagens para WebP/AVIF, usar 2x para retina onde necessário.
- Em **Elementor > Experimentos**: manter carregamento otimizado e melhorias de DOM ativas.
- Se usar SiteGround, habilitar **SG Optimizer** (caching + minify, exceto concatenar JS do Elementor).

## Estrutura
- `assets/css/global.css` – tokens, utilitários e componentes base.
- `assets/js/site.js` – sticky header, menu mobile e âncoras suaves.
- `inc/performance.php` – micro-otimizações.
- `inc/security.php` – remove versão e query strings.