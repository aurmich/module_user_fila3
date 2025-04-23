# Risoluzione Conflitti in BaseUser.php

## Conflitto nel metodo `notifications()`

### Problema identificato
Il file `BaseUser.php` conteneva un conflitto nel metodo `notifications()` con diverse implementazioni:
1. Una versione con tipizzazione stretta: `public function notifications(): MorphMany`
2. Una versione senza tipizzazione: `public function notifications()`

### Soluzione adottata
È stata scelta la versione con tipizzazione stretta `public function notifications(): MorphMany` per garantire:
- Conformità con i principi di type safety di PHP 8.x
- Compatibilità con l'analisi statica di PHPStan
- Consistenza con gli altri metodi della classe che utilizzano tipizzazione di ritorno

### Giustificazione tecnica
La tipizzazione stretta dei metodi aiuta a prevenire errori a runtime fornendo informazioni chiare sul tipo di dato restituito. Questo è particolarmente importante per i metodi di relazione in Eloquent, dove il tipo restituito determina il comportamento delle query.

L'annotazione `@phpstan-ignore return.type` è stata comunque mantenuta poiché, nonostante la tipizzazione corretta, PHPStan potrebbe rilevare incompatibilità con alcune versioni di Laravel. 
