<?php

if (!defined('ABSPATH')) {
    exit;
}

function theme_enqueue_styles() {
  wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/assets/css/output.css', [], time(), 'all'); 
  wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/style.css', [], time(), 'all');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

// menus

function register_theme_menus() {
  register_nav_menus([
      'primary-menu' => __('Primary Menu', 'sprintoptimize'),
      'footer-menu' => __('Footer Menu', 'sprintoptimize'),
  ]);
}
add_action('after_setup_theme', 'register_theme_menus'); 

function theme_widgets_init() {
  register_sidebar([
      'name'          => __('Footer Widget Area', 'sprintoptimize'),
      'id'            => 'footer-widget',
      'before_widget' => '<div class="footer-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
  ]);
}
add_action('widgets_init', 'theme_widgets_init');

function enqueue_chartjs() {
  wp_enqueue_script(
      'chart-js',
      get_template_directory_uri() . '/assets/js/chart.umd.js', 
      [],
      null,
      true
  );
}
add_action('wp_enqueue_scripts', 'enqueue_chartjs');


// chart section main content
function sprintoptimize_audit_chart() {
  ob_start(); ?>

  <canvas id="auditChart"></canvas>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      if (typeof Chart !== 'undefined') { // Ensure Chart.js is loaded
        const ctx = document.getElementById('auditChart').getContext('2d');

        // Create a diagonal gradient (matching 243.09° as closely as possible)
        const gradient = ctx.createLinearGradient(250, 0, 0, 250); 
          gradient.addColorStop(0.05, '#032661'); // Dark Blue
          gradient.addColorStop(0.94, '#0B131F'); // Deep Navy

        new Chart(ctx, {
          type: 'doughnut',
          data: {
            labels: ['Before SprintOptimize (10 Days)', 'After SprintOptimize (4 Days)'],
            datasets: [{
              data: [10, 4], 
              backgroundColor: [gradient, '#E88A5D'], 
              borderWidth: 1
            }]
          },
          options: {
            responsive: true,
            plugins: {
              legend: {
                position: 'bottom',
              },
              animation: {
                animateScale: true, 
                animateRotate: true, 
                duration: 1500 
              },
              title: {
                display: false,
                text: 'Audit Preparation Time Reduction'
              }
            }
          }
        });
      } else {
        console.error("Chart.js failed to load.");
      }
    });
  </script>

  <?php
  return ob_get_clean();
}

add_shortcode('audit_chart', 'sprintoptimize_audit_chart');


function sprintoptimize_savings_chart() {
  ob_start(); ?>

  <canvas id="savingsChart"></canvas>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      if (typeof Chart !== 'undefined') {
        const ctx = document.getElementById('savingsChart').getContext('2d');

        // Sample Data (Replace with actual)
        const labels = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
        const spendData = [210000, 190000, 200000, 195000, 204000, 198000, 202000, 205000, 204121, 199000, 192000, 188000];
        const unapprovedSavings = [15000, 14000, 13000, 13500, 12000, 12500, 11800, 12200, 11448, 11000, 10500, 10000];
        const savedData = [75000, 80000, 82000, 83000, 85000, 86000, 87000, 88000, 83403, 81000, 79500, 78000];

        new Chart(ctx, {
          type: 'line',
          data: {
            labels: labels,
            datasets: [
              {
                label: "Spend",
                data: spendData,
                borderColor: "#3B82F6",
                backgroundColor: "rgba(59, 130, 246, 0.1)",
                fill: true,
                tension: 0.4,
              },
              {
                label: "Unapproved Savings",
                data: unapprovedSavings,
                borderColor: "#EF4444",
                borderDash: [5, 5],
                backgroundColor: "rgba(239, 68, 68, 0.1)",
                fill: false,
                tension: 0.4,
              },
              {
                label: "Saved",
                data: savedData,
                borderColor: "#10B981",
                backgroundColor: "rgba(16, 185, 129, 0.2)",
                fill: true,
                tension: 0.4,
              }
            ]
          },
          options: {
            responsive: true,
            interaction: {
              mode: "index",
              intersect: false,
            },
            plugins: {
              legend: {
                position: "top",
              },
              tooltip: {
                callbacks: {
                  label: function(tooltipItem) {
                    return "$" + tooltipItem.raw.toLocaleString() + "/mo";
                  }
                }
              }
            },
            scales: {
              x: { 
                title: { display: true, text: "Months" } 
              },
              y: {
                title: { display: true, text: "Amount ($)" },
                beginAtZero: false
              }
            }
          }
        });
      } else {
        console.error("Chart.js failed to load.");
      }
    });
  </script>

  <?php
  return ob_get_clean();
}

add_shortcode('savings_chart', 'sprintoptimize_savings_chart');

