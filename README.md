# backEnd-posts-and-comments
<h1>Configuraçes iniciais</h1>
<p>
    Para iniciar o projeto e necessário ter o composer instalado
    <br/>
    Agora dentro da pasta raiz do projeto e necesário colocar as variaveis de anbiente para coneção com o banco de dados

exmeplo.
    
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=root123

No exemplo acima a aplicação tentará fazer acesso ao database laravel, então o database deverá ter sido criado
    
   Depois de fazer esses passos e hora de baixar as dependencias do projeto usando o comando 
   ```
        composer install
   ```

´É muito importante que o banco de dados esteja criado para que a aplicação possa se comunicar com o banco.
<br/><br/>
    <h3> Criando as tabelas no banco de dados</h3>
    Para criar as tabelas no banco de dados basta rodar o comando 
 ``` 
    php artisan migrate
```  
  <h3>Aplicação</h3>
  <p>Aaplicação deverá acessar a porta 8000 </P>
  
  ```
   php artisan serve
  ```
</p>

  <h3>Front end</h3>
  O front end Feito em React se encontra no link a baixo.

  <a href="https://github.com/thayronFeitosa/frontEnd-posts-and-comments">Front end</a>
  


