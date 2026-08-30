<?php
/**
 * StoreBoost product page.
 *
 * WordPress automatically uses this template for a page with the slug "storeboost".
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();

$img = get_stylesheet_directory_uri() . '/assets/images/storeboost/';
?>

<main id="netbona-main" class="netbona-main storeboost-page">

    <section class="storeboost-hero">
        <div class="netbona-container storeboost-hero__grid">
            <div class="storeboost-hero__copy">
                <span class="netbona-eyebrow">Shopify app by Netbona</span>
                <div class="storeboost-brandline">
                    <span class="storeboost-brandmark">S</span>
                    <span>StoreBoost</span>
                    <span class="storeboost-status">Coming soon</span>
                </div>

                <h1>Conversion elements for the moments that matter.</h1>

                <p>
                    Add trust, highlight benefits and strengthen key buying moments across
                    product pages, collections and cart — without turning your storefront
                    into a complicated setup project.
                </p>

                <div class="storeboost-hero__actions">
                    <a href="#features" class="netbona-button netbona-button--primary">Explore features</a>
                    <a href="mailto:hello@netbona.net?subject=StoreBoost" class="netbona-button netbona-button--secondary">Ask about StoreBoost</a>
                </div>

                <div class="storeboost-feature-pills" aria-label="StoreBoost features">
                    <span>Product benefits</span>
                    <span>Collection badges</span>
                    <span>Cart & upsell</span>
                    <span>Payments & trust</span>
                </div>
            </div>

            <div class="storeboost-hero__visual">
                <img
                    src="<?php echo esc_url( $img . 'storeboost-overview.webp' ); ?>"
                    alt="StoreBoost conversion elements overview"
                    width="1600"
                    height="900"
                    fetchpriority="high"
                >
            </div>
        </div>
    </section>

    <section id="features" class="storeboost-intro">
        <div class="netbona-container storeboost-intro__grid">
            <div>
                <span class="netbona-eyebrow">One app. Key conversion surfaces.</span>
                <h2>Build trust from discovery to checkout.</h2>
            </div>
            <p>
                StoreBoost brings practical conversion elements into one focused Shopify app.
                Configure what shoppers see, control the presentation, and keep the experience
                consistent with your storefront.
            </p>
        </div>
    </section>

    <section class="storeboost-feature">
        <div class="netbona-container storeboost-feature__grid">
            <div class="storeboost-feature__copy">
                <span class="storeboost-number">01</span>
                <span class="netbona-eyebrow">Product page</span>
                <h2>Turn product benefits into visible reasons to buy.</h2>
                <p>
                    Add product benefits and trust elements such as delivery, returns,
                    secure payment and guarantees. Arrange the messages and customize
                    how they appear alongside the buying experience.
                </p>
                <div class="storeboost-mini-features">
                    <span>Benefit icons</span>
                    <span>Trust messages</span>
                    <span>Payment logos</span>
                    <span>Custom appearance</span>
                </div>
            </div>
            <figure class="storeboost-shot">
                <img
                    src="<?php echo esc_url( $img . 'storeboost-product-page.webp' ); ?>"
                    alt="StoreBoost product page benefits and trust settings"
                    loading="lazy"
                >
            </figure>
        </div>
    </section>

    <section class="storeboost-feature storeboost-feature--alt">
        <div class="netbona-container storeboost-feature__grid storeboost-feature__grid--reverse">
            <div class="storeboost-feature__copy">
                <span class="storeboost-number">02</span>
                <span class="netbona-eyebrow">Collection page</span>
                <h2>Make important product information visible before the click.</h2>
                <p>
                    Add product and promotional badges such as New, Bestseller, Sale
                    or discount labels to collection cards. Control placement and styling
                    while previewing the result inside the app.
                </p>
                <div class="storeboost-mini-features">
                    <span>Product badges</span>
                    <span>Promotion labels</span>
                    <span>Placement controls</span>
                    <span>Live preview</span>
                </div>
            </div>
            <figure class="storeboost-shot">
                <img
                    src="<?php echo esc_url( $img . 'storeboost-collection.webp' ); ?>"
                    alt="StoreBoost collection page badge settings and live preview"
                    loading="lazy"
                >
            </figure>
        </div>
    </section>

    <section class="storeboost-feature">
        <div class="netbona-container storeboost-feature__grid">
            <div class="storeboost-feature__copy">
                <span class="storeboost-number">03</span>
                <span class="netbona-eyebrow">Cart & upsell</span>
                <h2>Keep momentum going when shoppers reach the cart.</h2>
                <p>
                    Use shipping-goal messaging and cart recommendations to reinforce
                    value at a high-intent moment and give shoppers a clear next step
                    before checkout.
                </p>
                <div class="storeboost-mini-features">
                    <span>Shipping goal</span>
                    <span>Progress messaging</span>
                    <span>Cart recommendations</span>
                    <span>Upsell elements</span>
                </div>
            </div>
            <figure class="storeboost-shot storeboost-shot--overview">
                <img
                    src="<?php echo esc_url( $img . 'storeboost-overview.webp' ); ?>"
                    alt="StoreBoost cart promotions and product recommendations"
                    loading="lazy"
                >
            </figure>
        </div>
    </section>

    <section class="storeboost-feature storeboost-feature--alt">
        <div class="netbona-container storeboost-feature__grid storeboost-feature__grid--reverse">
            <div class="storeboost-feature__copy">
                <span class="storeboost-number">04</span>
                <span class="netbona-eyebrow">Payments & trust</span>
                <h2>Reassure shoppers close to the purchase decision.</h2>
                <p>
                    Show accepted payment methods and supporting trust messages where
                    shoppers need reassurance. Choose which methods appear and control
                    their visual treatment.
                </p>
                <div class="storeboost-mini-features">
                    <span>Payment icons</span>
                    <span>Trust messages</span>
                    <span>Style controls</span>
                    <span>Flexible alignment</span>
                </div>
            </div>
            <figure class="storeboost-shot">
                <img
                    src="<?php echo esc_url( $img . 'storeboost-payments-trust.webp' ); ?>"
                    alt="StoreBoost payment methods and trust settings"
                    loading="lazy"
                >
            </figure>
        </div>
    </section>

    <section class="storeboost-control">
        <div class="netbona-container">
            <div class="storeboost-control__card">
                <span class="netbona-eyebrow">Designed for control</span>
                <div class="storeboost-control__grid">
                    <h2>Conversion elements that still feel like your store.</h2>
                    <p>
                        StoreBoost is built around configurable content, visibility,
                        placement and appearance — so the elements support your storefront
                        instead of fighting it.
                    </p>
                </div>
                <div class="storeboost-control__items">
                    <span>Text & labels</span>
                    <span>Colors & styles</span>
                    <span>Size & placement</span>
                    <span>Visibility controls</span>
                    <span>Custom icons</span>
                    <span>Live previews</span>
                </div>
            </div>
        </div>
    </section>

    <section class="storeboost-cta">
        <div class="netbona-container storeboost-cta__inner">
            <div>
                <span class="netbona-eyebrow">StoreBoost</span>
                <h2>Want to know when it launches?</h2>
                <p>Get in touch for StoreBoost launch information or product questions.</p>
            </div>
            <a href="mailto:hello@netbona.net?subject=StoreBoost" class="netbona-button netbona-button--light">
                hello@netbona.net
            </a>
        </div>
    </section>

</main>

<?php get_footer(); ?>
