:pacco: CONSEGNA
Creare un nuovo progetto Laravel per gestire un archivio di fumetti.

:uno: MILESTONE
Come sempre ripercorrete i passaggi per creare un nuovo progetto partendo dal nostro scaffold.
Procedete col setup di un nuovo database e avviate l'app.

:due: MILESTONE
Tramite gli appositi comandi artisan create: model, migration, seeder e resource controller.

:tre: MILESTONE
Iniziate a definire le prime operazioni CRUD con le relative view:
index() dove stampare la lista dei fumetti
show() dove mostrare il dettaglio di un singolo fumetto
create() dove mostrare un form per inserire i dati di un nuovo fumetto (es. nome, descrizione ecc..)
Per concludere gestite i link:
dall'header linkate al catalogo e al form di creazione
dal catalogo collegate ogni gioco alla sua pagina di dettaglio.

:avviso: Attenzione: create() dovrà restituirà una vista come gli altri metodi. Questa vista ha un form, inanimato, non funzionante. Non dovrete davvero salvare i dati sul db, solo mostare un form che renderemo funzionante domani. :occhiolino: