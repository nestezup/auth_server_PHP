#!/usr/bin/env bash
# Initialize git repository, commit, and create remote via GitHub CLI (gh)

set -e

git init

git add .

git commit -m "Initial commit"

# Replace <repo-name> with desired repository name
# The user approved the plan, so we assume a placeholder name; you can edit later.
REPO_NAME="auth_server_PHP"

# Create GitHub repo (public) and push
gh repo create "$REPO_NAME" --public --source=. --push
