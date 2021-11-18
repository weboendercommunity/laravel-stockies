# LARAVEL STOCKIES APPLICATION
stock management application, this application is built using framework Laravel

## Requirement
- PHP >= 7.4
- NPM LTS (Node.js)
- Composer

### Installation
- first clone this repo with command
  ``` bash
  $ git clone https://github.com/weboendercommunity/laravel-stockies.git
  ```

- then go into repo directory
  ``` bash
  $ cd laravel-stockies  
  ```

- install dependency, but if you dont have node.js and composer installed on your device please install it first
  ``` bash
  $ composer install
  $ npm install
  ```
  
- generate application key using command
  ``` bash
  $ php artisan key:generate
  ```

- migrate the  database
  ``` bash
  $ php artisan migrate
  ```

- then run in your browser`http://localhost:8000`

### Database documentation
- https://dbdocs.io/shevaathalla/MVC_Stockies