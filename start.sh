#!/bin/bash
echo "🚀 Starting Deployment Script..."

echo "📂 Current Directory: $(pwd)"
ls -la

echo "🧹 Clearing Config Cache..."
php artisan config:clear
php artisan route:clear
php artisan view:clear

echo "📦 Running Migrations..."
php artisan migrate --force
if [ $? -eq 0 ]; then
    echo "✅ Migrations successful"
else
    echo "❌ Migrations failed"
    exit 1
fi

echo "🌱 Seeding Database..."
php artisan db:seed --force
if [ $? -eq 0 ]; then
    echo "✅ Seeding successful"
else
    echo "⚠️ Seeding failed (might be optional)"
fi

echo "🔥 Starting Server..."
php artisan serve --host=0.0.0.0 --port=$PORT
