<?php



return [
    "contact_form_enabled " => "0",
    "pageTitle" => "My Portfolio",
    "position" => "Full Stack Developer",
    "shortBioo" => "Hi",

    "meta_description" => "Personal portfolio of a Full Stack Developer.", // Meta description for SEO
    "meta_keywords" => "Full Stack Developer, Web Developer, PHP, Laravel, JavaScript", // SEO keywords
    "seo_title" => "John Doe's Portfolio", // SEO title for the page

    "portfolio_theme" => "dark_mode", // Theme for the portfolio: dark_mode or light_mode
    "portfolio_layout" => "multi_column", // Layout type for portfolio: single_column, multi_column
    "show_projects" => "1", // Whether to show the projects section
    "projects_per_page" => "6", // Number of projects to display per page

    "social_facebook" => "https://facebook.com/user", // Facebook profile link
    "social_linkedin" => "https://linkedin.com/in/user", // LinkedIn profile link
    "social_github" => "https://github.com/user", // GitHub profile link
    "social_twitter" => "https://twitter.com/user", // Twitter profile link"

    "user_email" => "user@example.com", // Contact email address
    "user_phone" => "+1234567890", // Contact phone number
    "user_address" => "123 Street, City, Country", // Physical address
    "contact_form_recipient" => "admin@example.com", // Email address to receive contact form submissions

    // Additional User Information
    "user_avatar" => "path/to/avatar.jpg", // URL to user profile picture
    "user_website" => "https://www.johndoe.com", // User's personal website or blog

    // Miscellaneous
    "newsletter_subscription" => "1", // Whether the user wants to show the newsletter subscription
    "show_certifications" => "1", // Whether to show certifications section
    "show_awards" => "1", // Whether to show awards section
    "show_testimonials" => "1", // Whether to show client testimonials

    // File Upload Settings
    "max_file_size" => "5", // Maximum file size for uploads in MB
    "allowed_file_types" => "jpg,png,gif,pdf", // Allowed file types for project/media uploads
    "upload_directory" => "/uploads/projects/", // Directory where files are uploaded

    // Blog Settings (if applicable)
    "blog_enabled" => "1", // Whether the blog is enabled on the portfolio
    "blog_posts_per_page" => "5", // Number of blog posts to show per page
    "blog_show_author" => "1", // Whether to show the author of blog posts
    "blog_show_date" => "1", // Whether to show the date of blog posts

    // Project Tags and Categories
    "project_categories" => json_encode(['Web Development', 'Mobile Apps', 'UI/UX Design']), // Categories for projects
    "default_project_category" => "Web Development", // Default category to display on the projects page
    "enable_project_filter" => "1", // Whether to enable filtering projects by category

    // Language and Localization
    "preferred_language" => "en", // Preferred language for the portfolio (en, fr, es, etc.)
    "time_zone" => "America/New_York", // User's time zone

    // Miscellaneous Notifications
    "new_message_notification" => "1", // Whether to notify the user of new messages
    "newsletter_notification" => "1", // Whether to notify the user about new newsletters or posts



    "max_file_size" => "5", // Maximum file size for uploads (in MB)
    "allowed_file_types" => "jpg,png,gif,pdf,docx", // Allowed file types for project/media uploads
    "upload_directory" => "/uploads/projects/", // Directory where files are uploaded
    "show_portfolio_stats" => "1", // Whether to show portfolio statistics like number of projects, clients, etc.
    "time_zone" => "America/New_York", // Time zone of the user
    "preferred_language" => "en", // Preferred language for the portfolio (en, fr, es, etc.)
    "enable_dark_mode" => "1", // Whether dark mode is enabled

];

