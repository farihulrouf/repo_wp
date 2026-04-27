<?php
/**
 * Template part for displaying property cards
 */

$extra_classes = isset($args['class']) ? $args['class'] : '';
$price = get_post_meta(get_the_ID(), '_property_price', true);
$bedrooms = get_post_meta(get_the_ID(), '_property_bedrooms', true);
$bathrooms = get_post_meta(get_the_ID(), '_property_bathrooms', true);
$type = get_post_meta(get_the_ID(), '_property_type', true);
$thumb = get_the_post_thumbnail_url(get_the_ID(), 'large') ?: 'https://picsum.photos/seed/' . get_the_ID() . '/600/400';
?>

<article class="glass-card p-6 group flex flex-col h-full <?php echo esc_attr($extra_classes); ?>">
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
