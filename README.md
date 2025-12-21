
# 📌 NovaCraft Studio – PHP Web Application (No Framework)

NovaCraft Studio is a modern showcase website for a creative agency specializing in **Graphic Design** and **UI/UX**.
This project represents the **evolution** from a static website into a **dynamic PHP application connected to a database**, built **without any framework**, to deeply understand core PHP concepts.

---

## 🚀 Project Evolution

### Phase 1 – Dynamic Stateless Website

* Static HTML/CSS/Tailwind website
* Partial dynamic behavior using PHP
* No database
* PHP arrays / JSON as data sources

### Phase 2 – Full PHP Application (Current)

* Transition to a **stateful PHP application**
* Database integration (MySQL)
* Authentication system
* Clean architecture (MVC-like)
* Secure data handling
* Clean URLs using a Front Controller

---

## 🎯 Project Objectives

* Implement a **Front Controller** architecture
* Use **URL rewriting** for clean routes (`/login`, `/contact`, `/profile`)
* Centralize layout components (header, footer, layout)
* Connect the application to a **MySQL database**
* Implement **authentication & sessions**
* Secure user data and form submissions
* Respect strict architectural and security rules
* Avoid frameworks to master **native PHP**

---

## 🧱 Architecture Overview

```
/public
  └── index.php        → Front Controller
  └── .htaccess        → URL Rewriting

/app
  /Controllers
  /Models
  /Views

/config
  └── database.php

/database
  └── schema.sql
```

---

## 🌐 Front Controller & URL Rewriting

### Front Controller

All requests are routed through:

```
public/index.php
```

### Role of `.htaccess`

* Redirect all requests to `public/index.php`
* Enable clean URLs
* Prevent direct access to internal files
* Allow the PHP router to dynamically load pages

---

## 🗄️ Database

### Database Name

**novacraft**

### Provided File

* `schema.sql` (mandatory)

---

### 🧑 Users Table

| Field      | Type             | Description           |
| ---------- | ---------------- | --------------------- |
| id         | INT (PK, AI)     | User ID               |
| name       | VARCHAR          | User name             |
| email      | VARCHAR (UNIQUE) | User email            |
| password   | VARCHAR          | Hashed password       |
| created_at | DATETIME         | Account creation date |

---

### 📩 Contacts Table

| Field      | Type         | Description     |
| ---------- | ------------ | --------------- |
| id         | INT (PK, AI) | Message ID      |
| name       | VARCHAR      | Sender name     |
| email      | VARCHAR      | Sender email    |
| message    | TEXT         | Message content |
| created_at | DATETIME     | Date sent       |

---

## 🔐 Authentication System

### Features

* Login page
* Logout functionality
* PHP session management
* Protection of private pages
* Secure password handling

### Security Rules

* Password hashing using `password_hash()`
* Password verification using `password_verify()`
* Prepared statements (`mysqli`)
* No sensitive data stored in plain text in sessions

---

## 👤 User Profile Page

### Description

Each authenticated user has a **private profile page**, accessible only after login.
This page introduces **persistent user data**, **SQL reads**, and **sessions as application context**.

### Functionalities

* Access restricted to logged-in users
* Display user information:

  * Name
  * Email
  * Account creation date
* Data retrieved using the user ID stored in the session

### Technical Constraints

* No role system (admin/user)
* Dedicated SQL query for profile data
* No SQL logic in views
* Systematic session verification

---

## ✉️ Contact Us Feature

### Form Fields

* Name
* Email
* Message

### Backend Logic

* Server-side validation
* Required fields verification
* Email format validation
* Protection against SQL injection
* Insert message into `contacts` table
* Display success or error feedback

---

## 🛑 Mandatory Technical Rules

* All SQL queries handled using **mysqli**
* No SQL inside view files
* No business logic in views
* Proper use of `require` / `require_once`
* Clean error handling
* No debug dumps in production

---

## ⭐ Bonus Features

* Custom middleware for protected routes
* Admin page listing contact messages
* Flash messages using sessions
* Simple pagination using `LIMIT`

---

## 🔧 Technologies Used

* **HTML5**
* **CSS3 / TailwindCSS**
* **PHP 8+**
* **MySQL**
* **Apache (.htaccess)**
* **mysqli**
* **Git & GitHub**

