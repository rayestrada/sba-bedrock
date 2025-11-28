# SBA.gov WordPress Bedrock Installation

This repository contains the WordPress codebase for SBA.gov, built on the Roots Bedrock framework. Bedrock provides a modern development workflow with Composer dependency management, improved security through environment-based configuration, and a reorganized directory structure that separates WordPress core from application code.

## Requirements

- **DDEV:** https://docs.ddev.com/en/stable/
- **Docker Desktop:** https://docs.docker.com/desktop/
- **mkcert** (for HTTPS): `brew install mkcert nss` then `mkcert -install`

## Getting Started

### 1. Initialize the Site
```bash
ddev start
ddev setup-env              # Configure .env file automatically
ddev composer install
```

### 2. Import Database

Retain your latest database backup file at `database.sql` in the project root.

```bash
ddev import-db < database.sql
```

**Post-import actions (automatic):**
- Database updates are applied
- Domain search/replace (`iasdemo.ussba.io` → `sbawordpress.ddev.site`)
- Admin user created (username: `admin`, password: `admin`)
- WordPress cache flushed

### 3. Access the Site

```bash
ddev launch
```

**URLs:**
- Site: https://sbawordpress.ddev.site
- Admin: http://sbawordpress.ddev.site/wp/wp-admin

## WP-CLI Commands

Run any WP-CLI command via DDEV:

```bash
ddev wp <command>                          # General format
ddev wp search-replace 'old' 'new'        # Search and replace in database
ddev wp cache flush                        # Clear WordPress cache
ddev wp user list                          # List all users
ddev wp core update-db                     # Update database after WordPress upgrade
ddev wp plugin list                        # List installed plugins
ddev wp theme list                         # List installed themes
```

**Reference:** https://wp-cli.org/

## Common DDEV Commands

| **Command**        | **Use Case**                                                                    |
|--------------------|---------------------------------------------------------------------------------|
| `ddev describe`    | Get detailed info about the project and containers                             |
| `ddev start`       | Start the containers                                                            |
| `ddev stop`        | Stop the containers (preserves database)                                        |
| `ddev restart`     | Restart containers (use after config changes)                                   |
| `ddev poweroff`    | Stop all DDEV projects and router                                              |
| `ddev delete`      | Delete project containers and database (destructive!)                          |
| `ddev ssh`         | SSH into the web container                                                      |
| `ddev logs`        | View container logs                                                             |
| `ddev import-db`   | Import a database                                                               |
| `ddev export-db`   | Export the current database                                                     |
| `ddev snapshot`    | Create a database snapshot                                                      |

**Reference:** https://docs.ddev.com/en/stable/users/usage/commands/

## Project Structure

This project uses [Roots Bedrock](https://roots.io/bedrock/), a modern WordPress stack:

- `web/app/` - WordPress content directory (plugins, themes, uploads)
- `web/wp/` - WordPress core (managed by Composer)
- `config/` - Environment-specific configuration files
- `vendor/` - Composer dependencies

## Development Workflow

1. Start DDEV: `ddev start`
2. Make changes to theme/plugins in `web/app/`
3. Test changes locally
4. Commit and push changes to repository
5. Stop DDEV when done: `ddev stop`

## Environment Configuration

Copy the example environment file and configure:

```bash
cp .env.example .env
```

Key variables to configure:
- `WP_HOME` - Your site URL
- `WP_SITEURL` - WordPress core URL
- `DB_NAME`, `DB_USER`, `DB_PASSWORD` - Database credentials
- `WP_ENV` - Environment (development, staging, production)

**Note:** Never commit `.env` to version control. It's already in `.gitignore`.

## Managing Plugins & Themes

This project uses Composer to manage WordPress plugins and themes from wpackagist.org. Dependencies must be pinned to specific versions.

### Install a Plugin
```bash
ddev composer require wpackagist-plugin/plugin-name:x.x.x
```

### Install a Theme
```bash
ddev composer require wpackagist-theme/theme-name:x.x.x
```

### Update Specific Package
```bash
ddev composer update wpackagist-plugin/plugin-name:x.x.x
```

**Reference:** https://wpackagist.org/