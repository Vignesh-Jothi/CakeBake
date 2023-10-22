# **CakeBake**

![image](https://github.com/Vignesh-Jothi/CakeBake/assets/87015660/662b1b8f-54ba-40fb-a6bc-4e711988c27c)
<p align="center">
  <img src="https://img.shields.io/github/license/vignesh-jothi/CakeBake" alt="GitHub License">
  <img src="https://img.shields.io/github/last-commit/vignesh-jothi/CakeBake" alt="GitHub Last Commit">
  <img src="https://img.shields.io/github/repo-size/vignesh-jothi/CakeBake" alt="GitHub Repository Size">
  <img src="https://img.shields.io/github/forks/vignesh-jothi/CakeBake" alt="GitHub Forks">
  <img src="https://img.shields.io/github/stars/vignesh-jothi/CakeBake" alt="GitHub Stars">
</p>

<!--[![Code Climate](https://img.shields.io/codeclimate/maintainability/vignesh-jothi/CakeBake)](https://codeclimate.com/github/vignesh-jothi/CakeBake)
[![Dependency Status](https://img.shields.io/vignesh-jothi/CakeBake)](https://david-dm.org/vignesh-jothi/CakeBake)-->

Welcome to the documentation for CakeBake, a delightful baking recipe website powered by Laravel. Please note that CakeBake is currently under development. We appreciate your interest and patience as we work to bring you the best baking experience possible.

This documentation serves as a comprehensive guide for users, administrators, and developers interested in understanding and contributing to the CakeBake project.

### Table of Contents

1. **[Getting Started](#getting-started)**
   - [System Requirements](#system-requirements)
   - [Installation Guide](#installation-guide)
   - [Configuration Settings](#configuration-settings)

2. **[User Guide](#user-guide)**
   - [User Registration and Login](#user-registration-and-login)
   - [Browsing Recipes](#browsing-recipes)
   - [Recipe Details Page](#recipe-details-page)
   - [Creating a Custom Recipe](#creating-a-custom-recipe)
   - [Managing User Profile](#managing-user-profile)

3. **[Administrator Guide](#administrator-guide)**
   - [Admin Login](#admin-login)
   - [Managing User Accounts](#managing-user-accounts)
   - [Managing Recipes](#managing-recipes)

4. **[Advanced Features](#advanced-features)**
   - [Search Functionality](#search-functionality)
   - [Social Media Integration](#social-media-integration)
   - [Recipe Favorites and Collections](#recipe-favorites-and-collections)

5. **[Troubleshooting](#troubleshooting)**
   - [Common Issues and Solutions](#common-issues-and-solutions)
   - [Error Messages and Codes](#error-messages-and-codes)

6. **[Frequently Asked Questions (FAQ)](#frequently-asked-questions-faq)**
   - [General Queries](#general-queries)
   - [Account Management](#account-management)
   - [Recipe-related Questions](#recipe-related-questions)

---

### 1. Getting Started

#### System Requirements

- PHP 7.4+
- Laravel 8.x
- MySQL or compatible database
- Web server (Apache, Nginx, etc.)

#### Installation Guide

1. Clone the CakeBake repository:
   ```bash
   git clone https://github.com/vignesh-jothi/CakeBake.git
   ```

2. Install dependencies using Composer:
   ```bash
   composer install
   ```

3. Create a `.env` file and configure your database settings.

4. Generate an application key:
   ```bash
   php artisan key:generate
   ```

5. Run migrations and seed the database:
   ```bash
   php artisan migrate --seed
   ```

6. Configure your web server to point to the `public` directory.

#### Configuration Settings

- Update `.env` file with database credentials, mail configuration, and other environment-specific variables.

### 2. User Guide

#### User Registration and Login

- Users can register for a new account or log in with existing credentials.
- Forgot password functionality allows users to reset their password via email.

#### Browsing Recipes

- Users can explore recipes by categories, tags, or through search functionality.
- Featured and trending recipes are displayed on the homepage.

#### Recipe Details Page

- Each recipe has a dedicated page displaying ingredients, instructions, photos, and user comments.
- Users can like, comment, and rate recipes.

#### Creating a Custom Recipe

- Registered users can create their own recipes by providing details such as ingredients, instructions, and photos.
- Custom recipes can be saved as drafts or published for the community to view.

#### Managing User Profile

- Users can edit their profiles, change passwords, and view their submitted recipes and liked recipes.

### 3. Administrator Guide

#### Admin Login

- Administrators can log in with special credentials to access the admin panel.

#### Managing User Accounts

- Admins can view and manage user accounts, including editing user details and deactivating accounts if necessary.

#### Managing Recipes

- Admins have the ability to edit or delete any recipe on the platform.
- They can also feature recipes to showcase them on the homepage.

### 4. Advanced Features

#### Search Functionality

- Users can search for recipes by entering keywords, ingredients, or recipe names.

#### Social Media Integration

- Users can share recipes on social media platforms like Facebook, Twitter, and Instagram.

#### Recipe Favorites and Collections

- Users can create personal collections of favorite recipes for quick access.

### 5. Troubleshooting

#### Common Issues and Solutions

- **Issue: Unable to log in to my account.**
  - **Solution:** Ensure you are entering the correct email address and password. If you've forgotten your password, use the "Forgot Password" link on the login page to reset it.

- **Issue: Recipes are not displaying properly.**
  - **Solution:** Clear your browser cache and refresh the page. If the issue persists, check your internet connection. If using a mobile app, update to the latest version.

- **Issue: Unable to submit a recipe.**
  - **Solution:** Double-check that all required fields are filled out. If the problem persists, try a different web browser. If the issue continues, contact support for assistance.

#### Error Messages and Codes

- **Error: 404 Not Found**
  - **Cause:** The requested page or resource does not exist on the server.
  - **Solution:** Verify the URL you are trying to access. If the issue persists, report it to the website administrator.

- **Error: 500 Internal Server Error**
  - **Cause:** There is a server-side issue preventing the request from being fulfilled.
  - **Solution:** Wait a few minutes and refresh the page. If the error persists, report the issue to the website administrator, including any error codes displayed.

- **Error: Database Connection Error**
  - **Cause:** The website cannot establish a connection to the database.
  - **Solution:** Check the database credentials in the `.env` file. Ensure the database server is running and accessible. If the issue persists, contact your hosting provider or server administrator.

For any other issues or specific error messages not covered here, please refer to this documentation for potential solutions. If the problem persists, do not hesitate to reach out to our support team via GitHub issues for further assistance. 

### 6. Frequently Asked Questions (FAQ)

#### General Queries

- **Q: What is CakeBake?**
  - **A:** CakeBake is a baking recipe website built with Laravel, offering a diverse collection of baking recipes from cakes and cookies to bread and pastries. It allows users to explore recipes, create their own, and engage with a community of baking enthusiasts.

- **Q: Is CakeBake free to use?**
  - **A:** Yes, CakeBake is open-source and free to use under the GNU General Public License (GPL). You can use, modify, and distribute the codebase according to the terms of the GPL.

#### Account Management

- **Q: How can I register for an account on CakeBake?**
  - **A:** To register, click on the "Sign Up" or "Register" button on the homepage. Fill out the required information and follow the prompts to create your account.

- **Q: I forgot my password. How can I reset it?**
  - **A:** Click on the "Forgot Password" link on the login page. Enter your email address, and you will receive instructions via email on how to reset your password.

- **Q: Can I change my account information, such as my email address or username?**
  - **A:** Yes, after logging in, go to your profile settings. Here, you can update your email address, username, and other account details.

#### Recipe-related Questions

- **Q: How can I submit my own recipe to CakeBake?**
  - **A:** To submit a recipe, log in to your account and navigate to the "Submit Recipe" section. Fill out the recipe details, including ingredients, instructions, and photos. You can choose to save it as a draft or publish it for the community to see.

- **Q: Can I edit or delete a recipe I've submitted?**
  - **A:** Yes, you can edit or delete your own recipes. Go to the recipe page and click on the "Edit" button to make changes. To delete, click on the "Delete" button and confirm your action.

- **Q: How can I search for specific recipes on CakeBake?**
  - **A:** You can use the search bar at the top of the homepage to enter keywords, ingredients, or recipe names. The search functionality will provide you with relevant results based on your query.

For any additional questions or assistance, please refer to this documentation or contact our support team via GitHub issues. Happy baking!

---

**License Information**

CakeBake is licensed under the [GNU General Public License (GPL)](LICENSE.md). You are free to use, modify, and distribute the codebase in compliance with the terms of the GPL.

Thank you for your interest in CakeBake! For any further assistance or inquiries, please refer to this documentation or reach out to us via GitHub issues. Happy baking!
