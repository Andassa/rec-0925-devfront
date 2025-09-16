# Test technique — Dev Front

Ce README sert de **tutoriel pour exécuter le test technique**, et documente les **améliorations de design** effectuées sur le projet Laravel + Tailwind CSS.

🔗 **Maquettes Adobe XD** : [Lien vers la maquette](https://xd.adobe.com/view/47f5bba9-a512-492c-85c6-d4fc4ddebc60-12a6/)

---

## 1️⃣ Objectif du test
- Reproduire fidèlement l’interface fournie (**Pixel Perfect**).  
- Ajuster **alignements, hiérarchie visuelle et rythme vertical** pour obtenir une **vue harmonisée**.  
- Documenter les **modifications et arbitrages** dans ce README.  

> ⚠️ Le projet est **en cours de refactoring**. Tous les composants sont déjà créés et organisés dans l’architecture Laravel, mais faute de temps, la totalité des pages n’a pas été finalisée. Je reste motivé pour poursuivre l’évolution de l’architecture et compléter le projet.

---

## 2️⃣ Stack & périmètre
- **HTML + Blade** (Laravel).  
- **Tailwind CSS** pour le style (déjà configuré via Vite).  
- Pages **statiques**, **aucune base de données nécessaire pour l’affichage**.  
- **Aucune autre dépendance** installée.

---

## 3️⃣ Installation et lancement

1. **Cloner le fork GitHub**
```bash
git clone https://github.com/<votre-utilisateur>/<nom-du-fork>.git
cd <nom-du-fork>

Installer les dépendances

composer install
npm install
npm run dev

Configurer le fichier .env
Comme il est ignoré par GitHub, créez un .env à la racine avec ces valeurs :
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:P70jngEVawXYhGwuSVX8ZGn/PZdT6eTYjv3mI7br6Dg=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=rec_0925_devfront
DB_USERNAME=root
DB_PASSWORD=

Lancer le serveur Laravel

php artisan serve

php artisan serve
Le site sera accessible sur : http://localhost:8000

4️⃣ Routing personnalisé

Toutes les pages utilisent un routing personnalisé avec ton nom de famille :
/{nom-de-famille}-{slug-de-la-page}

pour Ramananandro :

Page 1 : /ramananandro-completez-votre-reservation

Page 2 : /ramananandro-paiement

7️⃣ Temps passé

Temps indicatif : 25 heures