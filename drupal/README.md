# Installazione

1) `composer install` ([Composer](https://getcomposer.org/) deve essere installato!)
2) Estrai `database/database.zip` in `database.sql`
3) Con phpMyAdmin crea il database `<NOME DATABASE>` con collation `utf8mb4_general_ci`
4) Sempre con phpMyAdmin seleziona il database `<NOME DATABASE>` e importa il file `database.sql` e aspetta qualche minuto
5) Modifica il file `web/sites/default/settings.local.php` con i parametri di connessione al tuo database
5) Happy Drupalling! 💧
