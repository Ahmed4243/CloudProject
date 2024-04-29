# Use the MySQL base image
FROM mysql:8.0

# Set environment variables for the MySQL configuration
ENV MYSQL_ROOT_PASSWORD=password
ENV MYSQL_DATABASE=cloud

# Copy the SQL initialization script into the container
COPY Sql.sql /docker-entrypoint-initdb.d/Sql.sql
