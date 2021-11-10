<!-- !inizializzazione  -->
<!-- creato progetto con ('composer create-project --prefer-dist laravel/laravel:^7.0 deliver-boo') -->
<!-- creato db 'deliver_db' e agganciato nel file env  -->
<!-- mod webpack processCssUrls -->
<!-- install 'composer require laravel/ui:^2.4' -->
<!-- installiamo vue --- auth 'php artisan ui vue --auth' -->
<!-- avviato npm install  -->
<!-- avviato npm run dev -->
<!-- ! migration -->
<!-- php artisan make:model Models/'NomeModello' - m per creare tutti i modelli e le migration delle tabelle madri -->
<!-- php artisan make:migration update_users_ table --table=users per aggiungere i dati alla tabella users già esistente -->
<!-- php artisan make:migration create_nome_tabponte_table per creare le migration delle tabelle ponti  -->
<!-- Inserite nei modelli interessati le relazioni 'many to many' per collegare la tabella ponte alle due tabelle madri -->
<!-- php artisan make:migration add_foreign_user_id_on_products_table --table=products per aggiungere la foreign key nelle tabelle deboli per le relazioni 'one to many' -->
<!-- ! seeder -->
<!-- in caso di problemi utilizzare il comando 'composer dumpautoload' e attendere il ricaricamento  -->
<!-- rifare il comando 'php artisan migrate:fresh --seed'  -->
<!--  andiamo a creare i seeder autocompilando i vari ciampi con i faker -->
<!-- per quanto riguarda le tabelle ponte andiamo a definire un legame 'faker' andando ad aggiunger la fk partendo dall' array degli id presenti nelle tabelle 'madri ' e aggiungendole random es:  for ($x = 0; $x < 10; $x++) {
                /* Attaching ingredient id to pivot table */
                $new_product->ingredients()->attach(Arr::random($ingredients_id));
}-->

<!-- ! rotte -->
<!-- Create rotte api, usare naming convention di Laravel e chiamare il nome della rotta con lo stesso nome del modello su cui andrò a lavorare-->

<!-- // Step da fare:  -->
<!--? 1. Users: view;  -->
<!--? 2. Category: inserire i dati nel db;  -->
<!--? 3. Ordini: view;  -->
<!--? 4. Prodotti: Crud + view;  -->
<!--? 5. Ingredienti; Crud + view;  -->
<!--? 6: Type: inserire i dati nel db; -->

|
|
|
|
|
||
|
|
|
|
|
||
|
|
|
|
|
||
|
|
|
|
|
||
|
|
|
|
|
||
|
|
|
|
|
||
|
|
|
|
|
||
|
|
|
|
|
||
|
|
|
|
|
||
|
|
|
|
|
||
|
|
|
|
|
||
|
|
|
|
|
||
|
|
|
|
|
||
|
|
|
|
|
||
|
|
|
|
|
||
|
|
|
|
|
||
|
|
|
|
|
||
|
|
|
|
|
||
|
|
|
|
|
||
|
|
|
|
|
||
|
|
|
|
|
|

<!--
DeliveBoo

Introduzione	2
Tipi di Utenti	2
Lista delle pagine	2
Requisiti Tecnici	3
(RT1) Client-side Validation	3
(RT2) Sistema di Pagamento	3
(RT3) Il sito è responsive	3
(RT4) La ricerca dei ristoranti avviene senza il refresh	3
Requisiti Funzionali	3
(RF1) Permettere ai ristoratori di registrarsi alla piattaforma	3
(RF2) Permettere ai ristoratori di aggiungere un piatto	4
(RF3) Permette ai visitatori di ricercare per tipologia di ristorante	4
(RF4) Permettere ai visitatori di vedere il menu di un ristorante	4
(RF5) Permettere ai UI di pagare l’ordinazione	5
(RF6) Permettere ai ristoratori di visualizzare il riepilogo degli ordini ricevuti	5
(RF7) Permettere ai ristoratori di visualizzare le statistiche degli ordini	5
Consigli CTO	5


Introduzione
DeliveBoo è una web app che permette di ordinare cibo a domicilio nella città di ***.

Permette agli utenti di cercare i loro cibi preferiti, preparati dai loro ristoranti fiducia. Tutto rimanendo comodamente sul divano di casa.

Tipi di Utenti
Definiamo i seguenti tipi di utente che possono utilizzare DeliveBoo:
Utente Interessato (UI): un utente non registrato che visita il sito
Utente Registrato (UR): un utente che ha effettuato la registrazione come ristoratore
Lista delle pagine

