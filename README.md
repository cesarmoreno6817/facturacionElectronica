# 🧾 Facturación Electrónica - Laravel + Docker + Jenkins

Este proyecto es una aplicación de facturación electrónica desarrollada con **Laravel** y dockerizada para facilitar su despliegue automático a través de **Jenkins**.

---
test forceFF


## ⚙️ Requisitos

- Tener instalado y corriendo:
  - [NodeJs](https://nodejs.org/en/download)
  - [Docker](https://www.docker.com/products/docker-desktop)
  - [Jenkins](https://www.jenkins.io/)

---

## 🚀 Despliegue Automático con Jenkins

### 1. Crear un nuevo Pipeline en Jenkins

1. Inicia sesión en Jenkins.
2. Crea un nuevo proyecto tipo **Pipeline**.
3. En la sección **Pipeline**, selecciona:
   - **Definition**: *Pipeline script from SCM*
   - **SCM**: *Git*
   - **Repository URL**:  
     ```
     https://github.com/cesarmoreno6817/facturacionElectronica.git
     ```
   - **Branch**:  
     ```
     master
     ```
     ![imagen](https://github.com/user-attachments/assets/a950f697-9845-4cfc-837c-f338ebdb6e51)
     ![imagen](https://github.com/user-attachments/assets/48c76d2b-b2df-4582-85b1-6e712a2770df)

### 2. Ejecutar el Pipeline

- Haz clic en **"Construir ahora"** (Build Now).
- Jenkins se encargará de:
  - Clonar el repositorio.
  - Instalar dependencias de backend (`composer install`) y frontend (`npm install`).
  - Construir y levantar los contenedores con Docker.
  - Ejecutar las migraciones automáticamente.

![imagen](https://github.com/user-attachments/assets/587effc4-e9bb-4f13-92f2-3bb85b102783)
![imagen](https://github.com/user-attachments/assets/4c3176df-bb7e-425c-81d8-3aac3b37390c)

---

## 🌐 Acceso a la aplicación

Una vez finalizado el pipeline, puedes acceder a la aplicación desde tu navegador:

👉 [http://localhost:8000](http://localhost:8000)

![imagen](https://github.com/user-attachments/assets/1b2cbd72-634f-4bac-a4aa-2accf29f36ea)
![imagen](https://github.com/user-attachments/assets/87b1b2a3-b57c-4d52-ae0f-3961b0bd5470)


---
