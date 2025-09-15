# Week 1: Setup & Authentication TODO

## Day 1-2: Project Setup
- [ ] Install Laravel Sanctum for API authentication
- [ ] Publish Sanctum configuration
- [ ] Update User model to use HasApiTokens trait
- [ ] Configure .env for database connection (MySQL via XAMPP)

## Day 3-4: Database Design
- [ ] Create migration to add 'role' column to users table
- [ ] Create migration to add 'description' column to categories table
- [ ] Create migration to add 'flavor', 'size', 'status' columns to products table
- [ ] Create migration for ingredients table (id, product_id, name, quantity)
- [ ] Create Ingredient model with belongsTo Product relationship
- [ ] Update Product model to include hasMany Ingredients relationship
- [ ] Create seeders for users, categories, products, ingredients
- [ ] Run migrations
- [ ] Run seeders
- [ ] Commit and push base project to git
