
- Controller für jede Seite
- DB-Klassen
  - Validierung der Eingabe


### Generischer Programmablauf POST Request
- Eingabewerte überprüfen
- Templater-Klasse lädt Query-Datei, lässt Werte einfügen, validert, ob alle Werte drinnen sind, führt die Query mit einer db-verbindung aus, und setzt es in eine entitätsklasse ein
  - dependency injection: dateiname, db-verbindung, entitätsklasse
- Falls GET: Html für entitätsklasse unter dem Programm
- Falls POST: Redirect zu GET-Getenstücksseite
