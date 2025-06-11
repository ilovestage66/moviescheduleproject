# Admin Guide

## Adding or Editing Movies

1. Edit the SQL file:
   - Path: `/var/www/html/sql/create_tables.sql`
   - Modify the `INSERT INTO movies` statements

2. To reset the database:
```bash
sudo mariadb < /var/www/html/sql/create_tables.sql
