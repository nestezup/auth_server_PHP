# Auth Server PHP

This is a PHP server application containerized with Docker.

## Getting Started

### Prerequisites

- Docker
- Docker Compose

### Running Locally

1.  Clone the repository:
    ```bash
    git clone https://github.com/nestezup/auth_server_PHP.git
    cd auth_server_PHP
    ```

2.  Start the services:
    ```bash
    docker-compose up -d
    ```

3.  Access the application at `http://localhost:8080`.

### Deployment

To build and push the Docker image to Docker Hub:

1.  Make the script executable:
    ```bash
    chmod +x docker_push.sh
    ```

2.  Run the script:
    ```bash
    ./docker_push.sh
    ```

### CI/CD

This repository is configured with GitHub Actions to automatically build and push the Docker image to Docker Hub on every push to the `main` branch.

Ensure you have set the following secrets in your GitHub repository settings:
- `DOCKERHUB_USERNAME`
- `DOCKERHUB_TOKEN`