<!-- ?Homepage:
offre la possibilità di cliccare sulle tipologie di ristorante e senza il refresh della pagina ottenere una lista ristoranti con le tipologie di appartenenza sotto ogni nome.
<!-- ?Pagina Menù Ristoratore Pubblica:
permette di visualizzare il menù di un particolare ristoratore.
È possibile scegliere i cibi desiderati e relativa quantità per inserirli nel carrello.
Il carrello si popola con i cibi selezionati e le relative quantità.
<!-- ?Pagina carrello/checkout:
permette di modificare le quantità dei cibi e di procedere all’ordine.
È possibile acquistare solo da un ristoratore alla volta.
Tramite questo pannello è possibile pagare inserendo i dettagli della carta di credito.
<!-- ?Dashboard Utente Registrato:
permette la gestione dei propri dati e l’inserimento dei piatti disponibili
<!-- # (CRUD)Pagina Lista Piatti
Da qui è possibile accedere alla modifica e cancellazione dei propri piatti
I piatti non hanno categoria e si mostrano in ordine alfabetico. (possibilità di integrare ordinamento e categoria successivamente)
<!-- # (CRUD) Pagina Piatto
<!-- # (CRUD) pagina per l’inserimento del piatto singolo con descrizione e prezzo
<!-- # (CRUD) Pagina Lista Ordini Ricevuti
<!-- # (CRUD) Pagina Statistiche Ordini
permette di visualizzare le statistiche degli ordini.
Nello specifico i grafici mostrano il numero di ordini per mesi/anni e l’ammontare delle vendite

Requisiti Tecnici
(RT1) Client-side Validation
Tutti gli input inseriti dall’utente sono controllati client-side (oltre che server-side) per un controllo di veridicità (es. il prezzo di un piatto deve essere positivo).
(RT2) Sistema di Pagamento
Il sistema di pagamento utilizzato è Braintree: https://www.braintreepayments.com/
Il sistema permette agli sviluppatori di simulare pagamenti senza essere approvati formalmente e senza utilizzare vere carte di credito.
(RT3) Il sito è responsive
Il sito è correttamente visibile da desktop e da smartphone.
(RT4) La ricerca dei ristoranti avviene senza il refresh

Requisiti Funzionali
La piattaforma soddisfa i seguenti requisiti funzionali (RF) che vengono dettagliati nelle pagine successive:

(RF1) Permettere ai ristoratori di registrarsi alla piattaforma
(RF2) Permettere ai ristoratori di aggiungere un piatto
(RF3) Permette ai visitatori di ricercare per tipologia di ristorante
(RF4) Permettere ai visitatori di vedere il menu di un ristorante
(RF5) Permettere ai UI di pagare l’ordinazione
(RF6) Permettere ai ristoratori di visualizzare il riepilogo degli ordini ricevuti
(RF7) Permettere ai ristoratori di visualizzare le statistiche degli ordini


(RF1) Permettere ai ristoratori di registrarsi alla piattaforma
Visibilità: UI
Descrizione:
L’applicazione permette ai ristoratori di registrarsi alla piattaforma e creare un profilo.
Le informazioni che l’utente può inserire sono:
<!-- ! Email *
<!-- ! Password *
<!-- ! Nome Attività *
<!-- ! Indirizzo *
<!-- ! PIVA *
<!-- ! Uno o più tipologie*: italiano, internazionale, cinese, giapponese, messicano, indiano, pesce, carne, pizza...
Sono contrassegnati con * i dati obbligatori.


Email e password sono utilizzati dall’utente per fare il login alla piattaforma.
Non è previsto un pannello per modificare le informazioni inserite una volta registrato.
I form devono rispettare RT1


Risultato: Un nuovo utente viene creato nel sistema
Eccezioni: Esiste già nel sistema un utente con l’email inserita


(RF2) Permettere ai ristoratori di aggiungere un piatto
Visibilità: UR
Descrizione: Un ristoratore ha la possibilità di inserire uno o più piatti all’interno del sistema.
Per inserire un nuovo piatto vanno inserite le seguenti informazioni:
Nome piatto
Ingredienti/descrizione
Prezzo
visibile si/no


È possibile modificare le informazioni inserite
I form devono rispettare RT1.

Risultato: Un piatto è inserito nel sistema e le sue informazioni sono aggiornate
Eccezioni: /


(RF3) Permette ai visitatori di ricercare per tipologia di ristorante
Visibilità: UI / UR
Descrizione: Un utente è in grado di ricercare per una o più tipologie di ristorante
La ricerca dei ristoranti deve rispettare RT4

Risultato: Viene generata una lista di ristoranti che corrispondono alla ricerca
Eccezioni: /