function sprintoptimize_testimonials() {
  ob_start(); ?>

<div class="swiper testimonial-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
            <div class="testimonial_container">
                
                <div class="top">
                  <img src="/wp-content/themes/sprintoptimize/assets/images/testimonials/jake-nackos-IF9TK5Uy-KI-unsplash.jpg" alt="" class="thumb">
                  <p>"SprintOptimize reduced our compliance workload by 60%! Highly recommend."</p>
                </div>
                <div class="bottom">
                  <cite><span class="testimonialAuthor">
                    — Priya Mehta,
                  </span><br> Compliance Director</cite>
                </div>
                <img class="background" src="/wp-content/themes/sprintoptimize/assets/images/testimonials/jake-nackos-IF9TK5Uy-KI-unsplash.jpg" alt="" >
            </div>    
          </div>
            <div class="swiper-slide">
            <div class="testimonial_container">
                
                <div class="top">
                  <img src="/wp-content/themes/sprintoptimize/assets/images/testimonials/vicky-hladynets-C8Ta0gwPbQg-unsplash.jpg" alt="" class="thumb">
                  <p>"Audit preparation used to take weeks. Now, it’s done in days!"</p>
                </div>
                <div class="bottom">
                  <cite><span class="testimonialAuthor">
                    — Rahul Desai,
                  </span><br> Risk Consultant</cite>
                </div>
                <img class="background" src="/wp-content/themes/sprintoptimize/assets/images/testimonials/vicky-hladynets-C8Ta0gwPbQg-unsplash.jpg" alt="" >
            </div>    
          </div>
          <div class="swiper-slide">
            <div class="testimonial_container">
                
                <div class="top">
                  <img src="/wp-content/themes/sprintoptimize/assets/images/testimonials/michael-austin-jgSAuqMmJUE-unsplash.jpg" alt="" class="thumb">
                  <p>"Seamless integration with our security tools made compliance effortless."</p>
                </div>
                <div class="bottom">
                  <cite><span class="testimonialAuthor">
                    — Amanda Roberts,
                  </span><br> IT Security Lead</cite>
                </div>
                <img class="background" src="/wp-content/themes/sprintoptimize/assets/images/testimonials/michael-austin-jgSAuqMmJUE-unsplash.jpg" alt="" >
            </div>    
          </div>
          <div class="swiper-slide">
            <div class="testimonial_container">
                
                <div class="top">
                  <img src="/wp-content/themes/sprintoptimize/assets/images/testimonials/jake-nackos-IF9TK5Uy-KI-unsplash.jpg" alt="" class="thumb">
                  <p>"SprintOptimize reduced our compliance workload by 60%! Highly recommend."</p>
                </div>
                <div class="bottom">
                  <cite><span class="testimonialAuthor">
                    — Priya Mehta,
                  </span><br> Compliance Director</cite>
                </div>
                <img class="background" src="/wp-content/themes/sprintoptimize/assets/images/testimonials/jake-nackos-IF9TK5Uy-KI-unsplash.jpg" alt="" >
            </div>    
          </div>
            <div class="swiper-slide">
            <div class="testimonial_container">
                
                <div class="top">
                  <img src="/wp-content/themes/sprintoptimize/assets/images/testimonials/vicky-hladynets-C8Ta0gwPbQg-unsplash.jpg" alt="" class="thumb">
                  <p>"Audit preparation used to take weeks. Now, it’s done in days!"</p>
                </div>
                <div class="bottom">
                  <cite><span class="testimonialAuthor">
                    — Rahul Desai,
                  </span><br> Risk Consultant</cite>
                </div>
                <img class="background" src="/wp-content/themes/sprintoptimize/assets/images/testimonials/vicky-hladynets-C8Ta0gwPbQg-unsplash.jpg" alt="" >
            </div>    
          </div>
          <div class="swiper-slide">
            <div class="testimonial_container">
                
                <div class="top">
                  <img src="/wp-content/themes/sprintoptimize/assets/images/testimonials/jake-nackos-IF9TK5Uy-KI-unsplash.jpg" alt="" class="thumb">
                  <p>"Seamless integration with our security tools made compliance effortless."</p>
                </div>
                <div class="bottom">
                  <cite><span class="testimonialAuthor">
                    — Amanda Roberts,
                  </span><br> IT Security Lead</cite>
                </div>
                <img class="background" src="/wp-content/themes/sprintoptimize/assets/images/testimonials/jake-nackos-IF9TK5Uy-KI-unsplash.jpg" alt="" >
            </div>    
          </div>
        </div>
        
        <!-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> -->
      </div>
      <div class="paginationContainer">
        <div class="swiper-pagination"></div>
      </div>

 <?php
  return ob_get_clean();
}

add_shortcode('testimonials', 'sprintoptimize_testimonials');

// testimonials slider

function enqueue_swiper_assets() {
  wp_enqueue_style('swiper-css', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', [], '11.2.2', 'all');
  wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', [], '11.2.2', true);
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_assets');


function enqueue_custom_swiper_script() {
  wp_enqueue_script(
      'swiper-init', 
      get_template_directory_uri() . '/assets/js/swiper-init.js', 
      ['swiper-js'], 
      null, 
      true
  );
}
add_action('wp_enqueue_scripts', 'enqueue_custom_swiper_script');
