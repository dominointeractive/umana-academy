# Che cos'è?

Semplice web-app che consuma i dati esposti dal nostro sito Drupal.

## Requisiti

Node JS versione 14 o superiore

## Installazione

`npm install`

## Configurazione

Apri il file `.env` e modifica la variabile `REACT_APP_API_BASE_PATH` con l'url del tuo sito Drupal (senza slash finale).

## Come la faccio partire

`npm start`

Se il browser non si apre in automatico, recarsi manualmente su http://localhost:3000.

## FAQ


D: Mi dice "Network error"

R: Hai abilitato il CORS nel file `services.yml` di Drupal?
