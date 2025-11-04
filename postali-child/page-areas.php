<?php
/**
 * Practice Areas Template
 * Template Name: Practice Areas
 *
 * @package Postali Parent
 * @author Postali LLC
**/
get_header(); ?>


<div id="practice-areas">
    <section id="areas-page-cta" class="cta-container" style="background-image: url(/wp-content/uploads/2019/04/about-header.jpg);">
        <div class="container">
            <div class="practice-areas-cta">
                <h1>Practice Areas</h1>
            </div>
        </div>
    </section>

    <section class="cta-container-cut">
    </section>

    <section class="information-accordions">
        <div class="accordions container">
            <div class="traditional-accordions-container">
                <div class="accordions_title"><h2>DUI Defense</h2><span></span></div>
                <div class="accordions_content">
                    <ul>
                        <?php
                        wp_list_pages( array(
                            'title_li'    => ' ',
                            'child_of'    => '109',
                            'show_date'   => 'modified',
                            'date_format' => $date_format
                        ) );
                        ?>
                    </ul>
                    <a title="DUI Defense" class="btn" href="/dui-defense/">Go To DUI Defense Page</a>
                </div>
            </div>

            <div class="traditional-accordions-container">
                <div class="accordions_title"><h2>PA Drug Crimes</h2><span></span></div>
                <div class="accordions_content">
                    <ul>
                        <?php
                        wp_list_pages( array(
                            'title_li'    => ' ',
                            'child_of'    => '140',
                            'show_date'   => 'modified',
                            'date_format' => $date_format
                        ) );
                        ?>
                    </ul>
                    <a title="Drug Crimes" class="btn" href="/drug-crimes/">Go To Drug Crimes Page</a>
                </div>
            </div>

            <div class="traditional-accordions-container">
                <div class="accordions_title"><h2>Weapons Crimes</h2><span></span></div>
                <div class="accordions_content">
                    <ul>
                        <?php
                        wp_list_pages( array(
                            'title_li'    => ' ',
                            'child_of'    => '210',
                            'show_date'   => 'modified',
                            'date_format' => $date_format
                        ) );
                        ?>
                    </ul>
                    <a title="Weapons Crime" class="btn" href="/weapons-defense/">Go To Weapons Crime Page</a>
                </div>
            </div>

            <div class="traditional-accordions-container">
                <div class="accordions_title"><h2>Violent Crime</h2><span></span></div>
                <div class="accordions_content">
                    <ul>
                        <?php
                        wp_list_pages( array(
                            'title_li'    => ' ',
                            'child_of'    => '230',
                            'show_date'   => 'modified',
                            'date_format' => $date_format
                        ) );
                        ?>
                    </ul>
                    <a title="Violent Crime" class="btn" href="/violent-crime/">Go To Violent Crime Page</a>
                </div>
            </div>

            <div class="traditional-accordions-container">
                <div class="accordions_title"><h2>Property Crimes</h2><span></span></div>
                <div class="accordions_content">
                    <ul>
                        <?php
                        wp_list_pages( array(
                            'title_li'    => ' ',
                            'child_of'    => '271',
                            'show_date'   => 'modified',
                            'date_format' => $date_format
                        ) );
                        ?>
                    </ul>
                    <a title="Property Crimes" class="btn" href="/property-crimes/">Go To Property Crimes Page</a>
                </div>
            </div>

            <div class="traditional-accordions-container">
                <div class="accordions_title"><h2>Theft Crime</h2><span></span></div>
                <div class="accordions_content">
                    <ul>
                        <?php
                        wp_list_pages( array(
                            'title_li'    => ' ',
                            'child_of'    => '288',
                            'show_date'   => 'modified',
                            'date_format' => $date_format
                        ) );
                        ?>
                    </ul>
                    <a title="Theft Crime" class="btn" href="/theft/">Go To Theft Crime Page</a>
                </div>
            </div>

            <div class="traditional-accordions-container">
                <div class="accordions_title"><h2>Federal Defense</h2><span></span></div>
                <div class="accordions_content">
                    <ul>
                        <?php
                        wp_list_pages( array(
                            'title_li'    => ' ',
                            'child_of'    => '299',
                            'show_date'   => 'modified',
                            'date_format' => $date_format
                        ) );
                        ?>
                    </ul>
                    <a title="Federal Defense" class="btn" href="/federal-defense/">Go To Federal Defense Page</a>
                </div>
            </div>

            <div class="traditional-accordions-container">
                <div class="accordions_title"><h2>Juvenile Defense</h2><span></span></div>
                <div class="accordions_content">
                    <ul>
                        <?php
                        wp_list_pages( array(
                            'title_li'    => ' ',
                            'child_of'    => '303',
                            'show_date'   => 'modified',
                            'date_format' => $date_format
                        ) );
                        ?>
                    </ul>
                    <a title="Juvenile Defense" class="btn" href="/juvenile-defense/">Go To Juvenile Defense Page</a>
                </div>
            </div>

            <div class="traditional-accordions-container">
                <div class="accordions_title"><h4>White Collar Crime</h4><span></span></div>
                <div class="accordions_content">
                    <ul>
                        <?php
                        wp_list_pages( array(
                            'title_li'    => ' ',
                            'child_of'    => '311',
                            'show_date'   => 'modified',
                            'date_format' => $date_format
                        ) );
                        ?>
                    </ul>
                    <a title="White Collar Crime" class="btn" href="/white-collar/">Go To White Collar Crime Page</a>
                </div>
            </div>

            <div class="traditional-accordions-container">
                <div class="accordions_title"><h2>Traffic Offenses</h2><span></span></div>
                <div class="accordions_content">
                    <ul>
                        <?php
                        wp_list_pages( array(
                            'title_li'    => ' ',
                            'child_of'    => '324',
                            'show_date'   => 'modified',
                            'date_format' => $date_format
                        ) );
                        ?>
                    </ul>
                    <a title="Traffic Offenses" class="btn" href="/traffic-offenses/">Go To Traffic Offenses Page</a>
                </div>
            </div>

            <div class="traditional-accordions-container">
                <div class="accordions_title"><h2>Criminal Process</h2><span></span></div>
                <div class="accordions_content">
                    <ul>
                        <?php
                        wp_list_pages( array(
                            'title_li'    => ' ',
                            'child_of'    => '87',
                            'show_date'   => 'modified',
                            'date_format' => $date_format
                        ) );
                        ?>
                    </ul>
                    <a title="DUI Defense" class="btn" href="/dui-defense/">Go To Criminal Process</a>
                </div>
            </div>

        </div>
    </section>

</div>





<?php get_footer(); ?>