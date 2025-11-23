# R3D Comments (pkg_r3dcomments)

R3D Comments ist eine leichte, schnelle und datenschutzfreundliche Kommentar-Erweiterung für Joomla 5 und Joomla 6.  
Sie bietet grundlegende Kommentar-Funktionen ohne externe Dienste und ist vollständig in Joomla integrierbar.

Das Paket enthält:
- eine eigenständige Joomla-Komponente (`com_r3dcomments`)
- ein YOOtheme-fähiges Frontend-Modul (`mod_r3dcomments`)
- optional ein Content-Plugin (Tag- oder Kategorie-basiert)

Ideal für Webseiten, die einfache, übersichtliche und DSGVO-freundliche Kommentare benötigen.

---

## Funktionen

- **Joomla 5 & Joomla 6 kompatibel**
- **Zwei Ebenen** (Kommentar + Antwort)
- **Zitieren**: Markierter Kommentartext wird automatisch übernommen
- **Kategoriefilter** (Comments nur in definierten Kategorien)
- **YOOtheme Pro kompatibel** (Module, Dynamische Templates)
- **Frontend-Bearbeitung** (Autor kann seinen Kommentar editieren)
- **Benachrichtigung an Administratoren**
- **Veröffentlichungs-Workflow** (Kommentare optional erst nach Freigabe sichtbar)
- **Saubere Bootstrap/Uikit-freie Ausgabe für Template-Flexibilität**
- **Update-Server integriert** (für automatische Updates im Joomla-Backend)

---

## Systemanforderungen

- PHP 8.1 oder höher
- Joomla 5 oder Joomla 6
- MySQL/MariaDB
- Optional: YOOtheme Pro für Modul-Einbindung im Builder

---

## Installation

1. Laden Sie die aktuelle ZIP‐Datei aus dem Ordner `/04_dist/` herunter  
2. Im Joomla-Backend: *Erweiterungen → Verwalten → Installieren*  
3. Das Paket installiert:
   - Komponente  
   - Modul  
   - (optional) Plugin  

4. Aktivieren Sie das Modul **mod_r3dcomments**  
5. Platzieren Sie es:
   - entweder in einer Template-Position
   - oder in YOOtheme Pro als **Module Element**

Optional: Content-Plugin aktivieren und Tag/Kategorie konfigurieren.

---

## Verwendung

### Via Modul (empfohlen)
Das Modul ist vollständig YOOtheme-kompatibel.

Einfach das Modul **mod_r3dcomments** auf Artikelseiten anzeigen.

### Via Content-Plugin (optional)
Kommentare unter Artikeln automatisch anzeigen, basierend auf:

- Kategorien
- Tags
- Shortcode `{r3dcomments}`

---

## Update-Server

Das Paket enthält einen eigenen Update-Server Eintrag.  
Updates erscheinen automatisch im Joomla-Backend.

Der Update-Feed liegt unter:  
`https://www.r3d.de/joomlaextensions/updates/pkg_r3dcomments.xml`

---

## Downloads

Alle offiziellen Releases sind verfügbar im Ordner:

`/04_dist/`

oder über GitHub Releases.

---

## Entwicklung

### Repository-Struktur

pkg_r3dcomments/
├── 01_src/ # Installierbares Joomla-Package
├── 02_build/ # Build-Skripte (nicht Teil des Repos)
├── 03_docs/ # Dokumentation, Screenshots
├── 04_dist/ # Build-Artefakte (ZIPs)
└── 05_updates/ # Update-Feed-Generator

Die Ordner `02_build` und `05_updates` sind aus Sicherheitsgründen ausgeschlossen.

---

## Lizenz

GNU General Public License v2 oder später  
Weitere Informationen in der Datei `LICENSE`.

---

## Support

Website: https://r3d.de  
E-Mail: dev@r3d.de  
Autor: Richard Dvořák / R3D Internet Dienstleistungen

---

## Changelog

Siehe `CHANGELOG.md` im Repository.

