<?php
/**
 * The template for displaying property archives
 */

get_header();

// Handle Filters
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$search = isset($_GET['prop_search']) ? sanitize_text_field($_GET['prop_search']) : '';
$type_filter = isset($_GET['prop_type']) ? sanitize_text_field($_GET['prop_type']) : '';
$price_filter = isset($_GET['prop_price']) ? sanitize_text_field($_GET['prop_price']) : '';
$bed_filter = isset($_GET['prop_beds']) ? sanitize_text_field($_GET['prop_beds']) : '';

$args = array(
    'post_type'      => 'property',
    'posts_per_page' => 9,
    'paged'          => $paged,
    's'              => $search,
    'meta_query'     => array('relation' => 'AND'),
);

if ($type_filter) {
    $args['meta_query'][] = array(
        'key'     => '_property_type',
        'value'   => $type_filter,
        'compare' => '=',
    );
}

if ($bed_filter) {
    $args['meta_query'][] = array(
        'key'     => '_property_bedrooms',
        'value'   => $bed_filter,
        'compare' => '>=',
        'type'    => 'NUMERIC'
    );
}

// Simple price ranges
if ($price_filter) {
    $range = explode('-', $price_filter);
    if (count($range) == 2) {
        // Clean the price string if it has $ or ,
        $args['meta_query'][] = array(
            'key'     => '_property_price',
            'value'   => array($range[0], $range[1]),
            'compare' => 'BETWEEN',
            'type'    => 'NUMERIC'
        );
    }
}

$property_query = new WP_Query($args);
?>

