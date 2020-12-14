<?php
 /* leaflet_map bb framework */

bt_bb_include_scripts_leaflet();

function bt_bb_include_scripts_leaflet() {
    
	/* js */
    wp_enqueue_script( 'bt_bb_framework-leaflet-js', plugin_dir_url( __FILE__ ) . 'leafletmap/lib/leaflet.js' );
    wp_enqueue_script( 'bt_bb_framework-leaflet-markercluster-js', plugin_dir_url( __FILE__ ) . 'leafletmap/lib/leaflet.markercluster.js' );
    wp_enqueue_script( 'bt_bb_framework-leaflet-ajax-min-js', plugin_dir_url( __FILE__ ) . 'leafletmap/lib/leaflet.ajax.min.js' ); 
    
	/* css */
    wp_enqueue_style( 'bt_bb_framework-lefflet-css', plugin_dir_url( __FILE__ ) . 'leafletmap/lib/leaflet.css', array(), false, 'screen');
    wp_enqueue_style( 'bt_bb_framework-markercluster-css', plugin_dir_url( __FILE__ ) . 'leafletmap/lib/MarkerCluster.css', array(), false, 'screen' );                 
    wp_enqueue_style( 'bt_bb_framework-markerclustee-default-css',  plugin_dir_url( __FILE__ ) . 'leafletmap/lib/MarkerCluster.Default.css', array(), false, 'screen' ); 

    /* map source */
    wp_enqueue_script( 'bt_bb_leafletmap-source-js', plugin_dir_url( __FILE__ ) . 'leafletmap/js/leafletmap-source.js' );
    
}