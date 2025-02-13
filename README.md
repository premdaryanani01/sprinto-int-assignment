# WordPress Setup Documentation

## Tools, Themes, and Plugins Used

### **Plugins**
The following plugins were used in the setup:

- **Contact Form 7** – To manage and create contact forms.
- **Ultimate CF7 Add-on** – Additional functionality for Contact Form 7.
- **AIOSEO (All in One SEO)** – SEO optimization for the site.
- **Elementor** – Page builder for designing the landing page.
- **W3 Total Cache** – To improve website performance and caching.
- **Chart.js** – For visualizing data on the site.
- **RangeSlider.js** – Used for the Savings Calculator widget.
- **Swiper.js** – Used for creating interactive carousels.
- **SCSS (Dev Dependency)** – For styling and maintaining CSS efficiently.

---

## Installation on a Local Machine

To set up the site locally, follow these steps:

### 1. Clone the repository
```bash
git clone <repository_url>
```

### 2. Install WordPress
- Download and install WordPress from [wordpress.org](https://wordpress.org/download/).
- Place the cloned project inside the WordPress themes directory (`wp-content/themes/`).

### 3. Set up a local server
- Use **XAMPP, MAMP, or Local by Flywheel** to create a local server environment.
- Create a MySQL database and import the provided `.sql` file (if applicable).

### 4. Configure the `wp-config.php` file
Update database credentials:

```php
define('DB_NAME', 'your_database_name');
define('DB_USER', 'your_database_user');
define('DB_PASSWORD', 'your_database_password');
```

### 5. Activate the Theme and Plugins
- Go to the WordPress admin panel (`/wp-admin`).
- Navigate to `Appearance > Themes` and activate the theme.
- Install and activate the required plugins listed above.

---

## Rationale Behind Design, SEO, and CRO Choices

The landing page is designed with a strong focus on **conversion and performance**:

- **All libraries are stored locally** instead of using external CDNs, ensuring faster load times.
- The design is inspired by **Dribbble**, and compliance automation tool screenshots were incorporated.
- Additional design references were taken from **Landing Folio** ([source](https://www.landingfolio.com/inspiration/post/antimetal?category=landing-page)).
- **SEO Optimization**: Implemented through AIOSEO, ensuring best practices for search engine rankings.
- **CRO (Conversion Rate Optimization)**: The design is minimalistic with clear CTAs to maximize conversions.

---

## Explanation of the Custom-Coded Element

### **Savings Calculator Widget**
The **Savings Calculator widget** was custom-coded using JavaScript and PHP, as it couldn't be built using Elementor’s free version.

### **Implementation Steps:**

1. **Fetching and integrating the Range Slider library**:
   - Installed via NPM and moved to `assets/js/range-slider.js` inside the theme.

2. **Enqueuing the script** in `functions.php`:
   ```php
   function enqueue_custom_scripts() {
       wp_enqueue_script('range-slider', get_template_directory_uri() . '/assets/js/range-slider.js', array('jquery'), null, true);
   }
   add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
   ```

3. **Embedding HTML in Elementor’s Custom HTML Element**:
   - Added the widget structure in Elementor.

4. **Adding JavaScript logic**:
   - Listens for input changes and updates monthly/annual savings values dynamically.

---

## Challenges Faced and Solutions

### **1. Elementor Free Version Limitations**
- **Problem**: Couldn’t use the built-in slider functionality.
- **Solution**: Developed a custom-coded slider using **Swiper.js** and **RangeSlider.js**.

### **2. Creating a Testimonials Section Without Elementor Pro**
- **Problem**: Elementor Pro provides a testimonials widget, but the free version does not.
- **Solution**: Created a **Custom Post Type (CPT) for Testimonials**.
  - The admin can add testimonial entries from the WordPress dashboard.
  - Displayed using a custom query in the theme.

---

## SEO and Tracking Setup Details

- **Google Analytics & Google Tag Manager** have been configured and linked to a Google account.
- Tracking setup includes:
  - Page views
  - Click events on CTAs
  - Form submissions
- Screenshots of the setup can be provided if needed.

---

## Additional Enhancements Implemented

### **1. Cache Management with W3 Total Cache**
- **Improved page load speed** by enabling page caching, browser caching, and database caching.
- Optimized CSS/JS delivery for better performance.

### **2. Free SSL Certificate**
- **Enabled HTTPS** using a free SSL certificate (**Let's Encrypt**) for enhanced security.
- Configured redirects from HTTP to HTTPS.

### **3. reCaptcha v3 Integration**
- **Added Google reCaptcha v3** to protect contact forms from spam.

---

## Conclusion

This WordPress site has been built with a focus on **performance, conversion, and SEO**.  
The custom-coded elements enhance functionality beyond Elementor’s free version, and caching mechanisms ensure optimal performance.  
The setup is optimized for easy deployment both locally and on a live server.
