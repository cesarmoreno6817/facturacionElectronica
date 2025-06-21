pipeline {
    agent any

    environment {
        COMPOSE_FILE = 'docker-compose.yml'
    }

    stages {

        stage('Clonar el repositorio') {
            steps {
                git url: 'https://github.com/Cesaraugp/facturacionElectronica-travis-ci.git', branch: 'master'
            }
        }

        stage('Preparar archivos') {
            steps {
                script {
                    // Copiar el .env si no existe
                    if (!fileExists('.env')) {
                        bat 'copy .env.example .env'
                    }
                }
            }
        }

        stage('Instalar dependencias frontend') {
            steps {
                bat 'npm install && npm run build'
            }
        }

        stage('Levantar contenedores') {
            steps {
                bat 'docker-compose down'
                bat 'docker-compose up -d --build'
            }
        }

    }

    post {
        success {
            echo '🚀 Aplicación desplegada con éxito en http://localhost:8000'
        }
        failure {
            echo '❌ Algo falló en el proceso.'
        }
    }
}
