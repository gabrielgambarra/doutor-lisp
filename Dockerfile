# Use the official PHP image as the base image
FROM php:8.1-alpine

# Install SBCL
RUN apk add --no-cache sbcl

# Set the working directory inside the container
WORKDIR /app

# Copy the PHP project files to the container
COPY . /app

# Expose port 8080
EXPOSE 8080

# Run the PHP project
CMD ["php", "-S", "0.0.0.0:8080", "-t", "/app"]