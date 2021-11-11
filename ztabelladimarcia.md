# Step da implementare

### `Sezione guest`
#### Cosa richiede il Brief:
---
- Permette ai visitatori di ricercare per tipologia di ristorante;
- Permettere ai visitatori di vedere il menu di un ristorante;
- Permettere ai UI di pagare l’ordinazione;
- Permettere ai ristoratori di visualizzare il riepilogo degli ordini ricevuti;
- Permettere ai ristoratori di visualizzare le statistiche degli ordini;	


#### Pagine da creare:
---
1. `Home page:` 
- Filtro per categoria: visualizzare tutti i ristoranti suddivisi per categoria 
- Bottone per accetere a tutti i ristoranti
- Griglia con ristoranti casuali più importanti
- Login ristoratori

2. `Lista ristoranti:` dopo click bottone -> all'interno vediamo tramite paginate 20 per pagina;

2. `Lista prodotti del ristorante scelto:` mostriamo tutti i prodotti del ristorante (con + per selezionare il prodotto) + carrello simbolino in alto a dx + carrello lato pagina con i prodotti selezionati;

2. `Carrello:` riepilogo dei prodotti scelti dall'utente con la relativa quantità + form per procedere all'ordine con i dati dell'utente (da inserire anche dati lato frontend per raccogliere a cazzo i dati del pagamento);

PS: nella guest solo la pagina 'home' sarà creata con Vue, le altre tutte con Laravel.

### Carrello/ordine:
----
1. Pagina con rotta laravel collegata tramite form anche alla parte admin