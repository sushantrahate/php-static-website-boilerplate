# PHP Static Website Setup

A lightweight, static website built with PHP, HTML, CSS, and JavaScript.

## Features

- Dynamic headers, footers, and navigation included on every page.
- SEO-friendly clean URLs using `.htaccess`.
- HTTPS enforcement for security.
- Restricts access to sensitive files like `config.php`.
- Includes canonical URLs for better SEO.

## Folder Structure

```
├── config/                # Configuration files
│   └── config.php         # Global constants
├── includes/              # Reusable PHP components
│   ├── header.php         # Common header for all pages
│   ├── footer.php         # Common footer for all pages
│   └── navigation.php     # Common navigation menu
├── about.php              # About page
├── contact.php            # Contact page
├── index.php              # Homepage
├── assets/                # Static assets
│   ├── css/               # Stylesheets
│   │   └── style.css      # Main stylesheet
│   ├── js/                # JavaScript files
│   │   └── scripts.js     # Main JavaScript file
│   └── images/            # Image files
├── .htaccess              # Rewrite rules and security settings
├── sitemap.xml            # XML sitemap for SEO
├── robots.txt             # Instructions for search engine crawlers
└── README.md              # Project documentation
```

## .htaccess

- Ensures clean URLs like /contact instead of /contact.php.
- Enforces HTTPS for security.
- Restricts access to sensitive files.

## robots.txt

- Allow/Disallow Crawling: You can control which parts of your site search engines should or shouldn’t index.
- Link to Sitemap: Helps search engines find your sitemap for better indexing.