<main class="pt-32 pb-20">
    <!-- Header Section -->
    <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 mb-16">
        <div class="max-w-3xl">
            <h1 class="text-[40px] sm:text-[56px] font-semibold leading-tight mb-6">Find Your Dream <span class="text-[#703BF7]">Property</span></h1>
            <p class="text-[#B3B3B3] text-lg">Browse through our extensive collection of properties. Use the filters to find the one that fits your lifestyle and budget.</p>
        </div>
    </div>

    <!-- Filter Bar -->
    <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 mb-12">
        <div class="glass-card p-6 sm:p-8">
            <form action="<?php echo get_post_type_archive_link('property'); ?>" method="GET" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
                <!-- Search -->
                <div class="relative">
                    <input type="text" name="prop_search" value="<?php echo esc_attr($search); ?>" placeholder="Search properties..." class="w-full bg-[#1A1A1A] border border-[#262626] rounded-xl px-5 py-4 text-white focus:border-[#703BF7] outline-none transition-all pl-12">
                    <i data-lucide="search" class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-[#999999]"></i>
                </div>

                <!-- Type -->
                <select name="prop_type" class="bg-[#1A1A1A] border border-[#262626] rounded-xl px-5 py-4 text-white focus:border-[#703BF7] outline-none transition-all appearance-none cursor-pointer">
                    <option value="">Property Type</option>
                    <option value="Villa" <?php selected($type_filter, 'Villa'); ?>>Villa</option>
                    <option value="Apartment" <?php selected($type_filter, 'Apartment'); ?>>Apartment</option>
                    <option value="Cottage" <?php selected($type_filter, 'Cottage'); ?>>Cottage</option>
                    <option value="Studio" <?php selected($type_filter, 'Studio'); ?>>Studio</option>
                </select>

                <!-- Pricing -->
                <select name="prop_price" class="bg-[#1A1A1A] border border-[#262626] rounded-xl px-5 py-4 text-white focus:border-[#703BF7] outline-none transition-all appearance-none cursor-pointer">
                    <option value="">Price Range</option>
                    <option value="0-500000" <?php selected($price_filter, '0-500000'); ?>>Under $500k</option>
                    <option value="500000-1000000" <?php selected($price_filter, '500000-1000000'); ?>>$500k - $1M</option>
                    <option value="1000000-5000000" <?php selected($price_filter, '1000000-5000000'); ?>>Above $1M</option>
                </select>

                <!-- Bedrooms -->
                <select name="prop_beds" class="bg-[#1A1A1A] border border-[#262626] rounded-xl px-5 py-4 text-white focus:border-[#703BF7] outline-none transition-all appearance-none cursor-pointer">
                    <option value="">Bedrooms</option>
                    <option value="1" <?php selected($bed_filter, '1'); ?>>1+ Bedrooms</option>
                    <option value="2" <?php selected($bed_filter, '2'); ?>>2+ Bedrooms</option>
                    <option value="3" <?php selected($bed_filter, '3'); ?>>3+ Bedrooms</option>
                    <option value="4" <?php selected($bed_filter, '4'); ?>>4+ Bedrooms</option>
                </select>

                <!-- Submit Button -->
                <button type="submit" class="bg-[#703BF7] text-white rounded-xl px-5 py-4 font-semibold hover:bg-[#5d2ee0] transition-all">Filter Results</button>
            </form>
        </div>
    </div>

    <!-- Property Grid -->
    <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between mb-8 pb-4 border-b border-[#262626]">
            <h2 class="text-xl font-medium text-[#999999]">
                Showing <span class="text-white"><?php echo $property_query->found_posts; ?></span> Results
            </h2>
        </div>

        <?php if ($property_query->have_posts()) : ?>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php while ($property_query->have_posts()) : $property_query->the_post(); 
                    $price = get_post_meta(get_the_ID(), '_property_price', true);
                    $bedrooms = get_post_meta(get_the_ID(), '_property_bedrooms', true);
                    $bathrooms = get_post_meta(get_the_ID(), '_property_bathrooms', true);
                    $type = get_post_meta(get_the_ID(), '_property_type', true);
                    $thumb = get_the_post_thumbnail_url(get_the_ID(), 'large') ?: 'https://picsum.photos/seed/' . get_the_ID() . '/600/400';
                ?>
                    <article class="glass-card p-6 group flex flex-col h-full">
                        <div class="rounded-xl overflow-hidden mb-6 aspect-[4/3] relative">
                            <img src="<?php echo esc_url($thumb); ?>" alt="<?php the_title(); ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            <?php if ($type) : ?>
                                <div class="absolute top-4 left-4 bg-[#0F0F0F]/80 backdrop-blur-md px-3 py-1.5 rounded-full text-xs font-medium border border-[#262626]">
                                    <?php echo esc_html($type); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <h3 class="text-xl font-bold mb-3"><?php the_title(); ?></h3>
                        <p class="text-[#999999] text-sm mb-6 line-clamp-2"><?php echo get_the_excerpt(); ?></p>
                        
                        <div class="flex flex-wrap gap-3 mb-8 mt-auto">
                            <?php if ($bedrooms) : ?>
                                <div class="flex items-center gap-2 px-3 py-1.5 bg-[#1E1E1E] rounded-full text-xs border border-[#262626]">
                                    <i data-lucide="bed" class="w-3.5 h-3.5 text-[#703BF7]"></i> <?php echo esc_html($bedrooms); ?>
                                </div>
                            <?php endif; ?>
                            <?php if ($bathrooms) : ?>
                                <div class="flex items-center gap-2 px-3 py-1.5 bg-[#1E1E1E] rounded-full text-xs border border-[#262626]">
                                    <i data-lucide="bath" class="w-3.5 h-3.5 text-[#703BF7]"></i> <?php echo esc_html($bathrooms); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <div class="flex items-center justify-between pt-6 border-t border-[#262626]">
                            <div>
                                <div class="text-xs text-[#999999] mb-1">Price</div>
                                <div class="text-xl font-bold"><?php echo esc_html($price ?: '$0'); ?></div>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="px-5 py-2.5 rounded-lg bg-[#703BF7] text-sm font-medium hover:bg-[#5d2ee0] transition-all">View Details</a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <!-- Pagination -->
            <div class="mt-16 flex justify-center">
                <?php
                echo paginate_links(array(
                    'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                    'format'       => '?paged=%#%',
                    'current'      => max(1, get_query_var('paged')),
                    'total'        => $property_query->max_num_pages,
                    'prev_text'    => '<i data-lucide="chevron-left" class="w-5 h-5"></i>',
                    'next_text'    => '<i data-lucide="chevron-right" class="w-5 h-5"></i>',
                    'type'         => 'list',
                    'class'        => 'pagination-list'
                ));
                ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <div class="text-center py-20 glass-card">
                <i data-lucide="search-x" class="w-16 h-16 text-[#703BF7] mx-auto mb-6"></i>
                <h2 class="text-2xl font-bold mb-4">No properties found</h2>
                <p class="text-[#999999]">Try adjusting your search filters to find what you're looking for.</p>
                <a href="<?php echo get_post_type_archive_link('property'); ?>" class="inline-block mt-8 px-8 py-4 bg-[#703BF7] rounded-xl font-bold hover:bg-[#5d2ee0] transition-all">Clear All Filters</a>
            </div>
        <?php endif; ?>
    </div>
</main>

<style>
/* WordPress Pagination Styling */
.pagination-list {
    display: flex;
    gap: 12px;
    align-items: center;
}
.pagination-list li {
    list-style: none;
}
.pagination-list .page-numbers {
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #1A1A1A;
    border: 1px border #262626;
    border-radius: 12px;
    color: #999999;
    font-weight: 500;
    transition: all 0.3s ease;
}
.pagination-list .page-numbers:hover {
    border-color: #703BF7;
    color: white;
}
.pagination-list .page-numbers.current {
    background: #703BF7;
    border-color: #703BF7;
    color: white;
}
</style>

<?php get_footer(); ?>
