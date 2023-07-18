Nesta aplicação foi utilizado um banco de dados mysql, portanto inicialmente crie um banco de dados com o nome "cadastro_produtos"
Após a clonagem da aplicação, copie os dados do .env.example em outro arquivo com o nome de .env

Abra um terminal e digite os seguintes comandos:
1 - Composer install
2 - php artisan migrate:fresh --seed 
3 - php artisan key:generate
4 - npm install 

Agora abra 2 terminais diferentes, em um deles digite "php artisan serve" e no outro "npm run dev"

para logar na aplicação utilize o email: teste@teste.com com a senha 123456789
