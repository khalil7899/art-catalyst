# 🎨 Art Catalyst

**Art Catalyst** est un site internet présentant des peintures.  
Le projet est développé avec **Symfony 5**, et utilise **Docker** pour simplifier l’installation et le déploiement local.

---

## 🧰 **Stack technique**

- **Symfony 5**
- **PHP 8** (Apache)
- **MySQL 8**
- **Docker & Docker Compose**
- **Mailcatcher** (pour tester les emails en local)
- **Symfony Debug Toolbar** activée pour le développement

---

## 🚀 **Installation & démarrage**

### 1. Cloner le dépôt

```bash
git clone https://github.com/khalil7899/art-catalyst
cd art-catalyst
```

### 2. Démarrer les conteneurs Docker
```bash
docker-compose up -d --build
```

### 3. Installer les dépendances du projet
```bash
docker-compose exec app composer install
```

### 4. Configuration de la base de données
```bash
docker-compose exec app php bin/console doctrine:database:create
docker-compose exec app php bin/console doctrine:migrations:migrate
```


### 5. Accès au projet
```bash
Application : http://localhost:8000
```

### 6.✅ Lancer des tests
```bash
vendor/bin/phpunit --testdox
```

🛑 Arrêter les conteneurs
```bash
docker-compose down
```
