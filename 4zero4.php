/**
 * Plugin Name: 4zero4
 * Plugin URI:  https://github.com/FabioIYT/4zero4
 * Description: Gestione pagina non trovata, effettua una ricerca cercando termini relativi alla pagina assente
 * Version:     1.0
 * Author:      DevFabio
 * Author URI:  https://www.inventyourtrade.it
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

add_action( 'wp', 'p4zero4_redirect' );
function p4zero4_redirect() {
	if ( is_404() ) {
		$paginaMancante = urldecode( str_replace( '-', ' ', $_SERVER['REDIRECT_URL'] ) );
		$ricerca        = get_search_link( $paginaMancante );

		wp_redirect( $ricerca, 301 );
		exit;

	}
}
