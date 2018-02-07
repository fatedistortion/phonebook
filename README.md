**Deployment Guide**

*Project was developed in Symfony 3.4 using Linux.*

Initial requirements for running locally:
- PHP >= 5.5.9
- PHP extensions: PDO php-mysql and php-xml.
- MySQL server.
- Composer.

----------
**Install**
There are two ways for obtaining the project's code.
- *Option A* – Pulling code from github. (`git clone https://github.com/fatedistortion/phonebook.git`).
- *Option B* – Using code in zip file.

 1. Initialize database by running app/config/migrations/init.sql on the local MySQL DB.
 2. Cd into the project directory.
 3. Run `composer install`.
 4. When prompted for database information, use the values database_port = 3306,
 database_name = phonebook, database_user = phonebook, and database_password = ph0n3b00k.
 Alternatively, these can be directly edited in `app/config/parameters.yml` file. The rest of the prompts can be defaulted.
 5. Run `php bin/console server:run`.
 6. Open browser and type in URL field -> http://127.0.0.1:8000

----------

**Troubleshooting**
- Verify all initial requirements are met and composer installs project successfully.
- If any deployment issues arise, symfony requirements can be verified by running inside the project directory -> `php bin/symfony_requirements`.
- Make sure the database connection parameters are correct and match what the `init.sql` file has.
- If all else fails, there's a deployed copy of the project that can be found in https://phonebook-psl.herokuapp.com/
