    </div><!-- .flex-grow -->

    <footer class="bg-background-light dark:bg-background-dark border-t border-text-light/10 dark:border-text-dark/10 mt-12">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
          <div class="space-y-4">
            <div class="flex items-center gap-4 text-text-light dark:text-text-dark">
              <div class="text-primary">
                <svg class="w-8 h-8" fill="currentColor" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.8261 30.5736C16.7203 29.8826 20.2244 29.4783 24 29.4783C27.7756 29.4783 31.2797 29.8826 34.1739 30.5736C36.9144 31.2278 39.9967 32.7669 41.3563 33.8352L24.8486 7.36089C24.4571 6.73303 23.5429 6.73303 23.1514 7.36089L6.64374 33.8352C8.00331 32.7669 11.0856 31.2278 13.8261 30.5736Z"></path>
                </svg>
              </div>
              <h3 class="text-lg font-bold font-display"><?php bloginfo('name'); ?></h3>
            </div>
            <p class="mt-2 text-sm text-text-light/70 dark:text-text-dark/70"><?php bloginfo('description'); ?></p>
          </div>

          <?php if (has_nav_menu('footer-menu')) : ?>
            <div>
              <h3 class="text-lg font-bold font-display text-text-light dark:text-text-dark">Quick Links</h3>
              <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'footer-menu',
                  'container'      => 'ul',
                  'menu_class'     => 'mt-2 space-y-1',
                  'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                  'walker'         => new EcoForge_Footer_Nav_Walker(),
                )
              );
              ?>
            </div>
          <?php endif; ?>

          <!-- Newsletter and other footer widget areas could be added here -->
        </div>
        <div class="mt-8 border-t border-text-light/10 dark:border-text-dark/10 pt-8 text-center text-sm text-text-light/70 dark:text-text-dark/70">
          <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
        </div>
      </div>
    </footer>

    </div><!-- .relative -->

    <?php wp_footer(); ?>
    </body>

    </html>