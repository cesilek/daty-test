daty-test
=========

popis kódu: Připravený kód simuluje způsob jakým ukládáme zdroje v DATY. StatistickeUdajePresenter.php je jednoduchý presenter, který se stará o průběh zpracování dat. Nejdříve se vytvoří source, který má za úkol stáhnout data ze zdroje (nejlépe asi CURL) a předat je mapperu. Mapper musí zdroj rozparsovat a navázat na strukturu databáze. Mapper pak data pomocí metod getEdges a geNodes předá synchronizátoru, který je vypíše (normálně by je uložil do db).

struktura dat: Data jsou rozděleny v databázi do 3 nejdůležitějších tabulek: edge, node, attribute (ve složce Graph jsou pak stejnojmeně pojmenované třídy). Nodes jsou základní entity, jako např. ekonoicky_subjekt, osoba, nebo třeba adresa. Na node se pak vážou attributy, např. název společnosti, jméno, datum narození, nebo ulice. Edges pak představují vazby mezi entitami. Např. node osoba může mít vazbu (edge) typu jednatel s ekonomickým subjektem. Stejně tak edges můžou mít i atributy, např. vazba typu společník, má běžně atribut výše vkladu.

úkol: Stáhnout data ze statistických údajů na ARESu a napapovat je na naší strukturu dat. Vstupní data jsou zde: http://wwwinfo.mfcr.cz/ares/ares_xml.html.cz (výpis dat ze statistického registru RES). Zpracovat je potřeba ičo, nazev firmy, NACE. Jakou samostatný node pak vytvoři adresu sídla (k ní attributy ulice, město a č.p.) a propojit pomocí edge s ekonomckým subjektem. 