(RF4) Permettere ai visitatori di vedere il menu di un ristorante
Visibilità: UI / UR
Descrizione: Selezionando un ristoratore appaiono tutti i dettagli disponibili riguardanti il ristorante e i piatti disponibili.
È possibile aggiungere piatti al carrello cliccando sui singoli prodotti.
Il carrello si visualizza in pagina e si aggiorna senza refresh.

Risultato: Viene visualizzata la pagina del menu
Eccezioni: /




(RF5) Permettere ai UI di pagare l’ordinazione
Visibilità: UI / UR
Descrizione: in questa pagina è possibile aggiornare il carrello e inserire i dati per la consegna e della carta di credito con cui processare il pagamento

Risultato: L’ordine viene effettuato e si viene inviati ad una pagina di avvenuto ordine e viene inviata una mail all’utente e al ristoratore
Eccezioni: Il sistema di pagamento non ha processato correttamente il pagamento / i dati della carta di credito non sono validi


(RF6) Permettere ai ristoratori di visualizzare il riepilogo degli ordini ricevuti
Visibilità: UR
Descrizione: Un ristoratore ha la possibilità di vedere il riepilogo degli ordini ricevuti, con i dati dell’utente che ha effettuato l’ordine.

Risultato: L'utente visualizza il riepilogo degli ordini ricevuti, ordinati in modo decrescente per data
Eccezioni: /


(RF7) Permettere ai ristoratori di visualizzare le statistiche degli ordini
Visibilità: UR
Descrizione: Un ristoratore ha la possibilità di vedere le statistiche degli ordini ricevuti

Risultato: L'utente visualizza le statistiche degli ordini ricevuti per mese/anno e l’ammontare delle vendite
Eccezioni: /








Consigli del CTO
Organizzazione
Non iniziare a scrivere subito codice: è importante leggere e rileggere bene il documento per avere un’idea chiara del progetto.

I RF sono in ordine di necessità e complessità: seguendo l’ordine si costruisce un’applicazione completa con funzionalità crescenti.
È essenziale però avere bene in mente la strada da seguire per non fare scelte iniziali che andranno totalmente cambiate successivamente

È importante che la fase di progettazione iniziale sia affrontata da tutto il team.
Durante questo step il team ragiona sull'implementazione delle feature (ad es. si analizzano i requisiti funzionali, si definisce la struttura del dato a DB, si disegnano i wireframe dei flussi applicativi etc.).

In seguito si suddivide l'operatività in task ben definite che potrebbero essere assegnate ai diversi membri in modo da parallelizzare lo sviluppo e procedere spediti (ad es. sistemare Model e Migrations, studiare come utilizzare API esterne e nuove librerie, implementare i layout per la parte visuale, ecc.).

Affinché il lavoro in team sia proficuo è però essenziale essere sempre aggiornati su tutti gli step, anche se non sviluppati in prima persona. A tale scopo è quindi necessario fissare diversi meeting giornalieri affinché ci si possa coordinare, eventualmente integrare le features completate nel branch master, o effettuare debugging.

Tecnologie da utilizzare
Non c’è alcun limite nelle tecnologie utilizzabili, purchè rispettino i requisiti.
Chiaramente la scelta più ovvia (e consigliata) è quella di usare Laravel e Vue.
Vue
È possibile, ma non indispensabile, usare i componenti di Vue.
Uno script Vue, come qualunque altro script JS, può essere caricato solo nelle pagine necessarie. È possibile quindi creare un file js per usare Vue in una determinata view blade.
Ricerca
Per soddisfare il fatto che non si deve avere un refresh della pagina della ricerca bisogna fare delle chiamate ajax.
Il metodo più utilizzato in questi casi è fare in modo che ogni cambiamento di input vada a modificare i campi utili alla ricerca nell’url (ad esempio: /ricerca?tipologia=cinese).
Dopo ogni cambiamento viene fatta una chiamata ajax con i parametri presenti nella URL.
Carrello (solo per DeliveBoo)
Le informazioni sui piatti aggiunti al carrello devono essere persistenti lato client anche al refresh o al cambio pagina. Per ottenere questa persistenza, esistono diverse tecnologie native del browser che si possono sfruttare.
Statistiche
Potete utilizzare https://www.chartjs.org/

 -->

 <!-- ? Tecnologie da andare a vedere -->
 <!-- Statistiche Potete utilizzare https://www.chartjs.org/  -->
 <!--Pagamento utilizzato è Braintree: https://www.braintreepayments.com/  -->
 <!-- Per ottenere latitudine e longitudine a partire da un indirizzo e allo stesso modo visualizzare il punto sulla mappa, è utilizzato TomTom: https://developer.tomtom.com/ -->
