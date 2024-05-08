
# Ecommerce Site

Table of Contents
- [About This Project](#About-This-Project)
- [Getting Started](#Getting-Started)
   - [Prerequisites](#Prerequisites)
   - [Installation](#Installation)
   - [How to run the project locally](#How-to-run-the-project-locally)
- [Built-in commands](#Built-in-commands)

## About This Project
A personal project showcasing a a content management system (CMS) implemented with Docker, Nginx, PHP, and MySQL.

## Getting Started
### Prerequisites
- [Docker]("https://www.docker.com/products/docker-desktop/")
- [MySQL]("https://dev.mysql.com/downloads/installer/")
### Installation
1. Clone this repository either manually or with the following git command   
```git clone "https://github.com/Jtan99/CMS.git"```
2. Create the file secrets/db_secrets.env and refer to secrets/db_secrets.env.sample for the template. Replace the placeholders in the newly created file with your actual credentials.

### How to run the project locally
1. To start the local development server, navigate to the root directory of the project and execute the following command:   
```docker compose up -d```   
2. The website should now be up and running. To access its content, visit   
http://localhost:8080.

3. Once finished, stop the local development server by executing the following command:   
```docker compose down```

### Built-in commands
To rebuild images and start local development server   
```docker compose up -d --build```

To rebuild a single service   
```docker-compose build <service_name>```
