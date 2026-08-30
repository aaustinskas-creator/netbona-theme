<?php
/**
 * Netbona Front Page
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main id="netbona-main" class="netbona-main">

    <section class="netbona-hero">
        <div class="netbona-container">

            <div class="netbona-hero__content">
                <span class="netbona-eyebrow">Shopify Apps by Netbona</span>

                <h1>
                    Better tools for
                    <span>growing Shopify stores.</span>
                </h1>

                <p>
                    We build focused Shopify apps that solve real operational
                    problems and help merchants run better businesses.
                </p>

                <div class="netbona-hero__actions">
                    <a href="#apps" class="netbona-button netbona-button--primary">
                        Explore our apps
                    </a>

                    <a href="#contact" class="netbona-button netbona-button--secondary">
                        Contact us
                    </a>
                </div>
            </div>

        </div>
    </section>


    <section id="apps" class="netbona-apps">
        <div class="netbona-container">

            <span class="netbona-eyebrow">Our Apps</span>

            <h2>Tools built for Shopify merchants.</h2>

            <p>
                Our product portfolio is growing. Each Netbona app is built
                around a clear merchant problem and designed to be simple,
                reliable and useful.
            </p>

            <div class="netbona-app-grid">

                <article class="netbona-app-card">
                    <div class="netbona-app-card__icon">N</div>

                    <div>
                        <span class="netbona-app-card__status">Coming soon</span>
                        <h3>Our first Shopify app</h3>
                        <p>
                            We're preparing our first product for the
                            Shopify ecosystem.
                        </p>
                    </div>
                </article>

            </div>

        </div>
    </section>


    <section class="netbona-about">
        <div class="netbona-container">

            <span class="netbona-eyebrow">About Netbona</span>

            <h2>Building software merchants can rely on.</h2>

            <p>
                Netbona is a software company focused on building practical
                applications for the Shopify ecosystem.
            </p>

        </div>
    </section>


    <section id="contact" class="netbona-contact">
        <div class="netbona-container">

            <span class="netbona-eyebrow">Contact</span>

            <h2>Let's build better commerce.</h2>

            <p>
                Questions about Netbona or one of our products?
                Get in touch with our team.
            </p>

        </div>
    </section>

</main>

<?php
get_footer();
