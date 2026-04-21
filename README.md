````markdown
# 🚀 OGB — Ouattara Group Business

![Laravel](https://img.shields.io/badge/Laravel-v12-red?style=for-the-badge&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.4-blue?style=for-the-badge&logo=php)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-Modern-06B6D4?style=for-the-badge&logo=tailwindcss)
![Docker](https://img.shields.io/badge/Docker-Enabled-2496ED?style=for-the-badge&logo=docker)
![Status](https://img.shields.io/badge/Status-Production-success?style=for-the-badge)

---

# 🌍 Présentation

**OGB (Ouattara Group Business)** est le site vitrine officiel d’une entreprise multisectorielle basée en **Côte d’Ivoire**, active dans plusieurs domaines :

- 🏗️ Bâtiment & Travaux Publics (BTP)
- 💻 Informatique & Solutions digitales
- 🤝 Partenariats stratégiques
- 🏢 Gestion de projets & accompagnement

Ce site a été conçu pour valoriser l’image de marque de l’entreprise, présenter ses activités et faciliter la prise de contact avec ses futurs clients et partenaires.

---

# ✨ Fonctionnalités principales

## 🏠 Site vitrine moderne
Une interface professionnelle, rapide et responsive.

## 🏢 Présentation des services
Mise en avant des pôles d’activités de l’entreprise.

## 📸 Galerie médias
Photos et contenus visuels des réalisations.

## 👨‍💼 Équipe dirigeante
Présentation dynamique des responsables.

## 📩 Formulaire de contact
Envoi direct de messages à l’administration.

## ⚡ Performance optimisée
Chargement rapide grâce à Laravel + Vite.

---

# 🛠️ Stack Technique

| Technologie | Utilisation |
|----------|-------------|
| Laravel 12 | Backend PHP |
| PHP 8.4 | Langage principal |
| Blade | Templates |
| Tailwind CSS | Design UI |
| Alpine.js | Interactions dynamiques |
| Vite | Build frontend |
| SQLite | Base de données |
| Docker / Sail | Environnement local |
| Render | Déploiement |

---

# 📂 Structure du projet

```bash
app/
resources/
routes/
database/
public/
docker/
README.md
````

---

# ⚙️ Installation locale

## 1️⃣ Cloner le projet

```bash
git clone https://github.com/richGuehi/OGB.git
cd OGB
```

---

## 2️⃣ Copier le fichier d’environnement

```bash
cp .env.example .env
```

---

## 3️⃣ Installer les dépendances PHP

```bash
docker run --rm \
-u "$(id -u):$(id -g)" \
-v "$(pwd):/var/www/html" \
-w /var/www/html \
laravelsail/php84-composer:latest \
composer install --ignore-platform-reqs
```

---

## 4️⃣ Lancer Docker Sail

```bash
./vendor/bin/sail up -d
```

---

## 5️⃣ Générer la clé Laravel

```bash
./vendor/bin/sail artisan key:generate
```

---

## 6️⃣ Installer le Frontend

```bash
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev
```

---

# 🌐 Accès local

| Service         | URL                                            |
| --------------- | ---------------------------------------------- |
| Site Web        | [http://localhost](http://localhost)           |
| Vite Dev Server | [http://localhost:5173](http://localhost:5173) |
| Mailpit         | [http://localhost:8025](http://localhost:8025) |

---

# 🛑 Arrêter le projet

```bash
./vendor/bin/sail down
```

---

# 🚀 Déploiement

Le projet est compatible avec :

* Render
* VPS Ubuntu
* Docker
* Apache / Nginx

---

# 📸 Aperçu

> Ajoute ici des captures d’écran du site pour impressionner les recruteurs 👇

```markdown
![Home](./screenshots/home.png)
![Services](./screenshots/services.png)
```

---

# 👨‍💻 Auteur

### Richmond Guehi

Développeur Full Stack passionné par :

* Laravel
* Java
* Spring Boot
* Angular
* DevOps
* UI/UX

📧 Contact professionnel disponible sur demande.

---

# ⭐ Pourquoi ce projet est intéressant ?

Ce projet démontre :

✅ Maîtrise de Laravel moderne
✅ Utilisation de Docker en environnement réel
✅ Intégration frontend propre et responsive
✅ Déploiement professionnel
✅ Architecture maintenable
✅ Capacité à produire un projet client réel

---

# 📌 Commandes Git utiles

```bash
git add .
git commit -m "Update project"
git push origin main
```

---

# le projet sur mon disque est dans 

\\wsl$\Ubuntu\home\asus

---

```
```
